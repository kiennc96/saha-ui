<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Thương hiệu keo dán chính hãng | SAHA';
$pageDescription = 'Tra cứu thương hiệu Apollo, Wacker, Loctite, Bamboo, ATM, Soudal, Sika và nhiều hãng keo dán chính hãng.';
$activeNav = 'thuong-hieu';
$pageCss = 'catalog.css';
$searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)';
$showSuggest = false;
$showFloatTools = true;
$extraJs = 'thuong-hieu.js';

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/thuong-hieu.php';
require __DIR__ . '/includes/footer.php';
