<?php
    require 'configs/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Fim Meta -->

        <!-- CSS -->
        <link rel="stylesheet" href="./public/css/bootstrap.css" />
        <link rel="stylesheet" href="./public/css/style.css" />
        <!-- Fim CSS -->

        <!-- Title -->
        <title>Caravan</title>
        <!-- Fim Title -->
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 px-5 shadow-sm">
            <a href="index.html" class="navbar-brand">
                <img src="./public/img/caravan.svg" alt="Caravan" />
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Abrir Navegação"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle font-weight-bold text-dark"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Locais</a
                        >
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="local.html">California</a>
                            <a class="dropdown-item" href="local.html">Paris</a>
                            <a class="dropdown-item" href="local.html">Dublin</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark ml-md-3" href="planos.html">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark ml-md-3" href="contato.html">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link font-weight-bold text-dark ml-md-3"
                            href="#"
                            data-toggle="modal"
                            data-target="#modalLogin"
                            >Login</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary ml-md-3 font-weight-bold" href="inscricao.html"
                            >Inscreva-se</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Fim Navbar -->

        <!-- Carousel -->
        <div class="container-fluid">
            <div class="row bg-dark text-white">
                <div class="col-lg-7 p-0">
                    <div id="carouselCidades" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselCidades" data-slide-to="1"></li>
                            <li data-target="#carouselCidades" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="./public/img/california.jpg" alt="California" />
                                <div class="carousel-caption">
                                    <h3 class="display-4">California</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/paris.jpg" alt="California" />
                                <div class="carousel-caption">
                                    <h3 class="display-4">Paris</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./public/img/dublin.jpg" alt="California" />
                                <div class="carousel-caption">
                                    <h3 class="display-4">Dublin</h3>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 p-5 p-lg-4 align-self-center">
                    <h1 class="display-4 text-center">Realize a viagem do seu sonho</h1>
                    <p class="lead text-center">O melhor local para viajar é com a Caravan, mais de 5.000 excursões concluídas.</p>
                    <form action="">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" />
                            <span class="input-group-append">
                                <button class="btn btn-primary" type="button">Inscreva-se</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Fim Carousel -->

        <!-- Conteudo -->
        <?php  
            require 'configs/section.php';
        ?>
        <!-- Fim Conteudo -->
        <!-- Script -->
        <script src="./public/js/jquery-3.6.0.min.js"></script>
        <script src="./public/js/bootstrap.js"></script>
        <script src="./public/js/app.js"></script>
        <!-- Fim Script -->
    </body>
</html>
