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
-- Table structure for table `updatemaster`
--

CREATE TABLE IF NOT EXISTS `updatemaster` (
  `upid` int(11) NOT NULL AUTO_INCREMENT,
  `updates` varchar(1000) NOT NULL,
  PRIMARY KEY (`upid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `updatemaster`
--

INSERT INTO `updatemaster` (`upid`, `updates`) VALUES
(2, 'IBPS-CWE Specialist-V'),
(3, 'IBPS-CWE CLERK-VI MAINS'),
(4, 'RBI Officers Gr-B'),
(5, 'RBI Officer in(Gr-B)Advt No. 2A/2016-17'),
(6, 'UPSC-CDS Exam(II)2017'),
(7, 'UPSC-NDA  & NA Exam(II)2017');
