<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Danh mục sản phẩm keo dán | SAHA';
$pageDescription = 'Danh mục keo silicone, keo xây dựng, keo công nghiệp, chống thấm, foam và phụ trợ chính hãng.';
$activeNav = 'san-pham';
$pageCss = 'catalog.css';
$searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)';
$showSuggest = false;
$showFloatTools = true;
$extraJs = 'san-pham.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/san-pham.php';
require __DIR__ . '/includes/footer.php';
