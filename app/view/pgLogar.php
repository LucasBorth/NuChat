<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuChat</title>
    
    <link rel="shortcut icon" type="imagex/svg" href="images/logo.svg">
    <link rel="stylesheet" type="text/css" href="../../publico/estilos/estilo.css">
</head>
<body>
    <div class="align-center middle-margin">
        <div class="card shadow middle-padding" style="width: 30%;">
            <div class="align-center">
                <img src="files/icon.svg" alt="Logo" id="logo">
                <h4 class="purple-font">NuChat</h4>
            </div>
            <div class="align-center">
                <h2>Fazer Login</h2>
            </div>
            <div class="small-margin">
                <form action="php/login.php" method="POST">
                    <input type="email" id="login" name="txEmail" placeholder="Digite seu e-mail" required>
                    <input type="password" id="password" name="txSenha" placeholder="Digite sua senha" required>
                    <a class="purple-font" href="pgEsqueciASenha1.php">Esqueceu sua senha?</a>
                
            </div>
            <div class="align-center small-margin">
                <a href="pgCadastro.php"><button class="secondary-button">Criar conta</button></a>
                <input type="submit" class="primary-button" value="Conectar-se">
            </div>
                </form>
        </div>
    </div>
</body>
</html>