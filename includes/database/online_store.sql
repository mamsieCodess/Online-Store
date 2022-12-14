-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2022 at 08:33 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `customer_id` int(11) NOT NULL,
  `items_amount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `look` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `look`, `quantity`, `price`) VALUES
(1, 'LEATHER SLINGBACK SHOES', 'https://static.zara.net/photos///2022/I/1/1/p/2217/010/102/2/w/529/2217010102_6_1_1.jpg?ts=1660210041576', 'https://static.zara.net/photos///2022/I/1/1/p/2217/010/102/2/w/529/2217010102_1_1_1.jpg?ts=1660039197643', 0, 1000),
(2, 'HIGH-HEEL SLINGBACK SHOES', 'https://static.zara.net/photos///2022/I/1/1/p/2214/010/009/2/w/750/2214010009_6_5_1.jpg?ts=1657725358727', 'https://static.zara.net/photos///2022/I/1/1/p/2214/010/009/2/w/750/2214010009_2_1_1.jpg?ts=1657209580564', 5, 1000),
(3, 'FLAT SLINGBACK SHOES WITH RAISED DETAIL', 'https://static.zara.net/photos///2022/V/1/1/p/2530/910/098/2/w/750/2530910098_6_2_1.jpg?ts=1648741940849', 'https://static.zara.net/photos///2022/V/1/1/p/2530/910/098/2/w/750/2530910098_2_1_1.jpg?ts=1648637952533', 0, 1000),
(4, 'ECRU WHITE LEATHER HIGH-HEEL SHOES', 'https://static.zara.net/photos///2022/V/1/1/p/2259/910/002/2/w/750/2259910002_6_2_1.jpg?ts=1645442267668', 'https://static.zara.net/photos///2022/V/1/1/p/2259/910/002/2/w/750/2259910002_1_1_1.jpg?ts=1645007348697', 5, 1000),
(5, 'MEDIUM HEEL LEATHER SANDAL\r\n\r\n', 'https://static.zara.net/photos///2022/I/1/1/p/2306/010/002/2/w/750/2306010002_6_2_1.jpg?ts=1652081626218', 'https://static.zara.net/photos///2022/I/1/1/p/2306/010/002/2/w/750/2306010002_1_1_1.jpg?ts=1651590574236', 5, 1000),
(6, 'HIGH-HEEL SHOES WITH FAUX PEARL BEADS', 'https://static.zara.net/photos///2022/V/1/1/p/2245/910/050/2/w/750/2245910050_6_2_1.jpg?ts=1651162131755', 'https://static.zara.net/photos///2022/V/1/1/p/2245/910/050/2/w/1920/2245910050_1_1_1.jpg?ts=1651148787072', 5, 1000),
(7, 'PURPLE MID-HEEL SLINGBACK SHOES', 'https://static.zara.net/photos///2022/S/1/1/p/2224/910/080/2/w/750/2224910080_6_2_1.jpg?ts=1658244250978', 'https://static.zara.net/photos///2022/V/1/1/p/2224/910/080/2/w/750/2224910080_1_1_1.jpg?ts=1645607588575', 5, 1000),
(8, 'HIGH-HEEL SLINGBACK SHOES WITH SHINY DETAIL', 'https://static.zara.net/photos///2022/V/1/1/p/1222/910/060/2/w/750/1222910060_6_2_1.jpg?ts=1643101380964', 'https://static.zara.net/photos///2022/V/1/1/p/1222/910/060/2/w/750/1222910060_2_1_1.jpg?ts=1647342145782', 5, 1000),
(9, 'BLUE MID-HEEL SLINGBACK SHOES', 'https://static.zara.net/photos///2022/V/1/1/p/2220/910/009/2/w/750/2220910009_6_2_1.jpg?ts=1645437391142', 'https://static.zara.net/photos///2022/V/1/1/p/2220/910/009/2/w/750/2220910009_2_1_1.jpg?ts=1645012626042', 5, 1000),
(10, 'BLACK LEATHER HIGH-HEEL SANDALS', 'https://static.zara.net/photos///2022/I/1/1/p/2327/010/040/2/w/750/2327010040_6_2_1.jpg?ts=1657005915631', 'https://static.zara.net/photos///2022/I/1/1/p/2327/010/040/2/w/750/2327010040_1_1_1.jpg?ts=1657101974743', 5, 800),
(11, 'HIGH-HEEL SANDALS WITH FEATHERS', 'https://static.zara.net/photos///2022/I/1/1/p/3307/010/040/2/w/1920/3307010040_6_5_1.jpg?ts=1659520630132', 'https://static.zara.net/photos///2022/I/1/1/p/3307/010/040/2/w/750/3307010040_2_2_1.jpg?ts=1659454538589', 5, 1200),
(12, 'SLINGBACK PLATFORM SHOES WITH RHINESTONES', 'https://static.zara.net/photos///2023/V/1/1/p/2202/110/808/2/w/750/2202110808_6_5_1.jpg?ts=1669020099925', 'https://static.zara.net/photos///2023/V/1/1/p/2202/110/808/2/w/750/2202110808_2_1_1.jpg?ts=1669207184809', 5, 1500),
(13, 'RHINESTONE BLOCK HEEL KNEE-HIGH BOOTS', 'https://static.zara.net/photos///2022/I/1/1/p/3047/010/092/2/w/750/3047010092_6_3_1.jpg?ts=1667838662338', 'https://static.zara.net/photos///2022/I/1/1/p/3047/010/092/2/w/750/3047010092_1_1_1.jpg?ts=1668010787089', 5, 1000),
(14, 'TRACK SOLE LOAFERS WITH BUCKLE', 'https://static.zara.net/photos///2021/I/1/1/p/1503/810/040/2/w/750/1503810040_6_2_1.jpg?ts=1629108757478', 'https://static.zara.net/photos///2021/I/1/1/p/1503/810/040/2/w/750/1503810040_1_1_1.jpg?ts=1632999478009', 5, 1000),
(15, 'FAUX FUR SLINGBACK SHOES - LIMITED EDITION', 'https://static.zara.net/photos///2022/I/1/1/p/4500/010/002/2/w/750/4500010002_6_1_1.jpg?ts=1665474918492', 'https://static.zara.net/photos///2022/I/1/1/p/4500/010/002/2/w/750/4500010002_1_1_1.jpg?ts=1665474942066', 5, 1000),
(16, 'BEIGE FLAT SLINGBACK SHOES WITH RAISED DETAIL', 'https://static.zara.net/photos///2022/V/1/1/p/2530/910/098/2/w/750/2530910098_6_2_1.jpg?ts=1648741940849', 'https://static.zara.net/photos///2022/V/1/1/p/2530/910/098/2/w/750/2530910098_1_1_1.jpg?ts=1648637953146', 5, 1000),
(17, 'HIGH-HEEL METHACRYLATE SANDALS', 'https://static.zara.net/photos///2022/I/1/1/p/1306/010/070/2/w/750/1306010070_6_2_1.jpg?ts=1652177328492', 'https://static.zara.net/photos///2022/I/1/1/p/1306/010/070/2/w/750/1306010070_1_1_1.jpg?ts=1656326350452', 5, 2000),
(18, 'BLACK HIGH-HEELED SANDALS WITH RHINESTONES', 'https://static.zara.net/photos///2022/I/1/1/p/3325/910/040/2/w/750/3325910040_6_2_1.jpg?ts=1655287080331', 'https://static.zara.net/photos///2022/I/1/1/p/3325/910/040/2/w/1920/3325910040_2_1_1.jpg?ts=1655301456130', 5, 1000),
(19, 'RED HIGH-HEEL STRAPPY SANDALS', 'https://static.zara.net/photos///2022/V/1/1/p/3347/910/020/2/w/750/3347910020_6_2_1.jpg?ts=1655120304289', 'https://static.zara.net/photos///2022/V/1/1/p/3347/910/020/2/w/750/3347910020_1_1_1.jpg?ts=1655120304585', 5, 1000),
(20, 'PINK HIGH-HEEL SHOES WITH FAUX PEARL BEADS', 'https://static.zara.net/photos///2022/V/1/1/p/2245/910/050/2/w/750/2245910050_6_2_1.jpg?ts=1651162131755', 'https://static.zara.net/photos///2022/V/1/1/p/2245/910/050/2/w/750/2245910050_1_1_1.jpg?ts=1651148787072', 5, 1000),
(21, 'BLUISH-PURPLE EMBELLISHED VINYL HIGH-HEEL SHOES', 'https://static.zara.net/photos///2022/S/1/1/p/2224/010/075/2/w/750/2224010075_6_2_1.jpg?ts=1662967570875', 'https://static.zara.net/photos///2022/I/1/1/p/2224/010/075/2/w/750/2224010075_2_2_1.jpg?ts=1659000312139', 5, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
