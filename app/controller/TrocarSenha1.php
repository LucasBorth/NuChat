<?php
    $email = $_POST["txEmail"];

    //Verificacao de existencia de conteudo
    if (isset($email) != true){
        echo "<script>alert('Você precisa preencher TODOS os campos antes de se cadastrar');</script>";

        echo "<script>window.location.href = '../pgEsqueciASenha1.php';</script>";
    }

    //Inicia conexao com o banco de dados
    include("conexao.php");

    //Verificar se essa conta existe
    $sql = "SELECT email FROM usuarios WHERE email = '$email';";
    $result = mysqli_query($conexao, $sql);

    include("fimDeConexao.php");

    if ($result == true){
        //Iniciar Sessao
        session_start();

        $_SESSION["recuperarSenha"] == true;
        $_SESSION["email"] = $email;
        
        //Adiciona codigo de envio de E-Mails
        include("email.php");

        //Gera o codigo e envia o email
        $codigo = rand(00000, 99999);
        $destinatario = $email;
        $titulo = "NuChat - Recuperação de Senha";
        $mensagem = "O seu código de recueração é: $codigo";

        enviarEmail($destinatario, $titulo, $mensagem);

        if ($smtp == true){
            $_SESSION["recuperarSenhaCodigo"] = $codigo;

            echo "<script>window.location.href = '../pgEsqueciASenha2.php';</script>";
        }
    } else{
        $_SESSION["recuperarSenha"] = false;

        echo "<script>alert('Email não encontrado na base de dados!');</script>";

        echo "<script>window.location.href = '../pgEsqueciASenha1.php';</script>";
    }
?>