-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 06:44 PM
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
(6, 'lavleen', 'The Final Answer of 2nd one is 42 right?', NULL),
(5, 'lavleen', 'I think the second step is wrong!', '2021-02-06'),
(1, 'lavleen', 'Can You give the solution for second one?', '2021-02-06'),
(4, 'lavleen', 'Very Challenging Questions!', '2021-02-06'),
(4, 'lavleen', 'I think soln of Q11 is Option B', '2021-02-06'),
(14, 'user1', 'This QB is awesome!', '2021-02-07'),
(17, 'ace', 'hey there!', '2021-02-07'),
(19, 'mayur', 'Thank you for this!', '2021-02-07'),
(17, 'admin', 'hello there!', '2021-02-07');

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
('lavleen', 6),
('lavleen', 1),
('user1', 14),
('ace', 2),
('ace', 15),
('ace', 4),
('johndoe', 2),
('mayur', 2),
('mayur', 19);

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
('T.O.C State Transition Diagram (Help Needed!)', '', 'ace', '3367-d2.png', 2, 3, 0, 'toc'),
('JEE Mains 2013 Practice Problems (Second Set)', '', 'Lavleen', '2485-jee2.png', 6, 3, 0, 'jee'),
('Jee Main QP', '', 'user1', '5701-d3.png', 14, 1, 0, 'jee'),
('Integration Formula List', '', 'ace', '1175-intge.gif', 17, 0, 0, 'calculus'),
('Jee mains QP 2', '', 'mayur', '1890-d2.png', 19, 1, 0, 'jee');

-- --------------------------------------------------------

--
-- Table structure for table `projectcomments`
--

CREATE TABLE `projectcomments` (
  `postid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `dates` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectcomments`
--

INSERT INTO `projectcomments` (`postid`, `email`, `comment`, `dates`) VALUES
(1, 'ace', 'hi', '2021-02-07'),
(2, 'ace', 'Great Idea,Would love to collab,here is my mail : ace@fastmail.com', '2021-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `projectlikes`
--

CREATE TABLE `projectlikes` (
  `email` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectlikes`
--

INSERT INTO `projectlikes` (`email`, `postid`) VALUES
('ace', 2),
('ace', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projecttable`
--

CREATE TABLE `projecttable` (
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projecttable2`
--

CREATE TABLE `projecttable2` (
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislikes` int(11) NOT NULL DEFAULT 0,
  `tags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projecttable2`
--

INSERT INTO `projecttable2` (`title`, `content`, `author`, `image`, `id`, `likes`, `dislikes`, `tags`) VALUES
('GameDev Project Idea(Top Down Shooter)', 'Polymans Adventure is a Top down shooter with Low-Poly 3D Art style made using Unity Engine standard render pipe line.With the use of simple art styles and graphics, the game features fluid and smooth gameplay. \r\n', 'ace', '', 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `savedposts`
--

CREATE TABLE `savedposts` (
  `email` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savedposts`
--

INSERT INTO `savedposts` (`email`, `postid`) VALUES
('ace', 14),
('ace', 6),
('mayur', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posttable`
--
ALTER TABLE `posttable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecttable2`
--
ALTER TABLE `projecttable2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posttable`
--
ALTER TABLE `posttable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `projecttable2`
--
ALTER TABLE `projecttable2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
