-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2020 at 08:10 AM
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
  `korting` varchar(240) NOT NULL DEFAULT '0',
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
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `title`, `prijs`, `platform`, `eigenDisplay`, `resulatie`, `actie`, `korting`, `functies`, `aansluitingen`, `refreshRate`, `accessoires`, `garantie`, `infoProduct`, `infoMerk`, `infoTweakers`, `infoEAN`, `infoSKU`) VALUES
(48, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, '150,00', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(47, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, '150,00', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(46, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, '150,00', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(45, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, '150,00', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(31, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(32, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 1, '150,00', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(33, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(34, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(35, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(36, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(37, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(38, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(39, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(40, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(41, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(42, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(43, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(44, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(49, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(50, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(51, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(52, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(53, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(54, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(55, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(113, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(114, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(96, 'Oculus Rift S', '699,99', 'Pc', 1, '2560x1440 (Quad HD)', 0, '0', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'Oculus Rift S', 'Oculus', '1329634', '0815820020387', '301-00178-01'),
(97, 'naampje', '199', 'plat', 1, 'res', 0, '', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(98, 'naampje', '150', 'plat', 1, 'res', 0, '200', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(99, 'naampje', '150', 'plat', 1, 'res', 1, '200', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(100, 'naampje', '199,99', 'Array', 0, 'res', 0, '', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(101, 'naampje', '199,99', 'Pc, Telefoon', 0, 'res', 0, '', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(102, 'naampje', '', 'Telefoon, Ps4', 0, 'res', 0, '', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(103, 'naampje', '999,99', 'Ps4', 0, 'res', 0, '', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(104, 'naampje', '90', 'Ps4', 0, 'res', 0, '', 'funct', 'aansluit', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'test kru'),
(105, 'naampje', '90', 'Ps4', 0, 'res', 0, '', 'funct', 'aansluit test', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'kru'),
(106, 'naampje', '90', '', 0, 'res', 0, '', 'func func', 'wou wee', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'rrreeeee'),
(107, 'naampje', '90', 'Ps4', 0, 'res', 0, '', 'func func', 'wou wee', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'rrreeeee'),
(108, 'naam naam', '90', 'Ps4', 0, 'res res', 0, '', 'adwad', 'wdad', 'refrate', 'acces', 'garantie', 'infoPro', 'merki', '4214', 'ean', 'skru'),
(109, 'naam', '90', 'Ps4', 0, 'res', 0, '', 'func', 'aan', '30 30', 'acc', 'gar', 'info prod', 'merk', 'tweakid', 'ean', 'sku'),
(110, 'dwa', '90', 'Telefoon', 0, 'wad', 0, '', 'wdad', 'dwa', 'wad', 'adw', 'daw', 'adw', 'aw', 'dwa', 'dwa', 'adw'),
(111, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(112, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(115, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(116, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(117, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(118, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(119, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(120, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(121, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(122, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(123, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(124, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(125, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(126, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(127, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(128, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(129, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(130, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(131, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(132, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(133, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(134, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(135, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(136, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(137, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(138, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(139, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(140, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(141, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(142, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(143, 'dWOM', '999', 'Pc', 0, 'awd', 0, '', 'awdaw', 'adw', 'wda', 'adwwa', 'cadw', 'wad', 'awd', 'adw', 'adw', 'wda'),
(144, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(145, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(146, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(147, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(148, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(149, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(150, 'adw', '99', 'Telefoon', 0, 'awd', 0, '', 'daw', 'wdwa', '60', 'wad', 'wad', 'dw', 'awdaw', 'dwa', 'adwwa', 'wad'),
(151, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(152, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(153, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(154, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(155, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(156, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(157, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(158, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(159, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(160, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(161, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(162, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(163, 'test', 'test', 'Telefoon', 0, 'tse', 0, '', 'tset', 'test', 'test', 'test', 'test', 'tst', 'test', 'test', 'test', 'tse'),
(164, 'test', '999', 'Telefoon', 0, 'test', 0, '', 'tset', 'tset', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'tse'),
(165, 'test', '999', 'Telefoon', 0, 'test', 0, '', 'tset', 'tset', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'tse'),
(166, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(167, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(168, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(169, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(170, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(171, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(172, 'test', '199', 'Ps4', 0, 'test', 0, '', 'tset', 'test', 'tset', 'test', 'testtes', 'test', 'test', 'test', 'tset', 'tset'),
(173, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(174, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(175, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(176, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(177, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(178, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(179, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(180, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(181, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(182, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(183, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(184, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(185, 'wda', '199', 'Pc', 0, 'wda', 0, '', 'dwad', 'dwad', 'daw', 'dwa', 'wdadwdwdwa', 'dad', 'dad', 'da', 'da', 'da'),
(186, 'wad', '199', 'Telefoon', 0, 'da', 0, '', 'da', 'da', 'aw', 'dwa', 'wda', 'dwa', 'dwa', 'daw', 'dad', 'da'),
(187, 'wad', '199', 'Telefoon', 0, 'da', 0, '', 'da', 'da', 'aw', 'dwa', 'wda', 'dwa', 'dwa', 'daw', 'dad', 'da'),
(188, 'wad', '199', 'Telefoon', 0, 'da', 0, '', 'da', 'da', 'aw', 'dwa', 'wda', 'dwa', 'dwa', 'daw', 'dad', 'da'),
(189, 'rwar', '199', 'Telefoon', 0, 'da', 0, '', 'da', 'da', 'd', 'dwa', 'dwadwda', 'da', 'dwa', 'da', 'da', 'da'),
(190, 'rwar', '199', 'Telefoon', 0, 'da', 0, '', 'da', 'da', 'd', 'dwa', 'dwadwda', 'da', 'dwa', 'da', 'da', 'da'),
(191, 'dwa', '199', '', 0, 'wda', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'wda', 'dwa', 'dwa', 'dwa', 'dwa', 'dwadd'),
(192, 'dwa', '199', '', 0, 'wda', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'wda', 'dwa', 'dwa', 'dwa', 'dwa', 'dwadd'),
(193, 'dwa', '199', '', 0, 'wda', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'wda', 'dwa', 'dwa', 'dwa', 'dwa', 'dwadd'),
(194, 'dwa', '199', '', 0, 'wda', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'wda', 'dwa', 'dwa', 'dwa', 'dwa', 'dwadd'),
(195, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(196, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(197, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(198, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(199, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(200, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(201, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(202, 'ets', '199', 'Telefoon', 0, 'tes', 0, '', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'testt', 'tes', 'est'),
(203, 'wda', 'wda', 'Ps4', 0, 'dwa', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'daw'),
(204, 'wda', 'wda', 'Ps4', 0, 'dwa', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'daw'),
(205, 'wda', 'wda', 'Ps4', 0, 'dwa', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'daw'),
(206, 'wda', 'wda', 'Ps4', 0, 'dwa', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'daw'),
(207, 'wda', 'wda', 'Ps4', 0, 'dwa', 0, '', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'dwa', 'daw');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
