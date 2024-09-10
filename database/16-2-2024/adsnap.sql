-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 06:31 AM
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
(7, 'Testing', 'test@gmail.com', 9123456789, 'test', '098f6bcd4621d373cade4e832627b4f6', 'avatar15.jpg', '2024-02-10'),
(8, 'Aung Phyo Kyaw', 'apk@gmail.com', 9791301124, 'mapk', '21232f297a57a5a743894a0e4a801fc3', 'avatar15.jpg', '2024-02-17'),
(9, 'Than Htet Aung', 'cuthanhtetaung@gmail.com', 9677290273, 'mtha', '21232f297a57a5a743894a0e4a801fc3', 'avatar15.jpg', '2024-02-17'),
(10, 'Kaung Hsu Thar', 'kaunghsuthar0@gmail.com', 9762434008, 'mkht', '21232f297a57a5a743894a0e4a801fc3', 'avatar15.jpg', '2024-02-17'),
(11, 'Nyam Lin Oo', 'nyamlinoo@gmail.com', 9792990487, 'mnlo', '21232f297a57a5a743894a0e4a801fc3', 'avatar15.jpg', '2024-02-17'),
(12, 'Pyae Phyo Hlyan', 'pyaephyohlyan@gmail.com', 9697353810, 'mpph', '21232f297a57a5a743894a0e4a801fc3', 'avatar15.jpg', '2024-02-17'),
(13, 'Phyo Ko Ko Kyaw', 'phyokokokyaw@gmail.com', 9763096028, 'pkkk', '21232f297a57a5a743894a0e4a801fc3', 'avatar15.jpg', '2024-02-17');

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

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`AdId`, `CustomerId`, `CategoryId`, `AdTitle`, `CompanyName`, `AdDescription`, `Picture1`, `Picture2`, `UploadDate`, `Status`, `CancelBy`, `UpdationDate`, `UploadTime`) VALUES
(30, 2, 13, 'Wireless Cyclone Vacuum Cleaner', 'Cyclone Vacuum', 'အိမ်ဂေဟာလေးကို သန့်ရှင်းပြောင်လက်နေဖို့အတွက် အဆင့်မြင့် Smart ကျပြီး  နည်းပညာမြင့်တဲ့ Minihelpers Wireless cyclone vacuum cleaner အိမ်သုံးပစ္စည်းတွေကိုမိတ်ဆက်ပေးပါရ စေ နော် ...\r\n\r\nWireless Cyclone Vacuum Cleanerက ဘာတွေ ကြောင့် Smart ကျပြီးအရမ်းကောင်းနေတာလဲ?? \r\n\r\nပုံမှန်ဖုန်စုတ်စက်တွေ မှာလို Container ကြီးမပါတော့ သုံးရလွယ်ကူပြီး ပေါ့ပါးတဲ့အပြင် filters တွေလဲရတဲ့ဒုက္ခလဲသက်သာတယ်လေ.\r\nအိမ်သန့်ရှင်းရေးလုပ်မလား၊ မွေ့ယာ ဆိုဖာစတဲ့ Funiture တွေသန့်ရှင်းရေးလုပ်မလား၊ ကားအတွင်းပိုင်းတွေ သန့်ရှင်းရေးလုပ်မလား လိုအပ်သလိုလဲသုံးလို့ရတယ်နော်.\r\nအားသွင်းပြီးသုံးလို့ရတဲ့ batteryလေး နဲ့ဆိုတော့ မီးပျက်လို့အလုပ်ပျက်မှာလဲမပူရဘူးနော်.\r\nပေါ့ပါးပြီးသုံးရလဲလွယ်ကူတယ်ဆိုတော့ အမြန်သာလာဝယ်လိုက်တော့နော်.', 'electronic1.jpg', 'electronic1.jpg', '2024-02-17', 1, 'a', '2024-02-17 04:39:00', '2024-02-17 04:33:50');

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
(2, 'Testing', 'test@gmail.com', 9123456789, '25d55ad283aa400af464c76d713c07ad', 'avatar15.jpg', '2024-02-12'),
(3, 'Kaung Htet', 'kaunghtet761@gmail.com', 9425275761, '4ae006b591c81275cf310fad9c9d8a1c', 'avatar15.jpg', '2024-02-17'),
(4, 'Min Thu', 'minthu25889@gmail.com', 9781025889, 'cda9787741f1aa9277e5b28d1485af5a', 'avatar15.jpg', '2024-02-17'),
(5, 'Soe Pyae Hein', 'soepyaehein35@gmail.com', 9760428535, 'c3354e22e4c93cb8fdc4b25625e258a0', 'avatar15.jpg', '2024-02-17'),
(6, 'Ko Ko Lwin', 'kokolwin9742@gmail.com', 9957949742, '83d4af982f315bd9536da3252efc98d3', 'avatar15.jpg', '2024-02-17'),
(7, 'Shwe Htoo', 'shwehtoo0207@gmail.com', 9690550207, '841dd915c04d60b5506f63bdb396d875', 'avatar15.jpg', '2024-02-17'),
(8, 'Htet Myat', 'htetmyat5925@gmail.com', 9665625925, 'feb5e8e9b1177326a806506cd061b25c', 'avatar15.jpg', '2024-02-17'),
(9, 'Aung Ko Win', 'aungkowin4717@gmail.com', 9255714717, '7b129b7b89d769dfcb728fdb5302fc90', 'avatar15.jpg', '2024-02-17'),
(10, 'Phyoe Wai Aung', 'phyoewai457@gmail.com', 9442542457, 'd8fb28957662ff241c3f443341458b8e', 'avatar15.jpg', '2024-02-17'),
(11, 'Naing Lin', 'nainglin143@gmail.com', 9255700143, '598c7ab1d59f7a9257a39b6c988dc38f', 'avatar15.jpg', '2024-02-17'),
(12, 'Aung Phyoe Oo', 'aungphyoe8552@gmail.com', 9457968552, '17d996701c53fed2b6581397382f2e47', 'avatar15.jpg', '2024-02-17'),
(13, 'Nay Lin Ko', 'naylinko32539@gmail.com', 9972132539, 'a0ff5eae761278ef3390d4f8a62f1636', 'avatar15.jpg', '2024-02-17'),
(14, 'Khant Zay Htet', 'khantzayhtet453@gmail.com', 9425211453, '8be9e52eee33188fa7946fe8adbcb91c', 'avatar15.jpg', '2024-02-17'),
(15, 'Zwe Wai Yan', 'zwewaiyan10933@gmail.com', 9692810933, 'abdbc1a1c2f52a4046c36a0de3fb781a', 'avatar15.jpg', '2024-02-17'),
(16, 'Wai Yan Tun', 'waiyantun88553@gmail.com', 9967688553, 'c1fd9a0d3870dbda81f2ddace6bbb9a1', 'avatar15.jpg', '2024-02-17'),
(17, 'Akar Min Oo', 'akarminoo5327@gmail.com', 9760985327, '9fc4327a3e9af1a09d5f26722d3f1c0d', 'avatar15.jpg', '2024-02-17'),
(18, 'May Myat Mon', 'maymyat43289@gmail.com', 9427643289, '9c378e31c84dc013e65621430a25fc94', 'avatar15.jpg', '2024-02-17'),
(19, 'Zon Pwint Phyu', 'zonpwint18000@gmail.com', 9790018000, '506ace28733d36fde2665889777f6cba', 'avatar15.jpg', '2024-02-17'),
(20, 'Khin Yadanar Oo', 'khinyadanar5299@gmail.com', 9781025299, '4bee4f9e8cc99fe8bb00a36f17e13ea1', 'avatar15.jpg', '2024-02-17'),
(21, 'Shoon Lai Phyu', 'shoonlai050@gmail.com', 9690780050, 'f533ee25da2be0ce310bb74fc67ebf9c', 'avatar15.jpg', '2024-02-17'),
(22, 'Nilar Moe', 'nilarmoe600@gmail.com', 9256768600, '6b5699c8f618b1568a3e3f88e29a8fc2', 'avatar15.jpg', '2024-02-17'),
(23, 'Shwe Zin', 'shwezin9044@gmail.com', 9792229044, 'c3b6d311270bd8080b05d14713dacb0b', 'avatar15.jpg', '2024-02-17'),
(24, 'May Phyoe', 'mayphyoe55889@gmail.com', 9785555889, 'f225aedaffd132bd6061db029b68a947', 'avatar15.jpg', '2024-02-17'),
(25, 'Cherry Win', 'cherrywin200@gmail.com', 9760004200, 'dc7b1aee2deb5598cc007ac9498ceacd', 'avatar15.jpg', '2024-02-17'),
(26, 'Yoon Nadi', 'yoonnadi2211@gmail.com', 9690002211, '67bb4a6934c520c8c1ed936ebcaeb733', 'avatar15.jpg', '2024-02-17'),
(27, 'Ni Ni Win  ', 'niniwin3888@gmail.com', 9944223888, 'b235576d5ae19661eeba9e995aa858fd', 'avatar15.jpg', '2024-02-17'),
(28, 'Yadanar', 'yadanar6425@gmail.com', 9792266425, '35ec95f1674ff333ca55635b17fda76d', 'avatar15.jpg', '2024-02-17'),
(29, 'Aye Soe', 'ayesoe77400@gmail.com', 9255777400, 'e3529d7e2e035f1f259d57016098a3c6', 'avatar15.jpg', '2024-02-17'),
(30, 'Hla Moe', 'hlamoe42001@gmail.com', 9790042001, '6bcedd0aa1f0b93787b765f3f88fa4bd', 'avatar15.jpg', '2024-02-17'),
(31, 'Soe Soe Aye', 'soesoeaye22554@gmail.com', 9781022554, 'c7eb5f294fc1c585dfab71e3381f1b57', 'avatar15.jpg', '2024-02-17');

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
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `advertising`
--
ALTER TABLE `advertising`
  MODIFY `AdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
