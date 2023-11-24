-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 05:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forum casis`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(64) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nama`, `email`, `pesan`) VALUES
(22, 'w', 'w', ''),
(23, 'w', 'w', 'w'),
(24, 'w', 'w', 'w'),
(25, 'Yordan', 'agung123@gmail.com', 'kren bangetts'),
(26, 'Sersan', 'yyagagv65@rxcv.club', 'kren bangetts'),
(27, 'Nazwa', 'nazwa@gmail.com', 'hai'),
(28, 'Ian', 'ianaina@gmail.com', 'keren banget dah'),
(29, 'Nafisah Nailal Nadine', 'nnnnn@gmail.com', 'hai'),
(30, 'Bilqis', 'bilqis@gmail.com', 'uwaww');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(64) NOT NULL,
  `nm_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nm_email`, `password`) VALUES
(1, 'nazwa@gmail.com', 'nazwa123'),
(2, 'rara2k7@gmail.com', 'rajwa1234567'),
(3, 'alizefansyukur@gmail.com', 'ali2802'),
(4, 'rahmanafif030@gmail.com', '301206'),
(5, 'adhitya.hamid@gmail.com', 'apaajaboleh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_daftar` int(11) NOT NULL,
  `NIS` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `ttl` varchar(225) NOT NULL,
  `jk` varchar(16) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_daftar`, `NIS`, `nama`, `ttl`, `jk`, `kelas`, `email`, `nomor`) VALUES
(222310100, '18/11/2023', 'Rasya', '', 'Laki-laki', 'X', 'rasya@gmail.com', 813456783),
(222310101, '12/12/1209', '', '', '', '2', 'nazwa@gmail.com', 0),
(222310102, '20/11/2023', '', '', 'Perempuan', 'XI', 'nana@gmail.com', 0),
(222310103, '12/1/2923', '', '', 'Laki-laki', 'XI', 'harihari@gmail.com', 7912),
(222310104, '12/1/2923', '', '', 'Perempuan', 'XI', 'yyagagv65@rxcv.club', 821134567),
(222310105, '12/12/1209', 'ojan', '', 'Laki-laki', 'XI', 'nazwahalifahrahmadhani@gmail.com', 821134567),
(222310106, '31/01/2023', 'rara', '', 'Laki-laki', 'XI', 'rara2k7@gmail.com', 2147483647),
(222310107, '31/01/2023', 'ojan', '', 'Laki-laki', 'X', 'nazwa@gmail.com', 821134567),
(222310108, '20/11/2023', 'Nazwa AR', '', 'Perempuan', 'XI', 'nazwa@gmail.com', 2147483647),
(222310109, '20 November 2023', 'Nadine', '', 'Perempuan', 'XI', 'nnnnn@gmail.com', 812562162),
(222310110, '12/1/2923', 'rara', '', 'Perempuan', 'XI', 'nazwa@gmail.com', 2147483647),
(222310111, '21/11/2023', 'Nazwa Rahmayani', '', 'Perempuan', 'XI', '', 2147483647),
(222310112, '12/1/2923', 'Nazwa AR', '', 'Laki-laki', 'X', '', 7912),
(222310113, '12/1/2923', 'Nazwa AR', '', 'Laki-laki', 'X', '', 7912),
(222310114, '12/1/2923', 'Nazwa AR', '', 'Laki-laki', 'X', '', 7912),
(222310115, '12/1/2923', 'Nazwa AR', '', 'Laki-laki', 'X', '', 7912),
(222310116, '12/1/2923', 'Nazwa AR', '', 'Laki-laki', 'X', '', 7912),
(222310117, '20 November 2023', 'Bilqis PJ', '', 'Perempuan', 'XI RPL 3', '', 888723456),
(222310123, '22-nov-2023', 'adhitya', '', 'Laki-laki', '12', '', 2147483647),
(222310124, '222310137', 'Nazwa AR', '', 'Perempuan', 'XI', '', 2147483647),
(222310128, '222310138', 'Nadine', 'Bekasi, 15 Januari 2007', 'Perempuan', 'XI DKV', '', 2147483647),
(222310131, '222310173', 'Rajwa Naima', '10 Oktober 2007', 'Perempuan', 'XI RPL 3', '', 2147483647),
(222310132, '22310157', 'Jamila', '14 November 2006', 'Perempuan', 'XI rpl 4 ', '', 2147483647),
(222310133, '22310157', 'Jamila', '14 November 2006', 'Perempuan', 'XI rpl 4 ', '', 2147483647),
(222310134, '112345', 'ojan', 'Minang, 20 Juli 2000', 'Laki-laki', 'ZI DIMASDM', '', 7912),
(222310135, '22310137', 'Kaka', 'Minang, 20 Juli 2000', 'Perempuan', 'XI rpl 4 ', '', 2147483647),
(222310136, '22310157', 'Nadine', '14 November 2006', 'Perempuan', 'XI RPL 3', '', 2147483647),
(222310137, '222310137', 'Nazwa alifa R', '18 September 2006', 'Perempuan', 'XI RPL 3', '', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222310138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
