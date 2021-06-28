<?php
    final class Banco {

		/**
		* @var PDO armazena a conexão e retorna quando solicitado
		*/
		private static $conexao;
	
		/**
		*  Construtor privado, pois não desejamos que usuários instanciem esta classe
		*/
		private function __construct() {}
	
		/**
		*  Função (estática) na qual usuários podem obter a conxão. 
		*  Somente uma será criada.
		*
		*  @return PDO conexão com o banco
		*/
		public static function getInstance() : PDO {
			if (is_null(self::$conexao)) {
				self::$conexao = new PDO('sqlite:db.sqlite3');
				self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return self::$conexao;
		}
		
		/**
		*  Função para criação do modelo do banco (tabela Usuários neste caso). 
		*/
		public static function createSchema() : void {
			$db = self::getInstance();
			$db -> exec(file_get_contents(__DIR__ . "/schemas/usuarios.sql"));
			$db -> exec(file_get_contents(__DIR__ . "/schemas/membros.sql"));
			$db -> exec(file_get_contents(__DIR__ . "/schemas/mensagens.sql"));
			$db -> exec(file_get_contents(__DIR__ . "/schemas/grupos.sql"));
		}
	}
?>