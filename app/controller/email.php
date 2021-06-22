<?php
    //Dados do Email
    $remetente = "nuchat@service.com";
    $destinatario = "";
    $titulo = "";
    $mensagem = "";

    //Metodo de envio SMTP
    function enviarEmail($destinatario, $titulo, $mensagem){
        $smtp = mail($destinatario, $titulo, $mensagem);

        if ($smtp != true){
            echo "<script>alert('Algum erro ocorreu no envio do E-Mail, por favor contate o Administrador');</script>";
            
            echo "<script>window.location.href = '../index.html';</script>";
        }
    }
?>