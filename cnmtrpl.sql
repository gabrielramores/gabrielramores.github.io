-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for cnmtrpl
CREATE DATABASE IF NOT EXISTS `cnmtrpl` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cnmtrpl`;

-- Dumping structure for table cnmtrpl.form-m5
CREATE TABLE IF NOT EXISTS `form-m5` (
  `form5_id` int(8) NOT NULL AUTO_INCREMENT,
  `userName` varchar(128) NOT NULL DEFAULT '0',
  `VehicleNo` varchar(128) NOT NULL,
  `PlateNo` varchar(128) NOT NULL,
  `Complaints` text NOT NULL,
  `Findings` text NOT NULL,
  `repairs_to_be_faci` tinyint(4) NOT NULL DEFAULT 0,
  `ourts_rep` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`form5_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cnmtrpl.form-m5: ~0 rows (approximately)
DELETE FROM `form-m5`;
/*!40000 ALTER TABLE `form-m5` DISABLE KEYS */;
/*!40000 ALTER TABLE `form-m5` ENABLE KEYS */;

-- Dumping structure for table cnmtrpl.form-ms3
CREATE TABLE IF NOT EXISTS `form-ms3` (
  `form3_id` int(8) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `FullName` varchar(128) NOT NULL,
  `VehicleNo` varchar(128) NOT NULL,
  `Current_Odometer_Reading` int(5) NOT NULL DEFAULT 0,
  `Engine_Change_Oil` tinyint(4) NOT NULL DEFAULT 0,
  `Change_Filters` tinyint(4) NOT NULL DEFAULT 0,
  `Filled_Lubricants` tinyint(4) NOT NULL DEFAULT 0,
  `Filled_Water` tinyint(4) NOT NULL DEFAULT 0,
  `Filled_Battery_Water` tinyint(4) NOT NULL DEFAULT 0,
  `Fixed_Brake_System` tinyint(4) NOT NULL DEFAULT 0,
  `Fixed_Tires` tinyint(4) NOT NULL DEFAULT 0,
  `Fixed_Electrical_System` tinyint(4) NOT NULL DEFAULT 0,
  `Fixed_Light` tinyint(4) NOT NULL DEFAULT 0,
  `Car_Washed` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`form3_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cnmtrpl.form-ms3: ~0 rows (approximately)
DELETE FROM `form-ms3`;
/*!40000 ALTER TABLE `form-ms3` DISABLE KEYS */;
/*!40000 ALTER TABLE `form-ms3` ENABLE KEYS */;

-- Dumping structure for table cnmtrpl.ltoform
CREATE TABLE IF NOT EXISTS `ltoform` (
  `lto_id` int(8) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(128) NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`lto_id`),
  CONSTRAINT `ltoform_ibfk_1` FOREIGN KEY (`lto_id`) REFERENCES `usermtrpl` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cnmtrpl.ltoform: ~0 rows (approximately)
DELETE FROM `ltoform`;
/*!40000 ALTER TABLE `ltoform` DISABLE KEYS */;
/*!40000 ALTER TABLE `ltoform` ENABLE KEYS */;

-- Dumping structure for table cnmtrpl.usermtrpl
CREATE TABLE IF NOT EXISTS `usermtrpl` (
  `userID` int(8) NOT NULL AUTO_INCREMENT,
  `driverID` varchar(128) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userPass` varchar(128) NOT NULL,
  `First_Name` varchar(128) NOT NULL,
  `Last_Name` varchar(128) NOT NULL,
  `Address` varchar(128) NOT NULL,
  `Email_Address` varchar(128) NOT NULL,
  `Phone_Number` varchar(128) NOT NULL,
  `UserType` int(10) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cnmtrpl.usermtrpl: ~5 rows (approximately)
DELETE FROM `usermtrpl`;
/*!40000 ALTER TABLE `usermtrpl` DISABLE KEYS */;
INSERT INTO `usermtrpl` (`userID`, `driverID`, `userName`, `userPass`, `First_Name`, `Last_Name`, `Address`, `Email_Address`, `Phone_Number`, `UserType`) VALUES
	(1, '1289329', 'user', 'user', 'Hahaha', 'hahaha', '', '', '', 2),
	(2, '3288234', 'admin', 'admin', 'lmao', 'mesmda', '', '', '', 1),
	(3, '123132', 'yuwin', 'yolus', 'hahuwiwi', 'asdasd', '', '', '', 2),
	(4, '18-0032', 'BSIT', 'BSIT', 'JOHN', 'RAMORES', '', '', '', 2),
	(6, '18-0031', 'genia', 'baldevia', 'genia', 'baldevia', '', '', '', 2),
	(7, '19-20211', 'harold', 'user1', 'Harold', 'Jenkins', '', '', '', 2);
/*!40000 ALTER TABLE `usermtrpl` ENABLE KEYS */;

-- Dumping structure for table cnmtrpl.vinfo
CREATE TABLE IF NOT EXISTS `vinfo` (
  `vID` int(8) NOT NULL AUTO_INCREMENT,
  `VehicleName` varchar(128) NOT NULL,
  `VehicleNo` varchar(128) NOT NULL,
  `Current_Odometer_Reading` int(5) NOT NULL DEFAULT 0,
  `PlateNo` varchar(128) NOT NULL,
  PRIMARY KEY (`vID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Vehicle Information';

-- Dumping data for table cnmtrpl.vinfo: ~0 rows (approximately)
DELETE FROM `vinfo`;
/*!40000 ALTER TABLE `vinfo` DISABLE KEYS */;
/*!40000 ALTER TABLE `vinfo` ENABLE KEYS */;

-- Dumping structure for table cnmtrpl.vrecords
CREATE TABLE IF NOT EXISTS `vrecords` (
  `vrecID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `FullName` varchar(128) NOT NULL,
  `VehicleNo` varchar(128) NOT NULL,
  `PlateNo` varchar(128) NOT NULL,
  `Current_Odometer_Reading` int(7) NOT NULL,
  `Added_Lubricants` tinyint(4) NOT NULL,
  `Changed_Brake` tinyint(4) NOT NULL,
  `Change_Oil` tinyint(4) NOT NULL,
  `Changed_Tire` tinyint(4) NOT NULL,
  `Replaced_Wiper` tinyint(4) NOT NULL,
  `Replaced_Light` tinyint(4) NOT NULL,
  `MechanicName` varchar(128) NOT NULL,
  `Schedule` date NOT NULL,
  `Remarks` text NOT NULL,
  PRIMARY KEY (`vrecID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cnmtrpl.vrecords: ~0 rows (approximately)
DELETE FROM `vrecords`;
/*!40000 ALTER TABLE `vrecords` DISABLE KEYS */;
/*!40000 ALTER TABLE `vrecords` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
