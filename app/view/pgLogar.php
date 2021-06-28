<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('app/view/head.php') ?>
    <title>NuChat</title>
</head>
<body>
    <div class="align-center middle-margin">
        <div class="card shadow middle-padding" style="width: 30%;">
            <div class="align-center">
                <img src="images/logo.svg" alt="Logo" id="logo">
                <h4 class="purple-font">NuChat</h4>
            </div>
            <div class="align-center">
                <h2>Fazer Login</h2>
            </div>
            <form method="POST">
                <div class="small-margin">
                    <input type="email" id="login" name="email" placeholder="Digite seu e-mail" required>
                    <input type="password" id="password" name="senha" placeholder="Digite sua senha" required> 
                </div>
                <div class="align-center small-margin">
                    <a href="index.php?acao=cadastrar" class="secondary-button">Criar conta</a>
                    <button type="submit" class="primary-button">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>