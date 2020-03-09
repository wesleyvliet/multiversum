-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2020 at 06:49 PM
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
  `id` int(240) NOT NULL AUTO_INCREMENT,
  `title` varchar(240) NOT NULL,
  `prijs` varchar(240) NOT NULL,
  `platform` varchar(240) NOT NULL,
  `eigenDisplay` tinyint(1) NOT NULL DEFAULT 0,
  `resulatie` varchar(240) NOT NULL,
  `actie` tinyint(1) NOT NULL DEFAULT 0,
  `functies` varchar(240) NOT NULL,
  `aansluitingen` varchar(240) NOT NULL,
  `refreshRate` varchar(240) NOT NULL,
  `accessoires` varchar(240) NOT NULL,
  `garantie` varchar(240) NOT NULL,
  `infoProduct` varchar(240) NOT NULL,
  `infoMerk` varchar(240) NOT NULL,
  `infoTweakers` varchar(240) NOT NULL,
  `infoEAN` varchar(240) NOT NULL,
  `infoSKU` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `title`, `prijs`, `platform`, `eigenDisplay`, `resulatie`, `actie`, `functies`, `aansluitingen`, `refreshRate`, `accessoires`, `garantie`, `infoProduct`, `infoMerk`, `infoTweakers`, `infoEAN`, `infoSKU`) VALUES
(48, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(47, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(46, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(45, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(31, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(32, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(33, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(34, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(35, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(36, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(37, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(38, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(39, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(40, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(41, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(42, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(43, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(44, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(49, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(50, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(51, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(52, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(53, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(54, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(55, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(56, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(57, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(58, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
