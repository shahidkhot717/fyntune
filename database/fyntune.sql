-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 01:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyntune`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` varchar(555) NOT NULL,
  `date` datetime(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `username`, `content`, `date`, `image`) VALUES
(11, 'emma', 'admin', 'command prompt.', '2021-03-27 09:38:04.000000', ''),
(23, 'worldadmin', 'admin', 'admin admin\r\n', '2021-03-27 09:56:41.000000', ''),
(24, 'movies ', 'warner bros', 'wonder women\r\n', '2021-03-27 11:16:30.000000', ''),
(25, 'movies', 'marvel', 'avengers', '2021-03-27 11:16:46.000000', ''),
(33, 'python', 'admin', 'python development', '2021-03-27 12:47:46.000000', ''),
(34, 'python', 'admin', 'python development', '2021-03-27 12:48:21.000000', ''),
(35, 'web development', 'admin', 'php,mytsql', '2021-03-27 12:48:38.000000', ''),
(36, 'mobile', 'shahid', 'mi a2', '2021-03-27 12:49:01.000000', ''),
(37, 'php ', 'admin', 'php,mysql', '2021-03-27 13:36:56.000000', ''),
(38, 'photo', 'mountain', 'mount fuji', '2021-03-27 13:38:10.000000', ''),
(39, 'ddddd', 'shahid', 'dddddd', '2021-03-27 13:38:26.000000', ''),
(40, 'python', 'admin', 'dddddd', '2021-03-27 13:38:40.000000', ''),
(41, 'java', 'admin', 'java', '2021-03-27 13:39:17.000000', ''),
(42, 'aws', 'admin', 'amazon web service', '2021-03-27 13:39:45.000000', ''),
(43, 'ssss', 'admin', 'fffffff', '2021-03-27 13:40:32.000000', ''),
(44, 'mobiles', 'admin', 'mi,iphone', '2021-03-27 13:41:08.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(21, 'admin@gmail.com', '$2y$10$4w6RmiDTgJrorfRduzA4GuCy8lXUeBZEIhtoUkhJ8tsPyQs92cwdi'),
(22, 'shahid@gmail.com', '$2y$10$7W.TmbG7okC2odI/Ks2NqOrA3rouQvnMWUoJ6WRz0ob9DstLRSoCm'),
(23, '', '$2y$10$48fAcElPNxFUEcM21h/P5..8oP5UpdUW8VWScAwFLkwPx7SsCYFdm'),
(24, '', '$2y$10$SN2RZE/5JlepMjV9YxFFW.Ya8ZOT/v3/hB8zmu8hhEvjZyiP7nGwa'),
(25, '', '$2y$10$aShoE5DTP3ozrLHz/Y4MCutFBV/8rLgmzhl2lDthIVMbdei0Y7s36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
