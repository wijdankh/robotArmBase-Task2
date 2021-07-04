-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 09:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `armcontrol`
--

CREATE TABLE `armcontrol` (
  `Arm1` int(3) NOT NULL,
  `Arm2` int(3) NOT NULL,
  `Arm3` int(3) NOT NULL,
  `Arm4` int(3) NOT NULL,
  `Arm5` int(3) NOT NULL,
  `Arm6` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `armcontrol`
--

INSERT INTO `armcontrol` (`Arm1`, `Arm2`, `Arm3`, `Arm4`, `Arm5`, `Arm6`) VALUES
(90, 90, 24, 90, 161, 90),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90),
(90, 22, 90, 90, 90, 165),
(90, 22, 90, 90, 90, 165),
(90, 22, 90, 90, 90, 165),
(180, 180, 0, 2, 0, 180),
(180, 180, 0, 2, 0, 180),
(180, 180, 0, 2, 0, 180),
(180, 180, 0, 2, 0, 180),
(180, 180, 0, 2, 0, 180),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90),
(90, 90, 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
  `_forward` int(1) NOT NULL,
  `_left` int(1) NOT NULL,
  `_stop` int(1) NOT NULL,
  `_right` int(1) NOT NULL,
  `_backward` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movement`
--

INSERT INTO `movement` (`_forward`, `_left`, `_stop`, `_right`, `_backward`) VALUES
(1, 0, 0, 0, 0),
(0, 0, 1, 0, 0),
(0, 0, 0, 0, 1),
(0, 0, 0, 1, 0),
(0, 1, 0, 0, 0),
(0, 1, 0, 0, 0),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(0, 0, 0, 1, 0),
(0, 0, 1, 0, 0),
(0, 0, 1, 0, 0),
(0, 0, 0, 1, 0),
(1, 0, 0, 0, 0),
(0, 0, 1, 0, 0),
(0, 0, 1, 0, 0),
(0, 0, 1, 0, 0),
(0, 0, 0, 1, 0),
(0, 1, 0, 0, 0),
(1, 0, 0, 0, 0),
(0, 0, 0, 0, 1),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(1, 0, 0, 0, 0),
(0, 0, 0, 1, 0),
(0, 1, 0, 0, 0),
(1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `on_off`
--

CREATE TABLE `on_off` (
  `_on` int(1) NOT NULL,
  `_off` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `on_off`
--

INSERT INTO `on_off` (`_on`, `_off`) VALUES
(1, 0),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(0, 1),
(1, 0),
(0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
