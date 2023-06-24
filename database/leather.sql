-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أغسطس 2022 الساعة 06:37
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
-- بنية الجدول `leather`
--

CREATE TABLE `leather` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `spcialty` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `governorate` varchar(100) NOT NULL,
  `waiting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `leather`
--

INSERT INTO `leather` (`ID`, `Name`, `degree`, `spcialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتورة قمرية البنا\r\n', 'خصائية الجلدية و التجميل والليزر\r\n\r\n', 'دكتورة جلدية متخصص في جراحة تجميل الوجه\r\n، جلدية اطفال، تجميل وليزر،\r\n جلدية بالغين، جراحة تجميل ', 300, 'عيادات الجمل للتجميل (المهندسين)\r\nشارع عبد الحميد لطفي متفرع من شارع البطل احمد عبد العزيز', 'القاهره', 34),
(2, 'دكتور عزمي عبد اللطيف', 'استاذ الامراض الجلدية و التناسلية و العقم و الذكورة جامعة الازهر', 'دكتور جلدية متخصص في تجميل وليزر، امراض ذكورة، امراض تناسلية، جلدية اطفال و جلدية بالغين\r\n\r\n', 400, 'المهندسين : 50شارع محى الدين ابوالعز بجوار كنتاكى ويوجد بالعماره معامل النيل', 'القاهره', 17),
(3, 'دكتورة لمياء عبد الودود', 'استشاري الامراض الجلدية والتجميل والليزر', 'دكتورة جلدية متخصص في جلدية اطفال، تجميل وليزر و جلدية بالغين', 200, 'الزقازيق : طلبة عويضة', 'الزقازيق', 56),
(4, 'دكتورة رڤيان زكي شعبان', 'استشاري الجلديه و التجميل', 'دكتورة جلدية متخصص في امراض تناسلية، جلدية اطفال، تجميل وليزر و جلدية بالغين\r\n\r\n', 150, 'جانكليس : طريق الحرية', 'القليبوبيه', 29),
(5, 'دكتور سالم صلاح سالم\r\n', 'استشاري الأمراض الجلدية وتجميل البشرة بالليزر، استشاري الأمراض التناسلية والذكورة والعقم\r\n\r\n', 'دكتور جلدية متخصص في جلدية بالغين، امراض ذكورة، امراض تناسلية، تجميل وليزر و جلدية اطفال\r\n\r\n', 150, 'طنطا : ميدان ستوته (سعد زغلول)', 'طنطا', 15),
(6, 'دكتور محمد السيد حسن', 'استشارى امراض الجلدية والتناسلية والتجميل والليزر - دكتوراة الامراض الجلدية \r\n\r\n', 'دكتور جلدية متخصص في تجميل وليزر، جلدية اطفال، جلدية بالغين\r\n', 200, 'فيصل : شارع فيصل الرئيسى ناصيه شارع المستشفى', 'الجيزه', 28),
(7, 'دكتور مصطفى سند\r\n', 'استشاري الجلديه وأمراض الشعر\r\n\r\n', 'دكتور جلدية متخصص في جلدية اطفال، جلدية بالغين، امراض ذكورة، امراض تناسلية و تجميل وليزر\r\n\r\n', 150, 'العاشر من رمضان', 'الزقازيق', 14),
(8, 'دكتورة امانى عبد الهادى\r\n', 'استشاري الأمراض الجلدية والتجميل والليزر\r\n\r\n', 'دكتورة جلدية متخصص في جلدية بالغين\r\n\r\n', 400, 'التجمع : شارع 15', 'القاهره', 17),
(9, 'دكتور حسام الدين براوي\r\n', 'استشاري الامراض الجلدية والتناسلية والعقم - عضو الجمعية الامريكية لامراض الجلد والتناسلية والليزر\r\n\r', 'دكتور جلدية متخصص في جلدية بالغين، امراض ذكورة، امراض تناسلية، جلدية اطفال و تجميل وليزر\r\n\r\n', 200, 'بولكلي : شارع مسجد الهدايا من ش ابوقير', 'القليبوبيه', 44),
(10, 'دكتورة سهير طه\r\n', 'اسشارى الامراض الجلدية\r\n\r\n', 'دكتورة جلدية متخصص في امراض تناسلية، تجميل وليزر، جلدية بالغين و جلدية اطفال\r\n\r\n', 300, 'بولكلي : شارع مسجد الهدايا من ش ابوقير', 'القليبوبيه', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leather`
--
ALTER TABLE `leather`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leather`
--
ALTER TABLE `leather`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;