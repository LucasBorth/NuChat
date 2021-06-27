CREATE TABLE IF NOT EXISTS Membros (
    id_membro INTEGER PRIMARY KEY AUTOINCREMENT,
    id_grupo INTEGER NOT NULL,
    email_usuario TEXT NOT NULL,
    CONSTRAINT fk_membro_grupo FOREIGN KEY (id_grupo) REFERENCES Grupos (id_grupo),
    CONSTRAINT fk_membro_usuario FOREIGN KEY (email_usuario) REFERENCES Usuarios (email)
);