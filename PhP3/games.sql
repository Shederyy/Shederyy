-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 08:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games`
--

-- --------------------------------------------------------

--
-- Table structure for table `console`
--

CREATE TABLE `console` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `creator` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `origin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `console`
--

INSERT INTO `console` (`id`, `name`, `creator`, `created_at`, `origin`) VALUES
(1, 'Nintendo Switch', 'Nintendo', '2017-03-03 19:50:21', 'Japan'),
(2, 'PC', 'Microsoft', '1971-02-05 12:00:00', 'USA'),
(3, 'Steam Deck', 'Steam', '2022-02-25 12:00:00', 'USA'),
(4, 'PlayStation 5', 'Sony', '2020-11-19 12:00:00', 'Japan'),
(5, 'Xbox Series X', 'Microsoft', '2020-11-19 12:00:00', 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `origin` varchar(45) DEFAULT NULL,
  `known_for` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`id`, `name`, `date_of_birth`, `origin`, `known_for`) VALUES
(1, 'Hideo Kojima', '0000-00-00 00:00:00', 'Tokyo,Japan', 'Metal Gear'),
(2, 'Gabe Newell', '0000-00-00 00:00:00', 'Colorado,USA', 'God of War'),
(3, 'Markus Person', '0000-00-00 00:00:00', 'Stockholm,Sweden', 'Minecraft'),
(4, 'Naotoshi Zin', '0000-00-00 00:00:00', 'Tokyo,Japan', 'Elden Ring'),
(5, 'Jason West', '0000-00-00 00:00:00', 'New York,USA', 'Call of Duty MW2'),
(6, 'Kadzunoru Yamauchi', '0000-00-00 00:00:00', 'Chiba,Japan', 'Gran Turismo'),
(7, 'Nial Drugman', '0000-00-00 00:00:00', 'Televil,Israel', 'The Last Of Us Part 1');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `release_date` datetime NOT NULL,
  `platform_id` int(11) DEFAULT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `name`, `release_date`, `platform_id`, `creator_id`, `genre_id`, `vote`) VALUES
(1, 'The Last Of Us Part 1', '0000-00-00 00:00:00', 0, 7, 2, 0),
(2, 'God Of War', '0000-00-00 00:00:00', 0, 2, 1, 0),
(3, 'Elden Ring', '0000-00-00 00:00:00', 0, 4, 1, 0),
(4, 'Call Of Duty MW2', '0000-00-00 00:00:00', 0, 5, 4, 0),
(5, 'Gran Turismo', '0000-00-00 00:00:00', 0, 6, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gameplatform`
--

CREATE TABLE `gameplatform` (
  `idgame` int(11) NOT NULL,
  `idplatform` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gameplatform`
--

INSERT INTO `gameplatform` (`idgame`, `idplatform`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `date` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `most_famous` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`, `country`, `date`, `created_at`, `most_famous`) VALUES
(1, 'Adventure', 'USA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'CyberPunk2077'),
(2, 'Horror', 'Japan', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Resident Evil'),
(3, 'Driving', 'Germany', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Gran Turismo'),
(4, 'FPS', 'USA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Call Of Duty MW2'),
(5, 'Open World', 'Japan', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Elden Ring');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '*81A32A5F96B9B86F867');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `g_creator_idx` (`creator_id`),
  ADD KEY `g_genre_idx` (`genre_id`);

--
-- Indexes for table `gameplatform`
--
ALTER TABLE `gameplatform`
  ADD PRIMARY KEY (`idgame`,`idplatform`),
  ADD KEY `id_platform_to_console_idx` (`idplatform`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `console`
--
ALTER TABLE `console`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `creator`
--
ALTER TABLE `creator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `g_creator` FOREIGN KEY (`creator_id`) REFERENCES `creator` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `g_genre` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `gameplatform`
--
ALTER TABLE `gameplatform`
  ADD CONSTRAINT `id_games_to_games` FOREIGN KEY (`idgame`) REFERENCES `game` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `id_platform_to_console` FOREIGN KEY (`idplatform`) REFERENCES `console` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
