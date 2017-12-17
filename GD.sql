/*
SQLyog Ultimate v9.33 GA
MySQL - 5.5.51-38.2 : Database - mohsin13_geekydrive
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mohsin13_geekydrive` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

/*Table structure for table `ent_company` */

DROP TABLE IF EXISTS `ent_company`;

CREATE TABLE `ent_company` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_sector_id` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`entity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ent_company` */

insert  into `ent_company`(`entity_id`,`name`,`nick`,`company_sector_id`,`email`,`contact_number`) values (1,'Geo','Geo',1,NULL,NULL);

/*Table structure for table `ent_company_sector` */

DROP TABLE IF EXISTS `ent_company_sector`;

CREATE TABLE `ent_company_sector` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`entity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ent_company_sector` */

insert  into `ent_company_sector`(`entity_id`,`name`,`nick`) values (1,'Education','Education'),(2,'Fashion','Fashion'),(3,'Media','Media'),(4,'Health','Health');

/*Table structure for table `ent_customer` */

DROP TABLE IF EXISTS `ent_customer`;

CREATE TABLE `ent_customer` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`entity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ent_customer` */

insert  into `ent_customer`(`entity_id`,`name`,`nick`,`email`,`contact_number`) values (1,'Saqib Ayub Butt','Butt',NULL,NULL),(2,'Osama','OverSeas','os@os.is','032125177493');

/*Table structure for table `ent_web_request` */

DROP TABLE IF EXISTS `ent_web_request`;

CREATE TABLE `ent_web_request` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_header` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`entity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ent_web_request` */

insert  into `ent_web_request`(`entity_id`,`request_header`,`name`,`nick`,`email`,`contact_number`) values (1,'Firefox ','noname','noname','sa@sa.sa','456465');

/*Table structure for table `hr_employee` */

DROP TABLE IF EXISTS `hr_employee`;

CREATE TABLE `hr_employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nick` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `hr_employee` */

insert  into `hr_employee`(`employee_id`,`employee_role_id`,`name`,`nick`,`email`,`contact_number`) values (1,4,'Aamir Farooqui','Aamir','aamir@geekydrive.com','03212517784');

/*Table structure for table `hr_employee_roles` */

DROP TABLE IF EXISTS `hr_employee_roles`;

CREATE TABLE `hr_employee_roles` (
  `employee_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`employee_role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `hr_employee_roles` */

insert  into `hr_employee_roles`(`employee_role_id`,`name`) values (1,'Director'),(2,'Diver'),(3,'Flight Operator'),(4,'Flight Admin');

/*Table structure for table `res_reservable_resource` */

DROP TABLE IF EXISTS `res_reservable_resource`;

CREATE TABLE `res_reservable_resource` (
  `reservable_id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_type_id` int(11) DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`reservable_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `res_reservable_resource` */

insert  into `res_reservable_resource`(`reservable_id`,`resource_type_id`,`resource_id`) values (1,2,3),(2,2,1),(3,2,2);

/*Table structure for table `res_reservation` */

DROP TABLE IF EXISTS `res_reservation`;

CREATE TABLE `res_reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pickup_location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reservation_duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_details` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservation_date` datetime NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `res_reservation` */

insert  into `res_reservation`(`reservation_id`,`name`,`email`,`pickup_location`,`contact_number`,`reservation_duration`,`car_details`,`message`,`reservation_date`) values (1,'Aadil Farooqui','aadil.mfarooqui@gmail.com','Jinnah International Airport','+9100056565898','13','Toyota Corolla - XLI 2017','Please send the receipt of our booking and make sure the Car details are sent before we arrive.','2017-11-19 07:05:47'),(29,'test','sa@sa.sa','test','test','test','Toyota Corolla - XLI 2017','test','2017-11-28 13:35:44'),(28,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-27 18:04:25'),(27,'2 Test Separate booking form','saqibayub@gmail.com','2 Test Separate booking form','2 Test Separate booking form','2 Test Separate booking form','Honda Civic - 1.8 2017 ','2 Test Separate booking form','2017-11-27 13:26:15'),(26,'Test Separate booking form','saqibayub@gmail.com','Test Separate booking form','Test Separate booking form','Test Separate booking form','Suzuki Cultus - VXRi - 2017','Test Separate booking form','2017-11-27 13:08:45'),(25,'Testing ','saqibayub@gmail.com','DV','0321257738','2 ays','Suzuki Cultus - VXRi - 2017','Hello testing again','2017-11-25 00:24:43'),(24,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-24 18:00:56'),(23,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-23 17:51:35'),(22,'Saqib Testing Change URL','saqibayub@gmail.com','Saqib Testing Change URL','564646','4 Days','Suzuki Cultus - VXRi - 2017','Saqib Testing Change URL','2017-11-23 12:31:26'),(21,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-21 17:48:29'),(20,'Sheikh Osama Hussain','aa@aa.com','42 baker street','a4a4a4a4a','55 days','Honda Civic - 1.8 2017 ','Test BOoking','2017-11-20 02:32:27'),(19,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-19 17:50:05'),(30,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-28 18:04:49'),(31,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-11-30 18:15:36'),(32,'1','1','1','1','1','Suzuki Cultus - VXRi - 2017','1','2017-12-01 18:01:39');

/*Table structure for table `res_reservations` */

DROP TABLE IF EXISTS `res_reservations`;

CREATE TABLE `res_reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reservable_id` int(11) NOT NULL,
  `reservee_id` int(11) NOT NULL,
  `reservation_date` datetime NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `res_reservations` */

insert  into `res_reservations`(`reservation_id`,`message`,`reservable_id`,`reservee_id`,`reservation_date`) values (1,'Testing Saqib wants to have Honda Civic',1,1,'2017-12-02 01:06:02'),(2,'Testing Osama want XLI',2,2,'2017-12-02 01:31:00');

/*Table structure for table `res_reservee` */

DROP TABLE IF EXISTS `res_reservee`;

CREATE TABLE `res_reservee` (
  `reservee_id` int(11) NOT NULL AUTO_INCREMENT,
  `reservee_type_id` int(11) NOT NULL,
  `entity_id` int(11) NOT NULL,
  PRIMARY KEY (`reservee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `res_reservee` */

insert  into `res_reservee`(`reservee_id`,`reservee_type_id`,`entity_id`) values (1,2,1),(2,2,2),(3,3,1),(4,1,1),(5,5,1);

/*Table structure for table `res_reservee_types` */

DROP TABLE IF EXISTS `res_reservee_types`;

CREATE TABLE `res_reservee_types` (
  `reservee_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`reservee_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `res_reservee_types` */

insert  into `res_reservee_types`(`reservee_type_id`,`name`) values (1,'Anonymous Website Visitor'),(2,'Person'),(3,'Company'),(4,'Banquet Hall'),(5,'Flight Attendent');

/*Table structure for table `rs_cars` */

DROP TABLE IF EXISTS `rs_cars`;

CREATE TABLE `rs_cars` (
  `resource_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_model` date DEFAULT NULL,
  `date_regusteration` date DEFAULT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`resource_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `rs_cars` */

insert  into `rs_cars`(`resource_id`,`date_model`,`date_regusteration`,`make`,`model`,`version`) values (1,'2017-10-26','2017-10-26','Toyota','Corolla','XLi VVTi'),(2,'2017-10-26','2017-10-26','Honda','Civic','1.8 i-VTEC CVT'),(3,'2017-10-26','2017-10-26','Suzuki','Cultus','VXRi'),(4,'2017-10-26','2017-10-26','Suzuki','Alto','VXRi');

/*Table structure for table `rs_resource_types` */

DROP TABLE IF EXISTS `rs_resource_types`;

CREATE TABLE `rs_resource_types` (
  `resource_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`resource_type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `rs_resource_types` */

insert  into `rs_resource_types`(`resource_type_id`,`name`) values (1,'Van'),(2,'Car');

/*Table structure for table `res_view_reservables` */

DROP TABLE IF EXISTS `res_view_reservables`;

/*!50001 DROP VIEW IF EXISTS `res_view_reservables` */;
/*!50001 DROP TABLE IF EXISTS `res_view_reservables` */;

/*!50001 CREATE TABLE  `res_view_reservables`(
 `reservable_id` int(11) ,
 `name` text 
)*/;

/*Table structure for table `res_view_reservee` */

DROP TABLE IF EXISTS `res_view_reservee`;

/*!50001 DROP VIEW IF EXISTS `res_view_reservee` */;
/*!50001 DROP TABLE IF EXISTS `res_view_reservee` */;

/*!50001 CREATE TABLE  `res_view_reservee`(
 `reservee_id` int(11) ,
 `reservee_type_id` int(11) ,
 `name` varchar(255) ,
 `nick` varchar(255) ,
 `email` varchar(255) ,
 `contact_number` varchar(255) 
)*/;

/*View structure for view res_view_reservables */

/*!50001 DROP TABLE IF EXISTS `res_view_reservables` */;
/*!50001 DROP VIEW IF EXISTS `res_view_reservables` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`mohsin13_gdrive`@`%%.%%.%%%.%%%` SQL SECURITY DEFINER VIEW `res_view_reservables` AS (select `reservable`.`reservable_id` AS `reservable_id`,concat(`cars`.`make`,' ',`cars`.`model`,' ',`cars`.`version`) AS `name` from (`res_reservable_resource` `reservable` join `rs_cars` `cars`) where ((`reservable`.`resource_type_id` = 2) and (`reservable`.`resource_id` = `cars`.`resource_id`))) */;

/*View structure for view res_view_reservee */

/*!50001 DROP TABLE IF EXISTS `res_view_reservee` */;
/*!50001 DROP VIEW IF EXISTS `res_view_reservee` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`mohsin13_gdrive`@`%%.%%.%%%.%%%` SQL SECURITY DEFINER VIEW `res_view_reservee` AS select `res_reservee`.`reservee_id` AS `reservee_id`,`res_reservee`.`reservee_type_id` AS `reservee_type_id`,`customer`.`name` AS `name`,`customer`.`nick` AS `nick`,`customer`.`email` AS `email`,`customer`.`contact_number` AS `contact_number` from (`res_reservee` join `ent_customer` `customer`) where ((`res_reservee`.`reservee_type_id` = 2) and (`res_reservee`.`entity_id` = `customer`.`entity_id`)) union select `res_reservee`.`reservee_id` AS `reservee_id`,`res_reservee`.`reservee_type_id` AS `reservee_type_id`,`entity`.`name` AS `name`,`entity`.`nick` AS `nick`,`entity`.`email` AS `email`,`entity`.`contact_number` AS `contact_number` from (`res_reservee` join `ent_company` `entity`) where ((`res_reservee`.`reservee_type_id` = 3) and (`res_reservee`.`entity_id` = `entity`.`entity_id`)) union select `res_reservee`.`reservee_id` AS `reservee_id`,`res_reservee`.`reservee_type_id` AS `reservee_type_id`,`entity`.`name` AS `name`,`entity`.`nick` AS `nick`,`entity`.`email` AS `email`,`entity`.`contact_number` AS `contact_number` from (`res_reservee` join `ent_web_request` `entity`) where ((`res_reservee`.`reservee_type_id` = 1) and (`res_reservee`.`entity_id` = `entity`.`entity_id`)) union select `res_reservee`.`reservee_id` AS `reservee_id`,`res_reservee`.`reservee_type_id` AS `reservee_type_id`,`entity`.`name` AS `name`,`entity`.`nick` AS `nick`,`entity`.`email` AS `email`,`entity`.`contact_number` AS `contact_number` from (`res_reservee` join `hr_employee` `entity`) where ((`res_reservee`.`reservee_type_id` = 5) and (`res_reservee`.`entity_id` = `entity`.`employee_id`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
