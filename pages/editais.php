<?php /* Template Name: Editais */
get_header();

$editais = new WP_Query(
    array(
        'post_type' => 'editais',
        'posts_per_page' => 9,
        'paged' => $paged
    )
);
?>

<div class="div-editais">
    <div class="container">
        <h1>Editais</h1>
        <hr>
        <p>
            Fique por dentro dos nossos editais
        </p>
        <h6>Filtrar por</h6>
        <div class="botoes-filtro">
            <div class="btn">
                Todos
            </div>
            <div class="btn">
                Inscrições Abertas
            </div>
            <div class="btn">
                Em Andamento
            </div>
            <div class="btn">
                Concluídos
            </div>
        </div>
        <div class="row">
            <?php if ($editais->have_posts()):
                while ($editais->have_posts()):
                    $editais->the_post();
                    ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <?php get_template_part('/parts/edital') ?>
                    </div>
                <?php endwhile; endif; ?>
        </div>
        <!--
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item active mx-2">
                    <a class="page-link" href="#">
                        1
                    </a>
                </li>
                <li class="page-item mx-2">
                    <a class="page-link" href="#">
                        2
                    </a>
                </li>
                <li class="page-item mx-2">
                    <a class="page-link" href="#">
                        3
                    </a>
                </li>
            </ul>
        </nav>
                -->
        <div class="pagination d-flex justify-content-center">
            <?php
            echo paginate_links(
                array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'total' => $editais->max_num_pages,
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