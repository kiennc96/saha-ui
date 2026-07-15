<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Khuyến mãi & Ưu đãi công trình | SAHA';
$pageDescription = 'Tổng hợp chương trình khuyến mãi keo silicone, keo xây dựng, combo công trình, voucher và ưu đãi thương hiệu tại SAHA.';
$activeNav = 'khuyen-mai';
$pageCss = 'promo.css';
$searchPlaceholder = 'Tìm chương trình, mã giảm giá...';
$showSuggest = false;
$showFloatTools = false;
$extraJs = 'khuyen-mai.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/khuyen-mai.php';
require __DIR__ . '/includes/footer.php';
