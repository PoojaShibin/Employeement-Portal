-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2018 at 01:44 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `desktop`
--

-- --------------------------------------------------------

--
-- Table structure for table `dept_detail`
--

CREATE TABLE IF NOT EXISTS `dept_detail` (
  `dept_id` int(5) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
(7, 'HOD');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `eid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`eid`, `name`, `department`, `designation`, `contact`, `email`, `password`) VALUES
(1, 'Sharadindu Shekhar', 'Media Monitoring', 'Sr. Incharge', '8770597100', 'sharadindu.shekhar@ibc24.in', 'shekhar'),
(2, 'Sharadindu Bhushan', 'Media Monitoring', ' Incharge', '7580975000', 'sharadindu.bhusan@ibc24.in', 'bhushan'),
(3, 'Shankar Sen', 'Media Monitoring', ' Incharge', '9977500253', 'shankar.sen@ibc24.in', 'shankar'),
(4, 'Vikas Maurya', 'IT', 'System Admin', '9907439690', 'vikas.maurya@sbdigicom.com', 'vikas'),
(5, 'SiyaRam', 'IT', 'System Admin', '8962647405', 'siyaram@sbdigicom.com', 'siyaram'),
(6, 'Kshitij Thakur', 'IT', 'System Admin', '7806044466', 'kshijit.thakur@sbdigicom.com', 'kshitij'),
(7, 'Pooja P Raj', 'IT', 'Developer', '9424284027', 'pooja.raj@sbdigicom.com', 'puja'),
(8, 'Mukeshvishwa Karma', 'Admin', 'Incharge', '8965000143', 'Mukesh.Vishwakama@sbdigicom.com', 'mukeshvishwa'),
(9, 'Madhumita Gautam', 'Reception', 'Receptionist', '7000628344', 'Madhumita.Gautam@sbdigicom.com', 'madhumita'),
(10, 'Anjana James', 'Reception', 'Receptionist', '9131953039', 'Anjana.James@sbdigicom.com', 'anjana'),
(11, 'Nandkishore', 'Media Monitoring', 'Monitoring Executive', '7389262590', 'Nand.Kishore@sbdigicom.com', 'nandkishore'),
(12, 'Karan Dewangan', 'Media Monitoring', 'Monitoring Executive', '8602716760', 'Karan.Dewangan@sbdigicom.com', 'karan'),
(13, 'Mohd. Sajan', 'Media Monitoring', 'Monitoring Executive', '9039176729', 'mohammed.shajan@sbdigicom.com', 'sajan'),
(14, 'Rajan kumar Jha', 'Media Monitoring', 'Monitoring Executive', '7804068583', 'rajan.kumar@sbdigicom.com', 'rajan'),
(15, 'Surendra Kumar', 'Media Monitoring', 'Monitoring Executive', '7722952181', 'surendra.kumar@sbdigicom.com', 'surendra'),
(16, 'Mithilesh Kumar sahu', 'Media Monitoring', 'Monitoring Executive', '8871876068', 'mithlesh.kumar@sbdigicom.com', 'mithilesh'),
(17, 'Kuldeep Kumar', 'Media Monitoring', 'Monitoring Executive', '9977303128', 'kuldeep.kumar@sbdigicom.com', 'kuldeep'),
(18, 'Rudranath Thakur', 'Media Monitoring', 'Monitoring Executive', '7879777817', 'rudranath.thakur@sbdigicom.com', 'rudranath'),
(19, 'Likeshwar sahu', 'Media Monitoring', 'Monitoring Executive', '9669874209', 'likheshwar.sahu@sbdigicom.com', 'likeshwar'),
(20, 'Swadesh sharma', 'Media Monitoring', 'Monitoring Executive', '9098144571', '', 'swadesh'),
(21, 'Somdatt Yadav', 'Media Monitoring', 'Monitoring Executive', '9165787803', 'somdatt.yadav@sbdigicom.com', 'somdatt'),
(22, 'Rohit Kumar Thakur', 'Media Monitoring', 'Monitoring Executive', '9691218074', 'rohit.thakur@sbdigicom.com', 'rohit'),
(23, 'Pradeep kumar Singh', 'Media Monitoring', 'Monitoring Executive', '8839644727', 'pradeep.kumar@sbdigicom.com', 'pradeep'),
(24, 'Dilip Kumar Shrivastava', 'Media Monitoring', 'Monitoring Executive', '8435709069', 'dilip.shrivas@sbdigicom.com', 'dilip'),
(25, 'Akash Kumar', 'Media Monitoring', 'Monitoring Executive', '8889346493', 'aakash.kumar@sbdigicom.com', 'akash'),
(26, 'Ritu Verma', 'Media Monitoring', 'Monitoring Executive', '9752446656', 'ritu.verma@sbdigicom.com', 'ritu'),
(27, 'Kaushliya Vishwakarma', 'Media Monitoring', 'Monitoring Executive', '7440794953', 'kaushlya.vishwakarma@sbdigicom.com', 'kaushliya'),
(28, 'Chandrakant Dewangan', 'Media Monitoring', 'Monitoring Executive', '9770889989', 'chandrakant.dewangan@sbdigicom.com', 'chandrakant'),
(29, 'Nikita Prasad', 'Media Monitoring', 'Monitoring Executive', '', '', 'nikita'),
(30, 'Suresh Kumar Yadav', 'Media Monitoring', 'Monitoring Executive', '8878010903', 'suresh.yadav@sbdigicom.com', 'suresh'),
(31, 'Bhumika Agrawal', 'Media Monitoring', 'Monitoring Executive', '7748810806', 'bhumika.agarwal@sbdigicom.com', 'bhumika'),
(32, 'Sandeep Kumar', 'Media Monitoring', 'Monitoring Executive', '8435416347', 'sandeep.kumar@sbdigicom.com', 'sandeep'),
(33, 'Mohd. Hasan Kamal', 'Media Monitoring', 'Monitoring Executive', '9926060786', 'mohammedhasan.kamal@sbdigicom.com', 'hasan'),
(34, 'Shiv Kumar', 'Media Monitoring', 'Monitoring Executive', '9753377334', 'shivprasad.sahu@sbdigicom.com', 'shiv'),
(35, 'Asad Ahmad ', 'IT', 'System Admin', '9755183317', 'Asad.Ahmad@sbdigicom.com', 'asad');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `link` varchar(250) NOT NULL,
  `img` varchar(150) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`lid`, `name`, `link`, `img`) VALUES
(1, 'Media Monitoring', 'http://192.168.70.1/monitoring/login', 'desktop/Media Mediamonitoring.png'),
(2, 'Oakla', 'http://www.speedtest.net/', 'desktop/okla.png'),
(3, 'World Client', 'http://mail.sbdigicom.com/WorldClient.dll?Session=GE5BU5EV1T4QQ&View=Logout', 'desktop/World Client.png');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE IF NOT EXISTS `other` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`oid`, `name`, `department`, `contact`, `email`) VALUES
(1, 'Kishore Sir', 'IT Department', '9630086006', 'Kishore.Karmakar@ibc24.in'),
(2, 'Vivek Sir', 'Media Monitoring', '0', ''),
(3, 'Ajay Sir', 'IT Department', '8319013113', 'Ajay.Verma@ibc24.in'),
(4, 'Rakesh Prashad Sir', 'Electrical', '9993027972', ''),
(5, 'Rathod  Sir', 'Electrical', '9907701949 / 9630086034 (hunting)', ''),
(6, 'Paresh  ji', 'Tata Sky  /Dish Tv /Airtel', '9131481118', ''),
(7, 'Banti Ji (Hathway Sr.)', 'Cable Operator hathway', '9893907777', ''),
(8, 'Chandar Ji', 'Cable Operator  hathway', '9329202330', ''),
(9, 'AIRTEL (Gautam JI)internet', 'AIRTEL Internet', '9893124839', ''),
(10, 'IT Dept. IBC', 'IT Dept. IBC', '9630086049', ''),
(11, 'Elxer Comm.', 'Elxer Comm.', '0771-677777 6/7/0', '');

-- --------------------------------------------------------

--
-- Table structure for table `tkt`
--

CREATE TABLE IF NOT EXISTS `tkt` (
  `tid` int(5) NOT NULL AUTO_INCREMENT,
  `eid` int(50) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `tdept` varchar(100) NOT NULL,
  `tno` varchar(100) NOT NULL,
  `treason` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `tkt_gen` int(5) NOT NULL DEFAULT '0',
  `tkt_close` int(5) NOT NULL DEFAULT '0',
  `tkt_close_who` varchar(50) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `review` varchar(250) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tkt`
--

INSERT INTO `tkt` (`tid`, `eid`, `tname`, `tdept`, `tno`, `treason`, `date`, `tkt_gen`, `tkt_close`, `tkt_close_who`, `rating`, `review`) VALUES
(1, 1, 'admin', 'Media Monitoring', 'TKT12750', 'signal Problem', '0000-00-00', 0, 0, '', '', ''),
(2, 1, 'Shekar Sir', 'Media Monitoring', 'TKT52094', 'signal Problem', '0000-00-00', 0, 0, '', '', ''),
(3, 7, 'admin', 'Media Monitoring', 'TKT51763', 'signal Problem', '2018-05-25', 0, 0, '', '', ''),
(4, 7, 'pooja.raj@sbdigicom.com', 'IT', 'TKT61745', 'checking', '2018-05-26', 0, 0, '', '', ''),
(5, 7, 'puja@gmail.com', 'IT', 'TKT91374', 'checking', '2018-05-26', 0, 0, '', '', ''),
(6, 7, 'haribc123', 'Media Monitoring', 'TKT47521', 'checking', '2018-05-26', 0, 0, '', '', ''),
(7, 7, 'Pooja P Raj', 'IT', 'TKT75410', 'checking', '2018-06-26', 1, 1, '', 'Fully Satisfied', 'Thankyou'),
(8, 7, 'Pooja P Raj', 'IT', 'TKT71234', 'checking', '2018-06-26', 1, 0, '', '', ''),
(9, 7, 'Pooja P Raj', 'IT', 'TKT76410', 'checking', '2018-06-27', 1, 0, '', '', ''),
(10, 7, 'Shekhar ', 'Media Monitoring', '', '', '0000-00-00', 0, 0, '', '', ''),
(11, 7, 'Shekhar ', 'Media Monitoring', 'TKT14627', 'Checking', '2018-06-27', 1, 1, 'Pooja P Raj', 'Fully Satisfied', 'Thankyou');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
