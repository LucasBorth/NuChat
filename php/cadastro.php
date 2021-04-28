<?php
    $nome = $_POST["txNome"];
    $email = $_POST["txEmail"];
    $senha = md5($_POST["txSenha"]);
    $confirmaSenha = md5($_POST["txConfirmaSenha"]);

    if (isset($_POST["radioTermos"])){
        $termos = true;
    } else{
        $termos = false;
    }

    if (isset($_POST["radioAtualizacoes"])){
        $atualizacoes = true;
    } else{
        $atualizacoes = false;
    }

    //Verificacao de existencia de conteudo
    if ((isset($nome) && isset($email) && isset($senha) && isset($confirmaSenha) && isset($termos) && isset($atualizacoes)) != true){
        echo "<script>alert('Você precisa preencher TODOS os campos antes de se cadastrar')</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Verificacao de confirmacao com os termos
    if ($termos != true){
        echo "<script>alert('Você precisa aceitar os termos de política e privacidade')</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Verificar se senha sao iguais
    if ($senha != $confirmaSenha){
        echo "<script>alert('Os campos de senha não são correspondentes, por favor preencha novamente')</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Inicia conexao com o banco de dados
    include("conexao.php");

    //Verificacao de existencia de tupla
    $sql = "SELECT email FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);
    
    if ($result == true){
        $linha = mysqli_fetch_assoc($result);

        echo "<script>alert('O usuário $linha[nome] ja é registrado!');</script>";

        include("fimDeConexao.php");
        echo "<script>window.location.href = '../pgLogin.php';</script>";
    }
    
    //Cadastrar usuario no banco de dados
    $sql = "INSERT INTO usuarios(nome, email, senha, atualizacoes) VALUES ('$nome', '$email', '$senha', '$atualizacoes');";
    $result = mysqli_query($conexao, $sql);

    if ($result == true){
        $linha = mysqli_fetch_assoc($result);

        echo "<script>alert('$linha[nome] você foi cadastrado com sucesso, seja bem-vindo ao NuChat');</script>";

        include("fimDeConexao.php");
        echo "<script>window.location.href = '../pgChat.php';</script>";
    }
?>