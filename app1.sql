-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 07:05 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendacamat`
--

CREATE TABLE `agendacamat` (
  `id` int(11) NOT NULL,
  `tglkegiatan` date DEFAULT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `bertugas` varchar(25) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agendacamat`
--

INSERT INTO `agendacamat` (`id`, `tglkegiatan`, `kegiatan`, `hari`, `waktu`, `tempat`, `bertugas`, `created_at`, `updated_at`) VALUES
(3, '2020-02-08', 'qwef', 'Rabu', '14.30', 'qwerwqer', 'qweerweqr', '2020-01-31 21:53:27', '2020-01-31 21:53:27'),
(4, '2020-02-07', 'uyui', 'Rabu', '14.30', 'qwerwqer', 'kasi trantip', '2020-02-01 18:22:07', '2020-02-01 18:22:07'),
(5, '2020-02-07', 'uyui', 'Selasa', '09.50', 'bjb', 'kasi trantip', '2020-02-01 18:22:23', '2020-02-01 18:22:23'),
(6, '2020-02-15', 'sadf', 'Sabtu', '09.50', 'qwerwqer', 'Kasi Pip', '2020-02-01 20:05:01', '2020-02-01 20:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `cuti_tahunan`
--

CREATE TABLE `cuti_tahunan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `pangkat` varchar(25) DEFAULT NULL,
  `jabatan` varchar(25) DEFAULT NULL,
  `unit` varchar(25) DEFAULT NULL,
  `lamanya` varchar(25) DEFAULT NULL,
  `jalankan` varchar(25) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `sampai_tgl` date DEFAULT NULL,
  `masuk_tgl` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_tahunan`
--

INSERT INTO `cuti_tahunan` (`id`, `nama`, `nip`, `pangkat`, `jabatan`, `unit`, `lamanya`, `jalankan`, `tgl_mulai`, `sampai_tgl`, `masuk_tgl`, `created_at`, `updated_at`) VALUES
(1, 'herru', '12671267', '8', 'panglima123', 'Kasi Trantip', '4 hari', 'marabahan', '2020-01-01', '2020-01-03', '2020-01-05', '2020-02-02 03:28:15', '2020-02-01 19:28:15'),
(2, 'herru123', '121212', '9', 'panglima', 'Kasi Ekoband', '4 hari', 'marabahan', '2020-01-30', '2020-02-01', '2020-02-01', '2020-01-28 23:19:07', '2020-01-28 23:19:07'),
(6, 'herru123', '12671267', '3', 'panglima123', 'Kelurahan Sungai Baru', '4 hari', 'marabahan', '2020-02-21', '2020-02-01', '2020-02-22', '2020-02-01 20:04:17', '2020-02-01 20:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suratimb`
--

CREATE TABLE `suratimb` (
  `id` int(10) NOT NULL,
  `nosurat` varchar(50) DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `luas` varchar(50) DEFAULT NULL,
  `lokasi` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratimb`
--

INSERT INTO `suratimb` (`id`, `nosurat`, `tglsurat`, `nama`, `alamat`, `jenis`, `luas`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'sad', '2020-02-05', 'sad', 'iya', 'toko', '14km', 'ktb', '2020-02-01 19:01:25', '2020-02-01 19:34:29'),
(2, 'herru1212', '2020-02-08', 'herru1212', 'qwerweq', 'toko', '12km', 'magalau', '2020-02-01 19:01:45', '2020-02-01 19:34:47'),
(4, '1212.sdjfhj/sadfkj', '2020-02-08', 'herru123', 'jl. hahahha', 'dagang', '12km', 'ktb', '2020-02-01 19:35:20', '2020-02-01 19:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int(10) NOT NULL,
  `noberkas` varchar(50) DEFAULT NULL,
  `alamatpenerima` varchar(50) DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `dari` varchar(25) DEFAULT NULL,
  `prihal` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `noberkas`, `alamatpenerima`, `tglsurat`, `dari`, `prihal`, `created_at`, `updated_at`) VALUES
(1, '344', 'sadfdsafaaaaqwe', '2019-12-03', 'Kasi Kessos', 'wqerwqre', '2019-12-22 05:05:41', '2020-02-01 19:26:32'),
(2, '3443254235wer', 'sadfdsaf', '2019-12-03', 'Kasi Umpag', 'asdfsdaf', '2019-12-22 06:10:27', '2019-12-22 06:10:27'),
(3, '3443254235', 'sd sbahan', '2019-12-04', 'Kasi Pip', 'asdfsdaf', '2019-12-22 06:10:41', '2019-12-22 06:10:41'),
(6, '3443254235', 'sadfdsaf', '2020-02-08', 'Kasi Ekoband', 'wqerwqer', '2020-02-01 20:02:23', '2020-02-01 20:02:23'),
(7, '3443254235', 'sadfdsaf', '2020-02-08', 'Kasi Ekoband', 'wqerwqer', '2020-02-01 20:03:05', '2020-02-01 20:03:05'),
(8, '3443254235', 'sadfdsaf', '2020-02-08', 'Kasi Ekoband', 'wqerwqer', '2020-02-01 20:03:43', '2020-02-01 20:03:43'),
(9, '3443254235', 'weqr', '2020-02-08', 'Kasi Ekoband', 'werwqer', '2020-02-01 20:03:53', '2020-02-01 20:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(10) NOT NULL,
  `suratdari` varchar(50) DEFAULT NULL,
  `tglsurat` date DEFAULT NULL,
  `nosurat` varchar(50) DEFAULT NULL,
  `tglditerima` date DEFAULT NULL,
  `untuk` varchar(50) DEFAULT NULL,
  `prihal` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `suratdari`, `tglsurat`, `nosurat`, `tglditerima`, `untuk`, `prihal`, `created_at`, `updated_at`) VALUES
(14, 'amang123ew', '2020-01-09', '12135512', '2020-01-07', 'Kasi Trantip', 'qwerweqr', '2020-01-29 22:11:37', '2020-02-01 20:05:17'),
(17, 'qwer', '2020-01-08', 'qwer', '2020-01-08', 'Camat', 'werweqr', '2020-01-31 06:23:09', '2020-01-31 06:23:09'),
(18, 'wqerwqer', '2020-01-03', 'qwerweq', '2020-01-02', 'Camat', 'qwerweqrweq', '2020-01-31 06:23:20', '2020-01-31 06:23:20'),
(19, 'kelurahan', '2020-01-02', '12135', '2020-01-11', 'Kasi Trantip', 'asdfdsaf', '2020-01-31 06:23:36', '2020-02-01 19:27:50'),
(20, 'amang123', '2020-02-08', 'qwer', '2020-02-15', 'Camat', 'qwerqwer', '2020-02-01 20:04:49', '2020-02-01 20:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '$2y$12$3ar.6exhmT9JChKvm2GV.uCfbTpIimtsu2mxXu/yopCekCw2hQ2Dy', 'SEfuWJdTIigcld0XaddtM95mA7zJdfiY0p8nBfRb75ohC5x5ZII08cC1dP0T', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendacamat`
--
ALTER TABLE `agendacamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti_tahunan`
--
ALTER TABLE `cuti_tahunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratimb`
--
ALTER TABLE `suratimb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
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
-- AUTO_INCREMENT for table `agendacamat`
--
ALTER TABLE `agendacamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cuti_tahunan`
--
ALTER TABLE `cuti_tahunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suratimb`
--
ALTER TABLE `suratimb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
