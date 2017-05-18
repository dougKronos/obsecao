CREATE TABLE `obsecao`.`Cao` (
  `nCaoID` INT NOT NULL AUTO_INCREMENT,
  `strNome` VARCHAR(50) NULL,
  `cSexo` CHAR(1) NULL,
  `strRaca` VARCHAR(50) NULL,
  `nIdade` INT NULL,
  `strCaracteristicas` VARCHAR(500) NULL,
  `strCaracteristicasComport` VARCHAR(500) NULL,
  PRIMARY KEY (`nCaoID`));