-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 04:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseurehr`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_id` varchar(50) NOT NULL,
  `building_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_id`, `building_name`) VALUES
('MK01', 'Mat Kilau'),
('TJ01', 'Tun Teja 1'),
('TJ02', 'Tun Teja 2');

-- --------------------------------------------------------

--
-- Table structure for table `housemate_application`
--

CREATE TABLE `housemate_application` (
  `housemate_id` int(11) NOT NULL,
  `room_num` varchar(50) DEFAULT NULL,
  `floor_num` varchar(50) DEFAULT NULL,
  `house_num` varchar(60) DEFAULT NULL,
  `building_id` varchar(50) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `stud_id` int(11) DEFAULT NULL,
  `status_id` char(10) DEFAULT NULL,
  `semester_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housemate_application`
--

INSERT INTO `housemate_application` (`housemate_id`, `room_num`, `floor_num`, `house_num`, `building_id`, `staff_id`, `stud_id`, `status_id`, `semester_ID`) VALUES
(1, 'A', NULL, NULL, NULL, NULL, 2019210302, NULL, '20202'),
(2, 'B', NULL, NULL, NULL, NULL, 2019309362, NULL, '20202'),
(5, 'C', NULL, NULL, NULL, NULL, 2019335765, NULL, '20202'),
(6, 'C', NULL, NULL, NULL, NULL, 2019335807, NULL, '20202');

-- --------------------------------------------------------

--
-- Table structure for table `housemate_appstatus`
--

CREATE TABLE `housemate_appstatus` (
  `status_id` char(10) NOT NULL,
  `status_tittle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housemate_appstatus`
--

INSERT INTO `housemate_appstatus` (`status_id`, `status_tittle`) VALUES
('A', 'APPROVED'),
('R', 'REJECTED');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_ID` varchar(50) NOT NULL,
  `semester_num` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_ID`, `semester_num`) VALUES
('20191', '1'),
('20192', '2'),
('20201', '3'),
('20202', '4'),
('20211', '5'),
('20212', '6'),
('20221', '7');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(200) DEFAULT NULL,
  `staff_icNum` varchar(50) DEFAULT NULL,
  `staff_email` varchar(100) DEFAULT NULL,
  `staff_gender` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_icNum`, `staff_email`, `staff_gender`) VALUES
(256180, 'AHMAD BIN ALI', '7506120811823', 'ahmad08@gmail.com', 'male'),
(256181, 'SARAH AMINAH BINTI RAHMAN', '780731148292', 'sarahA@gmail.com', 'female'),
(256182, 'HUSNA BINTI FAHMI', '790601068764', 'husna@gmail.com', 'female'),
(256183, 'DANIAL HAFIZI BIN YUSRI', '740101140127', 'dhafizi@gmail.com', 'male'),
(256184, 'AKMAL FAHMI BIN SAMAD', '751126081625', 'akmalfahmi@gmail.com', 'male'),
(256185, 'SITI NUR HALIZA BINTI ABU BAKAR', '801131031222', 'nurhaliza@gmail.com', 'female'),
(256186, 'TENGKU RAYYAN BIN TENGKU QAYYUM', '800714080011', 'rayyan@gmail.com', 'male'),
(256187, 'SHARIFAH AMINAH BINTI SYED KAMAR', '751226140026', 'sharifahaminah@gmail.com', 'female'),
(256188, 'SYED AZMI BIN SYED AZMAN', '780824092705', 'syedazmi@gmail.com', 'male'),
(256189, 'FARID KAMAL BIN WAHID', '760314142617', 'farid14@gmail.com', 'male'),
(256190, 'SITI NUR MAISARAH BINTI ISMAIL', '790526033518', 'sitimai@gmail.com', 'female'),
(256191, 'QISTINA MAISARAH BINTI GHANI', '800202020202', 'qisMaisarah@gmail.com', 'female'),
(256192, 'WAN NOOR RASYIQAH BINTI WAN AZMAN', '800412142774', 'Rasyiqah@gmail.com', 'female'),
(256193, 'ALYA SYAMIRA BINTI ZAINORDIN', '831126140724', 'alyasyamira26@gmail.com', 'female'),
(256195, 'AMIRUL FIRDAUS BIN AIDIL ADHA', '810603147291', 'Afirdaus@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_name` varchar(200) DEFAULT NULL,
  `stud_icNumber` varchar(15) DEFAULT NULL,
  `stud_email` varchar(50) DEFAULT NULL,
  `stud_phoneNum` varchar(20) DEFAULT NULL,
  `stud_course` varchar(50) DEFAULT NULL,
  `stud_programmeCode` varchar(45) DEFAULT NULL,
  `semester_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_name`, `stud_icNumber`, `stud_email`, `stud_phoneNum`, `stud_course`, `stud_programmeCode`, `semester_ID`) VALUES
(2019210302, 'SYED FARIS BIN SYED AHMAD', '011205015405', 'syfaris@gmail.com', '0197368467', 'BANKING STUDIES', 'BA119', '0'),
(2019309362, 'AINATUL NADIA BINTI AHMAD KAMAL', '010603061102', 'ainatul99@gmail.com', '01073586054', 'STATISTICS', 'CS111', '0'),
(2019335765, 'MUHAMMAD HAFIZ BIN NAR', '010711011103', 'hafiz2389@gmail.com', '0138854321', 'BANKING STUDIES', 'BA119', '0'),
(2019335807, 'AHMAD ADAM BIN ABU', '010617109667', 'ahmadadam11@gmail.com', '0123327790', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2019405223, 'NASHA IRDINA BINTI AMRAN', '011123021112', 'nashairdina@gmail.com', '01166743321', 'STATISTICS', 'CS111', '0'),
(2019406008, 'ALIA NAZIHAH BINTI ALI', '010409055702', 'alianazihah@gmail.com', '0194387665', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2019557809, 'MUHAMMAD AMRAN BIN SANI', '010819043302', 'amransani@gmail.com', '0197890676', 'BANKING STUDIES', 'BA119', '0'),
(2019567809, 'MUHAMMAD AMRAN BIN SANI', '010309116712', 'amransani@gmail.com', '0197890676', 'BANKING STUDIES', 'BA119', '0'),
(2019570830, 'FAKHRUL AZIZ BIN ALI', '010101083321', 'fakhrulaziz@gmail.com', '01265452134', 'STATISTICS', 'CS111', '0'),
(2019602304, 'MUHAMMAD AIMAN BIN MUSA', '010228051123', 'aimanmusa@gmail.com', '0163458875', 'BANKING STUDIES', 'BA119', '0'),
(2019850830, 'AZHAR RAFAI BIN ZABIR', '010524057890', 'adham95@gmail.com', '0197395568', 'STATISTICS', 'CS111', '0'),
(2020398076, 'NAJIAN NASUHA BINTI MAT ZAID', '020508111121', 'najee@gmail.com', '01117687406', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020406729, 'NUR AMNI INARA BINTI KHAIRUL', '021215087625', 'nramniinara@gmail.com', '01340902164', 'BUSINESS STUDIES', 'BA111', '0'),
(2020406801, 'MOHD HAIKAL BIN RAMLI', '021101099022', 'haikal1123@gmail.com', '01174684678', 'BANKING STUDIES', 'BA119', '0'),
(2020407729, 'NUR SAFFIYA BINTI KHAIRUL', '020310055532', 'nursaffiya@gmail.com', '01244902164', 'BUSINESS STUDIES', 'BA111', '0'),
(2020408906, 'NUR IZARA BINTI ABDULLAH', '020624099933', 'izaraabdullah@gmail.com', '0117762481', 'BANKING STUDES', 'BA119', '0'),
(2020450406, 'ANIQ NUR QRISYA BINTI MUHAMMAD AB HAMID', '021128110785', 'aniqqrisya@gmail.com', '0119874510', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020451021, 'MOHD ZAMANI BIN ABDUL KARIM', '020322101124', 'zamanii@gmail.com', '0118927558', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020456709, 'HUMAIRA AZWA BINTI AZMAN', '021130058807', 'azwahumaira@gmail.com', '0198992134', 'BUSINESS STUDIES', 'BA111', '0'),
(2020505608, 'PUTERI KHAISARA BINTI FAZLI', '021205015405', 'khaisaraput@gmail.com', '0199328890', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2020604008, 'AHMAD ZAKI BIN NAMRAD', '021231104442', 'ahmadzaki@gmail.com', '0136679088', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2020665909, 'SYAHIDA BINTI SYAHID', '020411015520', 'syahida07@gmail.com', '0114567810', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020670129, 'MOHD AMIN BIN MOHD ADAM', '020315029992', '4min4dam@gmail.com', '0131861179', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020674557, 'MUSYIRAH NAFEESA BINTI MOHD AZMAN', '020812012221', 'musyi@gmail.com', '01131227868', 'BANKING STUDIES', 'BA119', '0'),
(2020676591, 'NURUL LIYANA BINTI RAHMAN', '020118031122', 'liyanarhmn@gmail.com', '0188796589', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020690876, 'SYAUQINA IFFATUL BINTI ABDUL HAMID', NULL, 'syauqina88@gmail.com', '01977654321', 'STATISTICS', 'CS111', '0'),
(2020698709, 'NUR AILEEN BINTI OSMAN', '020807084404', 'aileen22@gmail.com', '0104490216', 'BUSINESS STUDIES', 'BA111', '0'),
(2020703902, 'SITI BAIDURI BINTI AHMAD', NULL, 'sitibaiduri22@gmail.com', '0149908876', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2020708362, 'HARITHIQBAL BIN AMRI', '020510073345', 'harithiqbal08@gmail.com', '01293586054', 'STATISTICS', 'CS111', '0'),
(2020720876, 'HAIKAL BIN HAMZAH', '021113021123', 'haikalhamzah95@gmail.com', '0117295568', 'STATISTICS', 'CS111', '0'),
(2020774501, 'ANIS SYAHIRAH BINTI ISKANDAR', '020904042222', 'anissyahirah@gmail.com', '0111792335', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2020788362, 'SITI MAIMUNAH BINTI AHMAD KAMAL', NULL, 'sitimaimunah28@gmail.com', '01173586054', 'STATISTICS', 'CS111', '0'),
(2020805298, 'MUHAMMAD AZMAN BIN RAZAK', '020903085521', 'azmanrazak@gmail.com', '0195568890', 'COMPUTER SCIENCE', 'CS110', '0'),
(2020805667, 'AISHATUL NABIHAH BINTI ROSDI', '021115100985', 'aishatulbihah@gmail.com', '0135678765', 'BUSINESS STUDIES', 'BA111', '0'),
(2020850830, 'NUR AISYA DAMIA BINTI ABU', NULL, 'aisyadamia@gmail.com', '0113362451', 'STATISTICS', 'CS111', '0'),
(2020874548, 'BALQIS BATRISYIA BINTI MARWAN', NULL, 'aqish@gmail.com', '0131794335', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2020876503, 'AINATUL FITRIAH BINTI KAMAL', NULL, 'ainafitriah@gmail.com', '017888665', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2020901415, 'TENGKU ANIS BINTI TENGKU MUHAIMIN', NULL, 't.anis@gmail.com', '01188912865', 'STATISTICS', 'CS111', '0'),
(2021110906, 'KHAIRUNNISA BINTI AMIN', NULL, 'khairunnisa@gmail.com', '0174564431', 'STATISTICS', 'CS111', '0'),
(2021197908, 'MOHD JAHRAN BIN SALAM', NULL, 'jahran7@gmail.com', '01131005415', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2021203209, 'MOHD FAUZAN BIN ASMADI', '031128059546', 'fauzanasmadi@gmail.com', '0119528891', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2021205934, 'NUR ATIQAH BINTI ASWADI', NULL, 'atiqahaswadi@gmail.com', '0198863349', 'COMPUTER SCIENCE', 'CS110', '0'),
(2021308908, 'MALIA BINTI ISYAK', NULL, 'maliaisyak@gmail.com', '0127044266', 'BUSINESS STUDIES', 'BA111', '0'),
(2021310903, 'WAN BALQIS BINTI WAN ROSTAM', '039898111132', 'wanbalqis00@gmail.com', '0105543218', 'COMPUTER SCIENCE', 'CS110', '0'),
(2021388231, 'ADRIANA BINTI FARHAN', NULL, 'adriana87@gmail.com', '0113302893', 'COMPUTER SCIENCE', 'CS110', '0'),
(2021398077, 'FATIN AFIFAH BINTI ZIKRI', '030707087676', 'fatinafifah77@gmail.com', '0113362451', 'STATISTICS', 'CS111', '0'),
(2021405223, 'NUR YAMNA AMANI BINTI AHMAD', '030211088091', 'yamna123@gmail.com', '01866743221', 'STATISTICS', 'CS111', '0'),
(2021456789, 'SITI HAZARINA BINTI ASMADI', NULL, 'sitihaza@gmail.com', '013888333', 'BUSINESS STUDIES', 'BA111', '0'),
(2021470980, 'MUHAMMAD HAIKAL BIN MUHAIMIN', '020516066702', 'muhaikal@gmail.com', '0136677659', 'COMPUTER SCIENCE', 'CS110', '0'),
(2021480556, 'ASYRAF BIN ALI', '030615145342', 'asyraf@gmail.com', '0127890056', 'BANKINGSTUDIES', 'BA119', '0'),
(2021500678, 'HARITH BIN HERMAN', '030823101123', 'hherman22@gmail.com', '01166789022', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2021506730, 'SITI KHADIJAH BINTI ABDUL SAMAD', NULL, 'sitikhad20@gmail.com', '0183456568', 'STATISTICS', 'CS111', '0'),
(2021510678, 'ABDUL RAHMAN BIN HAFIZ', '031105033511', 'abrahman09@gmail.com', '0169328890', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2021527889, 'MUHAMMAD AIRUL BIN AFIQ', NULL, 'airulafiq@gmail.com', '0137790676', 'BANKING STUDIES', 'BA119', '0'),
(2021604008, 'AHMAD ZAKI BIN NAMRAD', NULL, 'ahmadzaki@gmail.com', '0136679088', 'PUBLIC ADMINISTRATION', 'AM110', '0'),
(2021607147, 'HAZWANI BINTI ABU BAKAR', NULL, 'wanee@gmail.com', '0191124117', 'BUSINESS STUDIES', 'BA111', '0'),
(2021621920, 'AMIRA BATRISYA BINTI WIDRID', NULL, 'amirabat21@gmail.com', '0192135567', 'STATISTICS', 'CS111', '0'),
(2021885009, 'NUR ZALINA BINTI MAT ZAID', '031223066789', 'zalinazaid@gmail.com', '0165568890', 'COMPUTER SCIENCE', 'CS110', '0'),
(2021888231, 'NUR SYIFA EHA BINTI MAHMUD', '030322105674', 'syifaeha@gmail.com', '0113302890', 'COMPUTER SCIENCE', 'CS110', '0'),
(2021890976, 'AZRI BIN MOHZANI', NULL, 'azrimohzani@gmail.com', '0174458876', 'PUBLIC ADMINISTRATION', 'AM110', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_id`);

--
-- Indexes for table `housemate_application`
--
ALTER TABLE `housemate_application`
  ADD PRIMARY KEY (`housemate_id`),
  ADD KEY `building_id` (`building_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `stud_id` (`stud_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `semester_ID` (`semester_ID`);

--
-- Indexes for table `housemate_appstatus`
--
ALTER TABLE `housemate_appstatus`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `housemate_application`
--
ALTER TABLE `housemate_application`
  MODIFY `housemate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `housemate_application`
--
ALTER TABLE `housemate_application`
  ADD CONSTRAINT `housemate_application_ibfk_1` FOREIGN KEY (`building_id`) REFERENCES `building` (`building_id`),
  ADD CONSTRAINT `housemate_application_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `housemate_application_ibfk_3` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`),
  ADD CONSTRAINT `housemate_application_ibfk_4` FOREIGN KEY (`status_id`) REFERENCES `housemate_appstatus` (`status_id`),
  ADD CONSTRAINT `housemate_application_ibfk_5` FOREIGN KEY (`semester_ID`) REFERENCES `semester` (`semester_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
