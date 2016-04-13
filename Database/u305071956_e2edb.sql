/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : u305071956_e2edb

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2016-04-13 06:50:23
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of achievementstbl
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admineventtbl
-- ----------------------------
INSERT INTO admineventtbl VALUES ('8', '1', 'National Youth Convention', '2016-04-04', '2016-04-30', 'STI Caloocan', 'Innovation', null, 'ProfileImage/a6ddf137ca44230741bda21e8e5ab5e7367f2b040003f01edf1a5cc530574e0acd1cc84faae5d2c1a4f38da70da67a86da13cddadeed07c0351e86c03097868c.png');
INSERT INTO admineventtbl VALUES ('9', '1', 'Job Fair', '2016-04-04', '2016-04-30', 'STI Caloocan', 'Job Fair', null, 'ProfileImage/7c742325a779d8728b92debb4afdc7bdb57c4e79fc88b4e79e6523675073360317b4d659280f887101822a39bd35a3c21e443b586c4135593e479b99d42461ef.jpg');
INSERT INTO admineventtbl VALUES ('10', '1', 'UpLift', '2016-04-04', '2016-04-30', 'STI Caloocan', 'UpLift', null, 'ProfileImage/a0e7eb7bc06f80cf521ede0a1e8fa4109afc497485b58e8a4c744970a2364e4b7fdbb20b3345eb446f536319c9f2422009b3514b0ca63d462eeb6e09d97f256c.jpg');

-- ----------------------------
-- Table structure for `adminnewstbl`
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adminnewstbl
-- ----------------------------
INSERT INTO adminnewstbl VALUES ('4', '1', 'Releasing of Business Car', '2016-04-05', 'STI Caloocan', 'BSCS ASCT DMA ITP only', 'ProfileImages/3954cc9ee5f8fda1607de29a323767b82e4e15eb9cd8f4085cacf26d3be2bba1cf639857491d483402c44be3cc272aa9b023a74b129242563460abe96c3e231c.png');
INSERT INTO adminnewstbl VALUES ('5', '1', 'Releasing of Business Car', '2016-04-06', 'Sti Caloocan', 'BSBM BSAT only', 'ProfileImages/d1099fb77c09a861abcee6cc53c24f7f9ed9d4d8b3367bcbbd7c24c281cf67b21cfcb5131cbd2bb7cf41844a11fe9fcf4ba57a1f838fc5d466dd204741378548.png');
INSERT INTO adminnewstbl VALUES ('6', '1', 'Releasing of Business Car', '2016-04-07', 'Sti Caloocan', 'BSIT only', 'ProfileImages/b5a9b82a118e06899405caed065ca909a32e8813705b439d87b1d7b9aa1b22013f9686eca9478fabe5f665e173b0f7014bef804b73bd340a642d3dd0285de0f7.png');
INSERT INTO adminnewstbl VALUES ('7', '1', 'Releasing of Business Car', '2016-04-08', 'Sti Caloocan', 'BSHRM HRS TEM', 'ProfileImages/e6ac0d5ce306bc7e36a6bf1822f2550e16cc080f948a3183367c28494e9c6f8737a2ff116d547383d90dfeb89052a067c699083dd268df8569beca20a9f97085.png');
INSERT INTO adminnewstbl VALUES ('8', '1', 'Job Fair', '2016-04-13', 'STI Caloocan', 'Job Fair', 'ProfileImages/5a23c29e88d71edfca8411845198e97fa7e4b728893782bce2288a022fd7d683ff47af6c29c2164612b8a73ca831ee2d5f73bd66b6b965f5f2046a9725b7cf6c.png');

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
INSERT INTO admintbl VALUES ('1', 'annabellevillegas', '3a03bc6fa610af857fa08bd8423736a63b9bf25709426fbd102fd419e8fb3a308d0c92bd6470487f780aa6fa2d6b9bfbc1472924b930a34dd4910f65cc8a95d1', 'bc8aeee40548fcbbb8869e7c94cd883d86d0adbc977dd5cf9c56aa9b96b30346d96558ab59c1be5e52fb3b0dc123d59e59814599741bb307bb89f4584353631d', 'Annabelle', 'O', 'Villegas', 'Alumni and Placement Officer II', '109 Samson Road corner Caimito Road, Caloocan City,  Philippines', '2944001', 'Admin');
INSERT INTO admintbl VALUES ('13', 'markjoseph14965', '16d917462347d622d56f4269bf74e305dbdc14294e159efe502679eee9df8f49009ca5897ada300ea757d0e0e561187b1d17713e1a561dd6247829155f6c312c', '4a800106f6fa85d4053db33f3f6dce2439efdb6a13d28caae8c2d9694c70084d36b53fed0240277512430e6cf662cdedf0e5533a9e9703aee3b4207ddfdf1f74', 'Mark Joseph', 'Flaviano', 'Cinco', 'OJT Adviser', '2890 A. Pablo St. Karuhatan, Valenzuela City.', '09355585931', 'Adviser');

-- ----------------------------
-- Table structure for `allowedtbl`
-- ----------------------------
DROP TABLE IF EXISTS `allowedtbl`;
CREATE TABLE `allowedtbl` (
  `StudentID` varchar(255) NOT NULL,
  `isOk` varchar(255) NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of allowedtbl
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of certificationtbl
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of companyinfotbl
-- ----------------------------
INSERT INTO companyinfotbl VALUES ('1', 'Sykes Asia', 'In 1997, SYKES made history by being the first call center to support Filipino talent. With only 14 employees, SYKES began operations in the Philippines. But through our commitment to excellence, innovative process and committed team, SYKES has rapidly expanded itâ€™s business operations across Metro Manila, more than doubling itâ€™s man power in less than 10 years.\r\nIn 2003, SYKES continued itâ€™s pioneer mark as it became the first call center to operate in Cebu.\r\nToday, SYKES Philippines has a team of almost 13,000 capable and dedicated employees working in 8 different sites to support Fortune 500 clients across the globe. SYKES continues to partner with the Filipinos to deliver unparalleled support.\r\nWe are all about SUPPORT.\r\nSYKES supports Fortune 500 companies by providing them exceptional customer, technical and back office support.\r\nWe support our community by helping less fortunate children have better access to education.\r\nMost of all, we support our people â€“ in pursuing their passion, career development and the power to choose what matters to them the most.\r\nSYKES takes pride in who we are and what we do:\r\nProfessionalism. Respect. Integrity. Dependability. Excellence', 'Consulting (Business and Management)', null, 'Quezon City', '1', '11', '1a', '1', 'Mark Joseph', 'Flaviano', 'Cinco', 'aa', 'asdsadasas', '1', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', 'aadsd', 'Active', 'http://www.google.com', 'ProfileImage/1.jpg');
INSERT INTO companyinfotbl VALUES ('4', 'Concentrix', 'Concentrix is a leader in high-value global business services. It partners with its clients to deliver end-to-end customer engagement services, technology innovations, analytics, process optimization, and business improvements. The global business services firm transforms the customer experience, and streamlines front and back office and industry-specific processes to provide the highest value from every customer interaction.\r\n\r\nWith a presence in 25 countries and a staff of more than 70,000 who speak 40+ languages, we help make our clients more competitive. Concentrix offers industry expertise in 10 industries: Banking & Financial Services, Healthcare & Pharmaceutical, Insurance, Technology, Consumer Electronics, Retail & e-Commerce, Government & Public Sector, Media & Communications, Automotive and Travel, Transportation & Tourism.\r\n\r\nOur Philosophy â€“ we attack our clientsâ€™ challenges in their marketplace with speed, entrepreneurialism, investment and agility. We are engaged in your business and invested in your outcomes.\r\n\r\nConcentrix is a recognized leader in providing innovative services and technology to accelerate high-value interactions at every stage of your customerâ€™s lifecycle.\r\n\r\nWe start every client relationship by asking one key question: What is your customer strategy?\r\n\r\nArmed with the answer to this question, we partner with our clients to provide solutions that maximize the value of every customer interaction, drive revenue and reduce cost. We solve problems and provide improved business outcomes. Your brand and your success is as important to us as it is to you.', 'Computer / Information Technology (Software)', null, 'Navotas City', '', '', '', '', 'Oscar', 'Talusig', 'Sapinosa', 'manager', 'management', '4', 'cdad6f9440699a7c99014d355fb29ae1f915f8708a84d1b1e3f765271a1080a51a23156ec34f914bda271e968fafb636db402241f821ba9e3b6ee7330b632a65', 'd98a22c63b2b14113aa65d1e85b7fc6f35ca286ad0d4a83a461fe380fc7b6eb9b4800e6368dd8664c96198eb9b3d8c657ba59e08b167c5ce9ab5e49737503a98', '', 'Active', 'http://www.google.com', 'ProfileImage/4.jpg');
INSERT INTO companyinfotbl VALUES ('9', 'Aickman and Greene Consultant\'s Corp', 'Our company, Aickman and Greene Consultant\'s Corporation is a duly licensed Human Resources Development Organization primarily engaged in EXECUTIVE SEARCH AND RECRUITMENT FOR VARIOUS INDUSTRIES. Our goal is to provide significant value to our clients by identifying exceptional talents who will contribute and make a lasting positive impact. We understand that in the corporate world, talent acquisition and recruitment has been very time-consuming and costly. Our recruitment consultants have the right expertise and proven track record in facilitating efficient sourcing of qualified candidates. Furthermore, Aickman and Greene Consultant\'s Corporation is not in the business just to sell services; we exist to partner with our client. We would like nothing more but to see your company grow and succeed as the market becomes increasingly competitive.\r\n\r\nWhy Us?\r\nWe value partnership\r\n- We don\'t settle for short term flings. We deliver results for long lasting relationships.\r\nWe listen\r\n- We just don\'t hear things from your perspective. We continuously look for ways to understand your needs.\r\nWe provide solutions\r\n- We are proactive. We aim for development and learning for our company and yours.\r\nHow do we attain all of these?\r\nFrom the line up of highly credible and well experienced staff and officers.\r\n\r\nTo an elaborate list of highly qualified talents, supported by the right job fit and the ample documentation and logistics.', 'Human Resources Management / Consulting', null, 'Navotas City', '', '', '09189365113', '', 'Tom', 'E', 'Saavedra', 'Sourcing Associate', '', '8', 'cdad6f9440699a7c99014d355fb29ae1f915f8708a84d1b1e3f765271a1080a51a23156ec34f914bda271e968fafb636db402241f821ba9e3b6ee7330b632a65', 'd98a22c63b2b14113aa65d1e85b7fc6f35ca286ad0d4a83a461fe380fc7b6eb9b4800e6368dd8664c96198eb9b3d8c657ba59e08b167c5ce9ab5e49737503a98', '', 'Active', '', 'ProfileImage/9.jpg');
INSERT INTO companyinfotbl VALUES ('10', 'Alorica Pacific Rim Inc.', 'Alorica, formerly known as Advanced Contact Solutions (ACS) was founded in 1999 and has matured into a top provider of Business Processing Outsourcing in Customer Contact services. The recent combination of Alorica, PRC, Advanced Contact Solutions, Ryla and Incentica has yielded an outsourcing conglomerate, with over 34 locations, on 3 continents, and nearly 20,000 employees. Today, Alorica has one of the largest US workforces of any customer contact outsourcer, and a global footprint that extends to India and the Philippines as well as Central America. Additionally, Alorica is one of the largest Minority Business Enterprises (MBE) in the Contact Center Industry and a leader in workforce and cultural diversity.', 'Outsourcing (Call Center / BPO', null, 'Makati City', '', '', '09156176532', '', 'Cristalyn', 'H', 'Anteligando', 'HR Sourcing Assistant', '', '9', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'www.alorica.com', 'ProfileImage/10.jpg');
INSERT INTO companyinfotbl VALUES ('11', 'Circuit Solutions Inc.', 'CIRCUIT SOLUTIONS, INC. (CSI) is a technology company incorporated with a vision to provide low-cost, high performance, electronics-based systems that present the highest value to our customers. Its mission is to have â€œexcellence and technologyâ€ pervasive in all their products and to continue to innovate and respond to ever-changing needs of the market.\r\n\r\n \r\n\r\n    In January 1996, CSI began full operations under its founder by offering CCTV Monitoring and Surveillance Systems, and Electronic Article Surveillance (EAS) Systems, commonly referred to as anti-shoplifting systems. It has since evolved and diversified into other product lines not only for the Retail market but also for the security and electronics industry\r\n\r\n \r\n\r\nOver the years, CSI has continued with its rock-solid commitment to market only quality products and to provide excellent customer service and technical support. This combination has resulted in CSI making substantial inroads in the different markets the company has ventured into.\r\n\r\n \r\n\r\n    CSI greatly values the customers as this represents the collective vote of confidence that these companies have given CSI. For its part, CSI continually strives to improve all services provided to every customer.\r\n\r\n \r\n\r\n    Over the next few years, CSI will be launching several other products. Although these products may vary, there will be one common denominator - the highest possible product and quality service at the lowest possible price.', 'Consulting (IT, Science, Engineering and Technical)', null, 'Malabon City', '', '', '09127618117', '', 'Jenevieve', 'Y', 'Pe', 'HR Specialist', '', '10', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'circuit-solutions.net', 'ProfileImage/11.jpg');
INSERT INTO companyinfotbl VALUES ('12', 'Servflex, Inc.', 'SERVFLEX, INC.is a company organized to assist business in the field of Manpower Services. We are a credited manpower provider for Philippine Long Distance and Telephone Company (PLDT), WYETH Philippines, PHILCOM, ABC Development Corporation (ABC 5)\r\nOur company is committed to provide the necessary training, deployment and management of field personnel assigned to our valued clients.\r\nSERVFLEX, INC. is composed of an experienced technical staff ensuring its clientele with efficient and closely supervised manpower staffing, ranging from semi skilled to highly skilled personnel.', 'Human Resources Management / Consulting', null, 'Manila', '', '', '09124153161', '', 'Sanjie', 'U', 'Esteban', 'HR Assistant', '', '11', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'https://www.facebook.com/servflex.inc?ref=hl', 'ProfileImage/12.jpg');
INSERT INTO companyinfotbl VALUES ('13', 'People Depot  GMPR, Inc. ', 'People Depot is a one-stop HR Outsourcing and Resource firm that provides companies with full-spectrum of HR solutions. Our services include Resource Placement/Permanent Staffing, HR Outsourcing and Executive Search which are flexible and cost-effective. We serve as an extended arm of our client, working closely with its HR group, with the aim of producing exceptional results. Our main objective is to streamline processes allowing the client to focus on more essential aspects of Human Resources.\r\n \r\nPeople Depotâ€™s services mostly focus on recruitment wherein we specialize in assessing job requirements and determine perfect matches from our extensive database and network. Our team strives to provide the most qualified professionals for our clients, consequently providing our candidates with stable and enticing professional careers with reputable companies.  \r\n\r\nPeople Depot believes in the power of Human Resources. Our team is composed of competitive and dynamic individuals, all committed to the service and convenience of both clients and candidates. The company endeavors to deliver beyond what is expected from our team. \r\n\r\nVISION\r\nTo become the company of choice as partner for HR solutions in the country.\r\n\r\nMISSION\r\nTo provide a wide-range of HR in-depth solutions that will allow our clients to focus on their core business.\r\n\r\nTo be the company of choice of excellent individuals searching for the right job to maximize their potentials.', 'Human Resources Management / Consulting', null, 'Mandaluyong City', '', '', '09321421561', '', 'Gerese', 'B', 'Villanueva', 'HR Assistant', '', '12', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'http://people-depot.com/home/', 'ProfileImage/13.jpg');
INSERT INTO companyinfotbl VALUES ('14', 'Accenture', '', 'Computer / Information Technology (Software)', null, 'Mandaluyong City', '', '', '09321512616', '', 'Minette', 'A', 'Basig', 'Analyst', '', '13', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'www.accenture.com', 'ProfileImage/14.jpg');
INSERT INTO companyinfotbl VALUES ('15', 'Dell International Services', 'Michael Dell, our founder, chairman and CEO, in partnership with global technology investment firm Silver Lake, acquired Dell in late 2013, making us the third-largest privately held company in the world. Through this change, our strategy to be the leading provider of end-to-end scalable solutions, remains unchanged.\r\nBecoming a private company has strengthened our ability to bring industry-leading, distinctive, simplified and easy-to-manage solutions to customers worldwide. We have taken action to improve our competitive position in key areas of the business, solidifying our relationships with millions of global customers, bolstering our outstanding team, and strengthening both our business model and our globally-recognized brand.\r\n\r\nOur purpose\r\nWe are relentlessly focused on delivering technology solutions that work harder for our customers, and give people and organizations around the world access to technology. Our purpose â€” delivering technology solutions that enable people everywhere to grow, thrive and reach their full potential â€” drives who we are and our commitment to all of our customers. Todayâ€™s Dell is a customer-inspired end-to-end solutions provider. We have evolved from a PC manufacturer to a true IT solutions partner â€” one that offers a differentiated view of the enterprise.\r\n\r\nRead More > Why join us?\r\nOur Relationships: Working at Dell means collaborating with talented and dedicated professionals who share a passion for smart technology and responsible business and serving our customersâ€™ needs.\r\nOur Spirit: We innovate. When we see something that could be improved, we get to work inventing the solution.\r\nOur Culture: We win with integrity. Our people demonstrate our winning culture every day through the positive, supportive and meaningful relationships they create with customers and team members.\r\nOur Opportunities: We invest in our people and have developed a series of special programs that facilitate team members as they pursue a career that fulfills their ambitions and potential.\r\n\r\nOur Community: Benefits. Rewards. Balance. Our team membersâ€™ health and wellness is our priority as well as rewarding them for their hard work. Taking time from our work to volunteer in community events or spend time with their families is just another way for our team membersâ€™ to have the right balance in their lives.  ', 'Outsourcing (Call Center / BPO', null, 'Muntinlupa City', '', '', '09051241512', '', 'Chris', 'K', 'Loyong', 'Talent Acquisition Advisor', '', '14', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'jobs.dell.com/philippines', 'ProfileImage/15.jpg');
INSERT INTO companyinfotbl VALUES ('16', 'Admerex Solutions Inc.', 'Admerex Solutions, Inc. (ASI), established in 2003, is a leading global technology and services company that provides business process outsourcing (BPO) to some of the best-known companies in the world. ASI is a proud business partner to many financial services and telecommunication companies as well as many Multinational companies (MNCs). ASI centers in helping its partners manage their customer relationship lifecycle by tailor-fitting its services to their exact needs and requirements.A SI adapts to the corporate goals of the partners and streamlines these with their own.\r\n\r\nASI has built its value proposition not only as a service provider but as a business partner with its capability to do the following:\r\n\r\nProvide customized delivery solutions based on your requirements\r\nUtilize an innovative delivery approach that involves understanding you and your customer and your target markets\r\nBring together the best-in-class people to strategize, implement and manage the solutions offered\r\nEnable process improvements using industry benchmarks and standard quality processes\r\nHelp you achieve customer satisfaction by continually leveraging our knowledge base.\r\nAdditionally, ASI caters seat hosting and manpower services designed to provide immediate call center setup for new companies and/or expansion requirements as well as for disaster recovery purposes.\r\n\r\nASI is a proud member of the Contact Center Association of the Philippines (CCAP) and the Philippine Association of Collection Agencies Inc (PACAI).', 'Outsourcing (Call Center / BPO', null, 'Makati City', '', '', '09062361234', '', 'Noey', 'G', 'Comentan', 'Recruitment Specialist', '', '15', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'www.admerexsolutions.com', 'ProfileImage/16.jpg');
INSERT INTO companyinfotbl VALUES ('17', 'RG Meditron Inc.', 'VISION\r\nA country where the latest medical options are readily available.\r\n\r\nMISSION\r\nWe strive to contribute to the advancement of the country\'s healthcare sector by:\r\n\r\n  â€¢ Connecting the country\'s top healthcare providers with the latest innovations \r\n     across the globe,\r\n  â€¢ Ensuring that all installations are working as intended, \r\n  â€¢ And providing viable career opportunities for those who make it all happen \r\n     our employees.\r\nIn doing so, we are proud to be part of improving the quality of life for patients and their families, the industry\'s ultimate stakeholders.', 'Human Resources Management / Consulting', null, 'Quezon City', '', '', '09091251276', '', 'Mary Alice', 'F', 'Villegas', 'HR Manager', '', '16', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'rg-meditron.com.ph', 'ProfileImage/17.jpg');
INSERT INTO companyinfotbl VALUES ('18', 'Collabera', 'Since 1991, Collabera has been a leading provider of IT staffing solutions and services. We are known for providing the best staffing experience and taking great care of our clients and employees.\r\n\r\nOur client-centric model provides focus, commitment and a dedicated team to help our clients achieve their business objectives. For consultants and employees, we offer an enriching experience that promotes career growth and lifelong learning.\r\n\r\nThe Collabera Way represents our fundamentals beliefs and is founded on the following building blocks:\r\nOur VISION: \"Building client value for life\"\r\nOur MISSION: \"We deliver highly responsive and asset based business solutions that bridge our client\'s execution gaps through a culture of collaboration and shared commitments. By doing so, we create a dynamic environment of growth, advancement and learning for our employees and significant return for our stakeholders and accelerated value for our clients.\"\r\nOur VALUES: \r\nIntegrity - Ethics, trust, fairness, transparency and honesty\r\nPassion for Excellence - Relentless pursuit towards achieving better results every time\r\nCollaboration - Power of working together\r\nInnovation - Making a difference through creativity\r\nClient Value Creation - Designing quantum leaps for the Client\'s Business', 'Human Resources Management / Consulting', null, 'Makati City', '', '', '09059186241', '', 'Camille', 'R', 'Madrinal', 'Recruitment Manager', '', 'camille.madrinal@collabera.com', '633b83f2ce7af34b9fc8f3f89e6ac4c4bcb751166785b16546a0450f6bc232d399d72556d49721a9b4b4007771936698c6c64686b0057187d8b8877f9ca2c3db', '51d1142fd6f4986aad7774aff535caefb4eedade932a4d7f1698f1224f0c6a08b59e3842983d6e38f7f9ae074bdaa37934b1f8c7fd4caa428f7f6bb8b98c1425', '', 'Active', 'www.collabera.com', 'ProfileImage/18.jpg');
INSERT INTO companyinfotbl VALUES ('19', 'Pacific Hub', 'Pacific Hub Corporation (PacificHub Philippines) is one of the call centers in the Philippines.\r\nTo engage in contact center and other business process outsourcing. Pacific Hub Corporation (PacificHub Philippines) caters various call center operations.\r\n\r\n\r\nPacific Hub is Filipino-owned BPO company currently considered as the fastest growing multi-channel solutions provider that now has successfully made its mark across the globe particularly in North America, Asia Pacific, and Europe. Operating only for 8 years, Pacific Hub had been known to deliver the most effective, cost efficient and customized solutions that build the competitive edge of its clients. â€œYour Needs Deliveredâ€. This is the underlying philosophy that drives the service of the company. Pacific Hub Call Center focuses on the customer needs of its clients being the ultimate judge of quality.\r\n\r\nEnvisioning to be the most preferred partner in BPO solutions by international organizations, the company adheres to four fold mission to its clients, its people, its solutions and its business. For its clients, Pacific Hub Call Center aims to sustaining quality and excellence in service delivery to attain the highest levels of client satisfaction.\r\n\r\nTo its people, Pacific Hub dedicates itself to the development of its human capital which defines the organization and its service to ensure their personal and professional growth. For its solutions, it aims to provide the most gripping solutions to their various and dynamically changing requirements by perpetually modifying and enhancing its business model, processes and systems and following the worldâ€™s best practices in IT design and infrastructure. Finally in business, it maintains a solid financial stability and profitability by endeavoring balance strategic growth that ensures value add to all its partners.\r\n\r\nThe Pacific Hub Corporation brand stems from its AGILE values which stand for accountability, growth of stakeholders, integrity, leadership and excellence. These are the underlying values that built Pacific Hub Corporation core competencies in sales management, customer care and health information systems.', 'Outsourcing (Call Center / BPO', null, 'Makati City', '', '', '09051237678', '', 'Patrick', 'R', 'Monis', 'Sourcing', '', 'neilpatrick.monis@spi-global.com', '38582cf87c9f365358a5c1e835b6cbe7df149a7f19adcd60d584ae0b930d495a27f220c61559725fd2071b8ca22feb34d80a76e592f5f2ef890fc64ffb888522', 'c3486a0b303c57fbf9f5bc1b62140092a3f486ca8c40babae6236dd258b332384fc323fce55bd2f3b227cefea8e2db142acb1e07cf6ed9dcd3469c88aad0da4c', '', 'Active', 'www.spi-global.com', 'ProfileImage/19.jpg');
INSERT INTO companyinfotbl VALUES ('20', 'Evotech', 'Evotech Performance are designers, manufactures and suppliers of superior quality aftermarket motorcycle parts. These parts include tail tidies/fender eliminators, radiator guards, crash protection systems, spindle bobbins, paddock stand bobbins, bar end weights, engine guards, exhaust hangers, headlight guards and brake/clutch levers. At our facility in Alford, Lincolnshire we take advantage of the very latest technology to develop the ultimate in bike parts, technology that includes 3D scanning, 3D printing and a fully CNC equipped manufacturing plant to name but a few. This, coupled to many years of experience from our passionate and highly skilled team allow us to deliver some of the most desirable motorcycle accessories on the planet.', 'Computer / Information Technology (Software)', null, 'Malabon City', '', '', '09165986728', '', 'Famela', 'Y', 'Amor', 'HR Head', '', 'hr@evolvesoftware.com.ph', '3415d5fe96e51af9e95a7084a8e48a4f2c8f0a2c7fbf69c6d6fa34fb26bef6138c548f251b410ba90b9db4854c6575eb1262bdde15923243545db74afa80ca91', 'ef5e092e460ce74f6cbe5e70d1c3331ea75c8ab5bf21e4493536ed9f267b2ee1c5c441e28201fcad251b91a9384b7007c4a82df8c814253e951add5af0462889', '', 'Active', 'www.evolvesoftware.com.ph', null);
INSERT INTO companyinfotbl VALUES ('21', 'Benby Enterprices, Inc.', 'BENBY is the leading full service distribution company that has extensive and reliable experience and reputable expertise in brand and market development. It is home of leading international food brands like Frito Lay Snacks, Quaker Oats, M&Mâ€™s, Snickers, Pedigree, Ferrero, Nutella, Tic Tac, Loacker, Nivea, Reynolds, Swiss Miss, and Dole among others. \r\n\r\nHistory \r\nEstablished in the year 1988 as an import, distribution, and marketing company. Braving its way through highly competitive arena, BEI has successfully led its product lines to market leadership in their respective market segments. Our vision is to be one of the leading distributors and marketers of world renowned quality consumer food products. \r\n\r\n\r\nCorporate Values \r\nThe Benby team is guided by the core values of integrity, accountability, teamwork and social responsibility. Its employees enjoy a family-oriented work philosophy that promotes an atmosphere of trust, respect, continuous learning and empowerment. People are its greatest asset, and its work mantra is Hard Work and Fun! \r\n\r\nBenby cares about its community and is very active in greening the environment and uplifting the lives of its employees and fellow Filipinos by its advocacy on education. \r\n\r\nSales and Distribution \r\n\r\nBenbyâ€™s Sales and Distribution network includes a multi-channel distribution system which covers modern trade, secondary accounts group, foodservice, convenience stores and tertiary accounts. \r\n\r\nOur team is composed of young and dynamic sales professionals dedicated in delivering the set goals and objectives and committed to the pursuit of excellence in sales building blocks. ', 'Manufacturing / Production', null, 'Quezon City', '', '', '09081237687', '', 'Jem', 'Q', 'Victorio', 'HR', '', 'mohanna.villanueva@brandlines.com.ph', 'afbd87f12c2375e563a1f21eb59587c6933b17c82534109487db751a288a13b1a22ab4303f5e6fb016ab186095143f08aae6dbee949c20244b41182c18c536c4', 'b3249d0243a87e97ec08bb6323bcbbfc80b990e8fec0e95c03b68cc853c9c283c7457bb4b357d4db48b015a161b5820d7bd7ff08255941d64432a2c2305fd571', '', 'Active', 'www.benby.com', 'ProfileImage/21.jpg');
INSERT INTO companyinfotbl VALUES ('22', 'Staff Finders Inc.', 'To be a direct extension of your company by providing quality, reliable candidates for your company.', 'Property / Real Estate', null, 'San Juan City', '', '', '09231767823', '', 'May', 'B', 'Clavecillas', 'HR', '', 'staff_findersinc@yahoo.com', '864b14584dcc3d8d65f7a55d23e381d281c97ae5250d81d5af68c8c7b6413b7e2c4a62606702e48102b20937273acb7fd60c6c1265174bcc473135f657e151bb', '32946bba651a6f2bfef72251ccbcc0395d2c7be8faae510f7d8d52bbea6b37c55c06569303c41106a5c62778e239c568afacf782a33f2eb4072250e529723296', '', 'Active', '', 'ProfileImage/22.jpg');
INSERT INTO companyinfotbl VALUES ('23', 'Empire East', 'Empire East Land Holdings, Inc. builds landmark residential communities that transform the urban and suburban landscapes. Since 1994, and with a first mover advantage in the middle-income housing segment, the company has built up a portfolio of successful projects- choice settings that bring the benefits of harmony, well-being and value to their residents. Today, through a new breed of community developments, Empire East continues to fashion lifestyles that immerse Filipinos in richer and more rewarding experiences right at home.', 'Property / Real Estate', null, 'Makati City', '', '', '09129861287', '', 'Phillip Patrick', 'O', 'Isidro', 'Associate Director for Sales', '', 'patrick.isidroph@yahoo.com', '21f31dda33cdf8524f04342feaf5e83c19b8eb81d8cf21b659c59652de86501ea086a477951b4a010f851b855e1806de1dcb197fb9c71eb57d51cf7e2f13a034', '710d4461b839928c998de14b8ed88ac34f5a3d088997be28c5b20713655eaf398a70d94c8fa5f6be83f556eb893822a8d3d743a3d33bed63e6700600e1520cd4', '', 'Active', 'www.empireeast.com', 'ProfileImage/23.jpg');
INSERT INTO companyinfotbl VALUES ('24', 'Business Trends (A Kelly Services Company)', 'Navigating the human capital arena has never been more complex. You need a strategic partner with expertise to transform challenges into opportunities, an ally that delivers proven solutions for your workforce management needs.\r\n\r\n\r\nBusinessTrends (A Kelly Services Company) is the leading provider of workforce management solutions. We help you draw solutions to meet the challenge of workforce flexibility by providing staffing solutions fit to your needs.\r\n\r\n\r\nBusinessTrends was established in 1999 as BusinessTrends Philippines to provide staffing assistance in the country. It was part of the Singapore-based staffing powerhouse BusinessTrends International. Since then, we have grown to offer a wide range of permanent, temporary and contractual staffing solutions. We provide workforce management services to the business process outsourcing industry, banking and finance, engineering, scientific and healthcare, information technology and professional support.\r\n\r\nThe franchise agreement of BusinessTrends in the Philippines was awarded to SFI Group of Companies, a total human resources solutions provider to local and multinational firms for more than 50 years.\r\n\r\nIn August 2000, BusinessTrends became part of the global family of Kelly Services, a NASDAQ-listed staffing giant with offices around the world. The acquisition was aimed at strengthening Kellyâ€™s global presence and to gain a foothold in Asia. All of BusinessTrendsâ€™ offices across Asia have transitioned and marketed the trademarks and brand of Kelly Services.\r\n\r\n\r\nNow, BusinessTrends Philippines has transitioned to the name BusinessTrends (A Kelly Services Company).', 'Human Resources Management / Consulting', null, 'Pasig City', '', '', '09051238961', '', 'Cristina Mae', 'B', 'Macam', 'HR Department', '', 'cmacam@businesstrendsph.com', '3c7ffbed593c23f7e313617e44a44f89035c9c901ea4d27d4138c894636c2b10b2451ef500936795a73ffd17f218ad18b034bff021c365a19e45305d31d8a05a', '496e376ec57ab9f41c34d5c2fc1d190e77f820fc93cfe314eb5642174f6ad081de4c03f992d8ee20cdb2c2e15bc28eef910edcbe3e35e717471aa5fab3601c5e', '', 'Active', 'http://www.kellyservices.ph', 'ProfileImage/24.jpg');
INSERT INTO companyinfotbl VALUES ('25', 'Netineers Web Design', 'Investing in internet real estate is a smart decision. It will help boost your sales at very minimal costs. Every business should have a website.\r\nWe Build Your Dream Website!', 'Computer / Information Technology (Software)', null, 'Quezon City', '', '', '09051238176', '', 'Clifford', 'O', 'Tan', 'Manager', '', 'info@netineers.com', 'f8e37608f12a1594c9cf62da9f81b039612a38a73fa1c8d0474e2855863ac97c0e42aa5acd49bdbf2f41f0b4f6c838560b0507422606d63444094a5629bb0d29', '4810ef1962415be5c2fee1ef6a32b2eaee526eddf14a34b96c637402fd05e126e8c75527758613d20a805b7616a573bc559c83e87f49106a93e53b0807c72bad', '', 'Active', 'www.netineers.com', 'ProfileImage/25.jpg');
INSERT INTO companyinfotbl VALUES ('26', 'Job Solutions Manpower Agency', 'The company was organized on June 20, 2005 as a single proprietorship. Mission To be the preferred manpower agency for fulfilling the manpower needs of our clients and to equip the deployed manpower with the highest level of customer service and necessary skills and competencies. ', 'Retail / Merchandising', null, 'Makati City', '', '', '09129079862', '', 'Malou', 'C', 'Camposano', 'HR Officer', '', 'mlcamposano_jobsol@yahoo.com', 'c4343ed63766b5a82fc37e05cc91f31322616266f45ace69906182307b74bb72aff484ad7fe5a40dc278f4f39f86c3a81e0642e90b3a47aee0b947b2e28709ad', '9ed0211c143e3fd71f347974b78071d47e93b00096b5284c9c546ee366350b0a5de132bbbeaf8d5f8fb36450ddb7a8e7ae99edc3576b33413e4fd72ebe5341e3', '', 'Active', 'http://jobsolutionsmanpower.blogspot.com/2013/07/album-1.html', 'ProfileImage/26.jpg');
INSERT INTO companyinfotbl VALUES ('27', 'PRU LIFE UK', 'Pru Life UK is one of the leading life insurance companies in the Philippines, with over 18 years of excellence in providing relevant and innovative life insurance products designed to meet the specific needs of the public. The pioneer and expert in investment-linked insurance products, Pru Life UK is driven by its commitment to always listen to and understand the financial protection and wealth management requirements of the Filipino.\r\n\r\nPru Life UK started its operations in the Philippines in 1996. It is a subsidiary of British financial services giant Prudential plc. Established in 1848, Prudential plc has an extensive network of life insurance and mutual funds operations around the world, active in the United Kingdom (UK), Europe, the United States (US) and 14 markets in Asia. It has 23 million insurance customers worldwide and manages Â£443 billion in assets as of 31 December 2013.\r\n\r\nIn the Philippines, Pru Life UK offers an increasing portfolio of ordinary life, endowment*, personal accident and investment-linked products. In 2010, Pru Life UK was recognized as the fastest growing Prudential company in Asia by regional headquarters Prudential Corporation Asia (PCA).', 'Banking / Financial Services', null, 'Makati City', '', '', '09150218963', '', 'Antonio', 'T', 'Sabangan', 'Financial Advisor', '', 'antoniosabanganiii@gmail.com', 'bb56ee53440418d506dd28a5d32d6a97a9a53e5227848a88def4d73f347f71ae4b5585b7d144294a01bda2731d762374f792bd152400317ac229941ee820f178', '7bdc5ecf2ba144d7dfac74b3a32e9ee219321cdd0ce11763a77d943f8b40ff07b1b523edff84773ad0d3accf13eaf33f51ae4d75856ca6bf8de234eff96fe0af', '', 'Active', 'http://www.prulifeuk.com.ph/corp/prudential_en_ph/', 'ProfileImage/27.jpg');
INSERT INTO companyinfotbl VALUES ('28', 'Boardwalk  Business Ventures', 'Boardwalk Business Ventures, Inc. is a social enterprise fueled by the desire of its owners to address poverty.\r\n\r\nHaving been exposed to communities with families without stable sources of income or sustainable livelihood while they were growing up, its owners, Bernardo and Imelda Madera, were motivated to conceptualize a business that will help address poverty. This has led to the foundation of a social enterprise centered in providing sustainable livelihood and continuous opportunities to the less fortunate enterprising Filipinos.\r\n\r\nSince its inception, Boardwalk has continuously provided opportunities to everyone who needs it â€“ from the business programs offered to households and young entrepreneurs; to giving newcomers of the runway a chance to thrive with the 100 Model Search in 2011, up to its current efforts of giving promising young designers the opportunity to establish their own label locally and internationally. To date, this social enterprise has helped over a million Personal Shoppers along with introducing hundreds of models and designers to the fashion industry.\r\n\r\nEach and every one of them has had their lives improved as Boardwalk remains ready and willing to provide everyone with a level of prosperity and abundance they can all look forward to. With over 100 Branches and Satellite Offices strategically positioned in key cities around the country and the world and with its extensive collection of stylish and world-class fashion and lifestyle products, Boardwalk remains steadfast with their pursuit to bring the Boardwalk mission and vision to new heights.\r\n\r\nRecognized as one of the best business players in the field and hailed as one of the most outstanding organizations in the country, Boardwalk remains committed to its mission and vision to continuously uplift lives of people and provide them with the confidence needed towards the future. With Boardwalk Business Ventures Inc., empowering people and drawing out the best that they can be is their top priority. Indeed, over the last 23 years, Boardwalk has transformed into a world-class social enterprise which every Filipino can depend on and be proud of.\r\n', 'General and Wholesale Trading', null, 'Pasig City', '', '', '09127368112', '', 'Ken', 'T', 'Yamamura', 'HR', '', 'moncepido@boardwalk.com.ph', '80d3d80e77fe0773ae016f1fea090a13335c98fce1fc86c8deb41e14182b989c174b562dd815871e6bc77d9376115b7c1e8f43a8cbbfcaee3af4985b48bba8bd', 'f839d113c7feee189af66276bcf1db6d29011474c0cf3658a5d5c8ef65ea9db09c717f6a3e38ac325e354f700bf91fa6275170412122679b1f7b22284d0de394', '', 'Active', 'boardwalk.com.ph ', 'ProfileImage/28.jpg');
INSERT INTO companyinfotbl VALUES ('29', 'CICC Holdings', 'As Chinaâ€™s first joint venture investment bank, China International Capital Corporation Limited (â€œCICCâ€) was established with a strategic partnership among prestigious Chinese and international financial institutions.\r\n\r\nSince its inception in 1995, CICC has always been committed to providing high quality value-added financial services to clients. CICCâ€™s comprehensive business scope consists of economic, securities and market research, debt and equity issuance and underwriting, merger and acquisition advisory, equity sales and trading, fixed income, principal investment, asset management, wealth management, private equity and investment advisory.\r\n\r\nHeadquartered in Beijing, CICC has set up branches in Shanghai and Shenzhen, securities brokerage branches in 18 mainland cities such as Beijing, Shanghai and Shenzhen, and several other subsidiaries. With increasing cross border business activities, CICC has also set up offices in Hong Kong, New York, London and Singapore to better serve its domestic and international clients.', 'Insurance', null, 'Makati City', '', '', '09120798239', '', 'Laurence', 'Q', 'Sanchez', 'Recruitment Officer', '', 'laurence.cicc@gmail.com', 'e279c8e816505c399ddac0f302861cdc6e72cb3124f589a62240ef42c3bb26ad604840c0b300851aa5e3228dabf7949f3bcc11692b14bc4e39444439f9d5d85c', '41f9c86a86d9fa8a3c227608c0a9a9bcb0463cd8da9cc042813aa6a889783172d5553843cb1c902912a2d9cf2c17d6eb8d9bbf5429216c7b88b6f2e6ae8b9337', '', 'Active', 'www.facebook.com/ciccmanpowercorp', 'ProfileImage/29.jpg');
INSERT INTO companyinfotbl VALUES ('30', 'Quaerito Qualitas Inc.', 'We are an HR Solutions company whose strength lies in the provision of innovative and cost effective Recruitment and Human Resource solutions in the Philippines. Inspired by the Latin phrase \"Quaerito Qualitas\", which means, \"to seek quality\", we ensure only the best in both the range of solutions we offer our clients, and the opportunities we provide our candidates.', 'Human Resources Management / Consulting', null, 'Makati City', '', '', '09158712831', '', 'Aris', 'G', 'Ocampo', 'Manager', '', 'aris.ocampo@qqi.ph', 'd8d0e9badcfc5ecd40db3dab3a1dcd9de2f5eb560a8417da49e0ee6a595f9bcf52d68296cd70473d2cb7e4b43b85ea44fdee9293a5ef8d55af8890cc26bffd1b', '12273416340b756eaa528606ee1b1f74e0007ffaae57c7dc7ea508e55d25a1cd451499a80cc16b4d477ed5d65c8a7b1621d09f8147beefb5a5f0c0b2ec3f1898', '', 'Active', 'http://q2hrs.com/', 'ProfileImage/30.jpg');
INSERT INTO companyinfotbl VALUES ('31', 'LBP Service Corp', 'LBP Service Corporation (LBPSC) was organized and incorporated in October 1996 primarily to provide efficient and quality staffing and other human resource services to different business organizations nationwide. We are considered as one of the countryÃ¢â‚¬â„¢s leading independent manpower service contractor that is a Top 1000 Corporation in the Philippines. From an initial paid-up capital of 6.7 Million pesos, the company\'s total assets have remarkably grown to over 900 Million pesos. Currently we have over 9,000 employees deployed to our clients nationwide. Likewise, our client base has consistently increased since its incorporation.\r\n\r\nWith our 18 years of experience, our goal is to be a relevant business partner to both government and private corporations by providing highly qualified candidates that would be instrumental in the company\'s growth. We separate ourselves from the competition by giving the most innovative and efficient staffing solutions in the market today. \r\n\r\nOur functional services are: Administrative Support, General Services, Janitorial & Building Maintenance, Marketing & Sales Support, Operations Support and Technical Services.', 'Human Resources Management / Consulting', null, 'Pasig City', '', '', '09091251289', '', 'Monina', 'N', 'Garces', 'Manager', '', 'mgarces@lbpsc.com.ph', '48b45ffd6c0f4311bb18c0d2287baa0bccaceeb35859876a5402c14730db1265e2b01c39c686c7dc99069bf20e022597799c22a216e54b81546d1240b28e8ae0', '595c44575bb2ece0a45fe1d7cd62a2342f53eb9bf1a9d22e1e915e544a3363660037976ca301746685a57b5ef8f4b8ce02931dc3867d05dc6f93ee2a5f2493a6', '', 'Active', 'www.lbpsc.com.ph', 'ProfileImage/31.jpg');
INSERT INTO companyinfotbl VALUES ('33', 'ANR Unlimited Multipurpose Cooperative', 'Alternative Network Resources Unlimited is an Outsource Service Provider. It started its operations in 2003 with 37 workers. ANR Unlimited has rapidly grown to more than 4000 workers with more than 40 client/business partners. What makes the company unique is its character and personality. ANR Unlimited is a multi-purpose cooperative. As a cooperative, it advocates self-help, self-responsibility, equitable distribution of opportunities among its members who are part-owners of the business. ANR looks at its customers as business partners working on a long term and mutually beneficial business relationship. ANR focuses on providing value-adding services by professionally managing all its engagement/relationship.', 'Outsourcing (Call Center / BPO', null, 'Pasay City', '', '', '09127868712', '', 'Roxanne', 'C', 'Garcia', 'Recruitment Assistant', '', 'roxanne.garcia@anrunlimited.ph', '7489786af1983f507083b97dc21c9b4f3d855fc6e5ac0581da13a682bb76279c05b630d15b392443d05ee6971bef785ab0be5fb2014f41e25de20801a3b33983', '7337860f6d5cf9e631ed2233ce47f51bf115b749530147835abeab0c98f038a265f0752674b8049071471e05af605f61a11ba54f00627ca2bce1972752af991b', '', 'Active', 'www.anrunlimited.ph', 'ProfileImage/33.jpg');
INSERT INTO companyinfotbl VALUES ('34', 'Global Staff Recruitment Search Inc. ', 'GLOBAL STAFF RECRUITMENT SEARCH, INC. specializes in the outsourcing of all types of business processes and recruitment of temporary as well as project based employment requirements of most multinational, foreign and local companies within the Philippines today.\r\n\r\nThe company, which is complemented by a team of professionals and experienced management staff, has the honor to be one of the innovators and pioneers to provide overall personnel management solutions to various local and multinational companies nationwide.\r\n\r\nLong term partnerships are the foundation of our business. We have worked over the years to earn the respect of clients and candidates alike. As a result, we have developed an extensive network of contacts that provide both candidates and client referrals. At Global Staff, we deliver quickly and consistently, placing quality at the center of everything we do.', 'Human Resources Management / Consulting', null, 'Quezon City', '', '', '09876762357', '', 'Juan', 'A', 'Aninion', 'Marketing Manager', '', 'global.staff@yahoo.com', 'b2ee960fa081dbbef47fead6dccc71160885a3c0822deafc02a5b24a48936f39598bab848f92269c6c7dd2149775b3a7ea450c9cc626e81ea2677180133161b1', '055afc1e1d0c73cb85b8b6bb82c36be8e8e9bd7e41d41719d4488f7d42caec450035b4cb7bf05a0552eed4fb72122e6e88a91374754f259106b01fa55ac97a8c', '', 'Active', 'www.globalstaffrecruitment.com', 'ProfileImage/34.jpg');
INSERT INTO companyinfotbl VALUES ('35', 'Mirof Outsourcing Group', 'MIROF RESOURCES, INC . (MRI) is a staffing and recruitment firm established in 2001. Despite being a newcomer in the industry, MRI has earned its reputation to be a company that serves clients in a flexible, personal, and ethical manner, while striving to achieve the most cost-effective solution to their needs and requirements. MRI may be a young organization compared to the other players in the industry, but we have the drive, the resourcefulness, the aggressiveness, and the professionalism. As such, we have managed to attract some of the biggest clients in the country and continue to impress them with how we make recruitment a strategic fit in their organization.\r\n\r\nAs a result of our aggressive stance in the industry, we currently employ thousands of personnel, who are deployed across various industries in numerous positions. Today, it includes regional operations in Dagupan, Bicol, Ilo-ilo, Bacolod, Cebu, and Davao.\r\n\r\nNow, our objective is to make recruitment a strategic fit for the Business Process Outsourcing (BPO) and Information and Communications Technology (ICT) Industry. We are aiming to be active in the BPO and ICT Industry by providing all the crucial manpower requirements needed by companies to be globally competitive. With such a huge demand needed for the BPO and ICT Industry, MRI plans to be at the forefront on the supply side.', 'Human Resources Management / Consulting', null, 'Makati City', '', '', '09198265381', '', 'Sol', 'T', 'Mateo', 'Recruitment Specialist', '', 'sol.mateo@mirof.com.ph', '3bad648746cbd6d5de5304ed686a527087293f7cb4206894988f83e7b85e4d84e6e62cdc7d81567eb928a8824e1fe0208e765a71553387efe501523ce950a922', '67030a871f70887085732afeecc038370972e830008aee6618815018aa5593189098831c47158457041e0fced65478cb5aa50e672fd7fba6bdbde3c392be9b9f', '', 'Active', 'www.mirof.com', 'ProfileImage/35.jpg');
INSERT INTO companyinfotbl VALUES ('36', 'Vigattin', null, 'Computer / Information Technology (Software)', null, 'Quezon City', null, null, '09812981623', null, 'Elison', 'R', 'Barcelo', 'Ceo', '', 'elisonbarcelo@vigattin.com', '785f038855996ab86b3801456042ff1c5f163594ba62bf3e158882878c2c9fb45af8d533495fe009b5d14f3af1bb624dacb80c43cda2bb721fae04c56c06f087', 'd23b1b075247a1e271ab1840419d182b368483dbb57a409838ef1ab153fbf85074879c433dabb508452e11f1488d5a1fc60641c25562dd6376c8da73d3f9d501', null, 'Active', 'www.vigattindeals.com', null);
INSERT INTO companyinfotbl VALUES ('37', 'Teledevelopment', 'TeleDevelopment Services has been playing a critical role in providing consulting services and solutions to the worldâ€™s biggest companies, helping them achieve their outsourcing and offshoring objectives for more than 25 years.\r\n\r\nOur global experience, local expertise and client-centric approach to finding creative solutions to business challenges have given our BPO service provider and contact center partners a significant edge in establishing, building and optimizing their global operationsâ€™ performance, capability and success.\r\n\r\nWhether you are starting out, looking for the best talent, entering new markets, reducing costs, aiming for efficiency, improving performance, enhancing profitability or leaping ahead of the competition, TDS can work hand-in-hand with you in taking your business to the next level.', 'Advertising / Marketing / Promotion / PR', null, 'Pasay City', '', '', '09187628311', '', 'Aleli', 'C', 'Buenaventura', 'Sourcing Officer', '', 'abuenaventura@teledevelopment.com', 'f2c54949d4ee5e5dcf72f9fbae20be9b6d896e18eca13cd6bdde31caac4de9ae35af16f9a22cc2868f0f830f62d84cde1de046c4b07e9904978051a03272abf5', '0292aa9d82c86da97cdc403cb7ecf0a22694513f1c546283e3de48dd58236265ef89f1afa59aae48f776acf59dcb8ad4b6b2cb5c57f0975d4763fd99608ec23e', '', 'Active', 'www.teledevelopment.com.ph', 'ProfileImage/37.jpg');
INSERT INTO companyinfotbl VALUES ('38', 'BPO Career Hub', ' MISSION\r\nBPOCareerHub.com aims to bring Filipinos closer to brighter career opportunities in the various fields of the Information Technology - Business Process Management (IT-BPM) sector. We educate and encourage job seekers to explore jobs in Healthcare, Finance & Accounting, and Information Technology.\r\n VISION\r\n\"Reach - Teach - Hire\" has been our guiding principle and it inspires us to strive harder to cater to thousands of job seekers, educate them about the BPO industry and help them land a rewarding job that best match their talent and skills.\r\nVALUES\r\n  Our core values drive us to be the best in what we do:\r\n\r\nClosing the gap between hiring employers and talented job seekers\r\nProviding exceptional value and commitment to our clients\r\nTouching the lives of many with our off site career events\r\nInspiring creativity, success and family values in the workplace.', 'Outsourcing (Call Center / BPO', null, 'Pasig City', '', '', '09127651231', '', 'Almalyn', 'E', 'Bautista', 'Marketing Specialist', '', 'almalyn.bautista@bpocareerhub.com', 'd2d03ba9d17d34aa5fff2e88c8133407ce8112c6440e87f1ce8849f46c8f6a562b37231cdafd20872e52cc1eb045fd2d92c94618d201466ff9dc41ee0a8875fe', '5c5bbcb4f5abdc0aa4d0e5e91bf5043c3947c27b088188527a5bb08251f95aecc7a5190aa8a117829e8828307c34ec40074f929e65c9d33d2bb70ac7c34f0861', '', 'Active', 'www.bpocareerhub.com', 'ProfileImage/38.jpg');
INSERT INTO companyinfotbl VALUES ('39', 'Jobs180', 'Jobs180.com is a job site focused on providing a simple but powerful tool to Job Seekers, Employers and Schools. We put innovation to the traditional job site by bringing the Web 2.0 to recruitment using the simplest interface.\r\n\r\nJobs180.com is more than just a job site. Our vision includes partnering with colleges and universities to help support the employability of our graduating students. According to DOLE statistics, among the unemployed population, more than 50% or 1.4M is comprised of youths from age 15-24 (as of July 2012). This figure is staggering, considering that the total number of college graduates is 500,000 annually.\r\n\r\nJobs180.com wants to address this issue by helping prepare these kids join the competitive world through our free Marketing ME career orientation program and the school\'s free access to the GATEW@Y school portal for career insights.\r\n\r\nJobs180.com is unique with these exclusive and exciting services:', 'Arts / Design', null, 'Pasig City', '', '', '09128736182', '', 'Kaye', 'S', 'Sartorio', 'HR', '', 'kaye@jobs180.com', '6f3d3e7055b3fb7328b6e9cbc8aa212476abd1b975f37e18575ccfa8184e4ef56a78ad5980f9b7d4ae53d278f501bd1717cf5478c954b27ea3a0881f17a971c1', '1750ca2a56f87c566f839c31dc141d6f9024b3ee985a38393a0cfd8768d9582986512cc08670474f4d669c002e0470eb61174d7b30ad9505ed9fa7a3018b7b88', '', 'Active', 'www.jobs180.com', 'ProfileImage/39.jpg');
INSERT INTO companyinfotbl VALUES ('40', 'SITEL Philippines', 'We are Sitel. We are one of the worldâ€™s leading outsourcing providers of customer experience management and we would like to share something with you - our promise of experience.\r\n\r\nExperience is everything at Sitel. Itâ€™s what sets us apart from the rest. Whether weâ€™re dealing with a simple account query or creating an entire customer management strategy, we collaborate with our clients, we share our expertise, we build trust, and create strong customer relationships; adding value through our key brand attributes: knowledge sharing, a people first culture, global strength combined with local flexibility, and operational excellence.', 'Outsourcing (Call Center / BPO', null, 'Taguig City', '', '', '09123871628', '', 'Jerrau', 'S', 'Malugao', 'Recruitment Specialist', '', 'jarreau.malugao@sitel.com', '1685caed6be1e171b4febcc1b7a9362f80832b9ad8c53fa079b599bea7359bdc946c62cc191caf14e8644cf7fe318e73da3b6a19f36abe8ca87b5ce7daa8efef', '1157e845d52bfa99105117c8ae3f288be9311111bd82acf16ec9a8cf25fc3622b176cbbe6a70a4d504cdaf39273e37e237216b9e607c93fcd7c77878be3cc7f4', '', 'Active', 'www.sitel.com', 'ProfileImage/40.jpg');
INSERT INTO companyinfotbl VALUES ('41', 'MGME', 'Our Mission:\r\nTo deliver the best manpower solutions to employers by providing them  with competent Filipino workers who will be the right people for the right job.\r\nTo the Filipino workers, MGME Manpower Services aims to provide employment opportunities towards realizing their career goals and having a better life.\r\n \r\nOur Vision:\r\nTo be a prominent manpower company in the country known for delivering exceptional service to employers and providing the best opportunities for Filipino workers.', 'Human Resources Management / Consulting', null, 'Pasay City', '', '', '09987618273', '', 'Danica', 'J', 'Manozo', 'Marketing Assistant', '', 'mgme_marketing@yahoo.com', '5718d1b143e02c470c70f63ad39ae480dafbb345da179018f20bfaaada16c5157262976be11e817dc3b1ef2b0fe2ba8d175a50ec51b973756375d1b50ac0569f', '0cbf6a3d3da93faaea2a5c14b242afdfa48ff7cd8087f047f86f69227bddf8990b188be3b3ad8d13e64591b3cb524c639c0ef3f3513132dbb0cb1fa8a6dbda25', '', 'Active', 'www.mgmemanpower.com', 'ProfileImage/41.jpg');
INSERT INTO companyinfotbl VALUES ('43', 'Globe Telecoom', 'Globe Telecom is a leading company in the highly competitive Philippine telecommunications industry. We constantly renew our commitment to create a wonderful world for our customersâ€”by simplifying communication technology, and removing obstacles to improve everyday life. Our extensive range of services meets the requirements of individuals, small to medium-sized business, and corporations and enterprises alike.\r\n\r\nAside from being an industry shaper, Globe is consistently one of the most profitable companies in the Philippines and Asia. We are recognized in both local and international markets for our outstanding corporate governance practices.\r\n\r\nGlobe aims to be a mobile service innovator rather than just another telecom service provider by pioneering digital solutions. Our products and services continuously enrich the lives of over 46 million customers. Creating this wonderful world is what we aspire to, reflected in our philosophy of the Circle of Happinessâ€” the ecosystem of engaged employees, delighted customers, and satisfied shareholders. Our employees seek to deliver superior customer experience, living out a service culture of providing genuine care.\r\n\r\nThis differentiates us in the market, enabling Globe to become the preferred and trusted brand, ensuring the loyalty of our customers. The outcome is a profitable and sustainable business, where shareholders are rewarded by our performance. This vision of a wonderful world puts the satisfaction of customers at the heart of everything Globe has to offer.\r\n\r\nVISION:\r\nHappiest customers, employees and shareholders.\r\n\r\nMISSION:\r\nWe create a wonderful world for people, businesses and the nation.\r\n\r\nOUR CORE VALUES:\r\nWe put our customers first.\r\nOur people make the difference.\r\nWe act with integrity.\r\nWe care like an owner.\r\nWe keep things simple.\r\nTo us, it\'s be fast or be last.\r\n\r\nCORPORATE OBJECTIVES\r\n\r\nGlobe continues to harvest the fruits of its transformation while positioning the company for the future with the end vision of grabbing more shares while transforming customer experience, cost, and planting new seeds of growth. Globe envisions a strong business through 1) growth in service revenue, 2) increased acquisition and recontracting efforts, and 3) expansion of mobile coverage nationwide.\r\n\r\nGlobe recorded its best year in 2014, breaking records and registering all-time highs across all metrics. To sustain this for the future, Globe will continue to spearhead evolution into the digital and telecommunications world through:\r\n\r\nFuture-proofing through Innovation - innovations geared toward changing digital lifestyles of subscribers, introducing product and promotions that cater to different customer digital preference;\r\nPartnering with Global Brands - developing partnerships and collaborations with global giants in the world of content such as securing partnerships with Google, Facebook, Viber and Wattpad;\r\nPurveyor of Digital Lifestyle - diversifying products to provide customers their preferred experience including music (Spotify), sports (National Basketball Association) and entertainment (HOOQ).\r\nIn 2014, Globe also launched Globe Generation 3 (GEN3) in two of its stores in the nation (Quezon City, Manila and Cagayan de Oro), which feature various lifestyle zones that let customers do more than pay bills and discover more of what a device has to offer. In 2015, Globe is set to convert one more of its existing stores into GEN3 Stores to bring the Globe retail experience to more Filipinos.', 'Telecommunication', null, 'Valenzuela City', '', '', '09267694941', '', 'Aira', 'C', 'Pintang', 'Ceo', null, '17', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'http://www.globe.com.ph', 'ProfileImage/43.jpg');
INSERT INTO companyinfotbl VALUES ('44', 'Symanpro Manpower', 'SYMANPRO MANPOWER SERVICE CONTRACTOR CORP., a manpower recruitment or manpower supply company registered with the Security and Exchange Commission, the Social Security System, the Bureau of Internal Revenue, and duly licensed by the Department of Labor and Employment. The company has its vision to become a leading partner of the various business organization in the commercial and industrial sectors who are supportive of the governmentâ€™s thrust of providing mass local employment opportunities for the Filipino people nationwide. It is committed to comply with any and/or all laws governing the conduct of its business. SYMANPRO MANPOWER SERVICE CONTRACTOR CORP., shall engage for its valued clients only qualified personnel successfully passing its strict screening standard and meeting the job specifications set by the clients. It has designed its screening procedure to include spiritual emphasis, which would help strengthen oneâ€™s moral fibers and reshape his attitude positively. SYMANPRO MANPOWER SERVICE CONTRACTOR CORP., has always been faithful in guarding the welfare of its workers by ensuring to them that they receive the benefits decreed by law. We believe that workers who are paid as provided by law will tend to work better, making them an asset not only of Symanpro but also to the companies to which they are assigned as well. SYMANPRO MANPOWER SERVICE CONTRACTOR CORP., more than anything else invokes the divine guidance of the Lord Jesus Christ, to whom the company commits all its business endeavors.', 'Human Resources Management / Consulting', null, 'Valenzuela City', '', '', '09075978228', '', 'Mario', 'L.', 'Cojuangco', 'Recruitment Manager', null, 'symanpro@gmail.com', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'www.Symanpro.com', 'ProfileImage/44.jpg');
INSERT INTO companyinfotbl VALUES ('45', 'MACSLINK ï¿½ PSV Services, Inc.', 'MACSLINK â€“ PSV Services, Inc. is a business entity that provides outsourcing services in finance, accounting, internal audit, logistics, human resources management, general administration, and production; and management consulting services.\r\n\r\nMACSLINK with its core competencies in general management/business consulting and business process outsourcing has been incorporated in the light of the growing complexities and nature of todayâ€™s enterprises and organizational needs and requirements. The emergence of globalization in terms of trade, economic cooperation, business and politics have all the more opened more avenues for multi-disciplinary services as peoples and organizations try to reach out to each other in this supposedly  uniting, yet dynamic and very competitive global atmosphere. With this in mind, MACSLINK emerges to this present day to take on the challenges and continue to update, retool, collaborate, and initiate multi-disciplinary co-operation and initiatives to bring out the best in terms of professional services to its clientele and always responding to the ever-changing business and organizational trends. \r\n\r\nOUR SERVICES\r\n\r\nWe provide outsourcing services in finance, accounting, internal audit, logistics, human resources management, general administration, and production; and management consulting services.', 'Accounting / Audit / Tax Services', null, 'Quezon City', '', '', '09262148279', '', 'Leticia', 'P.', 'Villa', 'Assistant General Manager', null, 'leticiavilla@psv.com', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'http://macs-link.com', 'ProfileImage/45.jpg');
INSERT INTO companyinfotbl VALUES ('46', 'Food Asia Corporation', 'FoodAsia Corporation, a Consumer Food Manufacturer/Retailer, is the owner and operator of multi-awarded Food Brands including Tea Square ï¿½, Bibingkinitan! ï¿½, The Bibingka Cafï¿½, Bar-B-Kingï¿½, and FreshFoodsï¿½. With over Two Hundred (300) stores nationwide including Cebu, Davao, Cagayan de Oro, Iloilo and General Santos City. FoodAsia Corporation envisions to be one of the leading food manufacturers in Southeast Asia. As the Company gears up for regional and international expansion, we are looking for dynamic individuals to join our team of professionals.', 'Food and Beverage', null, 'Quezon City', '', '', '09123456789', '', 'Francis', 'C.', 'Villaluz', 'Supervisor', null, 'f.villaluz@foodasia.com.ph', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'www.foodasia.com.ph', 'ProfileImage/46.jpg');
INSERT INTO companyinfotbl VALUES ('47', 'Gerry\'s Grill', 'Dining at Gerryâ€™s gives everyone a pleasurable experience. Diners are served with only the freshest food ranging from Filipino favorites â€“ Sisig, Inihaw na Pusit, Crispy Pata, Beef Kare-kare, Adobo Shreds to exotic cuisines. Ultimately, every item on the menu goes perfectly well with your favorite beverage.\r\n \r\nSince his college years, its founder, Gerry Apolinario had been dreaming of putting up a place where everyone could hang out and enjoy good food. With his passion for cooking and love for grilled dishes, he yearned for a venue where both may be enjoyed amidst an atmosphere that is fun, fresh and wholesome. And although the original concept of the business was one where people could unwind with a drink or two, Gerryâ€™s inadvertently became a family restaurant too. â€œParents who frequented Gerryâ€™s  during weekdays began bringing their family to us especially on Sundays and then the rest of the week. Apparently, they liked our wide variety of food selections and the clean and fun motifâ€, Mr. Apolinario enthuses. He goes on to say, \"Gerryâ€™s continue to evolve to respond to the ever growing needs of our customers. We also take pride in taking care of our people â€“ one of our most valuable assets. We develop inspired and competent human resources who are constantly seeking ways to further enhance our skills. We believe in our ability to act with a sense of urgency in creating innovations in order to deliver world class products\".\r\n \r\n 	\r\n \r\nâ€œWhen it comes to pricing, we pursue cost leadership and a culture that aims to maximize cost and resources. We believe in offering our customers the best value for their money.â€\r\n\r\n\r\n \r\nGerryâ€™s continues to reach out to its growing customers. From its first restaurant located along Tomas Morato corner Eugenio Lopez Avenue in Quezon City,    Gerryâ€™s  now has over 75 branches nationwide with 2 branches in Singapore, 2 branches in United States and in Doha, Qatar.\r\nIndeed, Gerryâ€™s Restaurant and Bar remains a favorite place to dine in among Filipinos here and abroad.\r\n\r\nSo for great food and loads of fun, you\'d still rather be at Gerry\'s.\r\n', 'Food and Beverage', null, 'Caloocan City', '', '', '09456789123', '', 'Gerry', 'M.', 'Sta.Maria', 'CEO', null, 'gerrysgrill@yahoo.com', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'http://www.gerrysgrill.com/', 'ProfileImage/47.jpg');
INSERT INTO companyinfotbl VALUES ('48', 'RBX', 'RBX specializes in authentic Chinese food take-out. The company\'s main products are varieties of fried rice and rice toppings that are prepared fresh in front of the customers. These are uniquely packed in convenient take-out boxes served hot and ready for people on the go. From food carts, RBX have found it\'s way to stalls, mini-diners and restaurant in major malls, supermarkets and universities. For the past 12 years, RBX Rice in a Box had established over 100 outlets sering quality food and service for its customers in and around Metro Manila.', 'Food and Beverage', null, 'Quezon City', '', '', '09231278906', '', 'Kathleen', 'S', 'Go', 'Assistant Manager', null, 'franchise@rbx.com.ph', 'a9920687fd51c8f6ba165bb9fe963ccd0a47f99a88c76b343fe7792477f24a42e17eca217ec72c4e2adfd4b35effc5d0a6481c09280850da0f4349db83b05c26', '0dedd75782209edca197c3d0c6416f10820a50f246ab9c35e6a121fadede01e7794cd8aff26fbfb3c2cf1af60f0b54deac56f5404e875a0e7c9255d76653abfe', '', 'Active', 'http://www.rbx.com.ph', 'ProfileImage/48.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

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
INSERT INTO comppositiontbl VALUES ('26', '1', null, '2016-01-18', '2017-03-15', 'Accounting Supervisor', 'Top Level Management', 'We are a leading manufacturer an', 'Banking/Financial Services', 'Full Time', '2', '20,000 - 25,000', '2', 'Bachelor Degree', 'english', 'Accountancy/Management , Preferably Supervisor ', null);
INSERT INTO comppositiontbl VALUES ('27', '1', null, '2016-01-19', '2017-03-15', 'AUDIT ASSISTANT', 'Senior Manager', 'We are a leading manufa', 'Actuarial Science/Statistics', 'Full Time', '4', '10,000 - 15,000', '2', 'Bachelor Degree', 'english', 'Sales, Financial/Inventory', null);
INSERT INTO comppositiontbl VALUES ('28', '1', null, '2016-01-19', '2017-03-15', 'System Programmer', 'Fresh / Entry Level', 'We are a leading ma', 'Aviation/Aircraft Maintenance', 'Full Time', '2', '40,000 - 45,000', '3', 'Bachelor Degree', 'english', '	Accounting , General Accounting', null);
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
INSERT INTO comppositiontbl VALUES ('67', '11', null, '2016-02-16', '2016-04-19', 'Personal Assistant', 'Fresh / Entry Level', 'Works closely with senior managerial to provide administrative support', 'Secretarial/Executive and Personal Assistant', 'Full Time', '3', '20,000 - 25,000', '3', 'Bachelor Degree', 'English', 'Oral communication skills, Excellent word processing and IT skills, including knowledge of a range of software packages, Ability to research, digest, analyse and present material clearly and concisely', null);
INSERT INTO comppositiontbl VALUES ('68', '48', null, '2016-02-19', '2016-04-19', 'Assistant Manager', 'Manager', 'Serves customers by training staff; purchasing and displaying products', 'Hotel Management/Tourism Services', 'Contract', '10', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', 'Management Proficiency, Creative Services, Supply Management', null);
INSERT INTO comppositiontbl VALUES ('69', '48', null, '2016-02-19', '2016-07-13', 'Restaurant Cook', 'Top Level Management', 'Prepare and cook food in a fast food restaurant with a limited menu.', 'Food/Beverage/Restaurant Service', 'Part Time', '3', '25,000 - 30,000', '5', 'Bachelor Degree', null, 'Knows how to cook different kinds of food, Well versed in planning menus, Highly experienced in performing food quality inspections, Highly experienced in performing preventative and general maintenance on kitchen equipment', null);
INSERT INTO comppositiontbl VALUES ('70', '48', null, '2016-02-20', '2016-03-20', 'Staff Crew', 'Trainee', 'Provide customers with a quick and accurate service  to their needs', 'Food/Beverage/Restaurant Service', 'Part Time', '15', '10,000 - 15,000', '1', 'Bachelor Degree', null, 'Good customer service skills , Knowledgeable in Food Preparation', null);
INSERT INTO comppositiontbl VALUES ('71', '39', null, '2016-02-19', '2016-04-19', 'Human Resource Officer', 'Manager', 'HR officers develop, advise and implement policies ', 'Human Resources', 'Full Time', '5', '25,000 - 30,000', '5', 'Bachelor Degree', 'English', 'Business awareness, Management skills, IT and Numeracy skills', null);
INSERT INTO comppositiontbl VALUES ('72', '39', null, '2016-02-20', '2016-04-20', 'Administrative Assistant', 'Sernior Executive / Supervisor', 'Performs administrative and office support activities for  supervisors', 'Secretarial/Executive and Personal Assistant', 'Full Time', '1', '30,000 - 40,000', '5', 'Bachelor Degree', 'English', 'Communication Skills, Organizational Ability, Management skills ', null);

-- ----------------------------
-- Table structure for `contacttbl`
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
INSERT INTO contacttbl VALUES ('1', '1', '361-6070', '109 Samson Road corner Caimito Street Caloocan City, Philippines 1400', '+63 (917) 4638460', 'jobplacement@caloocan.sti.edu', ' www.sticaloocan.edu.ph');

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
INSERT INTO coursetbl VALUES ('2', 'Bachelor of Science in Business Management Major in Operations', 'BSBM', 'BSBM');
INSERT INTO coursetbl VALUES ('3', 'Bachelor of Arts in Communication', 'ABCOMM', 'ABCOMM');
INSERT INTO coursetbl VALUES ('4', 'Bachelor of Science in Information Technology Major in Digital Arts', 'BSITDA', 'BSITDA');
INSERT INTO coursetbl VALUES ('5', 'Bachelor of Science in Hotel & Restaurant Management', 'BSHRM', 'BSHRM');
INSERT INTO coursetbl VALUES ('6', 'Bachelor of Science in Computer Science', 'BSCS', 'BSCS');
INSERT INTO coursetbl VALUES ('7', 'Bachelor of Science in Information Technology', 'BSIT', 'BSIT');
INSERT INTO coursetbl VALUES ('8', 'Bachelor of Science in Computer Engineering', 'BSCPE', 'BSCPE');
INSERT INTO coursetbl VALUES ('9', 'Bachelor of Science in Accounting Technology', 'BSAT', 'BSAT');
INSERT INTO coursetbl VALUES ('10', '2-Year Associate in Computer Technology', 'ASCT', 'ASCT');
INSERT INTO coursetbl VALUES ('16', 'Bachelor of Science in Tourism Management', 'BSTM', 'BSTM');

-- ----------------------------
-- Table structure for `filestbl`
-- ----------------------------
DROP TABLE IF EXISTS `filestbl`;
CREATE TABLE `filestbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Filename` varchar(255) NOT NULL,
  `EncryptedFile` varchar(255) NOT NULL,
  `_Time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of filestbl
-- ----------------------------

-- ----------------------------
-- Table structure for `jobfairtbl`
-- ----------------------------
DROP TABLE IF EXISTS `jobfairtbl`;
CREATE TABLE `jobfairtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyAddress` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `ContactPerson` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone1` varchar(255) NOT NULL,
  `Phone2` varchar(255) NOT NULL,
  `Phone3` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `FaxNumber` varchar(255) NOT NULL,
  `Industry` varchar(255) NOT NULL,
  `Representative1` varchar(255) NOT NULL,
  `Representative2` varchar(255) NOT NULL,
  `MarketingMaterials` varchar(500) NOT NULL,
  `Others` varchar(255) NOT NULL,
  `Extras` varchar(255) NOT NULL,
  `OthersExtra` varchar(255) NOT NULL,
  `RoomForExam` varchar(255) NOT NULL,
  `DoorPrizes` varchar(255) NOT NULL,
  `ItemDescription` varchar(255) NOT NULL,
  `Participate` varchar(255) NOT NULL,
  `Requirements` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jobfairtbl
-- ----------------------------
INSERT INTO jobfairtbl VALUES ('11', 'Teteasd', 'asdasd', 'Makati', 'http://asdasdsa.cc', 'Adasds', 'Asdadsa', 'asdada@cc.cc', '2314123', '', '', '', '', 'Admin / Human Resources', 'Fsdfsdf', '', 'Desktop/Laptop/Notebook Computer- Wireless Broadband- LCD Television', '', '', '', '', '', '', 'on', 'Participation Confirmation- Company Profile');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of languagetbl
-- ----------------------------

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
INSERT INTO logrequesttbl VALUES ('2', '1', 'BSCS, BSIT, ASCT, BSCPE', '2016-03-14', '2016-04-29', 'Accepted', '2016-02-17', 'System Programmer', 'Full Time, Part-Time, Contractual', 'Entry Level/Gen Staff, Officer, Supervisory', 'System programming (or systems programming) is the activity of programming computer system software. The primary distinguishing characteristic of systems programming when compared to application programming is that application programming aims to produce ', 'Must be proficient in PHP, CSS, HTML, Bootstrap and Javascript', 'Valenzuela City', '20,000 - 30,000', '1', 'Yes', '1 Month', 'Yes');

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
  `Remarks` varchar(255) DEFAULT NULL,
  `Hours` varchar(10) DEFAULT NULL,
  `Endorsement` varchar(10) DEFAULT NULL,
  `DTR` varchar(10) DEFAULT NULL,
  `Waiver` varchar(10) DEFAULT NULL,
  `TrainingPlan` varchar(10) DEFAULT NULL,
  `MOA` varchar(10) DEFAULT NULL,
  `Journal` varchar(10) DEFAULT NULL,
  `Integration` varchar(10) DEFAULT NULL,
  `PAF` varchar(10) DEFAULT NULL,
  `Certificate` varchar(255) DEFAULT NULL,
  `AdviserID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ojttbl
-- ----------------------------
INSERT INTO ojttbl VALUES ('1', '00820131192', 'FIRMANTE', 'MARY ANN', 'LAPORE', 'BSIT', 'ONLY @ PC GILMORE COMPUTER CENTER', 'Unit 12, 4th floor Fisher Mall, Brgy. Sta. Cruz, Quezon City', 'Mr. Conrad Guetaw', 'OIC', '', null, '', '200', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '13');
INSERT INTO ojttbl VALUES ('2', '00820120173', 'MENDIOLA', 'MARK ANTHONY', 'ACERO', 'BSIT', 'Transcom Worldwide Philippines', '6F Cyberscape Alpha Bldg., Garnet and Sapphire Road, Ortigas, Pasig City', 'Mr. Kenneth Macaraeg', 'IT ADMIN', '', null, 'INC', '222', 'on', 'on', 'on', 'on', 'on', 'off', 'off', 'off', 'off', '13');
INSERT INTO ojttbl VALUES ('3', '00820120330', 'MINGOY', 'RONNEL', 'GALVANTE', 'BSIT', 'Malabon City Hall', 'F. Sevilla Blvd., Malabon City', 'Ms. Herminia B. Cunanan', 'OJT Coordinator', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('4', '00820120442', 'NUÃ‘EZ', 'EDRICK', 'BERIDO', 'BSIT', 'Micro Tech 96 Co.', '11th Avenue, Grace Park, Caloocan City', 'Mr. Roderick F. Dilag', 'Owner', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('5', '00820121466', 'OREO', 'REYNA', '', 'BSIT', 'PLDT/NOGMMFXATOP', 'PLDT Diliman Exchange East Avenue, Quezon City', 'Mr. Domingo Roque', 'Sr. Telecom Manager', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('6', '00820120361', 'PALLE', 'JAN DAVID', 'RENALES', 'BSIT', 'Caledonian International Corporation', 'Spicers Building, 4384 Montojo St., Brgy. Tejeros, 1204, Makati City', 'Mr. Cergie Dominguez', 'Technical Sales Manager', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('7', '00820120582', 'PANGILINAN', 'EDWARD', 'GUINTO', 'BSIT', 'Transcom Worldwide Philippines', '6F Cyberscape Alpha Bldg., Garnet and Sapphire Road, Ortigas, Pasig City', 'Mr. Kenneth Macaraeg', 'IT ADMIN', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('8', '00820120789', 'PASCUAL', 'RENZELLE JOYCE', 'GIRON', 'BSIT', 'Checksteel Fabrication and Development Corp.', 'Villa Pariancillo, Polo, Valenzuela City', 'Mr. Cris U. Dela Cruz', 'General Manager', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('9', '00820120385', 'PATAC', 'NEIL', 'SUAREZ', 'BSIT', 'Foodsphere Inc.', '560 West Service Road, Paso de Blas, Valenzuela City', 'Ms. Maridel C. Tandang', 'Supervisor', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('10', '00820121091', 'ROSELL', 'ADMER JR.', 'PAYAO', 'BSIT', 'ALGAR Infosys', '6B Danr Street, Barangay Vasra, Quezon City', 'Mr.Armando Amor Jr', 'Team Leader', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');
INSERT INTO ojttbl VALUES ('11', '02120090426', 'SALVADOR', 'MARC JUSTIN', 'CABILIN', 'BSIT', 'Precious Island Corporation', '1629 Laguna St., Sta. Cruz, Manila, 1003 Metro Manila', 'Mr. Anson Tan', 'IT Head', '', null, null, null, null, null, null, null, null, null, null, null, null, '13');

-- ----------------------------
-- Table structure for `phototbl`
-- ----------------------------
DROP TABLE IF EXISTS `phototbl`;
CREATE TABLE `phototbl` (
  `id` varchar(255) NOT NULL,
  `StudentID` varchar(255) NOT NULL,
  `Filename` varchar(255) NOT NULL,
  `EncryptedName` varchar(255) NOT NULL,
  `Caption` varchar(255) NOT NULL,
  `_Time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of phototbl
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of progresstbl
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of referencetbl
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of requesttocompanytbl
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of schooltbl
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of seminartbl
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=422 DEFAULT CHARSET=latin1;

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
INSERT INTO specializationtbl VALUES ('421', '00820120001', '', '1', '2', 'q');
INSERT INTO specializationtbl VALUES ('420', '00820120001', '', '1', '2', 'f');
INSERT INTO specializationtbl VALUES ('419', '00820120001', '', '1', '1', '5');
INSERT INTO specializationtbl VALUES ('416', '00820120001', '', '4', '1', 'testing add skill testing');
INSERT INTO specializationtbl VALUES ('417', '00820120001', '', '2', '1', 'y');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studcontactstbl
-- ----------------------------

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studentinfotbl
-- ----------------------------

-- ----------------------------
-- Table structure for `studnotificationtbl`
-- ----------------------------
DROP TABLE IF EXISTS `studnotificationtbl`;
CREATE TABLE `studnotificationtbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `_From` varchar(255) NOT NULL,
  `_Date` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Seen` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of studnotificationtbl
-- ----------------------------

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of workexperiencetbl
-- ----------------------------
