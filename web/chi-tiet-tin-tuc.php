<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Cách chọn keo silicone phù hợp theo từng vật liệu | SAHA',
        description: 'Hướng dẫn cách chọn keo silicone phù hợp theo vật liệu, môi trường và yêu cầu kỹ thuật.',
        activeNav: 'tin-tuc',
        pageCss: 'news.css',
        showFloatTools: false,
        extraJs: null,
    ),
    'content/chi-tiet-tin-tuc.php'
);
