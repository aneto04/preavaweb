<?php

    require 'config.php';
    require 'connection.php';



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon"/>

    <title>Cadastro de usuários - Pré Avaliação Web</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro-style.css">


</head>
<body>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

<div class="container-fluid">

    <div class="barraMenu row">
        <header id="header">
            <img id="logoBranco" src="imagens/logo-branca.png">
        </header>
    </div>

    <div class="background-cadastro row col-xs-12 col-sm-11 col-md-8 col-lg-8">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" role="main">

            <h1 id="tituloCadastro"><b>Cadastro de Usuário</b></h1>

            <form action="cadastrando.php" method="post" id="formCadastro">

                <h3>
                    <div class="tituloSection">Dados gerais</div>
                </h3>

                <section>

                    <!-- ====================================== Foto do Perfil ===================================== -->

                    <div id="perfilFoto" class="col-xs-12 col-sm-4">
                        <img id="imgPerfil" src="imagens/usuarios/default.jpg" align="left">

                        <label id="alterarImgPerfil" for="enviarFoto">
                            <p align="left">alterar</p>
                        </label>
                        <input type="file" id="enviarFoto">
                        <br>
                    </div>

                    <!-- ===================================== Nome completo ======================================= -->

                    <div class="dadosGerais col-xs-12 col-sm-4">
                        <label for="nomeCompleto">Nome completo</label>
                        <br>

                        <input id="nomeCompleto" type="text" required="">

                    </div>

                    <!-- ==================================== Nome de exibição ===================================== -->

                    <div class="dadosGerais col-xs-12 col-sm-4">
                        <label for="nomeExibido">Nome de exibição</label>
                        <br>

                        <input id="nomeExibido" type="text" required="">

                    </div>

                    <!-- ===================================== Data de Entrada ===================================== -->

                    <div class="dadosGerais col-xs-12 col-sm-4">
                        <label for="dataEntrada">Entrada</label>
                        <br>

                        <input id="dataEntrada" type="date" required="">

                    </div>

                    <!-- ===================================== Nome de Usuário ===================================== -->

                    <div class="dadosGerais col-xs-12 col-sm-4">
                        <label for="username">Nome de usuário</label>
                        <br>

                        <input id="username" type="text" required="">

                    </div>

                    <!-- ============================================ Cargo ======================================== -->
                    <div class="dadosGerais col-xs-12 col-sm-4">

                                <label for="cargo">Cargo</label>
                                <br>

                                <select id="cargo" class="dadosGerais col-xs-12 col-sm-12">

                                    <option value="aspirante">Aspirante</option>
                                    <option value="estagiario">Estagiário</option>
                                    <option value="produtor">Produtor(a)</option>

                                </select>

                        </div>
                    <!-- =========================================== Sexo ========================================== -->

                    <div class="col-xs-12 col-sm-4">

                        <label>Sexo</label>
                        <br>

                        <input type="radio" name="sexo" class="sexos" id="masc" value="masculino" checked="">
                        
                    </div>
                    </div>

                </section>

                <br>

                <h3>
                    <div class="tituloSection">Dados pessoais</div>
                </h3>

                <section>
                    <!-- =========================================== CPF =========================================== -->

                    <div class="dadosPessoais col-xs-12 col-sm-4">
                        <label for="cpf">CPF</label>
                        <br>

                        <input type="text" id="cpf">
                    </div>

                    <!-- ============================================ RG =========================================== -->

                    <div class="dadosPessoais col-xs-12 col-sm-4">
                        <label for="rg">RG</label>
                        <br>

                        <input type="text" id="rg" required="">
                    </div>

                    <!-- =================================== Data de nascimento ==================================== -->

                    <div class="dadosPessoais col-xs-12 col-sm-4">
                        <label for="nascimento">Data de nascimento</label>
                        <br>

                        <input type="date" id="nascimento" required="">
                    </div>

                    <!-- ======================================= Nome da mãe ======================================= -->

                    <div class="dadosPessoais col-xs-12 col-sm-4">
                        <label for="nomeMae">Nome da mãe</label>
                        <br>

                        <input type="text" id="nomeMae" required="">
                    </div>

                    <!-- ======================================= Nome do pai ======================================= -->

                    <div class="dadosPessoais col-xs-12 col-sm-4">
                        <label for="nomePai">Nome do Pai</label>
                        <br>

                        <input type="text" id="nomePai" required="">
                    </div>

                </section>

                <br>

                <h3>
                    <div class="tituloSection">Contatos</div>
                </h3>
                <section>
                    <!-- ========================================= Endereço ======================================== -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="endereco">Endereço</label>
                        <br>

                        <input type="text" id="endereco" required="">
                    </div>

                    <!-- ====================================== Número da casa ===================================== -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="numCasa">Número</label>
                        <br>

                        <input type="text" id="numCasa" required="">
                    </div>

                    <!-- ========================================== Bairro ========================================= -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="bairro">Bairro</label>
                        <br>

                        <input type="text" id="bairro" required="">
                    </div>

                    <!-- =========================================== CEP =========================================== -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="cep">CEP</label>
                        <br>

                        <input type="text" id="cep" required="">
                    </div>

                    <!-- ========================================= Telefone ======================================== -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="telefone">Telefone</label>
                        <br>

                        <input type="text" id="telefone" required="">
                    </div>

                    <!-- ========================================== Email ========================================== -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="email">E-mail</label>
                        <br>

                        <input type="email" id="email" required="">
                    </div>

                    <!-- ========================================== Senha ========================================== -->

                    <div class="contatos col-xs-12 col-sm-4">
                        <label for="senha">Senha</label>
                        <br>

                        <input type="text" id="senha" required="">
                    </div>

                </section>
                <br>

                <input type="submit" id="botaoCadastro" value="Cadastrar">

            </form>
        </div>
    </div>
    <footer class="rodape row">
        <p>
            2015 <abbr title="Instituto Tecnológico e Vocacional Avançado">ITEVA</abbr> &copy; - Todos os direitos reservados
        </p>
    </footer>
</div>
</body>
</html>