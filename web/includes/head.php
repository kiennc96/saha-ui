<?php
declare(strict_types=1);
/** @var string $pageTitle */
/** @var string $pageDescription */
/** @var string $pageCss */
/** @var bool $showSuggest */
if (!isset($pageTitle)) {
    $pageTitle = SAHA_SITE_NAME;
}
if (!isset($pageDescription)) {
    $pageDescription = '';
}
if (!isset($pageCss)) {
    $pageCss = 'home.css';
}
if (!isset($showSuggest)) {
    $showSuggest = false;
}
if (!isset($showFloatTools)) {
    $showFloatTools = true;
}
if (!isset($searchPlaceholder)) {
    $searchPlaceholder = 'Bạn cần tìm keo gì? (Ví dụ: Silicone, Apollo, X\'traseal...)';
}
if (!isset($extraJs)) {
    $extraJs = null;
}
?><!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?= saha_e($pageDescription) ?>">
  <title><?= saha_e($pageTitle) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= saha_e(saha_asset('css/' . $pageCss)) ?>">
</head>
<body>
