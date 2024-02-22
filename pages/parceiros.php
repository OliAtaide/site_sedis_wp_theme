<?php /* Template Name: Parceiros */
get_header();
?>

<div class="div-parceiros my-5">
    <div class="container">
        <h1>Parceiros</h1>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-body d-flex justify-content-center align-items-center">
                    <img src="imgs/logo_20.svg" alt="" class="card-img w-50">
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-body d-flex justify-content-center align-items-center">
                    <img src="imgs/logo_20.svg" alt="" class="card-img w-50">
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-body d-flex justify-content-center align-items-center">
                    <img src="imgs/logo_20.svg" alt="" class="card-img w-50">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="div-interesse my-5">
    <div class="container">
        <h1>
            Áreas de interesse
        </h1>
        <hr>
        <p>
            Principais áreas de interesse da SEDIS
        </p>
        <div class="tags d-flex flex-wrap">
            <div class="btn tag-1">
                Educação
            </div>
            <div class="btn tag-2">
                Ensino a Distância
            </div>
            <div class="btn tag-3">
                Ambientes Virtuas de Aprendizado
            </div>
            <div class="btn tag-4">
                Saúde
            </div>
            <div class="btn tag-5">
                Rural
            </div>
            <div class="btn tah-6">
                Idiomas
            </div>
            <div class="btn tag-1">
                Tecnologia
            </div>
        </div>
    </div>
</div>
<div class="div-parceiros-seja my-5">
    <div class="container">
        <h1>Seja um parceiro</h1>
        <hr>
    </div>
</div>
<?php
get_template_part( '/parts/contato' )
?>

<?php get_footer(); ?>