-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 04:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp3`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_inventory`
--

CREATE TABLE `books_inventory` (
  `id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_code` varchar(100) NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `remark` longtext NOT NULL,
  `create_date` varchar(55) NOT NULL,
  `modify_date` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `callings`
--

CREATE TABLE `callings` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `call_date` varchar(50) NOT NULL,
  `next_call_date` varchar(50) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `create_date` varchar(50) NOT NULL,
  `modify_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `callings`
--

INSERT INTO `callings` (`id`, `student_name`, `mobile`, `call_date`, `next_call_date`, `remark`, `create_date`, `modify_date`) VALUES
(1, 'JITENDER', 2147483647, '2018-01-05', '2018-01-06', '', '2018-01-05', '2018-01-05'),
(3, 'GANGA RAM', 9017319907, '2019-02-11', '2019-02-15', 'MATA JI TABIYA', '2019-02-11', '2019-02-11'),
(4, 'MANISH', 9813782172, '2019-02-21', '2019-02-21', '5000 MADAM DE DENGI 6 CERTIFICATE BANA DENA. DOCUMENT COMLETE KIYE BINA NO ISSUE CERTIFICATE.', '2019-02-21', '2019-02-21'),
(5, 'ROHIT', 9306992426, '2019-02-19', '2019-02-21', '30K PAYMENT, HANDICAP 100 BACHE, COLLEGE SE 20, 2 LED BULB KAL AA JAYENGE', '2019-02-21', '2019-02-21'),
(6, 'SUNIL', 9991353561, '2019-02-14', '2019-02-18', 'SUNDAY TAK AAPKI PAYMENT NAHI AAYI', '2019-02-21', '2019-02-21'),
(7, 'SUNIL', 9654373679, '2019-02-19', '2019-02-21', 'TILL NOW I HAVE MADE MON: 4, WED: 3 THU: 4 CALL KARI HAI', '2019-02-21', '2019-02-21'),
(8, 'MANISH', 9813782172, '2019-02-21', '2019-02-22', '5000 PAYMENT KARA DO. KAL LE AUNGA. MOHNA FRACHNICSE. 3. ERP S/W 4. DOCUMENT', '2019-02-21', '2019-02-21'),
(9, 'MANISH', 9813782172, '2019-02-22', '2019-02-23', 'BANK ME DEPOIST KARNE K LIYE 5000 FRANHISE FEE KA WHATS KIYA CALL B KI PAR KOI FARK NAHI', '2019-02-22', '2019-02-22'),
(10, 'ROHIT', 9306992426, '2019-02-22', '', 'CALL U 5 TIME SINCE MOR. NUMBER BUSY AA RAHA HAI NA CALL BACK NA REP, EVEN ON WHATS APP', '2019-02-22', '2019-02-22'),
(11, 'ROOP KISHORE', 8818061338, '2019-02-22', '', 'CALL YOU 5 TIMEE NUMBER KAAT DIYA', '2019-02-22', '2019-02-22'),
(12, 'CHAMAN', 8571933031, '2019-06-04', '2019-06-10', 'MEETING CALL WILL COM', '2019-06-04', '2019-06-04'),
(13, 'VISHNU', 9034639912, '2019-06-14', '2019-06-16', 'DFGDFGD', '2019-06-14', '2019-06-14'),
(14, 'ROHTI', 9306665554, '2019-12-20', '2019-12-23', 'SDFASDFAS', '2019-12-20', '2019-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `caste`
--

CREATE TABLE `caste` (
  `id` int(11) NOT NULL,
  `caste_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caste`
--

INSERT INTO `caste` (`id`, `caste_name`) VALUES
(1, 'General'),
(2, 'OBC'),
(3, 'SC/ST'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `SNO` int(11) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `certificate_number` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `date_issue` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `course_duration` varchar(200) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `course_fee`, `course_duration`, `create_date`, `modify_date`) VALUES
(2, 'C014', 'CERTIFICATE IN DIGITAL MARKETING', 15000, '3', '2017-08-01 02:37:38', '2017-09-05'),
(3, 'C013', 'CERTIFICATE IN TYPING TEST', 2000, '3', '2017-08-01 02:37:51', '2017-09-05'),
(4, 'C009', 'CERTIFICATE IN .NET', 6000, '3', '2017-08-01 02:38:06', '2017-09-05'),
(5, 'C008', 'CERTIFICATE IN C#', 2000, '2', '2017-08-01 02:39:17', '2017-09-05'),
(6, 'C016', 'CERTIFICATE IN PHP', 8500, '3', '2017-08-01 02:43:27', '2017-09-05'),
(7, 'C007', 'CERTIFICATE IN JAVA', 3000, '3', '2017-08-01 02:50:50', '2017-09-05'),
(8, 'C002', 'CERTIFICATE IN WEB DESIGNING', 3000, '3', '2017-08-03 06:41:41', '2017-09-05'),
(9, 'C006', 'CERTIFICATE IN C++', 2000, '2', '2017-08-04 01:14:35', '2017-09-05'),
(10, 'C011', 'CERTIFICATE IN TALLY 9 ERP', 4000, '3', '2017-08-04 01:15:36', '2017-09-05'),
(11, 'C010', 'CERTIFICATE IN ADVANCE JAVA', 8500, '3', '2017-08-23', '2017-09-05'),
(12, 'C001', 'CERTIFICATE IN COMPUTER APPLICATION', 3000, '3', '2017-08-23', '2017-08-23'),
(13, 'C004', 'CERTIFICATE IN ADVANCE EXCEL', 4000, '3', '2017-08-26', '2017-09-05'),
(14, 'C005', 'CERTIFICATE IN C', 2000, '2', '2017-09-02', '2018-03-23'),
(15, 'A002', 'ADVANCE DIPLOMA IN FINANCIAL ACCOUNTING', 12000, '12', '2017-09-02', '2017-09-02'),
(16, 'C012', 'CERTIFICATE IN AUTOCAD', 3000, '2', '2017-09-02', '2017-09-02'),
(17, 'C004 A', 'Excel (Basic)', 1500, '1', '2017-09-02', '2017-09-02'),
(18, 'D001', 'DIPLOMA IN COMPUTER APPLICATION', 6600, '6', '2017-09-05', '2017-09-05'),
(19, 'D002', 'DIPLOMA IN FINANCIAL ACCOUNT(TALLY)', 6600, '6', '2017-09-05', '2017-09-05'),
(20, 'D003', 'DIPLOMA IN WEB DEVELOPMENT', 6600, '6', '2017-09-05', '2017-09-05'),
(21, 'D004', 'DIPLOMA IN DTP', 6600, '6', '2017-09-05', '2017-09-05'),
(22, 'D005', 'DIPLOMA IN COMPUTER PROGRAMMING', 6600, '6', '2017-09-05', '2017-09-05'),
(23, 'D006', 'DIPLOMA IN INTERNET APPLICATION', 6600, '6', '2017-09-05', '2017-09-05'),
(24, 'D007', 'DIPLOMA IN DATA ENTRY OPERATOR', 6600, '6', '2017-09-05', '2017-09-05'),
(25, 'A001', 'ADVANCE DIPLOMA IN COMPUTER APPLICATION', 13000, '12', '2017-09-05', '2017-09-05'),
(26, 'A003', 'ADVANCE DIPLOMA IN WEB DEVELOPMENT', 13000, '12', '2017-09-05', '2017-09-05'),
(27, 'A004', 'ADVANCE DIPLOMA IN DTP', 13000, '12', '2017-09-05', '2017-09-05'),
(28, 'A005', 'ADVANCE DIPLOMA IN COMPUTER PROGRAMMING', 13000, '12', '2017-09-05', '2017-09-05'),
(29, 'A006', 'ADVANCE DIPLOMA IN DATA ENTRY OPERATOR', 13000, '12', '2017-09-05', '2017-09-05'),
(30, 'A007', 'ADVANCE DIPLOMA IN MOBILE APPLICATION', 13000, '12', '2017-09-05', '2017-09-05'),
(31, 'A008', 'ADVANCE DIPLOMA IN MOBILE REPAIRING', 13000, '12', '2017-09-05', '2017-09-05'),
(32, 'C017', 'CERTIFICATE IN HTML', 1500, '1', '2017-09-05', '2017-09-05'),
(33, 'C018', 'CERTIFICATE IN CSS', 1500, '1', '2017-09-05', '2017-09-05'),
(34, 'C019', 'CERTIFICATE IN JAVASCRIPT', 2500, '2', '2017-09-05', '2017-09-05'),
(35, 'C020', 'CERTIFICATE IN JQUERY', 2000, '1', '2017-09-05', '2017-09-05'),
(36, 'C021', 'CERTIFICATE IN GOOGLE ADWORDS', 5500, '1', '2017-09-05', '2017-09-05'),
(37, 'C022', 'CERTIFICATE IN GOOGLE ANALYTICS', 2500, '1', '2017-09-05', '2017-09-05'),
(38, 'C023 A', 'CERTIFICATE IN CORELDRAW (ADVANCE)', 15000, '3', '2017-09-05', '2017-09-05'),
(39, 'C024', 'CERTIFICATE IN PHOTOSHOP (BASIC)', 3500, '1', '2017-09-05', '2017-09-05'),
(40, 'C024 A', 'CERTIFICATE IN PHOTOSHOP (ADVANCE)', 15000, '3', '2017-09-05', '2017-09-05'),
(41, 'C025', 'CERTIFICATE IN INDESIGN (BASIC)', 3500, '1', '2017-09-05', '2017-09-05'),
(42, 'C025 A', 'CERTIFICATE IN INDESIGN (ADVANCE)', 15000, '3', '2017-09-05', '2017-09-05'),
(43, 'C026', 'CERTIFICATE IN ANDROID', 8500, '3', '2017-09-05', '2017-09-05'),
(44, 'C027', 'CERTIFICATE IN IOS', 8500, '2', '2017-09-05', '2017-09-05'),
(45, 'C028', 'CERTIFICATE IN VBA PROGRAMMING', 4500, '2', '2017-09-05', '2017-09-05'),
(46, 'C029', 'CERTIFICATE IN LINUX', 15000, '2', '2017-09-05', '2017-09-05'),
(47, 'C030 A', 'CERTIFICATE IN ORACLE', 5000, '2', '2017-09-05', '2017-09-05'),
(48, 'C030 B', 'CERTIFICATE IN ORACLE (ADVANCE)', 15000, '3', '2017-09-05', '2017-09-05'),
(52, 'CSR1', 'COMPUTER', 200, '1', '2018-03-08', '2018-03-08'),
(53, 'CSR2', 'HANDICAP', 100, '2', '2018-03-08', '2018-03-08'),
(54, 'O001', 'OTHER', 100, '12', '2018-04-20', '2018-04-20'),
(59, 'CCC01', 'CCC', 3500, '3', '2018-09-25', '2019-09-11'),
(61, 'CC001', 'CONCEPT ON COMPUTER COURSE', 3300, '3', '2019-02-18', '2019-02-18'),
(62, 'EXC001', 'CERTIFICATE IN COMPUTER  (BACK) EXCEL', 1300, '3', '2019-03-05', '2019-03-05'),
(63, 'EXD001', 'DIPLOMA IN COMPUTER (BACK) EXCEL', 2500, '6', '2019-03-05', '2019-03-05'),
(64, 'EXA001', 'ADVANCE DIPLAMA IN COMPUTER (BACK) EXCEL', 5000, '12', '2019-03-05', '2019-03-05'),
(65, 'MC001', 'CERTIFICATE IN COMPUTER  (BACK) H1 MANISH', 800, '3', '2019-03-05', '2019-03-05'),
(66, 'MD001', 'DIPLOMA IN COMPUTER (BACK) H1 MANISH', 1500, '6', '2019-03-05', '2019-03-05'),
(67, 'MA001', 'ADVANCE DIPLAMA IN COMPUTER (BACK) H1 MANISH', 3000, '12', '2019-03-05', '2019-03-05'),
(68, 'PC001', 'CERTIFICATE IN COMPUTER  (BACK) H2 PREMCHAND', 1000, '3', '2019-03-05', '2019-03-05'),
(69, 'PD001', 'DIPLOMA IN COMPUTER (BACK) H2 PREM', 1800, '6', '2019-03-05', '2019-03-05'),
(70, 'PA001', 'ADVANCE DIPLAMA IN COMPUTER (BACK) H2 PREM CHAND', 3000, '12', '2019-03-05', '2019-03-05'),
(111, 'N10', 'NIOS10', 25000, '12', '2019-12-25', '2020-03-09'),
(112, 'NC03', 'NIOS12', 28000, '12', '2019-12-25', '2020-03-09'),
(116, 'POLYHG01', 'POLYTECHNIC DIPLOMA (HGU)', 15200, '6', '2020-12-26', '2020-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `education` varchar(200) NOT NULL,
  `course` varchar(50) NOT NULL,
  `reffer_by` varchar(50) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `modify_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_calling`
--

CREATE TABLE `enquiry_calling` (
  `id` int(11) NOT NULL,
  `enq_id` int(11) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `deposite_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_calling`
--

INSERT INTO `enquiry_calling` (`id`, `enq_id`, `remark`, `deposite_date`) VALUES
(1, 467, 'will sure come tomorow at 11 am', '2019-02-20'),
(2, 467, 'adsf', '2019-02-20'),
(3, 468, 'main kal morning me aata hu', '2019-02-22'),
(4, 464, 'main admission lena chatq h', '2019-03-04'),
(5, 473, 'CALL 3 TIME NO RESPONSE, EVEN WHATS APP MESSAGE DROP NO REPLY', '2019-03-08'),
(6, 473, 'SARA HISAB 30-JAN TAK KAR DUNGA STILL PENDING', '2019-03-08'),
(7, 473, '30000 LE KE AA RHA HU KAL DE DUNGA BUT STILL NO REPLY', '2019-03-08'),
(8, 473, '30000 KI PAYMENT AA GAYI HAI KAL MIL K DETA HU', '2019-03-08'),
(9, 473, 'CALL U TOTAL 50-60 CALL PAR NA TO CALL KARNE KA NA SMS NA WHATSAPP KA REP KA TIME HAI.', '2019-03-08'),
(10, 474, '5000 RS 17-JAN-18 KO NIKALE AUR BINA BATAYE 2100 RS SWIPE KARA LIYE ON 20-JAN YE KAHA 2-3 DIN ME DE DUNGA', '2019-03-08'),
(11, 474, '29-JAN KO AAPKI PAYMENT AA JAYEGI', '2019-03-08'),
(12, 474, 'IN FEB, MAR, APR, MAY, JUN TAK MAIN APROX 100 SE JYADA CALL KAR DI BUT AAJ DE DUNGA KAL DE DUNGA', '2019-03-08'),
(13, 474, 'JUN K BAAD APNE PHONE PICK KARNA BAND KAR DIYA', '2019-03-08'),
(14, 474, 'PANDIT KE PAS 1.5 LAKH K COMMITEE HAI WO AAP LE LENA 1 LAKH.', '2019-03-08'),
(15, 474, 'PANDIT KE PAS 1.5 LAKH K COMMITEE HAI WO AAP LE LENA 1 LAKH.', '2019-03-08'),
(16, 474, 'USE BAAD TO HAD HI HO GAYI AAP PAISE KAMANE ME ITNE BUSY NA PHONE PICK KARNA NA WHATSAPP KA REP KARNA.', '2019-03-08'),
(17, 474, 'KABI KAHA HI SIR MAIN AAPKA PAISE TRANSFER, PAYTM, KAR DETA HU. PLZ TELL ME UR A/C DETAIL.', '2019-03-08'),
(18, 475, '17 CERTIFICATE + PREV CERTIFICTE: 15000 + 10000 RS FRANCHISE : 25000 RS PENDING', '2019-03-08'),
(19, 475, '3 FRANHISE DILANI THI APNE', '2019-03-08'),
(20, 475, 'MOHNA WALI FRANCHISE K NAHI BATAIY APNE', '2019-03-08'),
(21, 476, '10000 (LAPTOP ) + 300 LAPTOP WINDOW AND MORPHO DRIVER + 1000 PENALTY', '2019-03-08'),
(22, 476, 'AAJ PAYMENT AA RAHI HAI KAL MIL JAYENGE', '2019-03-08'),
(23, 476, '20-FEB YANI SUNDAY TAK AAPKI PAYMENT MIL JAYEGI', '2019-03-08'),
(24, 476, 'NO CALL BACK NO REP TIME ITNA HAI LAPTOP ME VIDEO NAHI CHL RAHI HEERA K PAS CALL KAR DI', '2019-03-08'),
(25, 476, '40-50 CALL KAR HOGI MAINE', '2019-03-08'),
(26, 477, '15000 AMOUNT RECEVED ON DEC,25', '2019-03-08'),
(27, 477, '10,000 RS RECEIVED ON 3-FEB-19', '2019-03-08'),
(28, 476, 'CALL NAHI KI NIOS WALE BACHO KO', '2019-03-09'),
(29, 473, 'TODAY CALL PICK AND GIVE 30K AND LED BULD TILL EVENING. SAYING I AM ILL WITH 50K PLATLATES', '2019-03-18'),
(30, 473, 'CALL ON 23.3.19 DONT PICK MESSAGE ON WHATS APP KAL SHAM TAK AAPKO PAYMENT DE DUNGA', '2019-03-25'),
(31, 473, 'AAJ CALL PICK K HAI KEHTA HAI AA RAHA HU 12 BAJE CUTTING KARA RAHA HU AA K MILTA HU NAHI AAYA', '2019-03-25'),
(32, 473, 'AAJ MAINE 4 TIME CALL K NO RESPONSE. GHAR B GYA NAHI MILA PAPA KEH RAHE HUM B BADE PRESAN HAI', '2019-03-25'),
(33, 620, 'maine to aise hi kiya.', '2019-05-31'),
(34, 620, 'enquiry k liye aunga', '2019-05-31'),
(35, 632, 'MEETING CALL WILL COM', '2019-06-04'),
(36, 632, 'MIN SIASFDA ', '2019-06-04'),
(37, 634, 'I WILL COME ON 12-JN', '2019-06-10'),
(38, 634, 'DFGSDFG', '2019-06-10'),
(39, 638, 'NEXT DAY I WILL COME', '2019-06-14'),
(40, 767, 'will come', '2019-11-14'),
(41, 786, 'MAIN KAL AUNGE', '2019-12-20'),
(42, 786, 'GFHGFHGF', '2019-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `particular` varchar(200) NOT NULL,
  `quantity` double NOT NULL,
  `amount` double NOT NULL,
  `total_amount` varchar(100) NOT NULL,
  `particular_date` varchar(100) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `particular`, `quantity`, `amount`, `total_amount`, `particular_date`, `remark`, `create_date`, `modify_date`) VALUES
(1, 'RENT', 1, 9000, '9000', '2017-11-10', '', '2017-11-14', '2017-11-14'),
(2, 'HEERA SALARY', 1, 7000, '7000', '2017-11-14', '', '2017-11-14', '2017-11-14'),
(3, 'Rent', 1, 9000, '9000', '2017-12-01', '', '2017-12-02', '2017-12-02'),
(4, 'Electricity Bill', 1, 1700, '1700', '2017-12-01', '212 Reading till 1400', '2017-12-02', '2017-12-02'),
(5, 'Jhadu', 1, 90, '90', '2017-12-02', '', '2017-12-02', '2017-12-02'),
(6, 'Rent', 1, 9000, '9000', '2018-01-01', '', '2018-01-02', '2018-01-02'),
(7, 'Electricity Bill', 1, 500, '500', '2018-01-01', 'till 1465 and 65 reading', '2018-01-02', '2018-01-02'),
(8, 'Sweeper', 1, 1000, '1000', '2018-01-02', '', '2018-01-02', '2018-01-02'),
(9, 'HEERA SALARY', 1, 7000, '7000', '2018-01-09', '', '2018-01-16', '2018-01-16'),
(10, 'WIFI DEVICE', 1, 250, '250', '2018-01-17', 'NEAR DHARAM KAPIL COMMUNICATION (NEW SHOP)', '2018-01-21', '2018-01-21'),
(11, 'TOILET BRUSH AND CLEANER', 1, 55, '55', '2018-01-21', '', '2018-01-21', '2018-01-21'),
(12, 'PAWAN', 1, 3700, '3700', '2018-01-19', 'VIDYA SAGAR 10000 GIVEN AMOUNT', '2018-01-21', '2018-01-21'),
(13, 'RENT', 1, 9000, '9000', '2018-02-01', '', '2018-02-08', '2018-02-08'),
(14, 'SWEEPER', 1, 1000, '1000', '2018-02-05', '', '2018-02-08', '2018-02-08'),
(15, 'HEERA SALARY', 1, 7000, '7000', '2018-02-08', '', '2018-02-08', '2018-02-08'),
(16, 'FRAME', 1, 80, '80', '2018-02-08', '', '2018-02-08', '2018-02-08'),
(17, 'Rent', 1, 9000, '9000', '2018-03-03', '', '2018-03-03', '2018-03-03'),
(18, 'Sweeper', 1, 1000, '1000', '2018-03-03', '', '2018-03-03', '2018-03-03'),
(19, 'ELECTRICITY  BILL', 1, 1050, '1050', '2018-03-06', 'TILL 1600 AND READING 135', '2018-03-06', '2018-03-06'),
(20, 'RENT', 1, 9000, '9000', '2018-05-01', '', '2018-05-02', '2018-05-02'),
(21, 'ELECTRICITY', 1, 1000, '1000', '2018-04-25', '1725 TOTAL 125 READING BILL GIVE @8', '2018-05-02', '2018-05-02'),
(22, 'Sweeper', 1, 1000, '1000', '2018-05-02', '', '2018-05-02', '2018-05-02'),
(23, 'CAPICTOR', 1, 35, '35', '2018-04-24', '', '2018-05-02', '2018-05-02'),
(24, 'MANISH', 1, 100, '100', '2018-05-28', '', '2018-06-04', '2018-06-04'),
(25, 'RENT', 1, 9000, '9000', '2018-06-01', 'ANIL SIR DHARAM PLAZA', '2018-06-04', '2018-06-04'),
(26, 'TONER REFIL', 1, 120, '120', '2018-06-01', '', '2018-06-04', '2018-06-04'),
(27, 'PRINTER', 1, 1400, '1400', '2018-05-21', '', '2018-06-04', '2018-06-04'),
(28, 'FLEX', 1, 3500, '3500', '2018-06-23', '', '2018-06-23', '2018-06-23'),
(29, 'COOLER', 1, 1400, '1400', '2018-06-26', '', '2018-06-26', '2018-06-26'),
(30, 'CAPICTOR', 1, 35, '35', '2018-06-26', '', '2018-06-26', '2018-06-26'),
(31, 'RENT', 1, 9000, '9000', '2018-07-05', 'DHARM SCHOOL ME ANIL SIR', '2018-07-16', '2018-07-16'),
(32, 'NEWSPAPER', 1, 1500, '1500', '2018-07-03', '', '2018-07-16', '2018-07-16'),
(33, 'KEYBOARD REPAIR', 1, 50, '50', '2018-07-09', '', '2018-07-16', '2018-07-16'),
(34, 'HEERA SALARY', 1, 7000, '7000', '2018-07-13', '', '2018-07-16', '2018-07-16'),
(35, 'HEERA SALARY', 1, 7000, '7000', '2018-08-02', 'CASH', '2018-08-03', '2018-08-03'),
(36, 'RENT', 1, 9000, '9000', '2018-08-03', 'ANIL SIR', '2018-08-03', '2018-08-03'),
(37, 'ELECTRCITY', 1, 3600, '3600', '2018-11-21', '2775-2325=450 AND 2677 BILL AND 923 BILL PAID', '2018-11-21', '2018-11-21'),
(38, 'Rent', 1, 9000, '9000', '2019-02-15', '', '2019-02-20', '2019-02-20'),
(39, 'ELECTRICITY BILL', 1, 923, '923', '2019-02-15', '2875 TILL READING + 923 PRE ADJUST IN 2753 BILL PAID AGAINT SRI RAM SIR', '2019-02-20', '2019-02-20'),
(40, 'pawan', 1, 850, '850', '2019-02-27', 'petrol: 200, nielet form: 650', '2019-02-27', '2019-02-27'),
(41, 'RIM', 1, 180, '180', '2019-03-05', '', '2019-03-05', '2019-03-05'),
(42, 'INDEX FILE', 1, 60, '60', '2019-03-05', '', '2019-03-05', '2019-03-05'),
(43, 'PAWAN CAD', 1, 5200, '5200', '2019-03-15', '', '2019-03-25', '2019-03-25'),
(44, 'INDEX FILE', 2, 60, '120', '2019-03-27', 'CERTIFICATE, ANSWER SHEET, MARKSHEET INDEX FILE PURCHASE FROM PRINCE', '2019-03-27', '2019-03-27'),
(45, 'DOMAIN BOOK', 1, 1020, '1020', '2019-03-28', 'DOMAN BOOK FOR MAHHENDER GVMRUNDHI', '2019-03-28', '2019-03-28'),
(46, 'MILK GHANSHYAM', 1, 2520, '2520', '2019-04-01', 'VIDYA SAGAR - 32 AND OUR 31 TOTAL: 63*40=2520 AMOUNT', '2019-04-01', '2019-04-01'),
(47, 'PAWAN SIR', 1, 5000, '5000', '2019-04-05', 'FRANCHISE FEE', '2019-04-05', '2019-04-05'),
(48, 'MOUSE', 1, 600, '600', '2019-04-06', 'MANAV SALES', '2019-04-09', '2019-04-09'),
(49, 'COMPUTER REPAIR, 2 HDD, 1 RAM', 1, 740, '740', '2019-04-07', 'RAJ COMPUTER', '2019-04-09', '2019-04-09'),
(50, 'RENT', 1, 9000, '9000', '2019-04-11', 'ANIL SIR FOR METER READING COME.', '2019-04-11', '2019-04-11'),
(51, 'LAMINATION', 1, 150, '150', '2019-04-11', '', '2019-04-11', '2019-04-11'),
(52, 'CERTIFICATE', 1, 50, '50', '2019-04-17', 'FRACHISE CERTIFICATE PRINT', '2019-04-17', '2019-04-17'),
(53, 'COMPUTER REPAIR 4 WINDOW 1 RAM DDR1', 1, 750, '750', '2019-04-22', 'RAJ COMPAQ SYSTEM RAM FOR 1 YEAR WARRANTY', '2019-04-22', '2019-04-22'),
(54, 'BANK', 1, 5000, '5000', '2019-04-23', '', '2019-04-22', '2019-04-22'),
(55, 'FLEX', 1, 900, '900', '2019-04-30', '', '2019-04-30', '2019-04-30'),
(56, 'HANDICAP PHOTO', 1, 300, '300', '2019-04-30', '', '2019-04-30', '2019-04-30'),
(57, 'sweet and phoot', 1, 400, '400', '2019-05-02', '', '2019-05-02', '2019-05-02'),
(58, 'KEYBOARD + MOUSE', 1, 1000, '1000', '2019-05-13', 'PAYMENT PAY FOR RAJ', '2019-05-13', '2019-05-13'),
(59, 'ELECTRICITY', 2, 5400, '10800', '2019-07-22', 'READING TILL 3625 FOR 700 @7.70 TOTAL : 5400 RS', '2019-07-23', '2019-07-23'),
(60, 'SUNIL SIR ELECTRICTY', 1, 800, '800', '2019-08-21', '3625 READING FROM 25-6-19 TO 25-AUG-2019', '2019-12-09', '2019-12-09'),
(61, 'RENT', 1, 9000, '9000', '2019-09-11', 'ANIL SIR', '2019-09-11', '2019-09-11'),
(62, 'SWEEPER', 1, 1000, '1000', '2019-09-10', 'WIFE KO DIYE', '2019-09-11', '2019-09-11'),
(63, 'RENT', 1, 9000, '9000', '2019-12-09', 'KK', '2019-12-09', '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `tid` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `deposite_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `particular` varchar(200) NOT NULL,
  `amount` double NOT NULL,
  `particular_date` varchar(200) NOT NULL,
  `balance` int(11) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `create_date` varchar(100) NOT NULL,
  `modify_date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `particular`, `amount`, `particular_date`, `balance`, `remark`, `create_date`, `modify_date`) VALUES
(1, 'MANISH', 5400, '2019-03-04', 700, '10 CERTIFICATE AND 1 CERTIFICATE FEE PENDING. 11 brouchure pending SK SHARE 500', '2019-03-05', '2019-03-05'),
(2, 'FRANCHISE FEE', 5000, '2019-03-05', 5000, 'REST AMOUNT WILL GIVE IN NEXT 2 MONTHS. SK SHARE 500', '2019-03-05', '2019-03-05'),
(3, 'SUNITA CERTIFICATE', 3500, '2019-03-04', 0, 'SK SHARE 300', '2019-03-05', '2019-03-05'),
(4, 'SANTOSH', 1000, '2019-03-05', 1000, 'CERTIFICATE FEE SK SHARE 100', '2019-03-05', '2019-03-05'),
(5, 'EXP. CERTIFICATE', 3000, '2019-03-12', 0, '', '2019-03-25', '2019-03-25'),
(6, 'FRANCHISE FEE', 9500, '2019-03-25', 500, 'Prem  Chand Franchise Fee', '2019-03-26', '2019-03-26'),
(7, 'VIKASH FEE', 4500, '2019-03-27', 1800, 'STUDENT FEE', '2019-03-27', '2019-03-27'),
(8, 'GVM RUNHI MAHENDER', 4000, '2019-03-28', 4000, 'GVM RUNDHI DOMAIN AND HOSTING', '2019-03-28', '2019-03-28'),
(9, 'SACHIN FEE', 1500, '2019-04-04', 1500, '', '2019-04-05', '2019-04-05'),
(10, 'HIMANSHU SHARMA', 1000, '2019-04-04', 1000, '', '2019-04-05', '2019-04-05'),
(11, 'FEE', 1200, '2019-04-09', 1800, 'YOGENDER FEE', '2019-04-09', '2019-04-09'),
(12, 'FEE', 1000, '2019-04-09', 0, 'CAD FEE OF', '2019-04-09', '2019-04-09'),
(13, 'SEMINAR', 1500, '2019-04-10', 0, 'MLM SEMINAR FROM FARIDABAD', '2019-04-10', '2019-04-10'),
(14, 'SUMIT FEE', 1500, '2019-04-11', 1500, '', '2019-04-11', '2019-04-11'),
(15, 'fee', 2000, '2019-04-11', 2000, '', '2019-04-11', '2019-04-11'),
(16, 'STUDENT FEE', 3000, '2019-04-17', 0, 'AANCHAL, SHEETAL FEE DEPOSIT', '2019-04-17', '2019-04-17'),
(17, 'FEE', 9500, '2019-04-20', 0, 'CCC+STUDENT+PROJECT', '2019-04-22', '2019-04-22'),
(18, 'FEE', 3000, '2019-04-25', 0, 'sumit ccc+ himanshu fee', '2019-04-27', '2019-04-27'),
(19, 'FEE', 2000, '2019-04-26', 0, 'sourabh basic', '2019-04-27', '2019-04-27'),
(20, 'St. CR and Instt. Sell', 14000, '2019-04-28', 0, 'sale of genesis and st. cr software fee', '2019-04-28', '2019-04-28'),
(21, 'FEE', 1000, '2019-04-29', 1800, 'CCC FEE', '2019-04-30', '2019-04-30'),
(22, 'FEE', 3000, '2019-05-01', 0, '3 STUDENT FEE', '2019-05-01', '2019-05-01'),
(23, 'fee', 1000, '2019-05-02', 0, 'girl fee', '2019-05-02', '2019-05-02'),
(24, 'fee', 3700, '2019-05-06', 0, 'student fee : manish it 1 year , 2 student', '2019-05-07', '2019-05-07'),
(25, 'fee', 200, '2019-05-10', 0, '9 may aur 10 may k fee', '2019-05-10', '2019-05-10'),
(26, 'PROJECT + CERTIFICATE', 5000, '2019-05-13', 2000, '', '2019-05-13', '2019-05-13'),
(27, 'FEE', 1000, '2019-05-15', 0, 'ccc studnt fee sourav', '2019-05-16', '2019-05-16'),
(28, 'INSTT', 10200, '2019-06-13', 0, '11,12,13 JUN FEE COLLECTION', '2019-06-13', '2019-06-13'),
(29, 'SURIN', 1000, '2020-01-23', 500, 'SURIN CERTIFICATE BALANCE AMOUNT', '2020-01-24', '2020-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `marks_details`
--

CREATE TABLE `marks_details` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `enrollment_id` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `marks_obtain` int(11) NOT NULL,
  `min_marks` int(11) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modify_date` varchar(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks_details`
--

INSERT INTO `marks_details` (`id`, `student_id`, `enrollment_id`, `code`, `subject`, `marks_obtain`, `min_marks`, `max_marks`, `created_date`, `modify_date`, `created_by`, `branch_id`) VALUES
(1, 0, 'ECR20180403012524', 'P001', '1', 56, 40, 100, '2018-04-09 00:00:00', '', 0, 0),
(2, 0, 'ECR20180403012524', 'P003', '3', 45, 40, 100, '2018-04-09 00:00:00', '', 0, 0),
(3, 0, 'ECR20180403012524', 'P002', '2', 47, 40, 100, '2018-04-09 00:00:00', '', 0, 0),
(4, 0, 'ECR20180403012524', 'P004', '4', 85, 40, 100, '2018-04-09 00:00:00', '', 0, 0),
(5, 0, 'ECR20180403012524', 'P005', '5', 89, 40, 100, '2018-04-09 00:00:00', '', 0, 0),
(6, 0, 'ECR20180409051413', 'P001', '1', 66, 40, 100, '2018-04-11 00:00:00', '', 0, 0),
(7, 0, 'ECR20180409051413', 'P002', '2', 45, 40, 100, '2018-04-11 00:00:00', '', 0, 0),
(8, 0, 'ECR20180719054104', 'P001', '1', 49, 40, 100, '2018-07-20 00:00:00', '', 0, 0),
(9, 0, 'ECR20190516035935', 'P001', '1', 55, 40, 100, '2019-05-17 00:00:00', '', 0, 0),
(10, 0, 'ECR20190516035935', 'P002', '2', 67, 40, 100, '2019-05-17 00:00:00', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`) VALUES
(1, 'Enquiry'),
(2, 'Course'),
(3, 'Student'),
(4, 'Fee'),
(5, 'Expense'),
(6, 'Calling'),
(7, 'Books'),
(8, 'Library'),
(9, 'users'),
(10, '');

-- --------------------------------------------------------

--
-- Table structure for table `reffer_by`
--

CREATE TABLE `reffer_by` (
  `id` int(11) NOT NULL,
  `reffer_by` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reffer_by`
--

INSERT INTO `reffer_by` (`id`, `reffer_by`) VALUES
(1, 'None'),
(2, 'Friend'),
(3, 'Website'),
(4, 'Internet'),
(5, 'Phamplet'),
(6, 'Wall Paint'),
(7, 'SMS'),
(8, 'Calling'),
(9, 'Flex'),
(10, 'Others'),
(11, 'Google'),
(12, 'Facebook'),
(13, 'Whatsapp');

-- --------------------------------------------------------

--
-- Table structure for table `results_details`
--

CREATE TABLE `results_details` (
  `id` int(11) NOT NULL,
  `certificate_no` varchar(50) NOT NULL,
  `student_id` int(11) NOT NULL,
  `enrollment_id` varchar(50) NOT NULL,
  `result` varchar(20) NOT NULL,
  `Devision` varchar(20) NOT NULL,
  `marks_obtain_tot` int(11) NOT NULL,
  `min_marks_tot` int(11) NOT NULL,
  `max_marks_tot` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modify_date` varchar(20) NOT NULL,
  `created_by` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results_details`
--

INSERT INTO `results_details` (`id`, `certificate_no`, `student_id`, `enrollment_id`, `result`, `Devision`, `marks_obtain_tot`, `min_marks_tot`, `max_marks_tot`, `percentage`, `created_date`, `modify_date`, `created_by`, `branch_id`) VALUES
(1, 'ECC20180409093019', 0, 'ECR20180403012524', 'PASSED', 'FIRST', 322, 200, 500, 64, '2018-04-09 00:00:00', '', 0, 0),
(2, 'ECC20180411032621', 0, 'ECR20180409051413', 'PASSED', 'SECOND', 111, 80, 200, 56, '2018-04-11 00:00:00', '', 0, 0),
(3, 'ECC20180720034750', 0, 'ECR20180719054104', 'PASSED', 'THIRD', 49, 40, 100, 49, '2018-07-20 00:00:00', '', 0, 0),
(4, 'ECC20190517062501', 0, 'ECR20190516035935', 'PASSED', 'FIRST', 122, 80, 200, 61, '2019-05-17 00:00:00', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `enrollment` varchar(200) NOT NULL,
  `aadhar_no` varchar(200) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `alt_mobile` varchar(500) NOT NULL,
  `caste` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  `course_fee` int(11) NOT NULL,
  `tax_amount` int(11) NOT NULL,
  `course_duration` varchar(200) NOT NULL,
  `course_discount` int(11) NOT NULL,
  `discount_fixed` int(11) NOT NULL DEFAULT 0,
  `join_date` varchar(100) NOT NULL,
  `create_date` varchar(200) NOT NULL,
  `modify_date` varchar(200) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `tax` int(11) NOT NULL,
  `gender` int(10) NOT NULL,
  `education_type` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `marksheet_sc` varchar(100) NOT NULL,
  `marksheet_sr_sc` varchar(100) NOT NULL,
  `adhar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `enrollment`, `aadhar_no`, `student_name`, `father_name`, `mname`, `alt_mobile`, `caste`, `dob`, `address`, `phone`, `email`, `course_code`, `course_fee`, `tax_amount`, `course_duration`, `course_discount`, `discount_fixed`, `join_date`, `create_date`, `modify_date`, `remark`, `tax`, `gender`, `education_type`, `image`, `marksheet_sc`, `marksheet_sr_sc`, `adhar`) VALUES
(1, 'ECR20171111025300', '522274030350', 'SUSHIL KUMAR', 'VIJAY SINGH', 'LILAVATI DEVI', '9017319907', 'General', '1995-03-01', 'KOSI', '9917459320', 'sushilk4200@gmail.com', 'C012', 3000, 540, '2', 5, 0, '2017-11-11', '2017-11-11', '2017-11-11', '', 18, 0, 0, '', '', '', ''),
(2, 'ECR20171114112756', '427329535938', 'PREETI', 'AJIT SINGH NAGAR', 'BALESH', '8800005995', 'OBC', '1995-12-04', 'VPO - NAWADA ,NEELAM ,TEH BALLBHGHAR ,FARIDABD -121004', '9467378585', 'preetinagar@gmail.com', 'C005', 2000, 360, '2', 5, 0, '2017-11-03', '2017-11-14', '2017-11-14', '', 18, 0, 0, '', '', '', ''),
(3, 'ECR20171114113543', '712637344151', 'REENA', 'RAM KISHAN', 'GYAN WATI', '9991711806', 'OBC', '1995-06-10', 'VOP-MOHNA TEH-BALLBHGAR DISTT-FARIDABAD-121004', '9991711806', 'reenagala106@gmail.com', 'C005', 2000, 360, '2', 5, 0, '2017-11-03', '2017-11-14', '2017-11-14', '', 18, 0, 0, '', '', '', ''),
(5, 'ECR20171117120920', '000', 'SATISH KUMAR', 'LALCHAND', 'KIRAN', '8930232121', 'SC/ST', '1989-08-20', 'VILLAGE-MANDORI P.O-MANDKOLA,TEH-HATIN,DISTT-PALWAL', '8930232121', 'satishbadraha@gmail.com', 'C004', 4000, 720, '3', 5, 0, '2017-11-17', '2017-11-17', '2017-11-17', '', 18, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_books`
--

CREATE TABLE `student_books` (
  `id` int(11) NOT NULL,
  `enrollment_no` varchar(100) NOT NULL,
  `book_code` varchar(100) NOT NULL,
  `create_date` varchar(30) NOT NULL,
  `modify_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_books`
--

INSERT INTO `student_books` (`id`, `enrollment_no`, `book_code`, `create_date`, `modify_date`) VALUES
(1, 'ECR20171114113543', 'B001', '2017-11-16', '2017-11-16'),
(2, 'ECR20201226015048', 'B001', '2021-03-13', '2021-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `subject_details`
--

CREATE TABLE `subject_details` (
  `id` int(11) NOT NULL,
  `paper_code` varchar(20) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `min_marks` int(11) DEFAULT NULL,
  `max_marks` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modify_date` varchar(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_details`
--

INSERT INTO `subject_details` (`id`, `paper_code`, `subject`, `min_marks`, `max_marks`, `created_date`, `modify_date`, `created_by`, `branch_id`) VALUES
(1, 'P001', 'JAVA', 40, 100, '2018-04-14 00:00:00', '', 0, 0),
(2, 'P002', 'ADVANCED EXCEL', 40, 100, '2018-04-11 00:00:00', '2018-04-11', 0, 0),
(3, 'P003', 'COMPUTER FUNDAMENTAL', 40, 100, '2018-04-11 00:00:00', '', 0, 0),
(4, 'P004', 'PHP', 40, 100, '2018-04-14 00:00:00', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name`) VALUES
(1, 'MDU'),
(2, 'KUK');

-- --------------------------------------------------------

--
-- Table structure for table `university_course`
--

CREATE TABLE `university_course` (
  `id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `type` enum('Year','Semester') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_course`
--

INSERT INTO `university_course` (`id`, `university_id`, `course_name`, `course_code`, `type`) VALUES
(1, 1, 'BCA', 'KUKBCA', 'Year'),
(2, 2, 'MCA', 'KUKBC', 'Semester');

-- --------------------------------------------------------

--
-- Table structure for table `university_course_fees`
--

CREATE TABLE `university_course_fees` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_login` varchar(200) NOT NULL,
  `login_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`, `last_login`, `login_ip`) VALUES
(1, 'Rajbir', 'mypalwal@gmail.com', '123', '2017-08-01 01:12:39', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `add_role` int(11) NOT NULL DEFAULT 1,
  `edit_role` int(11) NOT NULL DEFAULT 1,
  `view_role` int(11) NOT NULL DEFAULT 1,
  `delete_role` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_inventory`
--
ALTER TABLE `books_inventory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_name` (`book_name`),
  ADD UNIQUE KEY `book_code` (`book_code`);

--
-- Indexes for table `callings`
--
ALTER TABLE `callings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caste`
--
ALTER TABLE `caste`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`SNO`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_calling`
--
ALTER TABLE `enquiry_calling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks_details`
--
ALTER TABLE `marks_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reffer_by`
--
ALTER TABLE `reffer_by`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results_details`
--
ALTER TABLE `results_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_books`
--
ALTER TABLE `student_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_details`
--
ALTER TABLE `subject_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_course`
--
ALTER TABLE `university_course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `university_course_fees`
--
ALTER TABLE `university_course_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books_inventory`
--
ALTER TABLE `books_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `callings`
--
ALTER TABLE `callings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `caste`
--
ALTER TABLE `caste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `SNO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_calling`
--
ALTER TABLE `enquiry_calling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `marks_details`
--
ALTER TABLE `marks_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reffer_by`
--
ALTER TABLE `reffer_by`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `results_details`
--
ALTER TABLE `results_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `student_books`
--
ALTER TABLE `student_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject_details`
--
ALTER TABLE `subject_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `university_course`
--
ALTER TABLE `university_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `university_course_fees`
--
ALTER TABLE `university_course_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
