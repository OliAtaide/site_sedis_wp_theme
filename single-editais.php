<?php /* Template Name: Editais */
get_header(); ?>
<div class="container mt-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/concursos">Editais</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <?= get_the_title() ?>
            </li>
        </ol>
    </nav>
    <span class="status">
        Inscrições Abertas
    </span>
    <h1>
        <?= get_the_title() ?>
    </h1>
    <div>
        <?= the_content() ?>
    </div>
    <h3 class="see_also">
        Ver também
    </h3>
    <div class="row">
        <?php

        $related = get_posts(
            array(
                'category__in' => wp_get_post_categories($post->ID),
                'numberposts' => 3,
                'post__not_in' => array($post->ID),
                'post_type' => 'editais'
            )
        );
        if ($related)
            foreach ($related as $post) {
                setup_postdata($post); ?>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <?php get_template_part('/parts/edital') ?>
                </div>
            <?php }
        wp_reset_postdata(); ?>
    </div>
    <div class="d-flex mb-5">
        <a class="btn mx-auto border-primary" href="/concursos">
            Ver editais
        </a>
    </div>
</div>


<?php get_footer(); ?>