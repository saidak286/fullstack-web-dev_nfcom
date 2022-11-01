-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2022 at 04:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbinventaris_kantor`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` char(5) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kondisi` text DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama`, `kondisi`, `jumlah`) VALUES
(5, 'BR001', 'Headset', 'Baik & tidak ada kerusakan', 6),
(6, 'BR002', 'Mouse', 'Rusak bagian kabel, dan 1 dongle hilang', 5),
(7, 'BR003', 'Flashdisk 128gb', 'Baik & tidak ada kerusakan', 3),
(8, 'BR004', 'Harddisk', 'Baik & tidak ada kerusakan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `lokasi` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` enum('Disetujui','Belum Disetujui') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id`, `barang_id`, `pegawai_id`, `lokasi`, `tanggal`, `jumlah`, `keterangan`) VALUES
(1, 5, 5, 'Kantor Manager', '2015-09-29', 1, 'Disetujui'),
(2, 6, 8, 'Kantor Admin', '2015-07-10', 1, 'Disetujui'),
(3, 7, 6, 'Kantor A', '2016-02-11', 2, 'Disetujui'),
(4, 8, 7, 'Kantor A', '2015-12-20', 1, 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `pegawai_id` int(45) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','manager','staff') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `pegawai_id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(5, 8, 'Galih Aditya', 'galih476@gmail.com', 'admin', '967a9f8fa757dfb5fdda6e5e08579869fb9b2ae3', 'admin', 'galih.jpg'),
(6, 5, 'Dimas Nugraha', 'dimas21@gmail.com', 'dimas', '4c16c0a77ca982173fdb5e5c9429be0588c68629', 'manager', 'dimas.jpg'),
(7, 6, 'Amanda Adellia', 'manda@gmail.com', 'amanda', '9a477b080d999703b81a1342c2b8bdf67bde44e0', 'staff', 'amanda.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` char(5) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jabatan` varchar(45) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `telepon` char(17) NOT NULL,
  `foto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jabatan`, `gender`, `alamat`, `telepon`, `foto`) VALUES
(5, '11325', 'Dimas Nugraha', 'Manager', 'L', 'Kalibata, Jakarta Selatan', '+62-857-8822-3344', 'dimas.jpg'),
(6, '11525', 'Amanda Adellia', 'Asisten Manager ', 'P', 'Cilodong, Depok', '+62-896-4566-7162', 'amanda.jpg'),
(7, '11349', 'Heru Kurniawan', 'Supervisor', 'L', 'Bintaro, Tanggerang Selatan', '+62-815-0052-1322', 'heru.jpg'),
(8, '11127', 'Galih Aditya', 'Admin', 'L', 'Citeureup, Bogor', '+62-851-1102-9803', 'galih.jpg'),
(9, '11713', 'Chika Anastasya', 'Supervisor', 'P', 'Kalideres, Jakarta barat', '+62-813-2123-4654', 'chika.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idpembelian` int(11) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `subtotal` varchar(45) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` varchar(45) NOT NULL,
  `total` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL,
  `kode_permintaan` char(7) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `kode_permintaan`, `pegawai_id`, `barang_id`, `tanggal`, `jumlah`) VALUES
(1, 'PMT0001', 8, 6, '2015-07-10', 1),
(2, 'PMT0002', 5, 5, '2015-09-29', 1),
(3, 'PMT0003', 7, 8, '2015-12-20', 1),
(4, 'PMT0004', 6, 7, '2016-02-11', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang_UNIQUE` (`kode_barang`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inventaris_pegawai1_idx` (`pegawai_id`),
  ADD KEY `fk_inventaris_barang1_idx` (`barang_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_member_pegawai1_idx` (`id`),
  ADD KEY `fk_member_pegawai1` (`pegawai_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `nip_UNIQUE` (`nip`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idpembelian`),
  ADD KEY `fk_pembelian_pegawai1_idx` (`idpegawai`),
  ADD KEY `fk_pembelian_barang1_idx` (`idbarang`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_permintaan_UNIQUE` (`kode_permintaan`),
  ADD KEY `fk_permintaan_pegawai1_idx` (`pegawai_id`),
  ADD KEY `fk_permintaan_barang1_idx` (`barang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `idpembelian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `fk_inventaris_barang1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inventaris_pegawai1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_pegawai1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_barang1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembelian_pegawai1` FOREIGN KEY (`idpegawai`) REFERENCES `pegawai` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD CONSTRAINT `fk_permintaan_barang1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_permintaan_pegawai1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
