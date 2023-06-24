-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19 أغسطس 2022 الساعة 06:54
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
-- بنية الجدول `pharmacy`
--

CREATE TABLE `pharmacy` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `namberphone` int(11) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `useraddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `pharmacy`
--

INSERT INTO `pharmacy` (`ID`, `username`, `namberphone`, `medicine`, `useraddress`) VALUES
(2, 'محمد', 90797, 'بنادول', 'الهرم'),
(3, 'خالد', 54357, 'ميكوجيل', 'مدينه نصر'),
(4, 'ساره', 9879696, 'مالوكس بلس', 'مصر الجديده'),
(5, 'مدحت', 23456, 'بنادول', 'كليه حاسبات');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
