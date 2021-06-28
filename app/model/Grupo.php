<?php

include_once("Banco.php");

class Grupo {
    
    private $email_grupo;
    private $titulo;
    private $descricao;

    function __construct(String $titulo, String $descricao)
    {
        $this -> titulo = $titulo;
        $this -> descricao = $descricao;
        $this -> email_grupo = "email" + $titulo;
    }

    public function __get($campo) {
        return $this -> $campo;
    }

    public function __set($campo, $valor) {
        $this -> $campo = $valor;
    }

    public static function alterarGrupo(Grupo $grupo) {
        $db = Banco::getInstance();
        $stmt = $db->prepare('UPDATE Grupos SET descricao = :descricao WHERE email_grupo = :email_grupo');
        $stmt->bindValue(':descricao', $grupo -> __get("descricao"));
        $stmt->bindValue(':email_grupo', $grupo -> __get("email_grupo"));
        $stmt->execute();
    }
}

?>