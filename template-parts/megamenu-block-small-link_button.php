<?php
$item = $args['item'];
$link = $item['link'];
$add_to_margin_top = $item['add_to_margin_top'] ? 'style="margin-top: ' . $item['add_to_margin_top'] . 'px;"' : '';
?>

<a class="btn" data-btn="accent-main" href="<?= $link['url']; ?>" <?= $add_to_margin_top; ?>>
    <?= $link['title']; ?>
</a>