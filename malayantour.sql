-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2023 at 05:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malayantour`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` varchar(15) NOT NULL,
  `status` enum('ADDING','PENDING_PAYMENT','COMPLETED','') NOT NULL DEFAULT 'ADDING',
  `customerId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `createdAt`, `updatedAt`, `code`, `status`, `customerId`) VALUES
('15e65113-ee55-49a4-8d43-a7e3ae1cce16', '2023-11-17 03:49:38', '2023-11-17 03:49:38', '03382d0213d7d67', 'ADDING', '1485788c-726b-11ee-9678-00ff02f405b2'),
('1e56e330-f256-4bd2-b2f2-0ed238c81010', '2023-11-17 03:28:18', '2023-11-17 03:28:18', 'b28de0910d57567', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('1f67872b-3fb3-4979-883d-286a9626b1b4', '2023-11-14 13:49:09', '2023-11-14 13:49:09', '0ce5d2f942e565a', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('32ce9b52-5267-4c0e-bfa1-196350d70455', '2023-11-11 08:07:44', '2023-11-11 08:07:44', '0781e1703feb073', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('364faf08-94f5-4a33-9f6a-ab3bc9038ac4', '2023-11-14 04:26:01', '2023-11-14 04:26:01', '54daff89b7fcada', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('593634f2-0bdc-46f9-8b6a-e9aab5d9870d', '2023-11-11 12:58:59', '2023-11-11 12:58:59', 'd7178759e2b5ad9', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('6d1b9044-0664-4671-9e16-3374202da432', '2023-11-14 05:37:28', '2023-11-14 05:37:28', 'd7d285ce66bab47', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('7dcc84d4-8664-4a83-b087-2844dbaf3782', '2023-11-17 03:26:21', '2023-11-17 03:26:21', '13c6ef9707fd240', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('82fe4315-0ad7-4628-adf9-db413b7082f9', '2023-11-14 13:53:13', '2023-11-14 13:53:13', '52dc2181ac16c29', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('b3596cd6-4be6-48b3-bbaf-b90d9929b3f0', '2023-11-13 06:43:00', '2023-11-13 06:43:00', '4bcda26b4d2e5f2', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('d72d673d-bada-4769-8419-9a2cd5e49e42', '2023-11-15 12:06:04', '2023-11-15 12:06:04', '6770af5e7e21697', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2'),
('d8d09997-a162-4162-8689-1581dafb4304', '2023-11-11 08:12:39', '2023-11-11 08:12:39', 'cd14e1c923d5b3d', 'COMPLETED', '1485788c-726b-11ee-9678-00ff02f405b2');

-- --------------------------------------------------------

--
-- Table structure for table `cartcartitem`
--

CREATE TABLE `cartcartitem` (
  `cart_id` varchar(36) DEFAULT NULL,
  `cart_item_id` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartcartitem`
--

INSERT INTO `cartcartitem` (`cart_id`, `cart_item_id`) VALUES
('32ce9b52-5267-4c0e-bfa1-196350d70455', 'd1038304-d0c7-461d-bfda-345e303a8b27'),
('d8d09997-a162-4162-8689-1581dafb4304', '47d60e20-3299-409a-a704-a4356020c00e'),
('593634f2-0bdc-46f9-8b6a-e9aab5d9870d', 'e46fc3d6-e315-4f43-aaf6-60a450528eef'),
('593634f2-0bdc-46f9-8b6a-e9aab5d9870d', '8b3fe9e4-d866-4177-8961-33c4e50f54cc'),
('b3596cd6-4be6-48b3-bbaf-b90d9929b3f0', '974a1844-e9d8-4bdc-af27-47c0e0f05199'),
('364faf08-94f5-4a33-9f6a-ab3bc9038ac4', '7273ecc0-8a52-40c9-b4cb-8abddf947e5b'),
('6d1b9044-0664-4671-9e16-3374202da432', '4554134d-98c5-4eae-9cfc-ad1374e13f99'),
('1f67872b-3fb3-4979-883d-286a9626b1b4', '462e566e-1094-4e4e-ab40-7c024a352973'),
('82fe4315-0ad7-4628-adf9-db413b7082f9', '62dfe8ef-e35f-45ae-89d4-5a11e94f60be'),
('82fe4315-0ad7-4628-adf9-db413b7082f9', 'aeb8c7c0-5e78-4601-84e0-166a9a61a6c8'),
('d72d673d-bada-4769-8419-9a2cd5e49e42', '7e200954-20b1-4b5e-8a5a-23b6bb478080'),
('d72d673d-bada-4769-8419-9a2cd5e49e42', 'ece9e8c0-308b-4e1b-b638-667db5976786'),
('7dcc84d4-8664-4a83-b087-2844dbaf3782', '1cfcc788-3516-4ee2-a72a-1953cbcc600b'),
('1e56e330-f256-4bd2-b2f2-0ed238c81010', 'cbfeeaea-4e89-497b-b326-40feca0f1126'),
('1e56e330-f256-4bd2-b2f2-0ed238c81010', 'a52aa9c4-0b85-451b-b0e3-338ac85f7ca3');

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE `cartitem` (
  `id` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `quantity` int(11) NOT NULL,
  `productId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartitem`
--

INSERT INTO `cartitem` (`id`, `createdAt`, `updatedAt`, `quantity`, `productId`) VALUES
('079f87c7-e4c6-4148-803b-43098036753d', '2023-11-17 02:26:40', '2023-11-17 02:26:40', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('1cfcc788-3516-4ee2-a72a-1953cbcc600b', '2023-11-17 03:27:52', '2023-11-17 03:27:52', 1, '6e0f3f83-6fd4-42f9-b37b-9b9c7a4088ae'),
('4554134d-98c5-4eae-9cfc-ad1374e13f99', '2023-11-14 13:46:13', '2023-11-14 13:46:13', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('462e566e-1094-4e4e-ab40-7c024a352973', '2023-11-14 13:52:45', '2023-11-14 13:52:45', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('47d60e20-3299-409a-a704-a4356020c00e', '2023-11-11 12:57:50', '2023-11-11 12:57:50', 2, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('62dfe8ef-e35f-45ae-89d4-5a11e94f60be', '2023-11-15 12:02:55', '2023-11-15 12:02:55', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b4'),
('6d793632-6c79-4ffe-b329-e52c6c621919', '2023-11-17 03:04:56', '2023-11-17 03:04:56', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b4'),
('7273ecc0-8a52-40c9-b4cb-8abddf947e5b', '2023-11-14 04:26:47', '2023-11-14 04:26:47', 12, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('7e200954-20b1-4b5e-8a5a-23b6bb478080', '2023-11-17 03:01:05', '2023-11-17 03:01:05', 2, '6d6f145e-64c1-4d11-bbb1-9696955a43bd'),
('8b3fe9e4-d866-4177-8961-33c4e50f54cc', '2023-11-13 06:42:38', '2023-11-13 06:42:38', 2, '0eff89c4-7d40-11ee-801f-00ff02f405b4'),
('974a1844-e9d8-4bdc-af27-47c0e0f05199', '2023-11-14 04:25:14', '2023-11-14 04:25:14', 4, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('a52aa9c4-0b85-451b-b0e3-338ac85f7ca3', '2023-11-17 03:39:32', '2023-11-17 03:39:32', 1, '6d6f145e-64c1-4d11-bbb1-9696955a43bd'),
('aeb8c7c0-5e78-4601-84e0-166a9a61a6c8', '2023-11-15 12:03:02', '2023-11-15 12:03:02', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('b1e77b7c-6e9b-4ebe-b097-868bf98417eb', '2023-11-17 02:25:55', '2023-11-17 02:25:55', 3, '0eff89c4-7d40-11ee-801f-00ff02f405b4'),
('b8f79604-a6e6-49ac-b54c-d9d568166753', '2023-11-17 02:25:42', '2023-11-17 02:25:42', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('cbfeeaea-4e89-497b-b326-40feca0f1126', '2023-11-17 03:39:30', '2023-11-17 03:39:30', 2, '0eff89c4-7d40-11ee-801f-00ff02f405b4'),
('d1038304-d0c7-461d-bfda-345e303a8b27', '2023-11-11 08:12:21', '2023-11-11 08:12:21', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('e46fc3d6-e315-4f43-aaf6-60a450528eef', '2023-11-12 17:43:13', '2023-11-12 17:43:13', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('ece9e8c0-308b-4e1b-b638-667db5976786', '2023-11-17 03:02:19', '2023-11-17 03:02:19', 3, '0eff89c4-7d40-11ee-801f-00ff02f405b2'),
('eeaf96f1-c860-49bb-84e3-abdc8c86c82c', '2023-11-17 02:25:31', '2023-11-17 02:25:31', 1, '0eff89c4-7d40-11ee-801f-00ff02f405b2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAT` timestamp NOT NULL DEFAULT current_timestamp(),
  `fullName` char(50) NOT NULL,
  `birthday` date NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `createdAt`, `updatedAT`, `fullName`, `birthday`, `phoneNumber`, `email`, `userId`) VALUES
('1485788c-726b-11ee-9678-00ff02f405b2', '2023-10-24 12:44:32', '2023-10-24 12:44:32', 'Gerald Lee Jia', '2001-11-14', '0186689133', 'geraldlee168168@gmail.com', '11ffb377-726b-11ee-9678-00ff02f405b2');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `id` varchar(36) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `fileUrl` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`id`, `fileName`, `fileUrl`) VALUES
('017c8850-729b-47ae-9b41-0a195d828b01', 'Confirmation_for_Booking_ID_#_1085857893.pdf', 'uploads/Confirmation_for_Booking_ID.pdf'),
('0da1279f-4c1a-4ef4-a9fc-277149a74069', 'Confirmation_for_Booking_ID_#_1085857893.pdf', 'uploads/Confirmation_for_Booking_ID.pdf'),
('1f1b5f6e-bea2-4150-bc5b-111fd13e06ed', 'Materials needed for dance team.pdf', 'uploads/Materials needed for dance team.pdf'),
('2ab0892a-0b2b-4a4e-bfb9-c106cad3aade', 'Informational Interview Questions (1).pdf', 'uploads/Informational Interview Questions (1).pdf'),
('30e3082f-d6c6-40d0-b00c-bc2d2c80efde', 'Confirmation_for_Booking_ID_#_1085857893.pdf', 'uploads/Confirmation_for_Booking_ID.pdf'),
('42abcb7c-26af-418e-9008-22a56d0b5b78', 'Confirmation_for_Booking_ID_#_1085857893.pdf', 'uploads/Confirmation_for_Booking_ID.pdf'),
('71d7e4fd-8bb1-4e5f-ad9c-2985f5bb6c06', 'Confirmation_for_Booking_ID_#_1085857893.pdf', 'uploads/Confirmation_for_Booking_ID.pdf'),
('8375adb3-a18f-4777-b607-00bc2beedea7', 'receipt-6770af5e7e21697.pdf', 'uploads/receipt-6770af5e7e21697.pdf'),
('886cfa9a-7d3f-11ee-801f-00ff02f405b2', 'test', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjIiuGCr7GCAxWSR2cHHbAiAiIQFnoECAgQAQ&url=https%3A%2F%2Fwww.w3.org%2FWAI%2FER%2Ftests%2Fxhtml%2Ftestfiles%2Fresources%2Fpdf%2Fdummy.pdf&usg=AOvVaw1yfXcABf-Bej4cjTs8tPJn&opi=89978449'),
('d4ea07a5-3038-4743-a5c8-2e15dadb8b9f', 'Materials needed for dance team.pdf', 'uploads/Materials needed for dance team.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `ID` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `merchantName` varchar(255) NOT NULL,
  `contactNumber` varchar(20) NOT NULL,
  `companyDescription` text NOT NULL,
  `status` enum('PENDING','APPROVED','REJECTED') NOT NULL,
  `documentID` varchar(36) NOT NULL,
  `userId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`ID`, `createdAt`, `updatedAt`, `merchantName`, `contactNumber`, `companyDescription`, `status`, `documentID`, `userId`) VALUES
('028a61b9-b8d9-450a-bd7a-1476b217694c', '2023-11-17 03:32:30', '2023-11-17 03:32:30', 'ian', '0128121', 'hi', 'PENDING', '8375adb3-a18f-4777-b607-00bc2beedea7', '5861289f-41aa-443e-8c23-15bda430f630'),
('7f0348c8-cc9f-4ac2-9b25-23dd641aa0f6', '2023-11-13 18:43:12', '2023-11-13 18:43:12', 't5', 't4', 't4', 'REJECTED', '017c8850-729b-47ae-9b41-0a195d828b01', '298abba3-e56b-4d1b-9170-803ddb9edbce'),
('827b3944-2ed1-43c3-94cf-6e7e1af5c0af', '2023-11-14 05:40:47', '2023-11-14 05:40:47', 'ian', '12', 'ian', 'APPROVED', '1f1b5f6e-bea2-4150-bc5b-111fd13e06ed', '8a056ad8-ef22-48c4-9b49-a30c95a2ae50'),
('b6257fd1-f88d-459f-a05e-a921db6c9121', '2023-11-14 04:29:34', '2023-11-14 04:29:34', 't2', 't2', 't2', 'APPROVED', 'd4ea07a5-3038-4743-a5c8-2e15dadb8b9f', 'ac3d499a-7c38-4701-be2d-ac23e5f9bc33'),
('b79c9289-7d3f-11ee-801f-00ff02f405b2', '2023-11-13 18:16:49', '2023-11-13 18:16:49', 'merchant 1', '0123456789', 'Testing 123', 'APPROVED', '886cfa9a-7d3f-11ee-801f-00ff02f405b2', '784e3544-0cce-497b-beaa-1675537720b6');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `productCode` varchar(20) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `imageUrl` varchar(1000) DEFAULT NULL,
  `merchantID` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `createdAt`, `updatedAt`, `name`, `productCode`, `description`, `price`, `amount`, `imageUrl`, `merchantID`) VALUES
('0eff89c4-7d40-11ee-801f-00ff02f405b2', '2023-11-07 07:34:17', '2023-11-07 07:34:17', 'Sunway Lagoon', 'sunway_lagoon', 'Enjoy up to 90 rides and attractions, including the popular Vuvuzela, Monsoon 360, Jungle Fury, Pirates Revenge, and more!', 150.00, 196, 'uploads/_EM52402.jpg', 'b79c9289-7d3f-11ee-801f-00ff02f405b2'),
('0eff89c4-7d40-11ee-801f-00ff02f405b4', '2023-11-07 07:34:17', '2023-11-07 07:34:17', 'Genting Highland theme park', 'Product2', 'Enjoy up to 90 rides and attractions, including the popular Vuvuzela, Monsoon 360, Jungle Fury, Pirates Revenge, and more! have fun', 150.00, 17, 'https://dejiki.com/wp-content/uploads/2022/08/Genting-SkyWorlds-Theme-Park-1-Overview-Birds-Eye-Hero.jpg', '7f0348c8-cc9f-4ac2-9b25-23dd641aa0f6'),
('6d6f145e-64c1-4d11-bbb1-9696955a43bd', '2023-11-17 03:00:45', '2023-11-17 03:00:45', 'Zoo negara', 'zooNegara', 'The National Zoo is a Malaysian zoo located on 110 acres of land in Ulu Klang, Gombak District, Selangor, Malaysia. ', 20.00, 12, 'uploads/tvjdfbvaj9am8vyn0wgu.jpg', '7f0348c8-cc9f-4ac2-9b25-23dd641aa0f6'),
('6e0f3f83-6fd4-42f9-b37b-9b9c7a4088ae', '2023-11-17 02:56:04', '2023-11-17 02:56:04', 'Lavender Garden, Cameron Highlands', 'lgch', 'Small garden with lavender & other colorful blooms, plus a cafe/ice cream parlor & a gift shop.', 20.00, 0, 'uploads/_EM52402.jpg', '7f0348c8-cc9f-4ac2-9b25-23dd641aa0f6');

-- --------------------------------------------------------

--
-- Table structure for table `purchasehistory`
--

CREATE TABLE `purchasehistory` (
  `ID` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `totalAmount` decimal(10,2) NOT NULL,
  `customerID` varchar(36) NOT NULL,
  `cartId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchasehistory`
--

INSERT INTO `purchasehistory` (`ID`, `createdAt`, `updatedAt`, `totalAmount`, `customerID`, `cartId`) VALUES
('15e65113-ee55-49a4-8d43-a7e3ae1cce16', '2023-11-17 03:49:38', '2023-11-17 03:49:38', 320.00, '1485788c-726b-11ee-9678-00ff02f405b2', '1e56e330-f256-4bd2-b2f2-0ed238c81010'),
('1e56e330-f256-4bd2-b2f2-0ed238c81010', '2023-11-17 03:28:18', '2023-11-17 03:28:18', 20.00, '1485788c-726b-11ee-9678-00ff02f405b2', '7dcc84d4-8664-4a83-b087-2844dbaf3782'),
('1f67872b-3fb3-4979-883d-286a9626b1b4', '2023-11-14 13:49:09', '2023-11-14 13:49:09', 150.00, '1485788c-726b-11ee-9678-00ff02f405b2', '6d1b9044-0664-4671-9e16-3374202da432'),
('364faf08-94f5-4a33-9f6a-ab3bc9038ac4', '2023-11-14 04:26:01', '2023-11-14 04:26:01', 600.00, '1485788c-726b-11ee-9678-00ff02f405b2', 'b3596cd6-4be6-48b3-bbaf-b90d9929b3f0'),
('593634f2-0bdc-46f9-8b6a-e9aab5d9870d', '2023-11-11 12:58:59', '2023-11-11 12:58:59', 300.00, '1485788c-726b-11ee-9678-00ff02f405b2', 'd8d09997-a162-4162-8689-1581dafb4304'),
('6d1b9044-0664-4671-9e16-3374202da432', '2023-11-14 05:37:28', '2023-11-14 05:37:28', 1800.00, '1485788c-726b-11ee-9678-00ff02f405b2', '364faf08-94f5-4a33-9f6a-ab3bc9038ac4'),
('7dcc84d4-8664-4a83-b087-2844dbaf3782', '2023-11-17 03:26:21', '2023-11-17 03:26:21', 490.00, '1485788c-726b-11ee-9678-00ff02f405b2', 'd72d673d-bada-4769-8419-9a2cd5e49e42'),
('82fe4315-0ad7-4628-adf9-db413b7082f9', '2023-11-14 13:53:13', '2023-11-14 13:53:13', 150.00, '1485788c-726b-11ee-9678-00ff02f405b2', '1f67872b-3fb3-4979-883d-286a9626b1b4'),
('b3596cd6-4be6-48b3-bbaf-b90d9929b3f0', '2023-11-13 06:43:00', '2023-11-13 06:43:00', 450.00, '1485788c-726b-11ee-9678-00ff02f405b2', '593634f2-0bdc-46f9-8b6a-e9aab5d9870d'),
('d72d673d-bada-4769-8419-9a2cd5e49e42', '2023-11-15 12:06:04', '2023-11-15 12:06:04', 300.00, '1485788c-726b-11ee-9678-00ff02f405b2', '82fe4315-0ad7-4628-adf9-db413b7082f9'),
('d8d09997-a162-4162-8689-1581dafb4304', '2023-11-11 08:12:39', '2023-11-11 08:12:39', 150.00, '1485788c-726b-11ee-9678-00ff02f405b2', '32ce9b52-5267-4c0e-bfa1-196350d70455');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `rating` float NOT NULL,
  `customerId` varchar(36) NOT NULL,
  `productId` varchar(36) NOT NULL,
  `cartItemId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `createdAt`, `updatedAt`, `description`, `rating`, `customerId`, `productId`, `cartItemId`) VALUES
('b115dae3-4b70-404e-8682-acc19b9763ab', '2023-11-17 03:26:49', '2023-11-17 03:26:49', 'no water', 3, '1485788c-726b-11ee-9678-00ff02f405b2', '0eff89c4-7d40-11ee-801f-00ff02f405b2', 'ece9e8c0-308b-4e1b-b638-667db5976786'),
('d29e93a4-ff44-41ac-9338-582c84732479', '2023-11-13 17:14:27', '2023-11-13 17:14:27', 'test', 4, '1485788c-726b-11ee-9678-00ff02f405b2', '0eff89c4-7d40-11ee-801f-00ff02f405b2', 'e46fc3d6-e315-4f43-aaf6-60a450528eef'),
('e2d4854a-8c28-4760-95ba-d553979e684b', '2023-11-13 17:19:14', '2023-11-13 17:19:14', 'test', 4, '1485788c-726b-11ee-9678-00ff02f405b2', '0eff89c4-7d40-11ee-801f-00ff02f405b4', '8b3fe9e4-d866-4177-8961-33c4e50f54cc'),
('e5d9e5d0-3c0a-49fb-8c0f-e3e9b3652025', '2023-11-14 04:26:13', '2023-11-14 04:26:13', 'test', 5, '1485788c-726b-11ee-9678-00ff02f405b2', '0eff89c4-7d40-11ee-801f-00ff02f405b2', '974a1844-e9d8-4bdc-af27-47c0e0f05199');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(36) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('CUSTOMER','MERCHANT','ADMIN','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `createdAt`, `updatedAt`, `userName`, `password`, `type`) VALUES
('11ffb377-726b-11ee-9678-00ff02f405b2', '2023-10-24 12:44:28', '2023-10-24 12:44:28', 'geraldlee2001', '$2y$10$no44VdmTisDWFJTm3gplku8nXxqmybKr2.ps44xjUnLeiegGSqHga', 'CUSTOMER'),
('1485901b-7553-4a57-add9-cbd6bf30be6b', '2023-11-13 18:35:35', '2023-11-13 18:35:35', 'test2', '$2y$10$loTHPyH472Gtfyxa2nZwpuQxoBHFfHw7gIlnhuFmo.vmjMpYOxMrK', 'MERCHANT'),
('298abba3-e56b-4d1b-9170-803ddb9edbce', '2023-11-13 18:42:59', '2023-11-13 18:42:59', 't4', '$2y$10$llOz0NTgqwwnke9JQ0NIsOBlg8Sgq188kYjSvSMTSWbLQSwz98n3i', 'MERCHANT'),
('5861289f-41aa-443e-8c23-15bda430f630', '2023-11-17 03:32:14', '2023-11-17 03:32:14', 'mer12', '$2y$10$CLA4Tv5E17MupOXDz/v/TeDdopXGv8bFidi8w3f/dTxYT2RGde1Me', 'MERCHANT'),
('740660a2-7237-11ee-9795-3c9c0f64ed48', '2023-10-24 06:34:59', '2023-10-24 06:34:59', 'admin', '$2y$10$sEdYf/3s8P2M4kndcs.zGOPIB.lRSG30LDCc2.lbDuV4iGCcOPmBu', 'ADMIN'),
('74227764-1883-426a-abc0-dfeb2b05cd6f', '2023-11-14 04:49:25', '2023-11-14 04:49:25', 'florence', '$2y$10$3seGJtef8k3e9lLER8xwUeufAtWuH3y3FjIsmVX8tcYGDHYooNSqW', 'CUSTOMER'),
('784e3544-0cce-497b-beaa-1675537720b6', '2023-11-07 07:28:15', '2023-11-07 07:28:15', 'merchant1', '$2y$10$w2zbBkdtsi3vcoNjzBeeB.FUZzBbtWE4btNdBnrmZcriTS9K2EE1y', 'MERCHANT'),
('81755d9f-aad2-4312-aa5a-b1e069df682c', '2023-11-13 18:09:35', '2023-11-13 18:09:35', 'merchant2', '$2y$10$w2zbBkdtsi3vcoNjzBeeB.FUZzBbtWE4btNdBnrmZcriTS9K2EE1y', 'MERCHANT'),
('8630e8a0-731a-4ea1-aeec-c377be625c91', '2023-11-13 18:39:46', '2023-11-13 18:39:46', 'test3', '$2y$10$oYuEtJrQkCn4lgs32KiiQexuneH/8xaDfzFmDlcX2w8e9r1FdBOdG', 'MERCHANT'),
('8a056ad8-ef22-48c4-9b49-a30c95a2ae50', '2023-11-14 05:40:18', '2023-11-14 05:40:18', 't12', '$2y$10$vZFU.S9agozoMq9Tb1HXRu/FL01cXZzDyjLaG8wL4fXHb0MAJAoam', 'MERCHANT'),
('ac3d499a-7c38-4701-be2d-ac23e5f9bc33', '2023-11-14 04:29:23', '2023-11-14 04:29:23', 't2', '$2y$10$XEtDxJ6e1bUN/r2w.f8EqOoM2OHGQ4XzIsSLClHtAWQY3Dc2UssJi', 'MERCHANT'),
('c63a6e98-be6e-43e7-8361-cf1de904e4ec', '2023-11-14 04:48:03', '2023-11-14 04:48:03', 'florencetan', '$2y$10$UdFaWSaDxFbWkyE/p3g/juXNtEMHlaYxLB9nG1FlJ2PJavjHHUsye', 'CUSTOMER'),
('d0d96d89-219f-4302-8655-08f47a9d1090', '2023-11-13 18:35:09', '2023-11-13 18:35:09', 'test', '$2y$10$EczmalqBX1KAwFzRLDS6xuEdKMMGcRVMaIYMUb5st3ZMoF4Mq.h5m', 'MERCHANT'),
('f30d08a7-4d3d-461b-a065-23540e7af5b4', '2023-11-12 17:40:22', '2023-11-12 17:40:22', '1234', '$2y$10$VOUmZTqKi7XAV6t.Ee79DumC8KPObQBN4yyIjrj9Za8Wjc6yK1vVa', 'CUSTOMER'),
('f7876ea1-909e-425a-8cf7-1000d4c24d65', '2023-11-17 03:22:53', '2023-11-17 03:22:53', 'customer', '$2y$10$6UDuBbg.CHYND7AvR4w7E.iRvtuIOwVBsfBfUMfh1b6OAmHMbr9R.', 'CUSTOMER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CartCustomer` (`customerId`);

--
-- Indexes for table `cartcartitem`
--
ALTER TABLE `cartcartitem`
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `cart_item_id` (`cart_item_id`);

--
-- Indexes for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_CartItemProduct` (`productId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_MerchantDocument` (`documentID`),
  ADD KEY `FK_MerchantUser` (`userId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `merchantID` (`merchantID`);

--
-- Indexes for table `purchasehistory`
--
ALTER TABLE `purchasehistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_PurchaseHistoryCustomer` (`customerID`),
  ADD KEY `FK_PurchaseHistoryCart` (`cartId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ReviewCustomer` (`customerId`),
  ADD KEY `FK_ReviewProduct` (`productId`),
  ADD KEY `FK_ReviewCartItem` (`cartItemId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CartCustomer` FOREIGN KEY (`customerId`) REFERENCES `customer` (`id`);

--
-- Constraints for table `cartcartitem`
--
ALTER TABLE `cartcartitem`
  ADD CONSTRAINT `cartcartitem_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cartcartitem_ibfk_2` FOREIGN KEY (`cart_item_id`) REFERENCES `cartitem` (`id`);

--
-- Constraints for table `cartitem`
--
ALTER TABLE `cartitem`
  ADD CONSTRAINT `FK_CartItemProduct` FOREIGN KEY (`productId`) REFERENCES `product` (`ID`);

--
-- Constraints for table `merchants`
--
ALTER TABLE `merchants`
  ADD CONSTRAINT `FK_MerchantDocument` FOREIGN KEY (`documentID`) REFERENCES `document` (`id`),
  ADD CONSTRAINT `FK_MerchantUser` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`merchantID`) REFERENCES `merchants` (`ID`);

--
-- Constraints for table `purchasehistory`
--
ALTER TABLE `purchasehistory`
  ADD CONSTRAINT `FK_PurchaseHistoryCart` FOREIGN KEY (`cartId`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `FK_PurchaseHistoryCustomer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_ReviewCartItem` FOREIGN KEY (`cartItemId`) REFERENCES `cartitem` (`id`),
  ADD CONSTRAINT `FK_ReviewCustomer` FOREIGN KEY (`customerId`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `FK_ReviewProduct` FOREIGN KEY (`productId`) REFERENCES `product` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
