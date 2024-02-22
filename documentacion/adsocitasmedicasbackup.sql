CREATE DATABASE  IF NOT EXISTS `adsocitasmedicas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `adsocitasmedicas`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: adsocitasmedicas
-- ------------------------------------------------------
-- Server version	8.0.30

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
  `appointment_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` smallint unsigned NOT NULL,
  `id_specialty` tinyint unsigned NOT NULL,
  `id_doctor` smallint unsigned NOT NULL,
  `appointment_date` datetime NOT NULL,
  `medical_evaluation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `statu_id` tinyint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`appointment_id`),
  KEY `appointments_id_patient_foreign` (`id_patient`),
  KEY `appointments_id_specialty_foreign` (`id_specialty`),
  KEY `appointments_id_doctor_foreign` (`id_doctor`),
  KEY `appointments_statu_id_foreign` (`statu_id`),
  CONSTRAINT `appointments_id_doctor_foreign` FOREIGN KEY (`id_doctor`) REFERENCES `users` (`id`),
  CONSTRAINT `appointments_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `users` (`id`),
  CONSTRAINT `appointments_id_specialty_foreign` FOREIGN KEY (`id_specialty`) REFERENCES `specialties` (`specialty_id`),
  CONSTRAINT `appointments_statu_id_foreign` FOREIGN KEY (`statu_id`) REFERENCES `details` (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `details` (
  `detail_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `id_header` tinyint unsigned NOT NULL,
  `value` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomenclature` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `details_id_header_foreign` (`id_header`),
  CONSTRAINT `details_id_header_foreign` FOREIGN KEY (`id_header`) REFERENCES `headers` (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (1,1,'Activo','ACT','2024-02-22 05:42:57','2024-02-22 05:42:57'),(2,1,'Inactivo','INAC','2024-02-22 05:42:57','2024-02-22 05:42:57'),(3,1,'En Espera','EESP','2024-02-22 05:42:57','2024-02-22 05:42:57'),(4,1,'Atendida','ATDA','2024-02-22 05:42:57','2024-02-22 05:42:57'),(5,1,'Cancelada','CANC','2024-02-22 05:42:57','2024-02-22 05:42:57'),(6,2,'Masculino','M','2024-02-22 05:42:57','2024-02-22 05:42:57'),(7,2,'Femenino','F','2024-02-22 05:42:57','2024-02-22 05:42:57'),(8,3,'Cedula de Ciudadania','CC','2024-02-22 05:42:57','2024-02-22 05:42:57'),(9,3,'Tarjeta de Identidad','TI','2024-02-22 05:42:57','2024-02-22 05:42:57'),(10,3,'Registro Civil','RC','2024-02-22 05:42:57','2024-02-22 05:42:57'),(11,3,'Cédula de Extranjería','CE','2024-02-22 05:42:57','2024-02-22 05:42:57'),(12,4,'EPS',NULL,'2024-02-22 05:42:57','2024-02-22 05:42:57'),(13,4,'IPS',NULL,'2024-02-22 05:42:57','2024-02-22 05:42:57');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `document_type_views`
--

DROP TABLE IF EXISTS `document_type_views`;
/*!50001 DROP VIEW IF EXISTS `document_type_views`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `document_type_views` AS SELECT 
 1 AS `document_id`,
 1 AS `detail_id`,
 1 AS `name`,
 1 AS `nomenclature`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `entity_type_views`
--

DROP TABLE IF EXISTS `entity_type_views`;
/*!50001 DROP VIEW IF EXISTS `entity_type_views`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `entity_type_views` AS SELECT 
 1 AS `entity_id`,
 1 AS `detail_id`,
 1 AS `name`,
 1 AS `nomenclature`*/;
SET character_set_client = @saved_cs_client;

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
-- Temporary view structure for view `gender_views`
--

DROP TABLE IF EXISTS `gender_views`;
/*!50001 DROP VIEW IF EXISTS `gender_views`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `gender_views` AS SELECT 
 1 AS `gender_id`,
 1 AS `detail_id`,
 1 AS `name`,
 1 AS `nomenclature`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `headers`
--

DROP TABLE IF EXISTS `headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `headers` (
  `header_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`header_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headers`
--

LOCK TABLES `headers` WRITE;
/*!40000 ALTER TABLE `headers` DISABLE KEYS */;
INSERT INTO `headers` VALUES (1,'Estado','2024-02-22 05:42:57','2024-02-22 05:42:57'),(2,'Genero','2024-02-22 05:42:57','2024-02-22 05:42:57'),(3,'Tipo de documento','2024-02-22 05:42:57','2024-02-22 05:42:57'),(4,'Tipo de contacto','2024-02-22 05:42:57','2024-02-22 05:42:57'),(5,'Tipo de entidad','2024-02-22 05:42:57','2024-02-22 05:42:57'),(6,'Tipo de correo','2024-02-22 05:42:57','2024-02-22 05:42:57'),(7,'Prioridad','2024-02-22 05:42:57','2024-02-22 05:42:57');
/*!40000 ALTER TABLE `headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_entities`
--

DROP TABLE IF EXISTS `medical_entities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medical_entities` (
  `medical_entity_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `third_data_id` smallint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`medical_entity_id`),
  KEY `medical_entities_third_data_id_foreign` (`third_data_id`),
  CONSTRAINT `medical_entities_third_data_id_foreign` FOREIGN KEY (`third_data_id`) REFERENCES `third_data` (`data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_entities`
--

LOCK TABLES `medical_entities` WRITE;
/*!40000 ALTER TABLE `medical_entities` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_reset_tokens_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_02_08_125841_create_specialties_table',1),(6,'2024_02_20_201751_create_headers_table',1),(7,'2024_02_20_201802_create_details_table',1),(8,'2024_02_20_202219_create_statu_views_table',1),(9,'2024_02_20_202315_create_gender_views_table',1),(10,'2024_02_20_202333_create_document_type_views_table',1),(11,'2024_02_20_203932_create_entity_type_views_table',1),(12,'2024_02_20_210228_create_professions_table',1),(13,'2024_02_21_132906_create_third_data_table',1),(14,'2024_02_21_132908_create_medical_entities_table',1),(15,'2024_02_22_132907_create_users_table',1),(16,'2024_02_22_132908_create_appointments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
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
-- Table structure for table `professions`
--

DROP TABLE IF EXISTS `professions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `professions` (
  `profession_id` tinyint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`profession_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `professions`
--

LOCK TABLES `professions` WRITE;
/*!40000 ALTER TABLE `professions` DISABLE KEYS */;
/*!40000 ALTER TABLE `professions` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialties`
--

LOCK TABLES `specialties` WRITE;
/*!40000 ALTER TABLE `specialties` DISABLE KEYS */;
/*!40000 ALTER TABLE `specialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `statu_views`
--

DROP TABLE IF EXISTS `statu_views`;
/*!50001 DROP VIEW IF EXISTS `statu_views`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `statu_views` AS SELECT 
 1 AS `statu_id`,
 1 AS `detail_id`,
 1 AS `name`,
 1 AS `nomenclature`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `third_data`
--

DROP TABLE IF EXISTS `third_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `third_data` (
  `data_id` smallint unsigned NOT NULL AUTO_INCREMENT,
  `document_type_id` tinyint unsigned DEFAULT NULL,
  `identification_number` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nit` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sur_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_sur_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `gender_type_id` tinyint unsigned DEFAULT NULL,
  `entity_type_id` tinyint unsigned DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statu_type_id` tinyint unsigned NOT NULL,
  `id_profession` tinyint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`data_id`),
  KEY `third_data_document_type_id_foreign` (`document_type_id`),
  KEY `third_data_gender_type_id_foreign` (`gender_type_id`),
  KEY `third_data_entity_type_id_foreign` (`entity_type_id`),
  KEY `third_data_statu_type_id_foreign` (`statu_type_id`),
  KEY `third_data_id_profession_foreign` (`id_profession`),
  CONSTRAINT `third_data_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `details` (`detail_id`),
  CONSTRAINT `third_data_entity_type_id_foreign` FOREIGN KEY (`entity_type_id`) REFERENCES `details` (`detail_id`),
  CONSTRAINT `third_data_gender_type_id_foreign` FOREIGN KEY (`gender_type_id`) REFERENCES `details` (`detail_id`),
  CONSTRAINT `third_data_id_profession_foreign` FOREIGN KEY (`id_profession`) REFERENCES `professions` (`profession_id`),
  CONSTRAINT `third_data_statu_type_id_foreign` FOREIGN KEY (`statu_type_id`) REFERENCES `details` (`detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `third_data`
--

LOCK TABLES `third_data` WRITE;
/*!40000 ALTER TABLE `third_data` DISABLE KEYS */;
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
  `third_data_id` smallint unsigned DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_entity` tinyint unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_third_data_id_foreign` (`third_data_id`),
  KEY `users_id_entity_foreign` (`id_entity`),
  CONSTRAINT `users_id_entity_foreign` FOREIGN KEY (`id_entity`) REFERENCES `medical_entities` (`medical_entity_id`),
  CONSTRAINT `users_third_data_id_foreign` FOREIGN KEY (`third_data_id`) REFERENCES `third_data` (`data_id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,'jei@gmail.com','2024-02-22 05:35:01','$2y$12$09KMGmgKnrf8VM5Wq9BYz.MuDPwiPp5t5nlG1x95bjHIkDTgTytPy','admin',NULL,NULL,'2024-02-22 05:35:01','2024-02-22 05:35:01'),(2,NULL,'whuels@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'kmyeQC2oDv','2024-02-22 05:35:02','2024-02-22 05:35:02'),(3,NULL,'tmitchell@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'gM0mC2hXbL','2024-02-22 05:35:02','2024-02-22 05:35:02'),(4,NULL,'modesta76@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'ycETRx3yLJ','2024-02-22 05:35:02','2024-02-22 05:35:02'),(5,NULL,'arthur80@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'a9ebEtISwC','2024-02-22 05:35:02','2024-02-22 05:35:02'),(6,NULL,'ddickinson@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'6kDySzR8st','2024-02-22 05:35:02','2024-02-22 05:35:02'),(7,NULL,'johnston.bonnie@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'7MipldGIlY','2024-02-22 05:35:02','2024-02-22 05:35:02'),(8,NULL,'hdoyle@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'p99DUQlplk','2024-02-22 05:35:02','2024-02-22 05:35:02'),(9,NULL,'davonte.hettinger@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'EKLWHx7Oyr','2024-02-22 05:35:02','2024-02-22 05:35:02'),(10,NULL,'norbert13@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'kwUAM6pBpU','2024-02-22 05:35:02','2024-02-22 05:35:02'),(11,NULL,'halvorson.maggie@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'cbUkU78JEv','2024-02-22 05:35:02','2024-02-22 05:35:02'),(12,NULL,'jgulgowski@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'ogryqNxEzX','2024-02-22 05:35:02','2024-02-22 05:35:02'),(13,NULL,'brendon09@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'oGsqHAZZYm','2024-02-22 05:35:02','2024-02-22 05:35:02'),(14,NULL,'ufeil@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'koyyPf89CE','2024-02-22 05:35:02','2024-02-22 05:35:02'),(15,NULL,'kozey.betsy@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'1vWRvqHytM','2024-02-22 05:35:02','2024-02-22 05:35:02'),(16,NULL,'larkin.hilma@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'2y5KEXX6Hs','2024-02-22 05:35:02','2024-02-22 05:35:02'),(17,NULL,'clementine27@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'3AFQ1qdztI','2024-02-22 05:35:02','2024-02-22 05:35:02'),(18,NULL,'trosenbaum@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'6S9vSVKOp7','2024-02-22 05:35:02','2024-02-22 05:35:02'),(19,NULL,'green.cathryn@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'MIAHk2gGVg','2024-02-22 05:35:02','2024-02-22 05:35:02'),(20,NULL,'becker.neal@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'fK8Vl6AMTD','2024-02-22 05:35:02','2024-02-22 05:35:02'),(21,NULL,'gheidenreich@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'733zJCBO0v','2024-02-22 05:35:02','2024-02-22 05:35:02'),(22,NULL,'archibald56@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'XyctKFdTZP','2024-02-22 05:35:02','2024-02-22 05:35:02'),(23,NULL,'jolie60@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'2BUytKZ8lP','2024-02-22 05:35:02','2024-02-22 05:35:02'),(24,NULL,'schoen.brenda@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'HmFuttVI64','2024-02-22 05:35:02','2024-02-22 05:35:02'),(25,NULL,'tromp.jake@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'IrBrhNrRPi','2024-02-22 05:35:02','2024-02-22 05:35:02'),(26,NULL,'rbayer@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'V2XrIkKQAc','2024-02-22 05:35:02','2024-02-22 05:35:02'),(27,NULL,'franecki.magnus@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'070lCihx0d','2024-02-22 05:35:02','2024-02-22 05:35:02'),(28,NULL,'alvina.grimes@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'gmZHCDO6Bx','2024-02-22 05:35:02','2024-02-22 05:35:02'),(29,NULL,'herminia86@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'CmK6WJsWJl','2024-02-22 05:35:02','2024-02-22 05:35:02'),(30,NULL,'ohamill@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'YzimEaGu2P','2024-02-22 05:35:02','2024-02-22 05:35:02'),(31,NULL,'sbosco@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'Rze9dU8fzO','2024-02-22 05:35:02','2024-02-22 05:35:02'),(32,NULL,'zieme.colin@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'uOAFRnyXTk','2024-02-22 05:35:02','2024-02-22 05:35:02'),(33,NULL,'demarco.bashirian@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'j8kv48iQ7p','2024-02-22 05:35:02','2024-02-22 05:35:02'),(34,NULL,'laurel45@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'Uw9BfuU2Dq','2024-02-22 05:35:02','2024-02-22 05:35:02'),(35,NULL,'spinka.jany@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'hKx5DGQ9mM','2024-02-22 05:35:02','2024-02-22 05:35:02'),(36,NULL,'demard@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'IvFT2atdeQ','2024-02-22 05:35:02','2024-02-22 05:35:02'),(37,NULL,'lueilwitz.alec@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'ZZUw4nPeBV','2024-02-22 05:35:02','2024-02-22 05:35:02'),(38,NULL,'ubashirian@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'i52Zdyp52s','2024-02-22 05:35:02','2024-02-22 05:35:02'),(39,NULL,'jamal59@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'19k6iXxNVW','2024-02-22 05:35:02','2024-02-22 05:35:02'),(40,NULL,'lind.otha@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'FJ0MoZIZFS','2024-02-22 05:35:02','2024-02-22 05:35:02'),(41,NULL,'uhand@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'mnjxFBFv3H','2024-02-22 05:35:02','2024-02-22 05:35:02'),(42,NULL,'nlueilwitz@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'688n0g3GrY','2024-02-22 05:35:02','2024-02-22 05:35:02'),(43,NULL,'luis20@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'Yop4oRcNzx','2024-02-22 05:35:02','2024-02-22 05:35:02'),(44,NULL,'chanelle01@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'he23H0HyrP','2024-02-22 05:35:02','2024-02-22 05:35:02'),(45,NULL,'sjones@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'4GuPvYbFOI','2024-02-22 05:35:02','2024-02-22 05:35:02'),(46,NULL,'tiara61@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'XEqzgy60jY','2024-02-22 05:35:02','2024-02-22 05:35:02'),(47,NULL,'benton.armstrong@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'efkffmOKLp','2024-02-22 05:35:02','2024-02-22 05:35:02'),(48,NULL,'dare.candido@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'O6OPzuQBTq','2024-02-22 05:35:02','2024-02-22 05:35:02'),(49,NULL,'ashly.swaniawski@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'KfsadALyRX','2024-02-22 05:35:02','2024-02-22 05:35:02'),(50,NULL,'xwehner@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'MwOMU9lNvF','2024-02-22 05:35:02','2024-02-22 05:35:02'),(51,NULL,'hickle.sean@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'GrujgEMLOp','2024-02-22 05:35:02','2024-02-22 05:35:02'),(52,NULL,'jharvey@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'QwFmTUPQsQ','2024-02-22 05:35:02','2024-02-22 05:35:02'),(53,NULL,'tad99@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'CNUb57ba42','2024-02-22 05:35:02','2024-02-22 05:35:02'),(54,NULL,'moberbrunner@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'x3M7fkrrSX','2024-02-22 05:35:02','2024-02-22 05:35:02'),(55,NULL,'londricka@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'prLVOYeWr0','2024-02-22 05:35:02','2024-02-22 05:35:02'),(56,NULL,'trycia20@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'Afmsaqaf6W','2024-02-22 05:35:02','2024-02-22 05:35:02'),(57,NULL,'hrodriguez@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'L741KXsx4J','2024-02-22 05:35:02','2024-02-22 05:35:02'),(58,NULL,'yziemann@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'CylRwIExKt','2024-02-22 05:35:02','2024-02-22 05:35:02'),(59,NULL,'madaline.aufderhar@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'SbRBQujlcY','2024-02-22 05:35:02','2024-02-22 05:35:02'),(60,NULL,'lledner@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'UQvEY4aq8s','2024-02-22 05:35:02','2024-02-22 05:35:02'),(61,NULL,'white.jade@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'4KuYt1tNHw','2024-02-22 05:35:02','2024-02-22 05:35:02'),(62,NULL,'lsatterfield@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'OX9Z11AifP','2024-02-22 05:35:02','2024-02-22 05:35:02'),(63,NULL,'jerrell33@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'PqesD68wdW','2024-02-22 05:35:02','2024-02-22 05:35:02'),(64,NULL,'hyatt.linda@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'HQhZtX5Mv6','2024-02-22 05:35:02','2024-02-22 05:35:02'),(65,NULL,'wilber09@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'kftPHaDfdI','2024-02-22 05:35:02','2024-02-22 05:35:02'),(66,NULL,'sporer.edd@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'syE6u8tRtf','2024-02-22 05:35:02','2024-02-22 05:35:02'),(67,NULL,'odickinson@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'SLp6AxmFmh','2024-02-22 05:35:02','2024-02-22 05:35:02'),(68,NULL,'wellington.fisher@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'OrH9roVfDU','2024-02-22 05:35:02','2024-02-22 05:35:02'),(69,NULL,'wilton19@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'IF6YumG8ac','2024-02-22 05:35:02','2024-02-22 05:35:02'),(70,NULL,'zmarks@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'MECTxpCNzw','2024-02-22 05:35:02','2024-02-22 05:35:02'),(71,NULL,'lnitzsche@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'u8cnQxxMGT','2024-02-22 05:35:02','2024-02-22 05:35:02'),(72,NULL,'kwiza@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'610ceWgQaZ','2024-02-22 05:35:02','2024-02-22 05:35:02'),(73,NULL,'hsimonis@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'3DA2yygP0S','2024-02-22 05:35:02','2024-02-22 05:35:02'),(74,NULL,'rwisoky@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'uWNYmr6WLM','2024-02-22 05:35:02','2024-02-22 05:35:02'),(75,NULL,'beatty.quinn@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'9WNVsjEvo8','2024-02-22 05:35:02','2024-02-22 05:35:02'),(76,NULL,'jamal.lemke@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'JeEEBKcW3P','2024-02-22 05:35:02','2024-02-22 05:35:02'),(77,NULL,'barney06@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'nvcRk28Nx0','2024-02-22 05:35:02','2024-02-22 05:35:02'),(78,NULL,'bdare@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'J7YspS8JKt','2024-02-22 05:35:02','2024-02-22 05:35:02'),(79,NULL,'lisa.tromp@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'N07SrlxydE','2024-02-22 05:35:02','2024-02-22 05:35:02'),(80,NULL,'alison.kling@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'YQk2xGITHv','2024-02-22 05:35:02','2024-02-22 05:35:02'),(81,NULL,'matt55@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'m16ndImUD9','2024-02-22 05:35:02','2024-02-22 05:35:02'),(82,NULL,'nferry@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'sx4YkL9pgV','2024-02-22 05:35:02','2024-02-22 05:35:02'),(83,NULL,'lmetz@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'aSzZJvUB1V','2024-02-22 05:35:02','2024-02-22 05:35:02'),(84,NULL,'eriberto34@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'TtguLkbL6x','2024-02-22 05:35:02','2024-02-22 05:35:02'),(85,NULL,'fisher.morgan@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'p9dqqP22Ss','2024-02-22 05:35:02','2024-02-22 05:35:02'),(86,NULL,'dkuhlman@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'KNQsYZli4e','2024-02-22 05:35:02','2024-02-22 05:35:02'),(87,NULL,'marina.stoltenberg@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'rLdoGKMxxg','2024-02-22 05:35:02','2024-02-22 05:35:02'),(88,NULL,'camylle.moore@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'hz3FYY6jHm','2024-02-22 05:35:02','2024-02-22 05:35:02'),(89,NULL,'aboyle@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'25KIIrlWnn','2024-02-22 05:35:02','2024-02-22 05:35:02'),(90,NULL,'alayna85@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'bHnxD9atBL','2024-02-22 05:35:02','2024-02-22 05:35:02'),(91,NULL,'jayne.gottlieb@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'3KuxhbEbe1','2024-02-22 05:35:02','2024-02-22 05:35:02'),(92,NULL,'collier.barney@example.com','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'Tniabdm14O','2024-02-22 05:35:02','2024-02-22 05:35:02'),(93,NULL,'eloise83@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'nAL2v60lMn','2024-02-22 05:35:02','2024-02-22 05:35:02'),(94,NULL,'mclaughlin.gaylord@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','medico',NULL,'37kuu7KLBO','2024-02-22 05:35:02','2024-02-22 05:35:02'),(95,NULL,'akeem56@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'gNe9WKpKQF','2024-02-22 05:35:02','2024-02-22 05:35:02'),(96,NULL,'sboehm@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'J7alN3svXM','2024-02-22 05:35:02','2024-02-22 05:35:02'),(97,NULL,'pablo92@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'ZrDL7muYVz','2024-02-22 05:35:02','2024-02-22 05:35:02'),(98,NULL,'rnitzsche@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'WWfxLWmPgZ','2024-02-22 05:35:02','2024-02-22 05:35:02'),(99,NULL,'marks.julianne@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'cI8L1WHoC5','2024-02-22 05:35:02','2024-02-22 05:35:02'),(100,NULL,'allison60@example.net','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'AyBYq8kQRM','2024-02-22 05:35:02','2024-02-22 05:35:02'),(101,NULL,'bettye56@example.org','2024-02-22 05:35:02','$2y$12$QTWUsceNz/oHnG6CUbFYgOslO6I8Uxy7yQyPeKtkLqEmljl9MF6V.','paciente',NULL,'wnS8P2y9um','2024-02-22 05:35:02','2024-02-22 05:35:02'),(102,NULL,'jei@gmail.com','2024-02-22 05:42:56','$2y$12$suMamFZGl0G.glGuL2UITul0WXJkE.jXXi5Od0WNWUNublAWAqzdq','admin',NULL,NULL,'2024-02-22 05:42:56','2024-02-22 05:42:56'),(103,NULL,'gino.waelchi@example.com','2024-02-22 05:42:56','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'HkTJIPRAQF','2024-02-22 05:42:57','2024-02-22 05:42:57'),(104,NULL,'bsmitham@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'Wu00MJ6CiW','2024-02-22 05:42:57','2024-02-22 05:42:57'),(105,NULL,'ejacobs@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'ejtVTeClay','2024-02-22 05:42:57','2024-02-22 05:42:57'),(106,NULL,'missouri00@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'X9gh2qm9sD','2024-02-22 05:42:57','2024-02-22 05:42:57'),(107,NULL,'prolfson@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'11dzkpkqUN','2024-02-22 05:42:57','2024-02-22 05:42:57'),(108,NULL,'fondricka@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'HWtFoGpljC','2024-02-22 05:42:57','2024-02-22 05:42:57'),(109,NULL,'ben.langosh@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'tiv8kH4mVX','2024-02-22 05:42:57','2024-02-22 05:42:57'),(110,NULL,'noemie.koss@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'s7lWqWylM6','2024-02-22 05:42:57','2024-02-22 05:42:57'),(111,NULL,'muller.arianna@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'KjTDtY2pcs','2024-02-22 05:42:57','2024-02-22 05:42:57'),(112,NULL,'lauren.sauer@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'KAFL7EWz9v','2024-02-22 05:42:57','2024-02-22 05:42:57'),(113,NULL,'uswift@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'iFRf5UoT0i','2024-02-22 05:42:57','2024-02-22 05:42:57'),(114,NULL,'muhammad.roberts@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'R4bSAW3Oxq','2024-02-22 05:42:57','2024-02-22 05:42:57'),(115,NULL,'mackenzie62@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'HNHC4TP6YJ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(116,NULL,'serenity.jones@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'3ixKM85ayq','2024-02-22 05:42:57','2024-02-22 05:42:57'),(117,NULL,'zyundt@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'CNuIM971Oz','2024-02-22 05:42:57','2024-02-22 05:42:57'),(118,NULL,'cecile68@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'VKS26vC3Dz','2024-02-22 05:42:57','2024-02-22 05:42:57'),(119,NULL,'hudson.macie@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'iEVna2kuBW','2024-02-22 05:42:57','2024-02-22 05:42:57'),(120,NULL,'padberg.hassan@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'ETwNN4XOEw','2024-02-22 05:42:57','2024-02-22 05:42:57'),(121,NULL,'hkoepp@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'ejAx0aZnfN','2024-02-22 05:42:57','2024-02-22 05:42:57'),(122,NULL,'ozella52@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'QXwywNPJN0','2024-02-22 05:42:57','2024-02-22 05:42:57'),(123,NULL,'katherine80@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'p0tKgBfVvK','2024-02-22 05:42:57','2024-02-22 05:42:57'),(124,NULL,'uschiller@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'YUunU4w6R1','2024-02-22 05:42:57','2024-02-22 05:42:57'),(125,NULL,'lonnie.krajcik@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'gvph0gphSu','2024-02-22 05:42:57','2024-02-22 05:42:57'),(126,NULL,'doconner@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'r15tM3npPf','2024-02-22 05:42:57','2024-02-22 05:42:57'),(127,NULL,'lou48@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'mdmmhctNJU','2024-02-22 05:42:57','2024-02-22 05:42:57'),(128,NULL,'mariah.baumbach@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'C7r8uFoL2c','2024-02-22 05:42:57','2024-02-22 05:42:57'),(129,NULL,'susie.schmeler@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'Blg0Ojwex5','2024-02-22 05:42:57','2024-02-22 05:42:57'),(130,NULL,'ulang@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'LPnMopM0jW','2024-02-22 05:42:57','2024-02-22 05:42:57'),(131,NULL,'clay81@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'H7NhAvoaEG','2024-02-22 05:42:57','2024-02-22 05:42:57'),(132,NULL,'consuelo17@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'OcYnnp69WZ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(133,NULL,'harvey.litzy@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'P7fVyeoWlX','2024-02-22 05:42:57','2024-02-22 05:42:57'),(134,NULL,'mcdermott.keegan@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'uuH83PNLYN','2024-02-22 05:42:57','2024-02-22 05:42:57'),(135,NULL,'kathryne.kihn@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'afKcl6uxbI','2024-02-22 05:42:57','2024-02-22 05:42:57'),(136,NULL,'grunte@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'QQDqTqHcty','2024-02-22 05:42:57','2024-02-22 05:42:57'),(137,NULL,'skyla28@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'L2i6hWTcF2','2024-02-22 05:42:57','2024-02-22 05:42:57'),(138,NULL,'brekke.cecelia@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'BT1rISFgzA','2024-02-22 05:42:57','2024-02-22 05:42:57'),(139,NULL,'blaise89@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'w4c6N5177r','2024-02-22 05:42:57','2024-02-22 05:42:57'),(140,NULL,'sylvester.luettgen@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'XYkErBlLFp','2024-02-22 05:42:57','2024-02-22 05:42:57'),(141,NULL,'ubergnaum@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'X6hT89IvJl','2024-02-22 05:42:57','2024-02-22 05:42:57'),(142,NULL,'brendan.rau@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'LnClkOvekS','2024-02-22 05:42:57','2024-02-22 05:42:57'),(143,NULL,'emelia.jenkins@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'OCLKAYCL6U','2024-02-22 05:42:57','2024-02-22 05:42:57'),(144,NULL,'fbahringer@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'YXJCJMhE5Z','2024-02-22 05:42:57','2024-02-22 05:42:57'),(145,NULL,'adan.funk@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'UnDuAvUohl','2024-02-22 05:42:57','2024-02-22 05:42:57'),(146,NULL,'metz.isaias@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'IiTlM2S5Xs','2024-02-22 05:42:57','2024-02-22 05:42:57'),(147,NULL,'kevon73@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'mKUh9Lumvm','2024-02-22 05:42:57','2024-02-22 05:42:57'),(148,NULL,'hfeil@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'PeRt6YUziA','2024-02-22 05:42:57','2024-02-22 05:42:57'),(149,NULL,'dean.kiehn@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'0hYVFb9DW5','2024-02-22 05:42:57','2024-02-22 05:42:57'),(150,NULL,'hudson.maritza@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'xEJ7WHRzzu','2024-02-22 05:42:57','2024-02-22 05:42:57'),(151,NULL,'darron52@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'M6YJ7gBuok','2024-02-22 05:42:57','2024-02-22 05:42:57'),(152,NULL,'elda.schinner@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'qt9n9BLnJS','2024-02-22 05:42:57','2024-02-22 05:42:57'),(153,NULL,'cedrick.ruecker@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'LfCeYTQOxY','2024-02-22 05:42:57','2024-02-22 05:42:57'),(154,NULL,'gilda11@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'2IpmcolA42','2024-02-22 05:42:57','2024-02-22 05:42:57'),(155,NULL,'odie.vonrueden@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'H9oHsc6LFP','2024-02-22 05:42:57','2024-02-22 05:42:57'),(156,NULL,'lockman.mary@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'i3sVFuuuvt','2024-02-22 05:42:57','2024-02-22 05:42:57'),(157,NULL,'schmitt.blanca@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'uUy5IPLrck','2024-02-22 05:42:57','2024-02-22 05:42:57'),(158,NULL,'elvie.kling@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'bPX8H0KFiV','2024-02-22 05:42:57','2024-02-22 05:42:57'),(159,NULL,'rafael.beahan@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'5NqXkaN0gD','2024-02-22 05:42:57','2024-02-22 05:42:57'),(160,NULL,'waters.wilbert@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'9WKcgTe5Hu','2024-02-22 05:42:57','2024-02-22 05:42:57'),(161,NULL,'zita.rolfson@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'sDsM5n1MAj','2024-02-22 05:42:57','2024-02-22 05:42:57'),(162,NULL,'keshawn.reilly@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'xoSnPKGImQ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(163,NULL,'shany.zieme@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'rC0xzBtxpE','2024-02-22 05:42:57','2024-02-22 05:42:57'),(164,NULL,'johnnie.dach@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'X6xu6BzKnU','2024-02-22 05:42:57','2024-02-22 05:42:57'),(165,NULL,'lgerhold@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'sXDDPnKS8k','2024-02-22 05:42:57','2024-02-22 05:42:57'),(166,NULL,'diego51@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'ZuxpiqWwud','2024-02-22 05:42:57','2024-02-22 05:42:57'),(167,NULL,'cheidenreich@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'jEZonkW1JM','2024-02-22 05:42:57','2024-02-22 05:42:57'),(168,NULL,'nicolette51@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'lFTJux1MrF','2024-02-22 05:42:57','2024-02-22 05:42:57'),(169,NULL,'sauer.milton@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'lyVuzdj4d6','2024-02-22 05:42:57','2024-02-22 05:42:57'),(170,NULL,'valerie.dickinson@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'9S8WgPafOe','2024-02-22 05:42:57','2024-02-22 05:42:57'),(171,NULL,'jmonahan@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'mLDN1xhCIs','2024-02-22 05:42:57','2024-02-22 05:42:57'),(172,NULL,'lucy03@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'S8s2QlfyTf','2024-02-22 05:42:57','2024-02-22 05:42:57'),(173,NULL,'tressie.torp@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'ZjtkLWtXUK','2024-02-22 05:42:57','2024-02-22 05:42:57'),(174,NULL,'flavie.greenholt@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'LHo0lq16DZ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(175,NULL,'deonte.hamill@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'mwJTIfjNl3','2024-02-22 05:42:57','2024-02-22 05:42:57'),(176,NULL,'bailey.serenity@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'crb9qHCOQA','2024-02-22 05:42:57','2024-02-22 05:42:57'),(177,NULL,'pswaniawski@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'UoyAsYKA1q','2024-02-22 05:42:57','2024-02-22 05:42:57'),(178,NULL,'mathias29@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'1Cxs1m3dN3','2024-02-22 05:42:57','2024-02-22 05:42:57'),(179,NULL,'jessy24@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'5sx29aV6Wy','2024-02-22 05:42:57','2024-02-22 05:42:57'),(180,NULL,'kaitlin20@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'1RVsKhIQU4','2024-02-22 05:42:57','2024-02-22 05:42:57'),(181,NULL,'orlo.haley@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'lMp1QPsUNS','2024-02-22 05:42:57','2024-02-22 05:42:57'),(182,NULL,'kutch.nathanial@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'vlLcDyczn1','2024-02-22 05:42:57','2024-02-22 05:42:57'),(183,NULL,'tromp.alberto@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'iNAGtIoKtJ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(184,NULL,'koelpin.ewell@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'kkzkArLKbI','2024-02-22 05:42:57','2024-02-22 05:42:57'),(185,NULL,'wyatt23@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'dE778NfbnE','2024-02-22 05:42:57','2024-02-22 05:42:57'),(186,NULL,'wjones@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'2zA7IZcRkd','2024-02-22 05:42:57','2024-02-22 05:42:57'),(187,NULL,'jermey39@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'duPZg4tuzX','2024-02-22 05:42:57','2024-02-22 05:42:57'),(188,NULL,'payton.boehm@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'7TxMWSDqKG','2024-02-22 05:42:57','2024-02-22 05:42:57'),(189,NULL,'tromp.evalyn@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'rBRuNoKOYQ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(190,NULL,'ned.pouros@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'RG6CoygItQ','2024-02-22 05:42:57','2024-02-22 05:42:57'),(191,NULL,'michaela.champlin@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'OM9oI240Mg','2024-02-22 05:42:57','2024-02-22 05:42:57'),(192,NULL,'bgulgowski@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'THrFiigNjX','2024-02-22 05:42:57','2024-02-22 05:42:57'),(193,NULL,'wschimmel@example.net','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'lSkH7NGCz8','2024-02-22 05:42:57','2024-02-22 05:42:57'),(194,NULL,'jaskolski.dale@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'98BiTp8wAF','2024-02-22 05:42:57','2024-02-22 05:42:57'),(195,NULL,'timmothy.miller@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'KW5KHqNXwi','2024-02-22 05:42:57','2024-02-22 05:42:57'),(196,NULL,'gmonahan@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'OUHzvlOgha','2024-02-22 05:42:57','2024-02-22 05:42:57'),(197,NULL,'wiza.cloyd@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'15gN3a4Mqm','2024-02-22 05:42:57','2024-02-22 05:42:57'),(198,NULL,'stracke.andreanne@example.com','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'URCL7NPBmy','2024-02-22 05:42:57','2024-02-22 05:42:57'),(199,NULL,'barton.theodora@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','paciente',NULL,'YA1roeUrFh','2024-02-22 05:42:57','2024-02-22 05:42:57'),(200,NULL,'laverna39@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'tbwfN4CoDb','2024-02-22 05:42:57','2024-02-22 05:42:57'),(201,NULL,'kessler.gonzalo@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'702q2orQIl','2024-02-22 05:42:57','2024-02-22 05:42:57'),(202,NULL,'dorothea.kautzer@example.org','2024-02-22 05:42:57','$2y$12$voesa1JjOeWLwaKYEvqiq.y.QIjGmr43or/nqiEfnso3RX5rauzwG','medico',NULL,'4jvCtxiVcP','2024-02-22 05:42:57','2024-02-22 05:42:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `document_type_views`
--

/*!50001 DROP VIEW IF EXISTS `document_type_views`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `document_type_views` AS select `h`.`header_id` AS `document_id`,`d`.`detail_id` AS `detail_id`,`d`.`value` AS `name`,`d`.`nomenclature` AS `nomenclature` from (`headers` `h` join `details` `d` on((`h`.`header_id` = `d`.`id_header`))) where (`h`.`header_id` = 3) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `entity_type_views`
--

/*!50001 DROP VIEW IF EXISTS `entity_type_views`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `entity_type_views` AS select `h`.`header_id` AS `entity_id`,`d`.`detail_id` AS `detail_id`,`d`.`value` AS `name`,`d`.`nomenclature` AS `nomenclature` from (`headers` `h` join `details` `d` on((`h`.`header_id` = `d`.`id_header`))) where (`h`.`header_id` = 4) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `gender_views`
--

/*!50001 DROP VIEW IF EXISTS `gender_views`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `gender_views` AS select `h`.`header_id` AS `gender_id`,`d`.`detail_id` AS `detail_id`,`d`.`value` AS `name`,`d`.`nomenclature` AS `nomenclature` from (`headers` `h` join `details` `d` on((`h`.`header_id` = `d`.`id_header`))) where (`h`.`header_id` = 2) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `statu_views`
--

/*!50001 DROP VIEW IF EXISTS `statu_views`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `statu_views` AS select `h`.`header_id` AS `statu_id`,`d`.`detail_id` AS `detail_id`,`d`.`value` AS `name`,`d`.`nomenclature` AS `nomenclature` from (`headers` `h` join `details` `d` on((`h`.`header_id` = `d`.`id_header`))) where (`h`.`header_id` = 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-22  5:45:33
