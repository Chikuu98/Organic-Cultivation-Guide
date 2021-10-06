-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 06:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
  `AccNo` int(200) DEFAULT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `Name`, `Email`, `Address`, `Mobile`, `NIC`, `AccNo`, `Password`) VALUES
(2, 'Lahiru', 'lahiru@gmail.com', 'Balapitiya, Galle.', 756789456, 2147483647, 87654321, '$2y$10$85EPiPsagAwriT9XLsV5keSUH0Sfkp76w6qhCUcSZhNpECIp3PxjK'),
(3, 'Venura', 'venura@gmail.com', 'Aparekka, Matara.', 729502906, 2147483647, 32145687, '$2y$10$ZPaPqDWpCuEU13Xv6ITR8.cDXq.ooi1Kv/m0.tLGB94edzpcg/wXO'),
(4, 'Vihanga', 'vihanga@gmail.com', 'kiribathgoda.', 703533330, 948984643, 2147483647, '$2y$10$Z.JoYOyw4wiRsQQUSrogAOihrGxEPMiEsJvs/t1aoQby3zQSwd.XW'),
(5, 'Amish', 'amish@gmail.com', 'Kekanadura, Matara.', 714955989, 985287451, 92684848, '$2y$10$pTtS.LfE53ehTCW7bzDvmeu1UMa1h9Kl8kJbvPhGbssWMt4h0Wmx6'),
(6, 'Chiran', 'chiran@gmail.com', '253/B, Puwakwaththa, Aparekka, Matara.', 779980990, 982482380, 12345678, '$2y$10$LGp9JfItKpJjgMwQ645WhOhog08xtWs/zAAJVsv7oBCDQcDiMiwMi');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
