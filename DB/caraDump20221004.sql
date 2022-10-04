-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: caradb
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checkout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `products` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `nameonthecard` varchar(255) DEFAULT NULL,
  `ccardnumber` varchar(255) DEFAULT NULL,
  `expmonthandyear` varchar(255) DEFAULT NULL,
  `cvv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkout`
--

LOCK TABLES `checkout` WRITE;
/*!40000 ALTER TABLE `checkout` DISABLE KEYS */;
INSERT INTO `checkout` VALUES (1,'[{\"id\":\"3\",\"qty\":\"3\"}]','namesh','nameshdilshan@gmail.com','805, batagama Rd,','Ja Ela','wes','11350','nds','111111','12/15','555');
/*!40000 ALTER TABLE `checkout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `cart` varchar(255) DEFAULT NULL,
  `userrole` varchar(45) DEFAULT NULL,
  `passwordresetcode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'namesh','nameshdilshan@gmail.com','564',NULL,NULL,'1181701963'),(2,'test','test@gmail.com','test',NULL,'ADMIN',NULL),(3,'test1','test1@gmail.com','test1',NULL,NULL,NULL),(4,'namesh1','nameshdilshan1@gmail.com','test',NULL,NULL,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rating` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `isfeatured` varchar(45) DEFAULT NULL,
  `islatest` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `image_three` varchar(255) DEFAULT NULL,
  `image_one` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Gold Geometric Earrings','5','Rs590.00','images/product-1.jpg','1','0','New Simple Vintage Designed Metal Gold Hoop Geometric Earrings for Casual/Office Wearing.','Earrings','images/gallery-1.jpg','images/gallery-1.jpg','images/gallery-2.webp'),(2,'Gold 5pcs Ring set','3','Rs890.00','images/Product-2.jpg','1','0',NULL,'Earrings',NULL,NULL,NULL),(3,'Gold bow dangle Earrings','4','Rs530.00','images/Product-3.jpeg','1','0',NULL,'Earrings',NULL,NULL,NULL),(4,'2Layered Gold Necklace','4','Rs760.00','images/Product-4.jpeg','1','0',NULL,'Earrings',NULL,NULL,NULL),(5,'Gold Drop Earrings','3','Rs690.00','images/product-5.webp','0','1',NULL,'Necklaces',NULL,NULL,NULL),(6,'7 Pearl Hoop Earrings Set','4','Rs2300.00','images/product-6.webp','0','1',NULL,'Necklaces',NULL,NULL,NULL),(7,'Pearl Chocker Necklace','2','950.00','images/product-7.jpg','0','1',NULL,'Necklaces',NULL,NULL,NULL),(9,'Asymetric Daisy Earrings','5','750.00','images/product-9.jpg','1','1','fgh','Rings','asdasd','asd','asdasd'),(10,'Star Shell Drop Earrings','2','520.00','images/product-10.webp','0','1','test','Rings','test','test','test'),(11,'Butterfly Stud Earrings','1','470.00','images/product-11.webp','0','1',NULL,'Rings',NULL,NULL,NULL),(12,'Gold Pearl chain Ring','5','650.00','images/product-12.jpg','0','1','fff','Rings','fghf','sdf','ghfgh');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-04  9:58:33
