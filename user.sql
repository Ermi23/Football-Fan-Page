-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 02:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `did` int(11) NOT NULL,
  `damount` int(11) NOT NULL,
  `duser` varchar(30) NOT NULL,
  `dmessage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`did`, `damount`, `duser`, `dmessage`) VALUES
(5, 450, 'yg', 'costachinin le fasil'),
(6, 500, 'demo', 'This is for my love to fasil.'),
(7, 500, 'dink', 'donation'),
(8, 234, 'miki', 'fasil ');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `itemid` varchar(50) NOT NULL,
  `region` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `street` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `orderedby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `itemid`, `region`, `city`, `street`, `phone`, `orderedby`) VALUES
(20, ' item1', 'amhara', 'gondar', 'ethiopia', '0962939288', 'miki');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `itemid` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `file` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`itemid`, `name`, `price`, `amount`, `file`, `status`) VALUES
('item-15', 'Hot Red Shoe', 15, 0, 'images/redshoe.png', 'available'),
('item-16', 'YG\'s Favorite', 23, 4, 'images/complete.png', 'available'),
('item-20', 'New Orange T-shirt', 18, 5, 'images/orangetshirt.png', 'available'),
('item1', 'Home T-shirt', 25, 4, 'images/redblacktshirt.png', 'available'),
('item10', 'Yellow Short', 23, 1, 'images/kidshort.png', 'available'),
('item11', 'KID\'s Shoe', 8, 4, 'images/kidshoe.png', 'available'),
('item2', 'Classic Shoes', 10, 4, 'images/blueshoe.png', 'available'),
('item3', 'Shorts', 10, 2, 'images/short.png', 'available'),
('item4', 'Tight T-shirt', 25, 8, 'images/womentshirt.png', 'available'),
('item5', 'Running Shoes', 10, 4, 'images/womenshoe.png', 'available'),
('item6', 'Black Shorts', 15, 7, 'images/womenshort.png', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(11) NOT NULL,
  `ttype` varchar(10) NOT NULL,
  `tcode` varchar(10) NOT NULL,
  `tstatus` varchar(10) NOT NULL,
  `tsoldto` varchar(30) DEFAULT NULL,
  `tdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`tid`, `ttype`, `tcode`, `tstatus`, `tsoldto`, `tdate`) VALUES
(1, 'ticket1', 'TDH2345', 'sold', 'miki', ''),
(2, 'ticket1', 'REC9876', 'sold', 'demo', ''),
(3, 'ticket1', 'SDS8920', 'sold', 'demo', ''),
(4, 'ticket2', 'IOE2200', 'sold', 'demo', ''),
(5, 'ticket2', 'LKW4398', 'available', '', ''),
(6, 'ticket2', 'HDL9239', 'available', '', ''),
(7, 'ticket3', 'SLA2378', 'available', '', ''),
(8, 'ticket4', 'MXS3243', 'available', '', ''),
(9, 'ticket5', 'EWW2352', 'available', '', ''),
(10, 'ticket5', 'QOA2352', 'available', '', ''),
(11, 'ticket5', 'GLA3461', 'available', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ttype` varchar(20) NOT NULL,
  `tmatch` varchar(50) NOT NULL,
  `tdate` varchar(30) NOT NULL,
  `home` varchar(40) NOT NULL,
  `away` varchar(40) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ttype`, `tmatch`, `tdate`, `home`, `away`, `price`) VALUES
('ticket1', 'Man Unt. Vs Fasil K.', 'Today 9:00 LT', 'images/manunit.png', 'images/logo2.png', 12),
('ticket2', 'Fasil K. Vs St. George', 'Next Sunday 9:00 LT', 'images/logo2.png', 'images/st.george.png', 12),
('ticket3', 'Arsenal Vs Fasil K.', '27-Sat-22 7:00 LT', 'images/arsenal.png', 'images/logo2.png', 12),
('ticket4', 'Fasil K. Vs LiverPool', '27-Sat-22 7:00 LT', 'images/logo2.png', 'images/liverpool.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `credit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `gender`, `phone`, `email`, `credit`) VALUES
('demo', 'man', 'Mr. Manyazewal', 'F', 934647432, 'man@yaz.com', 'CBE23093'),
('dink', '1234567', 'dinkayehu', 'M', 1234567890, 'dink@gmail.com', 'CBE45773'),
('miki', '54321', 'Mikias Wondim', 'M', 934647434, 'mikiaswondim@gmail.com', 'AMH4892'),
('yg', '2416', 'YEGILE ASSEFA ', 'F', 909985517, 'yg@fj.com', 'AMH2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
