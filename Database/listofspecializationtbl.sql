/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-02-13 01:24:26
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `listofspecializationtbl`
-- ----------------------------
DROP TABLE IF EXISTS `listofspecializationtbl`;
CREATE TABLE `listofspecializationtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Specialization` varchar(255) NOT NULL,
  `RelatedCourses` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of listofspecializationtbl
-- ----------------------------
INSERT INTO listofspecializationtbl VALUES ('1', '\r\nAdvertising/Media Planning', 'ABCOMM');
INSERT INTO listofspecializationtbl VALUES ('2', 'Arts/Creative/Graphics Design', 'ABCOMM, DMA, BSITDA');
INSERT INTO listofspecializationtbl VALUES ('3', 'Banking/Financial Services', 'BSBM, BSBA, BSAT');
INSERT INTO listofspecializationtbl VALUES ('4', 'BPO/Call Center', 'BSIT, BSCS, ASCT, BSCPE, ABCOMM');
INSERT INTO listofspecializationtbl VALUES ('5', 'Clerical/Administrative Support', 'BSAT, BSBA, BSBM');
INSERT INTO listofspecializationtbl VALUES ('6', 'Corporate Strategy/Top Management', 'BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('7', 'Costing Management', 'BSAT');
INSERT INTO listofspecializationtbl VALUES ('8', 'Customer Service/Customer Service (Technical)', 'BSCPE, BSIT, BSCS, ASCT, BSBM');
INSERT INTO listofspecializationtbl VALUES ('9', 'Design and Development', 'BSCPE, BSITDA, BSIT, BSCS, DMA');
INSERT INTO listofspecializationtbl VALUES ('10', 'Engineering - Electronics/Communication', 'BSCPE');
INSERT INTO listofspecializationtbl VALUES ('11', 'Finance - Audit/Taxation', 'BSAT');
INSERT INTO listofspecializationtbl VALUES ('12', 'Finance - Corporate \r\r\nFinance/Investment/Merchant Banking', 'BSAT, BSBA, BSBM');
INSERT INTO listofspecializationtbl VALUES ('13', 'Finance - General/Cost Accounting', 'BSAT');
INSERT INTO listofspecializationtbl VALUES ('14', 'Food/Beverage/Restaurant Service', 'BSHRM, HRS');
INSERT INTO listofspecializationtbl VALUES ('15', 'Hotel Management/Tourism Services', 'BSHRM, BSTM');
INSERT INTO listofspecializationtbl VALUES ('16', 'Human Resources', 'BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('17', 'IT/Computer - Creative Design', 'BSITDA, DMA');
INSERT INTO listofspecializationtbl VALUES ('18', 'IT/Computer - Hardware', 'BSCPE, BSCS, BSIT');
INSERT INTO listofspecializationtbl VALUES ('19', 'IT/Computer - Network/System/Database Admin', 'BSCPE, BSCS, BSIT');
INSERT INTO listofspecializationtbl VALUES ('20', 'IT/Computer - Project Management', 'BSIT, BSCS');
INSERT INTO listofspecializationtbl VALUES ('21', 'IT/Computer - Software Development', 'BSCPE, BSCS, BSIT');
INSERT INTO listofspecializationtbl VALUES ('22', '\r\nJournalist/Editor', 'ABCOMM');
INSERT INTO listofspecializationtbl VALUES ('23', 'Manufacturing/Production Operation', 'BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('24', 'Marketing / Brand Management', 'BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('25', 'Marketing/Business Development', 'BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('26', 'Merchandising', 'BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('27', 'Project Management', 'BSCPE, BSCS, BSIT');
INSERT INTO listofspecializationtbl VALUES ('28', 'Public Relations/Communications', 'ABCOMM');
INSERT INTO listofspecializationtbl VALUES ('29', 'Sales - Engineering/Technical/IT', 'BSCPE, BSCS, BSIT');
INSERT INTO listofspecializationtbl VALUES ('30', 'Sales - Financial Services (Insurance, Unit Trust, \r\r\netc)', 'BSAT, BSBM, BSBA');
INSERT INTO listofspecializationtbl VALUES ('31', 'Secretarial/Executive and Personal Assistant', 'BSAT, BSBA, BSBM, ABCOMM, BSHRM');
INSERT INTO listofspecializationtbl VALUES ('32', 'Stockbroking', 'BSAT');
INSERT INTO listofspecializationtbl VALUES ('33', 'Technical and Helpdesk Support', 'BSIT, BSCS, BSBM');
