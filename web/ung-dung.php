<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Giải pháp keo dán theo ứng dụng | SAHA';
$pageDescription = 'Chọn keo theo ứng dụng nhôm kính, xây dựng, nội thất, cơ khí, quảng cáo, nhà máy và bảo trì.';
$activeNav = 'ung-dung';
$pageCss = 'catalog.css';
$searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)';
$showSuggest = false;
$showFloatTools = true;
$extraJs = 'ung-dung.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/ung-dung.php';
require __DIR__ . '/includes/footer.php';
