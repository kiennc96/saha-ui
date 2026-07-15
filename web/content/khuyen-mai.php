<?php
/** @var \Saha\View $view */
$view->render('breadcrumb', [
    'variant' => 'bar',
    'items' => [
        ['label' => 'Trang chủ', 'href' => 'index.php'],
        ['label' => 'Khuyến mãi'],
    ],
]);
?>

  <main>
    <section class="promo-hero"><div class="container hero-grid">
      <div><span class="eyebrow">🔥 ƯU ĐÃI ĐANG DIỄN RA</span><h1>Giá tốt cho mọi nhu cầu từ sửa chữa nhỏ đến công trình lớn</h1><p>Tổng hợp chương trình giảm giá theo sản phẩm, thương hiệu, combo, số lượng và từng giai đoạn. Mỗi ưu đãi có thời gian, điều kiện và hình thức áp dụng riêng.</p><div class="hero-actions"><a class="btn btn-primary" href="#dang-dien-ra">Xem ưu đãi hôm nay</a><a class="btn btn-outline-light" href="#lich">Xem lịch khuyến mãi</a></div></div>
      <div class="hero-visual"><div class="sale-disc"><div><strong>-30%</strong><span>ƯU ĐÃI<br>CÔNG TRÌNH</span></div></div><div class="floating-card fc1"><b>Freeship</b>Đơn từ 1.500.000đ</div><div class="floating-card fc2"><b>Giá sỉ</b>Từ 24 chai trở lên</div><div class="floating-card fc3"><b>Voucher</b>Đến 500.000đ</div></div>
    </div></section>

    <section class="benefit-strip"><div class="container benefit-grid">
      <div class="benefit"><div class="benefit-icon">%</div><div><b>Ưu đãi minh bạch</b><span>Hiển thị rõ thời gian và điều kiện</span></div></div>
      <div class="benefit"><div class="benefit-icon">⌛</div><div><b>Cập nhật theo thời gian</b><span>Đang diễn ra, sắp tới, đã kết thúc</span></div></div>
      <div class="benefit"><div class="benefit-icon">🏷</div><div><b>Nhiều hình thức</b><span>Giảm giá, voucher, quà tặng, combo</span></div></div>
      <div class="benefit"><div class="benefit-icon">▧</div><div><b>Hỗ trợ dự án</b><span>Báo giá riêng theo khối lượng</span></div></div>
    </section>

    <section class="section" id="dang-dien-ra"><div class="container">
      <div class="section-head"><div><h2 class="section-title">Chương trình nổi bật</h2><p class="section-sub">Ưu đãi có giới hạn thời gian hoặc số lượng.</p></div><div class="filter-tabs"><button class="filter-btn active" data-filter="all">Tất cả</button><button class="filter-btn" data-filter="live">Đang diễn ra</button><button class="filter-btn" data-filter="upcoming">Sắp diễn ra</button><button class="filter-btn" data-filter="ended">Đã kết thúc</button></div></div>

      <div class="countdown-banner promo-item" data-status="live">
        <div class="countdown-copy"><span class="flash">⚡ FLASH SALE 72 GIỜ</span><h2>Giảm đến 25% keo silicone bán chạy</h2><p>Áp dụng cho Apollo, Wacker, X'traseal và một số mã hàng được chọn. Số lượng ưu đãi có hạn.</p><div class="countdown" data-end="2026-07-18T23:59:59+07:00"><div class="time-box"><strong data-days>00</strong><span>Ngày</span></div><div class="time-box"><strong data-hours>00</strong><span>Giờ</span></div><div class="time-box"><strong data-minutes>00</strong><span>Phút</span></div><div class="time-box"><strong data-seconds>00</strong><span>Giây</span></div></div><a class="btn btn-primary" href="san-pham.php">Mua ngay</a></div>
        <div class="countdown-art"></div>
      </div>
    </div></section>

    <section class="section soft"><div class="container"><div class="program-grid" id="programGrid">
      <article class="program-card promo-item" data-status="live"><div class="program-img"><img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=800&q=82" alt="Ưu đãi công trình"><span class="status live">ĐANG DIỄN RA</span></div><div class="program-body"><span class="program-type">GIẢM THEO SỐ LƯỢNG</span><h3>Mua càng nhiều – giá càng tốt cho đội thợ và công trình</h3><p>Giảm theo mốc 24, 48 và 120 chai. Có chính sách riêng theo địa điểm giao hàng.</p><div class="date-row"><span>01/07 – 31/07/2026</span><b>Còn 16 ngày</b></div><a class="program-link" href="#bao-gia">Nhận báo giá →</a></div></article>
      <article class="program-card promo-item" data-status="live"><div class="program-img"><img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=82" alt="Tặng súng bắn keo"><span class="status live">ĐANG DIỄN RA</span></div><div class="program-body"><span class="program-type">QUÀ TẶNG KÈM</span><h3>Mua 12 chai silicone – tặng 01 súng bắn keo</h3><p>Áp dụng cho các mã hàng tham gia chương trình, quà tặng không quy đổi thành tiền.</p><div class="date-row"><span>10/07 – 25/07/2026</span><b>Còn 10 ngày</b></div><a class="program-link" href="san-pham.php">Xem sản phẩm →</a></div></article>
      <article class="program-card promo-item" data-status="upcoming"><div class="program-img"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=82" alt="Ngày hội thương hiệu"><span class="status upcoming">SẮP DIỄN RA</span></div><div class="program-body"><span class="program-type">NGÀY HỘI THƯƠNG HIỆU</span><h3>Apollo Brand Week – ưu đãi riêng toàn bộ dòng A-series</h3><p>Giảm trực tiếp, quà tặng kỹ thuật và mã freeship theo giá trị đơn hàng.</p><div class="date-row"><span>20/07 – 27/07/2026</span><b>Bắt đầu sau 5 ngày</b></div><a class="program-link" href="thuong-hieu.php">Xem thương hiệu →</a></div></article>
      <article class="program-card promo-item" data-status="live"><div class="program-img"><img src="https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=800&q=82" alt="Combo chống thấm"><span class="status live">ĐANG DIỄN RA</span></div><div class="program-body"><span class="program-type">COMBO GIẢI PHÁP</span><h3>Combo chống thấm ban công tiết kiệm 18%</h3><p>Bộ sản phẩm được gợi ý theo quy mô 10 m², 30 m² và 50 m².</p><div class="date-row"><span>05/07 – 05/08/2026</span><b>Còn 21 ngày</b></div><a class="program-link" href="ung-dung.php">Xem giải pháp →</a></div></article>
      <article class="program-card promo-item" data-status="upcoming"><div class="program-img"><img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=800&q=82" alt="Ưu đãi cuối tháng"><span class="status upcoming">SẮP DIỄN RA</span></div><div class="program-body"><span class="program-type">SALE CUỐI THÁNG</span><h3>Kho giá tốt – giảm sâu một số mã sắp đổi bao bì</h3><p>Chất lượng và hạn sử dụng bảo đảm; số lượng từng mã có giới hạn.</p><div class="date-row"><span>28/07 – 31/07/2026</span><b>Bắt đầu sau 13 ngày</b></div><a class="program-link" href="san-pham.php">Xem trước danh sách →</a></div></article>
      <article class="program-card promo-item" data-status="ended"><div class="program-img"><img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=800&q=82" alt="Chương trình đã kết thúc"><span class="status ended">ĐÃ KẾT THÚC</span></div><div class="program-body"><span class="program-type">ƯU ĐÃI KHAI TRƯƠNG</span><h3>Khai trương kho mới – giảm 15% đơn đầu tiên</h3><p>Chương trình dành cho khách hàng mới tại khu vực kho mới.</p><div class="date-row"><span>15/06 – 30/06/2026</span><span>Đã kết thúc</span></div><a class="program-link" href="#" onclick="showToast('Chương trình này đã kết thúc');return false">Xem thể lệ cũ →</a></div></article>
    </div></div></section>

    <section class="section"><div class="container"><div class="section-head"><div><h2 class="section-title">Mã giảm giá & voucher</h2><p class="section-sub">Sao chép mã và áp dụng tại giỏ hàng khi đáp ứng điều kiện.</p></div></div><div class="voucher-layout">
      <article class="voucher"><div class="voucher-left"><div><strong>50K</strong><span>ĐƠN TỪ 1 TRIỆU</span></div></div><div class="voucher-right"><h3>Giảm 50.000đ toàn cửa hàng</h3><p>Tối đa 01 lần mỗi tài khoản. Hết hạn 31/07/2026.</p><div class="voucher-code"><code>SAHA50K</code><button onclick="copyCode('SAHA50K')">Sao chép</button></div></div></article>
      <article class="voucher"><div class="voucher-left orange"><div><strong>FREE</strong><span>PHÍ GIAO HÀNG</span></div></div><div class="voucher-right"><h3>Miễn phí giao hàng nội thành</h3><p>Áp dụng đơn từ 1.500.000đ trong phạm vi hỗ trợ.</p><div class="voucher-code"><code>FREESHIP</code><button onclick="copyCode('FREESHIP')">Sao chép</button></div></div></article>
      <article class="voucher"><div class="voucher-left red"><div><strong>200K</strong><span>KHÁCH HÀNG MỚI</span></div></div><div class="voucher-right"><h3>Giảm 200.000đ đơn đầu tiên</h3><p>Đơn tối thiểu 3.000.000đ, không cộng dồn voucher khác.</p><div class="voucher-code"><code>WELCOME200</code><button onclick="copyCode('WELCOME200')">Sao chép</button></div></div></article>
      <article class="voucher"><div class="voucher-left"><div><strong>5%</strong><span>ĐƠN COMBO</span></div></div><div class="voucher-right"><h3>Giảm thêm 5% khi mua combo</h3><p>Áp dụng cho combo chống thấm và combo nhôm kính.</p><div class="voucher-code"><code>COMBO5</code><button onclick="copyCode('COMBO5')">Sao chép</button></div></div></article>
    </div></div></section>

    <section class="section soft"><div class="container"><div class="brand-campaign">
      <div class="brand-row"><div class="brand-logo">APOLLO</div><div><span class="program-type">CHIẾN DỊCH THƯƠNG HIỆU</span><h3>Apollo Brand Week 2026</h3><p>Ưu đãi theo từng dòng sản phẩm, quà tặng cho đội thợ và chính sách dự án riêng. Chương trình bắt đầu từ ngày 20/07/2026.</p></div><div class="brand-offer"><strong>ĐẾN 20%</strong><span>Và quà tặng theo số lượng</span><a class="program-link" href="thuong-hieu.php">Khám phá Apollo →</a></div></div>
    </div></div></section>

    <section class="section"><div class="container"><div class="section-head"><div><h2 class="section-title">Combo theo nhu cầu</h2><p class="section-sub">Thiết kế ưu đãi dưới dạng giải pháp thay vì chỉ giảm từng sản phẩm.</p></div></div><div class="combo-grid">
      <article class="combo-main"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1200&q=82" alt="Combo nhôm kính"><div class="combo-overlay"><span class="eyebrow">COMBO NHÔM KÍNH</span><h3>Đủ vật tư cho 01 đội thi công trong ngày</h3><p>Silicone trung tính, súng bắn keo, băng keo giấy và dụng cụ miết keo. Tiết kiệm đến 15% so với mua lẻ.</p><a class="btn btn-primary" style="align-self:flex-start" href="ung-dung.php">Xem chi tiết combo</a></div></article>
      <div class="combo-side"><article class="mini-combo"><div><span class="program-type">COMBO CHỐNG THẤM</span><h3>Ban công 30 m²</h3><strong>Tiết kiệm 18%</strong><p>Gồm keo xử lý khe, vật liệu chống thấm và phụ trợ.</p></div><div class="icon">☂</div></article><article class="mini-combo"><div><span class="program-type">COMBO CƠ KHÍ</span><h3>Bảo trì xưởng</h3><strong>Tặng 01 chai</strong><p>Keo khóa ren, keo dán nhanh và dung dịch vệ sinh.</p></div><div class="icon">⚙</div></article></div>
    </div></div></section>

    <section class="section soft" id="lich"><div class="container"><div class="section-head"><div><h2 class="section-title">Lịch khuyến mãi</h2><p class="section-sub">Giúp khách hàng chủ động lên kế hoạch mua hàng theo từng giai đoạn.</p></div></div>
      <div class="calendar"><div class="calendar-head"><div>Thời gian</div><div>Chương trình</div><div>Trạng thái</div></div>
        <div class="calendar-row"><div>10–18/07</div><div><b>Flash Sale silicone 72 giờ</b><br><small>Giảm trực tiếp một số mã bán chạy</small></div><div><span class="cal-status live">Đang diễn ra</span></div></div>
        <div class="calendar-row"><div>10–25/07</div><div><b>Mua 12 chai tặng súng bắn keo</b><br><small>Quà tặng có giới hạn số lượng</small></div><div><span class="cal-status live">Đang diễn ra</span></div></div>
        <div class="calendar-row"><div>20–27/07</div><div><b>Apollo Brand Week</b><br><small>Giảm giá, quà tặng và freeship</small></div><div><span class="cal-status upcoming">Sắp diễn ra</span></div></div>
        <div class="calendar-row"><div>28–31/07</div><div><b>Sale cuối tháng</b><br><small>Giá tốt cho mã sắp đổi bao bì</small></div><div><span class="cal-status upcoming">Sắp diễn ra</span></div></div>
        <div class="calendar-row"><div>15–30/06</div><div><b>Ưu đãi khai trương kho mới</b><br><small>Giảm 15% đơn đầu tiên</small></div><div><span class="cal-status ended">Đã kết thúc</span></div></div>
      </div>
    </div></section>

    <section class="section" id="faq"><div class="container"><h2 class="section-title">Câu hỏi về khuyến mãi</h2>
<?php
$view->render('faq-list', [
    'items' => [
        ['q' => 'Có thể dùng đồng thời nhiều mã giảm giá không?', 'a' => 'Mỗi đơn hàng thường chỉ áp dụng một mã giảm giá, trừ khi thể lệ chương trình ghi rõ được phép cộng dồn.', 'open' => true],
        ['q' => 'Giá sỉ có được áp dụng thêm voucher không?', 'a' => 'Tùy chương trình. Một số báo giá dự án đã là mức giá riêng nên không cộng thêm voucher bán lẻ.'],
        ['q' => 'Khuyến mãi có áp dụng cho tất cả màu và quy cách không?', 'a' => 'Không nhất thiết. Danh sách mã hàng, màu và quy cách áp dụng được ghi trong thể lệ từng chương trình.'],
        ['q' => 'Sản phẩm khuyến mãi có được xuất hóa đơn VAT không?', 'a' => 'Có. SAHA hỗ trợ xuất hóa đơn theo giá trị thực tế thanh toán và quy định hiện hành.'],
    ],
]);
?>
</div></section>

    <section class="section soft" id="bao-gia"><div class="container"><div class="cta"><div><h3>Khối lượng lớn cần chính sách riêng?</h3><p>Gửi danh sách sản phẩm, số lượng và địa điểm giao hàng để nhận báo giá tối ưu hơn chương trình bán lẻ.</p></div><button class="btn btn-primary" onclick="showToast('Đã ghi nhận yêu cầu báo giá dự án')">Nhận báo giá dự án</button></div></div></section>
  </main>