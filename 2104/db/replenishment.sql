-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 04:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_mngmnt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `replenishment`
--

CREATE TABLE `replenishment` (
  `repOrderID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `approvedBy` int(11) DEFAULT NULL,
  `repOrderDate` date NOT NULL,
  `orderStatus` enum('To-Confirm','To-Ship','To-Receive','Completed','To-Approve') NOT NULL,
  `shipRequiredDate` date NOT NULL,
  `paidStatus` enum('paid','unpaid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replenishment`
--

INSERT INTO `replenishment` (`repOrderID`, `supplierID`, `createdBy`, `approvedBy`, `repOrderDate`, `orderStatus`, `shipRequiredDate`, `paidStatus`) VALUES
(2, 3, 2, 1, '2021-11-16', 'To-Confirm', '2021-11-20', 'unpaid'),
(3, 2, 2, 1, '2021-11-17', 'To-Confirm', '2021-11-25', 'unpaid'),
(6, 3, 3, 1, '2021-11-21', 'Completed', '2021-11-28', 'paid'),
(7, 2, 2, 1, '2021-11-22', 'Completed', '2021-11-30', 'paid'),
(8, 3, 2, 1, '2021-11-28', 'Completed', '2021-12-04', 'paid'),
(11, 2, 2, 1, '2021-12-06', 'Completed', '2021-12-12', 'paid'),
(13, 2, 2, NULL, '2021-11-23', 'To-Approve', '2021-11-19', 'unpaid'),
(14, 3, 2, NULL, '2021-11-09', 'To-Approve', '2021-11-09', 'unpaid'),
(15, 3, 3, 1, '2021-11-27', 'To-Receive', '2021-11-27', 'paid'),
(16, 3, 2, 1, '2021-11-10', 'To-Receive', '2021-12-10', 'paid'),
(17, 2, 2, 1, '2021-12-23', 'To-Receive', '2021-12-31', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `replenishment`
--
ALTER TABLE `replenishment`
  ADD PRIMARY KEY (`repOrderID`),
  ADD KEY `replenishment_FK1` (`supplierID`),
  ADD KEY `replenishment_FK3` (`createdBy`),
  ADD KEY `approvedBy` (`approvedBy`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `replenishment`
--
ALTER TABLE `replenishment`
  MODIFY `repOrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `replenishment`
--
ALTER TABLE `replenishment`
  ADD CONSTRAINT `replenishment_FK1` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replenishment_FK2` FOREIGN KEY (`createdBy`) REFERENCES `inventory_users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replenishment_FK3` FOREIGN KEY (`approvedBy`) REFERENCES `inventory_users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
