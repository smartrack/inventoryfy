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
  KEY `prod_id_idx` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_order`
--

LOCK TABLES `sales_order` WRITE;
/*!40000 ALTER TABLE `sales_order` DISABLE KEYS */;
INSERT INTO `sales_order` VALUES (2,NULL,'Sandeep',1,24500,'2014-03-20 00:00:00',1,'Comments','A',NULL),(3,NULL,'Balakumaran',1,24500,'2014-03-20 00:00:00',1,'sadfdsaf','A',NULL),(4,NULL,'Gokulnath',1,24500,'2014-03-20 00:00:00',1,'sdfads','C',NULL),(5,NULL,'asdfadsf',1,24500,'2014-03-20 00:00:00',2,'dummy comments','C',NULL),(6,NULL,'Mark H',2,31000,'2014-03-19 00:00:00',1,'Crazy Comments','A',NULL),(7,NULL,'Balakumaran',3,12400,'2014-03-19 00:00:00',1,'sdfads','A',NULL);
/*!40000 ALTER TABLE `sales_order` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`hostmast_admin`@`%`*/ /*!50003 TRIGGER `sales_order_AINS` AFTER INSERT ON `sales_order` FOR EACH ROW 
begin
  update inventory set quantity = quantity - new.prod_qty where id = new.product_id;
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`hostmast_admin`@`%`*/ /*!50003 TRIGGER `sales_order_AUPD` AFTER UPDATE ON `sales_order` FOR EACH ROW
begin
  update inventory set quantity = quantity - new.prod_qty where id = new.product_id and new.rstatus = 'A' and old.prod_qty = new.prod_qty;
  update inventory set quantity = quantity + (old.prod_qty - new.prod_qty) where id = new.product_id and new.rstatus = 'A' and old.prod_qty > new.prod_qty;
  update inventory set quantity = quantity - (new.prod_qty - old.prod_qty) where id = new.product_id and new.rstatus = 'A' and old.prod_qty < new.prod_qty;
  update inventory set quantity = quantity + new.prod_qty where id = new.product_id and new.rstatus = 'C';
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-20 23:33:21
