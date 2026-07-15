<?php
declare(strict_types=1);

namespace Saha\Http;

/**
 * HTTP GET đơn giản với timeout bắt buộc — không chặn vô hạn.
 * Dùng khi cần gọi API trong request ngắn; việc dài hãy enqueue job.
 */
final class CurlClient
{
    public function __construct(
        private readonly int $timeoutSeconds = 5,
        private readonly int $connectTimeoutSeconds = 2,
    ) {
    }

    /** @return array{ok:bool,status:int,body:string,error:?string} */
    public function get(string $url): array
    {
        $ch = curl_init($url);
        if ($ch === false) {
            return ['ok' => false, 'status' => 0, 'body' => '', 'error' => 'curl_init failed'];
        }

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT => $this->timeoutSeconds,
            CURLOPT_CONNECTTIMEOUT => $this->connectTimeoutSeconds,
        ]);

        $body = curl_exec($ch);
        $status = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        $error = curl_error($ch) ?: null;
        curl_close($ch);

        if ($body === false) {
            return ['ok' => false, 'status' => $status, 'body' => '', 'error' => $error];
        }

        return ['ok' => $status >= 200 && $status < 300, 'status' => $status, 'body' => (string) $body, 'error' => $error];
    }

    /**
     * GET nhiều URL song song (curl_multi) — mỗi handle cùng timeout.
     *
     * @param list<string> $urls
     * @return list<array{ok:bool,status:int,body:string,error:?string}>
     */
    public function getMany(array $urls): array
    {
        if ($urls === []) {
            return [];
        }

        $mh = curl_multi_init();
        $handles = [];

        foreach ($urls as $i => $url) {
            $ch = curl_init($url);
            if ($ch === false) {
                continue;
            }
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_TIMEOUT => $this->timeoutSeconds,
                CURLOPT_CONNECTTIMEOUT => $this->connectTimeoutSeconds,
            ]);
            curl_multi_add_handle($mh, $ch);
            $handles[$i] = $ch;
        }

        $running = null;
        do {
            $status = curl_multi_exec($mh, $running);
            if ($running) {
                curl_multi_select($mh, 0.1);
            }
        } while ($running && $status === CURLM_OK);

        $results = [];
        foreach ($handles as $i => $ch) {
            $body = curl_multi_getcontent($ch);
            $code = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
            $err = curl_error($ch) ?: null;
            $results[$i] = [
                'ok' => $body !== null && $code >= 200 && $code < 300,
                'status' => $code,
                'body' => (string) $body,
                'error' => $err,
            ];
            curl_multi_remove_handle($mh, $ch);
            curl_close($ch);
        }
        curl_multi_close($mh);

        ksort($results);
        return array_values($results);
    }
}
