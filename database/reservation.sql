-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 أغسطس 2022 الساعة 23:35
-- إصدار الخادم: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- بنية الجدول `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `IDNational` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `InsuranceNumber` int(11) NOT NULL,
  `Nationality` varchar(15) NOT NULL,
  `BookingDay` date NOT NULL,
  `specialty` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `reservation`
--

INSERT INTO `reservation` (`ID`, `username`, `IDNational`, `phone`, `InsuranceNumber`, `Nationality`, `BookingDay`, `specialty`) VALUES
(4, 'marwa', 2147483647, 1127123665, 2345, 'Ù…ØµØ±ÙŠ', '2022-08-12', ''),
(5, 'marwa', 2147483647, 1182123834, 2345, 'Ù…ØµØ±ÙŠ', '2022-08-12', ''),
(6, '', 0, 0, 0, '', '0000-00-00', ''),
(7, 'marwa', 2147483647, 2147483647, 2345, 'Ù…ØµØ±ÙŠ', '2022-08-15', ''),
(8, 'مروه سيد', 2147483647, 1123123456, 2345, '', '0000-00-00', 'عظام'),
(9, 'مروه سيد', 2147483647, 1123123456, 2345, '', '0000-00-00', 'عظام'),
(10, 'مروه سيد', 2147483647, 1123123456, 2345, '', '0000-00-00', 'عظام'),
(11, 'مروه سيد', 456788, 1123123333, 2345, 'مصري', '2022-08-17', 'اسنان');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
