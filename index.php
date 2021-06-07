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
            <a href="/" class="navbar-brand">
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
                            <a class="dropdown-item" href="/locais">California</a>
                            <a class="dropdown-item" href="/locais">Paris</a>
                            <a class="dropdown-item" href="/locais">Dublin</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark ml-md-3" href="/planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark ml-md-3" href="/contato">Contato</a>
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
                        <a class="btn btn-outline-primary ml-md-3 font-weight-bold" href="/inscricao"
                            >Inscreva-se</a
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Fim Navbar -->

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
