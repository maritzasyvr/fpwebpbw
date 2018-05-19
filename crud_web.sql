-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 06:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'ijul', 'hipzulaj@gmail.com', 'hipzulaj', '26f6848b474de7212b50ee942963c2a4');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `judul`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'fa', 'fi', 300000, 'pink-cupcake-hi.png'),
(4, 'bubrr', 'ff', 2, 'blutut.png'),
(5, 'mie ayam ', 'enak', 20000, 'ez2.jpg'),
(7, 'asdff', 'bchsd', 13212, 'pink-cupcake-hi.png'),
(8, 'bhjdc', 'fdsdcas', 32132, 'pink-cupcake-hi.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `message` varchar(150) DEFAULT NULL,
  `event` varchar(20) NOT NULL,
  `orderan` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `phone`, `time`, `message`, `event`, `orderan`, `timestamp`, `status`) VALUES
(13, 'afs', 'sfsa', 'asdas', '0000-00-00 00:00:00', 'saf', 'safa', 'saf', '2018-05-18 09:20:42', 'sudah'),
(15, 'hans', 'ss', 'gh', NULL, 'ss', 'ss', 'ss', '2018-05-18 09:20:54', 'sudah'),
(16, 'maritza', '2', '081298290960', NULL, 'view kolam renang', 'Dinner', 'sirloin steak 1 jus mangga 1', '2018-05-18 09:15:42', 'belum'),
(18, 'an', '1', '9', NULL, 'a', 'ss', 's', '2018-05-18 09:15:42', 'belum'),
(19, 'mama', '1', '3', NULL, 'mww', 'ss', 'w w', '2018-05-18 09:15:42', 'belum'),
(20, '<marquee>ijul</marquee>', '100', '087788', NULL, '', 'ena2', 'es the manis', '0000-00-00 00:00:00', 'belum'),
(21, '&lt;marquee&gt;ijul&lt;/marquee&gt;', '100', '0877', NULL, '123', 'ena2', 'es teh', '0000-00-00 00:00:00', 'belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
