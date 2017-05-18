CREATE TABLE `obsecao`.`Noticia` (
  `nNoticiaID` INT NOT NULL AUTO_INCREMENT,
  `strTopico` VARCHAR(50) NULL,
  `strDescricao` VARCHAR(500) NULL,
  `dtPublicacao` DATE NULL,
  PRIMARY KEY (`nNoticiaID`));