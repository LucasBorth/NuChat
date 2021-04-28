<?php
    $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco_de_dados = "nuchat";

	$conexao = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

	if ($conexao != true) {
		echo "<script>alert('Erro de Conexao ao Banco de Dados, contate a Administração');</script>";
	}
?>