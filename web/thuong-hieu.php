<?php
declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use Saha\Layout;
use Saha\PageContext;

$layout = new Layout($sahaConfig, __DIR__);
$layout->render(
    new PageContext(
        title: 'Thương hiệu keo dán chính hãng | SAHA',
        description: 'Tra cứu thương hiệu Apollo, Wacker, Loctite, Bamboo, ATM, Soudal, Sika và nhiều hãng keo dán chính hãng.',
        activeNav: 'thuong-hieu',
        pageCss: 'catalog.css',
        showFloatTools: true,
        extraJs: 'catalog-page.js',
    ),
    'content/thuong-hieu.php'
);
