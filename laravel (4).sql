-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 10:35 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` date NOT NULL,
  `time_out` time NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id_camp` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `foto_camp` varchar(255) DEFAULT NULL,
  `target_don` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `lokasi` varchar(75) DEFAULT NULL,
  `desk_camp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id_camp`, `id`, `judul`, `foto_camp`, `target_don`, `deadline`, `category`, `lokasi`, `desk_camp`) VALUES
(6, 3, 'Kapal Kemanusiaan', '1519270210.png', 10000000, '2018-02-28', NULL, 'Kab. Aceh Barat, Aceh', 'Kapal Kemanusiaan untuk membantu Palestina'),
(7, 2, 'Dukungan Indonesia Untuk R80', '1519314274.jpeg', 50000000, '2018-02-28', 'Beasiswa & Pendidikan', 'Kab. Aceh Barat, Aceh', 'Dukungan Indonesia untuk R80');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_don` int(11) NOT NULL,
  `id_camp` int(11) DEFAULT NULL,
  `id` varchar(75) DEFAULT NULL,
  `nom_don` int(11) DEFAULT NULL,
  `komen_d` varchar(150) DEFAULT NULL,
  `tgl_don` date DEFAULT NULL,
  `transfer_via` varchar(75) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_don`, `id_camp`, `id`, `nom_don`, `komen_d`, `tgl_don`, `transfer_via`, `status`) VALUES
(1, 6, '1', 200000, NULL, '2018-02-15', 'BCA', 'Unpaid'),
(2, 7, '2', 12345, 'komentar', NULL, 'Mandiri', NULL),
(47, 7, '2', 250000, 'test', NULL, NULL, NULL),
(48, 6, '1', 50000, 'Bismillah', NULL, NULL, NULL),
(52, 6, '3', 25000, 'test', NULL, NULL, NULL),
(53, 7, '3', 20000, NULL, NULL, NULL, NULL),
(54, 7, '2', 25000, 'test aja', NULL, NULL, NULL),
(55, 6, '1', 234234, 'cape Ya Rabb', NULL, NULL, NULL),
(56, 7, '1', 25000, 'test', NULL, NULL, NULL),
(57, 7, '3', 25000, 'test', NULL, NULL, NULL),
(58, 7, '2', 1000000, '=', NULL, 'BCA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `id` int(50) NOT NULL,
  `title` varchar(75) NOT NULL,
  `description` varchar(150) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`id`, `title`, `description`, `create_at`, `updated_at`, `deleted_at`) VALUES
(1, 'halo halo bandung', 'halo halo bandung ibu kota parahyangan', '2018-01-29 07:21:34', NULL, NULL),
(2, 'halo halo jakarta', 'halo halo jakarta ibu kota indonesia', '2018-01-29 07:21:34', NULL, NULL),
(3, 'hai cimahi', 'isi halo cimahi', '2018-01-29 07:21:34', NULL, NULL),
(4, 'Halo Yogyakarta', 'Hai Yogya', '2018-01-29 07:21:34', NULL, NULL),
(11, 'Film', 'Anohana, Death note, dll', '2018-01-29 15:45:36', NULL, NULL),
(13, 'Great Ideas', 'Pikiran Bagus', '2018-01-29 16:12:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_camp`
--

CREATE TABLE `kategori_camp` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_camp`
--

INSERT INTO `kategori_camp` (`id_kat`, `nama_kat`) VALUES
(1, 'Beasiswa & Pendidikan'),
(2, 'Balita & Anak Sakit'),
(3, 'Bencana Alam'),
(4, 'Panti Asuhan'),
(5, 'Rumah Ibadah');

-- --------------------------------------------------------

--
-- Table structure for table `latihan`
--

CREATE TABLE `latihan` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `umur` int(11) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `upd_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `latihan`
--

INSERT INTO `latihan` (`id`, `nama`, `umur`, `alamat`, `upd_img`) VALUES
(4, 'ka yusuf', 24, 'baleendah', ''),
(5, 'rin', 18, 'cibeureum', ''),
(7, 'aaaa', 18, 'Jl. Sukawarna, Pajajaran', ''),
(8, 'test', 18, 'qqwda', '1518905331.png'),
(9, 'test', 18, 'test', '1518995703image/png'),
(10, 'wil', 19, 'tfhgk', '1518995876.png');

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
-- Table structure for table `penerima_dana`
--

CREATE TABLE `penerima_dana` (
  `id_lok` int(11) NOT NULL,
  `nama_lok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima_dana`
--

INSERT INTO `penerima_dana` (`id_lok`, `nama_lok`) VALUES
(4, 'Kab. Aceh Barat, Aceh'),
(5, 'Kab. Aceh Barat Daya, Aceh'),
(6, 'Kab. Aceh Besar, Aceh'),
(7, 'Kab. Aceh Jaya, Aceh'),
(8, 'Kab. Aceh Selatan, Aceh'),
(9, 'Kab. Aceh Singkil, Aceh'),
(10, 'Kab. Agam, Sumatra Barat'),
(11, 'Kab. Alor, Nusa Tenggara Timur'),
(12, 'Kab. Bandung, Jawa Barat'),
(13, 'Kota Bandung, Jawa Barat'),
(14, 'Kab. Banjar, Jawa Barat'),
(15, 'Kab. Tulungagung, Jawa Timur'),
(16, 'Kab. Barito Kuala, Kalimantan Selatan'),
(17, 'Kab. Banyumas, Jawa Tengah'),
(18, 'Kab. Belu, Nusa Tenggara Timur'),
(19, 'Kab. Belitung, Kepulauan Bangka Belitung'),
(20, 'Kab. Blitar, Jawa Timur'),
(21, 'Kab. Intan Jaya, Papua'),
(22, 'Kab. Jeneponto, Sulawesi Selatan'),
(23, 'Kab. Naege Keo, Nusa Tenggara Timur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `no_tlp` varchar(25) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `bio` varchar(225) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `foto_p` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `no_tlp`, `lokasi`, `bio`, `remember_token`, `foto_p`, `status`) VALUES
(1, 'rianrismawati', 'rismawatirian09@gmail.com', '$2y$10$LFz.DMwZvvqiZOgJ1wYAiOOZhtodYzFm7czPG1boxT3En3zJ4w6TO', 'test', 'test', 'testaja', 'lIyyunRdy3E77g9bwMvCXfy3mQhRipcqHGjVisQgPEXIo82n4CRCaZdVT164', '', 'admin'),
(2, 'aks', 'aks@gmail.com', '$2y$10$jTiwaaw12BAA/NghB2UUMe8J4J0KiMCXrELZumEkVCP6F1ZnCz.YO', NULL, NULL, NULL, 'JHBCFt2xXN3jdvG16ssZuA5clrCDwfzyLs3rqsxo1VHDYO3QPLkngtKH22oH', '1519107613.jpg', 'users'),
(3, 'mys', 'yusufsahidin31@gmail.com', '$2y$10$nT6Fd9zoog/xx8hfkMGr7eE6eW0iexvZcRDOB3Y1UTMqeGh6viPna', NULL, NULL, NULL, 'A0ibBisg6jgVG1KKTpeLkbjViXLcYIgC6m08icd73wNPcvNbYE8R3ojQBKMR', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id_camp`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_don`);

--
-- Indexes for table `first`
--
ALTER TABLE `first`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_camp`
--
ALTER TABLE `kategori_camp`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerima_dana`
--
ALTER TABLE `penerima_dana`
  ADD PRIMARY KEY (`id_lok`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id_camp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `first`
--
ALTER TABLE `first`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori_camp`
--
ALTER TABLE `kategori_camp`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `latihan`
--
ALTER TABLE `latihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerima_dana`
--
ALTER TABLE `penerima_dana`
  MODIFY `id_lok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
