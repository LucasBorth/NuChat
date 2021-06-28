<?php 

include_once('app/model/Banco.php');
Banco::createSchema();

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuChat</title>
    <link rel="shortcut icon" type="imagex/svg" href="images/logo.svg">
    
    <link rel="stylesheet" type="text/css" href="publico/estilos/estilo.css">

</head>
<body>
    <header class="navbar shadow small-padding">
        <img class="logo" id="logo" src="images/logo.svg" alt="Logo">
        <h4 class="purple-font logo">NuChat</h4>
        <a href="app/view/pgCadastrar.php"><button class="primary-button">Cadastrar-se</button></a>
        <a href="app/view/pgLogar.php"><button class="secondary-button">Login</button></a>
    </header>

    <div class="align-center middle-margin">
        <div class="small-horizontal-margin" style="width: 60%;">
            <h1 class="medium-margin purple-font">Esqueça de uma vez o verde, o roxo faz melhor!</h1>
            <p class="small-vertical-margin">
                Nossa motivação é saber que estamos conseguindo diminuir as distâncias, aproximar os corações.  
                Mergulhe em um mundo onde o virtual lhe proporciona 
                experiências vivas.
            </p>
            <a href="app/view/pgCadastrar.php"><button class="primary-button medium-margin">Cadastrar-se</button></a>
        </div>
        <div class="small-horizontal-margin" >
            <img src="images/gato.png" alt="Cat and Computer" style="width: auto; height: 400px;">
        </div>
    </div>
    
    <footer class="fixed-footer footer navbar small-padding">
        <img class="logo small-horizontal-margin" id="logo" src="images/logo.svg" alt="Logo">
        <h4 class="logo small-horizontal-margin">Seja NuChat e mude a sua forma de interagir com o mundo.</h4>
        <h4 class="purple-font logo small-horizontal-margin">#SouRoxinho</h4>
    </footer>
</body>
</html>