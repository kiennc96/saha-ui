<?php
declare(strict_types=1);

/**
 * FAQ list dùng chung (chỉ danh sách — tiêu đề do trang bọc).
 *
 * @var list<array{q: string, a: string, open?: bool}> $items
 * @var string $listClass
 */

$items = $items ?? [];
$listClass = $listClass ?? 'faq-list';
?>
<div class="<?= \Saha\Html::e($listClass) ?>">
<?php foreach ($items as $item):
    $open = !empty($item['open']);
    $q = \Saha\Html::e($item['q'] ?? '');
    $a = \Saha\Html::e($item['a'] ?? '');
?>
  <div class="faq-item<?= $open ? ' open' : '' ?>">
    <button type="button" class="faq-q"><?= $q ?><span>＋</span></button>
    <div class="faq-a"><?= $a ?></div>
  </div>
<?php endforeach; ?>
</div>
