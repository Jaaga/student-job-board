-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2014 at 11:00 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`) VALUES
(1, '.NET'),
(2, 'C++'),
(3, 'CSS & HTML'),
(4, 'Joomla & Drupal'),
(5, 'Databases'),
(6, 'Java'),
(7, 'JavaScript'),
(8, 'PSD to HTML'),
(9, 'WordPress'),
(10, 'Flash'),
(11, 'iOS, Android & Mobile'),
(12, 'PHP'),
(13, 'Software Testing'),
(14, 'Technology'),
(15, 'Other');

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
  `instruction` text,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`offer_id`, `user_id`, `title`, `description`, `picture`, `date`, `instruction`) VALUES
(1, 1, 'I will make a wordpress website', 'I will make a wordpress website according to your needs. Will also do custom styling   as you need.\r\n\r\nPro dev for 5years.', '../images/wordpress.jpg', '2014-03-28 04:33:26', 'Give your colors schemes and info. about the website you want to be made.'),
(2, 1, 'I will do your PHP homework', 'Need help with your homework!! Contact me and will help you create your PHP files.', '../images/php.jpg', '2014-03-25 08:22:28', 'Need info. about what the functions are supposed to do'),
(34, 3, 'I will make a 5 pae web app ', 'I will make a web app that is. max 5 pages. It will have basic fiunctionality. mainly for prototyping', '../images/download (1).jpg', '2014-03-28 13:01:50', 'Give me what your site wants'),
(35, 3, 'I will fix worpdress issues', 'I will fix any [plugin or customise your installation', '../images/wp-banner.jpg', '2014-03-28 13:03:30', 'Give me site domain and control panel also tell me what theme to use'),
(36, 2, 'I will test your website', 'I will do the testing', '../images/bug.jpg', '2014-03-28 15:16:07', 'I want site'),
(38, 2, 'I will make a HTML template ', 'I will do it in simple color scheme', '../images/land.jpg', '2014-03-28 15:23:00', 'Need design');

-- --------------------------------------------------------

--
-- Table structure for table `offer_category`
--

CREATE TABLE IF NOT EXISTS `offer_category` (
  `offer_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_category`
--

INSERT INTO `offer_category` (`offer_id`, `category_id`) VALUES
(1, 9),
(2, 12),
(3, 5),
(33, 11),
(34, 12),
(35, 9),
(36, 13),
(37, 3),
(38, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(20) NOT NULL AUTO_INCREMENT,
  `offer_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `order_no` varchar(20) NOT NULL,
  `details` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `accept_order` int(2) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `offer_id`, `user_id`, `order_no`, `details`, `status`, `accept_order`) VALUES
(1, 1, 1, '', 'Hi, I will sing a rap.', 'Incomplete', 0),
(2, 2, 2, '', 'Hi, I will dance for you.', 'Incomplete', 0),
(3, 4, 2, '', 'I will Finish your maths homework.', '50% done', 0),
(5, 3, 1, '', 'hi i will do something for you', 'pending', 0),
(6, 3, 1, '', 'hi i will do something for you', 'pending', 0),
(7, 3, 1, '', '', 'pending', 0),
(8, 3, 1, '', '', 'pending', 0),
(9, 3, 1, '', '', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `order_id` int(15) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`order_id`, `rating`) VALUES
(2, 'Unhappy'),
(1, 'Happy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `pass` varchar(20) NOT NULL,
  `linkedin` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `picture` text NOT NULL,
  `paypal` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass`, `linkedin`, `about`, `picture`, `paypal`) VALUES
(1, 'Yatin', 'yatin@sjb.in', 'yatin', 'yatin', 'Hi,\r\nI am great.', 'images/profile.jpg', 'anyhow'),
(2, 'Yash Raj Chhabra', 'yashraj@sjb.in', 'yash', 'yash@linkedin.com', 'Hi,\r\nI am a great a great programmer.', 'images/user.jpg', 'yash@paypal.com'),
(3, 'Prashant ', 'prashant@sjb.in', 'prank', 'prank', 'Hi,\r\nI am great.', '', 'anyhow'),
(4, 'Ansal', 'ansal@sjb.in', 'ansal', 'ansal', 'Hi,\r\nI am great.', '', 'hi'),
(5, 'Freeman Murray', 'freeman@sjb.in', 'freeman', 'freeman@linkedin.com', 'Hi, I am the GURU', '', 'freeman@paypal.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
