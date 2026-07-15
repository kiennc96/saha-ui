<?php
declare(strict_types=1);
/** Footer + float tools + toast + scripts dùng chung */
?>
  <footer id="footer">
    <div class="container footer-grid">
      <div>
        <h4>Tổng kho keo dán SAHA</h4>
        <p>Chuyên cung cấp keo silicone, keo xây dựng, keo công nghiệp, sơn xịt và phụ trợ chính hãng.</p>
        <p>⌖ Trụ sở: Hà Đông, Hà Nội<br>☎ <?= SAHA_HOTLINE_HN ?><br>✉ <?= SAHA_EMAIL ?></p>
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
    <div class="copyright">© <?= SAHA_YEAR ?> SAHA. All rights reserved.</div>
  </footer>

  <?php if (!empty($showFloatTools)): ?>
  <div class="float-tools">
    <button type="button" onclick="showToast('Đang kết nối hotline...')">☎<br>Gọi ngay</button>
    <button type="button" onclick="showToast('Mở Zalo tư vấn')">Zalo</button>
    <button type="button" onclick="showToast('Mở Messenger')">Msg</button>
    <button type="button" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>
  </div>
  <?php endif; ?>

  <div class="toast" id="toast"></div>
  <script src="<?= saha_e(saha_asset('js/chrome.js')) ?>"></script>
  <?php if (!empty($extraJs)): ?>
  <script src="<?= saha_e(saha_asset('js/' . $extraJs)) ?>"></script>
  <?php endif; ?>
</body>
</html>
