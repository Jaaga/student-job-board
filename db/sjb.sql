-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sjb
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.04.2

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
-- Table structure for table `Rating`
--

DROP TABLE IF EXISTS `Rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rating` (
  `order_id` int(15) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rating`
--

LOCK TABLES `Rating` WRITE;
/*!40000 ALTER TABLE `Rating` DISABLE KEYS */;
INSERT INTO `Rating` VALUES (2,'Unhappy'),(1,'Happy');
/*!40000 ALTER TABLE `Rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Web Development'),(2,'Animation');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `message_info` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (1,'hi, how are you doing.\r\nI want a google clone.'),(2,'hi, how are you doing.\r\nI want a fb clone.'),(3,'hi, how are you doing.\r\nI want to make password clone to hack ansal\'s account.'),(4,'hi, how are you doing.\r\nI want you to do my homework.');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer_category`
--

DROP TABLE IF EXISTS `offer_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offer_category` (
  `offer_id` int(15) NOT NULL,
  `category_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer_category`
--

LOCK TABLES `offer_category` WRITE;
/*!40000 ALTER TABLE `offer_category` DISABLE KEYS */;
INSERT INTO `offer_category` VALUES (2,2),(1,1);
/*!40000 ALTER TABLE `offer_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offering`
--

DROP TABLE IF EXISTS `offering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offering` (
  `offer_id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offering`
--

LOCK TABLES `offering` WRITE;
/*!40000 ALTER TABLE `offering` DISABLE KEYS */;
INSERT INTO `offering` VALUES (1,2,'I will create your DBMS FILE.','I WILL HELP YOU CREATE YOUR DBMS FILE.','images/mysql.jpg','2014-02-19 08:25:29'),(2,2,'I will create your Html page','I will create beautiful html pages for you.','images/land.jpg','2014-02-10 11:31:32'),(3,2,'I will debug your code','I will help you debug your code.','images/bug.jpg','0000-00-00 00:00:00'),(4,2,'Will finish your CSS homework','I will create your css files for you.','images/css.jpg','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `offering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `offer_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,'Hi, I will sing a rap.','Incomplete'),(2,2,2,'Hi, I will dance for you.','complete'),(3,3,1,'hi....\r\ni will go with you.','completed');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `picture` text NOT NULL,
  `paypal` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'yatin','yatin@yatin.in','yatin','yatin','Hi,\r\nI am great.','','anyhow'),(2,'Yash Raj Chhabra','yash@sjb.in','yash','yash','Hi,\r\nI am great.','','anyhow'),(3,'prank','prank@fm','prank','prank','Hi,\r\nI am great.','','anyhow'),(4,'Ansal','ansal','ansal','ansal','Hi,\r\nI am great.','','hi'),(5,'prinyka','prynka@pr.in','prinyka','ogg','Hi,\r\nI am great.','','dh'),(6,'Yatin','goo@goo.com','life','','','',''),(7,'csreddy','q@g.com','6666666','','','',''),(8,'ansal','ansal@gmail.com','life','','','','');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-02-28 14:07:58
