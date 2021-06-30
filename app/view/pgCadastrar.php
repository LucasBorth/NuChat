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
                <h2>Cadastrar</h2>
            </div>
            <form method="POST">
                <div class="card-item">
                    <label class="color-purple">Nome:</label>
                    <input type="text" name="nome_usuario" placeholder="Digite seu nome" required>
                </div>
                <div class="card-item">
                    <label class="color-purple">Email:</label>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="card-item">
                    <label class="color-purple">Senha:</label>
                    <input type="password" name="senha" placeholder="*****" required>
                </div>
                <div class="card-item">
                    <button type="submit" class="button-purple">Cadastrar</button>
                    <a href="index.php?view=logar" class="button-white">Fazer Login</a>
                </div>
            </form>    
        </div>    
</body>
</html>