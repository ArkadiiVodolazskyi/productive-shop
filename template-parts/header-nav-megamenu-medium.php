<?php
$items = $args['items'];
?>

<div class="megamenu-block" data-megamenu-block="medium">

    <?php foreach ($items as $item) { ?>

        <?php if ($item === 'empty') { ?>
            <div class="megamenu-block-item"></div>
        <?php } else {
            get_template_part(
                'template-parts/megamenu-block',
                $item['acf_fc_layout'],
                [
                    'item' => $item
                ]
            );
        } ?>


    <?php } ?>

</div>