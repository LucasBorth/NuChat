<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuChat</title>
    
    <link rel="shortcut icon" type="imagex/svg" href="../../images/logo.svg">
    <link rel="stylesheet" type="text/css" href="../../publico/estilos/estilo.css">
</head>
<body>
    <div class="align-center middle-margin">
        <div class="card shadow middle-padding" style="width: 30%;">
            <div class="align-center">
                <img src="../../images/logo.svg" alt="Logo" id="logo">
                <h4 class="purple-font">NuChat</h4>
            </div>
            <div class="align-center">
                <h2>Fazer Login</h2>
            </div>
            <form action="../controller/Logar.php" method="POST">
                <div class="small-margin">
                    <input type="email" id="login" name="email" placeholder="Digite seu e-mail">
                    <input type="password" id="password" name="senha" placeholder="Digite sua senha">
                </div>
                <div class="align-center small-margin">
                    <a href="pgCadastrar.php"><button class="secondary-button">Criar conta</button></a>
                    <button type="submit" class="primary-button">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>