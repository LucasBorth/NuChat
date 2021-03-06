<?php

include_once('app/model/Banco.php');

class Mensagem {

    private $id_mensagem;
    private $text_mensagem;
    private $email_remetente;
    private $email_destinatario;
    private $data_mensagem;

    function __construct(String $text_mensagem, String $email_remetente, String $email_destinatario, String $data_mensagem)
    {
        $this -> text_mensagem = $text_mensagem;
        $this -> email_remetente = $email_remetente;
        $this -> email_destinatario = $email_destinatario;
        $this -> data_mensagem = $data_mensagem;
    }

    public function __get($campo) {
        return $this -> $campo;
    }

    public function __set($campo, $valor) {
        $this -> $campo = $valor;
    }
 
    public static function salvarMensagem(Mensagem $mensagem){
        $db = Banco::getInstance();
        $stmt = $db->prepare('INSERT INTO Mensagens (text_mensagem, email_remetente, email_destinatario) VALUES (:text_mensagem, :email_remetente, :email_destinatario)');
        $stmt->bindValue(':text_mensagem', $mensagem -> text_mensagem);
        $stmt->bindValue(':email_remetente', $mensagem -> email_remetente);
        $stmt->bindValue(':email_destinatario', $mensagem -> email_destinatario);
        $stmt->execute();
    }

    public static function deletarMensagem(int $id_mensagem) {
        $db = Banco::getInstance();
        $stmt = $db->prepare('DELETE FROM Mensagens WHERE id_mensagem = :id_mensagem');
        $stmt->bindValue(':id_mensagem', $id_mensagem);
        $stmt->execute();
    }

    public static function alterarMensagem(Mensagem $mensagem) {
        $db = Banco::getInstance();
        $stmt = $db->prepare('UPDATE Usuarios SET text_mensagem = :text_mensagem WHERE email_remetente = :email_remetente AND email_destinatario = :email_destinatario');
        $stmt->bindValue(':text_mensagem', $mensagem -> __get("text_mensagem"));
        $stmt->bindValue(':email_remetente', $mensagem -> __get("email_remetente"));
        $stmt->bindValue(':email_destinatario', $mensagem -> __get("email_destinatario"));
        $stmt->execute();
    }

    public static function buscarTodasMensagensPorRemetenteEDestinatario(String $email_remetente, String $email_destinatario) {
        $db = Banco::getInstance();

        $stmt = $db->prepare('SELECT * FROM Mensagens WHERE (email_remetente = :email_remetente1 AND email_destinatario = :email_destinatario1) OR (email_remetente = :email_destinatario2 AND email_destinatario = :email_remetente2) ORDER BY data_mensagem ASC');
        $stmt->bindValue(':email_remetente1', $email_remetente);
        $stmt->bindValue(':email_destinatario1', $email_destinatario);
        $stmt->bindValue(':email_destinatario2', $email_destinatario);
        $stmt->bindValue(':email_remetente2', $email_remetente);
        $stmt->execute();

        $resultado = $stmt->fetchAll();

        if ($resultado) {
            $mensagens = array();
            foreach ($resultado as $value) {
                $mensagem = new Mensagem($value['text_mensagem'], $value['email_remetente'], $value['email_destinatario'], $value['data_mensagem']);
                array_push($mensagens, $mensagem);
            }
            return $mensagens;
        } else {
            return NULL;
        }
    }

    public static function buscarTodasMensagensGrupo(int $id_grupo){
        $db = Banco::getInstance();

        $stmt = $db->prepare('SELECT * FROM Mensagens WHERE (email_destinatario = :id_grupo) ORDER BY data_mensagem ASC');
        $stmt->bindValue(':id_grupo', strval($id_grupo));
        $stmt->execute();

        $resultado = $stmt->fetchAll();

        if ($resultado) {
            $mensagens = array();
            foreach ($resultado as $value) {
                $mensagem = new Mensagem($value['text_mensagem'], $value['email_remetente'], $value['email_destinatario'], $value['data_mensagem']);
                array_push($mensagens, $mensagem);
            }
            return $mensagens;
        } else {
            return NULL;
        }
    }

}

?>