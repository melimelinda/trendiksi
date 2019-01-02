-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 03:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trendiksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_galeri` date NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama`, `tgl_galeri`, `gambar`, `deskripsi`) VALUES
(9, 'mbuh', '2018-12-14', 'IMG-20180501-WA0002.jpg', '<p>fsdfdsfsdfds</p>\r\n'),
(10, 'hgfhgfh', '2018-12-16', 'IMG-20180505-WA0007.jpg', '<p>gdhfhgf</p>\r\n'),
(11, 'jkhajkd', '2019-01-02', 'FB_IMG_15142016716932720.jpg', '<p><strong>jhdadgasdgadg</strong></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `nama`, `email`, `notelp`, `pesan`, `tgl`) VALUES
(3, 'nana', 'nana@gmail.com', '34323424', 'mau numpang nginep boleh?', '2018-12-19'),
(4, 'fh', 'shel@gmail.com', '575', 'hgh', '2019-01-02'),
(5, 'djhadgs', 'shel@gmail.com', '41242151', 'dfdafafa', '2019-01-02'),
(6, 'ayu', 'ayu@Gmail.com', '648174584146', 'mau daftar gimana caranya', '2019-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `fb` varchar(250) NOT NULL,
  `tw` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `fb`, `tw`, `email`, `nohp`) VALUES
(1, 'Desa Lohbener Lor Kec. Lohbener Kab. Indramayu', 'https://www.facebook.com/profile.php?id=100005055856241', 'https://www.facebook.com/profile.php?id=100005055856241', 'melinawada29@gmail.com', '08978208749');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('meli', 'melinda'),
('nana', 'nana');

-- --------------------------------------------------------

--
-- Table structure for table `perijinan`
--

CREATE TABLE `perijinan` (
  `nik` int(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `tgl_izin` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perijinan`
--

INSERT INTO `perijinan` (`nik`, `nama`, `tujuan`, `tgl_izin`, `tgl_kembali`) VALUES
(3243432, 'meli', 'balik', '2018-12-16', '2018-12-16'),
(312321, 'meli', 'balik', '2019-01-02', '2019-01-19'),
(323124, 'dsadsafdaf', 'fddfsfdsf', '2019-01-02', '2019-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `namadepan` varchar(250) NOT NULL,
  `namabelakang` varchar(250) NOT NULL,
  `aboutme` text NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tgllahir` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `notelp` int(15) NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `nik` int(16) NOT NULL,
  `nama` char(50) NOT NULL,
  `tempatlahir` char(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `jk` char(10) NOT NULL,
  `alamat` char(50) NOT NULL,
  `status` char(50) NOT NULL,
  `kewarganegaraan` char(50) NOT NULL,
  `pekerjaan` char(50) NOT NULL,
  `notelp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`nik`, `nama`, `tempatlahir`, `tgllahir`, `jk`, `alamat`, `status`, `kewarganegaraan`, `pekerjaan`, `notelp`) VALUES
(1703046, 'desi', 'indramayu', '0000-00-00', 'p', 'sukasari', 'mahasiswa', 'indonesia', 'mahasiswa', 2147483647),
(3123123, 'fsdfds', 'djfhdsjfhs', '2019-01-19', 'p', 'ddhsajdhasj', 'djshjkash', 'dahdasjk', 'hajkdhasjk', 764832746);

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `file`, `tgl`) VALUES
(1, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2018-12-16'),
(7, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2019-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `no_tlp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama`, `alamat`, `keterangan`, `tgl`, `no_tlp`) VALUES
(6, 'meli', 'jakarta', 'menginap', '2018-12-13', '2147483647'),
(10, 'desi', 'korea', 'menginap', '2018-12-14', '2147483647'),
(11, 'ayu', 'jakarta', 'balik', '2018-12-14', '2147483647'),
(12, 'juni', 'hfsdhghj', 'dhasjdgha', '2019-01-02', '76312735127'),
(13, 'rina', 'fddsfsd', 'fsdfsdfsd', '2019-01-02', '33423432432');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `file` varchar(250) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `nik` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3123124;
--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
