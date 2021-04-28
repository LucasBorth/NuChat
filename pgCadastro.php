<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/base.css">
    <link rel="sortcut icon" href="files/icon.svg" type="image/x-icon"/>
    <title>NuChat</title>
</head>
<body>
    
        <form method="POST" action="php/cadastro.php" >
           
            <div class="forms">
                <label>Nome Completo<obrigatorio>*</obrigatorio></label>
                <br>
                <input type="text" name="txNome" id="txNome" placeholder="Insira seu nome aqui" required>
                <br>
                <label>E-Mail<obrigatorio>*</obrigatorio></label>
                <br>
                <input type="email" name="txEmail" placeholder="Insira seu E-Mail aqui" required>
                <br>
                <label>Insira uma Senha<obrigatorio>*</obrigatorio></label>
                <br>
                <input type="password" name="txSenha" placeholder="Insira uma senha aqui" required>
                <br>
                <label>Confirmar Senha<obrigatorio>*</obrigatorio></label>
                <br>
                <input type="password" name="txConfirmaSenha" placeholder="Repita sua senha aqui" required>
                <br>
            </div>

            <div class="forms">
                <input type="submit" value="Cadastrar" required>
                <br>
                <input type="radio" name="radioTermos" required><label>Eu concordo com os termos de política e privaciade<obrigatorio>*</obrigatorio></label>
                <br>
                <input type="radio" name="radioAtualizacoes"><label>Eu concordo com os termos de política e privaciade</label>
            </div>
            rm>
   
   

    <script src="script/base.js"></script>
</body>
</html>
