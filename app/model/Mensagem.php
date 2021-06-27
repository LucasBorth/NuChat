<?php

include_once("Banco.php");

class Mensagem {

    private int $id_mensagem;
    private String $text_mensagem;
    private String $email_remetente;
    private String $email_destinatario;
    private DateTime $data_mensagem;

    function __construct(String $text_mensagem, String $email_remetente, String $email_destinatario)
    {
        $this -> text_mensagem = $text_mensagem;
        $this -> email_remetente = $email_remetente;
        $this -> email_destinatario = $email_destinatario;
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
        $stmt->bindValue(':email', $mensagem -> text_mensagem);
        $stmt->bindValue(':senha', $mensagem -> email_remetente);
        $stmt->bindValue(':nome', $mensagem -> email_destinatario);
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
        $stmt = $db->prepare('UPDATE Usuarios SET text_mensagem = :text_mensagem WHERE id_remetente = :id_remetente AND id_destinatario = :id_destinatario');
        $stmt->bindValue(':text_mensagem', $mensagem -> __get("text_mensagem"));
        $stmt->bindValue(':id_remetente', $mensagem -> __get("id_remetente"));
        $stmt->bindValue(':id_destinatario', $mensagem -> __get("id_destinatario"));
        $stmt->execute();
    }

    public static function buscarTodasMensagensPorRemetenteEDestinatario(int $id_remetente, int $id_destinatario) {
        $db = Banco::getInstance();

        $stmt = $db->prepare('SELECT * FROM Mensagens WHERE id_remetente = :id_remetente AND id_destinatario = :id_destinatario ORDER BY DESC');
        $stmt->bindValue(':id_remetente', $id_remetente);
        $stmt->bindValue(':id_destinatario', $id_destinatario);
        $stmt->execute();

        $resultado = $stmt->fetchAll();

        if ($resultado) {
            $mensagens = array();
            foreach ($resultado as $value) {
                $mensagem = new Mensagem($value['text_mensagem'], $value['email_remetente'], $value['email_destinatario']);
                $mensagem -> __set("id_mensagem", $value['id_mensagem']);
                $mensagem -> __set("data_mensagem", $value['data_mensagem']);
                array_push($mensagens, $mensagem);
            }
            return $mensagens;
        } else {
            return NULL;
        }
    }

}

?>