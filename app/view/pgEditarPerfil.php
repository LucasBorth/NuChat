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
                <h2>Editar Perfil</h2>
            </div>
            <form method="POST">
                <div class="card-item">
                    <label class="color-purple">Novo Nome:</label>
                    <input type="text" name="new_name" placeholder="Digite seu novo nome" required>
                </div>
                <div class="card-item">
                    <label class="color-purple">Nova Senha:</label>
                    <input type="text" name="new_password" placeholder="Digite a nova senha" required>
                </div>
                <div class="card-item">
                    <button type="submit" class="button-purple">Atualizar</button>
                    <a href="index.php?view=perfil" class="button-white">Voltar</a>
                </div>
            </form>    
        </div>    
    </div>
</body>
</html>