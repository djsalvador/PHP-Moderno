<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>FORMULÁRIO EM PHP MODERNO - RESULTADO</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/infinito100x62.png" alt="Logo Avatar" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Página Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="form.html">Formulários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="opAritm.html">Operadores Aritméticos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exprAritm.html">Expressões Aritméticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="funcAritm.html">Funções Aritméticas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="desafios.html">Desafios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container"></br>
        <div class="container text-center">
            <p><strong>FORMULÁRIO PREENCHIDO</strong></p>
        </div>

        <?php
        $nome = $_GET["inputNome"];
        $sobrenome = $_GET["inputSobrenome"];
        $dataNasc = $_GET["inputDataNasc"];
        $sexo = $_GET["inputSexo"];
        $naturalidade = $_GET["inputNaturalidade"];
        $nacionalidade = $_GET["inputNacionalidade"];
        $nomePai = $_GET["inputPai"];
        $nomeMae = $_GET["inputMae"];
        $id = $_GET["inputID"];
        $cpf = $_GET["inputCPF"];
        $passaporte = $_GET["inputPassaporte"];
        $cartProf = $_GET["inputCartProf"];
        $habilitacao = $_GET["inputHabilitacao"];
        $titEleitor = $_GET["inputTitEleitor"];
        $endereco = $_GET["inputEndereco"];
        $numero = $_GET["inputNumero"];
        $complemento = $_GET["inputComplemento"];
        $bairro = $_GET["inputBairro"];
        $cidade = $_GET["inputCidade"];
        $estado = $_GET["inputEstado"];
        $cep = $_GET["inputCEP"];
        $email = $_GET["inputEmail"];
        $ddd = $_GET["inputDDD"];
        $telef = $_GET["inputTelef"];
        $estCivil = $_GET["inputEstCivil"];
        $nomeConjuge = $_GET["inputNomeConjuge"];
        $idadeConjuge = $_GET["inputIdadeConjuge"];
        $qtdeFilhos = $_GET["inputQtdeFilhos"];
        $sexoFilho = $_GET["inputSexoFilho"];
        $nomeFilho = $_GET["inputNomeFilho"];
        $idadeFilho = $_GET["inputIdadeFilho"];
        $cttAcidente = $_GET["inputCttAcidente"];
        $parentescoCTT = $_GET["inputParentescoCTT"];
        $telefCTT = $_GET["inputTelefCTT"];

        echo "<div class='container'>";
        echo "<table class='table table-striped table-bordered table-hover table-sm'>";
        echo    "<tbody>";
        echo        "<tr>";
        echo            "<th>NOME</th>";
        echo                "<td>$nome $sobrenome</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>DATA DE NASCIMENTO</th>";
        echo                "<td>$dataNasc</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>SEXO</th>";
        echo                "<td>$sexo</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NATURAL</th>";
        echo                "<td>$naturalidade</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NACIONALIDADE</th>";
        echo                "<td>$nacionalidade</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NOME DO PAI</th>";
        echo                "<td>$nomePai</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NOME DA MÃE</th>";
        echo                "<td>$nomeMae</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DA IDENTIDADE</th>";
        echo                "<td>$id</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DO CPF</th>";
        echo                "<td>$cpf</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DO PASSAPORTE</th>";
        echo                "<td>$passaporte</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DA CARTEIRA PROFISSIONAL</th>";
        echo                "<td>$cartProf</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DA HABILITAÇÃO</th>";
        echo                "<td>$habilitacao</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DO TÍTULO DE ELEITOR</th>";
        echo                "<td>$titEleitor</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>ENDEREÇO</th>";
        echo                "<td>$endereco</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO</th>";
        echo                "<td>$numero</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>COMPLEMENTO</th>";
        echo                "<td>$complemento</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>BAIRRO</th>";
        echo                "<td>$bairro</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>CIDADE</th>";
        echo                "<td>$cidade</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>ESTADO</th>";
        echo                "<td>$estado</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>CEP</th>";
        echo                "<td>$cep</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>EMAIL</th>";
        echo                "<td>$email</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>DDD</th>";
        echo                "<td>$ddd</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DO TELEFONE</th>";
        echo                "<td>$telef</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>ESTADO CIVIL</th>";
        echo                "<td>$estCivil</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NOME DO CONJUGE</th>";
        echo                "<td>$nomeConjuge</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>IDADE DO CONJUGE</th>";
        echo                "<td>$idadeConjuge</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>QTDE DE FILHOS</th>";
        echo                "<td>$qtdeFilhos</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>SEXO DO FILHO</th>";
        echo                "<td>$sexoFilho</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NOME DO FILHO</th>";
        echo                "<td>$nomeFilho</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>IDADE DO FILHO</th>";
        echo                "<td>$idadeFilho</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NOME DE UM CONTATO PARA CASO DE ACIDENTE</th>";
        echo                "<td>$cttAcidente</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>PARENTESCO DO CONTATO</th>";
        echo                "<td>$parentescoCTT</td>";
        echo        "</tr>";
        echo        "<tr>";
        echo            "<th>NÚMERO DO TELEFONE DO CONTATO</th>";
        echo                "<td>$telefCTT</td>";
        echo        "</tr>";
        echo    "</tbody>";
        echo "</table>";
        echo "</div>";
        ?>

    </main>

    <footer class="text-white bg-dark text-center">
        <div class="container">
            </br>
            <p>Treinamento em PHP MODERNO</p>
            <a class="navbar-brand" href="#"><img src="img/php-elef-100x71.png" alt="Logo" width="100" height="71"></a>
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