/*
SQLyog Community v12.2.4 (32 bit)
MySQL - 5.7.11 : Database - sem20181
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sem20181` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sem20181`;

/*Table structure for table `estudiantes` */

DROP TABLE IF EXISTS `estudiantes`;

CREATE TABLE `estudiantes` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `primerApe` varchar(64) NOT NULL,
  `segundoApe` varchar(64) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `correo` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estudiantes` */

insert  into `estudiantes`(`boleta`,`nombre`,`primerApe`,`segundoApe`,`sexo`,`correo`) values 
('12341234','Admin','ESCOM','IPN','N','admin@admin.com'),
('2016630003','Miguel Ángel','Moreno','Muñoz','M','miguel@miguel.com'),
('2016630010','Luis','López','Luna','M','luis@luis.com'),
('2016630024','Ana María','Anaya','Anaya','F','anamaria@anamaria.com'),
('201663005','Melissa','Mendez','Méndez','F','melissa@melissa.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
