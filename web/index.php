<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'SAHA - Tổng kho keo dán',
        description: 'SAHA - Tổng kho keo dán, keo silicone, keo xây dựng và keo công nghiệp.',
        activeNav: 'home',
        pageCss: 'home.css',
        searchPlaceholder: 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)',
        showSuggest: true,
        showFloatTools: true,
        extraJs: 'index.js',
    ),
    'content/index.php'
);
