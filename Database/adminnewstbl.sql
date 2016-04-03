/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u305071956_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-04-03 20:17:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for adminnewstbl
-- ----------------------------
DROP TABLE IF EXISTS `adminnewstbl`;
CREATE TABLE `adminnewstbl` (
  `NewsID` int(11) NOT NULL AUTO_INCREMENT,
  `AdminID` varchar(255) DEFAULT NULL,
  `NewsTitle` varchar(255) DEFAULT NULL,
  `NewsDate` varchar(255) DEFAULT NULL,
  `NewsLocation` varchar(255) DEFAULT NULL,
  `NewsCaption` varchar(255) DEFAULT NULL,
  `ProfileImages` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`NewsID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adminnewstbl
-- ----------------------------
INSERT INTO `adminnewstbl` VALUES ('2', '1', 'aaaa', '2016-04-05', 'ssss', 'ddddd', 'ProfileImages/30b04a043a318e23b256d95a40d43d370a147eab53147787e9609b61409acdca812f0d66cb47a76588047443b6c5bde24bdec4703df2c38f2ee9d1831a315847.jpg');
INSERT INTO `adminnewstbl` VALUES ('3', '1', 'qqqq', '2016-04-06', 'wwww', 'eeee', 'ProfileImages/d6250960a4dacbc6b8c65cadcd6a67c205f9a5007236622d3270c59885b641fe2168da5fd0032f7c898e1cff620646d8447b5992bb055f970af3eba1565bee16.png');
