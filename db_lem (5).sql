-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 11:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bom`
--

CREATE TABLE `tb_bom` (
  `kode_bom` varchar(100) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `total_harga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bom`
--

INSERT INTO `tb_bom` (`kode_bom`, `kode_produk`, `tanggal`, `total_harga`) VALUES
('BOM-00001', 'PD-01', '2023/01/10', 102003),
('BOM-00002', 'PD-02', '2023/01/10', 400113),
('BOM-00034', 'PD-02', '2023/01/10', 20000),
('BOM-00056', 'PD-01', '2023/01/10', 1400301);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bom_list`
--

CREATE TABLE `tb_bom_list` (
  `kode_bom_list` int(11) NOT NULL,
  `kode_bom` varchar(100) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `satuan` varchar(10) NOT NULL DEFAULT 'etc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bom_list`
--

INSERT INTO `tb_bom_list` (`kode_bom_list`, `kode_bom`, `kode_produk`, `quantity`, `satuan`) VALUES
(13, 'BOM-00001', 'HAN-01', 1003, 'Pcs'),
(14, 'BOM-00001', 'HAN-02', 1000, 'Ml'),
(18, 'BOM-00056', 'HAN-01', 1, 'Pcs'),
(19, 'BOM-00056', 'HAN-02', 300, 'Ml'),
(20, 'BOM-00056', 'HAN-03', 700, 'Gram'),
(22, 'BOM-00002', 'HAN-01', 2, 'etc'),
(23, 'BOM-00002', 'HAN-02', 70, 'etc'),
(24, 'BOM-00002', 'HAN-03', 200, 'etc'),
(25, 'BOM-00001', 'HAN-03', 50, 'etc'),
(26, 'BOM-00034', 'HAN-03', 10, 'etc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mo`
--

CREATE TABLE `tb_mo` (
  `kode_mo` varchar(20) NOT NULL,
  `kode_bom` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mo`
--

INSERT INTO `tb_mo` (`kode_mo`, `kode_bom`, `quantity`, `status`) VALUES
('MO-01', 'BOM-00001', 10, 5),
('MO-2', 'BOM-00056', 10, 5),
('MO-54', 'BOM-00002', 200, 3),
('MO12', 'BOM-00034', 70, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`kode_produk`, `nama_produk`, `deskripsi_produk`, `gambar`, `kuantitas`, `harga`, `status`) VALUES
('HAN-01', 'Plastik Kemasan', 'Bahan untuk packing', 'placeholder.png', 60, 1, 2),
('HAN-02', 'AIr', 'Campuran untuk membuat lem', 'placeholder.png', 7500, 1, 2),
('HAN-03', 'Tepung Kanji', 'Bahan untuk membuat lem', 'placeholder.png', 9302, 2000, 2),
('PD-01', 'Lem Kertas', 'Lem Kertas Bagus', 'placeholder.png', 470, 2500, 1),
('PD-02', 'Lem Singa', 'Lem Kertas cuman lebih kuat', 'placeholder.png', 90, 5000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfq`
--

CREATE TABLE `tb_rfq` (
  `kode_rfq` varchar(200) NOT NULL,
  `kode_vendor` int(11) NOT NULL,
  `tanggal_transaksi` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `metode_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rfq`
--

INSERT INTO `tb_rfq` (`kode_rfq`, `kode_vendor`, `tanggal_transaksi`, `status`, `total_harga`, `metode_pembayaran`) VALUES
('QO-0', 3, '2023/01/10', 3, 600100000, 2),
('QO-02', 3, '2023/01/10', 3, 10000, 1),
('QO-05', 3, '2023/01/10', 0, 0, 0),
('QO-1', 3, '2023/01/10', 3, 46010500, 1),
('QO-23', 3, '2023/01/10', 3, 3500, 1),
('QO-234', 3, '2023/01/10', 3, 20000000, 1),
('QO-3', 3, '2023/01/10', 3, 10000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rfq_list`
--

CREATE TABLE `tb_rfq_list` (
  `kode_rfq_list` int(11) NOT NULL,
  `kode_rfq` varchar(200) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL DEFAULT 'etc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_rfq_list`
--

INSERT INTO `tb_rfq_list` (`kode_rfq_list`, `kode_rfq`, `kode_produk`, `quantity`, `satuan`) VALUES
(9, 'QO-1', 'HAN-01', 80, 'Pcs'),
(10, 'QO-1', 'HAN-01', 420, 'Pcs'),
(11, 'QO-1', 'HAN-02', 10000, 'Ml'),
(12, 'QO-1', 'HAN-03', 23000, 'Gram'),
(13, 'QO-0', 'HAN-02', 100000, 'Ml'),
(14, 'QO-0', 'HAN-03', 300000, 'Gram'),
(15, 'QO-02', 'HAN-02', 10000, 'Ml'),
(16, 'QO-23', 'HAN-02', 3500, 'Ml'),
(17, 'QO-3', 'HAN-02', 10000, 'Ml'),
(18, 'QO-234', 'HAN-03', 10000, 'etc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales`
--

CREATE TABLE `tb_sales` (
  `kode_sales` varchar(200) NOT NULL,
  `kode_customer` int(11) NOT NULL,
  `tanggal_transaksi` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `metode_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sales`
--

INSERT INTO `tb_sales` (`kode_sales`, `kode_customer`, `tanggal_transaksi`, `status`, `total_harga`, `metode_pembayaran`) VALUES
('SL-001', 4, '2023/01/10', 3, 250000, 2),
('SL-002', 4, '2023/01/10', 3, 400000, 1),
('Sl-2312', 4, '2023/01/10', 3, 375000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sales_list`
--

CREATE TABLE `tb_sales_list` (
  `kode_sales_list` int(11) NOT NULL,
  `kode_sales` varchar(200) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_sales_list`
--

INSERT INTO `tb_sales_list` (`kode_sales_list`, `kode_sales`, `kode_produk`, `quantity`, `satuan`) VALUES
(9, 'SL-002', 'PD-01', 140, 'etc'),
(10, 'SL-002', 'PD-02', 10, 'etc'),
(11, 'SL-001', 'PD-01', 100, 'etc'),
(12, 'Sl-2312', 'PD-02', 70, 'etc'),
(13, 'Sl-2312', 'PD-01', 10, 'etc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stakeholder`
--

CREATE TABLE `tb_stakeholder` (
  `kode` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stakeholder`
--

INSERT INTO `tb_stakeholder` (`kode`, `nama`, `telpon`, `alamat`, `level`) VALUES
(3, 'Minji', '081230234595', 'Korea', 1),
(4, 'Ahmad Zulfan Najib', '081230234595', 'Jl. Diponegoro I Bululawang', 2);

-- --------------------------------------------------------

--
-- Table structure for table `temp_produce`
--

CREATE TABLE `temp_produce` (
  `id` int(11) NOT NULL,
  `kode_bom_list` int(11) NOT NULL,
  `quantity_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bom`
--
ALTER TABLE `tb_bom`
  ADD PRIMARY KEY (`kode_bom`);

--
-- Indexes for table `tb_bom_list`
--
ALTER TABLE `tb_bom_list`
  ADD PRIMARY KEY (`kode_bom_list`);

--
-- Indexes for table `tb_mo`
--
ALTER TABLE `tb_mo`
  ADD PRIMARY KEY (`kode_mo`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `tb_rfq`
--
ALTER TABLE `tb_rfq`
  ADD PRIMARY KEY (`kode_rfq`);

--
-- Indexes for table `tb_rfq_list`
--
ALTER TABLE `tb_rfq_list`
  ADD PRIMARY KEY (`kode_rfq_list`);

--
-- Indexes for table `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`kode_sales`);

--
-- Indexes for table `tb_sales_list`
--
ALTER TABLE `tb_sales_list`
  ADD PRIMARY KEY (`kode_sales_list`);

--
-- Indexes for table `tb_stakeholder`
--
ALTER TABLE `tb_stakeholder`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `temp_produce`
--
ALTER TABLE `temp_produce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bom_list`
--
ALTER TABLE `tb_bom_list`
  MODIFY `kode_bom_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_rfq_list`
--
ALTER TABLE `tb_rfq_list`
  MODIFY `kode_rfq_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_sales_list`
--
ALTER TABLE `tb_sales_list`
  MODIFY `kode_sales_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_stakeholder`
--
ALTER TABLE `tb_stakeholder`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `temp_produce`
--
ALTER TABLE `temp_produce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
