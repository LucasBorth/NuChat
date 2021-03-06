<?php

include_once('app/model/Banco.php');

class Membro {
    private $id_membro;
    private $email_usuario;
    private $id_grupo;

    function __construct(int $id_membro, String $email_usuario, int $id_grupo)
    {
        $this -> id_membro = $id_membro;
        $this -> id_grupo = $id_grupo;
        $this -> email_usuario = $email_usuario;
    }

    public function __get($campo) {
        return $this -> $campo;
    }

    public function __set($campo, $valor) {
        $this -> $campo = $valor;
    }

    public static function adicionarAoGrupo(int $id_grupo, String $email_usuario) {
        $db = Banco::getInstance();
        $stmt = $db->prepare('INSERT INTO Membros (id_grupo, email_usuario) VALUES (:id_grupo, :email_usuario)');
        $stmt->bindValue(':id_grupo', $id_grupo);
        $stmt->bindValue(':senha', $email_usuario);
        $stmt->execute();
    }

    public static function removerDoGrupo(int $id_grupo, String $email_usuario) {
        $db = Banco::getInstance();
        $stmt = $db->prepare('DELETE FROM Membros WHERE id_grupo = :id_grupo AND email_usuario = :email_usuario');
        $stmt->bindValue(':id_grupo', $id_grupo);
        $stmt->bindValue(':id_grupo', $email_usuario);
        $stmt->execute();
    }

}

?>