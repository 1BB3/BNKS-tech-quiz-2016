-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 02:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techno-quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `question_no` tinyint(4) NOT NULL,
  `option_1` char(200) NOT NULL,
  `option_2` char(200) NOT NULL,
  `option_3` char(200) NOT NULL,
  `option_4` char(200) NOT NULL,
  `option_5` char(200) NOT NULL,
  `correct` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`question_no`, `option_1`, `option_2`, `option_3`, `option_4`, `option_5`, `correct`) VALUES
(1, 'nebun', 'bappi', 'sanjeev', 'pramesh', 'raj', 'gabs'),
(2, '0', '8', '1', '2', '3', '4'),
(3, 'linux trovlads', 'linus trovalds', 'linu toru', 'linus torvlads', 'linux torvlads', 'linus torvalds'),
(4, 'multimedia internet mail exchanges', 'multi interface media encoding', 'media interface multiple extensions', 'multimedia information mail exchange', 'mail information and media extensions', 'multipurpose internet mail extensions'),
(5, 'acer', 'lenovo', 'facebook', 'google', 'steam', 'valve'),
(6, 'video loving country', 'video lan club', 'video lan commitee', 'video lan company', 'video lan consortium', 'video lan corporation'),
(7, 'audio editing software', 'chicken frying software', 'word processing software', 'video rendering engine', 'social networking application', 'version controlling system'),
(8, 'arduino', 'vlc', 'php', 'mysql', 'android', 'fifa'),
(9, 'Nyaharika', 'neharika', 'nyarika', 'egg', 'neha rika', 'Nyaharika'),
(10, 'Biken', 'Srisha', 'Biken', 'beeken', 'butter', 'Biken'),
(11, 'Richard Stallman', 'Richard staleman', 'Donald Trump', 'Nyaharika Rai', 'Girraffe', 'Richard Stallman'),
(12, 'Biken', 'Biwansh', 'Ashutosh', 'Nabin', 'Nikhil', 'Biken');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_no` tinyint(4) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_no`, `question`) VALUES
(1, 'what is my name'),
(2, 'What is 2 plus 2'),
(3, 'who is the founder of linux'),
(4, 'what is the full form of MIME'),
(5, 'which company developed dota2'),
(6, 'what is the full form of VLC'),
(7, 'what is git'),
(8, 'which of the following is not open source'),
(9, 'who is the president of BNKS dot Net'),
(10, 'who is the president of DADC'),
(11, 'who is the pioneer of Free Software Foundation'),
(12, 'Who is the most handsome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`question_no`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `question_no` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_no` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
