-- phpMyAdmin SQL Dump
-- version 4.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2015 at 08:12 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eerc-es`
--

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_ENS`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_ENS` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `lifelines_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_ES`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_ES` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(8) NOT NULL,
  `soil_and_foundn_a` varchar(8) NOT NULL,
  `soil_and_foundn_b` varchar(8) NOT NULL,
  `arch_a` varchar(8) NOT NULL,
  `arch_b` varchar(8) NOT NULL,
  `arch_c` varchar(8) NOT NULL,
  `arch_d` varchar(8) NOT NULL,
  `arch_e` varchar(8) NOT NULL,
  `arch_f` varchar(8) NOT NULL,
  `arch_g` varchar(8) NOT NULL,
  `arch_h` varchar(8) NOT NULL,
  `struct_a` varchar(8) NOT NULL,
  `struct_b` varchar(8) NOT NULL,
  `struct_c` varchar(8) NOT NULL,
  `struct_d` varchar(8) NOT NULL,
  `struct_e` varchar(8) NOT NULL,
  `struct_f` varchar(8) NOT NULL,
  `struct_g` varchar(8) NOT NULL,
  `constr_a` varchar(8) NOT NULL,
  `constr_b` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_LNS`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_LNS` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_or_disp_a` varchar(2) NOT NULL,
  `accel_or_disp_b` varchar(2) NOT NULL,
  `accel_or_disp_c` varchar(2) NOT NULL,
  `accel_or_disp_d` varchar(2) NOT NULL,
  `accel_or_disp_e` varchar(2) NOT NULL,
  `accel_or_disp_f` varchar(2) NOT NULL,
  `accel_or_disp_g` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_LS`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_LS` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(2) NOT NULL,
  `siting_b` varchar(2) NOT NULL,
  `siting_c` varchar(2) NOT NULL,
  `soil_and_foundn_a` varchar(2) NOT NULL,
  `soil_and_foundn_b` varchar(2) NOT NULL,
  `arch_a` varchar(2) NOT NULL,
  `arch_b` varchar(2) NOT NULL,
  `arch_c` varchar(2) NOT NULL,
  `arch_d` varchar(2) NOT NULL,
  `struct_a` varchar(2) NOT NULL,
  `struct_b` varchar(2) NOT NULL,
  `struct_c` varchar(2) NOT NULL,
  `constr_a` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_ENS`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_ENS` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_ES`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_ES` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(8) NOT NULL,
  `soil_and_foundn_a` varchar(8) NOT NULL,
  `soil_and_foundn_b` varchar(8) NOT NULL,
  `arch_a` varchar(8) NOT NULL,
  `arch_b` varchar(8) NOT NULL,
  `arch_c` varchar(8) NOT NULL,
  `arch_d` varchar(8) NOT NULL,
  `arch_e` varchar(8) NOT NULL,
  `arch_f` varchar(8) NOT NULL,
  `arch_g` varchar(8) NOT NULL,
  `arch_h` varchar(8) NOT NULL,
  `struct_a` varchar(8) NOT NULL,
  `struct_b` varchar(8) NOT NULL,
  `struct_c` varchar(8) NOT NULL,
  `struct_d` varchar(8) NOT NULL,
  `struct_e` varchar(8) NOT NULL,
  `struct_f` varchar(8) NOT NULL,
  `constr_a` varchar(8) NOT NULL,
  `constr_b` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_LNS`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_LNS` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(8) NOT NULL,
  `accel_and_disp_b` varchar(8) NOT NULL,
  `accel_and_disp_c` varchar(8) NOT NULL,
  `accel_and_disp_d` varchar(8) NOT NULL,
  `accel_and_disp_e` varchar(8) NOT NULL,
  `accel_and_disp_f` varchar(8) NOT NULL,
  `lifelines_a` varchar(8) NOT NULL,
  `lifelines_b` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_LS`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_LS` (
`id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(2) NOT NULL,
  `soil_and_foundn_a` varchar(2) NOT NULL,
  `soil_and_foundn_b` varchar(2) NOT NULL,
  `arch_a` varchar(2) NOT NULL,
  `arch_b` varchar(2) NOT NULL,
  `arch_c` varchar(2) NOT NULL,
  `arch_d` varchar(2) NOT NULL,
  `struct_a` varchar(2) NOT NULL,
  `struct_b` varchar(2) NOT NULL,
  `struct_c` varchar(2) NOT NULL,
  `struct_d` varchar(2) NOT NULL,
  `constr_a` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form3_RCFrame_ENS`
--

CREATE TABLE IF NOT EXISTS `Form3_RCFrame_ENS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `accel_and_disp_f` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `lifelines_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form3_RCFrame_ES`
--

CREATE TABLE IF NOT EXISTS `Form3_RCFrame_ES` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(8) NOT NULL,
  `soil_and_foundn_a` varchar(8) NOT NULL,
  `soil_and_foundn_b` varchar(8) NOT NULL,
  `arch_a` varchar(8) NOT NULL,
  `arch_b` varchar(8) NOT NULL,
  `arch_c` varchar(8) NOT NULL,
  `arch_d` varchar(8) NOT NULL,
  `arch_e` varchar(8) NOT NULL,
  `arch_f` varchar(8) NOT NULL,
  `struct_a` varchar(8) NOT NULL,
  `struct_b` varchar(8) NOT NULL,
  `struct_c` varchar(8) NOT NULL,
  `struct_d` varchar(8) NOT NULL,
  `struct_e` varchar(8) NOT NULL,
  `struct_f` varchar(8) NOT NULL,
  `struct_g` varchar(8) NOT NULL,
  `constr_a` varchar(8) NOT NULL,
  `constr_b` varchar(8) NOT NULL,
  `constr_c` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form3_RCFrame_LNS`
--

CREATE TABLE IF NOT EXISTS `Form3_RCFrame_LNS` (
  `id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_or_disp_a` varchar(2) NOT NULL,
  `accel_or_disp_b` varchar(2) NOT NULL,
  `accel_or_disp_c` varchar(2) NOT NULL,
  `accel_or_disp_d` varchar(2) NOT NULL,
  `accel_or_disp_e` varchar(2) NOT NULL,
  `accel_or_disp_f` varchar(2) NOT NULL,
  `accel_or_disp_g` varchar(2) NOT NULL,
  `accel_or_disp_h` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form3_RCFrame_LS`
--

CREATE TABLE IF NOT EXISTS `Form3_RCFrame_LS` (
  `id` int(6) unsigned NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(2) NOT NULL,
  `siting_b` varchar(2) NOT NULL,
  `siting_c` varchar(2) NOT NULL,
  `soil_and_foundn_a` varchar(2) NOT NULL,
  `soil_and_foundn_b` varchar(2) NOT NULL,
  `arch_a` varchar(2) NOT NULL,
  `arch_b` varchar(2) NOT NULL,
  `struct_a` varchar(2) NOT NULL,
  `struct_b` varchar(2) NOT NULL,
  `struct_c` varchar(2) NOT NULL,
  `constr_a` varchar(2) NOT NULL,
  `constr_b` varchar(2) NOT NULL,
  `constr_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form4_Ikara_ENS`
--

CREATE TABLE IF NOT EXISTS `Form4_Ikara_ENS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `lifelines_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form4_Ikara_ES`
--

CREATE TABLE IF NOT EXISTS `Form4_Ikara_ES` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(8) NOT NULL,
  `soil_and_foundn_a` varchar(8) NOT NULL,
  `soil_and_foundn_b` varchar(8) NOT NULL,
  `arch_a` varchar(8) NOT NULL,
  `arch_b` varchar(8) NOT NULL,
  `arch_c` varchar(8) NOT NULL,
  `arch_d` varchar(8) NOT NULL,
  `arch_e` varchar(8) NOT NULL,
  `arch_f` varchar(8) NOT NULL,
  `struct_a` varchar(8) NOT NULL,
  `struct_b` varchar(8) NOT NULL,
  `struct_c` varchar(8) NOT NULL,
  `struct_d` varchar(8) NOT NULL,
  `struct_e` varchar(8) NOT NULL,
  `constr_a` varchar(8) NOT NULL,
  `constr_b` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form4_Ikara_LNS`
--

CREATE TABLE IF NOT EXISTS `Form4_Ikara_LNS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `accel_and_disp_f` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `lifelines_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form4_Ikara_LS`
--

CREATE TABLE IF NOT EXISTS `Form4_Ikara_LS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(2) NOT NULL,
  `siting_b` varchar(2) NOT NULL,
  `siting_c` varchar(2) NOT NULL,
  `siting_d` varchar(2) NOT NULL,
  `siting_e` varchar(2) NOT NULL,
  `soil_and_foundn_a` varchar(2) NOT NULL,
  `soil_and_foundn_b` varchar(2) NOT NULL,
  `soil_and_foundn_c` varchar(2) NOT NULL,
  `soil_and_foundn_d` varchar(2) NOT NULL,
  `arch_a` varchar(2) NOT NULL,
  `arch_b` varchar(2) NOT NULL,
  `struct _a` varchar(2) NOT NULL,
  `struct _b` varchar(2) NOT NULL,
  `struct _c` varchar(2) NOT NULL,
  `struct _d` varchar(2) NOT NULL,
  `struct _e` varchar(2) NOT NULL,
  `constr_a` varchar(2) NOT NULL,
  `constr_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form6_Confinedmasonry_ENS`
--

CREATE TABLE IF NOT EXISTS `Form6_Confinedmasonry_ENS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `lifelines_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form6_Confinedmasonry_ES`
--

CREATE TABLE IF NOT EXISTS `Form6_Confinedmasonry_ES` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(8) NOT NULL,
  `soil_and_foundn_a` varchar(8) NOT NULL,
  `soil_and_foundn_b` varchar(8) NOT NULL,
  `arch_a` varchar(8) NOT NULL,
  `arch_b` varchar(8) NOT NULL,
  `arch_c` varchar(8) NOT NULL,
  `arch_d` varchar(8) NOT NULL,
  `arch_e` varchar(8) NOT NULL,
  `arch_f` varchar(8) NOT NULL,
  `arch_g` varchar(8) NOT NULL,
  `struct_a` varchar(8) NOT NULL,
  `struct_b` varchar(8) NOT NULL,
  `struct_c` varchar(8) NOT NULL,
  `struct_d` varchar(8) NOT NULL,
  `struct_e` varchar(8) NOT NULL,
  `struct_f` varchar(8) NOT NULL,
  `constr_a` varchar(8) NOT NULL,
  `constr_b` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form6_Confinedmasonry_LNS`
--

CREATE TABLE IF NOT EXISTS `Form6_Confinedmasonry_LNS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `lifelines_c` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form6_Confinedmasonry_LS`
--

CREATE TABLE IF NOT EXISTS `Form6_Confinedmasonry_LS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(2) NOT NULL,
  `siting_b` varchar(2) NOT NULL,
  `soil_a` varchar(2) NOT NULL,
  `soil_b` varchar(2) NOT NULL,
  `soil_c` varchar(2) NOT NULL,
  `arch_a` varchar(2) NOT NULL,
  `mat_a` varchar(2) NOT NULL,
  `struct_a` varchar(2) NOT NULL,
  `struct_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form7_Burntclaybrick_ENS`
--

CREATE TABLE IF NOT EXISTS `Form7_Burntclaybrick_ENS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form7_Burntclaybrick_ES`
--

CREATE TABLE IF NOT EXISTS `Form7_Burntclaybrick_ES` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(8) NOT NULL,
  `soil_and_foundn_a` varchar(8) NOT NULL,
  `soil_and_foundn_b` varchar(8) NOT NULL,
  `arch_a` varchar(8) NOT NULL,
  `arch_b` varchar(8) NOT NULL,
  `arch_c` varchar(8) NOT NULL,
  `arch_d` varchar(8) NOT NULL,
  `arch_e` varchar(8) NOT NULL,
  `arch_f` varchar(8) NOT NULL,
  `arch_g` varchar(8) NOT NULL,
  `arch_h` varchar(8) NOT NULL,
  `struct_a` varchar(8) NOT NULL,
  `struct_b` varchar(8) NOT NULL,
  `struct_c` varchar(8) NOT NULL,
  `struct_d` varchar(8) NOT NULL,
  `struct_e` varchar(8) NOT NULL,
  `struct_f` varchar(8) NOT NULL,
  `struct_g` varchar(8) NOT NULL,
  `constr_a` varchar(8) NOT NULL,
  `constr_b` varchar(8) NOT NULL,
  `constr_c` varchar(8) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form7_Burntclaybrick_LNS`
--

CREATE TABLE IF NOT EXISTS `Form7_Burntclaybrick_LNS` (
  `id` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `accel_and_disp_f` varchar(2) NOT NULL,
  `accel_and_disp_g` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Form7_Burntclaybrick_LS`
--

CREATE TABLE IF NOT EXISTS `Form7_Burntclaybrick_LS` (
  `int` int(6) NOT NULL,
  `lat_long` varchar(10) NOT NULL,
  `siting_a` varchar(2) NOT NULL,
  `siting_b` varchar(2) NOT NULL,
  `siting_c` varchar(2) NOT NULL,
  `soil_and_foundn_a` varchar(2) NOT NULL,
  `soil_and_foundn_b` varchar(2) NOT NULL,
  `arch_a` varchar(2) NOT NULL,
  `arch_b` varchar(2) NOT NULL,
  `arch_c` varchar(2) NOT NULL,
  `arch_d` varchar(2) NOT NULL,
  `struct_a` varchar(2) NOT NULL,
  `struct_b` varchar(2) NOT NULL,
  `struct_c` varchar(2) NOT NULL,
  `struct_d` varchar(2) NOT NULL,
  `constr_a` varchar(2) NOT NULL,
  `constr_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mudhouse`
--

CREATE TABLE IF NOT EXISTS `mudhouse` (
`id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Form1_Stone_ENS`
--
ALTER TABLE `Form1_Stone_ENS`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form1_Stone_ES`
--
ALTER TABLE `Form1_Stone_ES`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form1_Stone_LNS`
--
ALTER TABLE `Form1_Stone_LNS`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form1_Stone_LS`
--
ALTER TABLE `Form1_Stone_LS`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form2_Mudhouse_ENS`
--
ALTER TABLE `Form2_Mudhouse_ENS`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form2_Mudhouse_ES`
--
ALTER TABLE `Form2_Mudhouse_ES`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form2_Mudhouse_LNS`
--
ALTER TABLE `Form2_Mudhouse_LNS`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Form2_Mudhouse_LS`
--
ALTER TABLE `Form2_Mudhouse_LS`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mudhouse`
--
ALTER TABLE `mudhouse`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Form1_Stone_ENS`
--
ALTER TABLE `Form1_Stone_ENS`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form1_Stone_ES`
--
ALTER TABLE `Form1_Stone_ES`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form1_Stone_LNS`
--
ALTER TABLE `Form1_Stone_LNS`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form1_Stone_LS`
--
ALTER TABLE `Form1_Stone_LS`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form2_Mudhouse_ENS`
--
ALTER TABLE `Form2_Mudhouse_ENS`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form2_Mudhouse_ES`
--
ALTER TABLE `Form2_Mudhouse_ES`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form2_Mudhouse_LNS`
--
ALTER TABLE `Form2_Mudhouse_LNS`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Form2_Mudhouse_LS`
--
ALTER TABLE `Form2_Mudhouse_LS`
MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mudhouse`
--
ALTER TABLE `mudhouse`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
