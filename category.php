<?php
get_header();

$noticias = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 9,
        'paged' => $paged,
        'cat' => get_query_var('cat')
    )
);
?>
<div class="div-noticia-ultimas py-5">
    <div class="container">
        <h1 class="titulo">Categoria:
            <?php single_cat_title(); ?>
        </h1>
        <hr>
        <p class="texto"></p>
        <div class="navegar-por">
            <h6>Navegue por</h6>
            <button class="btn btn-secondary">
                noticias
            </button>
            <button class="btn btn-secondary">
                UFRN
            </button>
        </div>
        <div class="pesquisa d-flex align-items-center">
            <h5>
                <?= $noticias->post_count . ' de ' . $noticias->found_posts . ' notícias'; ?>
            </h5>
            <?php get_search_form(); ?>
        </div>
        <div class="row">
            <?php if ($noticias->have_posts()):
                while ($noticias->have_posts()):
                    $noticias->the_post(); ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a href="<?= the_permalink(); ?>">
                            <div class="card card-noticia">
                                <div class="card-body d-flex flex-column">
                                    <div class="data">
                                        <?= the_date(); ?>
                                    </div>

                                    <div class="img-container">
                                        <img src="<?= the_post_thumbnail_url() ?>" class="card-img" alt="">
                                    </div>

                                    <h6 class="card-title">
                                        <?= the_title(); ?>
                                    </h6>
                                    <div class="card-text">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="cats mt-auto">
                                        <strong>Categorias:</strong>
                                        <?php
                                        $cats = get_the_category();
                                        foreach ($cats as $c):
                                            ?>
                                            <a href="<?= get_category_link($c->cat_ID) ?>">
                                                <?= $c->cat_name ?>
                                            </a>,
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
        <div class="pagination d-flex justify-content-center">
            <?php
            echo paginate_links(
                array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'total' => $noticias->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'format' => '?paged=%#%',
                    'show_all' => false,
                    'type' => 'plain',
                    'end_size' => 2,
                    'mid_size' => 1,
                    'prev_next' => true,
                    // 'prev_text' => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
                    // 'next_text' => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
                    'prev_text' => false,
                    'next_text' => false,
                    'add_args' => false,
                    'add_fragment' => '',
                )
            );
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>