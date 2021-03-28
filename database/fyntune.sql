-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 11:37 AM
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
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `username`, `content`, `date`, `image`, `category`) VALUES
(52, 'book ', 'jose', 'java book', '2021-03-28 09:13:05.000000', '', 'books'),
(53, 'football', 'ucl', 'gggggfgfhghikuj', '2021-03-28 09:14:51.000000', '', 'sports'),
(54, 'football', 'admin ', 'gkjhkjhhjh', '2021-03-28 09:15:24.000000', '', 'sports'),
(55, 'python', 'korin', 'python', '2021-03-28 09:15:42.000000', '', 'books'),
(56, 'web development', 'michael', 'php', '2021-03-28 09:16:16.000000', '', 'books'),
(57, 'mobile', 'iphone', 'iphone 12', '2021-03-28 09:16:59.000000', '', 'tech'),
(58, 'mobile', 'iphone', 'iphone 12', '2021-03-28 09:18:10.000000', '', 'tech'),
(59, 'cricket', 'icc', 'ind vs end', '2021-03-28 11:33:10.000000', '', 'sports'),
(60, 'mobile', 'samsung', 'samsung galaxy a1', '2021-03-28 11:34:07.000000', '', 'tech'),
(61, 'football', 'u', '', '2021-03-28 11:34:14.000000', '', ''),
(62, 'football', 'ucl', 'jjjjjjj', '2021-03-28 11:34:28.000000', '', 'sports'),
(63, 'books', 'john', 'python book', '2021-03-28 11:35:10.000000', '', 'books'),
(64, 'backend development', 'cena', 'php development', '2021-03-28 11:35:48.000000', '', 'books'),
(65, 'mobile', 'admin', 'iphone,mi,one plus', '2021-03-28 11:36:14.000000', '', 'tech'),
(66, 'laptop', 'shahid', 'lenovo g 510', '2021-03-28 11:36:38.000000', '', 'tech');

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
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
