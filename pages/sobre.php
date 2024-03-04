<?php /* Template Name: Sobre */
get_header();


$json = file_get_contents(get_theme_file_uri() . '/json/sobre.json');

// Decode the JSON file
$json_data = json_decode($json, true);

?>


<div class="div-sobre py-5">
    <div class="container">
        <h1>
            Sobre
        </h1>
        <hr>
        <div class="d-flex">
            <div class="texto-sobre w-50">
                <p>
                    A Secretaria de Educação a Distância da Universidade Federal do Rio Grande do Norte foi criada
                    em
                    junho
                    de 2003, com o objetivo de fomentar a Educação na sua modalidade a distância e estimular o uso
                    das
                    tecnologias de informação e comunicação como ferramenta de ensino e aprendizagem. Funcionando na
                    Praça
                    Cívica do Campus Central, a SEDIS está em condições de prestar assessoria pedagógica e técnica
                    para
                    projetos de cursos a distância.
                    A estrutura organizacional da SEDIS-UFRN, de acordo com o Regimento da Instituição, compreende:
                </p>
                <h6>
                    Gabinete do(a) Secretário(a)
                </h6>
                <ul>
                    <li>
                        Assessoria Técnica
                    </li>
                    <li>
                        Cordenadorias
                        <ul>
                            <li>
                                Pedagógica (COORDPED)
                            </li>
                            <li>
                                Administrativa e de Projetos (CAP)
                            </li>
                            <li>
                                Tecnologia da Informação (CTI)
                            </li>
                            <li>
                                Produção de Materiais Didáticos (CPMD)
                            </li>
                        </ul>
                    </li>
                    <li>
                        Secretaria Administrativa
                    </li>
                </ul>
                <p>
                    A SEDIS conta ainda com uma estrutura de apoio representada pela Divisão Patrimonial.
                </p>
                <span>
                    SEDIS – UFRN – Campus Universitário – Praça Cívica – Natal/RN – CEP 59.078-970 – (84) 3342-2250
                    –
                    secretaria.sedis.ufrn@gmail.com
                </span>
            </div>
            <div class="d-flex align-items-center justify-content-center w-50">
                <img src="<?php echo get_theme_file_uri() . '/imgs/about_us.svg' ?>" alt="">
            </div>
        </div>
    </div>
</div>
<div class="div-servicos py-5">
    <div class="container">
        <h1>Serviços</h1>
        <hr>
        <div class="row">
            <?php foreach ($json_data['servicos'] as $servico): ?>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <a class="link-servico" href="<?php echo $servico['href'] ?>">
                        <div class="card card-servico">
                            <div class="card-body d-flex">
                                <span class="mdi <?php echo $servico['icone'] ?>"></span>
                                <span>
                                    <?php echo $servico['texto'] ?>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</div>
<div class="div-materiais py-5">
    <div class="container">
        <h1>
            Materiais de educação e comunicação
        </h1>
        <hr>
        <p>
            Conheça os formatos de materiais produzidos pela SEDIS
        </p>
        <div class="row">
            <div class="col-sm-6">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo get_theme_file_uri() . '/imgs/reading.svg' ?>" alt="" class="img-fluid">
                </div>
                <h5>
                    Editoração Impressa
                </h5>
                <p>
                    Realizamos a editoração impressa de materiais didáticos próprios e de publicações produzidas por
                    outras unidades da Universidade Federal do Rio Grande do Norte.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo get_theme_file_uri() . '/imgs/ebook.svg' ?>" alt="" class="img-fluid">
                </div>
                <h5>
                    E-books
                </h5>
                <p>
                    Editamos e-books a partir de materiais didáticos e de livros impressos produzidos por outros
                    setores da Universidade Federal do Rio Grande do Norte.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo get_theme_file_uri() . '/imgs/press.svg' ?>" alt="" class="img-fluid">
                </div>
                <h5>
                    Audiovisual
                </h5>
                <p>
                    Possuímos um setor específico para as produções audiovisuais, como vídeos institucionais,
                    promocionais e reportagens. Além disso, um estúdio é disponibilizado para a produção de
                    videoaulas.
                </p>
            </div>
            <div class="col-sm-6">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo get_theme_file_uri() . '/imgs/files.svg' ?>" alt="" class="img-fluid">
                </div>
                <h5>
                    Digitais e Interativos
                </h5>
                <p>
                    Produzimos materiais digitais e interativos para dar maior visibilidade aos conteúdos produzidos
                    por professores especialistas em várias áreas do conhecimento.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="div-sede py-5">
    <div class="container">
        <h1 class="titulo">Nossa sede</h1>
        <hr>
        <p>
            Conheça nossa sede principal
        </p>
        <iframe width="600" height="500" id="gmap_canvas"
            src="https://maps.google.com/maps?q=sedis&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
            scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>
<div class="div-apoio py-5">
    <div class="container">
        <h1>
            Polos de apoio
        </h1>
        <hr>
        <p class="texto">
            Conheça nossos polos acadêmicos
        </p>
        <?php
        $polos = new WP_Query(
            array(
                'post_type' => 'polos',
                'posts_per_page' => -1,
            )
        );
        ?>
        <ul class="nav nav-tabs nav-fill border-0" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                    type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                    UAB
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    IMD
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                    type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                    E-TEC
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                tabindex="0">
                <?php
                $i = 0;
                if ($polos->have_posts()):
                    while ($polos->have_posts()):
                        $polos->the_post();
                        if (has_term('uab', 'polo_cat')):
                            ?>
                            <div class="collapse-field">
                                <p>
                                    <button class="btn w-100 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePoloUAB<?= $i ?>" aria-expanded="false"
                                        aria-controls="collapsePoloUAB<?= $i ?>">
                                        <span>
                                            <?= the_title() ?>
                                        </span>
                                    </button>
                                </p>
                                <div class="collapse" id="collapsePoloUAB<?= $i ?>">
                                    <?= the_content() ?>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <?php
                $i = 0;
                if ($polos->have_posts()):
                    while ($polos->have_posts()):
                        $polos->the_post();
                        if (has_term('imd', 'polo_cat')):
                            ?>
                            <div class="collapse-field">
                                <p>
                                    <button class="btn w-100 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePoloIMD<?= $i ?>" aria-expanded="false"
                                        aria-controls="collapsePoloIMD<?= $i ?>">
                                        <span>
                                            <?= the_title() ?>
                                        </span>
                                    </button>
                                </p>
                                <div class="collapse" id="collapsePoloIMD<?= $i ?>">
                                    <?= the_content() ?>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <?php
                $i = 0;
                if ($polos->have_posts()):
                    while ($polos->have_posts()):
                        $polos->the_post();
                        if (has_term('etec', 'polo_cat')):
                            ?>
                            <div class="collapse-field">
                                <p>
                                    <button class="btn w-100 collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePoloETEC<?= $i ?>" aria-expanded="false"
                                        aria-controls="collapsePoloETEC<?= $i ?>">
                                        <span>
                                            <?= the_title() ?>
                                        </span>
                                    </button>
                                </p>
                                <div class="collapse" id="collapsePoloETEC<?= $i ?>">
                                    <?= the_content() ?>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<div class="div-perguntas py-3">

    <div class="container">
        <h1>
            Dúvidas Frequentes
        </h1>
        <hr>
        <?php
        $duvidas = new WP_Query(
            array(
                'post_type' => 'duvidasfrequentes',
                'posts_per_page' => -1,
            )
        );
        $i = 0;
        if ($duvidas->have_posts()):
            while ($duvidas->have_posts()):
                $duvidas->the_post();
                ?>
                <div class="collapse-field">
                    <p>
                        <button class="btn w-100 collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseDuvida<?= $i ?>" aria-expanded="false"
                            aria-controls="collapseDuvida<?= $i ?>">
                            <span>
                                <?= the_title() ?>
                            </span>
                        </button>
                    </p>
                    <div class="collapse" id="collapseDuvida<?= $i ?>">
                        <?= the_content() ?>
                    </div>
                </div>
                <?php
                $i++;
            endwhile;
        endif;
        ?>
    </div>
</div>
<div class="card-social py-5">
    <div class="container">
        <h3>
            Redes sociais
        </h3>
        <div class="social-icones">
            <a href="" class="btn">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="btn">
                <i class="bi bi-youtube"></i>
            </a>
            <a href="" class="btn">
                <i class="bi bi-instagram"></i>
            </a>
        </div>
    </div>
</div>

<?php get_footer(); ?>