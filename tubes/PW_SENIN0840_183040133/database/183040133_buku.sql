-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 04, 2020 at 03:36 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `183040133_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `pengarang` varchar(32) NOT NULL,
  `penerbit` int(11) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `gambar` varchar(32) NOT NULL,
  `harga` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun`, `gambar`, `harga`) VALUES
(1, 'The Hollow Needle', 'Maurice Leblanc', 1, 2012, 'thn.jpg', '50000'),
(3, 'Dilan', 'Pidi Baiq', 2, 2015, 'd.jpg', '70000'),
(4, 'Wisnu', 'Donny Dhirgantoro', 4, 2005, '5.jpg', '55000'),
(5, 'Negeri 5 Menara', 'Ahmad Fuadi', 5, 2009, 'n5.jpg', '120000'),
(6, 'Perahu Kertas', 'Dewi Lestari', 6, 2009, 'pk.jpg', '67000'),
(9, 'Marmut Merah Jambu', 'Raditya Dika', 1, 2010, 'mmj.jpg', '86000'),
(11, 'Koala Kumal', 'Raditya Dika', 3, 2015, 'kk.jpg', '75000');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id` int(11) NOT NULL,
  `penerbit` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id`, `penerbit`) VALUES
(1, 'Bukune'),
(2, 'Mizan Grup'),
(3, 'Gagas Media'),
(4, 'Grasido'),
(5, 'Gramedia'),
(6, 'Bentang Pustaka'),
(7, 'Truedee Books');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(6, 'andra', '$2y$10$s2.rJ0c5rHOhHmSDxo3G4OXQh4dwkunWZdP/mcp9wol4vasf2zY4.'),
(7, 'rivia', '$2y$10$9aDr.f4s0PvRE/.Fb5zhJuuhYSETJhY.40XdhwKAWUTBY1tr49StW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `penerbit` (`penerbit`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `penerbit` FOREIGN KEY (`penerbit`) REFERENCES `penerbit` (`id`);