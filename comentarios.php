<?php
include "db.php";

$comentarioneg = $_POST['comentario'];
$insertneg = "INSERT INTO comentariosneg (comentario) VALUES ('$comentarioneg')";
$queryneg = mysql_query($insertneg);
header("location: preavaliacao.php");
?>

<?php
$comentariopos = $_POST['comentario'];
$insertpos = "INSERT INTO comentariospos (comentario) VALUES ('$comentariopos')";
$querypos = mysql_query($insertpos);
header("location: preavaliacao.php");
?>