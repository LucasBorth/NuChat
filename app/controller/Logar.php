<?php

    $email = $_POST["txEmail"];
    $senha = md5($_POST["txSenha"]);

    //Verificacao de existencia de conteudo
    if ((isset($email) && isset($senha)) != true){
        echo "<script>alert('Você precisa preencher TODOS os campos para realizar o login')</script>";

        echo "<script>window.location.href = '../pgLogin.php';</script>";
    }

    include_once("../model/Usuario.php");

    //Verificacao de existencia de usuario
    if(!is_null(Usuario::buscarPorEmail($email))) {
        session_start();
        $_SESSION["login"] = true;
        $_SESSION["nome_usuario"] = $linha["nome_usuario"];
    } else {
        $_SESSION["tryLogin"] = true;
        echo "<script>alert('Login Incorreto, tente novamente!')</script>";
        echo "<script>window.location.href = '../pgLogar.php';</script>";
    }
    
?>