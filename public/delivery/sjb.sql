-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2014 at 05:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `user_id` int(11) NOT NULL,
  `offer_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`user_id`, `offer_id`, `comment`, `time`) VALUES
(1, 2, 'this is sparta', '2014-04-24 06:23:38'),
(2, 1, 'this is sparta', '2014-04-24 06:36:04'),
(0, 1, '', '2014-04-24 07:08:55'),
(0, 1, '', '2014-04-24 07:11:54'),
(15, 1, '', '2014-04-24 07:14:54'),
(15, 1, 'this is yash', '2014-04-24 07:16:00'),
(15, 1, 'yo', '2014-04-24 07:17:45'),
(15, 1, 'my name is yash', '2014-04-24 07:17:54'),
(1, 1, 'this is yatin', '2014-04-24 09:47:21'),
(1, 34, 'hi this is yatin', '2014-04-24 09:49:24'),
(1, 34, 'best deal ever', '2014-04-24 09:49:39'),
(1, 2, 'hahah its working ', '2014-04-24 10:26:41'),
(1, 2, 'hahah its working ', '2014-04-24 10:27:27'),
(1, 2, 'hahah its working ', '2014-04-24 10:27:47'),
(1, 2, 'hahah its working ', '2014-04-24 10:28:03'),
(1, 2, 'hahah its working ', '2014-04-24 10:28:24'),
(1, 2, 'haha its working', '2014-04-24 10:29:02'),
(1, 2, 'haha its working', '2014-04-24 10:29:07'),
(1, 2, 'haha its working', '2014-04-24 10:29:09'),
(1, 2, 'haha its working', '2014-04-24 10:29:29'),
(1, 2, 'haha its working', '2014-04-24 10:29:35'),
(1, 46, 'wow i was impressed ', '2014-04-24 10:51:32'),
(2, 2, 'djf\r\n', '2014-04-24 11:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `msg` text,
  `read_status` varchar(10) DEFAULT NULL,
  `timestamp` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `thread`, `user_id`, `sender_id`, `msg`, `read_status`, `timestamp`) VALUES
(2, 2, 3, 2, 'I want it to be delivered today\r\n', 'Yes', '2014-04-01'),
(3, 1, 3, 2, 'I want it by today', 'Yes', '2014-04-01'),
(4, 1, 3, 2, 'cool', 'Yes', '2014-04-01'),
(5, 2, 2, 3, 'ok, it will be', 'Yes', '2014-04-01'),
(6, 2, 2, 3, 'it will be', 'Yes', '2014-04-01'),
(7, 2, 3, 2, 'ok man.', 'Yes', '2014-04-01'),
(8, 2, 2, 3, 'I hsrv\r\n', 'Yes', '2014-04-01'),
(9, 1, 3, 2, 'ok,done', 'Yes', '2014-04-03'),
(10, 2, 3, 2, 'Ok, done', 'Yes', '2014-04-03'),
(11, 2, 3, 2, 'Ok cool', 'Yes', '2014-04-03'),
(12, 3, 3, 1, 'yes this is an order', 'Yes', '2014-04-24'),
(13, 4, 3, 1, '', 'Yes', '2014-04-24'),
(14, 5, 1, 3, 'yati mote edit kr', 'No', '2014-04-24'),
(15, 6, 15, 3, '', 'No', '2014-04-24'),
(16, 7, 1, 3, '', 'No', '2014-04-24'),
(17, 8, 3, 2, '', 'No', '2014-04-24'),
(18, 9, 1, 2, '', 'No', '2014-04-24');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`offer_id`, `user_id`, `title`, `description`, `picture`, `date`, `instruction`) VALUES
(1, 1, 'I will make a wordpress website', 'I will make a wordpress website according to your needs. Will also do custom styling   as you need.\r\n\r\nPro dev for 5years.', '../images/wordpress.jpg', '2014-03-28 04:33:26', 'Give your colors schemes and info. about the website you want to be made.'),
(2, 1, 'I will do your PHP homework', 'Need help with your homework!! Contact me and will help you create your PHP files.', '../images/php.jpg', '2014-03-25 08:22:28', 'Need info. about what the functions are supposed to do'),
(34, 3, 'I will make a 5 pae web app ', 'I will make a web app that is. max 5 pages. It will have basic fiunctionality. mainly for prototyping', '../images/download (1).jpg', '2014-03-28 13:01:50', 'Give me what your site wants'),
(35, 3, 'I will fix worpdress issues', 'I will fix any [plugin or customise your installation', '../images/wp-banner.jpg', '2014-03-28 13:03:30', 'Give me site domain and control panel also tell me what theme to use'),
(43, 12, 'I will make a wordpress site for free', 'I will make 5 pages for you.\r\nGive me what you need.', '../images/wp-banner.jpg', '2014-04-09 13:26:02', 'Color schemes and etc.'),
(45, 2, 'this is yash raj', 'gdjitgji', '../images/css.jpg', '2014-04-21 15:34:03', 'IJICJFXDOJK'),
(46, 15, 'I will debug your code', 'i will do this in 5 days', '../images/bug.gif', '2014-04-22 15:50:36', 'plz give me money');

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
(38, 3),
(39, 5),
(39, 8),
(40, 1),
(41, 1),
(42, 1),
(43, 9),
(44, 12),
(45, 9),
(44, 2),
(45, 3),
(46, 13);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `offer_id`, `user_id`, `order_no`, `details`, `status`, `accept_order`) VALUES
(1, 1, 1, '', 'Hi, I will sing a rap.', '40%', -1),
(2, 2, 2, '', 'Hi, I will dance for you.', 'Incomplete', 0),
(3, 4, 2, '', 'I will Finish your maths homework.', '50% done', 0),
(5, 3, 1, '', 'hi i will do something for you', 'pending', 0),
(6, 3, 1, '', 'hi i will do something for you', 'pending', 0),
(7, 3, 1, '', '', 'pending', 0),
(8, 3, 1, '', '', 'pending', 0),
(9, 3, 1, '', '', 'pending', 0),
(10, 0, 2, '', '', 'pending', 0),
(11, 0, 2, '', 'this is my first prder', 'pending', 0),
(12, 0, 2, '', 'this is wat i need', 'pending', 0),
(13, 0, 2, '', 'thi si ', 'pending', 0),
(14, 0, 2, '', 'thi is ', 'pending', 0),
(15, 0, 2, '', 'thi is ', 'pending', 0),
(16, 0, 2, '', 'thi si yash', 'pending', 0),
(18, 34, 2, '', 'thi is yash', 'pending', 0),
(19, 1, 2, '', '', '60%', 1),
(20, 2, 2, '', 'this is what i neeed plzzz', 'pending', 0),
(21, 2, 2, '', 'i need something ', 'pending', 0),
(22, 2, 2, '', 'thi is yash', 'pending', 0),
(23, 1, 2, '', 'this is my ordrr', '60%', -1),
(24, 43, 2, '', 'this is yash raj ', 'pending', 0),
(25, 1, 2, '', '', 'Done', 1),
(26, 1, 15, '', '', '40%', -1),
(27, 34, 1, '', 'yes this is an order', 'pending', 0),
(28, 34, 1, '', '', 'pending', 0),
(29, 2, 3, '', 'yati mote edit kr', 'pending', 0),
(30, 46, 3, '', '', 'pending', 0),
(31, 2, 3, '', '', 'pending', 0),
(32, 35, 2, '', '', 'pending', 0),
(33, 2, 2, '', '', 'pending', 0);

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
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
  `thread_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`thread_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `title`) VALUES
(1, 'I will make a wordpress'),
(2, 'I wil make sth cool'),
(3, 'I will make a 5 pae web app '),
(4, 'I will make a 5 pae web app '),
(5, 'I will do your PHP homework'),
(6, 'I will debug your code'),
(7, 'I will do your PHP homework'),
(8, 'I will fix worpdress issues'),
(9, 'I will do your PHP homework');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass`, `linkedin`, `about`, `picture`, `paypal`) VALUES
(1, 'Yatin', 'yatin@sjb.in', 'yatin', 'yatin', 'Hi,\r\nI am great.', 'images/profile.jpg', 'anyhow'),
(2, 'Yash Raj Chhabra', 'yashraj@sjb.in', 'yash', 'yash@linkin.com', 'this is yash raj', 'images/boy.png', 'paypal@paypal.com'),
(3, 'Prashant ', 'prashant@sjb.in', 'prank', 'prank', 'Hi,\r\nI am great.', '', 'anyhow'),
(4, 'Ansal', 'ansal@sjb.in', 'ansal', 'ansal', 'Hi,\r\nI am great.', '', 'hi'),
(5, 'Freeman Murray', 'freeman@sjb.in', 'freeman', 'freeman@linkedin.com', 'Hi, I am the GURU', '', 'freeman@paypal.com'),
(6, 'yash', 'yashraj@sjb.com', 'yash', '', '', '', ''),
(7, 'Yash Raj', 'yaraj@gmail.com', 'yashraj', '', '', '', ''),
(8, 'Yash Raj', 'yashraj2@sjb.in', 'rash', '', '', '', ''),
(9, 'yash', 'yashrajc@sjb.in', '1234', '', '', '', ''),
(10, 'Yash Raj Chhabra', 'yash@gmail.com', 'slimshady', '', '', '', ''),
(11, 'Yash Raj', 'yashrajchh@sjb.in', 'yash', '', '', 'images/boy.png', ''),
(12, 'Sushil ', 'sushil@sjb.in', 'sushil', '', '', 'images/boy.png', ''),
(13, 'Yash Raj', 'yashrajchhabra@sjb.in', 'yash', '', '', 'images/boy.png', ''),
(14, 'Prashant', 'yaaj@sjb.in', 'jnjnk', '', '', 'images/boy.png', ''),
(15, 'arpit', 'arpit@sjb.in', 'arpit', '', '', 'images/boy.png', ''),
(16, '', '', '', '', '', 'images/boy.png', ''),
(17, '', 'yashra@sjb.in', '', '', '', 'images/boy.png', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
