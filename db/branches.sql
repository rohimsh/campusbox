-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 147.0.0.1
-- Generation Time: Dec 21, 2014 at 14:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `campusbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `14ce`
--
CREATE TABLE IF NOT EXISTS `14ce` (
  `no` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` int(5) NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `14cs` (
  `no` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` int(5) NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `14ee` (
  `no` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` int(5) NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `14ec` (
  `no` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` int(5) NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `14me` (
  `no` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` int(5) NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `14mf` (
  `no` bigint(15) NOT NULL AUTO_INCREMENT,
  `uid` int(5) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` int(5) NOT NULL,
  `hour` int(2) NOT NULL,
  `minute` int(2) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
