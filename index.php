<?php 

include_once('app/model/Banco.php');
Banco::createSchema();

include_once('app/controller/LoginController.php');
$controller = new LoginController();

if(!array_key_exists('acao', $_GET)) {
    $_GET['acao'] = 'logar';
}

switch ($_GET['acao']) {
    case 'cadastrar':
        $controller->cadastrar();
        break;
    case 'perfil':
        $controller->carregarPerfil();
        break;
    case 'sair':
        $controller->sair();
    default:
        $controller->logar();
}

?>