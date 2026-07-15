<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Danh mục sản phẩm keo dán | SAHA',
        description: 'Danh mục sản phẩm keo silicone, keo xây dựng, keo công nghiệp tại Tổng kho keo dán SAHA.',
        activeNav: 'san-pham',
        pageCss: 'catalog.css',
        showFloatTools: true,
        extraJs: 'catalog-page.js',
    ),
    'content/san-pham.php'
);
