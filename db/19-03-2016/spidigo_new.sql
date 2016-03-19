-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 12:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spidigo_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cluster`
--

CREATE TABLE IF NOT EXISTS `cluster` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cluster`
--

INSERT INTO `cluster` (`Id`, `name`, `area`, `location`) VALUES
(1, 'vishvajit', 'bopal', 'ahmedabad'),
(2, 'vishvajit0912', 'nikol', 'ahmedabad'),
(3, 'urmi', 'prahladnagar', 'ahmedabad'),
(4, 'raj', 'sola', 'ahmedabad'),
(5, 'shweta', 'naroda', 'ahmedabad'),
(6, 'dimpal', 'ghuma', 'ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(50) DEFAULT NULL,
  `caf_no` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `plan_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `account_no`, `caf_no`, `user_name`, `email`, `cname`, `contact`, `address`, `area`, `city`, `zip`, `state`, `status`, `plan_name`) VALUES
(3, '134353453453', '34534534534', 'vish0912 mahida', 'vishvajit0912@gmail.com', 'vish mahida', '8866556166', NULL, 'bopal', 'ahmedabad', '382415', 'gujarat', 'active', 'Rev-Max-4Mb-200gb-7M'),
(4, '100640107009', 'P85149', 'vishvajit0912', 'vishvajit0912@gmail.com', 'vish mahida', '7894561230', NULL, 'bopal', 'ahmedabad', '382415', 'gujarat', 'active', 'Rev-Max-4Mb-200gb-7M'),
(5, 'vishvajit0912@gmail.com', 'P85149', 'vishvajit0912', 'vishvajit0912@gmail.com', 'vish mahida', '8866556166', 'b35 divyaprabha society viratnagar', 'bopal', 'ahmedabad', '382415', 'gujarat', 'active', 'Rev-Max-4Mb-200gb-7M'),
(6, 'vishvajit0912@gmail.com', 'P85149', 'vish0912', 'vishvajit0912@gmail.com', 'vish mahida', '1234567890', 'b35 divyaprabha society viratnagar', 'bopal', 'ahmedabad', '382415', 'gujarat', 'active', 'Rev-Max-4Mb-200gb-7M'),
(7, '234234', 'P85149', 'vish0912', 'vishvajit0912@gmail.com', 'vish mahida', '8866556166', 'b35 divyaprabha society viratnagar', 'bopal', 'ahmedabad', '382415', 'gujarat', 'active', 'Rev-Max-4Mb-200gb-7M'),
(8, '23423423423', '234234234', 'vish', 'vishvajit0912@gmail.com', 'lkjldfi', 'dfsdf', 'sdfsdf', 'sdfs', 'dfsdfs', 'dfsd', 'sdfsdf', 'sdfsd', 'fsdfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `device_inward`
--

CREATE TABLE IF NOT EXISTS `device_inward` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `device_name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `mac` varchar(50) DEFAULT NULL,
  `device_type` varchar(50) DEFAULT NULL,
  `serial_no` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `expiry` varchar(50) DEFAULT NULL,
  `purchase_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `device_inward`
--

INSERT INTO `device_inward` (`Id`, `device_name`, `description`, `mac`, `device_type`, `serial_no`, `warranty`, `expiry`, `purchase_date`) VALUES
(1, 'dimpal sdsds', 'kjhaksdha', '1216346874987', '1mbps', '123456788990', '6 MONTHS', '234', 'asa'),
(3, 'hjajksd', ',kjhdbnjkcvh', '1216346874987', '2mbps', '123456788990', '6 MONTHS', '12', '35/12/2013'),
(4, 'sasa', 'sas', 'KJH', '4mbps', '123456788990', '6 MONTHS', '12', '35/12/2013'),
(5, 'dimpal', 'kjhaksdha', '1216346874987', 'highspeed', '123456788990', '6 MONTHS', '234', 'LJHK'),
(6, 'vertert', 'ertertert', '63465', 'type1', '456456', 'dhfghd', 'f4', '454353'),
(7, 'vish', 'mahisda', '1234234', 'type1', '4567678', '5', '3yers', '12'),
(8, 'vish', 'mahisda', 'sdf', 'type1', 'sdf', '5', '3yers', '12'),
(9, 'vish', 'mahisda', '4534534', 'type1', '345345345345', '5', '3yers', '12'),
(10, 'vish', 'mahisda', '345', 'type1', '345', '5', '3yers', '12');

-- --------------------------------------------------------

--
-- Table structure for table `device_master`
--

CREATE TABLE IF NOT EXISTS `device_master` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `device_name` varchar(50) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `mac` varchar(50) DEFAULT NULL,
  `device_type` varchar(20) DEFAULT NULL,
  `serial_no` varchar(50) DEFAULT NULL,
  `warranty` varchar(50) DEFAULT NULL,
  `expiry` varchar(50) DEFAULT NULL,
  `purchase_date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mac` (`mac`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `device_master`
--

INSERT INTO `device_master` (`id`, `device_name`, `description`, `mac`, `device_type`, `serial_no`, `warranty`, `expiry`, `purchase_date`) VALUES
(2, 'hjajksd', ',kjhdbnjkcvh', '9876543210', '1mbps', '123456788990', '6 MONTHS', '12', '12'),
(15, 'vish', 'mahisda', '345345', 'type1', '34534', '234234', '3yers', '12'),
(16, 'vish', 'mahisda', '4534534', 'type1', '345345345345', '234234', '3yers', '12'),
(19, '345345345', '345345', '34534', 'type1345', '3455', '3453', '34534', '345345345'),
(22, 'dfgdfgd', 'fgdfg', 'dfgd', 'type1', 'dfgdfg', 'gdfgdfgdf', 'gdfg', 'dfgdf'),
(23, 'dfgdfgd', 'fgdfg', 'dfgdf', 'type1', 'dfgdfg', 'gdfgdfgdf', 'gdfg', 'dfgdf'),
(25, 'dfgdfgd', 'fgdfg', 'dfg', 'type3', 'dfg', 'gdfgdfgdf', 'gdfg', 'dfgdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contact` int(50) DEFAULT NULL,
  `user_type` varchar(50) DEFAULT NULL,
  `cluster_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `fname`, `lname`, `user_name`, `email`, `password`, `contact`, `user_type`, `cluster_id`) VALUES
(1, 'vishavjit', 'mahida', 'vishvajit0912', 'vishvajit0912@gmail.com', '0912', 886655616, '1', NULL),
(2, 'Urmi', 'bhatt', 'urmi0912', 'urmi@gmail.com', '0912', 97025025, '2', NULL),
(4, 'vish', 'mahida', 'vish0912', 'vishvajit0912@gmail.com', '0912', 97025025, '3', '2'),
(6, 'vish', 'mahida', 'harsh123', 'vishvajit0912@gmail.com', 'vish09120912', 97025025, '3', '6'),
(7, 'jay', 'patel', 'jay123', 'jay@gmail.com', '0912', 1234567890, '3', '5'),
(8, 'brijesh', 'pujara', 'brijesh123', 'brijesh@gmail.com', '0912', 2147483647, '3', '1'),
(9, 'vaibhav', 'vaghela', 'vaibhav123', 'vaibhav@gmail.com', '0912', 2147483647, '3', '3'),
(10, 'hunny ', 'joshi', 'hunny123', 'hunny@gmail.com', '0912', 2147483647, '3', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'ADMIN'),
(2, 'WAREHOUSE'),
(3, 'CLUSTER');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
