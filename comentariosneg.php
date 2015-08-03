<?php
include "db.php";

$comentarioneg = $_POST['comentario'];
$insertneg = "INSERT INTO comentariosneg (comentario) VALUES ('$comentarioneg')";
$queryneg = mysql_query($insertneg);
header("location: preavaliacao.php");
?>
