
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2018 at 08:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u547885114_gate`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_log`
--

CREATE TABLE IF NOT EXISTS `acc_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` varchar(99) NOT NULL,
  `date` varchar(99) NOT NULL,
  `time` varchar(99) NOT NULL,
  `action` varchar(99) NOT NULL,
  `fname` varchar(99) NOT NULL,
  `lname` varchar(99) NOT NULL,
  `mname` varchar(99) NOT NULL,
  `pos` varchar(99) NOT NULL,
  `type` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `acc_log`
--

INSERT INTO `acc_log` (`id`, `timestamp`, `date`, `time`, `action`, `fname`, `lname`, `mname`, `pos`, `type`) VALUES
(1, '1518941183', '02-18-18', '04:06:23 PM', 'LOG IN', 'Ricardo', 'Dalisay', 'De Leon', 'Administrator', 'Administrator'),
(2, '1518943141', '02-18-18', '04:39:01 PM', 'LOG OUT', 'Ricardo', 'Dalisay', 'De Leon', 'Administrator', 'Administrator'),
(3, '1518943144', '02-18-18', '04:39:04 PM', 'LOG IN', 'Ricardo', 'Dalisay', 'De Leon', 'Administrator', 'Administrator'),
(4, '1518943656', '02-18-18', '04:47:36 PM', 'LOG OUT', 'Ricardo', 'Dalisay', 'De Leon', 'Administrator', 'Administrator'),
(5, '1518943668', '02-18-18', '04:47:48 PM', 'LOG IN', 'Christian Jay', 'Campos', 'C', 'Tester', 'User'),
(6, '1518943732', '02-18-18', '04:48:52 PM', 'LOG OUT', 'Christian Jay', 'Campos', 'C', 'Tester', 'User'),
(7, '1518943748', '02-18-18', '04:49:08 PM', 'LOG IN', 'Angelica', 'Hermozura', 'H', 'Tester', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(28) NOT NULL,
  `lname` varchar(28) NOT NULL,
  `mname` varchar(28) NOT NULL,
  `email` varchar(28) NOT NULL,
  `pwd` varchar(28) NOT NULL,
  `num` varchar(28) NOT NULL,
  `position` varchar(28) NOT NULL,
  `avatar` varchar(99) NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `mname`, `email`, `pwd`, `num`, `position`, `avatar`, `type`) VALUES
(1, 'Ricardo', 'Dalisay', 'De Leon', 'admin@admin.com', 'admin', '09123456789', 'Administrator', 'default.png', 0),
(2, 'Angelica', 'Hermozura', 'H', 'angelica@hermozura.com', '123456', '09123456788', 'Tester', 'admin/5a893bfb1436b1.35130411.jpg', 1),
(5, 'Christian Jay', 'Campos', 'C', 'cj@campos.com', '123456', '09876543212', 'Tester', 'admin/5a893d975ea401.44173967.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `author` varchar(28) NOT NULL,
  `status` int(1) NOT NULL,
  `timestamp` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attemp`
--

CREATE TABLE IF NOT EXISTS `attemp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_o`
--

CREATE TABLE IF NOT EXISTS `attendance_o` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(28) NOT NULL,
  `timestamp` varchar(28) NOT NULL,
  `date_check` varchar(28) NOT NULL,
  `action` int(11) NOT NULL,
  `sms` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_t`
--

CREATE TABLE IF NOT EXISTS `attendance_t` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `barcode` varchar(28) NOT NULL,
  `date_check` varchar(28) NOT NULL,
  `mti` varchar(28) NOT NULL,
  `mto` varchar(28) NOT NULL,
  `ati` varchar(28) NOT NULL,
  `ato` varchar(28) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sms_device`
--

CREATE TABLE IF NOT EXISTS `sms_device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_id` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sms_device`
--

INSERT INTO `sms_device` (`id`, `sms_id`) VALUES
(1, '71018');

-- --------------------------------------------------------

--
-- Table structure for table `sms_server`
--

CREATE TABLE IF NOT EXISTS `sms_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(21) NOT NULL,
  `lname` varchar(21) NOT NULL,
  `number` varchar(21) NOT NULL,
  `barcode` varchar(12) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `action` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `db_name` varchar(22) NOT NULL,
  `installed_date` varchar(22) NOT NULL,
  `admin` int(11) NOT NULL,
  `last_logged` varchar(22) NOT NULL,
  `number` varchar(15) NOT NULL,
  `sms_mode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id`, `db_name`, `installed_date`, `admin`, `last_logged`, `number`, `sms_mode`) VALUES
(1, 'wup_gate', '30-12-2017', 1, '1518943732', '09123456789', 0);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(3) NOT NULL,
  `type` int(1) NOT NULL,
  `mtif` varchar(28) NOT NULL,
  `mtis` varchar(28) NOT NULL,
  `mtof` varchar(28) NOT NULL,
  `mtos` varchar(28) NOT NULL,
  `atif` varchar(28) NOT NULL,
  `atis` varchar(28) NOT NULL,
  `atof` varchar(28) NOT NULL,
  `atos` varchar(28) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `name`, `type`, `mtif`, `mtis`, `mtof`, `mtos`, `atif`, `atis`, `atof`, `atos`) VALUES
(1, 'jhs', 1, '60000', '73000', '110000', '114500', '123000', '153000', '160000', '170000'),
(2, 'shs', 0, 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open'),
(3, 'col', 0, 'open', 'open', 'open', 'open', 'open', 'open', 'open', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(28) NOT NULL,
  `fname` varchar(28) NOT NULL,
  `mname` varchar(28) NOT NULL,
  `users_barcode` varchar(22) NOT NULL,
  `card` varchar(22) NOT NULL,
  `cp_num` varchar(15) NOT NULL,
  `department` varchar(12) NOT NULL,
  `grade` varchar(8) NOT NULL,
  `img` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
