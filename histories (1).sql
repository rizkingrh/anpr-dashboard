-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Feb 2025 pada 06.20
-- Versi server: 8.0.30
-- Versi PHP: 8.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anpr_ksp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `histories`
--

CREATE TABLE `histories` (
  `id` int NOT NULL,
  `numberplate` text,
  `image` text,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `histories`
--

INSERT INTO `histories` (`id`, `numberplate`, `image`, `time`, `date`) VALUES
(1, '[None]', 'plates/plate_1740557605_[None].jpg', '15:13:25', '2025-02-26'),
(2, 'DK2820GBL', 'plates/plate_1740557610_DK2820GBL.jpg', '15:13:30', '2025-02-26'),
(3, 'DK2820GBL', 'plates/plate_1740557615_DK2820GBL.jpg', '15:13:35', '2025-02-26'),
(4, 'B215678P', 'plates/plate_1740557962_B215678P.jpg', '15:19:22', '2025-02-26'),
(5, 'B2156TOR', 'plates/plate_1740557967_B2156TOR.jpg', '15:19:27', '2025-02-26'),
(6, 'DK2820GBL', 'plates/plate_1740557973_DK2820GBL.jpg', '15:19:33', '2025-02-26'),
(7, 'BP1309GD', 'plates/plate_1740557981_BP1309GD.jpg', '15:19:41', '2025-02-26'),
(8, 'BP1309GD', 'plates/plate_1740557986_BP1309GD.jpg', '15:19:47', '2025-02-26'),
(9, 'B1387DKC', 'plates/plate_1740557992_B1387DKC.jpg', '15:19:52', '2025-02-26'),
(10, '1387DKC', 'plates/plate_1740557997_1387DKC.jpg', '15:19:57', '2025-02-26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
