CREATE TABLE IF NOT EXISTS Usuarios (
    email TEXT PRIMARY KEY,
    senha TEXT NOT NULL,
    nome_usuario TEXT NOT NULL
);

CREATE TABLE NOT EXISTS Mensagens (
    id_mensagem INTEGER PRIMARY KEY AUTOINCREMENT,
    text_mensagem TEXT NOT NULL,
    email_remetente TEXT NOT NULL,
    email_destinatario TEXT NOT NULL,
    data_mensagem TEXT NOT NULL,
    CONSTRAINT fk_mensagens_usuario_remetente FOREIGN KEY (email_remetente) REFERENCES Usuarios (email),
    CONSTRAINT fk_mensagens_usuario_destinatario FOREIGN KEY (email_destinatario) REFERENCES Usuarios (email)
);

CREATE TABLE NOT EXISTS Membros (
    id_membro INTEGER PRIMARY KEY AUTOINCREMENT,
    id_grupo INTEGER NOT NULL,
    email_usuario TEXT NOT NULL,
    CONSTRAINT fk_membro_grupo FOREIGN KEY (id_grupo) REFERENCES Grupos (id_grupo),
    CONSTRAINT fk_membro_usuario FOREIGN KEY (email_usuario) REFERENCES Usuarios (email)
);

CREATE TABLE NOT EXISTS Grupos (
    id_grupo INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT NOT NULL,
    descricao TEXT,
);