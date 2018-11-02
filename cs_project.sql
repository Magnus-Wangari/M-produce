-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 07:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminacc`
--

CREATE TABLE `adminacc` (
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `Time` datetime NOT NULL,
  `merchent_reference` varchar(256) NOT NULL,
  `tracking_id` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `firstname`, `lastname`, `email`, `description`, `amount`, `type`, `Time`, `merchent_reference`, `tracking_id`) VALUES
(39242, 'Maite', 'Livon', 'maitelivon@gmail.com', 'Produce', 900, 'MERCHANT', '0000-00-00 00:00:00', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postid`, `email`, `productname`, `price`, `image`, `quantity`, `county`, `date`) VALUES
(84, 'pronoh@gmail.com', 'potatoes', '200', 'post/pr1.jpg', '12', '', '2018-10-15 10:14:18'),
(85, 'pronoh@gmail.com', 'brocoli', '200 per Kg', 'post/brocoli.jpg', '30', '', '2018-10-15 10:14:18'),
(86, 'pronoh@gmail.com', 'Cucumbers', '300 per Kg', 'post/cucumbers.gif', '40', '', '2018-10-15 10:14:18'),
(87, 'pronoh@gmail.com', 'tomatoes', '200 per kg', 'post/tomatoes.jpg', '20', '', '2018-10-15 10:14:18'),
(88, 'pronoh@gmail.com', 'potatoes', '200 per kg', 'post/potatoes.jpg', '60', '', '2018-10-15 10:14:18'),
(89, 'pronoh@gmail.com', 'White Onions', '100 per kg', 'post/white onions.jpg', '60', '', '2018-10-15 10:14:18'),
(91, 'pronoh@gmail.com', 'Cauliflower', '400 per kg', 'post/cauliflower.jpg', '50', '', '2018-10-15 10:14:18'),
(92, 'pronoh@gmail.com', 'Red Onions', '300 per kg', 'post/red onions.jpg', '40', '', '2018-10-15 10:14:18'),
(93, 'pronoh@gmail.com', 'Cabbage', '200', 'post/cabbage.jpg', '40', 'Mombasa', '2018-10-15 10:14:18'),
(94, 'pronoh@gmail.com', 'Carrots', '300', 'post/carrots.jpg', '45', 'Eldoret', '2018-10-15 10:14:18'),
(95, 'pronoh@gmail.com', 'Garlic', '600', 'post/garlic.jpg', '60', 'Kilifi', '2018-10-15 10:15:18'),
(96, 'pronoh@gmail.com', 'Mangoes', '300', 'post/mangoes.jpg', '40', 'Mombasa', '2018-10-15 13:12:02'),
(97, 'pronoh@gmail.com', 'Avocados', '400', 'post/avacados.jpeg', '50', 'Marsabit', '2018-10-15 14:56:24'),
(98, 'pronoh@gmail.com', 'Avocados', '', 'post/avacados.jpeg', '50', 'Marsabit', '2018-10-15 14:57:58'),
(99, 'maitelivon@gmail.com', 'Red cabbage', '120', 'post/f3.jpg', '100', 'Kirinyaga', '2018-10-29 14:05:31');

-- --------------------------------------------------------

--
-- Table structure for table `useracc`
--

CREATE TABLE `useracc` (
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `county` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `passreset` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useracc`
--

INSERT INTO `useracc` (`firstname`, `lastname`, `username`, `dob`, `gender`, `email`, `telephone`, `password`, `county`, `category`, `passreset`) VALUES
('Jaden', 'Njeru', 'Njeru', '1998-09-21', 'Male', 'jadennjeru68@gmail.com', '0713456789', '$2y$10$qUet0xrerpnWUPlY.M.ubufPnkU7OkdPpqlkCMQVyGqOZJ7MSvnyu', 'Nairobi', 'Supplier', 0),
('Magnus', 'Wangari', 'magnus', '1999-05-09', 'Female', 'magnuswangari@gmail.com', '0722334455', '$2y$10$0jJXA86FSHUc2IwbHVJIqOBKhVAJzd6l8jn5hAqbxLPyvyNxO0/Va', 'Kiambu', 'Supplier', 0),
('Maite', 'Livon', 'Maite', '1999-03-01', 'Female', 'maitelivon@gmail.com', '0712881197', '$2y$10$z/tkDWvAlLWjJQTaNu2lfOoWJnEQlQwmo2NNi2f3Aj1ms6jDCZaOu', 'Nairobi', 'Consumer', 441773),
('Monica', 'Rono', 'Mrono', '1998-07-09', 'male', 'pronoh@gmail.com', '0788229272', 'eld123', '', 'Both', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `useracc`
--
ALTER TABLE `useracc`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`email`) REFERENCES `useracc` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
