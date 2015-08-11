<?php

    include "connection.php";

?>

<!DOCTYPE html >
<html lang = "pt-br" >
<head >
  <meta charset = "UTF-8" >
  <title ></title >
</head >
<body >

<?php
    if(isset($_POST['enviar'])) {

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = 'INSERT INTO testes(nome, email)
                VALUES (:nome, :email)';

        try {
            $create = $db->prepare($sql);
            $create->bindValue(':nome', $nome, PDO::PARAM_STR);
            $create->bindValue(':email', $email, PDO::PARAM_STR);

            if ($create->execute()) {
                echo "Sucesso ao inserir dados;";
            }
        } catch (PDOException $e) {
            echo "Erro ao inserir dados;";
        }
    }
?>
    <form method="post" action="">

        <input type="text" id="nome" name="nome" placeholder="Nome">
        <br>
        <input type="email" id="email" name="email" placeholder="Email">
        <br>
        <input type="submit" id="enviar" name="enviar" value="Cadastrar">

    </form>
</body >
</html >