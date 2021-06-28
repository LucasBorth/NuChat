<?php

include_once('app/model/Usuario.php');
include_once('app/controller/Controller.php');

class LoginController extends Controller {

    private $usuarioLogado;

    function __construct() {
        session_start();
        if (isset($_SESSION['usuario'])) $this->usuarioLogado = $_SESSION['usuario'];
    }

    public function logar() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = Usuario::buscarPorEmail($_POST['email']);

            if(!is_null($usuario) && $usuario->igual($_POST['email'], $_POST['senha'])) {
                $_SESSION['usuario'] = $this->loggedUser = $usuario;   
            }

            if($this->usuarioLogado) {
                header('Location: index.php?acao=perfil');
            } else {
                header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
            }
        } else {
            if (!$this->usuarioLogado) {
                $this->view('pgLogar');
            } else {
                header('Location: index.php?acao=perfil');
            }
        }
    }

    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario($_POST['email'], $_POST['nome_usuario'], $_POST['senha']);
            
            $usuario->salvarUsuario();
            /*
            try {
                $usuario->salvarUsuario();
                header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário cadastrado com sucesso!');
            } catch(PDOException $erro) {
                header('Location: index.php?acao=cadastrar&mensagem=Email já cadastrado!');
            }
            */
        }
        $this->view('pgCadastrar');
    }

    public function carregarPerfil() {
        if (!$this->usuarioLogado) {
            header('Location: index.php?acao=entrar&mensagem=Você precisa se identificar primeiro');    
            return;
        }
        $this->view('pgConversar', $this->usuarioLogado);   
    }

    public function sair() {
        if (!$this->usuarioLogado) {
            header('Location: index.php?acao=entrar&mensagem=Você precisa se identificar primeiro');
            return;
        }
        session_destroy();
        header('Location: index.php?mensagem=Usuário deslogado com sucesso!');
    }

}

?>