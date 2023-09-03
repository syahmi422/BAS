-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 01:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(10) NOT NULL,
  `Kata_laluan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `nama` varchar(100) NOT NULL,
  `no_kp` varchar(12) NOT NULL,
  `no_tel` varchar(13) NOT NULL,
  `emel` varchar(35) NOT NULL,
  `program` varchar(25) NOT NULL,
  `nama_bapa` varchar(100) NOT NULL,
  `notel_bapa` varchar(13) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `notel_ibu` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `nama` varchar(30) NOT NULL,
  `no_kp` varchar(13) NOT NULL,
  `no_tel` varchar(13) NOT NULL,
  `emel` varchar(40) NOT NULL,
  `program` varchar(40) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `no_tel_ibu` varchar(30) NOT NULL,
  `nama_bapa` text NOT NULL,
  `no_tel_bapa` varchar(20) NOT NULL,
  `pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`no_kp`),
  ADD UNIQUE KEY `nama` (`nama`,`no_kp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
