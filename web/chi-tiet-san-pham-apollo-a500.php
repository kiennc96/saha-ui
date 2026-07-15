<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Apollo Silicone A500 chính hãng | SAHA',
        description: 'Apollo Silicone A500 keo silicone trung tính chính hãng, dùng cho nhôm kính và xây dựng. Xem thông số, ứng dụng, hướng dẫn thi công và nhận báo giá tại SAHA.',
        activeNav: 'san-pham',
        pageCss: 'pdp.css',
        showFloatTools: true,
        extraJs: 'chi-tiet-san-pham-apollo-a500.js',
    ),
    'content/chi-tiet-san-pham-apollo-a500.php'
);
