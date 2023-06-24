-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أغسطس 2022 الساعة 01:34
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
-- بنية الجدول `psychology`
--

CREATE TABLE `psychology` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `governorate` varchar(100) NOT NULL,
  `waiting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `psychology`
--

INSERT INTO `psychology` (`ID`, `Name`, `degree`, `specialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتور محمد حسين الشيخ\r\n', 'اخصائي الطب النفسي وعلاج الادمان\r\n', 'دكتور نفسي متخصص في علاج النفسي ومخ واعصاب', 400, 'المهندسين: عبدالمنعم رياض', 'القاهره', 22),
(2, 'دكتوره سالي محمد الشيخ', 'استشاري الطب النفسي وعلاج الادمان', 'دكتور متخصص في استشارات اسريه وعلاج الادمان', 650, 'الاسكندريه:53 شارع عمان بجوار نادي الصيد', 'الاسكندريه', 33),
(3, 'دكتوره هناء لمعي', 'استشاري الامراض النفسيه والعصبيه وعلاج الادمان', 'متخصص في علاج السموم وعلاج الادمان \r\n', 200, 'اسيوط: رياض تقاطع صالح صبحي \r\n', 'اسيوط', 17),
(4, 'دكتور حسام عماره', 'استشاري الامراض النفسيه والعصبيه وعلاج الادمان', 'متخصص في علاج السموم وعلاج الادمان ونفسي المراهقين', 600, 'القليبوبيه: شارع طرابلس متفرع من عباس العقاد', 'القليبوبيه', 32),
(5, 'دكتور محمد الجوهري', 'استشاري الطب النفسي وامراض المخ والعصبيه وعلاج الادمان\r\n', 'متخصص في علاج الادمان ونفسي الاطفال', 300, 'رشدي:طريق الحريه مصطفي كامل', 'الجيزه', 29),
(6, 'دكتور هشام ماجد عبدالفتاح\r\n', 'المدير العلاجي لمستشفي العباسيه للصحه النفسيه\r\n', '', 300, 'الهرم:ناصر الثوره', 'الجيزه', 23),
(7, 'دكتوره مي عيسي\r\n', 'دكتوره مي عيسي\r\n', 'دكتور نفسي متخصص في نفسي بالغين ونفسي الاطفال', 325, 'الشرقيه :عبد الحليم ', 'الشرقيه', 57),
(8, 'دكتور هشام الشافعي\r\n', 'اخصائي الطب النفسي وعلاج الادمان مستشفي المعموره\r\n', 'دكتور نفسي متخصص في استشارات اسريه ونفسي الاطفال', 220, 'السيوف: دورن السيوف خلف المطافي', 'المنوفيه', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `psychology`
--
ALTER TABLE `psychology`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `psychology`
--
ALTER TABLE `psychology`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
