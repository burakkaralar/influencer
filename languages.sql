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
-- Table structure for table `language`
--

DROP TABLE IF EXISTS `language`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `language` (
  `language_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `name_native` varchar(25) DEFAULT NULL,
  `dir` enum('ltr','rtl') NOT NULL,
  PRIMARY KEY (`language_id`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `language`
--

LOCK TABLES `language` WRITE;
/*!40000 ALTER TABLE `language` DISABLE KEYS */;
INSERT INTO `language` VALUES (1,'tr','Türkçe','Türkçe','ltr'),(2,'en','İngilizce','English','ltr'),(3,'de','Almanca','Deutsch','ltr'),(4,'af','Afrika Dili','Afrikataal','ltr'),(5,'ar','Arapça','العربية','rtl'),(6,'sq','Arnavutça','Shqiptar','ltr'),(7,'az','Azerice','Azerice','ltr'),(8,'eu','Baskça','Euskal','ltr'),(9,'be','Belarusça','беларускі','ltr'),(10,'bn','Bengalce','বাঙালি','ltr'),(11,'bs','Boşnakça','Bosanski','ltr'),(12,'bg','Bulgarca','български','ltr'),(13,'my','Burmaca','မြန်မာ','ltr'),(14,'ny','Chicheva','Chichewa','ltr'),(15,'cs','Çekçe','čeština','ltr'),(16,'zh','Çince','中国','ltr'),(17,'da','Danca','Dansk','ltr'),(18,'id','Endonezya Dili','Indonesia','ltr'),(19,'hy','Ermenice','հայերեն','ltr'),(20,'eo','Esperantoca','Esperanto','ltr'),(21,'et','Estonyaca','Eesti','ltr'),(22,'fa','Farsça','فارسی','rtl'),(23,'nl','Felemenkçe','Nederlands','ltr'),(24,'tl','Filipince','Pilipino','ltr'),(25,'fi','Fince','Suomalainen','ltr'),(26,'fr','Fransızca','Français','ltr'),(27,'cy','Galce','Cymraeg','ltr'),(28,'gl','Galiçyaca','Galego','ltr'),(29,'gu','Gücerat Dili','ગુજરાતી','ltr'),(30,'ka','Gürcüce','ქართული','ltr'),(31,'ht','Haiti Creole Dili','Kreyòl ayisyen','ltr'),(32,'ha','Hausa Dili','Hausa','ltr'),(33,'hr','Hırvatça','Hrvatski','ltr'),(34,'hi','Hintçe','हिन्दी','ltr'),(35,'hmn','Hmong Dili','Hmong','ltr'),(36,'iw','İbranice','עברית','rtl'),(37,'ig','İgbo dili','Igbo','ltr'),(38,'ga','İrlandaca','Irish','ltr'),(39,'es','İspanyolca','Español','ltr'),(40,'sv','İsveçce','Svenska','ltr'),(41,'it','İtalyanca','Italiano','ltr'),(42,'is','İzlandaca','Icelandic','ltr'),(43,'ja','Japonca','日本人','ltr'),(44,'jw','Javanese','Jawa','ltr'),(45,'km','Kamboçyaca','ប្រទេសកម្ពុជា','ltr'),(46,'kn','Kannada','ಕನ್ನಡ','ltr'),(47,'ca','Katalanca','Català','ltr'),(48,'kk','Kazakça','Қазақ','ltr'),(49,'ko','Korece','한국의','ltr'),(50,'ku','Kürtçe','Kurmançi','ltr'),(51,'lo','Laoca','ລາວ','ltr'),(52,'la','Latince','Latin','ltr'),(53,'lzz','Lazca','Lazuri','ltr'),(54,'pl','Lehçe','Polski','ltr'),(55,'lv','Letonca','Latvijas','ltr'),(56,'lt','Litvanyaca','Lietuvos','ltr'),(57,'hu','Macarca','Magyar','ltr'),(58,'mg','Madagaskar Dili','Malagasy','ltr'),(59,'mk','Makedonca','македонски','ltr'),(60,'ml','Malayalam','മലയാളം','ltr'),(61,'ms','Malezya Dili','Bahasa Melayu','ltr'),(62,'mt','Malta Dili','Maltese','ltr'),(63,'mi','Maori Dili','Reo Maori','ltr'),(64,'mr','Marathi','मराठी','ltr'),(65,'mn','Moğolca','Монгол улсын','ltr'),(66,'ne','Nepalce','नेपाली','ltr'),(67,'no','Norveççe','Norsk','ltr'),(68,'uz','Özbekçe','Ozbekiston','ltr'),(69,'pa','Pencap Dili','ਪੰਜਾਬੀ ਦੇ','ltr'),(70,'pt','Portekizce','Português','ltr'),(71,'ro','Romence','Român','ltr'),(72,'ru','Rusça','Pусский','ltr'),(73,'st','Sesotho Dili','Sesotho','ltr'),(74,'si','Seylanca','සිංහල','ltr'),(75,'sr','Sırpça','Cрпски','ltr'),(76,'sk','Slovakça','Slovenčina','ltr'),(77,'sl','Slovence','Slovenski','ltr'),(78,'so','Somalice','Soomaali','ltr'),(79,'su','Sundanizce','Sundance','ltr'),(80,'sw','Svahili','Kiswahili','ltr'),(81,'tg','Tacikce','Тоҷикистон','ltr'),(82,'ta','Tamil','தமிழ்','ltr'),(83,'th','Tay Dili','ภาษาไทย','ltr'),(84,'te','Telugu','తెలుగు','ltr'),(85,'uk','Ukraynaca','Український','ltr'),(86,'ur','Urduca','اردو','rtl'),(87,'vi','Vietnamca','tiếng Việt','ltr'),(88,'yi','Yidce','ייִדיש','rtl'),(89,'yo','Yoruba','Yorùbá','ltr'),(90,'el','Yunanca','ελληνικά','ltr'),(91,'zza','Zazaca','Zazaki','ltr'),(92,'zu','Zuluca','isiZulu','ltr');
/*!40000 ALTER TABLE `language` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
