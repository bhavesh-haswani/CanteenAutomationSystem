-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 08, 2021 at 06:34 PM
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
(6, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 0, 'MAY 7 11:58AM'),
(7, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 57, 'MAY 7 11:58AM'),
(8, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 123, 'testing feedback in customer page on MAY7,2021 12:13AM'),
(9, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 9111111111, 'testing on may 7 12:18PM'),
(10, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 9111111111, 'testing on may 7 12:18PM'),
(11, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 15, 'testing on may7 12:22PM'),
(12, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 95, 'may 7 8:33PM'),
(13, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 0, 'may 7 5:41PM'),
(14, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 91, 'may 7 5:41PM'),
(15, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 91, 'may 7 5:41PM'),
(16, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 111, 'may 7 5:41PM'),
(17, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 0, '8:54pm'),
(18, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 78, '8:54pm'),
(19, 'Bhavesh', 'bhaveshhaswani19@gmail.com', 0, '900pm');

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `foodmenuid` int(11) NOT NULL,
  `foodname` varchar(100) DEFAULT NULL,
  `foodprice` int(11) DEFAULT NULL,
  `foodtype` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`foodmenuid`, `foodname`, `foodprice`, `foodtype`) VALUES
(1, 'Hot and Sour', 50, 'soups'),
(2, 'Manchau', 50, 'soups'),
(3, 'Sweet Corn', 50, 'soups'),
(4, 'tomato', 50, 'soups'),
(5, 'Chilly Gravy/dry ', 70, 'Staters'),
(6, 'Manchurian Gravy/dry ', 70, 'Staters'),
(7, '65 Gravy/dry ', 70, 'Staters'),
(8, 'Spring Roll ', 70, 'Staters'),
(9, 'Crispy ', 70, 'Staters'),
(10, 'Chinese Bhel ', 65, 'Staters'),
(11, 'Fried Rice ', 55, 'maincourse'),
(12, 'Schezwan Rice ', 60, 'maincourse'),
(13, 'Triple Rice ', 70, 'maincourse'),
(14, 'Noodles ', 60, 'maincourse'),
(15, 'Schezwan Noodles ', 70, 'maincourse'),
(16, 'Paneer Fried Rice ', 70, 'maincourse'),
(17, 'Tea ', 15, 'beverages'),
(18, 'Coffee', 30, 'beverages'),
(19, 'Sweet Lassi', 18, 'beverages'),
(20, 'Mosambhi Juice', 35, 'beverages'),
(21, 'Apple Juice', 40, 'beverages'),
(22, 'Any Colddrinks ', 40, 'beverages');

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
(1, '0000-00-00', 'kiran', 150, 0.5),
(2, '2021-05-05', '', 70, 0),
(3, '2021-05-05', '', 280, 0),
(4, '2021-05-05', '', 560, 0),
(5, '2021-05-05', '', 700, 0),
(6, '2021-05-06', '', 140, 0),
(7, '2021-05-06', '', 70, 0),
(8, '2021-05-08', '', 560, 0),
(9, '2021-05-08', '', 560, 0),
(10, '2021-05-08', '', 630, 0),
(11, '2021-05-08', '', 70, 0),
(12, '2021-05-08', 'JOHN', 70, 0),
(13, '2021-05-08', 'JOHN', 70, 0),
(14, '2021-05-08', 'JOHN,1,0,0,11,22', 420, 0),
(15, '2021-05-08', 'JOHN', 70, 0),
(16, '2021-05-08', 'JOHN', 70, 0);

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
(6, 'Rice and Noddles', ''),
(7, 'beverages', ''),
(8, '57716am', ''),
(9, 'may 8 5:15PM', ''),
(10, 'may 8 5:17PM', ''),
(11, 'may 8 5:17PM', ''),
(12, 'may 8 5:17PM', ''),
(13, 'may 8 5:17PM', ''),
(14, 'may 8 5:25PM', ''),
(15, 'may 8 5:25PM', ''),
(16, 'may 8 5:53PM', ''),
(17, 'may 8 5:53PM', ''),
(18, 'may 8 5:17PM', ''),
(19, 'may 8 5:17PM', ''),
(20, '57716am', ''),
(21, '57716am', ''),
(22, '123', ''),
(23, '123', 'unhealthiest-foods-planet.jpg'),
(24, '57716am', 'download.jpg'),
(25, '57716am', 'download.jpg');

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
(0, 0, 'tomato soup', 70, 10, ''),
(2, 1, 'Tomato Soup', 70, 10, ''),
(2, 2, 'manchau soup', 75, 10, ''),
(2, 3, 'sweet corn soup', 80, 10, ''),
(5, 4, 'Chilly Gravy/Dry', 70, 5, ''),
(5, 5, 'Veg Manchurian Gravy/Dry', 70, 5, ''),
(5, 6, 'veg. 65 Gravy/Dry', 75, 5, ''),
(5, 7, 'veg. Spring Roll', 75, 10, ''),
(5, 8, 'veg. Crispy', 75, 5, ''),
(5, 9, 'veg. Chinese Bhel', 70, 5, ''),
(6, 10, 'veg. Fried Rice', 65, 10, ''),
(6, 11, ' veg.Schezwan Rice', 65, 5, ''),
(6, 12, 'Veg. Triple Rice', 75, 5, ''),
(6, 13, 'Noodles', 65, 5, ''),
(6, 14, 'veg. Schezwan Noodles', 80, 5, ''),
(6, 15, 'veg. Paneer Fried Rice', 70, 5, ''),
(7, 16, 'Tea', 15, 0, ''),
(7, 17, 'coffee', 30, 0, ''),
(7, 18, 'Sweet Lassi', 18, 0, ''),
(7, 19, 'Mosambhi Juice', 40, 0, 'Sweet-Lime-Mosambi-Benefits-in-Hindi-1.jpg'),
(7, 20, 'Apple Juice', 40, 0, ''),
(7, 21, 'Any Cold Drink', 40, 0, ''),
(8, 22, 'Orange Juice', 40, 5, ''),
(9, 23, 'project', 9199, 20, ''),
(9, 24, 'project', 9199, 50, ''),
(9, 25, 'project', 9199, 60, ''),
(9, 26, 'project', 9199, 60, ''),
(3, 27, 'masala dosa', 10, 1, ''),
(3, 29, 'manchao soup', 100, 10, ''),
(8, 30, 'pizza', 600, 91, 'images.jpg'),
(8, 31, 'pizza', 600, 91, 'images.jpg'),
(3, 32, 'SWEET CORN SOUP', 95, 1, 'Sweet-Corn-soup.jpg'),
(7, 33, 'Pepsi', 50, 0, '750ml-pepsi-cold-drink-500x500.jpg'),
(3, 34, 'pizza', 600, 0, 'images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderid` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` float NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `itemid`, `quantity`, `amount`, `discount`) VALUES
(8, 31, 1, 70, 0),
(8, 10, 1, 70, 0),
(8, 10, 1, 70, 0),
(8, 10, 1, 70, 0),
(9, 31, 1, 70, 0),
(9, 10, 1, 70, 0),
(9, 10, 1, 70, 0),
(9, 10, 1, 70, 0),
(10, 31, 1, 70, 0),
(10, 10, 1, 70, 0),
(10, 10, 1, 70, 0),
(10, 10, 1, 70, 0),
(10, 12, 1, 70, 0),
(11, 10, 1, 70, 0),
(12, 10, 1, 70, 0),
(13, 10, 1, 70, 0),
(15, 0, 1, 70, 0),
(16, 0, 1, 70, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `username`, `email`, `password`) VALUES
(1, 'aa', 'kia@gmail.com', '147852'),
(2, 'JOHN', 'may61055pm@gmail.com', '123'),
(3, 'kihan', 'kiha@gmail.com', '456789'),
(4, 'kiran', 'kiran@gmail.com', '123456789'),
(5, 'mm', 'ha@gmail.com', '123'),
(6, 'JOHN1', 'john1@gmail.com', '123'),
(9, 'john2', 'john2@gmail.com', '456'),
(10, 'john3', 'john3@gmail.com', '789');

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
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`foodmenuid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `foodmenuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `foodorder`
--
ALTER TABLE `foodorder`
  MODIFY `Orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
