<html lang="pt-br">
<head>
    <?php include('app/view/head.php') ?>
    <title>NuChat</title>
</head>
<body>
    <div class="align-center middle-margin">
        <div class="card shadow middle-padding" style="width: 65%;">
            <div class="align-center">
                <img src="images/logo.svg" alt="Logo" id="logo">
                <h4 class="purple-font">NuChat</h4>
            </div>
            <div class="align-center">
                <h2>Editar Perfil</h2>
            </div>
            <form method="POST">
                <div class="align-center">
                    <div class="small-margin">
                        <input type="text" id="login" name="nome_usuario" placeholder="Digite seu nome" required>
                        <input type="text" id="login" name="senha" placeholder="Digite sua nova senha" required>
                    </div>
                </div>
                <div class="align-center small-margin">
                    <button class="primary-button" type="submit">Salvar</button>
                    <a href="index.php?acao=perfil" class="secondary-button">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>