<main class="page-main"><?php
/** @var \Saha\View $view */
$view->render('breadcrumb', [
    'variant' => 'inline',
    'items' => [
        ['label' => 'Trang chủ', 'href' => 'index.php'],
        ['label' => 'Thương hiệu'],
    ],
]);
?><section class="category-hero" style="--hero-image:url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1600&q=80')"><div class="container category-hero-inner"><div><h1>Thương hiệu keo dán uy tín</h1><p>Tra cứu sản phẩm chính hãng theo nhà sản xuất, tài liệu kỹ thuật, nhóm ứng dụng và giải pháp thay thế tương đương.</p><div class="hero-chips"><span class="hero-chip">50+ thương hiệu</span><span class="hero-chip">Chứng từ rõ ràng</span><span class="hero-chip">Tư vấn tương đương</span><span class="hero-chip">Giá sỉ dự án</span></div></div></div></section>
<section class="page-section"><div class="container"><h2 class="page-title">Danh bạ thương hiệu</h2><p class="page-intro">Các thương hiệu nổi bật được phân nhóm theo thế mạnh và ứng dụng chính.</p><div class="brand-directory"><article class="brand-card"><div class="brand-logo">APOLLO</div><b>Silicone & sealant</b><p>Thương hiệu phổ biến cho nhôm kính và xây dựng.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">WACKER</div><b>Silicone cao cấp</b><p>Giải pháp silicone tiêu chuẩn quốc tế.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">LOCTITE</div><b>Keo công nghiệp</b><p>Khóa ren, giữ trục và kết dính kỹ thuật.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">BAMBOO</div><b>Silicone đa dụng</b><p>Dòng sản phẩm tối ưu chi phí thi công.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">ATM</div><b>Sơn xịt</b><p>Sơn acrylic và sơn chuyên dụng.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">X’TRASEAL</div><b>Keo trám đa năng</b><p>Giải pháp trám khe và kết dính xây dựng.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">SOUDAL</div><b>Foam & sealant</b><p>Bọt nở PU và vật liệu trám chuyên nghiệp.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">SIKA</div><b>Hóa chất xây dựng</b><p>Chống thấm, sửa chữa và kết dính công trình.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">3M</div><b>Giải pháp công nghiệp</b><p>Băng keo và vật liệu kết dính kỹ thuật.</p><a href="#brand-products">Xem sản phẩm →</a></article><article class="brand-card"><div class="brand-logo">DOWSIL</div><b>Silicone chuyên dụng</b><p>Giải pháp façade và kính kết cấu.</p><a href="#brand-products">Xem sản phẩm →</a></article></div></div></section>
<section class="page-section white"><div class="container"><div class="feature-banner"><div class="feature-banner-copy"><h2>So sánh sản phẩm giữa các thương hiệu</h2><p>Đội ngũ SAHA hỗ trợ đối chiếu thông số, thời gian khô, độ bám dính, độ co giãn và chi phí trên mỗi mét thi công.</p><a class="btn btn-primary" href="#consult">Yêu cầu bảng so sánh →</a></div><img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80" alt="Kho thương hiệu keo dán"></div></div></section>
<section class="page-section" id="brand-products"><div class="container"><h2 class="page-title">Sản phẩm tiêu biểu theo thương hiệu</h2><div class="catalog-products">
<?php
$catalogProducts = [
    [
        'dataProduct' => 'silicone apollo',
        'title' => 'Apollo Silicone A500',
        'image' => 'https://images.unsplash.com/photo-1583947215259-38e31be8751f?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Apollo Silicone A500',
        'metaHtml' => 'Keo silicone trung tính<br>Chai 300ml',
        'price' => '85.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'silicone wacker',
        'title' => 'Wacker GP-N',
        'image' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Wacker GP-N',
        'metaHtml' => 'Keo silicone đa năng<br>Chai 300ml',
        'price' => '120.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'congnghiep loctite',
        'title' => 'Loctite 243',
        'image' => 'https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Loctite 243',
        'metaHtml' => 'Keo khóa ren trung bình<br>Chai 50ml',
        'price' => '220.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'silicone bamboo',
        'title' => 'Bamboo A300',
        'image' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Bamboo A300',
        'metaHtml' => 'Keo silicone axit<br>Chai 300ml',
        'price' => '65.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'xaydung xtraseal',
        'title' => 'X’traseal MC-808',
        'image' => 'https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?auto=format&fit=crop&w=500&q=80',
        'alt' => 'X’traseal MC-808',
        'metaHtml' => 'Keo trám đa năng<br>Tuýp 450ml',
        'price' => '45.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'sonxit atm',
        'title' => 'Sơn xịt ATM',
        'image' => 'https://images.unsplash.com/photo-1571781926291-c477ebfd024b?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Sơn xịt ATM',
        'metaHtml' => 'Sơn acrylic<br>Chai 400ml',
        'price' => '25.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'foam soudal',
        'title' => 'Soudal PU Foam',
        'image' => 'https://images.unsplash.com/photo-1586864387967-d02ef85d93e8?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Soudal PU Foam',
        'metaHtml' => 'Foam bọt nở<br>Chai 750ml',
        'price' => '145.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
    [
        'dataProduct' => 'chongtham sigee',
        'title' => 'Keo chống thấm Sigee',
        'image' => 'https://images.unsplash.com/photo-1604709177225-055f99402ea3?auto=format&fit=crop&w=500&q=80',
        'alt' => 'Keo chống thấm Sigee',
        'metaHtml' => 'Keo trám chống thấm<br>Thùng 5kg',
        'price' => '590.000đ',
        'stock' => 'Còn hàng · Giao nhanh',
        'badges' => [
            ['label' => 'Bán chạy'],
            ['label' => 'Chính hãng', 'tone' => 'blue'],
        ],
    ],
];
foreach ($catalogProducts as $product) {
    $view->render('product-card', $product);
}
?>
</div></div></section>
<section class="page-section white"><div class="container"><h2 class="page-title">Quy trình chọn thương hiệu phù hợp</h2><div class="guide-steps"><div class="guide-step"><h3>Xác định yêu cầu kỹ thuật</h3><p>Vật liệu, tải trọng, độ co giãn, nhiệt độ và môi trường sử dụng.</p></div><div class="guide-step"><h3>Đối chiếu thông số</h3><p>So sánh TDS, tiêu chuẩn, thời gian đóng rắn và quy cách đóng gói.</p></div><div class="guide-step"><h3>Thử nghiệm mẫu</h3><p>Test độ bám dính và tương thích bề mặt trước khi triển khai diện rộng.</p></div><div class="guide-step"><h3>Chốt định mức & giá</h3><p>Tính lượng dùng, hao hụt, tiến độ giao và chi phí toàn dự án.</p></div></div></div></section>
<section class="page-section" id="faq"><div class="container"><h2 class="page-title">Câu hỏi thường gặp</h2>
<?php
$view->render('faq-list', [
    'items' => [
        ['q' => 'SAHA có phải nhà phân phối chính hãng không?', 'a' => 'SAHA cung cấp hàng có nguồn gốc rõ ràng và hỗ trợ chứng từ theo từng thương hiệu, sản phẩm và lô hàng.'],
        ['q' => 'Có thể nhận bảng giá theo từng thương hiệu không?', 'a' => 'Có. Khách hàng đại lý, dự án và nhà máy có thể yêu cầu bảng giá riêng theo thương hiệu và khối lượng.'],
        ['q' => 'Làm sao kiểm tra hàng chính hãng?', 'a' => 'Kiểm tra tem nhãn, mã lô, hạn sử dụng, quy cách đóng gói và chứng từ đi kèm. SAHA hỗ trợ đối chiếu khi cần.'],
        ['q' => 'Có sản phẩm thay thế tương đương giữa các hãng không?', 'a' => 'Có thể. Đội ngũ kỹ thuật sẽ so sánh công năng, tiêu chuẩn, thời gian khô và ngân sách để đề xuất lựa chọn tương đương.'],
    ],
]);
?>
</div></section><section class="page-section" id="consult"><div class="container"><div class="cta-strip"><div><h2>Cần bảng giá theo thương hiệu?</h2><p>Nhận danh mục sản phẩm, chính sách số lượng và tư vấn thay thế tương đương.</p></div><button class="btn" onclick="showToast('Đã ghi nhận yêu cầu bảng giá')">Nhận bảng giá →</button></div></div></section></main>