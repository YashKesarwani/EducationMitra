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
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `coname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`coid`, `coname`) VALUES
(1, 'Advanced diploma in Dredging technology '),
(2, 'Appreciation Programme on Citizen Journalism'),
(3, 'Bachelor in Hotel Management'),
(4, 'Bachelor of Architecture '),
(5, 'Bachelor of Architecture Interior Design'),
(6, 'Bachelor of Arts & Bachelor of Law'),
(7, 'Bachelor of Arts (General) '),
(8, 'Bachelor of Arts Acient Indian Culture'),
(9, 'Bachelor of Arts Arabic (Honors)'),
(10, 'Bachelor of Arts Bengali (Honors)'),
(11, 'Bachelor of Arts Business Economics (Honors)'),
(12, 'Bachelor of Arts Economics'),
(13, 'Bachelor of Arts Economics (Honors)'),
(14, 'Bachelor of Arts Education'),
(15, 'Bachelor of Arts English '),
(16, 'Bachelor of Arts English (Honors)'),
(17, 'Bachelor of Arts Folklore '),
(18, 'Bachelor of Arts Geography'),
(25, 'Master of Buisness Administration'),
(20, 'Bachelor of Arts Gujarati '),
(21, 'Bachelor of Computer Application'),
(22, 'Bachelor of Science'),
(23, 'Bachelor of Technology'),
(24, 'Bachelor of Commerce'),
(26, 'Bachelor of Arts in Animation & Computer Graphics'),
(27, 'Bachelor of Arts in Animation and Graphic Design'),
(28, 'Bachelor of Arts in Digital Film Making & Animation'),
(29, 'Bachelor of Arts in Multimedia'),
(30, 'Mechanical animation'),
(31, 'M.Sc in Cyber Forensics and Information Security'),
(32, 'Bachelor of Multimedia Communication'),
(33, 'Bachelor of Science in Animation & Gaming'),
(34, 'Bachelor of Science in Animation and Multimedia'),
(36, 'Bachelor of Science in Animation Film Making'),
(37, 'Bachelor of Science in Animation'),
(38, 'Bachelor of Science in Digital Media'),
(39, 'Bachelor of Science in Games Development'),
(40, 'Bachelor of Science in Media Entertainment & Film Technology'),
(41, 'Bachelor of Science in Multimedia (Animation and Graphics)'),
(42, 'Bachelor of Sciences in Animation Multimedia Technology'),
(43, 'Master of Laws(L.L.M.)'),
(44, 'Master of Business Law'),
(45, 'Doctor of Philosophy'),
(46, 'PG Diploma in Information Security and System Administration '),
(47, 'Certified Ethical Hacker Course '),
(48, 'Diploma in Computer Application'),
(49, 'Advance Diploma in Cyber Security(ADCS)'),
(50, 'Diploma in Security and intelligence Management'),
(51, 'Diploma in Cyber Security'),
(52, 'Post Graduate Diploma in Cyber Law and Information Security (PGDCIS)'),
(53, 'Post Graduate Diploma in Cyber Security'),
(54, 'Certified Information Security Manager (CISM)'),
(55, 'Certified Information Systems Security Professional (CISSP)'),
(56, 'Certified Security Compliance Specialist (CSCS)'),
(57, 'Certified Wireless Security Professional (CWSP)'),
(58, 'Check Point Certified Security Administrator (CCSA)'),
(59, 'Check Point Certified Security Expert (CCSE)'),
(60, 'Cisco Certified Network Associate Security (CCNA Security)'),
(61, 'Bachelor of Fine Arts in Animation'),
(62, 'Master of Technology'),
(63, 'Bachelor of Management Studies'),
(64, 'Bachelor of Business Studies'),
(65, 'Bachelor of Medicine and Bachelor of Surgery'),
(66, 'Master of Arts (MA)'),
(67, 'Master of Philosophy(M.Phil.)'),
(68, 'Bachelor in Journalism'),
(71, 'B.A-Photography '),
(89, 'Bachelor of Science in Applied Microbiology'),
(90, 'Bachelor of Science in Clinical Microbiology'),
(91, 'Bachelor of Science in Industrial Microbiology'),
(92, 'Bachelor of Science in Microbiology'),
(93, 'Bachelor of Science in Food Microbiology'),
(94, 'Master of Science in Applied Microbiology'),
(95, 'Master of Science in Clinical Microbiology'),
(96, 'Master of Science in Industrial Microbiology'),
(97, 'Master of Science in Medical Microbiology'),
(98, 'Master of Science in Microbiology'),
(99, 'Master of Science in Microbal Genetics and Bioinformatics'),
(100, 'Bachelors of Laws(L.L.B.)');
