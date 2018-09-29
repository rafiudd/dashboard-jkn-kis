-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2018 at 02:14 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplikasi_jkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `no_kk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nm_peserta` text NOT NULL,
  `nm_ibu` text NOT NULL,
  `alamat` text NOT NULL,
  `faskes` varchar(25) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`no_kk`, `nik`, `nm_peserta`, `nm_ibu`, `alamat`, `faskes`, `kelas`, `no_hp`) VALUES
('3208761098761235', '3208976539870001', 'Erina Hardwiyuliani', 'Eni Periyanti', 'Jalaksana', 'ASEP SETIANA HERMANA, H, ', '1  (Rp.80.000)', '089696694039'),
('3276543219860004', '3254987654319801', 'Puji Pauziah', 'Imas Masrinah', 'Cirendang', 'DR DESY HERLINDASARI', '1  (Rp.80.000)', '089516838580'),
('3254769876540002', '3265876342647006', 'Velly Lestary', 'Neneng Nurhayati', 'Kasturi', 'ASEP DEDENG WAHYUDIN, DR', '3 (Rp.25.500)', '089688638091'),
('3254769864623403', '3268712659806240', 'Anggita Meylani', 'Ari Hepyanti', 'Ancaran', 'SUSI LUSIYANTI, DR', '2 (Rp.51.000)', '089519601853');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `Password`) VALUES
('erina', '1234'),
('velly', '5678'),
('puji', '9012');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
