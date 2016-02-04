/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-04 23:57:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admintbl
-- ----------------------------
DROP TABLE IF EXISTS `admintbl`;
CREATE TABLE `admintbl` (
  `AdminID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `SaltedPassword` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `MainAdmin` int(1) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admintbl
-- ----------------------------
INSERT INTO `admintbl` VALUES ('1', '1', '0a7675b497c9e79aa2ddd1dbd39ed429b54bc044f704d85b4427ff23f35df299fcae46a6d86d6e900da432d59fd731ab6a643cea23de2d59ac7274209962b3fd', '59eba39dc8615e72ae9b7a0d76b06fc99aace644b3460c7b0a2b0d8c236663733e2ad0df55ea18a352a3c015355b362655ed563f1164c3682b6742a2fb438b85', 'Mark Joseph', 'Flaviano', 'Cinco', 'Janitor', '2890 A. Pablo St. Karuhatan, Valenzuela City.', '09355585931', '1');
INSERT INTO `admintbl` VALUES ('2', 'mark', 'mark', '', 'mark', 'mark', 'mark', 'mark', 'asa', '', '0');
INSERT INTO `admintbl` VALUES ('3', 'asdasd', 'asdasd', '', 'asdasd', 'asdad', 'asda', 'dada', 'adada', 'dad', '0');
INSERT INTO `admintbl` VALUES ('4', 'saf', 'fasfasfas', '', 'faf', 'afaf', 'afa', 'tagahugas pinggan', 'dads', 'adadsa', '0');
INSERT INTO `admintbl` VALUES ('5', 'asdasda', 'dasda', '', 'dsada', 'sdad', 'adsad', 'ada', 'adaddasd', 'adsad', '0');
