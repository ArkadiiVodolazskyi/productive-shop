<?php
$style = '';
$bg_color = $args['bg_color'];
if ($bg_color) {
    $style .= 'style="background-color: ' . $bg_color . ';"';
}
?>

<div class="megamenu-block" data-megamenu-block="small" <?= $style; ?>>

    <?php
    $items = $args['items'];
    if ($items && count($items) > 0) {
    ?>

        <?php foreach ($items as $item) {
            $layout = $item['acf_fc_layout'];
            get_template_part(
                'template-parts/megamenu-block-small',
                $item['acf_fc_layout'],
                [
                    'item' => $item
                ]
            );
        } ?>

    <?php } ?>

    <?php
    $image = $args['image'];
    if ($image) {
    ?>
        <img class="megamenu-block-image" src="<?= $image['url']; ?>" alt="<?= $image['title']; ?>">
    <?php } ?>

</div>