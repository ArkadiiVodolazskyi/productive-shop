<?php
$item = $args['item'];
$social_links = $item['social_links'];
?>

<?php if ($social_links && count($social_links) > 0) { ?>
    <ul class="social-items">

        <?php foreach ($social_links as $social_link) { ?>
            <?php
            $type = $social_link['type'];
            $link = $social_link['link'];
            $link_url = $link ? $link['url'] : '';
            $link_title = $link ? $link['title'] : '';
            ?>
            <li class="social-item">
                <a class="social-link" href="<?= $link_url; ?>">
                    <div class="social-icon-wrapper">
                        <svg class="social-icon" width="16" height="16">
                            <use href="<?= IMG_DIR; ?>/icons/icons.svg#<?= $type; ?>"></use>
                        </svg>
                    </div>
                    <span class="social-name" data-hover="underline-default">
                        <?= $link_title; ?>
                    </span>
                </a>
            </li>
        <?php } ?>

    </ul>
<?php } ?>