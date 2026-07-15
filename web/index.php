<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'SAHA - Tổng kho keo dán';
$pageDescription = 'SAHA - Tổng kho keo dán, keo silicone, keo xây dựng và keo công nghiệp.';
$activeNav = 'home';
$pageCss = 'home.css';
$searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)';
$showSuggest = true;
$showFloatTools = true;
$extraJs = 'index.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/index.php';
require __DIR__ . '/includes/footer.php';
