-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2014 at 10:25 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`offer_id`, `user_id`, `title`, `description`, `picture`, `date`) VALUES
(1, 2, 'Yo  whatsup!!!', '', 'images/word.png', '0000-00-00 00:00:00'),
(2, 2, 'Create your dbms files', '', 'images/mysql.jpg', '0000-00-00 00:00:00'),
(4, 0, 'this is my name ', '', 'images/android.png', '0000-00-00 00:00:00'),
(7, 2, 'I will debug your code', '', 'images/bug.jpg', '0000-00-00 00:00:00'),
(8, 2, 'I will create an html page for you.', '', 'images/land.jpg', '0000-00-00 00:00:00'),
(10, 2, 'Will finish your css homework', '', 'images/css.jpg', '0000-00-00 00:00:00'),
(12, 0, 'I will dress up like a barbie.', '', 'images/1511594_10202901834329853_1802480754_n.jpg', '0000-00-00 00:00:00'),
(13, 0, 'I will create your youtube profile', '', 'images/bug.gif', '0000-00-00 00:00:00');

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
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `offer_id`, `user_id`, `details`, `status`) VALUES
(1, 1, 1, 'Hi, I will sing a rap.', 'Incomplete'),
(2, 2, 2, 'Hi, I will dance for you.', 'Incomplete'),
(3, 4, 2, 'I will Finish your maths homework.', '50% done'),
(5, 3, 1, 'hi i will do something for you', 'pending'),
(6, 3, 1, 'hi i will do something for you', 'pending'),
(7, 3, 1, '', 'pending'),
(8, 3, 1, '', 'pending'),
(9, 3, 1, '', 'pending');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass`, `linkedin`, `about`, `picture`, `paypal`) VALUES
(1, 'yatin', 'yatin@yatin.in', 'yatin', 'yatin', 'Hi,\r\nI am great.', 'images/profile.jpg', 'anyhow'),
(2, 'Yash Raj Chhabra', 'yashraj@sjb.in', 'yash', 'yash@linkedin.com', 'Hi,\r\nI am a great a great programmer.', 'images/user.jpg', 'yash@paypal.com'),
(3, 'prank', 'prank@fm', 'prank', 'prank', 'Hi,\r\nI am great.', '', 'anyhow'),
(4, 'Ansal', 'ansal', 'ansal', 'ansal', 'Hi,\r\nI am great.', '', 'hi'),
(5, 'prinyka', 'prynka@pr.in', 'prinyka', 'ogg', 'Hi,\r\nI am great.', '', 'dh'),
(6, '', 'yashraj@sjb.in', 'yash', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
