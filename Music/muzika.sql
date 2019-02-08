-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 11:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muzika`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `Email`, `Message`) VALUES
('lorik', 'likikelmendi@gmail.com', 'fwfwf'),
('genta01', 'likikelmendi@gmail.com', '6'),
('genta01', '', ''),
('', '', ''),
('lorik', 'likikelmendi@gmail.com', '66');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `ID`, `Email`) VALUES
('lorik', 'liki123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('123', '123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('lorik', 'lorik123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('lorik123', 'lorik123', 0, ''),
('lorik', 'lorik123', 0, ''),
('llatkiadmin', 'llatki123', 0, ''),
('l00rik', '43c2fa2cbb6be8d074f8843289ec57e3', 0, 'likikelmendi@gmail.com'),
('likigashi', '43c2fa2cbb6be8d074f8843289ec57e3', 0, 'likikelmendi@gmail.com'),
('Test1', 'e25cc21e72732ca1c937fbd5ce32ae8c', 0, 'testi@live.com1'),
('test2', 'cc03e747a6afbbcbf8be7668acfebee5', 0, 'testi@live.com'),
('lorikelmendi', '43c2fa2cbb6be8d074f8843289ec57e3', 0, 'likikelmendi@gmail.com'),
('kolos123', '97cab59683a1d081a6832baa998acf58', 0, 'kolos@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mp3` blob NOT NULL,
  `mp3name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `age`, `email`) VALUES
('genta01', 12, 'likikelmendi@gmail.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('hasan', 12, 'goyuseh@sandcars.net'),
('Era Istrefi', 23, 'eraistrefi@gmail.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('Shqip', 23, 'goyuseh@sandcars.net'),
('Shqip', 23, 'goyuseh@sandcars.net'),
('genta01', 12, 'likikelmendi@gmail.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('lorik', 12, 'likikelmendi@gmail.com'),
('genta01', 23, 'likikelmendi@gmail.com'),
('lorik', 12, 'gentaistrefi69@gmail.com'),
('Lori', 20, 'lena.fernado.9@live.com'),
('rron', 12, 'dac@live.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('Lorik', 20, 'likikelmendi@gmail.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('Genti', 12, 'likikelmendi@gmail.com'),
('liridon', 20, 'http://localhost/music/artisti.php'),
('genta01', 12, 'likikelmendi@gmail.com'),
('Kolosi', 26, 'Hhaa'),
('genta01', 12, 'likikelmendi@gmail.com'),
('genta01', 12, 'likikelmendi@gmail.com'),
('Alban Skenderaj', 30, 'Tung'),
('Alban Skenderaj', 30, 'Tung'),
('Unikkatil', 40, 'DISS'),
('Eugeni', 33, 'spodi'),
('Eugeni', 20, 'likikelmendi@gmail.com'),
('Eugeni', 12, 'likikelmendi@gmail.com'),
('Leurit', 25, 'Hehe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
