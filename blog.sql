-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 02:07 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) NOT NULL,
  `isi` varchar(500) NOT NULL,
  `tag` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `tag`, `waktu`) VALUES
(6, 'sosiologi 2', '<p>Ya&hellip; Sosiologi! Nah, sering banget, nih, kalo gue ketemu orang, mereka denger sebuah ilmu yang bernama Sosiologi aja udah &ldquo;sensi&rdquo; duluan. Kesannya kayak Sosiologi itu ilmu yang boring, gak explorable, dll. Padahal, sebenernya banyak banget yang dibahas di Sosiologi, tapi kayaknya cabang ilmu ini dianaktirikan karena banyaknya miskonsepsi serta salah kaprah. Hayo! Jangan-jangan, lo termasuk salah satu dari yang meremehkan Sosiologi, nih! Kalo iya juga gak apa-apa, kok. Justru', 'sosial', '2018-09-28 07:34:53'),
(7, 'google', '<p>Klik&nbsp;<a href=\"http://google.com\">disini&nbsp;</a>untuk&nbsp;mencari&nbsp;informasi</p>', 'bebas', '2018-09-28 08:43:10'),
(9, 'tes3', '<p><strong>asadadad</strong></p>\r\n', '', '2018-10-26 14:26:07'),
(10, 'mkjkj', '<p>kjkjkm</p>\r\n', 'mnm', '2018-11-15 09:53:31'),
(11, 'asasa', '<p>asasasas<em>&nbsp;asasasasa</em></p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:http://localhost/cba6ec9a-8e3d-45bc-aa7c-6d3eb5194bb4\" width=\"621\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>sasasas</p>\r\n\r\n<p>asasa</p>\r\n\r\n<p>sasa</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '2018-12-11 04:08:52'),
(12, 'asasasasa', '<p>sqasas</p>\r\n', 'asasas', '2019-04-12 07:49:45'),
(13, ',m,m,m', '<p>,m,mljljkmn</p>\r\n', 'kjjkj', '2019-04-21 07:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
