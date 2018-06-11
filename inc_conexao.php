<?php

    session_start();

    //$email = $_POST['email'];
    //$senha = $_POST['senha'];

    //salvei as variáveis 0

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "feetshoesdb";
    $port = "3306";

    // Cria a conexao

    $conn = new mysqli($servername, $username, $password, $database, $port);
    $conn->set_charset('utf8');

    // Verifica se a conexao foi estabelecida

    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>