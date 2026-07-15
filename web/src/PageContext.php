<?php
declare(strict_types=1);

namespace Saha;

/**
 * Context render một trang — không dùng global rải rác.
 */
final class PageContext
{
    /** @param list<string> $extraCssFiles */
    /** @param list<string> $extraJsFiles */
    public function __construct(
        public readonly string $title,
        public readonly string $description,
        public readonly string $activeNav,
        public readonly string $pageCss,
        public readonly string $searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)',
        public readonly bool $showSuggest = false,
        public readonly bool $showFloatTools = true,
        public readonly ?string $extraJs = null,
        public readonly array $extraCssFiles = [],
        public readonly array $extraJsFiles = [],
    ) {
    }
}
