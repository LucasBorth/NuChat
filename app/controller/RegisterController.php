<?php

include_once('app/controller/Controller.php');
include_once('app/model/Usuario.php');

class RegisterController extends Controller {

    /*
        Verifica se há alguma requisição post
        Cria um Usuario
    */
    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario($_POST['email'], $_POST['new_name'], $_POST['new_password']);
            
            try {
                $usuario->salvarUsuario();
                header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
            } catch(PDOException $erro) {
                header('Location: index.php?view=cadastrar&mensagem=Email já cadastrado!');
            }
        }
        $this->view('pgCadastrar');
    }
}

?>