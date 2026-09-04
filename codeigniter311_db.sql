-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 06:08 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter311_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_application`
--

CREATE TABLE `crud_application` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `update_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud_application`
--

INSERT INTO `crud_application` (`id`, `name`, `email`, `phone`, `password`, `created_date`, `update_date`) VALUES
(47, 'Deepak Pandey ', 'deepakpandey915@gmail.com', '9650075774', 'vikas@123456789', '21-04-2021', '21-10-2021 13:32:54'),
(49, 'Vikas Pandey', 'vikashpandey010@gmail.com', '9971066820', 'vikas@123', '03-06-2024', ''),
(50, 'Ashish Pandey', 'ashishpandey054@gmail.com', '7525068251', '123456789', '03-06-2024', ''),
(51, 'Subham Pandey', 'sp@gmail.com', '9721093116', 'sp@123', '03-06-2024', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_application`
--
ALTER TABLE `crud_application`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_application`
--
ALTER TABLE `crud_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
