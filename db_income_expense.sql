-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 05:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_income_expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `income_expense`
--

CREATE TABLE `income_expense` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `datein` date NOT NULL COMMENT 'วันที่',
  `types` varchar(255) NOT NULL COMMENT 'ประเภทรายรับ-รายจ่าย',
  `detail` text NOT NULL COMMENT 'รายละเอียดรายการ',
  `moneys` int(11) NOT NULL COMMENT 'จำนวนเงิน',
  `subtype` varchar(255) NOT NULL COMMENT 'รหัสประเถท'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income_expense`
--

INSERT INTO `income_expense` (`id`, `datein`, `types`, `detail`, `moneys`, `subtype`) VALUES
(1, '2020-06-09', 'รายรับ', 'เงินเดือน', 15000, '0'),
(2, '2020-06-09', 'รายจ่าย', 'ทานอาหาร', 45, '0'),
(3, '2020-06-09', 'รายจ่าย', 'ค่าไฟ', 3000, '0'),
(4, '2020-06-09', 'รายจ่าย', 'ค่าน้ำ', 500, '0'),
(5, '2020-06-09', 'รายจ่าย', 'ค่าเดินทาง', 3500, '0'),
(6, '2020-06-09', 'รายรับ', 'สลากกินแบ่งรัฐบาล', 20000, '0'),
(7, '2020-06-09', 'รายจ่าย', 'รองเท้า', 3600, '0'),
(8, '2020-06-09', 'รายจ่าย', 'เสื้อผ้า', 199, '0'),
(9, '2020-06-09', 'รายจ่าย', 'ลำโพงบูลทูธ JBL', 15000, '0'),
(10, '2020-06-09', 'รายรับ', 'เงินปันผล', 678, '0'),
(11, '2020-06-09', 'รายจ่าย', 'ค่าโทรศัพท์', 1200, '0'),
(12, '2020-06-09', 'รายจ่าย', 'ซื้อของเข้าบ้าน', 500, '0'),
(13, '2020-06-07', 'รายจ่าย', 'นม', 20, '0'),
(14, '2020-06-10', 'รายจ่าย', 'ขนม', 45, '0'),
(15, '2020-06-10', 'รายรับ', 'เงินเดือน', 15000, '0'),
(16, '2020-06-10', 'รายจ่าย', 'ขนม', 200, '0'),
(17, '2020-06-10', 'รายรับ', 'เงินเดือน', 15000, '0'),
(18, '2020-06-10', 'รายจ่าย', 'ขนม', 5000, '0'),
(19, '2020-06-10', 'รายจ่าย', 'ขนม', 45, '0'),
(20, '2020-06-10', 'รายรับ', 'เงินเดือน', 12000, '0'),
(21, '2020-06-11', 'รายจ่าย', 'ข้าวเที่ยง', 45, '0'),
(22, '2020-06-12', 'รายรับ', 'ขนม', 20, '0'),
(23, '2020-06-12', 'รายรับ', 'ขนม', 20, '0'),
(24, '2020-06-12', 'รายรับ', 'ขนม', 20, '0'),
(25, '2020-06-12', 'รายรับ', 'ขนม', 20, '0'),
(26, '2020-06-12', 'รายรับ', 'ขนม', 20, '0'),
(27, '2020-06-16', 'รายรับ', 'เงินเดือน', 15000, '0'),
(28, '2020-06-16', 'รายรับ', 'เงินเดือน', 15000, '0'),
(29, '2020-06-16', 'รายจ่าย', 'ไปต่างจังหวัด', 2600, '0'),
(30, '2020-06-16', 'รายจ่าย', 'ขนม', 45, '0'),
(31, '2020-06-16', 'รายจ่าย', 'ค่าไฟ', 3000, '0'),
(32, '2020-06-10', 'รายจ่าย', 'ข้าวเที่ยง', 45, '0'),
(33, '2020-06-10', 'รายจ่าย', 'ข้าวเย็น', 45, '0'),
(34, '2020-06-10', 'รายจ่าย', 'ขนม', 80, '0'),
(35, '2020-06-16', 'รายรับ', 'ถูกล็อตเตอรี่', 4000, '0'),
(36, '2020-06-15', 'รายจ่าย', 'ขนม', 35, '0'),
(37, '2020-06-17', 'รายรับ', 'เงินเดือน', 15000, '0'),
(38, '2020-06-19', 'รายจ่าย', 'ขนม', 45, '0'),
(39, '2020-06-22', 'รายจ่าย', 'นมจืด', 18, '0'),
(40, '2020-06-23', 'รายจ่าย', 'น้ำดื่ม', 35, '0'),
(41, '2020-06-23', 'รายจ่าย', 'ค่าอาหาร', 29, '0'),
(42, '2020-06-26', 'รายจ่าย', 'ข้าวเช้า', 86, '0'),
(43, '2020-06-26', 'รายจ่าย', 'ขนม', 29, '0'),
(44, '2020-06-25', 'รายจ่าย', 'ขนม', 79, '0'),
(45, '2020-06-26', 'รายจ่าย', 'โออิชิ', 40, '0'),
(46, '2020-06-26', 'รายจ่าย', 'โออิชิ', 40, '0'),
(47, '2020-06-26', 'รายจ่าย', 'ค่าน้ำมัน', 700, '0'),
(48, '2020-06-29', 'รายจ่าย', 'ค่าที่พัก', 5200, '0'),
(49, '2020-06-30', 'รายจ่าย', 'ค่ายา', 60, '0'),
(50, '2020-06-30', 'รายจ่าย', 'ค่าสัตว์เลี้ยง', 700, '0'),
(51, '2020-07-01', 'รายจ่าย', 'ดินสอ', 30, 'ค่าครุภัณฑ์'),
(52, '2020-07-03', 'รายจ่าย', 'โออิชิ', 25, 'ค่าใช้สอย'),
(53, '2020-07-03', 'รายจ่าย', 'ขนม', 45, 'ค่าใช้สอย'),
(54, '2020-07-09', 'รายจ่าย', 'ขนม', 20, 'ค่าใช้สอย'),
(55, '2020-07-10', 'รายจ่าย', 'ขนม', 19, ''),
(56, '2020-07-10', 'รายจ่าย', 'ข้าวเย็น', 200, '');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `idtypes` int(2) UNSIGNED NOT NULL COMMENT 'ลำดับ',
  `types` varchar(255) NOT NULL COMMENT 'ประเภทรายรับ-รายจ่าย',
  `names` varchar(255) NOT NULL COMMENT 'ชื่อประเภท'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`idtypes`, `types`, `names`) VALUES
(1, 'รายรับ', 'รายรับหลัก'),
(2, 'รายรับ', 'รายรับอื่นๆ'),
(3, 'รายจ่าย', 'ค่าใช้สอย'),
(4, 'รายจ่าย', 'ค่าตอบแทน'),
(5, 'รายจ่าย', 'ค่าสาธรณูปโภค'),
(6, 'รายจ่าย', 'ค่าวัสดุ'),
(7, 'รายจ่าย', 'งบลงทุน'),
(8, 'รายจ่าย', 'ค่าครุภัณฑ์'),
(9, 'รายจ่าย', 'ค่าที่ดินและสิ่งก่อสร้าง'),
(10, 'รายจ่าย', 'รายจ่ายอื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL COMMENT 'ลำดับ',
  `username` varchar(255) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `status` varchar(255) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `name`, `status`) VALUES
(1, '111', '111', 'gear', 'admin'),
(2, '222', '222', 'a', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `income_expense`
--
ALTER TABLE `income_expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`idtypes`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `income_expense`
--
ALTER TABLE `income_expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `idtypes` int(2) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ลำดับ', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับ', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
