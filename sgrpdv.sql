# Host: localhost  (Version 5.7.14)
# Date: 2017-05-19 20:09:06
# Generator: MySQL-Front 6.0  (Build 1.88)


#
# Structure for table "deficiente"
#

DROP TABLE IF EXISTS `deficiente`;
CREATE TABLE `deficiente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `idade` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `grauDeficiencia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "deficiente"
#

/*!40000 ALTER TABLE `deficiente` DISABLE KEYS */;
INSERT INTO `deficiente` VALUES (2,'JosÃ©','1615141514','99','rua kal','bairro kal','929392938','377123233','99323234','adquirida'),(3,'Goku','162635463','915','rua nana','cidade nana','26599877','36574857','987656453','congenita');
/*!40000 ALTER TABLE `deficiente` ENABLE KEYS */;

#
# Structure for table "dispositivo"
#

DROP TABLE IF EXISTS `dispositivo`;
CREATE TABLE `dispositivo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "dispositivo"
#

/*!40000 ALTER TABLE `dispositivo` DISABLE KEYS */;
INSERT INTO `dispositivo` VALUES (1,'Com 8','Mega','Embaixo da cama'),(2,'Com 6','Leonardo','Arduino em funcionamento.'),(3,'Com 2','Uno','Funciona legalzin.');
/*!40000 ALTER TABLE `dispositivo` ENABLE KEYS */;

#
# Structure for table "familiar"
#

DROP TABLE IF EXISTS `familiar`;
CREATE TABLE `familiar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `idade` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `grauParentesco` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "familiar"
#

/*!40000 ALTER TABLE `familiar` DISABLE KEYS */;
INSERT INTO `familiar` VALUES (3,'Lucinete','17269983','47','lucineteSantos','000000','rua timbiras','26334345','377454556','992343454','Esposa                            \r\n                                ','Belford Roxo'),(4,'Salamaleico','167765654','67','sala','000000','Rua loucura','26334343','36556784','9736455253','Nada legal','Cidade loucura');
/*!40000 ALTER TABLE `familiar` ENABLE KEYS */;

#
# Structure for table "sensor"
#

DROP TABLE IF EXISTS `sensor`;
CREATE TABLE `sensor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "sensor"
#

/*!40000 ALTER TABLE `sensor` DISABLE KEYS */;
INSERT INTO `sensor` VALUES (1,'                            Em funcionamento                        '),(2,'Sensor de GÃ¡s'),(3,'Sensor de DistÃ¢ncia');
/*!40000 ALTER TABLE `sensor` ENABLE KEYS */;
