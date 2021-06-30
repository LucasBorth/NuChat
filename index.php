<?php 

//error_reporting(E_ERROR | E_PARSE);

include_once('app/model/Banco.php');
Banco::createSchema();

if(!array_key_exists('view', $_GET)) {
    $_GET['view'] = 'perfil';
}

switch ($_GET['view']) {
    case 'cadastrar':
        include_once('app/controller/RegisterController.php');
        $controller = new RegisterController();
        $controller->cadastrar();
        break;
    case 'logar':
        include_once('app/controller/LoginController.php');
        $controller = new LoginController();
        $controller->logar();
        break;
    case 'sair':
        include_once('app/controller/PerfilController.php');
        $controller = new PerfilController();
        $controller->sair();
        break;
    case 'editar':
        include_once('app/controller/PerfilController.php');
        $controller = new PerfilController();
        $controller->editarPerfil();
        break;
    default:
        include_once('app/controller/PerfilController.php');
        $controller = new PerfilController();
        $controller->mostrarConversas();
        break;
}

?>