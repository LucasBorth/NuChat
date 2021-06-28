<html lang="pt-br">
<head>
    <?php include('app/view/head.php') ?>
    <title>NuChat</title>
</head>
<body>
    <div class="align-center middle-margin">
        <div class="card shadow middle-padding" style="width: 60%;">
            <div class="align-center">
                <img src="images/logo.svg" alt="Logo" id="logo">
                <h4 class="purple-font">NuChat</h4>
            </div>
            <div class="align-center">
                <h2>Crie sua conta no NuChat</h2>
            </div>
            <form method="POST">
                <div class="align-top">
                    <div class="small-margin">
                        <input type="text" name="nome_usuario" placeholder="Nome completo" required>
                        <input type="text" name="email" placeholder="E-mail" required>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                        <button class="primary-button" type="submit">Cadastrar</button>
                        <a href="index.php?acao=logar" class="secondary-button">Fazer Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>