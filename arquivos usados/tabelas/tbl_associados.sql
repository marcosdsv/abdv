CREATE TABLE associados(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
endereco VARCHAR(100) NOT NULL,
telefone VARCHAR(10) NULL,
celular VARCHAR(11) NULL,
rg VARCHAR(30) NOT NULL UNIQUE,
cpf VARCHAR(11) NOT NULL UNIQUE,
email VARCHAR(100) NULL,
datanascimento DATE NULL,
fktipodeficiencia INT,
fktipoassociado INT,
fktipocargo INT,
fktipobeneficio INT,
dataadmissao DATE NULL,
observacao VARCHAR(255) NULL
);