-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: metamind_cp
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `about_details`
--

DROP TABLE IF EXISTS `about_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `about_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `about_details_about_id_idx` (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_details`
--

LOCK TABLES `about_details` WRITE;
/*!40000 ALTER TABLE `about_details` DISABLE KEYS */;
INSERT INTO `about_details` VALUES (1,3,'Training Coaching','Pelatihan offline dan online, untuk umum (perorangan) maupun customize program yang disesuaikan dengan kebutuhan perusahaan dan organisasi.','2023-10-14 03:11:10','2023-10-14 03:11:10',NULL),(2,1,'► Training Coaching','Pelatihan offline dan online, untuk umum (perorangan) maupun customize program yang disesuaikan dengan kebutuhan perusahaan dan organisasi.','2023-10-14 03:12:19','2023-10-14 03:13:47',NULL),(3,1,'► Coaching Services','Fasilitasi pengembangan melalui coaching perorangan maupun team dalam rangka membangun kinerja yang berkesinambungan.','2023-10-14 03:13:47','2023-10-14 03:13:47',NULL),(4,1,'► Mindset Assessment','Profiling (pemetaan) pola pikir, tata nilai (values), motivasi, budaya dan tingkat kepuasan kerja (job engagement & involvement) dalam rangka pe-ngembangan diri perorangan maupun team di perusahaan.','2023-10-14 03:13:47','2023-10-14 03:13:47',NULL),(5,1,'► Consultancy','Menjadi partner perusahaan dalam analisa, menyusun dan mengembang-kan strategi manajemen SDM yang adaptif dan berkesinambungan.','2023-10-14 03:13:47','2023-10-14 03:13:47',NULL);
/*!40000 ALTER TABLE `about_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'METAMIND','Tentang','PT METAMIND Tata Cendekia atau yang lebih sering dikenal dengan METAMIND Training Coaching Institute adalah lembaga pengembangan mindset manusia melalui training, coaching, mindset assessment dan consultancy. Didirikan sejak 8 Januari 2003 sebagai lembaga Pendidikan Neuro-Semantics dan NLP pertama di Indonesia, fokus utama kami adalah pengembangan yang berkesinambungan lahir batin (sustainability inside out) bagi personal maupun perusahaan dan organisasi dalam keselarasan bersama dunia eksternal (Outside in).','XqgF9TDryO8fLpjYWhNxqi9eNwv1w25gSWDLDs28.png','2023-10-12 06:37:36','2023-10-14 03:13:47',NULL),(2,'NEURO-SEMANTIC NLP','Mengenal','Apa itu NS-NLP?\r\nNLP singkatan dari Neuro Linguistic Programming, suatu pendekatan tentang human excellence, yang mempelajari tentang struktur berpikir dan perilaku manusia. Belajar NLP secara intensif akan memperkenalkan kita atas model komunikasi interpersonal yang efektif, serta komunikasi intrapersonal yang selama ini jarang kita pikirkan.  \r\nNS singkatan dari Neuro-Semantics, merupakan perkembangan baru dari NLP yang menitikberatkan pada pemaknaan dan Meta yang berarti above, about & beyond. NS dikembangkan 20 tahun setelah NLP, banyak membahas kerangka berpikir yang menjadi driver dari setiap perilaku manusia. \r\nUntuk informasi lebih detail, bisa kunjungi website: https://www.neurosemantics.com/','files/cari-tahu-ns-nlp-3TBJ.png','2023-10-12 06:39:09','2023-10-12 06:39:09',NULL),(3,'Belajar NS-NLP','Mengapa Perlu','Karena NS-NLP belajar tentang pola pikir manusia.  \r\nSebagaimana yang kita ketahui, pola pikir (mindset) adalah pemicu semua tindakan dan ucapan yang dilakukan seseorang. Kita sering berusaha merubah habits, atau memotivasi diri agar bersemangat, namun akan sia-sia bila tidak diiringi perubahan pola pikir yang mendukung.  \r\nDemikian juga yang terjadi pada perusahaan/organisasi. Selama ini perusahaan sibuk meng-upgrade sistem dan teknologi canggih, memberi pelatihan ketrampilan teknis para SDM di perusahaan namun lupa upgrade pola pikir mereka yang sesungguhnya justru kunci keberhasilan.\r\n\r\nMengikuti pelatihan NS-NLP memberi wawasan baru tentang perkembangan pola pikir manusia dan sekaligus bagaimana menjalankannya agar hidup lebih berkualitas sesuai perkembangan jaman.','files/mengapa-belajar-ns-9RtY.png','2023-10-12 06:40:20','2023-10-12 06:40:20',NULL);
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'Essensial Skills','Intensive Corporate Training','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,','files/coaching6-k4g3.jpg','Home Page','2023-10-12 06:37:09','2023-10-12 06:37:09',NULL),(2,'Upcoming Events','Our Schedules','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,','files/schedule-banner-EGeH.jpg','Event Page','2023-10-13 07:01:24','2023-10-13 07:01:24',NULL),(3,'Our Services',NULL,'Training kami berbasis Neuro-Semantics NLP, kami memberikan pelatihan untuk meningkatkan performance kerja, termasuk pula kesadaran baru atas pentingnya perubahan dan perngembangan diri para personal.','tLWGdjHQ4o24gHhtnFurzVQomqsKc9L67tzBCgso.jpeg','Our Service Page','2023-10-14 16:57:56','2023-10-14 16:57:56',NULL);
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'Clients1','files/logo-laravel-gIYo.png','2023-10-13 04:44:56','2023-10-13 04:44:56',NULL),(2,'Client 2','files/linkedin-OKBH.png','2023-10-13 04:45:12','2023-10-13 04:45:12',NULL);
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coachings`
--

DROP TABLE IF EXISTS `coachings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coachings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `subtitle` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coachings`
--

LOCK TABLES `coachings` WRITE;
/*!40000 ALTER TABLE `coachings` DISABLE KEYS */;
INSERT INTO `coachings` VALUES (1,'METAMIND Executive Coach System (MECS)','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. \r\n\r\n• Perorang (One-on-One Coaching)\r\n• Tujuan : Memfasilitasi pengembangan pribadi dalam rangka, mencapai tujuan/target dengan efektif dan efisien.\r\n• Target Peserta : Profesional, Business Owner','Tentang MECS','VXwikQjwMs2TO8wsqueoUOjv4zEShgm0b9RRNLxV.png','2023-10-15 16:12:46','2023-10-15 16:12:46',NULL),(2,'METAMIND Group & Team Coach System (MGTCS)','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. \r\n\r\n• Perorang (One-on-One Coaching)\r\n• Tujuan : Memfasilitasi pengembangan pribadi dalam rangka, mencapai tujuan/target dengan efektif dan efisien.\r\n• Target Peserta : Profesional, Business Owner','Tentang MGTCS','kK10slPlHmnG36Fh7th8nV3d8QgUKg5zNMMflYz9.png','2023-10-15 16:14:13','2023-10-15 16:14:13',NULL),(3,'METAMIND Business Coach System (MBCS)','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. \r\n\r\n• Perorang (One-on-One Coaching)\r\n• Tujuan : Memfasilitasi pengembangan pribadi dalam rangka, mencapai tujuan/target dengan efektif dan efisien.\r\n• Target Peserta : Profesional, Business Owner','Tentang MBCS','5DqWEosrLBB9vLDVhEefp4fR31VOkjpBZpZQjmI2.png','2023-10-15 16:14:34','2023-10-15 16:14:34',NULL);
/*!40000 ALTER TABLE `coachings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_detail_cols`
--

DROP TABLE IF EXISTS `event_detail_cols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_detail_cols` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_detail_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `col_details_event_detail_id_foreign` (`event_detail_id`),
  CONSTRAINT `col_details_event_detail_id_foreign` FOREIGN KEY (`event_detail_id`) REFERENCES `event_details` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_detail_cols`
--

LOCK TABLES `event_detail_cols` WRITE;
/*!40000 ALTER TABLE `event_detail_cols` DISABLE KEYS */;
INSERT INTO `event_detail_cols` VALUES (12,4,'MODULE SERIES 1','✓ Ketika berbicara belum tentu berkomunikasi\r\n✓ Komunikasi vs Persepsi         \r\n✓  Berkomunikasi tidak sama dengan Berbicara\r\n✓  Mendengarkan dengan mata','2023-10-14 16:41:46','2023-10-14 16:41:46',NULL),(13,4,'MODULE SERIES 2','✓ Biar bicara cepat nyambung …\r\n✓ Agar pendekatan anda tidak sia-sia\r\n✓ Komunikasi yang sesuai dengan gaya berpikir seseorang (1)\r\n✓ Komunikasi yang sesuai dengan gaya berpikir seseorang (2)','2023-10-14 16:41:46','2023-10-14 16:41:46',NULL),(14,4,'MODULE SERIES 3','✓Anda ngomong apa?\r\n✓Apa mau mu?\r\n✓Apa, bagaimana vs mengapa\r\n✓ Bagaimana anda tahu?','2023-10-14 16:41:46','2023-10-14 16:41:46',NULL),(15,5,'Bukan Sekedar Teori','Aplikasi langsung, self-discovery, mudah dan langsung dapatkan hasilnya.','2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(16,5,'Mudah Dipahami','Dalam suasana santai dan kekeluargaan yang mempermudah proses pembelajaran.','2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(17,5,'Materi Super Lengkap','Materi berbasis kompetensi, detil, lengkap dan ilmiah.','2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(18,5,'Skil Berkomunikasi','Meningkatkan komunikasi, baik terhadap diri sendiri maupun orang lain.','2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(19,5,'Transformasi','Basic Transformational COACHING skills yang efektif memfasilitasi perubahan dan pengembangan manusia dari internal(inside-out)','2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(20,5,'Komunitas yang solid','Didukung oleh komunitas yang mengutamakan pembelajaran dan pengembangan terus menerus (Kaizen).','2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(21,6,NULL,'✓  Model komunikasi NS-NLP.\r\n✓  Struktur Mindset Seseorang.\r\n✓  Struktur Frame of Mind Seseorang.\r\n✓  Sistem representasi pikiran.\r\n✓  Ketrampilan observasi.\r\n✓  Strategi komunikasi interpersonal.\r\n✓  Wellformed Outcome (goal-setting).\r\n✓  Manajemen keada','2023-10-14 16:44:57','2023-10-14 16:44:57',NULL),(22,6,NULL,'✓  Model komunikasi NS-NLP.\r\n✓  Struktur Mindset Seseorang.\r\n✓  Struktur Frame of Mind Seseorang.\r\n✓  Sistem representasi pikiran.\r\n✓  Ketrampilan observasi.\r\n✓  Strategi komunikasi interpersonal.\r\n✓  Wellformed Outcome (goal-setting).\r\n✓  Manajemen keada','2023-10-14 16:44:57','2023-10-14 16:44:57',NULL);
/*!40000 ALTER TABLE `event_detail_cols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_details`
--

DROP TABLE IF EXISTS `event_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bg_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poin_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_col` tinyint DEFAULT NULL,
  `position` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_details_event_id_foreign` (`event_id`),
  CONSTRAINT `event_details_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_details`
--

LOCK TABLES `event_details` WRITE;
/*!40000 ALTER TABLE `event_details` DISABLE KEYS */;
INSERT INTO `event_details` VALUES (4,4,'Yang dipelajari ?','Materi apa saja','Materi  yang dipelajari terdiri dari 3 Modul','#e6f1f9','#05436f','#05436f','#05436f','#000000',3,1,'2023-10-14 16:41:46','2023-10-14 16:41:46',NULL),(5,4,'Harus Ikut Program Ini ?','Mengapa Anda',NULL,'#05436f','#ffffff','#ffffff','#ffffff','#ffffff',3,2,'2023-10-14 16:44:00','2023-10-14 16:44:00',NULL),(6,4,'Benefit',NULL,'Materi yang dipelajari terdiri dari 3 Modul','#ffffff','#05436f','#05436f','#05436f','#05436f',2,3,'2023-10-14 16:44:57','2023-10-14 16:44:57',NULL);
/*!40000 ALTER TABLE `event_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `training_id` bigint unsigned NOT NULL,
  `trainer_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `quota` int DEFAULT NULL,
  `btn_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_training_id_foreign` (`training_id`),
  KEY `events_trainer_id_foreign` (`trainer_id`),
  CONSTRAINT `events_trainer_id_foreign` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE CASCADE,
  CONSTRAINT `events_training_id_foreign` FOREIGN KEY (`training_id`) REFERENCES `trainings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (4,6,1,'Acara Januari 2024 ke-1','Jakarta','2024-01-01','2024-01-01','10:00:00','13:00:00','Acara Januari 2024 ke-1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',25,'Registrasi','https://wa.me/%2B628117899088?text=Hi%20Metamind%2C%20Saya%20Ingin%20Ikut%20Event%20','OeIbObqhfBRkDyhcVyqfLNo5W4Ub8HTCLSQrthX6.jpeg','2023-10-14 16:36:45','2023-10-14 16:39:12',NULL),(5,6,1,'Acara Februari 2024 ke-1','Jakarta','2024-02-01','2024-02-01','13:00:00','16:00:00','Acara Februari 2024 ke-1','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',30,'Registrasi','https://wa.me/%2B628117899088?text=Hi%20Metamind%2C%20Saya%20Ingin%20Ikut%20Event%20','q57LKW5Tm0mez1XoWwXOSyykeOXPogxP1ST6TmLI.jpeg','2023-10-14 16:37:37','2023-10-14 16:39:02',NULL),(6,6,1,'Acara Februari 2024 ke-2','Jakarta','2024-02-15','2024-02-15','09:00:00','12:00:00','Acara Februari 2024 ke-2','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',120,'Registrasi','https://wa.me/%2B628117899088?text=Hi%20Metamind%2C%20Saya%20Ingin%20Ikut%20Event%20','pbxg9LARCayuKqZ6SVd7BRyEwS5rP1K1mM6mY0Iu.jpeg','2023-10-14 16:38:32','2023-10-14 16:38:32',NULL);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `faqs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Apakah ada Jaminan pasti bisa ?','Ada','2023-10-13 07:26:35','2023-10-13 07:26:35',NULL),(2,'Bagaimana Mekanisme Belajarnya','Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, nihil tenetur amet quibusdam magnam iure labore dignissimos deleniti ad ut. Expedita cum nam similique? Explicabo magni ex vel voluptatum voluptatibus!','2023-10-13 07:27:02','2023-10-13 07:27:02',NULL),(3,'Apakah dapat Sertifikat ?','Ya','2023-10-13 07:27:14','2023-10-13 07:27:14',NULL),(4,'Apakah bisa diwakilkan ?','Ya','2023-10-13 07:27:22','2023-10-13 07:27:22',NULL),(5,'Apabila saya melewatkan sesi training, apakah bisa re-seat/ dapat kelas pengganti ?','Bisa','2023-10-13 07:27:30','2023-10-13 07:27:30',NULL);
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_09_14_073153_create_banners_table',1),(6,'2023_09_14_073159_create_services_table',1),(7,'2023_09_14_073207_create_service_contents_table',1),(8,'2023_09_14_073221_create_settings_table',1),(9,'2023_09_14_073238_create_training_groups_table',1),(10,'2023_09_14_073241_create_trainings_table',1),(11,'2023_09_14_073307_create_coachings_table',1),(12,'2023_09_14_073321_create_testimonies_table',1),(13,'2023_09_14_073330_create_faqs_table',1),(14,'2023_09_14_073337_create_trainers_table',1),(15,'2023_09_14_073341_create_clients_table',1),(16,'2023_10_07_101815_create_events_table',1),(17,'2023_10_07_101914_create_event_details_table',1),(18,'2023_10_07_102122_create_col_details_table',1),(19,'2023_10_09_141915_create_abouts_table',1),(20,'2023_10_14_100106_create_about_details_table',2),(21,'2023_10_14_104009_add_description_file_to_training_groups',3),(22,'2023_10_14_142339_add_achievement_to_trainers',4),(23,'2023_10_14_223349_add_soft_deletes',5),(25,'2023_10_15_113057_create_service_content_cols_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_content_cols`
--

DROP TABLE IF EXISTS `service_content_cols`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_content_cols` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service_content_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_content_cols_service_content_id_foreign` (`service_content_id`),
  CONSTRAINT `service_content_cols_service_content_id_foreign` FOREIGN KEY (`service_content_id`) REFERENCES `service_contents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_content_cols`
--

LOCK TABLES `service_content_cols` WRITE;
/*!40000 ALTER TABLE `service_content_cols` DISABLE KEYS */;
INSERT INTO `service_content_cols` VALUES (1,10,'Emotional Intelligence','Memberi informasi atas faktor-faktor yang dominan dalam cara berkomunikasi, mengambil keputusan, gaya kerja, serta kecerdasan emosional seseorang.','2023-10-15 04:56:09','2023-10-15 04:56:09',NULL),(2,10,'Burn Out','Memberi informasi apakah seseorang pernah memiliki kecenderungan untuk ‘burn-out’ (stress dan kelelahan).','2023-10-15 04:56:09','2023-10-15 04:56:09',NULL),(3,10,'Growth Spirit','Mengukur sebesar besarnya seseorang ingin perubahan secara signifikan dalam bekerja.','2023-10-15 04:56:09','2023-10-15 04:56:09',NULL),(4,10,'Culture','Mengukur iklim kerja saat ini di perusahaan dan menunjukkan 17 aspek yang menimbulkan motivasi dan demotivasi di perusahaan saat ini (JobMotivation Edition).','2023-10-15 04:56:09','2023-10-15 04:56:09',NULL),(5,14,NULL,'• Assesment penempatan karyawan.\r\n• Rekrutmen.\r\n• Pengembangan Diri/Karyawan.\r\n• Optimalisasi pelatihan.\r\nMeningkatkan motivasi dan produktifitas kerja.','2023-10-15 05:00:51','2023-10-15 05:00:51',NULL);
/*!40000 ALTER TABLE `service_content_cols` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_contents`
--

DROP TABLE IF EXISTS `service_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `service_contents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `service_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `bg_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_col` int DEFAULT NULL,
  `position` int DEFAULT NULL,
  `poin_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_color` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_position` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_contents_service_id_foreign` (`service_id`),
  CONSTRAINT `service_contents_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_contents`
--

LOCK TABLES `service_contents` WRITE;
/*!40000 ALTER TABLE `service_contents` DISABLE KEYS */;
INSERT INTO `service_contents` VALUES (7,5,NULL,'Dengan keahlian kami di bidang Change Management, Organization Culture, Corporate Value dan EAP (Employee Assistant Programme), kami membantu perusahaan dalam membuat sistem perubahan.\r\n\r\n\r\nPerubahan organisasi dengan pendekatan terstruktur dalam sebuah organisasi untuk memastikan bahwa perubahan yang lancar dan berhasil diterapkan untuk mencapai manfaat yang berkelanjutan. Dalam lingkungan bisnis modern, organisasi menghadapi perubahan yang cepat tidak seperti sebelumnya. Globalisasi dan inovasi konstan hasil teknologi dalam lingkungan bisnis yang terus berkembang. lingkungan bisnis mengalami begitu banyak perubahan, maka harus belajar untuk menjadi nyaman dengan perubahan juga. Oleh karena itu , kemampuan untuk mengelola dan beradaptasi dengan perubahan organisasi adalah kemampuan penting yang diperlukan di tempat kerja saat ini . Namun , perubahan organisasi besar dan cepat adalah mendalam sulit karena struktur , budaya , dan rutinitas organisasi sering mencerminkan gigih dan sulit-untuk - menghapus \" jejak \" dari periode masa lalu , yang tahan terhadap perubahan radikal bahkan sebagai lingkungan saat ini organisasi berubah dengan cepat.','#ffffff',NULL,1,1,'#000000','#000000','#000000',NULL,NULL,'2023-10-15 04:50:22','2023-10-15 04:50:34',NULL),(8,5,'Change Management','Perubahan organisasi secara langsung mempengaruhi semua departemen dari karyawan entry level untuk manajemen senior tujuan, strategi, pengukuran sistem, urutan langkah-langkah, implementasi dan perubahan organisasi. \r\nEfektif mengelola perubahan organisasi dengan proses empat langkah:\r\n\r\n1. Menyadari perubahan dalam lingkungan bisnis yang lebih luas\r\n2. Mengembangkan penyesuaian yang diperlukan untuk kebutuhan perusahaan mereka\r\n3. Pelatihan karyawan mereka pada perubahan yang sesuai\r\n4. Memenangkan dukungan dari karyawan dengan persuasi dari penyesuaian yang diperlukan\r\n\r\nSebagai praktek multi-disiplin yang telah berkembang sebagai hasil dari penelitian ilmiah, manajemen organisasi harus dimulai dengan diagnosis sistematis situasi saat ini dalam rangka untuk menentukan baik perlunya perubahan dan kemampuan untuk berubah. Tujuan, isi, dan proses perubahan semua harus ditentukan sebagai bagian dari rencana Manajemen Perubahan.','#e6f1f9',NULL,1,2,'#000000','#000000','#000000','2HWSNTHRfp8wkeKgmfzoB81LnebKjkrIErW20G5T.png','Right','2023-10-15 04:52:42','2023-10-15 05:36:52',NULL),(9,5,'Coaching Culture','Nilai-nilai dan perilaku yang berkontribusi terhadap lingkungan sosial dan psikologis yang unik dari sebuah organisasi .\r\n\r\nBudaya organisasi mencakup harapan organisasi , pengalaman , filosofi , dan nilai-nilai yang terus bersama-sama , dan dinyatakan dalam citra diri nya , inner , interaksi dengan dunia luar , dan harapan masa depan . Hal ini didasarkan pada sikap bersama, kepercayaan , adat istiadat , dan tertulis dan aturan tidak tertulis yang telah dikembangkan dari waktu ke waktu dan dianggap sah . Juga disebut budaya perusahaan , itu ditunjukkan dalam\r\n\r\n1. Cara organisasi melakukan bisnis, memperlakukan karyawan, pelanggan, dan masyarakat luas,\r\n2. Sejauh mana kebebasan diperbolehkan dalam pengambilan keputusan, mengembangkan ide-ide baru, dan ekspresi pribadi,\r\n3. Bagaimana kekuasaan dan informasi mengalir melalui hierarki, dan\r\n4. Bagaimana komitmen karyawan yang menuju tujuan kolektif.','#ffffff',NULL,1,3,'#000000','#000000','#000000','rz6zF41Eq1JZaKfCrvQhDjngDEK1MTl6UIETIWT3.png',NULL,'2023-10-15 04:53:13','2023-10-15 05:28:56',NULL),(10,4,'Benefit dari Mindset Assessment','Mindset Assessment dengan Identity Compass® (IC), kita dapat mengetahui profil kecendrungan berpikir seseorang, yang berpengaruh besar pada performance dan produktifitas kerja. Identity Compass® (IC) mengukur aspek sikap kerja (attitudes) berdasarkan pola pikir (mindset) seseorang.','#ffffff',NULL,2,1,'#000000','#000000','#05436f',NULL,NULL,'2023-10-15 04:56:09','2023-10-15 05:04:02',NULL),(11,4,NULL,NULL,'#e6f1f9',NULL,1,2,'#000000','#000000','#000000','zu9719GQM25vWIt9jWJkUXVqGZBTGWwAFzq0X9sR.png',NULL,'2023-10-15 04:56:49','2023-10-15 04:59:18',NULL),(12,4,'Identity Compass ®','Identitas Compass® adalah alat seleksi personil inovatif yang menggunakan inventarisasi \" struktur berpikir \". Meregister bagaimana orang berpikir dan membuat keputusan dalam situasi kerja yang khas. Ini menunjukkan apa yang memotivasi karyawan, apa nilai-nilai mereka dan apa tujuan karir mereka . Identitas Compass® memberikan panduan yang jelas tentang mana karyawan cenderung untuk melakukan yang terbaik di mana situasi dan bagaimana perbaikan terbaik dapat dicapai .\r\n\r\nIdentitas Compass ® akan membantu Anda memahami bagaimana kandidat akan tampil di bawah tekanan , bekerja dalam sebuah tim , atau cara terbaik untuk memotivasi mereka untuk berhasil di tempat kerja . Hal ini sebenarnya mungkin untuk secara akurat memperkirakan berapa lama seorang karyawan kemungkinan akan tetap pada pekerjaan tertentu .','#ffffff',NULL,1,3,'#000000','#000000','#05436f','42eNaDSAd7D3jFUQi6osROQ1pKncA1XReaT0JTku.png',NULL,'2023-10-15 04:57:44','2023-10-15 04:59:09',NULL),(13,4,'Engagement','Berbagai menggabungkan aktif secara internasional, untuk beberapa waktu, sudah menggunakan prinsip-prinsip Identity Compass ® untuk profil kebutuhan mereka dan deskripsi pekerjaan. Hal ini menunjukkan bahwa kekosongan dapat diisi lebih cepat dan dengan karyawan lebih cocok dibandingkan dengan yang lain, cara yang lebih umum. Tuntutan di isi kekosongan tunduk pada perubahan terus-menerus di masa sekarang ini . Tuntutan dalam struktur bertahan lebih lama dan dapat diwakili oleh preferensi berpikir dan bertindak. Identitas Compass ® sekarang menawarkan kemungkinan untuk mendaftarkan preferensi ini berpikir dan bertindak bagi karyawan tunggal atau tim.','#e6f1f9',NULL,1,4,'#000000','#000000','#05436f','836aJXh1ksQHsTPb8OKIr3o9nhh28xOe3ZIH858p.png',NULL,'2023-10-15 04:58:57','2023-10-15 05:25:17',NULL),(14,4,'Penerapan Identity Compass','Secara keseluruhan, Identity Compass® cocok digunakan untuk :','#ffffff',NULL,1,5,'#000000','#000000','#05436f',NULL,NULL,'2023-10-15 05:00:51','2023-10-15 05:00:51',NULL);
/*!40000 ALTER TABLE `service_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description_banner` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_service_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,NULL,'Training kami berbasis Neuro-Semantics NLP, kami memberikan pelatihan untuk meningkatkan performance kerja, termasuk pula kesadaran baru atas pentingnya perubahan dan perngembangan diri para personal.',NULL,'files/coaching3-U3Uu.jpg',NULL,NULL,'2023-10-13 07:19:36','2023-10-14 16:55:30','2023-10-14 16:55:30'),(2,'Training Coaching','<p>Training kami berbasis Neuro-Semantics NLP, kami memberikan pelatihan untuk meningkatkan performance kerja, termasuk pula kesadaran baru atas pentingnya perubahan dan perngembangan diri para personal.</p><figure class=\"table\"><table><tbody><tr><td>► Certification Program<br>► Coaching Skill<br>► Leadership</td><td>► Communication Training<br>► Education Training&nbsp;<br>► Self Development</td></tr></tbody></table></figure>','Training kami berbasis Neuro-Semantics NLP, kami memberikan pelatihan untuk meningkatkan performance kerja, termasuk pula kesadaran baru atas pentingnya perubahan dan perngembangan diri para personal.','files/coaching7-FAKz.jpg','xRVF2FND2WSFs3w1YF8uTdrrh1Bf2kPsgyekoNbO.png','http://localhost:8000/training','2023-10-13 07:21:13','2023-10-15 15:55:44',NULL),(3,'Coaching Services','<p>Program kami telah dirancang untuk memastikan Anda membuat perbedaan positif untuk organisasi maupun perorangan, yang disampaikan oleh para profesional Coach sebagai fasilitator untuk mempercepat pencapaian tujuan, dengan cara eksplorasi bersama dan temukan nilai-nilai kompetensi personal maupun system.</p><p>► METAMIND Executive Coach System<br>► METAMIND Leadership Coach System (MLCS)<br>► METAMIND Business Coach System (MBCS)<br>&nbsp;</p>','Program kami telah dirancang untuk memastikan Anda membuat perbedaan positif untuk organisasi maupun perorangan, yang disampaikan oleh para profesional Coach sebagai fasilitator untuk mempercepat pencapaian tujuan, dengan cara eksplorasi bersama dan temukan nilai-nilai kompetensi personal maupun system','files/training-ENvh.jpg','P3hj1HhZR5NnylObR0K4InxiBXeFPn1Gx59DqtnW.png','http://localhost:8000/coaching','2023-10-13 07:21:30','2023-10-15 15:55:59',NULL),(4,'Mindset Assesment','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,','files/coaching4-zQBg.jpg','fSsPXYdcrznKWNmqzj4JFkpOFSjC6Di8fOs8Aq2S.png',NULL,'2023-10-13 07:21:50','2023-10-15 03:55:26',NULL),(5,'Consultancy','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,</p>','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,','files/consultancy-uc0h.jpg','eTYmjZXCTugHIBPxxRIgfu8JAo7esffPJCD2Mqtp.png',NULL,'2023-10-13 07:22:03','2023-10-15 03:55:37',NULL);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year_established` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_alumni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_training` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happy_client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_consultation` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'2003','512+','120+','201+','https://wa.me/%2B628117899088?text=Hi%20Metamind%2C%20saya%20mau%20konsultasi','2023-10-13 07:44:16','2023-10-14 09:20:15',NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonies`
--

DROP TABLE IF EXISTS `testimonies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonies`
--

LOCK TABLES `testimonies` WRITE;
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;
INSERT INTO `testimonies` VALUES (1,'Topan Adriansyah - Pengusaha','Di NS-NLP Practitioner ini saya mendapatkan kemapuan dasar coaching yang tentunya sangat bermanfat dalam kehidupan dan usah, khususnya kemampuan menggali dengan meta-question (meta-model)','files/profile-basian-l086.png','2023-10-13 07:44:16','2023-10-13 07:44:16',NULL),(2,'Fransiscus Arisetyo - Pastor','Bagi saya ilmu ini adalah management komunikasi personal atau interpersonal yang berdampak pada personal integrity pribadi','files/profile-basian-mtDn.png','2023-10-13 07:46:28','2023-10-13 07:46:28',NULL);
/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainers`
--

DROP TABLE IF EXISTS `trainers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trainers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `achievement` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainers`
--

LOCK TABLES `trainers` WRITE;
/*!40000 ALTER TABLE `trainers` DISABLE KEYS */;
INSERT INTO `trainers` VALUES (1,'Mariani Ng','CEO / Co-Founder','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','foH1gpRltSK47NXKId5HrtZdz7fjGeK2T6r2crvm.png','https://wa.me/6289617121','2023-10-13 03:51:50','2023-10-14 07:47:20','• Executive Leadership Coach\r\n• Trainer of Neuro-Semantics\r\n• Founder of PT. METAMIND Tata Cendekia\r\n• Cerfitied Meta-NLP Practitioner, Colorado – USA\r\n• Certified Master Practitioner of NS-NLP, Colorado – USA\r\n• Certified NLP Personal/Business Coach, San Francisco – USA\r\n• Certified ACMC Meta-Coach, Singapore\r\n• Certified Group and Team Coach, Sydney, Australia\r\n• Certified Self-Actualization, Gold Coast, Australia.\r\n• Certified Trainer of NS-NLP, Sydney – Australia\r\n• Certified Trainer of Accelerated Learning in Neuro-Semantics, Sydney, Australia\r\n• Certified Identity Compass® Consultant.\r\n• Certified Trainer of Identity Compass®, Germany.\r\n• Certified Master Practitioner in ‘Rediscover the Joy of Learning’, Oklahoma, USA',NULL),(2,'Wahyudi Akbar','Life Wakeup Coach','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','LztgZGrI2vXltUL0zFWAb4Pr8TTFK4SbeTmiLi8F.png',NULL,'2023-10-14 07:31:32','2023-10-14 07:47:10','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL),(3,'Basian Tjong','Business Coach','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','LLujiyfnijBJ9tsYVsENEV5NEYTYK7kTcLt3H61s.png',NULL,'2023-10-14 07:32:06','2023-10-14 07:47:02','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',NULL);
/*!40000 ALTER TABLE `trainers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_groups`
--

DROP TABLE IF EXISTS `training_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `training_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_groups`
--

LOCK TABLES `training_groups` WRITE;
/*!40000 ALTER TABLE `training_groups` DISABLE KEYS */;
INSERT INTO `training_groups` VALUES (7,'Certification Program','2023-10-12 06:43:41','2023-10-14 03:45:52','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','wFN6Lthu1iAjEV0pWJTdf0gTvM4P5aIbeo5CwN6g.png',NULL),(8,'Coaching Series','2023-10-12 06:43:51','2023-10-14 03:45:44','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','o8SHe9ABuy7gKfldBaUJKzo3Q8sIU3997Q10D2qN.png',NULL),(9,'Leadership Series','2023-10-12 06:43:58','2023-10-14 03:45:35','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','0jLMFsOu4wfqhMaEy9JnoRnl2UgxLPMBRMSrU8vI.png',NULL),(10,'Communication Series','2023-10-12 06:44:05','2023-10-14 03:45:28','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','NV7kXgjiaASafFewZ6IK8OQ4ZcjihmW12oPjv7iN.png',NULL),(11,'Education Training','2023-10-12 06:44:12','2023-10-14 03:44:52','Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.','5iy1xEGB0OCBvb1xgMcOFfs8fhuEyOxqduNQ9cSW.png',NULL);
/*!40000 ALTER TABLE `training_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trainings`
--

DROP TABLE IF EXISTS `trainings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trainings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `training_group_id` bigint unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trainings_training_group_id_foreign` (`training_group_id`),
  CONSTRAINT `trainings_training_group_id_foreign` FOREIGN KEY (`training_group_id`) REFERENCES `training_groups` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trainings`
--

LOCK TABLES `trainings` WRITE;
/*!40000 ALTER TABLE `trainings` DISABLE KEYS */;
INSERT INTO `trainings` VALUES (6,7,'META NLP Practitioner','Pelatihan Meta NLP Practitioner merupakan pelatihan bersertifikasi Internasional dari Neuro-Semantics, USA, sertifikasi ini diakui di mancanegara. Pelatihan ini dilaksanakan selama 8 hari di setiap Sabtu dan Minggu. Di fasilitasi langsung oleh Mariani Ng (Pendiri PT METAMIND Tata Cendekia, Executive Coach).','nYc1hWDUFHkOTz08V6yo1QwtwrwGZzn4JShuzj25.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(7,8,'META NLP Practitioner','Pelatihan Meta NLP Practitioner merupakan pelatihan bersertifikasi Internasional dari Neuro-Semantics, USA, sertifikasi ini diakui di mancanegara. Pelatihan ini dilaksanakan selama 8 hari di setiap Sabtu dan Minggu. Di fasilitasi langsung oleh Mariani Ng (Pendiri PT METAMIND Tata Cendekia, Executive Coach).','nYc1hWDUFHkOTz08V6yo1QwtwrwGZzn4JShuzj25.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(8,9,'META NLP Practitioner','Pelatihan Meta NLP Practitioner merupakan pelatihan bersertifikasi Internasional dari Neuro-Semantics, USA, sertifikasi ini diakui di mancanegara. Pelatihan ini dilaksanakan selama 8 hari di setiap Sabtu dan Minggu. Di fasilitasi langsung oleh Mariani Ng (Pendiri PT METAMIND Tata Cendekia, Executive Coach).','nYc1hWDUFHkOTz08V6yo1QwtwrwGZzn4JShuzj25.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(9,10,'META NLP Practitioner','Pelatihan Meta NLP Practitioner merupakan pelatihan bersertifikasi Internasional dari Neuro-Semantics, USA, sertifikasi ini diakui di mancanegara. Pelatihan ini dilaksanakan selama 8 hari di setiap Sabtu dan Minggu. Di fasilitasi langsung oleh Mariani Ng (Pendiri PT METAMIND Tata Cendekia, Executive Coach).','nYc1hWDUFHkOTz08V6yo1QwtwrwGZzn4JShuzj25.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(10,11,'META NLP Practitioner','Pelatihan Meta NLP Practitioner merupakan pelatihan bersertifikasi Internasional dari Neuro-Semantics, USA, sertifikasi ini diakui di mancanegara. Pelatihan ini dilaksanakan selama 8 hari di setiap Sabtu dan Minggu. Di fasilitasi langsung oleh Mariani Ng (Pendiri PT METAMIND Tata Cendekia, Executive Coach).','nYc1hWDUFHkOTz08V6yo1QwtwrwGZzn4JShuzj25.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(11,7,'META MASTER NLP Practitioner','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','lxwQVQOzIioKzPt9LaLqk5J3NAIxpMDUQ2tihOg8.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(12,8,'META MASTER NLP Practitioner','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','lxwQVQOzIioKzPt9LaLqk5J3NAIxpMDUQ2tihOg8.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(13,9,'META MASTER NLP Practitioner','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','lxwQVQOzIioKzPt9LaLqk5J3NAIxpMDUQ2tihOg8.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(14,10,'META MASTER NLP Practitioner','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','lxwQVQOzIioKzPt9LaLqk5J3NAIxpMDUQ2tihOg8.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(15,11,'META MASTER NLP Practitioner','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','lxwQVQOzIioKzPt9LaLqk5J3NAIxpMDUQ2tihOg8.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(16,7,'ACCESSING Personal Genius','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','oAixJR7vVS4sSeiHjtMkdI2wZShHGW15PdoPcfN6.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(17,8,'ACCESSING Personal Genius','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','oAixJR7vVS4sSeiHjtMkdI2wZShHGW15PdoPcfN6.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(18,9,'ACCESSING Personal Genius','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','oAixJR7vVS4sSeiHjtMkdI2wZShHGW15PdoPcfN6.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(19,10,'ACCESSING Personal Genius','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','oAixJR7vVS4sSeiHjtMkdI2wZShHGW15PdoPcfN6.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(20,11,'ACCESSING Personal Genius','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','oAixJR7vVS4sSeiHjtMkdI2wZShHGW15PdoPcfN6.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(21,7,'IDENTITY COMPASS Consultant','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(22,8,'IDENTITY COMPASS Consultant','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(23,9,'IDENTITY COMPASS Consultant','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(24,10,'IDENTITY COMPASS Consultant','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(25,11,'IDENTITY COMPASS Consultant','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(26,7,'COACHING Mastery','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(27,8,'COACHING Mastery','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(28,9,'COACHING Mastery','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(29,10,'COACHING Mastery','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL),(30,11,'COACHING Mastery','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','VSTuJFtCwv88LtMSCDSSnNpHI4tHlOMJ041hQG5X.png','2023-10-14 15:29:31','2023-10-14 15:29:31',NULL);
/*!40000 ALTER TABLE `trainings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com',NULL,'$2y$10$1Ne/GpV5BE5zhCTNuX0lSu4HpWNjW0XlldrdASP.aow.GeozTYBba',NULL,'2023-10-12 06:36:22','2023-10-12 06:36:22',NULL);
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

-- Dump completed on 2023-10-16 10:08:17
