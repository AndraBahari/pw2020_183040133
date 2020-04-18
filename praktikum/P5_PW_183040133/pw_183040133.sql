-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2020 pada 22.47
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_183040133`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `ID` int(11) NOT NULL,
  `Cover` char(54) NOT NULL,
  `Judul Buku` char(65) NOT NULL,
  `Penulis` char(68) NOT NULL,
  `Penerbit` char(68) NOT NULL,
  `Tebal Buku` char(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`ID`, `Cover`, `Judul Buku`, `Penulis`, `Penerbit`, `Tebal Buku`) VALUES
(1, 'bumimanusia.jpg', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Lentera Dipantara', '533 halaman'),
(2, 'anaksemuabangsa.jpg', 'Anak Semua Bangsa', 'Pramoedya Ananta Toer', 'Lentera Dipantara', '540 halaman'),
(3, 'ronggengdukuhparuk.jpg', 'Ronggeng Dukuh Paruk', 'Ahmad Tohari', 'Gramedia Pustaka Utama', '408 halaman'),
(4, 'laskarpelangi.jpg', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '533 halaman'),
(5, 'negeri5menara.jpg', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', '423 halaman'),
(6, '5cm.jpg', '5 Cm', 'Dhonny Dhirgantoro', 'PT. Grasindo, Yogyakarta', '381 halaman'),
(7, 'pudarnyapesona.jpg', 'Pudarnya Pesona Cleopatra', 'Habiburrahman El Shirazy', 'Republika, Jakarta', '111 halaman'),
(8, 'koalakumal.jpg', 'Koala Kumal', 'Raditya Dika', 'Gagas Media', '250 halaman'),
(9, 'perahukertas.jpg', 'Perahu Kertas', 'Dewi Lestari (Dee)', 'Treudee Pustaka Sejati dan Bentang Pustaka', '444 halaman'),
(10, 'godex.jpg', 'God Explained in a Taxi Ride', 'Paul Arden', 'Perigee', '123 halaman');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
