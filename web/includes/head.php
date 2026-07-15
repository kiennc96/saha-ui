<?php
declare(strict_types=1);

/** @var \Saha\SiteConfig $config */
/** @var \Saha\PageContext $page */
/** @var \Saha\AssetUrl $assets */
/** @var list<string> $extraCssFiles */

?><!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="<?= \Saha\Html::e($page->description) ?>">
  <title><?= \Saha\Html::e($page->title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= \Saha\Html::e($assets->path('css/tokens.css')) ?>">
  <link rel="stylesheet" href="<?= \Saha\Html::e($assets->path('css/chrome.css')) ?>">
  <link rel="stylesheet" href="<?= \Saha\Html::e($assets->path('css/' . $page->pageCss)) ?>">
  <?php foreach ($extraCssFiles as $cssFile): ?>
  <link rel="stylesheet" href="<?= \Saha\Html::e($assets->path('css/' . $cssFile)) ?>">
  <?php endforeach; ?>
</head>
<body>
