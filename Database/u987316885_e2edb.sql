/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-02-17 23:06:28
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `achievementstbl`
-- ----------------------------
DROP TABLE IF EXISTS `achievementstbl`;
CREATE TABLE `achievementstbl` (
  `AchievementID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Achievements` varchar(255) NOT NULL,
  PRIMARY KEY (`AchievementID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of achievementstbl
-- ----------------------------
INSERT INTO achievementstbl VALUES ('1', '00820120004', 'dfsdfs');
INSERT INTO achievementstbl VALUES ('2', '00820120001', 'asdasdas');
INSERT INTO achievementstbl VALUES ('3', '00820120001', 'asdsadsadas');

-- ----------------------------
-- Table structure for `admineventtbl`
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
INSERT INTO admineventtbl VALUES ('1', '1', 'asdasd', '2016-02-04', '2016-02-25', 'asdasd', 'asdasdad', null, null);

-- ----------------------------
-- Table structure for `admintbl`
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
  `Usertype` varchar(255) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admintbl
-- ----------------------------
INSERT INTO admintbl VALUES ('1', 'markjoseph1496', '0a7675b497c9e79aa2ddd1dbd39ed429b54bc044f704d85b4427ff23f35df299fcae46a6d86d6e900da432d59fd731ab6a643cea23de2d59ac7274209962b3fd', '59eba39dc8615e72ae9b7a0d76b06fc99aace644b3460c7b0a2b0d8c236663733e2ad0df55ea18a352a3c015355b362655ed563f1164c3682b6742a2fb438b85', 'Mark Joseph', 'Flaviano', 'Cinco', 'Janitor', '2890 A. Pablo St. Karuhatan, Valenzuela City.', '09355585931', 'Admin');
INSERT INTO admintbl VALUES ('13', '1', '16d917462347d622d56f4269bf74e305dbdc14294e159efe502679eee9df8f49009ca5897ada300ea757d0e0e561187b1d17713e1a561dd6247829155f6c312c', '4a800106f6fa85d4053db33f3f6dce2439efdb6a13d28caae8c2d9694c70084d36b53fed0240277512430e6cf662cdedf0e5533a9e9703aee3b4207ddfdf1f74', 'adsadsad', 'sadsa', 'dsasad', 'dsad', 'sadsadsa', '123421312', 'Adviser');

-- ----------------------------
-- Table structure for `applicationtbl`
-- ----------------------------
DROP TABLE IF EXISTS `applicationtbl`;
CREATE TABLE `applicationtbl` (
  `ApplicationID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Applied` varchar(255) NOT NULL,
  PRIMARY KEY (`ApplicationID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of applicationtbl
-- ----------------------------

-- ----------------------------
-- Table structure for `certificationtbl`
-- ----------------------------
DROP TABLE IF EXISTS `certificationtbl`;
CREATE TABLE `certificationtbl` (
  `CertificationID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Certification` varchar(255) NOT NULL,
  `YearTaken` varchar(255) NOT NULL,
  PRIMARY KEY (`CertificationID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of certificationtbl
-- ----------------------------
INSERT INTO certificationtbl VALUES ('1', '00820120004', 'sfsdfds', '2015');
INSERT INTO certificationtbl VALUES ('2', '00820120001', 'Graduate of Computer Science', '2014');
INSERT INTO certificationtbl VALUES ('3', '00820120001', 'Technician', '2014');

-- ----------------------------
-- Table structure for `companyinfotbl`
-- ----------------------------
DROP TABLE IF EXISTS `companyinfotbl`;
CREATE TABLE `companyinfotbl` (
  `CompanyID` int(255) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) DEFAULT NULL,
  `Description` varchar(10000) DEFAULT NULL,
  `Industry` varchar(255) DEFAULT '',
  `Classification` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `PostalCode` varchar(255) DEFAULT NULL,
  `PhoneNum` varchar(255) DEFAULT NULL,
  `MobileNum` varchar(255) DEFAULT NULL,
  `Fax` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `SaltedPassword` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `ProfileImage` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CompanyID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of companyinfotbl
-- ----------------------------
INSERT INTO companyinfotbl VALUES ('1', 'Sykes', 'aa', 'Consulting (Business and Management)', null, 'Quezon City', '1', '11', '1a', '1', 'Mark Joseph', 'Flaviano', 'Cinco', 'aa', 'asdsadasas', '1', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', 'aadsd', 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('2', 'PureGold', null, 'Commodities Production / Distribution', null, 'Caloocan City', null, null, null, null, 'Rey', '', 'Tan', 'manager', 'management', '2', 'c86d5a4a02d240e3344cdedd67e1ff9e17647d3480828665db0e1870522ada6c236fff2edfffaaa2e064cd54da1f9b8c862bbe50dd50c605be9f80d424518d5e', '2f66a73a55daff62097eacd1ad1949a16794be0c18766f5d08bbabb2f3cd4b7c0ab0c1ea8c70a7e3387e9588ed84b6985847e33bed2cf916326702eed998db49', null, 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('3', 'Millennuim', 'This account development manager sample job description can assist in your creating a job application that will attract job candidates who are qualified for the job. Feel free to revise this job description to meet your specific job duties and job requirements.', 'Computer / Information Technology (Hardware)', null, 'Caloocan City', null, null, null, null, 'Kendi', '', 'Bensurto', 'Manager', 'Management', '3', 'eb1e4ac0fb4352ea90ce3b5fcb2f9a8d812b8357994afbcd59e50472df7b5df7580efb57e49f4e216b0b392627ea02cc22c4d778b743fc960917901643b07220', '38e6ae277ba4edf23bcce814288953badde89f8d6a3dbdca204e0bcad35da5a4c2a69a3656983616f529e21c477b4fd888f68d8569897fca45b0ba53917b7722', null, 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('4', 'Concentrix', null, 'Computer / Information Technology (Software)', null, 'Navotas City', null, null, null, null, 'Oscar', 'Talusig', 'Sapinosa', 'manager', 'management', '4', 'cdad6f9440699a7c99014d355fb29ae1f915f8708a84d1b1e3f765271a1080a51a23156ec34f914bda271e968fafb636db402241f821ba9e3b6ee7330b632a65', 'd98a22c63b2b14113aa65d1e85b7fc6f35ca286ad0d4a83a461fe380fc7b6eb9b4800e6368dd8664c96198eb9b3d8c657ba59e08b167c5ce9ab5e49737503a98', null, 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('5', 'oneil associate', null, 'Architectural Services / Interior Designing', null, 'Makati City', null, null, null, null, 'Oneil', '', 'Shack', 'COE', 'head office', '5', '7db06abb97daeabe2257b85431efd2e51d834afdb2a6f04833ae5c0891f468c1c979db1f686ad3a4a1e95a9cec825aae9132377e9d8f79055470b6349a4dd8dd', '98271546b5f45d15a0944cf82f77659c8b4c596b1f44c9308316653fdcaadfcfce260954e19bd7d1e97efbb551bd0d3afde0ad55cab16456ae04a79f0298ff1c', null, 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('6', 'Judee Company', null, 'Computer / Information Technology (Hardware)', null, 'Caloocan City', null, null, null, null, 'Judee', 'Ederon', 'Caballero', 'MAY ARI', 'ICT', '6', 'd0f2386e657a703d25d0f78cb0da7acb253f401dc225f04a71b86441067c7fd122eabe04ac56fbfb6bb32f07e4ec8d5600ddf4e00070a489c75e6e07797757ce', '20e6854801be64fb05eaba64ec585de79627e597e8e058e950930cf75f6c256bf241e1b6b0a35d49fb231a920d50273d34e6f6bc2245e34367f2805d327d22ef', null, 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('8', 'SYKES Asia ', null, 'Outsourcing (Call Center / BPO', null, 'Caloocan City', null, null, '09619834761', null, 'Aimeh', 'A', 'Nono', 'HR Sourcing', 'Academic Linkages', '7', '1518d185c4a014a859b9a53f314910ca3745879ed1927886aafd092f2cd2f8a988c6e463db221674388d299143f7797d23ad856fce4cf9d64700f95879739973', '998af9f6aa64c75ef899754748183045921903b87fae7a31d32b0c60d73a2d2dd9939176cb9b52b44a1b1040d0d689467635461c2931c90aa64aa78c7d1b81c4', null, 'Active', 'ph.sykes.com', 'ProfileImage/8.jpg');
INSERT INTO companyinfotbl VALUES ('9', 'Aickman and Greene Consultant\'s Corp', null, 'Human Resources Management / Consulting', null, 'Las Piñas City', null, null, '09189365113', null, 'Tom', 'E', 'Saavedra', 'Sourcing Associate', '', '8', '3940d3741f0377b409e2c93928a849038ca77693026ff7a7961f957d6e06a10458feb71f181e8075040b95232e6c132b8d34524e8019b198ce00bb4f8aa406e0', 'e947623fc4760d932472600861090c37c5032131e72b559060d96d3be2c60b62650222f77e441cba48fbf86c49fd0798239e51a9c76b5113fdbf7b7b92fe8b63', null, 'Active', '', null);
INSERT INTO companyinfotbl VALUES ('10', 'Alorica Pacific Rim Inc.', null, 'Outsourcing (Call Center / BPO', null, 'Makati City', null, null, '09156176532', null, 'Cristalyn', 'H', 'Anteligando', 'HR Sourcing Assistant', '', '9', 'a1e0dea22707d77878654323463f77d3ece6cab0d1f5f1db661e7f93dde6f4f6e92b44d71e8c88fb0ff2cab21feb9d8419d1add523430c135650acc02e6b5e0a', '50ae6f461888838400910bba27cc2894e445d2fcdf2a61ecc341db367d268dc8c7b4a22f5c514df023e079ec81701c7f004abf348235d8405f7076af28fdd44c', null, 'Active', 'www.alorica.com', null);
INSERT INTO companyinfotbl VALUES ('11', 'Circuit Solutions Inc.', null, 'Consulting (IT, Science, Engineering and Technical)', null, 'Malabon City', null, null, '09127618117', null, 'Jenevieve', 'Y', 'Pe', 'HR Specialist', '', '10', '5dcb2e18bec27d0e455de5ec734d0fa8e36de2848a3535b306f4cb81f335d278d9b644536743db7bcac44f22b3d141e3b4cf3035f7be3c0c4705648c2e2d913e', 'f22bb3ecbec1b3576391bc44eb378e042981f3c4a62662e4dfa07552ca46d2e8925d29716c58d32ce2eff322342a6f50b41b71336d424571d67c295ee8eeeb80', null, 'Active', 'circuit-solutions.net', null);
INSERT INTO companyinfotbl VALUES ('12', 'Servflex, Inc.', null, 'Human Resources Management / Consulting', null, 'Manila', null, null, '09124153161', null, 'Sanjie', 'U', 'Esteban', 'HR Assistant', '', '11', '2b930f0ae0db47f4dffebd37c22434cca9ace6453703d8ef502b356227999e587f2732b1964f413702fdc01af162d140bc999719f1e204bd002ebe600b11f400', '76f61bc095ce7ba16664d677384107badea0800888ce3667bdfa9237d6fa4884834116e4b858f6d3572d8ebf320bc53cb877acf9a6d442b008489e5e1b9a2a3f', null, 'Active', 'https://www.facebook.com/servflex.inc?ref=hl', null);
INSERT INTO companyinfotbl VALUES ('13', 'People Depot  GMPR, Inc. ', null, 'Human Resources Management / Consulting', null, 'Mandaluyong City', null, null, '09321421561', null, 'Gerese', 'B', 'Villanueva', 'HR Assistant', '', '12', 'ecf6e90db72bea473ae335d4d5ded1229310b706aa02740af46f8c6374f58e51e83b639b3fa3f72ffbe1ca022d1b171e2df2a8641e000b130c7b5779c28288d2', '3d2f359ea8454477a7aef128f3c066e92ca3d80abd49b69f23d78435c895fc2c15ce9f7f6557bb19948cae6a3f4a39bba5bf9039f4a2b48cd8a98216f1e3bd3b', null, 'Active', 'http://people-depot.com/home/', null);
INSERT INTO companyinfotbl VALUES ('14', 'Accenture', null, 'Computer / Information Technology (Software)', null, 'Mandaluyong City', null, null, '09321512616', null, 'Minette', 'A', 'Basig', 'Analyst', '', '13', '8bead50a0f57bf77a9f07f5ee58b5ea6c7d43549303386381fe356b754e89b4b5d330e4585c4a4acfde76d3d65737ff63346536e377a62ebbd90357cb6c52ab6', '4daac22b349962a301ca3a2a1424a57842a77e1681686a7444a51f98c224db5519a79fef3ec2f83e8676afbb9fcf28b7d376787b2a11144323f2b032315251e4', null, 'Active', 'www.accenture.com', null);
INSERT INTO companyinfotbl VALUES ('15', 'Dell International Services', null, 'Outsourcing (Call Center / BPO', null, 'Muntinlupa City', null, null, '09051241512', null, 'Chris', 'K', 'Loyong', 'Talent Acquisition Advisor', '', '14', 'b19a416d36710477d11ee89b01739b63bdda28d9fa07d52f12631f9662f842c591e4469d9b7d4bc05b8b5c43dc59d3bbbe932dd0da5383f6bf849e4d12061309', '070ba4835824883323b6ad890b0f7b83571e340944ccb6c136c4e15f3ecd24d3f138d9df9059852bdf76d01eef1a50cf412f786d02c4afa00408b901d0f242ca', null, 'Active', 'jobs.dell.com/philippines', null);
INSERT INTO companyinfotbl VALUES ('16', 'Admerex Solutions Inc.', null, 'Outsourcing (Call Center / BPO', null, 'Makati City', null, null, '09062361234', null, 'Noey', 'G', 'Comentan', 'Recruitment Specialist', '', '15', '5ad7ff8539d99c0b9b4bd3ae3aa7674257e1f42da11fecb8a12145910fd39c3e82599ad36b5a647a7e46eb649e99a432d9fc745b3485075cbff856d1858cb2c5', 'eaae22decc6831af3254590588f0980a070376c4b48aaeb54325a3f4b64fd5e390b1dcfa9fa9072ed948e6d1d21c57d8cacc64d996191046fb963104250c31f1', null, 'Active', 'www.admerexsolutions.com', null);
INSERT INTO companyinfotbl VALUES ('17', 'RG Meditron Inc.', null, 'Human Resources Management / Consulting', null, 'Quezon City', null, null, '09091251276', null, 'Mary Alice', 'F', 'Villegas', 'HR Manager', '', '16', 'b002c09af8115d489f4880b7f870c174251b6a4e2d4f8a596f19104af3afb09ec038a73201955f71f5540237a1ba0acc5fd99800ccf13231f79f992cae9a553a', 'a407367a98140106a8d95d2b3c9ebf387b63c83d11ed71ca0dc987514206da031af7b520111916e8e816c0418e063a5a8b8db6afe431d596691c6587857f2417', null, 'Active', 'rg-meditron.com.ph', null);
INSERT INTO companyinfotbl VALUES ('18', 'Collabera', null, 'Human Resources Management / Consulting', null, 'Makati City', null, null, '09059186241', null, 'Camille', 'R', 'Madrinal', 'Recruitment Manager', '', 'camille.madrinal@collabera.com', '633b83f2ce7af34b9fc8f3f89e6ac4c4bcb751166785b16546a0450f6bc232d399d72556d49721a9b4b4007771936698c6c64686b0057187d8b8877f9ca2c3db', '51d1142fd6f4986aad7774aff535caefb4eedade932a4d7f1698f1224f0c6a08b59e3842983d6e38f7f9ae074bdaa37934b1f8c7fd4caa428f7f6bb8b98c1425', null, 'Active', 'www.collabera.com', null);
INSERT INTO companyinfotbl VALUES ('19', 'Pacific Hub', null, 'Outsourcing (Call Center / BPO', null, 'Makati City', null, null, '09051237678', null, 'Patrick', 'R', 'Monis', 'Sourcing', '', 'neilpatrick.monis@spi-global.com', '38582cf87c9f365358a5c1e835b6cbe7df149a7f19adcd60d584ae0b930d495a27f220c61559725fd2071b8ca22feb34d80a76e592f5f2ef890fc64ffb888522', 'c3486a0b303c57fbf9f5bc1b62140092a3f486ca8c40babae6236dd258b332384fc323fce55bd2f3b227cefea8e2db142acb1e07cf6ed9dcd3469c88aad0da4c', null, 'Active', 'www.spi-global.com', null);
INSERT INTO companyinfotbl VALUES ('20', 'Evotech', null, 'Computer / Information Technology (Software)', null, 'Malabon City', null, null, '09165986728', null, 'Famela', 'Y', 'Amor', 'HR Head', '', 'hr@evolvesoftware.com.ph', '3415d5fe96e51af9e95a7084a8e48a4f2c8f0a2c7fbf69c6d6fa34fb26bef6138c548f251b410ba90b9db4854c6575eb1262bdde15923243545db74afa80ca91', 'ef5e092e460ce74f6cbe5e70d1c3331ea75c8ab5bf21e4493536ed9f267b2ee1c5c441e28201fcad251b91a9384b7007c4a82df8c814253e951add5af0462889', null, 'Active', 'www.evolvesoftware.com.ph', null);
INSERT INTO companyinfotbl VALUES ('21', 'Benby Enterprices, Inc.', null, 'Manufacturing / Production', null, 'Quezon City', null, null, '09081237687', null, 'Jem', 'Q', 'Victorio', 'HR', '', 'mohanna.villanueva@brandlines.com.ph', 'afbd87f12c2375e563a1f21eb59587c6933b17c82534109487db751a288a13b1a22ab4303f5e6fb016ab186095143f08aae6dbee949c20244b41182c18c536c4', 'b3249d0243a87e97ec08bb6323bcbbfc80b990e8fec0e95c03b68cc853c9c283c7457bb4b357d4db48b015a161b5820d7bd7ff08255941d64432a2c2305fd571', null, 'Active', 'www.benby.com', null);
INSERT INTO companyinfotbl VALUES ('22', 'Staff Finders Inc.', null, 'Property / Real Estate', null, 'San Juan City', null, null, '09231767823', null, 'May', 'B', 'Clavecillas', 'HR', '', 'staff_findersinc@yahoo.com', '864b14584dcc3d8d65f7a55d23e381d281c97ae5250d81d5af68c8c7b6413b7e2c4a62606702e48102b20937273acb7fd60c6c1265174bcc473135f657e151bb', '32946bba651a6f2bfef72251ccbcc0395d2c7be8faae510f7d8d52bbea6b37c55c06569303c41106a5c62778e239c568afacf782a33f2eb4072250e529723296', null, 'Active', '', null);
INSERT INTO companyinfotbl VALUES ('23', 'Empire East', null, 'Property / Real Estate', null, 'Makati City', null, null, '09129861287', null, 'Phillip Patrick', 'O', 'Isidro', 'Associate Director for Sales', '', 'patrick.isidroph@yahoo.com', '21f31dda33cdf8524f04342feaf5e83c19b8eb81d8cf21b659c59652de86501ea086a477951b4a010f851b855e1806de1dcb197fb9c71eb57d51cf7e2f13a034', '710d4461b839928c998de14b8ed88ac34f5a3d088997be28c5b20713655eaf398a70d94c8fa5f6be83f556eb893822a8d3d743a3d33bed63e6700600e1520cd4', null, 'Active', 'www.empireeast.com', null);
INSERT INTO companyinfotbl VALUES ('24', 'Business Trends (A Kelly Services Company)', null, 'Human Resources Management / Consulting', null, 'Pasig City', null, null, '09051238961', null, 'Cristina Mae', 'B', 'Macam', 'HR Department', '', 'cmacam@businesstrendsph.com', '3c7ffbed593c23f7e313617e44a44f89035c9c901ea4d27d4138c894636c2b10b2451ef500936795a73ffd17f218ad18b034bff021c365a19e45305d31d8a05a', '496e376ec57ab9f41c34d5c2fc1d190e77f820fc93cfe314eb5642174f6ad081de4c03f992d8ee20cdb2c2e15bc28eef910edcbe3e35e717471aa5fab3601c5e', null, 'Active', 'http://www.kellyservices.ph', null);
INSERT INTO companyinfotbl VALUES ('25', 'Netineers Web Design', null, 'Computer / Information Technology (Software)', null, 'Quezon City', null, null, '09051238176', null, 'Clifford', 'O', 'Tan', 'Manager', '', 'info@netineers.com', 'f8e37608f12a1594c9cf62da9f81b039612a38a73fa1c8d0474e2855863ac97c0e42aa5acd49bdbf2f41f0b4f6c838560b0507422606d63444094a5629bb0d29', '4810ef1962415be5c2fee1ef6a32b2eaee526eddf14a34b96c637402fd05e126e8c75527758613d20a805b7616a573bc559c83e87f49106a93e53b0807c72bad', null, 'Active', 'www.netineers.com', null);
INSERT INTO companyinfotbl VALUES ('26', 'Job Solutions Manpower Agency', null, 'Retail / Merchandising', null, 'Makati City', null, null, '09129079862', null, 'Malou', 'C', 'Camposano', 'HR Officer', '', 'mlcamposano_jobsol@yahoo.com', 'c4343ed63766b5a82fc37e05cc91f31322616266f45ace69906182307b74bb72aff484ad7fe5a40dc278f4f39f86c3a81e0642e90b3a47aee0b947b2e28709ad', '9ed0211c143e3fd71f347974b78071d47e93b00096b5284c9c546ee366350b0a5de132bbbeaf8d5f8fb36450ddb7a8e7ae99edc3576b33413e4fd72ebe5341e3', null, 'Active', 'http://jobsolutionsmanpower.blogspot.com/2013/07/album-1.html', null);
INSERT INTO companyinfotbl VALUES ('27', 'PRU LIFE UK', null, 'Banking / Financial Services', null, 'Makati City', null, null, '09150218963', null, 'Antonio', 'T', 'Sabangan', 'Financial Advisor', '', 'antoniosabanganiii@gmail.com', 'bb56ee53440418d506dd28a5d32d6a97a9a53e5227848a88def4d73f347f71ae4b5585b7d144294a01bda2731d762374f792bd152400317ac229941ee820f178', '7bdc5ecf2ba144d7dfac74b3a32e9ee219321cdd0ce11763a77d943f8b40ff07b1b523edff84773ad0d3accf13eaf33f51ae4d75856ca6bf8de234eff96fe0af', null, 'Active', 'http://www.prulifeuk.com.ph/corp/prudential_en_ph/', null);
INSERT INTO companyinfotbl VALUES ('28', 'Boardwalk  Business Ventures', null, 'General and Wholesale Trading', null, '', null, null, '09127368112', null, 'Ken', 'T', 'Yamamura', 'HR', '', 'moncepido@boardwalk.com.ph', '80d3d80e77fe0773ae016f1fea090a13335c98fce1fc86c8deb41e14182b989c174b562dd815871e6bc77d9376115b7c1e8f43a8cbbfcaee3af4985b48bba8bd', 'f839d113c7feee189af66276bcf1db6d29011474c0cf3658a5d5c8ef65ea9db09c717f6a3e38ac325e354f700bf91fa6275170412122679b1f7b22284d0de394', null, 'Active', 'boardwalk.com.ph ', null);
INSERT INTO companyinfotbl VALUES ('29', 'CICC Holdings', null, 'Insurance', null, 'Makati City', null, null, '09120798239', null, 'Laurence', 'Q', 'Sanchez', 'Recruitment Officer', '', 'laurence.cicc@gmail.com', 'e279c8e816505c399ddac0f302861cdc6e72cb3124f589a62240ef42c3bb26ad604840c0b300851aa5e3228dabf7949f3bcc11692b14bc4e39444439f9d5d85c', '41f9c86a86d9fa8a3c227608c0a9a9bcb0463cd8da9cc042813aa6a889783172d5553843cb1c902912a2d9cf2c17d6eb8d9bbf5429216c7b88b6f2e6ae8b9337', null, 'Active', 'www.facebook.com/ciccmanpowercorp', null);
INSERT INTO companyinfotbl VALUES ('30', 'Quaerito Qualitas Inc.', null, 'Human Resources Management / Consulting', null, 'Makati City', null, null, '09158712831', null, 'Aris', 'G', 'Ocampo', 'Manager', '', 'aris.ocampo@qqi.ph', 'd8d0e9badcfc5ecd40db3dab3a1dcd9de2f5eb560a8417da49e0ee6a595f9bcf52d68296cd70473d2cb7e4b43b85ea44fdee9293a5ef8d55af8890cc26bffd1b', '12273416340b756eaa528606ee1b1f74e0007ffaae57c7dc7ea508e55d25a1cd451499a80cc16b4d477ed5d65c8a7b1621d09f8147beefb5a5f0c0b2ec3f1898', null, 'Active', 'http://q2hrs.com/', null);
INSERT INTO companyinfotbl VALUES ('31', 'LBP Service Corp', null, 'Human Resources Management / Consulting', null, 'Pasig City', null, null, '09091251289', null, 'Monina', 'N', 'Garces', 'Manager', '', 'mgarces@lbpsc.com.ph', '48b45ffd6c0f4311bb18c0d2287baa0bccaceeb35859876a5402c14730db1265e2b01c39c686c7dc99069bf20e022597799c22a216e54b81546d1240b28e8ae0', '595c44575bb2ece0a45fe1d7cd62a2342f53eb9bf1a9d22e1e915e544a3363660037976ca301746685a57b5ef8f4b8ce02931dc3867d05dc6f93ee2a5f2493a6', null, 'Active', 'www.lbpsc.com.ph', null);
INSERT INTO companyinfotbl VALUES ('32', 'Concentrix', null, 'Human Resources Management / Consulting', null, 'Manila', null, null, '09129876391', null, 'Jane', 'F', 'Santos', 'Marketing and Sourcing Associate', '', 'joanna.santos@concentrix.com', '0edd91263574f11d7d8716eae2754bb03078095029ea3ab1add64eb43698e113ec850bababb0264ef6ab401fdfe5fc0134262991e3940d3add6ea941df6d235a', '03c91d9c3261348d31b79f0677f66bd224ff6368ada3a6b0e7eef8ae85f71ccdf6e68fd496af9ed915d424307c620647aa6b78ca34719e14facf8058675d6797', null, 'Active', 'www.concentrix.com', null);
INSERT INTO companyinfotbl VALUES ('33', 'ANR Unlimited Multipurpose Cooperative', null, 'Outsourcing (Call Center / BPO', null, 'Pasay City', null, null, '09127868712', null, 'Roxanne', 'C', 'Garcia', 'Recruitment Assistant', '', 'roxanne.garcia@anrunlimited.ph', '7489786af1983f507083b97dc21c9b4f3d855fc6e5ac0581da13a682bb76279c05b630d15b392443d05ee6971bef785ab0be5fb2014f41e25de20801a3b33983', '7337860f6d5cf9e631ed2233ce47f51bf115b749530147835abeab0c98f038a265f0752674b8049071471e05af605f61a11ba54f00627ca2bce1972752af991b', null, 'Active', 'www.anrunlimited.ph', null);
INSERT INTO companyinfotbl VALUES ('34', 'Global Staff Recruitment Search Inc. ', null, 'Human Resources Management / Consulting', null, 'Quezon City', null, null, '09876762357', null, 'Juan', 'A', 'Aninion', 'Marketing Manager', '', 'global.staff@yahoo.com', 'b2ee960fa081dbbef47fead6dccc71160885a3c0822deafc02a5b24a48936f39598bab848f92269c6c7dd2149775b3a7ea450c9cc626e81ea2677180133161b1', '055afc1e1d0c73cb85b8b6bb82c36be8e8e9bd7e41d41719d4488f7d42caec450035b4cb7bf05a0552eed4fb72122e6e88a91374754f259106b01fa55ac97a8c', null, 'Active', 'www.globalstaffrecruitment.com', null);
INSERT INTO companyinfotbl VALUES ('35', 'Mirof Outsourcing Group', null, 'Human Resources Management / Consulting', null, 'Makati City', null, null, '09198265381', null, 'Sol', 'T', 'Mateo', 'Recruitment Specialist', '', 'sol.mateo@mirof.com.ph', '3bad648746cbd6d5de5304ed686a527087293f7cb4206894988f83e7b85e4d84e6e62cdc7d81567eb928a8824e1fe0208e765a71553387efe501523ce950a922', '67030a871f70887085732afeecc038370972e830008aee6618815018aa5593189098831c47158457041e0fced65478cb5aa50e672fd7fba6bdbde3c392be9b9f', null, 'Active', 'www.mirof.com', null);
INSERT INTO companyinfotbl VALUES ('36', 'Vigattin', null, 'Computer / Information Technology (Software)', null, 'Quezon City', null, null, '09812981623', null, 'Elison', 'R', 'Barcelo', 'Ceo', '', 'elisonbarcelo@vigattin.com', '785f038855996ab86b3801456042ff1c5f163594ba62bf3e158882878c2c9fb45af8d533495fe009b5d14f3af1bb624dacb80c43cda2bb721fae04c56c06f087', 'd23b1b075247a1e271ab1840419d182b368483dbb57a409838ef1ab153fbf85074879c433dabb508452e11f1488d5a1fc60641c25562dd6376c8da73d3f9d501', null, 'Active', 'www.vigattindeals.com', null);
INSERT INTO companyinfotbl VALUES ('37', 'Teledevelopment', null, 'Advertising / Marketing / Promotion / PR', null, 'Pasay City', null, null, '09187628311', null, 'Aleli', 'C', 'Buenaventura', 'Sourcing Officer', '', 'abuenaventura@teledevelopment.com', 'f2c54949d4ee5e5dcf72f9fbae20be9b6d896e18eca13cd6bdde31caac4de9ae35af16f9a22cc2868f0f830f62d84cde1de046c4b07e9904978051a03272abf5', '0292aa9d82c86da97cdc403cb7ecf0a22694513f1c546283e3de48dd58236265ef89f1afa59aae48f776acf59dcb8ad4b6b2cb5c57f0975d4763fd99608ec23e', null, 'Active', 'www.teledevelopment.com.ph', null);
INSERT INTO companyinfotbl VALUES ('38', 'BPO Career Hub', null, 'Outsourcing (Call Center / BPO', null, 'Pasig City', null, null, '09127651231', null, 'Almalyn', 'E', 'Bautista', 'Marketing Specialist', '', 'almalyn.bautista@bpocareerhub.com', 'd2d03ba9d17d34aa5fff2e88c8133407ce8112c6440e87f1ce8849f46c8f6a562b37231cdafd20872e52cc1eb045fd2d92c94618d201466ff9dc41ee0a8875fe', '5c5bbcb4f5abdc0aa4d0e5e91bf5043c3947c27b088188527a5bb08251f95aecc7a5190aa8a117829e8828307c34ec40074f929e65c9d33d2bb70ac7c34f0861', null, 'Active', 'www.bpocareerhub.com', null);
INSERT INTO companyinfotbl VALUES ('39', 'Jobs180', null, 'Arts / Design', null, 'Pasig City', null, null, '09128736182', null, 'Kaye', 'S', 'Sartorio', 'HR', '', 'kaye@jobs180.com', '6f3d3e7055b3fb7328b6e9cbc8aa212476abd1b975f37e18575ccfa8184e4ef56a78ad5980f9b7d4ae53d278f501bd1717cf5478c954b27ea3a0881f17a971c1', '1750ca2a56f87c566f839c31dc141d6f9024b3ee985a38393a0cfd8768d9582986512cc08670474f4d669c002e0470eb61174d7b30ad9505ed9fa7a3018b7b88', null, 'Active', 'www.jobs180.com', null);
INSERT INTO companyinfotbl VALUES ('40', 'SITEL Philippines', null, 'Outsourcing (Call Center / BPO', null, 'Taguig City', null, null, '09123871628', null, 'Jerrau', 'S', 'Malugao', 'Recruitment Specialist', '', 'jarreau.malugao@sitel.com', '1685caed6be1e171b4febcc1b7a9362f80832b9ad8c53fa079b599bea7359bdc946c62cc191caf14e8644cf7fe318e73da3b6a19f36abe8ca87b5ce7daa8efef', '1157e845d52bfa99105117c8ae3f288be9311111bd82acf16ec9a8cf25fc3622b176cbbe6a70a4d504cdaf39273e37e237216b9e607c93fcd7c77878be3cc7f4', null, 'Active', 'www.sitel.com', null);
INSERT INTO companyinfotbl VALUES ('41', 'MGME', null, 'Human Resources Management / Consulting', null, 'Pasay City', null, null, '09987618273', null, 'Danica', 'J', 'Manozo', 'Marketing Assistant', '', 'mgme_marketing@yahoo.com', '5718d1b143e02c470c70f63ad39ae480dafbb345da179018f20bfaaada16c5157262976be11e817dc3b1ef2b0fe2ba8d175a50ec51b973756375d1b50ac0569f', '0cbf6a3d3da93faaea2a5c14b242afdfa48ff7cd8087f047f86f69227bddf8990b188be3b3ad8d13e64591b3cb524c639c0ef3f3513132dbb0cb1fa8a6dbda25', null, 'Active', 'www.mgmemanpower.com', null);
INSERT INTO companyinfotbl VALUES ('42', 'Sun Prince TBA Corporation', null, 'General and Wholesale Trading', null, 'Pasay City', null, null, '09197687123', null, 'Ian', 'A', 'Tan', 'President', '', 'sunprince@tirecenter.com.ph', '9683f6167d67517acffd424bbbb110aeda7e1efb3aae77435b08db415d919d0c7411f2dd90ddbfd864f6a40df301ef74dd5ac92ac4f79682e72781b8b396e22d', '557ffe52d5fa11b2fb7e69c13892f9e92831cce5a260d218e72f15ea0a68d4c568cc6efb274e139c34c672b0c751dc97ab19bd9eb3e6fa7ffb11c4bb21072af3', null, 'Active', 'www.tirecenter.com.ph', null);

-- ----------------------------
-- Table structure for `compeduclvltbl`
-- ----------------------------
DROP TABLE IF EXISTS `compeduclvltbl`;
CREATE TABLE `compeduclvltbl` (
  `EducID` int(11) NOT NULL AUTO_INCREMENT,
  `PositionID` varchar(255) DEFAULT NULL,
  `EducationalLevel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EducID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of compeduclvltbl
-- ----------------------------

-- ----------------------------
-- Table structure for `compeventtbl`
-- ----------------------------
DROP TABLE IF EXISTS `compeventtbl`;
CREATE TABLE `compeventtbl` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` varchar(255) DEFAULT NULL,
  `EventTitle` varchar(255) DEFAULT NULL,
  `EventDatef` varchar(255) DEFAULT NULL,
  `EventDatet` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EventID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of compeventtbl
-- ----------------------------

-- ----------------------------
-- Table structure for `comppositiontbl`
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
  `DegreeLevel` varchar(255) DEFAULT NULL,
  `Languages` varchar(255) DEFAULT NULL,
  `ReqSkills` varchar(500) DEFAULT NULL,
  `Tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PositionID`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comppositiontbl
-- ----------------------------
INSERT INTO comppositiontbl VALUES ('1', '2', null, '2016-01-19', '2017-03-15', 'Store Managers', 'Senior Manager', 'Responsible for ensuring the success of store operations in ter', 'Marketing / Brand Management', 'Full Time', '4', '15,000 - 20,000', '2', null, null, 'Dota 2, LOL, CS GO', null);
INSERT INTO comppositiontbl VALUES ('2', '2', null, '2016-01-19', '2017-03-15', 'Management', 'Manager', 'GOMECO GROUP OF COMPANIES is currently looking for high performing, ', 'Manufacturing/Production Operatio', 'Full Time', '2', '20,000 - 25,000', '3', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('3', '2', null, '2016-01-19', '2017-03-15', 'Purchasing Assistant', 'Top Level Management', 'Reporting to the Purchasing Manager, this role will be supporting the', 'BPO/Call Center', 'Full Time', '2', '15,000 - 20,000', '1', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('4', '2', null, '2016-01-19', '2017-03-15', 'Purchasing Officer', 'Sernior Executive / Supervisor', 'The Purchasing Officer is responsible for acquiring good and services', 'BPO/Call Center', 'Full Time', '4', '20,000 - 25,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('5', '2', null, '2016-01-19', '2017-03-15', 'RDU Assistants', 'Top Level Management', 'Checks and ensures area is ready for actual receiving', 'Customer Service/Customer Service (Technical)', 'Full Time', '1', '20,000 - 25,000', '1', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('6', '3', null, '2016-01-19', '2017-03-15', 'Technical Support Representative', 'Sernior Executive / Supervisor', ' is one of the leading Call Centers providing superior', 'IT/Computer - Hardware', 'Full Time', '5', '30,000 - 40,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('7', '3', null, '2016-01-19', '2017-03-15', 'Team Leader', 'Trainee', 'is one of the leading Call Centers', 'IT/Computer - Software Development', 'Full Time', '2', '25,000 - 30,000', '1', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('8', '3', null, '2016-01-19', '2017-03-15', 'Operations Supervisor', 'Junior Executive', 'superior technical support to some of the largest Web Hosting', 'IT/Computer - Software Development', 'Full Time', '3', '30,000 - 40,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('9', '3', null, '2016-01-19', '2017-03-15', 'Tech Support for Windows/Linux Based Platform', 'Sernior Executive / Supervisor', ' rapidly expanding Technical Support accounts.', 'IT/Computer - Creative Design', 'Full Time', '1', '30,000 - 40,000', '1', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('10', '3', null, '2016-01-19', '2017-03-15', 'BUSINESS ASSOCIATES ', 'Junior Executive', 'personnel administration, supervision, continuing training ', 'IT/Computer - QA', 'Full Time', '3', '15,000 - 20,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('11', '5', null, '2016-01-19', '2017-03-15', 'Autocad Operator/ Draftsman', 'Senior Manager', 'Autocad Operator/ Draftsman', 'Agriculture/Forestry/Fisheries', 'Full Time', '2', '30,000 - 40,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('12', '4', null, '2016-01-19', '2017-03-15', 'PHP Developer', 'Manager', 'Php Developer (Customer Service Representatives)', 'IT/Computer - Software Development', 'Full Time', '1', '40,000 - 45,000', '4', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('13', '5', null, '2016-01-19', '2017-03-15', 'ARCHITECTS ', 'Top Level Management', 'ARCHITECTS ', 'Architecture/Interior Design', 'Full Time', '6', '40,000 - 45,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('14', '5', null, '2016-01-19', '2017-03-15', 'CIVIL ENGINEER / PROJECT COORDINATORS for Construction', 'Top Level Management', 'CIVIL ENGINEER / PROJECT COORDINATORS for Construction', 'Architecture/Interior Design', 'Full Time', '5', '40,000 - 45,000', '2', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('15', '5', null, '2016-01-19', '2017-03-15', 'HEAVY EQUIPMENT / MECHANIC', 'Sernior Executive / Supervisor', 'HEAVY EQUIPMENT / MECHANIC', 'Architecture/Interior Design', 'Full Time', '3', '30,000 - 40,000', '3', null, null, 'Autocad. Drafting, Drawing, Desinger', null);
INSERT INTO comppositiontbl VALUES ('26', '1', null, '2016-01-19', '2017-03-15', 'Accounting Supervisor', 'Top Level Management', 'We are a leading manufacturer an', 'Banking/Financial Services', 'Full Time', '2', '20,000 - 25,000', '2', 'Bachelor Degree', 'english', 'Accountancy/Management , Preferably Supervisor ', null);
INSERT INTO comppositiontbl VALUES ('27', '1', null, '2016-01-19', '2017-03-15', 'AUDIT ASSISTANT', 'Senior Manager', 'We are a leading manufa', 'Actuarial Science/Statistics', 'Full Time', '4', '10,000 - 15,000', '2', 'Bachelor Degree', 'english', 'Sales, Financial/Inventory', null);
INSERT INTO comppositiontbl VALUES ('28', '1', null, '2016-01-19', '2017-03-15', 'Accounting Clerk', 'Manager', 'We are a leading ma', 'Aviation/Aircraft Maintenance', 'Full Time', '2', '40,000 - 45,000', '3', 'Bachelor Degree', 'english', '	Accounting , General Accounting', null);
INSERT INTO comppositiontbl VALUES ('29', '1', null, '2016-01-19', '2017-03-15', 'AUDIT STAFF', 'Sernior Executive / Supervisor', 'asfgagagfasdfasfasfas', 'Arts and Design', 'Full Time', '6', '10,000 - 15,000', '18', 'Bachelor Degree', 'english', '	Accounting	, Financial Controller', null);
INSERT INTO comppositiontbl VALUES ('30', '2', null, '2016-01-19', '2017-03-15', 'MARKETING OFFICER', 'Top Level Management', '*Only shortlisted candidates will be notified.', 'Corporate Strategy/Top Management', 'Full Time', '2', '15,000 - 20,000', '15', 'Bachelor Degree', 'english', 'Excellent communication ,  interpersonal skills', null);
INSERT INTO comppositiontbl VALUES ('31', '2', null, '2016-01-19', '2017-03-15', 'Marketing Assistant', 'Sernior Executive / Supervisor', 's who will join our dynamic winning team.', 'Arts and Design', 'Contract', '2', '30,000 - 40,000', '17', 'Bachelor Degree', 'english', 'Conduct Market Research, eep abreast of mar', null);
INSERT INTO comppositiontbl VALUES ('32', '2', null, '2016-01-19', '2017-03-15', 'CAMPAIGN PLANNING ASSISTANTS', 'Sernior Executive / Supervisor', 'CAMPAIGN PLANNING ASSISTANTS', 'Architecture/Interior Design', 'Full Time', '2', '20,000 - 25,000', '3', 'Masteral Degree', 'english', 'Exposure to the field of fashion , Must be creative, resourceful', null);
INSERT INTO comppositiontbl VALUES ('33', '3', null, '2016-01-19', '2017-03-15', 'IT Administrator', 'Top Level Management', 'IT Administrator', 'IT/Computer - Project Management', 'Full Time', '2', '45,000 - 50,000', '4', 'Masteral Degree', 'english', 'Mastery of Networking topic,, Cisco configurations', null);
INSERT INTO comppositiontbl VALUES ('34', '3', null, '2016-01-19', '2017-03-15', 'Junior System Administrators', 'Junior Executive', 'Junior System Administrators', 'IT/Computer - QA', 'Full Time', '1', '30,000 - 40,000', '13', 'Bachelor Degree', 'english', 'Basic Linux Server , Basic Firewall understanding', null);
INSERT INTO comppositiontbl VALUES ('35', '3', null, '2016-01-19', '2017-03-15', 'Customer Service Representative', 'Senior Manager', 'Customer Service Representative', 'IT/Computer - Software Development', 'Full Time', '2', '30,000 - 40,000', '4', 'Bachelor Degree', 'Excellent verbal and written English', 'Technical experience, BIG Sales Commissions', null);
INSERT INTO comppositiontbl VALUES ('36', '4', null, '2016-01-19', '2017-03-15', 'Call Center Agents', 'Top Level Management', 'Call Center Agents', 'Costing Management', 'Part Time', '1', '25,000 - 30,000', '5', 'Bachelor Degree', 'Excellent verbal and written English.', '	Admin & HR, Information Technology (IT, General Sales, CS & Business Devpt', null);
INSERT INTO comppositiontbl VALUES ('37', '4', null, '2016-01-19', '2017-03-15', 'Technical Support Associate', 'Sernior Executive / Supervisor', 'Technical Support Associate', 'Engineering - Oil/Gas', 'Full Time', '2', '30,000 - 40,000', '3', 'Bachelor Degree', 'english', '	Sales, CS & Business Devpt,  Telecommunications Technical support', null);
INSERT INTO comppositiontbl VALUES ('38', '4', null, '2016-01-19', '2017-03-15', 'Tech Support for Windows/Linux Based Platform', 'Senior Manager', 'Tech Support for Windows/Linux Based Platform', 'IT/Computer - Software Development', 'Full Time', '2', '30,000 - 40,000', '5', 'Bachelor Degree', 'english', '	Information Technology, Programming,  Application / Software', null);
INSERT INTO comppositiontbl VALUES ('39', '5', null, '2016-01-19', '2017-03-15', 'ELECTRICAL ENGINEER', 'Top Level Management', 'ELECTRICAL ENGINEER', 'Engineering - Civil/Construction/Structural', 'Full Time', '2', '40,000 - 45,000', '1', 'Bachelor Degree', 'english', '	Manpower, Personnel Recruitment', null);
INSERT INTO comppositiontbl VALUES ('40', '5', null, '2016-01-19', '2017-03-15', 'CIVIL ENGINEER', 'Manager', 'CIVIL ENGINEER', 'Engineering - Civil/Construction/Structural', 'Full Time', '2', '30,000 - 40,000', '7', 'Bachelor Degree', 'english', 'Civil / Structural / Industrial, Personnel Recruitment', null);
INSERT INTO comppositiontbl VALUES ('41', '5', null, '2016-01-19', '2017-03-15', 'Quality Management Supervisor', 'Sernior Executive / Supervisor', 'Quality Management Supervisor', 'Engineering - Chemical', 'Full Time', '3', '40,000 - 45,000', '2', 'Bachelor Degree', 'english', 'Proficient with MS Office programs, Mechanical,', null);
INSERT INTO comppositiontbl VALUES ('42', '6', null, '2016-01-19', '2017-03-15', 'GRAPHIC ASSISTANT', 'Top Level Management', 'GRAPHIC ASSISTANT', 'Arts and Design', 'Full Time', '2', '30,000 - 40,000', '3', 'Bachelor Degree', 'english', 'will provide assistance with basic design work, brochures', null);
INSERT INTO comppositiontbl VALUES ('43', '6', null, '2016-01-19', '2017-03-15', 'ARCHITECT', 'Top Level Management', 'ARCHITECT', 'Arts/Creative/Graphics Design', 'Full Time', '2', '20,000 - 25,000', '4', 'Bachelor Degree', 'english', 'Must be a Licensed Architect, 	Manpower , Architectural Services Design', null);
INSERT INTO comppositiontbl VALUES ('44', '6', null, '2016-01-19', '2017-03-15', 'Graphic Artist', 'Fresh / Entry Level', 'Graphic Artist', 'Arts/Creative/Graphics Design', 'Full Time', '2', '25,000 - 30,000', '4', 'Bachelor Degree', 'english', ' Knowledgeable in Adobe Photo Shop, With experience as Graphic Artist', null);
INSERT INTO comppositiontbl VALUES ('45', '6', null, '2016-01-19', '2017-03-15', 'CREATIVE ARTIST', 'Manager', 'CREATIVE ARTIST', 'Arts and Design', 'Full Time', '2', '25,000 - 30,000', '6', 'Bachelor Degree', 'english', 'graduate of  Fine Arts/ Industrial Design/Advertising, familiar w/ Auto cad, 	Media & Advertising ', null);
INSERT INTO comppositiontbl VALUES ('46', '1', null, '2016-01-19', '2017-03-15', 'Marketing Staff', 'Manager', 'Responsible for promoting and driving the sales', 'Marketing/Business Development', 'Full Time', '5', '10,000 - 15,000', '5', 'Bachelor Degree', 'Filipino, English', 'Marketing Strategy, Sales Ability', null);
INSERT INTO comppositiontbl VALUES ('47', '2', null, '2016-01-19', '2017-03-15', 'Web Designer', 'Junior Executive', 'Develops and creates websites and associated applications.', 'Arts/Creative/Graphics Design', 'Part Time', '5', '15,000 - 20,000', '2', 'Bachelor Degree', 'English, Filipino', 'Creative, Programming, Designing', null);
INSERT INTO comppositiontbl VALUES ('48', '2', null, '2016-01-19', '2017-03-15', 'Editor-in-Chief', 'Senior Manager', 'Creates the editorial board, or outline, for each of the publication', 'Journalist/Editor', 'Part Time', '5', '25,000 - 30,000', '2', 'Bachelor Degree', 'English', 'Basic Writing Skills, Must be good at grammars', null);
INSERT INTO comppositiontbl VALUES ('53', '8', null, '2016-02-14', '2016-05-14', 'Human Resource Officer', 'Sernior Executive / Supervisor', 'Responsible for developing policies and procedures', 'Human Resources', 'Part Time', '5', '15,000 - 20,000', '1', 'Bachelor Degree', 'English, Mandarin', 'Organizational skills , IT and Numeracy skills', null);
INSERT INTO comppositiontbl VALUES ('54', '8', null, '2016-02-16', '2016-07-12', 'Stockbroker', 'Senior Manager', 'Manage the financial portfolio', 'Stockbroking', 'Temporary', '6', '20,000 - 25,000', '5', 'Bachelor Degree', 'English, German', 'Good communication skills, Good Math and IT skills, Close attention to detail', null);
INSERT INTO comppositiontbl VALUES ('55', '8', null, '2016-02-14', '2017-02-14', 'Hotel Manager', 'Senior Manager', 'Responsible for the day-to-day management of a hotel and its staff', 'Hotel Management/Tourism Services', 'Contract', '10', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', ' Logistical planning skills, Excellent communication, Friendly personality and genuine desire to help and please others', null);
INSERT INTO comppositiontbl VALUES ('56', '8', null, '2016-02-14', '2016-03-14', 'Creative Designer', 'Fresh / Entry Level', 'Works on a variety of products and activities, such as websites, etc', 'IT/Computer - Creative Design', 'Part Time', '10', '25,000 - 30,000', '3', 'Bachelor Degree', 'English', 'Creative, Excellent communication skills , Time management skills', null);
INSERT INTO comppositiontbl VALUES ('57', '8', null, '2016-02-15', '2016-03-15', 'Travel Agent', 'Senior Manager', 'Help people plan, choose and arrange their holiday', 'Hotel Management/Tourism Services', 'Part Time', '10', '15,000 - 20,000', '5', 'Bachelor Degree', 'English, Japanese', 'Commercially aware, Good interpersonal skills, Numerical ability, Verbal communication skills', null);
INSERT INTO comppositiontbl VALUES ('58', '9', null, '2016-02-17', '2016-12-17', 'Computer Engineer', 'Top Level Management', 'Responsible for developing, testing and evaluating ', 'Engineering - Electronics/Communication', 'Temporary', '3', '45,000 - 50,000', '10', 'Bachelor Degree, Masteral Degree', 'English', 'Critical Thinking Skills, Programming, Systems Analysis ', null);
INSERT INTO comppositiontbl VALUES ('59', '9', null, '2016-02-13', '2017-02-13', 'Technical Support', 'Sernior Executive / Supervisor', 'Provide technical and network problem resolution to customers.', 'Technical and Helpdesk Support', 'Full Time', '7', '25,000 - 30,000', '5', 'Bachelor Degree', null, 'Knowledge of relevant software computer applications and equipment, Knowledge of customer service principles and practices', null);
INSERT INTO comppositiontbl VALUES ('60', '9', null, '2016-02-15', '2017-05-31', 'System Analyst', 'Top Level Management', 'AnalyZing clients\' existing systems and business models', 'IT/Computer - Network/System/Database Admin', 'Part Time', '3', '45,000 - 50,000', '5', 'Bachelor Degree', 'English', 'Broad knowledge of hardware, software and programming, Ability to contribute to a team effort', null);
INSERT INTO comppositiontbl VALUES ('61', '9', null, '2016-02-13', '2017-02-13', 'Web Programmer', 'Junior Executive', 'Responsible for coding, innovative design and layout of our website', 'IT/Computer - Creative Design', 'Full Time', '10', '30,000 - 40,000', '1', 'Bachelor Degree', 'English', 'Basic knowledge of Search Engine Optimisation process, Adequate knowledge of relational database systems, Object Oriented Programming and web application development', null);
INSERT INTO comppositiontbl VALUES ('62', '10', null, '2016-02-15', '2017-02-15', 'Crew Member', 'Non-Executive', 'Provide customers accurate service to their individual needs', 'Food/Beverage/Restaurant Service', 'Part Time', '15', '10,000 - 15,000', '1', 'Bachelor Degree', null, 'Ability to prepare and pack food in conformation to orders, Friendly nature with an engaging and outgoing personality', null);
INSERT INTO comppositiontbl VALUES ('63', '10', null, '2016-02-16', '2016-06-06', 'Restaurant Manager', 'Manager', 'Ensure that restaurants operate efficiently and profitably ', 'Food/Beverage/Restaurant Service', 'Full Time', '1', '20,000 - 25,000', '4', 'Bachelor Degree', null, 'Excellent interpersonal skills, Strong written and oral communication skills, Good business awareness', null);
INSERT INTO comppositiontbl VALUES ('64', '10', null, '2016-02-13', '2017-03-03', 'Accountant', 'Top Level Management', 'Provides financial information to management ', 'Finance - General/Cost Accounting', 'Contract', '3', '30,000 - 40,000', '3', 'Bachelor Degree', 'English', 'Accounting, Reporting Skills,  Attention to Detail', null);
INSERT INTO comppositiontbl VALUES ('65', '11', null, '2016-02-20', '2016-03-20', 'Merchandising', 'Junior Executive', 'Ensure that products appear in the right store', 'Merchandising', 'Temporary', '10', '25,000 - 30,000', '5', 'Bachelor Degree', 'English', 'Computer literacy, Excellent communication and negotiation skills', null);
INSERT INTO comppositiontbl VALUES ('66', '11', null, '2016-02-13', '2016-03-13', 'Administrative Support', 'Senior Manager', 'Assist in creating a job application that will attract job candidates', 'Clerical/Administrative Support', 'Contract', '5', '30,000 - 40,000', '5', 'Bachelor Degree', 'English', 'Administrative Writing Skills,  Verbal Communication,, Presenting Technical Information', null);
INSERT INTO comppositiontbl VALUES ('67', '11', null, '2016-02-22', '2016-04-22', 'Personal Assistant', 'Fresh / Entry Level', 'Works closely with senior managerial to provide administrative support', 'Secretarial/Executive and Personal Assistant', 'Full Time', '3', '20,000 - 25,000', '3', 'Bachelor Degree', 'English', 'Oral communication skills, Excellent word processing and IT skills, including knowledge of a range of software packages, Ability to research, digest, analyse and present material clearly and concisely', null);

-- ----------------------------
-- Table structure for `coursetbl`
-- ----------------------------
DROP TABLE IF EXISTS `coursetbl`;
CREATE TABLE `coursetbl` (
  `CourseID` int(11) NOT NULL AUTO_INCREMENT,
  `CourseTitle` varchar(255) NOT NULL,
  `CourseCode` varchar(255) NOT NULL,
  `CourseDescription` varchar(255) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of coursetbl
-- ----------------------------
INSERT INTO coursetbl VALUES ('2', 'Bachelor of Science in Business Management Major in Operations', 'BSBM', 'TEST');
INSERT INTO coursetbl VALUES ('3', 'Bachelor of Arts in Communication', 'ABCOMM', 'TEST');
INSERT INTO coursetbl VALUES ('4', 'Bachelor of Science in Information Technology Major in Digital Arts', 'BSITDA', 'freedata');
INSERT INTO coursetbl VALUES ('5', 'Bachelor of Science in Hotel & Restaurant Management', 'BSHRM', 'TEST');
INSERT INTO coursetbl VALUES ('6', 'Bachelor of Science in Computer Science', 'BSCS', 'TEST');
INSERT INTO coursetbl VALUES ('7', 'Bachelor of Science in Information Technology', 'BSIT', 'TEST');
INSERT INTO coursetbl VALUES ('8', 'Bachelor of Science in Computer Engineering', 'BSCPE', 'TEST');
INSERT INTO coursetbl VALUES ('9', 'Bachelor of Science in Accounting Technology', 'BSAT', 'TEST');
INSERT INTO coursetbl VALUES ('10', '2-Year Associate in Computer Technology', 'ASCT', 'TEST');
INSERT INTO coursetbl VALUES ('16', 'Bachelor of Science in Tourism Management', 'BSTM', 'Test 1');

-- ----------------------------
-- Table structure for `documentstbl`
-- ----------------------------
DROP TABLE IF EXISTS `documentstbl`;
CREATE TABLE `documentstbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `DocumentName` varchar(255) NOT NULL,
  `DocumentPath` varchar(255) NOT NULL,
  `SaltedName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of documentstbl
-- ----------------------------

-- ----------------------------
-- Table structure for `languagetbl`
-- ----------------------------
DROP TABLE IF EXISTS `languagetbl`;
CREATE TABLE `languagetbl` (
  `LangID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `WrittenProf` varchar(255) NOT NULL,
  `SpokenProf` varchar(255) NOT NULL,
  PRIMARY KEY (`LangID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of languagetbl
-- ----------------------------
INSERT INTO languagetbl VALUES ('1', '00820120004', 'asdsad', '', '');
INSERT INTO languagetbl VALUES ('3', '00820120001', 'asdsadsa', '', '');

-- ----------------------------
-- Table structure for `listofindustrytbl`
-- ----------------------------
DROP TABLE IF EXISTS `listofindustrytbl`;
CREATE TABLE `listofindustrytbl` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Industry` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of listofindustrytbl
-- ----------------------------
INSERT INTO listofindustrytbl VALUES ('1', 'Accounting / Audit / Tax Services');
INSERT INTO listofindustrytbl VALUES ('2', 'Advertising / Marketing / Promotion / PR');
INSERT INTO listofindustrytbl VALUES ('3', 'Aerospace / Aviation / Airline');
INSERT INTO listofindustrytbl VALUES ('4', 'Agricultural / Plantation / Poultry / Fisheries');
INSERT INTO listofindustrytbl VALUES ('5', 'Apparel / Fashion');
INSERT INTO listofindustrytbl VALUES ('6', 'Architectural Services / Interior Designing');
INSERT INTO listofindustrytbl VALUES ('7', 'Arts / Design');
INSERT INTO listofindustrytbl VALUES ('8', 'Automobile / Automotive Ancillary / Vehicle');
INSERT INTO listofindustrytbl VALUES ('9', 'Banking / Financial Services');
INSERT INTO listofindustrytbl VALUES ('10', 'BioTechnology / Pharmaceutical / Clinical research');
INSERT INTO listofindustrytbl VALUES ('11', 'Catering / Restaurant Service');
INSERT INTO listofindustrytbl VALUES ('12', 'Chemical / Fertilizers / Pesticides');
INSERT INTO listofindustrytbl VALUES ('13', 'Commodities Production / Distribution');
INSERT INTO listofindustrytbl VALUES ('14', 'Computer / Information Technology (Hardware)');
INSERT INTO listofindustrytbl VALUES ('15', 'Computer / Information Technology (Software)');
INSERT INTO listofindustrytbl VALUES ('16', 'Construction / Building / Engineering');
INSERT INTO listofindustrytbl VALUES ('17', 'Consulting (Business and Management)');
INSERT INTO listofindustrytbl VALUES ('18', 'Consulting (IT, Science, Engineering and Technical)');
INSERT INTO listofindustrytbl VALUES ('19', 'Consumer Products / FMCG');
INSERT INTO listofindustrytbl VALUES ('20', 'Education');
INSERT INTO listofindustrytbl VALUES ('21', 'Electrical and Electronics');
INSERT INTO listofindustrytbl VALUES ('22', 'Entertainment / Media');
INSERT INTO listofindustrytbl VALUES ('23', 'Environment / Health / Safety');
INSERT INTO listofindustrytbl VALUES ('24', 'Exhibitions / Event Management / MICE');
INSERT INTO listofindustrytbl VALUES ('25', 'Food and Beverage');
INSERT INTO listofindustrytbl VALUES ('26', 'Gems / Jewellery');
INSERT INTO listofindustrytbl VALUES ('27', 'General and Wholesale Trading');
INSERT INTO listofindustrytbl VALUES ('28', 'Government');
INSERT INTO listofindustrytbl VALUES ('29', 'Grooming / Beauty / Fitness');
INSERT INTO listofindustrytbl VALUES ('30', 'Healthcare / Medical');
INSERT INTO listofindustrytbl VALUES ('31', 'Heavy Industrial / Machinery / Equipment');
INSERT INTO listofindustrytbl VALUES ('32', 'Home Furnishing / Furniture');
INSERT INTO listofindustrytbl VALUES ('33', 'Hotel / Hospitality');
INSERT INTO listofindustrytbl VALUES ('34', 'Human Resources Management / Consulting');
INSERT INTO listofindustrytbl VALUES ('35', 'Insurance');
INSERT INTO listofindustrytbl VALUES ('36', 'Journalism');
INSERT INTO listofindustrytbl VALUES ('37', 'Law / Legal');
INSERT INTO listofindustrytbl VALUES ('38', 'Library / Museum');
INSERT INTO listofindustrytbl VALUES ('39', 'Manufacturing / Production');
INSERT INTO listofindustrytbl VALUES ('40', 'Marine / Aquaculture');
INSERT INTO listofindustrytbl VALUES ('41', 'Mining');
INSERT INTO listofindustrytbl VALUES ('42', 'Non-Profit Organization / Social Services / NGO');
INSERT INTO listofindustrytbl VALUES ('43', 'Oil / Gas / Petroleum');
INSERT INTO listofindustrytbl VALUES ('44', 'Online / E-commerce Business');
INSERT INTO listofindustrytbl VALUES ('45', 'Other');
INSERT INTO listofindustrytbl VALUES ('46', 'Outsourcing (Call Center / BPO');
INSERT INTO listofindustrytbl VALUES ('47', 'Polymer / Plastic / Rubber / Tyres');
INSERT INTO listofindustrytbl VALUES ('48', 'Printing / Publishing');
INSERT INTO listofindustrytbl VALUES ('49', 'Property / Real Estate');
INSERT INTO listofindustrytbl VALUES ('50', 'Repair and Maintenance Services');
INSERT INTO listofindustrytbl VALUES ('51', 'Research and Development');
INSERT INTO listofindustrytbl VALUES ('52', 'Retail / Merchandising');
INSERT INTO listofindustrytbl VALUES ('53', 'Science and Technology');
INSERT INTO listofindustrytbl VALUES ('54', 'Security / Law Enforcement');
INSERT INTO listofindustrytbl VALUES ('55', 'Semiconductor / Wafer Fabrication');
INSERT INTO listofindustrytbl VALUES ('56', 'Sports');
INSERT INTO listofindustrytbl VALUES ('57', 'Stockbroking / Securities');
INSERT INTO listofindustrytbl VALUES ('58', 'Telecommunication');
INSERT INTO listofindustrytbl VALUES ('59', 'Textiles / Garment');
INSERT INTO listofindustrytbl VALUES ('60', 'Tobacco and Liquor');
INSERT INTO listofindustrytbl VALUES ('61', 'Transportation / Logistics');
INSERT INTO listofindustrytbl VALUES ('62', 'Travel / Tourism');
INSERT INTO listofindustrytbl VALUES ('63', 'Utilities / Power');
INSERT INTO listofindustrytbl VALUES ('64', 'Wood / Fibre / Paper');

-- ----------------------------
-- Table structure for `listofpositiontbl`
-- ----------------------------
DROP TABLE IF EXISTS `listofpositiontbl`;
CREATE TABLE `listofpositiontbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of listofpositiontbl
-- ----------------------------
INSERT INTO listofpositiontbl VALUES ('1', 'Top Level Management');
INSERT INTO listofpositiontbl VALUES ('2', 'Senior Manager');
INSERT INTO listofpositiontbl VALUES ('3', 'Manager');
INSERT INTO listofpositiontbl VALUES ('4', 'Sernior Executive / Supervisor');
INSERT INTO listofpositiontbl VALUES ('5', 'Junior Executive');
INSERT INTO listofpositiontbl VALUES ('6', 'Fresh / Entry Level');
INSERT INTO listofpositiontbl VALUES ('7', 'Non-Executive');
INSERT INTO listofpositiontbl VALUES ('8', 'Trainee');

-- ----------------------------
-- Table structure for `listofsalaryrangetbl`
-- ----------------------------
DROP TABLE IF EXISTS `listofsalaryrangetbl`;
CREATE TABLE `listofsalaryrangetbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SalaryRange` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of listofsalaryrangetbl
-- ----------------------------
INSERT INTO listofsalaryrangetbl VALUES ('1', '10,000 - 15,000');
INSERT INTO listofsalaryrangetbl VALUES ('2', '15,000 - 20,000');
INSERT INTO listofsalaryrangetbl VALUES ('3', '20,000 - 25,000');
INSERT INTO listofsalaryrangetbl VALUES ('4', '25,000 - 30,000');
INSERT INTO listofsalaryrangetbl VALUES ('5', '30,000 - 40,000');
INSERT INTO listofsalaryrangetbl VALUES ('6', '40,000 - 45,000');
INSERT INTO listofsalaryrangetbl VALUES ('7', '45,000 - 50,000');
INSERT INTO listofsalaryrangetbl VALUES ('8', 'Negotiable');

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

-- ----------------------------
-- Table structure for `logrequesttbl`
-- ----------------------------
DROP TABLE IF EXISTS `logrequesttbl`;
CREATE TABLE `logrequesttbl` (
  `LID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` varchar(11) NOT NULL,
  `Courses` varchar(255) NOT NULL,
  `DateFrom` varchar(255) NOT NULL,
  `DateTo` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `DateRequested` varchar(255) NOT NULL,
  `PositionTitle` varchar(255) NOT NULL,
  `EmployeeClassification` varchar(255) NOT NULL,
  `PositionLevel` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Qualifications` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `SalaryRange` varchar(255) NOT NULL,
  `RequiredYOE` varchar(255) NOT NULL,
  `CFG` varchar(255) NOT NULL,
  `DurationOfRequest` varchar(255) NOT NULL,
  `MarketingMaterials` varchar(255) NOT NULL,
  PRIMARY KEY (`LID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logrequesttbl
-- ----------------------------
INSERT INTO logrequesttbl VALUES ('2', '1', 'BSBM, ABCOMM, BSITDA', '2016-02-17', '2016-02-29', 'Accepted', '2016-02-17', 'asdasdsa', 'Full Time, Part-Time, Contractual', 'Entry Level/Gen Staff, Officer, Supervisory', 'ddddddddddddd', 'dddddddddddd', 'Valenzuela City', '41241', '11', 'Yes', '1 Month', 'Yes');

-- ----------------------------
-- Table structure for `ojttbl`
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
INSERT INTO ojttbl VALUES ('1', '0082A101278', 'ADRALES', 'ANNA MELISSA ', 'SANTOS', 'BSHRM', 'Malabon Grand Hotel and Casino', '110 Mc Arthur Highway Potrero Malabon City', 'Mr. Miko Orante', 'Senior Hotel Manager', '', null, 'Incomplete', 'ok', 'ok', 'ok', 'off', 'ok', 'off', 'off', 'off', null);
INSERT INTO ojttbl VALUES ('2', '820120152', 'ARANAS', 'JAMIL', 'DORADO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, 'Incomplete', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', null);
INSERT INTO ojttbl VALUES ('3', '820120677', 'BAÑAL', 'CRISANTA', 'ABELARDE', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('4', '820120652', 'CO', 'CARMENZITADEL', 'PADUA', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('5', '820120678', 'DIMLA', 'RORIKO ', 'CLEOFAS', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('6', '820130763', 'EDEM', 'ANN GELIE', 'SAPLALA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('7', '820131674', 'ESTILLORE', 'LADY ANN', 'TEMARIO', 'BSHRM', 'Manila Crown Palace Hotel', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('8', '820110122', 'FAJARDO', 'LOVELY JOYCE', 'BORJA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('9', '820120896', 'GALANG', 'ARMAN', 'MIRANDA', 'BSHRM', 'La  breza hotel', '155 Mother Ignacio St. Brgy South Triangle Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('10', '820120410', 'GOMEZ', 'AMIEL', 'UY', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('11', '820120625', 'GONZALES', 'CLARENCE JAZMINE', 'CARRERAS', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('12', '820120648', 'LACIBAL', 'NIÑA', 'POLICARPIO', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('13', '820120382', 'LEGASPI', 'IMERRIE MARTIN', '', 'BSHRM', 'La breza Hotel', '155 Mother Ignacio St. Brgy South Triangle', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('14', '820120553', 'LISING', 'CAMILLE JOY', 'BARANDOC', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('15', '820120905', 'MALLARI', 'KRISTIAN', 'MARASIGAN', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('16', '820120942', 'MANALAYSAY', 'GRACE CAMILLE', 'PAGUIA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('17', '820121081', 'MERCADO', 'DIVINE', 'MAXIMO', 'BSHRM', 'Imperial Palace Suites', 'South Triangle, Diliman Quezon City ', 'Mr. Kenneth Ongelico', 'Admin Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('18', '820120857', 'RAMOS', 'SARAH MAE', 'GATAN', 'BSHRM', 'La breza Hotel', '155 Mother Ignacio St. Brgy South Triangle, Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('19', '820121392', 'REYES', 'GRACE ANN', 'LACUATA', 'BSHRM', 'Imperial Palace Suites', 'South Triangle, Diliman Quezon City ', 'Mr. Kenneth Ongelico', 'Admin Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('20', '820120893', 'RUBIO', 'MA. CONSUELO', 'MILAN', 'BSHRM', 'La Breza Hotel', '155 Mother Ignacio St. Brgy South Triangle, Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('21', '14820120113', 'TANEO', 'DEMI JANE', 'FRANCISCO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('22', '820120882', 'VERBA', 'JONATHAN', 'TING', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('23', '820120599', 'Losa', 'Paulo', 'A', 'BSHRM', 'Atrium Hotel', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('24', '820120147', 'Socito', 'Roy', 'E', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('25', '820120704', 'BERNAL', 'MA. VANESSA ', 'SOLIMAN', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('26', '820131768', 'ABADICIO', 'ARVIE', 'DICHE', 'BSHRM', 'KAMAYAN SAISAKI DADS WEST AVENUE', '#15 West Avenue Quezon City', 'Ms. Emily Gonzales', 'HR Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('27', '820131729', 'ANGELES', 'ROMNICK', 'ROBLES', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('28', '820131774', 'ASUNCION', 'THOMAS BERNARD', 'ASONZA', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('29', '00820130311', 'BALASON', 'WILLIAM JAY', 'BAUTISTA', 'BSHRM', 'KAMAYAN SAISAKI DADS WEST AVENUE', '#15 West Avenue Quezon City', 'Ms. Emily Gonzales', 'HR Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('30', '820131758', 'BALUYOT', 'JOHN CHRISTIAN', 'PAGULAYAN', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('31', '00820121357', 'FAUSTO', 'KING MIKAR', 'LACSAMANA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('32', '820121126', 'GERONIMO', 'ALDRIN JOHN', 'PASCO', 'BSHRM', 'THE NETWORLD HOTEL ROXA BLVD.', 'Roxas Boulevard Cor. Sen. Gil Puyat Avenue, Pasay City', 'Ms. Janet Reyes', 'HR Officer', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('33', '820131607', 'IGNACIO', 'MARY ROSE', 'TORRALBA', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('34', '820131421', 'JUNIO', 'GIO NIÑO', 'MERCADO', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('35', '820130936', 'LLAMAS', 'ALMIRA', 'GUEVARRA', 'BSHRM', 'YAKIMIX RESTAURANT SM CITY NORTH', 'Ground floor 143 SM City North Edsa, Quezon City', 'Mr. Normand Peralta', 'Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('36', '820131704', 'MACABENTA', 'IMMACULATE', 'IBABAO', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('37', '820111196', 'RODRIGUEZ', 'HANS EDISON', 'STA ANA', 'BSHRM', 'ZAMBOANGA RESTAURANT MALATE, MANILA', '1619 M. Adriatico St. Malate Manila City ', 'Mr. Chris Zamora', 'Head Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('38', '820110407', 'ARDEÑA', 'JASPER ', 'ANGELES', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('39', '0082A120555', 'BACONGGOL', 'CORAZON', 'AGAO', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('40', '820120677', 'BAÑAL', 'CRISANTA', 'ABELARDE', 'BSHRM', 'ATRIUM HOTEL MANILA', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('41', '820131425', 'BERMUDEZ', 'ALJAY', 'SUYAT', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('42', '820100851', 'DE JESUS', 'REYNIE', 'CALDERON', 'BSHRM', 'MALABON GRAND HOTEL AND CASINO', '110 Mc Arthur Highway Potrero Malabon City', 'Mr. Miko Orante', 'Senior Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('43', '820120868', 'DELA ROSA', 'MARIE ANNE', 'BON', 'BSHRM', 'ATRIUM HOTEL MANILA', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('44', '820120567', 'DIWA', 'JESSICA AIKA', 'DIAZ', 'BSHRM', 'PALM NOUVEAU SCHOOL OF HM MANILA', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('45', '820080219', 'DUGUILES', 'KRISTINE MAE', ' ABES', 'BSHRM', 'GRAN PRIX MANILA', 'Tesoro Building, 1325 Mabini St, Ermita, Manila, 1004 ', 'Ms. Regina Villagracia', 'Sales And  Marketing Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('46', '820130763', 'EDEM', 'ANN GELIE', 'SAPLALA', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('47', '820121115', 'ESILIO', 'JHOYMARIE', 'TUYAY', 'BSHRM', 'IMPERIAL PALACE SUITES QUEZON CITY', 'South Triangle, Diliman, Quezon City ', 'Mr. Kenneth Ongelico', 'Admin Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('48', '820131747', 'FELIPE', ' JOEDDIE', 'ABRINA', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('49', '820101325', 'GADORES', 'FELISSE MARIE', 'ECALNE', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('50', '820120929', 'LACUROM', 'CHRISTIAN JAYE', 'BAYADOG', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('51', '820120455', 'LANUZA', 'ZARAH', 'ANTONIO', 'BSHRM', 'CITY GARDEN SUITES MANILA', '1158 A. Mabini St. Ermita,Manila City', 'Mr. Elmer B. Gapusan', 'Training Director', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('52', '820120599', 'LOSA', 'PAULO', 'ARAZA', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('53', '820141762', 'LUSUNG', 'KRISTINE', 'FRANCISCO', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('54', '820121148', 'MAS', 'GEZLER', 'MADRIÑAL', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('55', '820131748', 'MOLINA', 'SHAIRA KARL', 'SALE', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('56', '820131746', 'REGINALDO', 'MARVIN', 'IBASCO', 'BSHRM', 'HOTEL KIMBERLY MANILA', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('57', '0082A120706', 'ROYO', 'JUNRHEY', 'SAB', 'BSHRM', 'BEST WESTERN HOTEL LA CORONA MANILA', '1166 M. H Del Pilar St., Cor. Arquiza St., Ermita Manila City', 'Ms. Rhea Barcoma', 'OJT Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('58', '820120893', 'RUBIO', 'MA. CONSUELO', 'MILAN', 'BSHRM', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('59', '820120888', 'SARDILLAS', 'JENNIFER', 'TICAL', 'BSHRM', 'LA BREZA QUEZON CITY', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('60', '820121537', 'SISON', 'ARTHUR ALLEN', 'BUSTAMANTE', 'BSHRM', 'FRASER PALACE MANILA', 'Forbes Tower, Valero Street, Salcedo Village, Makati City', 'Mr. Ramil Anzaldo', 'HR Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('61', '820110429', 'GO', 'KRISSHA ALYANNA', 'MERLIN', 'BSHRM', 'V HOTEL MALATE', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('62', '820110099', 'MANALO', 'MAREN GRACE', 'ALVARADO', 'BSHRM', 'V HOTEL MALATE', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('63', '820120635', 'ALMOJUELA', 'NUMER', 'JABAGAT', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('64', '820120282', 'BENOSA', 'JOSHUA', 'BAUTISTA', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('65', '820120194', 'BENSING', 'RODEL', 'AMALIAN', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('66', '820120229', 'BESANA', 'SHARMAINE', 'HIBE', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('67', '820120302', 'CARDANO', 'JIO', 'ASA', 'BSHRM', 'MICROTEL MOA', 'Coral Way ave. Corner Seaside Boulevard SM Mall Of Asia Complex', 'Ms. Glaiza Mella', 'HR Specialist', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('68', '820120128', 'DACUBA', 'ANALYN', 'FORTES', 'BSHRM', 'PARAGON TOWER HOTEL ERMITA', '531 A. Flores St., Ermita, Manila City', 'Ms. Donna Silverio', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('69', '820120868', 'DELA ROSA', 'MARIE ANNE', 'BON', 'BSHRM', 'ATRIUM HOTEL PASAY', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('70', '820120880', 'DELOS SANTOS', 'KRIZIA ANNE', 'BATHAN', 'BSHRM', 'ATRIUM HOTEL PASAY', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('71', '820120477', 'DITAN', 'JOHN MICHAEL', 'NONLES', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('72', '820120352', 'DONEZA', 'JERIKA', 'CUEVAS', 'BSHRM', 'PEARL GARDEN HOTEL', '1700 M. Adriatico St. Cor Gen. Malvar St. Malate', 'Ms. Aileen Ilagan', 'Resident Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('73', '820120669', 'ESTRADA', 'ANTHONY', 'LOMIBAO', 'BSHRM', 'MICROTEL MOA', 'Coral Way ave. Corner Seaside Boulevard SM Mall Of Asia Complex', 'Ms. Glaiza Mella', 'HR Specialist', '9175905892', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('74', '820120032', 'FELICIANO', 'ARVIN RYAN', 'HO', 'BSHRM', 'LUXENT HOTEL QUEZON CITY', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('75', '820101325', 'GADORES', 'FELISSE MARIE', 'ECALNE', 'BSHRM', 'HOTEL KIMBERLY MALATE', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('76', '820120234', 'GALLER', 'ARON PAUL', 'SALANGSANG', 'BSHRM', 'SEQUIOA HOTEL QUEZON CITY', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('77', '820120074', 'GAMBOA', 'CHRISTOPHER JASON', 'DONES', 'BSHRM', 'OASIS HOTEL', '1032-34 Belen St. Paco,Manila City', 'Mr. Jeffrey Miranda', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('78', '820120224', 'GONZALES', 'UZIEL', 'RODRIGUEZ', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('79', '820120223', 'GUTIERREZ JR', 'DANTE', 'CENTENO', 'BSHRM', 'MALABON GRAND HOTEL AND CASINO', '110 Mc Arthur Highway Potrero Malabon City', 'Mr. Miko Orante', 'Senior Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('80', '820121290', 'LACPAO', 'HANNA', 'AMBOS', 'BSHRM', 'NETWORLD HOTEL PASAY', 'Roxas Boulevard Cor. Sen. Gil Puyat Avenue, Pasay City', 'Ms. Carla Impon Bernido', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('81', '820120091', 'LAURENTE', 'CHARITY', 'MARUYA', 'BSHRM', 'ATRIUM HOTEL PASAY', 'A.Luna cor. Taft Avenue and Sen. Gil Puyat Avenue Pasay City', 'Mr. Brian Manikon', 'Hotel Supervisor', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('82', '820120293', 'LAVADIA', 'JANETTE', 'EFONDO', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('83', '3820120029', 'LEAÑO', 'JOYMEE', 'DELA PEÑA', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('84', '820120122', 'LOPEZ', 'LECILDA', 'REGINO', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('85', '820120167', 'LOYOLA', 'ABIGAIL', 'CARABLE', 'BSHRM', 'MANILA CROWN PALACE HOTEL', '1726 Adriatico St. Cor. Alonzo St. Malate, Manila City', 'Ms. Jovy Gayoso', 'Hr Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('86', '820120196', 'LOZANO', 'RIZZA MAE', 'HERNANDEZ', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, 'ok', 'ok', 'off', 'off', 'off', 'off', 'off', 'off', null);
INSERT INTO ojttbl VALUES ('87', '820110219', 'MACARAEG', 'JERAMIE', 'GRACE ATIENZA', 'BSHRM', 'CITY GARDEN SUITES MANILA', '1158 A. Mabini St. Ermita,Manila City', '', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('88', '820120220', 'MALUBAY', 'JAPHET', 'ECLEO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('89', '820120178', 'MORALES', 'HERNIEL', 'ESTRELLES', 'BSHRM', 'PEARL GARDEN HOTEL', '1700 M. Adriatico St. Cor Gen. Malvar St. Malate', 'Ms. Aileen Ilagan', 'Resident Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('90', '820131239', 'MORTIZ', 'JULIE ANN', 'BARASONA', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('91', '820120409', 'NAVAS', 'ANGELIE', 'BUHATIN', 'BSHRM', 'PEARL GARDEN HOTEL', '1700 M. Adriatico St. Cor Gen. Malvar St. Malate', 'Ms. Aileen Ilagan', 'Resident Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('92', '0082A120233', 'PACHECO', 'ABIGAIL', 'BARTOLOME', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('93', '820120934', 'PANAGSAGAN', 'ELIZABETH', 'SURITA', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('94', '820120103', 'SABERON', 'SHIENA', 'BAISAC', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('95', '0082A120093', 'SABINIANO', 'SHARLYN MAE', 'BAUTISTA', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('96', '820120020', 'SABODOGO', 'RAMARIE', 'LOTOC', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('97', '820120345', 'SALAS', 'PRINCE', 'IRIS', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('98', '820121072', 'SANDEL', 'IAN KARLO', 'PABUSTAN', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('99', '820120351', 'SANTOS', ' CERNA', 'CUTANDA', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('100', '820120888', 'SARDILLAS', 'JENNIFER', 'TICAL', 'BSHRM', 'LA BREZA HOTEL MOTHER IGNACIA', '155 Mother Ignacio St. Brgy South Triangle,Quezon City', 'Mr. Joel Clamonte', 'Hotel Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('101', '820120245', 'SEDANO', 'APRIL ROSE', 'SARGENTO', 'BSHRM', 'OAKWOOD PREMIER JOY-NOSTALG CENTER MANILA', '17 ADB Ave. Ortigas,Pasig City', 'Ms. Ivy Remulla', 'Training Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('102', '820120105', 'TORRES', 'PRINCESS DIANNE', 'CRUZ', 'BSHRM', 'HOTEL KIMBERLY MALATE', '770 Pedro Gil St.Manila City ', 'Ms. Alexie Nobleta', 'Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('103', '820120212', 'UGA', 'HASELYN', 'DAGUMAN', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('104', '820120110', 'UMALI', 'JUVELYN', 'ABADIANO', 'BSHRM', 'Oasis Paco Park Hotel', '1032-34 Belen St. Paco, Manila City ', 'Mr. Jeffrey Miranda', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('105', '820120239', 'YABUT', 'AILEEN ', 'ESPENILE', 'BSHRM', 'PARAGON TOWER HOTEL ERMITA', '531 A. Flores St., Ermita, Manila City', 'Ms. Donna Silverio', '', '', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO ojttbl VALUES ('106', '820120085', 'YATAR', 'ERICA', 'JABON', 'BSHRM', 'GREEN SUN HOTEL MAKATI', '2285 Chino Roces Ave. Makati City', 'Ms. Jedah Laeyan', 'Admin Officer', '9176366846', null, null, null, null, null, null, null, null, null, null, null);

-- ----------------------------
-- Table structure for `progresstbl`
-- ----------------------------
DROP TABLE IF EXISTS `progresstbl`;
CREATE TABLE `progresstbl` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Progress` int(255) NOT NULL,
  `Pinfo` varchar(255) NOT NULL,
  `Cinfo` varchar(255) NOT NULL,
  `Objective` varchar(255) NOT NULL,
  `WorkXP` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Seminar` varchar(255) NOT NULL,
  `Certification` varchar(255) NOT NULL,
  `Achievements` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `Languages` varchar(255) NOT NULL,
  `_References` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of progresstbl
-- ----------------------------
INSERT INTO progresstbl VALUES ('1', '00820120001', '100', 'ok', 'ok', 'ok', '', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok', 'ok');
INSERT INTO progresstbl VALUES ('2', '00820120002', '0', 'ok', 'ok', 'ok', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('3', '00820120003', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('4', '00820120004', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('5', '00820120005', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('6', '00820120006', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('7', '00820120007', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('8', '00820120008', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('9', '00820120009', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('10', '00820120010', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('11', '00820120011', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('12', '00820120012', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('13', '00820120013', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('14', '00820120014', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('15', '00820120015', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('16', '00820120016', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('17', '00820120017', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('18', '00820120018', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('19', '00820120019', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('20', '00820120020', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('21', '00820120021', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('22', '00820120022', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('23', '00820120023', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('24', '00820120024', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('25', '00820120025', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('26', '00820120026', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('27', '00820120027', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('28', '00820120028', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('29', '00820120029', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('30', '00820120030', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('31', '00820120031', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('32', '00820120032', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('33', '00820120033', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('34', '00820120034', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('35', '00820120035', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('36', '00820120036', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('37', '00820120037', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('38', '00820120038', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('39', '00820120039', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('40', '00820120040', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('41', '00820120041', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('42', '00820120042', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('43', '00820120043', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('44', '00820120044', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('45', '00820120045', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('46', '00820120046', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('47', '00820120047', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('48', '00820120048', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('49', '00820120049', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('50', '00820120050', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('51', '00820120051', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('52', '00820120052', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('53', '00820120053', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('54', '00820120054', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('55', '00820120055', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('56', '00820120056', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('57', '00820120057', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('58', '00820120058', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('59', '00820120059', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('60', '00820120060', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('61', '00820120061', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('62', '00820120062', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('63', '00820120063', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('64', '00820120064', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('65', '00820120065', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('66', '00820120066', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('67', '00820120067', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('68', '00820120068', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('69', '00820120069', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('70', '00820120070', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('71', '00820120071', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('72', '00820120072', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('73', '00820120073', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('74', '00820120074', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('75', '00820120075', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('76', '00820120076', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('77', '00820120077', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('78', '00820120078', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('79', '00820120079', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('80', '00820120080', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('81', '00820120081', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('82', '00820120082', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('83', '00820120083', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('84', '00820120084', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('85', '00820120085', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('86', '00820120086', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('87', '00820120087', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('88', '00820120088', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('89', '00820120089', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('90', '00820120090', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('91', '00820120091', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('92', '00820120092', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('93', '00820120093', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('94', '00820120094', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('95', '00820120095', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('96', '00820120096', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('97', '00820120097', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('98', '00820120098', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('99', '00820120099', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('100', '00820120100', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('101', '00820120101', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('102', '00820120102', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('103', '00820120103', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('104', '00820120104', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('105', '00820120105', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('106', '00820120106', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('107', '00820120107', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('108', '00820120108', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('109', '00820120109', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('110', '00820120110', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('111', '00820120111', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('112', '00820120112', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('113', '00820120113', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('114', '00820120114', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('115', '00820120115', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('116', '00820120116', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('117', '00820120117', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('118', '00820120118', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('119', '00820120119', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('120', '00820120120', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('121', '00820120121', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('122', '00820120122', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('123', '00820120123', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('124', '00820120124', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('125', '00820120125', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('126', '00820120126', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('127', '00820120127', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('128', '00820120128', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('129', '00820120129', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('130', '00820120130', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('131', '00820120131', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('132', '00820120132', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('133', '00820120133', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('134', '00820120134', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('135', '00820120135', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('136', '00820120136', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('137', '00820120137', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('138', '00820120138', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('139', '00820120139', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('140', '00820120140', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('141', '00820120141', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('142', '00820120143', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('143', '00820120144', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('144', '00820120145', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('145', '00820120146', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('146', '00820120147', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('147', '00820120148', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('148', '00820120149', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('149', '00820120150', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('150', '00820120151', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('151', '00820120152', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('152', '00820120153', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('153', '00820120154', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('154', '00820120155', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('155', '00820120156', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('156', '00820120157', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('157', '00820120158', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('158', '00820120159', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('159', '00820120160', '0', 'ok', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('160', '00820120161', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('161', '00820120162', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('162', '00820120163', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('163', '00820120164', '0', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO progresstbl VALUES ('164', '00820120192', '0', 'ok', 'ok', 'ok', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `referencetbl`
-- ----------------------------
DROP TABLE IF EXISTS `referencetbl`;
CREATE TABLE `referencetbl` (
  `ReferenceID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Relationship` varchar(255) NOT NULL,
  `Company` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`ReferenceID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of referencetbl
-- ----------------------------
INSERT INTO referencetbl VALUES ('1', '00820120004', 'asdsds', 'sdada', 'adasdsf', 'sfsddfsd', '354565867', 'as4weds@yahoo.com');
INSERT INTO referencetbl VALUES ('2', '00820120001', 'Tim Joseph Rojas', 'Friend', 'Sykes', 'Top Level Management', '092222222', 'tj@yahoo.com');
INSERT INTO referencetbl VALUES ('3', '00820120001', 'Aira Jane Cruz', 'Friend', 'Sykes', 'Janitor', '09355585931', 'aira@yahoo.com');
INSERT INTO referencetbl VALUES ('4', '00820120001', 'asdsad', 'sadasdsa', 'dasdas', 'das', '465464', 'asdas@cc.cc');

-- ----------------------------
-- Table structure for `requesttocompanytbl`
-- ----------------------------
DROP TABLE IF EXISTS `requesttocompanytbl`;
CREATE TABLE `requesttocompanytbl` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` varchar(255) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `PositionID` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `DateSubmitted` varchar(255) NOT NULL,
  `_Date` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of requesttocompanytbl
-- ----------------------------
INSERT INTO requesttocompanytbl VALUES ('9', '3', '00820120001', '8', 'Pending', '2016-02-17', '2016-02-17', 'dddddd');
INSERT INTO requesttocompanytbl VALUES ('10', '3', '00820120001', '35', 'Pending', '2016-02-17', '2016-02-17', ' ');
INSERT INTO requesttocompanytbl VALUES ('11', '3', '00820120001', '12', 'Pending', '2016-02-17', '', '');
INSERT INTO requesttocompanytbl VALUES ('12', '3', '00820120001', '33', 'Pending', '2016-02-17', '', '');

-- ----------------------------
-- Table structure for `schooltbl`
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
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schooltbl
-- ----------------------------
INSERT INTO schooltbl VALUES ('1', '00820120001', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', ' 2012-2016', '1');
INSERT INTO schooltbl VALUES ('2', '00820120002', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '04 2016', '');
INSERT INTO schooltbl VALUES ('3', '00820120003', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSAT', '12 2006', '');
INSERT INTO schooltbl VALUES ('4', '00820120004', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('5', '00820120005', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('6', '00820120006', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('7', '00820120007', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('8', '00820120008', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '1');
INSERT INTO schooltbl VALUES ('9', '00820120009', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('10', '00820120010', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('11', '00820120011', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('12', '00820120012', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('13', '00820120013', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('14', '00820120014', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('15', '00820120015', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('16', '00820120016', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('17', '00820120017', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('18', '00820120018', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('19', '00820120019', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('20', '00820120020', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('21', '00820120021', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('22', '00820120022', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('23', '00820120023', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('24', '00820120024', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('25', '00820120025', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('26', '00820120026', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('27', '00820120027', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('28', '00820120028', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('29', '00820120029', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('30', '00820120030', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('31', '00820120031', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('32', '00820120032', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('33', '00820120033', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'ASCT', '05 2015', '');
INSERT INTO schooltbl VALUES ('34', '00820120034', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('35', '00820120035', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('36', '00820120036', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('37', '00820120037', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('38', '00820120038', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('39', '00820120039', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('40', '00820120040', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('41', '00820120041', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('42', '00820120042', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('43', '00820120043', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('44', '00820120044', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('45', '00820120045', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('46', '00820120046', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('47', '00820120047', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('48', '00820120048', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('49', '00820120049', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('50', '00820120050', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('51', '00820120051', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('52', '00820120052', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('53', '00820120004', 'asdsfds', 'Technical Vocational/Certificate', 'ASCT', '05 2015', '0');
INSERT INTO schooltbl VALUES ('54', '00820120053', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('55', '00820120054', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('56', '00820120055', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('57', '00820120056', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('58', '00820120057', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('59', '00820120058', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('60', '00820120059', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('61', '00820120060', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('62', '00820120061', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('63', '00820120062', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('64', '00820120063', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('65', '00820120064', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('66', '00820120065', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('67', '00820120066', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('68', '00820120067', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('69', '00820120068', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('70', '00820120069', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('71', '00820120070', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('72', '00820120071', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('73', '00820120072', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('74', '00820120073', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('75', '00820120074', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('76', '00820120075', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('77', '00820120076', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('78', '00820120077', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('79', '00820120078', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('80', '00820120079', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('81', '00820120080', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('82', '00820120081', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('83', '00820120082', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('84', '00820120083', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('85', '00820120084', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('86', '00820120085', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('87', '00820120086', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('88', '00820120087', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('89', '00820120088', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('90', '00820120089', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('91', '00820120090', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('92', '00820120091', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('93', '00820120092', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('94', '00820120093', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('95', '00820120094', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('96', '00820120095', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('97', '00820120096', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('98', '00820120097', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('99', '00820120098', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('100', '00820120099', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('101', '00820120100', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('102', '00820120101', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('103', '00820120102', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('104', '00820120103', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('105', '00820120104', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSBM', '05 2015', '');
INSERT INTO schooltbl VALUES ('106', '00820120105', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('107', '00820120106', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('108', '00820120107', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('109', '00820120108', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('110', '00820120109', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('111', '00820120110', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('112', '00820120111', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('113', '00820120112', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('114', '00820120113', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('115', '00820120114', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('116', '00820120115', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('117', '00820120116', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('118', '00820120117', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('119', '00820120118', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('120', '00820120119', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('121', '00820120120', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('122', '00820120121', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('123', '00820120122', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('124', '00820120123', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('125', '00820120124', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('126', '00820120125', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('127', '00820120126', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('128', '00820120127', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('129', '00820120128', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('130', '00820120129', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('131', '00820120130', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('132', '00820120131', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('133', '00820120132', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('134', '00820120133', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('135', '00820120134', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('136', '00820120135', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('137', '00820120136', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('138', '00820120137', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('139', '00820120138', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('140', '00820120139', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('141', '00820120140', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('142', '00820120141', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSHRM', '05 2015', '');
INSERT INTO schooltbl VALUES ('153', '00820120190', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2016', '1');
INSERT INTO schooltbl VALUES ('144', '00820120164', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2015', '');
INSERT INTO schooltbl VALUES ('152', '00820120001', 'Malinta National High School', 'High School Diploma', '', '2008 - 2012', '0');
INSERT INTO schooltbl VALUES ('154', '00820120191', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2016', '1');
INSERT INTO schooltbl VALUES ('155', '00820120192', 'STI College Caloocan', 'Bachelor\'s/College Degree', 'BSCS', '05 2016', '1');

-- ----------------------------
-- Table structure for `seminartbl`
-- ----------------------------
DROP TABLE IF EXISTS `seminartbl`;
CREATE TABLE `seminartbl` (
  `SeminarID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Seminar` varchar(255) NOT NULL,
  `YearAttended` varchar(255) NOT NULL,
  PRIMARY KEY (`SeminarID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of seminartbl
-- ----------------------------
INSERT INTO seminartbl VALUES ('4', '00820120001', 'Professional etiquette', '2013');
INSERT INTO seminartbl VALUES ('3', '00820120001', 'Achievement Seminar', '2012');
INSERT INTO seminartbl VALUES ('5', '00820120001', 'Facebook Free Seminar', '2014');

-- ----------------------------
-- Table structure for `specializationtbl`
-- ----------------------------
DROP TABLE IF EXISTS `specializationtbl`;
CREATE TABLE `specializationtbl` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `YearOfExperience` varchar(255) NOT NULL,
  `Proficiency` varchar(255) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=MyISAM AUTO_INCREMENT=412 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of specializationtbl
-- ----------------------------
INSERT INTO specializationtbl VALUES ('4', '00820120006', 'sadsa', '1', '', '');
INSERT INTO specializationtbl VALUES ('5', '00820120007', 'asdas', '3', '', '');
INSERT INTO specializationtbl VALUES ('6', '00820120008', 'Biotechnology', '1', '', '');
INSERT INTO specializationtbl VALUES ('7', '00820120008', 'Customer Service (Technical)', '4', '', '');
INSERT INTO specializationtbl VALUES ('8', '00820120010', 'Actuarial Science/Statistics', '5', '', '');
INSERT INTO specializationtbl VALUES ('9', '00820120011', 'Customer Service (Technical)', '10', '', '');
INSERT INTO specializationtbl VALUES ('10', '00820120012', 'BPO/Call Center', '1', '', '');
INSERT INTO specializationtbl VALUES ('11', '00820120013', 'Corporate Strategy/Top Management', '1', '', '');
INSERT INTO specializationtbl VALUES ('12', '00820120014', 'IT/Computer - Software Development', '2', '', '');
INSERT INTO specializationtbl VALUES ('13', '00820120016', 'Logistics/Supply Chain', '5', '', '');
INSERT INTO specializationtbl VALUES ('14', '00820120017', 'Technical and Helpdesk Support', '1', '', '');
INSERT INTO specializationtbl VALUES ('15', '00820120018', 'Merchandising', '1', '', '');
INSERT INTO specializationtbl VALUES ('16', '00820120019', 'Research and Development', '3', '', '');
INSERT INTO specializationtbl VALUES ('17', '00820120019', 'Research and Development', '3', '', '');
INSERT INTO specializationtbl VALUES ('18', '00820120020', 'Sales - Financial Services (Insurance, Unit Trust, etc)', '7', '', '');
INSERT INTO specializationtbl VALUES ('19', '00820120021', 'Stockbroking', '1', '', '');
INSERT INTO specializationtbl VALUES ('20', '00820120021', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('21', '00820120022', 'Costing Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('22', '00820120023', 'Geology/Geophysics', '1', '', '');
INSERT INTO specializationtbl VALUES ('23', '00820120024', 'General Work (Housekeeper, Driver, Dispatch, Messenger, etc)', '2', '', '');
INSERT INTO specializationtbl VALUES ('24', '00820120025', 'Marketing/Business Development', '5', '', '');
INSERT INTO specializationtbl VALUES ('25', '00820120026', 'Purchasing/Inventory/Material and Warehouse Management', '8', '', '');
INSERT INTO specializationtbl VALUES ('26', '00820120027', 'IT/Computer - Creative Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('27', '00820120028', 'Quality Control/Assuranc', '2', '', '');
INSERT INTO specializationtbl VALUES ('28', '00820120028', 'Corporate Strategy/Top Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('29', '00820120029', 'Sales - Corporate / B2B', '4', '', '');
INSERT INTO specializationtbl VALUES ('30', '00820120030', 'Law/Legal Services', '4', '', '');
INSERT INTO specializationtbl VALUES ('31', '00820120031', 'Engineering - Environmental/Health/Safety', '1', '', '');
INSERT INTO specializationtbl VALUES ('32', '00820120032', 'IT/Computer - Network/System/Database Admin', '3', '', '');
INSERT INTO specializationtbl VALUES ('33', '00820120033', 'Project Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('34', '00820120034', 'Security/Armed Forces/Protective Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('35', '00820120035', 'Training and Development', '1', '', '');
INSERT INTO specializationtbl VALUES ('36', '00820120036', 'Agriculture/Forestry/Fisheries', '1', '', '');
INSERT INTO specializationtbl VALUES ('37', '00820120037', 'Customer Service (Technical)', '1', '', '');
INSERT INTO specializationtbl VALUES ('38', '00820120038', 'Hotel Management/Tourism Services', '1', '', '');
INSERT INTO specializationtbl VALUES ('39', '00820120039', 'Hotel Management/Tourism Services', '1', '', '');
INSERT INTO specializationtbl VALUES ('40', '00820120040', 'Food Technology/Nutritionist', '3', '', '');
INSERT INTO specializationtbl VALUES ('41', '00820120041', 'Finance - Corporate Finance/Investment/Merchant Banking<', '1', '', '');
INSERT INTO specializationtbl VALUES ('42', '00820120042', 'Human Resources', '3', '', '');
INSERT INTO specializationtbl VALUES ('43', '00820120043', 'Manufacturing/Production Operatio', '1', '', '');
INSERT INTO specializationtbl VALUES ('44', '00820120044', 'IT/Computer - QA', '2', '', '');
INSERT INTO specializationtbl VALUES ('45', '00820120045', 'Engineering - Oil/Gas', '3', '', '');
INSERT INTO specializationtbl VALUES ('46', '00820120046', 'Quantity Surveying', '1', '', '');
INSERT INTO specializationtbl VALUES ('47', '00820120047', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('48', '00820120048', 'Health Diagnosing', '5', '', '');
INSERT INTO specializationtbl VALUES ('49', '00820120049', 'Journalist/Editor', '1', '', '');
INSERT INTO specializationtbl VALUES ('50', '00820120050', 'Logistics/Supply Chain', '2', '', '');
INSERT INTO specializationtbl VALUES ('53', '00820120160', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('54', '00820120160', 'IT/Computer - Hardware', '1', '', '');
INSERT INTO specializationtbl VALUES ('56', '00820120004', 'Advertising/Media Planning', '3', '', '');
INSERT INTO specializationtbl VALUES ('57', '00820120004', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('58', '00820120004', 'Banking/Financial Services', '5', '', '');
INSERT INTO specializationtbl VALUES ('59', '00820120065', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('60', '00820120065', 'Agriculture/Forestry/Fisheries', '2', '', '');
INSERT INTO specializationtbl VALUES ('61', '00820120065', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('62', '00820120005', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('63', '00820120005', 'Arts and Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('64', '00820120005', 'Banking/Financial Services', '4', '', '');
INSERT INTO specializationtbl VALUES ('65', '00820120066', 'Agriculture/Forestry/Fisheries', '2', '', '');
INSERT INTO specializationtbl VALUES ('66', '00820120066', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('67', '00820120066', 'Clerical/Administrative Support', '1', '', '');
INSERT INTO specializationtbl VALUES ('68', '00820120067', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('69', '00820120006', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('70', '00820120067', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('71', '00820120006', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('72', '00820120067', 'Advertising/Media Planning', '1', '', '');
INSERT INTO specializationtbl VALUES ('73', '00820120006', 'Costing Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('74', '00820120068', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('75', '00820120068', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('76', '00820120068', 'Biotechnology', '1', '', '');
INSERT INTO specializationtbl VALUES ('77', '00820120007', 'Arts/Creative/Graphics Design', '6', '', '');
INSERT INTO specializationtbl VALUES ('78', '00820120007', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('81', '00820120069', 'Agriculture/Forestry/Fisheries', '1', '', '');
INSERT INTO specializationtbl VALUES ('82', '00820120069', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('83', '00820120069', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('84', '00820120008', 'Arts and Design', '5', '', '');
INSERT INTO specializationtbl VALUES ('85', '00820120008', 'Aviation/Aircraft Maintenance', '6', '', '');
INSERT INTO specializationtbl VALUES ('86', '00820120008', 'Banking/Financial Services', '6', '', '');
INSERT INTO specializationtbl VALUES ('87', '00820120009', 'Arts and Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('88', '00820120070', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('89', '00820120009', 'BPO/Call Center', '6', '', '');
INSERT INTO specializationtbl VALUES ('90', '00820120070', 'Agriculture/Forestry/Fisheries', '3', '', '');
INSERT INTO specializationtbl VALUES ('91', '00820120009', 'Chemistry', '7', '', '');
INSERT INTO specializationtbl VALUES ('92', '00820120070', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('93', '00820120071', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('94', '00820120010', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('95', '00820120071', 'Arts and Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('96', '00820120010', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('97', '00820120071', 'Architecture/Interior Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('98', '00820120010', 'BPO/Call Center', '4', '', '');
INSERT INTO specializationtbl VALUES ('99', '00820120072', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('100', '00820120072', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('101', '00820120011', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('102', '00820120072', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('103', '00820120011', 'BPO/Call Center', '4', '', '');
INSERT INTO specializationtbl VALUES ('104', '00820120073', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('105', '00820120073', 'Architecture/Interior Design', '11', '', '');
INSERT INTO specializationtbl VALUES ('106', '00820120012', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('107', '00820120073', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('108', '00820120012', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('109', '00820120012', 'Costing Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('110', '00820120074', 'Agriculture/Forestry/Fisheries', '1', '', '');
INSERT INTO specializationtbl VALUES ('111', '00820120013', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('112', '00820120074', 'Architecture/Interior Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('113', '00820120013', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('114', '00820120074', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('115', '00820120013', 'BPO/Call Center', '4', '', '');
INSERT INTO specializationtbl VALUES ('116', '00820120075', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('117', '00820120075', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('118', '00820120075', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('119', '00820120014', 'Biotechnology', '4', '', '');
INSERT INTO specializationtbl VALUES ('120', '00820120014', 'Clerical/Administrative Support', '3', '', '');
INSERT INTO specializationtbl VALUES ('121', '00820120014', 'BPO/Call Center', '5', '', '');
INSERT INTO specializationtbl VALUES ('122', '00820120076', 'Agriculture/Forestry/Fisheries', '1', '', '');
INSERT INTO specializationtbl VALUES ('123', '00820120076', 'Arts and Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('124', '00820120076', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('125', '00820120015', 'Clerical/Administrative Support', '3', '', '');
INSERT INTO specializationtbl VALUES ('126', '00820120015', 'Costing Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('127', '00820120015', 'Banking/Financial Services', '5', '', '');
INSERT INTO specializationtbl VALUES ('128', '00820120077', 'Agriculture/Forestry/Fisheries', '1', '', '');
INSERT INTO specializationtbl VALUES ('129', '00820120077', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('130', '00820120077', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('131', '00820120016', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('132', '00820120016', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('133', '00820120016', 'Clerical/Administrative Support', '2', '', '');
INSERT INTO specializationtbl VALUES ('134', '00820120078', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('135', '00820120078', 'Arts and Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('136', '00820120078', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('137', '00820120017', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('138', '00820120017', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('139', '00820120017', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('140', '00820120079', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('141', '00820120079', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('142', '00820120079', 'Costing Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('143', '00820120018', 'Arts and Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('144', '00820120018', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('145', '00820120080', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('146', '00820120018', 'Corporate Strategy/Top Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('147', '00820120080', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('148', '00820120080', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('149', '00820120019', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('150', '00820120019', 'Clerical/Administrative Support', '4', '', '');
INSERT INTO specializationtbl VALUES ('151', '00820120081', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('152', '00820120019', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('153', '00820120081', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('154', '00820120081', 'Chemistry', '1', '', '');
INSERT INTO specializationtbl VALUES ('155', '00820120020', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('156', '00820120020', 'Chemistry', '1', '', '');
INSERT INTO specializationtbl VALUES ('157', '00820120082', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('158', '00820120020', 'Clerical/Administrative Support', '3', '', '');
INSERT INTO specializationtbl VALUES ('159', '00820120082', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('160', '00820120082', 'Agriculture/Forestry/Fisheries', '5', '', '');
INSERT INTO specializationtbl VALUES ('161', '00820120021', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('162', '00820120021', 'BPO/Call Center', '1', '', '');
INSERT INTO specializationtbl VALUES ('163', '00820120021', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('164', '00820120083', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('165', '00820120083', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('166', '00820120083', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('167', '00820120022', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('168', '00820120022', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('169', '00820120084', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('170', '00820120022', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('171', '00820120084', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('172', '00820120084', 'Corporate Strategy/Top Management', '1', '', '');
INSERT INTO specializationtbl VALUES ('173', '00820120085', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('174', '00820120085', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('175', '00820120085', 'BPO/Call Center', '1', '', '');
INSERT INTO specializationtbl VALUES ('176', '00820120024', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('177', '00820120024', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('178', '00820120024', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('179', '00820120086', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('180', '00820120086', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('181', '00820120086', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('182', '00820120025', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('183', '00820120025', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('184', '00820120025', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('185', '00820120087', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('186', '00820120087', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('187', '00820120087', 'Advertising/Media Planning', '1', '', '');
INSERT INTO specializationtbl VALUES ('188', '00820120026', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('189', '00820120026', 'Clerical/Administrative Support', '4', '', '');
INSERT INTO specializationtbl VALUES ('190', '00820120026', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('191', '00820120088', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('192', '00820120088', 'Corporate Strategy/Top Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('193', '00820120088', 'Customer Service', '2', '', '');
INSERT INTO specializationtbl VALUES ('194', '00820120089', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('195', '00820120089', 'Architecture/Interior Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('196', '00820120028', 'Corporate Strategy/Top Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('197', '00820120089', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('198', '00820120028', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('199', '00820120028', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('200', '00820120090', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('201', '00820120029', 'Architecture/Interior Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('202', '00820120090', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('203', '00820120029', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('204', '00820120090', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('205', '00820120029', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('206', '00820120091', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('207', '00820120091', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('208', '00820120030', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('209', '00820120091', 'Chemistry', '1', '', '');
INSERT INTO specializationtbl VALUES ('210', '00820120030', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('211', '00820120030', 'Biotechnology', '4', '', '');
INSERT INTO specializationtbl VALUES ('212', '00820120092', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('213', '00820120031', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('214', '00820120092', 'Customer Service (Technical)', '2', '', '');
INSERT INTO specializationtbl VALUES ('215', '00820120031', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('216', '00820120092', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('217', '00820120031', 'Clerical/Administrative Support', '4', '', '');
INSERT INTO specializationtbl VALUES ('218', '00820120093', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('219', '00820120093', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('220', '00820120093', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('221', '00820120032', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('222', '00820120032', 'Corporate Strategy/Top Management', '1', '', '');
INSERT INTO specializationtbl VALUES ('223', '00820120032', 'Chemistry', '1', '', '');
INSERT INTO specializationtbl VALUES ('224', '00820120094', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('225', '00820120094', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('226', '00820120094', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('227', '00820120033', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('228', '00820120033', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('229', '00820120033', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('230', '00820120034', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('231', '00820120034', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('232', '00820120095', 'Customer Service', '1', '', '');
INSERT INTO specializationtbl VALUES ('233', '00820120034', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('234', '00820120095', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('235', '00820120095', 'Corporate Strategy/Top Management', '4', '', '');
INSERT INTO specializationtbl VALUES ('236', '00820120035', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('237', '00820120035', 'Biotechnology', '4', '', '');
INSERT INTO specializationtbl VALUES ('238', '00820120035', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('239', '00820120096', 'Biotechnology', '1', '', '');
INSERT INTO specializationtbl VALUES ('240', '00820120096', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('241', '00820120096', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('242', '00820120035', 'Banking/Financial Services', '4', '', '');
INSERT INTO specializationtbl VALUES ('243', '00820120035', 'Chemistry', '4', '', '');
INSERT INTO specializationtbl VALUES ('244', '00820120035', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('245', '00820120097', 'BPO/Call Center', '1', '', '');
INSERT INTO specializationtbl VALUES ('246', '00820120097', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('247', '00820120097', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('248', '00820120036', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('249', '00820120036', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('250', '00820120036', 'Biotechnology', '4', '', '');
INSERT INTO specializationtbl VALUES ('251', '00820120098', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('252', '00820120098', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('253', '00820120098', 'Clerical/Administrative Support', '3', '', '');
INSERT INTO specializationtbl VALUES ('254', '00820120037', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('255', '00820120037', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('256', '00820120037', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('257', '00820120099', 'Advertising/Media Planning', '1', '', '');
INSERT INTO specializationtbl VALUES ('258', '00820120099', 'Clerical/Administrative Support', '2', '', '');
INSERT INTO specializationtbl VALUES ('259', '00820120099', 'Clerical/Administrative Support', '2', '', '');
INSERT INTO specializationtbl VALUES ('260', '00820120038', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('261', '00820120038', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('262', '00820120038', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('263', '00820120100', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('264', '00820120100', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('265', '00820120100', 'Clerical/Administrative Support', '3', '', '');
INSERT INTO specializationtbl VALUES ('266', '00820120039', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('267', '00820120039', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('268', '00820120039', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('269', '00820120101', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('270', '00820120101', 'Costing Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('271', '00820120101', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('272', '00820120039', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('273', '00820120039', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('274', '00820120039', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('275', '00820120040', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('276', '00820120040', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('277', '00820120040', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('278', '00820120102', 'Biotechnology', '1', '', '');
INSERT INTO specializationtbl VALUES ('279', '00820120102', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('280', '00820120102', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('281', '00820120041', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('282', '00820120041', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('283', '00820120041', 'Costing Management', '4', '', '');
INSERT INTO specializationtbl VALUES ('284', '00820120103', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('285', '00820120103', 'Customer Service (Technical)', '22', '', '');
INSERT INTO specializationtbl VALUES ('286', '00820120103', 'Customer Service', '1', '', '');
INSERT INTO specializationtbl VALUES ('287', '00820120042', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('288', '00820120042', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('289', '00820120042', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('290', '00820120104', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('291', '00820120104', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('292', '00820120104', 'Customer Service', '4', '', '');
INSERT INTO specializationtbl VALUES ('293', '00820120043', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('294', '00820120043', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('295', '00820120043', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('296', '00820120105', 'Biotechnology', '11', '', '');
INSERT INTO specializationtbl VALUES ('297', '00820120105', 'Customer Service (Technical)', '2', '', '');
INSERT INTO specializationtbl VALUES ('298', '00820120105', 'Costing Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('299', '00820120044', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('300', '00820120044', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('301', '00820120044', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('302', '00820120106', 'Costing Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('303', '00820120106', 'Clerical/Administrative Support', '3', '', '');
INSERT INTO specializationtbl VALUES ('304', '00820120106', 'Banking/Financial Services', '1', '', '');
INSERT INTO specializationtbl VALUES ('305', '00820120045', 'Corporate Strategy/Top Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('306', '00820120045', 'Arts and Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('307', '00820120045', 'Biotechnology', '4', '', '');
INSERT INTO specializationtbl VALUES ('308', '00820120107', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('309', '00820120107', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('310', '00820120107', 'Clerical/Administrative Support', '4', '', '');
INSERT INTO specializationtbl VALUES ('311', '00820120047', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('312', '00820120047', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('313', '00820120047', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('314', '00820120108', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('315', '00820120108', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('316', '00820120050', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('317', '00820120050', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('318', '00820120108', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('319', '00820120050', 'Banking/Financial Services', '4', '', '');
INSERT INTO specializationtbl VALUES ('320', '00820120051', 'Architecture/Interior Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('321', '00820120051', 'Arts and Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('322', '00820120109', 'Biotechnology', '1', '', '');
INSERT INTO specializationtbl VALUES ('323', '00820120051', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('324', '00820120109', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('325', '00820120109', 'Clerical/Administrative Support', '4', '', '');
INSERT INTO specializationtbl VALUES ('326', '00820120052', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('327', '00820120052', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('328', '00820120052', 'Arts and Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('329', '00820120110', 'BPO/Call Center', '1', '', '');
INSERT INTO specializationtbl VALUES ('330', '00820120110', 'Customer Service', '2', '', '');
INSERT INTO specializationtbl VALUES ('331', '00820120110', 'Costing Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('332', '00820120053', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('333', '00820120053', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('334', '00820120053', 'Aviation/Aircraft Maintenance', '4', '', '');
INSERT INTO specializationtbl VALUES ('335', '00820120111', 'Corporate Strategy/Top Management', '1', '', '');
INSERT INTO specializationtbl VALUES ('336', '00820120111', 'Clerical/Administrative Support', '2', '', '');
INSERT INTO specializationtbl VALUES ('337', '00820120111', 'Corporate Strategy/Top Management', '4', '', '');
INSERT INTO specializationtbl VALUES ('338', '00820120054', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('339', '00820120054', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('340', '00820120054', 'Biotechnology', '4', '', '');
INSERT INTO specializationtbl VALUES ('341', '00820120112', 'Aviation/Aircraft Maintenance', '11', '', '');
INSERT INTO specializationtbl VALUES ('342', '00820120112', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('343', '00820120112', 'Customer Service', '3', '', '');
INSERT INTO specializationtbl VALUES ('344', '00820120055', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('345', '00820120055', 'Banking/Financial Services', '4', '', '');
INSERT INTO specializationtbl VALUES ('346', '00820120055', 'Banking/Financial Services', '3', '', '');
INSERT INTO specializationtbl VALUES ('347', '00820120113', 'Clerical/Administrative Support', '1', '', '');
INSERT INTO specializationtbl VALUES ('348', '00820120113', 'Customer Service (Technical)', '2', '', '');
INSERT INTO specializationtbl VALUES ('349', '00820120113', 'Education / Academe', '4', '', '');
INSERT INTO specializationtbl VALUES ('350', '00820120056', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('351', '00820120056', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('352', '00820120056', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('353', '00820120114', 'Banking/Financial Services', '12', '', '');
INSERT INTO specializationtbl VALUES ('354', '00820120114', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('355', '00820120114', 'Biotechnology', '1', '', '');
INSERT INTO specializationtbl VALUES ('356', '00820120057', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('357', '00820120057', 'Architecture/Interior Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('358', '00820120057', 'Banking/Financial Services', '4', '', '');
INSERT INTO specializationtbl VALUES ('359', '00820120115', 'Banking/Financial Services', '1', '', '');
INSERT INTO specializationtbl VALUES ('360', '00820120115', 'Corporate Strategy/Top Management', '2', '', '');
INSERT INTO specializationtbl VALUES ('361', '00820120115', 'BPO/Call Center', '3', '', '');
INSERT INTO specializationtbl VALUES ('362', '00820120059', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('363', '00820120059', 'Arts/Creative/Graphics Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('364', '00820120059', 'Banking/Financial Services', '2', '', '');
INSERT INTO specializationtbl VALUES ('365', '00820120116', 'Aviation/Aircraft Maintenance', '1', '', '');
INSERT INTO specializationtbl VALUES ('366', '00820120116', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('367', '00820120116', 'Corporate Strategy/Top Management', '3', '', '');
INSERT INTO specializationtbl VALUES ('368', '00820120061', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('369', '00820120061', 'Architecture/Interior Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('370', '00820120061', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('371', '00820120117', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('372', '00820120117', 'Clerical/Administrative Support', '2', '', '');
INSERT INTO specializationtbl VALUES ('373', '00820120117', 'Corporate Strategy/Top Management', '4', '', '');
INSERT INTO specializationtbl VALUES ('374', '00820120062', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('375', '00820120062', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('376', '00820120062', 'Aviation/Aircraft Maintenance', '3', '', '');
INSERT INTO specializationtbl VALUES ('377', '00820120118', 'Arts and Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('378', '00820120118', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('379', '00820120118', 'Costing Management', '4', '', '');
INSERT INTO specializationtbl VALUES ('380', '00820120063', 'Architecture/Interior Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('381', '00820120063', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('382', '00820120063', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('383', '00820120119', 'Banking/Financial Services', '1', '', '');
INSERT INTO specializationtbl VALUES ('384', '00820120119', 'Chemistry', '2', '', '');
INSERT INTO specializationtbl VALUES ('385', '00820120119', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('386', '00820120064', 'Biotechnology', '3', '', '');
INSERT INTO specializationtbl VALUES ('387', '00820120064', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('388', '00820120064', 'Arts/Creative/Graphics Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('389', '00820120120', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('390', '00820120120', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('391', '00820120120', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('392', '00820120124', 'Arts and Design', '5', '', '');
INSERT INTO specializationtbl VALUES ('393', '00820120124', 'Arts and Design', '2', '', '');
INSERT INTO specializationtbl VALUES ('394', '00820120124', 'Arts and Design', '3', '', '');
INSERT INTO specializationtbl VALUES ('395', '00820120121', 'Architecture/Interior Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('396', '00820120121', 'BPO/Call Center', '2', '', '');
INSERT INTO specializationtbl VALUES ('397', '00820120121', 'Chemistry', '3', '', '');
INSERT INTO specializationtbl VALUES ('398', '00820120123', 'Aviation/Aircraft Maintenance', '2', '', '');
INSERT INTO specializationtbl VALUES ('399', '00820120123', 'Agriculture/Forestry/Fisheries', '3', '', '');
INSERT INTO specializationtbl VALUES ('400', '00820120123', 'Arts/Creative/Graphics Design', '4', '', '');
INSERT INTO specializationtbl VALUES ('401', '00820120122', 'Arts/Creative/Graphics Design', '1', '', '');
INSERT INTO specializationtbl VALUES ('402', '00820120122', 'Biotechnology', '2', '', '');
INSERT INTO specializationtbl VALUES ('403', '00820120122', 'Clerical/Administrative Support', '4', '', '');
INSERT INTO specializationtbl VALUES ('411', '00820120001', 'IT/Computer - QA', '1', '5', 'Microsoft Powerpoint');
INSERT INTO specializationtbl VALUES ('409', '00820120001', 'IT/Computer - Software Development', '1', '3.5', 'Java Programming');
INSERT INTO specializationtbl VALUES ('410', '00820120001', 'IT/Computer - Creative Design', '2', '5', 'Microsoft Word');

-- ----------------------------
-- Table structure for `studcontactstbl`
-- ----------------------------
DROP TABLE IF EXISTS `studcontactstbl`;
CREATE TABLE `studcontactstbl` (
  `ContactsID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `HomeNumber` varchar(255) NOT NULL,
  `PostalCode` varchar(255) NOT NULL,
  `WorkNumber` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  PRIMARY KEY (`ContactsID`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studcontactstbl
-- ----------------------------
INSERT INTO studcontactstbl VALUES ('1', '00820120001', 'markjoseph1496@yahoo.com', '2890 A. Pablo St. Karuhatan, Valenzuela City', '09355585931', '', '2790201', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('3', '00820120003', 'aasdsad@cs.cc', '', '09355585931', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('4', '00820120004', 'tristanabad55@gmail.com', '', '09239565052', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('5', '00820120005', 'binary.to.hexa@gmail.com', '', '09261788252', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('6', '00820120006', 'cloveragustin@gmail.com', '', '09309056653', '', '', '', '', 'Quezon City');
INSERT INTO studcontactstbl VALUES ('7', '00820120007', 'asdfghjkl@gmail.com', '', '09356682322', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('8', '00820120008', 'johnpaulaldana22@yahoo.com', '', '09321073541', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('9', '00820120009', 'cediealegre@yahoo.com', '', '09264915304', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('10', '00820120010', 'Therhsgroup@yahoo.com', '', '09164932034', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('11', '00820120011', 'toper.bermudez@gmail.com', '', '09061025685', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('12', '00820120012', 'kevynclaire@gmail.com', '', '09051300285', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('13', '00820120013', 'rhoyevangeline@gmail.com', '', '09233696109', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('14', '00820120014', 'elazarosegadi13@yahoo.com', '', '09367682952', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('15', '00820120015', 'looneytunes20157@gmail.com', '', '09161671415', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('16', '00820120016', 'imsuperella@yahoo.com', '', '09158965506', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('17', '00820120017', 'lacson1997@gmail,com', '', '09164701041', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('18', '00820120018', 'clark_virgo@yahoo.com.ph', '', '09109648485', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('19', '00820120019', 'carlo_mayor13@yahoo.com', '', '09089468485', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('20', '00820120020', 'hironmiranda@gmail.com', '', '09302230364', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('21', '00820120021', 'neobasic18@gmail,com', '', '09176812140', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('22', '00820120022', 'crystaljhoypalisoc@yahoo.com', '', '09481341584', '', '', '', '', 'Para?aque City');
INSERT INTO studcontactstbl VALUES ('23', '00820120023', 'Tristan.patindol@ymail.com', '', '09057229946', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('24', '00820120024', 'alvin_gonzalez@yahoo.com', '', '09052881623', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('25', '00820120025', 'roncedie13@yahoo.com', '', '3605546', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('26', '00820120026', 'micoleramos@gmail.com', '', '0935334428', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('27', '00820120027', 'omar_yuan@yahoo.com', '', '09224710679', '', '', '', '', 'Pasay City');
INSERT INTO studcontactstbl VALUES ('28', '00820120028', 'hans@gmail.com', '', '2879316', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('29', '00820120029', 'ritaritajessi@yahoo.com', '', '09101290985', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('30', '00820120030', 'gwapz_bel1@yahoo.com', '', '09288443432', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('31', '00820120031', 'santoslleonalyn@gmail.com', '', '09321343261', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('32', '00820120032', 'jhonclaude014@gmail.com', '', '09161297411', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('33', '00820120033', 'kimyap0711@gmail.com', '', '09336078596', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('34', '00820120034', 'aguinaldo.nicko26@gmail.com', '', '09368820847', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('35', '00820120035', 'mizs_sheila@yahoo.com', '', '09151274716', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('36', '00820120036', 'imarah.alinsonorin@gmail.com', '', '09359331518', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('37', '00820120037', 'ampoloquio_alberto@yahoo.com', '', '09017236295', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('38', '00820120038', 'princeaddamaveno@gmail.com', '', '09179703303', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('39', '00820120039', 'bacodjilliancamille@gmail.com', '', '09169991083', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('40', '00820120040', 'kimbaldugo@gmail.com', '', '09355849298', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('41', '00820120041', 'bautistaedrich@yahoo.com', '', '09362543999', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('42', '00820120042', 'shyne_bondoc@yahoo.com.ph', '', '09225452445', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('43', '00820120043', 'em.buban@gmail.com', '', '09359635490', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('44', '00820120044', 'buenaobrad@yahoo.com', '', '09161490357', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('45', '00820120045', 'jhonmarkb@gmail.com', '', '09266168082', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('46', '00820120046', 'jhonpaul_caaya@yahoo.com', '', '09161625160', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('47', '00820120047', 'maromellecadag@gmail.com', '', '09464959076', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('48', '00820120048', 'imcanete.grace@gmail.com', '', '9161625160', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('49', '00820120049', 'canocatherine@caloocan.sti.edu', '', '9055856554', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('50', '00820120050', 'gianpaul_capitle@yahoo.com', '', '9305685226', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('51', '00820120051', 'richmonjosephcarlos.29@gmail.com', '', '9351397181', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('52', '00820120052', 'castrojennely@gmail.com', '', '9994355844', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('53', '00820120053', 'richmondcarlos@yahoo.com', '', '09423843824', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('54', '00820120054', 'castrojennely@gmail.com', '', '09994355844', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('55', '00820120055', 'celocia.rechiel@gmail.com', '', '9496630648', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('56', '00820120056', 'sndrajustin@gmail.com', '', '09357956722', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('57', '00820120057', 'vinceco07@yahoo.com', '', '9097474042', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('58', '00820120058', 'cjaynald@gmail.com', '', '9306151551', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('59', '00820120059', 'delacruz.kamille21@gmail.com', '', '9068405950', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('60', '00820120060', 'marcodionisio14@yahoo.com', '', '9056240218', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('61', '00820120061', 'jayson.escaner@gmail.com', '', '9293611912', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('62', '00820120062', 'estrada.abegael@gmail.com', '', '(3554)-406', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('63', '00820120063', 'jamiemfalla23@gmail.com', '', '09222378143', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('64', '00820120064', 'engelique.fernandez@yahoo.com', '', '09262294020', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('65', '00820120065', 'elisamaeflorano@gmail.com', '', '9361393782', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('66', '00820120066', 'fulaymariajessa@caloocan.sti.edu', '', '9362146332', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('67', '00820120067', 'galabay.jessica@gmail.com', '', '9065836631', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('68', '00820120068', 'mike2592005@yahoo.com', '', '09058636502', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('69', '00820120069', 'genitadianajean@gmail.com', '', '9398192264', '', '', '', '', 'Manila');
INSERT INTO studcontactstbl VALUES ('70', '00820120070', 'liezlmanjare@yahoo.com', '', '09336448247', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('71', '00820120071', 'eredondon@gmail.com', '', '9352162909', '', '', '', '', 'Manila');
INSERT INTO studcontactstbl VALUES ('72', '00820120072', 'ricamanapat31@gmail.com', '', '09368045267', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('73', '00820120073', 'eguiang08@gmail.com', '', '9303256451', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('74', '00820120074', 'irobhonradez@gmail.com', '', '9276630955', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('75', '00820120075', 'reynajaneigno@gmail.com', '', '9163319834', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('76', '00820120076', 'lacsina_shiestchaste@yahoo.com', '', '9269410885', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('77', '00820120077', 'lagonerodiana@gmail.com', '', '9257773334', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('78', '00820120078', 'Jhenaryl_Lucas@yahoo.com', '', '9465750092', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('79', '00820120079', 'kevinmacalalad71@yahoo.com', '', '9354386594', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('80', '00820120080', 'marianomaricelangeles@yahoo.com', '', '9438660565', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('81', '00820120081', 'manlapazmhae@yahoo.com', '', '09153164319', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('82', '00820120082', 'lmanliclic@ymail.com', '', '09301185616', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('83', '00820120083', 'malencionshella@yahoo.com', '', '9354521208', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('84', '00820120084', 'ellamariano22@yahoo.com', '', '09061231315', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('85', '00820120085', 'rnheizamrelos@yahoo.com', '', '09108402746', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('86', '00820120086', 'boppy_17@yahoo.com', '', '9067167593', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('87', '00820120087', 'iamkatemoreno@yahoo.com', '', '09071635363', '', '', '', '', 'Quezon City');
INSERT INTO studcontactstbl VALUES ('88', '00820120088', 'ykarlomorales@gmail.com', '', '90224613394', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('89', '00820120089', 'hershey.navarro@gmail.com', '', '09332367727', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('90', '00820120090', 'karenmorino@yahoo.com', '', '9068643641', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('91', '00820120091', 'elenaobaldo@gmail.com', '', '09183656689', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('92', '00820120092', 'yogi_ong08@yahoo.com', '', '09369631534', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('93', '00820120093', 'nequinto.candy@gmail.com', '', '9055540654', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('94', '00820120094', 'michaelacamillepamintuan@yahoo.com', '', '09258082795', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('95', '00820120095', 'eun143404@ymail.com', '', '09065671577', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('96', '00820120096', 'penillaleziel@yahoo.com', '', '09056875034', '', '', '', '', 'Quezon City');
INSERT INTO studcontactstbl VALUES ('97', '00820120097', 'jayzzzification@rocketmail.com', '', '09358126046', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('98', '00820120098', 'nequinto_carina@yahoo.com', '', '9498460533', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('99', '00820120099', 'poyaoan.melanie@yahoo.com', '', '09058060809', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('100', '00820120100', 'oshinracsa@gmail.com', '', '09239747927', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('101', '00820120101', 'jerencenilo@yahoo.com', '', '9357956691', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('102', '00820120102', 'ongmylene55@gmail.com', '', '9162549548', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('103', '00820120103', 'jenniebiacopintor2gmail.com', '', '09325036350', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('104', '00820120104', 'alvinprudente823@gmail.com', '', '9771907872', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('105', '00820120105', 'maryjuvy.refran@yahoo.com', '', '09358083638', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('106', '00820120106', 'herschelrianrico@yahoo.com', '', '09398258590', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('107', '00820120107', 'dencelrosal@yahoo.com', '', '09981514752', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('108', '00820120108', 'krishelle.sagales@yahoo.com', '', '09264026328', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('109', '00820120109', 'johnjoel.santos@gmail.com', '', '09051391497', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('110', '00820120110', 'chescasarino@gmail.com', '', '09309935709', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('111', '00820120111', 'rrseverano@yahoo.com', '', '09066277943', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('112', '00820120112', 'simbulanshaira@yahoo.com', '', '09306560874', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('113', '00820120113', 'jeffreymartan09@gmail.com', '', '09753403066', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('114', '00820120114', 'princessronatanghal@yahoo.com', '', '09068152863', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('115', '00820120115', 'elizabeth28tiangco@yahoo.com', '', '09088745655', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('116', '00820120116', 'raymar082011@yahoo.com', '', '09212322036', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('117', '00820120117', 'ghera_udarbe@yahoo.com.ph', '', '09352314658', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('118', '00820120118', 'valencia.jaizel@yahoo.com', '', '09053256908', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('119', '00820120119', 'jewevargas19@yahoo.com', '', '09167587971', '', '', '', '', 'Manila');
INSERT INTO studcontactstbl VALUES ('120', '00820120120', 'vasquezraeneil@yahoo.com', '', '09062146346', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('121', '00820120121', 'vicenteangela@yahoo.com', '', '09463410018', '', '', '', '', 'Manila');
INSERT INTO studcontactstbl VALUES ('122', '00820120122', 'rhodoravino@gmail.com', '', '09061028270', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('123', '00820120123', 'jaysonzabanal@yahoo.com', '', '09062510263', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('124', '00820120124', 'jhonpaulalberio@yahoo.com', '', '09465836638', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('125', '00820120125', 'giulianoalejandria@yahoo.com', '', '09488186790', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('126', '00820120126', 'kalfonso30@gmail.com', '', '09263600250', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('127', '00820120127', 'almario.rosejane@yahoo.com', '', '09061982795', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('128', '00820120128', 'alonzojuanpaolo@caloocan.sti.edu', '', '09269014525', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('129', '00820120129', 'amargoanamari@gmail.com', '', '09463759018', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('130', '00820120130', 'jamaica04_amparo@yahoo.com', '', '09061674311', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('131', '00820120131', 'darryljatulanang@yahoo.com', '', '09997212616', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('132', '00820120132', 'markang663@gmail.com', '', '09303196459', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('133', '00820120133', 'ulyssesang.sebastian@gmail.com', '', '09279867406', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('134', '00820120134', 'renzrainielanillo@yahoo.com', '', '09155349377', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('135', '00820120135', 'anosprincess29@gmail.com', '', '09168746279', '', '', '', '', 'Manila');
INSERT INTO studcontactstbl VALUES ('136', '00820120136', 'zyrellepatrickaustero@yahoo.com', '', '09352072988', '', '', '', '', 'Quezon City');
INSERT INTO studcontactstbl VALUES ('137', '00820120137', 'ailynayen@yahoo.com', '', '09366822716', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('138', '00820120138', 'janebacongan@ymail.com', '', '9207223443', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('139', '00820120139', 'eltonjohnbactong@yahoo.com', '', '09159674793', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('140', '00820120140', 'anne.barba@yahoo.com', '', '09353113782', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('141', '00820120141', 'ejboquiren44@gmail.com', '', '09151477826', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('142', '00820120142', 'asdsad@cc.cc', '', '324242424', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('143', '00820120142', 'balbaxandra@caloocan.sti.edu', '', '09059160330', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('144', '00820120144', 'gharbarboza@gmail.com', '', '09353240701', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('145', '00820120145', 'barrettokennethjohn@yahoo.com', '', '09077397738', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('146', '00820120146', 'allencila@gmail.com', '', '09155331362', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('147', '00820120147', 'hanssy27@yahoo.com', '', '09999546290', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('148', '00820120148', 'julieannbelga@gmail.com', '', '09228476820', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('149', '00820120149', 'jcnbenzon@gmail.com', '', '09262823788', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('150', '00820120150', 'bernardotommy@caloocan.sti.edu', '', '09076146906', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('151', '00820120151', 'christianbillbrizuela@yahoo.com', '', '09364278871', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('152', '00820120152', 'elaizabustamante@caloocan.sti.edu', '', '09363652298', '', '', '', '', 'Malabon City');
INSERT INTO studcontactstbl VALUES ('153', '00820120153', 'minervacacho@caloocan.sti.edu', '', '09353546312', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('154', '00820120154', 'lhaila_madine@yahoo.com', '', '09123356277', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('155', '00820120155', 'zedrickcarable@yahoo.com', '', '09351151313', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('156', '00820120156', 'kerwin.cartel@gmail.com', '', '09274701312', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('157', '00820120157', 'gabrielangelo@caloocan.sti.edu', '', '09152042324', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('158', '00820120158', 'mark_twainc@yahoo.com', '', '09213195124', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('159', '00820120159', 'cometajr@caloocan.sti.edu', '', '09064565174', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('160', '00820120160', 'consuelohenrygrefaldo@gmail.com', '', '09303524738', '', '', '', '', 'Caloocan City');
INSERT INTO studcontactstbl VALUES ('161', '00820120161', 'ennaesor.zurc24@gmail.com', '', '09067120716', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('162', '00820120162', 'markguilercuevas@yahoo.com', '', '09328470260', '', '', '', '', 'Navotas City');
INSERT INTO studcontactstbl VALUES ('163', '00820120163', 'philipperaymart@gmail.com', '', '09163515230', '', '', '', '', 'Quezon City');
INSERT INTO studcontactstbl VALUES ('164', '00820120164', 'berdensen@gmail.com', '', '09213412641', '', '', '', '', 'Pasig City');
INSERT INTO studcontactstbl VALUES ('165', '12321312', 'aaaa@cc.cc', '', '12312312312', '', '', '', '', 'San Juan City');
INSERT INTO studcontactstbl VALUES ('166', '00820120190', 'markjoseph1496@yahoo.com', '', '09355585931', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('167', '00820120191', 'markjoseph1496@yahoo.com', '', '09355585931', '', '', '', '', 'Valenzuela City');
INSERT INTO studcontactstbl VALUES ('168', '00820120192', 'markjoseph1496@yahoo.com', '2890 A. Pablo St. Karuhatan, Valenzuela City', '09355585931', '', '', '', '', 'Valenzuela City');

-- ----------------------------
-- Table structure for `studentinfotbl`
-- ----------------------------
DROP TABLE IF EXISTS `studentinfotbl`;
CREATE TABLE `studentinfotbl` (
  `StudentID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `SaltedPassword` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Birthdate` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `CivilStatus` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `EmploymentStatus` varchar(255) NOT NULL,
  `FBLink` varchar(255) NOT NULL,
  `TwitterLink` varchar(255) NOT NULL,
  `ProfileImage` varchar(255) NOT NULL,
  `MajorCourse` varchar(255) NOT NULL,
  `Objectives` varchar(300) NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=MyISAM AUTO_INCREMENT=820120165 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studentinfotbl
-- ----------------------------
INSERT INTO studentinfotbl VALUES ('00820120001', 'b6454095efa3f85096ece699c0d9052c572ef11ff92058af5982cd57f3ae399ea7ee458a09433d7982e8979d336c54e5893459851dc5b6179c81fe065fedc674', '808a73c9742958c6714fe7fd11f2d4d244f358ced430174b01c2bc5627af40021889f813b93f8b1b76044aa54caa78a8eff95f7357891d37f451c08f7155e235', 'Mark Joseph', 'Flaviano', 'Cinco', 'Male', '1996-03-14', 'OJT', 'Single', 'Filipino', 'Employed', 'http://www.facebook.com/akodawsimacoy', '', 'ProfileImages/00820120001.jpg', 'BSCS', ' I am seeking a position in the travel industry focusing on sales, customer care and office management. Education.');
INSERT INTO studentinfotbl VALUES ('00820120003', 'daa84497905fe6e26a872cfd699b36b3af689335652d5413e1005bebd6e867f23dad79318efe22dce702c5de70abc1f07f00968001a8ea9664f54fb038140850', '20d7c6e44a2467e1609014c24a31faae35a31aa413338b14f48225141e1aa5679ab2573c5be38b84122913dc6657ebb62d3974a44a7a21f62b7892d1d5e45b12', 'Testing', '', 'Testing', '', '0123-01-01', '', '', '', 'Unemployed', '', '', '', 'BSAT', '');
INSERT INTO studentinfotbl VALUES ('00820120004', '3d8fd53015c9929dd24e29958d0a939ba5dff8d18f6335138f48d74312df1ac316173f11585b72295067ca57c58d9aa412b6a95c4a09fde4466dc4c2b2caf24e', 'fc914918a09a5e3fb1948c2c677854a3c01e35cc9f29728b4ba9833f0e16c0617a9025d9ee089216c644ab72a52d9000f0a4208fac8777a69e226fb4d7881d8a', 'Tristan', 'adasd', 'Abad', 'Male', '1996-10-31', '', 'Single', 'Filipino', 'Employed', 'http://www.facebook.com/adsadsf', 'sfsdfs', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120005', 'c2a4eff2f75be4b01d85d3efffaa9c5334a70744f7670c10b6daf3d672cfc7dfaaf1c9e40b6e33b593195017f7d8e714959ad60f18ab77ad7a600c8b2fb002eb', 'da85b1e23a09aad2b4d21695773a6eca951913f20b0288e1b8086c6fc49b31aa77e3bf7fccb25fb6438ae6088ec930e1eb805923fb07f28ef28e7825891b8c4b', 'Mark Anthony', '', 'Abenoja', '', '1988-06-27', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120006', '045611a801af2b4aef367011162056f4d5c74dfbf0860545ab8f7be8f119108d92a1757ee3f4092fd3aff3bc42a0813a4bb84c7218b9a1dbf87c9d957e4d6007', '8a4eefdc586484896f40319edf42daa99cdef1d1bdad44fd657939d7c14615d7bfd7de2eaf523308738ebf007359096b62cf42aff9b3a38a889174d5664dbbae', 'Paul Adrian', '', 'Aguinaldo', '', '1993-09-19', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120007', 'd25420e4fa4a17f35ba5016c906879577e66c305dbe813283d37fdb8b519ab08d168ba8b4cd047a4393e382488320a565498b71ccb3ab670168db1056d54c1be', '15e00c2491b8c9631c0cd1d8382c08388dbd860cb91f062cf151ced916f295c549759b24e254eee74e6539491f7732d43406511f9702c11022036683feb898e9', 'Christine Joy', '', 'Agustin', '', '1997-12-06', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120008', '34040a83eff1443c97fe75ab6175c4c5d2fa5401fe4810d5a45be3814c7d3623160eef653a633a4dca6d02feb3b8508fb06add8148da118e17af912d62b1f850', '38c2440e68f186b1dd51cccdb3ded3e811b9486bc5769045197749c3803bc5b6802df7f3789e68af5a902156091adedc975605906e35fcea925cdfa04b3d901c', 'John Paul', '', 'Aldana', '', '1997-08-22', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120009', '6f715941bbe8432aa820ff6686e2b34ffa675f53fb7d80ae55e40c1ffb79c46ce85a39ab0767be174631f9d46f49e21c0bd67a51a92b6846bb74ad228118f363', '7fc29dbf209121aba14f42cc7170d700df9c1bfc3a341d60fb747889748013f5af2e3780078a4810d80a6e43e9ce79c3b3226b009b2e6f8f82a7fbbfbb2d390b', 'Cedrick John', '', 'Alegre', '', '1996-08-13', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120010', '5aec483004926151f47e72163d083767c61b7052efa12e8b659805a019acf64b921f2628d41315b08ac4c64a1b7984784a85b1e0e8db4af6ce45618e6f4a2f1b', 'd5f92a401e7e4036074338c2d0049dd040cd2a226eb0aba1e8e2dbd546b00ce59b6dacadc6b7b71b800575096cd7ae7d8b2da79b1f3655aa24870c3639955259', 'Christian Jed', '', 'Alegre', '', '1993-08-19', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120011', '39750be0153c39ea257260266ed4c11c2be4120c62f33068c600deae3e6e418a33d514d459ae125f09ea951411f65bb12b232a159dc81d265847e8a936a99272', '0bc7db60df339927638d25ebe022531c7649bcc44d5a7bc38e1c8317f2aa3f34019d334ae54c3eae611cf00425b7788e6bf9d6023e13d1a3a528108d7a8d82fb', 'Christopher', '', 'Bermudez', '', '1989-12-13', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120012', 'ce2d284c06d2fc37f27eccb1e4002d9cd314434245c4569bd44128f88dbce1d97fb5f4221cd2be6b0dcaa509dafa37f9d9d083b9f2b05703337d781c6431d78c', '5d0bb029d911d6d6c761a8b9cf80e05c6b1d56d5dd859589abd9164728f3289318387da3d243746b24ec31ed81b9f0322b36bd0330dc46cc6c9bae634ad88cd0', 'Kevyn Claire', '', 'Caldit', '', '1997-02-02', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120013', 'd13c41e6a6518e0060cdf4b895d71f73a85319ab77d82c28e84e46bff41eab73d9f4a3029a62adbcca45616fc6b77ea22d04e3a61aaf12d7904331e7822c68bc', '787e26fcffe180b3d37f44d5e9edc66dd4e9f0c13ff9c26cd7e1d5e359050f01b57fca3131ef46845be55c6a5b800788dacf0651bf80cbe165c083907b28a27f', 'Rollymar', '', 'Dorimon', '', '1996-07-20', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120014', '55a42cc7f82b200650e5d32d57b4d35560ed55b015661fe617345e11cb4a61058f5d6f42c36292a7b412f910ff773a0c91c2a77a3a8451ad7f1e72811c2b6f9f', '1b3bf19adba9e95ef90cc42af9a39c30391980c1dd1a65c2f546832dd0da730ad0dcbce70c3cdf51a1965e85804f665f1ece65361fc703c231d91a9b4f8abffc', 'Elaiza Rose', '', 'Gadi', '', '1994-04-13', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120015', '71eb9218ff62da9311b8816865561e1a4b845746dbbde6774f237500be4efb6e5110629a0ed7c47bb8abea87c8fb54c509a045dae95c4b406b6f503a1dd4e542', '55d3f711136fdc05ea835c47dd57ed70a29af1febef2b8acc179ee7e20bf89ee6f7a9b3fd6084204c22d3c9454c903ab9a6a7824d383a4ca9729739f4315b847', 'Joshua', '', 'Gonzales', '', '1996-04-07', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120016', '2128afd7d4686b337ae15fe03ae9912d9b7f8e7e8c4bc69f24cf605c7547693e45add1013aaf631abe8c949f86da802eda395fdb95c55ead5fa9da6e14db4c3f', '59d0c8e3ab82cded2cf98cecc0e441454f9a326152c33bd171f7c778e224a3edc7c3dddde35761dac1dfc6ce05c64a72eb242a487b0c36090c4e6f2c9921536d', 'Daniela Louise ', '', 'Igmacio', '', '1997-06-06', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120017', '3472955dad0f8932a55802754f10f06bb79ba6de699bbcf287a1e2d41d7b72298b679a35504ac09be0c03d33a856faff6379c6a257c4288df051d73d7ec3044a', 'd904a51908820b3be3e5ccd143e63fa967ceefecb5c2f941aa1df0a1302829b84ed6655f09f9457c40e133ce9fab46e18fa8e7b28096d58dea501970b4f3d162', 'Vince', '', 'Lacson', '', '1997-05-16', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120018', '1465684ed7fa9933d8f0f0c2f29122ae41fe519bf11aafbb34a6b9d5cdafb1de6823777017d271be783f78365e4d79366f7ce35fd51497c9e166bbb785174e0f', '475d33c8e94b145b0752297d32cc4dd488bb0b6e71b2d2db9c1a939a993c9a7e660394f03d16f2dd0fa75fe4ddae23df037fe02a031566102427207efac80b2c', 'Clark', '', 'Maligang', '', '1989-09-21', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120019', 'fcc5408f8f4767f0a9e91b4d918751f0fcc0605fd112acb5c86ec6fe1c9322d88c0e1066696c67e935081ff27c738f10123bd9423e6a703e228f13397fcc89e9', '3ce32965cb543224cd31bf80acea5e0cf839e8cce21db3ad491028437e4dbac086d0a7025c6ca6a01f816deff6a4a4448a918a743fad5468d2d0da9fb97c97fe', 'Carlo John ', '', 'Mayor', '', '1995-05-15', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120020', '210ce2a505423fd0af345cabbf9fdf28bdad38c1008d69c8ed74f290f0f14cd1bb366caf561e8767b5eea79ed7041f364deec4f1c51edab895f3ed38b185619b', '8031058d39fa5b16757336602e0d86f0f14efa1931c50eb14acc3f34f69f9acd19d973fe8c486a744555bedff0a48d706cd549df1929e054e05794270e4773b6', 'Hiron', '', 'Miranda', '', '1996-08-05', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120021', '5f8532991f52dea2fa488315873f1565ec99fbb64b505b1cd502620aefb3b834dce8910ebe38c21c8b1bd12306dc501151aef206bf7a1b7c96e8a8067b52a894', 'd9dc68e273d7409d82271d8f958501232a51af61980ed3511c96642d1a3a4a354f3857785a8fe4516e776a9e586aa2bb7b1bd83e47521d73ef8a6d41791d2c04', 'Eugene', '', 'Oliva', '', '1995-12-18', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120022', 'f4658c5ceef399c804e8086e59746a0bd2de1947a9d1959339175790932c70f1a5873c98fd63451f557f0585f8e2d321669b1881c7844a9a82627a86df5dca75', '818574dfae9e77d6da8c86f624fbb73e9cf5ef01af3a397a496badcfe94acce75d86722376c0f3dbabbfc33b2eaef7ca515c0135d8b7f9fb6db41367fc97c413', 'Crystal Joy', '', 'Palisoc', '', '1996-08-24', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120023', '8eb1d927c0eaab0d81201cb51ad137fdf71b3653a1734ad9d78640875228e2595727faedf4af90684996f26010aa040e5689b77f1516595db683c292a743e2ec', 'd792fcbf6694ffe2c3530cf8047a584db6ff4d7f83bcac3e7d6395c7bbdeb210eb907e3a61fa032998e9f1d5ee37e7c0374b00312e05f65c6e2b9eab546270f3', 'Tristan Duane', '', 'Patindol', '', '1995-11-30', '', '', '', 'Unemployed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120024', '8616542b637a6949c4481d354946704a8709a774811edddb66b5e536ecf18400d8ceb439bfc40905815098d87ff8652814042f9cffa37eabaf4d410c28bbce11', 'c7093c9639feded45e755a2e0024e992926a297071b7cfe5f2b1361b35ff2904c5d39e672ee4bcaec2a4a7278dfc550ddd1687952ae82ede0310a574dec76a09', 'Alvin John ', '', 'Payumo', '', '1989-10-13', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120025', '418a83b8c26a9a6e338cc207a96e5551c346f0ebd2a9b4cf665f4aa6adf7236a9a39eeb647128f8ef62693f6fca3efc16c7f3fcd1f6a2a40d4347667ae8de751', '8e2fe3e282ba5914229e89793921fe590fc8a97b0cb17db904e0b8002468524a321546c8ec6b8ed892152322c14045f8e3111997faacd070aa63c1f63b9e48ad', 'Ron Cedie', '', 'Pineda', '', '1996-11-13', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120026', 'a07cae22e173bb56407ca79816101c8f15fedb33278edbe73644c72e381f5a7861bf0a92a7ced8bf13b79228065f550a74275df1bea89150d0442b43c5d5da30', '57b0cf4248d1d91452e1ef149d24b88aac07c9f202410c5233a89c2d847cd3f1dff2a6098b4294a54c2c801ecf9480e4bf7f2897e0328ff995e2a2ddef455898', 'Micole', '', 'Ramos', '', '1997-10-30', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120027', '7033f5c67215c26effbacfb03c22b6d42ffd3d9e2a868dfdd2fffcfd3e99a4a51506b3302d6c06ff32644b8e95bcc82174ad77f65a2555636c4b8d96b5b59509', '8ffb81f9225481de619eaad6b37de6c21efc560dc8b61e4d7b55ad4c70b941f1e770def8dd86ea0d20f13da096584370252b6dafc5d8b9717594319e2b7dc31d', 'Rose Marie', '', 'Relacion', '', '1992-01-05', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120028', '660b99f2f75924da6523596c0062f35b5146e96cce2fe93f9f004409507c3fffa14cbf2935186eaf1e88743da30c0415267c695fdac60c212015a7126e446e48', 'bb1f3706458ef22630b4541e5a832918fdd32b13ed3c04eb46ebe3fe0fe9ff29b34b9e159b6a6c605593a44c07ebf3f34f76b97d27e955e64fb2fd455b09db61', 'Hans Philipp', '', 'Rey Hipolito', '', '1997-07-16', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120029', 'ce36a838c73574d0f6abacdcd9cf6e9fcf120d20fa17c21f9841e2413d757f0ba064ab62b907a723aa81b1cf6ab6db6164b1d8656b3ff6b389cb71b77e784175', 'd8a0fa18cd522432c832524da741e8082f0952f7b4bb974254e67bf9ec840d8eba88b222ef63509bbe904f0f6aa839ce14423a179a6d7ad633a191b673aa05d6', 'Jessie', '', 'Ritarita Jr.', '', '1992-05-29', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120030', '8ea80318dd310456f0a2c89281e0b02a97d362be86643d7c0fa94d893a03ffeea364a155f8c756370f58abc00331c4a18b5d0d9f842d53b0256e82cb8e69bcae', 'c396ca150e52177c0766143b3bcecdf45fd15e73df0d94ece1d2ebed2f33f78a0f43f42a455c19cecfaf3b39e01466bceba5a9f485bfeb76c21c5706f29221a3', 'Jobelle', '', 'Sabbagh', '', '1995-10-01', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120031', '0a696adb8485f41be5615b2a1d3f1dd2d01a3005aa99949c2b219fb38ca57049a84ab02a70995973ff7fe6f68273ec9411197637c26aaa32a4573a720c85c6cc', '0f76f7375db099b9485cb147554fe453ec915f5bab5810aa3e5380791326c7f99f5aadbb7d015ec53d9c47a3a7f0664e20ee18172c0675ea6c0d6192f15d5223', 'Lleona Lyn ', '', 'Santos', '', '1995-08-01', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120032', 'ef035bd3461db3f492857e60cdfbc641daf3410dad85c7135c3d089a7a0c69abf485ff6dd3dca175157672f1b34c954010eedca4c47bb8000c049d3444307885', '122f8c1dc84fd095c7ed6229b0b14b491166e8bf3f7acce56adb5012c67024fcc97bfacb053a6f17217011efcc24467902e591a2719348660c0ef0dbddf36f1a', 'Jhon Claude', '', 'Tinumpit', '', '1995-12-24', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120033', '7c15650278ea226823d9f08972c64690f36edbd269ae03425537bb840c90960fb6d855bd8c48abc09b719003acac49ea6bb4c18eb8c8e2247e71950ef41ca446', 'b3728e9d8daf553307aad94218986bf9c780a954b9038e77cf50a9da9b5ae0b46e6c3a4f01642238b092dc31e8229ab42560efd08aa3b23bd8a00097c51f1c5d', 'Kimberly', '', 'Yap', '', '1996-09-07', '', '', '', 'Employed', '', '', '', 'ASCT', '');
INSERT INTO studentinfotbl VALUES ('00820120034', '2556e7459a01985631d4ef662decc3754e9c5210bce3acdb4e929219817baeac6d529155ddaccc4ab9db336ab422692a1bfb6e576e90d30f421994139abd4ba6', '905d780e16f3f9fd645d646cef024039d0b7a9b89b4efd6b6ecc54917662eead4fda418ba068a8a131f3f1b9303baae637d42ef39849e8e583ce7429e5f35f85', 'Nicko', '', 'Aguinaldo', '', '1994-05-26', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120035', '2a830ac86932ed41980dbe26564aeb3dac8d3ae50634f9929994fcffb8cfa3e4fd3198c5de858a734f43230211f033d5d680b4e91fbcb30d66ec4058057fdc6a', '9c80c7a83720a4af368414983d65fca8741bdbe2f380ec060a29c13db3049338e54c9fba1fdc8127cb2900fb3c01826e9ec930ffefaa2395201541987b3afff8', 'Shiela Marie', '', 'Alfonso', '', '1993-10-12', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120036', 'd9561ec73f5d72c4791b1e8962717caf655624b7b6d522504b8beb2e114bd1fe38b270cc5ed799a4937053fef93839e0d81afa98015594f867ded7d253e4fa51', '97570e027361f578ec0966235148441864b8d8962e52a3bfaa96114ae7fdc5b600c60819c4651329d8d896209c678416b8a8456476bfb3aad2e99c43c8420a03', 'Arah', '', 'Alinsonorin', '', '1994-05-26', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120037', '9b4f923faa79123fd1d3ed941e020a4654d661b55cbb26a176c8cd3be50f9b5b6b3428d6d941e6567e835ec48a83075352f3b8e2d477aee31bf66291d5ff9c51', 'c6947b165f4f39e13e5ea6fbf898629a9fd0ab11a56afb9bd72aecd89cc140da72525718fd3c0dc9461081c5d21c4b8a26093302cfdce7af4d58e88c77f9494d', 'Alberto', '', 'Amploquio Jr.', '', '1990-04-05', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120038', '33420e1b626956a36307e2150381d89f967d59be58aebf27c90a999a5560367957dcc8a9e15a84dd2dc090848c9e6738df73b89a37aba5173fe79a136d93c96a', '5fab6c3c6b87f3fa78afc16515da3bbd58d890abc5a2fd0a5850cd7a33089fe51af2bd233753234dae18aca984365f20dd3d802d24410a3eceb1a0a8a4721989', 'Prince Addam', '', 'Aveno', '', '1993-10-15', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120039', '30fb9b970d6f07dbdaac49beab4d38959c12753432241d6d7ce6c5f129075e800f2a340da28890d0723d950cb27064f7e83c6d4ee732cd05be5925992e74bee8', '932096a2cfa76746ff3209efbe53e941113b1cfb2c738b83f96323ac43f01cc4719fa06e2a529ffe51a932e9b372200c3b9bb1863b58c0d122851c8288e4407d', 'Jillian Camille', '', 'Bacod', '', '1990-04-05', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120040', 'cbe91e7623a41357095498e1c49acbc7b29d5df3b1d59794927f50b7fc62490ba253e98e694c4c218d776200b6249ae911af7ecd26c080995039d4175bb31e2a', '173a5619dd41ed63240ea832d6e04341bd428428b8a2c72976780f28620675c977d019f7682eb4a1a9b108257165aa4f58d665a39ef22f2ccf49c57414661380', 'Kimberly', '', 'Baldugo', '', '1994-10-06', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120041', '9b63a01b66ee14be53279894c29712e3f1111a90879992b5f65d0536f358804c107f32192fa7a93978e7919ba1bc918c0d5831b71e24123ab94d3b04853879b5', 'a52399935f230aefd5ae63210cb5b67fd4e605ceae692fddb04a1ebcd5e076db31cf89b969a49761207b9077da1fb91f976a160d6eac4d789d46f2fd5c6f1e59', 'Edrich', '', 'Bautista', '', '1989-11-09', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120042', '2926a49df6f1072421cf81bb7c392b8a48759be8248efa2cbe6c922ba87a9ae5734978e5d6925001275b760f77fce07d7df6bf822635e36aa4f7ea44911e3f79', 'c6d578cc36c6e98e45eb24403118bf3f539452078f0c4a0b68b225df6bd268bc50b29d53422faff1b5d25a5fb94cce8c56fce8f6b474cc62d5b65549c70b5c6a', 'Sunshine', '', 'Bondoc', '', '1989-06-18', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120043', '8f548fa467125389f47d9d35273478168485959d116addc1b24d31317d48495093df2866eae7a6c7cd2edd1b08a40781e93e49ea4e553274d48056f61b172ee3', '2d375486d44271c7fbf6cc0bd2afbda6d300ac229e8092c9034ea762e9a28d1c0af0b1895f9de5903115812f5a8bd961200f953f9c85526d798412a219187388', 'Emm', '', 'Buban', '', '1994-04-25', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120044', 'bcce28768e625efeaaaf14366ffef97483edd553de46c48b8fb058c86c99b7ca3b5fda9dfd025ab301ec81aede2793cd89388d022e05f6e8c3e021b2f78111d3', '555e32bd7c35bcc130bc53d4f2f2eca8521b1d2dd55b48b7c09d0bc2acfc1e6b6dc165f1a1dbe4cd81f702b68deb3e6ef09ef9b2232cc8837cf191f0e1e52129', 'Desiree Joy', '', 'Buenaobra', '', '1992-12-08', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120045', '1edeb9ae8d9e80d68a4ee892f09e552acbaeb78340c863ad4325b21d53c87db594f9dc94701e97867185e10cb3dab4cc2b9bede11c07be0b684f8f2ea2a9342e', '50a8e9ba49e28bf6a3fa5a9965248a0439af96a68c28e7c084d1de725880407e2b56df9d3b573b178699e2abc116394e5962c33db192edeb8a2bab2b753c0f90', 'Jhon Mark', '', 'Busil', '', '1987-10-30', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120046', '2a153fdeece6ab47015bd9c7713040b3da6096ed3420303d846b0c59bd98a15f882a7f4ff8380da3a0e69f976843aeb502a19e106fb6832166a3e4af5c510c0a', '2ce816b76274999df6dfc91daed7f138cf4f645bc0fed72440f9894e3534dfa7a5c7ad79fbf42a4f1418d6e592e32ff00a8240ae2808270c7118cce4425e1f7e', 'John Paul', '', 'Caaya', '', '1994-05-30', '', '', '', 'Unemployed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120047', 'aedd038f9da227885ba6090164b8568ae1fbe14ddd9916d0a6c89c160ea6f14f5b9ddeaa9d3310dabc280619dd9ed15aa421d46c6772983b808438b436e0d71d', '49cde4d6264bc7b7ee5fe58b79f80c9369603a2ae393989782349a6fd172f37efab2338a7a8d63534acad94607227b8768c1c784318832112ad735cf0407ef1a', 'Ma. Romelle', '', 'Cadag', '', '1991-07-21', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120048', 'd5dfa5dd0b09eecdaad22caf2d8c70943d553e895c2f08bcf536838bc223ef426faaa377d8634ea0cc128b8d7f927f36a30184b0fdf54315ffa3e5e5bf0f4bd4', '801afa6ec5f820a874fae66a4e54f725b86af5a8b3b13f348c5d3eba57b11175b2e3f9107b6500913a3bfaa88ca5d55d12bee1b2311ca450551dd20c6e7914a0', 'Grace', '', 'Cañete', '', '1994-10-10', '', '', '', 'Unemployed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120049', '9931ce45557f3050a9ad7561c8b425a060f9817d55f7544bdb251f9e9c5f52975bbde5a9a0ee7015914c41aea580ad1e51cd4903655c5790ed852114df13b2ce', 'd8fbce1ee8386cd20ae432f1c064519b2d7dc910a4a8801f4292d1db5f8b8ab7beffd1e2ae6f1a80678c6835317f8bcebafdd33dc715f5deac867d7be681a31a', 'Catherine', '', 'Cano', '', '1993-10-05', '', '', '', 'Unemployed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120050', 'a9d3d4b567cb2c7a7ec807c121e78af58c8a6664882352cc1ad25d21c8e326fb60bfcca9ae7178697729b76708f3be54ca88281348a329321fc71596281e7878', '8192c5b6b940d91d95e940f2025ecff538b5d0ed31a42cff424a14d9c5a89b02591ea1c232fe1464590b7ac707c82d72f0b0258fc852df6804e8fd1098156ed5', 'Gian Paul', '', 'Capitle', '', '1993-06-24', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120051', '0146a1f04f0fda3978d913bbd316f17e8939c0b0ce75f9ff8335e25fcb1500024619bfcaf0886d754f0d0b46925ba8e599d395909704df0da50d1c269a9c77a6', '178d689cb76826159ee059ff52c266b2056a3abc89b9d84ee8b27a3a9969211dbe056efc38adb216754220c9e823dab722c264bec22f0bce08d4427b3d751547', 'Richmon Joseph', '', 'Isip', '', '1994-08-27', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120052', '46613c97fd5a460ad6c3074847e339eb79adac6f6178d521c954fdafcc6bb16627875da199246e994bf23ff458cab83c4a61a53291ce6df4e82404897f4adbd7', '7ade3a253ab0cf548fe351d85a50c77a0899a48f4a563aed3a8d943d9116afea06ab7f341c9adb38123e6b2db444cc5326bbd7850af2aea0b60237a6c35dab9d', 'Jennely', '', 'Salonga', '', '1990-05-11', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120053', 'a640048f08a46a57860e40dc40a3d0b041229030d0fffa87ccd6eab25dd841acb591c9b589f1f184cabe6ee2951afb66f519d9cfce68841c20cb2e5462d68906', 'ea6f6b6f3d10c49fa005285727a68bff49591afe484254906f341fe608e71b509480d976e3bce8f4467ebe3641c058a39575c56587256fd0e31830bd8adec5d4', 'Richmond Joseph', '', 'Carlos', '', '1995-03-04', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120054', 'f6bfcf7fc57b51cb7e99d3b632bca8f456ab066a6e81d3e7dd92b72ddf27cfe2ef18cc9b48a66618e017852639f657e634bfe166e61ff41ecebe0d76ee02f5f3', '69a7ee360ce6e5f778f399ba7d34a35094421df3cb80f0a288e3d34d03a7c44ad7fdb87d564d306e4488f56ab5a1c6761eda09d8863c10eee77adfe2ed017487', 'Jennely', '', 'Castro', '', '1990-05-11', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120055', 'f8c30f953ed958cf18619d538396960a3c3a026423c739651eaafbad91249df39ff0f59eac7167374743a46b438ae9828f41973634b99970253adfbc28baaf00', 'a0a1643d9c9632498bed0496c7155f6fbb0fbda6c931cf6f2d9966881d9a82a2d5cff020518e14dd317fa669c4972fc79e0b025001000838dff46e2b51444da6', 'Rechiel', '', 'Celocia', '', '1994-07-27', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120056', '1b60ca479b445b422fe20370b440f298c3437517f3a363c8e3d86ad9bdabbb990d18efa6e5a8d74dd428afea74f5b5395bfc899d99106dffe764546522b139f3', 'ce5e7372964efe0fc0b6874eea0e4bc974fcc348e2a7d94ab5bb8357c8ec9124d4eb27f71931c96da24b6efc0937c36e6bb61ba880d60e84b6d3b2d6d37d7172', 'Sandra', '', 'Chavez', '', '1995-01-30', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120057', '6846a19e447fedd2b47baf8cb9461bdaadd9ad0bd14c3966caa6f521715346a3e9b115f855de59beb0e5e471f44fdd8c86fe4c026f7a7086b9492a77244bffd6', '8aaa3e46aef3e018ab9930d146472fee405acc2ec03f9ce72ccd3200d5523d84413145f3724c5284affb8402e1d368c9664a70bd10c034fb7f6269b7b4f8a72b', 'Vicente', '', 'Coc', '', '1996-04-23', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120058', '10461a490da318bc1708512df54070bcd58287ad8260c7e857653acfff537d26336c77acc71ccbbc336bc905ea20a30fa0d5b38a7b9123eafe9fcc698b202fa0', 'bea507ee7333e868400e0b1c41353e11ff2a5a625be59c5171e3af5c1970c05422284ed1a4f07cf3fd1d2d5fbd4c25421ebab747968f3aeecd52b397fbc3e4ff', 'Jaynald Bryan', '', 'Cubilla', '', '1989-02-10', '', '', '', 'Unemployed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120059', '4725bb69b5d2b61935671dcb82eb6e0b75c2b368fa28ec8c9fab3c719c96722770af7ae7456de3f4c740dc3c55825ac8ed881f4c673f080e4b6cf4d1855a3628', '913bf5ad95bec9649036e4edf1efece8d9e35ba7a18c9de465122ca0aff3d5c5852c7a4b870b71a632ade071f302a4c3a70b7362bc1e65f2abd61690c66e82eb', 'Kamille', '', 'Dela Cruz', '', '1995-03-21', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120060', 'ed66c7e72eb55822350de856db8a7c98896fe199b725e780b9210ad166dfe8bf759b8daf070bc66739a912f0df823063c56143fd79a7b001a04587c1950e672b', '79b1165c9caca590fcb6e67887861b33bd710b8ea5b48e0a473c60434e9b7ce0f54d6ceb07ed01d591c130f1642db7bdbd8b292602c23a5efe50428dcdbb4637', 'Jose Marco', '', 'Dioniso', '', '0991-08-21', '', '', '', 'Unemployed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120061', 'fe668afbec746bcf7e468ad66a19977a00682545725f0629eec3651d34deda1744a8ab87a6c7328bf0e40881c872b09dd640a313cd7b91f9b70e935d39f5a0f8', '9c44db6d55ead5afa9665f5f5496b0f6e32eb93a0161bdcfe9d9de719ea7fd0ba52a2c4a4263d9c5a1a726f68667120d7602dabf8b12b54857f4b05cbbfefd89', 'Mark Jayson', '', 'Escaner', '', '1989-10-19', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120062', '7512c715fee0d1868573a6c4fc8b159a781a8e2c1d9b90e15990ebf1cf482db8a234c22d5e03941bcf2346210f4f21a330a3b3bbcb85c2cd62024fcaf867a1c7', '817a2cb131db46cb96e65f2aa71741fa12fd7d7a7850f99d845ba6af6dd2b97fd8228872d3589bd73869f099871a49ffbec9d218cb205e42f287d9c750b5d894', 'Abegael', '', 'Estrada', '', '1994-01-03', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120063', 'a5fc3839c2c7de2359d32f971b78b91a1c3775d128dcaf277c427aa4297a5d35173ef6dd02b2bf2a1aef6d7d647c87c63de2fbbd36eb6ad65d9ebc64f40d5942', '96e66149753580a5b1d3686e2a8b31dcd97d2fb360b0bf2a2593104a8baa4dfc9ac88ddca62fd8f2bba95d05f996845967b3ff560d7792c62435634af582267b', 'Jaime', '', 'Falla', '', '1994-01-19', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120064', '9fd2f7a6de68b3c5372921f6164f8e3df39aa670a3b3a555595e11ac7e91c23bf46864ede2a10c0eebb7b6696bf147aa0d57ee63cc5b78472f582d137a079152', 'be3ad12fe555ba141ea835657ce7e46062182901c72bb2c43cce29498fb5d7cd1e4ee5c6f123b0a3b05ade148f4838b5550a49d18912edcb48559d5a6d36958d', 'Angelique', '', 'Fernandez', '', '1994-04-18', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120065', '962ab4ea47f049b6571ad61eb79832f96e7945a53daa057fe1ef719b5158950abb53e1753242c4597e18afe597a0205d446958761a5b186d5aea248028058ef3', '40591e2ab5d452332c1bf64e5ac22e783aa032e214a6546b248c31ae8fe1a5405fdbe5d84f0dd14b931a638037c98ea3ebce453092a542d67c922cf5715291ad', 'Elisa Mae', '', 'Florano', '', '1995-02-03', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120066', '235ea0ca2c1614fdacfff49c0e8ecc36de3b120da8b4924e8bca887ca85f1b36b51b726801349b0901ae7745aa1cb272902ffc49ed055f100306f6da62fa3058', 'da8e2053e89749334c8aba713188214831de5dfe55be20170976a3adc75b1298ddce721fcd17ed1ee3fcd332cf4328170cbe2e4781a36998def5acba63aeffc9', 'Maria Jessa', '', 'Fulay', '', '1995-03-21', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120067', '20887b66318267fb88cc1feaa80e0b595540f070265e642fbd8a959f022e9a112adff8532febceaa9a09da284dc7d0c77441865043471992709b166af629637c', '0f0bc64f7aabf2bb15c833b791109f0bd20882b6043fe364e46a542524ac4465e95dd0bdf555a24d483f8c8de37bf30e110c6c2ed8cf14d4dcc1d6d63c3137a0', 'Jessica', '', 'Galabay', '', '111995-06-26', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120068', '9b80e0e696ae6515f8226a4b42bf7f868263578f730f9f94159e4ac01417f075a25f67a171a5b8ecbaa9a2ff08869bd62829180f8d76e8690d54f9c6888c0de6', 'd96bb6e1b1f8f8924af00419d4429865545d076412d624870242fd3867b3d8fd64b86e2181d96e38b26e79aba19f606476d3d19004b34ad253cb87587b455254', 'Maiko Aldy', '', 'Manacmul', '', '1991-07-22', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120069', 'daaf577c04c9954363a9202945a612f90b19c9f00642a548e1a816509e3f3142f41a9ea70400d4517ed071e5fa81d55df24315937468811e56ce3b80968a2460', '1071ef3f6742544398b154ca8d818e3fb3ad6a3af57bc474f11773d7ddb67c688894c966d56df96c4c74e75b60e68197539b5fef2bc4276e17247de984314782', 'Diana Jean', '', 'Genita', '', '1993-02-03', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120070', '8dea44979626073f622aef2a890f733324f9dbc9c3d242407af6e6fadc8153d64dec2e2d3b753cbda0ad51c62892b136232b555489397c46b24b9db4bf5831e9', '2ee1fac33fa9c4eee1b4e0888bd4d48f5c25c6c7367fa03eb790c0daf3669828bc5582d9854d9f2821f999cb6828eb1db46f5fa07fec92ea09e3938e134286a7', 'Liezl', '', 'Manjares', '', '1992-10-12', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120071', '90db889336f157dd33eed1731eda586c9db9280335a4d81d56ddd96011395a8a998503394acd61c0a0a13657a8ab2528b5d441b96531ec0ab9b5e73bb21b2065', '7a77f8219b53c95838ce9d2491b5cdd3301333195de24060122eaaefd1a31b936bd8182c8c7ce045431b9f836ae9bc05e72ef9612429eb4e72a22f2e80b92c4a', 'Eredondon', '', 'Gonzales', '', '1994-06-29', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120072', '9c01e215bbd5053aaef0dac2ec7ebe459512bb6a8d86ef2a601ec9b865237a2c0663bc40864afa967b1e0ab280051f3914d8afd7c76326ce8e21897c0844aab9', 'cbb1f84f8b88792161137db4820b0998fb0abe157051244aa58691e65e26c640d515b50063f22ec02dfcb1adc0d9f0af9cb3859cd6b9199eb7e689e782f0d071', 'Veronica', '', 'Manapat', '', '1994-08-31', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120073', '801a8cc0902b795509af72e7da079e0df119c8c3117340a50744f5c9542fd626ccd78e4e39b1a5f0dd5803ec53432eea9d87177ff42147aacff86e3551637aec', 'f57b6b8cdfe0e33c9a8425da0a3cfd275d7cef26f4f9dc2db690bc98d379f525883e8933b8dfee8bc34e846deccf807d3af98b7c3d366ca71bdf81b6969748da', 'Emma', '', 'Guiang', '', '1995-12-02', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120074', 'aa0bc93d582a99a8e6dfae427b8af3dd898cafebedcca6abe829e11ec58c125250de72937d2f399d48032afd8818af8bbc160b9c8eb32a266290ad156dd0cb4c', '67856210d5040bc40a94c6168240c976aa98db6bcca5f2b77b4e17c5eca978209c33ed951fae73d08e1d50704c9a3be772902c0a7ef998bec50bea406ed6f47a', 'Roberlyn', '', 'Hondradez', '', '1988-07-23', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120075', 'a7c155f8a8670c412d1d823523090a07aa1ea6f33bef4feae93cdd361fe3bd8cb6a8226e26a7eb5a245cd4bd6f90869bc365994dfbee8d52caeacbec10c0a65c', '8cbbeb84dba79587a22f3c62753e8060dd17b70234dc37bda9d40b10f5f22072cdcff7f44aecfbb333b509db666c89b809b2c5e4b5fba1c17b3c983202dca597', 'Reyna Jane', '', 'Igno', '', '1993-05-23', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120076', '846ba620f986fa3748c98c4ca75a1cf62b0754bf308cbe76900270c838bb121b9754534a34bdaa248582616be09787ee01f30ea0833edd67b6efdf467b58deb4', '5b8ffafccd5142c067ce0cf1290ec9c2a1201357cf3d974dccbd2ca6fd44b003f71e45d895da1b28a98c4172572d1301b2363667b55ccd5d8eec9cd541af28fd', 'Lea Chastisia', '', 'Lacsina', '', '1992-03-28', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120077', 'c17be553559206a4964a7be6f8e439f96040322721b8564e0eeba2970563a5a805d37944bc30a26d53149b26adccae95116bd3bbc21c90ad2f55e4bfec704f98', '0a5a96b39f45e8d8e739d396e01f5d6913d94d57b241db6e59534d9403fd105d33ce66a33da2f147793eb08f4c239a25bb232aea00bec74057a3ef2ee0bae176', 'Diana', '', 'Lagonero', '', '1995-08-16', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120078', '3f98004978f43350b20f468ce1da50d517731324c98c291c0f7a1dddf77a352b66f692a6cf7b19e2731b2229525a2b7097fb2bf0bd436c23c5bd8be9907b8f3a', '9e8889644da2268f5ab478d90066b7c516632e1610666cbfae0eb69f001052a3d9e17b4899ef1b9832cb33edd314a0d123c04e785d8f507c3df3b95b4fc2fbce', 'Jhenaryl Jane', '', 'Lucas', '', '1995-05-31', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120079', 'e08d11cb87291ed0b2adbfdff6549a09a3aa0e3d88effaf82fb6149ba65adb65f0a702c5401177ca311b992238a5319c95bf8df6900f5b81f2b212c64a615598', '0d14a18680bb52c75dd4a3919199731b0ac92a44fe4e77308d5d4d7d33e1e7332e7a4ecc83919f05061a61917e0360f456366e92f03786e589edd00ccec0ed69', 'Kevin Riel', '', 'Macalalad', '', '0995-07-31', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120080', 'f664ecf16ea7d81d5aabc330e67e06a8ce3a7d5dab56fc3273eae493161d4ac141d91bedac87571333c0a1184295bd3da48c0cbfca3b9dc5f889fa07ee600c9c', '2d91da82f24b89a749a97086e6d93d6db5d8f2060267ac6f96d9d068e01b7d218005a3f9265ceca947adfdc5200b83a54107b4d901f38fcda13a229058afbe64', 'Maricel', '', 'Mariano', '', '1990-02-23', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120081', '61d5d29f062674fc815ec635fc0ce7a495eb22815ee894e56a111bce224372d67d011ddd46a98ef1c495918842bb49874180c9d7654419d6527538da1fa03ecb', '9f6bba9234a10401217fe15fde7a716105a4726edd38d2de1b9a7ce0723b43171460e529505e9c85f9cbe8c063cd6ca6080677f3daa669d56ee3cbf5c9a20187', 'Sheila', '', 'Manlapaz', '', '2016-01-01', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120082', '0a395e93500db3d748f38b1bccfcedec1675b71fdb9002f4c5456dc02336eec8d8ebf8d7ae5f3505a1a9271c67bde8fa1dbcca07fb40962e9ce8b75020b04b9e', '8dde6d06e22af9606cbbb399a7485fd4752d5047bf2ddd44bd54981b12dafb36c5cb1f4ab19e1b4511f9ff572788b454fe9e330ce523973f2a3239a08f8da5b9', 'Arlene', '', 'Manliclic', '', '1995-05-31', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120083', 'affdba4461df6508d5ac04185fdcbc4daf3d8a86b43b52423a25568a30cbafa06e6ecfbf92ebb4d6a6faf2902fc00b50797796776f73b6532a96d3d64cde9f09', 'd6a7997917f6e525c0766e8da5d42a4e2b5bcecbb2ee4ce15f11d00008764b1ae6d2ad02d6b6da547efddc9beea1c0a11bc4f93f30b85b6c83cfecc663753c33', 'Shella', '', 'Malencion', '', '1995-05-11', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120084', '30496a9d460d4de92990f9e231a3684f3e2a5e106d760e890382f1d4c107e11c25da93f8879abb0438cb4f8d0932dc901191fc2d19f2f559ecc5f39074d6fcc4', '06a1da3cacd75eac0498648c935cdfb571a97f95c06fd7a48220825af1c92fa86b897b08118744efcec04d8c0576edffc8845fdb7a836e178be8addac9def8b6', 'Ella Mae', '', 'Mariano', '', '1994-10-09', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120085', '5f29e78bcbe4a25fbcbf21280753eb1c41bb40c65e0df11e8e9a592f737f0c0fdc975055175dd20a22e1dfa910a33743a859287f780bdd1b64fa14f8d6143041', 'd932c4d2d1e4da6e83d3bedcf98e886e4a2829f694c2381af56bfc76688c2ee8ca6c4f82615112f426469c2ba4b36f082d2499002991ccc57eebf841e648409e', 'Reneiza', '', 'Morelos', '', '1993-03-14', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120086', '8d314f2dc8d875bbb2ea33451b726d59d1c4333697fa037f2e06c07190db33e6c6b7854de642d1c475c0417fb2652352a62992fb7d1e31853e4128faba25fa8a', '777a7e5e57bd4644272816f33564c66eddb3ab3eaf2ebe7d5e8531f76f934b537c950c1d6e71f4cc9d25e8952f714cbecbf2bf213066c3955f1ebce9484a45cf', 'Roselle', '', 'Morales', '', '1995-06-23', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120087', '8501275fdf745afeda794b6de097811d87e05543be2159b87f73e20a88018f38738428baa56b74bfad2a9b241cbb682a1f4a81758d41d5b5d43611365a96735e', '899df23ae852b3785df730730b1166de35bfbd57ac1196d3b7969e3817be30f2020cba09e0c803d6bf2ae9cee18620d822125a4c163f884f37fc8095a6c86de9', 'Catherine', '', 'Moreno', '', '1995-07-26', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120088', '02cc4d56b54abc05eaafdcd26e4a13a54eb85f91b7231b275ae30765f0d3a5a6ae01988c010a6bfe36a5be48fd18674f4f30731d7fd0dae8e46379128245adb8', '9688a4aaa17564b3fa024e918a12f0773fa00bbcb50719b9813b01897ecf7236d1a39e2adb98c527b41fc56a959103a50e9fa627e8964c71bfafdcab00582fe8', 'Yves Carlo', '', 'Morales', '', '1998-10-06', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120089', 'f3caef1911830582934e81b13642e5bbed1e67f338dd71b4ca0c2012bfcd0d50d8cba43672b80b0cb1355ec68cc29f25af8a9eba071d2bfa1db97d8002089d53', '37ca59e5942dccb9355cd0cb452404013ca0509a1ba92c2eaf5cad7a9ca1a6ac26c3682656adcc6fb868b51e66d90dc564bc02c51937d692e9e56bf5a673b09f', 'Maria Elena', '', 'Obaldo', '', '1993-10-29', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120090', 'c0e0a94f921f0a519f5ffe9fae2e646e51ea3aa6903563bf6e2af05b3e72a1237589f52e73e314f126f37e6e7ee3b3d2bff75ecd3b11c89a35e3d2788417bb93', 'fe96f83a6b51a5e1f967325f411828ab55af7ea8379ad8eb53776a1ad87e29dce93c1eaf2daa0addd047c85c4c6a1bad054fe7fbebb752ba0f6f12de1a732449', 'Karen', '', 'Morino', '', '1995-07-25', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120091', '8af736fb3d9241991d9c861755afb0ef1a22dc418d5db5aa2f9938a0cc1c4db8627d9e646082f4384a4ee44f5afa10b333f03e6a693e6546a3c4493463b7d398', 'c680f8b5b24a2e459f2efec2f094743e34e2ed08d96c63463ddacf747a23f4ac57256ea2cc7b5804b719a1189509a847830c533b51684b7637f62ddabcb5563d', 'Maria Elena', '', 'Obaldo', '', '1994-04-21', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120092', '15f528b996b1720d0719b59986f44723079b8ae4bb44d6b53059a1287092b6af0ab5987f0226fd9591672ab72ce43652176299bc7ac0d4b92425c94de5334497', '5b63aaf86b7740cbe1cf51e7bf03fa917ef335dec82312345ae79fe1a644ffc88b93f2a5d75448b60304535f94decd84c47cd34f459f698280bbebc1cb5601a0', 'Yogi', '', 'Ong', '', '1992-08-21', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120093', 'fa9a65c9cafa2eb813e9b4dd5c6615575122ac3badd0d10d8dbfed7f283de5742dc80ed06e6fb32acb8614e0285e2f45ed275573b68c61b7ea971cb4efbad489', 'b94d73c42195e0d773a8c1a880aec2ad5e9d3c38bc67049d76808ab77f8075fc83b13958a06b910014229305dbe11725e7a962cbc3b6d32871be2d5664236105', 'Candy', '', 'Nequinto', '', '1996-12-07', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120094', '6497b282fe4eae05bf84e0f6110d7c4ef8257029b646504c27fb25ba9b8a660777322f7c6a6e19adbae07b4407db45b21877218ff3cbca36d245ba2e0aed402e', 'ed999534bab21eec4f294d62b40c0460ad997d2a2fccbaf5c26ef45462d167c47743c855d8658799c3d69763fee47b44841625755281452f231775b324ec242f', 'Michaela', '', 'Pamintuan', '', '1995-08-27', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120095', '776299fc7f46b9891b54d9b3e48a1026d43a4a574a8bf209453af8baf3bee8dcd48a4761077cb0605054eaaad08f0fb40f12e3e41f374d0981370c679173e719', '39d237988ae0108b7b9accf3ee58ec05eafda907009bba40c21c2af150d4d9ce88c896c987c51495bce230006dd7db93902e56959f270586d758acaee128037c', 'Alyanna', '', 'Pascual', '', '1995-05-06', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120096', 'bfb06515685323b16768fdf83fee4b5a9ea57a38b49d6d7f7cd375abf1c8001cdb3e3f7833783428e0803c0dc0bfc83c7ebf54c8048bdefb1247942f73d9b0b2', 'fc1c8ca15e471b9a5916e4e58a845bf50e89d4675da577aed640e8461567e197e91eac82ca8cb3626f372d0781bc20d5596a3b34fa3b8f7d85c4a37896d9aa5c', 'Leziel', '', 'Penilla', '', '1990-01-19', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120097', '3a8bd7ed68c0170c01a0176389fe9fdf4a79b4473b049c58e666f1df4944ede92b90f02b516d845e8d57ba93244ca840f0fccfb928cfa1fd80d0231146f1e089', 'bf056b1133a211a8321e1a50152ad6dd905502d46d857cbfb883dd2bbc73b8d38cf380d0c83093ee324ac1827ff357100041694d53f275ee9b7d6cdc15acb99a', 'Armando Santos', '', 'Perez Jr.', '', '1991-11-17', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120098', '39356e1fa4b6d04d4188eed3944d83e27db74f5bbba2c57a5ff71e0458d449320cfc3bc5ad2081a7c5a58591eb53d5a750b174b680442b416f5cd7d42a9f2782', 'a800a82026a6db9bfb2567efbf7494ab732ace5eda08bf8b9974e970d5482b89f97b8eacde966bbec8bad8b7f3e8de80d5dcab9c5d8085af9ad41d5b21d07b9e', 'Carina', '', 'Nequinto', '', '1994-08-24', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120099', '19f1f3c6cf7890b63056c1a072eabaeea280b4ae873cd488832eeb92b84d2fd98b637b1daadd997f141f24d4bd81ab8621201b606104cf8377d67067d73c02cd', '46d21e91c9a5cf816b5575492038028558c8612ab3c44a9d67d06213a7ff0c7ecbd27fe237489d3b1f54d47b9cd6b85ed4bb2d290c7579a7725e468107c89afe', 'Melanie', '', 'Poyaoan', '', '1994-03-15', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120100', 'a9884a27351d78a61a171b906970705e64ff9601302c85c125aae225112d8d14282b06fc4796a492fb71dd595d0324863070f1860415b42063b43be8e1677cf7', '7c5b4933ed970309c384ac824180a99989cc2d3d8ab0a4657dcda9623beb68d513e8f5141d50e589f067cb3ee5513f4cbd0d4ec32f4f6f9ceca0e16bd0738082', 'Oshin', '', 'Racsa', '', '1994-01-15', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120101', 'ac09cecb8995de85f6eb752ef1625d84ddf63615b6d242234e894af3c9a3304d9601a4b958db22bdfe4fd67f56d1908212e39748c45e72aa64761f716e3cdb6a', '7d3355fc5b4700800ed6b1bed39516b29dfd489a00d397eb0b8195d0f32773ba273bc41664c43c9ecdc6224ce7f8f6dd38befac634916c5f4eed044cd209ae07', 'Jerenze', '', 'Nilo', '', '1994-07-04', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120102', '7f7b42bc9afa8367de9ecb7a4501cbc32d24fbe441d5490e8060736b94be72cbdb49c9a2dfde6a9506f37a25fa888d098e30ef81b8aa40970d7be0a9fed805e0', 'ad971caa5965a2ee884e8eb38c72d492ddaf632bbae29a6fe666a926350037b23622f436b17d6901e0dad71f8bb8a83a605698c5edb19e4d2f409ec6783a527e', 'Mylene', '', 'Ong', '', '1995-05-05', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120103', 'ba051a9aa16de57484431494403a114eb597408b2568a80abb72314dd10ca65430fd98ab52d6e7daefb8bff551dc19a604b16f9c94e2be0dcfa6f4b09ab39e72', 'b6dd3b11cbd693e2bb5f0da6c6f9ead4279a9ac27e3159bc1d27e7a05896ad8cd0cfacfe5b2f12ea9bd9c10b2fa5cd198d7537386194b427264d11900616786a', 'Jennie', '', 'Pintor', '', '1994-07-14', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120104', 'ed801fb53de472775707ec3df24da08be1d300e365a1373c2a191d7c05c95802311734b57b8de2544f9b3dc048c5c3f268748cf0750bb585e3ff6b780d31249b', 'e428c48092b18d8650b253cc5a2a756aaf35b3e7a9344bc2fe0abbd79067a0fb8e3032321b3a567600923e1a2e04f60e3885d8604bd6c57e1f32f02a91bd70b3', 'Alvin', '', 'Prudente', '', '1991-02-08', '', '', '', 'Employed', '', '', '', 'BSBM', '');
INSERT INTO studentinfotbl VALUES ('00820120105', 'a009c24e2a6b2ae0858e94da7657a5a696a3801627dfa590d31b8643be72f7b178ff491cfab78ba4d18f6ffdefde31f50c87b1c2b715ae24f9cc375793b9f27c', '0e32fc53ad74c6edf4f445244a25681383cfb954cfd8b4d2f59da78a04dcdfe21831224fa18c91bfe3bad2fe3d8af75a6b726b2d68cb91941aac0ac015dfef4a', 'Mary Juvy', '', 'Refran', '', '1994-04-07', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120106', '8b1637f85a3df6649f914b26cc4d9c273c6c8945c4088b14755e8b57074ebdd0afb3592e9b9cc1d947a2fcb2e274ea6aaf579f56bd28258d62236668c871c362', 'b013f6230831887cfce3ed59a927614b42342c491144a932f996d0c5ab7cf652ddb70180114abc9e02c07454fc1769e1e14a97c97bf591d02e2e78c35a197825', 'Herschel Rian', '', 'Rico', '', '1995-04-10', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120107', 'e4a402ad67e059e7e894ac00b760051cf0be8ab9ac59e8f0d6f50a2987c27d85eb9692f1f5c77e3125a5dfac8a64f162f18dba03235c37af3c5aa3cd22c605d5', 'fc719eacb30d51e6a2d409146a1894f672b486dd173f686c1dde7a50ef6e7240b0f99a4f2b747a6422ce9ecdabc064ab2765f82182ace4def36da865eb80a19d', 'Dencel', '', 'Rosal', '', '1992-10-12', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120108', 'bbeabfa74d4d52263058448ccb9de02b31b88594361d11e7882e5723bdc0ae8b4d535e86d8a06f8a93942499ad5aecadd174906be028879ec535dfe2be2c687c', '6f0233ff066c165d31d56833b1b8fc710df4c27de6a9b54b15e2154147f2cbe111f5a9aa76e2a8cfd39fa4fab77fa92840dd96184922bd15912a53a08c4e20ac', 'Krishelle', '', 'Sagales', '', '1994-07-29', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120109', '851b6d8ffdfd59e3e946bd8981c104790acb755dab1d61a417d4f27ee568387d0d1cf9a028944caecbe7c49ad2b98df8a65aac85e882c8a691eec91e03e7cab4', '994fd877854bff1f73388e836c1487a9839a2d2dcc7a0b976d267efdf8644b869cbbf06d4aa76aaa81ac129ef8a8ba6606f54a1ee32359fa505952056f918183', 'John Joel', '', 'Santos', '', '1991-03-11', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120110', '0c978eba4b37e79c1ca7a65b229c489ada1fbcb4440ab7457ae4cd6508864e5a4e926e46aa871e63923a67c78e6094172d15b892098a73e05935bf1a25b91152', '822dfb1a98cc71ab1d8591e2c784bf1b5eed7341b51d706ed51e75334b90eaa9d19ca65dd2c16d32d883cb3946e996d4111181f6e3a2ed8c2c2d576c3e8a917b', 'Chesca', '', 'Sarino', '', '1994-05-05', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120111', '598e07f4292a3386fa71bac33063ece617629da9e556042f39c695936be4c00acfaab78e130b973c232d58c422444b97c8c3de8a7ae26f0b988bc8fe3a60a88d', '3972e6a89c37767bfd438398d86cb8e604aa7d50059f02cf07a8599cffc48ab95b1626184c103bbf65858c758834948bec95be46440a1c289f49eb673c050a0d', 'Robin', '', 'Severano', '', '1993-07-21', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120112', '3b149ab88a96595e7f0da1a957b27bb030ed47f66997baabf7f51a41aa63274b1de08b29216c28990a8f55251c7fa34e5b426d23907d32ddf850280d8ac4f12a', '13053db7ab5dcd826137b42774e7cc8a8c6bae6e53e46cdb9e7d0d1c96e89f7bacc17e62d17092fdad8bf818f46dc76ce6ce4432cad9f9899a1b994c438c0279', 'Shaira Ann Joy', '', 'Simbulan', '', '1995-08-12', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120113', '120476aba1168c42bb9af6f7ac0b0ae788ecbb0c8fd13e754c8e83263bfad0d776c9672bb556b2bdc5eceab8572a7780698bb064608ca42701b8723b0caba344', '0ede0fdf11c9203843004856189d00efd1c6f09d98582117cb03e1dc287a5a8044e003c6ae1d2762d70dd3d120c9cef61c9c1d606693d0bc5938498abf4efba9', 'Jeffrey Mar', '', 'Tan', '', '1994-08-09', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120114', 'c2dbd70984fe7e0194c59e50419b1bf911d76a71395d2861ae7c3e64e7252abf56b52b97a1fb6ce7c14a385b6d970f8a99521cec913aabb6df3a5285485fc473', '65a1df8d48d9c9fceeb6b5b870056320199e3b4ef6cee482cdfb99b4b4ae460daf0f49ca2963d2b6b5ab91f798a9995a07f373eaf296492baa9bfdc6b58f8803', 'Princess Rona', '', 'Tanghal', '', '1995-07-17', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120115', '66d3b7b424c649d95a00a9919e3391f99d149e8a59cf2f24aff2a408c1c58434892648e87b733bf2cf174a2a6be7256090197cc5539be715486337a66319c950', '41e4060dbac8e66674281e3ba84920d983124b59e23953bc81daea117406df81c780ef3c9d655347008278f889ed47266ef416aa65d1813721639ee953d537d2', 'Ma. Elizabeth', '', 'Tiangco', '', '1989-10-28', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120116', '364f2fcbcbc34bb5724fdcffec44e28a413e9f23069f1a243be07dbd359334511c6ebae3ebcea1d3cad46e3e0fbeda5ba42705f1cba75921dfc450d4c0e7fd4b', '6785f9be03bc74b8e85a5dea4077096fe1ce569c9044b1ba0a1e252b594d9df6e28f3e5b79058d057ab16afbca48bb13a4a6a9c2aaa2944cbe0f6dd10e0f037d', 'Raymar', '', 'Torres', '', '1991-12-07', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120117', 'bace5daf3ae855896d092a52856b14cdce9c78ec359ec509aa478479505a5fac96e24624a3b044b35b8295bc56c0d179fc28e54832179367f27496b471f14991', '70b591a3dd6b873e0160b349dc621a4fa0822f51597c80aa26f6258d8129c8d98b0ebe73134d5202331e711473c5b5ebd4ff415b78e0601e5a057401bb2a5a17', 'Geraldine', '', 'Udarbe', '', '1994-06-09', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120118', '10f7bbdd3a19820ccba1ecab2c0aed42ba6756d8562217a8d7e42985ee2a7628e90c90ce8bd9468673a41c80cbdd2615349ac73b20f4b0d31d02402df361e4d0', 'be9cf42b230ca698a01901c78303ff1b06481ea93ed468143490d3cbfe24f97da46764a27b2acefb296aad8d7f185e63fffb9240045454342c46eeb56e024cfd', 'Jaizel', '', 'Valencia', '', '1994-08-23', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120119', '0804b6dbe35ed481fc9c7ae84aaae6b93470b06653b44d545140c13274fa62f2d26aed0c0bf74ab2d3cb2d29e2de22965331bc0dd2ebf04b0b8e20b360ad8751', '24cd1d9309801b6d84062182fed5a74087b037018ca24fd0dd77a15587872dc3966897d867cd5336c357a0205dd9e2ad013b1d6b7937a53c170bf9d9883f01b8', 'Jewel', '', 'Vargas', '', '1994-05-19', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120120', '640b98d892d2967c72186342cb3d2f3983ff6c5ad4c6317cf1449a51028841340d3c6644aa91a1444faa83e6cb0b4f35441f98b266556b33a425f3c592e4447f', '26ef013177e098602a9ab8e2481deffcf26ea173027d0ee67781dddd77399f55c05cf4b40ae2a1830a5143538bf8c856c602524739909c52f38bcaf99509ab0a', 'Raenel', '', 'Vasquez', '', '1991-11-13', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120121', '7f10217db57bb6a17db13750bd3bccade64c2856265405949c420b7bb91d7ef21936091074d7eccf9fd807cfb05fc69ccf43cef91565fdc8364f7725312d9fed', 'd655abb51f8bb7e54b9e152b90af4a9270851d2607352ee36e81bcdf26d851cec80036a8a21e55999d85e9ac51da4285383a9e6a395ac579f861cddd8f8ecc1d', 'Angela Marie', '', 'Vicente', '', '1995-06-05', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120122', '77575e252ac85baa12996736a19e02fdf60129e3684f6fd02b0322bb7de5942ed9ee4e8b255e82fda3a226c0709b253b9f7c847515e6fd1a5abbcc58761d449e', '43c92cf7df97a8b19e482ed8c296ed5199d543cc8bf3321ee66fad4924034941e8ac92293f65dedd2f9d4ce5de3e821b738ac7034b2620b0ff74b406ebd7eac1', 'Maria Rhodora', '', 'Vino', '', '1988-04-03', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120123', '3b15bdc7da2b876ed6e1f61146d2536b674e3c753aa4800b5aa8edb942d1be722c00ba3e975f2481105fec35ba098e6c67f791a7daffb305d689d4851799d2b7', '319aecd1a9c153171f6fcf5bb08f4a0cdee98a2d7a9ca472b974d9967a856cba9f67661ad03035a9bd2bb40304597f499b114897772370984d1306f71d49c2d9', 'Jayson', '', 'Zabanal', '', '1996-05-24', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120124', '1fbbd6afce0f6b104087cc3badc725e11d288a2d26c25f79dde8b054c867b6212e4010192978cd9764dd2ff78b6172c2ab04de6161d8512093e06fb63e839b77', '1f66aa43c508e9318084dcde7fddf3403978dda57c7ade9716220a01ef994b4103e95af698dba5874ffb646485fe69d905886b15553b3bf0f7ff8888736acf24', 'Jhon Paul', '', 'Alberio', '', '1994-07-07', '', '', '', 'Employed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120125', '1becc7cf42a7cf1b16a92531d369a75acbc4f3b8f943ff59cce030b9a6ca240648a44f8a0f6ed79a2e44ea1d0d8c7c4090f0c32849a07c31a21faa80239cd415', '9231205fcd1af0752eaacc3fd43cc78da0c31aee47883cd67237a002e47f779fedb41dfdcd8b93b4bc958fd4ebf5d700452bcfa1b5ce04fd1719b4c5e7bfcbcf', 'Giuliano', '', 'Alejandria', '', '1994-07-16', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120126', 'ad2d655212272f283cce083d506b2212cf8ac9301b717f49c37324bb57202eebee3f4e6962e49707eb754ebf788e9c4fa7ad4eff483b2f3be6f12a905912ac5b', 'd93ae8bf2833478f182fadbd683267955796f8a42c9088ff0f703d4b7a543af9275ba4c1bcf828b204d6139253486707759c8ee58f8220afb09a8ea6058d14d2', 'Kenneth', '', 'Alfonso', '', '1995-02-04', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120127', '3ebf2463d47bf47ceefb6ce6762f2b901ea3b1fe06d7327411892596cc5ef44bac8283474bf2158d0721598fbfa2c0678b144e84534bc0f9a79a3a8df89851a0', 'a5f57ad04152f9d70c18c763f163ffc7735413bc0e5b202ba5284367060f3c7ab8a10e7bc7119462bc04c602954fd0066112b34e925aff67be75ba35e20a479d', 'Rose Jane', '', 'Almario', '', '1992-04-04', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120128', '6a565747812790aa01701e70f2b95198e9242123757647d7a5b4620d68ab2fa5742c2aa089152abadc53558eaf7e0b4e73cf1754b2ad528f451551cea2ffc258', '721ca6dc8326af7646aabd902d8c0818fc95a385b313b2b1e2a155f80dba15c6a00adce47556cca47863e597dbda1bfd1d98e7ef745a8cf67372b27f053af9db', 'Juan Paolo', '', 'Alonzo', '', '1992-03-02', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120129', '5c7d2616baeeb70288465df98c384d98abd3c665969e1ab47b942042ada18f4c6d841333eb91725f5b99ae985606862881ff424d62e7799395a795ee5db84db6', 'd849b6654ba12cd652c27bf4eed8bd26f3181d582111d266221dcd5e719c0ea5512bb9b1c66ce8d44f70ef1969fc93f82b45cf0c4aa893dd51581957b5fc7d78', 'Anamari', '', 'Amargo', '', '1995-05-03', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120130', 'ad4fe86192c11a8dd392c24f0cc1f18fa6c7e5246b4c6ced446c8103614319ac023381eaa20207be1bb8a5010e24326fdd35c30d5efa712fa6bab96336f10de3', '7b48984bacb478de6e55308a3cc200ef31f2d925ad7858f74e362817c2796f0a6e7f5835525bdaafed3ee177e127bf776a94608cd022a4883cd4dabff7312370', 'Jamaica', '', 'Amparo', '', '1995-04-01', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120131', '57f7c7c4d3caf15cf0e7939b80611643dde57fa7913f9c1017039a1f9bb70a2a00b2056b6c3021f652ea15c4f4cdaa638538a04ac3e1df6e47c33661fa14a335', 'b6d0fa1be78eed9de89353b839874b8003b120e759ef702889f5e3584aecb5f36f06bd0860ff11fa4b92188ecb4c37a9367652e751c47d7aabcd9158cf4d6eb3', 'Darryl', '', 'Ang', '', '1992-03-05', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120132', '4f70322480168bf80474947d5250977e7256218ffcc18b451083d78a23f08120c6205ca553d5f5b98ef4f34233b5d4af07ff31d87334ad85349bebf4f7ebdd7f', '0c1ba42a06ca171d59f6896a6853ce591cb4833985dc68f77bc6e515165aa885fde655534f3000a2a724c2f05c3b01cb57559af890f5ed62f5dddec4a06da6dd', 'Mark Philippe', '', 'Ang', '', '1994-10-18', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120133', '573b8550f715cb5c04bca942b4a11c7623fecea4d90490908b85ffd3b70e44c8a4fea0f1f1ad9f3f90ecf22a3b7c888d61ae9e219f06a4ef69553c94d4fd5f1e', '47ebe117e28592a4713239a405e443a1299c6c0d4495d21b426176ef2c1d30704737dfed9ad0f8f3ba9cc96718bcccd56d2ea72dbf8de06d9e0d1b741540b732', 'Ulysses', '', 'Ang', '', '1988-01-20', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120134', '3a84fc490c8c43faeca38cb701240776a60590eb622db0a69e31322ae04ac24a978cac97a95a0917a1bdf7f0d69c7ac4c089d18ca74ac94cbb9a0033fcd8e8e2', '4e363311fe145c1f31f9f135f3779ad2e7b0fdf9455e909161aa780d51146ba329ffa11c90b3d59a66d9c684dbadf3d6d043619185f7a93756b098c2f0709b54', 'Renz Rainiel', '', 'Anillo', '', '1995-06-05', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120135', '2e17c5b61f486b83f5601eb6d87950fb7ea4638d26c4616b7b33728c810d5cff655c5b8ce61b690c1c4347529689f0e9acc0f746eb4417524cf37838aec0855d', 'cce7e53ed865e0c11d931501e41d1038ca18055a5c244acd6144dab726f5930928bcf2fe00113746c031f19e1f0b5b0064562fd99b4df9e82cd3f7f1ff99e437', 'Princess', '', 'Anos', '', '1994-08-05', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120136', '95cc656592a837588fd10ebb6fc2d1a802f860dea3d1f6e934de079f90bf8470c85cdb5705fca56927504843a96f005dedb90c80326ded319ddba4a93f59dc45', 'e6f414d4f2f6e51b5c7289f882e59c1d2d2804e165bf47e91ee1cb8c25323d6031e8612c20d031c93ab2e7964a4a5b17ec45addfd6268cb14486afe3e0594322', 'Zyrelle Patrick', '', 'Austero', '', '1991-08-03', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120137', '88e82a66464ef5336030d80033d1f418f336cb8bd617d159589cb035fe5dea6cd02390a570a6b65b8c438505c6b4702905a57935a23b67cfabd56caa75d0aa00', '04bed405c55590a6091af8800dc05809235cb661c6263c63f8edc24c1c0132fd60c5de9e64791af116b4b801c8fe747dd3b695153bf3275b919470173cadc52f', 'Ailyn', '', 'Ayen', '', '1990-01-31', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120138', '43464922cbe67c9d62d5220091858015d19e7a0bd95e16db129ce2d1416e639842632b6343527e9975e6d838f4811ae15e525c2cd53dce5edde11b2d9328abb8', 'f3642fef7a8fab607f70e9b6a95fc651123971e11495f317f88169183e7d3ed8c98cfddaa25c92567628514009606118353b5066ee50348cdeb038a6684e3168', 'Jane', '', 'Bacongan', '', '1996-05-05', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120139', '4e050d0b35ce9ee741c63a56ce6bed503d0e215ace6f715bbd1f5ccafe83ae3daf25966731dd3515c6a63a1c440236aa5876c76526be653bc0962fa0dbd11698', '0f21d36e4761dda256472f9972b3cef8fa874faa3f1d1e1a1db52b1cae8f2fcd2dc450eb5a709f12f1ca3f1222cd33d849f4c2cb2bca6b8bcb42119f5f9dad63', 'Elton John', '', 'Bactong	', '', '1995-03-30', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120140', '8052ab712d954b760fac1fc167358ceba079e64f2966053c718c50dd4c69af6e3ff45d6526484aed8fcadf07e04e911e88e2897052e87c2d301584f090bc4439', '200cb324b75b733f20da720863d3a0b352ff54413b32f00199cf168c80601a078f9cb82cc96e09d32c628c1c61af1b3b8dd32b9b0aa1554cd8430688b77ac65c', 'Anne ', '', 'Barba', '', '1994-03-17', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120141', '37b2e56e43f06913b0fa5498ab776345937adbc955233fc6384efa29655c2943f83982bdbfadbcefb6c51d218a07092933d5b98a2debbe05891d5d9854226b0d', 'ae3a9c9868a166052b4bef4d79ea9c9189083861e1db7af4e940fc204e3caf7df539c8e56a3a82c0d90774349a78d78346d53252c18451b1328b0b6261e60ff4', 'Erwin John', '', 'Boquiren	', '', '1994-04-22', '', '', '', 'Unemployed', '', '', '', 'BSHRM', '');
INSERT INTO studentinfotbl VALUES ('00820120143', 'b6df7c8efb4caf1d4fcd72de5b8a58242987d4e3d04754144bd588798ff302c314d7457f1afc59a211c423f6f7c04fa2d5dd1e20af2aebc8f155da2db03dbbe9', 'daa48581ab318a582343007e6003f9795aa8d26e460256a496f153bcc2c8de95ad19a7fd682bac6ef2e694008e1ff2e62dc5728f5bce40ea24374894315dd3ff', 'Xandra', '', 'Balba', '', '1994-10-09', '', '', '', 'Unemployed', '', '', '', 'BSITDA', '');
INSERT INTO studentinfotbl VALUES ('00820120144', '79ce29f5a9cfbd5b6f4bc0c3a571d5aeee38acc3f56db7f144978b3da1472cb3265a493fe3eb007936f6ec3d0a368663ad0df09be278f4f26cad3ac8832e8fd3', 'a3b8215aaa75c61398b50fbc88b602c595c2a90cebc746f72fbbd88255061e495356db30dd5a42559b2f6c01891f468790d6cdec06098cb061eadb2297ad93fb', 'Shamgar', '', 'Barboza', '', '1994-07-22', '', '', '', 'Unemployed', '', '', '', 'BSITDA', '');
INSERT INTO studentinfotbl VALUES ('00820120145', '30046bf6e5f56ec336394e8ec33629e36a2c9a30b7301d13b74ccf75a01f0ba6e33903bbc32c645ed5e2ba8b9228c2df74a0e29faa67fcdce85cad78fd7679c6', '4ddd060fb584de6618ebdaf84063f79ef49be0ea958c32a07a146caf3803fbf78d9b94b678812690c943b12badee0a9463f5306b150b7a6c07a76eea0a0393db', 'Kenneth John', '', 'Barretto', '', '1989-10-20', '', '', '', 'Unemployed', '', '', '', 'BSITDA', '');
INSERT INTO studentinfotbl VALUES ('00820120146', 'f547e3937e67392d605cd3e9a8ee6f2f38aaebdc8252b8cd433a36259882a3d991dbcd14e18dc9101a440662c16b78bc8a7cf1f86647857f075ed902d28556bb', '3a33beb479b49bab9987527a1d948757b43e3f5a0ac2e248eed018522e0ad81d436bc070317c1e769dd4cfb11af57f205a2dde188640d7caf765a4f25b40a87a', 'Allen', '', 'Batiancila', '', '1992-01-08', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120147', '6e1fd4234666cd0b590108cb19839b54838e7fcfd300cb5095b0c0b508ff2b67bfce462df92a6b19db3ae218dbcbba045ecf6df89d340000a3b6f096564d6c7b', '7700a2ee20ba38d7d09c41b600e8754f8a07601d302b5b093ca96fd79b33c98103dc7018dcc8382cf1ec8a4e888a6584e76a28625f1dafeb6b5c611ad9c081fc', 'Hans Christian', '', 'Belen', '', '1992-08-31', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120148', '4277e7281563cf16492f19830134744904c934e6973b3e8a6d97cf4e75e29da2814810c8a7ecd629b9ce4abd42ae4ec22654f9c6a364c2f675c61116c9624cd5', 'e0a8cc056df468ab27d962c5dc9d5a91eea3070b4969c0867b1485ff42dd651830d7a6de7cb300c8daee8bba2466ca6780484439a682391602b8970f929f4c20', 'Julie Ann', '', 'Belga', '', '1990-07-23', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120149', 'd7c664386b531dce540864983b47576c5da7c69a00d8f8ddc884946126666ecfb4c40e569acf6bc98167eca5ac9b382735c4cda3ef85c448b9bc360c9f218975', '208eabb7f107acd8984dc0d4227b354f109c841570e68cc2c29670594d3543d76ad10f0b65ab4f869e8ae891bffbaccddee454da28abe3e5feeb6aa4bd12e47a', 'Juan Carlos', '', 'Benzon', '', '1994-11-20', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120150', 'ff751a67e654ccde0033671df9b2971211ff759daad1a0cead0be771d743aa78dd186048dc0b707f726f3aca1fcc62c62ec44e5a5cc6e2bd222ee52f9da853b1', '21f634aac479d135403ef78ce1ebc6a5719b27076190ad200ee2d53164b6d7468a9ba488acf5253149e38adf0c865d031afcc7d326bb0bc670233bdbdb9fd23e', 'Tommy', '', 'Bernardo', '', '1994-12-19', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120151', 'da2b99d371bb9bf5cf15a47207195f5e2e42236be08a511d84f3fb7d21ca3f9ebed995478bb8d10f0f2fcba18ee9f0b7a3ca06d0fcaf336557279102f9bc7e44', 'f7ff786b359885685aac13c8ac77ced6d7edf861ea7e07d3faa9e5306eedcdd23c8e55f9e3eb94d9a6724c8693f221b54b6aa49d773a5940d2f6b5acea29c17f', 'Christian Bill', '', 'Brizuela', '', '1992-09-28', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120152', '1cfcdf0501174b4928f8776b33cec3d5cc7a524ba840c27e740a055dc03d3770693531f91570cb3fa5036a695a193a2c4bbcbe785e2ec4811e625f1d6a74c639', '68fd251cad6d13066c3938743ea4560d87db93614f249f6b8615d9727f86058c81b89619dadb5c464e3a1bbb3d4f666202b8958e209f8a6ee5fca8081698f74d', 'Elaiza', '', 'Bustamante', '', '1995-04-08', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120153', '59266f13dee1c637f365c45767e96a54fa489183b98e522def7097c7a3e95f677dd55ffb3b6464acad61e3fe0fcf7c2b7ed611db117de1523516968496277f1a', 'b68af4943a9bd9f2a77aec1505dbe43be9a9ee18945b7636733012a02a571f0227c52b6df651cde84e708dc4553d0b646a5bc2921b24c4aef08aaca585272c7d', 'Minerva', '', 'Cacho', '', '1993-08-31', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120154', '469667e830fcf3f8ffed9ebc7769e201d95b610fdc5faf19e3f6a7b88684013b75365d647cde4d38e943b87857ff10d3464de394eeee8944d22c6e1072881f75', '11ef2a73e7952b6008a7e712978eae467e74e3a4e6ae2a7fb77761f0a191f1453d63d3ac33a942517e22f2f3522a0e4a87c0096478d7f745b253a71979925642', 'Madine', '', 'Canalita', '', '1995-04-21', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120155', '4d3b4141f19b378da4a30d179a959949e4e12ea09982d30f751278711cb5edac72bcef06e7a48614a84ac30aba7895da657adfcadb227dd87fd18f02f564f498', 'a39545c71cc88f738028dd25149c9ad9895f9818a0261af1a847cb9e91af95271a8cbee776b9a27e2f46005cbfbf8fce61022ed7e5f4ed8fc22b5de50b89a80a', 'Zedrick', '', 'Carable ', '', '1993-06-30', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120156', '2b483bf4dd5a6121ab819b4cb25118e9db75385be0563d83aed8fb23e8546e56fa9b64933bf29304ca01634f2def9d21a7a5e11adacccd9e6bbe758a888b49a1', '6e685c4f5412c25f7e5b308784a3a3ce7c2ae03e4e2477793d8f83cc0bbc7b9d00aca29b73668d03550a358a55ed6a91f756335097b9ab5806bbf12a226b31d5', 'Kerwin', '', 'Cartel', '', '1989-03-16', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120157', 'f33be6af613e65d6d98ee7cf164f0aef2bbbf759f45e5d8ac6ecb86c66007ed9a07dc21e74c780c6c40ca06238fa347910a136d1d6721e4ba1c8da671d9b107d', '66247247559aff2f79de44871060c9b44340392869b5cc09c236684a7f15b9ff264883c97f991dcede0271b2b1a6cf49dce387c3d25f6522ebe7b9736f22c8c5', 'Gabriel Angelo', '', 'Castro', '', '1995-07-08', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120158', '85c0bb6c6738bd8a0d0a414909accd65ccb3ccd7b9f3ae59d86d5e4b36bf66f5fc2d9ed6798d4b56a10698551aa0114fc16324609e223e10ee77ec209e7f3aa4', '4ae4c9502efcae65ddae76f6e766f8ad0afc79fa08197bb0e01a4f218c2156f4d216150acb85aef78a3a9dc05415b2dc7534db64830f9f0d7327cc25e59eacb1', 'Mark Twain', '', 'Chua', '', '1986-03-20', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120159', '434c888b1584faa826337500baaffb4397c7441384b3082a842776690ffa608ab13267ff092cf483e022c770f89676e80e574ae6b3183398be18d83d77cf042a', '14eeb519e868714c08b701465e6cb0b6cba561465f4f406291228f831e9921c058566860714806351ed5e1cf9611c33a5d7a14408c41d4d43bc5a7a2b5b33fb8', 'Jr ', '', 'Cometa', '', '1994-10-11', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120160', '3ba47cefb82185789e078727b04a2a547442c0533bfb17a5824ebfeac6eb976197c9caf0110c9b6a940c4f6f45255c0de7f9f69e2cd586c289ce9cdd60779850', 'c24d6401b97e75dc118c5eb4a08065101fe84673d6a6162bd03e2fc7244c829a193dd1decc8321c42bfd9e98f2f6be41c8498ffccbdf672452078b911bb011e8', 'Henry', '', 'Consuelo', 'Male', '1988-06-24', '', 'Married', 'Filipino', 'Unemployed', 'http://www.facebook.com/dd', '', 'ProfileImages/00820120160.jpg', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120161', 'ba7f26408913c37db3e141f61f550bbc9c6b5270b74520286607b7c4975acb322c20cdeaa793ca7f3b19562f79868927b18aca53720cec316ae7a4733fb7b004', '52b287bd455ac865619fa1922deaa240cd60d0091b136698470714d4a243f5e9d11dfb39f993055939787496bdf9a0aefb0e9ffe83e57bac37cb9583e305b1a6', 'Rose Anne', '', 'Cruz', '', '1994-10-24', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120162', '9d4fa8861664a505edf5e82a6002a89ef0ab5791e7fd7d2ead8a1e48533520cd7cee1ea341eb9644293de3bdf02a9bf3aa0215dfdbb5c82d3ecf460c0b8b6c71', '89a27b235836589843a2ab39df4316cf728f3bfbf8e28587ae7a4167c5e98b71fe1ad6e4366d37d3180d1bdd6fe780c7643ad74979c67a334fd102bc4a5dfbb5', 'Mark Guiler', '', 'Cuevas', '', '1993-06-04', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120163', 'bf494afba9aa912975b91bf211a295cef66cee3d28ce635453c43e9ec8e740fafafd99b5fb959d4956e1c56c6a8336cdf622e4b15785e07b29868a86f42e41de', '6a51ff57a6888c1b05c86baed2cd42fc207eab0b151e9b9c8dadec2f5c7f671ae1b8e81507709594ca93dd76ab99c47292ded357984eb07fe49edc68d9e9124e', 'Philippe ', '', 'Culubong', '', '1991-12-12', '', '', '', 'Unemployed', '', '', '', 'BSIT', '');
INSERT INTO studentinfotbl VALUES ('00820120164', '40cad4bb01d41743c6cbf5a465b9b41665f048772a345da312706a794f3c8636795823e6759f3c8ae497ca45b7b8a822bbcb35533086ec582ffd119001bb5795', 'a9ab0eaa498a90effdb02161ff4b0e2500711cafcefb69956acc53f561bfa515ad588df4c7c1325b852f33b49dbfd5ef0e4355d9efe260d8872d4daa5d340a89', 'Kenneth', '', 'Berdensen', '', '1996-09-02', '', '', '', 'Unemployed', '', '', 'ProfileImages/00820120164.jpg', 'BSCS', '');
INSERT INTO studentinfotbl VALUES ('00820120190', '18e6c4916f533ee104c043b816316a973fcfa97a98abae143bbfe707750904892fe309fa127a51dc2a25fa85cdb52042fb50eab7b57f563be3ca5a52b7beba1c', 'f450923f05f084a5ed89364c0654699e25df2ce5c476fb540bebec406ecd03055d440e36122948463245353a3b9d105e4487627a39b6fd4cd50d8fa4140a1375', 'Mark Joseph', '', 'Cinco', '', '1996-03-14', '', '', '', '', '', '', '', 'BSCS', '');
INSERT INTO studentinfotbl VALUES ('00820120191', '58ff1f5691c800be863e0cbd119c0eb24764c105003a2c363e6b41fbfc6361bbdbd4c470e5549d16e82f3e1e70261ac542fb1532c13d2938d783fe23015164ec', '3db863060925c1373f8b7e5d632cc1d25b4fadfbcdaec0e33dffe2f55aae9d3fe5df66aa2968ac616637d5b00d4b00a42a7131d75ad139f52daf0f88f7ea15e4', 'Mark Joseph', '', 'Cinco', '', '1996-03-14', '', '', '', '', '', '', '', 'BSCS', '');
INSERT INTO studentinfotbl VALUES ('00820120192', 'eeff05afe097b9c036a5b36477fad7b945043b96e4332ab88d9b6873788b8d126ff138758e9b47b2a75b295c7b00dcef817b38e005644de49ddddc671bbdcc49', 'af2431d0a8c40d431375b3cadbfe26203a15a00b9a7c10c3ba5e65c79460b53adb787ff3805cd58371b6a04064b5a30e47a988b48c6636eff6364e56f120bda3', 'Mark Joseph', '', 'Cinco', 'Male', '1996-03-14', '', 'Single', 'Filipino', '', 'http://www.facebook.com/akodawsimacoy', '', '', 'BSCS', 'I want to graduate.');

-- ----------------------------
-- Table structure for `urltbl`
-- ----------------------------
DROP TABLE IF EXISTS `urltbl`;
CREATE TABLE `urltbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Caption` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of urltbl
-- ----------------------------

-- ----------------------------
-- Table structure for `workexperiencetbl`
-- ----------------------------
DROP TABLE IF EXISTS `workexperiencetbl`;
CREATE TABLE `workexperiencetbl` (
  `WorkID` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyWebsite` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL,
  `DateFromMonth` varchar(255) NOT NULL,
  `DateFromYear` varchar(255) NOT NULL,
  `DateToMonth` varchar(255) NOT NULL,
  `DateToYear` varchar(255) NOT NULL,
  `NatureOfWork` varchar(255) NOT NULL,
  `PositionLevel` varchar(255) NOT NULL,
  `MonthlySalary` varchar(255) NOT NULL,
  `PositionTitle` varchar(255) NOT NULL,
  `CompanyAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`WorkID`)
) ENGINE=InnoDB AUTO_INCREMENT=356 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of workexperiencetbl
-- ----------------------------
INSERT INTO workexperiencetbl VALUES ('3', '00820120001', 'dfgd', 'http://gg.bb', 'Advertising / Marketing / Promotion / PR', 'Costing Management', '02', '1998', '', 'Current', 'mmm', 'Manager', '3', 'Maglalaro', '2890 A. Pablo st. Karuhatan, Valenzuela City');
INSERT INTO workexperiencetbl VALUES ('4', '00820120001', 'hvhv', 'http://vvh.hh', 'Aerospace / Aviation / Airline', 'Customer Service', '01', '2004', '03', '2007', 'vhv', 'Senior Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('5', '00820120004', 'gyeyryregre', 'http://ss.mm', 'Apparel / Fashion', 'Arts and Design', '03', '2002', '', 'Current', 'feterehrhre', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('6', '00820120004', 'etertrehyrth', 'http://nn.jjj', 'Arts / Design', 'Customer Service (Technical)', '03', '2002', '', 'Current', 'grhgre', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('7', '00820120065', 'aq2e2ae', 'http://ll.ll', 'Advertising / Marketing / Promotion / PR', 'Customer Service', '02', '2001', '02', '2006', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('8', '00820120004', 'egrhrh', 'http://gn.ll', 'Architectural Services / Interior Designing', 'Corporate Strategy/Top Management', '06', '2013', '', 'Current', 'grghr', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('9', '00820120065', '233', 'http://ll.ll', 'Advertising / Marketing / Promotion / PR', 'Customer Service', '07', '2000', '', 'Current', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('10', '00820120065', 'wada', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Education / Academe', '03', '1999', '04', '2005', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('11', '00820120005', 'efd g ey', 'http://oo.pp', 'Apparel / Fashion', 'Customer Service (Technical)', '05', '2000', '', 'Current', ' wg tu', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('12', '00820120005', 'hjkrjos', 'http://kk.hh', 'Arts / Design', 'Costing Management', '06', '2002', '', 'Current', 'fgrh', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('13', '00820120066', '121', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Customer Service', '02', '2000', '06', 'Current', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('14', '00820120005', 'grth6j', 'http://yy.yyi', 'Arts / Design', 'Corporate Strategy/Top Management', '04', '2002', '', 'Current', 'htyjytyt', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('15', '00820120066', 'wadwa', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Design and Development', '04', '1998', '03', '2001', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('16', '00820120066', 'wad', 'http://ll.ll', 'Apparel / Fashion', 'Education / Academe', '03', '1998', '', 'Current', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('17', '00820120067', '12', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Design and Development', '04', '1999', '', 'Current', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('18', '00820120006', 'efregrhg', 'http://gg.jj', 'Apparel / Fashion', 'Chemistry', '08', '2002', '', 'Current', 'hthh', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('19', '00820120067', 'dad', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Design and Development', '03', '1998', '', 'Current', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('20', '00820120006', 'rgrhrhrh', 'http://rr.ss', 'Architectural Services / Interior Designing', 'Costing Management', '06', '2002', '', 'Current', 'hththj', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('21', '00820120067', 'awd', 'http://ll.ll', 'Apparel / Fashion', 'Design and Development', '03', '1999', '04', '2005', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('22', '00820120006', 'ryhtjhtj', 'http://rr.ss', 'Arts / Design', 'Customer Service (Technical)', '03', '2001', '', 'Current', 'grgr', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('23', '00820120068', 'awde', 'http://ll.ll', 'Apparel / Fashion', 'Design and Development', '07', '1998', '06', '2000', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('24', '00820120068', 'awdwa', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Design and Development', '04', '2000', '', 'Current', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('25', '00820120068', 'afawdf', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Design and Development', '06', '2000', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('26', '00820120007', 'yhthtjtj', 'http://ee.dd', 'Apparel / Fashion', 'Customer Service', '04', '2000', '', 'Current', 'eergtre', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('27', '00820120068', 'awd', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service (Technical)', '05', '2000', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('28', '00820120007', 'yhb', 'http://ee.ff', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '05', '2000', '', 'Current', 'jguioi', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('29', '00820120007', 'egfregrh', 'http://ee.ww', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service (Technical)', '04', '2001', '', 'Current', 'htrhthth', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('30', '00820120069', 'awd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Design and Development', '04', '1999', '', 'Current', '', 'Sernior Executive / Supervisor', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('31', '00820120008', 'ergtregrgh', 'http://ww.ss', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service (Technical)', '03', '2001', '', 'Current', 'eretgerg', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('32', '00820120069', 'awd', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Customer Service', '05', '1999', '04', '2009', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('33', '00820120008', 'dfgrhrh', 'http://tt.yy', 'Apparel / Fashion', 'Design and Development', '05', '1999', '', 'Current', 'hfhfh', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('34', '00820120069', 'awd', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Design and Development', '03', '1999', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('35', '00820120008', 'rtgrhrh', 'http://rr.ee', 'Architectural Services / Interior Designing', 'Design and Development', '03', '2000', '', 'Current', 'retgrghrh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('36', '00820120009', 'etregrhrh', 'http://rr.ss', 'Arts / Design', 'Design and Development', '04', '2001', '', 'Current', 'rghth', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('37', '00820120070', 'awd', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Customer Service (Technical)', '06', '2000', '', 'Current', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('38', '00820120009', 'rrhh', 'http://rr.qq', 'Apparel / Fashion', 'Design and Development', '04', '2000', '', 'Current', 'rgrhtrh', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('39', '00820120070', 'adawd', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '05', '1999', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('40', '00820120070', 'awdawd', 'http://ll.ll', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '04', '1998', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('41', '00820120009', 'gtrhtrhth', 'http://ee.ss', 'Aerospace / Aviation / Airline', 'Costing Management', '05', '2000', '', 'Current', 'tjtyjt', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('42', '00820120071', 'qe', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '03', '1998', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('43', '00820120010', 'egergrh', 'http://qq.aa', 'Arts / Design', 'Corporate Strategy/Top Management', '05', '2001', '', 'Current', 'fefeg', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('44', '00820120071', 'awd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '05', '2000', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('45', '00820120010', 'eg', 'http://rr.cc', 'Arts / Design', 'Customer Service (Technical)', '05', '2000', '', 'Current', 'hjj', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('46', '00820120071', 'ff', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '03', '2000', '', 'Current', '', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('47', '00820120010', 'retrrh', 'http://rr.gg', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service (Technical)', '04', '1999', '04', '2002', 'rhh', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('48', '00820120072', '12awdwad', 'http://ll.ll', 'Advertising / Marketing / Promotion / PR', 'Customer Service', '03', '2001', '03', '2002', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('49', '00820120011', 'efgrhr', 'http://ww.aa', 'BioTechnology / Pharmaceutical / Clinical research', 'Corporate Strategy/Top Management', '06', '2004', '06', '2004', 'etrerh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('50', '00820120072', 'awdwad', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service (Technical)', '05', '1999', '07', '2002', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('51', '00820120011', 'tergrgrgh', 'http://rr.ss', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '06', '1998', '06', '2000', 'rtytjtj', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('52', '00820120072', 'qeq', 'http://ll.ll', 'Apparel / Fashion', 'Design and Development', '09', '1999', '06', '2005', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('53', '00820120011', 'rhthtrjh', 'http://ee.cc', 'Apparel / Fashion', 'Design and Development', '05', '2001', '05', '2003', 'rgtrhh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('54', '00820120073', 'wedwa', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Costing Management', '02', '1998', '03', '2003', '', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('55', '00820120012', 'tfgrgrhr', 'http://rr.ww', 'Arts / Design', 'Costing Management', '05', '2001', '08', '2000', 'grghrfh', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('56', '00820120073', 'awd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service (Technical)', '04', '1999', '05', '2001', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('57', '00820120012', 'rhgrhrh', 'http://ww.xx', 'Arts / Design', 'Costing Management', '06', '2001', '06', '2002', 'uy', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('58', '00820120073', 'awdaw', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Corporate Strategy/Top Management', '03', '1999', '', 'Current', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('59', '00820120012', 'yjyky', 'http://qq.aa', 'Architectural Services / Interior Designing', 'Customer Service', '04', '2001', '', 'Current', 'hhth', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('60', '00820120074', 'awd', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Corporate Strategy/Top Management', '03', '1999', '', 'Current', '', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('61', '00820120013', 'rgrhrh', 'http://qq.aa', 'Banking / Financial Services', 'Customer Service', '03', '1998', '05', '2002', 'fdegdfg', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('62', '00820120074', 'awda', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '04', '2003', '', 'Current', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('63', '00820120013', 'rgrhrh', 'http://ee.ss', 'BioTechnology / Pharmaceutical / Clinical research', 'Customer Service', '04', '2001', '07', '2003', 'rgtrhtrh', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('64', '00820120074', 'awdawd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '03', '2001', '', 'Current', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('65', '00820120013', 'rrhhrt', 'http://qq.aa', 'Catering / Restaurant Service', 'Customer Service (Technical)', '02', '2001', '03', '2001', 'hthth', 'Top Level Management', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('66', '00820120075', 'awdwa', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '02', '2001', '04', '2005', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('67', '00820120075', 'wadwa', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Corporate Strategy/Top Management', '04', '2011', '', 'Current', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('68', '00820120075', 'awdwa', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service (Technical)', '05', '2014', '', 'Current', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('69', '00820120014', 'rgrthtrhj', 'http://rr.rr', 'Banking / Financial Services', 'Costing Management', '03', '2001', '06', '2000', 'ggj', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('70', '00820120014', 'rhhth', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service (Technical)', '03', '2000', '', 'Current', 'htjj', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('71', '00820120014', 'rrhtrjh', 'http://qq.aa', 'Banking / Financial Services', 'Customer Service (Technical)', '05', '2000', '04', '2000', 'gngngn', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('72', '00820120076', 'awdaw', 'http://ll.ll', 'Advertising / Marketing / Promotion / PR', 'Customer Service', '02', '2015', '04', '2016', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('73', '00820120076', 'wd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service (Technical)', '03', '1999', '02', '2006', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('74', '00820120076', 'wad', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '03', '2000', '06', '2010', '', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('75', '00820120015', 'rthtrjtj', 'http://aa.zz', 'BioTechnology / Pharmaceutical / Clinical research', 'Customer Service (Technical)', '04', '2001', '07', '2010', 'ghthtjh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('76', '00820120015', 'rhghjt', 'http://bb.gg', 'Apparel / Fashion', 'Customer Service', '03', '2002', '05', '2001', 'gghrfg', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('77', '00820120015', 'gfh', 'http://qq.aa', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '04', '2002', '05', '2003', 'thtyj', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('78', '00820120077', 'awdawd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service (Technical)', '05', '2003', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('79', '00820120077', 'awdawd', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Customer Service', '04', '2010', '', 'Current', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('80', '00820120077', 'awda', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Education / Academe', '05', '1998', '05', '2004', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('81', '00820120016', 'efgregherh', 'http://aa.zZ', 'Arts / Design', 'Clerical/Administrative Support', '04', '2003', '09', '2008', 'fg', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('82', '00820120016', 'dytr', 'http://aa.zz', 'Apparel / Fashion', 'Customer Service (Technical)', '08', '1999', '06', '2005', 'ghjuyhk', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('83', '00820120016', 'ytjytjy', 'http://aa.aa', 'Apparel / Fashion', 'Customer Service (Technical)', '05', '2003', '09', '2015', 'htyjytj', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('84', '00820120078', 'awd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '03', '1999', '04', '2004', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('85', '00820120078', 'fff', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service (Technical)', '04', '2000', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('86', '00820120078', 'fgff', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '04', '1999', '', 'Current', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('87', '00820120017', 'rghrthtrhj', 'http://zz.xx', 'Automobile / Automotive Ancillary / Vehicle', 'Education / Academe', '06', '2001', '04', '2001', 'ththj', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('88', '00820120017', 'rghtrhtrjh', 'http://zz.ss', 'Apparel / Fashion', 'Customer Service (Technical)', '06', '2011', '07', '2000', 'htht', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('89', '00820120079', 'awdaw', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '04', '1999', '', 'Current', '', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('90', '00820120079', 'adfaw', 'http://ll.ll', 'Arts / Design', 'Customer Service (Technical)', '04', '2000', '04', '2007', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('91', '00820120017', 'rrhth', 'http://cc.ff', 'Apparel / Fashion', 'Customer Service', '03', '1998', '03', '2003', 'ytrh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('92', '00820120079', 'wadaw', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '06', '1999', '03', '2012', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('93', '00820120018', 'rtgrhreh', 'http://ll.oo', 'Architectural Services / Interior Designing', 'Chemistry', '03', '2001', '06', '2004', 'hthth', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('94', '00820120018', 'terrhrhr', 'http://hjhj.ll', 'Catering / Restaurant Service', 'Customer Service (Technical)', '05', '2003', '05', '2010', 'htrhth', 'Non-Executive', '1', '', '');
INSERT INTO workexperiencetbl VALUES ('95', '00820120080', 'wad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Customer Service', '08', '2000', '04', '2010', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('96', '00820120018', 'jytytkkt', 'http://zz.ww', 'Arts / Design', 'Costing Management', '04', '2000', '04', '2015', 'thtjhtyj', 'Senior Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('97', '00820120080', 'wad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Costing Management', '04', '2001', '04', '2007', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('98', '00820120080', 'awd', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '06', '2001', '', 'Current', '', 'Senior Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('99', '00820120019', 'rewewgt', 'http://vv.vv', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '04', '2002', '07', '2009', 'thjtyjy', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('100', '00820120081', 'wad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '03', '1998', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('101', '00820120019', 'ttyyt', 'http://xx.xx', 'Apparel / Fashion', 'Costing Management', '04', '2001', '', 'Current', 'yjyt', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('102', '00820120081', 'wad', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '03', '1999', '04', '2006', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('103', '00820120019', 'rergh', 'http://zz.aa', 'Agricultural / Plantation / Poultry / Fisheries', 'Clerical/Administrative Support', '02', '2001', '06', '2001', 'rgrth', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('104', '00820120081', 'awdaw', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '04', '2008', '', 'Current', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('105', '00820120020', 'gghjk', 'http://aaq.ww', 'Apparel / Fashion', 'Design and Development', '03', '2000', '04', '2013', 'yhth', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('106', '00820120082', 'awd', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '04', '2000', '03', '2014', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('107', '00820120020', 'thtrtr', 'http://kk.kkk', 'Apparel / Fashion', 'Education / Academe', '04', '1999', '03', '2005', 'thyth', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('108', '00820120082', 'awd', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Agriculture/Forestry/Fisheries', '03', '2000', '03', '2003', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('109', '00820120020', 'ttrtrjt', 'http://zz.cc', 'Architectural Services / Interior Designing', 'Costing Management', '02', '2001', '04', '2014', 'trhyth', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('110', '00820120082', 'daw', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'BPO/Call Center', '05', '2009', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('111', '00820120021', 'ygjghjj', 'http://ee.tt', 'Chemical / Fertilizers / Pesticides', 'BPO/Call Center', '04', '2002', '04', '2008', 'ththtjtj', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('112', '00820120083', 'wad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'BPO/Call Center', '06', '2005', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('113', '00820120021', 'tgjtgjj', 'http://aa.ss', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '05', '2002', '04', '2003', 'trgrh', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('114', '00820120083', 'ff', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Design and Development', '02', '1999', '04', '2002', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('115', '00820120021', 'hthtj', 'http://qq.qq', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '04', '2003', '04', '2007', 'tjj', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('116', '00820120083', 'awdwad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Chemistry', '07', '2003', '', 'Current', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('117', '00820120084', 'awd', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '03', '2005', '', 'Current', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('118', '00820120022', 'tghtyjyj', 'http://zz.aa', 'Architectural Services / Interior Designing', 'Costing Management', '08', '2000', '03', '2014', 'tht', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('119', '00820120084', 'awdwa', 'http://ll.ll', 'Apparel / Fashion', 'Clerical/Administrative Support', '04', '2006', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('120', '00820120022', 'rfhfh', 'http://xx.dd', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '04', '1999', '03', '2006', 'fg', 'Senior Manager', '1', '', '');
INSERT INTO workexperiencetbl VALUES ('121', '00820120084', 'wadaw', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Chemistry', '06', '2002', '', 'Current', '', 'Manager', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('122', '00820120022', 'gfhgffgj', 'http://ff.dd', 'Agricultural / Plantation / Poultry / Fisheries', 'Design and Development', '02', '2000', '03', '2008', 'gg', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('123', '00820120085', 'ad', 'http://ll.ll', 'Property / Real Estate', 'Costing Management', '03', '2002', '', 'Current', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('124', '00820120085', 'awdaw', 'http://ll.ll', 'Banking / Financial Services', 'Clerical/Administrative Support', '04', '2001', '05', '2013', '', 'Manager', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('125', '00820120024', 'cfdsdg', 'http://vv.ff', 'BioTechnology / Pharmaceutical / Clinical research', 'Costing Management', '05', '2001', '08', '2003', 'd', 'Senior Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('126', '00820120085', 'awdaw', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Costing Management', '04', '2001', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('127', '00820120024', 'fddeg', 'http://ff.dd', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '08', '1999', '05', '2008', 'dds', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('128', '00820120024', 'edggg', 'http://bb.ff', 'Apparel / Fashion', 'Costing Management', '06', '2000', '04', '2012', 'thyt', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('129', '00820120086', 'adwd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Engineering - Chemical', '04', '2003', '04', '2009', '', 'Senior Manager', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('130', '00820120086', 'fgff', 'http://ll.ll', 'Apparel / Fashion', 'Chemistry', '04', '2013', '', 'Current', '', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('131', '00820120025', 'fdsgsdg', 'http://aa.ss', 'Automobile / Automotive Ancillary / Vehicle', 'Clerical/Administrative Support', '06', '2001', '04', '2014', 'ddfh', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('132', '00820120086', 'wdaw', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Banking/Financial Services', '09', '2008', '04', '2014', '', 'Manager', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('133', '00820120025', 'dgdsggh', 'http://gg.ff', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '02', '2000', '03', '2004', 'fsdf', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('134', '00820120025', 'dfdsgh', 'http://gg.gg', 'Catering / Restaurant Service', 'Customer Service', '04', '2002', '06', '2003', 'gjhgf', 'Fresh / Entry Level', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('135', '00820120087', 'awd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '02', '2004', '05', '2007', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('136', '00820120087', 'wad', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '06', '2002', '05', '2009', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('137', '00820120026', 'dsfdsgg', 'http://zz.cc', 'Automobile / Automotive Ancillary / Vehicle', 'Corporate Strategy/Top Management', '05', '2002', '06', '2006', 'sfcsf', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('138', '00820120087', 'gg', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Chemistry', '04', '2001', '04', '2009', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('139', '00820120026', 'dsffdsg', 'http://gfd.kk', 'Catering / Restaurant Service', 'Clerical/Administrative Support', '04', '2001', '03', '2005', 'dgdfg', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('140', '00820120026', 'sdfsdgr', 'http://kk.ll', 'Arts / Design', 'Clerical/Administrative Support', '02', '2003', '06', '2009', 'fgfdh', 'Top Level Management', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('141', '00820120088', 'awdaw', 'http://ll.ll', 'Aerospace / Aviation / Airline', 'Biotechnology', '03', '2005', '', 'Current', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('142', '00820120027', 'gdfrdh', 'http://nn.jj', 'Arts / Design', 'Customer Service (Technical)', '06', '2001', '02', '2010', 'dsgsgf', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('143', '00820120088', 'wada', 'http://ll.ll', 'Chemical / Fertilizers / Pesticides', 'Customer Service', '06', '2004', '06', '2009', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('144', '00820120027', 'gfr', 'http://vv.ff', 'Banking / Financial Services', 'Corporate Strategy/Top Management', '03', '2001', '06', '2010', 'ddfd', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('145', '00820120088', 'awdaw', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '05', '2004', '06', '2008', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('146', '00820120027', 'gfgfd', 'http://hg.ll', 'Catering / Restaurant Service', 'Customer Service', '05', '2004', '06', '2010', 'dgdfg', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('147', '00820120089', 'awda', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '04', '2000', '06', '2007', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('148', '00820120028', 'regfrg', 'http://bb.gg', 'Automobile / Automotive Ancillary / Vehicle', 'Corporate Strategy/Top Management', '06', '2001', '05', '2009', 'efg', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('149', '00820120089', 'awdaw', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Corporate Strategy/Top Management', '05', '2001', '05', '2007', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('150', '00820120028', 'fdgdf', 'http://vv.vv', 'Banking / Financial Services', 'Costing Management', '07', '1999', '06', '2007', 'efedg', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('151', '00820120089', 'awdaw', 'http://ll.ll', 'BioTechnology / Pharmaceutical / Clinical research', 'Corporate Strategy/Top Management', '07', '2000', '', 'Current', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('152', '00820120028', 'gfdggf', 'http://ff.dd', 'Arts / Design', 'Customer Service (Technical)', '05', '2006', '03', '2009', 'ddsg', 'Fresh / Entry Level', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('153', '00820120090', 'wad', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '05', '2004', '03', '2011', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('154', '00820120029', 'dsgdsg', 'http://ll.oo', 'Chemical / Fertilizers / Pesticides', 'Design and Development', '08', '2006', '06', '2008', 'df', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('155', '00820120090', 'ujkgjg', 'http://ll.ll', 'Advertising / Marketing / Promotion / PR', 'BPO/Call Center', '05', '2007', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('156', '00820120029', 'fhfh', 'http://gg.gg', 'Arts / Design', 'Clerical/Administrative Support', '05', '2002', '09', '2014', 'fghgfh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('157', '00820120090', 'awdawdagagfag', 'http://ll.ll', 'Arts / Design', 'Costing Management', '07', '2008', '05', '2012', '', 'Trainee', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('158', '00820120029', 'ghg', 'http://llkk.kk', 'Aerospace / Aviation / Airline', 'Costing Management', '06', '2004', '04', '2010', 'fghfg', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('159', '00820120091', 'wadwafdfdfd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Chemistry', '04', '2012', '05', '2014', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('160', '00820120030', 'dfgdrh', 'http://vv.gg', 'Automobile / Automotive Ancillary / Vehicle', 'Corporate Strategy/Top Management', '04', '2004', '06', '2011', 'dfg', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('161', '00820120091', 'jjhjhjhj', 'http://ll.ll', 'Chemical / Fertilizers / Pesticides', 'Clerical/Administrative Support', '06', '2006', '06', '2012', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('162', '00820120030', 'gh', 'http://mm.jj', 'Architectural Services / Interior Designing', 'Corporate Strategy/Top Management', '04', '2004', '07', '2005', 'fdgfdh', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('163', '00820120030', 'rgrfgrfh', 'http://ll.pp', 'Arts / Design', 'Customer Service', '02', '2003', '05', '2006', 'fgfhn', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('164', '00820120091', 'wadwad', 'http://ll.ll', 'Arts / Design', 'Clerical/Administrative Support', '08', '2008', '05', '2014', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('165', '00820120092', 'awdawdwadawdawdwa', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Clerical/Administrative Support', '07', '2002', '05', '2008', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('166', '00820120031', 'dsfvdsdb', 'http://ff.hh', 'BioTechnology / Pharmaceutical / Clinical research', 'Customer Service (Technical)', '07', '2003', '08', '2010', 'dsgsdg', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('167', '00820120092', 'awdwa', 'http://ll.ll', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '04', '2002', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('168', '00820120031', 'fdsgg', 'http://vv.gg', 'BioTechnology / Pharmaceutical / Clinical research', 'Corporate Strategy/Top Management', '04', '2003', '06', '2005', 'dds', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('169', '00820120092', 'kjkjhk', 'http://ll.ll', 'Arts / Design', 'Chemistry', '06', '2010', '', 'Current', '', 'Fresh / Entry Level', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('170', '00820120031', 'fdgdfh', 'http://jj.kk', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service (Technical)', '04', '2000', '06', '2008', 'gfdfh', 'Senior Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('171', '00820120031', 'gfdgdfh', 'http://kk.oo', 'Arts / Design', 'Corporate Strategy/Top Management', '05', '2001', '05', '2015', 'fdfdh', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('172', '00820120093', 'awda', 'http://ll.ll', 'Arts / Design', 'Corporate Strategy/Top Management', '05', '2007', '05', '2008', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('173', '00820120093', 'wadawgfgjhgjg', 'http://ll.ll', 'Apparel / Fashion', 'Customer Service', '05', '2001', '06', '2006', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('174', '00820120032', 'dfdsg', 'http://l.pp', 'Banking / Financial Services', 'Education / Academe', '07', '2000', '04', '2008', 'ddfs', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('175', '00820120032', 'ffdf', 'http://kk.pp', 'Automobile / Automotive Ancillary / Vehicle', 'Costing Management', '02', '2002', '05', '2007', 'gdf', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('176', '00820120093', 'awdawd', 'http://ll.ll', 'Apparel / Fashion', 'Aviation/Aircraft Maintenance', '05', '2004', '07', '2009', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('177', '00820120032', 'fhfg', 'http://jj.pp', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service', '03', '2001', '06', '2011', 'fhgfh', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('178', '00820120033', 'grfrh', 'http://hh.pp', 'BioTechnology / Pharmaceutical / Clinical research', 'Customer Service', '06', '1999', '04', '2009', 'dgssdg', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('179', '00820120094', 'wdawda', 'http://ll.ll', 'Arts / Design', 'Clerical/Administrative Support', '09', '2002', '03', '2007', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('180', '00820120033', 'grr', 'http://hh.pp', 'Agricultural / Plantation / Poultry / Fisheries', 'Architecture/Interior Design', '02', '1998', '02', '2010', 'dsfdsg', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('181', '00820120094', 'waklljl', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service', '04', '2001', '04', '2005', '', 'Sernior Executive / Supervisor', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('182', '00820120033', 'dgrds', 'http://pp.oo', 'Construction / Building / Engineering', 'Education / Academe', '05', '2000', '05', '2006', 'fhgfh', 'Trainee', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('183', '00820120094', 'wadwadasdzzzz', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Corporate Strategy/Top Management', '06', '2002', '05', '2004', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('184', '00820120034', 'fdsgdg', 'http://hh.pp', 'BioTechnology / Pharmaceutical / Clinical research', 'Clerical/Administrative Support', '04', '2002', '06', '2013', 'dfbfdz', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('185', '00820120095', 'awdwadwadadwdwadadada', 'http://ll.ll', 'Arts / Design', 'Clerical/Administrative Support', '03', '2005', '', 'Current', '', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('186', '00820120034', 'dsgsd', 'http://ff.gg', 'Apparel / Fashion', 'Costing Management', '03', '2002', '05', '2004', 'sdfsd', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('187', '00820120095', 'wadadwakkkk', 'http://ll.ll', 'Arts / Design', 'Clerical/Administrative Support', '07', '2000', '04', '2002', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('188', '00820120034', 'eddsgg', 'http://pp.oo', 'Banking / Financial Services', 'Design and Development', '03', '2011', '06', '2006', 'ddfsgg', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('189', '00820120095', 'awdwadwa', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Costing Management', '05', '2005', '', 'Current', '', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('190', '00820120035', 'sdfdsg', 'http://gg.hh', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service', '04', '2005', '07', '2010', 'fbdf', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('191', '00820120035', 'sefseg', 'http://oo.pp', 'BioTechnology / Pharmaceutical / Clinical research', 'Corporate Strategy/Top Management', '03', '2000', '05', '2008', 'dfdg', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('192', '00820120096', 'awdawda', 'http://ll.ll', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '04', '2004', '', 'Current', '', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('193', '00820120096', 'wadawd', 'http://ll.ll', 'Banking / Financial Services', 'Chemistry', '07', '2005', '', 'Current', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('194', '00820120035', 'dsgsdfhh', 'http://pp.ii', 'Arts / Design', 'Customer Service (Technical)', '06', '2002', '09', '2005', 'gfh', 'Non-Executive', '1', '', '');
INSERT INTO workexperiencetbl VALUES ('195', '00820120096', 'aWdwadawdaw', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '09', '2008', '', 'Current', '', 'Sernior Executive / Supervisor', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('196', '00820120035', 'gdfshg', 'http://fg.dd', 'Apparel / Fashion', 'Customer Service', '04', '2003', '08', '2009', 'dfdg', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('197', '00820120097', 'awdwa', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Costing Management', '06', '2006', '', 'Current', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('198', '00820120097', 'wjhkhgjkg', 'http://ll.ll', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '04', '2015', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('199', '00820120097', 'wadawdawdwada', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Banking/Financial Services', '10', '2007', '', 'Current', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('200', '00820120036', 'dsfvzdfh', 'http://pp.ii', 'Arts / Design', 'Education / Academe', '04', '2005', '03', '2015', 'fbfb', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('201', '00820120036', 'gdfh', 'http://pp.ll', 'Architectural Services / Interior Designing', 'Design and Development', '04', '2003', '04', '2005', 'fddsg', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('202', '00820120036', 'dggh', 'http://fh.ll', 'Architectural Services / Interior Designing', 'Customer Service (Technical)', '04', '2002', '04', '2011', 'fgdfh', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('203', '00820120098', 'awdwadwa', 'http://ll.ll', 'Arts / Design', 'Arts/Creative/Graphics Design', '06', '2011', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('204', '00820120098', 'klklklklk', 'http://ll.ll', 'Apparel / Fashion', 'Agriculture/Forestry/Fisheries', '07', '2014', '', 'Current', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('205', '00820120037', 'sfefg', 'http://fbf.ll', 'Aerospace / Aviation / Airline', 'Customer Service', '04', '2002', '03', '2007', 'dgdf', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('206', '00820120098', 'awdawdawd', 'http://ll.ll', 'Architectural Services / Interior Designing', 'BPO/Call Center', '04', '2011', '', 'Current', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('207', '00820120037', 'dsgsdg', 'http://pp.ll', 'Arts / Design', 'Design and Development', '04', '2013', '04', '2013', 'edfgsg', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('208', '00820120037', 'fggfn', 'http://pp.oo', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '08', '2002', '06', '2009', 'gngfn', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('209', '00820120099', 'kjljh', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Biotechnology', '04', '2002', '05', '2011', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('210', '00820120099', 'awdwad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Banking/Financial Services', '03', '2005', '07', '2008', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('211', '00820120099', 'awdwadwa', 'http://ll.ll', 'Catering / Restaurant Service', 'Banking/Financial Services', '09', '2001', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('212', '00820120038', 'dsfgrgs', 'http://o.pp', 'Apparel / Fashion', 'Costing Management', '05', '2001', '06', '2012', 'dfgdfg', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('213', '00820120038', 'dsfdsg', 'http://pp.ii', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '05', '2001', '07', '2007', 'gfg', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('214', '00820120038', 'dsgdsg', 'http://pp.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service (Technical)', '04', '2001', '05', '2005', 'fdf', 'Trainee', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('215', '00820120038', 'dsfgdds', 'http://pp.oo', 'Arts / Design', 'Customer Service', '04', '2001', '06', '2004', 'fgf', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('216', '00820120038', 'gfdfh', 'http://oo.pp', 'Accounting / Audit / Tax Services', 'Design and Development', '05', '2013', '05', '2014', 'fgfdgh', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('217', '00820120100', 'hjfy', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Banking/Financial Services', '05', '2004', '05', '2013', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('218', '00820120100', 'awdwadadadadaaaaaaaa', 'http://ll.ll', 'Arts / Design', 'Corporate Strategy/Top Management', '04', '2001', '05', '2009', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('219', '00820120100', 'wadawdad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '07', '2002', '07', '2009', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('220', '00820120039', 'rfhfgh', 'http://yy.yy', 'Arts / Design', 'Design and Development', '04', '2001', '07', '2005', 'ghgfh', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('221', '00820120039', 'rtyhtrh', 'http://pp.ii', 'Architectural Services / Interior Designing', 'Customer Service', '02', '2000', '07', '2008', 'hj', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('222', '00820120039', 'jhkk', 'http://kk.pp', 'Architectural Services / Interior Designing', 'Customer Service', '05', '2003', '06', '2009', 'khjk', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('223', '00820120101', 'wadwada', 'http://ll.ll', 'Banking / Financial Services', 'BPO/Call Center', '08', '2004', '05', '2009', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('224', '00820120101', 'wadwajkjkjkj', 'http://ll.ll', 'Banking / Financial Services', 'Arts/Creative/Graphics Design', '06', '2007', '04', '2013', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('225', '00820120101', 'wadawdwa', 'http://ll.ll', 'Arts / Design', 'Banking/Financial Services', '06', '2006', '', 'Current', '', 'Junior Executive', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('226', '00820120040', 'dsfdsg', 'http://hh.hh', 'Apparel / Fashion', 'Customer Service (Technical)', '04', '2005', '05', '2009', 'fddsg', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('227', '00820120040', 'fgdfh', 'http://pp.pp', 'Architectural Services / Interior Designing', 'Customer Service', '03', '2000', '04', '2005', 'fhdh', 'Fresh / Entry Level', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('228', '00820120102', 'wadwadwa', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'BPO/Call Center', '09', '2008', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('229', '00820120040', 'hgfh', 'http://hh.pp', 'Apparel / Fashion', 'Costing Management', '04', '2008', '08', '2011', 'hfgh', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('230', '00820120102', 'wadwadwa', 'http://ll.ll', 'Catering / Restaurant Service', 'Banking/Financial Services', '09', '2013', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('231', '00820120102', 'wadwa', 'http://ll.ll', 'Apparel / Fashion', 'Clerical/Administrative Support', '05', '2010', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('232', '00820120041', 'dfdzgh', 'http://mm.kk', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '05', '2003', '04', '2006', 'fdgf', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('233', '00820120041', 'fdgdfhh', 'http://nn.jj', 'Arts / Design', 'Arts and Design', '03', '2002', '05', '2008', 'fddsg', 'Fresh / Entry Level', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('234', '00820120103', 'wad', 'http://ll.ll', 'Apparel / Fashion', 'Arts and Design', '05', '2012', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('235', '00820120041', 'dsgdfsg', 'http://pp.ll', 'Consulting (Business and Management)', 'Clerical/Administrative Support', '04', '2002', '05', '2006', 'ffb', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('236', '00820120103', 'hjghjg', 'http://ll.ll', 'Architectural Services / Interior Designing', 'BPO/Call Center', '04', '2012', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('237', '00820120103', 'ahfghf', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Arts and Design', '07', '2007', '', 'Current', '', 'Sernior Executive / Supervisor', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('238', '00820120042', 'fgvfdh', 'http://nn.jj', 'Agricultural / Plantation / Poultry / Fisheries', 'Education / Academe', '04', '2004', '04', '2012', 'gngn', 'Non-Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('239', '00820120042', 'fdbhfg', 'http://nn.kk', 'Apparel / Fashion', 'Chemistry', '03', '2004', '04', '2009', 'fbfdb', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('240', '00820120042', 'dfdszg', 'http://mmj.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Customer Service', '04', '2002', '08', '2011', 'fbvfdb', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('241', '00820120104', 'wqeew', 'http://ll.ll', 'Arts / Design', 'Chemistry', '06', '2006', '', 'Current', '', 'Fresh / Entry Level', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('242', '00820120104', 'hgjgjgj', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'BPO/Call Center', '05', '2012', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('243', '00820120104', 'fghfhfghfg', 'http://ll.ll', 'Arts / Design', 'Arts and Design', '10', '2005', '', 'Current', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('244', '00820120043', 'fdgfh', 'http://fbf.ll', 'Arts / Design', 'Corporate Strategy/Top Management', '03', '2004', '05', '2015', 'dds', 'Sernior Executive / Supervisor', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('245', '00820120043', 'fgdfh', 'http://pp.ll', 'Architectural Services / Interior Designing', 'Design and Development', '04', '2004', '05', '2008', 'ffdh', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('246', '00820120043', 'fgfdh', 'http://ll.pp', 'Automobile / Automotive Ancillary / Vehicle', 'Costing Management', '04', '2008', '09', '2013', '', 'Top Level Management', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('247', '00820120105', 'awdwad', 'http://ll.ll', 'Banking / Financial Services', 'BPO/Call Center', '06', '2005', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('248', '00820120105', 'awdaw', 'http://ll.ll', 'Banking / Financial Services', 'Arts/Creative/Graphics Design', '04', '2006', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('249', '00820120105', 'gvjhgfhfh', 'http://ll.ll', 'Arts / Design', 'Aviation/Aircraft Maintenance', '05', '2005', '09', '2010', '', 'Junior Executive', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('250', '00820120044', 'hfgh', 'http://hh.jj', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '03', '2000', '05', '2006', '', 'Top Level Management', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('251', '00820120044', 'gfdgfdh', 'http://pp.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Chemistry', '02', '2003', '07', '2010', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('252', '00820120044', 'gfhgdhn', 'http://p.oo', 'Catering / Restaurant Service', 'Chemistry', '04', '2005', '04', '2012', '', 'Senior Manager', '1', '', '');
INSERT INTO workexperiencetbl VALUES ('253', '00820120106', 'wadwadwa', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Banking/Financial Services', '07', '2006', '08', '2013', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('254', '00820120106', 'awdwadaw', 'http://ll.ll', 'Computer / Information Technology (Software)', 'Biotechnology', '10', '2004', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('255', '00820120106', 'wadada', 'http://ll.ll', 'Banking / Financial Services', 'Aviation/Aircraft Maintenance', '09', '2009', '05', '2014', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('256', '00820120045', 'dsf', 'http://bb.jj', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '03', '2005', '05', '2008', '', 'Top Level Management', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('257', '00820120045', 'dsvsdg', 'http://pp.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Agriculture/Forestry/Fisheries', '01', '2003', '07', '2014', 'dfdsg', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('258', '00820120045', 'dfgfd', 'http://hh.kk', 'Architectural Services / Interior Designing', 'Architecture/Interior Design', '05', '2003', '03', '2012', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('259', '00820120107', 'awdawdawda', 'http://ll.ll', 'Construction / Building / Engineering', 'Banking/Financial Services', '06', '2013', '', 'Current', '', 'Non-Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('260', '00820120107', 'awdaw', 'http://ll.ll', 'Computer / Information Technology (Hardware)', 'Aviation/Aircraft Maintenance', '08', '2012', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('261', '00820120047', 'safasf', 'http://gg.kk', 'Arts / Design', 'Chemistry', '02', '2008', '03', '2008', 'fasf', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('262', '00820120047', 'fdsfg', 'http://nn.jj', 'Apparel / Fashion', 'Arts and Design', '03', '2002', '04', '2008', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('263', '00820120107', 'jkjkjkj', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Biotechnology', '08', '2009', '', 'Current', '', 'Junior Executive', '1', '', '');
INSERT INTO workexperiencetbl VALUES ('264', '00820120047', 'gsdfggd', 'http://jj.kk', 'Banking / Financial Services', 'Corporate Strategy/Top Management', '04', '2001', '05', '2012', 'dsfsd', 'Senior Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('265', '00820120108', 'wadw', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'BPO/Call Center', '07', '2006', '', 'Current', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('266', '00820120050', 'fgsdrg', 'http://hh.kk', 'Arts / Design', 'Architecture/Interior Design', '05', '2004', '05', '2008', 'dgdsg', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('267', '00820120108', 'hgjgjghjg', 'http://ll.ll', 'Arts / Design', 'Banking/Financial Services', '05', '2014', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('268', '00820120050', 'dgfzdsgh', 'http://pp.jj', 'Agricultural / Plantation / Poultry / Fisheries', 'Costing Management', '03', '2003', '04', '2006', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('269', '00820120108', 'uisdgisdg', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Arts and Design', '06', '2010', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('270', '00820120050', 'sdsg', 'http://mmk.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Biotechnology', '05', '2003', '03', '2012', 'dfgdfg', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('271', '00820120051', 'efseg', 'http://pp.ll', 'Arts / Design', 'Corporate Strategy/Top Management', '02', '2001', '01', '2007', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('272', '00820120109', 'awdwadwadwd', 'http://ll.ll', 'Arts / Design', 'Architecture/Interior Design', '06', '2014', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('273', '00820120051', 'efgfsd', 'http://pp.ll', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '03', '2007', '03', '2011', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('274', '00820120109', 'hkhjkjh', 'http://ll.ll', 'Architectural Services / Interior Designing', 'BPO/Call Center', '08', '2015', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('275', '00820120051', 'gdfhg', 'http://pp.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Aviation/Aircraft Maintenance', '03', '2004', '04', '2007', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('276', '00820120109', 'jhkjhkjhkjh', 'http://ll.ll', 'Banking / Financial Services', 'Aviation/Aircraft Maintenance', '09', '2015', '', 'Current', '', 'Non-Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('277', '00820120052', 'dfsf', 'http://hh.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Agriculture/Forestry/Fisheries', '03', '2006', '06', '2013', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('278', '00820120052', 'dssdg', 'http://pp.ll', 'Architectural Services / Interior Designing', 'Customer Service', '03', '2007', '04', '2009', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('279', '00820120110', 'wadadwadwa', 'http://ll.ll', 'Banking / Financial Services', 'Aviation/Aircraft Maintenance', '09', '2014', '', 'Current', '', 'Sernior Executive / Supervisor', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('280', '00820120052', 'sdfgsdg', 'http://pp.ll', 'Arts / Design', 'Chemistry', '04', '2002', '04', '2010', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('281', '00820120110', 'awdwada', 'http://ll.ll', 'Banking / Financial Services', 'Agriculture/Forestry/Fisheries', '11', '2010', '', 'Current', '', 'Fresh / Entry Level', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('282', '00820120110', 'awdwadawdawdwa', 'http://ll.ll', 'Catering / Restaurant Service', 'Arts and Design', '07', '2015', '', 'Current', '', 'Junior Executive', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('283', '00820120053', 'dsfgdh', 'http://hh.kk', 'Architectural Services / Interior Designing', 'BPO/Call Center', '03', '2003', '06', '2015', '', 'Top Level Management', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('284', '00820120053', 'sdfdg', 'http://jj.oo', 'Automobile / Automotive Ancillary / Vehicle', 'Corporate Strategy/Top Management', '04', '2003', '06', '2008', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('285', '00820120111', 'fgfhfhfhg', 'http://ll.ll', 'Arts / Design', 'Aviation/Aircraft Maintenance', '06', '2011', '', 'Current', '', 'Junior Executive', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('286', '00820120053', 'dvgsdg', 'http://pp.ll', 'Architectural Services / Interior Designing', 'Chemistry', '04', '2001', '05', '2006', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('287', '00820120111', 'sajkhjaksd', 'http://ll.ll', 'Commodities Production / Distribution', 'Arts and Design', '10', '2013', '', 'Current', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('288', '00820120111', 'wadwad', 'http://ll.ll', 'Banking / Financial Services', 'Arts and Design', '09', '2012', '', 'Current', '', 'Non-Executive', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('289', '00820120054', 'fdsdg', 'http://jj.kk', 'Apparel / Fashion', 'Customer Service (Technical)', '03', '2003', '03', '2008', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('290', '00820120054', 'gsdg', 'http://hh.ll', 'Architectural Services / Interior Designing', 'Chemistry', '03', '2004', '05', '2008', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('291', '00820120054', 'fsdg', 'http://ll.kk', 'Apparel / Fashion', 'Customer Service (Technical)', '02', '2001', '03', '2009', '', 'Junior Executive', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('292', '00820120112', 'awdaw', 'http://ll.ll', 'BioTechnology / Pharmaceutical / Clinical research', 'Architecture/Interior Design', '08', '2014', '', 'Current', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('293', '00820120112', 'awdawdwadwad', 'http://ll.ll', 'Banking / Financial Services', 'Biotechnology', '11', '2008', '', 'Current', '', 'Junior Executive', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('294', '00820120112', 'wadwa', 'http://ll.ll', 'Banking / Financial Services', 'Arts and Design', '08', '2008', '', 'Current', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('295', '00820120055', 'fdsdg', 'http://jj.kk', 'Apparel / Fashion', 'Corporate Strategy/Top Management', '01', '2001', '04', '2010', '', 'Top Level Management', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('296', '00820120055', 'vbnvm', 'http://oo.pp', 'Architectural Services / Interior Designing', 'Costing Management', '04', '2000', '03', '2009', '', 'Top Level Management', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('297', '00820120055', 'egfaerg', 'http://pp.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Agriculture/Forestry/Fisheries', '05', '2014', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('298', '00820120113', 'wadwadwa', 'http://ll.ll', 'BioTechnology / Pharmaceutical / Clinical research', 'Aviation/Aircraft Maintenance', '09', '2007', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('299', '00820120113', 'awdaw', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Chemistry', '07', '2007', '', 'Current', '', 'Non-Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('300', '00820120113', 'awd', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '04', '2004', '', 'Current', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('301', '00820120056', 'efsdg', 'http://jj.kk', 'Arts / Design', 'Costing Management', '04', '2005', '04', '2009', '', 'Top Level Management', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('302', '00820120056', 'dsfgszdg', 'http://kk.pp', 'Architectural Services / Interior Designing', 'Costing Management', '04', '2006', '04', '2008', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('303', '00820120056', 'sdfsdg', 'http://jj.kk', 'Architectural Services / Interior Designing', 'Customer Service', '01', '2007', '05', '2012', '', 'Manager', '1', '', '');
INSERT INTO workexperiencetbl VALUES ('304', '00820120114', 'wadawd', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Banking/Financial Services', '05', '2014', '', 'Current', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('305', '00820120114', 'awdwad', 'http://ll.ll', 'Arts / Design', 'Banking/Financial Services', '07', '2009', '', 'Current', '', 'Trainee', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('306', '00820120114', 'wadaw', 'http://ll.ll', 'BioTechnology / Pharmaceutical / Clinical research', 'BPO/Call Center', '06', '2007', '', 'Current', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('307', '00820120057', 'fdry', 'http://jj.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Customer Service (Technical)', '03', '2003', '04', '2012', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('308', '00820120057', 'grhg', 'http://jj.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Chemistry', '03', '2006', '05', '2010', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('309', '00820120057', 'dfsdrg', 'http://jj.ll', 'Arts / Design', 'Customer Service', '04', '2006', '05', '2006', '', 'Senior Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('310', '00820120115', 'awdwa', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Chemistry', '05', '2011', '', 'Current', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('311', '00820120115', 'awd', 'http://ll.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'BPO/Call Center', '04', '2005', '', 'Current', '', 'Manager', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('312', '00820120115', 'wad', 'http://ll.ll', 'Apparel / Fashion', 'Biotechnology', '03', '2002', '', 'Current', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('313', '00820120059', 'fdrsggh', 'http://jj.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Advertising/Media Planning', '02', '2003', '04', '2010', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('314', '00820120059', 'fdgh', 'http://fghgh.ll', 'Arts / Design', 'Agriculture/Forestry/Fisheries', '03', '2005', '06', '2011', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('315', '00820120059', 'dsgdsfg', 'http://jj.ll', 'Aerospace / Aviation / Airline', 'Engineering - Chemical', '03', '2001', '02', '2009', '', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('316', '00820120116', 'awdaw', 'http://ll.ll', 'Apparel / Fashion', 'Banking/Financial Services', '05', '2004', '', 'Current', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('317', '00820120116', 'wadwa', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Chemistry', '04', '2008', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('318', '00820120116', 'wadwa', 'http://ll.ll', 'Arts / Design', 'Banking/Financial Services', '05', '2004', '', 'Current', '', 'Manager', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('319', '00820120061', 'efsrg', 'http://kk.pp', 'BioTechnology / Pharmaceutical / Clinical research', 'Customer Service', '03', '2006', '04', '2015', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('320', '00820120061', 'dsgsdrhh', 'http://pp.ii', 'Automobile / Automotive Ancillary / Vehicle', 'Agriculture/Forestry/Fisheries', '03', '2012', '', 'Current', '', 'Junior Executive', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('321', '00820120061', 'dfgvdfh', 'http://pp.ll', 'Apparel / Fashion', 'Agriculture/Forestry/Fisheries', '03', '2006', '04', '2011', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('322', '00820120117', 'wada', 'http://ll.ll', 'Arts / Design', 'Architecture/Interior Design', '06', '2007', '', 'Current', '', 'Junior Executive', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('323', '00820120117', 'awdaw', 'http://ll.ll', 'Apparel / Fashion', 'Aviation/Aircraft Maintenance', '05', '2008', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('324', '00820120117', 'awdawd', 'http://ll.ll', 'Arts / Design', 'Arts and Design', '07', '2002', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('325', '00820120062', 'gsrg', 'http://mmk.ll', 'Apparel / Fashion', 'Chemistry', '02', '2002', '04', '2011', '', 'Sernior Executive / Supervisor', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('326', '00820120062', 'dvbfdzh', 'http://pp.ll', 'Arts / Design', 'Clerical/Administrative Support', '07', '2005', '05', '2014', '', 'Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('327', '00820120062', 'gfh', 'http://pp.ll', 'Agricultural / Plantation / Poultry / Fisheries', 'Architecture/Interior Design', '05', '2005', '07', '2010', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('328', '00820120118', 'wadwad', 'http://ll.ll', 'Arts / Design', 'Biotechnology', '05', '2005', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('329', '00820120118', 'awda', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Aviation/Aircraft Maintenance', '06', '2004', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('330', '00820120118', 'awdwad', 'http://ll.ll', 'Arts / Design', 'Biotechnology', '08', '2008', '', 'Current', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('331', '00820120063', 'fsdg', 'http://pp.ll', 'Banking / Financial Services', 'Chemistry', '04', '2006', '05', '2015', '', 'Junior Executive', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('332', '00820120063', 'dgsdg', 'http://kk.pp', 'Arts / Design', 'Biotechnology', '03', '2005', '05', '2012', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('333', '00820120063', 'fsgeg', 'http://pp.ll', 'Advertising / Marketing / Promotion / PR', 'Clerical/Administrative Support', '02', '2004', '05', '2006', '', 'Sernior Executive / Supervisor', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('334', '00820120119', 'wad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Chemistry', '04', '2013', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('335', '00820120119', 'wadwadawd', 'http://ll.ll', 'Automobile / Automotive Ancillary / Vehicle', 'Arts/Creative/Graphics Design', '07', '2013', '', 'Current', '', 'Fresh / Entry Level', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('336', '00820120119', 'awdawdaw', 'http://ll.ll', 'BioTechnology / Pharmaceutical / Clinical research', 'Aviation/Aircraft Maintenance', '10', '2012', '', 'Current', '', 'Junior Executive', '7', '', '');
INSERT INTO workexperiencetbl VALUES ('337', '00820120064', 'hgjcgh', 'http://pp.ll', 'Architectural Services / Interior Designing', 'Clerical/Administrative Support', '03', '2003', '03', '2012', '', 'Fresh / Entry Level', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('338', '00820120064', 'gdh', 'http://pp.ll', 'Architectural Services / Interior Designing', 'Customer Service', '03', '2005', '04', '2014', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('339', '00820120064', 'thtf', 'http://mm.kk', 'Environment / Health / Safety', 'Architecture/Interior Design', '02', '2013', '05', '2016', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('340', '00820120120', 'wad', 'http://ll.ll', 'Apparel / Fashion', 'Banking/Financial Services', '04', '2005', '', 'Current', '', 'Sernior Executive / Supervisor', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('341', '00820120120', 'wad', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Biotechnology', '05', '2006', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('342', '00820120124', 'efrg', 'http://p.ll', 'Aerospace / Aviation / Airline', 'Customer Service', '02', '2002', '03', '2009', '', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('343', '00820120120', 'awdwa', 'http://ll.ll', 'Architectural Services / Interior Designing', 'Arts/Creative/Graphics Design', '06', '2005', '', 'Current', '', 'Fresh / Entry Level', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('344', '00820120124', 'fdfh', 'http://pp.ll', 'Apparel / Fashion', 'Costing Management', '03', '2003', '03', '2011', '', 'Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('345', '00820120124', 'esgsrg', 'http://pp.ll', 'Apparel / Fashion', 'Customer Service (Technical)', '01', '2002', '04', '2010', '', 'Sernior Executive / Supervisor', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('346', '00820120121', 'awdwa', 'http://ll.ll', 'Apparel / Fashion', 'BPO/Call Center', '05', '2002', '', 'Current', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('347', '00820120121', 'awdadawdawd', 'http://ll.ll', 'Banking / Financial Services', 'Architecture/Interior Design', '08', '2010', '', 'Current', '', 'Fresh / Entry Level', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('348', '00820120123', 'fsdrgg', 'http://hh.ll', 'Apparel / Fashion', 'Customer Service (Technical)', '02', '2003', '03', '2010', '', 'Senior Manager', '2', '', '');
INSERT INTO workexperiencetbl VALUES ('349', '00820120121', 'wadwaddfgdgfd', 'http://ll.ll', 'Chemical / Fertilizers / Pesticides', 'BPO/Call Center', '09', '2010', '', 'Current', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('350', '00820120123', 'fsrg', 'http://pp.ll', 'Apparel / Fashion', 'Customer Service', '04', '2004', '06', '2013', '', 'Manager', '3', '', '');
INSERT INTO workexperiencetbl VALUES ('351', '00820120123', 'sdfgsg', 'http://pp.jj', 'Aerospace / Aviation / Airline', 'Actuarial Science/Statistics', '03', '2000', '03', '2007', '', 'Junior Executive', '5', '', '');
INSERT INTO workexperiencetbl VALUES ('352', '00820120122', 'awd', 'http://ll.ll', 'Architectural Services / Interior Designing', 'BPO/Call Center', '04', '2007', '06', '2016', '', 'Senior Manager', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('353', '00820120122', 'awdwadwa', 'http://ll.ll', 'Banking / Financial Services', 'Arts/Creative/Graphics Design', '05', '2012', '', 'Current', '', 'Sernior Executive / Supervisor', '6', '', '');
INSERT INTO workexperiencetbl VALUES ('354', '00820120122', 'wadawdwad', 'http://ll.ll', 'Commodities Production / Distribution', 'Biotechnology', '07', '2006', '05', '2012', '', 'Junior Executive', '4', '', '');
INSERT INTO workexperiencetbl VALUES ('355', '00820120001', 'qwe', 'http://htasd.cc', 'Computer / Information Technology (Software)', 'Costing Management', '10', '2002', '', 'Current', 'sadasdsadas', 'Fresh / Entry Level', '5', '', '');
