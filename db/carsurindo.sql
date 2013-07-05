-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2013 at 10:11 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carsurindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `company` (`company`),
  UNIQUE KEY `npwp` (`npwp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `company`, `address`, `phone`, `email`, `contact`, `npwp`, `create_at`, `update_at`) VALUES
(1, 'ACE Chain', 'JL. K.L. YOS SUDARSO NO. 15 KM. 6 MEDAN', '6282364810677', 'samson@smart.co.id', 'Sams', NULL, '2013-04-22 04:47:41', '0000-00-00 00:00:00'),
(2, 'Antar Mitra Sembada', 'Jl. Pukuk No 5 Medan', '0617756467', 'antar@mitrasembada.com', 'Bpk. Sadeli', '', '2013-06-27 04:11:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coa`
--

CREATE TABLE IF NOT EXISTS `tbl_coa` (
  `id_coa` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `coa_code` int(5) unsigned NOT NULL,
  `coa_name` char(40) NOT NULL,
  `parent` int(5) unsigned DEFAULT '0',
  PRIMARY KEY (`id_coa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_coa`
--

INSERT INTO `tbl_coa` (`id_coa`, `coa_code`, `coa_name`, `parent`) VALUES
(1, 1, 'AKTIVA', 0),
(2, 11, 'Aktiva Lancar', 1),
(3, 12, 'Aktiva Tetap', 1),
(4, 13, 'Aktiva Lainnya', 1),
(5, 11101, 'Kas', 11),
(6, 11201, 'Bank BNI', 11),
(7, 11202, 'Bank Mandiri', 11),
(8, 11301, 'Piutang Survey', 11),
(9, 11302, 'Piutang Fumigasi', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scope`
--

CREATE TABLE IF NOT EXISTS `tbl_scope` (
  `id_scope` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id_scope`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_scope`
--

INSERT INTO `tbl_scope` (`id_scope`, `scope`, `detail`) VALUES
(1, 'Marine and Cargo Surveyor', 'Melakukan survey cargo di pelabuhan'),
(2, 'Analytic and Testing Laboratory', 'Melakukan test dan analisis terhadap barang.'),
(3, 'Fumigation Provider', 'Melakukan pengasapan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `code` varchar(4) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `company` (`code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `name`, `code`, `address`, `phone`, `email`, `department`, `create_at`, `update_at`) VALUES
(1, 'Muhammad Fadli Gunawan', 'MFG', 'Jl. Santika Fog\r\nMedan Jaya', '0812655068534', 'mhg@carsurindo.co.id', 'Marketing', '2013-04-22 04:40:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wo`
--

CREATE TABLE IF NOT EXISTS `tbl_wo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `client_id` int(10) NOT NULL,
  `letter_no` varchar(50) NOT NULL,
  `vessel` varchar(100) NOT NULL,
  `object` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `attending` date NOT NULL,
  `loading` varchar(255) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_wo`
--

INSERT INTO `tbl_wo` (`id`, `client_id`, `letter_no`, `vessel`, `object`, `description`, `attending`, `loading`, `destination`, `qty`, `status`, `create_at`) VALUES
(1, 1, '021/BEST/2013', 'MT. ROYAL NATURA', 'VOY. 503 201301', '', '2013-02-23', 'Belawan. Indonesia', 'Djendjen (Algeria)', 2100, 0, '2013-06-27 06:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_woFile`
--

CREATE TABLE IF NOT EXISTS `tbl_woFile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `wo_id` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
