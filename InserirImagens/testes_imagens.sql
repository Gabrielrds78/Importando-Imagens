create database testes;
use testes;

CREATE TABLE `imagens` (
  `idimagens` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idimagens`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `imagens` VALUES (2,'image42.png');
