-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 03:05 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `customerFName` varchar(255) NOT NULL,
  `customerLName` varchar(255) NOT NULL,
  `dateofBirth` date NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `contactNo` char(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerFName`, `customerLName`, `dateofBirth`, `gender`, `contactNo`, `email`) VALUES
(2, 'Joes', 'Wilson', '1994-03-13', 'F', '09279428400', 'joewilson21@gmail.com'),
(3, 'Jon', 'Grey', '1993-01-27', 'M', '09959227500', 'jongrey@yahoo.com'),
(4, 'Dani', 'Ponder', '1986-10-16', 'F', '09178653211', 'daniponder65@gmail.com'),
(5, 'Lola', 'Luciana', '1996-06-24', 'F', '09274852399', 'lola_luciana32@gmail.com'),
(6, 'Carlos', 'Webber', '1984-11-09', 'M', '09272126349', 'carloswebbet@gmail.com'),
(7, 'Maria', 'Reed', '1974-06-03', 'F', '09273205350', 'reed_maria@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `addressID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `street` varchar(35) DEFAULT NULL,
  `barangay` varchar(35) DEFAULT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `country` varchar(35) NOT NULL,
  `zip` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`addressID`, `customerID`, `street`, `barangay`, `city`, `state`, `country`, `zip`) VALUES
(1, 2, 'Reina Regente Street', 'Amparos', 'Cebu City', 'Central Visayas', 'Philippines', '6002'),
(2, 3, 'Roosevelt Avenue', 'San Juan', 'Tacloban City', 'Central Visayas', 'Philippines', '6500'),
(3, 4, 'Roosevelt Avenue', 'Taguig', 'Carmen', 'Central Visayas', 'Philippines', '6319'),
(4, 5, 'Roxas Boulevard', 'Pasay', 'Quezon City', 'Metro Manila', 'Philippines', '1008'),
(5, 6, 'Boni Avenue', 'Marikina', 'Cagayan de Oro', 'Northern Mindanao', 'Philippines', '9000'),
(6, 7, 'De la Rosa Street', 'Pasig', 'Tagbilaran City', 'Central Visayas', 'Philippines', '6300');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_users`
--

CREATE TABLE `inventory_users` (
  `userID` int(11) NOT NULL,
  `userType` enum('Manager','User','Empty') NOT NULL,
  `userFirstName` varchar(255) NOT NULL,
  `userLastName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory_users`
--

INSERT INTO `inventory_users` (`userID`, `userType`, `userFirstName`, `userLastName`, `userName`, `email`, `password`) VALUES
(1, 'Manager', 'Marjorie', 'Tumapon', 'marge123', 'marge.tumapon@gmail.com', 'margepassword'),
(2, 'User', 'Luigi', 'Rixon', 'luirix21', 'luigirixon@yahoo.com', 'luigipassword'),
(3, 'User', 'Luna', 'Lurege', 'lurluna7', 'luna_lurege7@gmail.com', 'lunapassword');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` enum('To-Confirm','To-Ship','To-Receive','Completed','To-Approve') NOT NULL,
  `shipRequiredDate` date NOT NULL,
  `paidStatus` enum('paid','unpaid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `customerID`, `createdBy`, `orderDate`, `orderStatus`, `shipRequiredDate`, `paidStatus`) VALUES
(3, 4, 3, '2021-11-15', 'Completed', '2021-11-20', 'unpaid'),
(5, 4, 3, '2021-11-18', 'To-Receive', '2021-11-23', 'paid'),
(6, 5, 2, '2021-11-20', 'Completed', '2021-11-25', 'unpaid'),
(7, 7, 3, '2021-11-22', 'To-Receive', '2021-11-27', 'paid'),
(8, 6, 2, '2021-11-23', 'To-Receive', '2021-11-28', 'paid'),
(9, 3, 2, '2021-11-24', 'To-Confirm', '2021-11-29', 'unpaid'),
(10, 2, 3, '2021-11-26', 'To-Ship', '2021-12-01', 'paid'),
(11, 4, 3, '2021-11-26', 'To-Receive', '2021-12-01', 'unpaid'),
(12, 5, 2, '2021-11-27', 'To-Ship', '2021-12-02', 'paid'),
(14, 6, 2, '2021-10-02', 'To-Ship', '2021-10-07', 'paid'),
(15, 5, 2, '2021-10-09', 'To-Ship', '2021-10-14', 'paid'),
(16, 5, 3, '2021-10-03', 'To-Receive', '2021-10-08', 'paid'),
(17, 3, 2, '2021-10-09', 'To-Ship', '2021-10-14', 'paid'),
(19, 6, 2, '2021-10-02', 'To-Ship', '2021-10-07', 'paid'),
(22, 3, 2, '2021-10-09', 'To-Ship', '2021-10-14', 'paid'),
(23, 7, 2, '2021-10-20', 'To-Ship', '2021-11-25', 'paid'),
(24, 5, 3, '2021-09-08', 'Completed', '2021-09-13', 'paid'),
(25, 4, 3, '2021-09-17', 'Completed', '2021-09-22', 'paid'),
(26, 5, 3, '2021-09-08', 'Completed', '2021-09-13', 'paid'),
(27, 4, 3, '2021-09-17', 'Completed', '2021-09-22', 'paid'),
(28, 4, 2, '2021-11-23', 'To-Approve', '2021-11-30', 'unpaid'),
(29, 2, 3, '2021-11-30', 'To-Approve', '2021-12-23', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `order_line`
--

CREATE TABLE `order_line` (
  `orderlineID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_line`
--

INSERT INTO `order_line` (`orderlineID`, `orderID`, `productID`, `quantity`) VALUES
(3, 3, 7, 35),
(6, 5, 1, 25),
(7, 6, 1, 35),
(8, 7, 8, 15),
(9, 7, 2, 5),
(10, 8, 5, 25),
(11, 9, 4, 20),
(12, 10, 4, 30),
(13, 11, 6, 50),
(14, 12, 4, 10),
(66, 27, 5, 120),
(67, 24, 5, 50),
(68, 27, 5, 120),
(69, 24, 5, 50),
(70, 27, 3, 120),
(71, 24, 2, 50),
(72, 6, 2, 80),
(73, 3, 6, 100),
(74, 26, 1, 150),
(75, 28, 4, 200),
(76, 3, 8, 100),
(82, 9, 2, 50),
(83, 11, 3, 100),
(84, 16, 5, 20),
(85, 7, 8, 50),
(86, 8, 5, 100),
(87, 5, 6, 120),
(88, 15, 8, 150),
(89, 10, 3, 80),
(90, 19, 6, 100),
(91, 12, 5, 50),
(92, 14, 2, 80),
(93, 23, 5, 100),
(94, 17, 3, 50),
(95, 22, 5, 50),
(96, 14, 8, 50),
(97, 25, 6, 80),
(99, 3, 4, 130),
(100, 27, 3, 120),
(101, 24, 2, 50),
(102, 6, 2, 80),
(103, 3, 6, 100),
(104, 26, 1, 150),
(105, 25, 4, 200),
(106, 3, 8, 100),
(112, 9, 2, 50),
(113, 11, 3, 100),
(114, 16, 5, 20),
(115, 7, 8, 50),
(116, 8, 5, 100),
(117, 5, 6, 120),
(118, 15, 8, 150),
(119, 10, 3, 80),
(120, 19, 6, 100),
(121, 12, 5, 50),
(122, 14, 2, 80),
(123, 23, 5, 100),
(124, 17, 3, 50),
(125, 22, 5, 50),
(126, 14, 8, 50),
(127, 25, 6, 80),
(129, 3, 4, 130),
(130, 28, 2, 50),
(131, 28, 2, 20),
(132, 29, 2, 30),
(133, 29, 8, 80);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `tradeName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `dateContained` date NOT NULL,
  `price` int(11) NOT NULL,
  `applicationType` varchar(255) NOT NULL,
  `cureTime` time NOT NULL,
  `color` varchar(255) NOT NULL,
  `form` varchar(255) NOT NULL,
  `packageType` varchar(255) NOT NULL,
  `packageSize` varchar(255) NOT NULL,
  `maxOperatingTemp` varchar(255) NOT NULL,
  `minOperatingTemp` varchar(255) NOT NULL,
  `viscosity` varchar(255) NOT NULL,
  `chemicalComposition` text NOT NULL,
  `operatingTempRange` varchar(255) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `inStock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `tradeName`, `description`, `brandName`, `dateContained`, `price`, `applicationType`, `cureTime`, `color`, `form`, `packageType`, `packageSize`, `maxOperatingTemp`, `minOperatingTemp`, `viscosity`, `chemicalComposition`, `operatingTempRange`, `productImage`, `inStock`) VALUES
(1, 'Loctite 243', 'A general purpose, medium strength threadlocker with improved oil tolerance. For fasteners between 1/4\" and 3/4\" (6 to 20 mm) diameters.', 'Loctite', '2021-10-01', 29, 'Thread locking', '02:00:00', 'Blue', 'Liquid', 'Bottle', '10 ml', '+180°C', '-55°C', 'Thixotropic', 'Dimethacrylate Ester', '-55°C -> +180°C', 'loctite 243.jpg', 978),
(2, 'Loctite 271', 'The Loctite 135381 is a 271™ series high strength threadlocker that comes in a 50 ml bottle. This material is designed for the permanent locking and sealing of threaded fasteners.', 'Loctite', '2021-10-01', 38, 'Thread locking', '24:00:00', 'Red', 'Liquid', 'Bottle', '50 ml', '+300°F', '>+50°F', 'Thixotropic', 'Methacrylate Ester', '-50°C -> +300°C', 'Loctite 271.jpg', 1789),
(3, 'Loctite 242', 'The Loctite 135355 is a blue threadlocker that comes in a 50 ml bottle. This medium strength, mil spec threadlocker is designed for general purpose applications on fasteners between ¼\" and ¾\" diameters.', 'Loctite', '2021-10-01', 38, 'Thread locking', '24:00:00', 'Blue', 'Liquid', 'Bottle', '50 ml', '+300°F', '-65°F', 'Thixotropic', 'Dimethacrylate Ester', '-65°F -> +300°F', 'Loctite 242.jpg', 1452),
(4, 'Loctite 545', 'The Loctite 135486 is a thread sealant that comes in a 50 ml bottle. This material is designed for the locking and sealing of small, fine threaded fittings particularly those used in hydraulic and pneumatic installations.', 'Loctite', '2021-10-02', 38, 'Thread Sealing', '168:00:00', 'Purple', 'Liquid', 'Bottle', '50 ml', '+300°F', '-65°F', 'Thixotropic', 'Polyglycoldioctanoate, Polyglycol Dimethacrylate, 2-Hydroxyethyl Methacrylate, Silica, Amorphous, Fumed, Crystal-Free, Cumene Hydroperoxide, 1-Acetyl-2-Phenylhydrazine, Cumene, Methacrylic Acid', '-65°F -> +300°F', 'Loctite 545.jpg', 789),
(5, 'Loctite 262', 'The Loctite 135374 is a high strength product that is applied to fasteners up to 3/4\" (20mm) in size before assembly. Localized heat and hand tools are required to separate parts;solvents will not weaken the adhesive bond. Approved for use in or around food processing areas.', 'Loctite', '2021-10-01', 38, 'Thread locking', '24:00:00', 'Red', 'Liquid', 'Bottle', '50 ml', '+300°F', '-65°F', 'Thixotropic', 'Dimethacrylate Ester', '-65°F -> +300°F', 'Loctite 262.jpg', 973),
(6, 'Loctite 290', 'The Loctite 135392 is a medium-strength wicking grade threadlocker for pre-assembled bolts up to 1/2\" (12 mm). This material\'s capillary action allows it to wick between engaged threads elliminating the need to disassemble parts prior to application.', 'Loctite', '2021-10-01', 39, 'Thread locking', '24:00:00', 'Green', 'Liquid', 'Bottle', '50 ml', '+300°F', '-65°F', 'Thixotropic', 'Dimethacrylate Ester', '-65°F -> +300°F', 'Loctite 290.jpg', 1234),
(7, 'Loctite 220', 'The Loctite 645093 is a wicking grade, medium strength threadlocker that comes in a 50 ml bottle. The low viscosity adhesive is designed for use on preassembled fasteners.', 'Loctite', '2021-10-01', 37, 'Thread locking', '24:00:00', 'Blue', 'Liquid', 'Bottle', '50 ml', '+300°F', '-65°F', 'Thixotropic', 'Dimethacrylate Ester', '-65°F -> +300°F', 'Loctite 220.jpg', 1324),
(8, 'Loctite 263', 'The Loctite 1330585 is a high strength, permanent threadlocker for heavy duty applications. This material only works on both active metals such as brass and copper as well as passive substrates such as stainless steel.', 'Loctite', '2021-10-01', 36, 'Thread locking', '24:00:00', 'Red', 'Liquid', 'Liquid', '50 ml', '+360°F', '-65°F', 'Thixotropic', 'Dimethacrylate Ester', '-65°F -> +360°F', 'Loctite 263.jpg', 876);

-- --------------------------------------------------------

--
-- Table structure for table `replenishment`
--

CREATE TABLE `replenishment` (
  `repOrderID` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `repOrderDate` date NOT NULL,
  `orderStatus` enum('To-Confirm','To-Ship','To-Receive','Completed','To-Approve') NOT NULL,
  `shipRequiredDate` date NOT NULL,
  `paidStatus` enum('paid','unpaid') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replenishment`
--

INSERT INTO `replenishment` (`repOrderID`, `supplierID`, `createdBy`, `repOrderDate`, `orderStatus`, `shipRequiredDate`, `paidStatus`) VALUES
(2, 3, 2, '2021-11-16', 'To-Confirm', '2021-11-20', 'paid'),
(3, 2, 2, '2021-11-17', 'To-Confirm', '2021-11-25', 'paid'),
(6, 3, 3, '2021-11-21', 'Completed', '2021-11-28', 'paid'),
(7, 2, 2, '2021-11-22', 'Completed', '2021-11-30', 'paid'),
(8, 3, 2, '2021-11-28', 'Completed', '2021-12-04', 'paid'),
(11, 2, 2, '2021-12-06', 'Completed', '2021-12-12', 'paid'),
(13, 2, 2, '2021-11-23', 'To-Approve', '2021-11-19', 'unpaid'),
(14, 3, 2, '2021-11-09', 'To-Approve', '2021-11-09', 'unpaid'),
(15, 3, 3, '2021-11-27', 'To-Receive', '2021-11-27', 'unpaid'),
(16, 3, 2, '2021-11-10', 'To-Receive', '2021-12-10', 'paid'),
(17, 2, 2, '2021-12-23', 'To-Receive', '2021-12-31', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `replenishment_line`
--

CREATE TABLE `replenishment_line` (
  `replenishmentLineID` int(11) NOT NULL,
  `repOrderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replenishment_line`
--

INSERT INTO `replenishment_line` (`replenishmentLineID`, `repOrderID`, `productID`, `quantity`) VALUES
(2, 2, 1, 100),
(3, 3, 6, 80),
(4, 2, 3, 50),
(8, 6, 8, 50),
(9, 7, 7, 100),
(10, 8, 1, 120),
(13, 11, 6, 100),
(15, 13, 8, 20),
(16, 14, 8, 100),
(17, 15, 5, 40),
(20, 16, 8, 20),
(21, 17, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `contactFName` varchar(255) NOT NULL,
  `contactLName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNo` char(15) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplierID`, `companyName`, `contactFName`, `contactLName`, `email`, `contactNo`, `logo`) VALUES
(2, 'Loctite Cebu Inc.', 'Horeby', 'Barriga', 'loctite.cebu@gmail.com', '32-6784-5151', 'loctiteCBlogo.png'),
(3, 'Loctite Iloilo Inc.', 'Demosthenes', 'Arbiol', 'loctite.iloilo@gmail.com', '33-1500-7171', 'loctiteILlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_address`
--

CREATE TABLE `supplier_address` (
  `addressNo` int(11) NOT NULL,
  `supplierID` int(11) NOT NULL,
  `street` varchar(35) DEFAULT NULL,
  `barangay` varchar(35) DEFAULT NULL,
  `city` varchar(35) NOT NULL,
  `state` varchar(35) NOT NULL,
  `country` varchar(35) NOT NULL,
  `zip` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_address`
--

INSERT INTO `supplier_address` (`addressNo`, `supplierID`, `street`, `barangay`, `city`, `state`, `country`, `zip`) VALUES
(5, 2, 'A. Soriano Avenue', 'Apas', 'Cebu City', 'Central Visayas', 'Philippines', '6000'),
(6, 3, '5th Main Avenue', 'Aguinaldo', 'Iloilo City', 'Western Visayas', 'Philippines', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`addressID`),
  ADD KEY `customer_address_FK` (`customerID`);

--
-- Indexes for table `inventory_users`
--
ALTER TABLE `inventory_users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_FK3` (`createdBy`),
  ADD KEY `orders_FK1` (`customerID`);

--
-- Indexes for table `order_line`
--
ALTER TABLE `order_line`
  ADD PRIMARY KEY (`orderlineID`),
  ADD KEY `order_line_FK1` (`orderID`),
  ADD KEY `order_line_FK2` (`productID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `replenishment`
--
ALTER TABLE `replenishment`
  ADD PRIMARY KEY (`repOrderID`),
  ADD KEY `replenishment_FK1` (`supplierID`),
  ADD KEY `replenishment_FK3` (`createdBy`);

--
-- Indexes for table `replenishment_line`
--
ALTER TABLE `replenishment_line`
  ADD PRIMARY KEY (`replenishmentLineID`),
  ADD KEY ` replenishment_line_FK1` (`productID`),
  ADD KEY ` replenishment_line_FK2` (`repOrderID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `supplier_address`
--
ALTER TABLE `supplier_address`
  ADD PRIMARY KEY (`addressNo`),
  ADD KEY `supplier_address_FK` (`supplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventory_users`
--
ALTER TABLE `inventory_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `order_line`
--
ALTER TABLE `order_line`
  MODIFY `orderlineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `replenishment`
--
ALTER TABLE `replenishment`
  MODIFY `repOrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `replenishment_line`
--
ALTER TABLE `replenishment_line`
  MODIFY `replenishmentLineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier_address`
--
ALTER TABLE `supplier_address`
  MODIFY `addressNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD CONSTRAINT `customer_address_FK` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_FK1` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_FK3` FOREIGN KEY (`createdBy`) REFERENCES `inventory_users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_line`
--
ALTER TABLE `order_line`
  ADD CONSTRAINT `order_line_FK1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_line_FK2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replenishment`
--
ALTER TABLE `replenishment`
  ADD CONSTRAINT `replenishment_FK1` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `replenishment_FK3` FOREIGN KEY (`createdBy`) REFERENCES `inventory_users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `replenishment_line`
--
ALTER TABLE `replenishment_line`
  ADD CONSTRAINT ` replenishment_line_FK1` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT ` replenishment_line_FK2` FOREIGN KEY (`repOrderID`) REFERENCES `replenishment` (`repOrderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier_address`
--
ALTER TABLE `supplier_address`
  ADD CONSTRAINT `supplier_address_FK` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
