-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 03:31 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(50) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `services` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `date_cal` date NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `gender`, `services`, `country`, `date_cal`, `message`) VALUES
(1, 'nita', 'nitaqarri@gmail.com', 987654321, '', '', 'Please choose', '2019-07-12', '					'),
(2, 'nita', 'email@example.com', 987456321, '', '', 'Please choose', '2019-07-12', '					'),
(3, 'admin', 'email@example.com', 987456321, '', '', 'Please choose', '2019-07-31', '					'),
(4, 'admin', 'email@example.com', 987456321, 'female', '', 'Please choose', '2019-07-05', '					'),
(5, 'admin', 'email@example.com', 987456321, 'female', '', 'Please choose', '2019-07-05', '					'),
(6, 'ana', 'email@example.com', 987456321, 'female', 'Array', 'England', '2019-07-04', '					hello there'),
(7, 'nita', 'email@example.com', 987456321, 'female', 'Online Services', 'Please choose', '2019-07-13', '					'),
(8, 'nita', 'email@example.com', 987456321, 'female', '', 'Please choose', '2019-07-05', '					'),
(9, 'nita', 'email@example.com', 987456321, 'female', '', 'Please choose', '2019-07-05', '					'),
(10, 'nita', 'nitaqarri@gmail.com', 987456321, 'female', '', 'Please choose', '2019-07-11', '					'),
(11, 'admin', 'email@example.com', 987456321, '', '', 'Please choose', '2019-07-04', '					'),
(12, 'sdfgh', 'email@example.com', 1234567, 'male', 'Online Services', 'Please choose', '2019-07-26', '					'),
(13, 'nita', 'email@example.com', 987456321, 'female', 'Online Services', 'Please choose', '2019-07-06', '					'),
(14, 'Nita Qarri', 'nitaqarri@gmail.com', 987654321, 'female', 'UI/UX Design Online Services', 'England', '2019-07-10', 'Hello There!!'),
(15, 'Nita Qarriiii', 'nitaqarri@gmail.com', 123, 'female', 'UI/UX Design Online Services eCommerce Business', 'Kosovo', '2019-07-10', 'My message goes here...');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `image_id` int(11) NOT NULL,
  `image_title` varchar(50) NOT NULL,
  `gallery_image` varchar(50) NOT NULL,
  `image_description` varchar(50) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`image_id`, `image_title`, `gallery_image`, `image_description`, `publication_status`, `created_date`, `user`) VALUES
(21, 'Pic1', '../uploads/5d24df61060b3png', 'dsfsdfssdfsdfsdfsdfdf', 0, '2019-07-09 20:39:29', 1),
(22, 'Pic2', '../uploads/5d24e5b12aa40png', '', 0, '2019-07-09 21:06:25', 4),
(23, 'Picture3', '../uploads/5d24ebe6241b0jpg', '', 0, '2019-07-09 21:32:54', 1),
(24, 'Pic4', '../uploads/5d24ebf357d94jpg', '', 0, '2019-07-09 21:33:07', 1),
(26, 'retertret', '../uploads/5d24f1180812c.png', 'fdgdfgfdg', 0, '2019-07-09 21:55:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `info_id` int(11) NOT NULL,
  `info_name` varchar(50) NOT NULL,
  `info_description` varchar(50) NOT NULL,
  `info_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`info_id`, `info_name`, `info_description`, `info_type`) VALUES
(1, 'info 1', 'short description', 'vision');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `usertype`) VALUES
(1, 'nita', 'qarri', 'nitaqarri@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'Nita', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'user'),
(5, 'nita', 'qarri', 'nitaq', '21232f297a57a5a743894a0e4a801fc3', 'user'),
(6, 'John', 'Doe', 'john-d', '$2y$10$T7GbgoBDIQywVc4SYOVb5.fAql4JexVWrBX7zHyx1LwrPWfbLNHE2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
