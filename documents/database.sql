CREATE DATABASE IF NOT EXISTS dbGreenHouse;

USE dbGreenHouse;

CREATE TABLE tbUser (
    idUser INT PRIMARY KEY AUTO_INCREMENT,
    nomeUser VARCHAR(60),
    sexoUser CHAR(1),
    cpfUser CHAR(11),
    dataNascimentoUser DATE,
    
);