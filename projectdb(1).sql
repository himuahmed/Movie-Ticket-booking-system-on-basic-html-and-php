-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 07:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(2) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `password`) VALUES
(1, 'himu', '123456'),
(1, 'himu', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `header_images`
--

CREATE TABLE `header_images` (
  `id` int(10) NOT NULL,
  `sequence` int(10) NOT NULL,
  `movieName` varchar(100) NOT NULL,
  `movie_link` varchar(255) NOT NULL,
  `movie_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_images`
--

INSERT INTO `header_images` (`id`, `sequence`, `movieName`, `movie_link`, `movie_image`) VALUES
(2, 1, 'la casa d papel', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/moneyheist.jpg'),
(3, 2, 'kimi no na wa ', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/friends.jpg'),
(5, 4, 'kimi no na wa', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/kiminonawa.jpg'),
(6, 5, 'princes kaguya', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/kaguya.jpg'),
(7, 6, 'friends', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/friends.jpg'),
(8, 7, 'my friend totoro', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/totoro.jpg'),
(9, 8, 'wolf children', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/'),
(10, 9, 'la casa d papel 2', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/moneyheist.jpg'),
(11, 10, 'one piece 3', 'https://www.youtube.com/watch?v=WBb3fojgW0Q', 'headerImage/onepiece.jpg'),
(12, 3, 'kaguya', 'https://youtu.be/WBb3fojgW0Q?t=24', 'headerImage/friends.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, '3.jpg', '2018-11-14 13:09:42', '1'),
(66, '42453937_459525307788101_6606882053235408896_o.jpg', '2018-11-10 19:59:45', '1'),
(77, '4.jpg', '2018-11-10 21:02:19', '1'),
(84, '20181112130854_1.jpg', '2018-11-14 12:47:31', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) NOT NULL,
  `movie_serial` int(10) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_price` int(10) NOT NULL,
  `movie_qty` int(10) NOT NULL,
  `movie_poster` varchar(500) NOT NULL,
  `movie_catagory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_serial`, `movie_name`, `movie_price`, `movie_qty`, `movie_poster`, `movie_catagory`) VALUES
(11, 1, 'Venom', 120, 5, 'images/1.jpg', 'Thriller'),
(12, 2, 'logan', 120, 10, 'images/2.jpg', 'Thriller'),
(13, 3, 'batman', 220, 30, 'images/4.jpg', 'Thriller'),
(14, 4, 'spiderman', 250, 30, 'images/3.jpg', 'Thriller'),
(15, 5, 'kimi no na wa', 550, 60, 'images/14.jpg', 'Thriller'),
(16, 6, 'kimi no todoke', 120, 10, 'images/6.jpg', 'Thriller'),
(17, 7, 'one piece', 320, 30, 'images/12.jpg', 'Thriller'),
(18, 8, 'naruto', 150, 100, 'images/17.jpg', 'Thriller'),
(19, 9, 'logan2', 300, 20, 'images/8.jpg', 'Thriller'),
(21, 10, 'deadpool', 300, 40, 'images/12.jpg', 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` int(13) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `name`, `password`, `email`, `address`, `birth`, `gender`, `course`, `id`) VALUES
('himu', 'ahmed', 'himu1', '123456Hh#*', 'himu@gmail.com', 'dhaka,bangladesh', '1996-05-30', 'male', 1521572692, 2),
('azim', 'khan', 'tonmoy', '456789Tt$#', 'tonmoy@yahoo.com', 'dhaka', '1991-11-20', 'male', 2147483647, 3),
('', '', '', '', '', '', '', 'male', 0, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `header_images`
--
ALTER TABLE `header_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`name`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `header_images`
--
ALTER TABLE `header_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
