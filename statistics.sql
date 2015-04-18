-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2015 at 09:56 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `statistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `mudhouse`
--

CREATE TABLE IF NOT EXISTS `mudhouse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `mudhouse`
--

INSERT INTO `mudhouse` (`id`, `text`, `question`, `answer`, `type`) VALUES
(1, 'The house is built on river banks that can slide/creep.', 'siting_a', 'y', 'Form2_Mudhouse_LS'),
(2, 'The soil underneath the house is liquefiable.', 'soil_and_foundn_a', 'y', 'Form2_Mudhouse_LS'),
(3, 'The electricity wires are held rigidly between the house and the street\r\npole with no slack, that can result in short circuiting and electrocution\r\nduring an earthquake', 'lifelines_a', 'y', 'Form2_Mudhouse_LNS'),
(4, 'The gas cylinders are not strapped to the wall, that can result in\r\ntoppling of the cylinders, which in turn can lead to gas leakage and\r\nthereby asphyxiation of persons during an earthquake.', 'lifelines_b', 'y', 'Form2_Mudhouse_LNS'),
(5, 'The house is on sloped ground. ', 'siting_a', 'a', 'Form2_Mudhouse_ES'),
(6, 'Soft soil', 'soil_and_foundn_a', 'a', 'Form2_Mudhouse_ES'),
(7, 'Weak soil', 'soil_and_foundn_a', 'b', 'Form2_Mudhouse_ES'),
(8, 'High water table', 'soil_and_foundn_a', 'c', 'Form2_Mudhouse_ES'),
(9, 'Wider top and narrower bottom', 'arch_b', 'a', 'Form2_Mudhouse_ES'),
(10, 'Heavier top', 'arch_b', 'b', 'Form2_Mudhouse_ES'),
(11, 'Large projections or overhangs', 'arch_b', 'c', 'Form2_Mudhouse_ES'),
(12, 'Split roof', 'arch_b', 'd', 'Form2_Mudhouse_ES'),
(13, 'Large storey heights', 'arch_b', 'e', 'Form2_Mudhouse_ES'),
(14, 'Differences in storey heights', 'arch_b', 'f', 'Form2_Mudhouse_ES'),
(15, 'About half of openings close to corners', 'arch_d', 'b', 'Form2_Mudhouse_ES'),
(16, 'Almost all openings close to corners', 'arch_d', 'c', 'Form2_Mudhouse_ES'),
(17, 'Houses touch each other', 'arch_e', 'a', 'Form2_Mudhouse_ES'),
(18, '2 storeys', 'arch_h', 'a', 'Form2_Mudhouse_ES'),
(19, '3 storey or more', 'arch_h', 'b', 'Form2_Mudhouse_ES'),
(20, 'Heavy roof', 'struct_b', 'a', 'Form2_Mudhouse_ES'),
(21, 'Large openings in roof', 'struct_b', 'd', 'Form2_Mudhouse_ES'),
(22, 'Unreinforced mud walls', 'constr_a', 'a', 'Form2_Mudhouse_ES'),
(23, 'Not anchored to structural system', 'accel_and_disp_a', 'a', 'Form2_Mudhouse_ENS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
