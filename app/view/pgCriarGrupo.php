<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php include('app/view/head.php') ?>
	<title>NuChat</title>
</head>
<body>
	<div class="card-absolute">
        <div class="card card-centralized card-border">
            <div class="card-item">
                <img src="images/logo.svg" alt="Logo" id="logo">
                <h3 class="color-purple">NuChat</h3> 
            </div>
            <div class="card-item">
                <h2>Criar Grupo</h2>
            </div>
            <form method="POST">
                <div class="card-item">
                    <label class="color-purple">Titulo:</label>
                    <input type="text" name="titulo" placeholder="Digite o titulo do grupo" required>
                </div>
                <div class="card-item">
                    <label class="color-purple">Descricao:</label>
                    <textarea name="descricao" rows="5" cols="33">Um grupo de amigos...</textarea>
                </div>
                <div class="card-item">
                    <button type="submit" class="button-purple">Criar</button>
                    <a href="index.php?view=perfil" class="button-white">Cancelar</a>
                </div>
            </form>    
        </div>    
    </div>
</body>
</html>