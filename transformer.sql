-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 05:09 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transformer`
--

-- --------------------------------------------------------

--
-- Table structure for table `transformers`
--

CREATE TABLE `transformers` (
  `Raza` varchar(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Mineral_Energon` int(100) NOT NULL,
  `Lider` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transformers`
--

INSERT INTO `transformers` (`Raza`, `Nombre`, `Mineral_Energon`, `Lider`) VALUES
('Deceptico', 'Megatron', 100, 1),
('Deceptico', 'Malvaditobot', 20, 0),
('Autobot', 'Optimus', 100, 1),
('Autobot', 'Bumblebee', 50, 0),
('Autobot', 'Autitobuenobot', 30, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
