<?php
$item = $args['item'];
$text = $item['text'];
?>

<h5 class="megamenu-block-header" <?= $text ? 'data-title="dashed"' : '' ?>>
    <?= $text; ?>
</h5>