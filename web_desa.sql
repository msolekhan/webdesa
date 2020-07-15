-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 12:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `berita_desa`
--

CREATE TABLE `berita_desa` (
  `id_berdes` int(255) NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_desa`
--

INSERT INTO `berita_desa` (`id_berdes`, `foto`, `tanggal`, `judul`, `deskripsi`) VALUES
(3, '2.png', '2020-06-29', 'dscscscscsc', 'sdsdsdsdsdsd'),
(4, 'csscrip.png', '2020-06-29', '0000', 'yyy');

-- --------------------------------------------------------

--
-- Table structure for table `berita_nasional`
--

CREATE TABLE `berita_nasional` (
  `id_bernas` int(11) NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_nasional`
--

INSERT INTO `berita_nasional` (`id_bernas`, `foto`, `tanggal`, `judul`, `deskripsi`) VALUES
(1, 'c5b644d4-7bd0-4021-b3d1-085021fa1b97.jpg', '2020-06-30', 'sss', 'asdasada'),
(3, '08-57-26-Vls3JugibrWk7C0lJy2c93I2q4yOFjnxuOBEpzmYamU1LnZJofIZgfU15Ck1vlCc7J10gSMk1l_uRDxx-kfd7cvH5pVqqHWFdFUAo5BWjtK3ZWTMc43J9yh7tnWKQxVG=w300-h300-nc.jpg', '2020-06-30', 'dcdcd', 'dcddffd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita_desa`
--
ALTER TABLE `berita_desa`
  ADD PRIMARY KEY (`id_berdes`);

--
-- Indexes for table `berita_nasional`
--
ALTER TABLE `berita_nasional`
  ADD PRIMARY KEY (`id_bernas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita_desa`
--
ALTER TABLE `berita_desa`
  MODIFY `id_berdes` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita_nasional`
--
ALTER TABLE `berita_nasional`
  MODIFY `id_bernas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
