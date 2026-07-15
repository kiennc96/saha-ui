<?php
declare(strict_types=1);
/** Menu điều hướng chính — mega menu dùng chung mọi trang */
?>
  <nav class="nav" id="mainNav">
    <div class="container nav-inner">
      <div class="categories-trigger">☰ &nbsp; DANH MỤC SẢN PHẨM
        <div class="mega">
          <div><h4>Keo silicone</h4><a href="san-pham.php">Silicone trung tính</a><a href="san-pham.php">Silicone axit</a><a href="san-pham.php">Silicone chống cháy</a></div>
          <div><h4>Keo công nghiệp</h4><a href="san-pham.php">Keo AB</a><a href="san-pham.php">Keo khóa ren</a><a href="san-pham.php">Keo kết cấu</a></div>
          <div><h4>Ứng dụng</h4><a href="ung-dung.php">Nhôm kính</a><a href="ung-dung.php">Xây dựng</a><a href="ung-dung.php">Nội thất</a></div>
          <div><h4>Thương hiệu</h4><a href="thuong-hieu.php">Apollo</a><a href="thuong-hieu.php">Loctite</a><a href="thuong-hieu.php">Wacker</a></div>
        </div>
      </div>
      <div class="nav-links">
        <div class="nav-menu-item<?= saha_nav_active('san-pham') ?>">
          <button class="nav-menu-button" type="button" aria-expanded="false">Sản phẩm <span class="nav-caret">⌄</span></button>
          <div class="nav-mega">
            <div>
              <h4>Theo nhóm sản phẩm</h4>
              <a href="san-pham.php">Keo silicone</a>
              <a href="san-pham.php">Keo xây dựng</a>
              <a href="san-pham.php">Keo công nghiệp</a>
              <a href="san-pham.php">Keo chống thấm</a>
            </div>
            <div>
              <h4>Sản phẩm chuyên dụng</h4>
              <a href="san-pham.php">Keo khóa ren</a>
              <a href="san-pham.php">Sơn xịt</a>
              <a href="san-pham.php">Foam / PU</a>
              <a href="san-pham.php">Phụ trợ thi công</a>
            </div>
            <div class="nav-mega-feature">
              <strong>Danh mục sản phẩm</strong>
              <p>Xem toàn bộ sản phẩm, bộ lọc theo loại keo, dung tích, màu sắc và mục đích sử dụng.</p>
              <a class="nav-mega-all" href="san-pham.php">Xem trang danh sách →</a>
            </div>
          </div>
        </div>
        <div class="nav-menu-item<?= saha_nav_active('thuong-hieu') ?>">
          <button class="nav-menu-button" type="button" aria-expanded="false">Thương hiệu <span class="nav-caret">⌄</span></button>
          <div class="nav-mega">
            <div>
              <h4>Thương hiệu nổi bật</h4>
              <a href="thuong-hieu.php">Apollo</a>
              <a href="thuong-hieu.php">Wacker</a>
              <a href="thuong-hieu.php">Loctite</a>
              <a href="thuong-hieu.php">Bamboo</a>
            </div>
            <div>
              <h4>Thương hiệu khác</h4>
              <a href="thuong-hieu.php">ATM</a>
              <a href="thuong-hieu.php">Kingbond</a>
              <a href="thuong-hieu.php">X'traseal</a>
              <a href="thuong-hieu.php">Sambo</a>
            </div>
            <div class="nav-mega-feature">
              <strong>Tra cứu theo thương hiệu</strong>
              <p>Khám phá sản phẩm chính hãng, tài liệu kỹ thuật và chính sách phân phối của từng hãng.</p>
              <a class="nav-mega-all" href="thuong-hieu.php">Xem tất cả thương hiệu →</a>
            </div>
          </div>
        </div>
        <div class="nav-menu-item<?= saha_nav_active('ung-dung') ?>">
          <button class="nav-menu-button" type="button" aria-expanded="false">Ứng dụng <span class="nav-caret">⌄</span></button>
          <div class="nav-mega">
            <div>
              <h4>Theo công trình</h4>
              <a href="ung-dung.php">Nhôm kính</a>
              <a href="ung-dung.php">Xây dựng</a>
              <a href="ung-dung.php">Nội thất</a>
              <a href="ung-dung.php">Quảng cáo</a>
            </div>
            <div>
              <h4>Theo ngành nghề</h4>
              <a href="ung-dung.php">Cơ khí – Chế tạo</a>
              <a href="ung-dung.php">Công nghiệp</a>
              <a href="ung-dung.php">Điện – Nước</a>
              <a href="ung-dung.php">Bảo trì – Sửa chữa</a>
            </div>
            <div class="nav-mega-feature">
              <strong>Chọn keo theo ứng dụng</strong>
              <p>Tìm nhanh giải pháp kết dính phù hợp với vật liệu, môi trường và yêu cầu kỹ thuật.</p>
              <a class="nav-mega-all" href="ung-dung.php">Xem trang ứng dụng →</a>
            </div>
          </div>
        </div>
        <a class="<?= trim(saha_nav_active('khuyen-mai')) ?>" href="khuyen-mai.php">Khuyến mãi <span class="hot">Hot</span></a>
        <a class="<?= trim(saha_nav_active('tin-tuc')) ?>" href="danh-sach-tin-tuc.php">Tin tức</a>
        <a href="#footer">Liên hệ</a>
      </div>
    </div>
  </nav>
