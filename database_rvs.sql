-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2015 at 12:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_ENS`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_ENS` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_ES`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_ES` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_LNS`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_LNS` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form1_Stone_LS`
--

CREATE TABLE IF NOT EXISTS `Form1_Stone_LS` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_ENS`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_ENS` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `lat_long` varchar(10) NOT NULL,
  `accel_and_disp_a` varchar(2) NOT NULL,
  `accel_and_disp_b` varchar(2) NOT NULL,
  `accel_and_disp_c` varchar(2) NOT NULL,
  `accel_and_disp_d` varchar(2) NOT NULL,
  `accel_and_disp_e` varchar(2) NOT NULL,
  `lifelines_a` varchar(2) NOT NULL,
  `lifelines_b` varchar(2) NOT NULL,
  `score` int(6) NOT NULL,
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_ES`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_ES` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_LNS`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_LNS` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Form2_Mudhouse_LS`
--

CREATE TABLE IF NOT EXISTS `Form2_Mudhouse_LS` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
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
  `zone` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
