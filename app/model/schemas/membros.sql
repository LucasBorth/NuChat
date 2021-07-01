CREATE TABLE IF NOT EXISTS Membros (
    id_membro INTEGER PRIMARY KEY AUTOINCREMENT,
    email_usuario TEXT NOT NULL,
    id_grupo INT NOT NULL,
    CONSTRAINT fk_membro_grupo FOREIGN KEY (email_usuario) REFERENCES Usuarios(email_usuario),
    CONSTRAINT fk_membro_usuario FOREIGN KEY (id_grupo) REFERENCES Grupos(id_grupo)
);