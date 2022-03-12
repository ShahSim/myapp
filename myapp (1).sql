-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 12:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `phone`, `email`) VALUES
(41, 'SHAHDEEN', 'SIMON', '016897336170', 'afasdk@f.com'),
(43, 'SOHEL', 'TAJQW', '71472727527525', 'shtf@f.com'),
(45, 'DASROP', 'SHOURAV', '89489456164245', 'dsas@ss.com'),
(55, 'asdasacasc', 'ascasdascas', '15648974976879', 'sas@d.com'),
(58, 'asdwqwdqwd', 'qweqwqdqw', '77777777775757', 'sq@w.com'),
(59, 'asdasxcasc', 'asdascascas', '7872572527272', 'sw@f.com'),
(60, 'ASAD', 'ascascas', '45645615675782', 'as@s.com'),
(62, 'qwewqd', '465451651', '99494954529629', 'qw@o.com'),
(75, 'asxcascas', 'aqwdqwd', '98494984156156', 'qwq@d.com'),
(80, 'jonjok', 'mkomkio', '516546546', 'mjkj@jk.no'),
(82, 'asxasx', 'asxascas', '49498191819181', 'awq@e.com'),
(84, 'asdad', 'asdascdas', '754275275275', 'asd@e.com'),
(85, 'adascrwr', 'ewrtgewt', '71227527832782', 'qweqwd@eq.com'),
(86, 'cfiacuihb', 'afsddsf', '19897484996151', 'huu@r.com'),
(87, 'asdas', 'adsfasdf', 'asdgfasd', 'svasasdv'),
(88, 'sqwd', 'qwdqwd', '78738378378378', 'qwdqwd@r.com'),
(90, 'qwdqw', 'qweqwdqw', '78367378378378', 'sada@qer.com'),
(91, 'qwqd', 'qwdqwe', '98789499899191', 'huih@qw.com'),
(92, 'WILLIAM', 'KENWAY', '99489491918191', 'qwsq@re.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
