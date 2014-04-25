-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2014 at 05:23 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
(0, 46, 'he did great work for me', '2014-04-24 11:52:39'),
(0, 48, 'He responds very quickly', '2014-04-24 14:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `message_info` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`offer_id`, `user_id`, `title`, `description`, `picture`, `date`, `instruction`) VALUES
(46, 10, 'I will fix bugs in your JavaScript and JQuery coding', 'I will fix bugs in your JavaScript and JQuery coding. If you send me relevant files and tell me clearly what you want do, I can fix any bug.', '../images/programmer_creattica_full.jpg', '2014-04-22 17:21:39', ''),
(47, 10, 'I will do your web programming projects ', 'I will code your HTML/CSS/PHP/JavaScript/Ajax assignments. The projects will be completed based on given specifications which must be detailed. I will try getting assignments done within 2 days of receiving them, at times possibly faster depending on the amount of work involved.', '../images/d2dc76cf186558aa6c220b86b2172bd0-gif.jpg', '2014-04-22 17:23:26', 'Please message me before ordering'),
(48, 8, 'I will help you in Android related Assignments', 'I have an experience of 2-3 years of programming in java using Net Beans and Eclipse IDE.\r\ni have developed many projects and assignments for students.', '../images/android-vs-apple-1.jpg', '2014-04-22 17:31:32', ''),
(49, 8, 'I will set up or fix your phone bug issues ', 'I know alot about phones. Their programming systems and bug issues and how to fix them. Tell me your issue and I will solve it! Android, Blackberry, Apple!!', '../images/00.jpg', '2014-04-22 17:32:59', ''),
(50, 11, 'I will enlarge and print your photo', 'Email an image file and I will professionally print on fine art matte, glossy, semi-gloss or metallic glossy (add 5 dollars) 11x8.5 photo paper.  Other sizes and services available.  Bulk printing available.  Please inquire.', '../images/1234.jpg', '2014-04-22 17:39:09', ''),
(52, 12, 'I will work in c sharp net and Asp net', 'I have worked in C# and Asp Net. Developed many desktop applications in c sharp and web applications in Asp.net.\r\nDeveloped car booking engine in Asp Net. Developed Voovi Chat application in c#.\r\nI can work in MVC also. ', '../images/asp.jpg', '2014-04-22 17:55:20', ''),
(53, 12, 'I will mve ur joomla site to hosting', 'I will transfer your joomla site from old hosting to your new hosting...\r\n\r\nCopying a Joomla! website is a two-part process: you must copy the files and you must copy the database (which is where the content is stored). Copying the files and copying the database are separate operations.\r\n', '../images/FileTransfer.jpg', '2014-04-23 10:47:12', 'Please tell full details'),
(54, 11, 'I will create a browser toolbar', 'I will create a toolbar for your company.\r\nIt will be compatible with Internet Explorer, Google Chrome, Firefox and Safari.\r\n\r\nIt will have your:\r\n- Logo\r\n- Google Search\r\n- Widgets (if required) - Youtube, Scroll To Top, Youtube, Google Translate, FaceBook, Share it.\r\n\r\nIt will have a separate download page with your description on it where your users can download it.\r\n\r\nNOT RATED YET\r\n5\r\nDAYS ON\r\nAVERAGE\r\n0\r\nORDERS\r\nIN QUEUE\r\nAVG. RESPONSE TIME: 7 HRS.\r\n steampowernew\r\nBy steampowernew\r\nFROM: CANADA\r\nJOINED ABOUT 1 YEAR AGO\r\nSpeaks: English\r\nCONTACT ME\r\nRelated Topics\r\ntoolbar browser add-on extensions plug-in google chrome.', '../images/web-browsers-.jpg', '2014-04-23 10:54:55', ''),
(55, 13, 'I will make a sidebox for zencart', 'I can create a sidebox module for zencart ecommerce\r\n\r\n- Static content inside sidebox\r\n- I can program it so it only appears at certain pages (only checkout, only product, only account pages...)\r\n- I can add your images and your content in it.', '../images/12541_01_home_big.jpg', '2014-04-23 10:59:16', 'Please contact me if your interested in one of my pre-build modules, its cheaper and a really fast install!\r\n\r\nFeel free to contact me for practical question'),
(56, 13, 'I will debug your code in PHP,  Python', 'I will help you debug your code for 1 hour. It can be a script in: PHP, Javascript or Python. Including (but not limited to) the following technologies: any PHP framework, MySQL, PostgreSQL, Django, jQuery.', '../images/techs.jpg', '2014-04-23 11:03:10', ''),
(57, 14, 'I will give you 40 Ratings ,15 Reviews', '1.I will give you 40 ratings or 15 reviews and 40 Google plus to any free android app.\r\nI will post 15 reviews or 40 ratings to any free app in Google chrome store.\r\nI will post 2 reviews or ratings to any paid android app which cost up-to $0.99 and one review or ratings for app which cost more than $0.99.\r\nI will spread the ratings over few days to look more genuine.', '../images/android-robot1.jpg', '2014-04-23 11:07:55', 'In addition to this\r\nPlease message if you have any question/s. \r\nYour satisfaction is guaranteed else 100% refund.\r\nYou can order this offer multiple times.'),
(58, 14, 'I will give u hidden mobile spy software ', 'monitoring software which silently records someone elseâ€™s Smartphones activities like SMS text messages, calls, emails, social media activities and stores them in an online account accessible through internet connection. You buy the application, install it on the target iPhone and get all the monitored data into your online dashboard accessible from your mobile phone or personal computer.', '../images/Crazy-Woman.jpg', '2014-04-23 11:09:17', ''),
(59, 15, 'I will create a FileMaker database for you', 'Need a mobile database? I can create a clean looking database for your iPad or iPhone. Using the FileMaker Go 13 platform (free on the app store), I can add custom fields, processes, and build a nice looking solution for you.', '../images/main.jpg', '2014-04-23 11:16:23', 'Please feel free to contact me with any questions!'),
(60, 15, 'I will make your sql request and design database', 'I will make for your request SQL just send me your schema database and your need in Database : Oracle , Mysql , SQL server', '../images/sql2.jpg', '2014-04-23 11:17:36', ''),
(61, 16, 'I will write any javascript script  and design database ', 'I have strong knowledge of such frameworks and technologies like AngularJS, GruntJS, NodeJS, HTML, CSS(LESS) and many ather JS libs. And I have a lot of projects behind. So I will love to do something for you.', '../images/littleninjas-327404.jpg', '2014-04-23 11:23:21', ''),
(62, 16, 'I will solve any jquery, javascript problem', 'I m a experienced jquery programmer and developer .\r\n I can help with your jquery programming ,application assignments and works\r\nWill do apps in Javascript, JQuery, HTML5, CSS3, Backbone, Require, Ajax. Add Sliders, Responsive Menus to webpage. Loaders and Spinners for Websites Browser Compatibility. Easy integration. ', '../images/java.jpg', '2014-04-23 11:24:51', ''),
(63, 17, 'I will write code using JAVA', 'If you have any problem with your programming related assignment or if you want to create a small application using JAVA...You can order me. But before order must message me...Thanks!', '../images/Java-Vulnerable.jpg', '2014-04-23 11:35:33', ''),
(64, 17, 'I will create Java applications', 'I will create Java applications of any type. Mysql, JSP, Servlet, Javascript, jquery, Ajax, HTML and CSS and many other technologies could also be involved. I have a lot of experience in java programming so your app can be created in the best practice method.  Web applications can be modified, upgraded or created from the scratch bottom. I am a full time freelancer so delivery can be expected at the earliest possible time (the mentioned 20 days deadline is meant to allow enough time for developing large applications). Prices are negotiable and I can work at minimum instructions and direction. Just try me :)', '../images/javacode-908579.jpg', '2014-04-23 11:36:58', ''),
(65, 19, 'I will develop Csharp desktop Applications', 'more than 3 years of C# developing , 20 projects .\r\n\r\n- networked C# desktop applications .\r\n- standalone  C#  applications .\r\n-  integrate fingerprint attendance Devices with the application !\r\n- Mysql Database , Windows SQL server', '../images/427313_10151321417926864_1990695696_n.jpg', '2014-04-23 15:15:17', ''),
(66, 19, 'I will create a basic VB application for automating tasks', 'I will create a basic application to automate simple tasks that you otherwise have to do manually. The application will come with a good looking, easy to use GUI and if required, I will also create a manual on how to use the application.', '../images/AGT.jpg', '2014-04-23 15:16:45', ''),
(67, 12, 'I will help you with Flash AS3', 'I will help you out with anything Flash related. I mostly use Flash (AS3) for game development, but I can help out with pretty much anything Flash. Say good bye to those errors! Note, please message me about your request first before ordering so we can go over what needs to be done.', '../images/flashIcon.jpg', '2014-04-23 16:48:35', ''),
(68, 8, 'I will do your projects and assignments for Cplusplus', 'I can program your C++ assignments or projects. The projects will be completed based on given specifications which must be detailed. I will try getting assignments done within 2 days of receiving them, at times possibly faster depending on the amount of work involved. The time-line on more complex projects will be variable based on discussion and individual quotes.', '../images/C++.jpg', '2014-04-23 16:54:21', ''),
(69, 20, 'I will make an extremely lovable wedding website', 'I will create a very beautiful wedding website for you. This website will help you plan and share  details of your wedding day.\r\n\r\nThe website will contain 4 pages:\r\n1) Home page\r\n2) Our Story\r\n3) Gallery\r\n4) Events', '../images/wedding_website.jpg', '2014-04-23 17:07:44', 'So,Create one to organize your wedding details and keep your guests informed!'),
(70, 20, 'I will code for your web page', 'I can code for your web page. just let me know what type  of web page you need. I can make eye-catching web page for you. So lets do it for you.', '../images/F.jpg', '2014-04-23 17:09:11', ''),
(71, 10, 'I will fix any bug on your site', 'I  will fix any bug on your site, including css, html, javascript, php or mysql. If you have problems with pictures or videos, I can fix it as well.', '../images/htmlcss.jpg', '2014-04-23 17:14:50', ''),
(72, 12, 'I will develop mobile app for DJs, podcast', 'We Build APPS For Djs/Podcast Shows. This APP Will Be Suitable For IPhones, Android, and More!\r\n\r\nOptional pages: Website updates, Blog updates, About, Contact, Twitter, Facebook, Videos, Photos, Audio, and more. \r\n1 page per Gig \r\nYour app can be build and published for 4 App Devices and Markets: iPhone, iPad, Android Phone, Android Tablet, Kindle Fire.  \r\nSkype or Email info might be needed', '../images/fiverrad72.jpg', '2014-04-23 20:21:37', ''),
(73, 11, 'I will download, rate and review your iOS app', 'With a single Gig, I will download, rate and review your iOS app.  I can review iPad or iPhone apps.  Applies to free or paid apps up to $0.99.  If you have an app or game that is over $0.99, for every two dollars your app is over $0.99, add another Gig.  So if your app/game is $2.99, add one additional Gig. If your app is $4.99, add two additional Gigs. If you have any questions just PM me before you order.', '../images/fiverr22.jpg', '2014-04-23 20:27:32', ''),
(74, 13, 'I will develop responsive website in php ', 'Responsive websites are very high demanding these days as there are lots of devices like\r\nDesktops ( with different resolutions)\r\nTablets\r\nMobile devices\r\nPhablets and many more.\r\n\r\nTo make website compatible with all these devices Responsive technology comes in the existence. \r\n\r\nI will offer response design with website development having Quality Assurance\r\nand support.', '../images/phpcode-287392.jpg', '2014-04-23 20:39:51', 'PLEASE CONTACT ME BEFORE PLACING AN ORDER.'),
(75, 13, 'I will find you a dot com domain name ', 'The .COM domain names are increasingly harder to find. Yet they get you the best results with search engines. Finding a usable .COM name is difficult and can be time consuming. \r\n\r\nI have a proprietary application that takes your 1-2 keywords and compounds them with a massive word list creating thousands of word combinations. I then check all of them for dot com availability using DNS and WHOIS public records.', '../images/RockyMtn.jpg', '2014-04-23 20:42:15', 'It is always best to contact me before ordering. '),
(76, 16, 'I will protect your website server from all possible HACKS on earth', 'Feeling your site is invulnerable and immortal?\r\n\r\nBro!!you should think again because even Facebook got hacked and is currently under series of thousands of more attacks now. \r\n\r\nwell Basically to steal sensitive information , delete your website and databases and change your cpanel and ftp password, ask you to pay to get access back..', '../images/securityFiverr.jpg', '2014-04-23 20:46:19', ''),
(77, 16, 'I will customize and fix bugs for drupal ', 'I will fix bugs and customize for  your drupal site. I will also solve your ajax, php,  html, css, mysql, drupal or jquery problems for $5. \r\n\r\nDrupal:\r\n-Create a simple view\r\n- Install a module\r\n- Install a theme', '../images/drupal_branding_2012.jpg', '2014-04-23 20:48:25', 'IMPORTANT: Please contact me prior to ordering this and tell me the one detail that you need fixed or performed to make sure I can do it. \r\n\r\nThe important thing is "YOUR PROBLEMS ARE ALSO MY PROBLEMS!".'),
(78, 20, 'I will rectify codeigniter bugs', 'II have strong knowledge of such frameworks and technologies like AngularJS, GruntJS, NodeJS, HTML, CSS(LESS) and many ather JS libs. And I have a lot of projects behind. So I will love to do something for you.', '../images/Tulips.jpg', '2014-04-24 15:57:27', '');

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
(39, 3),
(40, 4),
(41, 3),
(42, 9),
(0, 5),
(43, 4),
(44, 3),
(0, 14),
(0, 14),
(45, 13),
(0, 14),
(0, 14),
(0, 1),
(0, 14),
(46, 7),
(47, 12),
(0, 11),
(48, 11),
(49, 11),
(50, 15),
(0, 15),
(51, 14),
(0, 15),
(52, 1),
(53, 4),
(54, 15),
(55, 12),
(56, 12),
(57, 11),
(58, 11),
(59, 5),
(60, 5),
(61, 7),
(62, 7),
(0, 6),
(0, 6),
(0, 6),
(63, 6),
(64, 6),
(0, 1),
(65, 1),
(66, 1),
(67, 10),
(68, 2),
(69, 3),
(70, 3),
(71, 3),
(72, 11),
(0, 11),
(73, 11),
(74, 12),
(75, 12),
(76, 4),
(77, 4),
(0, 10),
(78, 12);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `offer_id`, `user_id`, `order_no`, `details`, `status`, `accept_order`) VALUES
(1, 47, 11, '', 'Can you do college assignments', 'pending', 0),
(2, 46, 18, '', 'Can you fix bugs in my website which is related to Ajax,JavaScript', 'pending', 0),
(3, 48, 18, '', 'Can you create database for my app and get data from database', 'pending', 0),
(4, 52, 9, '', 'Can u make website for our college in .NET', 'pending', 0),
(5, 46, 11, '', 'Can you fix bugs in my website', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `order_id` int(15) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `pass`, `linkedin`, `about`, `picture`, `paypal`) VALUES
(8, 'prashant', 'prashant@jaaga.in', 'jaagajaaga', '', 'Hi,I am prashant.I am fellow at Jaaga study program.I have 1+ years of experience in Programming and web development.My hobbies are playing football,cricket and TT', '../images/prashant.jpg', ''),
(9, 'Freeman Murray', 'freemanmurray@jaaga.in', 'jaagajaaga', '', '', 'images/boy.png', ''),
(10, 'YashRaj', 'yashraj@jaaga.in', 'jaagajaaga', '', 'Hi,have completed B.Tech from VIT in 2013.Have good programming skills,am good at SQL,PHP,C++ and BOOTPLUS', '../images/yash.jpg', ''),
(11, 'Yatintaluja', 'yatin@jaaga.in', 'jaagajaaga', '', '', '../images/profile.jpg', ''),
(12, 'Rahulvenati', 'rahul@jaaga.in', 'jaagajaaga', '', 'HI,am Rahul.I graduated in 2013.I have 2+ years of experience in web development.I am good at PHP,C++,C#,Java', '../images/rahul.jpg', ''),
(13, 'Rajasekhar', 'rajasekhar@jaaga.in', 'jaagajaaga', '', 'hi I am Rajasekhar,am doing Engineering.I have good marketing skills and web developments skills.I am working student job board project', '../images/raj.jpg', ''),
(14, 'Ansal', 'ansal@jaaga.in', 'jaagajaaga', '', 'Hi,am Ansal.I am from Dharmashala.I love JavaScript.I eat ,work,sleep with JavaSCript.I  have good programming skills also', '../images/ansal.jpg', ''),
(15, 'chandrasekharreddy', 'csreddy@jaaga.in', 'jaagajaaga', '', 'Hi,Iam chandrasekhar,have completed B.tech in 2012.I have 2+ years of experience in database design and web development ', '../images/chandu.jpg', ''),
(16, 'Jagan reddy', 'jagan@jaaga.in', 'jaagajaaga', '', 'Hi,am Jagan.I completed MBA in 2008.I have 3+ years of experience in web development.', '../images/jagan.jpg', ''),
(17, 'Harinath', 'hari@jaaga.in', 'jaagajaaga', '', 'Hi I am Hari,have graduated in 2010.I have good experience with Java ,HTML,CSS.I have worked in different companies', '../images/hari.jpg', ''),
(18, 'Manoj.R', 'manoj@jaaga.in', 'jaagajaaga', '', '', 'images/boy.png', ''),
(19, 'saiPrasanth', 'sai@jaaga.in', 'jaagajaaga', '', '', 'images/boy.png', ''),
(20, 'Priyank', 'priyanka@jaaga.in', 'jaagajaaga', '', 'Hi ,I  am Priyanka,have completed B.Tech in 2013.I am good at web designing', '../images/priyanka.jpg', ''),
(21, 'test', 'test@sjb.in', 'test', '', '', '../images/photo0176_001.jpg', ''),
(22, 'test1', 'test1@sjb.in', 'test1', '', '', '../images/boy.png', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
