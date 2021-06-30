<?php

include_once('app/controller/Controller.php');
include_once('app/model/Usuario.php');

class LoginController extends Controller {

    private $usuarioLogado;

    /*
        Verifica se existe na sessao algum usuario já logado
    */
    function __construct() {
        session_start();
        if(isset($_SESSION['usuario'])) $this->usuarioLogado = $_SESSION['usuario'];
    }

    /*
        Verifica e há uma requisição post
        Busca no banco de dado algum usuario com o email informado
        Verifica se a senha informada no post coincide com a registrada no banco de dados
        Aponta para a tela de perfil
    */
    public function logar() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = Usuario::buscarPorEmail($_POST['email']);

            if(!is_null($usuario) && $usuario->igual($_POST['email'], $_POST['senha'])) {
                $_SESSION['usuario'] = $this->usuarioLogado = $usuario;   
            }

            if($this->usuarioLogado) {
                header('Location: index.php?view=perfil');
            } else {
                header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
            }
        } else {
            if (!$this->usuarioLogado) {
                $this->view('pgLogar');
            } else {
                header('Location: index.php?view=perfil');
            }
        }
    }

}

?>