<?php

include_once('app/model/Banco.php');

class Grupo {
    
    private $id_grupo;
    private $titulo;
    private $descricao;

    function __construct(int $id_grupo, String $titulo, String $descricao)
    {
        $this -> id_grupo = $id_grupo;
        $this -> titulo = $titulo;
        $this -> descricao = $descricao;
    }

    //  Grupo sem id
    //
    // function __construct(String $titulo, String $descricao)
    // {
    //     $this -> id_grupo = $id_grupo;
    //     $this -> titulo = $titulo;
    //     $this -> descricao = $descricao;
    // }

    public function __get($campo) {
        return $this -> $campo;
    }

    public function __set($campo, $valor) {
        $this -> $campo = $valor;
    }

    public static function buscarTodos() {
        $db = Banco::getInstance();

        $stmt = $db->prepare('SELECT * FROM Grupos');
        $stmt->execute();

        $resultado = $stmt->fetchAll();

        if ($resultado) {
            $grupos = array();
            foreach ($resultado as $value) {
                $grupo = new Grupo($value['id_grupo'], $value['titulo'], $value['descricao']);
                array_push($grupos, $grupo);
            }
            return $grupos;
        } else {
            return NULL;
        }
    }

    public static function alterarGrupo(Grupo $grupo) {
        $db = Banco::getInstance();
        $stmt = $db->prepare('UPDATE Grupos SET descricao = :descricao WHERE id_grupo = :id_grupo');
        $stmt->bindValue(':descricao', $grupo -> __get("descricao"));
        $stmt->bindValue(':id_grupo', $grupo -> __get("id_grupo"));
        $stmt->execute();
    }

    // public static function criarGrupo(){
    }
    // 
?>