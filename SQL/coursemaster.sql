-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2016 at 01:31 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `educatio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursemaster`
--

CREATE TABLE IF NOT EXISTS `coursemaster` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `coname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=101 ;

--
-- Dumping data for table `coursemaster`
--

INSERT INTO `coursemaster` (`coid`, `coname`) VALUES
(4, 'Bachelor of Architecture '),
(7, 'Bachelor of Arts (General) '),
(21, 'Bachelor of Computer Application'),
(22, 'Bachelor of Science'),
(23, 'Bachelor of Technology'),
(24, 'Bachelor of Commerce'),
(31, 'M.Sc in Cyber Forensics and Information Security'),
(37, 'Bachelor of Science in Animation'),
(43, 'Master of Laws(L.L.M.)'),
(45, 'Doctor of Philosophy'),
(47, 'Certified Ethical Hacker Course '),
(48, 'Diploma in Computer Application'),
(62, 'Master of Technology'),
(63, 'Bachelor of Management Studies'),
(64, 'Bachelor of Business Administration'),
(65, 'Bachelor of Medicine and Bachelor of Surgery'),
(66, 'Master of Arts (MA)'),
(67, 'Master of Philosophy(M.Phil.)'),
(68, 'Bachelor in Journalism'),
(92, 'Bachelor of Science in Microbiology'),
(98, 'Master of Science in Microbiology'),
(100, 'Bachelors of Laws(L.L.B.)');
