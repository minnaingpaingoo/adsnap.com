-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 05:58 PM
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
  `AdDescription` varchar(2000) NOT NULL,
  `Picture1` varchar(1000) NOT NULL,
  `Picture2` varchar(1000) NOT NULL,
  `UploadDate` date NOT NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL,
  `CancelBy` varchar(1) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`AdId`, `CustomerId`, `CategoryId`, `AdTitle`, `CompanyName`, `AdDescription`, `Picture1`, `Picture2`, `UploadDate`, `Status`, `CancelBy`, `UpdationDate`) VALUES
(4, 2, 1, 'Fifth Year (B.C.Tech)', 'UCSTT', 'AADDHJKADJFASLHSDLASKKSLDH', '273177.png', '16608163850433753078985604353629.png', '2024-02-12', 2, 'u', '2024-02-12 14:02:51'),
(5, 2, 1, 'Fifth Year (B.C.Sc.)', 'UCSTT', 'AADDHJKADJFASLHSDLASKKSLDH', '273177.png', '16608163850433753078985604353629.png', '2024-02-12', 1, 'a', '2024-02-12 16:02:52'),
(6, 2, 1, 'ABACDDEEDS', 'JM Solution', 'jdkahdlkuwekjdshjskdajjda;hja', '16608174671664068830813366864907.png', '16608174935948806832018119755249.png', '2024-02-12', 1, 'a', '2024-02-12 16:50:34'),
(7, 2, 1, 'ADFGJADSF', 'Garnier', 'ADFHADSFasjdfklajsdhadsjf', '1660816958176906611884848625321.png', '16608174671664068830813366864907.png', '2024-02-12', 1, 'a', '2024-02-12 16:50:45'),
(8, 2, 1, 'ADFHJADSFSKD', 'Clear', 'ADSFhasidhf', 'about-img.jpg', 'ads.png', '2024-02-12', 1, 'a', '2024-02-12 16:52:20'),
(9, 2, 1, 'ADFHJADSFSKD', 'Clear', 'ADSFhasidhf', 'about-img.jpg', 'ads.png', '2024-02-12', 0, NULL, NULL);

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
(1, 'Cosmetic', 50000, 'destination-1.jpg'),
(12, 'Electronic', 80000, 'explore-tour-1.jpg'),
(13, 'AAASAA', 30000, 'about-img.jpg'),
(14, 'CCSJDKSdj', 24000, 'destination-5.jpg'),
(15, 'DDEEGFASA', 20000, 'destination-7.jpg'),
(16, 'EEFFGG', 50000, 'explore-tour-2.jpg'),
(17, 'DAEFAA', 40000, 'gallery-6.jpg');

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
(2, 'Testing', 'test@gmail.com', 9123456789, '25d55ad283aa400af464c76d713c07ad', '16608163850433753078985604353629.png', '2024-02-12');

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
  MODIFY `AdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
