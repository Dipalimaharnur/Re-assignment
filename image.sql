-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 08:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `image`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Password`) VALUES
(1, '21232F297A57A5A743894A0E4A801FC3', '21232F297A57A5A743894A0E4A801FC3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `albumid` int(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `adesc` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`albumid`, `name`, `adesc`, `date`, `status`) VALUES
(1, 'Food Photo Album', 'food', '2019-12-15 10:30:45', 'process'),
(2, 'Portrait Photo Album', 'human', '2019-12-15 10:30:52', 'process'),
(3, 'wwwww', 'HERIUTHIfior hioero', '2019-12-15 10:31:05', 'delete'),
(4, 'Wildlife Photo album', 'animal ', '2019-12-15 10:31:16', 'delete'),
(5, 'Wildlife Photo album', 'animal ', '2019-12-15 10:37:18', 'process'),
(6, 'HD images', 'images', '2019-12-15 16:32:35', 'process'),
(7, 'wwwwwwwwwwww', 'wwwwww wwwwwwwwwwww wwwwwwwwwwwww wwwwwwwwww', '2019-12-16 05:36:44', 'delete'),
(8, 'hdfhdf', 'mnnioer gehro oerhto ', '2019-12-16 05:37:04', 'delete'),
(9, 'qqqqqqqqqq', 'qqqqqqqq qqqqqqqqqq qqqqqq', '2019-12-16 11:06:31', 'delete'),
(10, ' ggggg d gdddddddddddddd', 'm bjjkbhjbbhbfxceetr', '2019-12-16 13:25:29', 'delete');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gid` int(10) NOT NULL,
  `aid` int(10) NOT NULL,
  `gname` varchar(1000) NOT NULL,
  `gimages` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gid`, `aid`, `gname`, `gimages`, `date`, `status`) VALUES
(1, 6, 'HD images', 'bats.jpg', '2019-12-16 10:13:03', 'delete'),
(2, 6, 'HD images', 'clia.jpg', '2019-12-16 10:13:03', 'delete'),
(3, 6, 'HD images', 'NAVT.jpg', '2019-12-16 10:13:03', 'delete'),
(4, 2, 'Portrait Photo Album', 'NAVT.jpg', '2019-12-16 10:27:37', 'delete'),
(5, 1, 'Food Photo Album', 'levvv.jpg', '2019-12-16 11:06:51', 'delete'),
(6, 1, 'Food Photo Album', 'lucky.jpg', '2019-12-16 11:06:51', 'delete'),
(7, 1, 'Food Photo Album', 's.s.jpg', '2019-12-16 11:06:51', 'delete'),
(8, 1, 'Food Photo Album', 'tred.jpg', '2019-12-16 11:06:51', 'delete'),
(9, 9, 'qqqqqqqqqq', 'levvv.jpg', '2019-12-16 11:07:33', 'delete'),
(10, 9, 'qqqqqqqqqq', 'lucky.jpg', '2019-12-16 11:07:34', 'delete'),
(11, 9, 'qqqqqqqqqq', 's.s.jpg', '2019-12-16 11:07:34', 'delete'),
(12, 9, 'qqqqqqqqqq', 'tred.jpg', '2019-12-16 11:07:34', 'delete'),
(13, 8, 'hdfhdf', 'Penguins.jpg', '2019-12-16 11:14:16', 'delete'),
(14, 8, 'hdfhdf', 'Tulips.jpg', '2019-12-16 11:14:16', 'delete'),
(15, 10, ' ggggg d gdddddddddddddd', 'Tulips.jpg', '2019-12-16 13:28:44', 'delete'),
(16, 1, 'Food Photo Album', '6-Amazing-Food-Photography-Tricks-You-Need-To-Know-Gobo-Pasta.jpg', '2019-12-16 17:52:12', 'process'),
(17, 1, 'Food Photo Album', '99-Best-Food-Photography-Tips-1.jpg', '2019-12-16 17:52:12', 'process'),
(18, 1, 'Food Photo Album', 'BBBURGER8-1024x683-1024x683.jpg', '2019-12-16 17:52:12', 'process'),
(19, 1, 'Food Photo Album', 'c05205ccb1f95ea9080168e241e5a92a.jpg', '2019-12-16 17:52:12', 'process'),
(20, 2, 'Portrait Photo Album', 'facesofindia3.jpg', '2019-12-16 17:53:03', 'process'),
(21, 2, 'Portrait Photo Album', 'facesofindia4.jpg', '2019-12-16 17:53:03', 'process'),
(22, 2, 'Portrait Photo Album', 'facesofindia5.jpg', '2019-12-16 17:53:03', 'process'),
(23, 2, 'Portrait Photo Album', 'facesofindia6.jpg', '2019-12-16 17:53:03', 'process'),
(24, 2, 'Portrait Photo Album', 'facesofindia7.jpg', '2019-12-16 17:53:04', 'process'),
(25, 2, 'Portrait Photo Album', 'facesofindia8.jpg', '2019-12-16 17:53:04', 'process'),
(26, 5, 'Wildlife Photo album', 'land-of-giants.jpg', '2019-12-16 17:53:38', 'process'),
(27, 5, 'Wildlife Photo album', 'pexels-photo-247431.jpeg', '2019-12-16 17:53:38', 'process'),
(28, 5, 'Wildlife Photo album', 'photography-tips-wildlife-subject.jpg', '2019-12-16 17:53:38', 'process'),
(29, 5, 'Wildlife Photo album', 'wildlife.jpg', '2019-12-16 17:53:38', 'process'),
(30, 6, 'HD images', '_9959.jpeg', '2019-12-17 07:36:38', 'process'),
(31, 1, 'Food Photo Album', '', '2019-12-17 07:36:48', 'delete'),
(32, 1, 'Food Photo Album', '', '2019-12-17 07:36:54', 'delete'),
(33, 1, 'Food Photo Album', '', '2019-12-17 07:36:56', 'delete'),
(34, 6, 'HD images', 'Bird-photography.jpg', '2019-12-17 08:08:01', 'process'),
(35, 6, 'HD images', 'bird-phtography.jpg', '2019-12-17 08:10:56', 'delete'),
(36, 6, 'HD images', 'kingfisher-1352520_960_720.jpg', '2019-12-17 08:15:19', 'process');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`albumid`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `albumid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
