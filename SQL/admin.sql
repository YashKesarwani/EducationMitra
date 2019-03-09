-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2016 at 01:30 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` varchar(10) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `acontact` varchar(10) NOT NULL,
  `aemail` varchar(100) NOT NULL,
  `acity` varchar(100) NOT NULL,
  `apic` varchar(1000) NOT NULL,
  PRIMARY KEY (`aid`),
  UNIQUE KEY `aid` (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`, `acontact`, `aemail`, `acity`, `apic`) VALUES
('A001', 'ABC', 'c44fe670a873acc9ff795d2ccb183eb6e27985c1', '8946323561', 'abc@gmail.com', 'Paris', ''),
('A002', 'DEF', '2db81f291b04f6e5178491729034395043121850', '2147483647', 'def@gmail.com', 'Paris', ''),
('A003', 'XYZ', '41f6177a857b9409e1720fb69068edc97ae3f876', '2147483647', 'addf@gmail.com', 'Paris', ''),
('A004', 'Yash', '612e9463accae2cac96562a83cbe0d97141f04ac', '23356940841', 'sfdf@gmail.com', 'Paris', 'Adminpics/anim1.jpg'),
('A005', 'Check', 'd56d985300d4b52eb6e189be006f44f8d23c5ec9', '9865742360', 'check@yahoo.in', 'checkcity', '');
