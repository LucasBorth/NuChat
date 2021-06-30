<?php

include_once('app/controller/Controller.php');
include_once('app/model/Usuario.php');
include_once('app/model/Mensagem.php');

class PerfilController extends Controller {

	private $usuarioLogado;

	public function __construct() {
		if(!isset($_SESSION)) session_start();
        if(isset($_SESSION['usuario'])) $this->usuarioLogado = $_SESSION['usuario'];
	}

    public function editarPerfil() {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario = new Usuario($this->usuarioLogado->__get('email'), $_POST['new_name'], $_POST['new_password']);

            try {
                $usuario->alterarUsuario();
                header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário alterado com sucesso!');
            } catch (PDOException $erro) {
                header('Location: index.php?view=perfil&mensagem=Falha no envio!');
            }
        }

        if (!$this->usuarioLogado) {
            header('Location: index.php?view=logar&mensagem=Voce Precisa Se Identificar Primeiro');
        } else {
            $this->view('pgEditarPerfil');
        }
    }

	public function mostrarConversas() {
	 	if (!$this->usuarioLogado) {
            header('Location: index.php?view=logar&mensagem=Voce Precisa Se Identificar Primeiro');
        } else {
            $this->view('pgConversar');
        }
	}

	public function mostrarContatos() {
		$usuarios = Usuario::buscarTodos();
        $quantidade_usuarios = count($usuarios);

        for($i = 0; $i < $quantidade_usuarios; $i++) {
        	if($usuarios[$i]->__get('email') != $this->usuarioLogado->__get('email')) {
                $email = $usuarios[$i]->__get('email');
                $nome = $usuarios[$i]->__get('nome_usuario');
        		echo '
    			<div class="card-item">
    				<img src="images/foto-perfil.png" alt="Profile Picture" id="profile-picture">
    				<a href="index.php?view=perfil&email='.$email.'">
    					<button class="button-white">'.$nome.'</button>
    				</a>
				</div>	
        		';
        	}
        }
	}

    public function mostrarContatosPorNome() {

        if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['pesquisarContato'])) {
            $usuarios = Usuario::buscarTodosPorNome($_GET['pesquisarContato']);

            if(is_null($usuarios)) {
                $this->mostrarContatos();
                return;
            }

            $quantidade_usuarios = count($usuarios);    

            for($i = 0; $i < $quantidade_usuarios; $i++) {
                if($usuarios[$i]->__get('email') != $this->usuarioLogado->__get('email')) {
                    $email = $usuarios[$i]->__get('email');
                    $nome = $usuarios[$i]->__get('nome_usuario');
                    echo '
                    <div class="card-item">
                        <img src="images/foto-perfil.png" alt="Profile Picture" id="profile-picture">
                        <a href="index.php?view=perfil&email='.$email.'">
                            <button class="button-white">'.$nome.'</button>
                        </a>
                    </div>  
                    ';
                }
            }
        } else {
            $this->mostrarContatos();
        }
    }

    public function enviarMensagem() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mensagem = new Mensagem($_POST['mensagem'], $this->usuarioLogado->__get('email'), $_GET['email']);
            Mensagem::salvarMensagem($mensagem);
        } 
    }

    public function buscarNome() {
        if(array_key_exists('email', $_GET)) {
            $usuario = Usuario::buscarPorEmail($_GET['email']);
            if(!is_null($usuario)) {
                echo '<div class="card-item">';
                echo '<img src="images/foto-perfil.png" alt="Pefil" id="profile-picture">';
                echo '<h2 class="color-purple">' . $usuario->__get('nome_usuario') . '</h2>';
                echo '</div>';
            } else {
                echo '<h2 class="color-purple">Mensagem</h2>';    
            }
        } else {
            echo '<h2 class="color-purple">Mensagem</h2>';    
        }
    }

	public function mostrarMensagemDetalhada() {
		if(array_key_exists('email', $_GET)) {
    		$mensagens = Mensagem::buscarTodasMensagensPorRemetenteEDestinatario($this->usuarioLogado->__get('email'), $_GET['email']);

            echo '<div class="scroll">';
            if(!is_null($mensagens)) {
                $quantidade_mensagens = count($mensagens);
                for($i = 0; $i < $quantidade_mensagens; $i++){
                    if($mensagens[$i]->__get('email_destinatario') == $_GET['email'])
                    {
                        echo '<div class="message-my">';
                        echo $mensagens[$i]->__get('text_mensagem');
                        echo '</div>';
                    } else {

                        $usuario = Usuario::buscarPorEmail($mensagens[$i]->__get('email_remetente'));
                        $nome = $usuario->__get('nome_usuario');
                        echo '<div class="message-your">';
                        echo '<h4 class="color-purple">'.$nome.'</h4>';
                        echo $mensagens[$i]->__get('text_mensagem');
                        echo '</div>';
                    }
                } 
            } else {
                echo '<div class="card card-centralized">';
                echo '<h2>Ainda nao ha mensagens</h2>';
                echo '</div>';
                echo '<div class="card card-centralized">';
                echo '<h2 class="color-purple">Envie uma mensagem</h2>';
                echo '</div>';
            }
            echo '</div>';
            echo '<div class="card card-centralized">';
            echo '<form method="post">';
            echo '<input type="text" name="mensagem" autocomplete="off" placeholder="Escreva aqui sua mensagem">';
            echo '<button type="submit" class="button-purple">Enviar Mensagem</button>';
            echo '</form>';
            echo '</div>';
		} else {
            echo '<div class="card card-centralized">';
            echo '<h2>Comece a conversar agora mesmo</h2>';
            echo '</div>';
            echo '<div class="card card-centralized">';
            echo '<h2 class="color-purple">Escolha alguem dos contatos e pronto</h2>';
            echo '</div>';
        }
	}

    public function sair() {
        if (!$this->usuarioLogado) {
            header('Location: index.php?view=logar&mensagem=Você precisa se identificar primeiro');
            return;
        }
        session_destroy();
        header('Location: index.php?mensagem=Usuário deslogado com sucesso!');
    }

}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['mensagem'])) {
    $controller = new PerfilController();
    $controller->enviarMensagem();
}

?>