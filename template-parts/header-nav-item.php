<?php
$nav_item = $args['nav_item'];
$nav_item_link = $nav_item['link'];
$include_megamenu = $nav_item['include_megamenu'];
?>

<li class="header-nav-item">

    <?php if (!$include_megamenu) { ?>

        <a class="header-nav-btn" data-hover="underline-pseudo" href="<?= $nav_item_link['url']; ?>">
            <?= $nav_item_link['title']; ?>
        </a>

    <?php } else { ?>

        <button class="header-nav-btn" data-hover="underline-pseudo" data-js="toggle-megamenu">
            <?= $nav_item_link['title']; ?>
        </button>

        <div class="header-nav-megamenu">
            <?php
            $column_1 = $nav_item['column_1'] ?: null;
            $column_2 = $nav_item['column_2'] ?: null;

            get_template_part(
                'template-parts/header-nav-megamenu',
                'medium',
                [
                    'items' => header_items_combine_columns($column_1, $column_2),
                ]
            );
            ?>

            <?php
            $column_3 = $nav_item['column_3_data'];
            get_template_part(
                'template-parts/header-nav-megamenu',
                'small',
                [
                    'image' => $column_3['image'],
                    'bg_color' => $column_3['column_background_color'],
                    'items' => $column_3['column_3']
                ]
            );
            ?>
        </div>

    <?php } ?>



</li>