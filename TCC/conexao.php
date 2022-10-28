<?php
    $servername     = "localhost";
    $database       = "imobiliaria";
    $username       = "root";
    $password       = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password); //Entrando no banco
        echo "Conectado a $database em $servername com sucesso.  ";  
    } catch (PDOException $pe) {
        die("Não foi possível se conectar ao banco de dados $database :" . $pe->getMessage()); //falha ao conectar
    }