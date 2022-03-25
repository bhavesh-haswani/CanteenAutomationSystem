-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 10, 2021 at 06:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Password`, `id`) VALUES
('kiran', '123456', 1),
('JOHN', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Kiran Makhija', 'kiran@gmail.com', 7894561230, 'hello hi'),
(2, 'kiran.m', 'kiran@gmail.com', 1234567890, 'hello welcome'),
(3, 'amit', 'am@gmail.com', 7894561231, 'hello'),
(4, 'ki', 'kiran@gmail.com', 7894561232, 'hello'),
(5, 'Kiran Makhija', 'kiran@gmail.com', 7894561230, 'hello bye '),
(9, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 9111111111, 'testing on may 7 12:18PM'),
(10, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 9111111111, 'testing on may 7 12:18PM'),
(22, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 9192709188, '2:33');

-- --------------------------------------------------------

--
-- Table structure for table `foodorder`
--

CREATE TABLE `foodorder` (
  `Orderid` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `AmtPaid` float NOT NULL,
  `todiscount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodorder`
--

INSERT INTO `foodorder` (`Orderid`, `OrderDate`, `UserName`, `AmtPaid`, `todiscount`) VALUES
(12, '2021-05-08', 'JOHN', 70, 0),
(13, '2021-05-08', 'JOHN', 70, 0),
(14, '2021-05-08', 'JOHN,1,0,0,11,22', 420, 0),
(15, '2021-05-08', 'JOHN', 70, 0),
(16, '2021-05-08', 'JOHN', 70, 0),
(17, '2021-05-09', 'JOHN', 70, 0),
(18, '2021-05-09', 'JOHN', 70, 0),
(19, '2021-05-09', 'JOHN', 70, 0),
(20, '2021-05-09', 'JOHN', 0, 0),
(34, '2021-05-09', 'JOHN', 0, 0),
(38, '2021-05-09', 'JOHN', 70, 0),
(46, '2021-05-09', 'JOHN', 70, 0),
(47, '2021-05-09', 'JOHN', 0, 0),
(48, '2021-05-09', 'JOHN', 0, 0),
(49, '2021-05-09', 'JOHN', 0, 0),
(50, '2021-05-09', 'JOHN', 0, 0),
(63, '2021-05-09', 'JOHN', 40, 0),
(64, '2021-05-09', 'JOHN', 40, 0),
(65, '2021-05-09', 'JOHN', 40, 0),
(66, '2021-05-09', 'JOHN', 140, 0),
(67, '2021-05-09', '', 140, 0),
(72, '2021-05-09', 'JOHN', 90, 0),
(76, '2021-05-09', 'JOHN', 90, 0),
(77, '2021-05-09', 'JOHN', 90, 0),
(78, '2021-05-09', 'JOHN', 90, 0),
(79, '2021-05-09', 'JOHN', 90, 0),
(80, '2021-05-09', 'JOHN', 90, 0),
(81, '2021-05-09', 'JOHN', 90, 0),
(82, '2021-05-09', 'JOHN', 90, 0),
(83, '2021-05-09', 'JOHN', 90, 0),
(84, '2021-05-09', 'JOHN', 90, 0),
(85, '2021-05-09', 'JOHN', 90, 0),
(86, '2021-05-09', 'JOHN', 90, 0),
(87, '2021-05-09', 'JOHN', 90, 0),
(88, '2021-05-09', 'JOHN', 70, 0),
(89, '2021-05-09', 'JOHN', 70, 0),
(90, '2021-05-09', 'JOHN', 0, 0),
(100, '2021-05-09', 'JOHN', 0, 0),
(101, '2021-05-09', 'JOHN', 135, 0),
(102, '2021-05-09', 'JOHN', 135, 0),
(103, '2021-05-09', 'JOHN', 105, 0),
(104, '2021-05-09', 'JOHN', 105, 0),
(105, '2021-05-09', 'JOHN', 105, 0),
(106, '2021-05-09', 'JOHN', 0, 0),
(107, '2021-05-09', 'JOHN', 105, 0),
(108, '2021-05-09', 'JOHN', 40, 0),
(109, '2021-05-09', 'JOHN', 40, 0),
(110, '2021-05-09', 'JOHN', 600, 0),
(111, '2021-05-09', 'JOHN', 509, 91),
(112, '2021-05-09', 'JOHN', 55, 10),
(113, '2021-05-09', 'JOHN', 60, 10),
(114, '2021-05-09', 'JOHN', 40, 0),
(115, '2021-05-09', 'JOHN', 509, 91),
(116, '2021-05-09', 'JOHN', 1162, 183),
(117, '2021-05-09', 'JOHN', 559, 91),
(118, '2021-05-09', 'JOHN', 60, 5),
(119, '2021-05-09', 'JOHN', 0, 0),
(120, '2021-05-09', 'bh9', 40, 0),
(121, '2021-05-10', 'bh10', 125, 15),
(122, '2021-05-10', 'bh10', 170, 15),
(123, '2021-05-10', 'bh10', 60, 5),
(124, '2021-05-10', 'bh10', 60, 5),
(125, '2021-05-10', 'bh10', 60, 5),
(126, '2021-05-10', 'bh10', 75, 10),
(127, '2021-05-10', 'bh10', 65, 10),
(128, '2021-05-10', 'bh10', 65, 10),
(139, '2021-05-10', 'bh10', 65, 10),
(140, '2021-05-10', 'bh10', 65, 10),
(141, '2021-05-10', 'bh10', 125, 15),
(142, '2021-05-10', 'bh10', 125, 15),
(143, '2021-05-10', 'bh10', 125, 15),
(144, '2021-05-10', 'bh10', 125, 15),
(145, '2021-05-10', 'bh10', 65, 10),
(146, '2021-05-10', 'bh10', 65, 10),
(147, '2021-05-10', 'bh10', 125, 15),
(148, '2021-05-10', 'bh10', 125, 15),
(149, '2021-05-10', 'bh10', 65, 10);

-- --------------------------------------------------------

--
-- Table structure for table `menucategory`
--

CREATE TABLE `menucategory` (
  `category` int(11) NOT NULL,
  `catdesc` varchar(50) NOT NULL,
  `CatImg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menucategory`
--

INSERT INTO `menucategory` (`category`, `catdesc`, `CatImg`) VALUES
(3, 'soups', ''),
(5, 'starters', ''),
(6, 'Rice', ''),
(7, 'beverages', ''),
(23, '123', 'unhealthiest-foods-planet.jpg'),
(25, 'Dosas', '63841432.webp'),
(27, 'Offers', 'unhealthiest-foods-planet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `Category` int(11) NOT NULL,
  `MenuItemID` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `ItemImg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`Category`, `MenuItemID`, `ItemName`, `Price`, `Discount`, `ItemImg`) VALUES
(2, 2, 'manchau soup', 75, 10, 'download.jfif'),
(2, 3, 'sweet corn soup', 80, 10, ''),
(5, 4, 'Chilly Gravy/Dry', 70, 5, ''),
(5, 5, 'Veg Manchurian', 70, 5, ''),
(5, 7, 'veg. Spring Roll', 75, 10, ''),
(5, 8, 'veg Crispy', 70, 5, ''),
(5, 9, 'veg. Chinese Bhel', 70, 5, ''),
(6, 10, 'veg. Fried Rice', 65, 10, ''),
(6, 11, ' veg.Schezwan Rice', 65, 5, ''),
(6, 12, 'Veg. Triple Rice', 75, 5, ''),
(6, 13, 'Noodles', 65, 5, ''),
(6, 14, 'veg. Noodles', 80, 5, ''),
(6, 15, 'Paneer Fried Rice', 70, 5, ''),
(7, 16, 'Tea', 15, 0, ''),
(7, 17, 'coffee', 30, 0, ''),
(7, 18, 'Sweet Lassi', 18, 0, ''),
(7, 19, 'Mosambhi Juice', 40, 0, 'Sweet-Lime-Mosambi-Benefits-in-Hindi-1.jpg'),
(7, 20, 'Apple Juice', 40, 0, ''),
(8, 22, 'Orange Juice', 40, 5, ''),
(3, 27, 'masala dosa', 10, 1, ''),
(8, 31, 'pizza', 600, 91, 'images.jpg'),
(3, 32, 'SWEET CORN SOUP', 95, 1, 'Sweet-Corn-soup.jpg'),
(7, 33, 'Pepsi', 50, 0, '750ml-pepsi-cold-drink-500x500.jpg'),
(26, 34, 'pizza', 600, 91, 'Sweet-Corn-soup.jpg'),
(3, 35, 'tomato soup', 80, 10, 'Tomato-soup.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `nox` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` float NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`nox`, `orderid`, `itemid`, `quantity`, `amount`, `discount`) VALUES
(1, 8, 31, 1, 70, 0),
(2, 8, 10, 1, 70, 0),
(3, 8, 10, 1, 70, 0),
(4, 8, 10, 1, 70, 0),
(5, 9, 31, 1, 70, 0),
(6, 9, 10, 1, 70, 0),
(7, 9, 10, 1, 70, 0),
(8, 9, 10, 1, 70, 0),
(9, 10, 31, 1, 70, 0),
(10, 10, 10, 1, 70, 0),
(11, 10, 10, 1, 70, 0),
(12, 10, 10, 1, 70, 0),
(13, 10, 12, 1, 70, 0),
(14, 11, 10, 1, 70, 0),
(15, 12, 10, 1, 70, 0),
(16, 13, 10, 1, 70, 0),
(17, 15, 0, 1, 70, 0),
(18, 16, 0, 1, 70, 0),
(19, 17, 0, 1, 70, 0),
(20, 19, 0, 1, 70, 0),
(21, 35, 22, 1, 70, 0),
(22, 35, 22, 1, 70, 0),
(23, 35, 22, 1, 70, 0),
(24, 35, 11, 1, 70, 0),
(25, 36, 22, 1, 70, 0),
(26, 36, 22, 1, 70, 0),
(27, 36, 22, 1, 70, 0),
(28, 36, 11, 1, 70, 0),
(29, 38, 22, 1, 70, 0),
(30, 72, 33, 1, 50, 0),
(31, 73, 33, 1, 50, 0),
(32, 74, 33, 1, 50, 0),
(33, 75, 33, 1, 50, 0),
(34, 76, 33, 1, 50, 0),
(35, 77, 33, 1, 50, 0),
(36, 78, 33, 1, 50, 0),
(37, 79, 33, 1, 50, 0),
(38, 80, 33, 1, 50, 0),
(40, 81, 33, 1, 50, 0),
(42, 82, 33, 1, 50, 0),
(44, 83, 33, 1, 50, 0),
(45, 84, 20, 1, 40, 0),
(46, 84, 33, 1, 50, 0),
(47, 85, 20, 1, 40, 0),
(48, 85, 33, 1, 50, 0),
(49, 86, 20, 1, 40, 0),
(50, 86, 33, 1, 50, 0),
(51, 87, 20, 1, 40, 0),
(52, 87, 33, 1, 50, 0),
(53, 100, 11, 1, 0, 0),
(54, 101, 11, 1, 65, 0),
(55, 101, 1, 1, 70, 0),
(56, 108, 19, 1, 40, 0),
(57, 110, 31, 1, 600, 0),
(58, 111, 31, 1, 600, 91),
(59, 112, 10, 1, 65, 10),
(60, 113, 1, 1, 70, 10),
(61, 114, 19, 1, 40, 0),
(62, 115, 31, 1, 600, 91),
(63, 116, 34, 1, 600, 91),
(64, 116, 32, 1, 95, 1),
(65, 116, 33, 1, 50, 0),
(66, 116, 31, 1, 600, 91),
(67, 117, 31, 1, 600, 91),
(68, 117, 33, 1, 50, 0),
(69, 118, 11, 1, 65, 5),
(70, 120, 19, 1, 40, 0),
(71, 121, 2, 1, 75, 10),
(72, 121, 11, 1, 65, 5),
(73, 122, 20, 1, 40, 0),
(74, 122, 11, 1, 65, 5),
(75, 122, 3, 1, 80, 10),
(76, 123, 11, 1, 65, 5),
(77, 124, 11, 1, 65, 5),
(78, 125, 11, 1, 65, 5),
(79, 126, 2, 1, 75, 10),
(85, 134, 2, 1, 75, 10),
(86, 135, 2, 1, 75, 10),
(87, 136, 2, 1, 75, 10),
(88, 137, 2, 1, 75, 10),
(89, 138, 2, 1, 75, 10),
(90, 139, 2, 1, 75, 10),
(91, 140, 2, 1, 75, 10),
(92, 141, 2, 1, 75, 10),
(93, 141, 11, 1, 65, 5),
(94, 142, 2, 1, 75, 10),
(95, 142, 11, 1, 65, 5),
(96, 143, 2, 1, 75, 10),
(97, 143, 11, 1, 65, 5),
(98, 144, 2, 1, 75, 10),
(99, 144, 11, 1, 65, 5),
(100, 145, 2, 1, 75, 10),
(101, 146, 2, 1, 75, 10),
(102, 147, 2, 1, 75, 10),
(103, 148, 2, 1, 75, 10),
(104, 149, 2, 1, 75, 10);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `email`, `password`, `utype`) VALUES
(1, 'aa', 'kia@gmail.com', '147852', 'user'),
(2, 'JOHN', 'may61055pm@gmail.com', '123', 'admin'),
(3, 'kihan', 'kiha@gmail.com', '456789', 'user'),
(4, 'kiran', 'kiran@gmail.com', '123456789', 'user'),
(5, 'BHAVESH', 'bhavesh@gmail.com', '123', 'admin'),
(6, 'JOHN1', 'john1@gmail.com', '123', 'user'),
(9, 'john2', 'john2@gmail.com', '456', 'user'),
(10, 'john3', 'john3@gmail.com', '789', 'user'),
(11, 'kiran91', 'kiran91@gmail.com', '456', 'user'),
(12, 'bh9', 'bh9@gmail.com', '123', 'user'),
(13, 'bh10', 'bh10@gmail.com', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodorder`
--
ALTER TABLE `foodorder`
  ADD PRIMARY KEY (`Orderid`);

--
-- Indexes for table `menucategory`
--
ALTER TABLE `menucategory`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
  ADD PRIMARY KEY (`MenuItemID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`nox`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `Orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `nox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
