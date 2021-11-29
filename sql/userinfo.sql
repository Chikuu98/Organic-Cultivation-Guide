-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 04:28 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `ID` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Mobile` int(200) NOT NULL,
  `NIC` int(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `Name`, `Email`, `Address`, `Mobile`, `NIC`, `Password`) VALUES
(3, 'Venura', 'venura@gmail.com', 'Aparekka, Matara.', 729502906, 2147483647, '$2y$10$ZPaPqDWpCuEU13Xv6ITR8.cDXq.ooi1Kv/m0.tLGB94edzpcg/wXO'),
(4, 'Vihanga', 'vihanga@gmail.com', 'kiribathgoda.', 703533330, 948984643, '$2y$10$Z.JoYOyw4wiRsQQUSrogAOihrGxEPMiEsJvs/t1aoQby3zQSwd.XW'),
(5, 'Amish', 'amish@gmail.com', 'Kekanadura, Matara.', 714955989, 985287451, '$2y$10$pTtS.LfE53ehTCW7bzDvmeu1UMa1h9Kl8kJbvPhGbssWMt4h0Wmx6'),
(6, 'Chiran', 'chiran@gmail.com', '253/B, Puwakwaththa, Aparekka, Matara.', 779980990, 982482380, '$2y$10$LGp9JfItKpJjgMwQ645WhOhog08xtWs/zAAJVsv7oBCDQcDiMiwMi'),
(7, 'Saman', 'saman@gmail.com', 'Matara, Sri lanka.', 712243567, 2147483647, '$2y$10$8F8Q21ut.CpI9uBgK/4ADOfWjRJ/HLlCW.m1iXRpB5a2BW36cz.NG'),
(8, 'Basil', 'basil@mail.com', 'Colombo, Sri Lanka', 117654675, 2147483647, '$2y$10$Ol18Vcsb43ifZ.PZnoSzPukKT.V/EshdyH.ugEww9OJ35T5QgJpQi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
