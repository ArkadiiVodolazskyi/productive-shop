<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body>

    <header class="header-main">

        <div class="wrapper">
            <div class="header-logo-wrapper">
                <a class="header-logo" href="<?= get_site_url(); ?>">
                    <img src="<?= IMG_DIR; ?>/logos/logo-productive-shop.svg" alt="<?= bloginfo('title'); ?>">
                </a>
            </div>

            <nav class="header-nav-main">
                <ul class="header-nav-items">
                    <li class="header-nav-item has-megamenu">
                        <a class="header-nav-link" href="#">I need</a>
                        <div class="header-nav-megamenu">

                        </div>
                    </li>
                    <li class="header-nav-item">
                        <a class="header-nav-link" href="#">Expertise</a>
                    </li>
                    <li class="header-nav-item">
                        <a class="header-nav-link" href="#">Resources</a>
                    </li>
                    <li class="header-nav-item">
                        <a class="header-nav-link" href="#">Company</a>
                    </li>
                </ul>
            </nav>

            <div class="header-button-wrapper">
                <button class="btn header-cta-button">
                    Become A Client
                </button>
            </div>
        </div>

    </header>