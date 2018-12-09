-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2018 at 08:33 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chippy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(17) NOT NULL,
  `message` varchar(750) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `email`, `message`, `created_date`) VALUES
(1, '', '', '', '2018-12-08 18:53:11'),
(2, '', '', '', '2018-12-08 18:53:59'),
(3, '', '', '', '2018-12-08 18:55:57'),
(4, '', '', '', '2018-12-09 16:23:56'),
(5, 'yakubu aminat', 'yakubuaminat94@gm', 'lkjdgshbloldsjhbuweasjk', '2018-12-09 16:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textBox` varchar(150) NOT NULL,
  `fullName` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `tele` int(17) NOT NULL,
  `plate` int(10) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `textBox`, `fullName`, `email`, `address`, `tele`, `plate`, `created_date`) VALUES
(1, 'amala', 'yakubu jumoke', 'yakubuaminat94@gmail.com', 'gloryland hostel,OAUTHC', 2147483647, 2, '2018-12-07 12:41:21'),
(2, 'amala', 'yakubu jumoke', 'yakubuaminat94@gmail.com', 'gloryland hostel,OAUTHC', 2147483647, 2, '2018-12-07 12:46:08'),
(3, 'amala', 'yakubu jumoke', 'yakubuaminat94@gmail.com', 'gloryland hostel,OAUTHC', 2147483647, 2, '2018-12-07 14:01:37'),
(4, 'amala', 'yakubu jumoke', 'yakubuaminat94@gmail.com', 'gjhfwgtghtgkhi,', 687799989, 4, '2018-12-07 17:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE IF NOT EXISTS `signin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(17) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `username`, `password`) VALUES
(1, 'jumoke', 'jummy123');
