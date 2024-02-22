<?php /* Template Name: MainPage */
get_header();
?>

<div class="div-cabecalho"
    style='background-image: url("<?php echo get_template_directory_uri() . '/imgs/bg.png' ?>");'>
    <div class="container">
        <div class="titulo">
            Secretaria de educação a distância - UFRN
        </div>
        <div class="subtitulo">
            - Aprender é explorar novos horizontes
        </div>
        <div class="texto">
            Estude hoje, conquiste amanhã: seu futuro melhor começa agora!
        </div>
        <a class="btn btn-cursos px-4" href="/cursos">
            Ver cursos
        </a>
        <div class="texto">
            Deseja fazer parte da nossa equipe?
        </div>
        <a class="btn btn-editais px-0" href="/concursos">
            Editais abertos
        </a>
    </div>
</div>
<div class="py-5 div-aprendizado ">
    <div class="container">
        <h1>
            Ambientes de aprendizado
        </h1>
        <hr>
        <p>Acesse as plataformas do seu curso</p>
        <div class="row ambientes">
            <div class="col-sm-6 col-lg-4">
                <div class="ambiente ambiente-1">
                    <p>Mandacaru Acadêmico</p>
                    <a href="" class="btn">Acessar</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="ambiente ambiente-2">
                    <p>Mandacaru EAJ</p>
                    <a href="" class="btn">Acessar</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="ambiente ambiente-3">
                    <p>AVASUS</p>
                    <a href="" class="btn">Acessar</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="ambiente ambiente-4">
                    <p>AVAProex</p>
                    <a href="" class="btn">Acessar</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="ambiente ambiente-5">
                    <p>AVAProgesp</p>
                    <a href="" class="btn">Acessar</a>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="ambiente ambiente-6">
                    <p>AVA Qualisaúde</p>
                    <a href="" class="btn">Acessar</a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="py-5 div-ead">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BefJHyO9_E4?si=0MzVtaPtfYuuBgU6"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-lg">
                <h1>
                    Como funciona o EAD SEDIS
                </h1>
                <hr>
                <span>
                    <p>
                        O ensino a distância é uma forma de educação que utiliza recursos tecnológicos para
                        conectar
                        alunos e professores fora do ambiente de sala de aula tradicional, oferecendo vantagens
                        como
                        flexibilidade, acessibilidade e interação com estudantes de diferentes partes do mundo.
                    </p>
                    <p>
                        Com a
                        evolução da tecnologia, é esperado que essa modalidade de ensino se torne ainda mais
                        popular
                        e
                        acessível, permitindo que pessoas de diferentes realidades tenham acesso à educação de
                        qualidade. Dessa forma, o ensino a distância se apresenta como uma opção educacional
                        flexível e
                        adaptável às necessidades de uma ampla variedade de estudantes em todo o mundo,
                        contribuindo
                        para o desenvolvimento pessoal e profissional desses indivíduos.
                    </p>
                </span>
            </div>
        </div>
    </div>
</div>
<div class="py-5 div-infos">
    <div class="container">
        <h1>
            Conheça a SEDIS
        </h1>
        <hr>
        <p>
            Informações sobre cursos, editais e nosso acervo.
        </p>
        <div class="row">
            <div class="col-lg">
                <div class="info info-1">
                    <img src="<?php echo get_template_directory_uri() . '/imgs/1.jpeg' ?>" class="img-fluid">
                    <h2>
                        Cursos
                    </h2>
                    <p>
                        Estude no seu próprio ritmo, em qualquer lugar e a qualquer hora
                    </p>
                    <a class="btn" href="/cursos">
                        Ver cursos
                    </a>
                </div>
            </div>
            <div class="col-lg">
                <div class="info info-2">
                    <img src="<?php echo get_template_directory_uri() . '/imgs/2.jpeg' ?>" class="img-fluid">
                    <h2>
                        Editais
                    </h2>
                    <p>
                        Fique por dentro das últimas seleções para fazer parte da nossa equipe
                    </p>
                    <a class="btn" href="/concursos">
                        Ver editais
                    </a>
                </div>
            </div>
            <div class="col-lg">
                <div class="info info-3">
                    <img src="<?php echo get_template_directory_uri() . '/imgs/3.jpeg' ?>" class="img-fluid">
                    <h2>
                        Acervo
                    </h2>
                    <p>
                        Veja aqui alguns dos trabalhos desenvolvidos pela secretaria
                    </p>
                    <button class="btn">
                        Ver acervo
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 div-noticias">
    <div class="container">
        <h1>Últimas notícias</h1>
        <hr>
        <p>
            Confira as novidades relacionadas à SEDIS e às suas parcerias
        </p>
        <div class="row">
            <?php
            $news_query = new WP_Query(
                array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                )
            );
            if ($news_query->have_posts()):
                while ($news_query->have_posts()):
                    $news_query->the_post();
                    $is_1st = $news_query->current_post == 0;
                    if ($is_1st):
                        ?>
                        <div class="col-12">
                            <a href="<?= the_permalink() ?>">
                                <div class="noticia noticia-1 d-flex">
                                    <img src="<?= the_post_thumbnail_url() ?>" alt="">
                                    <div class="conteudo d-flex flex-column">
                                        <p class="data">
                                            <?php the_date() ?>
                                        </p>
                                        <p class="titulo">
                                            <?php the_title() ?>
                                        </p>
                                        <a href="" class="mt-auto link">
                                            Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="col-lg-6">
                            <a href="<?= the_permalink() ?>" class="text-black">
                                <div class="noticia noticia-<?= $news_query->current_post + 1 ?>">
                                    <img src="<?= the_post_thumbnail_url() ?>" alt="" class="">
                                    <div>
                                        <h1 class="titulo my-3">
                                            <?php the_title() ?>
                                        </h1>
                                        <div class="texto">
                                            <?php the_excerpt() ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endif;
                endwhile;
            endif; ?>
        </div>
        <div class="d-flex">
            <a href="" class="btn ms-auto">
                Ver mais notícias
            </a>
        </div>
    </div>
</div>
<?php
get_template_part('/parts/contato')
    ?>


<?php get_footer(); ?>