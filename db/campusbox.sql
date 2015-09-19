-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2014 at 09:05 PM
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
-- Table structure for table `11ce`
--

CREATE TABLE IF NOT EXISTS `11ce` (
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

-- --------------------------------------------------------

--
-- Table structure for table `11celike`
--

CREATE TABLE IF NOT EXISTS `11celike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11cs`
--

CREATE TABLE IF NOT EXISTS `11cs` (
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

-- --------------------------------------------------------

--
-- Table structure for table `11cslike`
--

CREATE TABLE IF NOT EXISTS `11cslike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11ec`
--

CREATE TABLE IF NOT EXISTS `11ec` (
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

-- --------------------------------------------------------

--
-- Table structure for table `11eclike`
--

CREATE TABLE IF NOT EXISTS `11eclike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11ee`
--

CREATE TABLE IF NOT EXISTS `11ee` (
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

-- --------------------------------------------------------

--
-- Table structure for table `11eelike`
--

CREATE TABLE IF NOT EXISTS `11eelike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11me`
--

CREATE TABLE IF NOT EXISTS `11me` (
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

-- --------------------------------------------------------

--
-- Table structure for table `11melike`
--

CREATE TABLE IF NOT EXISTS `11melike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `11mf`
--

CREATE TABLE IF NOT EXISTS `11mf` (
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

-- --------------------------------------------------------

--
-- Table structure for table `11mflike`
--

CREATE TABLE IF NOT EXISTS `11mflike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12ce`
--

CREATE TABLE IF NOT EXISTS `12ce` (
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

-- --------------------------------------------------------

--
-- Table structure for table `12celike`
--

CREATE TABLE IF NOT EXISTS `12celike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12cs`
--

CREATE TABLE IF NOT EXISTS `12cs` (
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

-- --------------------------------------------------------

--
-- Table structure for table `12cslike`
--

CREATE TABLE IF NOT EXISTS `12cslike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12ec`
--

CREATE TABLE IF NOT EXISTS `12ec` (
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

-- --------------------------------------------------------

--
-- Table structure for table `12eclike`
--

CREATE TABLE IF NOT EXISTS `12eclike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12ee`
--

CREATE TABLE IF NOT EXISTS `12ee` (
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

-- --------------------------------------------------------

--
-- Table structure for table `12eelike`
--

CREATE TABLE IF NOT EXISTS `12eelike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12me`
--

CREATE TABLE IF NOT EXISTS `12me` (
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

-- --------------------------------------------------------

--
-- Table structure for table `12melike`
--

CREATE TABLE IF NOT EXISTS `12melike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `12mf`
--

CREATE TABLE IF NOT EXISTS `12mf` (
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

-- --------------------------------------------------------

--
-- Table structure for table `12mflike`
--

CREATE TABLE IF NOT EXISTS `12mflike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13ce`
--

CREATE TABLE IF NOT EXISTS `13ce` (
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

-- --------------------------------------------------------

--
-- Table structure for table `13celike`
--

CREATE TABLE IF NOT EXISTS `13celike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13cs`
--

CREATE TABLE IF NOT EXISTS `13cs` (
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

-- --------------------------------------------------------

--
-- Table structure for table `13cslike`
--

CREATE TABLE IF NOT EXISTS `13cslike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13ec`
--

CREATE TABLE IF NOT EXISTS `13ec` (
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

-- --------------------------------------------------------

--
-- Table structure for table `13eclike`
--

CREATE TABLE IF NOT EXISTS `13eclike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13ee`
--

CREATE TABLE IF NOT EXISTS `13ee` (
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

-- --------------------------------------------------------

--
-- Table structure for table `13eelike`
--

CREATE TABLE IF NOT EXISTS `13eelike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13me`
--

CREATE TABLE IF NOT EXISTS `13me` (
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

-- --------------------------------------------------------

--
-- Table structure for table `13melike`
--

CREATE TABLE IF NOT EXISTS `13melike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `13mf`
--

CREATE TABLE IF NOT EXISTS `13mf` (
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

-- --------------------------------------------------------

--
-- Table structure for table `13mflike`
--

CREATE TABLE IF NOT EXISTS `13mflike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `14celike`
--

CREATE TABLE IF NOT EXISTS `14celike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14cs`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `14cslike`
--

CREATE TABLE IF NOT EXISTS `14cslike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14ec`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `14eclike`
--

CREATE TABLE IF NOT EXISTS `14eclike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14ee`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `14eelike`
--

CREATE TABLE IF NOT EXISTS `14eelike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14me`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `14melike`
--

CREATE TABLE IF NOT EXISTS `14melike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `14mf`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `14mflike`
--

CREATE TABLE IF NOT EXISTS `14mflike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `all`
--

CREATE TABLE IF NOT EXISTS `all` (
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

-- --------------------------------------------------------

--
-- Table structure for table `alllike`
--

CREATE TABLE IF NOT EXISTS `alllike` (
  `userid` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countym`
--

CREATE TABLE IF NOT EXISTS `countym` (
  `count` int(10) NOT NULL,
  `time` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `branch` varchar(2) NOT NULL,
  `imgpath` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`),
  KEY `no_2` (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hashtags`
--

CREATE TABLE IF NOT EXISTS `hashtags` (
  `name` varchar(200) NOT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `time` varchar(12) NOT NULL,
  `weight` float NOT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `uid` varchar(5) NOT NULL,
  `postid` varchar(10) NOT NULL,
  `sub` int(50) NOT NULL,
  `post` varchar(150) NOT NULL,
  `like` varchar(5) NOT NULL,
  `date` int(2) NOT NULL,
  `month` int(2) NOT NULL,
  `time` varchar(11) NOT NULL,
  `section` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempuser`
--

CREATE TABLE IF NOT EXISTS `tempuser` (
  `Confirmcode` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Batch` varchar(2) NOT NULL,
  `Branch` varchar(2) NOT NULL,
  `Pass` varchar(256) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `batch` varchar(2) NOT NULL,
  `branch` varchar(2) NOT NULL,
  `imgpath` varchar(200) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `homeseen` varchar(10) NOT NULL,
  `allseen` varchar(10) NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`),
  KEY `no_2` (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
