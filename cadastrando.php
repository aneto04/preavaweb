<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon" />
    <title>Cadastro - Pré Avaliação Web</title>
    <script>
        function cadastrosucesso(){
            setTimeout("window.location = 'index.html'")
        }
    </script>
/head>
<body>
    <?php
        $host = "localhost";
        $user = "root";
        $pass = "vertrigo";
        $banco = "preavaliacao";
        $conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
        mysql_select_db($banco) or die(mysql_error());
    ?>
    <?php
        $username = $_POST["username"];
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $posto = $_POST["posto"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sql = mysql_query("INSERT INTO usuarios(username, nome, sobrenome, posto, email, senha)
        VALUES('$username', '$nome', '$sobrenome', '$posto', '$email', '$senha')");
        echo "<script>cadastrosucesso()</script>";
    ?>
</body>
</html>