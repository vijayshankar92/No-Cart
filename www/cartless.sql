-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2015 at 08:11 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cartless`
--

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE IF NOT EXISTS `carddetails` (
  `CardNo` int(11) NOT NULL,
  `Cvv` int(11) NOT NULL,
  `ExpDate` date NOT NULL,
  `UserId` varchar(10) NOT NULL,
  KEY `fk_CardDetails_User1_idx` (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `UserId` varchar(10) NOT NULL,
  `ProductId` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  KEY `UserId_idx` (`UserId`),
  KEY `ProductId_idx` (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`UserId`, `ProductId`, `Date`, `Quantity`) VALUES
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 1),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 1),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 3),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 4),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 4),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 4),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 4),
('dhivyag91', 'S1005', '2015-01-18', 4),
('dhivyag91', 'S1008', '2015-01-18', 2),
('dhivyag91', 'S1005', '2015-01-18', 2),
('dhivyag91', 'S1008', '2015-01-18', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ProductId` varchar(10) NOT NULL,
  `ProductName` varchar(45) NOT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `ProductImage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `ProductName`, `Description`, `Quantity`, `Price`, `ProductImage`) VALUES
('S1001', 'Pen', '', 200, 0.99, 'images/1.jpg'),
('S1002', 'Pencil', '', 250, 0.6, 'images/2.jpg'),
('S1003', 'Pocket Calculator', NULL, 75, 2, 'images/3.jpg'),
('S1004', 'Scientific Calculator', NULL, 50, 14, 'images/4.jpg'),
('S1005', 'Rubber Stamp Kit', NULL, 50, 2.5, 'images/5.jpg'),
('S1006', 'Notebook', NULL, 300, 1.2, 'images/6.jpg'),
('S1007', 'Ruler', NULL, 150, 1, 'images/7.jpg'),
('S1008', 'Stapler', NULL, 100, 2.5, 'images/8.jpg'),
('S1009', 'Paper Weight', NULL, 175, 2, 'images/9.jpg'),
('S1010', 'Spring File', NULL, 150, 2.5, 'images/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserId` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `ContactNo` int(11) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` int(7) NOT NULL,
  `RetypePassword` varchar(30) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `Password`, `fname`, `ContactNo`, `Address`, `Email`, `lname`, `city`, `state`, `zip`, `RetypePassword`) VALUES
('dhivyag91', 'dhivya', 'dhivya', 0, 'njghdcbdu', 'd@g.com', '', '', '', 0, ''),
('vijayshank', 'shanky88', 'Vijay', 2147483647, '7825 McCallum Blvd', NULL, 'Sankar', 'Dallas', 'Texas', 75252, 'shanky88');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD CONSTRAINT `fk_CardDetails_User1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `ProductId` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `UserId` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
