-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أغسطس 2022 الساعة 01:35
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
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- بنية الجدول `women`
--

CREATE TABLE `women` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `governorate` varchar(100) NOT NULL,
  `waiting` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `women`
--

INSERT INTO `women` (`ID`, `name`, `degree`, `specialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتوره دعاء صلاح الدين محمود\r\n', 'استاذ واستشاري نساء و توليد وامراض النساء وتاخر الانجاب\r\n', 'دكتور نساء و توليد متخصص في امراض النساء والحقن المجهري', 350, 'المهندسين: الكوثر من جامعه الدول', 'القاهره', '28'),
(2, 'دكتور هشام عصام\r\n', 'استاذ واستشاري نساء و توليد وامراض النساء\r\n', 'دكتور نساء و توليد متخصص في جراحات تجميل نسائيه وجراحه اورام الرحم', 250, 'الهرم: شارع الهرم محطه سهل حمزه', 'القاهره', '29'),
(3, 'دكتور محمود الشريف\r\n', 'استاذ واستشاري نساء و توليد وامراض العقم\r\n', 'دكتور نساء و توليد متخصص في جراحات تجميل نسائيه', 300, 'المعادي: نيركو الشطر الخامس', 'القاهره', '12'),
(4, 'دكتور ابو بكر النشار', 'استاذ واستشاري نساء و توليد استشارى الحقن المجهري', 'دكتور نساء و توليد متخصص في الحقن المجهري', 200, 'القليبوبيه: اول شارع السكه ', 'القلبيوبيه', '28'),
(5, 'دكتوره منال غباشي\r\n', 'استاذ واستشاري نساء و توليد', 'دكتور نساء و توليد متخصص في الجراحات النسائيه التجمليه', 250, 'مدينه نصر: شارع نجاتي سراج', 'القاهره', '15'),
(6, 'دكتور هاني كاشف\r\n', 'استاذ واستشاري نساء و توليد واستشاري الحقن المجهري\r\n', 'دكتور نساء و توليد متخصص في الجراحات النسائيه وامراض النساء ولاده', 200, 'المعادي : عبد المنعم رياض', 'القاهره\r\n', '14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
