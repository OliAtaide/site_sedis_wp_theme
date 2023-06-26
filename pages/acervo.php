<?php /* Template Name: Acervo */
get_header();
?>

<nav class="navbar navbar-expand-lg nav-acervo">
    <div class="container-fluid container">
        <a class="navbar-brand" href="#">
            Acervo
        </a>
        <form class="d-flex" role="search">
            <div class="form-control rounded-pill ms-auto w-auto">
                <button class="btn p-0">
                    <i class="bi bi-search"></i>
                </button>
                <input type="text" placeholder="Buscar material">
            </div>
        </form>
    </div>
</nav>
<main>
    <div class="div-acervo">
        <div class="container d-flex">
            <nav class="sidebar px-2 py-4">
                <ul class="ul1">
                    <li>
                        <button class="btn p-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ul2"
                            aria-expanded="false" aria-controls="ul2">
                            Livros didáticos
                        </button>
                        <ul class="ps-3 ul2 collapse" id="ul2">
                            <li>
                                <button class="btn p-0 collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#ul3" aria-expanded="false" aria-controls="ul3">
                                    Bacharelado
                                </button>
                                <ul class="ps-3 ul3 collapse" id="ul3">
                                    <li>
                                        <div class="btn p-0">
                                            Administração pública
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="acervo-main">
                <h1>
                    Livros didáticos Ciências Biológicas
                </h1>
                <hr>
                <div class="d-flex align-items-center">
                    <span class="texto-quantidade">
                        18 de 56 livros
                    </span>
                    <form class="d-flex ms-auto" role="search">
                        <div class="form-control rounded-pill ms-auto w-auto">
                            <button class="btn p-0">
                                <i class="bi bi-search"></i>
                            </button>
                            <input type="text" placeholder="Buscar livro">
                        </div>
                    </form>
                </div>
                <div class="acervo-titulo my-4 d-flex flex-column justify-content-center align-items-center">
                    <span class="material-symbols-outlined">
                        potted_plant
                    </span>
                    Biologia
                </div>
                <div class="row row-cols-4 align-items-stretch">
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="button botao-livro">
                            <img class="img-fluid" src="imgs/ph.png" alt="">
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
    </div>
</main>

<?php get_footer(); ?>