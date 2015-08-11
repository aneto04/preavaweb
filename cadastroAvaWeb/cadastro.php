<?php

    include "connection.php";

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
<?php

include "connection.php";

if(isset($_POST['enviar'])) {
    $username = $_POST['username'];
    $nome_completo = $_POST['nomeCompleto'];
    $nome_exibido = $_POST['nomeExibido'];
    $entrada = $_POST['dataEntrada'];
    $cargo = $_POST['cargo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nascimento = $_POST['dataNascimento'];
    $nome_mae = $_POST['nomeMae'];
    $nome_pai = $_POST['nomePai'];
    $endereco = $_POST['endereco'];
    $num_casa = $_POST['numCasa'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = 'INSERT INTO usuarios(username, nome_completo, nome_exibido, entrada, cargo, cpf, rg, nascimento, nome_mae, nome_pai, endereco, num_casa, bairro, cep, telefone, email, senha)
        VALUES (:username, :nome_completo, :nome_exibido, :entrada, :cargo, :cpf, :rg, :nascimento, :nome_mae, :nome_pai, :endereco, :num_casa, :bairro, :cep, :telefone, :email, :senha)';

    try {
        $create = $db -> prepare($sql);
        $create -> bindValue(':username', $username, PDO::PARAM_STR);
        $create -> bindValue(':nome_completo', $nome_completo, PDO::PARAM_STR);
        $create -> bindValue(':nome_exibido', $nome_exibido, PDO::PARAM_STR);
        $create -> bindValue(':entrada', $entrada, PDO::PARAM_STR);
        $create -> bindValue(':cargo', $cargo, PDO::PARAM_STR);
        $create -> bindValue(':cpf', $cpf, PDO::PARAM_STR);
        $create -> bindValue(':rg', $rg, PDO::PARAM_STR);
        $create -> bindValue(':nascimento', $nascimento, PDO::PARAM_STR);
        $create -> bindValue(':nome_mae', $nome_mae, PDO::PARAM_STR);
        $create -> bindValue(':nome_pai', $nome_pai, PDO::PARAM_STR);
        $create -> bindValue(':endereco', $endereco, PDO::PARAM_STR);
        $create -> bindValue(':num_casa', $num_casa, PDO::PARAM_STR);
        $create -> bindValue(':bairro', $bairro, PDO::PARAM_STR);
        $create -> bindValue(':cep', $cep, PDO::PARAM_STR);
        $create -> bindValue(':telefone', $telefone, PDO::PARAM_STR);
        $create -> bindValue(':email', $email, PDO::PARAM_STR);
        $create -> bindValue(':senha', $senha, PDO::PARAM_STR);

        if ($create->execute()) {
            echo "Sucesso ao inserir dados;";
        }

    } catch (PDOException $e) {
        echo "Erro ao inserir dados;";
    }
}
?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/jquery.masked.js"></script>
<script>
    $(document).ready(function(){
        $("#cpf").mask("999.999.999-99");
        $(".datas").mask("99/99/9999");
        $("#cep").mask("99999-999");
        $("#telefone").mask("(99) 99999-9999");
    });
</script>

<div class="container-fluid">

    <div class="barraMenu row">
        <header id="header">
            <img id="logoBranco" src="imagens/logo-branca.png">
        </header>
    </div>

    <div class="background-cadastro row col-xs-12 col-sm-11 col-md-8 col-lg-8">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" role="main">

            <h1 id="tituloCadastro"><b>Cadastro de Usuário</b></h1>

            <form action="" method="post" id="formCadastro">

                <h3 class="row">
                    <div class="tituloSection">Dados gerais</div>
                </h3>

                <section class="row">

                    <!-- ====================================== Foto do Perfil ===================================== -->

                    <div id="perfilFoto" class="col-xs-12 col-sm-4">

                        <label for="enviarFoto" class="col-xs-12">
                            <figure>

                                <img id="imgPerfil" src="imagens/usuarios/default.jpg">
                                <figcaption id="alterarImgPerfil">alterar</figcaption>

                            </figure>
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

                        <input id="dataEntrada" class="datas" type="text" required="">

                    </div>

                    <!-- ===================================== Nome de Usuário ===================================== -->

                    <div class="dadosGerais col-xs-12 col-sm-4">
                        <label for="username">Nome de usuário</label>
                        <br>

                        <input id="username" type="text" required="">

                    </div>

                    <!-- ============================================ Cargo ======================================== -->
                    <div class="dadosGerais col-xs-12 col-sm-4">
                        <div>
                            <label for="cargo">Cargo</label>
                            <br>

                            <select id="cargo">

                                <option value="aspirante">Aspirante</option>
                                <option value="estagiario">Estagiário</option>
                                <option value="produtor">Produtor(a)</option>

                            </select>

                        </div>
                    </div>
                    <!-- ======================================= Sexo ====================================== -->

                    <div class="col-xs-12 col-sm-4">

                        <label>Sexo</label>
                        <br>

                        <input type="radio" name="sexo" class="sexos" id="masc" value="masculino" checked="">
                        <label for="masc">Masculino</label>
                        <br>
                        <input type="radio" name="sexo" class="sexos" id="fem" value="feminino">
                        <label for="fem">Feminino</label>

                    </div>

                </section>

                <br>

                <h3 class="row">
                    <div class="tituloSection col-xs-12">Dados pessoais</div>
                </h3>

                <section class="row">
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

                        <input type="text" class="datas" id="nascimento" required="">
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

                <h3 class="row">
                    <div class="tituloSection col-xs-12">Contatos</div>
                </h3>
                <section class="row">
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

                        <input type="password" id="senha" required="">
                    </div>

                </section>
                <br>
                <input type="submit" id="enviar" value="Cadastrar">

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