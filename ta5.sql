-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:32 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_modul5`
--

-- --------------------------------------------------------

--
-- Table structure for table `ta5`
--

CREATE TABLE `ta5` (
  `NIM` bigint(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Program_Studi` text NOT NULL,
  `Fakultas` text NOT NULL,
  `Komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ta5`
--

INSERT INTO `ta5` (`NIM`, `Nama`, `Jenis_Kelamin`, `Tanggal_Lahir`, `Email`, `Program_Studi`, `Fakultas`, `Komentar`) VALUES
(6701174074, 'Muhamad Yusuf Ramadhan', 'Laki-Laki', '1998-11-21', 'dhan199812@gmail.com', 'Program Studi Manajemen Informatika (D3)', 'Fakultas Ilmu Terapan', 'asd asd asd asd asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ta5`
--
ALTER TABLE `ta5`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
