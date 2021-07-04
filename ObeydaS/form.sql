-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 11:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nour`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `firstname`, `lastname`, `email`, `image`) VALUES
(6, 'obeyda12', 'alderson', 'obeyda@gmail.com', '71064545_43007cba-a170-4a18-9d33-fe487eb25fe1.jpg'),
(7, 'asdasdasdasd', 'asdasdafafasd', 'obeyda@gmail.com', '75200008_7c7f465e52c996246662f195993b2228.jpg'),
(8, 'asdasd', 'asdasd', 'asd@gmai.com', '33045926_.jpg'),
(9, 'obeyda12', 'alderson12', 'obeyda@gmail.com', '86814390_images (1).jpg'),
(10, 'obeyda', 'alderson', 'obeyda@gmail.com', '67884685_images (2).jpg'),
(11, 'obeyda12', 'obeyda', 'obeyda@gmail.com', '16948802_im1ages.jpg'),
(12, 'obeyda12', 'alderson12', 'obeyda@gmail.com', '32350051_istockphoto-182456001-170x170.jpg'),
(13, 'obeyda', 'alderson', 'zinaogulu@gmail.com', '68291919_Ajux_loader.gif'),
(14, 'Ahmad', 'Almostafa', 'obeyda@eritqaa.com', '28259916_frontend-backend.png'),
(15, 'sfadsf', 'asdasd', '', '13353466_233889.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
