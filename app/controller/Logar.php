<?php

    require '../model/Usuario.php';

    $email = $_POST["email"];
    $senha = md5($_POST["senha"]);

    //Verificacao de existencia de usuario

    $usuario = Usuario::buscarPorEmail($email);

    if(!is_null($usuario)) {
        session_start();
        $_SESSION["usuario"] = $usuario;

        echo "<script>window.location.href = '../view/pgConversar.php';</script>";
    } else {
        echo "<script>alert('Login Incorreto, tente novamente!')</script>";
        echo "<script>window.location.href = '../view/pgLogar.php';</script>";
    }
    
?>