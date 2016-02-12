/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-13 01:41:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admineventtbl
-- ----------------------------
DROP TABLE IF EXISTS `admineventtbl`;
CREATE TABLE `admineventtbl` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminID` varchar(255) DEFAULT NULL,
  `EventTitle` varchar(255) DEFAULT NULL,
  `EventDatef` varchar(255) DEFAULT NULL,
  `EventDatet` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `ProfileImage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admineventtbl
-- ----------------------------
INSERT INTO `admineventtbl` VALUES ('1', '1', 'asdasd', '2016-02-04', '2016-02-25', 'asdasd', 'asdasdad', null, null);
