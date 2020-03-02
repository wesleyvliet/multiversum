-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2020 at 09:20 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiversum`
--

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

DROP TABLE IF EXISTS `producten`;
CREATE TABLE IF NOT EXISTS `producten` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `platform` varchar(250) NOT NULL,
  `resulatie` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `title`, `platform`, `resulatie`) VALUES
(1, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(2, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(3, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(4, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(5, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(6, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(7, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(8, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(9, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(10, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(11, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(12, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(13, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(14, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(15, 'Pimax 5K Plus', 'Pc', '2040/1440'),
(16, 'Pimax 5K Plus', 'Pc', '2040/1440');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
