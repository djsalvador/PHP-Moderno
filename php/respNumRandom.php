<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>NÚMERO ALEATÓRIO - RESPOSTAS DO DESAFIO EM PHP MODERNO</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../img/infinito100x62.png" alt="Logo Avatar" height="45">
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
                            <a class="nav-link" href="../desafios.html">Desafios</a>
                        </li>
                        <p class="center" ></p>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container"></br>
        <div class="container text-center">
            <p><strong>RESULTADO - NÚMERO ALEATÓRIO</strong></p>
        </div>
        
        <p>
            <?php
            $num = random_int(0, 100);
            echo    "<div class='card-body center'>";
            echo        "<h5 class='center'><span class='badge badge-warning'>NÚMERO GERADO:</span></h5></br>";
            echo        "<h1 class='card-subtitle mb-2 text-muted'>$num</h1>";
            echo    "</div>";
            echo "<p class='center'><button class='btn btn-primary' onclick='javacript:history.go(-1)'>Voltar</button></p>";
            ?>
        </p>
        
    </main>

    <footer class="text-white bg-dark text-center">
        <div class="container">
            </br>
            <p>Sites de Testes em PHP MODERNO</p>
            <p>Para mais informações entre em contato com o desenvolvedor.</p>
            <p>D.Salvador</p>
            </br>
        </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>