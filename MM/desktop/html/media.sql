-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 12:43 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `media`
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
-- Table structure for table `emp_detail`
--

CREATE TABLE IF NOT EXISTS `emp_detail` (
  `emp_id` int(5) NOT NULL AUTO_INCREMENT,
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
  `emp_del` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `emp_detail`
--

INSERT INTO `emp_detail` (`emp_id`, `emp_code`, `emp_name`, `dept_id`, `emp_designation`, `emp_off`, `s_grade`, `password`, `image`, `joindate`, `dob`, `phone`, `email`, `emp_del`) VALUES
(1, 'kriibc123', 'Krishna', 7, 'HOD', 'Sunday', 'B', '1111', 'images/faces/face12.jpg', '2018-04-08', '2017-08-23', '123654789', 'krishna@gmail.com', 0),
(2, 'haribc123', 'Hari', 6, 'HR', 'Monday', 'A', '0000', 'images/faces/face2.jpg', '2018-04-22', '2018-04-21', '+91-123654', 'hari@gmail.com', 0),
(3, 'pooibc123', 'Pooja', 1, 'Developer', 'Sunday', 'C', '12345', 'images/faces/face6.jpg', '2018-04-02', '1994-01-21', '+91-9424284027', 'pooja@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_detail`
--

CREATE TABLE IF NOT EXISTS `leave_detail` (
  `leave_id` int(5) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(50) NOT NULL,
  `leave_type` varchar(50) NOT NULL,
  `leave_from` varchar(50) NOT NULL,
  `leave_to` varchar(50) NOT NULL,
  `leave_days` int(50) NOT NULL,
  `leave_reason` varchar(500) NOT NULL,
  `hod` int(11) NOT NULL DEFAULT '0',
  `hr` int(11) NOT NULL DEFAULT '0',
  `ll_id` varchar(50) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `leave_detail`
--

INSERT INTO `leave_detail` (`leave_id`, `emp_id`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `leave_reason`, `hod`, `hr`, `ll_id`) VALUES
(1, '2', 'Full Day Leave', '2018-04-07', '2018-04-06', 2, 'test full day hr', 1, 1, 'LID00341'),
(2, '2', 'Half Day Leave', '2018-04-20', '', 0, 'test half day hr', 0, 1, 'LID00938'),
(3, '2', 'NH/FH  Duty', '25 December 2018', '', 0, 'test nh/fh day hr', 1, 1, 'LID00348'),
(4, '2', 'OFF Duty', '2018-04-17', '', 0, 'test off hr', 1, 0, 'LID00836'),
(5, '1', 'Full Day Leave', '2018-04-13', '2018-04-13', 0, 'test full hod', 1, 1, 'LID00756'),
(6, '1', 'Half Day Leave', '2018-04-20', '', 0, 'test half hod', 1, 1, 'LID00927'),
(7, '1', 'NH/FH  Duty', '26 January 2019', '', 0, 'test nh/fh hod', 1, 1, 'LID00629'),
(8, '1', 'OFF Duty', '2018-04-21', '', 0, 'test off hod', 0, 0, 'LID00906'),
(9, '3', 'Full Day Leave', '2018-04-14', '2018-04-14', 0, 'test full emp', 1, 0, 'LID00453'),
(10, '3', 'Half Day Leave', '2018-04-12', '', 0, 'test half emp', 0, 0, 'LID00876'),
(11, '3', 'NH/FH  Duty', '25 December 2018', '', 0, 'test nh/fh emp', 1, 1, 'LID00754'),
(12, '3', 'OFF Duty', '2018-04-23', '', 0, 'dsf', 0, 1, 'LID00018'),
(13, '3', 'NH/FH  Duty', '2014-06-14', '', 0, 'checking date', 1, 1, 'LID00762'),
(14, '2', 'Full Day Leave', '2018-04-14', '2018-04-29', 15, 'testinf full day leave hr', 1, 0, 'LID00509'),
(15, '2', 'Full Day Leave', '2018-04-14', '2018-07-20', 97, 'testing full day leave of three months', 1, 1, 'LID00054'),
(16, '3', 'Full Day Leave', '2018-04-14', '2018-04-14', 1, 'testing one day leave', 1, 1, 'LID00762'),
(17, '3', 'Full Day Leave', '2018-04-20', '2018-04-29', 1, 'testing in server 192.168.70.32\r\n', 0, 0, 'LID00079'),
(18, '3', 'Half Day Leave', '05-07-2018', '', 1, '', 0, 0, 'LID00146');

-- --------------------------------------------------------

--
-- Table structure for table `shift_time`
--

CREATE TABLE IF NOT EXISTS `shift_time` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT,
  `s_in` varchar(50) NOT NULL,
  `s_out` varchar(50) NOT NULL,
  `s_grade` varchar(10) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shift_time`
--

INSERT INTO `shift_time` (`s_id`, `s_in`, `s_out`, `s_grade`) VALUES
(1, '6:00', '3:00', 'A'),
(2, '3:00', '12:00', 'B'),
(3, '10:00', '7:00', 'C');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
