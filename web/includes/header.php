<?php
declare(strict_types=1);
/** Topbar + header (logo, search, actions) */
?>
  <div class="topbar">
    <div class="container inner">
      <div class="topbar-list">
        <span>☎ Hotline Hà Nội: <b><?= SAHA_HOTLINE_HN ?></b></span>
        <span>☎ Hotline HCM: <b><?= SAHA_HOTLINE_HCM ?></b></span>
        <span>🚚 Giao hàng toàn quốc</span>
        <span>▣ Xuất hóa đơn VAT</span>
      </div>
      <div class="topbar-list">
        <span>⇩ Tải bảng giá</span>
        <span>⌖ Hệ thống cửa hàng</span>
      </div>
    </div>
  </div>

  <header class="main-header">
    <div class="container header-row">
      <a class="logo" href="index.php">SAHA<small>TỔNG KHO KEO DÁN</small></a>
      <div class="search-wrap">
        <form class="search" onsubmit="event.preventDefault();showToast('Đang tìm kiếm...')">
          <input aria-label="Tìm kiếm" placeholder="<?= saha_e($searchPlaceholder) ?>">
          <select aria-label="Danh mục">
            <option>Tất cả danh mục</option>
            <option>Keo silicone</option>
            <option>Keo công nghiệp</option>
            <option>Keo chống thấm</option>
          </select>
          <button type="submit" aria-label="Tìm kiếm">⌕</button>
        </form>
        <?php if (!empty($showSuggest)): ?>
        <div class="search-suggest">
          <b>Gợi ý phổ biến</b>
          <div class="suggest-item">Apollo Silicone A500</div>
          <div class="suggest-item">Keo khóa ren Loctite 243</div>
          <div class="suggest-item">Keo chống thấm ngoài trời</div>
        </div>
        <?php endif; ?>
      </div>
      <div class="header-actions">
        <div class="action"><span style="font-size:24px">♙</span><div><b>Tài khoản</b><small>Đăng nhập / Đăng ký</small></div></div>
        <div class="action quote"><span style="font-size:22px">▣</span><div><b>Báo giá sỉ</b><small>Nhận ưu đãi tốt nhất</small></div></div>
        <div class="action cart"><span style="font-size:24px">🛒</span><i class="bubble">0</i><div><b>Giỏ hàng</b></div></div>
      </div>
      <button class="mobile-toggle" id="mobileToggle" type="button" aria-label="Mở menu">☰</button>
    </div>
  </header>
