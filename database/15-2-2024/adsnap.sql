-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 04:22 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsnap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Picture` varchar(1000) NOT NULL,
  `RegDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Name`, `Email`, `Phone`, `Username`, `Password`, `Picture`, `RegDate`) VALUES
(5, 'Min Naing Paing Oo', 'naingpaingoo@gmail.com', 9790663667, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'mnpo1.jpg', '2024-02-10'),
(7, 'Testing', 'test@gmail.com', 9123456789, 'test', '098f6bcd4621d373cade4e832627b4f6', 'avatar15.jpg', '2024-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `advertising`
--

CREATE TABLE `advertising` (
  `AdId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `AdTitle` varchar(200) NOT NULL,
  `CompanyName` varchar(200) NOT NULL,
  `AdDescription` varchar(3000) NOT NULL,
  `Picture1` varchar(1000) NOT NULL,
  `Picture2` varchar(1000) NOT NULL,
  `UploadDate` date NOT NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL,
  `CancelBy` varchar(1) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `UploadTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `Fee` int(11) NOT NULL,
  `Picture` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`, `Fee`, `Picture`) VALUES
(1, 'Cosmetic', 100000, 'cosmetic.jpg'),
(13, 'Electrionic', 150000, 'electronic.jpg'),
(14, 'Fashion', 150000, 'fashion.jpg'),
(15, 'Sport Goods', 150000, 'sport goods.png'),
(16, 'Vehicles', 500000, 'vehicles.jpg'),
(17, 'Furniture', 200000, 'furniture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ContactId`, `Name`, `Email`, `Message`, `Date`) VALUES
(2, 'Testing', 'test@gmail.com', 'Hello!!', '2024-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` bigint(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Picture` varchar(1000) NOT NULL,
  `RegDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `Name`, `Email`, `Phone`, `Password`, `Picture`, `RegDate`) VALUES
(2, 'Testing', 'test@gmail.com', 9123456789, '25d55ad283aa400af464c76d713c07ad', 'avatar15.jpg', '2024-02-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `advertising`
--
ALTER TABLE `advertising`
  ADD PRIMARY KEY (`AdId`),
  ADD KEY `CategoryId` (`CategoryId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `advertising`
--
ALTER TABLE `advertising`
  MODIFY `AdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advertising`
--
ALTER TABLE `advertising`
  ADD CONSTRAINT `advertising_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`CategoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `advertising_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `delete_confirm_old_ads` ON SCHEDULE EVERY 1 DAY STARTS '2024-02-16 00:04:51' ON COMPLETION PRESERVE ENABLE DO DELETE FROM advertising
    WHERE Status=1 AND UploadDate < DATE_SUB(NOW(), INTERVAL 1 WEEK)$$

CREATE DEFINER=`root`@`localhost` EVENT `delete_cancel_old_ads` ON SCHEDULE EVERY 1 DAY STARTS '2024-02-16 00:18:45' ON COMPLETION PRESERVE ENABLE DO DELETE FROM advertising
    WHERE Status=2 AND UploadDate < DATE_SUB(NOW(), INTERVAL 1 DAY)$$

CREATE DEFINER=`root`@`localhost` EVENT `delete_not_confirm_ads` ON SCHEDULE EVERY 30 MINUTE STARTS '2024-02-16 01:08:44' ON COMPLETION PRESERVE ENABLE DO DELETE FROM advertising
    WHERE Status=0 AND UploadTime < DATE_SUB(NOW(), INTERVAL 2 HOUR)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
