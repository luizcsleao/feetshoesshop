<?php

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

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

    $result = mysqli_query($conn, "SELECT * FROM TB_CLIENTE WHERE EMAIL = '$email' AND SENHA = '$senha'");

    $num_result = mysqli_num_rows($result);

    if( $num_result > 0 )
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['logado'] = TRUE;
        $_SESSION['nome_cli'] = $row['NOME_CLI'];
        $_SESSION['id_cli'] = $row['ID_CLI'];
        header("location:index.php");
    }
    else
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['logado']);
        unset($_SESSION['nome_cli']);
        unset($_SESSION['id_cli']);
        header("location:login.php");
    }
?>

