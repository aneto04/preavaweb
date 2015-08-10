<?php

    $pdo = new PDO("mysql:host=localhost;dbname=preavaliacao","root","vertrigo");
    if(!$pdo){
    die('Erro ao criar conexão');
    }