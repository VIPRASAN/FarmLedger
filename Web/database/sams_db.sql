-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.50.4
-- Generation Time: Sep 30, 2017 at 02:05 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sams`
--
CREATE DATABASE IF NOT EXISTS `sams` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sams`;

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `pan_number` varchar(20) DEFAULT NULL,
  `aadhar_number` int(11) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `mobile_number` int(10) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password_encrypted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `first_name`, `middle_name`, `last_name`, `birth_date`, `pan_number`, `aadhar_number`, `email_address`, `phone_number`, `mobile_number`, `username`, `password_encrypted`) VALUES
(1, 'Sandeep', 'G', 'Chavhan', '1982-03-25', 'ABCD1234E', 123456789, NULL, NULL, NULL, '', ''),
(2, 'Sandeep', 'G', 'Chavhan', '1982-03-25', 'ABCD1234E', 123456789, NULL, NULL, NULL, '', ''),
(3, 'Preetam', 'B', 'Yadav', '1983-01-05', 'ABCD123E', 1234567890, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_addresses`
--

CREATE TABLE `farmer_addresses` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) DEFAULT NULL,
  `taluka_id` int(11) DEFAULT NULL,
  `district_id` int(10) NOT NULL,
  `state_id` int(11) NOT NULL,
  `pin_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_crops`
--

CREATE TABLE `farmer_crops` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `crop_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `expense` float NOT NULL DEFAULT '0',
  `income` float NOT NULL DEFAULT '0',
  `profit` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `area` float NOT NULL,
  `area_unit_id` int(11) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `deleted_on` date NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `farm_supplies`
--

CREATE TABLE `farm_supplies` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `farmer_crop_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `units` float NOT NULL,
  `cost` float NOT NULL,
  `bought_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) UNSIGNED NOT NULL,
  `merchant_name` varchar(100) NOT NULL,
  `contact_first_name` varchar(50) DEFAULT NULL,
  `contact_last_name` varchar(50) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `taluka_id` int(11) DEFAULT NULL,
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_sales`
--

CREATE TABLE `product_sales` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `farmer_drop_id` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `quantity_unit_id` int(11) NOT NULL,
  `rate_per_unit` float DEFAULT NULL,
  `total_amount` float DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `transaction_date` date NOT NULL,
  `memo` text,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='product sales info';

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `farmer_crop_id` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `quantity_unit_id` int(11) NOT NULL,
  `quantity_balance` float NOT NULL,
  `transaction_date` date NOT NULL,
  `memo` text,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `talukas`
--

CREATE TABLE `talukas` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) UNSIGNED NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `farmer_crop_id` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) NOT NULL,
  `transaction_amount` float NOT NULL,
  `transaction_datetime` datetime NOT NULL,
  `memo` varchar(500) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_types`
--

INSERT INTO `transaction_types` (`id`, `name`, `is_active`) VALUES
(1, 'credit', 1),
(2, 'debit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `contact_first_name` varchar(50) NOT NULL,
  `contact_last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `taluka_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `phone_number` varchar(15) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_addresses`
--
ALTER TABLE `farmer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_crops`
--
ALTER TABLE `farmer_crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farm_supplies`
--
ALTER TABLE `farm_supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sales`
--
ALTER TABLE `product_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talukas`
--
ALTER TABLE `talukas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `farmer_addresses`
--
ALTER TABLE `farmer_addresses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `farmer_crops`
--
ALTER TABLE `farmer_crops`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `farm_supplies`
--
ALTER TABLE `farm_supplies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_sales`
--
ALTER TABLE `product_sales`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `talukas`
--
ALTER TABLE `talukas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
