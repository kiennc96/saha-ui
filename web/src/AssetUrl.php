<?php
declare(strict_types=1);

namespace Saha;

/** Tạo URL asset từ config — không gắn cứng "assets/". */
final class AssetUrl
{
    public function __construct(private readonly SiteConfig $config)
    {
    }

    public function path(string $relative): string
    {
        return rtrim($this->config->assetBase, '/') . '/' . ltrim($relative, '/');
    }
}
