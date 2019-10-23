<?php
    session_start();

    if (!isset($_COOKIE["sessionID"])) {
        header("Location: ../");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastro de Imóveis</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="css/administrativo.css">
        <link rel="stylesheet" href="css/cadastro.css">
    </head>
    <body>
        <section>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <nav class="navbar navbar-expand-lg navbar-light sticky-top pt-0">
                            <a class="navbar-brand pt-0" href="../index.html">
                                <img class="logo-bonfins" src="../assets/images/logo-bonfins3.png">
                            </a>
                            <button 
                            class="navbar-toggler mt-2" 
                            type="button" 
                            data-toggle="collapse" 
                            data-target="#navbarSupportedContent" 
                            aria-controls="navbarSupportedContent" 
                            aria-expanded="false" 
                            aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                    
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="mt-2 mr-3">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="cadastroFuncionario.php">Cadastrar Funcionário</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="cadastroCliente.php">Cadastrar Cliente</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="listagemFuncionario.php">Listar Funcionários</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="listagemCliente.php">Listar Clientes</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="listagemImovel.php">Listar Imóveis</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="listagemInteresse.php">Listar Interesses</a>
                                    </li>
                                    <li class="mt-2 mr-3">
                                        <a href="../php/logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 px-0">
                        <div id="admContainer">
                            <div class="container">
                                <div class="jumbotron">
                                    <h1 class="display-4">Cadastro de Imóveis</h1>
                                    <hr class="my-3">
                                    <form>
                                        <div class="form-group">
                                            <label for="tipoImovel">Tipo do Imóvel</label>
                                            <select 
                                            class="form-control" 
                                            name="tipoImovel" 
                                            id="inputTipoImovel">
                                                <option value="0" selected>Selecione um</option>
                                                <option value="1">Casa</option>
                                                <option value="2">Apartamento</option>
                                            </select>
                                        </div>
                                        <div id="campos"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <footer class="text-center p-0" id=footer>
                            <small>Imobiliária Bonfins<span>&reg</span></small>
                        </footer>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <script src="../jquery/jquery-3.4.1.js"></script>
    <script src="../popper/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../jquery/jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
    <script src="js/cadastroImovel.js"></script>
</html>