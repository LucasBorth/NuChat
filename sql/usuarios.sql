CREATE TABLE usuarios(
    id                  INT                 AUTO_INCREMENT,
    nome                VARCHAR(200)        NOT NULL,
    sexo                VARCHAR(10)         NOT NULL,
    email               VARCHAR(200)        NOT NULL,
    nascimento          DATE                NOT NULL,
    senha               VARCHAR(200)        NOT NULL,
    atualizacoes        BOOLEAN             NOT NULL,
    descricao           VARCHAR(500)        NULL,
    estuda              VARCHAR(200)        NULL,
    trabalha            VARCHAR(200)        NULL,
    localidade          VARCHAR(200)        NULL,
    PRIMARY KEY (id)
);
