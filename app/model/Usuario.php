<?php

include_once("Banco.php");

class Usuario {

    private $email;
    private $nome_usuario;
    private $senha;

    function __construct(String $email, String $nome_usuario, String $senha)
    {
        $this -> email = $email;
        $this -> nome_usuario = $nome_usuario;
        $this -> senha = $senha;     
    }

    public function __get($campo) {
        return $this -> $campo;
    }

    public function __set($campo, $valor) {
        $this -> $campo = $valor;
    }

    public function salvarUsuario() {
        $db = Banco::getInstance();
        $stmt = $db->prepare('INSERT INTO Usuarios (email, senha, nome_usuario) VALUES (:email, :senha, :nome_usuario)');
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->bindValue(':nome_usuario', $this->nome_usuario);
        $stmt->execute();

    }

    public function deletarUsuario() {
        $db = Banco::getInstance();
        $stmt = $db->prepare('DELETE FROM Usuarios WHERE email = :email');
        $stmt->bindValue(':email', $this -> email);
        $stmt->execute();
    }

    public function alterarUsuario() {
        $db = Banco::getInstance();
        $stmt = $db->prepare('UPDATE Usuarios SET senha = :senha, nome_usuario = :nome_usuario WHERE email = :email');
        $stmt->bindValue(':senha', $this -> senha);
        $stmt->bindValue(':nome_usuario', $this -> nome_usuario);
        $stmt->bindValue(':email', $this -> email);
        $stmt->execute();
    }

    public static function buscarPorEmail(String $email){
        $db = Banco::getInstance();

        $stmt = $db->prepare('SELECT * FROM Usuarios WHERE email = :email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $resultado = $stmt->fetch();

        if ($resultado) {
            $usuario = new Usuario($resultado['email'], $resultado['nome_usuario'], $resultado['senha']);
            return $usuario;
        } else {
            return NULL;
        }
    }

    public static function buscarTodos() {
        $db = Banco::getInstance();

        $stmt = $db->prepare('SELECT * FROM Usuarios');
        $stmt->execute();

        $resultado = $stmt->fetchAll();

        if ($resultado) {
            $usuarios = array();
            foreach ($resultado as $value) {
                $usuario = new Usuario($value['email'], $value['nome_usuario'], $value['senha']);
                array_push($usuarios, $usuario);
            }
            return $usuarios;
        } else {
            return NULL;
        }
    }

    public function igual(String $email, String $senha) {
        return $this->email === $email && $this->senha === $senha;
    }
}

?>