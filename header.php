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
                    <li class="header-nav-item" data-has-megamenu="">
                        <button class="header-nav-link">I need</button>
                        <div class="header-nav-megamenu" data-is-visible="">
                            <div class="megamenu-block">
                                <h5 class="megamenu-block-header title-dashed">By workflow</h5>
                                <ul class="megamenu-block-items">
                                    <li class="megamenu-block-item">
                                        <img class="item-icon" src="<?= IMG_DIR; ?>/icons/icon-Audit.svg" alt="">
                                        <div class="item-content">
                                            <h6 class="item-title">Uncover market and competitor insights</h6>
                                            <p class="item-description">Uncover and outpace your competitors in organic marketing.</p>
                                            <div class="item-links-wrapper">
                                                <span class="links-title">Top services:</span>
                                                <ul class="link-items">
                                                    <li class="link-item">
                                                        <a class="link" href="#">Enterprise SEO</a>
                                                    </li>
                                                    <li class="link-item">
                                                        <a class="link" href="#">Local SEO</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="megamenu-block-item">
                                        <img class="item-icon" src="<?= IMG_DIR; ?>/icons/icon-Audit.svg" alt="">
                                        <div class="item-content">
                                            <h6 class="item-title">Uncover market and competitor insights</h6>
                                            <p class="item-description">Uncover and outpace your competitors in organic marketing.</p>
                                            <div class="item-links-wrapper">
                                                <span class="links-title">Top services:</span>
                                                <ul class="link-items">
                                                    <li class="link-item">
                                                        <a class="link" href="#">Enterprise SEO</a>
                                                    </li>
                                                    <li class="link-item">
                                                        <a class="link" href="#">Local SEO</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="megamenu-block"></div>
                            <div class="megamenu-block"></div>
                        </div>
                    </li>
                    <li class="header-nav-item">
                        <button class="header-nav-link">Expertise</button>
                    </li>
                    <li class="header-nav-item">
                        <button class="header-nav-link">Resources</button>
                    </li>
                    <li class="header-nav-item">
                        <button class="header-nav-link">Company</button>
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