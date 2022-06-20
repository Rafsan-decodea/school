-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: school
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `notice_board`
--

DROP TABLE IF EXISTS `notice_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notice_board` (
  `id` int NOT NULL AUTO_INCREMENT,
  `notice` varchar(700) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice_board`
--

LOCK TABLES `notice_board` WRITE;
/*!40000 ALTER TABLE `notice_board` DISABLE KEYS */;
INSERT INTO `notice_board` VALUES (1,'আগামী নির্বাচনী পরীক্ষা ৩১ মার্চের পরিবর্তে ৫ জুন অনুষ্ঠিত হবে'),(3,'আগামী ৩১ মার্চের মধ্যে সকল ফি পরিশোধ করতে হবে'),(4,'স্কুলের ভিতর মোবাইল ব্যবহার করা সম্পূর্ণ নিষেধ');
/*!40000 ALTER TABLE `notice_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `heading` varchar(600) DEFAULT NULL,
  `history` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `principletalk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `principleimage` varchar(100) DEFAULT NULL,
  `preprincipletalk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `preprincipleimage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Today Class Will Be Close ok  !','সুনামগঞ্জ জেলাধীন জগন্নাথপুরস্থ এক প্রাচীন জনপদের নাম ইসহাকপুর । এ গ্রামের সম্ভ্রান্ত ধর্মভীরু মুসলিম পরিবার সমূহের মধ্যে শীর্ষস্থানে অবস্থান খান পরিবারের । বংশমর্যাদায় যেমন শ্রেষ্ঠত্বের দাবীদার তেমনি শিক্ষা-দীক্ষায়, ','মাধ্যমিক  উচ্চ মাধ্যমিক শিক্ষা aবোর্ড, যশোর মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা aবোর্ড, যশোর জনগণের দোরগোড়ায় শিক্ষা সেবা পৌঁছে দেবার লক্ষ্যে যাবতীয় কার্যাদী সম্পাদনে ডিজিটাল প্রযুক্তি ব্যবহার ও যশোর শিক্ষাবোর্ডের অধীন সকল প্রতিষ্ঠানের তথ্য অনলাইনে প্রেরণের ব্যবস্থা নেওয়া হয়েছে জেনে আমি আনন্দিত। বৃটিশ ঔপনিবেশিক আমলে মহৎপ্রাণ ব্যক্তি বাবু মথুরানাথ কুন্ডু মহাশয়ের প্রচেষ্টায় ১৮৫৬ খ্রিঃ প্রতিষ্ঠিত হয়েছিল ঐতিহ্যবাহী কুমারখালী','1310883125.jpg','বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা। সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা। ইহলৌকিক উন্নতির সাথে সাথে পারলৌকিক মুক্তির পথ ','1609429452.jpg'),(2,'Today Class Will Be Close ok  !','সুনামগঞ্জ জেলাধীন জগন্নাথপুরস্থ এক প্রাচীন জনপদের নাম ইসহাকপুর । এ গ্রামের সম্ভ্রান্ত ধর্মভীরু মুসলিম পরিবার সমূহের মধ্যে শীর্ষস্থানে অবস্থান খান পরিবারের । বংশমর্যাদায় যেমন শ্রেষ্ঠত্বের দাবীদার তেমনি শিক্ষা-দীক্ষায়, ','মাধ্যমিক  উচ্চ মাধ্যমিক শিক্ষা aবোর্ড, যশোর মাধ্যমিক ও উচ্চ মাধ্যমিক শিক্ষা aবোর্ড, যশোর জনগণের দোরগোড়ায় শিক্ষা সেবা পৌঁছে দেবার লক্ষ্যে যাবতীয় কার্যাদী সম্পাদনে ডিজিটাল প্রযুক্তি ব্যবহার ও যশোর শিক্ষাবোর্ডের অধীন সকল প্রতিষ্ঠানের তথ্য অনলাইনে প্রেরণের ব্যবস্থা নেওয়া হয়েছে জেনে আমি আনন্দিত। বৃটিশ ঔপনিবেশিক আমলে মহৎপ্রাণ ব্যক্তি বাবু মথুরানাথ কুন্ডু মহাশয়ের প্রচেষ্টায় ১৮৫৬ খ্রিঃ প্রতিষ্ঠিত হয়েছিল ঐতিহ্যবাহী কুমারখালী','1310883125.jpg','বাংলাদেশের শিক্ষা ব্যবস্থার একটি পূর্ণাঙ্গ ধারা মাদরাসা শিক্ষা। সাধারণ শিক্ষার পাশপাশি সমান্তরালভাবে এটি বয়ে চলেছে দীর্ঘদিন ধরে এবং এ দেশের জন-মানসে তার স্থান করে নিয়েছে সুরক্ষিত ও সুদৃঢ়ভাবে। ধর্মীয় শিক্ষা ও জাগতিক শিক্ষা দুটি পরস্পরের পরিপুরক। এ সমন্বিত ইসলামী শিক্ষা ব্যবস্থার প্রতিষ্ঠানিক রুপই হচ্ছে মাদরাসা শিক্ষা। ইহলৌকিক উন্নতির সাথে সাথে পারলৌকিক মুক্তির পথ ','1609429452.jpg');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `school_users`
--

DROP TABLE IF EXISTS `school_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `school_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `sturoll` varchar(200) DEFAULT NULL,
  `stuclass` varchar(200) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` int NOT NULL,
  `profileimage` varchar(100) DEFAULT NULL,
  `fathername` varchar(100) DEFAULT NULL,
  `mothername` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `sellary` varchar(100) DEFAULT NULL,
  `entrydate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `school_users`
--

LOCK TABLES `school_users` WRITE;
/*!40000 ALTER TABLE `school_users` DISABLE KEYS */;
INSERT INTO `school_users` VALUES (6,0,NULL,NULL,'shazidno123@gmail.com','rafsan123','Rafsan',0,'560735083.jpeg',NULL,NULL,NULL,NULL,NULL,'2022-06-06 22:22:24'),(8,1,NULL,NULL,'test123@gmail.com','rafsan','Rafsan',1,'400579964.png','Al mamun Shikder ','Salma  akter','01818144463','Chittagong','20000','2022-06-07 21:49:51');
/*!40000 ALTER TABLE `school_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-20 21:53:03
