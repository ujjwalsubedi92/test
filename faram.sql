-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2014 at 08:01 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faram`
--

-- --------------------------------------------------------

--
-- Table structure for table `addiction`
--

CREATE TABLE IF NOT EXISTS `addiction` (
  `addictionid` int(30) NOT NULL AUTO_INCREMENT,
  `addiction` varchar(30) DEFAULT NULL,
  `personid` int(30) DEFAULT NULL,
  PRIMARY KEY (`addictionid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cookingstuff`
--

CREATE TABLE IF NOT EXISTS `cookingstuff` (
  `cookingstuffid` int(30) NOT NULL AUTO_INCREMENT,
  `cookingstuff` varchar(30) DEFAULT NULL,
  `personid` int(30) DEFAULT NULL,
  PRIMARY KEY (`cookingstuffid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `disease` varchar(30) NOT NULL,
  `personid` int(30) NOT NULL,
  `id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pageno` int(20) NOT NULL,
  `houseno` int(20) NOT NULL,
  `toleid` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `collecter` varchar(30) NOT NULL,
  `giver` varchar(30) NOT NULL,
  PRIMARY KEY (`pageno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `personid` int(20) NOT NULL,
  `sn` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `age` int(20) NOT NULL,
  `momname` varchar(30) NOT NULL,
  `dadname` varchar(30) NOT NULL,
  `relation` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `marital_caste` varchar(30) NOT NULL,
  `child_born_male` int(10) NOT NULL,
  `child_born_female` int(10) NOT NULL,
  `child_born_intersex` int(10) NOT NULL,
  `child_alive_male` int(10) NOT NULL,
  `child_alive_female` int(10) NOT NULL,
  `child_alive_intersex` int(10) NOT NULL,
  `education_level` varchar(30) NOT NULL,
  `education_subject` varchar(30) NOT NULL,
  `abroad_study` varchar(30) NOT NULL,
  `abroad_work` varchar(30) NOT NULL,
  `abroad_country` varchar(30) NOT NULL,
  `inabilityreason` varchar(30) NOT NULL,
  `work_ancient` varchar(30) NOT NULL,
  `work_modern` varchar(30) NOT NULL,
  `land` varchar(30) NOT NULL,
  `bloodgroup` varchar(30) NOT NULL,
  `kaifiyat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `sport` varchar(30) NOT NULL,
  `personid` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE IF NOT EXISTS `talent` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `talent` varchar(30) NOT NULL,
  `personid` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `telecom`
--

CREATE TABLE IF NOT EXISTS `telecom` (
  `telecomid` int(30) NOT NULL AUTO_INCREMENT,
  `telecom` varchar(30) DEFAULT NULL,
  `personid` int(30) DEFAULT NULL,
  PRIMARY KEY (`telecomid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tole`
--

CREATE TABLE IF NOT EXISTS `tole` (
  `toleid` int(20) NOT NULL,
  `wardno` int(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `zone` varchar(20) NOT NULL,
  `tolenayo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tole-representatives`
--

CREATE TABLE IF NOT EXISTS `tole-representatives` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `toleid` int(20) NOT NULL,
  `represntative` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE IF NOT EXISTS `transportation` (
  `transportationid` int(30) NOT NULL AUTO_INCREMENT,
  `transportaion` varchar(30) DEFAULT NULL,
  `personid` int(30) DEFAULT NULL,
  PRIMARY KEY (`transportationid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
