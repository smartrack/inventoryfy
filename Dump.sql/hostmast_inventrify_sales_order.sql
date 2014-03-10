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
-- Table structure for table `sales_order`
--

DROP TABLE IF EXISTS `sales_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `customer_name` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `sell_date` datetime NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `Comments` varchar(45) DEFAULT NULL,
  `rstatus` char(1) DEFAULT 'A',
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prod_id_idx` (`product_id`),
  CONSTRAINT `prod_id` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_order`
--

LOCK TABLES `sales_order` WRITE;
/*!40000 ALTER TABLE `sales_order` DISABLE KEYS */;
INSERT INTO `sales_order` VALUES (4,NULL,'Hariharan',19,31000,'2014-02-03 00:00:00',1,'new comments','A',NULL),(5,NULL,'Sandeep',8,35000,'2014-03-02 00:00:00',2,'new mobile','C',NULL),(6,NULL,'Gopinath',7,18000,'2014-02-03 00:00:00',1,'Updated  price as on Mar 1st','A',NULL),(7,NULL,'Balakumaran',13,17900,'2014-03-02 00:00:00',1,'sfasd','C',NULL),(8,NULL,'Arun',8,35000,'2014-04-03 00:00:00',1,'xasdfdsa','C',NULL),(9,NULL,'Unni',7,19000,'2014-03-03 00:00:00',1,'sdfd','C',NULL),(10,NULL,'Kumar',9,5200,'2014-04-03 00:00:00',1,'sdfads','A',NULL),(11,NULL,'Sandeep',14,19000,'2014-09-03 00:00:00',1,'new mobile','C',NULL),(12,NULL,'Sandeep',6,31000,'2014-09-03 00:00:00',1,'new mobile','A',NULL),(13,NULL,'Giri',19,610,'2014-10-03 00:00:00',1,'paid full amount','A',NULL),(14,NULL,'Gokulnath',19,610,'2014-10-03 00:00:00',1,'Updated comments','A',NULL),(15,NULL,'Balakumaran',19,9500,'2014-10-03 00:00:00',1,'new comments','A',NULL),(16,NULL,'Arularasan',18,1850,'2014-10-03 00:00:00',1,'Arul comments','A',NULL),(17,NULL,'Kumaraguru',17,9500,'2014-10-03 00:00:00',1,'commentssss','A',NULL);
/*!40000 ALTER TABLE `sales_order` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-10  1:26:09
