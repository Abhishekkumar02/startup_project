-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2018 at 03:18 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `admin_id` text NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `center_id` int(11) NOT NULL,
  `admin_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `admin_id`, `admin_name`, `admin_password`, `center_id`, `admin_desc`) VALUES
(1, 'shivamsaxena2206@gmail.com', 'Shivam', 'shivam12', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL,
  `booked_on` date NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `payment_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `booked_on`, `user_id`, `payment_amount`) VALUES
(31, '2017-04-02', 'shivamsaxena2206@gmail.com', 2),
(32, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(33, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(34, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(35, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(36, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(37, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(38, '2017-04-02', 'shivamsaxena2206@gmail.com', 11),
(39, '2018-03-23', 'shivamsaxena2206@gmail.com', 2),
(40, '2018-03-23', 'shivamsaxena2206@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `user_id` text NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `locked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`user_id`, `room_id`, `check_in`, `check_out`, `id`, `date`, `locked`) VALUES
('shivamsaxena2206@gmail.com', 217, '2018-04-03', '2018-04-12', 5, '2018-03-31 14:52:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `center_details`
--

CREATE TABLE `center_details` (
  `center_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `center_desc` text NOT NULL,
  `center_name` varchar(50) NOT NULL,
  `center_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center_details`
--

INSERT INTO `center_details` (`center_id`, `city_id`, `center_desc`, `center_name`, `center_address`) VALUES
(5, 1, 'Huge area', 'PAC', 'Kanth Road'),
(6, 1, 'Green area', 'MIT', 'Ramganga Vihar phase 2'),
(7, 1, 'Very Comfortable area', 'Pili Kothi', 'Civil lines'),
(8, 6, 'Sight seen', 'Zuhu Beach', 'Zuhu Beach'),
(9, 6, 'very large and clean', 'Marin Drive', 'Near Andheri'),
(10, 6, 'Airy and pollution free', 'Andheri West', 'Mumbai'),
(11, 11, 'Open space', 'Civil lines', 'Civil lines'),
(12, 11, 'Very Comfortable area', 'Awas Vikas', 'near Main road'),
(13, 11, 'Airy and pollution free', 'Hawa Mahel', 'Pink city'),
(14, 12, 'Noise free', 'Civil lines', 'Civil lines'),
(15, 13, 'Pollution free', 'Railway colony', 'Near Railway station'),
(16, 13, 'Good Location', 'Arya Nagar', 'Near paramveer road'),
(17, 14, 'very large and clean area', 'Sanjay Nagar', 'Near Vinay Marg'),
(18, 14, 'Everything will be easily available.', 'Keshav Nagar', 'Near Mangal Marg'),
(19, 15, 'Pollution and noise free area', 'Army Area', 'Army link road'),
(20, 15, 'Pollution and noise free area', 'Army Link road', 'Army link road'),
(21, 15, 'Large Space', 'R K Nagar', 'Near Army Public School'),
(22, 16, 'Nice Place', 'Inrahimganj', 'Maan Road'),
(23, 16, 'Very Peaceful ', 'Arif Nagar', 'Near JP Nagar'),
(24, 18, 'Good Location', 'Karmeta', 'Near Army Public School'),
(25, 18, 'Noise and Pollution free', 'Priyadarshini Colony', 'Airport Road'),
(26, 1, 'The awesome place to learn', 'New Spark', 'Near piliKothi'),
(27, 24, 'sidf dufwuod fw efu ', 'New Choices', 'sdfhfioh if wfh ew'),
(28, 24, 'sidf dufwuod fw efu ', 'New Choices', 'sdfhfioh if wfh ew');

-- --------------------------------------------------------

--
-- Table structure for table `chat_info`
--

CREATE TABLE `chat_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_info`
--

INSERT INTO `chat_info` (`id`, `name`, `type`, `uid`, `msg`) VALUES
(1, '', 'hvbhbh', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', 'Hello'),
(2, '', 'hvbhbh', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', 'jdffnvkdfvf\r\n'),
(3, '', 'hvbhbh', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', 'snsdincsd'),
(4, 'Steev Jobs', 'hvbhbh', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', 'nsdcndsicm'),
(5, 'Steev Jobs', 'hvbhbh', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', 'hgvhjgkhk'),
(6, 'SESSION_KEY', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', NULL, 'knckc\r\n'),
(7, 'Steev Jobs', 'hvbhbh', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c', 'HBdjsn\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `city_details`
--

CREATE TABLE `city_details` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL,
  `pincode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_details`
--

INSERT INTO `city_details` (`city_id`, `city_name`, `state_id`, `pincode`) VALUES
(1, 'Moradabad', 1, 0),
(2, 'Kanpur', 1, 0),
(3, 'Lucknow', 1, 0),
(4, 'Agra', 1, 0),
(5, 'Bareilly', 1, 0),
(6, 'Mumbai', 2, 0),
(7, 'Pune', 2, 0),
(8, 'Naagpur', 2, 0),
(9, 'Nashik', 2, 0),
(10, 'Thane', 2, 0),
(11, 'Jaipur', 3, 0),
(12, 'Bikaner', 3, 0),
(13, 'Ajmer', 3, 0),
(14, 'Alwar', 3, 0),
(15, 'Kota', 3, 0),
(16, 'Bhopal', 4, 0),
(17, 'Indore', 4, 0),
(18, 'Jabalpur', 4, 0),
(19, 'Gwalior', 4, 0),
(20, 'Ujjain', 4, 0),
(21, 'Mandu', 4, 0),
(22, 'Satna', 4, 0),
(23, 'Mandu', 2, 0),
(24, 'Ramnagar', 5, 0),
(25, 'Nainital', 5, 0),
(26, 'Haldwani', 5, 0),
(27, 'Dehradoon', 5, 0),
(28, 'Haridwar', 5, 0),
(29, 'Mussoorie', 5, 0),
(30, 'Chandigarh', 6, 0),
(31, 'Ludhiana', 6, 0),
(32, 'Amritsar', 6, 0),
(33, 'Patiala', 6, 0),
(34, 'Jalandhar', 6, 0),
(35, 'Goa', 7, 752744),
(36, 'Dhanora', 1, 234442),
(37, 'noida', 1, 123456),
(38, 'Allahabad', 1, 783973);

-- --------------------------------------------------------

--
-- Table structure for table `courses_details`
--

CREATE TABLE `courses_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_details`
--

INSERT INTO `courses_details` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Metal Handicraft'),
(3, 'Data Mining');

-- --------------------------------------------------------

--
-- Table structure for table `facility_details`
--

CREATE TABLE `facility_details` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(50) NOT NULL,
  `facility_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_details`
--

CREATE TABLE `feedback_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `date` datetime NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_details`
--

INSERT INTO `feedback_details` (`id`, `name`, `feedback`, `date`, `user_email`) VALUES
(1, 'Shivam', 'change your color theme', '2018-03-20 18:18:33', 'shivam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `grievances_details`
--

CREATE TABLE `grievances_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `city` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `category` int(11) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `website` varchar(50) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grievances_details`
--

INSERT INTO `grievances_details` (`id`, `name`, `email`, `contact_no`, `city`, `address`, `category`, `pincode`, `website`, `msg`, `date`) VALUES
(1, 'Shivam Saxena', 'shivamsaxena2206@gmail.com', '2564565', 1, 'af sdf trh rtgdfg sryh 4', 1, '25656', 'wetrert.rwe', 'adrgsrtgsr5 aerdfgdf arrtb drg', '2018-03-31 13:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `investor_details`
--

CREATE TABLE `investor_details` (
  `id` int(11) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `since` varchar(10) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `incorporation_no` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `vercode` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `investor_details`
--

INSERT INTO `investor_details` (`id`, `company_email`, `company_name`, `company_address`, `date`, `since`, `about`, `website`, `incorporation_no`, `password`, `valid`, `vercode`, `phone`) VALUES
(1, 'shivamsaxena2206@gmail.com', 'ABC', 'Civil lines Moradabad', '2018-03-20 19:14:52', '2009', 'We are best', 'abc.com', '123555777', 'a8edf797f8b37110d26a4551429b4c702abafcd5', 1, '107366', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `in_portfolio_details`
--

CREATE TABLE `in_portfolio_details` (
  `intro` varchar(250) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `portfolio_id` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `photo_url` varchar(200) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `phrase` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_portfolio_details`
--

INSERT INTO `in_portfolio_details` (`intro`, `about`, `portfolio_id`, `id`, `name`, `email`, `address`, `photo_url`, `type`, `phrase`, `phone`) VALUES
('sdkcnmdlflm', '1klnmdelkdmvldmf', 'abc@gmail.com', 1, 'Kavish ba', 'kavish@gmail.com', 'MIT Moradabad (UP)', '', 0, 'ksdfnk jdhf isdhf', '4567891235');

-- --------------------------------------------------------

--
-- Table structure for table `in_portfolio_product_details`
--

CREATE TABLE `in_portfolio_product_details` (
  `portfolio_id` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_image_url` varchar(200) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE `master_admin` (
  `id` int(11) NOT NULL,
  `master_id` varchar(30) NOT NULL,
  `master_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`id`, `master_id`, `master_password`) VALUES
(2, 'shivamsaxena2206@gmail.com', 'shivam12');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_details`
--

CREATE TABLE `mentor_details` (
  `name` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `about` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `uid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_details`
--

INSERT INTO `mentor_details` (`name`, `id`, `about`, `type`, `uid`) VALUES
('Mukesh Bhatt', 2, 'Trainer', 'Market Research', 'a7889bb3-040c-4221-bc9c-51deb6aa3e0c');

-- --------------------------------------------------------

--
-- Table structure for table `news_details`
--

CREATE TABLE `news_details` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_details`
--

INSERT INTO `news_details` (`id`, `title`, `msg`, `date`) VALUES
(1, 'Hackathon 3', 'This would be the best ever hackathon in the world. ', '2018-03-31 11:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `notification_details`
--

CREATE TABLE `notification_details` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `isnew` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_details`
--

INSERT INTO `notification_details` (`id`, `title`, `msg`, `date`, `user_id`, `isnew`) VALUES
(24, 'Incubation center', 'A new incubation center has been added by the ministry of skill india', '2018-03-31 03:18:03', 'shivamsaxena2206@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_details`
--

CREATE TABLE `portfolio_details` (
  `intro` varchar(250) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL,
  `portfolio_id` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `photo_url` varchar(200) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `phrase` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_details`
--

INSERT INTO `portfolio_details` (`intro`, `about`, `portfolio_id`, `id`, `name`, `email`, `address`, `photo_url`, `type`, `phrase`, `phone`) VALUES
('Introduction of the start up come here. fill it with dummy data', 'Description will load here. fill it with dummy data', 'shivamsaxena2206@gmail.com', 15, 'Shivam Saxena', 'sbshobhit00@gmail.com', 'C-34 DEEN DAYAL NAGAR ffsdfsdfsdf', '1522340974.jpg', 0, 'We Develop the best in the world', '5112321313');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_product_details`
--

CREATE TABLE `portfolio_product_details` (
  `portfolio_id` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_image_url` varchar(200) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_product_details`
--

INSERT INTO `portfolio_product_details` (`portfolio_id`, `id`, `product_name`, `product_image_url`, `about`) VALUES
('shivamsaxena2206@gmail.com', 31, 'Info', '1522309984.jpg', 'nfkvksld skdvnkd sdvknd'),
('shivamsaxena2206@gmail.com', 32, 'iooo', '1522334568.jpg', 'jgj ujgh hik ;jknk ugu u g'),
('shivamsaxena2206@gmail.com', 33, 'dsdwsd', '1522339142.jpg', 'erferferfer dfver rvec erverfrf');

-- --------------------------------------------------------

--
-- Table structure for table `query_details`
--

CREATE TABLE `query_details` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `query` text NOT NULL,
  `date` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query_details`
--

INSERT INTO `query_details` (`id`, `subject`, `query`, `date`, `email`, `name`) VALUES
(1, 'Need food', 'sihfidf u8fy8 f djfh uif ie f8f e\r\nrgr\r\ner', '2018-03-30 18:21:39', 'sdhfjsjdh@asda.com', 'NN');

-- --------------------------------------------------------

--
-- Table structure for table `request_certified_details`
--

CREATE TABLE `request_certified_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `startup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_certified_details`
--

INSERT INTO `request_certified_details` (`id`, `name`, `user_email`, `user_id`, `date`, `startup`) VALUES
(1, 'User 1', 'user@gmail.com', 'shivamsaxena2206@gmail.com', '2018-03-20 18:12:26', 3),
(2, 'IIO', 'iio@jkl.com', 'shivamsaxena2206@gmail.com', '2018-03-31 10:12:26', 3);

-- --------------------------------------------------------

--
-- Table structure for table `request_funding_details`
--

CREATE TABLE `request_funding_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `date` datetime NOT NULL,
  `startup` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_funding_details`
--

INSERT INTO `request_funding_details` (`id`, `name`, `about`, `date`, `startup`, `user_id`) VALUES
(2, 'P1', 'kshdfj o wief iweog eg', '2018-03-20 17:07:41', 3, 'shivamsaxena2206@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request_trained_details`
--

CREATE TABLE `request_trained_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `course` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_trained_details`
--

INSERT INTO `request_trained_details` (`id`, `name`, `user_email`, `course`, `date`, `user_id`) VALUES
(1, 'Mayur', 'Mayur11@gmail.com', 1, '2018-03-20 18:17:19', 'shivamsaxena2206@gmail.com'),
(2, 'User AA', 'uus34@fgg.com', 1, '2018-03-31 10:10:06', 'shivamsaxena2206@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `resource_id` int(11) NOT NULL,
  `resource_name` varchar(50) NOT NULL,
  `resource_quantity` int(11) NOT NULL,
  `resource_price` int(11) NOT NULL,
  `center_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resource_id`, `resource_name`, `resource_quantity`, `resource_price`, `center_id`) VALUES
(6, 'Ac', 2, 1234, 5);

-- --------------------------------------------------------

--
-- Table structure for table `room_details`
--

CREATE TABLE `room_details` (
  `room_id` int(11) NOT NULL,
  `center_id` int(11) NOT NULL,
  `fac_type` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_details`
--

INSERT INTO `room_details` (`room_id`, `center_id`, `fac_type`, `capacity`, `price`, `room_name`, `room_desc`) VALUES
(217, 5, 1, 22, 1, 'B-100', '15 fans,20 chairs,2 tables,1 projector'),
(218, 5, 2, 22, 15000, 'B-109', '6 tables,7 fans ,12 chairs,1 white board,1 projector'),
(219, 5, 1, 10, 1, 'B-104', '5 fans,10 chairs,10 tables'),
(220, 5, 2, 11, 1, 'B-107', '5 fans,11 chairs,11 tables,1 board'),
(221, 5, 2, 22, 10700, 'B-101', '20 fans,22 chairs,2 tables,1 projector'),
(223, 6, 1, 10, 1, 'A-100', '3 fans,10 chairs,5 tables'),
(224, 6, 2, 30, 1800, 'A-101', '8 fans, 6 round tables,2 desk,30 chairs'),
(225, 6, 1, 15, 95000, 'A-102', '5 rooms,15 chairs, 3 tables,1 board'),
(226, 6, 2, 28, 20000, 'A-103', '20 fans,28 chairs,2 tables,1 projector'),
(227, 6, 1, 14, 950, 'A-110', '3 fans,14 chairs,5 tables'),
(228, 6, 2, 22, 4000, 'A-201', '15 fans,20 chairs'),
(229, 6, 1, 10, 12000, 'A-206', '15 fans,1 round tables,10 chairs'),
(230, 6, 2, 15, 18550, 'A-108', '15 fans,15 chairs,'),
(231, 7, 1, 4, 100, 'B-109', '4 chairs , 1 tables'),
(232, 7, 2, 5, 200, 'B-109', '5 chairs , 1 tables,1 fan'),
(234, 7, 2, 30, 11000, 'B-101', '30 chairs, 20 fans, 9 tables'),
(235, 7, 1, 11, 1000, 'C-100', '4 tables, 11 chairs, 2 borad'),
(236, 7, 1, 15, 500, 'D-100', '5 tables ,15 chairs,5 fans'),
(237, 7, 2, 15, 1000, 'D-109', '3 fans,15 chairs,5 tables'),
(238, 0, 1, 0, 0, '', ''),
(239, 0, 1, 20, 1000, 'D-108', '10 fans,22 chairs,2 tables,1 projector'),
(240, 0, 1, 22, 800, 'D-107', '22 chairs,2 tables'),
(241, 0, 2, 20, 15000, 'A-104', '15 fans,1 tables,20 chairs'),
(242, 8, 1, 30, 12500, 'A-100', '20 fans,30 chairs,2 tables,1 projector'),
(243, 8, 2, 22, 20000, 'A-101', '10 fans,22 chairs,2 tables,1 projector'),
(244, 8, 3, 14, 1000, 'A-102', '3 fans,14 chairs,5 tables'),
(245, 8, 4, 20, 190000, 'A-103', '15 fans,1 tables,20 chairs'),
(247, 6, 1, 70, 200, '67', '200 sq. ft'),
(248, 7, 1, 20, 200, 'G-700', 'Fully Well form'),
(249, 14, 1, 100, 7888, 'V-45', 'Full featured with best purified water supplied'),
(250, 5, 1, 800, 4567, 'U-889', '22 lights 30 fans Generator'),
(251, 5, 3, 600, 3000, 'VG-89', 'Cool and fresh air');

-- --------------------------------------------------------

--
-- Table structure for table `room_type_details`
--

CREATE TABLE `room_type_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type_details`
--

INSERT INTO `room_type_details` (`id`, `name`) VALUES
(1, 'INCUBATOR'),
(2, 'TRAINING'),
(3, 'OFFICE SPACE'),
(4, 'MEETING ROOM'),
(5, 'CONFERENCE ROOM'),
(6, 'ACTIVITY ROOM'),
(7, 'PRESENTATION ROOM'),
(8, 'WORKING SPACE'),
(9, 'LOCKER ROOM'),
(10, 'CAFETERIA');

-- --------------------------------------------------------

--
-- Table structure for table `startup_details`
--

CREATE TABLE `startup_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `incorporation_no` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `city` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `representative` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startup_details`
--

INSERT INTO `startup_details` (`id`, `name`, `address`, `phone`, `website`, `incorporation_no`, `user_id`, `date`, `city`, `type`, `email`, `representative`) VALUES
(3, 'STYKON', 'Ramganga vihar  phase 2', '9999999999', 'stykon.com', 'U74999UP2018PTC101607', 'shivamsaxena2206@gmail.com', '2018-03-23 21:31:54', 1, 1, 'teamstykon@gmail.com', 'Shivam'),
(4, 'pikashi', 'Pili Kothi Moradabad', '9768784333', 'pikashi.com', '89sdfsdfn84839', 'shivamsaxena2206@gmail.com', '2018-03-23 21:13:38', 1, 1, 'teampikashi@gmail.com', 'Pikashi'),
(5, 'aa', 'sdjhf is', '788', 'sdfhj', '', 'shivamsaxena2206@gmail.com', '2018-03-30 16:22:37', 1, 1, 'hjhj@dd.com', 'shjdkfjsd');

-- --------------------------------------------------------

--
-- Table structure for table `startup_type_details`
--

CREATE TABLE `startup_type_details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `startup_type_details`
--

INSERT INTO `startup_type_details` (`id`, `name`) VALUES
(1, 'IT Services'),
(2, 'Agriculture'),
(3, 'Animation'),
(4, 'Interior design'),
(5, 'Art and photography'),
(6, 'Education'),
(7, 'Events'),
(8, 'Food and beverages'),
(9, 'Hardware'),
(10, 'Human resources'),
(11, 'Retail'),
(12, 'House hold services'),
(13, 'Sports'),
(14, 'Textiles'),
(15, 'Travel and tourism');

-- --------------------------------------------------------

--
-- Table structure for table `state_details`
--

CREATE TABLE `state_details` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_details`
--

INSERT INTO `state_details` (`state_id`, `state_name`) VALUES
(1, 'Uttar Pradesh'),
(2, 'Maharashtra'),
(3, 'Rajsthan'),
(4, 'Madhya Pradesh'),
(5, 'UttraKhand'),
(6, 'Punjab'),
(7, 'Goa'),
(9, 'Telanagana');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tag` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tag`) VALUES
(1, 'Business Basics'),
(2, 'Marketing Assistance'),
(3, 'Market Research'),
(4, 'Accounting'),
(5, 'Financial Marketing'),
(6, 'Regulatory Compliance');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `cancelled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`check_in`, `check_out`, `room_id`, `booking_id`, `status`, `id`, `transaction_id`, `cancelled`) VALUES
('2017-04-11', '2017-04-12', 217, 31, 2, 1, '', 1),
('2017-04-16', '2017-04-22', 217, 32, 2, 2, '', 0),
('2017-04-25', '2017-04-26', 217, 32, 2, 3, '', 0),
('2017-04-25', '2017-04-26', 220, 32, 2, 4, '', 0),
('2017-04-16', '2017-04-18', 218, 38, 0, 7, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` text NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_gender` varchar(5) NOT NULL,
  `user_date` date NOT NULL,
  `vercode` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `user_name`, `user_password`, `user_phone`, `user_gender`, `user_date`, `vercode`, `valid`) VALUES
(1, 'shivamsaxena2206@gmail.com', 'Shivam Saxena', 'a8edf797f8b37110d26a4551429b4c702abafcd5', '9897204842', 'M', '2017-04-01', 774460, 1),
(3, 'utkarsh22@gmail.com', 'Utkarsh', '97e6609f2370cb09bcdf664b49c2ed9c4b3cbe62', '9911991199', 'M', '2018-03-21', 805664, 1),
(4, 'kavishbaghel@gmail.com', 'Kavish Baghel', 'a8edf797f8b37110d26a4551429b4c702abafcd5', '7785673922', 'M', '2018-03-24', 848920, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center_details`
--
ALTER TABLE `center_details`
  ADD PRIMARY KEY (`center_id`);

--
-- Indexes for table `chat_info`
--
ALTER TABLE `chat_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_details`
--
ALTER TABLE `city_details`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `courses_details`
--
ALTER TABLE `courses_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility_details`
--
ALTER TABLE `facility_details`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `feedback_details`
--
ALTER TABLE `feedback_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grievances_details`
--
ALTER TABLE `grievances_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_details`
--
ALTER TABLE `investor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_portfolio_details`
--
ALTER TABLE `in_portfolio_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_portfolio_product_details`
--
ALTER TABLE `in_portfolio_product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor_details`
--
ALTER TABLE `mentor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_details`
--
ALTER TABLE `news_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_details`
--
ALTER TABLE `notification_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_details`
--
ALTER TABLE `portfolio_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_product_details`
--
ALTER TABLE `portfolio_product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query_details`
--
ALTER TABLE `query_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_certified_details`
--
ALTER TABLE `request_certified_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_funding_details`
--
ALTER TABLE `request_funding_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_trained_details`
--
ALTER TABLE `request_trained_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `room_details`
--
ALTER TABLE `room_details`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_type_details`
--
ALTER TABLE `room_type_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_details`
--
ALTER TABLE `startup_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `startup_type_details`
--
ALTER TABLE `startup_type_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_details`
--
ALTER TABLE `state_details`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `center_details`
--
ALTER TABLE `center_details`
  MODIFY `center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `chat_info`
--
ALTER TABLE `chat_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `city_details`
--
ALTER TABLE `city_details`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `courses_details`
--
ALTER TABLE `courses_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `facility_details`
--
ALTER TABLE `facility_details`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback_details`
--
ALTER TABLE `feedback_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grievances_details`
--
ALTER TABLE `grievances_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `investor_details`
--
ALTER TABLE `investor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `in_portfolio_details`
--
ALTER TABLE `in_portfolio_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `in_portfolio_product_details`
--
ALTER TABLE `in_portfolio_product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mentor_details`
--
ALTER TABLE `mentor_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_details`
--
ALTER TABLE `news_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification_details`
--
ALTER TABLE `notification_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `portfolio_details`
--
ALTER TABLE `portfolio_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `portfolio_product_details`
--
ALTER TABLE `portfolio_product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `query_details`
--
ALTER TABLE `query_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `request_certified_details`
--
ALTER TABLE `request_certified_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request_funding_details`
--
ALTER TABLE `request_funding_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request_trained_details`
--
ALTER TABLE `request_trained_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `room_details`
--
ALTER TABLE `room_details`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;
--
-- AUTO_INCREMENT for table `room_type_details`
--
ALTER TABLE `room_type_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `startup_details`
--
ALTER TABLE `startup_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `startup_type_details`
--
ALTER TABLE `startup_type_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `state_details`
--
ALTER TABLE `state_details`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
