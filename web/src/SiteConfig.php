<?php
declare(strict_types=1);

namespace Saha;

/**
 * Cấu hình site — inject được, không hard-code trong hàm nghiệp vụ.
 */
final class SiteConfig
{
    public function __construct(
        public readonly string $siteName = 'SAHA',
        public readonly string $hotlineHn = '0976 21 21 71',
        public readonly string $hotlineHcm = '0976 79 36 69',
        public readonly string $email = 'info@saha.com',
        public readonly int $year = 2026,
        public readonly string $assetBase = 'assets',
    ) {
    }

    public static function default(): self
    {
        return new self();
    }
}
