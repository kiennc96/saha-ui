# SAHA UI (PHP)

Giao diện tĩnh SAHA, đã tách thành phần PHP dùng chung.

## Cấu trúc

```
web/
  includes/          # Thành phần dùng chung
    config.php       # Cấu hình & helpers
    head.php         # <head>, load CSS
    header.php       # Topbar + logo + search
    nav.php          # Menu / mega menu
    footer.php       # Footer + float tools + toast
  content/           # Nội dung riêng từng trang
  assets/css/        # CSS theo nhóm trang
  assets/js/         # chrome.js + JS riêng trang
  *.php              # Entry point từng trang
```

## Trang

| File | Mô tả |
|------|--------|
| `index.php` | Trang chủ |
| `san-pham.php` | Danh mục sản phẩm |
| `thuong-hieu.php` | Thương hiệu |
| `ung-dung.php` | Ứng dụng |
| `khuyen-mai.php` | Khuyến mãi |
| `danh-sach-tin-tuc.php` | Danh sách tin tức |
| `chi-tiet-tin-tuc.php` | Chi tiết tin tức |
| `chi-tiet-san-pham-apollo-a500.php` | Chi tiết sản phẩm |

## Chạy local

Cần PHP (Apache/Nginx hoặc built-in server):

```bash
cd web
php -S localhost:8080
```

Mở http://localhost:8080/index.php

## Thêm trang mới

1. Tạo `content/ten-trang.php` (chỉ phần nội dung giữa nav và footer)
2. Tạo `ten-trang.php`:

```php
<?php
require __DIR__ . '/includes/config.php';
$pageTitle = '...';
$pageDescription = '...';
$activeNav = 'san-pham'; // home | san-pham | thuong-hieu | ung-dung | khuyen-mai | tin-tuc
$pageCss = 'catalog.css'; // home | catalog | news | promo | pdp
$searchPlaceholder = '...';
$showSuggest = false;
$showFloatTools = true;
$extraJs = null; // hoặc 'ten-trang.js'
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/nav.php';
require __DIR__ . '/content/ten-trang.php';
require __DIR__ . '/includes/footer.php';
```
