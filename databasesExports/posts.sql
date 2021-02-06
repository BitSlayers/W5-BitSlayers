-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 08:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `postcomments`
--

CREATE TABLE `postcomments` (
  `postid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dates` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postcomments`
--

INSERT INTO `postcomments` (`postid`, `email`, `comment`, `dates`) VALUES
(2, 'mayur', 'Hey,Thanks for the post i had the same doubt!', NULL),
(2, 'mayur', 'Can you provide more resources?', NULL),
(6, 'lavleen', 'The Final Answer of 2nd one is 42 right?', NULL),
(5, 'lavleen', 'I think the second step is wrong!', '2021-02-06'),
(1, 'lavleen', 'Can You give the solution for second one?', '2021-02-06'),
(1, 'ace', 'Sorry i dont have it :(', '2021-02-06'),
(4, 'lavleen', 'Very Challenging Questions!', '2021-02-06'),
(2, 'ace', 'Why is this subject so hard!!!', '2021-02-06'),
(4, 'lavleen', 'I think soln of Q11 is Option B', '2021-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `postlikes`
--

CREATE TABLE `postlikes` (
  `email` varchar(255) NOT NULL,
  `postid` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postlikes`
--

INSERT INTO `postlikes` (`email`, `postid`) VALUES
('ace', 7),
('parthvora', 1),
('mayur', 6),
('ace', 6),
('ace', 1),
('lavleen', 6),
('lavleen', 1),
('ace', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posttable`
--

CREATE TABLE `posttable` (
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0,
  `tag` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posttable`
--

INSERT INTO `posttable` (`title`, `content`, `author`, `image`, `id`, `likes`, `dislikes`, `tag`) VALUES
('Quantitative Problems for Practice', '', 'ace', '9317-d1.png', 1, 2, 0, 'Aptitude'),
('T.O.C State Transition Diagram (Help Needed!)', '', 'ace', '3367-d2.png', 2, 1, 0, 'toc'),
('Quantitative Problems for Practice(Part-2)', '', 'ace', '7494-d3.png', 4, 0, 0, 'Aptitude'),
('JEE Mains 2013 Practice Problems (Second Set)', '', 'Lavleen', '2485-jee2.png', 6, 3, 0, 'jee');

-- --------------------------------------------------------

--
-- Table structure for table `savedposts`
--

CREATE TABLE `savedposts` (
  `email` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posttable`
--
ALTER TABLE `posttable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posttable`
--
ALTER TABLE `posttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
