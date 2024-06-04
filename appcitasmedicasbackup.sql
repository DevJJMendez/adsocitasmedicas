-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: app_citas_medicas
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

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
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `appointments` (
  `appointment_id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint unsigned NOT NULL,
  `id_specialty` tinyint unsigned NOT NULL,
  `id_doctor` smallint unsigned NOT NULL,
  `appointment_date` datetime NOT NULL,
  `medical_evaluation` text COLLATE utf8mb4_unicode_ci,
  `id_status` tinyint unsigned NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`appointment_id`),
  KEY `appointments_id_patient_foreign` (`id_patient`),
  KEY `appointments_id_specialty_foreign` (`id_specialty`),
  KEY `appointments_id_doctor_foreign` (`id_doctor`),
  KEY `appointments_id_status_foreign` (`id_status`),
  CONSTRAINT `appointments_id_doctor_foreign` FOREIGN KEY (`id_doctor`) REFERENCES `users` (`id`),
  CONSTRAINT `appointments_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `users` (`id`),
  CONSTRAINT `appointments_id_specialty_foreign` FOREIGN KEY (`id_specialty`) REFERENCES `specialties` (`specialty_id`),
  CONSTRAINT `appointments_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES (1,8,2,2,'2024-06-04 07:45:00','Necesita reposo, tomar los siguientes medicamentos:\r\n\r\nDolex Gripa,\r\nAcetaminofem.',4,'2024-06-04 17:45:46','2024-06-04 17:59:51'),(2,8,2,2,'2024-06-04 07:46:00','Tiene sida por puto',4,'2024-06-04 17:46:03','2024-06-04 18:01:42'),(3,8,2,2,'2024-06-04 07:46:00','Tiene fiebre',4,'2024-06-04 17:46:17','2024-06-04 18:02:27'),(4,8,2,2,'2024-06-05 07:46:00','Tiene tos',4,'2024-06-04 17:46:31','2024-06-04 18:02:42'),(6,7,2,2,'2024-06-08 07:47:00','Tiene leucemia',4,'2024-06-04 17:47:23','2024-06-04 18:03:35'),(7,7,2,2,'2024-06-12 07:47:00','Putooooo',4,'2024-06-04 17:47:45','2024-06-04 18:06:16'),(8,7,2,2,'2024-06-26 07:47:00','Te vas a morir panita',4,'2024-06-04 17:47:55','2024-06-04 18:04:50'),(9,7,2,3,'2024-07-17 07:48:00','aaaaaaaaaaaaaa',4,'2024-06-04 17:48:14','2024-06-04 18:06:57');
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `common_attributes`
--

DROP TABLE IF EXISTS `common_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `common_attributes` (
  `common_attribute_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomenclature` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`common_attribute_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_attributes`
--

LOCK TABLES `common_attributes` WRITE;
/*!40000 ALTER TABLE `common_attributes` DISABLE KEYS */;
INSERT INTO `common_attributes` VALUES (1,'activo','act','2024-06-04 17:44:24','2024-06-04 17:44:24'),(2,'inactivo','inac','2024-06-04 17:44:24','2024-06-04 17:44:24'),(3,'en espera','eesp','2024-06-04 17:44:24','2024-06-04 17:44:24'),(4,'atendida','atda','2024-06-04 17:44:24','2024-06-04 17:44:24'),(5,'cancelada','canc','2024-06-04 17:44:25','2024-06-04 17:44:25'),(6,'masculino','m','2024-06-04 17:44:25','2024-06-04 17:44:25'),(7,'femenino','m','2024-06-04 17:44:25','2024-06-04 17:44:25'),(8,'eps',NULL,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(9,'ips',NULL,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(10,'cedula de ciudadania','cc','2024-06-04 17:44:25','2024-06-04 17:44:25'),(11,'tarjeta de identidad','cc','2024-06-04 17:44:25','2024-06-04 17:44:25'),(12,'registro civil','rc','2024-06-04 17:44:25','2024-06-04 17:44:25'),(13,'cedula de extranjeria','cce','2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `common_attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_types`
--

DROP TABLE IF EXISTS `document_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `document_types` (
  `document_type_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `id_common_attribute` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`document_type_id`),
  KEY `document_types_id_common_attribute_foreign` (`id_common_attribute`),
  CONSTRAINT `document_types_id_common_attribute_foreign` FOREIGN KEY (`id_common_attribute`) REFERENCES `common_attributes` (`common_attribute_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_types`
--

LOCK TABLES `document_types` WRITE;
/*!40000 ALTER TABLE `document_types` DISABLE KEYS */;
INSERT INTO `document_types` VALUES (1,10,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,11,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(3,12,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(4,13,'2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `document_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity_types`
--

DROP TABLE IF EXISTS `entity_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `entity_types` (
  `entity_type_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `id_common_attribute` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`entity_type_id`),
  KEY `entity_types_id_common_attribute_foreign` (`id_common_attribute`),
  CONSTRAINT `entity_types_id_common_attribute_foreign` FOREIGN KEY (`id_common_attribute`) REFERENCES `common_attributes` (`common_attribute_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity_types`
--

LOCK TABLES `entity_types` WRITE;
/*!40000 ALTER TABLE `entity_types` DISABLE KEYS */;
INSERT INTO `entity_types` VALUES (1,8,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,9,'2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `entity_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `genders`
--

DROP TABLE IF EXISTS `genders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genders` (
  `gender_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `id_common_attribute` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`gender_id`),
  KEY `genders_id_common_attribute_foreign` (`id_common_attribute`),
  CONSTRAINT `genders_id_common_attribute_foreign` FOREIGN KEY (`id_common_attribute`) REFERENCES `common_attributes` (`common_attribute_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genders`
--

LOCK TABLES `genders` WRITE;
/*!40000 ALTER TABLE `genders` DISABLE KEYS */;
INSERT INTO `genders` VALUES (1,6,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,7,'2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `genders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_entities`
--

DROP TABLE IF EXISTS `medical_entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_entities` (
  `medical_entity_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `business_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_entity_type` tinyint unsigned DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` tinyint unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`medical_entity_id`),
  KEY `medical_entities_id_entity_type_foreign` (`id_entity_type`),
  KEY `medical_entities_id_status_foreign` (`id_status`),
  CONSTRAINT `medical_entities_id_entity_type_foreign` FOREIGN KEY (`id_entity_type`) REFERENCES `entity_types` (`entity_type_id`) ON DELETE SET NULL,
  CONSTRAINT `medical_entities_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`status_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_entities`
--

LOCK TABLES `medical_entities` WRITE;
/*!40000 ALTER TABLE `medical_entities` DISABLE KEYS */;
INSERT INTO `medical_entities` VALUES (1,'HOSPITAL SAN MARCO','662895155','1-215-415-4925','daniel.ivy@yahoo.com',2,'809 Oda View Apt. 220',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,'ANASWAYUU','406239299','+1-272-872-0769','dorris81@gmail.com',1,'83691 Juston Views',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(3,'ASOCIACIÓN INDÍGENA DEL CAUCA','116529283','631-218-0649','juliet.hirthe@trantow.biz',1,'4124 Tito Valley Suite 332',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(4,'ASOCIACION MUTUAL','175669580','(518) 977-7130','wgibson@hotmail.com',2,'946 Alva Squares',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(5,'COMPENSAR','432309757','380-588-2758','lfeil@hotmail.com',1,'175 Weimann Mews',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(6,'SANITAS','919564371','+1 (848) 925-6576','gusikowski.stacy@rice.com',2,'19440 Sabina Gardens',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(7,'SERVICIO OCCIDENTAL DE SALUD','634270055','(970) 541-8561','estiedemann@christiansen.biz',1,'957 Adams Street',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(8,'HOSPITAL SURAMERICANA','181875819','(406) 622-2407','ppowlowski@gmail.com',1,'280 Shields Via',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(9,'FUNDACIÓN SALUD MIA','912665164','1-541-383-2843','rkuvalis@hartmann.com',1,'839 Gorczany Branch',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(10,'HOSPITAL NUEVO HORIZONTE','395014999','+1 (956) 657-2835','qstreich@yahoo.com',1,'4207 Luella Hill Suite 100',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(11,'SALUD TOTAL','779368153','551.704.4340','katrina.cronin@hotmail.com',2,'2218 Jonathon Row Suite 344',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(12,'Fundacion Santa Fe','311045837','+1.606.442.2804','kuhic.helen@oconner.com',2,'8285 Jordi Stream',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(13,'Hospital Pablo Tobon','823134780','+1-251-372-3324','ima.gusikowski@hoeger.com',1,'5660 Luz Center Suite 196',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(14,'Clinica Los Andes','189207297','(564) 977-6536','mccullough.idell@hotmail.com',1,'926 Schoen Center',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(15,'Clinica Colsanitas','705408273','+1.947.827.2806','irobel@bashirian.com',2,'343 Dulce Track Apt. 121',1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(16,'Hospital San Jose','599349373','1-657-739-3566','koepp.milton@crist.biz',2,'5208 Prosacco Hollow Apt. 364',1,'2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `medical_entities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (31,'2013_05_22_130254_create_common_attributes_table',1),(32,'2014_05_21_002416_create_statuses_table',1),(33,'2014_05_22_125937_create_genders_table',1),(34,'2014_05_22_130002_create_document_types_table',1),(35,'2014_10_12_100000_create_password_reset_tokens_table',1),(36,'2014_10_12_100000_create_password_resets_table',1),(37,'2019_08_19_000000_create_failed_jobs_table',1),(38,'2019_12_14_000001_create_personal_access_tokens_table',1),(39,'2024_02_08_125841_create_specialties_table',1),(40,'2024_02_21_132904_create_entity_types_table',1),(41,'2024_02_21_132905_create_medical_entities_table',1),(42,'2024_02_21_132906_create_third_data_table',1),(43,'2024_02_22_132907_create_users_table',1),(44,'2024_02_22_132908_create_appointments_table',1),(45,'2024_02_26_185101_create_permission_tables',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3),(2,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',6),(3,'App\\Models\\User',7),(3,'App\\Models\\User',8),(3,'App\\Models\\User',9),(3,'App\\Models\\User',10),(3,'App\\Models\\User',11);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Administrador','web','2024-06-04 17:44:22','2024-06-04 17:44:22'),(2,'Doctor','web','2024-06-04 17:44:23','2024-06-04 17:44:23'),(3,'Paciente','web','2024-06-04 17:44:24','2024-06-04 17:44:24');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,2),(3,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrador','web','2024-06-04 17:44:21','2024-06-04 17:44:21'),(2,'Doctor','web','2024-06-04 17:44:21','2024-06-04 17:44:21'),(3,'Paciente','web','2024-06-04 17:44:21','2024-06-04 17:44:21');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `specialties` (
  `specialty_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`specialty_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialties`
--

LOCK TABLES `specialties` WRITE;
/*!40000 ALTER TABLE `specialties` DISABLE KEYS */;
INSERT INTO `specialties` VALUES (1,'Alergología','2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,'Anestesiología','2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `specialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `statuses` (
  `status_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `id_common_attribute` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`status_id`),
  KEY `statuses_id_common_attribute_foreign` (`id_common_attribute`),
  CONSTRAINT `statuses_id_common_attribute_foreign` FOREIGN KEY (`id_common_attribute`) REFERENCES `common_attributes` (`common_attribute_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statuses`
--

LOCK TABLES `statuses` WRITE;
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
INSERT INTO `statuses` VALUES (1,1,'2024-06-04 17:44:24','2024-06-04 17:44:24'),(2,2,'2024-06-04 17:44:24','2024-06-04 17:44:24'),(3,3,'2024-06-04 17:44:24','2024-06-04 17:44:24'),(4,4,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(5,5,'2024-06-04 17:44:25','2024-06-04 17:44:25');
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `third_data`
--

DROP TABLE IF EXISTS `third_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `third_data` (
  `third_data_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `id_document_type` tinyint unsigned DEFAULT NULL,
  `identification_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` datetime NOT NULL,
  `id_gender` tinyint unsigned DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_medical_entity` tinyint unsigned DEFAULT NULL,
  `id_status` tinyint unsigned DEFAULT '1',
  `id_specialty` tinyint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`third_data_id`),
  UNIQUE KEY `third_data_identification_number_unique` (`identification_number`),
  UNIQUE KEY `third_data_number_phone_unique` (`number_phone`),
  KEY `third_data_id_document_type_foreign` (`id_document_type`),
  KEY `third_data_id_gender_foreign` (`id_gender`),
  KEY `third_data_id_medical_entity_foreign` (`id_medical_entity`),
  KEY `third_data_id_status_foreign` (`id_status`),
  KEY `third_data_id_specialty_foreign` (`id_specialty`),
  CONSTRAINT `third_data_id_document_type_foreign` FOREIGN KEY (`id_document_type`) REFERENCES `document_types` (`document_type_id`) ON DELETE SET NULL,
  CONSTRAINT `third_data_id_gender_foreign` FOREIGN KEY (`id_gender`) REFERENCES `genders` (`gender_id`) ON DELETE SET NULL,
  CONSTRAINT `third_data_id_medical_entity_foreign` FOREIGN KEY (`id_medical_entity`) REFERENCES `medical_entities` (`medical_entity_id`) ON DELETE SET NULL,
  CONSTRAINT `third_data_id_specialty_foreign` FOREIGN KEY (`id_specialty`) REFERENCES `specialties` (`specialty_id`) ON DELETE SET NULL,
  CONSTRAINT `third_data_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statuses` (`status_id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `third_data`
--

LOCK TABLES `third_data` WRITE;
/*!40000 ALTER TABLE `third_data` DISABLE KEYS */;
INSERT INTO `third_data` VALUES (1,1,'593960266','Zoila','Auer','+1-330-280-7961','2003-03-11 00:00:00',1,'14339 Ricky Burgs\nNorth Domingomouth, VT 69068',NULL,1,NULL,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,1,'798733956','Medico','Boyer','223-957-3572','2009-11-28 00:00:00',2,'8425 Wolf Island Suite 094\nBeahanport, WV 86098',NULL,1,2,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(3,1,'668262365','Medico2','Leannon','713.371.9208','1977-05-18 00:00:00',1,'6807 Ebert Estates Suite 865\nDorothyport, OR 24447-5111',NULL,1,2,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(4,1,'183452207','Zoe','Hintz','419.205.8699','2021-10-19 00:00:00',1,'15517 Odie Mountain\nLake Elfriedashire, NC 53807-8615',NULL,1,1,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(5,1,'864954737','Afton','Turner','(580) 823-6953','1982-04-21 00:00:00',2,'615 Mosciski Parkways\nCarrollview, MD 33488',NULL,1,2,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(6,1,'423489878','Ariel','Willms','(813) 779-3776','2013-12-12 00:00:00',2,'8351 Wunsch Parkway Apt. 795\nHowestad, ND 03583',NULL,1,2,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(7,3,'994819606','Paciente','Adams','1-610-935-8817','2011-07-10 00:00:00',1,'51638 Gottlieb Wall',9,1,NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(8,2,'382361216','Paciente2','Kunze','(662) 358-3198','2007-11-06 00:00:00',2,'647 Kuhlman River',8,1,NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(9,1,'740515301','Ashleigh','Gulgowski','(775) 264-1188','2007-03-27 00:00:00',2,'2304 Damon Ports',3,1,NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(10,3,'418532065','Arno','Effertz','1-973-252-4002','1996-09-05 00:00:00',2,'72635 Cletus Meadow',11,1,NULL,'2024-06-04 17:44:27','2024-06-04 17:44:27'),(11,4,'160854350','Rhiannon','Johnston','240-415-2646','1989-10-30 00:00:00',2,'98239 Hahn Ridge',4,1,NULL,'2024-06-04 17:44:27','2024-06-04 17:44:27');
/*!40000 ALTER TABLE `third_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `id_third_data` smallint unsigned DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id_third_data_foreign` (`id_third_data`),
  CONSTRAINT `users_id_third_data_foreign` FOREIGN KEY (`id_third_data`) REFERENCES `third_data` (`third_data_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin@gmail.com',NULL,'$2y$12$qX3G1TB792ZKbUtRwJirAOidT.UQjHUvQrH9PpxoRTFuNEXQysSYm',NULL,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(2,2,'medico@gmail.com',NULL,'$2y$12$i6hE.JF8NpnJUIq2B9nbqe1tXZVq5fKO/AIp2SSmjdOJwqUV7yc7q',NULL,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(3,3,'medico2@gmail.com',NULL,'$2y$12$CPLHdkBsdsfkygusQuSohumkkDlVgK3P9k9/86uvhCkh.s/Afm1LW',NULL,'2024-06-04 17:44:25','2024-06-04 17:44:25'),(4,4,'kuhn.daniella@gmail.com',NULL,'$2y$12$dc11pPg6jRAeIGxTCWq7cuJxmgWPV3IVUFFv96i.9u/F6Rmn88Iiu',NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(5,5,'braeden62@yahoo.com',NULL,'$2y$12$066hEIbNzThSnxtDxMoW8.QCIv2q2AfIpYMarGN1HovR2Ofc4AnSe',NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(6,6,'asha08@yahoo.com',NULL,'$2y$12$rA41xBPWwrySLQV2Zce7DukXPqBIO3e8HCLBAuiUdTanSq3i0tgkC',NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(7,7,'paciente@gmail.com',NULL,'$2y$12$eczmDg2GyhEXWreaTONjeu1mKEgdlcu6mQBBjPHMAYq6p8AFwoZc.',NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(8,8,'paciente2@gmail.com',NULL,'$2y$12$6qutJWNG5jrcINzU8kN7cOHGFFIEQ8NyIfTX4YuGCwAiKnHHx74KO',NULL,'2024-06-04 17:44:26','2024-06-04 17:44:26'),(9,9,'rglover@hotmail.com',NULL,'$2y$12$KswF742FROcnOSaxlhuJ4.xf1TENL//6vQaF7aj9fglA2kCfUtf8m',NULL,'2024-06-04 17:44:27','2024-06-04 17:44:27'),(10,10,'kling.davion@hotmail.com',NULL,'$2y$12$rXOKf7kdYjYTTqgHI4HXqOJ.z89/KuQJwGOt8tZTnkxbC5eY7cr2i',NULL,'2024-06-04 17:44:27','2024-06-04 17:44:27'),(11,11,'samara.sipes@gmail.com',NULL,'$2y$12$W2AZHypn0zShJjKp0yzn9.ue2Mu.m9ply9j4VYypoKtxh2asO2o1q',NULL,'2024-06-04 17:44:27','2024-06-04 17:44:27');
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

-- Dump completed on 2024-06-04  8:31:01
