<?php
    include "db.php";
    $comentariopos = $_POST['comentario'];
    $insertpos = "INSERT INTO comentariospos (comentario) VALUES ('$comentariopos')";
    $querypos = mysql_query($insertpos);
    header("location: preavaliacao.php");
?>