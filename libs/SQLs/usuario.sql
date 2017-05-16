CREATE TABLE `obsecao`.`Usuario` (
  `nUsuarioID` INT NOT NULL AUTO_INCREMENT,
  `strNome` VARCHAR(500) NULL,
  `strEmail` VARCHAR(500) NULL,
  `strSenha` VARCHAR(500) NULL,
  `strTelefone` VARCHAR(15) NULL,
  `strTelefoneAlternativo` VARCHAR(15) NULL,
  `strEmailAternativo` VARCHAR(50) NULL,
  `foto` BINARY(255) NULL,
  PRIMARY KEY (`nUsuarioID`));
