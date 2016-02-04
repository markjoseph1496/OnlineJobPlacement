/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-05 00:15:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ojttbl
-- ----------------------------
DROP TABLE IF EXISTS `ojttbl`;
CREATE TABLE `ojttbl` (
  `StudentID` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `Course` varchar(255) DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `CompanyAddress` varchar(255) DEFAULT NULL,
  `Supervisor` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `aStatus` varchar(255) DEFAULT NULL,
  `DailyTimeRecord` varchar(255) DEFAULT NULL,
  `IntegrationPaper` varchar(255) DEFAULT NULL,
  `PracJournal` varchar(255) DEFAULT NULL,
  `TrainingPlan` varchar(255) DEFAULT NULL,
  `Resume` varchar(255) DEFAULT NULL,
  `MOA` varchar(255) DEFAULT NULL,
  `ApplicationLetter` varchar(255) DEFAULT NULL,
  `Waiver` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ojttbl
-- ----------------------------
INSERT INTO `ojttbl` VALUES ('820120289', 'ANTIPOLO', 'HAZEL JOY', 'JULVE', 'BSBM', 'ICISIN CORPORATION', '16 ENGINEERING 2 ROAD ARANETA POTRERO MALABON CITY  ', 'MS. SARAH JANE MADRIAGA', 'GENERAL ADMIN', '9432787091', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('820120310', 'AGUSTIN', 'JOHN JOSMIL', 'CANARY', 'BSBM', 'CONVERGYS TELSTRA', 'G/F CYBERPOD 3 ETON CENTRIS QUEZON CITY COR. EDSA', 'MS.KAREN GRACE CRUZ ', 'SOURCING COORDINATOR', '9151344073', null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('820130777', 'ALONZO', 'MARIA KATRINA', 'REYES', 'BSBM', 'STI ACADEMIC CENTER CALOOCAN', '109 SAMSON ROAD CORNER CAIMITO ROAD, CALOOCAN CITY', 'MS. DONNA JOY GODIO', 'HEAD CAREER ADVICER', '9328813553', null, null, null, null, null, null, null, null, null, null);
