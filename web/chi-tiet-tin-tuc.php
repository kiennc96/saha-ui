<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Cách chọn keo silicone phù hợp theo từng vật liệu | SAHA';
$pageDescription = 'Hướng dẫn cách chọn keo silicone phù hợp theo vật liệu, môi trường và yêu cầu kỹ thuật.';
$activeNav = 'tin-tuc';
$pageCss = 'news.css';
$searchPlaceholder = 'Tìm bài viết, sản phẩm, hướng dẫn...';
$showSuggest = false;
$showFloatTools = false;
$extraJs = null;

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/chi-tiet-tin-tuc.php';
require __DIR__ . '/includes/footer.php';
