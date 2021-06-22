<?php
    //Iniciar Sessao
    session_start();

    $email = "";
    $codigoReal = 0;

    $codigoInformado = $_POST["txCodigo"];

    //Verificacao de existencia de conteudo
    if (isset($_SESSION["email"]) && isset($_SESSION["recuperarSenha"]) && isset($_SESSION["recuperarSenhaCodigo"]) $$ isset($codigoInformado) != true){
        echo "<script>alert('Dados de recuparação de conta não entrados, retornando a página principal');</script>";

        echo "<script>window.location.href = '../index.html';</script>";
    } else{
        if ($_SESSION["recuperarSenha"] == true){
            $email = $_SESSION["email"];
            $codigoReal = $_SESSION["recuperarSenhaCodigo"];

        } else{
            echo "<script>alert('Solicitação de recuperação e conta não encontrada, retornando a página principal');</script>";

            echo "<script>window.location.href = '../index.html';</script>";
        }
        
    }

    //Verificar o codigo informado
    if ($codigoReal == $codigoInformado){
        $_SESSION["recuperarSenhaCodigoIgual"] = true;

        echo "<script>window.location.href = '../pgEsqueciASenha3.php';</script>";
    } else{
        $_SESSION["recuperarSenha"] = false;

        echo "<script>alert('Codigo incorreto, retornando a página principal');</script>";

        echo "<script>window.location.href = '../index.html';</script>";
    }
?>