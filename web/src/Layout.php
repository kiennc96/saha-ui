<?php
declare(strict_types=1);

namespace Saha;

/**
 * Render layout: head → header → nav → content → footer.
 * Chỉ điều phối include — không chứa markup.
 */
final class Layout
{
    public function __construct(
        private readonly SiteConfig $config,
        private readonly string $webRoot,
    ) {
    }

    public function render(PageContext $page, string $contentRelativePath): void
    {
        $config = $this->config;
        $nav = new NavState($page->activeNav);
        $assets = new AssetUrl($config);
        $includes = $this->webRoot . DIRECTORY_SEPARATOR . 'includes';
        $contentFile = $this->webRoot . DIRECTORY_SEPARATOR . ltrim(
            str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $contentRelativePath),
            DIRECTORY_SEPARATOR
        );

        if (!is_file($contentFile)) {
            http_response_code(500);
            echo 'Content not found';
            return;
        }

        $showFloatTools = $page->showFloatTools;
        $extraJs = $page->extraJs;
        $extraCssFiles = $page->extraCssFiles;
        $extraJsFiles = $page->extraJsFiles;

        require $includes . DIRECTORY_SEPARATOR . 'head.php';
        require $includes . DIRECTORY_SEPARATOR . 'header.php';
        require $includes . DIRECTORY_SEPARATOR . 'nav.php';
        require $contentFile;
        require $includes . DIRECTORY_SEPARATOR . 'footer.php';
    }
}
