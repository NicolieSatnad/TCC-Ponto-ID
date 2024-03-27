CREATE DATABASE  IF NOT EXISTS `pontoidbd` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `pontoidbd`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: pontoidbd
-- ------------------------------------------------------
-- Server version	5.7.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `cod_matricula` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `setor` varchar(20) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
select* from funcionario;
--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarios` (
  `ano` int(11) NOT NULL,
  `bimestre` char(6) NOT NULL,
  `data inicio` date NOT NULL,
  `cod_hor` int(11) NOT NULL,
  `FUNCIONARIO_cod_matricula` int(11) NOT NULL,
  PRIMARY KEY (`cod_hor`),
  KEY `fk_HORARIOS_FUNCIONARIO_idx` (`FUNCIONARIO_cod_matricula`),
  CONSTRAINT `fk_HORARIOS_FUNCIONARIO` FOREIGN KEY (`FUNCIONARIO_cod_matricula`) REFERENCES `funcionario` (`cod_matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_horario`
--

DROP TABLE IF EXISTS `item_horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_horario` (
  `dia_semana` char(7) NOT NULL,
  `entrada` varchar(45) DEFAULT NULL,
  `saida` varchar(45) DEFAULT NULL,
  `entrada2` varchar(45) DEFAULT NULL,
  `saida2` varchar(45) DEFAULT NULL,
  `entrada3` varchar(45) DEFAULT NULL,
  `saida3` varchar(45) DEFAULT NULL,
  `entrada4` varchar(45) DEFAULT NULL,
  `saida4` varchar(45) DEFAULT NULL,
  `entrada5` varchar(45) DEFAULT NULL,
  `saida5` varchar(45) DEFAULT NULL,
  `HORARIOS_cod_hor` int(11) NOT NULL,
  KEY `fk_ITEM HORARIO_HORARIOS1_idx` (`HORARIOS_cod_hor`),
  CONSTRAINT `fk_ITEM HORARIO_HORARIOS1` FOREIGN KEY (`HORARIOS_cod_hor`) REFERENCES `horarios` (`cod_hor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_horario`
--

LOCK TABLES `item_horario` WRITE;
/*!40000 ALTER TABLE `item_horario` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_horario` ENABLE KEYS */;
UNLOCK TABLES;

--

CREATE TABLE IF NOT EXISTS `pontoidbd`.`HORA` (
  `cod_hora` INT NOT NULL auto_increment,
  `matricula` INT NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_hora`))
ENGINE = InnoDB;
select* from hora;

--

--
-- Table structure for table `ocorrencias`
--

DROP TABLE IF EXISTS `ocorrencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ocorrencias` (
  `tipo` varchar(100) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `data_entrega` date NOT NULL,
  `cod_matricularm` int(11) NOT NULL,
  `cod_ocorrencia` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cod_ocorrencia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-20 12:08:03

desc ocorrencias;
select * from ocorrencias;