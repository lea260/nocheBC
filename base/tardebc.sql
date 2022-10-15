-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 15, 2022 at 08:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tardebc`
--
CREATE DATABASE IF NOT EXISTS `tardebc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tardebc`;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(1, 'codigo01editadoh', 'descripcion26editado', '26.00', '2021-09-15', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(2, 'co444444', 'descripcion editada', '20.90', '2013-08-15', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(5, 'cod04', 'descripcion 03', '2.00', '2020-02-28', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(6, 'cod06', 'desc3', '23.30', '2012-12-30', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(9, 'prefijocodigo03', 'descripcion26', '26.00', '2013-12-29', '');
INSERT INTO `productos` (`id_productos`, `codigo`, `descripcion`, `precio`, `fecha`, `url`) VALUES(11, 'codigo12', 'descripcion26', '26.00', '2013-12-29', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`),
  ADD UNIQUE KEY `codigo_UNIQUE` (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
