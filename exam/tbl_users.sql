-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 10:41 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `firstName`, `lastName`, `email`, `gender`, `birthDate`) VALUES
(2, 'paulpaul00', 'rewraewafdsafdsa', 'yyyyy', 'buscano', 'fdsafdsaf@gmail.com', '2', '1993-12-02'),
(3, 'fdsafsdaf', 'fdsafsafas', 'fsdafsa', 'fasfas', 'fdsaf@gmail.com', '2', '1996-12-23'),
(5, 'aaa', 'bbb', 'ccc', 'ddd', 'ds@gmail.com', 'Male', '1993-12-02'),
(6, 'aaa', 'bbb', 'ccc', 'ddd', 'ds@gmail.com', 'Male', '1993-12-02'),
(7, 'aaa', 'bbb', 'ccc', 'ddd', 'ds@gmail.com', 'Male', '1993-12-02'),
(10, 'admin', 'admin', 'paul', 'buscano', 'ds@gmail.com', 'Male', '1993-12-02'),
(11, 'fdsafewafe', '6b4dccfb69c362b172bafdfc60c343e1', 'fdsafwea', 'fewafdsaf', 'fdsa@gmail.com', 'Female', '1995-12-23'),
(12, 'admin', 'fc22758c3cfe54cabb60c229281ec454', 'dfafwea', 'fdsafew', 'fdsa@gmail.com', 'Female', '1997-12-31'),
(13, 'fewafdsafe', 'ded3532a97ae83c009ae4772085e5705', 'Fewafdsafe', 'Wafewa', 'fdsa@gmail.com', 'Female', '2014-02-03'),
(14, 'dsa', 'f79a943a3d5e8af90009156c18e5b2d9', 'Ewafdsaf', 'Ewafdsa', 'fewa@gmail.com', 'Female', '2014-12-03'),
(16, 'fdsaf', '0cc175b9c0f1b6a831c399e269772661', 'Fewaf', 'Fewa', 'fdsafdsaf@gmail.com', 'Male', '2008-12-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
