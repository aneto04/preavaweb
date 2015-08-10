<?php
    require "connection.php";

    $username = $_POST['username'];
    $nome_completo = $_POST['nomeCompleto'];
    $nome_exibido = $_POST['nomeExibido'];
    $data_entrada = $_POST['dataEntrada'];
    $cargo = $_POST['cargo'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nascimento = $_POST['data_nascimento'];
    $nome_mae = $_POST['nome_mae'];
    $nome_pai = $_POST['nome_pai'];
    $endereco = $_POST['endereco'];
    $num_casa = $_POST['num_casa'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $executa = $pdo->query("INSERT INTO `usuarios`(`username`, `nome_completo`, `nome_exibido`, `data_entrada`, `cargo`, `sexo`, `cpf`, `rg`, `data_nascimento`, `nome_mae`, `nome_pai`, `endereco`, `num_casa`, `bairro`, `cep`, `telefone`, `email`, `senha`)
VALUES ('$username', '$nome_completo', '$nome_exibido', '$data_entrada', '$cargo', '$sexo', '$cpf', '$rg', '$data_nascimento', '$nome_mae', '$nome_pai', '$endereco', '$num_casa', '$bairro', '$cep', '$telefone', '$email' ,'$senha')");