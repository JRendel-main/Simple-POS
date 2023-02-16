/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - posbooth
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`posbooth` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `posbooth`;

/*Table structure for table `invoice` */

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `prodid` int(10) NOT NULL AUTO_INCREMENT,
  `product` varchar(255) NOT NULL,
  `cost` int(10) NOT NULL,
  PRIMARY KEY (`prodid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `invoice` */

insert  into `invoice`(`prodid`,`product`,`cost`) values 
(1,'Solo',10),
(2,'Portrait',15),
(3,'Landscape',15);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `year` int(10) DEFAULT NULL,
  `section` varchar(2) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `student_number` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `prodid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `product` */

insert  into `product`(`id`,`fullname`,`year`,`section`,`amount`,`quantity`,`student_number`,`time`,`image`,`prodid`) values 
(1,'Rendel',1,'D',10,20,'SUM2020-00609','2023-02-09 07:58:28',NULL,0),
(2,'ken',1,'A',10,20,'131231','2023-02-09 07:59:09',NULL,0),
(3,'Rendel',1,'A',10,1,'SUM1231313','2023-02-09 08:01:42',NULL,0),
(4,'Carlos',1,'A',10,1,'123131','2023-02-09 08:07:02',NULL,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
