<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuChat</title>
    
    <link rel="stylesheet" type="text/css" href="style/base.css">
</head>
<body>
    <div class="align-center middle-margin">
        <div class="card shadow middle-padding" style="width: 60%;">
            <div class="align-center">
                <img src="files/icon.svg" alt="Logo" id="logo">
                <h4 class="purple-font">NuChat</h4>
            </div>
            <div class="align-center">
                <h2>Crie sua conta no NuChat</h2>
            </div>
            <div class="align-top middle-margin">
                <div class="small-margin">
                    <form>
                        <input type="text" id="full-name" name="full-name" placeholder="Nome completo">
                        <input type="text" id="login" name="login" placeholder="E-mail ou telefone">
                        <input type="password" id="password" name="password" placeholder="Digite sua senha">
                        <input type="password" id="password" name="password" placeholder="Confirme sua senha">
                    </form>
                </div>
                <div class="small-margin">
                    <form>
                        <a href="pgPerfil.php"><button class="primary-button">Cadastrar-se</button></a><br>
                        <input type="checkbox" id="accept-terms" name="accept-terms" value="accept-terms">
                        Eu concordo com os termos de politica e privacidade.<br>
                        <input type="checkbox" id="accept-updates" name="accept-updates" value="accept-updates">
                        Receber atualizações do NuChat.
                    </form>
                </div>
            </div>       
        </div>
    </div>
</body>
</html>