-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2021 at 03:43 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `Airline`
--

CREATE TABLE `Airline` (
  `airline_name` varchar(100) NOT NULL,
  `airline_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Airline`
--

INSERT INTO `Airline` (`airline_name`, `airline_id`) VALUES
('British Airways', 'BA'),
('Delta', 'DL'),
('Emitrates', 'EK'),
('KLM', 'KLM'),
('Qatar Airways', 'QR'),
('Turkish Airlines', 'TK');

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE `Customers` (
  `person_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `payable_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`person_id`, `customer_id`, `mobile_no`, `payable_amount`) VALUES
(4, 1, '+233 55 1112001', 5000),
(5, 2, '+233 55 1112001', 10000),
(7, 3, '+44 55 1112001', 9000),
(8, 4, '+93 55 1112001', 8000),
(11, 5, '+355 55 1112001', 7000),
(12, 6, '+244 55 1112001', 5500),
(13, 7, '+54 55 1112001', 5900),
(15, 8, '+374 55 1112001', 9500),
(16, 9, '+61 55 1112001', 9800),
(17, 10, '+43 55 1112001', 7600),
(18, 11, '+973 55 1112001', 9700),
(19, 12, '+32 55 1112001', 8700),
(20, 13, '+82 55 1112001', 9600);

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `employee_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `employee_role` varchar(40) DEFAULT NULL,
  `users` varchar(50) DEFAULT NULL,
  `Pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employee_id`, `person_id`, `employee_role`, `users`, `Pass`) VALUES
(1, 1, 'Financial Admin', NULL, NULL),
(2, 2, 'CEO', NULL, NULL),
(3, 3, 'Customer consultant', NULL, NULL),
(4, 6, 'Tech Officer', 'admin@gmail.com', 'admin'),
(5, 9, 'Financial Admin', NULL, NULL),
(6, 10, 'Customer consultant', NULL, NULL),
(7, 14, 'Receptionist', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`name`, `email`, `message`) VALUES
('Nii', 'Tettey', 'Testing'),
('Nii', 'Tettey', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `fullname` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(130) DEFAULT NULL,
  `pasport_num` varchar(50) DEFAULT NULL,
  `country` varchar(60) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `person_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_amount` int(11) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `payment_status` enum('Complete','Incomplete') DEFAULT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`person_id`, `customer_id`, `payment_amount`, `payment_method`, `payment_status`, `payment_id`) VALUES
(3, 4, 5000, 'PayPal', 'Complete', 1),
(4, 5, 10000, 'Mobile Money', 'Complete', 2),
(5, 7, 3500, 'Visa', 'Incomplete', 3),
(7, 8, 8000, 'Mastercard', 'Complete', 4),
(8, 11, 7000, 'Cash', 'Complete', 5),
(11, 12, 5000, 'Visa', 'Incomplete', 6),
(12, 13, 5900, 'Mobile Money', 'Complete', 7),
(13, 13, 8500, 'PayPal', 'Incomplete', 8),
(15, 2, 9800, 'Mastercard', 'Complete', 9),
(16, 3, 6000, 'Cash', 'Incomplete', 10),
(17, 9, 5900, 'Cash', 'Incomplete', 11),
(18, 10, 7700, 'Visa', 'Complete', 12);

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE `Person` (
  `person_id` int(11) NOT NULL,
  `fname` varchar(80) DEFAULT NULL,
  `lname` varchar(80) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`person_id`, `fname`, `lname`, `gender`, `dob`, `email`) VALUES
(1, 'John', 'Boker', 'male', '1998-12-31', ' john.boker@me.com '),
(2, 'James', 'Abreo', 'male', '1999-11-30', ' james.bond@me.com '),
(3, 'Jack', ' bauuer', 'male', '1997-10-13', ' jack. uer@me.com '),
(4, 'Tony', 'Stark', 'male', '1996-12-01', ' tony.stark@me.com '),
(5, 'Rebecca', 'Mwangi', 'female', '2000-12-01', ' r.romanoff@me.com '),
(6, 'Blake', 'Smith', 'male', '2000-05-01', ' b.Smith@me.com '),
(7, 'Jacob', 'Black', 'male', '1979-12-01', ' jake.black@me.com '),
(8, 'Diana', 'Mensah', 'female', '1998-11-01', ' d.spence@me.com '),
(9, 'Lois', 'Lane', 'female', '1988-10-08', ' lois.lane@me.com '),
(10, 'Katie', 'Otto', 'female', '1989-08-09', ' katie001@me.com '),
(11, 'Shelby', 'White', 'female', '1999-10-14', ' shelby.white@me.com '),
(12, 'Frank', 'Musa', 'male', '2001-12-24', ' frank.musa@me.com '),
(13, 'Leslie', 'Spencer', 'female', '1980-11-01', ' l.cooper@me.com '),
(14, 'Alyssa', 'Williams', 'female', '1988-10-08', ' Alyssa.will@me.com '),
(15, 'Amber', 'Jean', 'female', '1995-08-09', ' Amberj@me.com '),
(16, 'Amber', 'Jeanette', 'female', '1995-08-07', ' Amberjet@me.com '),
(17, 'Margot', 'Smith', 'female', '1985-08-06', ' Msmith@me.com '),
(18, 'Mac', 'Miller', 'male', '2000-08-09', ' Macm@me.com '),
(19, 'Angelina', 'Jolie', 'female', '1985-05-02', ' Aj11@me.com '),
(20, 'Nathalie', 'Tettey', 'female', '2003-07-02', ' Natt001@me.com '),
(21, 'Hayley', 'smith', 'female', '2001-07-02', ' Haysmith@me.com ');

-- --------------------------------------------------------

--
-- Table structure for table `Ticket`
--

CREATE TABLE `Ticket` (
  `ticket_no` int(11) NOT NULL,
  `ticket_price` int(11) DEFAULT NULL,
  `Destination` varchar(110) DEFAULT NULL,
  `Departure` varchar(110) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `travel_class` enum('economy','business','first') DEFAULT NULL,
  `airline_name` varchar(100) NOT NULL,
  `flight_no` text DEFAULT NULL,
  `seat_no` text DEFAULT NULL,
  `gate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Ticket`
--

INSERT INTO `Ticket` (`ticket_no`, `ticket_price`, `Destination`, `Departure`, `departure_date`, `travel_class`, `airline_name`, `flight_no`, `seat_no`, `gate`) VALUES
(1, 5000, 'Mali', 'Africa', '2021-12-24', 'first', 'British Airways', ' BA789', 'B5', 'H5'),
(2, 10000, 'Switzerland', 'Ghana', '2021-12-20', 'first', 'Qatar Airways', 'QR 789', 'B6', 'H5'),
(3, 9000, 'Sweden', 'Ghana', '2021-12-22', 'first', 'Delta', 'DL89', 'B7', 'A5'),
(4, 80000, 'Germany', 'Ghana', '2021-07-25', 'business', 'British Airways', ' BA789', 'B8', 'H5'),
(5, 7000, 'Italy', 'Ghana', '2021-07-25', 'business', 'Turkish Airlines', 'TK189', 'B9', 'H1'),
(6, 5500, 'Bali', 'Somewhere in the world', '2021-12-24', 'business', 'Turkish Airlines', 'TK889', 'C5', 'H8'),
(7, 5900, 'USA', 'Ghana', '2021-07-25', 'economy', 'Qatar Airways', 'QR369', 'C6', 'H8'),
(8, 9500, 'Spain', 'Ghana', '2021-07-25', 'business', 'KLM', 'KL590', 'C7', 'H7'),
(9, 9800, 'Britain', 'Ghana', '2021-12-19', 'economy', 'British Airways', ' BA789', 'C8', 'H7'),
(10, 7600, 'Denmark', 'Ghana', '2021-12-21', 'first', 'Turkish Airlines', 'TK789', 'C9', 'H6'),
(11, 9700, 'USA', 'Ghana', '2021-07-22', 'economy', 'KLM', 'KLM789', 'D5', 'H6'),
(12, 8700, 'Turkey', 'Ghana', '2021-07-24', 'economy', 'KLM', 'KLM789', 'D6', 'H6'),
(13, 9600, 'USA', 'Ghana', '2021-07-23', 'economy', 'Qatar Airways', 'QR789', 'D7', 'H6'),
(14, 6500, 'Japan', 'Ghana', '2021-07-22', 'economy', 'British Airways', 'BA789', 'D8', 'H5'),
(17, 1000, 'South Korea', 'London', '2021-12-19', 'first', 'Korea Air 123', 'KA 123', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Airline`
--
ALTER TABLE `Airline`
  ADD PRIMARY KEY (`airline_name`),
  ADD KEY `idx_air` (`airline_id`);

--
-- Indexes for table `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `idx_budget` (`payable_amount`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `idx_pay` (`payment_status`,`payment_amount`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `idx_psn` (`gender`,`dob`,`email`);

--
-- Indexes for table `Ticket`
--
ALTER TABLE `Ticket`
  ADD PRIMARY KEY (`ticket_no`),
  ADD KEY `idx_tik` (`ticket_price`,`Destination`,`Departure`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customers`
--
ALTER TABLE `Customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Employees`
--
ALTER TABLE `Employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Person`
--
ALTER TABLE `Person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `Ticket`
--
ALTER TABLE `Ticket`
  MODIFY `ticket_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `Customers` (`customer_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `Person` (`person_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
