/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.32-MariaDB : Database - db_ajax
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_ajax` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_ajax`;

/*Table structure for table `pajak` */

DROP TABLE IF EXISTS `pajak`;

CREATE TABLE `pajak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `swdkllj` int(11) NOT NULL,
  `administrasi` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `pajak` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `no` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `pajak` */

insert  into `pajak`(`id`,`nama`,`swdkllj`,`administrasi`,`denda`,`pajak`) values 
(30,'Devaa',2000,3000,4000,10),
(31,'Andi',4000,5000,2000,10);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
