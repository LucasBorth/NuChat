<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuChat</title>
    
    <link rel="stylesheet" type="text/css" href="style/base.css">
</head>
<body>
    <header class="navbar shadow small-padding">
        <img class="logo" id="logo" src="files/icon.svg" alt="Logo">
        <h4 class="purple-font logo">NuChat</h4>
        <a href="index.html"><button class="secondary-button">Sair</button></a>
        <a href="pgEncontrar.php"><button class="secondary-button">Encontrar</button></a>
        <a href="pgChat.php"><button class="secondary-button">Conversas</button></a>
        <a href="pgPerfil.php"><button class="primary-button">Eu</button></a>
    </header>

    <div class="align-center middle-margin">
        <div class="purple-card" style="width: 65%;">
            <div class="small-margin align-center">
                <img id="perfil" src="files/profile-picture.png" alt="Foto de Perfil">
            </div>
            <div class="small-margin">
                <h2 class="align-center white-font no-margin">Jeú Chaves</h2>
                <h5 class="align-center white-font">Se pode ser alguma coisa na vida, escolha ser melhor!</h5>
            </div>
            <!-- Somente se não for seu próprio perfil -->
            <div class="small-margin align-center">
                <div class="small-horizontal-margin">
                    <button class="primary-button">Adicionar</button>
                </div>
                <div class="small-horizontal-margin">
                    <button class="primary-button">Enviar Mensagem</button>
                </div>
            </div>
        </div>
    </div>

    <div class="align-top middle-margin">
        <div class="card middle-padding margin-right scroll sobre-size" style="width: 27.5%;">
            <div class="align-center">
                <h2 class="no-margin">Sobre</h2>
            </div>
            <div class="align-center">
                <a href="pgEditar.php"><button class="secondary-button">Editar</button></a>
            </div>
            <div class="text"> 
                <p>Trabalha em <strong>Nada</strong></p>
                <p>Estuda na <strong>UFMS</strong></p>
                <p>Mora em <strong>Campo Grande/MS</strong></p>
                <p>De <strong>Naviraí</strong></p>
                <p>Nascido em <strong>9 de Agosto de 2000</strong></p>
                <p>Gênero <strong>Masculino</strong></p>
                <p>Está <strong>Solteiro</strong></p>
            </div>
        </div>
        <div class="card middle-padding scroll sobre-size" style="width: 27.5%;">
            <div class="align-center">
                <h2 class="no-margin">Contatos(3)</h2>
            </div>
            <div class="align-center">
                <input type="text" placeholder="Pesquisar..">
            </div>
            <div class="small-margin">
                <div class="container container-size">
                    <img class="vertical-align" src="files/profile-picture.png" alt="Perfil" id="profile">
                    <a href="pgPerfil.php"><button class="secondary-button">João Cavalcante</button></a>
                </div>
                <div class="container container-size">
                    <img class="vertical-align" src="files/profile-picture.png" alt="Perfil" id="profile">
                    <a href="pgPerfil.php"><button class="secondary-button">Lucas Borth</button></a>
                </div>
                <div class="container container-size">
                    <img class="vertical-align" src="files/profile-picture.png" alt="Perfil" id="profile">
                    <a href="pgPerfil.php"><button class="secondary-button">Baiano</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>