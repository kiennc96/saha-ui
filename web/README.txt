# SAHA UI (PHP)

Giao diện SAHA — PHP + JS + CSS theo **một chuẩn chung** (để người khác tiếp tục được).

**Đọc trước khi sửa UI:** [`docs/UI-STANDARD.md`](docs/UI-STANDARD.md)

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
  src/                   # class PHP nhỏ
  includes/              # chrome + components/
  content/               # body từng trang (ghép component)
  docs/UI-STANDARD.md    # quy ước UI bắt buộc
  assets/css/            # tokens + chrome + domain
  assets/js/lib/         # JS theo nghiệp vụ
```

## Hướng visual (đã chốt)

- Chủ: Soft utilitarian · Trang chủ: + Bold brand · Tin: Editorial · PDP: Technical  
- Chi tiết: `docs/UI-STANDARD.md` + `.cursor/rules/visual-direction.mdc`

## Chuẩn làm việc (tóm tắt)

1. UI lặp → `$view->render()` + `includes/components/` (đã có breadcrumb, news-card, product-card, faq-list).
2. Style theo hướng visual + token / chrome / domain — không mỗi người một kiểu.
3. Không pha Bootstrap / Tailwind / framework khác khi chưa migrate cả repo.
4. JS mới → `assets/js/lib/`.

Chi tiết rules Cursor: `.cursor/rules/` — gồm SRP, UI consistency, modern UI/micro-interaction, a11y, responsive, performance, SEO, microcopy VI, form UX, design tokens, UI states, e-commerce UX, PR checklist.

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
