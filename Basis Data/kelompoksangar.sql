-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 12:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompoksangar`
--

-- --------------------------------------------------------

--
-- Table structure for table `aku`
--

CREATE TABLE `aku` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `level` varchar(8) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `aku`
--

INSERT INTO `aku` (`id`, `email`, `name`, `password`, `level`, `date_created`) VALUES
(1, 'Richie@tugas.pbd', 'Muhammad Richie Assariy', '$2y$10$.O203B.cUr6X0yGxQ0ZXMeG1FKvwgYnmENe0a4Cz1UQejPiI/X20C', 'admin', '2020-04-12'),
(2, 'Vla@tugas.pbd', 'Vla Cusdi SIbarani', '$2y$10$QG40L49.57l4K8qaX8O/a.1zt/TEoqC25U1yYNvBgsMl/PCAF8Twi', 'operator', '2020-04-12'),
(3, 'Fahmi@tugas.pbd', 'Fahmi Aziz Trianto', '$2y$10$e7DsL6iBr4zozXZM9jK25e7XOxa.f2uNAiRz/VY9rqFSWJhRnk8rO', 'user', '2020-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `kamu`
--

CREATE TABLE `kamu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `country` varchar(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `date_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kamu`
--

INSERT INTO `kamu` (`id`, `name`, `image`, `phone`, `address`, `city`, `country`, `note`, `date_created`) VALUES
(1, 'Muhammad Richie Assariy', 'default.jpg', '30082', 'Jalan. Soedharto Kampus UNDIP', 'Yogyakarta', 'Indonesia', 'Superadmin.', '2020-04-12'),
(2, 'Vla Cusdi SIbarani', 'default.jpg', '30090', 'Jalan . Mulawarman Timur Dalam', 'Semarang', 'Indonesia', 'Saya operator di sini!', '2020-04-12'),
(3, 'Fahmi Aziz Trianto', 'default.jpg', '30048', 'Jalan. Tembalang Selatan', 'Semarang', 'Indonesia', 'Saya pengguna biasa.', '2020-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `kode_alternatif` varchar(25) NOT NULL,
  `nama_alternatif` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`kode_alternatif`, `nama_alternatif`) VALUES
('A01', 'New England'),
('A02', 'Middle Atlantic'),
('A03', 'East North Central'),
('A04', 'West North Central'),
('A05', 'South Atlantic'),
('A06', 'East South Central'),
('A07', 'West South Central'),
('A08', 'Mountain'),
('A09', 'Pacific');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `kode_kriteria` varchar(16) NOT NULL,
  `nama_kriteria` varchar(20) DEFAULT NULL,
  `bobot` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`kode_kriteria`, `nama_kriteria`, `bobot`) VALUES
('C01', 'Biru Tua', 15),
('C02', 'Biru Muda', 20),
('C03', 'Merah Tua', 10),
('C04', 'Merah Muda', 15),
('C05', 'Kuning Muda', 20),
('C06', 'Kuning Tua', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parameter`
--

CREATE TABLE `tbl_parameter` (
  `kode_parameter` int(11) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(16) DEFAULT NULL,
  `nama_parameter` varchar(30) DEFAULT NULL,
  `nilai_parameter` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_parameter`
--

INSERT INTO `tbl_parameter` (`kode_parameter`, `kode_kriteria`, `nama_parameter`, `nilai_parameter`) VALUES
(1, 'C01', '0-8%', '0'),
(2, 'C01', '8-15%', '1'),
(3, 'C01', '15-25%', '2'),
(4, 'C01', '25-40%', '3'),
(5, 'C01', '>40%', '4'),
(6, 'C02', 'Hutan', '0'),
(7, 'C02', 'Sawah/Ladang/Tambak', '1'),
(8, 'C02', 'Kebun/Lapangan', '2'),
(9, 'C02', 'Pemukiman', '3'),
(10, 'C02', 'Industri', '4'),
(11, 'C03', 'Sangat Rendah', '0'),
(12, 'C03', 'Rendah', '1'),
(13, 'C03', 'Sedang', '2'),
(14, 'C03', 'Tinggi', '3'),
(15, 'C03', 'Sangat Tinggi', '4'),
(31, 'C04', '>4000', '0'),
(32, 'C04', '2750-4000', '1'),
(33, 'C04', '1500-2750', '2'),
(34, 'C05', '>10 l/d/km2', '0'),
(35, 'C05', '2.5 - 10 l/d/km2', '1'),
(36, 'C05', '<2.5 l/d/km2', '2'),
(37, 'C05', 'Merata Asin', '3'),
(38, 'C05', 'Krisis Air', '4'),
(39, 'C06', 'Gromosol', '0'),
(40, 'C06', 'Latosol', '1'),
(41, 'C06', 'Regosol', '2'),
(42, 'C06', 'Alluvial', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relasi`
--

CREATE TABLE `tbl_relasi` (
  `ID` int(11) NOT NULL,
  `kode_alternatif` varchar(25) DEFAULT NULL,
  `kode_kriteria` varchar(16) DEFAULT NULL,
  `nilai` double DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_relasi`
--

INSERT INTO `tbl_relasi` (`ID`, `kode_alternatif`, `kode_kriteria`, `nilai`) VALUES
(1, 'A01', 'C01', 1),
(2, 'A01', 'C02', 4),
(3, 'A01', 'C03', 1),
(7, 'A02', 'C01', 1),
(8, 'A02', 'C02', 1),
(9, 'A02', 'C03', 0),
(13, 'A03', 'C01', 0),
(14, 'A03', 'C02', 2),
(15, 'A03', 'C03', 0),
(107, 'A09', 'C05', 1),
(19, 'A04', 'C01', 0),
(20, 'A04', 'C02', 4),
(21, 'A04', 'C03', 0),
(105, 'A07', 'C05', 2),
(106, 'A08', 'C05', 1),
(25, 'A05', 'C01', 0),
(26, 'A05', 'C02', 3),
(27, 'A05', 'C03', 0),
(103, 'A05', 'C05', 2),
(104, 'A06', 'C05', 0),
(31, 'A06', 'C01', 0),
(32, 'A06', 'C02', 3),
(33, 'A06', 'C03', 0),
(101, 'A03', 'C05', 2),
(102, 'A04', 'C05', 2),
(37, 'A07', 'C01', 0),
(38, 'A07', 'C02', 3),
(39, 'A07', 'C03', 0),
(99, 'A01', 'C05', 1),
(100, 'A02', 'C05', 4),
(43, 'A08', 'C01', 1),
(44, 'A08', 'C02', 0),
(45, 'A08', 'C03', 1),
(97, 'A13', 'C04', 0),
(98, 'A14', 'C04', 1),
(49, 'A09', 'C01', 2),
(50, 'A09', 'C02', 0),
(51, 'A09', 'C03', 2),
(95, 'A11', 'C04', 0),
(96, 'A12', 'C04', 1),
(55, 'A10', 'C01', 1),
(56, 'A10', 'C02', 3),
(57, 'A10', 'C03', 0),
(93, 'A09', 'C04', 1),
(94, 'A10', 'C04', 1),
(61, 'A11', 'C01', 1),
(62, 'A11', 'C02', 3),
(63, 'A11', 'C03', 2),
(91, 'A07', 'C04', 2),
(92, 'A08', 'C04', 1),
(67, 'A12', 'C01', 3),
(68, 'A12', 'C02', 2),
(69, 'A12', 'C03', 2),
(89, 'A05', 'C04', 2),
(90, 'A06', 'C04', 2),
(73, 'A13', 'C01', 4),
(74, 'A13', 'C02', 0),
(75, 'A13', 'C03', 2),
(87, 'A03', 'C04', 2),
(88, 'A04', 'C04', 2),
(79, 'A14', 'C01', 1),
(80, 'A14', 'C02', 0),
(81, 'A14', 'C03', 2),
(85, 'A01', 'C04', 2),
(86, 'A02', 'C04', 2),
(113, 'A01', 'C06', 0),
(114, 'A02', 'C06', 3),
(115, 'A03', 'C06', 3),
(116, 'A04', 'C06', 3),
(117, 'A05', 'C06', 3),
(118, 'A06', 'C06', 3),
(119, 'A07', 'C06', 3),
(120, 'A08', 'C06', 1),
(121, 'A09', 'C06', 1),
(122, 'A10', 'C06', 2),
(123, 'A11', 'C06', 2),
(124, 'A12', 'C06', 0),
(125, 'A13', 'C06', 2),
(126, 'A14', 'C06', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aku`
--
ALTER TABLE `aku`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kamu`
--
ALTER TABLE `kamu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`kode_alternatif`) USING BTREE;

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`kode_kriteria`) USING BTREE;

--
-- Indexes for table `tbl_parameter`
--
ALTER TABLE `tbl_parameter`
  ADD PRIMARY KEY (`kode_parameter`) USING BTREE;

--
-- Indexes for table `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aku`
--
ALTER TABLE `aku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kamu`
--
ALTER TABLE `kamu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_parameter`
--
ALTER TABLE `tbl_parameter`
  MODIFY `kode_parameter` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_relasi`
--
ALTER TABLE `tbl_relasi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=643;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamu`
--
ALTER TABLE `kamu`
  ADD CONSTRAINT `kamu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `aku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
