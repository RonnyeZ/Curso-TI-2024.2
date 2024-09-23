CREATE DATABASE seguranca_manha;
USE seguranca_manha;

CREATE TABLE usuario (
    id_usuario INTEGER NOT NULL,
    nome VARCHAR(200) NOT NULL,
    login VARCHAR(20) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    nivel INTEGER NOT NULL,
    CONSTRAINT pk_usuario PRIMARY KEY (id_usuario)
);

INSERT INTO usuario (id_usuario, nome, login, senha, nivel)
VALUES
(20240001, 'Administrador', 'admin', 'admin', 1);

UPDATE usuario SET senha = MD5(senha)

SELECT * FROM usuario