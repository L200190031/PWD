-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 03:14 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `Noktp` int(22) NOT NULL,
  `Nama` varchar(55) NOT NULL,
  `Alamat` varchar(55) NOT NULL,
  `Jenis_kelamin` varchar(55) NOT NULL,
  `Tempat_lahir` varchar(55) NOT NULL,
  `Tanggal_lahir` varchar(55) NOT NULL,
  `Status_wn` varchar(55) NOT NULL,
  `Pulau` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`Noktp`, `Nama`, `Alamat`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Status_wn`, `Pulau`) VALUES
(222, 'Dilan', 'Bandung', 'Laki-Laki', 'Surakarta', '2 Mei 1999', 'WNI', 'Jawa'),
(333, 'Daffa', 'Bandung', 'Laki-Laki', 'Surakarta', '3 April 1994', 'WNI', 'Jawa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`Noktp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
