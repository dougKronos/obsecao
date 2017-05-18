CREATE TABLE `obsecao`.`Adotante` (
  `nAdotanteID` INT NOT NULL AUTO_INCREMENT,
  `strDetalhesLocal` VARCHAR(500) NULL,
  `strTipoResidencia` VARCHAR(500) NULL,
  `bPossuiCriancas` TINYINT(1) NULL,
  `bPossuiBichos` TINYINT(1) NULL,
  `bAdotouAntes` TINYINT(1) NULL,
  PRIMARY KEY (`nAdotanteID`));