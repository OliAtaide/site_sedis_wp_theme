<?php /* Template Name: Noticias */
get_header();

$noticias = get_posts(
    array(
        'numberposts' => -1,
        'cat' => 'Noticia'
    )
);
?>

<div class="div-noticia-destaque py-5">
    <div class="container">
        <h1>
            Em destaque
        </h1>
        <hr>

        <div class="d-flex noticia-destaque">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($noticias[0]->ID), 'thumbnail' ); ?>" alt="">
            <div class="noticia-destaque-info">
                <p class="data">
                    <?php echo $noticias[0]->post_date; ?>
                </p>
                <h1 class="titulo">
                    <?php echo $noticias[0]->post_title; ?>
                </h1>
                <span class="texto">
                    <?php echo apply_filters('the_content', $noticias[0]->post_content); ?>
                </span>
                <a href="<?php echo get_the_permalink($noticias[0]); ?>">
                    Saiba Mais
                </a>
            </div>
        </div>
    </div>
</div>
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
            <div class="form-control rounded-pill d-flex align-items-center">
                <i class="bi bi-search mx-2"></i>
                <input type="text" class="border-0" placeholder="Buscar notícias">
            </div>
        </div>
        <div class="row">
            <?php for ($i = 1; $i < count($noticias); $i++): ?>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card card-noticia">
                        <div class="card-body d-flex flex-column">
                            <div class="data">
                                <?php echo $noticias[$i]->post_date; ?>
                            </div>
                            <a href="<?php echo $noticias[$i]->post_name; ?>">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($noticias[$i]->ID), 'thumbnail' ); ?>" class="card-img" alt="">
                            </a>
                            <h6 class="card-title">
                                <?php echo $noticias[$i]->post_title; ?>
                            </h6>
                            <span class="card-text">
                                <?php echo apply_filters('the_content', $noticias[$i]->post_content); ?>
                            </span>
                            <div class="cats mt-auto">
                                <strong>Categorias:</strong>
                                <?php
                                $cat = wp_get_post_categories($noticias[$i]->ID, array('fields' => 'all'));
                                foreach ($cat as $c):
                                    ?>
                                    <a href="<?php echo '/category/' . $c->name ?>">
                                        <?php echo $c->name ?>
                                    </a>,
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <div class="d-flex">
            <div class="btn btn-vermais mx-auto">
                Ver mais noitícias
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>