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
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_date` date NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buy_price` double NOT NULL,
  `sell_price` double NOT NULL,
  `update_by` int(11) NOT NULL,
  `rstatus` char(1) NOT NULL DEFAULT 'A',
  `edate` datetime DEFAULT NULL,
  `item_name` varchar(45) NOT NULL,
  `brand_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id_idx` (`brand_id`),
  KEY `product_id_idx` (`product_id`),
  CONSTRAINT `brand_id` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
INSERT INTO `inventory` VALUES (5,'2014-02-07',1,15,24000,24500,1,'C',NULL,'Nokia Lumia',9),(6,'2014-02-15',1,5,30000,31000,1,'C',NULL,'Samsung Galaxy',15),(7,'2014-02-20',1,2,18000,19000,1,'C',NULL,'Google LXi',19),(8,'2014-02-24',1,1,34000,35000,1,'C',NULL,'LG Z100',16),(9,'2014-02-17',1,5,5000,5200,1,'C',NULL,'T-Mobile 45Z',18),(10,'2014-02-18',1,7,4500,4550,1,'C',NULL,'Nokia 3200i',9),(11,'2014-02-18',1,4,24000,24500,1,'C',NULL,'Motorolla 600i',17),(12,'2014-02-23',1,4,24000,24500,1,'C',NULL,'Samsung S2',15),(13,'2014-02-18',1,1,17000,17900,1,'C',NULL,'Moto X',17),(14,'2014-02-12',1,3,17000,19000,1,'C',NULL,'Moto ZXI',17),(15,'2014-02-18',1,4,24000,24550,1,'A',NULL,'Samsung S3 White',31),(16,'2014-02-13',1,1,12000,12400,1,'C',NULL,'Veri 120i',21),(17,'2014-03-08',2,3,9000,9500,1,'A',NULL,'GM200 Veri',21),(18,'2014-08-03',1,15,1800,1850,1,'A',NULL,'Virin Mobiles',26),(19,'2014-03-04',3,10,560,610,1,'A',NULL,'headset',23),(22,'2014-03-09',1,10,4500,4550,1,'A',NULL,'Nokia 1100i white',9),(23,'2014-03-09',1,13,1200,1250,1,'A',NULL,'Sprint GT',32),(24,'2014-03-10',1,10,1200,1230,1,'A',NULL,'headset',23);
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
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
