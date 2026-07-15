<?php
declare(strict_types=1);

/** @var \Saha\PageContext $page */
/** @var \Saha\SiteConfig $config */
/** @var \Saha\AssetUrl $assets */
/** @var bool $showFloatTools */
/** @var string|null $extraJs */
/** @var list<string> $extraJsFiles */
?>
  <footer id="footer">
    <div class="container footer-grid">
      <div>
        <h4>Tổng kho keo dán <?= \Saha\Html::e($config->siteName) ?></h4>
        <p>Chuyên cung cấp keo silicone, keo xây dựng, keo công nghiệp, sơn xịt và phụ trợ chính hãng.</p>
        <p>⌖ Trụ sở: Hà Đông, Hà Nội<br>☎ <?= \Saha\Html::e($config->hotlineHn) ?><br>✉ <?= \Saha\Html::e($config->email) ?></p>
      </div>
      <div>
        <h4>Sản phẩm</h4>
        <ul>
          <li><a href="san-pham.php">Keo silicone</a></li>
          <li><a href="san-pham.php">Keo xây dựng</a></li>
          <li><a href="san-pham.php">Keo công nghiệp</a></li>
          <li><a href="san-pham.php">Sơn xịt</a></li>
          <li><a href="san-pham.php">Foam / PU</a></li>
        </ul>
      </div>
      <div>
        <h4>Chính sách</h4>
        <ul>
          <li><a href="#">Chính sách bán hàng</a></li>
          <li><a href="#">Chính sách đổi trả</a></li>
          <li><a href="#">Chính sách bảo mật</a></li>
          <li><a href="#">Hướng dẫn thanh toán</a></li>
        </ul>
      </div>
      <div>
        <h4>Hỗ trợ khách hàng</h4>
        <ul>
          <li><a href="#">Hướng dẫn đặt hàng</a></li>
          <li><a href="#">Tra cứu theo dõi đơn</a></li>
          <li><a href="danh-sach-tin-tuc.php">Câu hỏi thường gặp</a></li>
          <li><a href="#footer">Liên hệ hỗ trợ</a></li>
        </ul>
      </div>
      <div>
        <h4>Đăng ký nhận ưu đãi</h4>
        <p>Nhận ngay bảng giá sỉ và ưu đãi hấp dẫn từ SAHA qua email của bạn.</p>
        <div class="footer-newsletter newsletter">
          <input placeholder="Nhập email của bạn">
          <button type="button" onclick="showToast('Đăng ký nhận ưu đãi thành công')">Đăng ký</button>
        </div>
        <div class="payments">
          <span class="payments-title">Chấp nhận thanh toán</span>
          <div class="payment-methods" aria-label="Các phương thức thanh toán">
            <span class="payment-logo visa">VISA</span>
            <span class="payment-logo mastercard">Mastercard</span>
            <span class="payment-logo napas">NAPAS</span>
            <span class="payment-logo momo">MoMo</span>
            <span class="payment-logo zalopay">ZaloPay</span>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">© <?= (int) $config->year ?> <?= \Saha\Html::e($config->siteName) ?>. All rights reserved.</div>
  </footer>

  <?php if ($showFloatTools): ?>
  <div class="float-tools">
    <button type="button" onclick="showToast('Đang kết nối hotline...')">☎<br>Gọi ngay</button>
    <button type="button" onclick="showToast('Mở Zalo tư vấn')">Zalo</button>
    <button type="button" onclick="showToast('Mở Messenger')">Msg</button>
    <button type="button" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>
  </div>
  <?php endif; ?>

  <div class="toast" id="toast"></div>
  <script type="module" src="<?= \Saha\Html::e($assets->path('js/chrome.js')) ?>"></script>
  <?php if ($extraJs): ?>
  <script type="module" src="<?= \Saha\Html::e($assets->path('js/' . $extraJs)) ?>"></script>
  <?php endif; ?>
  <?php foreach ($extraJsFiles as $jsFile): ?>
  <script type="module" src="<?= \Saha\Html::e($assets->path('js/' . $jsFile)) ?>"></script>
  <?php endforeach; ?>
</body>
</html>
