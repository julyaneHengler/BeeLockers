<?php include("../config/config.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de reserva de guarda volumes para você aproveitar seu lazer sem ter que se preocupar com seus bens">
    <meta name="author" content="Geovani, Daniela, Julyane, Emily e Pedro">
    <meta name="keyword" content="Praia, armário, guarda volumes">
    <!-- CSS Reset -->
    <link rel="stylesheet" href="../css/reset.css">
    <!-- ícone página -->
    <link rel="shortcut icon" href="../assets/img/iconeBee.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <!-- CSS próprio -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleAgendar.css">
    <title>Bee Lockers - Agendar</title>
</head>

<body>

    <header>
        <!-- Início Cabeçalho -->
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">

                <a href="home.php" class="navbar-brand">
                    <img src="../assets/img/logo.jpeg" width="100" class="img-fluid">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="agenda.php" class="nav-link">Agendar</a>
                        </li>
                        <li class="nav-item">
                            <a href="quemSomos.php" class="nav-link">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a href="exibirClima.php" class="nav-link">Clima</a>
                        </li>
                        <li class="nav-item divisor"></li>
                        <li class="nav-item">
                            <a href="cadastroUsuario.php" class="nav-link">Inscrever-se</a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php" class="nav-link">Entrar</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <div class="bar-laranja"></div>
    </header><!-- Fim Cabeçalho -->

    <main>
        <!-- Início do Conteúdo Principal-->
        <section id="home">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md div-home text-center">
                        <h1>
                            <nobr>Bee <span>Lockers</span></nobr>
                        </h1>
                        <p>
                            Falta pouco para você ter acesso ao melhor sistemas de guarda volume. Cadastre-se e aproveite.
                        </p>
                        <p>
                            Se você já é cadastrado, <a href="home.php">Clique aqui</a> para fazer login.
                        </p>
                    </div>
                </div>

                <div class="row fw-bolder">
                    <div class="col-md div-home">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    Com apenas alguns cliques, acesse nossa agenda e reserve um lugar seguro para deixar seus itens pessoais. Viaje e descubra que dá para curtir uma praia sem preocupações.
                                    Nunca foi tão fácil agendar! 
                                </p>
                                
                                <p>
                                    E ai? Qual é a sua praia? Clique em agendar e Confira qual o melhor destino para você!
                                </p>

                                <a href="reserva.php" class="btn text-white btn-custom">Agendar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Início do Conteúdo das imagens - Carrossel-->
                    <div class="col-md div-home">
                        <div class="card">
                            <div class="card-body">
                                <div id="praia" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#praia1" data-slide-to="0" class="active"></li>
                                        <li data-target="#praia2" data-slide-to="1"></li>
                                        <li data-target="#praia3" data-slide-to="2"></li>
                                        <li data-target="#praia4" data-slide-to="3"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="../assets/imagem_praia/guaruja.png" alt="Guaruja">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="../assets/imagem_praia/itarare.jpg" alt="itarare">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="../assets/imagem_praia/praia_grande.jpg" alt="PraiaGrande">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="../assets/imagem_praia/ubatuba.jpg" alt="Ubatuba">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#praia" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#praia" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Próximo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim do Conteúdo das imagens - Carrossel-->
                </div>

            </div>
        </section>
    </main><!-- Fim do Conteúdo Principal-->

    <footer>
        <!--Início do rodapé-->
        <section class="container-fluid">
            <div class="row align-self-center">

                <div class="col-md-6 align-content-center">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100079971168000" target="_blank" class="btn">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank" class="btn">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D" target="_blank" class="btn">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank" class="btn">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-center">
                    <h4>Bee Lockers</h4>
                    <p>Diversão com segurança</p>
                </div>

            </div>
        </section>
    </footer>
    <!--Fim do rodapé-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>