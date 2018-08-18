-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2018 at 12:40 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg_perkara`
--
CREATE DATABASE IF NOT EXISTS `reg_perkara` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reg_perkara`;

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(24, 'Islam'),
(25, 'Katolik');

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `nama_akses` varchar(20) NOT NULL,
  `oditurat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`nama_akses`, `oditurat`) VALUES
('babinkum', 'Babinkum TNI'),
('otjen', 'Otjen TNI'),
('otmilti_jkt', 'Otmilti II Jakarta'),
('otmilti_mdn', 'Otmilti I Medan'),
('otmilti_mks', 'Otmilti IV Makassar'),
('otmilti_sby', 'Otmilti III Surabaya'),
('otmil_amb', 'Otmil IV-19 Ambon'),
('otmil_bdg', 'Otmil II-08 Bandung'),
('otmil_bjm', 'Otmil III-15 Banjarmasin'),
('otmil_bna', 'Otmil I - 01 Banda Aceh'),
('otmil_bpp', 'Otmil IV-16 Balikpapan'),
('otmil_dps', 'Otmil III-13 Denpasar'),
('otmil_jap', 'Otmil IV-20 Jayapura'),
('otmil_jkt', 'Otmil II-07 Jakarta'),
('otmil_kpg', 'Otmil III-14 Kupang'),
('otmil_mad', 'Otmil III-12 Madiun'),
('otmil_mdn', 'Otmil I - 02 Medan'),
('otmil_mks', 'otmil IV-17 Makassar'),
('otmil_mnd', 'Otmil IV-18 Manado'),
('otmil_mnk', 'Otmil IV-21 Manokwari'),
('otmil_pad', 'Otmil I - 04 Padang'),
('otmil_pbr', 'Otmil I - 03 Pekanbaru'),
('otmil_plg', 'Otmil I - 05 Palembang'),
('otmil_ptk', 'Otmil II - 06 Pontianak'),
('otmil_sby', 'Otmil III-11 Surabaya'),
('otmil_smg', 'Otmil II-09 Semarang'),
('otmil_yyk', 'Otmil II-10 Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `goldar`
--

CREATE TABLE `goldar` (
  `id_goldar` int(11) NOT NULL,
  `nama_goldar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goldar`
--

INSERT INTO `goldar` (`id_goldar`, `nama_goldar`) VALUES
(2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE `kasus` (
  `no_reg` varchar(100) NOT NULL,
  `id_pasal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategoripasal`
--

CREATE TABLE `kategoripasal` (
  `id_kategoripasal` int(11) NOT NULL,
  `nama_kategoripasal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategoripasal`
--

INSERT INTO `kategoripasal` (`id_kategoripasal`, `nama_kategoripasal`) VALUES
(1, 'KUHP'),
(2, 'KUHPM');

-- --------------------------------------------------------

--
-- Table structure for table `kotamaad`
--

CREATE TABLE `kotamaad` (
  `id_kotamaad` int(11) NOT NULL,
  `nama_kotamaad` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotamaad`
--

INSERT INTO `kotamaad` (`id_kotamaad`, `nama_kotamaad`) VALUES
(1, 'Kodam I');

-- --------------------------------------------------------

--
-- Table structure for table `kotamaal`
--

CREATE TABLE `kotamaal` (
  `id_kotamaal` int(11) NOT NULL,
  `nama_kotamaal` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotamaal`
--

INSERT INTO `kotamaal` (`id_kotamaal`, `nama_kotamaal`) VALUES
(2, 'KOARMATIM');

-- --------------------------------------------------------

--
-- Table structure for table `kotamaau`
--

CREATE TABLE `kotamaau` (
  `id_kotamaau` int(11) NOT NULL,
  `nama_kotamaau` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kotamaluar`
--

CREATE TABLE `kotamaluar` (
  `id_kotamaluar` int(11) NOT NULL,
  `nama_kotamaluar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotamaluar`
--

INSERT INTO `kotamaluar` (`id_kotamaluar`, `nama_kotamaluar`) VALUES
(1, 'DEPHAN');

-- --------------------------------------------------------

--
-- Table structure for table `kotamamabes`
--

CREATE TABLE `kotamamabes` (
  `id_kotamamabes` int(11) NOT NULL,
  `nama_kotamamabes` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotamamabes`
--

INSERT INTO `kotamamabes` (`id_kotamamabes`, `nama_kotamamabes`) VALUES
(1, 'MABES TNI');

-- --------------------------------------------------------

--
-- Table structure for table `matra`
--

CREATE TABLE `matra` (
  `id_matra` int(11) NOT NULL,
  `nama_matra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matra`
--

INSERT INTO `matra` (`id_matra`, `nama_matra`) VALUES
(1, 'Matra Laut'),
(2, 'Matra Darat'),
(3, 'Matra Udara');

-- --------------------------------------------------------

--
-- Table structure for table `odituratbabinkum`
--

CREATE TABLE `odituratbabinkum` (
  `id_odituratbabinkum` int(11) NOT NULL,
  `nama_odituratbabinkum` varchar(60) NOT NULL,
  `tlp_odituratbabinkum` varchar(25) NOT NULL,
  `alamat_odituratbabinkum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odituratbabinkum`
--

INSERT INTO `odituratbabinkum` (`id_odituratbabinkum`, `nama_odituratbabinkum`, `tlp_odituratbabinkum`, `alamat_odituratbabinkum`) VALUES
(1, 'Babinkum TNI', '021 344555', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `odituratmasmil`
--

CREATE TABLE `odituratmasmil` (
  `id_odituratmasmil` int(11) NOT NULL,
  `nama_odituratmasmil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odituratmasmil`
--

INSERT INTO `odituratmasmil` (`id_odituratmasmil`, `nama_odituratmasmil`) VALUES
(2, 'Masmil Cimahi'),
(3, 'Masmil Medan');

-- --------------------------------------------------------

--
-- Table structure for table `odituratotjen`
--

CREATE TABLE `odituratotjen` (
  `id_odituratotjen` int(11) NOT NULL,
  `nama_odituratotjen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odituratotjen`
--

INSERT INTO `odituratotjen` (`id_odituratotjen`, `nama_odituratotjen`) VALUES
(2, 'OTJEN TNI');

-- --------------------------------------------------------

--
-- Table structure for table `odituratotmil`
--

CREATE TABLE `odituratotmil` (
  `id_odituratotmil` int(11) NOT NULL,
  `nama_odituratotmil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odituratotmil`
--

INSERT INTO `odituratotmil` (`id_odituratotmil`, `nama_odituratotmil`) VALUES
(4, 'OTMIL I - 01 Banda Aceh'),
(5, 'OTMIL I - 02 Medan'),
(6, 'OTMIL II - 07 Jakarta'),
(7, 'OTMIL II - 06 Pontianak');

-- --------------------------------------------------------

--
-- Table structure for table `odituratotmilti`
--

CREATE TABLE `odituratotmilti` (
  `id_odituratotmilti` int(11) NOT NULL,
  `nama_odituratotmilti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odituratotmilti`
--

INSERT INTO `odituratotmilti` (`id_odituratotmilti`, `nama_odituratotmilti`) VALUES
(1, 'OTMILTI I Medan'),
(2, 'OTMILTI II Jakarta'),
(4, 'OTMILTI III Surabaya'),
(5, 'OTMILTI IV Makassar');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `id_matra` int(11) NOT NULL,
  `nama_pangkat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `id_matra`, `nama_pangkat`) VALUES
(1, 1, 'Sersan Dua'),
(2, 2, 'Sersan Dua'),
(3, 3, 'Sersan Dua'),
(6, 1, 'Sersan Satu');

-- --------------------------------------------------------

--
-- Table structure for table `pangmatdar`
--

CREATE TABLE `pangmatdar` (
  `id_pangmatdar` int(11) NOT NULL,
  `nama_pangmatdar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangmatdar`
--

INSERT INTO `pangmatdar` (`id_pangmatdar`, `nama_pangmatdar`) VALUES
(2, 'Mayor Jenderal');

-- --------------------------------------------------------

--
-- Table structure for table `pangmatla`
--

CREATE TABLE `pangmatla` (
  `id_pangmatla` int(11) NOT NULL,
  `nama_pangmatla` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangmatla`
--

INSERT INTO `pangmatla` (`id_pangmatla`, `nama_pangmatla`) VALUES
(1, 'Laksamana Muda'),
(2, 'Laksamana Madya');

-- --------------------------------------------------------

--
-- Table structure for table `pangmatud`
--

CREATE TABLE `pangmatud` (
  `id_pangmatud` int(11) NOT NULL,
  `nama_pangmatud` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangmatud`
--

INSERT INTO `pangmatud` (`id_pangmatud`, `nama_pangmatud`) VALUES
(2, 'Marsekal Madya'),
(3, 'Prajurit Dua');

-- --------------------------------------------------------

--
-- Table structure for table `pangpns`
--

CREATE TABLE `pangpns` (
  `id_pangpns` int(11) NOT NULL,
  `jenis_pangpns` varchar(20) NOT NULL,
  `nama_pangpns` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangpns`
--

INSERT INTO `pangpns` (`id_pangpns`, `jenis_pangpns`, `nama_pangpns`) VALUES
(1, 'II/A', 'Pengatur Muda'),
(2, 'I/B', 'Juru Muda Tingkat 1'),
(3, 'III/A', 'Pranata Muda');

-- --------------------------------------------------------

--
-- Table structure for table `pasal`
--

CREATE TABLE `pasal` (
  `id_pasal` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_pasal` varchar(20) NOT NULL,
  `nama_ayat` varchar(20) DEFAULT NULL,
  `nama_klasifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasal`
--

INSERT INTO `pasal` (`id_pasal`, `id_kategori`, `nama_pasal`, `nama_ayat`, `nama_klasifikasi`) VALUES
(2, 2, '56', '4', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalianberkas`
--

CREATE TABLE `pengembalianberkas` (
  `no_surat` varchar(60) NOT NULL,
  `tanggal` date NOT NULL,
  `no_reg` varchar(60) NOT NULL,
  `objek` varchar(60) NOT NULL,
  `stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personil`
--

CREATE TABLE `personil` (
  `nrp` varchar(80) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `pangkat` int(11) NOT NULL,
  `suku` int(11) NOT NULL,
  `goldar` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `korps` varchar(100) NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` int(11) NOT NULL,
  `akses` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personil`
--

INSERT INTO `personil` (`nrp`, `nama`, `pangkat`, `suku`, `goldar`, `jenis_kelamin`, `agama`, `alamat`, `korps`, `kesatuan`, `jabatan`, `tempat_lahir`, `tgl_lahir`, `status`, `akses`) VALUES
('08098098', 'Test User', 3, 2, 2, 'L', 25, 'Bandung GBA', 'Udara', 'Lanud Husein', 'BA', 'Bandung', '1985-08-05', 1, 'otmil_bdg'),
('1111', 'Adit', 6, 2, 2, 'P', 25, 'Bandung', 'Laut', 'Koarmatim', 'Pamen', 'Magetan', '1990-04-02', 1, 'otmilti_jkt'),
('43535', 'Test 2', 2, 2, 2, 'P', 24, 'Bandung II', 'Test 2', 'Test 2', 'Test 2', 'Bandung', '1984-04-12', 1, 'otmil_bdg'),
('546456', 'Nama Aceh', 1, 2, 2, 'P', 24, 'Aceh', 'Test 2', 'Koarmatim', 'Test 2', 'Aceh', '1981-12-12', 1, 'otmil_bna');

-- --------------------------------------------------------

--
-- Table structure for table `pns`
--

CREATE TABLE `pns` (
  `nip` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `gol` int(11) NOT NULL,
  `suku` int(11) NOT NULL,
  `goldar` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kesatuan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` int(11) NOT NULL,
  `akses` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pns`
--

INSERT INTO `pns` (`nip`, `nama`, `gol`, `suku`, `goldar`, `jenis_kelamin`, `agama`, `alamat`, `kesatuan`, `jabatan`, `tempat_lahir`, `tgl_lahir`, `status`, `akses`) VALUES
('24124', 'Test PNS', 1, 1, 2, 'L', 24, 'Moh Toha Bandung', 'Koarmatim', 'Pekas', 'Bandung', '1990-04-03', 1, 'otmil_bdg'),
('43535', 'Test 2', 3, 2, 2, 'L', 25, 'Jakarta', 'Ada AJa', 'Ada aja juga', 'Cirebon', '1990-06-12', 1, 'otmilti_jkt');

-- --------------------------------------------------------

--
-- Table structure for table `proses_perkara`
--

CREATE TABLE `proses_perkara` (
  `no_reg` varchar(100) NOT NULL,
  `bapat` int(11) DEFAULT NULL,
  `approve_orjen` int(11) DEFAULT NULL,
  `sph` int(11) DEFAULT NULL,
  `keptupra` int(11) DEFAULT NULL,
  `kepkumplin` int(11) DEFAULT NULL,
  `keppera` int(11) DEFAULT NULL,
  `dakwaan` int(11) DEFAULT NULL,
  `tuntutan` int(11) DEFAULT NULL,
  `persidangan_putusan` int(11) DEFAULT NULL,
  `banding` int(11) DEFAULT NULL,
  `kasasi` int(11) DEFAULT NULL,
  `pk` int(11) DEFAULT NULL,
  `eksekusi` int(11) DEFAULT NULL,
  `masmil` int(11) DEFAULT NULL,
  `akses` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statkawin`
--

CREATE TABLE `statkawin` (
  `id_statkawin` int(11) NOT NULL,
  `nama_statkawin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statkawin`
--

INSERT INTO `statkawin` (`id_statkawin`, `nama_statkawin`) VALUES
(1, 'Kawin');

-- --------------------------------------------------------

--
-- Table structure for table `suku`
--

CREATE TABLE `suku` (
  `id_suku` int(11) NOT NULL,
  `nama_suku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suku`
--

INSERT INTO `suku` (`id_suku`, `nama_suku`) VALUES
(1, 'Jawa'),
(2, 'Sunda'),
(3, 'Minang'),
(4, 'Batak');

-- --------------------------------------------------------

--
-- Table structure for table `tersangka`
--

CREATE TABLE `tersangka` (
  `no_reg` varchar(100) NOT NULL,
  `id_personil` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `nrp` varchar(30) DEFAULT NULL,
  `nama` varchar(80) NOT NULL,
  `jabatan` varchar(60) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `akses` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `nrp`, `nama`, `jabatan`, `kontak`, `role`, `email`, `password`, `status`, `akses`) VALUES
('babinkum', NULL, 'Babinkum TNI', NULL, NULL, 'topadmin', NULL, 'b41e0083ab48533dc45db974bcffb116088f6017', 1, 'babinkum'),
('naditya', '12345', 'Niko Aditya', 'Developer', '081210960047', 'topadmin', 'mail.naditya@gmail.com', '1f01864ce09e4fab8149cfbfaa8ffbc0e0fc3ff4', 1, 'babinkum'),
('otmilti_jkt', NULL, 'Otmilti II Jakarta', NULL, NULL, 'admin', NULL, 'b7f1b6d4da81ca2125bc14309d4eb82a8b09656c', 1, 'otmilti_jkt'),
('otmil_aceh', NULL, 'Otmil I - 01 Banda Aceh', NULL, NULL, 'admin', NULL, '1d36d72cc0ae28927cf982663589696ef5fad0de', 1, 'otmil_bna'),
('otmil_bdg', NULL, 'Otmil II-08 Bandung', NULL, NULL, 'admin', NULL, '1b58b73d5ede278ef2fcd79b4394ee4bcba24d86', 1, 'otmil_bdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`nama_akses`);

--
-- Indexes for table `goldar`
--
ALTER TABLE `goldar`
  ADD PRIMARY KEY (`id_goldar`);

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
  ADD KEY `fk_case_noreg` (`no_reg`),
  ADD KEY `fk_case_pasal` (`id_pasal`);

--
-- Indexes for table `kategoripasal`
--
ALTER TABLE `kategoripasal`
  ADD PRIMARY KEY (`id_kategoripasal`);

--
-- Indexes for table `kotamaad`
--
ALTER TABLE `kotamaad`
  ADD PRIMARY KEY (`id_kotamaad`);

--
-- Indexes for table `kotamaal`
--
ALTER TABLE `kotamaal`
  ADD PRIMARY KEY (`id_kotamaal`);

--
-- Indexes for table `kotamaau`
--
ALTER TABLE `kotamaau`
  ADD PRIMARY KEY (`id_kotamaau`);

--
-- Indexes for table `kotamaluar`
--
ALTER TABLE `kotamaluar`
  ADD PRIMARY KEY (`id_kotamaluar`);

--
-- Indexes for table `kotamamabes`
--
ALTER TABLE `kotamamabes`
  ADD PRIMARY KEY (`id_kotamamabes`);

--
-- Indexes for table `matra`
--
ALTER TABLE `matra`
  ADD PRIMARY KEY (`id_matra`);

--
-- Indexes for table `odituratbabinkum`
--
ALTER TABLE `odituratbabinkum`
  ADD PRIMARY KEY (`id_odituratbabinkum`);

--
-- Indexes for table `odituratmasmil`
--
ALTER TABLE `odituratmasmil`
  ADD PRIMARY KEY (`id_odituratmasmil`);

--
-- Indexes for table `odituratotjen`
--
ALTER TABLE `odituratotjen`
  ADD PRIMARY KEY (`id_odituratotjen`);

--
-- Indexes for table `odituratotmil`
--
ALTER TABLE `odituratotmil`
  ADD PRIMARY KEY (`id_odituratotmil`);

--
-- Indexes for table `odituratotmilti`
--
ALTER TABLE `odituratotmilti`
  ADD PRIMARY KEY (`id_odituratotmilti`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`),
  ADD KEY `fk_id_matra` (`id_matra`);

--
-- Indexes for table `pangmatdar`
--
ALTER TABLE `pangmatdar`
  ADD PRIMARY KEY (`id_pangmatdar`);

--
-- Indexes for table `pangmatla`
--
ALTER TABLE `pangmatla`
  ADD PRIMARY KEY (`id_pangmatla`);

--
-- Indexes for table `pangmatud`
--
ALTER TABLE `pangmatud`
  ADD PRIMARY KEY (`id_pangmatud`);

--
-- Indexes for table `pangpns`
--
ALTER TABLE `pangpns`
  ADD PRIMARY KEY (`id_pangpns`);

--
-- Indexes for table `pasal`
--
ALTER TABLE `pasal`
  ADD PRIMARY KEY (`id_pasal`),
  ADD KEY `fk_kategori_pasal` (`id_kategori`);

--
-- Indexes for table `personil`
--
ALTER TABLE `personil`
  ADD PRIMARY KEY (`nrp`),
  ADD KEY `fk_personil_akses` (`akses`),
  ADD KEY `fk_person_pangkat` (`pangkat`),
  ADD KEY `fk_person_suku` (`suku`),
  ADD KEY `fk_person_goldar` (`goldar`),
  ADD KEY `fk_person_agama` (`agama`),
  ADD KEY `fk_person_status` (`status`);

--
-- Indexes for table `pns`
--
ALTER TABLE `pns`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `FK_pns_gol` (`gol`),
  ADD KEY `FK_pns_suku` (`suku`),
  ADD KEY `FK_pns_goldar` (`goldar`),
  ADD KEY `FK_pns_agama` (`agama`),
  ADD KEY `FK_pns_statkawin` (`status`),
  ADD KEY `FK_pns_akses` (`akses`);

--
-- Indexes for table `proses_perkara`
--
ALTER TABLE `proses_perkara`
  ADD PRIMARY KEY (`no_reg`),
  ADD KEY `fk_akses` (`akses`),
  ADD KEY `FK_perkara_masmil` (`masmil`);

--
-- Indexes for table `statkawin`
--
ALTER TABLE `statkawin`
  ADD PRIMARY KEY (`id_statkawin`);

--
-- Indexes for table `suku`
--
ALTER TABLE `suku`
  ADD PRIMARY KEY (`id_suku`);

--
-- Indexes for table `tersangka`
--
ALTER TABLE `tersangka`
  ADD KEY `fk_tsk_noreg` (`no_reg`),
  ADD KEY `fk_tsk_person` (`id_personil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nrp` (`nrp`),
  ADD KEY `fk_user_akses` (`akses`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `goldar`
--
ALTER TABLE `goldar`
  MODIFY `id_goldar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoripasal`
--
ALTER TABLE `kategoripasal`
  MODIFY `id_kategoripasal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kotamaad`
--
ALTER TABLE `kotamaad`
  MODIFY `id_kotamaad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kotamaal`
--
ALTER TABLE `kotamaal`
  MODIFY `id_kotamaal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kotamaau`
--
ALTER TABLE `kotamaau`
  MODIFY `id_kotamaau` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kotamaluar`
--
ALTER TABLE `kotamaluar`
  MODIFY `id_kotamaluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kotamamabes`
--
ALTER TABLE `kotamamabes`
  MODIFY `id_kotamamabes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matra`
--
ALTER TABLE `matra`
  MODIFY `id_matra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `odituratbabinkum`
--
ALTER TABLE `odituratbabinkum`
  MODIFY `id_odituratbabinkum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `odituratmasmil`
--
ALTER TABLE `odituratmasmil`
  MODIFY `id_odituratmasmil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `odituratotjen`
--
ALTER TABLE `odituratotjen`
  MODIFY `id_odituratotjen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `odituratotmil`
--
ALTER TABLE `odituratotmil`
  MODIFY `id_odituratotmil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `odituratotmilti`
--
ALTER TABLE `odituratotmilti`
  MODIFY `id_odituratotmilti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pangmatdar`
--
ALTER TABLE `pangmatdar`
  MODIFY `id_pangmatdar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pangmatla`
--
ALTER TABLE `pangmatla`
  MODIFY `id_pangmatla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pangmatud`
--
ALTER TABLE `pangmatud`
  MODIFY `id_pangmatud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pangpns`
--
ALTER TABLE `pangpns`
  MODIFY `id_pangpns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasal`
--
ALTER TABLE `pasal`
  MODIFY `id_pasal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statkawin`
--
ALTER TABLE `statkawin`
  MODIFY `id_statkawin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suku`
--
ALTER TABLE `suku`
  MODIFY `id_suku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `fk_case_noreg` FOREIGN KEY (`no_reg`) REFERENCES `proses_perkara` (`no_reg`),
  ADD CONSTRAINT `fk_case_pasal` FOREIGN KEY (`id_pasal`) REFERENCES `pasal` (`id_pasal`);

--
-- Constraints for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD CONSTRAINT `fk_id_matra` FOREIGN KEY (`id_matra`) REFERENCES `matra` (`id_matra`);

--
-- Constraints for table `pasal`
--
ALTER TABLE `pasal`
  ADD CONSTRAINT `fk_kategori_pasal` FOREIGN KEY (`id_kategori`) REFERENCES `kategoripasal` (`id_kategoripasal`);

--
-- Constraints for table `personil`
--
ALTER TABLE `personil`
  ADD CONSTRAINT `fk_person_agama` FOREIGN KEY (`agama`) REFERENCES `agama` (`id_agama`),
  ADD CONSTRAINT `fk_person_goldar` FOREIGN KEY (`goldar`) REFERENCES `goldar` (`id_goldar`),
  ADD CONSTRAINT `fk_person_pangkat` FOREIGN KEY (`pangkat`) REFERENCES `pangkat` (`id_pangkat`),
  ADD CONSTRAINT `fk_person_status` FOREIGN KEY (`status`) REFERENCES `statkawin` (`id_statkawin`),
  ADD CONSTRAINT `fk_person_suku` FOREIGN KEY (`suku`) REFERENCES `suku` (`id_suku`),
  ADD CONSTRAINT `fk_personil_akses` FOREIGN KEY (`akses`) REFERENCES `users` (`akses`);

--
-- Constraints for table `pns`
--
ALTER TABLE `pns`
  ADD CONSTRAINT `FK_pns_agama` FOREIGN KEY (`agama`) REFERENCES `agama` (`id_agama`),
  ADD CONSTRAINT `FK_pns_akses` FOREIGN KEY (`akses`) REFERENCES `akses` (`nama_akses`),
  ADD CONSTRAINT `FK_pns_gol` FOREIGN KEY (`gol`) REFERENCES `pangpns` (`id_pangpns`),
  ADD CONSTRAINT `FK_pns_goldar` FOREIGN KEY (`goldar`) REFERENCES `goldar` (`id_goldar`),
  ADD CONSTRAINT `FK_pns_statkawin` FOREIGN KEY (`status`) REFERENCES `statkawin` (`id_statkawin`),
  ADD CONSTRAINT `FK_pns_suku` FOREIGN KEY (`suku`) REFERENCES `suku` (`id_suku`);

--
-- Constraints for table `proses_perkara`
--
ALTER TABLE `proses_perkara`
  ADD CONSTRAINT `FK_perkara_masmil` FOREIGN KEY (`masmil`) REFERENCES `odituratmasmil` (`id_odituratmasmil`),
  ADD CONSTRAINT `fk_akses` FOREIGN KEY (`akses`) REFERENCES `users` (`akses`);

--
-- Constraints for table `tersangka`
--
ALTER TABLE `tersangka`
  ADD CONSTRAINT `fk_tsk_noreg` FOREIGN KEY (`no_reg`) REFERENCES `proses_perkara` (`no_reg`),
  ADD CONSTRAINT `fk_tsk_person` FOREIGN KEY (`id_personil`) REFERENCES `personil` (`nrp`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_akses` FOREIGN KEY (`akses`) REFERENCES `akses` (`nama_akses`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
