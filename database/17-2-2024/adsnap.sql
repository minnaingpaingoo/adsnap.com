-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 06:47 PM
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
(33, 2, 1, 'Thanakha Powder Pact', 'Bella', 'အဆီမပြန် မိတ်ကပ်မကွက် ဖုံဖုံလေးနဲ့လှ\r\n\r\nPrice = 8690 ks\r\n\r\nမြန်မာ့အသားအရောင်နဲ့ထပ်တူအကျဆုံး\r\nအဆီမပြန် ဖုံဖုံလေးနဲ့လှ\r\n၁၂ နာရီကြာ အဆီထိန်း\r\nSPF 35 PA+++ ပါလို့ နေလောင်ဒဏ်ကို ကာကွယ်ပေးတယ်\r\nအသားဖြူ ချွေးပေါက်ကျဥ◌်း\r\nမြန်မာ့သနပ်ခါးရဲ့ အေးမြစေတဲ့အစွမ်း\r\nVitamin C ပါလို့ အသားအရေ ညီညာ ဖြူဝင်းစေတယ်\r\nပိုးသားလို နူးညံ့တဲ့အထိအတွေ့\r\n\r\nပူပြင်းစိုစွတ်တဲ့ ရာသီဥတုမှာနေတဲ့ မြန်မာလူမျိုးများရဲ့ နေ့တိုင်းကြုံတွေ့ရတာကတော့ အဆီပြန်တာကြောင့် မိတ်ကပ်လိမ်းပြီး သိပ်မကြာခင်မှာပဲ မိတ်ကပ်သား မတင်ခြင်းဖြစ်ပါတယ်။ ဒါကြောင့်လည်း မြန်မာလူမျိုးများက အဆီပြန်ခြင်းကို ထိန်းသိမ်းပေးပြီးအေးမြတဲ့ ခံစားမှုကို ပေးစွမ်းနိုင်တဲ့ သနပ်ခါးကို ကြိုက်နှစ်သက်ကြတာပေါ့။ bella ရဲ့ Oil No More Whitening & Pore Minimizing သနပ်ခါး Powder Pact က အရေပြားမှ အဆီထွက်မှုကို လျှော့ချပေးပြီး အဆီပြန်ခြင်းကို ၁၂ နာရီကြာ ထိန်းသိမ်းပေးပါတယ်။ သနပ်ခါးရဲ့ အေးမြမှုကို ခံစားရတဲ့အပြင် ပိုးသားလေးလို ချောမွေ့တဲ့ အထိအတွေ့နဲ့ ချွေးပေါက်တွေကိုလည်း ကျဥ◌်းစေပြီး အမဲစက် အမာရွတ်နဲ့ အရေးအကြောင်းများကို အပြည့်အဝဖုံးပေးတာကြောင့် ဘယ်နေရာက ကြည့်ကြည့် အသားအရေက ချောမွတ်လှပနေတာပေါ့။ ကိုရီးယားမှ သဘာဝ Minerals များနှင့် Vitamin C ပါဝင်လို့ အသားအရောင်ကို ညီညာဖြူဝင်းစေပါတယ်။ SPF 35 PA+++ ပါဝင်တာကြောင့် နေလောင်ဒဏ်ကိုလည်း ကာကွယ်ပေးတယ်နော်။', 'cosmetic1.jpg', 'cosmetic2.jpg', '2024-02-17', 2, 'u', '2024-02-17 14:18:59', '2024-02-17 14:08:25'),
(34, 2, 1, 'Thanakha Pore Care Toner (Alcohol Free)', 'Bella', 'ချွေးပေါက်တွေကျဉ်း အဆီကင်းစေတဲ့ သနပ်ခါးတိုနာ\r\n\r\n10,500 Ks\r\n\r\nအရေးအကြောင်းများကိုလျော့ချပေးနိုင်သည်\r\n\r\nအစိုဓါတ်ကို အချိန်ကြာမြင့်စွာထိန်းသိမ်းပေးနိုင်သည်\r\n\r\nအဆီပြန်ခြင်းကို သက်သာစေသည်\r\n\r\nအမဲစက်များကိုလျော့ချပေးနိုင်သည်\r\n\r\nအသားအရေကို အားပြည့်လန်းဆန်းစေသည်\r\n\r\nAlcohol Free ဖြစ်လို့ မည်သည့်အသားအရေအမျိုးအစားမျိုးမဆို အသုံးပြုနိုင်ပါသည်\r\n\r\nသနပ်ခါး တိုနာသည် သဘာဝသနပ်ခါးရဲ့ အာနိသင်တွေ ပါ၀င်သောကြောင့် အသားအရေကို အေးမြစေသည် ။ အဆီပြန်ခြင်းကင်း ချွေးပေါက်ကျဉ်းစေပြီး ‌ရေဓါတ်ပြည့် ဝကာ ‌ပြောင် ပြောင် တင်း တင်း လေး နဲ့ glow စေသည်။\r\n\r\nတစ်ကြိမ်တည်း အသုံးပြုရုံနှင့် မျက်နှာ အသားအရေကို အားပြည့်လန်းဆန်း ပြီး ကြည်လင်၀င်းပ ၍ တင်းရင်းစေသည်။ သနပ်ခါး အဆီအနှစ် အာနိသင်ကြောင့် အသားအရေကို အေးမြပြီး ချောမွေ့စေသည်။ အဆီပြန်ခြင်း နှင့် အမဲစက် များကိုပါ သက်သာစေသည်။ Vitamin B5 & Witch Hazel  ပါ၀င်လို့ အသားအရောင် မညီမညာခြင်းကို လျော့ချပေးပြီး အသားရေကို ဖြူကြည်လာစေသည်။ Thanakha extract ကြောင့် အသားအရေကို အစိုဓါတ်အချိန်ကြာမြင့်စွာထိန်းသိမ်းပေးထားနိုင်ပြီး အရေးအကြောင်းများ မဖြစ်ပေါ် အောင်ကာကွယ်ပေးနိုင်သည့် အပြင် ရှိနေသည့် အရေးအကြောင်းများကိုပါ လျော့ချပေးနိုင်ပြီး အသားအရေကို ပိုမိုကြည်လင်လာစေသည်။ Anti-Oxidant ဓါတ်ကြောင့် အသားအရေကိုပိုမို ကျန်းမာ စိုပြေစေပါသည်။\r\n', 'cosmetic3.jpg', 'cosmetic4.jpg', '2024-02-17', 0, NULL, '2024-02-17 17:46:28', '2024-02-17 16:00:00'),
(35, 18, 1, 'Superstar Perfect Matte Foundation', 'Bella', 'Your Skin But Better!\r\n\r\n14,500 Ks\r\n\r\nSPF 30 PA +++\r\n\r\nNo Fragrance. No Parabens.\r\n\r\nSuper Waterproof & Super Sweat-proof Formula\r\n\r\n16-HR Long-Lasting\r\n\r\nWeightless Matte Finish with Medium to Full Coverage\r\n\r\nSuperstar လို လှစေတဲ့ supetstar foundation ဟာ super long lasting 16 နာရီမိတ်ကပ်သား ကြာရှည်ခံစေတယ် .. Super Oil Control အဆီပြန်ခြင်းကို Supet ထိန်းချုပ်နိုင်တယ် .. Super Coverage အရေးအကြောင်းအပြစ်အနာအဆာတွေကို Super ဖုံးအုပ်ပေးနိုင်တယ် .. Super Weightless လိမ်းထားမှန်းမသိတဲ့ Super ပေါ့ပါးမှု .. Super Weather Proof , Sweat Proof, Smudge Proof ရေစို ချွေးစိုခံ ရာသီမရွေးလှစေတယ် .. Super Sun Proof SPF 30 PA+++ ပါ၀◌င်လို့ နေလောင်ဒဏ်ကို Super ကာကွယ်ပေးတယ် .. Super skin fit မို့ အသားရောင်နဲ့ တစ်ထပ်တည်းကျစေတယ် .. Primer, Concealer, Sun Cream လိုပါ သုံးနိုင်တာကြောင့် တစ်မျိုးတည်းနဲ့ Superstar ဖြစ်နိုင်ပြီ', 'cosmetic5.jpg', 'cosmetic6.jpg', '2024-02-27', 1, NULL, '2024-02-27 15:18:01', '2024-02-27 14:29:26'),
(36, 19, 1, 'Ponds Tone Up Milk Cream', 'PONDs', 'Price-11500ks\r\n\r\nPonds ရဲ့ သဘာဝနို့ရည်နဲ့ ပြုလုပ်ထားတဲ့ \r\nTone Up Milk Cream လေးက မိတ်ကပ်လိမ်းစရာမလိုဘဲ အသားအရေကို ချက်ချင်းဝင်းလက်တောက်ပစေပါတယ်\r\n\r\nအနံ့သင်းသင်းလေးနဲ့ cream သားကလဲ ညက်ညက်ကလေးဆိုတော့လိမ်းပြီးတာနဲ့ မျက်နှာလေးပေါ်မှာ အိအိလေးဖြစ်နေမှာပါ...\r\n\r\nမျက်နှာပေါ်မှာ အစက်လေးတွေချပြီးဖြည်းဖြည်းလေး ပုတ်လိမ်းလိုက်ရုံနဲ့တင် မိတ်ကပ်မလိမ်းဘဲ သဘာဝအတိုင်းဝင်းလက်တောက်ပသွားမှာပါ...\r\n\r\nNatural look လေးနဲ့သဘာဝဆန်ဆန်အလှလေးကို ပိုင်ဆိုင်ချင်တယ်ဆိုရင်တော့ \r\nPONDS Insta Bright လေးကို ရွေးသင့်ပါတယ်ရှင်', 'cosmetic9.jpg', 'cosmetic10.jpg', '2024-02-27', 1, NULL, '2024-02-27 14:53:36', '2024-02-27 14:48:31'),
(37, 20, 1, 'Innisfree Retinol True Sun Special Kit', 'Innisfree', 'Price- 25000 ks\r\n\r\nဒီ Special Kit လေးကအသားရည်ဓါတ်မတည့်တာကြောင့်ဖြစ်တဲ့ irritation ဖြစ်တာတွေကို လျော့ချပေးပါတယ်။ Retinol နဲ့ Cica ingredients အဓိကပါတာမို့ဝက်ခြံသက်သာစေရုံတင်မဟုတ်ပဲ ဝက်ခြံကြောင့်ကျန်တဲ့ အမာရွတ် အမဲစက်နဲ့ ချွေးပေါက်ကျယ်တာတွေကိုပါ အထူးသက်သာစေပါတယ်...\r\n\r\nဒီ Kit လေးထဲမှာတော့\r\n- Bija Cica Skin (30ML)\r\n- Retinol Cica Repair Ampoule (10ML)\r\n- Hyaluron Moist Sunscreen (20ML)\r\n- Mild Cica Toneup Sunscreen (20ML)\r\n\r\n Ampoule လေးထဲမှာ  Pure retinol ပါဝင်တာမို့ အသားရည်ကို smoothing ဖြစ်စေတယ်  အမာရွတ်တွေ အတွက် Retinol က အရမ်း ကောင်းပါတယ်။\r\n\r\nJeju green beansကနေ ရတဲ့ Hyaluronic Acid Extract အပြင်  Niacinamide, Allantoin, Salicylic acid, Peptide, နဲ့ Adenosine တွေ ထပ်ပါသေးတာမို့ Trouble skin တွေ အတွက်တော့ စမ်းကြည့်သင့်တဲ့အထဲပါပါတယ်\r\n\r\nRetinol ပါတဲ့ product လေးလိမ်းရင် နေ့ဘက် Suncreenလေးလိမ်းပေးဖို့ လိုအပ်တာမို့ Suncreenလိမ်းဖို့မေ့ရဘူးနော်', 'cosmetic12.jpg', 'cosmetic11.jpg', '2024-02-28', 1, NULL, '2024-02-28 15:03:01', '2024-02-28 15:01:26'),
(38, 21, 1, 'PONDs Lotion ', 'PONDs', 'Price-8500ks\r\n\r\nဘယ်လောက်နေပူထဲသွားသွား နေမလောင်ဘူး ၁ဘူးမကုန်ခင်မှာ အသားလဲသိသိသာသာ အရင်ထက်ပိုဖြူလာမယ်ဆိုတော့ ပေးရတဲ့စျေးထက်ကို ပိုတန်နေပီနော်\r\n\r\nဒီlotionရဲ့ထူးခြားချက်က အသားဖြူတဲ့Whiteningအပြင် Vitamin Eပါဝင်လို့  ခြောက်သွေ့တဲ့အသားရေကို ပြန်လည်စိုပြေချောမွတ်စေပါတယ်\r\n\r\n အနံ့လေးကသင်းသင်းလေးနဲ့ အရမ်းမွှေးတယ်၊ 24နာရီ နေရောင်ခြည်ဒဏ်ကနေ ကာကွယ်ပေးပါတယ်\r\n\r\nဒီLotion ကတော့ Whitening Lotionဖြစ်ပေမဲ့  UV Filter ပါလို့ နေပူထဲသွားရင်လဲ မမဲသွားစေပါဘူး။\r\n\r\nLotion ၁ဘူးထဲနဲ့ Whitening (အသားဖြူခြင်း),Vitamin E (အသားရေစိုပြေခြင်း၊ UV  (နေလောင်ဒဏ် ကာကွယ်ခြင်း)ဆိုတာတွေ  ပါဝင်ပါတယ်', 'cosmetic7.jpg', 'cosmetic8.jpg', '2024-02-28', 1, NULL, '2024-02-28 15:12:08', '2024-02-28 15:11:01'),
(39, 22, 1, 'Innisfree Super Volcanic Pore Clay Mask', 'Innisfree', 'Price -34,000ks\r\n\r\nပိုပြီး Light Weight & Creamy ဖြစ်တဲ့ \r\nအသစ်ထွက်တဲ့ version ပါနော်\r\n\r\nဝက်ခြံ နဲ့ အဆီပြန် ဆားဝက်ခြံတွေ ချွေးပေါက်ကျယ်တာတွေသက်သာစေဖို့\r\nယောက်ျားလေးရော မိန်းကလေးရော Combination & Oily Skin Type တွေအတွက် \r\nအရမ်းကိုကောင်းတာမို့ Highly Recommend ပါနော်\r\n\r\nအဆီပိုတွေကိုဖယ်ရှားပေးတယ်\r\n\r\nချွေးပေါက်လေးတွေပြန်ကျဉ်းလာစေတယ်\r\n\r\nဆားဝက်ခြံနဲ့ ဝက်ခြံတွေသက်သာစေပြီး\r\nတစ်ခါသုံးရုံနဲ့တင် Smoother & Brighter skin လေးရစေပါတယ်\r\n\r\n\r\n100ml မို့အကြာကြီး သုံးပါနော်\r\n\r\nတစ်ပတ်ကို တစ်ကြိမ်မှနှစ်ကြိမ်\r\nclay mask ကို စိုစွတ်နေတဲ့ မျက်နှာအနှံ့ လိမ်းပြီး 15-20မိနစ် အကြာ ရေနဲ့ဆေးချလိုက်ရင် ရပါပြီနော်\r\n\r\nပြီးရင် Moisturizer လေးတော့ ပြန်သုံးပေးနော်', 'cosmetic13.jpg', 'cosmetic14.jpg', '2024-02-29', 1, NULL, '2024-02-29 15:20:26', '2024-02-29 15:17:08'),
(40, 32, 1, 'Thanakha Pore Care Toner (Alcohol Free)', 'Bella', 'ချွေးပေါက်တွေကျဉ်း အဆီကင်းစေတဲ့ သနပ်ခါးတိုနာ\r\n\r\n10,500 Ks\r\n\r\nအရေးအကြောင်းများကိုလျော့ချပေးနိုင်သည်\r\n\r\nအစိုဓါတ်ကို အချိန်ကြာမြင့်စွာထိန်းသိမ်းပေးနိုင်သည်\r\n\r\nအဆီပြန်ခြင်းကို သက်သာစေသည်\r\n\r\nအမဲစက်များကိုလျော့ချပေးနိုင်သည်\r\n\r\nအသားအရေကို အားပြည့်လန်းဆန်းစေသည်\r\n\r\nAlcohol Free ဖြစ်လို့ မည်သည့်အသားအရေအမျိုးအစားမျိုးမဆို အသုံးပြုနိုင်ပါသည်\r\n\r\nသနပ်ခါး တိုနာသည် သဘာဝသနပ်ခါးရဲ့ အာနိသင်တွေ ပါ၀င်သောကြောင့် အသားအရေကို အေးမြစေသည် ။ အဆီပြန်ခြင်းကင်း ချွေးပေါက်ကျဉ်းစေပြီး ‌ရေဓါတ်ပြည့် ဝကာ ‌ပြောင် ပြောင် တင်း တင်း လေး နဲ့ glow စေသည်။\r\n\r\nတစ်ကြိမ်တည်း အသုံးပြုရုံနှင့် မျက်နှာ အသားအရေကို အားပြည့်လန်းဆန်း ပြီး ကြည်လင်၀င်းပ ၍ တင်းရင်းစေသည်။ သနပ်ခါး အဆီအနှစ် အာနိသင်ကြောင့် အသားအရေကို အေးမြပြီး ချောမွေ့စေသည်။ အဆီပြန်ခြင်း နှင့် အမဲစက် များကိုပါ သက်သာစေသည်။ Vitamin B5 & Witch Hazel  ပါ၀င်လို့ အသားအရောင် မညီမညာခြင်းကို လျော့ချပေးပြီး အသားရေကို ဖြူကြည်လာစေသည်။ Thanakha extract ကြောင့် အသားအရေကို အစိုဓါတ်အချိန်ကြာမြင့်စွာထိန်းသိမ်းပေးထားနိုင်ပြီး အရေးအကြောင်းများ မဖြစ်ပေါ် အောင်ကာကွယ်ပေးနိုင်သည့် အပြင် ရှိနေသည့် အရေးအကြောင်းများကိုပါ လျော့ချပေးနိုင်ပြီး အသားအရေကို ပိုမိုကြည်လင်လာစေသည်။ Anti-Oxidant ဓါတ်ကြောင့် အသားအရေကိုပိုမို ကျန်းမာ စိုပြေစေပါသည်။\r\n', 'cosmetic3.jpg', 'cosmetic4.jpg', '2024-02-29', 1, NULL, '2024-02-29 15:27:40', '2024-02-29 15:26:53'),
(41, 23, 1, 'Innisfree Green Tea Trio Kit ', 'Innisfree', 'Price-13000\r\n\r\n Innisfree ရဲ့ Green Tea Trio Kit လေးမှာဆိုရင် - \r\n Green Tea + Amino Hydrating Cleansing Foam (20g)\r\n Green Tea seed Hyaluronic Serum (15ml)\r\n Green Tea seed Hyaluronic cream (15ml) တို့ပါ၀င်ပါတယ်\r\n\r\nဒီ Trio Set လေးက - \r\n Green Tea Seed ပါဝင်မှုက အသားရေကို 24 နာရီကြာအောင် ရေဓါတ်ဖြည့်ပေးပြီး ရေဓါတ်မဆုံးရှုံးအောင် Protective Barrier အဖြစ်ရှိနေပေးတယ်\r\n Anti Oxidant ကြွယ်ဝပြီး Hyaluronic Acid 5 မျိုးပါတာကြောင့် အသားရေကို စိုပြေကြည်လင်ပြီး Glow ဖြစ်လာစေတယ်ရှင့်\r\nDry Skin အပါအဝင် All Skin Type အသုံးပြုလို့ရနော်\r\n\r\nအသုံးပြုပုံ \r\n Cleansing Foam - Serum - Cream တို့ကို အစဉ်လိုက်တိုင်း တွဲသုံးပေးရုံ နဲ့ အစိုဓာတ်ပြည့်၀ပြီး Glow ဖြစ်တဲ့ မျက်နှာလေး ပိုင်ဆိုင်နိုင်ပါပြီ', 'cosmetic15.jpg', 'cosmetic16.jpg', '2024-02-29', 1, NULL, '2024-02-29 15:55:45', '2024-02-29 15:52:17'),
(42, 3, 13, 'Xbox Controller for Window PC ', 'XBOX', 'Price – 280000ks\r\n Microsoft ကုမ္ပဏီရဲ့ Gaming sectorဖြစ်တဲ့ Xbox gaming ဟာဆိုရင် Gaming Industry မှာနေရာတစ်ခုနဲ့ ရပ်တည်နေတာ ဖြစ်ပါတယ်။ ဂိမ်းကစားတဲ့သူတွေ အများစုဟာ Playstation ဂိမ်းစက်တွေထက် Xboxကို ရွေးချယ်ရတာဟာ Xbox ဂိမ်းစက်အတွက် ထုတ်လုပ်ထားတဲ့ controllerနဲ့ ဂိမ်းစက်မှာ ပါရှိတဲ့ CPU ဟာ Playstation ဂိမ်းစက်တွေထက် ရုပ်ထွက်ကောင်းအောင် စွမ်းဆောင်ပေးနိုင်တယ်လို့ ဆိုကြပါတယ်။ ပါရှိတဲ့ controllerရဲ့ ခလုတ်တွေက မာမနေဘဲ ဂိမ်းကစားတဲ့အခါမှာ သက်သောင့်သက်သာရှိတယ်လို့ ထင်မြင်ချက်ပေးကြပါတယ်။ \r\n\r\n  Xbox controller ဟာ PC တွေနဲ့လည်း ချိတ်ဆက်ပြီး ကစားလို့ ရပါတယ်။ Microsoft Surface seriesတွေနဲ့ပါ ချိတ်ဆက်လို့ရပါတယ် PC Gamers များအတွက် အဆင်ပြေဆုံး Best Quality Controller layouts Mapping ချိန်စရာ မလို Plug & Play ယုံပါပဲ.', 'electronic1.jpg', 'electronic2.jpg', '2024-02-27', 1, NULL, '2024-02-27 16:09:18', '2024-02-27 16:07:39'),
(43, 4, 13, 'X 96Q  Android Box', 'X 96Q', 'Price-125000ks\r\n\r\n ဘောလုံးပွဲ League မျိုးစုံ\r\nအားကစားလိုင်းမျိုးစုံ\r\n ရုပ်ရှင် / Movies and Series မျိုးစုံ\r\nကလေးများအတွက် ကားတွန်းရုပ်သံမျိုးစုံ\r\n World News မျိုးစုံ\r\n Netflix, Amazon prime, Disney မှ movies နှင့် series တွေ မြန်မာစာတန်းထိုးရုပ်ရှင်အစုံ\r\nIndia channels live  များနှင့် Bollywood movie and series များ\r\n Discovery / Documentaryလိုင်းမျိုးစုံ\r\nMyanmar ဇာတ်ကားမျိုးစုံ\r\nMusic Channels မျိုးစုံ\r\n\r\nဘောလုံးပွဲ၊ ရုပ်ရှင် Series တွေကို wifi ချိတ်ရုံနှင့်ကြည်လင်စွာကြည့်နိုင်ပြီး၊ သင့်ရဲ့ ရိုးရိုး Tv ကို Android ပုံစံပြောင်းလဲပေးလိုက်မှာနော်။ Wifi / Mobile Hotspot (ဖုန်းအင်တာနက်) နှင့်လည်းကြည့်လို့ရာလို့ ဖုန်းကိုခနတာမေ့ထားလို့ရပြီလေနော်\r\nရိုးရိုး Tv စနစ်ကနေ  Android TV အသွင်သို့ ပြောင်းသွားပြိး၊ Youtube , Netflix, IPTv software နှင့် အခြားသော Applications များကို Download ဆွဲ ပြီး Android phone အတိုင်း TV ထဲ တွင်အသုံးပြုနိုင်သည်။ \r\nဒီစက်လေးကို မည်သည့် Tv နှင့် မဆိုချိတ်ဆက်နိုင်ပြီး၊ Wifi ရှိရန်သာလိုအပ်ပါသည်။', 'electronic3.jpg', 'electronic4.jpg', '2024-02-27', 1, NULL, '2024-02-27 16:26:20', '2024-02-27 16:25:14'),
(44, 5, 13, 'MAZ GAMING CHAIR', 'MAZ ', 'Price-310000 ks\r\n\r\nPC ရှေ့ကသင့် Body ကို Relax ဖြစ်အောင်ပံ့ပိုးပေးမယ့် MAZ GAMING CHAIR\r\n\r\nWorking Area မှာ တနေကုန်အချိန်ကုန်တတ်တဲ့သူများနှင့် Gamer crazy ကိုကို၊မမတို့အတွက် ခန္ဓာကိုယ်ကို အထာကျကျ သက်တောင့်သက်သာဖြစ်စေမယ့် MAZ GAMING CHAIR လေးပါ။\r\n\r\nChair Design များကိုတော့အထူးပြောစရာမလို ရွေးချယ်စရာအရောင်တွေလည်းရှိနေတာမို့ အကြိုက်တွေ့စေမှာပါ။ \r\n\r\n 135ထိ လှန်ချလို့ရပြီး ရှေ့နောက်လှုပ်ပြီးအသုံးပြုနိုင်ပါတယ်။\r\n အထိုင်များတတ်သူများအတွက် အပူလောင်တဲ့ဒဏ်ကိုမဖြစ်စေဖို့ အကောင်းစား Soft Cushionတစ်လွှာပါဝင်ပါတယ်။\r\n အနိမ့်အမြင့်လိုသလိုပြောင်းလဲနိုင်ပြီး 360 ထိ လှည့်၍အသုံးပြုနိုင်ပါတယ်။\r\n Hydraylic စနစ် Safety Class 4 gas lift cyclinder ချောင်းကိုအသုံးပေးထားတဲ့အတွက် ခန္ဓာကိုယ်ဟန်ချက်ကိုထိန်းထားနိုင်ပါတယ်။\r\n 60 milimeter casters wheelတွေတပ်ဆင်ပေးထားတာမို့ အောက်ခြေဘီးကို လိုသလိုရွေ့လျားအသုံးပြုနိုင်ပါတယ်။\r\n\r\nRelax ဖြစ်စေဖို့အတွက်ကိုအထူးထုတ်လုပ်ထားတာကြောင့် နေရာမရွေးအသုံးပြုနိုင်ပြီး အမိုက်စားဒီဇိုင်းကြောင့် Premium ဆန်တဲ့အမြင်ကိုလည်းပေါ်လွှင်စေမှာပါ။ ', 'electronic6.jpg', 'electronic7.jpg', '2024-02-28', 1, NULL, '2024-02-28 16:32:41', '2024-02-28 16:30:03'),
(45, 6, 13, 'Hoco. VR Glasses', 'Hoco.', 'Price – 60500 ks\r\n\r\nhoco ရဲ့ VR Glasses နဲ့ တစ်ယောက်တည်းကမ္ဘာဖန်တီးလိုက်ပါ။\r\n\r\nhoco ရဲ့ VR Glasses တစ်ခုဖြစ်တဲ့ DGA10 ကတော့အရည်အသွေးမြင့်မြင့်အသုံးပြုလို့ရမယ့် hoco.ရဲ့ product တစ်ခုပဲဖြစ်ပါတယ်။\r\n\r\n Stereo နားကျပ် ပါတစ်တွဲပါတဲ့ အတွက် အသုံးပြုတော့မယ်ဆိုရင် 3.5mm jack pinကိုဖုန်းနဲ့တစ်ခါတည်းတွဲပြီးအသုံးပြုရုံပါပဲ။\r\n\r\nJapanese PMMA Professional Lens တွေကို အသုံးပြုထားတာကြောင့် ဖုန်း Screen ကနေတိုက်ရိုက်လာတဲ့ UV Rays, Blue Ray တွေကို သင့်မျက်စိကို တိုက်ရိုက်မထိအောင် ကာကွယ်ပေးပြီး ကြည့်ရတာအချိန်ကြာမြင့်လာရင် မူးဝေခြင်းလည်းမရှိပါဘူး။\r\n\r\nLens ကိုလည်းသေချာ Adjustment အလွယ်တကူပြုလုပ်လို့ရတဲ့ Knob လေးတွေနဲ့\r\n Pupil Distance ရော Focal Length ကိုပါသေချာချိန်လိုက်ရင် ကြည်လင်ပြတ်သားစွာကြည့်ရှုနိုင်ပါတယ်။\r\n\r\nတပ်ဆင်ထားရင်လည်းအလွယ်တကူမပြုတ်ကျအောင် သေချာထိန်းပေးထားမယ့်အပြင် တပ်ဆင်ထားလို့ကြာလာရင် နာကျင်မှုမရှိပါဘူး။\r\n\r\nResolution 1080 pixels ကနေ 2 k အထိ Support အထိကြည်လင်ပြတ်သားစွာကြည့်ရှုနိုင်ပါတယ်။\r\n\r\nDGA10 ကတော့ ဖုန်း Size 5.5in-7.2in အတွင်းအဆင်ပြေပါတယ်ခင်ဗျာ။', 'electronic5.jpg', 'electronic8.jpg', '2024-02-28', 1, NULL, '2024-02-28 16:42:56', '2024-02-28 16:41:48'),
(46, 7, 13, 'LG 2Door Refrigerator GVB242PLGB (243L)', 'LG  ', 'Price- 1,169,000mmk\r\n\r\nရေခဲသေတ္တာဆို Top Freezer မှကြိုက်တဲ့သူတွေကလည်း ရှိတယ်။\r\n\r\nဒီလို အခဲခန်းတစ်ထပ်ပါ LG Top Freezer ရေခဲသေတ္တာတွေက ဘယ်လို စွမ်းဆောင်ရည်တွေကြောင့် အိမ်ရှင်မတွေ အကြိုက်ဆုံး ဖြစ်နေရလဲ \r\n\r\n Multi Air Flow ကြောင့် အအေးပြန့်နှုန်း တစ်သမတ်တည်းရစေပြီး လတ်ဆတ်မှုမှာလည်း မယှဥ်နိုင်အောင် ထိန်းထားပေးနိုင်တယ်။ \r\n\r\n Humidity Controller စနစ်ပါဝင်တဲ့အတွက် ဟင်းသီးဟင်းရွက်တွေရဲ့ ခြောက်သွေ့ခြင်းကို ထိန်းသိမ်းပေးနိုင်တော့ လတ်ဆတ်တာမှ ကြိုက်တဲ့သူတွေအတွက် အံကိုက်ပဲ။\r\n\r\n LG Door Cooling  ဖြစ်တာကြောင့် ပုံမှန်ထက် 35% လျင်မြန်စွာ အေးစေနိုင်ပါတယ်။ \r\n\r\n Smart Inverter ကြောင့် စွမ်းအင်ချွေတာ မီတာစားသက်သာစေတယ်။\r\n (၁၀) နှစ်အာမခံပါဝင်တဲ့ Compressor ပါဝင်တာကြောင့် ရေရှည်အသုံးခံတော့ စိတ်ချရသလို ပိုလည်းချွေတာနိုင်တာပေါ့။ ', 'electronic9.jpg', 'electronic10.jpg', '2024-02-29', 1, NULL, '2024-02-29 16:49:29', '2024-02-29 16:48:36'),
(47, 8, 13, 'Hisense LED TV 40 Inches 40A4G (DigitalT2,Smart An', 'Hisense', 'Price- 669,000mmk\r\n\r\nသူငယ်ချင်းတွေ နဲ့ဘောလုံးပွဲကြည့်ဖို့ပဲ ဖြစ်ဖြစ်၊ မိသားစုတွေနဲ့အတူ ကြည့်ရှု့အပန်းဖြေဖို့ပဲ ဖြစ်ဖြစ် အသင့်တော်ဆုံး Smart TV လေးကို ညွှန်းပါဆို 40A4G (Smart Android) TV လေးကို ညွှန်းပါရစေ။\r\n\r\nအခုနောက်ဆုံးဝင်ရောက်လာတဲ့ 40\" Smart Android TV ဟာ Android Version-11 ပါရှိပြီး၊ Memory 4.3GB ထိပါရှိပါတယ်။ သုံးစွဲသူတွေ သုံးစွဲရလွယ်ကူစေမယ့် VIDAA U5 OS ထည့်သွင်းထားတဲ့ Hisense ရဲ့ Android Smart TV တွေမှာ Built-in Apps တွေ အများကြီး ပါဝင်သလို များလှစွာသော Movies ၊ Shows ၊ News ၊ Game နဲ့ Apps တွေကို Google Play ကနေ Download ရယူပြီး ကြည့်ရှု၊ ကစားနိုင်တာပါ။ဒါကြောင် သင့်အကြိုက် Youtube ၊ Netflix စတဲ့ Apps တွေအပြင်၊ စိတ်ကြိုက် Apps တွေကို Install လုပ်ပြီး ကြည့်ရှုနိုင်မှာပါ။ ဒါ့အပြင် Football Streaming Live App တွေကို စိတ်ကြိုက် ထည့်သွင်းပြီး မိမိကြိုက်နှစ်သက်တဲ့ ဘောလုံးပွဲတွေကို ကြည့်နိုင်ပါတယ်။ \r\n \r\nNatural Color Enhancer ကြောင့် သဘာဝအရောင်အသွေးအစစ်ကို ပြည့်ပြည့်၀၀ကြီး ခံစားရမှာပါ။ \r\n \r\nSport Mode နဲ့ Game Mode ပါဝင်တာကြောင့် အားကစားပြိုင်ပွဲတွေကြည့်ရာမှာရော၊ ဂိမ်းကစားရာမှာပါ ရုပ်သံထစ်ခြင်း၊ ရုပ်သံဝါးခြင်းတို့ မရှိစေပဲ ကြည်လင်ချောမွေ့မှုအပြည့် သင်ခံစားရမှာပါ။ \r\n\r\nBulit in LAN port၊ Optical Audio Output တွေပါဝင်ကြသလို၊  Audio၊ DTS Virtual:X  အသံစနစ်ကြောင့် နောက်ခံဆူညံသံတွေကြားထဲကနေ ကြည်လင်တဲ့ စကားပြောသံ၊ သီချင်းသံတွေကိုခံစားရမယ့် အလွန်ကို ခေတ်မီတဲ့ Android TV တွေ ဖြစ်ကြပါတယ်။ \r\n\r\nဒါကြောင့် နောက်ဆုံးပေါ် နည်းပညာတွေစုံလင်ပြီ အရောင်အသွေးမြင့်မား တဲ့ Android Smart TV \r\nတစ်လုံးရှာနေတယ်ဆိုရင်တော့ 40A4G (Smart Android) TV လေးက ရုပ်သံအရည်အသွေးအပြည့် ပေးစွမ်းနိုင်သလို၊ သင့်စိတ်ကြိုက် Apps တွေကို လိုသလို ထည့်သွင်း အသုံးပြုနိုင်တာကြောင့် သင့်ကို စိတ်တိုင်းကျမှု အပြည့်အ၀ ပေးစွမ်းနိုင်မှာပါ။', 'electronic11.jpg', 'electronic12.jpg', '2024-02-29', 1, NULL, '2024-02-29 16:54:25', '2024-02-29 16:53:19'),
(48, 9, 13, 'Midea Air Purifier KJ200GD41 ', 'Midea', 'Price- 296,000mmk\r\n\r\nမကောင်းတဲ့လေထုအနံ့အသက်တွေနဲ့ မှိုပိုးမွှားတွေက အခန်းတွင်း လေထုကိုညစ်ညမ်းစေပြီး အသက်ရှူ လမ်းကြောင်းကို ထိခိုက်စေကာ ကျန်းမာရေးကို ဆိုးဝါးစေပါတယ်။\r\n\r\nAir Purifier တစ်လုံးဆောင်ထားလိုက်မယ်ဆိုရင်တော့ လေထုကိုညစ်ညမ်းစေတဲ့ အနံ့အသက်၊ဖုန်မှုန့်၊မီးခိုးအခိုးအငွေ့နဲ့ ခြင်ပိုးမွှားတွေကိုဖယ်ရှားပေးပြီးပန်းနာရင်ကျပ်စတဲ့အသက်ရှုလမ်းကြောင်းဆိုင်ရာရောဂါတွေမဖြစ်ပွားအောင်ကာကွယ်ပေးနိုင်ပါတယ်။\r\n ညဘက်AirPurifierဖွင့်အိပ်မယ်ဆိုရင်လည်းနှစ်ခြိုက်စွာအိပ်ပျော်စေနိုင်တာကြောင့်တနေ့တာအတွက်Stressတွေလျော့ကျစေပြီးစိတ်ရောလူရောကြည်လင်လန်းဆန်းနေစေမှာပါ။', 'electronic13.jpg', 'electronic14.jpg', '2024-02-29', 1, NULL, '2024-02-29 16:58:47', '2024-02-29 16:58:07'),
(49, 24, 14, 'Dior Set', 'Dior', 'Price-27800ks\r\n\r\nပုလဲကြိုးလေးက လှရက်လိုက်တာနော်  မြန်မာဝတ်စုံလေးတွေနဲ့ တွဲဝတ်ရင်လဲ အရမ်းထည်ဝါသော Setလေးပါ။\r\nယောက်ခမ အိမ်သွားရင် လက်ဆောင်ပေးလဲ အဆင်ပြေပါတယ်။\r\nကြိုးရော နားကပ်  လက်ကောက် 3ခုလုံးလှရက် ဘာနဲ့တွဲဝတ် ဝတ် လိုက်ဖက်တဲ့\r\nBoxရော အိတ်ရော ကတ်တွေအစုံပါတာနော်။\r\nစျေးနည်းတက်ပေမဲ့ ရတဲ့ Qualityက ရှယ်တန်တာနော်\r\n\r\nAddress- မော်လမြိုင်မြို့ မြိုင်သာယာ သမိန်ဗရမ်းလမ်း 35လမ်းနား  09762022161', 'fashion1.jpg', 'fashion2.jpg', '2024-02-17', 1, NULL, '2024-02-17 17:23:41', '2024-02-17 17:22:54');

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
(2, 'Testing', 'test@gmail.com', 'Hello!!', '2024-02-13'),
(3, 'Testing', 'test@gmail.com', 'Mingalar par!!', '2024-02-17'),
(4, 'Testing', 'test@gmail.com', 'Mingalar par!!', '2024-02-17');

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
(2, 'Testing', 'test@gmail.com', 9123456789, '25d55ad283aa400af464c76d713c07ad', 'cosmetic.jpg', '2024-02-12'),
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
(31, 'Soe Soe Aye', 'soesoeaye22554@gmail.com', 9781022554, 'c7eb5f294fc1c585dfab71e3381f1b57', 'avatar15.jpg', '2024-02-17'),
(32, 'Pann Phyu', 'pannphu7447@gmail.com', 9442577447, '1dc8ae0064a34660627d5bc50ac98bbe', 'avatar15.jpg', '2024-02-17');

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
  MODIFY `AdId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
CREATE DEFINER=`root`@`localhost` EVENT `delete_not_confirm_ads` ON SCHEDULE EVERY 30 MINUTE STARTS '2024-02-18 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM advertising
    WHERE Status=0 AND UploadTime < DATE_SUB(NOW(), INTERVAL 2 HOUR)$$

CREATE DEFINER=`root`@`localhost` EVENT `delete_cancle_ads` ON SCHEDULE EVERY 2 HOUR STARTS '2024-02-18 00:13:03' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM advertising
    WHERE Status=2 AND UploadDate < DATE_SUB(NOW(), INTERVAL 1 DAY)$$

CREATE DEFINER=`root`@`localhost` EVENT `delete_confirm_data` ON SCHEDULE EVERY 1 DAY STARTS '2024-02-29 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO DELETE FROM advertising
    WHERE Status=1 AND UploadDate < DATE_SUB(NOW(), INTERVAL 1 WEEK)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
