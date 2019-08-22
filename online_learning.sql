-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 06:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(25) NOT NULL,
  `email` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `forum_users`
--

CREATE TABLE IF NOT EXISTS `forum_users` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `replies` int(255) NOT NULL,
  `score` int(255) NOT NULL,
  `topics` int(255) NOT NULL,
  `image` varchar(9999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_users`
--

INSERT INTO `forum_users` (`id`, `user`, `pass`, `email`, `replies`, `score`, `topics`, `image`) VALUES
(1, 'asdasdasd', 'asdasdasd', 'asd@gmail.com', 0, 0, 0, '14.png'),
(2, 'tithy0987', '12345678', 'tithy@gmail.com', 0, 0, 0, '13.png'),
(3, 'qweqweqwe', 'qweqweqwe', 'qwe@gmail.com', 0, 0, 0, '10.png'),
(4, 'tamanna', '12345678', 'tamanna@gmail.com', 0, 0, 0, '65318151_1260345197472207_2435359766659203072_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `replies_id` int(11) NOT NULL,
  `replies_name` varchar(255) NOT NULL,
  `replies_content` varchar(999) NOT NULL,
  `replies_creator` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`replies_id`, `replies_name`, `replies_content`, `replies_creator`, `date`) VALUES
(1, '', '1st reply from tamanna ', 'tamanna', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_name` varchar(255) NOT NULL,
  `topic_content` varchar(2000) NOT NULL,
  `topic_creator` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`, `topic_content`, `topic_creator`, `date`) VALUES
(1, 'hello this is the first post ', 'hello this is the first post  hello this is the first post hello this is the first post ', 'tamanna', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `t_class_material`
--

CREATE TABLE IF NOT EXISTS `t_class_material` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(999) NOT NULL,
  `subject` varchar(999) NOT NULL,
  `title` varchar(999) NOT NULL,
  `des` varchar(2000) NOT NULL,
  `author` varchar(999) NOT NULL,
  `video` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `file` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_class_material`
--

INSERT INTO `t_class_material` (`id`, `date`, `class`, `subject`, `title`, `des`, `author`, `video`, `a_email`, `file`) VALUES
(2, '2019-06-14', '1', 'svfdfv', 'bfgnfhgn', 'vn ghdmhjf,', 'asd', 'https://www.youtube.com/', 'acd@gmail.com', 'uploads/New Microsoft Office Word Document.docx'),
(5, '2019-06-04', '9', 'math', 'linear', 'linear', 'linear ', 'https://www.youtube.com/watch?v=9fkld7LHUcQ', 'acd@gmail.com', ''),
(6, '2019-07-10', '9', 'math', 'LINEAR ALGEBRA ', 'uri was a devil ASDF ASDF ', 'bb', 'https://www.youtube.com/watch?v=9fkld7LHUcQ', 'jhon@gmail.com', 'uploads/privacy.pdf'),
(7, '2019-07-12', '1', 'ath', 'linear', ' Checking the network cables, modem, and router Reconnecting to Wi-Fi Running Windows Network Diagnostics DNS_PROBE_FINISHED_NO_INTERNET', 'jhon', 'https://www.youtube.com/watch?v=9fkld7LHUcQ', 'jhon@gmail.com', 'uploads/04 Data Warehouse.ppt');

-- --------------------------------------------------------

--
-- Table structure for table `t_reg`
--

CREATE TABLE IF NOT EXISTS `t_reg` (
  `id` int(11) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `user` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(999) NOT NULL,
  `fb` varchar(999) NOT NULL,
  `link` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_reg`
--

INSERT INTO `t_reg` (`id`, `first_name`, `user`, `pass`, `last_name`, `email`, `date`, `gender`, `fb`, `link`) VALUES
(1, 'jhon', 'jhonesmith', 'jhonesmith', 'smith', 'jhon@gmail.com', '1990-05-08', 'male', 'https://www.facebook.com/', 'https://www.linkedin.com'),
(2, 'smith', 'smith123456', 'smith123456', 'asd', 'acd@gmail.com', '2019-05-10', 'male', 'https://www.facebook.com/', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `user` varchar(999) NOT NULL,
  `pass` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `email` varchar(999) NOT NULL,
  `date` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `fb` varchar(999) NOT NULL,
  `link` varchar(999) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `user`, `pass`, `last_name`, `email`, `date`, `gender`, `fb`, `link`) VALUES
(1, 'asd', 'amnfdjbv', 'amnfdjbv', 'asd', 'acd@gmail.com', '2019-05-15', 'gender', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(3, 'doctor ', 'tithy0987', 'tithy0987', 'asd', 'ami09876@gmail.com', '2019-05-09', 'female', 'https://www.facebook.com/', 'https://www.linkedin.com'),
(4, 'Tithy', 'tithy123456', 'tithy123456', 'Tamanna', 'tithy@gmail.com', '2019-02-17', 'female', 'https://www.facebook.com/', 'https://www.linkedin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_users`
--
ALTER TABLE `forum_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`replies_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `t_class_material`
--
ALTER TABLE `t_class_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_reg`
--
ALTER TABLE `t_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_users`
--
ALTER TABLE `forum_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `replies_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_class_material`
--
ALTER TABLE `t_class_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_reg`
--
ALTER TABLE `t_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
