-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 04:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jagex`
--

-- --------------------------------------------------------

--
-- Table structure for table `runescape_news`
--

CREATE TABLE `runescape_news` (
  `id` int(11) NOT NULL,
  `author_id` int(10) DEFAULT NULL,
  `main_news` varchar(1) DEFAULT '0',
  `date` date NOT NULL,
  `title` tinytext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `story` text DEFAULT NULL,
  `other_news` text DEFAULT NULL,
  `category` int(2) NOT NULL DEFAULT 0,
  `pic` varchar(40) NOT NULL,
  `pic_big` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `runescape_news`
--

INSERT INTO `runescape_news` (`id`, `author_id`, `main_news`, `date`, `title`, `description`, `story`, `other_news`, `category`, `pic`, `pic_big`) VALUES
(0, 0, '1', '0000-00-00', '0', '0', '0', '0', 0, 'article', 'Runescape_update_image_general'),
(1, 0, '0', '0000-00-00', '1', '1', '1', '1', 0, 'article', 'Runescape_update_image_general'),
(2, 0, '0', '0000-00-00', '2', '2', '2', '2', 0, 'article', 'Runescape_update_image_general'),
(3, 0, '0', '0000-00-00', '3', '3', '3', '3', 0, 'article', 'Runescape_update_image_general');

-- --------------------------------------------------------

--
-- Table structure for table `runescape_polls`
--

CREATE TABLE `runescape_polls` (
  `id` int(11) NOT NULL,
  `main_poll` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `title` tinytext DEFAULT NULL,
  `description` text DEFAULT NULL,
  `story` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `runescape_polls`
--

INSERT INTO `runescape_polls` (`id`, `main_poll`, `date`, `title`, `description`, `story`) VALUES
(0, 1, '2024-02-15', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(255) NOT NULL,
  `username` varchar(12) NOT NULL,
  `displayname` varchar(12) NOT NULL,
  `previousname` varchar(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` tinytext NOT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `country` int(4) DEFAULT NULL,
  `register_ip` varchar(40) DEFAULT NULL,
  `register_date` date DEFAULT NULL,
  `website_rights` tinyint(4) NOT NULL,
  `members` int(4) NOT NULL,
  `online` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `username`, `displayname`, `previousname`, `password`, `email`, `dob`, `country`, `register_ip`, `register_date`, `website_rights`, `members`, `online`) VALUES
(0, 'test', 'test', '', 'test', '', '', NULL, NULL, NULL, 0, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `website_settings`
--

CREATE TABLE `website_settings` (
  `id` int(11) NOT NULL,
  `runescape_theme` int(1) DEFAULT NULL,
  `funorb_theme` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `website_settings`
--

INSERT INTO `website_settings` (`id`, `runescape_theme`, `funorb_theme`) VALUES
(0, 7, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `runescape_news`
--
ALTER TABLE `runescape_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `runescape_polls`
--
ALTER TABLE `runescape_polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `website_settings`
--
ALTER TABLE `website_settings`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
