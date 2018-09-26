-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2018 at 05:37 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept_detail`
--

CREATE TABLE `dept_detail` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_detail`
--

INSERT INTO `dept_detail` (`dept_id`, `dept_name`) VALUES
(1, 'IT DEPARTMENT'),
(2, 'PRINT MEDIA'),
(3, 'MEDIA MONITORING'),
(4, 'RECEPTION'),
(5, 'SOCIAL MEDIA'),
(6, 'HR'),
(7, 'HOD'),
(8, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `emp_detail`
--

CREATE TABLE `emp_detail` (
  `eid` int(5) NOT NULL,
  `emp_code` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `dept_id` int(5) NOT NULL,
  `emp_designation` varchar(50) NOT NULL,
  `emp_off` varchar(15) NOT NULL,
  `s_grade` varchar(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `joindate` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emp_del` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_detail`
--

INSERT INTO `emp_detail` (`eid`, `emp_code`, `emp_name`, `dept_id`, `emp_designation`, `emp_off`, `s_grade`, `password`, `image`, `joindate`, `dob`, `phone`, `email`, `emp_del`) VALUES
(1, 'shekhar', 'Sharadindu Shekhar\r\n', 3, 'HOD', 'Friday', 'B', 'shekhar', 'images/faces/empty.png', '', '', '+91-8770597100', ' Currently Not available', 0),
(2, 'ibc', 'Sharadindu Bhushan', 3, 'Incharge', 'Thursday', 'B', 'bhushan', 'images/faces/bhushan.jpg', '', '', '+91-7580975000', ' Currently Not available', 0),
(3, 'SBMMPL883', 'Shankar Sen', 3, 'Incharge', 'Thursday', 'A', 'shankar', 'images/faces/empty.png', '2016-11-01', '1984-05-16', '+91-9977500253', ' Currently Not available', 0),
(4, 'hr', 'HR', 6, 'HR', 'Sunday', 'A', 'hr@321', 'images/faces/empty.png', '0001-01-01', '0001-01-01', '+91-XXXXXXXX', 'hr@ibc24.in', 0),
(5, 'MM000129', 'Kshitij Kumar Thakur', 1, 'System Admin', 'Wednesday', 'B', '123@123', 'images/faces/kshitij.jpg', '2018-04-01', '1988-08-01', '+91-7806044466', 'kshitij.thakur@sbdigicom.com', 0),
(6, 'MM000115', 'Vikas Maurya', 1, 'System Admin', 'Tuesday', 'A', 'raipur@123', 'images/faces/empty.png', '2018-03-19', '1990-03-07', '+91-9907439690', ' Currently Not available', 1),
(7, 'MM000131', 'Pooja P Raj', 1, 'Developer', 'Sunday', 'C', 'puja', 'images/faces/pooja.jpg', '2018-04-02', '1994-01-21', '+91-9424284027', 'pooja.raj@sbdigicom.com', 0),
(8, 'MM000135', 'Asad Ahmad ', 1, 'System Admin', 'Friday', 'A', 'asad', 'images/faces/asad.jpg', '2018-06-18', '1987-12-17', '+91-9755183317', 'asad.ahmad@sbdigicom.com', 0),
(9, 'MM000130', 'Siyaram', 1, 'System Admin', 'Sunday', 'C', 'siyaram', 'images/faces/siyaram.jpg\r\n', '2018-03-31', '1987-07-05', '+91-8962647405', ' Currently Not available', 0),
(10, 'MM000120', 'Anjana James', 4, 'Receptionist', 'Thursday', 'A', 'anjana', 'images/faces/anjana.jpg', '2018-03-26', '1995-01-11', '+91-9131953039', ' Currently Not available', 0),
(11, 'MM000114', 'Madhumita Gautam', 4, 'Receptionist', 'Thursday', 'B', 'madhumita', 'images/faces/madhu.jpg', '2018-03-19', '1991-06-07', '+91-9907439690', ' Currently Not available', 0),
(12, 'MM000121', 'Mukesh Vishwakarma', 8, 'Admin Executive', 'Sunday', 'C', 'mukesh', 'images/faces/mukesh.jpg', '2018-03-26', '1982-11-11', '+91-8965000143', ' Currently Not available', 0),
(13, 'MM000101', 'Chandrakant Dewangan', 3, 'monitoring executive', 'Sunday', 'B', 'chandrakant', 'images/faces/chandra.jpg', '2018-02-03', '1977-06-10', '+91-9770889989', ' Currently Not available', 0),
(14, 'MM000102', 'Nand Kishore', 3, 'monitoring executive', 'Thursday', 'B', 'nand', 'images/faces/empty.png', '2018-03-19', '1994-07-03', '+91-7389262590', 'nandkishorsonkar104@gmail.com', 0),
(15, 'MM000103', 'Karan Dewangan', 3, 'monitoring executive', 'Sunday', 'A', 'karan', 'images/faces/karan.jpg', '2018-03-19', '1995-03-10', '+91-8602716760', 'karan103dewangan@gmail.com', 0),
(16, 'MM000104', 'Kaushilya Vishwakarma', 3, 'monitoring executive', 'tuesday', 'A', 'kaushilya', 'images/faces/kaush.jpg', '2018-03-19', '1995-03-16', '+91-7440794953', ' Currently Not available', 0),
(17, 'MM000105', 'Mohammad Shajan', 3, 'monitoring executive', 'sunday', 'B', '1302', 'images/faces/shazan.jpg', '2018-03-19', '1991-08-17', '+91-9039176729', 'mohammadsazaan45@gmail.com', 0),
(18, 'MM000106', 'Rajan Kumar Jha', 3, 'monitoring executive', 'tuesday', 'B', 'aashi', 'images/faces/rajan.jpg', '2018-03-19', '1994-01-02', '+91-7804068583', 'rajanjha2410@gmail.com', 0),
(19, 'MM000107', 'Ritu Verma', 3, 'monitoring executive', 'saturday', 'A', 'ritu', 'images/faces/ritu.jpg', '2018-03-19', '1993-08-04', '+91-9752446656', 'ritu.verma804@gmail.com', 0),
(20, 'MM000108', 'Surendra Kumar', 3, 'monitoring executive', 'Wednesday', 'B', 'ram', 'images/faces/surendra.jpg', '2018-03-19', '1992-07-15', '+91-7722952181', 'surendrakumar07161@gmail.com', 0),
(21, 'MM000109', 'Mithlesh Kumar Sahu', 3, 'monitoring executive', 'friday', 'B', 'mithlesh', 'images/faces/empty.png', '2018-03-19', '1994-08-08', '+91-8871876068', ' Currently Not available', 0),
(22, 'MM000110', 'Kuldeep Kumar', 3, 'monitoring executive', 'MONDAY', 'A', 'kuldeep', 'images/faces/empty.png', '2018-03-19', '1990-01-30', '+91- 9977303128', 'kuldeepsahu831@gmail.com', 0),
(23, 'MM000111', 'Rudra Nath Thakur', 3, 'monitoring executive', 'monday', 'A', '1124', 'images/faces/rudra.jpg', '2018-03-19', '1998-08-26', '+91-7879777817', 'rudranaththakur98@gmail.com', 0),
(24, 'MM000112', 'Likeshwar Sahu', 3, 'monitoring executive', 'saturday', 'B', 'likheshwar', 'images/faces/likh.jpg', '2018-03-19', '1992-06-20', '+91-8839850431', 'likhansahu2@gmail.com', 0),
(25, 'MM000113', 'Swadesh Sharma', 3, 'monitoring executive', 'Sunday', 'A', 'swadesh', 'images/faces/swadesh.jpg', '2018-03-19', '1994-10-06', '+91-9098144571', ' Currently Not available', 0),
(26, 'MM000116', 'Somdatt Yadav', 3, 'monitoring executive', 'Friday', 'B', 'somdatt', 'images/faces/somdatt.jpg', '2018-03-22', '1992-07-20', '+91-9165787803', ' Currently Not available', 0),
(27, 'MM000117', 'Rohit Kumar Thakur', 3, 'monitoring executive', 'wednesday', 'A', 'rohit', 'images/faces/rohit.jpg', '2018-03-26', '1994-12-28', '+91-9691218074', ' Currently Not available', 0),
(28, 'MM000118', 'Pradeep Kumar Singh', 3, 'monitoring executive', 'Wednesday', 'A', 'pradeep', 'images/faces/pradeep.jpg', '2018-03-26', '1984-07-02', '+91-8839644727', 'pradeep.kumar@sbdigicom.com', 0),
(29, 'MM000119', 'Dilip Kumar Shrivas', 3, 'monitoring executive', 'monday', 'A', 'dilip', 'images/faces/empty.png', '2018-03-26', '1994-10-29', '+91-8435709069', ' Currently Not available', 0),
(30, 'MM000122', 'Akash Kumar', 3, 'monitoring executive', 'saturday', 'A', 'akash', 'images/faces/akash.jpg', '2018-03-28', '1998-02-02', '+91-8889346493', 'akashharvanshdca@gmail.com', 0),
(31, 'MM000125', 'Suresh Kumar Yadav', 3, 'monitoring executive', 'thursday', 'B', 'suresh', 'images/faces/suresh.jpg', '2018-04-02', '1992-12-21', '+91-8878010903', ' Currently Not available', 0),
(32, 'MM000126', 'Mohammed Hasan Kamal', 3, 'monitoring executive', 'sunday', 'A', 'hasan', 'images/faces/hasan.jpg', '2018-04-05', '1998-07-11', '+91-9926060786', ' Currently Not available', 0),
(33, 'MM000132', 'Bhumika Agrawal', 3, 'monitoring executive', 'friday', 'B', 'bhumika', 'images/faces/bhumika.jpg', '2018-04-05', '1994-04-21', '+91-7748810806', ' Currently Not available', 0),
(34, 'MM000133', 'Sandeep Kumar Gendre', 3, 'monitoring executive', 'monday', 'B', 'sandeep', 'images/faces/empty.png', '2018-04-05', '1995-06-15', '+91-8435416347', ' Currently Not available', 0),
(35, 'MM000134', 'Shiv Prasad Sahu', 3, 'monitoring executive', 'tuesday', 'B', 'shiv', 'images/faces/empty.png', '2018-04-06', '1986-07-22', '+91-9753377334', ' Currently Not available', 0),
(36, 'hod', 'HOD', 7, 'HOD', 'Sunday', 'B', 'hod', 'images/faces/empty.png', '', '0001-01-01', '', ' Currently Not available', 0),
(37, 'ibc24', 'Kishore Karmakar', 1, 'HOD', 'Friday', 'A', 'ibc24', 'images/faces/empty.png', '2018-06-17', '2018-06-16', '', ' Currently Not available', 0),
(38, 'MM000136', 'Nikita Prasad', 3, 'Monitoring executive', 'Friday', 'A', 'nikita', 'images/faces/nikita.jpg', '2018-06-18', '1989-10-05', '+91-7999821062', ' Currently Not available', 0),
(41, 'MM000137', 'Tej Pratap', 3, 'Monitoring Executive', 'SUNDAY', 'C', 'tej', 'images/faces/tej.jpg', '2018-07-02', '1991-06-15', '+91-8085340099', ' Currently Not available', 0),
(42, 'MM000138', 'Nikki Upadhaya', 3, 'Monitoring Executive', 'SUNDAY', 'C', 'nikki', 'images/faces/nikki.jpg', '2018-07-02', '1992-07-11', '+91-8982773455', ' Currently Not available', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_detail`
--

CREATE TABLE `leave_detail` (
  `leave_id` int(5) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `leave_from` varchar(50) NOT NULL,
  `leave_to` varchar(50) NOT NULL,
  `leave_days` int(50) NOT NULL,
  `leave_reason` varchar(500) NOT NULL,
  `hod` int(11) NOT NULL DEFAULT '0',
  `hr` int(11) NOT NULL DEFAULT '0',
  `ll_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_detail`
--

INSERT INTO `leave_detail` (`leave_id`, `emp_id`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `leave_reason`, `hod`, `hr`, `ll_id`) VALUES
(1, '2', 'Full Day Leave', '2018-04-07', '2018-04-06', 2, 'test full day hr', 1, 1, 'LID00341'),
(2, '2', 'Half Day Leave', '2018-04-20', '', 0, 'test half day hr', 0, 1, 'LID00938'),
(3, '2', 'NH/FH  Duty', '25 December 2018', '', 0, 'test nh/fh day hr', 1, 1, 'LID00348'),
(4, '2', 'OFF Duty', '2018-04-17', '', 0, 'test off hr', 1, 1, 'LID00836'),
(5, '1', 'Full Day Leave', '2018-04-13', '2018-04-13', 0, 'test full hod', 1, 1, 'LID00756'),
(6, '1', 'Half Day Leave', '2018-04-20', '', 0, 'test half hod', 1, 1, 'LID00927'),
(7, '1', 'NH/FH  Duty', '26 January 2019', '', 0, 'test nh/fh hod', 1, 1, 'LID00629'),
(8, '1', 'OFF Duty', '2018-04-21', '', 0, 'test off hod', 1, 1, 'LID00906'),
(9, '3', 'Full Day Leave', '2018-04-14', '2018-04-14', 0, 'test full emp', 1, 1, 'LID00453'),
(10, '3', 'Half Day Leave', '2018-04-12', '', 0, 'test half emp', 1, 1, 'LID00876'),
(11, '3', 'NH/FH  Duty', '25 December 2018', '', 0, 'test nh/fh emp', 1, 1, 'LID00754'),
(12, '3', 'OFF Duty', '2018-04-23', '', 0, 'dsf', 0, 1, 'LID00018'),
(13, '3', 'NH/FH  Duty', '2014-06-14', '', 0, 'checking date', 1, 1, 'LID00762'),
(14, '2', 'Full Day Leave', '2018-04-14', '2018-04-29', 15, 'testinf full day leave hr', 1, 1, 'LID00509'),
(15, '2', 'Full Day Leave', '2018-04-14', '2018-07-20', 97, 'testing full day leave of three months', 1, 1, 'LID00054'),
(16, '3', 'Full Day Leave', '2018-04-14', '2018-04-14', 1, 'testing one day leave', 1, 1, 'LID00762'),
(17, '3', 'Full Day Leave', '2018-04-20', '2018-04-29', 1, 'testing in server 192.168.70.32\r\n', 0, 1, 'LID00079'),
(18, '3', 'Half Day Leave', '05-07-2018', '', 1, '', 1, 0, 'LID00146'),
(19, '3', 'Full Day Leave', '2018-06-16', '2018-06-30', 1, 'Due to Exam', 1, 0, 'LID00809'),
(20, '3', 'Full Day Leave', '2018-06-16', '2018-06-30', 15, 'Exam', 0, 1, 'LID00346'),
(21, '3', 'Half Day Leave', '2018-06-16', '', 1, 'Have work in Bank', 0, 1, 'LID00175'),
(22, '3', 'NH/FH  Duty', '2014-02-02', '', 1, 'Have some work in home', 0, 0, 'LID00412'),
(23, '3', 'OFF Duty', '2018-06-17', '', 1, 'no extra member in department', 0, 0, 'LID00589'),
(24, '1', 'Full Day Leave', '2018-06-16', '2018-06-30', 15, 'testing', 0, 0, 'LID00402'),
(25, '2', 'Full Day Leave', '2018-06-23', '2018-06-23', 1, 'test', 0, 0, 'LID00973'),
(26, '2', 'Full Day Leave', '2018-06-25', '2018-06-30', 6, 'test ', 0, 0, 'LID00291'),
(27, '2', 'Full Day Leave', '2018-06-30', '2018-06-30', 1, 'bbxc', 0, 0, 'LID00543'),
(28, '2', 'Full Day Leave', '2018-07-01', '2018-07-01', 1, 'for exam', 0, 0, 'LID00317'),
(29, '2', 'Full Day Leave', '2018-06-22', '2018-06-23', 2, 'sdfs', 0, 0, 'LID00027'),
(30, '2', 'Half Day Leave', '2018-06-22', '0000-00-00', 1, 'fgdf', 1, 1, 'LID00430'),
(31, '2', 'NH/FH  Duty', '2014-06-14', '0000-00-00', 1, 'erdt', 0, 0, 'LID00206'),
(32, '2', 'OFF Duty', '2018-06-22', '0000-00-00', 1, 'jteu', 0, 0, 'LID00897'),
(33, '2', 'Full Day Leave', '2018-06-23', '2018-06-24', 2, 'check hr full day', 0, 0, 'LID00241'),
(34, '2', 'Half Day Leave', '2018-06-23', '0000-00-00', 1, 'check hr half day', 1, 0, 'LID00073'),
(35, '2', 'NH/FH  Duty', '2014-02-14', '0000-00-00', 1, 'check hr nh/fh day', 1, 0, 'LID00156'),
(36, '2', 'OFF Duty', '2018-06-23', '0000-00-00', 1, 'check hr off duty work', 1, 0, 'LID00759'),
(37, '1', 'Full Day Leave', '2018-06-23', '2018-06-30', 8, 'check hod full day leave', 0, 0, 'LID00493'),
(38, '1', 'Half Day Leave', '2018-06-23', '0000-00-00', 1, 'check half day leave', 1, 0, 'LID00832'),
(39, '1', 'NH/FH  Duty', '2014-02-14', '0000-00-00', 1, 'check hod nf/hf ', 1, 0, 'LID00871'),
(40, '1', 'OFF Duty', '2018-06-23', '0000-00-00', 1, 'hdfs', 1, 0, 'LID00964'),
(41, '3', 'Full Day Leave', '2018-06-23', '2018-06-23', 1, 'jkjh', 0, 0, 'LID00190'),
(42, '3', 'Half Day Leave', '2018-06-23', '0000-00-00', 1, 'dfg', 1, 0, 'LID00470'),
(43, '3', 'NH/FH  Duty', '2014-02-14', '0000-00-00', 1, 'cghfgh', 1, 0, 'LID00760'),
(44, '3', 'OFF Duty', '2018-06-13', '0000-00-00', 1, 'yut', 1, 0, 'LID00498'),
(45, '6', 'Full Day Leave', '2018-06-26', '2018-06-30', 5, 'Testing of mail function in employment portal ', 1, 0, 'LID00691'),
(46, '7', 'Full Day Leave', '2018-06-26', '2018-06-30', 5, 'testing', 1, 0, 'LID00139'),
(47, '7', 'Full Day Leave', '2018-06-26', '2018-06-30', 5, 'fgtry', 1, 0, 'LID00753'),
(48, '7', 'Full Day Leave', '2018-06-26', '2018-06-29', 4, 'trury', 0, 1, 'LID00791'),
(49, '6', 'Full Day Leave', '2018-06-28', '2018-06-28', 1, 'test prapose', 0, 1, 'LID00254'),
(50, '7', 'Full Day Leave', '2018-06-30', '2018-07-01', 2, 'TEST', 1, 1, 'LID00849'),
(51, '7', 'Full Day Leave', '2018-07-12', '2018-07-13', 2, 'testing', 1, 0, 'LID00765'),
(52, '7', 'Half Day Leave', '2018-07-11', '0000-00-00', 1, 'testing', 0, 1, 'LID00619'),
(53, '7', 'NH/FH  Duty', '2014-02-14', '0000-00-00', 1, 'testing', 1, 1, 'LID00640'),
(54, '7', 'OFF Duty', '2018-07-25', '0000-00-00', 1, 'test', 1, 1, 'LID00913');

-- --------------------------------------------------------

--
-- Table structure for table `right`
--

CREATE TABLE `right` (
  `rid` int(5) NOT NULL,
  `eid` int(5) NOT NULL,
  `att` int(5) NOT NULL DEFAULT '0',
  `hod` int(5) NOT NULL DEFAULT '0',
  `hr` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `right`
--

INSERT INTO `right` (`rid`, `eid`, `att`, `hod`, `hr`) VALUES
(2, 2, 1, 0, 0),
(3, 3, 1, 0, 0),
(5, 36, 1, 1, 0),
(6, 37, 1, 1, 0),
(7, 7, 0, 0, 0),
(8, 1, 1, 1, 0),
(9, 4, 1, 0, 1),
(10, 10, 1, 0, 0),
(11, 11, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shift_time`
--

CREATE TABLE `shift_time` (
  `s_id` int(5) NOT NULL,
  `s_in` varchar(50) NOT NULL,
  `s_out` varchar(50) NOT NULL,
  `s_grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift_time`
--

INSERT INTO `shift_time` (`s_id`, `s_in`, `s_out`, `s_grade`) VALUES
(1, '6:00', '3:00', 'A'),
(2, '3:00', '12:00', 'B'),
(3, '10:00', '7:00', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `wish`
--

CREATE TABLE `wish` (
  `id` int(5) NOT NULL,
  `tto` varchar(100) NOT NULL,
  `bby` varchar(100) NOT NULL,
  `wish` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `reply` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `r` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish`
--

INSERT INTO `wish` (`id`, `tto`, `bby`, `wish`, `reply`, `r`) VALUES
(1, 'No data ', '4', 'This is a testing', '', 0),
(2, 'hr', '4', 'happy Birthday', 'thanks', 1),
(3, 'hod', '4', 'Happiest birthday', '', 0),
(4, 'hr', '4', 'God bless You!', 'thanks', 1),
(10, 'MM000131', '4', 'Happy birthday Pooja', 'Thank You', 1),
(11, 'MM000130', '4', 'Happy Birthday SiyaRam', 'Happy Birthday ', 1),
(12, 'MM000116', '4', 'Wish You A Very Happy Birthday May God Bless You!!!!!', '', 0),
(13, 'MM000129', '4', 'Happy Birthday ', '', 0),
(14, 'MM000129', '5', 'happy birth day to me', '', 0),
(15, 'MM000107', '4', 'many many happy returns of the day', 'Thank u....', 1),
(16, 'MM000107', '17', 'wish u very very happy birtday mam god bless u', 'Thank u....', 1),
(17, 'MM000107', '14', 'WISH YOU HAPPY BIRTH DAY...........', 'Thank u....', 1),
(18, 'MM000107', '18', ' HAPPY BIRTHDYA RITU ', 'Thank u....', 1),
(19, 'MM000107', '13', 'HAPPY BIRTH DAY TO YOU........', 'Thank u....', 1),
(20, 'MM000107', '26', 'Wish You A Very Happy Birthday ', 'Thank u....', 1),
(21, 'MM000107', '41', 'MANNY MANNY RETURNS OF THE DAY AND WISH YOU HAPPY BIRTHDAY MADAM', 'Thank u....', 1),
(22, 'MM000107', '4', 'happy birth day ritu', 'Thank u....', 1),
(23, 'MM000107', '5', 'happy birth day ritu', 'Thank u....', 1),
(24, 'MM000109', '4', 'Many many happy returns Of The day', 'Thank u mam.....', 1),
(25, 'MM000109', '9', 'Happy Birthday ', 'Thank u mam.....', 1),
(26, 'MM000109', '7', 'Many  many happy Returns of the day....', 'Thank u mam.....', 1),
(27, 'MM000109', '8', 'wish you a happy return of the day.', 'Thank u mam.....', 1),
(28, 'MM000109', '15', 'HAPPY BIRTHDAY ......', 'Thank u mam.....', 1),
(29, 'MM000109', '20', ' जन्म दिवस की ढेर सारी शुभकामनाएं ...', 'Thank u mam.....', 1),
(30, 'MM000105', '22', 'HAPPY BIRTHDAY DEAR ', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(31, 'MM000105', '15', 'Happy Birthday Bhai jan...many many returns of day..', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(32, 'MM000105', '25', 'HAPPY BIRTHDAY BHAI....', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(33, 'MM000105', '23', 'HAPPY BIRTHDAY BHAI KO.....जन्मदिन की हार्दिक शुभकामनाएं......', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(34, 'MM000105', '4', 'Happy Birthday Shajan....', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(35, 'MM000105', '7', 'Many Many happy Returns Of The Day  Shajan', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(36, 'MM000105', '41', 'Happy birthday shajan ', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(37, 'MM000105', '20', 'जन्म दिन की हार्दिक शुभकामनाएं .......', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(38, 'MM000105', '9', 'Happy Birthday \r\nsamosa nahi mila', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(39, 'MM000105', '9', 'Happy Birthday ....... coffee bhi nahi mili', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(40, 'MM000105', '9', 'Happy Birthday ....... tea bhi nahi mili', 'thanku sooooooooooooooooooo muchhhhhhhhhhhhhhh', 1),
(41, 'MM000111', '26', 'MANY MANY  RETURNS OF THE DAY ,HAPPY BIRTH DAY ', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dept_detail`
--
ALTER TABLE `dept_detail`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `emp_detail`
--
ALTER TABLE `emp_detail`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `emp_code` (`emp_code`);

--
-- Indexes for table `leave_detail`
--
ALTER TABLE `leave_detail`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `right`
--
ALTER TABLE `right`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `shift_time`
--
ALTER TABLE `shift_time`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `wish`
--
ALTER TABLE `wish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept_detail`
--
ALTER TABLE `dept_detail`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `emp_detail`
--
ALTER TABLE `emp_detail`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `leave_detail`
--
ALTER TABLE `leave_detail`
  MODIFY `leave_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `right`
--
ALTER TABLE `right`
  MODIFY `rid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `shift_time`
--
ALTER TABLE `shift_time`
  MODIFY `s_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wish`
--
ALTER TABLE `wish`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
