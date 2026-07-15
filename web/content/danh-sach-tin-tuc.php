<?php
declare(strict_types=1);

/** @var \Saha\View $view */

$view->render('breadcrumb', [
    'variant' => 'bar',
    'items' => [
        ['label' => 'Trang chủ', 'href' => 'index.php'],
        ['label' => 'Tin tức'],
    ],
]);
?>

<section class="hero"><div class="container hero-grid"><div><span class="pill" style="background:rgba(255,255,255,.16);color:#fff">TRUNG TÂM KIẾN THỨC SAHA</span><h1>Tin tức, hướng dẫn và kinh nghiệm chọn keo</h1><p>Cập nhật kiến thức thi công, cách chọn đúng sản phẩm, xu hướng vật liệu và hoạt động mới nhất từ hệ thống SAHA.</p></div><div class="hero-card"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=1000&q=80" alt="Tin tức ngành xây dựng"></div></div></section>

<nav class="tabs"><div class="container"><a href="#" class="active">Tất cả</a><a href="#guide">Hướng dẫn chọn keo</a><a href="#tech">Kiến thức kỹ thuật</a><a href="#company">Tin SAHA</a><a href="#market">Thị trường</a><a href="#case">Công trình thực tế</a></div></nav>

<section class="section"><div class="container"><h2 class="section-title">Tin nổi bật</h2><div class="featured-grid">
  <a class="feature-main" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1200&q=82" alt="Chọn keo silicone phù hợp"><div class="overlay"><span class="tag">Hướng dẫn</span><h2>Cách chọn keo silicone phù hợp theo từng vật liệu và môi trường sử dụng</h2><p>Phân biệt silicone axit, trung tính và kết cấu để tránh chọn sai sản phẩm cho công trình.</p></div></a>
  <a class="feature-small" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=700&q=80" alt="Keo chống thấm"><div class="overlay"><span class="tag">Kỹ thuật</span><h3>5 lỗi thường gặp khi thi công keo chống thấm</h3></div></a>
  <a class="feature-small" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=700&q=80" alt="Kho hàng SAHA"><div class="overlay"><span class="tag">Tin SAHA</span><h3>SAHA mở rộng kho hàng và năng lực giao nhanh</h3></div></a>
  <a class="feature-small" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=700&q=80" alt="Nhôm kính"><div class="overlay"><span class="tag">Ứng dụng</span><h3>Định mức silicone cho cửa nhôm kính</h3></div></a>
  <a class="feature-small" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=700&q=80" alt="Keo công nghiệp"><div class="overlay"><span class="tag">Công nghiệp</span><h3>Chọn keo khóa ren đúng cấp độ bám dính</h3></div></a>
</div></div></section>

<section class="section soft" id="guide"><div class="container content-layout"><main><h2 class="section-title">Bài viết mới nhất</h2><div class="news-list">
<?php
$newsCards = [
    [
        'href' => 'chi-tiet-tin-tuc.php',
        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=700&q=80',
        'alt' => 'Chọn keo silicone',
        'pill' => 'HƯỚNG DẪN CHỌN KEO',
        'title' => 'Cách chọn keo silicone phù hợp theo từng vật liệu',
        'excerpt' => 'Hướng dẫn nhận biết loại keo, vật liệu tương thích, môi trường sử dụng và các tiêu chí cần kiểm tra trước khi mua.',
        'meta' => ['06/07/2026', '8 phút đọc', '1.240 lượt xem'],
    ],
    [
        'id' => 'tech',
        'href' => 'chi-tiet-tin-tuc.php',
        'image' => 'https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?auto=format&fit=crop&w=700&q=80',
        'alt' => 'Thi công keo chống thấm',
        'pill' => 'KIẾN THỨC KỸ THUẬT',
        'title' => '5 lỗi khiến đường keo chống thấm nhanh bong tróc',
        'excerpt' => 'Từ khâu vệ sinh bề mặt, thiết kế khe cho đến thời gian chờ lưu hóa: những lỗi nhỏ có thể làm giảm đáng kể tuổi thọ mối nối.',
        'meta' => ['04/07/2026', '6 phút đọc'],
    ],
    [
        'id' => 'company',
        'href' => 'chi-tiet-tin-tuc.php',
        'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?auto=format&fit=crop&w=700&q=80',
        'alt' => 'Kho SAHA',
        'pill' => 'TIN SAHA',
        'title' => 'SAHA mở rộng năng lực kho vận và giao hàng toàn quốc',
        'excerpt' => 'Hệ thống kho mới giúp tăng lượng hàng sẵn có, tối ưu thời gian xử lý đơn và hỗ trợ tốt hơn cho khách hàng công trình.',
        'meta' => ['01/07/2026', '4 phút đọc'],
    ],
    [
        'id' => 'market',
        'href' => 'chi-tiet-tin-tuc.php',
        'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=700&q=80',
        'alt' => 'Xu hướng xây dựng',
        'pill' => 'THỊ TRƯỜNG',
        'title' => 'Xu hướng vật liệu trám kín hiệu suất cao trong xây dựng hiện đại',
        'excerpt' => 'Các công trình ngày càng ưu tiên vật liệu có độ bền thời tiết, ít phát thải và tương thích nhiều bề mặt.',
        'meta' => ['28/06/2026', '7 phút đọc'],
    ],
    [
        'id' => 'case',
        'href' => 'chi-tiet-tin-tuc.php',
        'image' => 'https://images.unsplash.com/photo-1511818966892-d7d671e672a2?auto=format&fit=crop&w=700&q=80',
        'alt' => 'Công trình nhôm kính',
        'pill' => 'CÔNG TRÌNH THỰC TẾ',
        'title' => 'Giải pháp silicone cho hệ cửa nhôm kính tại công trình dân dụng',
        'excerpt' => 'Phân tích cách lựa chọn màu, định mức và quy trình thi công để đường keo đạt thẩm mỹ và độ bền lâu dài.',
        'meta' => ['24/06/2026', '9 phút đọc'],
    ],
];
foreach ($newsCards as $card) {
    $view->render('news-card', $card);
}
?>
</div><div class="pagination"><a href="#">‹</a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">›</a></div></main>
<aside>
  <div class="sidebar-box"><h3>Chuyên mục</h3><div class="category-list"><a href="#guide"><span>Hướng dẫn chọn keo</span><b>24</b></a><a href="#tech"><span>Kiến thức kỹ thuật</span><b>18</b></a><a href="#company"><span>Tin SAHA</span><b>12</b></a><a href="#market"><span>Thị trường</span><b>9</b></a><a href="#case"><span>Công trình thực tế</span><b>15</b></a></div></div>
  <div class="sidebar-box"><h3>Đọc nhiều</h3>
    <a class="mini-news" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=300&q=75" alt=""><b>Keo silicone bao lâu thì khô hoàn toàn?</b></a>
    <a class="mini-news" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=300&q=75" alt=""><b>Cách đọc thông số kỹ thuật trên chai keo</b></a>
    <a class="mini-news" href="chi-tiet-tin-tuc.php"><img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=300&q=75" alt=""><b>Phân biệt keo xây dựng và keo công nghiệp</b></a>
  </div>
  <div class="newsletter"><h3>Nhận bản tin kỹ thuật</h3><p>Bài viết mới, tài liệu thi công và ưu đãi dành cho đội thợ.</p><input placeholder="Email của bạn"><button onclick="showToast('Đăng ký nhận bản tin thành công')">Đăng ký ngay</button></div>
</aside></div></section>
