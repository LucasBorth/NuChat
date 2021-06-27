<?php
    //Iniciar Sessao
    session_start();

    $email = "";
    $senha1 = md5($_POST["txSenha1"]);
    $senha2 = md5($_POST["txSenha2"]);

    //Verificacao de existencia de conteudo
    if (isset($_SESSION["email"]) && isset($_SESSION["recuperarSenha"]) && isset($_SESSION["recuperarSenhaCodigo"] $$ isset($_SESSION["recuperarSenhaCodigoIgual"])) != true){
        echo "<script>alert('Dados de recuparação de conta não entrados, retornando a página principal');</script>";

        echo "<script>window.location.href = '../index.html';</script>";
    } else { 
        if ($_SESSION["recuperarSenha"] == true){
            if ($_SESSION["recuperarSenhaCodigoIgual"] == true){
                $email = $_SESSION["email"];
                
            } else{
                echo "<script>alert('Codigo Inválido, retornando a página principal');</script>";

                echo "<script>window.location.href = '../index.html';</script>";
            }
        } else{
            echo "<script>alert('Solicitação de recuperação e conta não encontrada, retornando a página principal');</script>";

            echo "<script>window.location.href = '../index.html';</script>";
        }
        
    }

    //Verificar se senhas são equivalentes
    if ($senha1 != $senha2){
        $_SESSION["recuperarSenha"] = false;
        $_SESSION["recuperarSenhaCodigoIgual"] = false;

        echo "<script>alert('Senhas não equivalentes, retornando a página principal');</script>";

        echo "<script>window.location.href = '../index.html';</script>";
    }

    //Inicia conexao com o banco de dados
    include("conexao.php");

    //Armazenar nova senha no banco de dados
    $sql = "UPDATE usuarios SET (senha = $senha1) WHERE (email = $email);";
    $result = mysqli_query($conexao, $sql);

    include("fimDeConexao.php");

    $_SESSION["recuperarSenha"] = false;
    $_SESSION["recuperarSenhaCodigoIgual"] = false;

    if ($result == true){
        //Adiciona codigo de envio de E-Mails
        include("email.php");

        //Email informativo de alteracao de senha
        $destinatario = $email;
        $titulo = "NuChat - Alteração de Senha";
        $mensagem = "Sua senha foi alterada, caso tenha sido você desconsidere este e-mail, caso o contrario, mude sua senha imediatamente em nossa plataforma.";

        enviarEmail($destinatario, $titulo, $mensagem);

        echo "<script>alert('Senha alterada com sucesso, encaminhando para a pagina de login');</script>";

        echo "<script>window.location.href = '../pgLogin.php';</script>";
    } else{
        echo "<script>alert('Algum erro ocorreu, por favor contate o Administrador');</script>";    

        echo "<script>window.location.href = '../index.html';</script>";
    }
?>