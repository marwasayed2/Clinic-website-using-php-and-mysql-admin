-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أغسطس 2022 الساعة 23:47
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
-- بنية الجدول `nose`
--

CREATE TABLE `nose` (
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
-- إرجاع أو استيراد بيانات الجدول `nose`
--

INSERT INTO `nose` (`ID`, `Name`, `degree`, `specialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتور مبروك عبد الخالق\r\n', 'أستاذ الأنف و الأذن و الحنجره\r\n\r\n', 'دكتور انف واذن وحنجرة متخصص في انف واذن وحنجرة اطفال، انف واذن وحنجرة بالغين، جراحة انف واذن وحنجرة بالغين و جراحة انف واذن وحنجرة اطفال\r\n\r\n', 400, 'المهندسين : شارع البطل احمد عبد العزيز\r\nشارع عبد الحميد لطفي متفرع من شارع البطل احمد عبد العزيز', 'القاهره', 19),
(2, 'دكتور أحمد عبد الخالق رضوان\r\n', 'استشاري جراحات و مناظير الأذن، الانف و الحنجرة -جامعة القاهرة- دكتور انف واذن ', 'دكتور انف واذن وحنجرة متخصص في جراحة انف واذن وحنجرة بالغين، انف واذن وحنجرة بالغين، اضطراب السمع والتوازن، جراحة انف واذن وحنجرة اطفال، سمعيات اطفال، سمعيات بالغين و انف واذن وحنجرة اطفال\r\n\r\n', 300, 'الشيخ زايد : توين تورز محور ٢٦ يوليو', 'القاهره', 10),
(3, 'دكتور محمد سيد بدر\r\n', 'استشاري أمراض الأنف و الأذن و الحنجرة من كلية طب القصر العيني جامعة القاهرة\r\n\r\n', 'دكتور انف واذن وحنجرة متخصص في انف واذن وحنجرة اطفال، انف واذن وحنجرة بالغين، جراحة انف واذن وحنجرة اطفال و جراحة انف واذن وحنجرة بالغين\r\n\r\n', 250, 'عيادات بيت الحكمة (فيصل )', 'القاهره', 60),
(4, 'دكتور محمد نجيب\r\n', 'دكتور محمد نجيب\r\n', 'دكتور انف واذن وحنجرة متخصص في جراحة انف واذن وحنجرة اطفال،\r\nانف واذن وحنجرة اطفال، جراحة انف واذن وحنجرة بالغين، انف واذن وحنجرة بالغين، سمعيات اطفال، سمعيات بالغين و اضطراب السمع والتوازن\r\n', 350, 'مدينة نصر : مصطفي النحاس', 'القاهره', 47),
(5, 'دكتور عفت عبدالفتاح\r\n', 'استشاري ودكتوراه جراحة الأنف و الأذن و الحنجرة\r\n\r\n', 'دكتور انف واذن وحنجرة متخصص في انف واذن وحنجرة بالغين، اضطراب السمع\r\nوالتوازن، جراحة انف واذن وحنجرة اطفال، انف واذن وحنجرة اطفال و جراحة انف واذن وحنجرة بالغين\r\n\r\n', 150, '-المعادي : شارع النصر - ميدان الجزائر', 'القاهره', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nose`
--
ALTER TABLE `nose`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nose`
--
ALTER TABLE `nose`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
