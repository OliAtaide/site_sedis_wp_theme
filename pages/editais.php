<?php /* Template Name: Editais */
get_header();
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
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-edital card-edital-aberto">
                    <div class="card-body d-flex flex-column">
                        <h6 class="mb-0">
                            Inscrições Abertas
                        </h6>
                        <hr>
                        <p class="titulo">
                            Edital 06/2023 – Seleção para o cargo de Professor(a) Formador(a) I e II do Sistema UAB
                            e UFRN – Ciência é Dez
                        </p>
                        <p class="data mt-auto">
                            12 de maio de 2023
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-edital card-edital-andamento">
                    <div class="card-body d-flex flex-column">
                        <h6 class="mb-0">
                            Em andamento
                        </h6>
                        <hr>
                        <p class="titulo">
                            Edital 06/2023 – Seleção para o cargo de Professor(a) Formador(a) I e II do Sistema UAB
                            e UFRN – Ciência é Dez
                        </p>
                        <p class="data mt-auto">
                            12 de maio de 2023
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card card-edital card-edital-concluido">
                    <div class="card-body d-flex flex-column">
                        <h6 class="mb-0">
                            Concluído
                        </h6>
                        <hr>
                        <p class="titulo">
                            Edital 06/2023 – Seleção para o cargo de Professor(a) Formador(a) I e II do Sistema UAB
                            e UFRN – Ciência é Dez
                        </p>
                        <p class="data mt-auto">
                            12 de maio de 2023
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
    </div>
</div>

<?php get_footer(); ?>