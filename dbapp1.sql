-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Des 2019 pada 13.29
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbapp1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agendacamat`
--

CREATE TABLE `agendacamat` (
  `id_agenda` int(11) NOT NULL,
  `tglkegiatan` date DEFAULT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `bertugas` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agendacamat`
--

INSERT INTO `agendacamat` (`id_agenda`, `tglkegiatan`, `kegiatan`, `hari`, `waktu`, `tempat`, `bertugas`, `created_at`, `updated_at`) VALUES
(1, '2019-12-03', 'qwef', 'Selasa', '14.30', 'qwerwqer', 'qweerweqr', '2019-12-23 20:46:48', '2019-12-23 20:46:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id_suratkeluar` int(10) NOT NULL,
  `noberkas` varchar(50) DEFAULT NULL,
  `alamatpenerima` varchar(50) DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `dari` varchar(25) DEFAULT NULL,
  `prihal` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id_suratkeluar`, `noberkas`, `alamatpenerima`, `tglsurat`, `dari`, `prihal`, `created_at`, `updated_at`) VALUES
(1, '3443254235', 'sadfdsaf', '2019-12-03', 'Kasi Pem', 'wqerwqre', '2019-12-22 05:05:41', '2019-12-22 05:05:41'),
(2, '3443254235wer', 'sadfdsaf', '2019-12-03', 'Kasi Umpag', 'asdfsdaf', '2019-12-22 06:10:27', '2019-12-22 06:10:27'),
(3, '3443254235', 'sd sbahan', '2019-12-04', 'Kasi Pip', 'asdfsdaf', '2019-12-22 06:10:41', '2019-12-22 06:10:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id_suratmasuk` int(10) NOT NULL,
  `suratdari` varchar(50) DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `nosurat` varchar(50) DEFAULT NULL,
  `tglditerima` date DEFAULT NULL,
  `untuk` varchar(50) DEFAULT NULL,
  `prihal` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id_suratmasuk`, `suratdari`, `tglsurat`, `nosurat`, `tglditerima`, `untuk`, `prihal`, `created_at`, `updated_at`) VALUES
(4, 'amang', '2019-12-05', '12135512', '2019-12-04', 'camat2', 'untuk datang', '2019-12-22 04:03:04', '2019-12-22 04:03:04'),
(5, 'kelurahan', '2019-12-05', '12135512', '2019-12-04', 'camat2', 'qwerqwer', '2019-12-22 04:03:22', '2019-12-22 04:03:22'),
(6, 'amang', '2019-12-20', '121/35/512', '2019-12-02', 'camat2', 'kuiuuh', '2019-12-22 04:37:37', '2019-12-22 04:37:37'),
(7, 'Sd skupang', '2019-12-03', '1212.sdjfhj/sadfkj', '2019-12-04', 'Camat', 'Undangn 1', '2019-12-22 04:42:44', '2019-12-22 04:42:44'),
(8, 'qwer', '2019-12-03', 'wqre', '2019-12-11', 'Kasi Pem', 'wqer', '2019-12-22 04:58:02', '2019-12-22 04:58:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$12$3ar.6exhmT9JChKvm2GV.uCfbTpIimtsu2mxXu/yopCekCw2hQ2Dy', '1kSotWT9MgTQv8ntfvMZU6DPFyhahwime8HdIf970Vi9ckbkSOYyzt8YsSwE', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendacamat`
--
ALTER TABLE `agendacamat`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id_suratkeluar`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendacamat`
--
ALTER TABLE `agendacamat`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id_suratkeluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id_suratmasuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
