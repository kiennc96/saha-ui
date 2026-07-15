<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Tin tức & Hướng dẫn chọn keo | SAHA',
        description: 'Tin tức, hướng dẫn chọn keo, kiến thức thi công và cập nhật hoạt động từ Tổng kho keo dán SAHA.',
        activeNav: 'tin-tuc',
        pageCss: 'news.css',
        showFloatTools: false,
        extraJs: null,
    ),
    'content/danh-sach-tin-tuc.php'
);
