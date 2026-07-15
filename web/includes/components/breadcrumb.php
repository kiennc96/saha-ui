<?php
declare(strict_types=1);

/**
 * Breadcrumb dùng chung.
 *
 * @var list<array{label: string, href?: string|null}> $items
 * @var 'bar'|'inline' $variant  bar = full-width (tin/promo/PDP); inline = trong container (catalog)
 */

$variant = $variant ?? 'bar';
$items = $items ?? [];
$sep = $variant === 'inline' ? ' / ' : null;

if ($variant === 'bar'): ?>
<div class="breadcrumb breadcrumb--bar"><div class="container">
<?php
  $last = count($items) - 1;
  foreach ($items as $i => $crumb):
      $label = \Saha\Html::e($crumb['label'] ?? '');
      $href = $crumb['href'] ?? null;
      if ($i > 0) {
          echo '<span>›</span>';
      }
      if ($href && $i < $last) {
          echo '<a href="' . \Saha\Html::e($href) . '">' . $label . '</a>';
      } else {
          echo '<b>' . $label . '</b>';
      }
  endforeach;
?>
</div></div>
<?php else: ?>
<div class="container breadcrumb breadcrumb--inline">
<?php
  $parts = [];
  $last = count($items) - 1;
  foreach ($items as $i => $crumb) {
      $label = \Saha\Html::e($crumb['label'] ?? '');
      $href = $crumb['href'] ?? null;
      if ($href && $i < $last) {
          $parts[] = '<a href="' . \Saha\Html::e($href) . '">' . $label . '</a>';
      } else {
          $parts[] = $label;
      }
  }
  echo implode(' / ', $parts);
?>
</div>
<?php endif; ?>
