CREATE DATABASE sisaluno;

USE sisaluno;

CREATE TABLE aluno(
id VARCHAR(40) PRIMARY KEY,
nome VARCHAR(60) NOT NULL,
idade INT, 
endereco VARCHAR(100) NOT NULL,
curso VARCHAR(40) NOT NULL, 
telefone INT, 
turma CHAR(4)
);

SHOW TABLES;
DESC aluno;
SELECT * FROM aluno;

ALTER TABLE aluno MODIFY id INT;

