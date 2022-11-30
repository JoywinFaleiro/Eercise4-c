-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 01:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4-c`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Joywin ', 'j', 'j@j.in', '1'),
(2, 'a', 'a', 'a@a.com', '1'),
(3, 'c', 'c', 'c@c.in', '1'),
(4, 'd', 'd', 'd@d.in', '1'),
(5, 'e', 'e', 'e@e.in', '1'),
(6, 'm', 'm', 'a@a.in', '1'),
(7, 'Joywin', 'faleiroJP', 'joywinfaleiroz@gmail.com', 'faleiro'),
(8, 'Messi', 'ms10', 'argentina@worldcup.com', '10'),
(9, 'h', 'h', 'hh@h.in', '1'),
(10, 'x', 'x', 'x@x.in', 'x'),
(11, 'joy', 'jj', 'jj@j.in', '1'),
(12, 'fd', 'fd', 'dss@gmh.in', 'rrr'),
(13, 'fere', 'wwfffg', 'e@j.in', '11111'),
(14, 'ttt', 'weer', 'dd@ss.in', '1234'),
(15, 'qqq', 'qqq', 'qq@q.in', '1234'),
(16, 'gggg', 'ggg', 'ggg@g.in', '$2y$10$VsCMShrwxtHgQPjtDAtRAOXJUrQdEuzO.'),
(17, 'ii', 'ii', 'i@i.in', '$2y$10$y79sU5Soj6EovIBpEWhQEeVtif5AHV4Px'),
(18, 'z', 'z', 'z@z.in', '$2y$10$CPvc5SHp3fiEEcfhfRHYQO5eHMuB042LE'),
(19, 'bb', 'b', 'b@b.com', '$2y$10$s6PA.x3lR3o4JE7B.oMfQ.M.628pHRPep'),
(20, 'week', 'day', 'wen@d.in', '$2y$10$TAuIXpefTyXJ.bIj2sTG8uBRcmj.7zPyVComfOC1bqkUT8985/8ZW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
