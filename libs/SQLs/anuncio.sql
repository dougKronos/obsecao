CREATE TABLE `obsecao`.`Anuncio` (
  `nAnuncioID` INT NOT NULL AUTO_INCREMENT,
  `dtAnuncio` DATE NULL,
  `bStatusAprovado` TINYINT(1) NULL,
  `strTitulo` VARCHAR(50) NULL,
  `strDescricao` VARCHAR(500) NULL,
  PRIMARY KEY (`nAnuncioID`));