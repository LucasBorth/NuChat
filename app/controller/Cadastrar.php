<?php
    $nome = $_POST["txNome"];
    $email = $_POST["txEmail"];
    $sexo = $_POST["selectSexo"];
    $nascimento = $_POST["dataNascimento"];
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
    if ((isset($nome) && isset($email) && isset($sexo) && isset($nascimento) && isset($senha) && isset($confirmaSenha) && isset($termos) && isset($atualizacoes)) != true){
        echo "<script>alert('Você precisa preencher TODOS os campos antes de se cadastrar');</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Verificacao de confirmacao com os termos
    if ($termos != true){
        echo "<script>alert('Você precisa aceitar os termos de política e privacidade');</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Verificar se senha sao iguais
    if ($senha != $confirmaSenha){
        echo "<script>alert('Os campos de senha não são correspondentes, por favor preencha novamente');</script>";

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }

    //Inicia conexao com o banco de dados
    include("conexao.php");

    //Verificacao de existencia de tupla
    $sql = "SELECT nome FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);
    
    include("fimDeConexao.php");

    if (mysqli_num_rows($result) >= 1){
        $linha = mysqli_fetch_assoc($result);

        echo "<script>alert('O usuário $linha[nome] ja é registrado!');</script>";

        echo "<script>window.location.href = '../pgLogin.php';</script>";
    }

    //Inicia conexao com o banco de dados
    include("conexao.php");

    //Cadastrar usuario no banco de dados
    $sql = "INSERT INTO usuarios(nome, sexo, email, nascimento, senha, atualizacoes) VALUES ('$nome', '$sexo', '$email', '$nascimento', '$senha', '$atualizacoes');";
    $result = mysqli_query($conexao, $sql);

    include("fimDeConexao.php");

    if ($result == true){
        echo "<script>alert('$nome você foi cadastrado com sucesso, seja bem-vindo ao NuChat');</script>";

        echo "<script>window.location.href = '../pgChat.php';</script>";
    } else{
        echo "<script>alert('Algum erro ocorreu, por favor contate o Administrador');</script>";    

        echo "<script>window.location.href = '../pgCadastro.php';</script>";
    }
?>