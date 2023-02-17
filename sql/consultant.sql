-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultant`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `title`, `description`, `image`, `created`, `modified`) VALUES
(1, 'About Us Company', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. \r\n\r\n', '63abec04dc3bf_user-3.jpg', '2022-12-28 07:11:00', '2022-12-28 07:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `book_appointments`
--

CREATE TABLE `book_appointments` (
  `id` int(11) NOT NULL,
  `visiting_hours` varchar(255) NOT NULL,
  `consultant_name` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `specify_address` varchar(500) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_appointments`
--

INSERT INTO `book_appointments` (`id`, `visiting_hours`, `consultant_name`, `profession`, `location`, `specify_address`, `name`, `email`, `mobile_number`, `created`, `modified`) VALUES
(1, '2022-12-30T16:05', 'Madhu', 'Realestate Profession', 'Visit in Consultant\'s Office', 'Chennai', 'Madhu', NULL, '+91 8610693389', '2022-12-29 08:33:47', '2022-12-29 08:33:47'),
(2, '2023-01-04T17:53', 'Blaa', 'Architect', 'Other Location', 'tnagar', 'Rekha s', NULL, '9500057703', '2023-01-03 10:22:38', '2023-01-03 10:22:38'),
(3, '2023-02-09T16:17', 'Test', 'Consultant', 'Other Location', '', 'Bala', 'madhu@yopmail.com', '+91 8610693389', '2023-02-06 08:47:09', '2023-02-06 08:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(2, 'Property Buyers', '2022-12-26 10:44:11', '2022-12-26 10:44:11'),
(3, 'New / Ongoing Construction', '2022-12-26 10:44:38', '2022-12-26 10:44:38'),
(4, 'Existing Building Renovation', '2022-12-26 10:44:52', '2022-12-26 10:44:52');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `sub_sub_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner_description` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `sub_sub_category_id`, `name`, `qualification`, `profession`, `experience`, `address`, `price`, `image`, `banner_description`, `created`, `modified`) VALUES
(1, '0001', 1, 'Ar.Bala Kumaran	', 'B.Arch', 'Practicing Architect', '12', 'Chennai', '599', '63b3c7e6a741b_Ref People 3.jpg', 'Architect plans, designs aesthetic and functional aspect of buildings & oversees the construction works.', '2023-01-03 06:15:02', '2023-02-15 06:59:56'),
(2, '0002', 1, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '12', 'Chennai', '599', '63b3c838ba357_Ref People 2 copy.jpg', 'Architect plans, designs aesthetic and functional aspect of buildings & oversees the construction works.', '2023-01-03 06:16:24', '2023-02-15 06:59:53'),
(3, '0003', 2, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63b3c894a6bf7_Ref People 4.jpg', 'Civil Engineer oversees construction and maintenance of building\'s structure and facilities.', '2023-01-03 06:17:56', '2023-02-15 06:53:40'),
(4, '0004', 3, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '699', '63b3c924e886d_Ref People copy.jpg', 'Interior Designer makes indoor space more functional, safe & beautiful.', '2023-01-03 06:20:20', '2023-02-15 06:53:55'),
(5, '0005', 4, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63b3c93d1b9f2_Ref People 3.jpg', 'Structural Engineer takes care of the safety and stability aspects of RCC buildings & structures.', '2023-01-03 06:20:45', '2023-02-15 06:54:07'),
(6, '0006', 5, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63b3c952e05cc_Ref People 4.jpg', 'Vastu expert suggest  positioning and directional rules helpful in forming positive energy of the building.', '2023-01-03 06:21:06', '2023-02-15 06:54:52'),
(7, '0007', 6, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63b3c9720349c_Ref People copy.jpg', 'Approval consultant provides consultation on building bye-laws and approvals to be obtained from the statutory body.', '2023-01-03 06:21:38', '2023-02-15 06:55:10'),
(8, '0008', 7, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '10', 'Chennai', '599', '63b3c98befed9_Ref People 2 copy.jpg', 'Documentation consultant provides consultation on legal documents, registration of property - FMB, patta and others.', '2023-01-03 06:22:03', '2023-02-15 06:55:25'),
(9, '0009', 8, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63b3c9a7159d1_Ref People copy.jpg', 'Property loan consultant assists in construction related documentation and loan application for salaried and self-employed.', '2023-01-03 06:22:31', '2023-02-15 07:17:09'),
(10, '0010', 9, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63b3c9cb5662b_Ref People 4.jpg', 'Property Lawyer advises on the legal aspects of your property. ', '2023-01-03 06:23:07', '2023-02-15 06:56:56'),
(11, '0011', 14, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '2', 'Chennai', '599', '63b3eea0e1b05_Ref People copy.jpg', 'Architect plans, designs aesthetic and functional aspect of buildings & oversees the construction works.', '2023-01-03 09:00:16', '2023-02-15 06:59:49'),
(12, '0012', 10, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '2', 'Chennai', '599', '63dcb037d425f_1.jpg', 'NRI consultant advises on the legal aspects of your property  if you are a Non-Resident of India', '2023-01-03 10:34:12', '2023-02-15 07:05:05'),
(13, '0013', 11, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb045b6f13_2.jpg', 'Tax consultant focus on compiling data, prepare filings for the proper jurisdictions.', '2023-01-03 10:34:39', '2023-02-15 07:05:29'),
(14, '0014', 12, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcb05142a8a_3.jpg', 'Electrical Engineer advises on the conservation and energy harvest, energy efiicient fixtures, equipments and appliances; energy sub-metering, Distributed Power Generation.', '2023-01-03 10:35:12', '2023-02-15 07:05:57'),
(15, '0015', 13, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb05cdaa16_4.jpg', 'Plumbing consultant provides advice on water efficient plumbing fixtures, water efficient landscaping, irrigation systems, water use monitoring.', '2023-01-03 10:35:40', '2023-02-15 07:06:25'),
(16, '0016', 15, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb068bf849_5.jpg', 'Civil Engineer oversees construction and maintenance of building\'s structure and facilities.', '2023-01-03 10:36:00', '2023-02-15 07:01:35'),
(17, '0017', 16, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb073a64dd_6.jpg', 'Interior Designer makes indoor space more functional, safe & beautiful.', '2023-01-03 10:36:25', '2023-02-15 07:02:03'),
(18, '0018', 17, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63dcb07e50227_1.jpg', 'Landscape consultant designs, oversees the creation, regeneration and development of landscape.', '2023-01-03 10:37:21', '2023-02-15 07:07:35'),
(19, '0019', 18, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb08ae20da_5.jpg', 'Structural Engineer takes care of the safety and stability aspects of RCC buildings & structures.', '2023-01-03 10:41:13', '2023-02-15 07:02:29'),
(20, '0020', 19, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb09ace5fd_3.jpg', 'Vastu expert suggest  positioning and directional rules helpful in forming positive energy of the building.', '2023-01-03 10:41:44', '2023-02-15 07:03:01'),
(21, '0021', 20, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63dcb0b07da65_2.jpg', 'Approval consultant provides consultation on building bye-laws and approvals to be obtained from the statutory body.', '2023-01-03 10:42:06', '2023-02-15 07:03:23'),
(22, '0022', 21, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb0bc33553_3.jpg', '', '2023-01-03 10:42:38', '2023-02-03 06:59:08'),
(23, '0023', 22, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcb0cb58153_4.jpg', 'Documentation consultant provides consultation on legal documents, registration of property - FMB, patta and others.', '2023-01-03 10:43:05', '2023-02-15 07:03:42'),
(24, '0024', 23, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb0d931d50_6.jpg', 'Property Lawyer advises on the legal aspects of your property. ', '2023-01-03 10:43:21', '2023-02-15 06:57:09'),
(25, '0025', 24, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb0e94288c_1.jpg', 'Tax consultant focus on compiling data, prepare filings for the proper jurisdictions.', '2023-01-03 10:43:49', '2023-02-15 07:05:31'),
(26, '0026', 25, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb0fb01566_3.jpg', 'CCTV consultants are experts in providing solutions for Video Surveillance and Installations. ', '2023-01-03 10:44:15', '2023-02-15 07:09:50'),
(27, '0027', 26, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '2', 'Chennai', '599', '63dcb10856219_4.jpg', ' Fire and safety consultant provides advice and guidance in matters relating to Fire Fighting, Fire Prevention or Fire Engineering.', '2023-01-03 10:44:42', '2023-02-15 07:10:38'),
(28, '0028', 27, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '10', 'Chennai', '599', '63dcb11552c48_6.jpg', 'Electrical Engineer advises on the conservation and energy harvest, energy efiicient fixtures, equipments and appliances; energy sub-metering, Distributed Power Generation.', '2023-01-03 10:45:17', '2023-02-15 07:05:59'),
(29, '0029', 28, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb1220cfbe_2.jpg', 'HVAC consultant advice on use of eco - friendly refrigerants, centralised Heating Ventilation and Air-Conditioning equipment installation.', '2023-01-03 10:45:46', '2023-02-15 07:10:59'),
(30, '0030', 29, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63dcb12c0f911_5.jpg', 'Plumbing consultant provides advice on water efficient plumbing fixtures, water efficient landscaping, irrigation systems, water use monitoring.', '2023-01-03 10:46:17', '2023-02-15 07:06:29'),
(31, '0031', 30, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb14fe53a7_11.jpg', 'Termite Consultant advises on termite control, Mosquito control, Rodent control,Cockroach treatment,Bed bugs control in buildings.', '2023-01-03 10:46:45', '2023-02-15 07:11:23'),
(32, '0032', 31, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb15a8d40d_22.jpg', 'Waterproofing and damproofing consultant are expert solution providers - keeps soil moisture out of structure, protect structure from moisture and liquid water. ', '2023-01-03 10:47:11', '2023-02-15 07:12:35'),
(33, '0033', 32, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb16578a5e_33.jpg', 'RWH consultants are Engineers with professional experience from the field of Rainwater Harvesting to buildings.', '2023-01-03 10:47:37', '2023-02-15 07:14:04'),
(34, '0034', 33, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb1707d49b_44.jpg', '', '2023-01-03 10:47:59', '2023-02-03 07:02:08'),
(35, '0035', 34, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb17ab41ff_55.jpg', 'Soil test consultants are experts in the field of geotechnical, soil investigation. classification, analysis and testing of land.', '2023-01-03 10:48:22', '2023-02-15 07:14:58'),
(36, '0036', 35, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb1846c3eb_66.jpg', 'Solar power consultants are experts in renewable technologies for on-site power generation, energy for water heating applications.', '2023-01-03 10:48:44', '2023-02-15 07:15:17'),
(37, '0037', 36, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb18df152d_22.jpg', 'Green building consultant provides sustainable solutions to buildings by addressing sustainable water practices, energy harvest, indoor environmental quality, health and hygiene of building occupants.', '2023-01-03 10:49:17', '2023-02-15 07:15:52'),
(38, '0038', 37, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb1978a5e1_66.jpg', 'Architect plans, designs aesthetic and functional aspect of buildings & oversees the construction works.', '2023-01-03 10:49:41', '2023-02-15 06:59:46'),
(39, '0039', 38, 'Ar.Bala Kumaran', 'M.E', 'Practicing Architect', '6', 'Chennai', '599', '63dcb1a14969b_44.jpg', 'Civil Engineer oversees construction and maintenance of building\'s structure and facilities.', '2023-01-03 10:50:03', '2023-02-15 07:01:38'),
(40, '0040', 39, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb1add7b8f_55.jpg', 'Interior Designer makes indoor space more functional, safe & beautiful.', '2023-01-03 10:50:23', '2023-02-15 07:02:06'),
(41, '0041', 40, 'BalaAr.Bala Kumaran', 'B.Arch', 'Practicing Architect', '2', 'Chennai', '599', '63dcb1d74dc4a_111.jpg', 'Landscape consultant designs, oversees the creation, regeneration and development of landscape.', '2023-01-03 10:50:52', '2023-02-15 07:07:37'),
(42, '0042', 42, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '2', 'Chennai', '599', '63dcb1e3dca9f_222.jpg', 'Vastu expert suggest  positioning and directional rules helpful in forming positive energy of the building.', '2023-01-03 10:51:37', '2023-02-15 07:03:03'),
(43, '0043', 41, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb1ee74a2d_333.jpg', 'Structural Engineer takes care of the safety and stability aspects of RCC buildings & structures.', '2023-01-03 10:52:15', '2023-02-15 07:02:27'),
(44, '0044', 43, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '1', 'Chennai', '599', '63dcb1f915a04_444.jpg', 'Approval consultant provides consultation on building bye-laws and approvals to be obtained from the statutory body.', '2023-01-03 10:52:37', '2023-02-15 07:03:25'),
(45, '0045', 44, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb207e471f_555.jpg', '', '2023-01-03 10:52:59', '2023-02-03 07:04:39'),
(46, '0046', 45, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb212b79b2_666.jpg', 'Documentation consultant provides consultation on legal documents, registration of property - FMB, patta and others.', '2023-01-03 10:53:21', '2023-02-15 07:03:45'),
(47, '0047', 46, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcb22762fc5_111.jpg', 'Property Lawyer advises on the legal aspects of your property. ', '2023-01-03 10:53:46', '2023-02-15 06:57:14'),
(48, '0048', 47, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63dcb2383d974_222.jpg', 'Tax consultant focus on compiling data, prepare filings for the proper jurisdictions.', '2023-01-03 10:54:10', '2023-02-15 07:05:34'),
(49, '0049', 48, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb245c75e8_666.jpg', 'CCTV consultants are experts in providing solutions for Video Surveillance and Installations. ', '2023-01-03 10:54:38', '2023-02-15 07:09:52'),
(50, '0050', 49, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb25508a78_444.jpg', ' Fire and safety consultant provides advice and guidance in matters relating to Fire Fighting, Fire Prevention or Fire Engineering.', '2023-01-03 10:54:59', '2023-02-15 07:10:41'),
(51, '0051', 50, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63dcb28cd1046_a111.jpg', 'Electrical Engineer advises on the conservation and energy harvest, energy efiicient fixtures, equipments and appliances; energy sub-metering, Distributed Power Generation.', '2023-01-03 10:55:26', '2023-02-15 07:06:01'),
(52, '0052', 51, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63dcb29803132_a222.jpg', 'HVAC consultant advice on use of eco - friendly refrigerants, centralised Heating Ventilation and Air-Conditioning equipment installation.', '2023-01-03 10:55:48', '2023-02-15 07:11:01'),
(53, '0053', 52, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb2a188354_a333.jpg', 'Plumbing consultant provides advice on water efficient plumbing fixtures, water efficient landscaping, irrigation systems, water use monitoring.', '2023-01-03 10:56:14', '2023-02-15 07:06:31'),
(54, '0054', 53, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63dcb2ab123e7_a444.jpg', 'Termite Consultant advises on termite control, Mosquito control, Rodent control,Cockroach treatment,Bed bugs control in buildings.', '2023-01-03 10:56:39', '2023-02-15 07:11:27'),
(55, '0055', 54, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63dcb2b40ce30_a555.jpg', 'Waterproofing and damproofing consultant are expert solution providers - keeps soil moisture out of structure, protect structure from moisture and liquid water. ', '2023-01-03 10:57:01', '2023-02-15 07:12:37'),
(56, '0056', 55, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb2bd53927_a666.jpg', 'RWH consultants are Engineers with professional experience from the field of Rainwater Harvesting to buildings.', '2023-01-03 10:57:18', '2023-02-15 07:14:06'),
(57, '0057', 56, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcb2c813c82_a555.jpg', '', '2023-01-03 10:57:41', '2023-02-03 07:07:52'),
(58, '0058', 57, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb2d0eeea0_a222.jpg', 'Soil test consultants are experts in the field of geotechnical, soil investigation. classification, analysis and testing of land.', '2023-01-03 10:58:00', '2023-02-15 07:15:00'),
(59, '0059', 58, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb2dc3fff7_a111.jpg', 'Solar power consultants are experts in renewable technologies for on-site power generation, energy for water heating applications.', '2023-01-03 10:58:26', '2023-02-15 07:15:19'),
(60, '0060', 59, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb2e88d559_a111.jpg', 'Green building consultant provides sustainable solutions to buildings by addressing sustainable water practices, energy harvest, indoor environmental quality, health and hygiene of building occupants.', '2023-01-03 10:58:51', '2023-02-15 07:15:55'),
(61, '0061', 71, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb5a46a887_a666.jpg', 'Surveyor provides land and topographical surveying services.', '2023-02-03 07:20:04', '2023-02-15 06:54:40'),
(62, '0062', 60, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '10', 'Chennai', '599', '63dcb635cd526_a555.jpg', 'Property Valuer helps to determine the value of a piece of land or building;\r\nprovides pre-sale advice to land or property owners to determine the selling value of the property.', '2023-02-03 07:22:29', '2023-02-15 06:56:34'),
(63, '0063', 61, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb69882dbd_a111.jpg', 'Demolition consultant answers queries on building demolition, advises on demolition process, equipments, machineries, explosives asper the Government norms.', '2023-02-03 07:24:08', '2023-02-15 07:06:54'),
(64, '0064', 62, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63dcb6ed4047b_a333.jpg', 'GFRG consultant are specialists in new construction using GFRG panels.', '2023-02-03 07:25:33', '2023-02-15 07:07:14'),
(65, '0065', 75, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '6', 'Chennai', '599', '63dcb7223671c_a111.jpg', 'Lighting consultant provides expert advice for beautiful and functional lighting for your buildings, both interior and exterior.', '2023-02-03 07:26:26', '2023-02-15 07:08:04'),
(66, '0066', 63, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb76f35a7a_a222.jpg', 'Lighting consultant provides expert advice for beautiful and functional lighting for your buildings, both interior and exterior.', '2023-02-03 07:27:43', '2023-02-15 07:08:06'),
(67, '0067', 64, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcb79edb3b5_a666.jpg', 'PEB consultant advise on the design, safety and stability aspects of  Pre-Engineered structures.', '2023-02-03 07:28:30', '2023-02-15 07:08:34'),
(68, '0068', 65, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '2', 'Chennai', '599', '63dcb7df65c2e_a444.jpg', 'Verncacular architectural designers expert in using locally available resources and traditions to address local building and design needs.', '2023-02-03 07:29:35', '2023-02-15 07:09:05'),
(69, '0069', 66, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb81f3d5cd_a666.jpg', 'Automation consultant advises on the Electronic Security Solutions &  Smart Automation solutions for buildings.', '2023-02-03 07:30:39', '2023-02-15 07:09:25'),
(70, '0070', 67, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb860b3b7d_a111.jpg', 'Termite Consultant advises on termite control, Mosquito control, Rodent control,Cockroach treatment,Bed bugs control in buildings.', '2023-02-03 07:31:44', '2023-02-15 07:11:29'),
(71, '0071', 68, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcb8aa584b1_a444.jpg', 'Piped gas consultants are quality professionals on the LPG Gas Pipeline installations - Centralized gas pipeline System, Pipeline for Hotels, Restaurants, School and College Labs, Industrial Pipelines, and other buildings', '2023-02-03 07:32:58', '2023-02-15 07:13:40'),
(72, '0072', 69, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '10', 'Chennai', '599', '63dcb8dc103aa_a333.jpg', 'Water and waste water management consultants provide advice on water efficient plumbing fixtures, water efficient landscaping, waste water treatment and monitoring water usage.', '2023-02-03 07:33:48', '2023-02-15 07:14:39'),
(73, '0073', 70, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb8f89c63b_a555.jpg', 'Water divining consultants are ground water consultants providing groundwater, geotechnical & environmental solutions', '2023-02-03 07:34:16', '2023-02-15 07:15:34'),
(74, '0074', 72, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcb94116999_a444.jpg', 'Property loan consultant assists in construction related documentation and loan application for salaried and self-employed.', '2023-02-03 07:35:29', '2023-02-15 07:17:06'),
(75, '0075', 73, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcb9649f8f2_a666.jpg', 'Demolition consultant answers queries on building demolition, advises on demolition process, equipments, machineries, explosives asper the Government norms.', '2023-02-03 07:36:04', '2023-02-15 07:06:56'),
(76, '0076', 74, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63dcb9821957a_a444.jpg', 'GFRG consultant are specialists in new construction using GFRG panels.', '2023-02-03 07:36:34', '2023-02-15 07:07:16'),
(77, '0077', 76, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '9', 'Chennai', '599', '63dcb9af614c5_a222.jpg', 'PEB consultant advise on the design, safety and stability aspects of  Pre-Engineered structures.', '2023-02-03 07:37:19', '2023-02-15 07:08:36'),
(78, '0078', 77, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '5', 'Chennai', '599', '63dcb9d204aa5_a333.jpg', 'Verncacular architectural designers expert in using locally available resources and traditions to address local building and design needs.', '2023-02-03 07:37:54', '2023-02-15 07:09:07'),
(79, '0079', 78, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '4', 'Chennai', '599', '63dcba21386f3_a444.jpg', 'Automation consultant advises on the Electronic Security Solutions &  Smart Automation solutions for buildings.', '2023-02-03 07:39:13', '2023-02-15 07:09:28'),
(80, '0080', 79, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '8', 'Chennai', '599', '63dcba3cc97cb_a333.jpg', 'Piped gas consultants are quality professionals on the LPG Gas Pipeline installations - Centralized gas pipeline System, Pipeline for Hotels, Restaurants, School and College Labs, Industrial Pipelines, and other buildings', '2023-02-03 07:39:40', '2023-02-15 07:13:42'),
(81, '0081', 80, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '3', 'Chennai', '599', '63dcba50c3f71_a111.jpg', 'Water and waste water management consultants provide advice on water efficient plumbing fixtures, water efficient landscaping, waste water treatment and monitoring water usage.', '2023-02-03 07:40:00', '2023-02-15 07:14:41'),
(82, '0082', 81, 'Ar.Bala Kumaran', 'B.Arch', 'Practicing Architect', '7', 'Chennai', '599', '63dcba643e4f3_a222.jpg', 'Water divining consultants are ground water consultants providing groundwater, geotechnical & environmental solutions', '2023-02-03 07:40:20', '2023-02-15 07:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer_queries`
--

CREATE TABLE `customer_queries` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `consultation` varchar(255) NOT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_queries`
--

INSERT INTO `customer_queries` (`id`, `message`, `consultation`, `customer_id`, `name`, `mobile`, `created`, `modified`) VALUES
(1, 'Consultant Queries', 'Audio Consultation', '0003', 'Madhu', '+91 8610693389', '2022-12-29 09:13:19', '2022-12-29 09:13:19'),
(2, 'Test', 'Video Consultation', '0003', 'Bala', '+91 8610693389', '2023-01-03 08:19:19', '2023-01-03 08:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `image`, `title`, `created`, `modified`) VALUES
(1, '63cf422440dbf_1.png', 'Property Buyers & Sellers', '2023-01-03 06:32:20', '2023-01-24 02:27:48'),
(2, '63cf422c27a76_2.png', 'New / Ongoing Construction', '2023-01-03 06:34:54', '2023-01-24 02:27:56'),
(3, '63cf4232bdec0_3.png', 'Renovation & Refurbishment', '2023-01-03 06:35:03', '2023-01-24 02:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `payment_pages`
--

CREATE TABLE `payment_pages` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `payment_date` varchar(255) NOT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) NOT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT '0 => Initiated, 1 => Payment Processing, 2 => Payment Success, 3 => Payment Failed',
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `meta_description` varchar(1000) NOT NULL,
  `meta_title` varchar(1000) NOT NULL,
  `meta_keyword` varchar(1000) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `meta_description`, `meta_title`, `meta_keyword`, `created`, `modified`) VALUES
(1, 'Consultant ', 'Buildial Consultant', 'consultant ', '2022-12-28 07:23:17', '2022-12-28 07:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `id` int(11) NOT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `pintrest_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook_link`, `twitter_link`, `instagram_link`, `linkedin_link`, `pintrest_link`, `youtube_link`, `created`, `modified`) VALUES
(1, 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', NULL, 'https://www.youtube.com/', '2022-12-29 14:38:55', '2022-12-29 14:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `created`, `modified`) VALUES
(1, 2, 'Design Consultation', '2022-12-26 11:17:47', '2022-12-26 11:17:47'),
(2, 2, 'Document Consultation', '2022-12-26 11:20:16', '2022-12-26 11:20:16'),
(3, 2, 'Service Consultation', '2022-12-26 11:20:42', '2022-12-26 11:20:42'),
(4, 3, 'Design Consultation', '2022-12-26 11:21:17', '2022-12-26 11:21:17'),
(5, 3, 'Document & Legal Consultation', '2022-12-26 11:21:46', '2022-12-26 11:21:46'),
(6, 3, 'Safety Consultation', '2022-12-26 11:22:04', '2022-12-26 11:22:04'),
(7, 3, 'Services Consultation', '2022-12-26 11:22:21', '2022-12-26 11:22:21'),
(8, 3, 'Allied Services', '2022-12-26 11:23:15', '2022-12-26 11:23:15'),
(9, 3, 'Certification', '2022-12-26 11:23:43', '2022-12-26 11:23:43'),
(10, 4, 'Design Consultation', '2022-12-26 11:24:11', '2022-12-26 11:24:11'),
(11, 4, 'Document & Legal Consultation', '2022-12-26 11:26:51', '2022-12-26 11:26:51'),
(12, 4, 'Safety Consultation', '2022-12-26 11:27:06', '2022-12-26 11:27:06'),
(13, 4, 'Services Consultation', '2022-12-26 11:28:06', '2022-12-26 11:28:06'),
(14, 4, 'Ancillary Services', '2022-12-26 11:28:19', '2022-12-26 11:28:19'),
(15, 4, 'Certification', '2022-12-26 11:28:33', '2022-12-26 11:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `sub_category_id`, `name`, `created`, `modified`) VALUES
(1, 2, 1, 'Architectural Consultation', '2022-12-26 12:16:53', '2022-12-26 12:16:53'),
(2, 2, 1, 'Civil Consultation', '2022-12-26 12:19:04', '2022-12-26 12:19:04'),
(3, 2, 1, 'Interior Design Consultation', '2022-12-26 12:19:17', '2022-12-26 12:19:17'),
(4, 2, 1, 'Structural Consultation', '2022-12-26 12:19:29', '2022-12-26 12:19:29'),
(5, 2, 1, 'Vastu Consultation', '2022-12-26 12:19:39', '2022-12-26 12:19:39'),
(6, 2, 2, 'Approval & Building Rules Consultation', '2022-12-26 12:19:54', '2022-12-26 12:19:54'),
(7, 2, 2, 'Documentation and Registration Consultation', '2022-12-26 12:20:03', '2022-12-26 12:20:03'),
(8, 2, 2, 'Property Loan Consultation ', '2022-12-26 12:20:19', '2023-01-28 04:22:48'),
(9, 2, 2, 'Legal Consultation', '2022-12-26 12:20:28', '2022-12-26 12:20:28'),
(10, 2, 2, 'NRI Consultation', '2022-12-26 12:20:39', '2022-12-26 12:20:39'),
(11, 2, 2, 'Tax Consultation', '2022-12-26 12:20:48', '2022-12-26 12:20:48'),
(12, 2, 3, 'Electrical Consultation', '2022-12-26 12:21:10', '2022-12-26 12:21:10'),
(13, 2, 3, 'Plumbing Consultation', '2022-12-26 12:21:24', '2022-12-26 12:21:24'),
(14, 3, 4, 'Architectural Consultation', '2022-12-26 12:22:01', '2022-12-26 12:22:01'),
(15, 3, 4, 'Civil Consultation', '2022-12-26 12:22:29', '2022-12-26 12:22:29'),
(16, 3, 4, 'Interior Design Consultation', '2022-12-26 12:22:48', '2022-12-26 12:22:48'),
(17, 3, 4, 'Landscape Consultation', '2022-12-26 12:23:10', '2022-12-26 12:23:10'),
(18, 3, 4, 'Structural Consultation', '2022-12-26 12:23:30', '2022-12-26 12:23:30'),
(19, 3, 4, 'Vastu Consultation', '2022-12-26 12:23:45', '2022-12-26 12:23:45'),
(20, 3, 5, 'Approval & Building Rules Consultation', '2022-12-26 12:24:26', '2022-12-26 12:24:26'),
(21, 3, 5, 'Propery Loan Consultation', '2022-12-26 12:24:40', '2022-12-26 12:24:40'),
(22, 3, 5, 'Documentation and Registration Consultation', '2022-12-26 12:24:52', '2022-12-26 12:24:52'),
(23, 3, 5, 'Legal Consultation', '2022-12-26 12:25:10', '2022-12-26 12:25:10'),
(24, 3, 5, 'Tax Consultation', '2022-12-26 12:25:25', '2022-12-26 12:25:25'),
(25, 3, 6, 'CCTV Consultation', '2022-12-26 12:26:22', '2022-12-26 12:26:22'),
(26, 3, 6, 'Fire & Safety Consultation', '2022-12-26 12:26:36', '2022-12-26 12:26:36'),
(27, 3, 7, 'Electrical Consultation', '2022-12-26 12:26:49', '2022-12-26 12:26:49'),
(28, 3, 7, 'HVAC Consultation', '2022-12-26 12:27:03', '2022-12-26 12:27:03'),
(29, 3, 7, 'Plumbing Consultation', '2022-12-26 12:27:18', '2022-12-26 12:27:18'),
(30, 3, 7, 'Termite Consultation', '2022-12-26 12:27:32', '2022-12-26 12:27:32'),
(31, 3, 7, 'Waterproofing and Dampproofing Consultation', '2022-12-26 12:27:45', '2023-01-28 04:27:41'),
(32, 3, 8, 'Rain water harvest Consultation', '2022-12-26 12:28:21', '2022-12-26 12:28:21'),
(33, 3, 8, 'RO Consultation', '2022-12-26 12:28:34', '2022-12-26 12:28:34'),
(34, 3, 8, 'Soil test Consultation', '2022-12-26 12:28:53', '2022-12-26 12:28:53'),
(35, 3, 8, 'Solar Power Consultation', '2022-12-26 12:29:08', '2022-12-26 12:29:08'),
(36, 3, 9, 'Green building certification', '2022-12-26 12:29:33', '2023-01-28 04:29:42'),
(37, 4, 10, 'Architectural Consultation', '2022-12-26 12:29:54', '2022-12-26 12:29:54'),
(38, 4, 10, 'Civil Consultation', '2022-12-26 12:30:07', '2022-12-26 12:30:07'),
(39, 4, 10, 'Interior Design Consultation', '2022-12-26 12:30:22', '2022-12-26 12:30:22'),
(40, 4, 10, 'Landscape Consultation', '2022-12-26 12:30:35', '2022-12-26 12:30:35'),
(41, 4, 10, 'Structural Consultation', '2022-12-26 12:30:51', '2022-12-26 12:30:51'),
(42, 4, 10, 'Vastu Consultation', '2022-12-26 12:31:09', '2022-12-26 12:31:09'),
(43, 4, 11, 'Approval & Building Rules Consultation', '2022-12-26 12:31:43', '2022-12-26 12:31:43'),
(44, 4, 11, 'Propery Loan Consultation', '2022-12-26 12:31:59', '2022-12-26 12:31:59'),
(45, 4, 11, 'Documentation and Registration Consultation', '2022-12-26 12:32:14', '2022-12-26 12:32:14'),
(46, 4, 11, 'Legal Consultation', '2022-12-26 12:32:27', '2022-12-26 12:32:27'),
(47, 4, 11, 'Tax Consultation', '2022-12-26 12:32:43', '2022-12-26 12:32:43'),
(48, 4, 12, 'CCTV Consultation', '2022-12-26 12:32:56', '2022-12-26 12:32:56'),
(49, 4, 12, 'Fire & Safety Consultation', '2022-12-26 12:33:09', '2022-12-26 12:33:09'),
(50, 4, 13, 'Electrical Consultation', '2022-12-26 12:33:23', '2022-12-26 12:33:23'),
(51, 4, 13, 'HVAC Consultation', '2022-12-26 12:33:35', '2022-12-26 12:33:35'),
(52, 4, 13, 'Plumbing Consultation', '2022-12-26 12:34:14', '2022-12-26 12:34:14'),
(53, 4, 13, 'Termite Consultation ', '2022-12-26 12:34:35', '2023-01-28 05:07:36'),
(54, 4, 13, 'Waterproofing and Dampproofing  Consultation', '2022-12-26 12:34:51', '2023-01-28 05:08:01'),
(55, 4, 14, 'Rain water harvest Consultation', '2022-12-26 12:35:27', '2022-12-26 12:35:27'),
(56, 4, 14, 'RO Consultation', '2022-12-26 12:35:40', '2022-12-26 12:35:40'),
(57, 4, 14, 'Soil test Consultation', '2022-12-26 12:35:54', '2022-12-26 12:35:54'),
(58, 4, 14, 'Solar power Consultation', '2022-12-26 12:36:07', '2022-12-26 12:36:07'),
(59, 4, 15, 'Green building certification', '2022-12-26 12:36:18', '2023-01-28 05:10:46'),
(60, 2, 2, 'Property Valuer Consultation', '2023-01-28 04:19:47', '2023-01-28 04:23:47'),
(61, 3, 4, 'Demolition Consultation', '2023-01-28 04:20:22', '2023-01-28 04:20:22'),
(62, 3, 4, 'GFRG Construction Consultation', '2023-01-28 04:20:49', '2023-01-28 04:20:49'),
(63, 3, 4, 'Lighting Consultation', '2023-01-28 04:21:09', '2023-01-28 04:21:09'),
(64, 3, 4, 'PEB Consultation', '2023-01-28 04:21:20', '2023-01-28 04:21:20'),
(65, 3, 4, 'Vernacular Architecture Consultation', '2023-01-28 04:21:32', '2023-01-28 04:21:32'),
(66, 3, 6, 'Automation Consultation ', '2023-01-28 04:25:20', '2023-01-28 04:25:20'),
(67, 3, 7, 'Termite Consultation ', '2023-01-28 04:25:33', '2023-01-28 04:25:33'),
(68, 3, 8, 'Concealed gas pipe consultation ', '2023-01-28 04:28:16', '2023-01-28 04:28:16'),
(69, 3, 8, 'Water and waste water management consultation ', '2023-01-28 04:28:30', '2023-01-28 04:28:30'),
(70, 3, 8, 'Water divining consultation ', '2023-01-28 04:28:45', '2023-01-28 04:28:45'),
(71, 2, 1, 'Surveyor Consultation ', '2023-01-28 04:30:31', '2023-01-28 04:30:31'),
(72, 4, 10, 'Property Loan Consultation', '2023-01-28 05:03:50', '2023-01-28 05:06:38'),
(73, 4, 10, 'Demolition Consultation', '2023-01-28 05:04:09', '2023-01-28 05:04:09'),
(74, 4, 10, 'GFRG Construction Consultation', '2023-01-28 05:04:23', '2023-01-28 05:04:23'),
(75, 4, 10, 'Lighting Consultation', '2023-01-28 05:04:35', '2023-01-28 05:04:35'),
(76, 4, 10, 'PEB Consultation', '2023-01-28 05:04:46', '2023-01-28 05:04:46'),
(77, 4, 10, 'Vernacular Architecture Consultation', '2023-01-28 05:05:00', '2023-01-28 05:05:00'),
(78, 4, 12, 'Automation Consultation', '2023-01-28 05:07:04', '2023-01-28 05:07:04'),
(79, 4, 14, 'Concealed gas pipe consultation', '2023-01-28 05:08:51', '2023-01-28 05:08:51'),
(80, 4, 14, 'Water and waste water management consultation ', '2023-01-28 05:09:25', '2023-01-28 05:09:25'),
(81, 4, 14, 'Water divining consultation ', '2023-01-28 05:09:37', '2023-01-28 05:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 => Not activated , 1 => Activated',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `user_role_id`, `created_by`, `status`, `created`, `modified`) VALUES
(1, 'Admin', 'admin@gmail.com', '92329920932', '$2y$10$PePxaX0Smvv6ReGju52PKe//eeq1wehdu.l9EcEFYxlsuZ7rUInB2', 1, 0, 1, '2022-12-26 14:31:15', '2022-12-26 14:56:06'),
(2, 'Madhu', 'madhu@yopmail.com', '8610693389', '$2y$10$wnJp08DF82vYsa2.0iXREuTQaYDA9UPvO.LLJDEJZ1CtoHDbqmrXW', 3, 0, 1, '2023-02-10 06:22:11', '2023-02-10 06:22:11'),
(3, 'madhu', 'madhudeveloper7@gmail.com', '8629389023', '$2y$10$4CcWGYxlhZKEriLySy0Lju4RcfO6nTCTGG8eSCGlQgblnbXq4pPQu', 3, 0, 1, '2023-02-10 07:17:23', '2023-02-10 07:17:23'),
(7, 'Bala', 'bala@gmail.com', '8723823092', '$2y$10$2H3lxEx5Hyq1k666tA6.ZuWNZ6YcvcxCg6jTu4hw.J71k8AERAhWm', 3, 0, 1, '2023-02-10 08:03:11', '2023-02-10 08:03:11'),
(8, 'New', 'amorio@gmail.com', '7174428383', '$2y$10$kPEcHcs3b5OCLNuQ7MSN6Oywe2lgzvAQ87p02g4Hw2r/um7c.gYFq', 3, 0, 1, '2023-02-10 08:19:01', '2023-02-10 08:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_name`, `created`, `modified`) VALUES
(1, 'Admin', '2022-12-26 14:31:03', '2022-12-26 14:31:03'),
(3, 'Customer', '2022-03-01 05:59:45', '2022-03-01 05:59:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_appointments`
--
ALTER TABLE `book_appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_queries`
--
ALTER TABLE `customer_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_pages`
--
ALTER TABLE `payment_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_appointments`
--
ALTER TABLE `book_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `customer_queries`
--
ALTER TABLE `customer_queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_pages`
--
ALTER TABLE `payment_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
