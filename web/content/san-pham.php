<main class="page-main"><?php
/** @var \Saha\View $view */
$view->render('breadcrumb', [
    'variant' => 'inline',
    'items' => [
        ['label' => 'Trang chủ', 'href' => 'index.php'],
        ['label' => 'Sản phẩm'],
    ],
]);
?>
<section class="category-hero" style="--hero-image:url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1600&q=80')"><div class="container category-hero-inner"><div><h1>Danh mục sản phẩm keo dán</h1><p>Hệ sinh thái hơn 20.000 sản phẩm chính hãng cho nhôm kính, xây dựng, nội thất, cơ khí và sản xuất công nghiệp. Lọc nhanh theo loại keo, thương hiệu và nhu cầu thi công.</p><div class="hero-chips"><span class="hero-chip">100% chính hãng</span><span class="hero-chip">Có sẵn CO/CQ</span><span class="hero-chip">Báo giá dự án</span><span class="hero-chip">Giao toàn quốc</span></div></div></div></section>
<section class="page-section"><div class="container"><h2 class="page-title">Danh mục con</h2><p class="page-intro">Khám phá theo nhóm công năng để tìm đúng sản phẩm nhanh hơn.</p><div class="subcat-grid"><article class="subcat-card"><div class="subcat-icon">🧴</div><h3>Keo silicone</h3><p>Trám khe, lắp kính, chống thấm và hoàn thiện nội ngoại thất.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">🏗</div><h3>Keo xây dựng</h3><p>Kết dính vật liệu, dán tấm, neo cấy và thi công công trình.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">⚙</div><h3>Keo công nghiệp</h3><p>Khóa ren, giữ trục, dán nhanh, epoxy và xử lý kỹ thuật.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">💧</div><h3>Keo chống thấm</h3><p>Giải pháp trám khe, chống dột và bảo vệ bề mặt.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">🎨</div><h3>Sơn xịt</h3><p>Sơn acrylic, sơn chịu nhiệt, sơn lót và sơn chuyên dụng.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">☁</div><h3>Foam / PU</h3><p>Bọt nở lấp khe, cách âm, cách nhiệt và cố định khung.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">🧰</div><h3>Phụ trợ thi công</h3><p>Súng bắn keo, vòi keo, dung môi và dụng cụ vệ sinh.</p><a href="#catalog">Xem sản phẩm →</a></article><article class="subcat-card"><div class="subcat-icon">📦</div><h3>Combo công trình</h3><p>Bộ sản phẩm tối ưu theo hạng mục và khối lượng thi công.</p><a href="#catalog">Xem sản phẩm →</a></article></div></div></section>
<section class="page-section white"><div class="container"><div class="feature-banner"><div class="feature-banner-copy"><h2>Không chắc nên dùng loại keo nào?</h2><p>Gửi hình ảnh bề mặt, vật liệu và điều kiện thi công. Kỹ thuật SAHA sẽ đề xuất sản phẩm, định mức và quy trình sử dụng phù hợp.</p><a class="btn btn-primary" href="#consult">Nhận tư vấn kỹ thuật →</a></div><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=900&q=80" alt="Tư vấn kỹ thuật công trình"></div></div></section>
<section class="page-section" id="catalog"><div class="container"><h2 class="page-title">Sản phẩm nổi bật</h2><p class="page-intro">Danh sách mẫu có thể kết nối dữ liệu WooCommerce và bộ lọc thực tế ở bước triển khai backend.</p><div class="content-layout"><aside class="filter-panel"><h3>Bộ lọc sản phẩm</h3><div class="filter-group"><strong>Loại sản phẩm</strong><label class="check"><input data-filter type="checkbox" value="silicone"> Keo silicone</label><label class="check"><input data-filter type="checkbox" value="congnghiep"> Keo công nghiệp</label><label class="check"><input data-filter type="checkbox" value="chongtham"> Keo chống thấm</label><label class="check"><input data-filter type="checkbox" value="sonxit"> Sơn xịt</label><label class="check"><input data-filter type="checkbox" value="foam"> Foam / PU</label></div><div class="filter-group"><strong>Thương hiệu</strong><label class="check"><input data-filter type="checkbox" value="apollo"> Apollo</label><label class="check"><input data-filter type="checkbox" value="wacker"> Wacker</label><label class="check"><input data-filter type="checkbox" value="loctite"> Loctite</label><label class="check"><input data-filter type="checkbox" value="bamboo"> Bamboo</label></div></aside><div><div class="toolbar"><span>Hiển thị <b>8 sản phẩm</b></span><select><option>Sắp xếp nổi bật</option><option>Giá tăng dần</option><option>Giá giảm dần</option><option>Mới nhất</option></select></div><div class="catalog-products">
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
</div></div></div></div></section>
<section class="page-section white"><div class="container"><h2 class="page-title">Lý do khách hàng chọn SAHA</h2><div class="benefit-grid"><div class="benefit"><div class="benefit-icon">✓</div><b>Chính hãng, rõ nguồn gốc</b><span>Hỗ trợ hóa đơn VAT, CO/CQ và tài liệu kỹ thuật theo sản phẩm.</span></div><div class="benefit"><div class="benefit-icon">⚙</div><b>Tư vấn đúng ứng dụng</b><span>Đề xuất loại keo theo vật liệu, môi trường, tải trọng và yêu cầu thi công.</span></div><div class="benefit"><div class="benefit-icon">▦</div><b>Tồn kho số lượng lớn</b><span>Đáp ứng đơn hàng công trình, đại lý và nhà máy trên toàn quốc.</span></div><div class="benefit"><div class="benefit-icon">🚚</div><b>Giao hàng linh hoạt</b><span>Giao nhanh nội thành và hỗ trợ vận chuyển liên tỉnh an toàn.</span></div></div></div></section>
<section class="page-section" id="faq"><div class="container"><h2 class="page-title">Câu hỏi thường gặp</h2>
<?php
$view->render('faq-list', [
    'items' => [
        ['q' => 'Nên chọn keo silicone axit hay trung tính?', 'a' => 'Keo axit phù hợp kính và bề mặt không nhạy cảm; keo trung tính phù hợp nhôm, đá, bê tông và nhiều bề mặt cần hạn chế ăn mòn.'],
        ['q' => 'Một chai silicone 300ml thi công được bao nhiêu mét?', 'a' => 'Tùy kích thước đường keo. Với đường keo khoảng 5 x 5 mm, một chai thường thi công được xấp xỉ 10–12 mét.'],
        ['q' => 'SAHA có xuất hóa đơn VAT và báo giá dự án không?', 'a' => 'Có. SAHA hỗ trợ hóa đơn VAT, báo giá theo khối lượng, tư vấn định mức và giao hàng toàn quốc.'],
        ['q' => 'Làm sao để chọn đúng keo cho vật liệu?', 'a' => 'Hãy xác định vật liệu, môi trường sử dụng, độ co giãn, nhiệt độ và yêu cầu chịu lực. Đội ngũ kỹ thuật có thể tư vấn theo từng hạng mục.'],
    ],
]);
?>
</div></section>
<section class="page-section" id="consult"><div class="container"><div class="cta-strip"><div><h2>Cần báo giá sản phẩm hoặc dự án?</h2><p>Gửi nhu cầu để nhận tư vấn và bảng giá phù hợp trong thời gian sớm nhất.</p></div><button class="btn" onclick="showToast('Đã ghi nhận yêu cầu báo giá')">Nhận báo giá ngay →</button></div></div></section></main>