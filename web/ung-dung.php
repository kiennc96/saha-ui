<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Giải pháp keo dán theo ứng dụng | SAHA',
        description: 'Chọn keo theo ứng dụng nhôm kính, xây dựng, nội thất, cơ khí, quảng cáo, nhà máy và bảo trì.',
        activeNav: 'ung-dung',
        pageCss: 'catalog.css',
        showFloatTools: true,
        extraJs: 'catalog-page.js',
    ),
    'content/ung-dung.php'
);
