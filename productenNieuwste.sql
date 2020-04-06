-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2020 at 07:11 AM
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
  `title` varchar(240) CHARACTER SET utf8 DEFAULT NULL,
  `prijs` varchar(240) CHARACTER SET utf8 DEFAULT NULL,
  `platform` varchar(240) CHARACTER SET utf8 DEFAULT NULL,
  `eigenDisplay` varchar(240) DEFAULT 'Niet inbegrepen',
  `resulatie` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `actie` int(240) DEFAULT 0,
  `korting` varchar(240) NOT NULL,
  `functies` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `aansluitingen` varchar(35) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `refreshRate` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `accessoires` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `garantie` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `infoProduct` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `infoMerk` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `infoTweakers` varchar(240) DEFAULT 'Niet inbegrepen',
  `infoEAN` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `infoSKU` varchar(240) CHARACTER SET utf8 DEFAULT 'Niet inbegrepen',
  `archived` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `title`, `prijs`, `platform`, `eigenDisplay`, `resulatie`, `actie`, `korting`, `functies`, `aansluitingen`, `refreshRate`, `accessoires`, `garantie`, `infoProduct`, `infoMerk`, `infoTweakers`, `infoEAN`, `infoSKU`, `archived`) VALUES
(2, 'Oculus Rift S', '604,40', 'pc', '1', '2560x1440 (Quad HD)', 1, '50', 'Koptelefoon', '3.5mm', '80Hz', 'Controller(s), Kabels', '2 jaar carry in', 'aaa', 'Oculus', '1329634', '815820020387', '301-00178-01', 1),
(3, 'Oculus Quest 64GB', '499,73', 'Standalone', '1', '2880x1600', 1, '100', 'Accelerometer, Camera, Gyroscoop, Microfoon, Speakers, Verstelbare lenzen', 'USB 3.2 (Gen1, 5Gb/s) type-c', '72Hz', 'Controller(s)', NULL, 'aaa', 'Oculus', '1372816', '815820020318', '301-00174-01', 0),
(4, 'HP Windows Mixed Reality headset', '300,-', 'PC', '1', '2880x1440', 1, '100', 'Accelerometer, Camera, Gyroscoop', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Controller(s), Headset bedraad, Kabels', '2 jaar pickup & return', 'aaa', 'HP', '1113175', '192018001602', '2MJ36EA#ABB, VR1000-100nn', 1),
(5, 'Oculus Quest 128GB', '549,-', 'Standalone', '1', '2880x1600', 1, '75', 'Accelerometer, Camera, Gyroscoop, Microfoon, Speakers, Verstelbare lenzen', 'USB 3.2 (Gen1, 5Gb/s) type-c', '72Hz', 'Controller(s)', NULL, 'aaa', 'Oculus', '1323402', '815820020325', '301-00175-01', 1),
(6, 'Oculus Go 32GB', '249,74', 'Standalone', '1', '2560x1440 (Quad HD)', 1, '25', NULL, '3.5mm', '72Hz', NULL, '2 jaar carry in', 'aaa', 'Oculus', '1088615', '0815820020189, 0815820020202', '301-00103-01', 0),
(7, 'HTC Vive Pro (Full Kit)', '1199,-', 'PC', '1', '2880x1600', 0, '', 'Camera, Gyroscoop, Koptelefoon, Magnetometer, Microfoon, Verstelbare lenzen', '3.5mm, USB 3.2 (Gen1, 5Gb/s) type-c', '90Hz', 'Controller(s), Headset bedraad, Kabels, Tracking stations', NULL, 'aaa', 'HTC', '1179307', '4250494920681, 4718487708055', '4QU87AA, 99HANW003-00', 0),
(8, 'Sony PlayStation VR V2 + PS Camera + 5 games (Megapack)', '229,-', 'PlayStation 4', '1', '1920x1080 (Full HD)', 0, '', 'Accelerometer, Gyroscoop, Koptelefoon, Microfoon', 'HDMI, USB 2.0', '90Hz', 'Headset bedraad, Kabels', NULL, 'aaa', 'Sony', '1492992', '711719998105', '7362177401', 0),
(9, 'HP Reverb - Professional Edition', '655,33', 'PC', '1', '4320x2160', 0, '', 'Koptelefoon, Microfoon', NULL, '90Hz', 'Controller(s), Kabels', '1 jaar carry in', 'aaa', 'HP', '1329580', '193905282654', '6KP43EA#ABB', 0),
(11, 'Sony PlayStation VR', '297,87', 'PlayStation 4', '1', '1920x1080 (Full HD)', 0, '', 'Accelerometer, Gyroscoop, Koptelefoon, Microfoon', 'HDMI, USB 2.0', '90Hz', 'Headset bedraad, Kabels', NULL, 'aaa', 'Sony', '395213', '0711719843757, 2750057115988', '4973658076, 9843757', 0),
(12, 'HTC Vive Cosmos', '747,54', 'Smartphone', '1', '2880x1700', 0, '', 'Camera, Gyroscoop, Handtracking, Koptelefoon', NULL, '90Hz', 'Controller(s), Kabels', NULL, 'aaa', 'HTC', '1414778', '4718487715022', '99HARL002-00', 0),
(13, 'Carl Zeiss VR One (zonder tray)', '63,90', 'PC', '0', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'aaa', 'Carl Zeiss', '445534', '4047865190299, 4047865190367', '112 6000, 2125-986', 0),
(14, 'HP Windows Mixed Reality Headset Professional Edition', '800,-', 'Smartphone', '1', '2880x1440', 0, '', 'Accelerometer, Camera, Gyroscoop', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Controller(s), Headset bedraad, Kabels', '2 jaar pickup & return', 'aaa', 'HP', '1521668', NULL, '2MJ36EA, 3VM67AA', 0),
(15, 'Homido Smartphone Virtual Reality Headset', '13,95', 'Smartphone', '0', NULL, 0, '', 'Accelerometer, Gyroscoop, Verstelbare lenzen', NULL, NULL, NULL, '2 jaar carry in', 'aaa', 'Homido', '426830', '3760071190020, 3760071190075', '77310100, SPR-HOM VR Headset, SPR-HOM-VR', 0),
(16, 'Trust GTX 720 3D Virtual Reality Glasses', '45,52', 'Smartphone', '0', NULL, 0, '', NULL, NULL, NULL, 'Controller(s)', NULL, 'aaa', 'Trust', '698169', '8713439213225', NULL, 0),
(17, 'Samsung Gear VR 2', '79,90', 'Smartphone', '0', NULL, 0, '', 'Accelerometer, Gyroscoop', NULL, NULL, NULL, NULL, 'aaa', 'Samsung', '584909', '8806088503141, 8806088503240, 8806088503929, 8806088503936, 8806088504049, 8806088516585', 'SAM50393601, SM-R323NBKA, SM-R323NBKADBT, SM-R323NBKALUX, SM-R323NBKAPHN, SM-R323NBKAXEF', 0),
(18, 'Dell Visor + Dell Visor controllers', '423,53', 'PC', '1', '2880x1440', 0, '', 'Accelerometer, Camera, Gyroscoop, Magnetometer', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Headset bedraad', NULL, 'aaa', 'Dell', '1117191', '0884116285380, 5397184004470', '536-BBBW, 545-BBBF, 545-BBBI, VR-PLUS100', 0),
(19, 'Samsung New Gear VR + Gear VR Controller', '123,46', 'Smartphone', '0', NULL, 0, '', 'Accelerometer, Gyroscoop', NULL, NULL, 'Controller(s)', NULL, 'aaa', 'Samsung', '763655', '8806088773391, 8806088773407, 8806088775883', 'SM-R324NZAALUX, SM-R324NZAAPHN, SM-R324NZAAXEF', 0),
(20, 'Samsung galaxy Gear VR (v2)', '59,90', 'Smartphone', '0', NULL, 0, '', 'Accelerometer, Gyroscoop', NULL, NULL, NULL, NULL, 'aaa', 'Samsung', '463881', '0780437918016, 8806088150192, 8806088150208, 8806088150222, 8806088150239, 8806088157931', 'SM-R322NZWAATO, SM-R322NZWABTU, SM-R322NZWADEBT, SM-R322NZWALUX, SM-R322NZWAPHN', 0),
(21, 'Lenovo Explorer Headset', '100,-', 'PC', '1', '2880x1440', 0, '', 'Accelerometer, Camera, Gyroscoop, Magnetometer', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Controller(s), Headset bedraad', NULL, 'aaa', 'Lenovo', '1113399', '191999086226', 'G0A20002WW', 0),
(22, 'HTC Vive Pro', '860,37', 'PC', '1', '2880x1600', 0, '', 'Camera, Gyroscoop, Koptelefoon, Microfoon, Verstelbare lenzen', '3.5mm, USB 3.2 (Gen1, 5Gb/s) type-c', '90Hz', NULL, NULL, 'aaa', 'HTC', '1129401', '0192545934565, 4718487708185, 5704174198161', '4QU86AA, 99HANW017-00', 0),
(23, 'Ergenic 3D VR Glasses for smartphone', '14,95', 'Smartphone', '0', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'aaa', 'Ergenic', '571823', '8719075490266', 'ERG VR10', 0),
(24, 'Acer Mixed Reality Headset', '349,-', 'PC', '1', '2880x1440', 0, '', 'Accelerometer, Camera, Gyroscoop, Magnetometer', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Controller(s), Headset bedraad', '2 jaar carry in', 'aaa', 'Acer', '1113401', '4713883398558', 'AH101-D0C0, VD.R05EE.003', 0),
(25, 'Wonky Monkey 3D VR Glasses', '90,-', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, NULL, NULL, 'aaa', 'Wonky Monkey', '571829', '8718924811184', 'WM PAC-VR20', 0),
(26, 'VR BOX VR-bril + Bluetooth Remote Control (Wit)', '16,80', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, 'Afstandbediening', NULL, 'aaa', 'VR Box', '485049', '8718722130630', 'VRBOX-VRBBC-4.7-6-INCH', 0),
(27, 'VR BOX VR-bril', '12,95', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, NULL, NULL, 'aaa', 'VR Box', '485041', '0602561524461, 8718722133594', 'VRBOX-VRB-4.7-6-INCH-BLK', 0),
(28, 'Sony PlayStation VR V2 + PS Camera + VR Worlds', '337,69', 'PlayStation 4', '1', '1920x1080 (Full HD)', 0, '', 'Accelerometer, Gyroscoop, Koptelefoon, Microfoon', 'HDMI, USB 2.0', '90Hz', 'Headset bedraad, Kabels', NULL, 'aaa', 'Sony', '1509066', '711719782315', '9782315', 0),
(29, 'Ritech Riem 3 VR Bril', '90,-', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, NULL, NULL, 'aaa', 'Ritech', '525711', '6957841300025', NULL, 0),
(30, 'Oculus Go 64GB', '232,90', 'Standalone', '1', '2560x1440 (Quad HD)', 0, '', NULL, '3.5mm', '72Hz', NULL, '2 jaar carry in', 'aaa', 'Oculus', '1208343', '815820020219', '301-00105-01', 0),
(31, 'LG R100 360 VR', '425,96', 'Smartphone', '1', NULL, 0, '', 'Accelerometer, Gyroscoop', '3.5mm', NULL, 'Kabels', NULL, 'aaa', 'LG', '540357', '8806087005479', 'LG LG-360VR-SLV, LGR100.AEUATS', 0),
(32, 'König Virtual Reality', '31,99', 'Smartphone', '0', '1920x720', 0, '', NULL, NULL, NULL, NULL, NULL, 'aaa', 'König', '688889', '5412810223176, 5412810249268', 'CSVR100, KNLEDFLMB10W', 0),
(33, 'HTC Vive Pro Eye', '1399,-', 'PC', '1', '2880x1600', 0, '', 'Camera, Eyetracking, Gyroscoop, Microfoon, Verstelbare lenzen', NULL, '90Hz', 'Controller(s)', '2 jaar pickup & return', 'aaa', 'HTC', '1372182', '4718487714094', '99HARJ002-00', 0),
(34, 'VR Shinecon VR Bril Zwart + Bluetooth Gamepad Zwart', '27,95', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', '3.5mm, USB 3.2 (Gen1, 5Gb/s) type-c', NULL, 'Controller(s)', NULL, 'aaa', 'VR Shinecon', '571833', '8718066349491', NULL, 0),
(35, 'HTC Vive Cosmos XR', '400,-', 'PC', '1', '2880x1700', 0, '', 'Camera, Gyroscoop, Handtracking, Koptelefoon', NULL, '90Hz', 'Controller(s), Kabels', NULL, 'aaa', 'HTC', '1521716', NULL, NULL, 0),
(36, 'Celexon VRG-1', '5,99', 'Smartphone', '0', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'aaa', 'Celexon', '1262925', '4260094737107', '1091698', 0),
(37, 'BroFish Cardboard VR', '6,50', 'Smartphone', '0', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'aaa', 'BroFish', '571843', NULL, 'BRF-CAR-VR-GLA', 0),
(38, 'Zeiss VR One Plus', '59,95', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, NULL, NULL, 'aaa', 'Carl Zeiss', '553391', '4047865190398', '112 7000, 732174931', 0),
(39, 'Trust Exora Virtual Reality Glasses for Smartphones', '50,83', 'Smartphone', '0', NULL, 0, '', 'Koptelefoon, Microfoon, Verstelbare lenzen', '3.5mm', NULL, NULL, '2 jaar carry in', 'aaa', 'Trust', '1312650', '8713439220193', NULL, 0),
(40, 'Technaxx TX-77 Virtual Reality Headset', '15,28', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, NULL, NULL, 'aaa', 'Technaxx', '571839', '4260358122397', NULL, 0),
(41, 'Sweex Virtual Reality-Bril 4-Voudig Verstelbare Lenzen', '11,95', 'Smartphone', '0', NULL, 0, '', NULL, NULL, NULL, NULL, NULL, 'aaa', 'Sweex', '673045', '8717534023048', 'SWVR200', 0),
(42, 'Stealth VR Virtual Reality bril', '120,21', 'Smartphone', '0', NULL, 0, '', 'Verstelbare lenzen', NULL, NULL, NULL, NULL, 'aaa', 'Stealth VR', '571835', '5055269707219', 'VR100', 0),
(43, 'PNY The DiscoVRy Headset', '4,-', 'Smartphone', '0', NULL, 0, '', 'Accelerometer, Gyroscoop', NULL, NULL, NULL, NULL, 'aaa', 'PNY', '1115315', '3536403351991', 'VRH-DIS-01-KK-RB', 0),
(44, 'Hyper BoboVR Z4', '29,-', 'Smartphone', '0', NULL, 0, '', 'Koptelefoon', '3.5mm', NULL, NULL, NULL, 'aaa', 'Hyper', '1129991', '6941921144159, 6941921144500', '77303000', 0),
(45, 'HTC Vive Cosmos Play', '300,-', 'PC', '1', '2880x1700', 0, '', 'Camera, Gyroscoop, Handtracking, Koptelefoon', NULL, '90Hz', 'Controller(s), Kabels', NULL, 'aaa', 'HTC', '1521718', NULL, NULL, 0),
(46, 'HTC Vive Cosmos Elite', '800,-', 'PC', '1', '2880x1700', 0, '', 'Camera, Gyroscoop, Handtracking, Koptelefoon', NULL, '90Hz', 'Controller(s), Kabels', NULL, 'aaa', 'HTC', '1521714', NULL, NULL, 0),
(47, 'HP Windows Mixed Reality headset Professional Edition', '1000,-', 'PC', '1', '2880x1440', 0, '', 'Accelerometer, Camera, Gyroscoop', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Controller(s), Headset bedraad, Kabels', '2 jaar pickup & return', 'aaa', 'HP', '1521670', NULL, NULL, 0),
(48, 'Freefly VR', '50,-', 'Smartphone', '0', NULL, 0, '', NULL, NULL, NULL, 'Afstandbediening', NULL, 'aaa', 'Freefly', '452618', '5060427580009, 5060427580016', 'FREEFLY-GLIDE COMBO, FREEFLY01', 0),
(49, 'Dell Visor (alleen bril)', '379,-', 'PC', '1', '2880x1440', 0, '', 'Accelerometer, Camera, Gyroscoop, Magnetometer', '3.5mm, HDMI, USB 3.2 (Gen1, 5Gb/s)', '90Hz', 'Headset bedraad', NULL, 'aaa', 'Dell', '1117187', NULL, '545-BBBE, 9VMDX', 0),
(101, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(102, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(103, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(104, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(105, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(106, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(107, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(108, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(109, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(110, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(111, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(112, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(113, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(114, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(115, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(116, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(117, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(118, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(119, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(120, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(121, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0),
(122, 'test', 'seffesfes', 'Pc', '0', 'efesf', 0, '', 'fesfes', 'esfsefsfe', 'fessefseffseefs', 'fsefes', 'fsefes', 'fsefes', 'wadwadwad', 'sfefes', 'fesfes', 'fsefe', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
