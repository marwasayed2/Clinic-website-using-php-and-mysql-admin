-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 أغسطس 2022 الساعة 00:53
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- بنية الجدول `brain`
--

CREATE TABLE `brain` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `specialty` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `governorate` varchar(200) NOT NULL,
  `waiting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `brain`
--

INSERT INTO `brain` (`ID`, `Name`, `degree`, `specialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتور وائل محمود عزت\r\n', 'إستشارى المخ و الاعصاب بالقصر العينى-\r\n', 'دكتور مخ واعصاب متخصص في مخ واعصاب بالغين و مخ واعصاب اطفال\r\n', 300, ' شارع 26 يوليو-ميدان لبنان(المهندسين)', 'القاهره', 90),
(2, 'دكتور مصطفى زكريا\r\n', 'استاذ طب الاطفال كليه طب جامعه القاهره\r\n\r\n', 'دكتور مخ واعصاب متخصص في نفسى اطفال، مخ واعصاب اطفال\r\n\r\n', 400, ' ابو الهول السياحى متفرع من شارع -الهرم', 'الجيزه', 15),
(3, 'دكتور عبدالله مكى\r\n', 'استشاري امراض المخ والاعصاب والطب النفسى والادمان\r\n\r\n', 'دكتور مخ واعصاب متخصص في نفسى اطفال و نفسى بالغين مخ واععصاب بالغين\r\n\r\n', 300, 'شبرا الخيمه : ش 15 مايو تقاطع الشارع الجديد', 'القليبوبيه', 27),
(4, 'دكتور احمد محمد فهمى\r\n', 'استشارى المخ والاعصاب\r\n\r\n', 'دكتور مخ واعصاب متخصص فى مخ واعصاب بالغين\r\n\r\n', 300, 'العباسيه : ميدان عبده باشا', 'القاهره', 50),
(5, 'دكتور كمال البدوى\r\n', 'استشارى امراض المخ والاعصاب زالامراض النفسيه وعلاج الادمان\r\n\r\n', 'دكتور مخ واعصاب متخصص في مخ اعصاب اطفال، مخ واصاب بالغين، نفسى بالغين و نفسى اطفال\r\n\r\n', 150, 'الهرم : شارع ترعه الزمر', 'الجيزه', 28),
(6, 'دكتور ايمن العزونى\r\n', 'استاذ المخ والاعصاب والطب النفسى بكليه الطب\r\n\r\n', 'دكتور مخ واعصاب متخصص في نفسى بالغين , مخ واعصاب اطفال مخ واعصاب بالغين\r\n\r\n', 600, ' ش مصدق لدقى', 'القاهره', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brain`
--
ALTER TABLE `brain`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brain`
--
ALTER TABLE `brain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
