-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Oct 2018 la 16:55
-- Versiune server: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tama`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `petentity`
--

CREATE TABLE `petentity` (
  `id` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_owner` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `current_health` int(11) NOT NULL,
  `current_hunger` int(11) NOT NULL,
  `current_happiness` int(11) NOT NULL,
  `current_sleep` int(11) NOT NULL,
  `current_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pettypes`
--

CREATE TABLE `pettypes` (
  `id` int(12) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL,
  `maxLevel` int(4) NOT NULL,
  `maxHunger` int(4) NOT NULL,
  `maxHappy` int(4) NOT NULL,
  `maxSleep` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `pettypes`
--

INSERT INTO `pettypes` (`id`, `name`, `description`, `maxLevel`, `maxHunger`, `maxHappy`, `maxSleep`) VALUES
(1, 'starter', '', 10, 100, 100, 100),
(2, 'cat', '', 14, 120, 80, 160);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `lvl` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `lvl`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$9CBWG.e1nqpzI/0ZlVya6ubMe.IP81iS.ZOq85G6EXb9t6/for2FG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
