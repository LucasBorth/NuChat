<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuChat</title>
    <link rel="stylesheet" type="text/css" href="../../publico/estilos/estilo.css">
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
                    <form action="php/cadastro.php" method="POST">
                        <input type="text" id="full-name" name="txNome" placeholder="Nome completo" required>
                        <input type="text" id="login" name="txEmail" placeholder="E-mail ou telefone" required>
                        <div class="small-padding vertical-margin card">
                            <label>Sexo:</label>
                            <select name="selectSexo" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        <input type="date" name="dataNascimento" required>
                        <input type="password" id="password" name="txSenha" placeholder="Digite sua senha" required>
                        <input type="password" id="password" name="txConfirmaSenha" placeholder="Confirme sua senha" required>
                </div>
                <div class="small-margin">
                        <a href="pgPerfil.php"><input type="submit" class="primary-button" value="Cadastrar-Se"></a><br>
                        <input type="checkbox" id="accept-terms" name="radioTermos" required>
                        Eu concordo com os termos de politica e privacidade.<br>
                        <input type="checkbox" id="accept-updates" name="radioAtualizacoes">
                        Receber atualizações do NuChat.
                    </form>
                </div>
            </div>       
        </div>
    </div>
</body>
</html>