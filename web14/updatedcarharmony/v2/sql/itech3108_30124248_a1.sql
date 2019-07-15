-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 05:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itech3108_30124248_a1`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `title`) VALUES
(1, 'Toyota'),
(2, 'Volkswagen'),
(3, 'Mercedes-Benz'),
(4, 'General Motors (GM)'),
(5, 'Ford');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` int(20) NOT NULL,
  `car_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_id`, `car_id`) VALUES
(4, 3),
(4, 1),
(4, 5),
(5, 2),
(5, 1),
(6, 2),
(6, 4),
(6, 3),
(7, 3),
(7, 1),
(8, 3),
(8, 4),
(8, 3),
(3, 1),
(3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `from_user_id` int(20) NOT NULL,
  `to_user_id` int(20) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`from_user_id`, `to_user_id`, `datetime`, `text`) VALUES
(3, 6, '2019-04-17 15:52:44', 'hi'),
(8, 6, '0000-00-00 00:00:00', 'hi'),
(8, 8, '2019-04-17 19:41:49', 'hi'),
(8, 8, '2019-04-18 20:21:16', 'hi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `photo_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `profile`, `photo_url`) VALUES
(3, 'Allen joseph', 'allen@gmail.com', '$2y$10$123534103030000999999uuYlj1Yc6AweU/XAodZF11oP5ZN8UgNK', 'I like to play football.My hobbies are reading news, swimming and singing.', 'https://img.icons8.com/ultraviolet/80/000000/administrator-male.png'),
(4, 'Paul', 'paul@outlook.com', '$2y$10$123534103030000999999u2GvIHQUV/weuotdcPMMJLls2Ttfh5Zm', 'I like to read news. My hobby is programming. I love to code.', 'https://img.icons8.com/ultraviolet/80/000000/administrator-male.png'),
(5, 'Sammy', 'sammy01@rediffmail.com', '$2y$10$123534103030000999999uxOBJH3sZQs3OX7v2zO45Bj6YkF/x1Je', 'I like to read news and swim in deep sea water. I am gold medalist in running.', 'https://img.icons8.com/ultraviolet/80/000000/administrator-male.png'),
(6, 'Jenny', 'jenny1996@outlook.com', '$2y$10$123534103030000999999uQ.odg9SINA.axWGrVb0vxhKvh5uRlA6', 'I love animals and love travelling. I visits 23 countries till date.', 'https://img.icons8.com/nolan/96/000000/gender-neutral-user.png'),
(7, 'Anna Lois', 'loisanna@outlook.com', '$2y$10$123534103030000999999u9SpL6Qi5i3UOGRPJQM6cKYAJ7Q8xGtW', 'I love to play soccer and my favourite player is Lionel Messi.', 'https://img.icons8.com/nolan/96/000000/gender-neutral-user.png'),
(8, 'tutor', 'tutor@gmail.com', '$2y$10$123534103030000999999ua/hX436ma7wYcLu/mLx99tio.j.Hyq2', 'I am guest', 'https://img.icons8.com/nolan/96/000000/gender-neutral-user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `soccer_id` (`car_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
