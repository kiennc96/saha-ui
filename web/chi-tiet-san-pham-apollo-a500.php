<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Apollo Silicone A500 chính hãng | SAHA';
$pageDescription = 'Apollo Silicone A500 keo silicone trung tính chính hãng, dùng cho nhôm kính và xây dựng. Xem thông số, ứng dụng, hướng dẫn thi công và nhận báo giá tại SAHA.';
$activeNav = 'san-pham';
$pageCss = 'pdp.css';
$searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)';
$showSuggest = false;
$showFloatTools = true;
$extraJs = 'chi-tiet-san-pham-apollo-a500.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/chi-tiet-san-pham-apollo-a500.php';
require __DIR__ . '/includes/footer.php';
