-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 27, 2014 at 11:13 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sjb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, 'Web Development'),
(2, 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `message_info` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`user_id`, `message_info`) VALUES
(1, 'hi, how are you doing.\r\nI want a google clone.'),
(2, 'hi, how are you doing.\r\nI want a fb clone.'),
(3, 'hi, how are you doing.\r\nI want to make password clone to hack ansal''s account.'),
(4, 'hi, how are you doing.\r\nI want you to do my homework.');

-- --------------------------------------------------------

--
-- Table structure for table `offering`
--

CREATE TABLE IF NOT EXISTS `offering` (
  `offer_id` int(15) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`offer_id`, `user_id`, `title`, `description`, `picture`, `date`) VALUES
(1, 13, 'I will make your Wordpress website', 'WordPress is the great framework for establishing the websites for your business, blog and many more.\r\n\r\n\r\nI will establish WordPress website as per your requirements.', '', '2014-03-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `offer_category`
--

CREATE TABLE IF NOT EXISTS `offer_category` (
  `offer_id` int(15) NOT NULL,
  `category_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_category`
--

INSERT INTO `offer_category` (`offer_id`, `category_id`) VALUES
(2, 2),
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `offer_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `accept_order` int(2) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `Rating`
--

CREATE TABLE IF NOT EXISTS `Rating` (
  `order_id` int(15) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rating`
--

INSERT INTO `Rating` (`order_id`, `rating`) VALUES
(2, 'Unhappy'),
(1, 'Happy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `picture` text NOT NULL,
  `paypal` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass`, `linkedin`, `about`, `picture`, `paypal`) VALUES
(13, 'Yash Raj Chhabra', 'yashraj@sjb.in', 'yash', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
