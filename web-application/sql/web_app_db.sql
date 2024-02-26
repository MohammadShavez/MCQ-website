-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 07:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categary`
--

CREATE TABLE `categary` (
  `cid` int(11) NOT NULL,
  `categary_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categary`
--

INSERT INTO `categary` (`cid`, `categary_name`) VALUES
(1, 'HTML'),
(2, 'CSS'),
(3, 'Python'),
(4, 'PHP'),
(5, 'Machinlerning');

-- --------------------------------------------------------

--
-- Table structure for table `quez_question`
--

CREATE TABLE `quez_question` (
  `Question` varchar(200) NOT NULL,
  `Option_a` varchar(50) NOT NULL,
  `Option_b` varchar(50) NOT NULL,
  `Option_c` varchar(50) NOT NULL,
  `Option_d` varchar(50) NOT NULL,
  `Result` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL,
  `categary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quez_question`
--

INSERT INTO `quez_question` (`Question`, `Option_a`, `Option_b`, `Option_c`, `Option_d`, `Result`, `Id`, `categary_id`) VALUES
('Fundamental HTML Block is known as ___________. ', 'HTML Body', 'HTML Tag', 'HTML Attribute', 'HTML Element', 'HTML Body', 1, 1),
('HTML is what type of language ? ', 'Scripting Language', 'Markup Language', 'Programming Language', 'Network Protocol', 'Scripting Language', 2, 1),
('HTML uses ', 'User defined tags', 'Pre-specified tags', 'Fixed tags defined by the language', 'Tags only for linking', 'Fixed tags defined by the language', 3, 1),
('The year in which HTML was first proposed _______. ', '1990', '1980', '2000', '1995', '1990', 4, 1),
('What is the full form of HTML? ', 'HyperText Markup Language', 'Hyper Teach Markup Language', 'Hyper Tech Markup Language', 'None of these', 'HyperText Markup Language', 5, 1),
(' 	\r\nWhat tag is used to display a picture in a HTML page? ', 'picture', 'image', 'img', 'src', 'img', 6, 1),
('How can you make a bulleted list with numbers? ', '<dl>', '<ol>', '<list>', '<ul>', '<ol>', 7, 1),
('What should be the first tag in any HTML document? ', '<head>', '<title>', '<html>', '<document>', '<html>', 8, 1),
('Who is Known as the father of World Wide Web (WWW)? ', 'Robert Cailliau', 'Tim Thompson', 'Charles Darwin', 'Tim Berners-Lee', 'Tim Berners-Lee', 9, 1),
('Apart from <b> tag, what other tag makes text bold ? ', '<fat>', '<strong>', '<black>', '<emp>', '<fat>', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

CREATE TABLE `user_record` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Time_resistation` datetime NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`id`, `Name`, `Email`, `Gender`, `Time_resistation`, `Password`) VALUES
(24, 'Mohammad Shavez', 'shavezrayeen@gmail.com', 'Male', '2021-12-12 00:02:25', '123'),
(25, 'Ahaan', 'ahan@123.com', 'Male', '2021-12-12 00:45:14', '123456'),
(34, 'mohammad ashraf', 'mohdashraf@12.com', 'Male', '2021-12-12 01:53:34', '123'),
(35, 'Shavez Rayeen', 'shavez@gmail.com', 'Male', '2021-12-12 23:51:32', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categary`
--
ALTER TABLE `categary`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `quez_question`
--
ALTER TABLE `quez_question`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_record`
--
ALTER TABLE `user_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categary`
--
ALTER TABLE `categary`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `quez_question`
--
ALTER TABLE `quez_question`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_record`
--
ALTER TABLE `user_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
