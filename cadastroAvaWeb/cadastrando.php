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