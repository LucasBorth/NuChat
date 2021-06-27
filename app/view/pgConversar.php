<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../publico/estilos/estilo.css">
    <link rel="shortcut icon" type="imagex/svg" href="../../images/logo.svg">
    <title>NuChat</title>
</head>
<body>
    <header class="navbar shadow small-padding">
        <img class="logo" id="logo" src="../../images/logo.svg" alt="Logo">
        <h4 class="purple-font logo">NuChat</h4>
        <a href="../../index.php"><button class="secondary-button">Sair</button></a>
        <a href="pgEncontrar.php"><button class="secondary-button">Encontrar</button></a>
        <a href="pgConversar.php"><button class="primary-button">Conversas</button></a>
        <a href="pgEditarPerfil.php"><button class="secondary-button">Editar Perfil</button></a>
    </header>

    <div class="align-top middle-margin">
        
        <!-- Contatos -->
        <div class="margin-right" style="width: 30%;">
            <div class="purple-card align-center middle-padding small-vertical-margin">
                <h2 class="white-font no-margin">Contatos(3)</h2>
            </div>
            <div class="purple-card align-center small-padding small-vertical-margin">
                <input class="margin-right" type="text" placeholder="Pesquisar..">
                <button class="primary-button">Pesquisar</button>
            </div>
            <div class="card scroll contatos-size">
                <div class="small-margin">
                    <div class="container container-size bottom-margin">
                        <img class="vertical-align" src="../../images/foto-perfil.png" alt="Perfil" id="profile">
                        <a href="pgPerfil.php"><button class="secondary-button">João Cavalcante</button></a>
                    </div>
                    <div class="container container-size bottom-margin">
                        <img class="vertical-align" src="../../images/foto-perfil.png" alt="Perfil" id="profile">
                        <a href="pgPerfil.php"><button class="secondary-button">João Cavalcante</button></a>
                    </div>
                    <div class="container container-size bottom-margin">
                        <img class="vertical-align" src="../../images/foto-perfil.png" alt="Perfil" id="profile">
                        <a href="pgPerfil.php"><button class="secondary-button">João Cavalcante</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mensagens -->
        <div style="width: 50%;">
            <div class="purple-card align-center small-padding small-vertical-margin">
                <img class="small-horizontal-margin" src="../../images/foto-perfil.png" alt="" id="profile">
                <h2 class="white-font no-margin">João Cavalcante</h2>
            </div>
            <div class="card scroll message-size small-vertical-margin">
                <div class="middle-margin">
                    <div class="card left-align small-padding small-margin" id="mensagem">
                        <p class="purple-font">Jeú Chaves</p>
                        <p class="small-horizontal-margin"> 
                            Oi, bom dia!
                        </p>
                        <p class="purple-font time-font">19:05</p>
                    </div>
                    <div class="purple-card right-align small-padding small-margin" id="mensagem">
                        <p class="white-font small-horizontal-margin"> 
                            Oi, to bem e você?
                        </p>
                        <p class="purple-font time-font">19:05 ✓</p>
                    </div>
                    <div class="card left-align small-padding small-margin" id="mensagem">
                        <p class="purple-font">Jeú Chaves</p>
                        <p class="small-horizontal-margin"> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                        sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p class="purple-font time-font">19:05</p>
                    </div>
                    <div class="purple-card right-align small-padding small-margin" id="mensagem">
                        <p class="white-font small-horizontal-margin"> 
                            Como assim?
                        </p>
                        <p class="purple-font time-font">19:05 ✗</p>
                    </div>
                </div>
            </div>
            <div class="purple-card align-center small-padding message-box">
                <input type="text" id="txtMensagem" name="txtMensagem" placeholder="Digite uma mensagem">
                <button class="primary-button">Enviar</button>
            </div>
        </div>
</body>
</html>