<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>DESAFIOS EM PHP MODERNO</title>
</head>

<body class="corpo">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/php-logo.png" alt="Logo" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">Página Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../form.html">Formulários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../opAritm.html">Operadores Aritméticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../exprAritm.html">Expressões Aritméticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../funcAritm.html">Funções Aritméticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Desafios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container"></br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title center">DESAFIOS EM PHP MODERNO</h5>
                        <p class="card-text center">Exercícios resolvidos em PHP Moderno.</p>
                    </div>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Sucessor e Antecessor:</h4>
                        </p>
                        <p class="card-text">
                        <p><span class="badge badge-danger">Exercício:</span> O usuário deverá inserir um número (entre 0 e 100) e o sistema deverá gerar o seu antecessor e o seu sucessor.</p>
                        </p>
                        <form action="respDesafioAntSuc.php" method="get" class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="numAntecSucess" class="sr-only">Número</label>
                                <input type="number" name="numAntecSucess" id="numAntecSucess" class="form-control" min="0" max="100">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Número Aleatório:</h4>
                        </p>
                        <p class="card-text">
                        <p><span class="badge badge-danger">Exercício:</span> Gerar um número de forma aleatória (randômica) entre 0 e 100.</p>
                        </p>
                        <form action="respNumRandom.php" method="get" class="form-inline">
                            <button type="submit" class="btn btn-primary mb-2">Gerar Número em outra aba.</button>
                        </form>
                        <?php
                        $min = 0;
                        $max = 100;
                        $num = mt_rand($min, $max);
                        echo "<button class='btn btn-primary mb-2' onClick='document.location.reload()'>Gerar Número ao lado:</button> <span class='badge badge-warning'>NÚMERO GERADO: $num </span>";
                        ?>

                    </div>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Conversor de Moeda:</h4>
                        </p>
                        <p class="card-text">
                        <p><span class="badge badge-danger">Exercício:</span> O usuário deverá inserir o valor em reais e a cotação do dolar do dia e o sistema deverá gerar o resultado.</p>
                        </p>
                        <form action="respConvMoeda.php" method="get" class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <p><span class="badge badge-warning">R$</span></p>
                                <label for="reais" class="sr-only">Reais</label>
                                <input type="double" name="reais" id="reais" class="form-control" placeholder="Reais">
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <p><span class="badge badge-warning">R$</span></p>
                                <label for="cotacao" class="sr-only">Cotação</label>
                                <input type="double" name="cotacao" id="cotacao" class="form-control" placeholder="Cotação U$ 1 = ">
                            </div>
                            <p><button type="submit" class="btn btn-primary mb-2">Calcular</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div></br>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Conversor de Moeda (API):</h4>
                        </p>
                        <p class="card-text">
                        <p><span class="badge badge-danger">Exercício:</span> O usuário deverá inserir o valor em reais e o sistema puxa a cotação da API do BC.</p>
                        </p>
                        <form action="respConvMoedaAPI.php" method="get" class="form-inline">
                            <div class="form-group mx-sm-3 mb-2">
                                <p><span class="badge badge-warning">R$</span></p>
                                <label for="reais" class="sr-only">Reais</label>
                                <input type="double" name="reais" id="reais" class="form-control" placeholder="Reais">
                            </div>
                            <p><button id="btnCot" type="submit" class="btn btn-primary mb-2">Calcular</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div></br>

    </main></br>

    <footer class="text-white bg-dark text-center">
        <div class="container">
            </br>
            <p>Treinamento em PHP MODERNO</p>
            <a class="navbar-brand" href="#"><img src="../img/php-elef-100x71.png" alt="Logo" width="100" height="71"></a>
            <p>Para mais informações entre em contato com o desenvolvedor.</p>
            <p>D.Salvador</p>
            </br>
        </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>