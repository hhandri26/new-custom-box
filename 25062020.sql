-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: localhost    Database: new_custom_box
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accesstoken`
--

DROP TABLE IF EXISTS `accesstoken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `accesstoken` (
  `id` varchar(255) NOT NULL,
  `ttl` int(11) DEFAULT NULL,
  `scopes` text,
  `created` datetime DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesstoken`
--

LOCK TABLES `accesstoken` WRITE;
/*!40000 ALTER TABLE `accesstoken` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesstoken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acl`
--

DROP TABLE IF EXISTS `acl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `acl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(512) DEFAULT NULL,
  `property` varchar(512) DEFAULT NULL,
  `accessType` varchar(512) DEFAULT NULL,
  `permission` varchar(512) DEFAULT NULL,
  `principalType` varchar(512) DEFAULT NULL,
  `principalId` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acl`
--

LOCK TABLES `acl` WRITE;
/*!40000 ALTER TABLE `acl` DISABLE KEYS */;
/*!40000 ALTER TABLE `acl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_benefit`
--

DROP TABLE IF EXISTS `t_benefit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_benefit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text,
  `title` varchar(45) DEFAULT NULL,
  `desc` text,
  `desc_eng` text,
  `adddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_benefit`
--

LOCK TABLES `t_benefit` WRITE;
/*!40000 ALTER TABLE `t_benefit` DISABLE KEYS */;
INSERT INTO `t_benefit` VALUES (1,'icon_box-01.png','LOW MINIMUM ORDER 2 ','Order as Low as 25 Pcs.  ','English version   ','2020-04-10 21:36:07'),(2,'icon_box-04.png','MOST COST EFFICIENTS','Our corrugated packaging solution offers the most strength at the most minimum cost.','English version ',NULL),(3,'icon_box-03.png','FREE SAMPLE','Experience our premium material hands-on free charge!.','English version ',NULL),(4,'icon_box-02.png','ECO FRIENDLY','Our Products are recyclable. reusable and biodegradable Let\'s give more love to our home.','English version ',NULL);
/*!40000 ALTER TABLE `t_benefit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_contact_info`
--

DROP TABLE IF EXISTS `t_contact_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `title_desc` text,
  `desc` text,
  `title_desc_eng` text,
  `desc_eng` text,
  `link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_contact_info`
--

LOCK TABLES `t_contact_info` WRITE;
/*!40000 ALTER TABLE `t_contact_info` DISABLE KEYS */;
INSERT INTO `t_contact_info` VALUES (1,'Eco Pack edit','High quality  boxes','in packs of 25 Pcs.','english version','english version','https://api.whatsapp.com/send?phone=6281298634040&text=Hi%20%20Custombox%20Indonesia%2c%20I%20need%20High-Quality%20Boxes%21&source=&data='),(2,'Custom Packaging','Create your very own packaging','with customized logo and Models.','english version','english version','https://api.whatsapp.com/send?phone=6281293798353&text=Hi%20%20Custombox%20Indonesia%2c%20I%20need%20packaging%20for%20my%20brand%21&source=&data='),(3,'Chat with us','Got a question to ask?','We will be happy to assist you','english version','english version','https://api.whatsapp.com/send?phone=6281293798353&text=Hi%20%20Custombox%20Indonesia%2c%20I%20need%20some%20packaging%21&source=&data=');
/*!40000 ALTER TABLE `t_contact_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_gallery`
--

DROP TABLE IF EXISTS `t_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text,
  `title` varchar(45) DEFAULT NULL,
  `desc` text,
  `desc_eng` text,
  `adddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_gallery`
--

LOCK TABLES `t_gallery` WRITE;
/*!40000 ALTER TABLE `t_gallery` DISABLE KEYS */;
INSERT INTO `t_gallery` VALUES (1,'product1.jpeg','SLIDE BOX',NULL,NULL,NULL),(2,'product2.jpeg','E-MAILER BOX',NULL,NULL,NULL),(3,'product3.jpeg','SHOE BOX',NULL,NULL,NULL),(4,'product4.jpeg','CAKE BOX',NULL,NULL,NULL),(5,'product5.jpeg','TUCK TOP BOX',NULL,NULL,NULL),(6,'product7.jpeg','TOP BOTTOM BOX',NULL,NULL,NULL),(7,'product8.jpeg','HANDLE BOX',NULL,NULL,NULL);
/*!40000 ALTER TABLE `t_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_icon`
--

DROP TABLE IF EXISTS `t_icon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_icon`
--

LOCK TABLES `t_icon` WRITE;
/*!40000 ALTER TABLE `t_icon` DISABLE KEYS */;
INSERT INTO `t_icon` VALUES (1,'fa fa-book'),(2,'fa fa-users'),(3,'fa fa-eye'),(4,'fa fa-gears '),(5,'fa fa-picture-o'),(6,'fa fa-calendar-check-o'),(7,'fa fa-question-circle'),(8,'fa fa-dropbox'),(9,'fa fa-home'),(10,'fa fa-shopping-bag');
/*!40000 ALTER TABLE `t_icon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_member`
--

DROP TABLE IF EXISTS `t_member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text,
  `last_name` text,
  `email` text,
  `phone_number` text,
  `password` text,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_member`
--

LOCK TABLES `t_member` WRITE;
/*!40000 ALTER TABLE `t_member` DISABLE KEYS */;
INSERT INTO `t_member` VALUES (1,'gg','ii','handrisaeputra@gmail.com','08808','123456789','2020-04-12 23:53:02','2020-04-12 23:53:02'),(2,'hh','jj','Handrisaeputra2@gmail.com','66565','123456789','2020-04-12 23:56:34','2020-04-12 23:56:34'),(3,'123','123','omen@gmail.com','123','123','2020-05-10 15:15:01','2020-05-10 15:15:01');
/*!40000 ALTER TABLE `t_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_menu`
--

DROP TABLE IF EXISTS `t_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `addby` int(11) DEFAULT NULL,
  `adddate` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_menu`
--

LOCK TABLES `t_menu` WRITE;
/*!40000 ALTER TABLE `t_menu` DISABLE KEYS */;
INSERT INTO `t_menu` VALUES (1,'Configuration','fa fa-gears',10,NULL,NULL),(22,'Piso','fa fa-dropbox',1,1,'2020-03-09 23:39:05'),(23,'Home Page','fa fa-home',1,1,'2020-04-02 00:27:40'),(24,'Transaksi','fa fa-shopping-bag',3,1,'2020-04-02 00:35:38'),(25,'Member','fa fa-users',4,1,'2020-04-10 22:09:55'),(26,'Sample Request','fa fa-picture-o',5,1,'2020-04-10 22:10:51'),(27,'Shedule','fa fa-calendar-check-o',6,1,'2020-04-26 22:55:44');
/*!40000 ALTER TABLE `t_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_past_project`
--

DROP TABLE IF EXISTS `t_past_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_past_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text,
  `title` varchar(45) DEFAULT NULL,
  `desc` text,
  `desc_eng` text,
  `adddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_past_project`
--

LOCK TABLES `t_past_project` WRITE;
/*!40000 ALTER TABLE `t_past_project` DISABLE KEYS */;
INSERT INTO `t_past_project` VALUES (1,'01.jpg','Indomilk : e Mailers Box','Sebar 5.000 kebaikan projetcs','English version ',NULL),(2,'02.jpg','Total Buah : Top Bottom Box','Full color Fruit Box with Waterproof Laminating','English version ',NULL),(3,'03.jpg','Gaudi : e Mailers Box','Apparels Mailer Box.','English version ',NULL),(4,'04.jpg','Yuna & Co. : Slide Box ','Monthly Subscription Box','English version ',NULL);
/*!40000 ALTER TABLE `t_past_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_post_project`
--

DROP TABLE IF EXISTS `t_post_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_post_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(45) DEFAULT NULL,
  `title` text,
  `desc` text,
  `created_at` datetime DEFAULT NULL,
  `desc_eng` text,
  `location` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_post_project`
--

LOCK TABLES `t_post_project` WRITE;
/*!40000 ALTER TABLE `t_post_project` DISABLE KEYS */;
INSERT INTO `t_post_project` VALUES (1,'product1.jpeg','SLIDE BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros.','2020-04-10 20:44:40','English version','http://localhost/custom_box_clean/public/images/product/product1.jpeg'),(2,'product2.jpeg','E-MAILER BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros. ',NULL,'English version','http://localhost/custom_box_clean/public/images/product/product2.jpeg'),(3,'product3.jpeg','SHOE BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros. ',NULL,'English version','http://localhost/custom_box_clean/public/images/product/product3.jpeg'),(4,'product4.jpeg','CAKE BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros. ',NULL,'English version','http://localhost/custom_box_clean/public/images/product/product4.jpeg'),(5,'product5.jpeg','TUCK TOP BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros. ',NULL,'English version','http://localhost/custom_box_clean/public/images/product/product5.jpeg'),(6,'product7.jpeg','TOP BOTTOM BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros. ',NULL,'English version','http://localhost/custom_box_clean/public/images/product/product7.jpeg'),(7,'product8.jpeg','HANDLE BOX','Phasellus lorem enim, luctus ut velit eget, con-vallis egestas eros. ',NULL,'English version','http://localhost/custom_box_clean/public/images/product/product/8.jpeg');
/*!40000 ALTER TABLE `t_post_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_privileges`
--

DROP TABLE IF EXISTS `t_privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_privileges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_privileges`
--

LOCK TABLES `t_privileges` WRITE;
/*!40000 ALTER TABLE `t_privileges` DISABLE KEYS */;
INSERT INTO `t_privileges` VALUES (193,9,22,NULL),(213,1,22,NULL),(214,1,23,NULL),(215,1,24,NULL),(216,1,25,NULL),(217,1,26,NULL),(218,1,27,NULL),(219,1,1,NULL);
/*!40000 ALTER TABLE `t_privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_privileges_sub`
--

DROP TABLE IF EXISTS `t_privileges_sub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_privileges_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `sub_menu_id` int(11) DEFAULT NULL,
  `add` int(2) DEFAULT NULL,
  `edit` int(2) DEFAULT NULL,
  `deleted` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=578 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_privileges_sub`
--

LOCK TABLES `t_privileges_sub` WRITE;
/*!40000 ALTER TABLE `t_privileges_sub` DISABLE KEYS */;
INSERT INTO `t_privileges_sub` VALUES (515,9,22,68,1,1,1),(562,1,22,68,1,1,1),(563,1,23,69,1,1,1),(564,1,23,70,1,1,1),(565,1,23,71,1,1,1),(566,1,23,72,1,1,1),(567,1,23,73,1,1,1),(568,1,23,74,1,1,1),(569,1,23,75,1,1,1),(570,1,24,76,1,1,1),(571,1,25,77,1,1,1),(572,1,26,78,1,1,1),(573,1,27,79,1,1,1),(574,1,1,1,1,1,1),(575,1,1,2,1,1,1),(576,1,1,10,1,1,1),(577,1,1,41,1,1,1);
/*!40000 ALTER TABLE `t_privileges_sub` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_product_gallery`
--

DROP TABLE IF EXISTS `t_product_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_product_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` varchar(45) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `location` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_product_gallery`
--

LOCK TABLES `t_product_gallery` WRITE;
/*!40000 ALTER TABLE `t_product_gallery` DISABLE KEYS */;
INSERT INTO `t_product_gallery` VALUES (3,'20','product-1586106248.png','tt','http://localhost/custom_box_clean/public/images/gallery_product/product-1586106248.png'),(6,'1','1.jpg','k','http://localhost/custom_box_clean/public/images/gallery_product/1.jpg');
/*!40000 ALTER TABLE `t_product_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_product_harga`
--

DROP TABLE IF EXISTS `t_product_harga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_product_harga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `tinggi` int(11) DEFAULT NULL,
  `berat` decimal(8,2) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `qty_grosir` int(11) DEFAULT NULL,
  `harga_grosir` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_product_harga`
--

LOCK TABLES `t_product_harga` WRITE;
/*!40000 ALTER TABLE `t_product_harga` DISABLE KEYS */;
INSERT INTO `t_product_harga` VALUES (3,2,20,20,20,0.20,3000,50,2500),(4,3,10,10,10,0.20,2000,50,1500),(5,20,5,6,7,7.20,500,5000,5000),(7,1,10,20,30,0.20,5000,50,4000);
/*!40000 ALTER TABLE `t_product_harga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_project`
--

DROP TABLE IF EXISTS `t_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` text,
  `brand_name` text,
  `phone_number` text,
  `date_order` datetime DEFAULT NULL,
  `material` varchar(45) DEFAULT NULL,
  `sample` varchar(45) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `l` int(5) DEFAULT NULL,
  `w` int(5) DEFAULT NULL,
  `h` int(5) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `outer` int(11) DEFAULT NULL,
  `inner` int(11) DEFAULT NULL,
  `flute` int(11) DEFAULT NULL,
  `sheet_l` int(11) DEFAULT NULL,
  `sheet_p` int(11) DEFAULT NULL,
  `qtd_in` int(11) DEFAULT NULL,
  `qtd_use` int(11) DEFAULT NULL,
  `price_box` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `dp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_project`
--

LOCK TABLES `t_project` WRITE;
/*!40000 ALTER TABLE `t_project` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_project_initial`
--

DROP TABLE IF EXISTS `t_project_initial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_project_initial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `initial` varchar(45) DEFAULT NULL,
  `job` varchar(45) DEFAULT NULL,
  `dec` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_project_initial`
--

LOCK TABLES `t_project_initial` WRITE;
/*!40000 ALTER TABLE `t_project_initial` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_project_initial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_request`
--

DROP TABLE IF EXISTS `t_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_size` int(11) DEFAULT NULL,
  `address` text,
  `province` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_request`
--

LOCK TABLES `t_request` WRITE;
/*!40000 ALTER TABLE `t_request` DISABLE KEYS */;
INSERT INTO `t_request` VALUES (1,1,1,7,'gg','Bali','Badung','tse'),(2,1,1,7,'gg','Bali','Badung','tse'),(3,1,4,7,'gh','Bengkulu','Bengkulu','gf'),(4,NULL,3,7,'dgs','Banten','Cilegon','test'),(5,1,3,7,'ff','Banten','Cilegon','test');
/*!40000 ALTER TABLE `t_request` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_role_user`
--

DROP TABLE IF EXISTS `t_role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_role_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_role` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_role_user`
--

LOCK TABLES `t_role_user` WRITE;
/*!40000 ALTER TABLE `t_role_user` DISABLE KEYS */;
INSERT INTO `t_role_user` VALUES (1,'Admin','All Privileges Menu','2020-04-26 22:56:56'),(9,'Piso','Khusus Admin Piso','2020-03-10 03:02:19');
/*!40000 ALTER TABLE `t_role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_slideshow`
--

DROP TABLE IF EXISTS `t_slideshow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_slideshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `img` varchar(45) DEFAULT NULL,
  `adddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_slideshow`
--

LOCK TABLES `t_slideshow` WRITE;
/*!40000 ALTER TABLE `t_slideshow` DISABLE KEYS */;
INSERT INTO `t_slideshow` VALUES (1,'img1','master-slides-01.jpg',NULL),(2,'img2','master-slides-02.jpg',NULL),(3,'img3','master-slides-03.jpg',NULL);
/*!40000 ALTER TABLE `t_slideshow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_sub_menu`
--

DROP TABLE IF EXISTS `t_sub_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(45) DEFAULT NULL,
  `sub_menu_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addby` int(11) DEFAULT NULL,
  `adddate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_sub_menu`
--

LOCK TABLES `t_sub_menu` WRITE;
/*!40000 ALTER TABLE `t_sub_menu` DISABLE KEYS */;
INSERT INTO `t_sub_menu` VALUES (1,'1','Group Menu','menu_table',NULL,NULL),(2,'1','Sub Menu','sub_menu_table',NULL,NULL),(10,'1','User','user_table',1,'2019-04-10 07:33:26'),(41,'1','Role User','role_table',1,'2019-11-08 15:18:49'),(68,'22','List piso ','list_piso',1,'2020-03-10 00:18:20'),(69,'23','Slide Show','slideshow',1,'2020-04-02 00:29:07'),(70,'23','Product','product',1,'2020-04-02 00:32:12'),(71,'23','Why Us','why_us',1,'2020-04-02 00:32:31'),(72,'23','Binefit','binefit',1,'2020-04-02 00:33:02'),(73,'23','Project','project',1,'2020-04-02 00:33:18'),(74,'23','Gallery','gallery',1,'2020-04-02 00:33:36'),(75,'23','Contact Info','contact_info',1,'2020-04-02 00:33:51'),(76,'24','New Order','new_order',1,'2020-04-02 00:37:00'),(77,'25','List Member','member',1,'2020-04-10 22:12:08'),(78,'26','Request List','sample',1,'2020-04-10 22:12:30'),(79,'27','Project','schedule_project',1,'2020-04-26 22:56:04');
/*!40000 ALTER TABLE `t_sub_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_transaction_detail`
--

DROP TABLE IF EXISTS `t_transaction_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_transaction_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaction` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `p` int(2) DEFAULT NULL,
  `l` int(2) DEFAULT NULL,
  `t` int(2) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_transaction_detail`
--

LOCK TABLES `t_transaction_detail` WRITE;
/*!40000 ALTER TABLE `t_transaction_detail` DISABLE KEYS */;
INSERT INTO `t_transaction_detail` VALUES (1,8,10,20,20,20,2,3000,30000,2),(2,8,10,10,20,30,2,5000,50000,1),(7,11,10,20,20,20,2,3000,30000,2),(8,11,10,10,20,30,2,5000,50000,1),(9,12,10,20,20,20,2,3000,30000,2),(10,12,10,10,20,30,2,5000,50000,1),(13,14,10,10,20,30,2,5000,50000,1),(14,14,10,10,20,30,2,5000,50000,1),(15,15,10,10,20,30,2,5000,50000,1),(16,15,10,10,20,30,2,5000,50000,1),(17,16,10,10,20,30,2,5000,50000,1),(18,16,10,10,20,30,2,5000,50000,1),(19,17,10,10,20,30,2,5000,50000,1),(20,17,10,10,20,30,2,5000,50000,1),(21,18,10,10,20,30,2,5000,50000,1),(22,18,10,10,20,30,2,5000,50000,1),(23,19,10,10,20,30,2,5000,50000,1),(24,19,10,10,10,10,2,2000,20000,3),(27,24,1,NULL,NULL,NULL,0,5000,5000,1);
/*!40000 ALTER TABLE `t_transaction_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_transaction_header`
--

DROP TABLE IF EXISTS `t_transaction_header`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_transaction_header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `address` text,
  `note` text,
  `email` varchar(45) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `amount_shipping` varchar(45) DEFAULT NULL,
  `courier` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'pending',
  `snap_token` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_transaction_header`
--

LOCK TABLES `t_transaction_header` WRITE;
/*!40000 ALTER TABLE `t_transaction_header` DISABLE KEYS */;
INSERT INTO `t_transaction_header` VALUES (1,'Handri','Saeputra',68000,'Alamat Rumah','Testing Handri','handrisaeputra@gmail.com',1,'081808784785','18000','jne','pending','7552a0a5-37d6-4754-9af7-a2a72b6a5958','2020-04-11 00:28:42','2020-04-11 00:28:42'),(4,'Handri','Saeputra',108000,'Rumah Handri','Testing Handri','handrisaeputra@gmail.com',1,'081808784785','28000','pos','pending','c48aed7b-3c2e-43e6-a67f-c06706382a1d','2020-04-11 00:42:27','2020-04-11 00:42:27'),(8,'Wawan','H',112000,'Test','Testing Handri','hh@hh.com',1,'88787878','32000','jne','pending','0183b5ae-f32a-4982-96bf-d3abcf17d390','2020-04-12 22:26:26','2020-04-12 22:26:27'),(11,'JJ','lkl',128000,'Test','Testing Handri','hh@hh.com',1,'342143','48000','jne','pending','b417e164-7ff4-459d-8e07-a1e42ad895e5','2020-04-12 22:34:09','2020-04-12 22:34:10'),(12,'gh','hj',116000,'trtr','Testing Handri','hj@hj.com',1,'87878','36000','jne','pending','fddabe5b-2c4e-41ea-8ad4-7633528940e4','2020-04-12 22:36:18','2020-04-12 22:36:19'),(14,'Test','1',208000,'r','Test','rr@aa.com',20,'1','108000','jne','pending','5a7182c0-595d-40f0-bdff-b32dde7ed847','2020-05-10 00:38:35','2020-05-10 00:38:35'),(15,'Test','1',208000,'r','Test','rr@aa.com',20,'1','108000','jne','pending','38edf8a4-5aae-4767-b1a3-17d36735fc50','2020-05-10 00:39:10','2020-05-10 00:39:10'),(16,'Test','1',208000,'r','Test','handrisaeputra@gmail.com',20,'1','108000','jne','pending','86fed499-77fd-4333-b256-8f13ba096cd0','2020-05-10 00:39:34','2020-05-10 00:39:35'),(17,'Test','1',208000,'r','Test','handrisaeputra@gmail.com',20,'1','108000','jne','pending','a2b2abae-3a89-4935-a321-61679abe7e31','2020-05-10 00:39:54','2020-05-10 00:39:55'),(18,'Handri','Handri',136000,'Test','Handri','handrisaeputra@gmail.com',20,'081808784785','36000','jne','pending','532bd53c-b4de-41cc-86ab-051b19076cd3','2020-05-10 00:41:54','2020-05-10 00:41:57'),(19,'Handri','Handri',142000,NULL,'Handri','handrisaeputra@gmail.com',20,'081808785','72000','tiki','pending','836265f8-afaa-4122-ac42-291b0da4f4aa','2020-05-10 01:23:18','2020-05-10 01:23:29'),(24,'gg','ii',14000,'ok','gg','handrisaeputra@gmail.com',1,'08808','9000','jne','pending','ee71c413-f6aa-4854-bb2f-0c20fe041ee9','2020-06-22 07:09:59','2020-06-22 07:09:59');
/*!40000 ALTER TABLE `t_transaction_header` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_why_us`
--

DROP TABLE IF EXISTS `t_why_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `t_why_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `title_number` varchar(45) DEFAULT NULL,
  `title_desc` text,
  `desc` text,
  `desc_eng` text,
  `bg` varchar(45) DEFAULT NULL,
  `img` text,
  `adddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_why_us`
--

LOCK TABLES `t_why_us` WRITE;
/*!40000 ALTER TABLE `t_why_us` DISABLE KEYS */;
INSERT INTO `t_why_us` VALUES (1,'Why Custombox Indonesia  ','01  ','EXPERIENCES ','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s  ','English version   ','bg','b1_02.jpg','2020-04-10 21:22:59'),(2,'Why Custombox Indonesia','02','FULLY','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','English version ','bg1','c1.jpg',NULL),(3,'Why Custombox Indonesia','03','PREMIUM','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','English version ','bg','d1.jpg',NULL),(4,'Why Custombox Indonesia','04','COST','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s','English version ','bg1','e1.jpg',NULL);
/*!40000 ALTER TABLE `t_why_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_piso`
--

DROP TABLE IF EXISTS `tbl_piso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `tbl_piso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `catagory` text,
  `p` decimal(8,2) DEFAULT NULL,
  `l` decimal(8,2) DEFAULT NULL,
  `t` decimal(8,2) DEFAULT NULL,
  `description` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_piso`
--

LOCK TABLES `tbl_piso` WRITE;
/*!40000 ALTER TABLE `tbl_piso` DISABLE KEYS */;
INSERT INTO `tbl_piso` VALUES (1,'1-E','E-MAILER',23.50,19.50,4.50,'',NULL,NULL),(2,'2-E','E-MAILER',33.50,24.50,7.50,'',NULL,NULL),(3,'3-E','E-MAILER',28.50,19.50,9.50,'',NULL,NULL),(4,'4-E','E-MAILER',25.00,25.00,10.00,'',NULL,NULL),(5,'5-E','E-MAILER',18.50,19.50,4.50,'',NULL,NULL),(6,'6-E*','E-MAILER',20.50,21.50,7.50,'Buka depan',NULL,NULL),(7,'7-E*','E-MAILER',20.00,20.00,10.00,'Buka depan (bisa copot)',NULL,NULL),(8,'8-E','E-MAILER',26.00,15.50,6.00,'',NULL,NULL),(9,'9-E*','E-MAILER',17.50,18.50,9.50,'Mika 2 jendela',NULL,NULL),(10,'10-E','E-MAILER',28.50,24.50,4.50,'',NULL,NULL),(11,'11-E','E-MAILER',15.50,22.50,7.50,'',NULL,NULL),(12,'12-E','E-MAILER',20.00,20.00,5.00,'',NULL,NULL),(13,'13-E*','E-MAILER',19.50,20.50,6.50,'Full mika + buka depan',NULL,NULL),(14,'14-E','E-MAILER',22.00,22.00,6.00,'',NULL,NULL),(15,'15-E','E-MAILER',20.50,14.50,4.50,'',NULL,NULL),(16,'16-E','E-MAILER',10.00,10.00,5.00,'',NULL,NULL),(17,'17-E','E-MAILER',15.00,15.00,5.00,'',NULL,NULL),(18,'18-E','E-MAILER',18.00,18.00,5.00,'',NULL,NULL),(19,'19-E','E-MAILER',20.00,15.00,10.00,'',NULL,NULL),(20,'20-E','E-MAILER',23.50,19.50,9.50,'',NULL,NULL),(21,'21-E','E-MAILER',25.00,20.00,5.00,'',NULL,NULL),(22,'22-E','E-MAILER',41.00,29.00,6.00,'',NULL,NULL),(23,'23-E','E-MAILER',15.00,9.50,4.50,'',NULL,NULL),(24,'24-E*','E-MAILER',18.50,13.50,7.00,'Potongan kembang atas',NULL,NULL),(25,'25-E','E-MAILER',20.00,20.00,7.00,'',NULL,NULL),(26,'26-E','E-MAILER',45.00,35.00,5.00,'',NULL,NULL),(27,'27-E*','E-MAILER',18.00,24.50,7.00,'',NULL,NULL),(28,'28-E','E-MAILER',23.50,24.50,9.50,'',NULL,NULL),(29,'34-E','E-MAILER',3.50,9.50,4.50,'',NULL,NULL),(30,'43-E*','E-MAILER',21.50,21.50,7.00,'Mika 16 x 16 + Bukaan depan',NULL,NULL),(31,'44-E','E-MAILER',23.00,11.00,5.50,'',NULL,NULL),(32,'45-E','E-MAILER',38.00,25.00,4.00,'',NULL,NULL),(33,'46-E','E-MAILER',23.00,23.00,5.50,'',NULL,NULL),(34,'47-E','E-MAILER',23.50,19.50,7.00,'',NULL,NULL),(35,'48-E','E-MAILER',30.00,26.00,10.00,'',NULL,NULL),(36,'49-E','E-MAILER',15.00,9.50,5.50,'',NULL,NULL),(37,'50-E','E-MAILER',11.00,23.00,5.00,'',NULL,NULL),(38,'52-E','E-MAILER',22.50,22.50,7.50,'',NULL,NULL),(39,'53-E*','E-MAILER',24.00,24.00,5.00,'Mika 18.5 x 18.5',NULL,NULL),(40,'54-E','E-MAILER',20.00,10.00,5.00,'',NULL,NULL),(41,'55-E','E-MAILER',25.50,17.00,3.00,'',NULL,NULL),(42,'56-E','E-MAILER',29.00,22.00,6.00,'',NULL,NULL),(43,'57-E','E-MAILER',25.00,25.00,4.00,'',NULL,NULL),(44,'58-E','E-MAILER',32.00,18.00,5.00,'',NULL,NULL),(45,'59-E','E-MAILER',26.00,19.00,5.00,'',NULL,NULL),(46,'60-E*','E-MAILER',23.00,15.00,8.00,'Mika 20 x 11.5',NULL,NULL),(47,'61-E','E-MAILER',26.00,26.00,10.00,'',NULL,NULL),(48,'62-E','E-MAILER',20.00,15.00,5.00,'',NULL,NULL),(49,'63-E','E-MAILER',30.00,20.00,7.00,'',NULL,NULL),(50,'64-E','E-MAILER',24.50,16.70,8.00,'',NULL,NULL),(51,'65-E*','E-MAILER',16.00,16.00,9.00,'Buka Depan (bisa copot)',NULL,NULL),(52,'66-E','E-MAILER',32.50,21.50,11.50,'',NULL,NULL),(53,'67-E','E-MAILER',33.50,27.00,6.00,'',NULL,NULL),(54,'68-E','E-MAILER',30.00,30.00,5.00,'',NULL,NULL),(55,'69-E','E-MAILER',33.50,21.50,11.50,'',NULL,NULL),(56,'76-E','E-MAILER',49.00,35.00,5.00,'',NULL,NULL),(57,'29-TB/A','TOP/ BOTTOM',41.00,25.00,10.00,'Total buah',NULL,NULL),(58,'29-TB/B','TOP/ BOTTOM',41.00,25.00,10.00,'Total buah',NULL,NULL),(59,'30-TB/A','TOP/ BOTTOM',20.00,20.00,5.00,'',NULL,NULL),(60,'30-TB/B','TOP/ BOTTOM',19.50,19.50,19.80,'',NULL,NULL),(61,'31-TB/A','TOP/ BOTTOM',35.00,35.00,4.50,'',NULL,NULL),(62,'31-TB/B','TOP/ BOTTOM',35.00,35.00,10.00,'',NULL,NULL),(63,'32-SL/A+B*','TOP/ BOTTOM',21.00,10.50,9.50,'1 Piso dengan selongsong(sloped) alfons',NULL,NULL),(64,'33-SL/A','TOP/ BOTTOM',35.00,30.00,10.00,'',NULL,NULL),(65,'33-SL/B','TOP/ BOTTOM',35.00,30.00,10.00,'',NULL,NULL),(66,'35-SL/A+B','TOP/ BOTTOM',24.00,12.00,10.00,'',NULL,NULL),(67,'36-SL/A','TOP/ BOTTOM',26.50,17.50,12.50,'',NULL,NULL),(68,'36-SL/B','TOP/ BOTTOM',26.50,17.50,12.50,'',NULL,NULL),(69,'77-SL/A','TOP/ BOTTOM',29.00,29.10,6.00,'',NULL,NULL),(70,'77-SL/B','TOP/ BOTTOM',28.00,28.00,5.00,'',NULL,NULL),(71,'37*-REG','REGULER',13.00,12.00,13.00,'Wonderful',NULL,NULL),(72,'38*-REG','REGULER',13.00,10.00,14.50,'Piso + sekat',NULL,NULL),(73,'39-C','REGULER',26.50,26.50,15.00,'',NULL,NULL),(74,'40-C','REGULER',27.80,27.80,17.00,'',NULL,NULL),(75,'41-C','REGULER',24.50,24.50,13.00,'',NULL,NULL),(76,'42-TT','TUCK TOP',28.50,19.00,9.70,'',NULL,NULL),(77,'70-HB','HANDLE BOX',14.00,11.00,20.00,'Tinggi Handle 4.5',NULL,NULL),(78,'71-HB','HANDLE BOX',13.00,13.00,25.00,'Tinggi Handle 5.5 & Mika 12 x 10',NULL,NULL),(79,'72-HB','HANDLE BOX',23.00,12.00,11.00,'Tinggi Handle 5.5',NULL,NULL),(80,'73-HB','HANDLE BOX',16.00,16.00,17.50,'Tinggi Handle 5.5',NULL,NULL);
/*!40000 ALTER TABLE `tbl_piso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `realm` varchar(512) DEFAULT NULL,
  `username` varchar(512) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(512) NOT NULL,
  `company_id` varchar(45) DEFAULT NULL,
  `area_id` varchar(45) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `gender` varchar(512) DEFAULT NULL,
  `user_group_id` int(11) DEFAULT NULL,
  `user_group_name` varchar(512) DEFAULT NULL,
  `phone` varchar(512) DEFAULT NULL,
  `mobile` varchar(512) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `hometown` varchar(255) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `date_crated` datetime DEFAULT NULL,
  `emailVerified` tinyint(1) DEFAULT NULL,
  `real_password` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `verificationToken` varchar(512) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `token_api` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'server','admin','admin','$2y$10$sGcFROD2ze.JkXz5av7u/OIULmf/ds5lJ6hR6y858l6U3GgOV0FI.',NULL,NULL,'admin@admin.com',NULL,1,'admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'admin','1',NULL,'og2nTpr6NDP8A6rdL4Abg6i8Wi1wGzbZKDDvTfUWokdkiGOya433mt3w4NKM','1',NULL,'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9sb2NhbGhvc3QvdmlydHVzLXdlYi9hcGkvYXV0aC9zaWduaW4iLCJpYXQiOjE1NzUxOTM4NjEsImV4cCI6MTU3NTc5ODY2MSwibmJmIjoxNTc1MTkzODYxLCJqdGkiOiJjaG5VVEw3ODRmdnA0WEJ4In0.vcF5BeQhSh3kaH6_L6qtHbfsdEJFza8x4PRGzWtDbdQ');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-25 20:25:38
