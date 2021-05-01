<?php
    $bd_servidor = "localhost";
	$bd_usuario = "root";
	$bd_senha = "";
	$bd_banco_de_dados = "nuchat";

	$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_banco_de_dados);

	if ($conexao != true) {
		echo "<script>alert('Erro de Conexao ao Banco de Dados, contate a Administração');</script>";
	}
?>