<?php

include_once("Banco.php");

class Grupo {
    
    private int $email_grupo;
    private String $titulo;
    private String $descricao;

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

    }
}

?>