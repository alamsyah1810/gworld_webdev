-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2019 at 09:34 AM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-6+ubuntu16.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store18_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_temp_user` varchar(20) NOT NULL,
  `id_game` varchar(15) NOT NULL,
  `total_harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `id_temp_user`, `id_game`, `total_harga`) VALUES
('CART001', 'U!', '1', 'st001', '300000'),
('CART002', 'U2', '1', 'st001', '20000'),
('CART003', 'U3', '1', 'st001', '230000');

-- --------------------------------------------------------

--
-- Table structure for table `detail_voucher`
--

CREATE TABLE `detail_voucher` (
  `id_hash` varchar(25) NOT NULL,
  `id_voucher` varchar(10) NOT NULL,
  `status_voucher` varchar(10) NOT NULL,
  `id_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_voucher`
--

INSERT INTO `detail_voucher` (`id_hash`, `id_voucher`, `status_voucher`, `id_transaksi`) VALUES
('HASH001', 'VRSTEAM001', '1', 'TR001'),
('HASH002', 'VRSTEAM002', '1', 'TR002'),
('HASH003', 'VRSTEAM003', '1', 'TR003');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` varchar(10) NOT NULL,
  `nama_game` varchar(25) NOT NULL,
  `status_game` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `nama_game`, `status_game`) VALUES
('md01', 'Mobile Legend', '1'),
('st01', 'Steam', '1'),
('fr01', 'Free Fire', '1'),
('pu01', 'PUBG', '1'),
('cod01', 'Call Of Duty', '1');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metodepembayaran` varchar(20) NOT NULL,
  `nama_metodepembayaran` varchar(20) NOT NULL,
  `status_metodepembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metodepembayaran`, `nama_metodepembayaran`, `status_metodepembayaran`) VALUES
('GOPAY001', 'GOPAY', 1),
('OVO001', 'OVO', 1),
('BCA001', 'BCA', 1),
('INDOMARET001', 'INDOMARET', 1),
('ALFAMART001', 'ALFAMART', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transksi`
--

CREATE TABLE `transksi` (
  `id_transksi` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `total_harga` varchar(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_metodepembayaran` varchar(15) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `id_temp_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transksi`
--

INSERT INTO `transksi` (`id_transksi`, `date`, `total_harga`, `id_user`, `id_metodepembayaran`, `no_rekening`, `id_temp_user`) VALUES
('TR001', '2019-01-01', '270000', 'USER1', 'GOPAY001', '18941240214', 'UTEMP001'),
('TR002', '2019-01-01', '72000', 'USER2', 'OVO001', '128492U3320', 'UTEMP002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `password_user` varchar(20) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `telp_user` varchar(20) NOT NULL,
  `status_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `password_user`, `nama_user`, `email_user`, `telp_user`, `status_user`) VALUES
('alamsyah6969', 'alamsyah6969', 'alamsyah wijaya', 'alamsyah6969@yahoo.com', '082749273826', 1),
('alvin6969', 'alvin6969', 'alvin hariyono', 'alvinhariyono@hotmail.com', '082234223826', 1),
('u3', 'sss', 'sss', 'sss', 'sss', 1),
('u4', '222', '222', '222', '222', 1),
('u5', '12', 'halo', '222', '222', 1),
('u6', 'qwdbwqdnqo', 'camili1233', '222', 'qndowqojhqdiqow', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` varchar(10) NOT NULL,
  `nominal_voucher` varchar(25) NOT NULL,
  `id_game` varchar(10) NOT NULL,
  `harga_voucher` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `nominal_voucher`, `id_game`, `harga_voucher`) VALUES
('VRSTEAM001', '60000', 'md01', '60000'),
('VRSTEAM002', '72000', 'md01', '75000'),
('VRSTEAM003', '99000', 'st01', '102000'),
('VRSTEAM004', '250000', 'st01', '270000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
