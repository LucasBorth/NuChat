<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include('app/view/head.php') ?>
    <title>NuChat</title>
</head>
<body>
    <?php include('app/view/navbar.php') ?>
    <div class="align-top middle-margin">
        
        <!-- Contatos -->
        <div class="margin-right" style="width: 30%;">
            <div class="purple-card align-center middle-padding small-vertical-margin">
                <h2 class="white-font no-margin">Mensagens</h2>
            </div>
            <div class="purple-card align-center small-padding small-vertical-margin">
                <input class="margin-right" type="text" placeholder="Pesquisar..">
                <button class="primary-button">Pesquisar</button>
            </div>
            <div class="card scroll contatos-size">
                <div class="small-margin">
                    <?php 

                        include_once('app/model/Usuario.php');
                        $usuarios = Usuario::buscarTodos();
                        $quantidade_usuarios = count($usuarios);

                        for($i = 0; $i < $quantidade_usuarios; $i++) {
                            echo '
                            <div class="container container-size bottom-margin">
                                <img class="vertical-align" src="images/foto-perfil.png" alt="Perfil" id="profile">
                                <a href="pgPerfil.php?acao=perfil&email=' . $usuarios[$i]->__get('email') . '"><button class="secondary-button">' . $usuarios[$i]->__get('nome_usuario') . '</button></a>
                            </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>

        <!-- Mensagens -->
        <div style="width: 50%;">
            <div class="purple-card align-center small-padding small-vertical-margin">
                <img class="small-horizontal-margin" src="images/foto-perfil.png" alt="" id="profile">
                <h2 class="white-font no-margin">Nome Usuario</h2>
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