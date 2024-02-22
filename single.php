<?php
get_header()
    ?>

<div class="container my-5">
    <h1>
        <?= the_title() ?>
    </h1>
    <div>
        <?=
            the_content()
            ?>
    </div>
    <h3>
        Últimas notícias
    </h3>
    <?php

    $related = get_posts(
        array(
            'category__in' => wp_get_post_categories($post->ID),
            'numberposts' => 3,
            'post__not_in' => array($post->ID),
            'post_type' => 'post'
        )
    );
    if ($related)
        foreach ($related as $post) {
            setup_postdata($post); ?>
            <a class="noticia-related" href="<?= the_permalink(  )?>">
                <h1 class="num">
                    1
                </h1>
                <h5 class="titulo">
                    <?= the_title() ?>
                </h5>
                <img src="<?= the_post_thumbnail_url() ?>" alt="">
            </a>
        <?php }
    wp_reset_postdata(); ?>

</div>

<?php get_footer() ?>