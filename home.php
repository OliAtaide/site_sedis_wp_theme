<?php
get_header();

$noticias = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 9 + !is_paged(),
        'paged' => $paged
    )
);
?>
<?php

if ($noticias->have_posts()):
    if (!is_paged()):
        $destaque = $noticias->posts[0];
        ?>
        <div class="div-noticia-destaque py-5">
            <div class="container">
                <h1>
                    Em destaque
                </h1>
                <hr>
                <div class="d-flex noticia-destaque">
                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($destaque->ID), 'thumbnail'); ?>" alt="">
                    <div class="noticia-destaque-info">
                        <p class="data">
                            <?php echo $destaque->post_date; ?>
                        </p>
                        <h1 class="titulo">
                            <?php echo $destaque->post_title; ?>
                        </h1>
                        <span class="texto">
                            <?php echo apply_filters('the_content', $destaque->post_content); ?>
                        </span>
                        <a href="<?php echo get_the_permalink($destaque); ?>">
                            Saiba Mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
endif;
?>
<div class="div-noticia-ultimas py-5">
    <div class="container">
        <h1 class="titulo">Últimas notícias</h1>
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
                6 de 2187 notícias
            </h5>
            <?php get_search_form(); ?>
        </div>
        <div class="row">
            <?php if ($noticias->have_posts()):
                while ($noticias->have_posts()):
                    $noticias->the_post();
                    if ($noticias->current_post == 0 && !is_paged()):
                        continue;
                    endif; ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a href="<?= the_permalink(); ?>">
                            <div class="card card-noticia">
                                <div class="card-body d-flex flex-column">
                                    <div class="data">
                                        <?= the_date(); ?>
                                    </div>

                                    <img src="<?= the_post_thumbnail_url() ?>" class="card-img" alt="">

                                    <h6 class="card-title">
                                        <?= the_title(); ?>
                                    </h6>
                                    <span class="card-text">
                                        <?php the_excerpt(); ?>
                                    </span>
                                    <div class="tags mt-auto">
                                        <strong>Categorias:</strong>
                                        <?php
                                        $cat = wp_get_post_categories(the_ID(), array('fields' => 'all'));
                                        foreach ($cat as $c):
                                            ?>
                                            <a href="<?php echo '/category/' . $c->name ?>">
                                                <?php echo $c->name ?>
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