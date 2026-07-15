<?php
declare(strict_types=1);

require __DIR__ . '/includes/config.php';

$pageTitle = 'Tin tức & Hướng dẫn chọn keo | SAHA';
$pageDescription = 'Tin tức, hướng dẫn chọn keo, kiến thức thi công và cập nhật hoạt động từ Tổng kho keo dán SAHA.';
$activeNav = 'tin-tuc';
$pageCss = 'news.css';
$searchPlaceholder = 'Tìm bài viết, sản phẩm, hướng dẫn...';
$showSuggest = false;
$showFloatTools = false;
$extraJs = null;

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/danh-sach-tin-tuc.php';
require __DIR__ . '/includes/footer.php';
