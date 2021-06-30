<?php 
    include_once('app/controller/PerfilController.php'); 
    $controller = new PerfilController();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('app/view/head.php') ?>
    <title>NuChat</title>
</head>
<body>

    <?php include('app/view/navbar.php') ?>
    
    <div class="container">
        <div class="card card-streech card-contact">
            <h2 class="color-purple">Contatos</h2>
            <div class="card-item">
                <form method="get">
                    <input type="text" name="pesquisarContato" placeholder="Pesquisar...">
                    <button type="submit" class="button-purple">Ver</button>
                </form>
            </div>
            <div class="scroll">
                <?php $controller->mostrarContatosPorNome(); ?>
            </div>
        </div>
        <div class="card card-streech card-message">
            <?php $controller->buscarNome(); ?>
            <?php $controller->mostrarMensagemDetalhada(); ?>
        </div>
    </div>
</body>
</html>