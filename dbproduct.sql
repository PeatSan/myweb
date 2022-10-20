-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 06:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `Name`, `Location`, `C-Date`, `Mod-Date`) VALUES
('a1001', 'samree', 'bangkok', '2022-09-01', '2022-09-02'),
('a1002', 'saimai', 'chonburi', '2022-09-01', '2022-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `total` float DEFAULT NULL,
  `NumberofProduct` int(11) NOT NULL,
  `Product` varchar(20) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Price`, `total`, `NumberofProduct`, `Product`, `C-Date`, `Mod-Date`) VALUES
('cc1001', 250, NULL, 1, 'shampoo', '2022-09-01', '2022-09-02'),
('cc1002', 290, NULL, 1, 'condition', '2022-09-01', '2022-09-02'),
('cc1003', 300, NULL, 1, 'detergen', '2022-09-01', '2022-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `DateofBirth` date NOT NULL,
  `Cdate` date NOT NULL,
  `Mod-Date` date NOT NULL,
  `PostCode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerName`, `Location`, `Email`, `DateofBirth`, `Cdate`, `Mod-Date`, `PostCode`) VALUES
('c2001', 'sompong', 'bangkok', 'sp@mail.rmutt.ac.th', '2022-09-01', '2022-09-02', '2022-09-03', 1111),
('c2002', 'saijai', 'chonburi', 'sj@mail.rmutt.ac.th', '2022-09-01', '2022-09-02', '2022-09-03', 1112),
('c2003', 'jukrit', 'pattaya', 'jk@mail.rmutt.ac.th', '2022-09-01', '2022-09-02', '2022-09-03', 1113);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Iid` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL,
  `CartId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Iid`, `CustomerId`, `CartId`) VALUES
('v1001', 'c2001', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `LocationId` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationId`, `Name`) VALUES
('l1001', 'bangkok'),
('l1002', 'chonburi'),
('l1003', 'pattaya');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductId` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `Deleated` tinyint(1) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `Price`, `Deleated`, `ProductName`, `C-Date`, `Mod-Date`) VALUES
('p1001', 250, 1, 'champoo', '2022-09-01', '2022-09-02'),
('p1002', 290, 1, 'condition', '2022-09-01', '2022-09-02'),
('p1003', 300, 1, 'detergent', '2022-09-01', '2022-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Iid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`LocationId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
