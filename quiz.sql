-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2019 at 10:20 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `choice1` varchar(200) NOT NULL,
  `choice2` varchar(200) NOT NULL,
  `choice3` varchar(200) NOT NULL,
  `choice4` varchar(200) NOT NULL,
  `answer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Which of the following browser supports HTML5 in its latest version?', 'Apple Safari', 'Google Chrome', 'Both of the above.', ' None of the above.', 'Both of the above.'),
(2, 'Which of the following is true about Cookies?', 'Cookies are included with every HTTP request, thereby slowing down your web application by transmitting the same data.', 'Cookies are included with every HTTP request, thereby sending data unencrypted over the internet.', 'Cookies are limited to about 4 KB of data . Not enough to store required data.', 'All of the above.', 'All of the above.'),
(3, 'When a session storage data gets deleted in HTML5?', 'The Session Storage Data would be deleted by the browsers immediately after the session gets terminated.', 'If you want to clear all settings, you need to call localStorage.clear() method.', ' Both of the above.', 'None of the above.', 'The Session Storage Data would be deleted by the browsers immediately after the session gets terminated.'),
(4, 'Which of the following attribute triggers event when the window gets focus?', 'focus', 'onfocus', 'onformchange', 'onforminput', 'onfocus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(36, 'Arun', 'admin@gmail.com', 'admin'),
(37, 'Arun', 'arun@gmail.com', 'arun'),
(38, 'Aruns', 'admins@gmail.com', 'arunadmin'),
(41, 'aruns', 'hello@gmail.com', 'aruns'),
(46, 'admin', 'admin@gmail.com', 'admin'),
(47, 'kiran', 'ks4uofficial@gmail.com', 'kiran'),
(48, 'aruns', 'adminss@gmail.com', 'admin'),
(49, 'hai', 'hai@gmail.com', 'hai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `user` ADD FULLTEXT KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
