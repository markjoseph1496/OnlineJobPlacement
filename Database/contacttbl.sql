/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u305071956_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-04-03 20:17:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contacttbl
-- ----------------------------
DROP TABLE IF EXISTS `contacttbl`;
CREATE TABLE `contacttbl` (
  `ContactID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminID` varchar(255) DEFAULT NULL,
  `TelNumber` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ContactID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contacttbl
-- ----------------------------
INSERT INTO `contacttbl` VALUES ('1', '1', '361-6070', '109 Samson Road corner Caimito Street Caloocan City, Philippines 1400', '+63 (917) 4638460', 'jobplacement@caloocan.sti.edu', ' www.sticaloocan.edu.ph');
