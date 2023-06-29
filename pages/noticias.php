<?php /* Template Name: Noticias */
get_header();

$noticias = get_posts(
    array(
        'numberposts'       => -1,
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
            <img src="<?php echo get_theme_file_uri() . '/imgs/ph.png' ?>" alt="">
            <div class="noticia-destaque-info">
                <p class="data">
                    <?php echo $noticias[0]->post_date; ?>
                </p>
                <h1 class="titulo">
                    <?php echo $noticias[0]->post_title; ?>
                </h1>
                <p class="texto">
                    <?php echo apply_filters('the_content', $noticias[0]->post_content); ?>
                </p>
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
            <?php for ($i=1; $i < count($noticias); $i++): ?>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-noticia">
                    <div class="card-body d-flex flex-column">
                        <div class="data">
                            <?php echo $noticias[$i]->post_date; ?>
                        </div>
                        <img src="<?php echo get_theme_file_uri() . '/imgs/ph.png' ?>" class="card-img" alt="">
                        <h6 class="card-title">
                            <?php echo $noticias[$i]->post_title; ?>
                        </h6>
                        <p class="card-text">
                            A Universidade Federal do Rio Grande do Norte (UFRN) informa que as atividades
                            acadêmicas e administrativas estão suspensas nesta terça-feira, 14, até as 12h da
                            quarta-feira, 15, em todos os seus campi, em virtude da redução da oferta de transporte
                        </p>
                        <div class="tags mt-auto">
                            <strong>Categorias:</strong>
                            <a href="">noticias</a>,
                            <a href="">UFRN</a>
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