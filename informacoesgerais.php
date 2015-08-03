<?php
$host      = "localhost";
$user      = "root";
$pass      = "vertrigo";
$banco     = "preavaliacao";
$conexao   = mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());

session_start();
if(!isset($_SESSION['username']) and !isset($_SESSION['senha'])){
    header("location: index.html");
}
$db = new mysqli($host, $user, $pass, $banco);
$sql       = "SELECT * FROM usuarios WHERE username = '$_SESSION[username]'"; 
$resultado = $db->query($sql);
$dadosUsuarios = array();

while($row = $resultado->fetch_array()) {
    $dadosUsuarios = $row;
}

?>

<!-- =========================================================== Código HTML ========================================================== -->


<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Informações Gerais</title>
    <link href="css/style-iframe.css" rel="stylesheet">
</head>
<body>
<div class="quadrosJS">
    <div id="quadro">
        <p class="tituloAvaliacao">Informações gerais</p>
        <div id="textoQuadro">
            <p><a id="txtBold">Posto: </a>Produtor(a) Gráfico(a)</p>
            <p><a>Entrou no projeto em: </a>13/10/2009</p>
            <p><a>E-mail: </a><?php echo utf8_encode($dadosUsuarios['email']);?></p>
            <p><a>Telefone: </a>(85) 4002-8922</p>
            <p><a>Horas trabalhadas: </a>171</p>
            <p><a>Folgas: </a>0/0/0</p>
            <p><a>Faltas: </a>0/0/0</p>
            <p><a>Atrasos: </a>0/0/0</p>
            <p><a>Vídeos / Livros: </a>0/0/0</p>
        </div>
    </div>
</div>
</body>
</html>