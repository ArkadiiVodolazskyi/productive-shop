<?php
$item = $args['item'];
$size = $item['size'];
?>

<article class="article-card" data-size="<?= $size; ?>">

    <?php
    $image = $item['image'];
    $link = $item['link'];
    $link_url = $link ? $link['url'] : '';
    $link_title = $link ? $link['title'] : '';
    if ($image) { ?>
        <a class="article-thumbnail-wrapper" href="<?= $link_url; ?>">
            <img class="article-thumbnail" src="<?= $image['url']; ?>" alt="<?= $image['title']; ?>" />
        </a>
    <?php } ?>

    <?php
    $link_tag = $item['link_tag'];
    $link_tag_url = $link_tag ? $link_tag['url'] : '';
    $link_tag_title = $link_tag ? $link_tag['title'] : '';
    ?>
    <div class="article-description">
        <a class="article-tag tag-link" href="<?= $link_tag_url; ?>">
            <?= $link_tag_title; ?>
        </a>
        <a href="<?= $link_url; ?>">
            <h6 class="article-title" data-hover="underline-default">
                <?= $link_title; ?>
            </h6>
        </a>
    </div>
</article>