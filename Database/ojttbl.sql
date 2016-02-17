/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : 127.0.0.1:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-02-18 02:05:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ojttbl
-- ----------------------------
DROP TABLE IF EXISTS `ojttbl`;
CREATE TABLE `ojttbl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(11) NOT NULL,
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
  `AdviserID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ojttbl
-- ----------------------------
INSERT INTO `ojttbl` VALUES ('1', '0082A101278', 'ADRALES', 'ANNA MELISSA ', 'SANTOS', 'BSHRM', 'Malabon Grand Hotel and Casino', '110 Mc Arthur Highway Potrero Malabon City', 'Mr. Miko Orante', 'Senior Hotel Manager', '', null, 'Incomplete', 'ok', 'ok', 'ok', 'off', 'ok', 'off', 'off', 'off', null);
INSERT INTO `ojttbl` VALUES ('2', '820120152', 'ARANAS', 'JAMIL', 'DORADO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, 'Incomplete', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', null);
INSERT INTO `ojttbl` VALUES ('3', '820120677', 'BAÑAL', 'CRISANTA', 'ABELARDE', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('4', '820120652', 'CO', 'CARMENZITADEL', 'PADUA', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('5', '820120678', 'DIMLA', 'RORIKO ', 'CLEOFAS', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('6', '820130763', 'EDEM', 'ANN GELIE', 'SAPLALA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('7', '820131674', 'ESTILLORE', 'LADY ANN', 'TEMARIO', 'BSHRM', 'Manila Crown Palace Hotel', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('8', '820110122', 'FAJARDO', 'LOVELY JOYCE', 'BORJA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('9', '820120896', 'GALANG', 'ARMAN', 'MIRANDA', 'BSHRM', 'La  breza hotel', '155 Mother Ignacio St. Brgy South Triangle Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('10', '820120410', 'GOMEZ', 'AMIEL', 'UY', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('11', '820120625', 'GONZALES', 'CLARENCE JAZMINE', 'CARRERAS', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('12', '820120648', 'LACIBAL', 'NIÑA', 'POLICARPIO', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('13', '820120382', 'LEGASPI', 'IMERRIE MARTIN', '', 'BSHRM', 'La breza Hotel', '155 Mother Ignacio St. Brgy South Triangle', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('14', '820120553', 'LISING', 'CAMILLE JOY', 'BARANDOC', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('15', '820120905', 'MALLARI', 'KRISTIAN', 'MARASIGAN', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('16', '820120942', 'MANALAYSAY', 'GRACE CAMILLE', 'PAGUIA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('17', '820121081', 'MERCADO', 'DIVINE', 'MAXIMO', 'BSHRM', 'Imperial Palace Suites', 'South Triangle, Diliman Quezon City ', 'Mr. Kenneth Ongelico', 'Admin Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('18', '820120857', 'RAMOS', 'SARAH MAE', 'GATAN', 'BSHRM', 'La breza Hotel', '155 Mother Ignacio St. Brgy South Triangle, Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('19', '820121392', 'REYES', 'GRACE ANN', 'LACUATA', 'BSHRM', 'Imperial Palace Suites', 'South Triangle, Diliman Quezon City ', 'Mr. Kenneth Ongelico', 'Admin Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('20', '820120893', 'RUBIO', 'MA. CONSUELO', 'MILAN', 'BSHRM', 'La Breza Hotel', '155 Mother Ignacio St. Brgy South Triangle, Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('21', '14820120113', 'TANEO', 'DEMI JANE', 'FRANCISCO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('22', '820120882', 'VERBA', 'JONATHAN', 'TING', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('23', '820120599', 'Losa', 'Paulo', 'A', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('24', '820120147', 'Socito', 'Roy', 'E', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('25', '820120704', 'BERNAL', 'MA. VANESSA ', 'SOLIMAN', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('26', '820131768', 'ABADICIO', 'ARVIE', 'DICHE', 'BSHRM', 'KAMAYAN SAISAKI DADS WEST AVENUE', '#15 West Avenue Quezon City', 'Ms. Emily Gonzales', 'HR Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('27', '820131729', 'ANGELES', 'ROMNICK', 'ROBLES', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('28', '820131774', 'ASUNCION', 'THOMAS BERNARD', 'ASONZA', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('29', '00820130311', 'BALASON', 'WILLIAM JAY', 'BAUTISTA', 'BSHRM', 'KAMAYAN SAISAKI DADS WEST AVENUE', '#15 West Avenue Quezon City', 'Ms. Emily Gonzales', 'HR Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('30', '820131758', 'BALUYOT', 'JOHN CHRISTIAN', 'PAGULAYAN', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('31', '00820121357', 'FAUSTO', 'KING MIKAR', 'LACSAMANA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('32', '820121126', 'GERONIMO', 'ALDRIN JOHN', 'PASCO', 'BSHRM', 'THE NETWORLD HOTEL ROXA BLVD.', 'Roxas Boulevard Cor. Sen. Gil Puyat Avenue, Pasay City', 'Ms. Janet Reyes', 'HR Officer', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('33', '820131607', 'IGNACIO', 'MARY ROSE', 'TORRALBA', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('34', '820131421', 'JUNIO', 'GIO NIÑO', 'MERCADO', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('35', '820130936', 'LLAMAS', 'ALMIRA', 'GUEVARRA', 'BSHRM', 'YAKIMIX RESTAURANT SM CITY NORTH', 'Ground floor 143 SM City North Edsa, Quezon City', 'Mr. Normand Peralta', 'Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('36', '820131704', 'MACABENTA', 'IMMACULATE', 'IBABAO', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('37', '820111196', 'RODRIGUEZ', 'HANS EDISON', 'STA ANA', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('38', '820110407', 'ARDEÑA', 'JASPER ', 'ANGELES', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('39', '0082A120555', 'BACONGGOL', 'CORAZON', 'AGAO', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('40', '820120677', 'BAÑAL', 'CRISANTA', 'ABELARDE', 'BSHRM', 'ATRIUM HOTEL MANILA', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('41', '820131425', 'BERMUDEZ', 'ALJAY', 'SUYAT', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('42', '820100851', 'DE JESUS', 'REYNIE', 'CALDERON', 'BSHRM', 'MALABON GRAND HOTEL AND CASINO', '110 Mc Arthur Highway Potrero Malabon City', 'Mr. Miko Orante', 'Senior Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('43', '820120868', 'DELA ROSA', 'MARIE ANNE', 'BON', 'BSHRM', 'ATRIUM HOTEL MANILA', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('44', '820120567', 'DIWA', 'JESSICA AIKA', 'DIAZ', 'BSHRM', 'PALM NOUVEAU SCHOOL OF HM MANILA', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('45', '820080219', 'DUGUILES', 'KRISTINE MAE', ' ABES', 'BSHRM', 'GRAN PRIX MANILA', 'Tesoro Building, 1325 Mabini St, Ermita, Manila, 1004 ', 'Ms. Regina Villagracia', 'Sales And  Marketing Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('46', '820130763', 'EDEM', 'ANN GELIE', 'SAPLALA', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('47', '820121115', 'ESILIO', 'JHOYMARIE', 'TUYAY', 'BSHRM', 'IMPERIAL PALACE SUITES QUEZON CITY', 'South Triangle, Diliman, Quezon City ', 'Mr. Kenneth Ongelico', 'Admin Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('48', '820131747', 'FELIPE', ' JOEDDIE', 'ABRINA', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('49', '820101325', 'GADORES', 'FELISSE MARIE', 'ECALNE', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('50', '820120929', 'LACUROM', 'CHRISTIAN JAYE', 'BAYADOG', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('51', '820120455', 'LANUZA', 'ZARAH', 'ANTONIO', 'BSHRM', 'CITY GARDEN SUITES MANILA', '1158 A. Mabini St. Ermita,Manila City', 'Mr. Elmer B. Gapusan', 'Training Director', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('52', '820120599', 'LOSA', 'PAULO', 'ARAZA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('53', '820141762', 'LUSUNG', 'KRISTINE', 'FRANCISCO', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('54', '820121148', 'MAS', 'GEZLER', 'MADRIÑAL', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('55', '820131748', 'MOLINA', 'SHAIRA KARL', 'SALE', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('56', '820131746', 'REGINALDO', 'MARVIN', 'IBASCO', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('57', '0082A120706', 'ROYO', 'JUNRHEY', 'SAB', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('58', '820120893', 'RUBIO', 'MA. CONSUELO', 'MILAN', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('59', '820120888', 'SARDILLAS', 'JENNIFER', 'TICAL', 'BSHRM', 'LA BREZA QUEZON CITY', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('60', '820121537', 'SISON', 'ARTHUR ALLEN', 'BUSTAMANTE', 'BSHRM', 'FRASER PALACE MANILA', 'Forbes Tower, Valero Street, Salcedo Village, Makati City', 'Mr. Ramil Anzaldo', 'HR Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('61', '820110429', 'GO', 'KRISSHA ALYANNA', 'MERLIN', 'BSHRM', 'V HOTEL MALATE', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('62', '820110099', 'MANALO', 'MAREN GRACE', 'ALVARADO', 'BSHRM', 'V HOTEL MALATE', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('63', '820120635', 'ALMOJUELA', 'NUMER', 'JABAGAT', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('64', '820120282', 'BENOSA', 'JOSHUA', 'BAUTISTA', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('65', '820120194', 'BENSING', 'RODEL', 'AMALIAN', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('66', '820120229', 'BESANA', 'SHARMAINE', 'HIBE', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('67', '820120302', 'CARDANO', 'JIO', 'ASA', 'BSHRM', 'MICROTEL MOA', 'Coral Way ave. Corner Seaside Boulevard SM Mall Of Asia Complex', 'Ms. Glaiza Mella', 'HR Specialist', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('68', '820120128', 'DACUBA', 'ANALYN', 'FORTES', 'BSHRM', 'PARAGON TOWER HOTEL ERMITA', '531 A. Flores St., Ermita, Manila City', 'Ms. Donna Silverio', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('69', '820120868', 'DELA ROSA', 'MARIE ANNE', 'BON', 'BSHRM', 'ATRIUM HOTEL PASAY', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('70', '820120880', 'DELOS SANTOS', 'KRIZIA ANNE', 'BATHAN', 'BSHRM', 'ATRIUM HOTEL PASAY', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('71', '820120477', 'DITAN', 'JOHN MICHAEL', 'NONLES', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('72', '820120352', 'DONEZA', 'JERIKA', 'CUEVAS', 'BSHRM', 'PEARL GARDEN HOTEL', '1700 M. Adriatico St. Cor Gen. Malvar St. Malate', 'Ms. Aileen Ilagan', 'Resident Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('73', '820120669', 'ESTRADA', 'ANTHONY', 'LOMIBAO', 'BSHRM', 'MICROTEL MOA', 'Coral Way ave. Corner Seaside Boulevard SM Mall Of Asia Complex', 'Ms. Glaiza Mella', 'HR Specialist', '9175905892', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('74', '820120032', 'FELICIANO', 'ARVIN RYAN', 'HO', 'BSHRM', 'LUXENT HOTEL QUEZON CITY', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('75', '820101325', 'GADORES', 'FELISSE MARIE', 'ECALNE', 'BSHRM', 'HOTEL KIMBERLY MALATE', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('76', '820120234', 'GALLER', 'ARON PAUL', 'SALANGSANG', 'BSHRM', 'SEQUIOA HOTEL QUEZON CITY', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('77', '820120074', 'GAMBOA', 'CHRISTOPHER JASON', 'DONES', 'BSHRM', 'OASIS HOTEL', '1032-34 Belen St. Paco,Manila City', 'Mr. Jeffrey Miranda', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('78', '820120224', 'GONZALES', 'UZIEL', 'RODRIGUEZ', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('79', '820120223', 'GUTIERREZ JR', 'DANTE', 'CENTENO', 'BSHRM', 'MALABON GRAND HOTEL AND CASINO', '110 Mc Arthur Highway Potrero Malabon City', 'Mr. Miko Orante', 'Senior Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('80', '820121290', 'LACPAO', 'HANNA', 'AMBOS', 'BSHRM', 'NETWORLD HOTEL PASAY', 'Roxas Boulevard Cor. Sen. Gil Puyat Avenue, Pasay City', 'Ms. Carla Impon Bernido', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('81', '820120091', 'LAURENTE', 'CHARITY', 'MARUYA', 'BSHRM', 'ATRIUM HOTEL PASAY', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('82', '820120293', 'LAVADIA', 'JANETTE', 'EFONDO', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('83', '3820120029', 'LEAÑO', 'JOYMEE', 'DELA PEÑA', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('84', '820120122', 'LOPEZ', 'LECILDA', 'REGINO', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('85', '820120167', 'LOYOLA', 'ABIGAIL', 'CARABLE', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('86', '820120196', 'LOZANO', 'RIZZA MAE', 'HERNANDEZ', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, 'ok', 'ok', 'off', 'off', 'off', 'off', 'off', 'off', null);
INSERT INTO `ojttbl` VALUES ('87', '820110219', 'MACARAEG', 'JERAMIE', 'GRACE ATIENZA', 'BSHRM', 'CITY GARDEN SUITES MANILA', '1158 A. Mabini St. Ermita,Manila City', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('88', '820120220', 'MALUBAY', 'JAPHET', 'ECLEO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('89', '820120178', 'MORALES', 'HERNIEL', 'ESTRELLES', 'BSHRM', 'PEARL GARDEN HOTEL', '1700 M. Adriatico St. Cor Gen. Malvar St. Malate', 'Ms. Aileen Ilagan', 'Resident Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('90', '820131239', 'MORTIZ', 'JULIE ANN', 'BARASONA', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('91', '820120409', 'NAVAS', 'ANGELIE', 'BUHATIN', 'BSHRM', 'PEARL GARDEN HOTEL', '1700 M. Adriatico St. Cor Gen. Malvar St. Malate', 'Ms. Aileen Ilagan', 'Resident Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('92', '0082A120233', 'PACHECO', 'ABIGAIL', 'BARTOLOME', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('93', '820120934', 'PANAGSAGAN', 'ELIZABETH', 'SURITA', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('94', '820120103', 'SABERON', 'SHIENA', 'BAISAC', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('95', '0082A120093', 'SABINIANO', 'SHARLYN MAE', 'BAUTISTA', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('96', '820120020', 'SABODOGO', 'RAMARIE', 'LOTOC', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('97', '820120345', 'SALAS', 'PRINCE', 'IRIS', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('98', '820121072', 'SANDEL', 'IAN KARLO', 'PABUSTAN', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('99', '820120351', 'SANTOS', ' CERNA', 'CUTANDA', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('100', '820120888', 'SARDILLAS', 'JENNIFER', 'TICAL', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('101', '820120245', 'SEDANO', 'APRIL ROSE', 'SARGENTO', 'BSHRM', 'OAKWOOD PREMIER JOY-NOSTALG CENTER MANILA', '17 ADB Ave. Ortigas,Pasig City', 'Ms. Ivy Remulla', 'Training Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('102', '820120105', 'TORRES', 'PRINCESS DIANNE', 'CRUZ', 'BSHRM', 'HOTEL KIMBERLY MALATE', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('103', '820120212', 'UGA', 'HASELYN', 'DAGUMAN', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('104', '820120110', 'UMALI', 'JUVELYN', 'ABADIANO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('105', '820120239', 'YABUT', 'AILEEN ', 'ESPENILE', 'BSHRM', 'PARAGON TOWER HOTEL ERMITA', '531 A. Flores St., Ermita, Manila City', 'Ms. Donna Silverio', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `ojttbl` VALUES ('106', '820120085', 'YATAR', 'ERICA', 'JABON', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
