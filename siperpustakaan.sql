CREATE DATABASE  IF NOT EXISTS `siperpustakaan` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `siperpustakaan`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: siperpustakaan
-- ------------------------------------------------------
-- Server version	5.7.12-log

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
-- Table structure for table `anggota`
--

DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL,
  `Photo` blob,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anggota`
--

LOCK TABLES `anggota` WRITE;
/*!40000 ALTER TABLE `anggota` DISABLE KEYS */;
INSERT INTO `anggota` VALUES ('A00001','Hidayah','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085257575757','Mahasiswa','','dayahfaith@gmail.com','anggota','2017-10-23 21:59:13'),('A00002','Tina Yani','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937635','Mahasiswa','','tina@yahoo.com','anggota','2017-10-23 21:59:13'),('A00003','Raka Saputra','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937636','Mahasiswa','','raka@gmail.com','anggota','2017-10-23 21:59:13'),('A00004','Suharyono','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937637','Mahasiswa','','suhar@yahoo.co.id','anggota','2017-10-23 21:59:13'),('A00005','Puji Astuti','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937638','Mahasiswa','','astuti@gmail.com','anggota','2017-10-23 21:59:13'),('A00006','Asika Damayanti','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937639','Mahasiswa','','asika@yahoo.co.id','anggota','2017-10-23 21:59:13'),('A00007','Ahmad Yanor','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937640','Mahasiswa','','yanor@gmail.com','anggota','2017-10-23 21:59:13'),('A00008','Fadliansyah','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937641','Mahasiswa','','fadli@yahoo.com','anggota','2017-10-23 21:59:13'),('A00009','Fahri ','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937642','Mahasiswa','','fahri@yahoo.com','anggota','2017-10-23 21:59:13'),('A00010','Nor Zakiyah','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937643','Mahasiswa','','zakiyah@gmail.com','anggota','2017-10-23 21:59:13'),('A00011','Sarla','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937644','Mahasiswa','','sarla@yahoo.com','anggota','2017-10-23 21:59:13'),('A00012','Cholifatun Nikmah','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','082232458968','Mahasiswa','','nikmah@gmail.com','anggota','2017-10-23 21:59:13'),('A00013','Paris Anggara','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937645','Mahasiswa','','paris@gmail.com','anggota','2017-10-23 21:59:13'),('A00014','Dito Harahap','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085209890098','Mahasiswa','','dito1997@gmail.com','anggota','2017-10-23 21:59:13'),('A00015','Ahmad Nurdin','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937629','Mahasiswa','','nurdin@gmail.com','anggota','2017-10-23 21:59:13'),('A00016','Arina Ihda','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937630','Mahasiswa','','arien@yahoo.com','anggota','2017-10-23 21:59:13'),('A00017','Riska Dwi Seroja','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937631','Mahasiswa','','riska@yahoo.com','anggota','2017-10-23 21:59:13'),('A00018','Nur Siti Fatimah','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937632','Mahasiswa','','sifa@gmail.com','anggota','2017-10-23 21:59:13'),('A00019','Rais Nor Hidayat','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','085798937633','Mahasiswa','','raishidayat@gmail.com','anggota','2017-10-23 21:59:13'),('A00020','Syamsiah','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085798937634','Mahasiswa','','syamsiah@gmail.com','anggota','2017-10-23 21:59:13');
/*!40000 ALTER TABLE `anggota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `Book_id` int(11) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `Tahun_terbit` int(11) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Total_page` int(11) DEFAULT NULL,
  `ISBN` varchar(45) DEFAULT NULL,
  `Jumlah_copy` int(11) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `Photo` varchar(50) DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`Book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'Keperawatan Medikal Bedah: Sistem Kardiovaskular','M. Asikin','Erlangga',2016,'Ilmu Terapan',128,'9786022980827',5,'610','Available','images_006.jpg','2017-10-23 20:50:59'),(2,'Tuberkulosis Bisa Disembuhkan!','Tim Program TB St. Carolus','Erlangga',2017,'Ilmu Terapan',96,'9786024243371',5,'610','Available','images_022.jpg','2017-10-23 20:50:59'),(3,'Sakura di Langit Osaka','Arizu Kazura','Kepustakaan Populer Gramedia',2017,'Kesusasteraan',248,'9786024524098',5,'810','Available','images_019.jpg','2017-10-23 20:50:59'),(4,'Klasifikasi Makhluk Hidup: Did You Know Series Biology','Teguh S','Gramedia Widyasarana Indonesia',2017,'Ilmu Murni',194,'9786023520206',5,'520','Available','images_012.jpg','2017-10-23 20:50:59'),(5,'Benarkah Bumi Itu Datar?','J. Ardian','Narasi',2017,'Ilmu Bumi',260,'9789791685238',5,'910','Available','images_008.jpg','2017-10-23 20:50:59'),(6,'Eksplorasi Tata Surya','A. Gunawan Admiranto','Pustaka Belajar',2017,'Ilmu Terapan',276,'9786024410094',5,'650','Available','images_009.jpg','2017-10-23 20:50:59'),(7,'KOWAIYA 4','Ahmad Mahdi','Mizan Publishing',2017,'Kesusasteraan',100,'9786026193016',5,'820','Available','images_013.jpg','2017-10-23 20:50:59'),(8,'Matematika 2A untuk SMP/MTs Kelas VIII Semester 1 Kurikulum 2013','M Cholik Adinawan','Erlangga',2017,'Ilmu Murni',216,'9786022419082',5,'510','Available','images_015.jpg','2017-10-23 20:50:59'),(9,'Bahas Tuntas Kisi-Kisi SBMPTN Saintek 2018 + CD','Tim Tentor Smart','Gramedia Widyasarana Indonesia',2017,'Umum',728,'9786024523671',6,'010','Available','images_021.jpg','2017-10-23 20:50:59'),(10,'GOAL UN SMP 2018: Jebol Sekolah Favorit','Lana Prastiwi','Elex Media Komputindo',2017,'Umum',520,'9786020441191',5,'010','Available','images_011.jpg','2017-10-23 20:50:59'),(11,'The Power of Digital Marketing','Gm Susanto','Elex Media Komputindo',2017,'Ilmu Terapan',208,'9786020438474',5,'620','Available','images_005.jpg','2017-10-23 20:50:59'),(12,'Ladang Emas: Bagaimana Menentukan Lokasi Bisnis yang Tepat','Sally Maitimu','Elex Media Komputindo',2017,'Ilmu Terapan',160,'9786020447339',5,'620','Available','images_014.jpg','2017-10-23 20:50:59'),(13,'Basis Data Revisi Kedua','Fathansyah','Informatika Bandung',2015,'Ilmu Terapan',540,'9786021514870',5,'630','Available','images_001.jpg','2017-10-23 20:50:59'),(14,'Membuat Aplikasi Perpustakaan dengan MS Access','Jubilee Enterprice','Elex Media Komputindo',2017,'Ilmu Terapan',152,'9786020447896',5,'630','Available','images_007.jpg','2017-10-23 20:50:59'),(15,'Roadmap Broadband Indonesia Menuju Era Teknologi 5G','Denny Kusuma Hendraningrat','Elex Media Komputindo',2017,'Ilmu Terapan',208,'9786020446998',5,'630','Available','images_018.jpg','2017-10-23 20:50:59'),(16,'Remaja Hebat: Gen Hijau dan Gen Digital','Anna Farida','Marja',2017,'Umum',88,'9786026297075',5,'020','Available','images_017.jpg','2017-10-23 20:50:59'),(17,'Ilmu Bahan Bangunan','Agnes Dwi Yanthi Winoto','Taka Publisher',2015,'Ilmu Terapan',168,'9786027526686',5,'640','Available','images_003.jpg','2017-10-23 20:50:59'),(18,'7 Hari Belajar Food Photography','Herry Tjiang','Elex Media Komputindo',2016,'Umum',184,'9786020296760',5,'020','Available','images_010.jpg','2017-10-23 20:50:59'),(19,'Sang Maharani','Agnes Jessica','Gramedia Pustaka Utama',2017,'Kesusasteraan',320,'9786020376165',5,'810','Available','images_020.jpg','2017-10-23 20:50:59'),(20,'Bintang','Tere Liye','Gramedia Pustaka Utama',2017,'Kesusasteraan',392,'9786020351179',5,'810','Available','images_002.jpg','2017-10-23 20:50:59'),(21,'Benarkah Bumi Itu Datar? Edisi 2','J. Ardian','Narasi',2017,'Ilmu Bumi',260,'9789791685238',5,'910','Available','FB_IMG_1444974004227.jpg','2018-01-13 04:16:45');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `borrow_trans_dtl`
--

DROP TABLE IF EXISTS `borrow_trans_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `borrow_trans_dtl` (
  `Detail_id` int(11) NOT NULL,
  `Trans_id` int(11) DEFAULT NULL,
  `Book_id` int(11) DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`Detail_id`),
  KEY `borrow_transactionFK` (`Trans_id`),
  KEY `borrow_transactionFKbook_idx` (`Book_id`),
  CONSTRAINT `borrow_transactionFK` FOREIGN KEY (`Trans_id`) REFERENCES `borrow_transaction` (`Trans_id`),
  CONSTRAINT `borrow_transactionFKbook` FOREIGN KEY (`Book_id`) REFERENCES `book` (`Book_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borrow_trans_dtl`
--

LOCK TABLES `borrow_trans_dtl` WRITE;
/*!40000 ALTER TABLE `borrow_trans_dtl` DISABLE KEYS */;
INSERT INTO `borrow_trans_dtl` VALUES (1,1,13,'2017-10-23 22:20:45'),(2,1,19,'2017-10-23 22:20:45'),(3,2,6,'2017-10-23 22:20:45'),(4,3,13,'2017-10-23 22:20:45'),(5,3,14,'2017-10-23 22:20:45'),(6,4,15,'2017-10-23 22:20:45'),(7,5,16,'2017-10-23 22:20:45'),(8,6,1,'2017-10-23 22:20:45'),(9,6,2,'2017-10-23 22:20:45'),(10,7,3,'2017-10-23 22:20:45'),(11,7,4,'2017-10-23 22:20:45');
/*!40000 ALTER TABLE `borrow_trans_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `borrow_transaction`
--

DROP TABLE IF EXISTS `borrow_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `borrow_transaction` (
  `Trans_id` int(11) NOT NULL,
  `Anggota_id` varchar(50) DEFAULT NULL,
  `Date_of_load` datetime DEFAULT NULL,
  `Return_date` datetime DEFAULT NULL,
  `Total_days` int(11) DEFAULT NULL,
  `Total_books` int(11) DEFAULT NULL,
  `Other_info` varchar(200) DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`Trans_id`),
  KEY `borrowerFK` (`Anggota_id`),
  CONSTRAINT `borrowerFK` FOREIGN KEY (`Anggota_id`) REFERENCES `anggota` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borrow_transaction`
--

LOCK TABLES `borrow_transaction` WRITE;
/*!40000 ALTER TABLE `borrow_transaction` DISABLE KEYS */;
INSERT INTO `borrow_transaction` VALUES (1,'A00003','2017-10-16 09:00:00','2017-10-23 00:00:00',7,2,NULL,'2017-10-23 21:59:13'),(2,'A00004','2017-10-16 09:00:00','2017-10-23 00:00:00',7,1,NULL,'2017-10-23 21:59:13'),(3,'A00005','2017-10-16 09:00:00','2017-10-23 00:00:00',7,2,NULL,'2017-10-23 21:59:13'),(4,'A00006','2017-10-16 09:00:00','2017-10-23 00:00:00',7,1,NULL,'2017-10-23 21:59:13'),(5,'A00007','2017-10-16 09:00:00','2017-10-23 00:00:00',7,1,NULL,'2017-10-23 21:59:13'),(6,'A00008','2017-10-16 09:00:00','2017-10-23 00:00:00',7,2,NULL,'2017-10-23 21:59:13'),(7,'A00009','2017-10-16 09:00:00','2017-10-23 00:00:00',7,2,NULL,'2017-10-23 21:59:13');
/*!40000 ALTER TABLE `borrow_transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `petugas`
--

DROP TABLE IF EXISTS `petugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `petugas` (
  `username` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `JK` varchar(45) DEFAULT NULL,
  `Tempat_lahir` varchar(45) DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Alamat` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `Photo` blob,
  `Email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `petugas`
--

LOCK TABLES `petugas` WRITE;
/*!40000 ALTER TABLE `petugas` DISABLE KEYS */;
INSERT INTO `petugas` VALUES ('P1','Fernandy Dito Julianto','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','082287369407',NULL,'dito@sip.com','petugas','2017-12-13 15:56:00'),('P2','Halimah','Perempuan','Banjarbaru','1997-07-21','Banjarmasin','085783729344',NULL,'halimah@sip.com','petugas','2017-12-13 15:56:00'),('P3','Raka Aditya Saputra','Laki-laki','Banjarbaru','1997-07-21','Banjarmasin','088937483738',NULL,'raka@sip.com','petugas','2017-12-13 15:56:00');
/*!40000 ALTER TABLE `petugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `return_trans_dtl`
--

DROP TABLE IF EXISTS `return_trans_dtl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `return_trans_dtl` (
  `Detail_id` int(11) NOT NULL,
  `Trans_id` int(11) DEFAULT NULL,
  `Book_id` int(11) DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`Detail_id`),
  KEY `return_transactionFK` (`Trans_id`),
  KEY `return_transaction FKbook_idx` (`Book_id`),
  CONSTRAINT `return_transaction FKbook` FOREIGN KEY (`Book_id`) REFERENCES `book` (`Book_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `return_transactionFK` FOREIGN KEY (`Trans_id`) REFERENCES `return_transaction` (`Trans_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `return_trans_dtl`
--

LOCK TABLES `return_trans_dtl` WRITE;
/*!40000 ALTER TABLE `return_trans_dtl` DISABLE KEYS */;
INSERT INTO `return_trans_dtl` VALUES (1,1,13,'2017-10-24 06:20:54'),(2,1,19,'2017-10-24 06:20:54'),(3,2,6,'2017-10-24 06:20:54'),(4,3,13,'2017-10-24 06:20:54'),(5,3,14,'2017-10-24 06:20:54'),(6,4,15,'2017-10-24 06:20:54'),(7,5,16,'2017-10-24 06:20:54'),(8,6,1,'2017-10-24 06:20:54'),(9,6,2,'2017-10-24 06:20:54'),(10,7,3,'2017-10-24 06:20:54'),(11,7,4,'2017-10-24 06:20:54');
/*!40000 ALTER TABLE `return_trans_dtl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `return_transaction`
--

DROP TABLE IF EXISTS `return_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `return_transaction` (
  `Trans_id` int(11) NOT NULL,
  `Anggota_id` varchar(50) DEFAULT NULL,
  `Return_date` datetime NOT NULL,
  `Fine` double DEFAULT NULL,
  `Last_update` datetime DEFAULT NULL,
  PRIMARY KEY (`Trans_id`),
  KEY `borrowerreturnFK` (`Anggota_id`),
  CONSTRAINT `borrowerreturnFK` FOREIGN KEY (`Anggota_id`) REFERENCES `anggota` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `return_transaction`
--

LOCK TABLES `return_transaction` WRITE;
/*!40000 ALTER TABLE `return_transaction` DISABLE KEYS */;
INSERT INTO `return_transaction` VALUES (1,'A00003','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13'),(2,'A00004','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13'),(3,'A00005','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13'),(4,'A00006','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13'),(5,'A00007','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13'),(6,'A00008','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13'),(7,'A00009','2017-10-23 09:00:00',NULL,'2017-10-23 21:59:13');
/*!40000 ALTER TABLE `return_transaction` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-13  9:20:09
