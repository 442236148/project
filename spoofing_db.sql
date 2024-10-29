-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 10:41 PM
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
-- Database: `spoofing_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `trusted_sites`
--

CREATE TABLE `trusted_sites` (
  `id` int(11) NOT NULL,
  `site_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trusted_sites`
--

INSERT INTO `trusted_sites` (`id`, `site_url`) VALUES
(35, 'moh.gov.sa'),
(36, 'mc.gov.sa'),
(37, 'hrsd.gov.sa'),
(38, 'moe.gov.sa'),
(39, 'mof.gov.sa'),
(40, 'momra.gov.sa'),
(41, 'saudigov.sa'),
(42, 'pif.gov.sa'),
(43, 'saudi.gov.sa'),
(44, 'customs.gov.sa'),
(45, 'mci.gov.sa'),
(46, 'najiz.sa'),
(47, 'moj.gov.sa'),
(48, 'gosi.gov.sa'),
(49, 'nic.gov.sa'),
(50, 'sdaia.gov.sa'),
(51, 'vision2030.gov.sa'),
(52, 'evisa.gov.sa'),
(53, 'haj.gov.sa'),
(54, 'zakat.gov.sa'),
(55, 'alrajhibank.com.sa'),
(56, 'alahli.com.sa'),
(57, 'ncb.com.sa'),
(58, 'riyadbank.com.sa'),
(59, 'bankalbilad.com'),
(60, 'bankalrajhi.com'),
(61, 'bankofjeddah.com'),
(62, 'alizzbank.com'),
(63, 'alainbank.com'),
(64, 'samba.com'),
(65, 'masraf.com'),
(66, 'sab.com'),
(67, 'scb.com.sa'),
(68, 'saudiexchange.sa'),
(69, 'etimad.sa'),
(70, 'saudimoh.com'),
(71, 'drs.gov.sa'),
(72, 'sharikah.gov.sa'),
(73, 'tadawul.com.sa'),
(74, 'dhuhr.gov.sa'),
(75, 'e-services.gov.sa'),
(76, 'jeddah.gov.sa'),
(77, 'tabuk.gov.sa'),
(78, 'qassim.gov.sa'),
(79, 'najran.gov.sa'),
(80, 'asir.gov.sa'),
(81, 'damman.gov.sa'),
(82, 'aljouf.gov.sa'),
(83, 'hafr.albatin.gov.sa'),
(84, 'taif.gov.sa'),
(85, 'madinah.gov.sa'),
(86, 'hafar.gov.sa'),
(87, 'bisha.gov.sa'),
(88, 'gsa.gov.sa'),
(89, 'stc.com.sa'),
(90, 'mobily.com.sa'),
(91, 'zain.com.sa'),
(92, 'saudiaramco.com'),
(93, 'sabic.com'),
(94, 'ngs.gov.sa'),
(95, 'muwa.gov.sa'),
(96, 'community.gov.sa'),
(97, 'universities.edu.sa'),
(98, 'kfupm.edu.sa'),
(99, 'kingabdulaziz.edu.sa'),
(100, 'kingfaisal.edu.sa'),
(101, 'kingston.edu.sa'),
(102, 'najran.edu.sa'),
(103, 'qassim.edu.sa'),
(104, 'taibahu.edu.sa'),
(105, 'alakhawayn.edu.sa'),
(106, 'tu.edu.sa'),
(107, 'seu.edu.sa'),
(108, 'gs.edu.sa'),
(109, 'unr.edu.sa'),
(110, 'masdar.edu.sa'),
(111, 'fh.edu.sa'),
(112, 'fc.edu.sa'),
(113, 'fcu.edu.sa'),
(114, 'gdu.edu.sa'),
(115, 'hbu.edu.sa'),
(116, 'iug.edu.sa'),
(117, 'km.edu.sa'),
(118, 'me.edu.sa'),
(119, 'ns.edu.sa'),
(120, 'sa.edu.sa'),
(121, 'tb.edu.sa'),
(122, 'ud.edu.sa'),
(123, 'ul.edu.sa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trusted_sites`
--
ALTER TABLE `trusted_sites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trusted_sites`
--
ALTER TABLE `trusted_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
