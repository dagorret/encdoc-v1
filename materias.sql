-- MySQL dump 10.13  Distrib 5.7.12, for Linux (x86_64)
--
-- Host: localhost    Database: encdoc
-- ------------------------------------------------------
-- Server version	5.7.12

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
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` int(10) unsigned NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (181,1,'ANALISIS MATEMATICO I'),(182,2,'METODOLOGIA DE LAS CIENCIAS'),(183,3,'PRINCIPIOS DE ADMINISTRACION'),(184,4,'ANALISIS MATEMATICO II'),(185,5,'PRINCIPIOS DE ECONOMIA I'),(186,6,'HISTORIA ECONOMICA Y SOCIAL'),(187,7,'ALGEBRA LINEAL'),(188,8,'PRINCIPIOS DE ECONOMIA II'),(189,9,'SISTEMA DE INFORMACION CONTABLE I'),(190,10,'SOCIOLOGIA'),(191,11,'ESTADISTICA Y PROBABILIDAD'),(192,12,'CONTABILIDAD ECONOMICA        '),(193,13,'RECURSOS ECONOMICOS'),(194,14,'DERECHO PUBLICO'),(195,15,'ESTADISTICA APLICADA'),(196,16,'SISTEMAS DE INFORMACION CONTABLE II'),(197,17,'TECNOLOGIA DE LA INFORMACION'),(198,19,'CALCULO FINANCIERO'),(199,20,'SOCIOLOGIA DE LA ORGANIZACIÓN'),(200,21,'FINANZAS PUBLICAS'),(201,22,'INVESTIGACION OPERATIVA'),(202,23,'SISTEMAS DE COSTOS'),(203,24,'ADMINISTRACION RURAL'),(204,25,'ADMINISTRACION TRIBUTARIA Y PREVISIONAL'),(205,26,'COSTOS PARA LA GESTION'),(206,27,'ADMINISTRACION Y CONTABILIDAD PUBLICA'),(207,28,'ADMINISTRACION DE PERSONAL'),(208,29,'ADMINISTRACION DE LA PRODUCCION'),(209,30,'COMERCIALIZACION'),(210,31,'ADMINISTRACION ECONOMICO-FINANCIERA'),(211,32,'INVESTIGACION DE MERCADOS'),(212,33,'COMERCIO INTERNACIONAL'),(213,34,'PLANEAMIENTO Y EVALUACION DE PROYECTOS'),(214,35,'PRACTICA PROFESIONAL'),(215,36,'DIRECCION GENERAL'),(216,37,'SEMINARIO'),(217,38,'SEMINARIO'),(218,39,'DERECHO PRIVADO I'),(219,40,'SISTEMAS DE INFORMACION CONTABLE III'),(220,41,'DERECHO PRIVADO II'),(221,42,'DERECHO Y PRACTICA LABORAL'),(222,43,'SOCIEDADES COMERCIALES'),(223,44,'TEORIA Y TECNICA IMPOSITIVA I'),(224,45,'CONCURSOS Y PROCEDIMIENTOS JUDICIALES'),(225,46,'AUDITORIA'),(226,47,'ANALISIS E INTERPRETACION DE ESTADOS CONTABLES'),(227,48,'GESTION FINANCIERA'),(228,49,'TEORIA Y TECNICA IMPOSITIVA II'),(229,50,'GESTION INFORMATIZADA'),(230,51,'TEORIA Y TECNICA IMPOSITIVA III'),(231,52,'ACTUACION JURIDICO CONTABLE'),(232,53,'SEMINARIO: Area de Contabilidad y Auditoría'),(233,54,'SEMINARIO: Area Jurídica de Aplicación'),(234,55,'SEMINARIO: Area de Información para la Gestión'),(235,56,'SEMINARIO: Area Matemática Aplicada'),(236,57,'ECONOMIA ESTADO Y SOCIEDAD'),(237,58,'MACROECONOMIA I'),(238,59,'INFERENCIA ESTADISTICA'),(239,60,'MICROECONOMIA I'),(240,61,'ECONOMETRIA'),(241,62,'FINANZAS PUBLICAS Y POLITICA FISCAL'),(242,63,'MACROECONOMIA II'),(243,64,'ECONOMIA INTERNACIONAL'),(244,65,'ECONOMIA MATEMATICA'),(245,66,'METODOLOGIA DE LA ECONOMIA'),(246,67,'TEORIAS DEL CRECIMIENTO ECONOMICO Y DEL DESARROLLO'),(247,68,'HISTORIA DE LAS DOCTRINAS ECONOMICAS'),(248,69,'MICROECONOMIA II'),(249,70,'ECONOMIA AGRARIA'),(250,71,'FINANZAS DE EMPRESAS'),(251,72,'EVALUACION DE PROYECTOS (SOCIAL Y PRIVADA)'),(252,73,'SEMINARIO DE ECONOMIA ARGENTINA'),(253,74,'ANALISIS DE INVERSIONES'),(254,75,'POLITICA ECONOMICA'),(255,76,'SEMINARIO DE METODOLOGIA DE LA INVESTIGACION SOCIAL Y DE ELABORACION DEL'),(256,77,'ECONOMIA DEL TRABAJO*'),(257,78,'ECONOMIA DE LA EDUCACION Y LA SALUD'),(258,79,'ECONOMIA URBANA Y REGIONAL'),(259,80,'ECONOMIA DEL MEDIO AMBIENTE'),(260,81,'ECONOMETRIA AVANZADA'),(261,82,'ECONOMIA BANCARIA'),(262,83,'ECONOMIA DE LA REGULACION'),(263,84,'INSTITUCIONES DEL DERECHO PRIVADO*'),(264,85,'SISTEMAS ADMINISTRATIVOS        '),(265,86,'COMUNICACIÓN INTERNACIONAL'),(266,87,'TRABAJO FINAL'),(267,88,'TRABAJO FINAL');
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-13 20:31:22
