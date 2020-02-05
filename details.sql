-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 08:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `New` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `type`, `name`, `color`, `price`, `age`, `picture`, `New`) VALUES
(1, 'Dog', 'Labrador', 'Brown', 10000, 2, 'uploads/labradordog.png', 0),
(2, 'Bird', 'Parrot', 'blue green', 1900, 1, 'uploads/bird.png', 1),
(4, 'fox', 'alaskan-fox', 'white', 20000, 3, 'uploads/fox.png', 1),
(6, 'fish', 'golden fish', 'golden', 1500, 3, 'uploads/fish.png', 1),
(7, 'squirrel', 'asian sql', 'grey', 1234, 4, 'uploads/sql.png', 0),
(8, 'Rabbit', 'african rabit', 'grey', 700, 5, 'uploads/rabit.png', 0),
(9, 'dog', 'smoyed dog', 'white', 10000, 3, 'uploads/smoyeddog.png', 1),
(10, 'sheep', 'Australian sheep', 'ash', 5000, 3, 'uploads/sheep.png', 0),
(11, 'bird', 'pelican', 'white', 4500, 2, 'uploads/pelican.png', 1),
(12, 'Bird', 'sparrow', 'white and dark grey', 200, 0, 'uploads/sparrow.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
