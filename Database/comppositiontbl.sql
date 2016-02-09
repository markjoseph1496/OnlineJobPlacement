/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-09 16:33:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comppositiontbl
-- ----------------------------
DROP TABLE IF EXISTS `comppositiontbl`;
CREATE TABLE `comppositiontbl` (
  `PositionID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PostingDateFrom` varchar(255) DEFAULT NULL,
  `PostingDateTo` varchar(255) DEFAULT NULL,
  `PositionTitle` varchar(255) DEFAULT NULL,
  `PositionLevel` varchar(255) DEFAULT NULL,
  `JobDescription` varchar(255) DEFAULT NULL,
  `JSpecialization` varchar(255) DEFAULT NULL,
  `EType` varchar(255) DEFAULT NULL,
  `AvPosition` varchar(255) DEFAULT NULL,
  `MonthlySalary` varchar(255) DEFAULT NULL,
  `YExperience` varchar(255) DEFAULT NULL,
  `RelatedCourses` varchar(255) DEFAULT NULL,
  `DegreeLevel` varchar(255) DEFAULT NULL,
  `Languages` varchar(255) DEFAULT NULL,
  `ReqSkills` varchar(500) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PositionID`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comppositiontbl
-- ----------------------------
INSERT INTO `comppositiontbl` VALUES ('1', '2', null, '2016-01-19', '2016-01-30', 'Store Managers', 'Senior Manager', 'Responsible for ensuring the success of store operations in ter', 'Marketing / Brand Management', 'Full Time', '4', '15,000 - 20,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Dota 2, LOL, CS GO', null);
INSERT INTO `comppositiontbl` VALUES ('2', '2', null, '2016-01-19', '2016-01-30', 'Management', 'Manager', 'GOMECO GROUP OF COMPANIES is currently looking for high performing, ', 'Manufacturing/Production Operatio', 'Full Time', '2', '20,000 - 25,000', '3', 'ABCOMM, BSITDA, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('3', '2', null, '2016-01-19', '2016-01-30', 'Purchasing Assistant', 'Top Level Management', 'Reporting to the Purchasing Manager, this role will be supporting the', 'BPO/Call Center', 'Full Time', '2', '15,000 - 20,000', '1', 'ABCOMM, BSITDA, BSHRM, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('4', '2', null, '2016-01-19', '2016-01-31', 'Purchasing Officer', 'Sernior Executive / Supervisor', 'The Purchasing Officer is responsible for acquiring good and services', 'Purchasing/Inventory/Material and Warehouse Management', 'Full Time', '4', '20,000 - 25,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('5', '2', null, '2016-01-19', '2016-01-31', 'RDU Assistants', 'Top Level Management', 'Checks and ensures area is ready for actual receiving', 'Sales - Corporate / B2B', 'Full Time', '1', '20,000 - 25,000', '1', 'ABCOMM, BSITDA, BSHRM, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('6', '3', null, '2016-01-19', '2016-01-31', 'Technical Support Representative', 'Sernior Executive / Supervisor', ' is one of the leading Call Centers providing superior', 'IT/Computer - Hardware', 'Full Time', '5', '30,000 - 40,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('7', '3', null, '2016-01-19', '2016-01-31', 'Team Leader', 'Trainee', 'is one of the leading Call Centers', 'IT/Computer - Software Development', 'Full Time', '2', '25,000 - 30,000', '1', 'ABCOMM, BSITDA, BSHRM, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('8', '3', null, '2016-01-19', '2016-01-31', 'Operations Supervisor', 'Junior Executive', 'superior technical support to some of the largest Web Hosting', 'IT/Computer - Software Development', 'Full Time', '3', '30,000 - 40,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('9', '3', null, '2016-01-19', '2016-01-31', 'Tech Support for Windows/Linux Based Platform', 'Sernior Executive / Supervisor', ' rapidly expanding Technical Support accounts.', 'IT/Computer - Creative Design', 'Full Time', '1', '30,000 - 40,000', '1', 'ABCOMM, BSITDA, BSHRM, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('10', '3', null, '2016-01-19', '2016-01-30', 'BUSINESS ASSOCIATES ', 'Junior Executive', 'personnel administration, supervision, continuing training ', 'IT/Computer - QA', 'Full Time', '3', '15,000 - 20,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('11', '5', null, '2016-01-19', '2016-01-31', 'Autocad Operator/ Draftsman', 'Senior Manager', 'Autocad Operator/ Draftsman', 'Agriculture/Forestry/Fisheries', 'Full Time', '2', '30,000 - 40,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('12', '4', null, '2016-01-19', '2016-01-31', 'PHP Developer', 'Manager', 'Php Developer (Customer Service Representatives)', 'IT/Computer - Software Development', 'Full Time', '1', '40,000 - 45,000', '4', 'ABCOMM, BSITDA, BSHRM, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('13', '5', null, '2016-01-19', '2016-01-31', 'ARCHITECTS ', 'Top Level Management', 'ARCHITECTS ', 'Architecture/Interior Design', 'Full Time', '6', '40,000 - 45,000', '2', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('14', '5', null, '2016-01-19', '2016-01-31', 'CIVIL ENGINEER / PROJECT COORDINATORS for Construction', 'Top Level Management', 'CIVIL ENGINEER / PROJECT COORDINATORS for Construction', 'Architecture/Interior Design', 'Full Time', '5', '40,000 - 45,000', '2', 'ABCOMM, BSITDA, BSHRM, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('15', '5', null, '2016-01-19', '2016-01-31', 'HEAVY EQUIPMENT / MECHANIC', 'Sernior Executive / Supervisor', 'HEAVY EQUIPMENT / MECHANIC', 'Architecture/Interior Design', 'Full Time', '3', '30,000 - 40,000', '3', 'ABCOMM, BSITDA, BSHRM, BSCS, BSIT', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO `comppositiontbl` VALUES ('24', '1', null, '2016-01-02', '2016-12-30', 'dsadasda', 'Sernior Executive / Supervisor', 'sadas', 'Customer Service', 'Full Time', '3', '25,000 - 30,000', '7', 'ABCOMM, BSITDA, BSHRM, BSIT', 'Bachelor Degree, Masteral Degree', 'asd', 'qweqwe, qweqwe', null);
INSERT INTO `comppositiontbl` VALUES ('25', '1', null, '2016-01-12', '2016-01-30', 'eee', 'Fresh / Entry Level', 'eeeeee', 'Design and Development', 'Full Time', '23', '15,000 - 20,000', '9', 'BSITDA, BSCPE, BSCS', 'Bachelor Degree', 'qwe, qwewq, qweqwe', 'qwewq, eee, qq', null);
INSERT INTO `comppositiontbl` VALUES ('26', '1', null, '2016-01-30', '2016-02-06', 'Accounting Supervisor', 'Top Level Management', 'We are a leading manufacturer an', 'Banking/Financial Services', 'Full Time', '2', '20,000 - 25,000', '2', 'BSAT, BSCS', 'Bachelor Degree', 'english', 'Accountancy/Management , Preferably Supervisor ', null);
INSERT INTO `comppositiontbl` VALUES ('27', '1', null, '2016-01-30', '2016-02-06', 'AUDIT ASSISTANT', 'Senior Manager', 'We are a leading manufa', 'Actuarial Science/Statistics', 'Full Time', '3', '10,000 - 15,000', '2', 'BSBM, BSAT', 'Bachelor Degree', 'english', 'Sales, Financial/Inventory', null);
INSERT INTO `comppositiontbl` VALUES ('28', '1', null, '2016-01-30', '2016-02-06', 'Accounting Clerk', 'Manager', 'We are a leading ma', 'Aviation/Aircraft Maintenance', 'Full Time', '2', '40,000 - 45,000', '3', 'ABCOMM, BSHRM, BSCS', 'Bachelor Degree', 'english', '	Accounting , General Accounting', null);
INSERT INTO `comppositiontbl` VALUES ('29', '1', null, '2016-01-30', '2016-02-06', 'AUDIT STAFF', 'Sernior Executive / Supervisor', 'asfgagagfasdfasfasfas', 'Arts and Design', 'Full Time', '4', '10,000 - 15,000', '18', 'BSHRM, BSIT, BSBM', 'Bachelor Degree', 'english', '	Accounting	, Financial Controller', null);
INSERT INTO `comppositiontbl` VALUES ('30', '2', null, '2016-01-30', '2016-02-06', 'MARKETING OFFICER', 'Top Level Management', '*Only shortlisted candidates will be notified.', 'Corporate Strategy/Top Management', 'Full Time', '2', '15,000 - 20,000', '15', 'BSAT, BSCS, BSHRM', 'Bachelor Degree', 'english', 'Excellent communication ,  interpersonal skills', null);
INSERT INTO `comppositiontbl` VALUES ('31', '2', null, '2016-01-30', '2016-02-06', 'Marketing Assistant', 'Sernior Executive / Supervisor', 's who will join our dynamic winning team.', 'Arts and Design', 'Contract', '2', '30,000 - 40,000', '17', 'BSITDA, BSIT, ABCOMM', 'Bachelor Degree', 'english', 'Conduct Market Research, eep abreast of mar', null);
INSERT INTO `comppositiontbl` VALUES ('32', '2', null, '2016-01-30', '2016-02-06', 'CAMPAIGN PLANNING ASSISTANTS', 'Sernior Executive / Supervisor', 'CAMPAIGN PLANNING ASSISTANTS', 'Architecture/Interior Design', 'Full Time', '2', '20,000 - 25,000', '3', 'BSBM, BSAT, BSCS, BSIT', 'Masteral Degree', 'english', 'Exposure to the field of fashion , Must be creative, resourceful', null);
INSERT INTO `comppositiontbl` VALUES ('33', '3', null, '2016-01-30', '2016-02-06', 'IT Administrator', 'Top Level Management', 'IT Administrator', 'IT/Computer - Project Management', 'Full Time', '2', '45,000 - 50,000', '4', 'BSCS, BSITDA, BSHRM', 'Masteral Degree', 'english', 'Mastery of Networking topic,, Cisco configurations', null);
INSERT INTO `comppositiontbl` VALUES ('34', '3', null, '2016-01-30', '2016-02-06', 'Junior System Administrators', 'Junior Executive', 'Junior System Administrators', 'IT/Computer - QA', 'Full Time', '1', '30,000 - 40,000', '13', 'BSIT, BSAT, BSHRM', 'Bachelor Degree', 'english', 'Basic Linux Server , Basic Firewall understanding', null);
INSERT INTO `comppositiontbl` VALUES ('35', '3', null, '2016-01-30', '2016-02-06', 'Customer Service Representative', 'Senior Manager', 'Customer Service Representative', 'IT/Computer - Software Development', 'Full Time', '2', '30,000 - 40,000', '4', 'BSCS, BSIT, BSCPE, BSBM', 'Bachelor Degree', 'Excellent verbal and written English', 'Technical experience, BIG Sales Commissions', null);
INSERT INTO `comppositiontbl` VALUES ('36', '4', null, '2016-01-30', '2016-02-06', 'Call Center Agents', 'Top Level Management', 'Call Center Agents', 'Costing Management', 'Part Time', '1', '25,000 - 30,000', '5', 'BSIT, BSCS, BSIT, BSAT', 'Bachelor Degree', 'Excellent verbal and written English.', '	Admin & HR, Information Technology (IT, General Sales, CS & Business Devpt', null);
INSERT INTO `comppositiontbl` VALUES ('37', '4', null, '2016-01-30', '2016-02-06', 'Technical Support Associate', 'Sernior Executive / Supervisor', 'Technical Support Associate', 'Engineering - Oil/Gas', 'Full Time', '2', '30,000 - 40,000', '3', 'BSCS, BSAT, BSBM, BSHRM', 'Bachelor Degree', 'english', '	Sales, CS & Business Devpt,  Telecommunications Technical support', null);
INSERT INTO `comppositiontbl` VALUES ('38', '4', null, '2016-01-30', '2016-02-06', 'Tech Support for Windows/Linux Based Platform', 'Senior Manager', 'Tech Support for Windows/Linux Based Platform', 'IT/Computer - Software Development', 'Full Time', '2', '30,000 - 40,000', '5', 'BSCS, BSIT, BSCPE', 'Bachelor Degree', 'english', '	Information Technology, Programming,  Application / Software', null);
INSERT INTO `comppositiontbl` VALUES ('39', '5', null, '2016-01-30', '2016-02-06', 'ELECTRICAL ENGINEER', 'Top Level Management', 'ELECTRICAL ENGINEER', 'Engineering - Civil/Construction/Structural', 'Full Time', '2', '40,000 - 45,000', '1', 'BSCPE, BSHRM', 'Bachelor Degree', 'english', '	Manpower, Personnel Recruitment', null);
INSERT INTO `comppositiontbl` VALUES ('40', '5', null, '2016-01-30', '2016-02-06', 'CIVIL ENGINEER', 'Manager', 'CIVIL ENGINEER', 'Engineering - Civil/Construction/Structural', 'Full Time', '2', '30,000 - 40,000', '7', 'BSCPE, BSIT, BSAT, BSCS', 'Bachelor Degree', 'english', 'Civil / Structural / Industrial, Personnel Recruitment', null);
INSERT INTO `comppositiontbl` VALUES ('41', '5', null, '2016-01-30', '2016-02-06', 'Quality Management Supervisor', 'Sernior Executive / Supervisor', 'Quality Management Supervisor', 'Engineering - Chemical', 'Full Time', '3', '40,000 - 45,000', '2', 'BSITDA, BSCS, BSIT', 'Bachelor Degree', 'english', 'Proficient with MS Office programs, Mechanical,', null);
INSERT INTO `comppositiontbl` VALUES ('42', '6', null, '2016-01-30', '2016-02-06', 'GRAPHIC ASSISTANT', 'Top Level Management', 'GRAPHIC ASSISTANT', 'Arts and Design', 'Full Time', '2', '30,000 - 40,000', '3', 'ABCOMM, BSITDA, BSIT, BSCS', 'Bachelor Degree', 'english', 'will provide assistance with basic design work, brochures', null);
INSERT INTO `comppositiontbl` VALUES ('43', '6', null, '2016-01-30', '2016-02-06', 'ARCHITECT', 'Top Level Management', 'ARCHITECT', 'Arts/Creative/Graphics Design', 'Full Time', '2', '20,000 - 25,000', '4', 'ABCOMM, BSCS, BSIT, BSAT', 'Bachelor Degree', 'english', 'Must be a Licensed Architect, 	Manpower , Architectural Services Design', null);
INSERT INTO `comppositiontbl` VALUES ('44', '6', null, '2016-01-30', '2016-02-06', 'Graphic Artist', 'Fresh / Entry Level', 'Graphic Artist', 'Arts/Creative/Graphics Design', 'Full Time', '2', '25,000 - 30,000', '4', 'BSITDA, BSCS, BSIT, BSAT', 'Bachelor Degree', 'english', ' Knowledgeable in Adobe Photo Shop, With experience as Graphic Artist', null);
INSERT INTO `comppositiontbl` VALUES ('45', '6', null, '2016-01-30', '2016-02-06', 'CREATIVE ARTIST', 'Manager', 'CREATIVE ARTIST', 'Arts and Design', 'Full Time', '2', '25,000 - 30,000', '6', 'ABCOMM, BSITDA, BSAT, BSCS', 'Bachelor Degree', 'english', 'graduate of  Fine Arts/ Industrial Design/Advertising, familiar w/ Auto cad, 	Media & Advertising ', null);
INSERT INTO `comppositiontbl` VALUES ('46', '1', null, '2016-02-09', '2016-02-24', 'asdasd', 'Fresh / Entry Level', 'asdasdasd', 'Customer Service', 'Full Time', '1', '30,000 - 40,000', '13', null, 'Bachelor Degree', 'asdad', 'asdasd', null);
INSERT INTO `comppositiontbl` VALUES ('47', '1', null, '2016-02-09', '2016-02-23', 'asdasd', 'Top Level Management', 'asdasd', 'Design and Development', 'Part Time', '12', '40,000 - 45,000', '14', null, 'Bachelor Degree', 'adsasda', 'asdasdad', null);
INSERT INTO `comppositiontbl` VALUES ('48', '1', null, '2016-02-09', '2016-02-16', 'asdasd', 'Fresh / Entry Level', 'asdasdasd', 'Customer Service', 'Full Time', '1', '15,000 - 20,000', '9', null, 'Bachelor Degree', 'asd', 'asdasd', null);
INSERT INTO `comppositiontbl` VALUES ('49', '1', null, '2016-02-09', '2016-02-16', 'asdasd', 'Fresh / Entry Level', 'asdasdasd', 'Customer Service', 'Full Time', '1', '15,000 - 20,000', '9', null, 'Bachelor Degree', 'asd', 'asdasd', null);
INSERT INTO `comppositiontbl` VALUES ('50', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, null);
INSERT INTO `comppositiontbl` VALUES ('51', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, null);
INSERT INTO `comppositiontbl` VALUES ('52', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, null);
INSERT INTO `comppositiontbl` VALUES ('53', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, null);
INSERT INTO `comppositiontbl` VALUES ('54', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, 'Array');
INSERT INTO `comppositiontbl` VALUES ('55', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, 'Array');
INSERT INTO `comppositiontbl` VALUES ('56', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, 'Array');
INSERT INTO `comppositiontbl` VALUES ('57', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, 'Array');
INSERT INTO `comppositiontbl` VALUES ('58', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, null, null, 'asdasd');
INSERT INTO `comppositiontbl` VALUES ('59', '1', null, '', '', '', '', '', '', '', '', '', '', null, null, 'ssss', 'asdasd', 'aaaaa');
