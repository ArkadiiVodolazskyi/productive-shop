<?php
$item = $args['item'];
?>

<div class="megamenu-block-item">

    <?php
    $icon = $item['icon'];
    if ($icon) {
    ?>
        <img class="item-icon" src="<?= $icon['url']; ?>" alt="<?= $icon['title']; ?>">
    <?php } ?>

    <div class="item-content">

        <?php
        $link = $item['link'];
        $link_title = $link ? $link['title'] : '';
        $link_url = $link ? $link['url'] : '';
        $description = $item['description'];
        ?>
        <a class="block-item-link" href="<?= $link_url; ?>">
            <h6 class="item-title" data-hover="underline-default" data-title="main">
                <?= $link_title; ?>
            </h6>
            <p class="item-description">
                <?= $description; ?>
            </p>
        </a>

        <?php
        $other_links = $item['other_links']['links'];
        $other_links_title = $item['other_links']['title'];
        ?>
        <?php if ($other_links && count($other_links) > 0) { ?>
            <ul class="link-items">

                <?php if ($other_links_title) { ?>
                    <li class="links-title">
                        <?= $other_links_title; ?>
                    </li>
                <?php } ?>

                <?php foreach ($other_links as $other_link) { ?>
                    <li class="link-item">
                        <a class="link tag-link" href="<?= $other_link['link']['url']; ?>">
                            <?= $other_link['link']['title']; ?>
                        </a>
                    </li>
                <?php } ?>

            </ul>
        <?php } ?>

    </div>

</div>