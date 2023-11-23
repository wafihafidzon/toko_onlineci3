-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 12:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu 1', 'Sepatu Merk All Star', 'Pakaian Pria', 300000, 99, 'sepatu.jpg\r\n'),
(2, 'Kamera', 'Kamera Canon eos 700d', 'Elektronik', 5900000, 5, 'kamera.jpg'),
(3, 'Redmi 10 2022', 'Redmi 10 2022', 'Elektronik', 2000000, 29, 'hp.jpg'),
(4, 'Laptop Vaio', 'Laptop Vaio Ram 8 Gb', 'Elektronik', 4500000, 39, 'laptop.jpg'),
(8, 'Jam Asli', 'Jam Tangan Mahal', 'Pakaian Pria', 10000000, 9, 'jam1.jpg'),
(10, 'Sepatu 1', 'asdasd', 'pakaian wanita', 120000, 11, 'Screenshot_2023-11-13_121536.png'),
(11, 'oyen', 'kucing', 'peralatan olahraga', 6666666, 6, 'kucing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-14 00:00:00', '2023-11-15 20:46:23'),
(2, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-14 00:00:00', '2023-11-15 20:47:01'),
(3, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-14 00:00:00', '2023-11-15 20:47:40'),
(4, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-14 22:00:21', '2023-11-15 22:00:21'),
(5, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-15 04:44:12', '2023-11-16 04:44:12'),
(6, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-15 04:44:53', '2023-11-16 04:44:53'),
(7, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-15 04:45:07', '2023-11-16 04:45:07'),
(8, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-15 04:46:49', '2023-11-16 04:46:49'),
(9, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-15 04:48:12', '2023-11-16 04:48:12'),
(10, '20 / Muhammad Nurwafi Hafidzon', 'JL. Ikan Piranha Atas', '2023-11-16 08:55:11', '2023-11-17 08:55:11'),
(11, '17 / Muhammad Fidho Pratama', 'Jalanin aja dulu', '2023-11-16 08:59:40', '2023-11-17 08:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int NOT NULL,
  `id_invoice` int NOT NULL,
  `id_barang` int NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int NOT NULL,
  `harga` int NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 3, 1, 'Sepatu 1', 1, 300000, ''),
(2, 3, 2, 'Kamera', 1, 5900000, ''),
(3, 4, 1, 'Sepatu 1', 3, 300000, ''),
(4, 6, 1, 'Sepatu 1', 1, 300000, ''),
(5, 7, 2, 'Kamera', 1, 5900000, ''),
(7, 9, 2, 'Kamera', 2, 5900000, ''),
(8, 10, 1, 'Sepatu 1', 1, 300000, ''),
(9, 10, 2, 'Kamera', 2, 5900000, ''),
(10, 10, 4, 'Laptop Vaio', 1, 4500000, ''),
(11, 10, 8, 'Jam Asli', 1, 10000000, ''),
(12, 10, 10, 'Sepatu 1', 1, 120000, ''),
(13, 10, 3, 'Redmi 10 2022', 1, 2000000, ''),
(14, 11, 11, 'oyen', 1, 6666666, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    where id_brg = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'test', 'test', 'test', 2),
(2, 'test', 'test1', '1234', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
