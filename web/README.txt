# SAHA UI (PHP)

Giao diện SAHA — PHP + JS + CSS refactored theo Single Responsibility, class gắn kết, hàm test được, I/O không block.

## Chạy

```bash
cd web
php -S localhost:8080
```

Mở http://localhost:8080/index.php

## Cấu trúc

```
web/
  bootstrap.php          # autoload Saha\
  src/
    SiteConfig.php       # cấu hình inject được
    PageContext.php      # meta / flags từng trang
    Layout.php           # điều phối head→header→nav→content→footer
    NavState.php         # active nav
    Html.php / AssetUrl.php
    Http/CurlClient.php  # HTTP có timeout + getMany song song
  includes/              # partial view (không chứa logic)
  content/               # body riêng từng trang
  assets/
    css/
      tokens.css         # biến & reset
      chrome.css         # topbar/header/nav/footer/toast
      home|catalog|news|promo|pdp.css
    js/
      chrome.js          # Toast + MobileNav + MegaMenu
      lib/               # class/hàm domain nhỏ, test được
      index|catalog-page|khuyen-mai|… .js
```

## Rules áp dụng

| Rule | Cách làm trong code |
|------|---------------------|
| SRP | PHP class + JS `lib/*` mỗi file một việc; CSS tách tokens/chrome/page |
| Class gắn kết | `Toast`, `CountdownTicker`, `SiliconeCalculator`, `Layout`… — không god class |
| Test được | Core thuần (`estimateBottles`, `getRemainingMs`, `productMatchesFilters`); DOM/toast inject |
| Non-blocking | JS render trang chủ theo `requestAnimationFrame` queue; scroll passive; `CurlClient` timeout + multi |

## Thêm trang

```php
<?php
require __DIR__ . '/bootstrap.php';
use Saha\Layout;
use Saha\PageContext;

(new Layout($sahaConfig, __DIR__))->render(
    new PageContext(
        title: '...',
        description: '...',
        activeNav: 'san-pham',
        pageCss: 'catalog.css',
        extraJs: 'catalog-page.js',
    ),
    'content/ten-trang.php'
);
```
