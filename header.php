<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<?php
$header_logo = get_field('header_logo', 'option');
$cta_button = get_field('cta_button', 'option');
$nav_items = get_field('nav_item', 'option');
?>

<body>

    <div class="overlay" data-js="overlay"></div>

    <header class="header-main">

        <div class="wrapper">
            <div class="header-logo-wrapper">
                <a class="header-logo" href="<?= get_site_url(); ?>">
                    <?php if ($header_logo) { ?>
                        <img src="<?= $header_logo['url']; ?>" alt="<?= bloginfo('title'); ?>">
                    <?php } ?>
                </a>
            </div>

            <nav class="header-nav-main">

                <?php if (count($nav_items) > 0) { ?>
                    <ul class="header-nav-items">

                        <?php foreach ($nav_items as $nav_item) {
                            get_template_part(
                                'template-parts/header-nav-item',
                                null,
                                [
                                    'nav_item' => $nav_item
                                ]
                            );
                        } ?>

                    </ul>
                <?php } ?>

            </nav>

            <div class="header-button-wrapper">

                <?php if ($cta_button) { ?>
                    <a class="button" data-btn="no-bg" href="<?= $cta_button['url']; ?>">
                        <?= $cta_button['title']; ?>
                    </a>
                <?php } ?>

            </div>
        </div>

    </header>