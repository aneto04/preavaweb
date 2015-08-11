<?php

    $conn = 'mysql:host=localhost;dbname=preavaliacao';
    try{
        $db = new PDO($conn, "root", "vertrigo");
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        echo $e->getMessage();
    }