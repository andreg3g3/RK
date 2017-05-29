-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Mei 2017 pada 16.18
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_only`
--

CREATE TABLE `admin_only` (
  `ID_Admin` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_user`
--

CREATE TABLE `admin_user` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin_user`
--

INSERT INTO `admin_user` (`ID_User`, `Username`, `Password`) VALUES
(1, 'Admin', 'e3afed0047b08059d0fada10f400c1e5'),
(2, 'User', '8f9bfe9d1345237cb3b2b205864da075');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `ID_Event` int(11) NOT NULL,
  `Nama_Event` varchar(50) NOT NULL,
  `Tanggal_Event` date NOT NULL,
  `Waktu` time NOT NULL,
  `Detail` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`ID_Event`, `Nama_Event`, `Tanggal_Event`, `Waktu`, `Detail`) VALUES
(1, 'Buka Puasa', '2017-05-30', '18:00:00', 'Saatnya berbuka Puasa '),
(2, 'Sahur', '2017-05-30', '03:10:00', 'Makan sebelum puasa'),
(3, 'EAS RK', '2017-05-30', '12:00:00', 'Selamat Mengerjakan!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notify_user_event`
--

CREATE TABLE `notify_user_event` (
  `ID_Notify` int(11) NOT NULL,
  `User` int(11) NOT NULL,
  `Event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `notify_user_event`
--

INSERT INTO `notify_user_event` (`ID_Notify`, `User`, `Event`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_only`
--
ALTER TABLE `admin_only`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`ID_Event`);

--
-- Indexes for table `notify_user_event`
--
ALTER TABLE `notify_user_event`
  ADD PRIMARY KEY (`ID_Notify`),
  ADD KEY `fk_foreign_user` (`User`),
  ADD KEY `fk_foreign_event` (`Event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_only`
--
ALTER TABLE `admin_only`
  MODIFY `ID_Admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `ID_Event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notify_user_event`
--
ALTER TABLE `notify_user_event`
  MODIFY `ID_Notify` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `notify_user_event`
--
ALTER TABLE `notify_user_event`
  ADD CONSTRAINT `fk_foreign_event` FOREIGN KEY (`Event`) REFERENCES `events` (`ID_Event`),
  ADD CONSTRAINT `fk_foreign_user` FOREIGN KEY (`User`) REFERENCES `admin_user` (`ID_User`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
