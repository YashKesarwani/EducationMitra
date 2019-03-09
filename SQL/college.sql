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
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `colid` varchar(10) NOT NULL DEFAULT '',
  `colname` varchar(100) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`colid`),
  UNIQUE KEY `colid` (`colid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`colid`, `colname`, `address`) VALUES
('C0001', 'Indian Institute of Technology, Bombay', 'Mumbai'),
('C0002', 'Indian Institute of Technology, Kanpur', 'Kanpur'),
('C0003', 'Indian Institute of Technology, Delhi', 'Delhi'),
('C0004', ' Indian Institute of Technology, Kharagpur', 'Kharagpur'),
('C0005', ' Indian Institute of Technology, Madras', 'Chennai'),
('C0006', ' Indian Institute of Technology, Guwahati', 'Guwahati'),
('C0007', ' Indian Institute of Technology, Roorkee', 'Roorkee'),
('C0008', 'Banaras Hindu University', 'Varanasi'),
('C0009', ' College of Engineering, Anna University', 'Chennai'),
('C0010', ' Jadavpur University', 'Kolkata'),
('C0011', 'All India Institute of Medical Sciences', 'New Delhi'),
('C0012', 'Lady Hardinge Medical College', 'New Delhi'),
('C0013', 'Academy of Maritime Education and Training (AMET)', 'Kanathur'),
('C0014', 'IIM Ahmedabad', 'Ahmedabad'),
('C0015', 'IIM Calcutta', 'Kolkata'),
('C0016', 'IIM Bangalore', 'Bangalore'),
('C0017', 'IIM Lucknow', 'Lucknow'),
('C0018', 'Faculty of Management Studies', 'New Delhi'),
('C0019', 'IIM Kozhikode', 'Kerala'),
('C0020', 'IIM Indore', 'Indore'),
('C0021', 'Christ University', 'Bangalore'),
('C0022', 'SRM University', 'Chennai'),
('C0023', 'Madras Christian College', 'Chennai'),
('C0024', 'Symbiosis Institute of Computer Studies & Research', 'Pune'),
('C0025', 'Birla Institute of Technology', 'Ranchi'),
('C0026', 'Presidency College', 'Karnataka'),
('C0027', 'Xavier Institute of Computer Application', 'Ahmedabad'),
('C0028', 'Delhi University', 'New Delhi'),
('C0029', 'Allahabad University', 'Allahabad'),
('C0030', 'National Institute of Design', 'Ahmedabad'),
('C0031', 'Industrial Design Centre (IDC )', 'Mumbai'),
('C0032', 'Indian Institute of Digital Art & Animation (IIDAA )', 'Kolkata'),
('C0033', 'Film and Television Institute of India (FTII)', 'Pune'),
('C0034', 'Birla Institute of Technology', 'Noida'),
('C0035', 'MAEER’s MIT Institute of Design', 'Pune'),
('C0036', 'FX SCHOOL', 'Mumbai'),
('C0037', 'Frameboxx', 'Mumbai'),
('C0038', 'Arena Animation', 'Various Branches'),
('C0039', 'National Law school of India University', 'Bangalore'),
('C0040', 'National Law University', 'Jodhpur'),
('C0041', 'National University of Juridical Sciences', 'Kolkata'),
('C0042', 'National Academy of Legal Studies', 'Hyderabad'),
('C0043', 'Faculty of Law, DU', 'New Delhi'),
('C0044', 'Indian Law Institute', 'New Delhi'),
('C0045', 'University Law School', 'Varanasi'),
('C0046', 'DOEACC, Calicut', 'Calicut'),
('C0047', 'Reliance World Outlets', NULL),
('C0048', 'Institute of Information Security', 'Kolkata'),
('C0049', 'Certified Professional Forensics Consultants', NULL),
('C0050', 'University of Madras', 'Chennai, Tamil Nadu'),
('C0051', 'School of Planning and Architecture', 'New Delhi'),
('C0052', 'Sir JJ College of Architecture', 'Mumbai'),
('C0053', 'National Institute of Technology', 'Thiruchirapalli, Tamil Nadu'),
('C0054', 'Lovely Professional University', 'Jalandhar, Punjab '),
('C0055', ' Chandigarh College of Architecture', 'Chandigarh'),
('C0056', 'Jamia Millia Islamia University (JMI)', 'New Delhi'),
('C0057', 'Lady Shriram College for Women (LSR)', 'Lajpat Nagar-IV, Delhi'),
('C0058', 'Loyola College', 'Sterling Road, Nungambakkam, Chennai'),
('C0059', 'St. Stephen''s College', 'North Campus, Delhi'),
('C0060', 'St. Xavier''s College', 'Mumbai'),
('C0061', 'The Oxford College of Science', 'Bangalore, Karnataka'),
('C0062', 'Shri Ram College of Commerce', 'New Delhi'),
('C0063', 'Center of Excellence in Digital Forensics', 'Chennai, Tamil Nadu'),
('C0064', 'Tata Institute of Fundamental Research', 'Mumbai'),
('C0065', 'Institute of Genetic Engineering, Badu', 'Kolkata'),
('C0066', 'Indian Institute of Science', 'Bangalore'),
('C0067', 'Jawaharlal Nehru University', NULL),
('C0068', 'Hacker School', 'Hyderabad'),
('C0069', 'Technocorp', 'Pune'),
('C0070', 'Punjab Technical University', 'Jalandhar'),
('C0071', 'Manipal Institute of Technology', 'Mangalore'),
('C0072', 'Mumbai University', 'Mumbai'),
('C0073', 'Motilal Nehru National University of Technology', 'Allahabad'),
('C0074', 'Institute of Management Studies (IMS)', 'Noida'),
('C0075', ' All India Institute of Medical Sciences (AIIMS),', 'Delhi'),
('C0076', ' Christian Medical College (CMC), ', 'Vellore'),
('C0077', ' Armed Forces Medical College (AFMC), ', 'Pune'),
('C0078', ' JIPMER College, ', 'Puducherry'),
('C0079', ' Maulana Azad Medical College (MAMC), ', 'Delhi'),
('C0080', 'Lady Hardinge Medical College (LHMC), ', 'Delhi'),
('C0081', ' Madras Medical College, ', 'Chennai'),
('C0082', ' Grant Medical College, ', 'Mumbai'),
('C0083', ' Kasturba Medical College (KMC), ', 'Manipal'),
('C0084', 'Mudra Institute of Communications, ', 'Ahmedabad'),
('C0085', 'The Indian Institute of Mass Communication (IIMC', NULL),
('C0086', 'THE TIMES SCHOOL OF JOURNALISM', NULL),
('C0087', 'Symbiosis Institute of Mass Communication, ', 'Pune'),
('C0088', 'The Xavier Institute of Communications (XIC)', NULL),
('C0089', 'Sardar Patel Institute of Applied Science (SPIAS), ', 'Anand (Gujarat)'),
('C0090', 'North East Frontier Technical University, ', 'Arunachal Pradesh'),
('C0091', 'Himalayan University:Faculty of Agriculture and Horticulture, ', 'Itanagar, Arunachal Pradesh'),
('C0092', 'Kurukshetra University : Department of Microbiology, ', 'Kurukshetra (Haryana)'),
('C0093', 'GITAM University School of Life Sciences of Institute of Science ', 'Vishakapatnam (Andhra Pradesh)'),
('C0094', 'Mount Carmel College, ', 'Bangalore, Karnataka');
