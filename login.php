<?php
$host = "localhost";
$user = "root";
$pass = "vertrigo";
$banco = "preavaliacao";
$conexao = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<html>
<head lang="pt-br">
    <link rel="shortcut icon" href="imagens/icon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <title>Login - Pré Avaliação Web</title>
    <script src="js/script-login.js"></script>
<body>

    <?php
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    $sql = mysql_query("SELECT * FROM usuarios WHERE username = '$username' and senha = '$senha'") or die(mysql_error());
    $row = mysql_num_rows($sql);
    if($row>0){
        session_start();
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["senha"] = $_POST["senha"];
        echo "<script>loginsucesso()</script>";
    }else{
        echo "<script>loginfalha()</script>";
    }
    ?>

</body>
</html>