-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 03 Mar 2025 pada 03.20
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
(25, 'DK2820GBL', 'plates/plate_1740735071_DK2820GBL.jpg', '16:31:11', '2025-02-28'),
(26, 'DK2820GBL', 'plates/plate_1740735076_DK2820GBL.jpg', '16:31:16', '2025-02-28'),
(27, 'BP1309G0', 'plates/plate_1740735082_BP1309G0.jpg', '16:31:23', '2025-02-28'),
(28, 'BP1309GD', 'plates/plate_1740735088_BP1309GD.jpg', '16:31:28', '2025-02-28'),
(29, 'BP1309', 'plates/plate_1740735093_BP1309.jpg', '16:31:33', '2025-02-28'),
(30, 'B1387DKC', 'plates/plate_1740735098_B1387DKC.jpg', '16:31:38', '2025-02-28'),
(31, 'B1387DKC', 'plates/plate_1740735103_B1387DKC.jpg', '16:31:43', '2025-02-28'),
(32, 'B1001ZZZ', 'plates/plate_1740735109_B1001ZZZ.jpg', '16:31:49', '2025-02-28'),
(33, 'B1001ZZZ', 'plates/plate_1740735114_B1001ZZZ.jpg', '16:31:54', '2025-02-28'),
(35, 'B2156TOR', 'plates/plate_1740735178_B2156TOR.jpg', '16:32:58', '2025-02-28'),
(36, '[None]', 'plates/plate_1740735183_[None].jpg', '16:33:03', '2025-02-28'),
(37, 'BM1439TP', 'plates/plate_1740735189_BM1439TP.jpg', '16:33:09', '2025-02-28'),
(38, 'BM1439TP', 'plates/plate_1740735194_BM1439TP.jpg', '16:33:14', '2025-02-28'),
(39, 'B1001717', 'plates/plate_1740735204_B1001717.jpg', '16:33:24', '2025-02-28'),
(40, 'B1001ZZZ', 'plates/plate_1740735209_B1001ZZZ.jpg', '16:33:29', '2025-02-28'),
(41, 'B2156TOR', 'plates/plate_1740735352_B2156TOR.jpg', '16:35:52', '2025-02-28'),
(42, 'B2156TOR', 'plates/plate_1740735357_B2156TOR.jpg', '16:35:57', '2025-02-28'),
(43, 'DK2820GBI', 'plates/plate_1740735364_DK2820GBI.jpg', '16:36:04', '2025-02-28'),
(44, 'DK2820GBL', 'plates/plate_1740735369_DK2820GBL.jpg', '16:36:10', '2025-02-28');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
