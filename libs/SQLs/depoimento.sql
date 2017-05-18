CREATE TABLE `obsecao`.`Depoimento` (
  `nDepoimentoID` INT NOT NULL AUTO_INCREMENT,
  `strDepoimento` VARCHAR(500) NULL,
  `foto` BIT(64) NULL,
  `video` BIT(64) NULL,
  `dtHora` DATE NULL,
  `cStatusDescricao` CHAR(1) NULL,
  PRIMARY KEY (`nDepoimentoID`));