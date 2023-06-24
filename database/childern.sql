-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 أغسطس 2022 الساعة 22:44
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
-- بنية الجدول `children`
--

CREATE TABLE `children` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `governorate` varchar(100) NOT NULL,
  `waiting` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `children`
--

INSERT INTO `children` (`ID`, `name`, `degree`, `specialty`, `price`, `address`, `governorate`, `waiting`) VALUES
(1, 'دكتور ماجد الوكيل\r\n', 'أستاذ طب الأطفال وحديثى الولادة - إستشارى صحة وتغذية الأطفال\r\n\r\n', 'دكتور اطفال وحديثي الولادة متخصص في حساسية ومناعة اطفال، تخسيس وتغذية اطفال، حديثي الولادة و اطفال\r\n', 300, ' الدقي : شارع التحرير', 'القاهره', 42),
(2, 'دكتور الفريد ادوارد شرقاوي', 'استشارى طب الاطفال و حديثي الولاده', 'دكتور اطفال وحديثي الولادة متخصص في حساسية ومناعة اطفال، رضاعة طبيعية، حديثي الولادة، اطفال، جهاز هض', 100, 'فيكتوريا : شارع الجلاء', 'القاهره', 32),
(3, 'دكتور فؤاد حسن حنفي\r\n', 'استشاري اول الأطفال و حديثي الولادة- حاصل على البورد الامريكي فى طب الاطفال \r\n\r\n', 'دكتور اطفال وحديثي الولادة متخصص في اطفال، حساسية ومناعة اطفال، تخسيس وتغذية اطفال و رضاعة طبيعية', 250, ' 6 اكتوبر : سنتر اجياد فيو الحى العاشر', 'القاهره', 13),
(4, 'دكتور عبدالرحيم زمزمي\r\n', 'استشارى اول طب اطفال وامراض صدروحساسيه اطفال وحميات بالقصر العينى جامعة القاهرة\r\n\r\n', 'دكتور اطفال وحديثي الولادة متخصص في قلب اطفال، اطفال، رضاعة طبيعية، جهاز هضمي ومناظير اطفال', 200, 'فيصل : شارع ابى تمام', 'القاهره', 14),
(5, 'دكتور سعيد ابراهيم محمد', 'استشاري الاطفال و حديثي الولادة\r\n\r\n', 'دكتور اطفال وحديثي الولادة متخصص في مخ واعصاب اطفال، نفسي اطفال، روماتيزم اطفال', 150, 'عين شمس : خالد بن الوليد', 'القاهره', 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
