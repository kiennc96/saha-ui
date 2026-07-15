# Chuẩn UI SAHA — để người khác tiếp tục được

## Vì sao có tài liệu này

Tránh tình trạng mỗi người một kiểu CSS / HTML. **Một quy ước** — đã ghi trong `.cursor/rules/ui-consistency.mdc`.

## Stack đã chốt

```
PHP components  →  tokens + chrome + CSS theo domain
JS lib nhỏ      →  page chỉ gắn sự kiện
```

Không dùng Bootstrap / Tailwind / shadcn trong giai đoạn này (trừ khi team quyết định migrate cả repo).

## Thư mục

```
includes/
  header.php, nav.php, footer.php, head.php
  components/               # UI tái sử dụng (bắt buộc dùng khi đã có)
    breadcrumb.php
    news-card.php
    product-card.php
    faq-list.php
content/                    # ghép trang qua $view->render(...)
assets/css/                 # tokens + chrome + domain trang
assets/js/lib/
```

## Component sẵn có

Gọi qua `$view` (Layout đã inject vào mọi trang):

```php
$view->render('breadcrumb', [
    'variant' => 'bar', // hoặc 'inline' (catalog)
    'items' => [
        ['label' => 'Trang chủ', 'href' => 'index.php'],
        ['label' => 'Tin tức'],
    ],
]);

$view->render('news-card', [
    'href' => 'chi-tiet-tin-tuc.php',
    'image' => '...',
    'alt' => '...',
    'pill' => 'HƯỚNG DẪN',
    'title' => '...',
    'excerpt' => '...',
    'meta' => ['06/07/2026', '8 phút đọc'],
]);

$view->render('product-card', [
    'title' => 'Apollo Silicone A500',
    'image' => '...',
    'alt' => '...',
    'metaHtml' => 'Keo silicone<br>300ml',
    'price' => '85.000đ',
    'stock' => 'Còn hàng · Giao nhanh',
    'dataProduct' => 'silicone apollo',
    'badges' => [
        ['label' => 'Bán chạy'],
        ['label' => 'Chính hãng', 'tone' => 'blue'],
    ],
]);

$view->render('faq-list', [
    'items' => [
        ['q' => 'Câu hỏi?', 'a' => 'Trả lời.', 'open' => true],
        ['q' => '...', 'a' => '...'],
    ],
]);
```

## Quy tắc vàng

1. **Copy UI 2 lần → tách component.**
2. **Đã có component ở trên → không viết lại HTML tay.**
3. **Màu / spacing mới → token trong `tokens.css`.**
4. **Sửa một chỗ, mọi trang ăn theo.**
5. **Không pha framework.**

## Thêm component mới

1. `includes/components/ten-khoi.php`
2. Style: file domain hiện có hoặc `assets/css/components/ten-khoi.css`
3. Dùng `$view->render('ten-khoi', [...])` trong `content/`
4. Cập nhật danh sách trong file này
5. JS (nếu có) → `assets/js/lib/`
