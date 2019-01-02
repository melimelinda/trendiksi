-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 06:46 AM
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
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `text` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `active` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `title`, `text`, `img`, `active`) VALUES
(1, 'TUTORIALWEB.NET', 'tutorial bagaimana cara membuat Bootstrap Carousel (Image Slider) yang mana data (gambar dan deskripsi) disimpan di database MySQL dengan PHP', 'logo.jpg', 1),
(2, 'Bootstrap Carousel', 'tutorial bagaimana cara membuat Bootstrap Carousel (Image Slider) yang mana data (gambar dan deskripsi) disimpan di database MySQL dengan PHP', 'head.png', 0),
(3, 'PINO.WEB.ID', 'tutorial bagaimana cara membuat Bootstrap Carousel (Image Slider) yang mana data (gambar dan deskripsi) disimpan di database MySQL dengan PHP', 'logo.png', 0);

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
(6, 'jkdhsakd', '2018-12-07', 'B612_20171020_143313.jpg', '<p>dsajdhaskdha</p>\r\n'),
(7, 'hgjhg', '2018-12-08', 'IMG_20180306_220441.jpg', '<p>nbmnbmbm</p>\r\n'),
(8, 'mbmn', '2018-12-08', 'IMG_20180318_110452.jpg', '<p>mnmbmb</p>\r\n'),
(9, 'mbuh', '2018-12-14', 'IMG-20180501-WA0002.jpg', '<p>fsdfdsfsdfds</p>\r\n');

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
(31312312, 'desi', 'balik', '2018-12-14', '2018-12-14'),
(56789, 'meli', 'fndsh', '2018-12-14', '2018-12-14');

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
(123456, 'Rama', 'indramayu', '0000-00-00', 'p', 'sukasari', 'mahasiswa', 'indonesia', 'nganggur', 2147483647),
(1703046, 'meli melinda', 'indramayu', '0000-00-00', 'p', 'sukasari', 'mahasiswa', 'indonesia', 'mahasiswa', 2147483647),
(21312323, 'asdsad', '13 wedfwdssa 12', '2018-12-14', 'l', 'sdsa', 'dasdasd', 'dasdas', 'sdasd', 21313);

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
(1, 'dsasds', 'dsds', 'dsadsad', '0000-00-00', '0'),
(2, 'dfsdf', 'sdfdsf', 'fsdsds', '0000-00-00', '2147483647'),
(3, 'kris', 'lea', 'berkunjung', '0000-00-00', '897838098'),
(4, 'ayu', 'brebes', 'berkunjung', '0000-00-00', '2147483647'),
(5, 'wq2wqw2w23', 'wewew', 'asasas', '0000-00-00', '121212'),
(6, 'ayu', 'brebes', 'menginap', '2018-12-13', '2147483647'),
(7, 'ayu', 'jtb', 'berkunjung', '2018-12-13', '2147483647'),
(8, 'zfsdkjfh', 'jhfkejhrds', 'kjdhsuhsk', '2018-12-13', '2147483647'),
(9, 'fzfsfasfas', 'fdsfsfdsf', 'cdfsdgd', '2018-12-13', '4345345345'),
(10, 'meli', 'asad', 'dasdasdas', '2018-12-14', '312321321'),
(11, 'juli', 'dasdasd', 'dsadsa', '2018-12-14', '31312');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `nik` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21312324;
--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
