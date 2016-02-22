/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : u987316885_e2edb

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2016-02-22 06:20:25
*/

SET FOREIGN_KEY_CHECKS=0;
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
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

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
INSERT INTO comppositiontbl VALUES ('68', '48', null, '2016-02-19', '2016-04-19', 'Assistant Manager', 'Manager', 'Serves customers by training staff; purchasing and displaying products', 'Hotel Management/Tourism Services', 'Contract', '10', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', 'Management Proficiency, Creative Services, Supply Management', null);
INSERT INTO comppositiontbl VALUES ('69', '48', null, '2016-02-19', '2016-07-13', 'Restaurant Cook', 'Top Level Management', 'Prepare and cook food in a fast food restaurant with a limited menu.', 'Food/Beverage/Restaurant Service', 'Part Time', '3', '25,000 - 30,000', '5', 'Bachelor Degree', null, 'Knows how to cook different kinds of food, Well versed in planning menus, Highly experienced in performing food quality inspections, Highly experienced in performing preventative and general maintenance on kitchen equipment', null);
INSERT INTO comppositiontbl VALUES ('70', '48', null, '2016-02-20', '2016-03-20', 'Staff Crew', 'Trainee', 'Provide customers with a quick and accurate service  to their needs', 'Food/Beverage/Restaurant Service', 'Part Time', '15', '10,000 - 15,000', '1', 'Bachelor Degree', null, 'Good customer service skills , Knowledgeable in Food Preparation', null);
INSERT INTO comppositiontbl VALUES ('71', '39', null, '2016-02-19', '2016-04-19', 'Human Resource Officer', 'Manager', 'HR officers develop, advise and implement policies ', 'Human Resources', 'Full Time', '5', '25,000 - 30,000', '5', 'Bachelor Degree', 'English', 'Business awareness, Management skills, IT and Numeracy skills', null);
INSERT INTO comppositiontbl VALUES ('72', '39', null, '2016-02-20', '2016-04-20', 'Administrative Assistant', 'Sernior Executive / Supervisor', 'Performs administrative and office support activities for  supervisors', 'Secretarial/Executive and Personal Assistant', 'Full Time', '1', '30,000 - 40,000', '5', 'Bachelor Degree', 'English', 'Communication Skills, Organizational Ability, Management skills ', null);
INSERT INTO comppositiontbl VALUES ('73', '12', null, '2016-02-20', '2016-03-20', 'Sales Account Associate', 'Sernior Executive / Supervisor', 'Generating Sales from Existing and potential SME clients', 'Sales - Financial Services (Insurance, Unit Trust, \r\n\r\netc)', 'Full Time', '5', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', 'Communication Skills, Math and Technology Skills', null);
INSERT INTO comppositiontbl VALUES ('74', '12', null, '2016-02-21', '2016-04-21', 'Supervisor', 'Senior Manager', 'Manufactures products by supervising staff.', 'Manufacturing/Production Operation', 'Contract', '3', '25,000 - 30,000', '3', 'Bachelor Degree', null, 'Supervision, Managing Processes,  Tracking Budget Expenses, Strategic Planning', null);
INSERT INTO comppositiontbl VALUES ('75', '12', null, '2016-02-21', '2016-05-21', 'Advertising Administrator', 'Sernior Executive / Supervisor', 'Responsible for marketing and publicizing goods', '\r\nAdvertising/Media Planning', 'Part Time', '5', '15,000 - 20,000', '5', 'Bachelor Degree', 'English', 'Creative personality, Effective Management, Supervising Skills, Communication Skills', null);
INSERT INTO comppositiontbl VALUES ('76', '14', null, '2016-02-22', '2016-05-22', 'Data Encoder', 'Top Level Management', 'Maintains database by entering new and updated customer', 'IT/Computer - Network/System/Database Admin', 'Part Time', '4', '30,000 - 40,000', '1', 'Bachelor Degree', 'English', 'Data Entry Skills, Analyzing Skills, Attention to Detail', null);
INSERT INTO comppositiontbl VALUES ('77', '14', null, '2016-02-22', '2016-05-22', 'Technical Support Representative', 'Sernior Executive / Supervisor', 'Provide technical and network problem resolution to end-users', 'Technical and Helpdesk Support', 'Part Time', '3', '20,000 - 25,000', '3', 'Bachelor Degree', 'English, Japanese', 'Knowledge of customer service principles and practices, Knowledge of relevant software computer applications and equipment, Effective listening skills', null);
INSERT INTO comppositiontbl VALUES ('78', '14', null, '2016-02-23', '2016-05-23', 'Operations Consulting Manager', 'Top Level Management', ' Providing advice about operational issues for their clients', 'IT/Computer - Project Management', 'Contract', '3', '45,000 - 50,000', '8', 'Bachelor Degree', 'English', 'Organizational skills, Knowledge of platforms, software and programs', null);
INSERT INTO comppositiontbl VALUES ('79', '15', null, '2016-02-22', '2017-02-21', 'Computer Engineer', 'Top Level Management', 'Responsible for developing, testing and evaluating the software', 'Engineering - Electronics/Communication', 'Full Time', '3', '45,000 - 50,000', '5', 'Bachelor Degree', 'English', 'Knowledge of circuit boards, processors, chips, electronic equipment, and computer hardware and software, including applications and programming.', null);
INSERT INTO comppositiontbl VALUES ('80', '15', null, '2016-02-22', '2017-02-22', 'Computer Programmer', 'Top Level Management', 'Update and expand existing programs 	', 'IT/Computer - Software Development', 'Part Time', '5', '45,000 - 50,000', '5', 'Bachelor Degree', 'English', 'Analytical skills, Troubleshooting skills', null);
INSERT INTO comppositiontbl VALUES ('81', '15', null, '2016-02-22', '2017-02-22', 'Project Manager', 'Senior Manager', 'Planning and evaluating department activities', 'Project Management', 'Contract', '3', '25,000 - 30,000', '1', 'Bachelor Degree', 'English', 'Performance Management, Project Management', null);
INSERT INTO comppositiontbl VALUES ('82', '13', null, '2016-02-22', '2016-03-22', 'Executive Assistant', 'Manager', 'Enhances executive\'s effectiveness by providing information', 'Secretarial/Executive and Personal Assistant', 'Contract', '5', '25,000 - 30,000', '3', 'Bachelor Degree', 'English', 'Writing Skills, Microsoft Office Skills, Reporting Skills', null);
INSERT INTO comppositiontbl VALUES ('83', '13', null, '2016-02-22', '2016-03-22', 'Administrative Support', 'Manager', 'Assist in creating a job application that will attract job candidates', 'Clerical/Administrative Support', 'Full Time', '3', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', 'Administrative Writing Skills, Verbal Communication, Presenting Technical Information', null);
INSERT INTO comppositiontbl VALUES ('84', '16', null, '2016-02-22', '2016-05-22', 'Call Center Agents', 'Junior Executive', 'Responsible for communicating clients', 'BPO/Call Center', 'Contract', '10', '15,000 - 20,000', '1', 'Bachelor Degree', 'English', 'Communication Skills', null);
INSERT INTO comppositiontbl VALUES ('85', '16', null, '2016-02-22', '2016-03-22', 'Technical Support', 'Sernior Executive / Supervisor', 'Provide technical and network problem resolution to customers.', 'Technical and Helpdesk Support', 'Temporary', '3', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', 'Knowledge of relevant software computer applications and equipment, Knowledge of customer service principles and practices', null);
INSERT INTO comppositiontbl VALUES ('86', '17', null, '2016-02-22', '2016-04-30', 'Customer Service Representative', 'Junior Executive', 'Customer and Technical support', 'Technical and Helpdesk Support', 'Contract', '10', '15,000 - 20,000', '1', 'Bachelor Degree', 'English', 'Communication Skills', null);
INSERT INTO comppositiontbl VALUES ('87', '17', null, '2016-02-22', '2016-04-30', 'Operations Director', 'Top Level Management', 'Develop and implement strategic plans ', 'Marketing/Business Development', 'Full Time', '3', '40,000 - 45,000', '5', 'Bachelor Degree, Masteral Degree', 'English', 'Leadership skills, Basic computer knowledge , Communication Skills', null);
INSERT INTO comppositiontbl VALUES ('88', '18', null, '2016-02-22', '2016-05-06', 'Data Encoder', 'Sernior Executive / Supervisor', 'Maintains database by entering new and updated customer', 'IT/Computer - Network/System/Database Admin', 'Temporary', '5', '30,000 - 40,000', '3', 'Bachelor Degree', 'English', 'Data Entry Skills,  Analyzing Skills', null);
INSERT INTO comppositiontbl VALUES ('89', '18', null, '2016-02-22', '2016-05-06', 'Team Leader', 'Senior Manager', 'Supervising, guiding and motivating', 'Project Management', 'Temporary', '5', '25,000 - 30,000', '2', 'Bachelor Degree', 'English', 'IT skills, Time management, Accurate record keeping', null);
INSERT INTO comppositiontbl VALUES ('90', '18', null, '2016-02-22', '2016-05-06', 'System Analyst', 'Top Level Management', 'Analyzing clients existing systems and business models', 'IT/Computer - Network/System/Database Admin', 'Full Time', '5', '40,000 - 45,000', '5', 'Bachelor Degree, Masteral Degree', 'English', 'Analyzing Skills, Broad knowledge of hardware, software and programming', null);
INSERT INTO comppositiontbl VALUES ('91', '19', null, '2016-02-23', '2016-03-23', 'Human Resource Officer', 'Manager', 'HR officers develop, advise and implement policies', 'Human Resources', 'Part Time', '3', '20,000 - 25,000', '3', 'Bachelor Degree', 'English', 'Management skills, IT and Numeracy skills', null);
INSERT INTO comppositiontbl VALUES ('92', '19', null, '2016-06-23', '2016-03-23', 'Team Leader', 'Senior Manager', 'Supervising, guiding and motivating', 'BPO/Call Center', 'Contract', '10', '20,000 - 25,000', '3', 'Bachelor Degree', 'English', 'IT skills, Communication Skills, Leadership Skills, Time management', null);
INSERT INTO comppositiontbl VALUES ('93', '19', null, '2016-02-23', '2016-03-22', 'Call Center Agents', 'Junior Executive', 'Communciating clients', 'BPO/Call Center', 'Contract', '20', '15,000 - 20,000', '3', 'Bachelor Degree', 'English, Japanese', 'Commnication Skills', null);
INSERT INTO comppositiontbl VALUES ('94', '20', null, '2016-02-23', '2017-02-23', 'Supervisor', 'Top Level Management', 'Manufactures products by supervising staff', 'Manufacturing/Production Operation', 'Full Time', '3', '30,000 - 40,000', '10', 'Bachelor Degree', 'English', 'Managing Processes, Financial Planning and Strategy, Automotive Manufacturing', null);
INSERT INTO comppositiontbl VALUES ('95', '20', null, '2016-02-23', '2017-02-23', 'Manager', 'Manager', 'Accomplishes department objectives by managing staff', 'Marketing / Brand Management', 'Part Time', '3', '25,000 - 30,000', '3', 'Bachelor Degree', 'English', 'Quality Management, Developing Budgets', null);
INSERT INTO comppositiontbl VALUES ('96', '20', null, '2016-02-23', '2017-02-23', 'Accountant', 'Senior Manager', 'Provides financial information to management ', 'Finance - General/Cost Accounting', 'Contract', '3', '30,000 - 40,000', '4', 'Bachelor Degree', 'English', 'Accounting SKills, Reporting Skills, Developing Budgets', null);
INSERT INTO comppositiontbl VALUES ('97', '21', null, '2016-02-23', '2016-10-23', 'Staff Crew', 'Fresh / Entry Level', 'Provide customers with a quick and accurate service  to their needs', 'Food/Beverage/Restaurant Service', 'Part Time', '10', '10,000 - 15,000', '3', 'Bachelor Degree', 'English', 'Good customer service skills, Knowledgeable in Food Preparation', null);
INSERT INTO comppositiontbl VALUES ('98', '21', null, '2016-02-23', '2016-10-23', 'Production Supervisor ', 'Top Level Management', 'Manufactures products by supervising staff; organizing and monitoring.', 'Manufacturing/Production Operation', 'Full Time', '3', '25,000 - 30,000', '5', 'Bachelor Degree', 'English', 'Financial Planning and Strategy, Controls and Instrumentation, Production Planning', null);
INSERT INTO comppositiontbl VALUES ('99', '47', null, '2016-02-23', '2016-12-23', 'Receptionist', 'Junior Executive', 'Serves visitors by greeting, welcoming', 'Hotel Management/Tourism Services', 'Full Time', '3', '15,000 - 20,000', '1', 'Bachelor Degree', 'English', 'Verbal Communication, Customer Focus, Telephone Skills', null);
INSERT INTO comppositiontbl VALUES ('100', '47', null, '2016-02-23', '2016-12-23', 'Business Analyst', 'Manager', 'Solves organizational information problems', 'Marketing/Business Development', 'Full Time', '1', '25,000 - 30,000', '5', 'Bachelor Degree', 'English', 'Promoting Process Improvement', null);
INSERT INTO comppositiontbl VALUES ('101', '47', null, '2016-02-23', '2016-09-13', 'Restaurant Manager', 'Manager', 'Accomplishes department objectives by managing staff', 'Hotel Management/Tourism Services', 'Full Time', '3', '15,000 - 20,000', '3', 'Bachelor Degree', 'English', 'Supervision, Results Driven, Developing Standards', null);
INSERT INTO comppositiontbl VALUES ('102', '48', null, '2016-02-23', '2016-10-10', 'Manager', 'Manager', 'Accomplishes department objectives by managing staff', 'Hotel Management/Tourism Services', 'Full Time', '5', '20,000 - 25,000', '3', 'Bachelor Degree', 'English', 'Supervision, Communication Skills, Leadership Skills', null);
