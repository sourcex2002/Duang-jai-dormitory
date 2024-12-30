-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duangjai`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `building_ID` int(10) NOT NULL COMMENT 'id ตึก',
  `building_Name` varchar(10) DEFAULT NULL COMMENT 'ชื่อของตึก',
  `useflag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`building_ID`, `building_Name`, `useflag`) VALUES
(1, 'ตึก ก', 1),
(2, 'ตึก ข', 1),
(3, 'ตึก จ', 1),
(4, 'ตึก ค', 1),
(5, 'ตึก น', 1),
(6, 'ตึก ท', 1),
(7, 'ตึก ด', 1),
(8, 'ตึก ต', 1),
(9, 'ตึก ซ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout_notify`
--

CREATE TABLE `checkout_notify` (
  `checkout_notifyID` int(10) NOT NULL COMMENT 'รหัสการแจ้งออก',
  `firstname` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `build` varchar(10) NOT NULL COMMENT 'ตึก',
  `num_room` varchar(10) NOT NULL COMMENT 'เลขห้อง',
  `processing_date` datetime NOT NULL COMMENT 'วันที่แจ้ง',
  `checkout_date` datetime NOT NULL COMMENT 'วันที่ย้ายออก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `checkout_notify`
--

INSERT INTO `checkout_notify` (`checkout_notifyID`, `firstname`, `lastname`, `build`, `num_room`, `processing_date`, `checkout_date`) VALUES
(1, 'Mali', 'Susan', 'ตึก น', '012', '2023-12-24 13:08:13', '2023-12-30 13:07:28'),
(2, 'ssssssss', 'อออออออออ', 'ตึก น', '10', '2023-12-01 00:00:00', '2023-12-30 00:00:00'),
(3, 'ssssssss', 'fffffffffffff', 'ตึก ท', '10', '2023-12-29 00:00:00', '2023-12-31 00:00:00'),
(4, '', '', 'ตึก จ', '10', '2023-12-30 14:07:00', '2023-12-31 08:00:00'),
(5, 'asasas', 'asasas', 'ตึก จ', '10', '2023-12-30 14:07:00', '2023-12-31 08:00:00'),
(6, 'อรดี', 'สมปอง', 'ตึก ซ', '23', '2023-12-30 14:18:00', '2023-12-31 09:18:00'),
(7, 'มามา', 'ทาทา', 'ตึก ด', '012', '2023-12-30 14:23:00', '2023-12-31 14:23:00'),
(8, 'เกดเเ', 'กดเกดเกดเ', 'ตึก ต', '10', '2023-12-30 14:26:00', '2024-01-04 08:26:00'),
(9, 'กหกหกห', 'หกหกหกห', 'ตึก ค', '014', '2023-12-24 14:39:00', '2023-12-31 09:39:00'),
(10, 'ฟหกด', 'าสาวสา', 'ตึก ท', '001', '2023-12-30 14:41:00', '2024-01-12 09:41:00'),
(11, 'nina', 'welo', 'ตึก น', '10', '2023-12-30 15:07:00', '2023-12-30 15:07:00'),
(12, 'อรดี', 'สมปอง', 'ตึก ด', '23', '2023-12-17 15:16:00', '2023-12-31 15:16:00'),
(13, 'อรดี', 'fffffffffffff', 'ตึก ด', '012', '2023-12-30 16:04:00', '2023-12-30 16:04:00'),
(14, 'อรดี', 'asasas', 'ตึก ท', '', '2023-12-30 16:32:00', '2023-12-30 16:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `clean`
--

CREATE TABLE `clean` (
  `CleanID` int(11) NOT NULL COMMENT 'รหัส',
  `firstname` varchar(300) NOT NULL COMMENT 'ชื่อผู้เช่า',
  `lastname` varchar(300) NOT NULL COMMENT 'นามสกุลผู้เช่า',
  `build` varchar(10) NOT NULL COMMENT 'ตึก',
  `num_room` varchar(100) NOT NULL COMMENT 'เลขห้อง',
  `tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `processing_date` datetime DEFAULT NULL COMMENT 'วันที่ดำเนินการ',
  `clean_img` blob NOT NULL,
  `clean_details` varchar(255) DEFAULT NULL COMMENT 'รายละเอียด',
  `useflag` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `clean`
--

INSERT INTO `clean` (`CleanID`, `firstname`, `lastname`, `build`, `num_room`, `tel`, `processing_date`, `clean_img`, `clean_details`, `useflag`) VALUES
(1, 'อรดี', 'สมปอง', 'ตึก ค', '012', '0101257', '2023-12-30 17:09:00', 0x636c65616e5f736572766963652e6a7067, 'มีคนทำน้ำหกหน้าห้อง', 1),
(2, 'อรดี', 'สมปอง', 'ตึก ค', '012', '7527887578', '2023-12-30 17:09:00', 0x636c65616e5f736572766963652e6a7067, 'มีคนทำน้ำหกหน้าห้อง', 1),
(3, 'มามา', 'ทาทา', 'ตึก จ', '021', '757577', '2023-12-30 17:24:00', '', '55555555555555555555555555', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(10) NOT NULL COMMENT 'รหัสพนักงาน',
  `firstname_emp` varchar(20) DEFAULT NULL COMMENT 'ชื่อพนักงาน',
  `lastname_emp` varchar(20) DEFAULT NULL COMMENT 'นามสกุลพนักงาน',
  `position_emp` varchar(20) DEFAULT NULL COMMENT 'ตำแหน่ง',
  `address_emp` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `tel_emp` varchar(10) DEFAULT NULL COMMENT 'เบอร์โทร',
  `cardID_emp` varchar(13) DEFAULT NULL COMMENT 'หมายเลขบัตรประชาชน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `firstname_emp`, `lastname_emp`, `position_emp`, `address_emp`, `tel_emp`, `cardID_emp`) VALUES
(1, 'กัญญาภัค', 'ศรีอ่อน', 'พนักงานทำความสะอาด', '45 ม. 5', '0654789999', '1147852214478'),
(2, 'ณัฐชานนท์', 'ศรีนิเทศ', 'ช่างซ่อมบำรุง', '45 ม. 5', '0654789999', '1147852214478'),
(6, 'fdfdf', 'dfdfdf', 'dfdfdf', 'fdfd', '0654789999', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `firstname` varchar(255) DEFAULT NULL COMMENT 'ชื่อสมาชิก',
  `lastname` varchar(255) DEFAULT NULL COMMENT 'นามสกุลสมาชิก',
  `build` varchar(10) NOT NULL COMMENT 'ตึก',
  `num_room` varchar(10) NOT NULL COMMENT 'เลขห้อง',
  `address_mem` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่',
  `tel` varchar(255) DEFAULT NULL COMMENT 'เบอร์โทร',
  `cardID` int(11) DEFAULT NULL COMMENT 'หมายเลขบัตรประชาชน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `firstname`, `lastname`, `build`, `num_room`, `address_mem`, `tel`, `cardID`) VALUES
(4, 'ปารีณา', 'อารี', 'ตึก ค', '012', '89 ม.3 ต.ชะอม อ.แก่งคอย จ.สระบุรี', '0698745123', 2147483647),
(5, 'อรดี', 'สมปอง', 'กรุณาเลือก', '', '', '', 0),
(6, 'อรดี', 'สมปอง', 'ตึก ท', '23', '89 ม.3 ต.ชะอม อ.แก่งคอย จ.สระบุรี', '45454454545', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `monthID` int(10) NOT NULL,
  `monthTH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`monthID`, `monthTH`) VALUES
(1, 'มกราคม'),
(2, 'กุมภาพันธ์'),
(3, 'มีนาคม'),
(4, 'เมษายน'),
(5, 'พฤษภาคม'),
(6, 'มิถุนายน'),
(7, 'กรกฏาคม'),
(8, 'สิงหาคม'),
(9, 'กันยายน'),
(10, 'ตุลาคม'),
(11, 'พฤศจิกายน'),
(12, 'ธันวาคม');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int(10) NOT NULL COMMENT 'รหัสข่าวประชาสัมพันธ์',
  `N_header` varchar(300) NOT NULL COMMENT 'หัวข้อข่าว',
  `N_information` varchar(300) DEFAULT NULL COMMENT 'ข้อมูลข่าวประชาสัมพันธ์',
  `processing_date` datetime DEFAULT NULL,
  `useflag` int(10) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `N_header`, `N_information`, `processing_date`, `useflag`) VALUES
(1, 'ไฟฟ้า', 'ไฟจะดับพรุ่งนี้ในเวลา 12.00 น. เนื่องจากช่างมาทำไฟ ', '2023-12-28 19:36:55', 1),
(2, 'การชำระเงิน', 'ให้ผู้เช่าทุกท่านชำระเงินค่าห้องพักภายในวันที่ 1 - 5 ของทุก ๆ เดือน หากชำระเงินล่าช้าเสียค่าปรับวันละ 50 บาท', '2023-12-28 19:58:42', 1),
(55, '55', '555555', '2023-12-28 19:36:55', 1),
(56, 'fdfdfdfd', 'fdfdfdfdf', '2023-12-30 00:00:00', 1),
(57, 'fdfdfdfd', '11111111111111111111', '2023-12-30 00:00:00', 0),
(58, 'ssssssssssssssssssssss', 'sssssssssssssssssssssssssssss', '2023-12-30 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oopp`
--
-- Error reading structure for table duangjai.oopp: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table duangjai.oopp: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `duangjai`.`oopp`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `out`
--

CREATE TABLE `out` (
  `checkout_ID` int(11) NOT NULL COMMENT 'รหัสการคืนห้องพัก',
  `date` datetime DEFAULT NULL COMMENT 'วันที่ดำเนินการ',
  `numRoom` varchar(10) DEFAULT NULL COMMENT 'เลขห้อง',
  `damage` varchar(10) DEFAULT NULL COMMENT 'ค่าปรับ',
  `electric_meterOld` varchar(10) DEFAULT NULL COMMENT 'มิเตอร์ไฟเก่า',
  `electric_meterNew` varchar(10) DEFAULT NULL COMMENT 'มิเตอร์ไฟใหม่',
  `electric_priceUnit` varchar(10) DEFAULT NULL COMMENT 'ค่าไฟ/หน่วย',
  `water_MeterOld` varchar(10) DEFAULT NULL COMMENT 'มิเตอร์น้ำเก่า',
  `water_MeterNew` varchar(10) DEFAULT NULL COMMENT 'มิเตอร์น้ำใหม่',
  `total` varchar(10) DEFAULT NULL COMMENT 'ยอดรวม',
  `water_riceUnit` varchar(10) DEFAULT NULL COMMENT 'ค่าไฟ/หน่วย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL COMMENT 'รหัสใบแจ้งหนี้',
  `P_Date` datetime DEFAULT NULL COMMENT 'วันที่ทำรายการ',
  `P_Month` varchar(255) DEFAULT NULL COMMENT 'ประจำเดือน',
  `P_Year` varchar(255) DEFAULT NULL COMMENT 'ปี',
  `P_room` varchar(255) DEFAULT NULL COMMENT 'เลขห้อง',
  `P_Price` decimal(10,2) DEFAULT NULL COMMENT 'ค่าห้อง',
  `P_Electric MeterOld` varchar(255) DEFAULT NULL COMMENT 'มิเตอร์ไฟเก่า',
  `P_Electric MeterNew` varchar(255) DEFAULT NULL COMMENT 'มิเตอร์ไฟใหม่',
  `P_Electric PriceUnit` varchar(255) DEFAULT NULL COMMENT 'ค่าไฟ/หน่วย',
  `P_WaterMeterOld` varchar(255) DEFAULT NULL COMMENT 'มิเตอร์น้ำเก่า',
  `P_WaterMeterNew` varchar(255) DEFAULT NULL COMMENT 'มิเตอร์น้ำใหม่',
  `P_WaterPriceUnit` varchar(255) DEFAULT NULL COMMENT 'ค่าน้ำ/หน่วย',
  `P_Status` varchar(255) DEFAULT NULL COMMENT 'สถานะชำระเงิน',
  `P_Total` varchar(255) DEFAULT NULL COMMENT 'ยอดรวม',
  `P_Name` varchar(255) DEFAULT NULL COMMENT 'ชื่อผู้เช่า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `rentroom`
--

CREATE TABLE `rentroom` (
  `RentRoomID` int(10) NOT NULL COMMENT 'รหัสการจอง',
  `firstname` varchar(50) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `num_room` varchar(10) DEFAULT NULL COMMENT 'เลขห้อง',
  `build` varchar(11) NOT NULL COMMENT 'ตึก',
  `processing_date` datetime DEFAULT NULL COMMENT 'วันที่ดำเนินการ',
  `cardID` int(13) DEFAULT NULL COMMENT 'หมายเลขบัตรประชาชน',
  `tel` varchar(10) DEFAULT NULL COMMENT 'เบอร์โทรศัพท์',
  `address_mem` varchar(300) DEFAULT NULL COMMENT 'ที่อยู่',
  `checkin_date` datetime DEFAULT NULL COMMENT 'วันที่เข้ามาอยู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `rentroom`
--

INSERT INTO `rentroom` (`RentRoomID`, `firstname`, `lastname`, `num_room`, `build`, `processing_date`, `cardID`, `tel`, `address_mem`, `checkin_date`) VALUES
(1, 'อรดี', 'สมปอง', '014', 'ตึก ต', '2023-12-30 16:50:00', 2147483647, '0698745123', NULL, '2023-12-30 16:50:00'),
(2, 'ssssssss', 'fffffffffffff', '014', 'ตึก ต', '2023-12-30 16:59:00', 0, '1414141414', NULL, '2023-12-30 16:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `RepairID` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL COMMENT 'ชื่อของผู้เช่า',
  `lastname` varchar(300) NOT NULL COMMENT 'นามสกุลของผู้เช่า',
  `build` varchar(10) NOT NULL COMMENT 'ตึก',
  `num_room` varchar(10) NOT NULL COMMENT 'เลขห้อง',
  `tel` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์ของผู้เช่า',
  `processing_date` datetime DEFAULT NULL COMMENT 'วันที่ดำเนินการ',
  `repair_details` varchar(255) DEFAULT NULL COMMENT 'รายละเอียด',
  `useflag` int(10) NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`RepairID`, `firstname`, `lastname`, `build`, `num_room`, `tel`, `processing_date`, `repair_details`, `useflag`) VALUES
(0, '', '', '', '', '', NULL, NULL, 0),
(1, 'ณัฐชานนท์', 'ศรีนิเทศ', 'ตึก น', '012', '0806675235', '2023-12-29 21:03:37', 'ชักโครกน้ำไหลตลอดเวลา', 1),
(2, 'dddddddddddddd', 'ddddddddddddddddd', 'dd', '013', '000215', '2023-12-29 21:05:31', 'ddddddddddddddddddddddddddd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomID` int(10) NOT NULL COMMENT 'รหัสห้องพัก',
  `R_Status` varchar(20) DEFAULT NULL COMMENT 'สถานะห้อง',
  `R_Number` varchar(10) DEFAULT NULL COMMENT 'เลขห้อง',
  `R_Price` varchar(10) DEFAULT NULL COMMENT 'ราคาห้อง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`building_ID`) USING BTREE;

--
-- Indexes for table `checkout_notify`
--
ALTER TABLE `checkout_notify`
  ADD PRIMARY KEY (`checkout_notifyID`);

--
-- Indexes for table `clean`
--
ALTER TABLE `clean`
  ADD PRIMARY KEY (`CleanID`) USING BTREE;

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`) USING BTREE;

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`) USING BTREE;

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`monthID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`) USING BTREE;

--
-- Indexes for table `out`
--
ALTER TABLE `out`
  ADD PRIMARY KEY (`checkout_ID`) USING BTREE;

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`) USING BTREE;

--
-- Indexes for table `rentroom`
--
ALTER TABLE `rentroom`
  ADD PRIMARY KEY (`RentRoomID`) USING BTREE;

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`RepairID`) USING BTREE;

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `building_ID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id ตึก', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `checkout_notify`
--
ALTER TABLE `checkout_notify`
  MODIFY `checkout_notifyID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการแจ้งออก', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `clean`
--
ALTER TABLE `clean`
  MODIFY `CleanID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสพนักงาน', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `monthID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าวประชาสัมพันธ์', AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `rentroom`
--
ALTER TABLE `rentroom`
  MODIFY `RentRoomID` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการจอง', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
