<?php
declare(strict_types=1);

/**
 * Card tin tức (danh sách).
 *
 * @var string $href
 * @var string $image
 * @var string $alt
 * @var string $pill
 * @var string $title
 * @var string $excerpt
 * @var list<string> $meta
 * @var string|null $id
 */

$href = $href ?? '#';
$image = $image ?? '';
$alt = $alt ?? '';
$pill = $pill ?? '';
$title = $title ?? '';
$excerpt = $excerpt ?? '';
$meta = $meta ?? [];
$id = $id ?? null;
$idAttr = $id ? ' id="' . \Saha\Html::e($id) . '"' : '';
?>
<article class="news-card"<?= $idAttr ?>>
  <a href="<?= \Saha\Html::e($href) ?>"><img src="<?= \Saha\Html::e($image) ?>" alt="<?= \Saha\Html::e($alt) ?>"></a>
  <div>
    <?php if ($pill !== ''): ?><span class="pill"><?= \Saha\Html::e($pill) ?></span><?php endif; ?>
    <h3><a href="<?= \Saha\Html::e($href) ?>"><?= \Saha\Html::e($title) ?></a></h3>
    <?php if ($excerpt !== ''): ?><p><?= \Saha\Html::e($excerpt) ?></p><?php endif; ?>
    <?php if ($meta !== []): ?>
    <div class="meta"><?php
      $escaped = array_map(static fn ($m) => '<span>' . \Saha\Html::e($m) . '</span>', $meta);
      echo implode('<span>•</span>', $escaped);
    ?></div>
    <?php endif; ?>
  </div>
</article>
