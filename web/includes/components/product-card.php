<?php
declare(strict_types=1);

/**
 * Card sản phẩm catalog (.product).
 *
 * @var string $title
 * @var string $image
 * @var string $alt
 * @var string $metaHtml  dòng mô tả (có thể chứa <br>)
 * @var string $price
 * @var string $stock
 * @var string|null $dataProduct
 * @var list<array{label: string, tone?: string}> $badges
 * @var string|null $detailHref
 */

$title = $title ?? '';
$image = $image ?? '';
$alt = $alt ?? $title;
$metaHtml = $metaHtml ?? '';
$price = $price ?? '';
$stock = $stock ?? 'Còn hàng · Giao nhanh';
$dataProduct = $dataProduct ?? null;
$badges = $badges ?? [];
$detailHref = $detailHref ?? null;
$dataAttr = $dataProduct ? ' data-product="' . \Saha\Html::e($dataProduct) . '"' : '';
?>
<article class="product"<?= $dataAttr ?>>
  <?php if ($badges !== []): ?>
  <div class="badge-row">
    <?php foreach ($badges as $badge):
        $tone = $badge['tone'] ?? '';
        $cls = $tone !== '' ? 'mini-badge ' . \Saha\Html::e($tone) : 'mini-badge';
    ?>
    <span class="<?= $cls ?>"><?= \Saha\Html::e($badge['label'] ?? '') ?></span>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <div class="product-image"><img src="<?= \Saha\Html::e($image) ?>" alt="<?= \Saha\Html::e($alt) ?>"></div>
  <h3><?php if ($detailHref): ?><a href="<?= \Saha\Html::e($detailHref) ?>"><?= \Saha\Html::e($title) ?></a><?php else: ?><?= \Saha\Html::e($title) ?><?php endif; ?></h3>
  <div class="meta"><?= $metaHtml ?></div>
  <div class="price"><?= \Saha\Html::e($price) ?></div>
  <div class="stock"><?= \Saha\Html::e($stock) ?></div>
  <div class="card-actions">
    <button type="button" class="cart-btn" onclick="showToast('Đã thêm vào giỏ')">🛒</button>
    <button type="button" class="consult-btn" onclick="showToast('Đã gửi yêu cầu tư vấn')">Nhận tư vấn</button>
  </div>
</article>
