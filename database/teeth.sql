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
-- بنية الجدول `teeth`
--

CREATE TABLE `teeth` (
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
-- إرجاع أو استيراد بيانات الجدول `teeth`
--

INSERT INTO `teeth` (`ID`, `Name`, `degree`, `specialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتور فوده كلينك\r\n', 'جراحة و تجميل الاسنان\r\n', 'دكتور متخصص في اسنان الاطفال , تركيبات اسنان , وعلاج اللثه', 200, 'الاسكندريه: شارع يثرب ', 'الاسكندريه', 23),
(2, 'دكتور مصطفي احمد عبدالعال\r\n', 'اخصائي تجميل وزراعه الفم الاسنان\r\n', 'دكتور متخصص في اسنان الاطفال,تركيبات اسنان وعلاج اللثه', 200, 'المهندسين:شارع لبنان', 'القاهره', 15),
(3, 'دكتور عمر خالد', 'خصائي تجميل وزراعه الفم الاسنان', 'متخصص في جراحه الوجه والفك وتجميل الاسنان وزراعه الاسنان', 150, 'المنوفيه:شارع لبنان', 'المنوفيه', 15),
(4, 'دكتوره هاله عاطف', 'استشاري في تركيبات الاسنان-اسنان مسنين واطفال', 'دكتور اسنان متخصص في اشعه الاسنان وتركيبات الاسنان', 100, 'القليبوبيه : طوخ', 'القليبوبيه', 14),
(5, 'دكتوره امل فوزي', 'استشاري طب وجراحه فم والاسنان \r\n', 'دكتور اسنان متخصص في تركيبات الاسنان وتقويم الاسنان ', 100, 'اسيوط :شارع عبدالناصر', 'اسيوط', 14),
(6, 'دكتور محمد صفوت مسعود', 'دكتور اسنان متخصص في اشعه الاسنان واسنان مسنين', 'دكتور اسنان متخصص في اشعه الاسنان واسنان مسنين', 200, 'المعادي :تقاطع شارع النصر مع شارع اللسلكي', 'القاهره', 12),
(7, 'دكتور اسلام شوره', 'طبيب وجراح الفم والاسنان', 'دكتور اسنان متخصص في زراعه الاسنان وتركيب الاسنان', 200, 'المعادي :تقاطع شارع النصر مع شارع اللسلكي ', 'القاهره', 12),
(8, 'دكتور هشام صفا', 'طبيب وجراح الفم و زراعه الاسنان', 'دكتور اسنان متخصص في زراعه الاسنان وتركيب الاسنان وجراحه الوجه والفكين', 150, 'السيده زينب :القصر العيني ', 'القاهره', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teeth`
--
ALTER TABLE `teeth`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teeth`
--
ALTER TABLE `teeth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
