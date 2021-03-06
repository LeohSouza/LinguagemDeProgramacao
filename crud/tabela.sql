CREATE DATEBASE crud

CREATE TABLE `tbProfissional`
(
	`Id` INT AUTO_INCREMENT PRIMARY KEY,
    `Codigo` SMALLINT UNIQUE NOT NULL,
    `Nome` VARCHAR(30) NOT NULL,
    `Sobrenome` VARCHAR(30) NOT NULL,
    `Endereco` VARCHAR(70) NOT NULL,
    `Numero` SMALLINT NOT NULL,
    `Bairro` VARCHAR(50) NOT NULL,
    `Cidade` VARCHAR(50) NOT NULL,
    `UF` CHAR(2) NOT NULL,
    `Area` VARCHAR(20) NOT NULL,
    `Escolaridade` VARCHAR(20) NOT NULL,
    `Email` VARCHAR(150) NOT NULL
)

