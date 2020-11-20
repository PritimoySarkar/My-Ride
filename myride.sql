-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2020 at 07:01 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myride`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `lastlog` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `lastlog`) VALUES
(1, 'admin1', 'admin1@gmail.com', 'admin1', ''),
(2, 'admin2', 'admin@myride.com', '12358', NULL),
(5, 'admin3', 'info@myride.com', 'adminadmin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `source` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `hire_type` varchar(10) NOT NULL DEFAULT 'noday',
  `cid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending',
  `cost` int(10) NOT NULL,
  `timing` timestamp NOT NULL,
  PRIMARY KEY (`bid`),
  KEY `BOOK_USER` (`uid`),
  KEY `BOOK_ROUTE` (`rid`),
  KEY `BOOK_DRIVER` (`did`),
  KEY `BOOK_CAR` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `uid`, `rid`, `source`, `destination`, `startdate`, `enddate`, `hire_type`, `cid`, `did`, `status`, `cost`, `timing`) VALUES
(6, 7, 9, 'Kolkata', 'Bhangar', '2020-11-26', '2020-11-28', 'day', 19, 14, 'Rejected', 3600, '2020-11-14 08:31:11'),
(7, 5, 7, 'Kalyani', 'Kolkata', '2020-11-11', '2020-11-25', 'noday', 19, 14, 'Rejected', 15000, '2020-11-14 12:23:53'),
(31, 5, 7, 'Kalyani', 'Kolkata', '2020-11-26', '2020-11-28', 'day', 22, 17, 'Completed', 6400, '2020-11-15 08:12:37'),
(36, 6, 15, 'Bardhaman', 'Kalyani', '2020-11-19', '2020-11-25', 'noday', 21, 16, 'Rejected', 7950, '2020-11-15 11:43:27'),
(37, 6, 21, 'Maheshtala', 'Kalyani', '2020-11-19', '2020-11-25', 'day', 19, 14, 'Completed', 8400, '2020-11-15 11:44:01'),
(38, 6, 31, 'Maheshtala', 'Howrah', '2020-11-19', '2020-11-24', 'day', 20, 15, 'Rejected', 7530, '2020-11-15 13:17:56'),
(39, 5, 37, 'Bhangar', 'Sonarpur', '2020-11-26', '2020-11-26', 'day', 20, 15, 'Approved', 1860, '2020-11-15 16:46:36'),
(40, 5, 28, 'Howrah', 'Kolkata', '2020-10-15', '2020-11-26', 'noday', 24, 19, 'Rejected', 54725, '2020-11-15 20:45:57'),
(41, 5, 14, 'Bhangar', 'Kalyani', '2020-11-19', '2020-11-25', 'day', 21, 16, 'Approved', 8960, '2020-11-16 11:16:16'),
(68, 3, 14, 'Bhangar', 'Kalyani', '2020-11-19', '2020-11-25', 'day', 22, 17, 'Rejected', 13440, '2020-11-16 11:43:56'),
(74, 3, 14, 'Kalyani', 'Bhangar', '2020-11-19', '2020-11-25', 'day', 20, 15, 'Completed', 9940, '2020-11-16 14:06:32'),
(75, 3, 14, 'Bhangar', 'Kalyani', '2020-11-19', '2020-11-27', 'day', 21, 16, 'Rejected', 11160, '2020-11-16 14:10:59'),
(80, 5, 13, 'Basirhat', 'Kalyani', '2020-11-19', '2020-11-25', 'day', 20, 15, 'Completed', 9940, '2020-11-18 10:54:27'),
(81, 5, 14, 'Kalyani', 'Bhangar', '2020-11-19', '2020-11-25', 'noday', 24, 19, 'Pending', 9550, '2020-11-18 10:55:28'),
(82, 5, 14, 'Kalyani', 'Bhangar', '2020-11-19', '2020-11-25', 'day', 21, 16, 'Pending', 8960, '2020-11-18 14:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `registrationNo` varchar(15) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `cname` text NOT NULL,
  `ctype` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `ccolor` text NOT NULL,
  `cseat` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `farepkm` int(11) NOT NULL,
  `farepd` int(11) NOT NULL,
  `pic` text NOT NULL,
  `datetime` text,
  PRIMARY KEY (`cid`),
  KEY `DRIV_CAR` (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`cid`, `registrationNo`, `brand`, `cname`, `ctype`, `category`, `ccolor`, `cseat`, `did`, `farepkm`, `farepd`, `pic`, `datetime`) VALUES
(19, 'WB24JK7523', 'Maruti Suzuki', 'EECO', 'Private', 'Van', 'Blue', 5, 14, 20, 1000, 'uploaded/cars/18-11-2020_10-32-26am19.png', '01/11/2020 07:43:28pm'),
(20, 'WB43KL2355', 'Maruti Suzuki', 'Wagon R', 'Private', 'Hatchback', 'Poolside Blue', 5, 15, 22, 1200, 'uploaded/cars/02-11-2020_01-29-52amPOOLSIDE-BLUE.png', '02/11/2020 01:29:52am'),
(21, 'WB24JK7763', 'Maruti Suzuki', 'Celerio', 'Private', 'Hatchback', 'Blazing Red', 5, 16, 18, 1100, 'uploaded/cars/02-11-2020_01-31-17amUSE-THIS-RED.png', '02/11/2020 01:31:17am'),
(22, 'WB37PK7523', 'Maruti Suzuki', 'Ertiga', 'Private', 'SUV', 'white', 7, 17, 32, 1600, 'uploaded/cars/02-11-2020_01-33-07amartic-white.png', '02/11/2020 01:33:07am'),
(24, 'WB48TV2355', 'Maruti Suzuki', 'Brezza', 'Private', 'SUV', 'Red and Black', 5, 19, 25, 1300, 'uploaded/cars/16-11-2020_01-59-30amBREZZA.png', '16/11/2020 01:59:30am'),
(28, 'WB28BD2365', 'Maruti Suzuki', 'S Presso', 'Private', 'SUV', 'Metalic Gray', 5, 18, 23, 1300, 'uploaded/cars/18-11-2020_02-54-26amgrey.png', '18/11/2020 02:54:26am'),
(29, 'WB3592KS32', 'Datsun', 'Redi-Go', 'Private', 'Hatchback', 'Blue', 3, 20, 18, 1000, 'uploaded/cars/20-11-2020_01-56-51am29.png', '20/11/2020 01:51:37am'),
(30, 'WB3472VG99', 'Datsun', 'Go +', 'Private', 'SUV', 'Brown', 5, 21, 27, 1450, 'uploaded/cars/20-11-2020_02-03-51am24.jpg.ximg.c1h.360.png', '20/11/2020 02:03:51am'),
(31, 'WB2343HJ12', 'Toyota', 'Fotuner', 'Private', 'SUV', 'White', 5, 22, 28, 1600, 'uploaded/cars/20-11-2020_02-29-59amfortuner-car-rental-gogosabah-13.png', '20/11/2020 02:29:59am'),
(32, 'WB3745BD23', 'Toyota', 'Velfire', 'Private', 'Van', 'White', 5, 23, 38, 2100, 'uploaded/cars/20-11-2020_12-16-43pm32.png', '20/11/2020 02:42:03am'),
(33, 'WB2375GJ17', 'Tata', 'ACE Gold', 'Commercial', 'Light Truck', 'Irish Cream', 2, 26, 18, 1000, 'uploaded/cars/20-11-2020_12-15-08pmtata-ace-gold-diesel.png', '20/11/2020 12:15:08pm'),
(34, 'WB2845GK17', 'Tata', 'Yodha Pickup', 'Commercial', 'Light Truck', 'White', 2, 28, 8, 900, 'uploaded/cars/20-11-2020_12-20-26pmtata-yodha-sc-4-4-hero-shot-rh-large.png', '20/11/2020 12:20:26pm'),
(35, 'WB7816HJ12', 'Tata', 'Intra V30', 'Commercial', 'Light Truck', 'Blue', 2, 25, 8, 700, 'uploaded/cars/20-11-2020_12-23-38pm35.png', '20/11/2020 12:21:38pm'),
(36, 'WB2784TJ17', 'Tata', '407 Gold SFC', 'Commercial', 'Medium Truck', 'White', 3, 24, 22, 2600, 'uploaded/cars/20-11-2020_12-27-08pm36.png', '20/11/2020 12:26:08pm'),
(37, 'WB2384HK17', 'Tata', '1412 LPT', 'Commercial', 'Heavy Truck', 'Reddish Brown', 5, 27, 46, 3700, 'uploaded/cars/20-11-2020_12-29-53pm1412-lpt-overview.png', '20/11/2020 12:29:53pm');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` text NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL DEFAULT 'Male',
  `phno` bigint(20) NOT NULL,
  `lic` text NOT NULL,
  `pic` text NOT NULL,
  `datetime` text,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`did`, `dname`, `address`, `age`, `gender`, `phno`, `lic`, `pic`, `datetime`) VALUES
(14, 'Suparna Saha', 'Kolkata', 22, 'Female', 98749874, 'WBJK235KL5', 'uploaded/drivers/20-11-2020_10-22-28am14.jpg', '02/11/2020 02:46:39am'),
(15, 'Baishakhi Majumdar', 'Mumbai', 23, 'Female', 9874236452, 'WBJK278KL2', 'uploaded/drivers/20-11-2020_10-22-40am15.jpg', '02/11/2020 02:47:37am'),
(16, 'Biplab Roy', 'Kolkata', 32, 'Male', 8582746532, 'WBJH237KL1', 'uploaded/drivers/20-11-2020_10-26-05am16.jpg', '02/11/2020 02:52:05am'),
(17, 'Atifa Sultana', 'Goa', 26, 'Female', 8745963284, 'WBJK277GT43', 'uploaded/drivers/20-11-2020_10-22-51am17.jpg', '02/11/2020 03:02:34am'),
(18, 'Nadia Ali', 'Kolkata', 21, 'Female', 9887546215, 'WBJK358KL2', 'uploaded/drivers/20-11-2020_10-27-33am18.jpg', '02/11/2020 03:06:04am'),
(19, 'Kaisar Kaifi', 'Goa', 22, 'Male', 854697235, 'WBJH2337T1', 'uploaded/drivers/20-11-2020_10-26-33am19.jpg', '02/11/2020 03:07:11am'),
(20, 'Rahul Sarkar', 'Gujrat', 31, 'Male', 785469234, 'WBJH782KL1', 'uploaded/drivers/20-11-2020_10-26-48am20.jpg', '02/11/2020 03:13:41am'),
(21, 'Subham Basak', 'Mumbai', 26, 'Male', 754123698, 'WBJ2837KL1', 'uploaded/drivers/20-11-2020_10-29-15am21.jpg', '02/11/2020 03:18:39am'),
(22, 'Sujan Chowdhury', 'Delhi', 26, 'Male', 7548632452, 'JK429534C2', 'uploaded/drivers/20-11-2020_02-27-47am800px_COLOURBOX5006575.jpg', '20/11/2020 02:27:47am'),
(23, 'Mukhesh Biswas', '26', 32, 'Male', 5648977215, 'JH234234H2', 'uploaded/drivers/20-11-2020_02-28-55amindian-middle-aged-man-portrait-53536271.jpg', '20/11/2020 02:28:55am'),
(24, 'Subhas Das', 'Hariyana', 36, 'Male', 8975213247, 'WBJT787KL1', 'uploaded/drivers/20-11-2020_10-46-25amportrait-of-a-truck-driver-C87A38.jpg', '20/11/2020 10:46:25am'),
(25, 'Aman Ali', 'Kolkata', 33, 'Male', 8791698648, 'WBJK284RT43', 'uploaded/drivers/20-11-2020_10-49-30amBlog-Image-41.jpg', '20/11/2020 10:49:30am'),
(26, 'Amina Khatun', 'Bhopal', 29, 'Female', 6548974687, 'WBJH275TL1', 'uploaded/drivers/20-11-2020_11-00-42amunnamed (2).jpg', '20/11/2020 11:00:42am'),
(27, 'Tahir Akhtar', 'Kolkata', 30, 'Male', 6548945678, 'WBJL4527KL1', 'uploaded/drivers/20-11-2020_11-13-15amSightsavers-India-truckers-programme-Sandeep.jpg', '20/11/2020 11:13:15am'),
(28, 'Sneha Kundu', 'Barasat', 26, 'Female', 8975216987, 'WBTF867KL1', 'uploaded/drivers/20-11-2020_11-14-48amSuja-Thankachan-UAE-bus-driver_16e461ea2a5_large.jpg', '20/11/2020 11:14:48am');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS `route` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `source` text NOT NULL,
  `destination` text NOT NULL,
  `distance` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`rid`, `source`, `destination`, `distance`) VALUES
(7, 'Kalyani', 'Kolkata', 50),
(9, 'Bhangar', 'Kolkata', 30),
(10, 'Basirhat', 'Maheshtala', 80),
(11, 'Kolkata', 'Basirhat', 65),
(13, 'Kalyani', 'Basirhat', 70),
(14, 'Kalyani', 'Bhangar', 70),
(15, 'Kalyani', 'Bardhaman', 75),
(16, 'Bardhaman', 'Bhangar', 130),
(17, 'Bardhaman', 'Basirhat', 45),
(18, 'Maheshtala', 'Bhangar', 40),
(19, 'Maheshtala', 'Bardhaman', 130),
(20, 'Maheshtala', 'Kolkata', 20),
(21, 'Maheshtala', 'Kalyani', 70),
(22, 'Rajarhat', 'Kalyani', 50),
(23, 'Rajarhat', 'Kolkata', 20),
(24, 'Rajarhat', 'Bhangar', 26),
(25, 'Rajarhat', 'Basirhat', 30),
(26, 'Rajarhat', 'Maheshtala', 30),
(27, 'Howrah', 'Kalyani', 50),
(28, 'Howrah', 'Kolkata', 5),
(29, 'Howrah', 'Bhangar', 30),
(30, 'Howrah', 'Basirhat', 70),
(31, 'Howrah', 'Maheshtala', 15),
(32, 'Howrah', 'Rajarhat', 15),
(33, 'Rajarhat', 'Bardhaman', 100),
(34, 'Howrah', 'Bardhaman', 100),
(35, 'Sonarpur', 'Kolkata', 20),
(36, 'Sonarpur', 'Kalyani', 70),
(37, 'Sonarpur', 'Bhangar', 30),
(38, 'Sonarpur', 'Basirhat', 70),
(39, 'Sonarpur', 'Maheshtala', 20),
(40, 'Sonarpur', 'Bardhaman', 120),
(41, 'Sonarpur', 'Rajarhat', 25),
(42, 'Sonarpur', 'Howrah', 20),
(43, 'Bardhaman', 'Kolkata', 100),
(44, 'Bhangar', 'Basirhat', 45);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `dob` date NOT NULL,
  `phno` bigint(20) NOT NULL,
  `pic` text,
  `doj` date DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `gender`, `password`, `dob`, `phno`, `pic`, `doj`) VALUES
(3, 'Pritimoy sarkar', 'pritimoysarkar@gmail.com', 'Male', '12345678', '1999-09-03', 12547896543, 'uploaded/users/17-11-2020_00-14-33am3.jpeg', '2020-10-29'),
(4, 'Anik Dutta', 'anik@gmail.com', 'Male', '87654321', '2020-10-29', 1234567890, 'uploaded/users/17-11-2020_02-16-08am4.jpg', '2020-10-29'),
(5, 'Swapnaneel Chakraborty', 'swap@gmail.com', 'Male', '1234567890', '1999-06-10', 9874563210, 'uploaded/users/18-11-2020_16-24-57pm5.jpg', '2020-11-13'),
(6, 'Sinjana Saha', 'sinjana@gmail.com', 'Female', 'sinj12345', '2000-07-07', 4567891235, 'uploaded/users/13-11-2020_17-51-16pmsinjana.jpg', '2020-11-13'),
(7, 'Subhajit Sarkar', 'subhajit@gmail.com', 'Male', '123654789', '1999-12-04', 8529637415, 'uploaded/users/13-11-2020_18-21-43pmsubhajeet.jpg', '2020-11-13'),
(8, 'Surprise', 'surprise@gmail.com', 'Male', '123789456', '1994-07-07', 7418529630, 'uploaded/users/17-11-2020_02-35-03amWhatsApp Image 2020-09-17 at 12.16.12 PM.jpeg', '2020-11-17'),
(10, 'Confusion', 'conf@gmail.com', 'Male', '123456', '2003-02-06', 124578965326, 'uploaded/users/17-11-2020_02-39-43am2671e0601faf3b43874e061ff665e3e2.png', '2020-11-17'),
(11, 'no face', 'noface@gmail.com', 'Other', '456789', '2006-07-13', 1254763985, NULL, '2020-11-17');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `BOOK_CAR` FOREIGN KEY (`cid`) REFERENCES `car` (`cid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `BOOK_DRIVER` FOREIGN KEY (`did`) REFERENCES `driver` (`did`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `BOOK_ROUTE` FOREIGN KEY (`rid`) REFERENCES `route` (`rid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `BOOK_USER` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `DRIV_CAR` FOREIGN KEY (`did`) REFERENCES `driver` (`did`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
