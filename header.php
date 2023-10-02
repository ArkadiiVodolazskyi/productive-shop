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
                        <button class="header-nav-link hover-underline">I need</button>
                        <div class="header-nav-megamenu" data-is-visible="">
                            <div class="megamenu-block" data-megamenu-block="medium">
                                <h5 class="megamenu-block-header" data-title="dashed">By workflow</h5>
                                <h5 class="megamenu-block-header" data-title="dashed">By team</h5>
                                <div class="megamenu-block-item">
                                    <img class="item-icon" src="<?= IMG_DIR; ?>/icons/icon-Audit.svg" alt="">
                                    <div class="item-content">
                                        <a class="block-item-link" href="#">
                                            <h6 class="item-title hover-underline" data-title="main">Uncover market and competitor insights</h6>
                                            <p class="item-description">Uncover and outpace your competitors in organic marketing.</p>
                                        </a>
                                        <ul class="link-items">
                                            <li class="links-title">
                                                Top services:
                                            </li>
                                            <li class="link-item">
                                                <a class="link tag-link" href="#">Enterprise SEO</a>
                                            </li>
                                            <li class="link-item">
                                                <a class="link tag-link" href="#">Local SEO</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="megamenu-block-item">
                                    <img class="item-icon" src="<?= IMG_DIR; ?>/icons/icon-Audit.svg" alt="">
                                    <div class="item-content">
                                        <a href="#" class="block-item-link">
                                            <h6 class="item-title hover-underline" data-title="main">For CMO</h6>
                                            <p class="item-description">A 360* digital enablement perspective</p>
                                        </a>
                                        <ul class="link-items">
                                            <li class="links-title">
                                                Top services:
                                            </li>
                                            <li class="link-item">
                                                <a class="link tag-link" href="#">Content Writing</a>
                                            </li>
                                            <li class="link-item">
                                                <a class="link tag-link" href="#">Website Design & Branding</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="megamenu-block" data-megamenu-block="small" style="background-color: #f9f8f8;">
                                <h5 class="megamenu-block-header" data-title="dashed">Case study</h5>
                                <h6 class="item-title" data-title="main">Another Happy Client. Shocking.</h6>
                                <p class="item-par">Average CTR rate went up <b>by 2.3%</b></p>
                                <p class="item-par">New users traffic increased <b>by 15.26%</b></p>
                                <p class="item-par">Average session duration <b>53.63%</b></p>
                                <button class="btn" data-btn="accent-main">
                                    Read the story
                                </button>
                                <img class="megamenu-block-image" src="<?= IMG_DIR; ?>/images/Lady.png" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="header-nav-item">
                        <button class="header-nav-link hover-underline">Expertise</button>
                    </li>
                    <li class="header-nav-item">
                        <button class="header-nav-link hover-underline">Resources</button>
                    </li>
                    <li class="header-nav-item">
                        <button class="header-nav-link hover-underline">Company</button>
                    </li>
                </ul>
            </nav>

            <div class="header-button-wrapper">
                <button class="btn" data-btn="no-bg">
                    Become A Client
                </button>
            </div>
        </div>

    </header>