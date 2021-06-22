<?php
    $email = $_POST["txEmail"];
    $senha = md5($_POST["txSenha"]);

    //Verificacao de existencia de conteudo
    if ((isset($email) && isset($senha)) != true){
        echo "<script>alert('Você precisa preencher TODOS os campos para realizar o login')</script>";

        echo "<script>window.location.href = '../pgLogin.php';</script>";
    }

    include("conexao.php");

    //Verificacao de existencia de usuario
    $sql = "SELECT nome FROM usuarios WHERE email = '$email' AND senha = '$senha';";
    $result = mysqli_query($conexao, $sql);

    include("fimDeConexao.php");
    
    if (mysqli_num_rows($result) >= 1){
        $linha = mysqli_fetch_assoc($result);

        //Iniciar Sessao
        session_start();

        $_SESSION["login"] = true;
        $_SESSION["nome"] = $linha["nome"];

        echo "<script>window.location.href = '../pgChat.php';</script>";
    } else{
        $_SESSION["tryLogin"] = true;

        echo "<script>alert('Login Incorreto, tente novamente!')</script>";

        echo "<script>window.location.href = '../pgLogin.php';</script>";
    }
?>