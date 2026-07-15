<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Khuyến mãi & Ưu đãi công trình | SAHA',
        description: 'Tổng hợp chương trình khuyến mãi keo silicone, keo xây dựng, combo công trình, voucher và ưu đãi thương hiệu tại SAHA.',
        activeNav: 'khuyen-mai',
        pageCss: 'promo.css',
        showFloatTools: false,
        extraJs: 'khuyen-mai.js',
    ),
    'content/khuyen-mai.php'
);
