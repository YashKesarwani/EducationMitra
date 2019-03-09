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
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `interest` varchar(30) NOT NULL,
  `course` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `upic` varchar(1000) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `fname`, `lname`, `pass`, `mail`, `mobile`, `interest`, `course`, `city`, `upic`) VALUES
(29, 'Suraj', 'Kumar', '0abd0df55eb02d47bf2d3e301d3310c4d084e10b', 'suraj@sun.com', '9674851023', 'Arts', 'Bachelor in Hotel Management', 'Murshidabad ', 'Userpics/a5.jpg');
