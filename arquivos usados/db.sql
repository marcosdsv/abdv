CREATE TABLE associados(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
endereco VARCHAR(100) NOT NULL,
telefone VARCHAR(10) NULL,
celular VARCHAR(11) NULL,
rg VARCHAR(14) NOT NULL UNIQUE,
cpf VARCHAR(11) NOT NULL UNIQUE,
email VARCHAR(100) NOT NULL,
datanascimento DATE NULL,
tipodeficiencia VARCHAR(22) NOT NULL,
tipoassociado VARCHAR(11) NOT NULL,
trabalha VARCHAR(3) NOT NULL,
tipo VARCHAR(40) NULL
);

CREATE TABLE tipodeficiencia(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
tipodeficiencia VARCHAR(22) NOT NULL,
);
CREATE TABLE tipoassociado(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
tipoassociado VARCHAR(11) NOT NULL
);
CREATE TABLE login(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
senha VARCHAR(20) NOT NULL);

INSERT INTO login(email, senha) VALUES ('administrador@abdv.org.br', 'administrador@123');
INSERT INTO login(email, senha) VALUES ('abdv@abdv.org.br', 'abdv@123');