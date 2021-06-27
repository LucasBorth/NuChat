<?php

    $nome = $_POST["txNome"];
    $email = $_POST["txEmail"];
    $senha = md5($_POST["txSenha"]);
    $confirmaSenha = md5($_POST["txConfirmaSenha"]);

    //Verificacao de existencia de conteudo
    if ((isset($nome) && isset($email) && isset($sexo) && isset($nascimento) && isset($senha) && isset($confirmaSenha) && isset($termos) && isset($atualizacoes)) != true){
        echo "<script>alert('Você precisa preencher TODOS os campos antes de se cadastrar');</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Verificar se senha sao iguais
    if ($senha != $confirmaSenha){
        echo "<script>alert('Os campos de senha não são correspondentes, por favor preencha novamente');</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Inicia conexao com o banco de dados
    include_once("../model/Usuario.php");
    if(!is_null(Usuario::buscarPorEmail($email))) {
        echo "<script>alert('O usuário $linha[nome] ja é registrado!');</script>";
        echo "<script>window.location.href = '../pgLogin.php';</script>";
    } 

    //Inicia conexao com o banco de dados
    $usuario = new Usuario($email, $nome, $senha);
    $usuario->salvarUsuario();
?>