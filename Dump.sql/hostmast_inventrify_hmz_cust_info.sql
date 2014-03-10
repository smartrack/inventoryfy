CREATE DATABASE  IF NOT EXISTS `hostmast_inventrify` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hostmast_inventrify`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: hostmast_inventrify
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `hmz_cust_info`
--

DROP TABLE IF EXISTS `hmz_cust_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hmz_cust_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` varchar(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` varchar(250) NOT NULL,
  `cust_district` int(11) NOT NULL,
  `cust_contact` varchar(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  `buy_date` date NOT NULL,
  `buy_mode` char(1) NOT NULL,
  `buy_tenure` int(11) NOT NULL,
  `buy_tenure_mode` char(1) NOT NULL,
  `package_id` int(11) NOT NULL,
  `rstatus` char(1) NOT NULL DEFAULT 'A',
  `edate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hmz_cust_info`
--

LOCK TABLES `hmz_cust_info` WRITE;
/*!40000 ALTER TABLE `hmz_cust_info` DISABLE KEYS */;
INSERT INTO `hmz_cust_info` VALUES (1,'hmz','hostmasterzone','singapore',0,'94656228','rsilambarasan@gmail.com','0000-00-00','',0,'',0,'A','2014-02-14 00:09:54');
/*!40000 ALTER TABLE `hmz_cust_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-10  1:26:10
