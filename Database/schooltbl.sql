/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-18 02:04:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for schooltbl
-- ----------------------------
DROP TABLE IF EXISTS `schooltbl`;
CREATE TABLE `schooltbl` (
  `SchoolID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Attainment` varchar(255) NOT NULL,
  `Course` varchar(255) NOT NULL,
  `Graduated` varchar(255) NOT NULL,
  `_Default` varchar(10) NOT NULL,
  PRIMARY KEY (`SchoolID`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schooltbl
-- ----------------------------
INSERT INTO `schooltbl` VALUES ('1', '00820120001', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', ' 2012-2016', '1');
INSERT INTO `schooltbl` VALUES ('2', '00820120002', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '04 2016', '1');
INSERT INTO `schooltbl` VALUES ('3', '00820120003', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSAT', '12 2006', '1');
INSERT INTO `schooltbl` VALUES ('4', '00820120004', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('5', '00820120005', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('6', '00820120006', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('7', '00820120007', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('8', '00820120008', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('9', '00820120009', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('10', '00820120010', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('11', '00820120011', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('12', '00820120012', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('13', '00820120013', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('14', '00820120014', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('15', '00820120015', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('16', '00820120016', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('17', '00820120017', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('18', '00820120018', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('19', '00820120019', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('20', '00820120020', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('21', '00820120021', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('22', '00820120022', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('23', '00820120023', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('24', '00820120024', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('25', '00820120025', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('26', '00820120026', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('27', '00820120027', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('28', '00820120028', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('29', '00820120029', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('30', '00820120030', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('31', '00820120031', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('32', '00820120032', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('33', '00820120033', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('34', '00820120034', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('35', '00820120035', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('36', '00820120036', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('37', '00820120037', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('38', '00820120038', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('39', '00820120039', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('40', '00820120040', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('41', '00820120041', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('42', '00820120042', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('43', '00820120043', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('44', '00820120044', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('45', '00820120045', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('46', '00820120046', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('47', '00820120047', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('48', '00820120048', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('49', '00820120049', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('50', '00820120050', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('51', '00820120051', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('52', '00820120052', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('53', '00820120004', 'asdsfds', 'Technical Vocational/Certificate', 'ASCT', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('54', '00820120053', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('55', '00820120054', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('56', '00820120055', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('57', '00820120056', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('58', '00820120057', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('59', '00820120058', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('60', '00820120059', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('61', '00820120060', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('62', '00820120061', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('63', '00820120062', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('64', '00820120063', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('65', '00820120064', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('66', '00820120065', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('67', '00820120066', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('68', '00820120067', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('69', '00820120068', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('70', '00820120069', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('71', '00820120070', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('72', '00820120071', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('73', '00820120072', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('74', '00820120073', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('75', '00820120074', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('76', '00820120075', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('77', '00820120076', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('78', '00820120077', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('79', '00820120078', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('80', '00820120079', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('81', '00820120080', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('82', '00820120081', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('83', '00820120082', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('84', '00820120083', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('85', '00820120084', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('86', '00820120085', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('87', '00820120086', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('88', '00820120087', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('89', '00820120088', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('90', '00820120089', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('91', '00820120090', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('92', '00820120091', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('93', '00820120092', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('94', '00820120093', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('95', '00820120094', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('96', '00820120095', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('97', '00820120096', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('98', '00820120097', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('99', '00820120098', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('100', '00820120099', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('101', '00820120100', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('102', '00820120101', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('103', '00820120102', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('104', '00820120103', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('105', '00820120104', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('106', '00820120105', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('107', '00820120106', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('108', '00820120107', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('109', '00820120108', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('110', '00820120109', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('111', '00820120110', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('112', '00820120111', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('113', '00820120112', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('114', '00820120113', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('115', '00820120114', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('116', '00820120115', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('117', '00820120116', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('118', '00820120117', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('119', '00820120118', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('120', '00820120119', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('121', '00820120120', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('122', '00820120121', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('123', '00820120122', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('124', '00820120123', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('125', '00820120124', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('126', '00820120125', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('127', '00820120126', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('128', '00820120127', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('129', '00820120128', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('130', '00820120129', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('131', '00820120130', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('132', '00820120131', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('133', '00820120132', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('134', '00820120133', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('135', '00820120134', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('136', '00820120135', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('137', '00820120136', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('138', '00820120137', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('139', '00820120138', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('140', '00820120139', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('141', '00820120140', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('142', '00820120141', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('153', '00820120190', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2016', '1');
INSERT INTO `schooltbl` VALUES ('144', '00820120164', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2015', '1');
INSERT INTO `schooltbl` VALUES ('152', '00820120001', 'Malinta National High School', 'High School Diploma', '', '2008 - 2012', '0');
INSERT INTO `schooltbl` VALUES ('154', '00820120191', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2016', '1');
INSERT INTO `schooltbl` VALUES ('155', '00820120192', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2016', '1');
INSERT INTO `schooltbl` VALUES ('156', '00820120051', 'asdasdasdasd', 'High School Diploma', '', '2008 - 2012', '0');
