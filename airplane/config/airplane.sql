-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 04:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airplane`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `Description`) VALUES
(1, 'This is Rainbow Airlines Nepal.'),
(2, 'We are Committed to provide quality of services.'),
(3, 'This website is used for flight booking.');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `flyingFrom` varchar(255) NOT NULL,
  `flyingTo` varchar(255) NOT NULL,
  `checkIn` date NOT NULL,
  `travelClass` varchar(255) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `acceptance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `flyingFrom`, `flyingTo`, `checkIn`, `travelClass`, `adults`, `children`, `acceptance`) VALUES
(1, 'Nepal', 'Japan', '2019-09-05', 'Economy class', 1, 0, 1),
(2, 'India', 'Japan', '2019-09-05', 'Economy class', 1, 0, 1),
(3, 'India', 'Japan', '2019-09-05', 'Economy class', 1, 0, 1),
(4, 'India', 'Nepal', '2019-09-05', 'Business class', 1, 0, 1),
(5, 'Nepal', 'Japan', '2019-09-07', 'Economy class', 1, 0, 1),
(6, 'Nepal', 'Japan', '2019-09-07', 'Economy class', 1, 0, 1),
(7, 'Nepal', 'Japan', '2019-09-03', 'Economy class', 1, 0, 1),
(8, 'Nepal', 'Japan', '2019-09-03', 'Economy class', 1, 0, 1),
(9, 'Nepal', 'Japan', '2019-09-04', 'Economy class', 1, 0, 1),
(10, 'Nepal', 'Japan', '2019-09-04', 'Economy class', 1, 0, 1),
(11, 'Nepal', 'Japan', '2019-09-07', 'Economy class', 1, 0, 1),
(12, 'Nepal', 'Japan', '0000-00-00', 'Economy class', 1, 0, 0),
(13, 'Nepal', 'Japan', '2019-09-04', 'Economy class', 1, 0, 0),
(14, 'Nepal', 'Japan', '2019-09-04', 'Economy class', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Bikal Poudel', 'bikalpoudel884@gmail.com', 'nice'),
(2, 'Nischal Shrestha', 'nis123@gmail.com', 'Cool, website.'),
(3, 'Sandesh Sharma', 'sandeshno32@gmail.com', 'the website provides sound travel.');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `departureDate` date NOT NULL,
  `departureTime` time NOT NULL,
  `duration` time NOT NULL,
  `price` int(11) NOT NULL,
  `flightName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `departureDate`, `departureTime`, `duration`, `price`, `flightName`) VALUES
(1, '2019-09-04', '01:59:00', '02:00:00', 1500, 'Flight 101');

-- --------------------------------------------------------

--
-- Table structure for table `imageslider`
--

CREATE TABLE `imageslider` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `images` blob NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imageslider`
--

INSERT INTO `imageslider` (`id`, `Title`, `images`, `description`) VALUES
(15, 'Flight 060', 0x2e2e2f2e2e2f696d616765732f362e6a7067, ' a '),
(16, '', 0x2e2e2f2e2e2f696d616765732f666f75722e6a7067, '  '),
(17, 'Flight 100', 0x2e2e2f2e2e2f696d616765732f74687265652e6a7067, 'ok'),
(21, 'Flight 1011', 0x2e2e2f2e2e2f696d616765732f74687265652e6a7067, 'o');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Nischal Shrestha', 'nis@gmail.com', 'nischal19991', '123'),
(2, '\"f\"', '\"f\"', '\"f\"', '\"f\"'),
(3, 'bikal', 'bikalpoudel884@gmail.com', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imageslider`
--
ALTER TABLE `imageslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imageslider`
--
ALTER TABLE `imageslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
