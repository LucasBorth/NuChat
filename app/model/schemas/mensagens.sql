CREATE TABLE IF NOT EXISTS Mensagens (
    id_mensagem INTEGER PRIMARY KEY AUTOINCREMENT,
    text_mensagem TEXT NOT NULL,
    email_remetente TEXT NOT NULL,
    email_destinatario TEXT NOT NULL,
    data_mensagem TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_mensagens_usuario_remetente FOREIGN KEY (email_remetente) REFERENCES Usuarios (email),
    CONSTRAINT fk_mensagens_usuario_destinatario FOREIGN KEY (email_destinatario) REFERENCES Usuarios (email)
);