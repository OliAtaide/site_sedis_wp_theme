<?php /* Template Name: Cursos */
get_header();

$cursos = new WP_Query(
    array(
        'post_type' => 'cursos',
        'posts_per_page' => 9,
    )
);
?>
<div class="nav-cursos">
    <div class="container d-flex align-items-center">
        <div class="navbar-brand d-flex">
            <span class="material-symbols-outlined">
                school
            </span>
            Cursos
        </div>
        <div class="nav nav-tabs ms-auto">
            <button class="nav-link active px-5 py-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                Extensão
            </button>
            <button class="nav-link px-5 py-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                Graduação
            </button>
            <button class="nav-link px-5 py-3" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                Pós-graduação
            </button>
        </div>
    </div>
</div>
<div class="tab-content tabs-cursos" id="nav-tabContent">
    <div class="tab-pane fade show active my-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
        tabindex="0">
        <div class="tags my-3">
            <div class="container">
                <h6>Filtrar por</h6>
                <button class="btn btn-todos">
                    Todos
                </button>
                <button class="btn btn-aberto">
                    Inscrições Abertas
                </button>
                <button class="btn btn-andamento">
                    Em Andamento
                </button>
                <button class="btn btn-concluido">
                    Concluídos
                </button>
            </div>
        </div>
        <div class="div-extensao my-5">
            <div class="container">
                <h1>
                    Cursos de extensão
                </h1>
                <hr>
                <div class="row">
                    <?php if ($cursos->have_posts()):
                        while ($cursos->have_posts()):
                            $cursos->the_post();
                            ?>
                            <div class="col-4">
                                <img src="<?= the_post_thumbnail_url() ?>" alt="" class="img-fluid">
                                <div class="btn tag-aberto my-3">
                                    Inscrições abertas
                                </div>
                                <h2 class="titulo">
                                    <?= the_title() ?>
                                </h2>
                                <button class="btn btn-collapse collapsed p-0 mb-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseGraduacao1" aria-expanded="false"
                                    aria-controls="collapseGraduacao1">
                                    Mais informações
                                </button>
                                <div class="collapse" id="collapseGraduacao1">
                                    <p>
                                        <strong>Coordenador:</strong> Carlos David Cerqueira Feitor
                                        <br>
                                        <strong>E-mail:</strong> publicaead@gmail.com
                                    </p>
                                    <p>
                                        <strong>Vice-coordenador:</strong> Thiago Ferreira Dias
                                        <br>
                                        <strong>E-mail:</strong> thiago.ferreira.dias@gmail.com
                                    </p>
                                    <p>
                                        <strong>Secretária:</strong> Katia Shirley de Oliveira
                                        <br>
                                        <strong>Contato:</strong> Via Mandacaru Acadêmico
                                    </p>
                                    <p>
                                        <strong>Telefone:</strong> (84)99474-6656 / (84)3342-2250
                                        <br>
                                        <strong>Ramal:</strong> 126
                                    </p>
                                </div>
                                <br>
                                <a href="">
                                    Como ingressar
                                </a>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade my-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <div class="tags my-3">
            <div class="container">
                <h6>Filtrar por</h6>
                <button class="btn btn-todos">
                    Todos
                </button>
                <button class="btn btn-aberto">
                    Inscrições Abertas
                </button>
                <button class="btn btn-andamento">
                    Em Andamento
                </button>
                <button class="btn btn-concluido">
                    Concluídos
                </button>
            </div>
        </div>
        <div class="div-graduacao my-5">
            <div class="container">
                <h1>
                    Cursos de extensão
                </h1>
                <hr>
                <div class="row">
                    <?php if ($cursos->have_posts()):
                        while ($cursos->have_posts()):
                            $cursos->the_post();
                            ?>
                            <div class="col-4">
                                <img src="imgs/ph.png" alt="" class="img-fluid">
                                <div class="btn tag-aberto my-3">
                                    Inscrições abertas
                                </div>
                                <h2 class="titulo">
                                    <?= the_title() ?>
                                </h2>
                                <button class="btn btn-collapse collapsed p-0 mb-3" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseGraduacao1" aria-expanded="false"
                                    aria-controls="collapseGraduacao1">
                                    Mais informações
                                </button>
                                <div class="collapse" id="collapseGraduacao1">
                                    <p>
                                        <strong>Coordenador:</strong> Carlos David Cerqueira Feitor
                                        <br>
                                        <strong>E-mail:</strong> publicaead@gmail.com
                                    </p>
                                    <p>
                                        <strong>Vice-coordenador:</strong> Thiago Ferreira Dias
                                        <br>
                                        <strong>E-mail:</strong> thiago.ferreira.dias@gmail.com
                                    </p>
                                    <p>
                                        <strong>Secretária:</strong> Katia Shirley de Oliveira
                                        <br>
                                        <strong>Contato:</strong> Via Mandacaru Acadêmico
                                    </p>
                                    <p>
                                        <strong>Telefone:</strong> (84)99474-6656 / (84)3342-2250
                                        <br>
                                        <strong>Ramal:</strong> 126
                                    </p>
                                </div>
                                <br>
                                <a href="">
                                    Como ingressar
                                </a>
                            </div>
                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade my-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        <div class="tags my-3">
            <div class="container">
                <h6>Filtrar por</h6>
                <button class="btn btn-todos">
                    Todos
                </button>
                <button class="btn btn-aberto">
                    Inscrições Abertas
                </button>
                <button class="btn btn-andamento">
                    Em Andamento
                </button>
                <button class="btn btn-concluido">
                    Concluídos
                </button>
            </div>
        </div>
        <div class="div-posgrad">
            <div class="container">
                <h1>
                    Cursos de extensão
                </h1>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <img src="imgs/ph.png" alt="" class="img-fluid">
                        <div class="btn tag-aberto my-3">
                            Inscrições abertas
                        </div>
                        <h2 class="titulo">
                            Conselho escolar
                        </h2>
                        <a href="">
                            Como ingressar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...
    </div>
</div>

<?php get_footer(); ?>