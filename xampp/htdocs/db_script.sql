-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 04:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'javascript'),
(5, 'PHP'),
(6, 'Java'),
(7, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `checkoutsID` int(11) NOT NULL,
  `equipmentID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `workerID` int(11) NOT NULL,
  `timeOut` datetime NOT NULL,
  `timeIn` datetime DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(8, 1, 'blu', 'lubaochuan@gmail.com', 'test comment', 'unapproved', '2020-12-29'),
(9, 2, 'dsaf', 'blu@sbuniv.edu', 'hello', 'unapproved', '2020-12-29'),
(10, 1, '', '', '', 'unapproved', '2021-01-07'),
(11, 1, 'dsaf', 'blu@sbuniv.edu', 'Hello', 'unapproved', '2021-01-07'),
(12, 1, 'dsaf', 'blu@sbuniv.edu', 'Hello', 'unapproved', '2021-01-07'),
(13, 1, 'b. Lu', 'lubaochuan@gmail.com', 'Hello world', 'unapproved', '2021-01-07'),
(14, 2, 'b. Lu', 'lubaochuan@gmail.com', 'Good job.', 'approved', '2021-01-11'),
(15, 2, 'blu', 'lubaochuan@gmail.com', 'Good job.', 'approved', '2021-01-11'),
(16, 7, 'blu', 'jianpuwang07@gmail.com', 'asdfa', 'approved', '2021-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipmentID` int(11) NOT NULL,
  `equipmentType` int(11) NOT NULL,
  `equipmentStatus` char(255) NOT NULL,
  `lastCleanedBy` int(11) NOT NULL,
  `dateAdded` date NOT NULL,
  `dateRemoved` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `equipmenttypes`
--

CREATE TABLE `equipmenttypes` (
  `equipmentTypeID` int(11) NOT NULL,
  `equipmentType` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(2, 1, 'PHP', 'blu', '2020-12-29', '350x150.png', 'hello world', 'java, js', 2, 'published'),
(7, 5, 'RE: Hello', 'Blu', '2021-01-12', '350x65.png', '<ul><li>eat</li><li>drink</li><li>be merry</li></ul>', 'java, js', 1, 'published'),
(10, 1, 'Syllabus', 'Blu', '2021-01-14', '', '<p>Teset</p>', 'java, js', 0, 'published'),
(11, 1, 'PHP', 'blu', '2021-01-14', '350x150.png', 'hello world', 'java, js', 2, 'published'),
(12, 5, 'RE: Hello', 'Blu', '2021-01-14', '350x65.png', '<ul><li>eat</li><li>drink</li><li>be merry</li></ul>', 'java, js', 1, 'published'),
(13, 1, 'Syllabus', 'Blu', '2021-01-14', '', '<p>Teset</p>', 'java, js', 0, 'published'),
(14, 1, 'Syllabus', 'Blu', '2021-01-15', '', '<p>Teset</p>', 'java, js', 0, 'published'),
(15, 5, 'RE: Hello', 'Blu', '2021-01-15', '350x65.png', '<ul><li>eat</li><li>drink</li><li>be merry</li></ul>', 'java, js', 1, 'published'),
(16, 1, 'PHP', 'blu', '2021-01-15', '350x150.png', 'hello world', 'java, js', 2, 'published'),
(17, 1, 'Syllabus', 'Blu', '2021-01-15', '', '<p>Teset</p>', 'java, js', 0, 'published'),
(18, 5, 'RE: Hello', 'Blu', '2021-01-15', '350x65.png', '<ul><li>eat</li><li>drink</li><li>be merry</li></ul>', 'java, js', 1, 'published'),
(19, 1, 'PHP', 'blu', '2021-01-15', '350x150.png', 'hello world', 'java, js', 2, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text DEFAULT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) DEFAULT '$2y$10$iusesomecrazystrings12$'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(5, 'admin', '$2y$10$iusesomecrazystrings1uvXMOXlmEX.A1CFtrOOG/r92dZgLL/rS', 'B. ', 'Lu', 'lubaochuan@gmail.com', NULL, 'admin', '$2y$10$iusesomecrazystrings12$'),
(24, 'bbb', '$2y$10$iusesomecrazystrings1uvXMOXlmEX.A1CFtrOOG/r92dZgLL/rS', NULL, NULL, 'blu@sbuniv.edu', NULL, 'admin', '$2y$10$iusesomecrazystrings12$'),
(25, 'ryzenlevel', '$2y$10$iusesomecrazystrings1ulpaUESTP6FW2bJ.XRqoYBKz8qplb88e', 'Treyton', 'Davis', 'tdavis422@gmail.com', NULL, 'admin', '$2y$10$iusesomecrazystrings12$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`checkoutsID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipmentID`);

--
-- Indexes for table `equipmenttypes`
--
ALTER TABLE `equipmenttypes`
  ADD PRIMARY KEY (`equipmentTypeID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `checkoutsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `equipmenttypes`
--
ALTER TABLE `equipmenttypes`
  MODIFY `equipmentTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
