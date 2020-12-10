-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2019 at 06:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10404225_cse391`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(5) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `album_artist` varchar(50) NOT NULL,
  `album_genre` varchar(50) DEFAULT NULL,
  `album_year` varchar(4) DEFAULT NULL,
  `album_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_name`, `album_artist`, `album_genre`, `album_year`, `album_pic`) VALUES
(1, 'Oniket Prantor', 'Artcell', 'Rock, Metal', '2006', 'http://3.bp.blogspot.com/-nAq82Epjjxg/VecTt3UKzTI/AAAAAAAAACw/gzJod-NKCek/s1600/296575.jpg'),
(2, 'Hybrid Theory', 'Linkin Park', 'Rock', '2000', 'https://upload.wikimedia.org/wikipedia/en/thumb/c/c9/Linkin_park_hybrid_theory.jpg/220px-Linkin_park_hybrid_theory.jpg'),
(3, 'Meteora', 'Linkin Park', 'Metal', '2003', 'https://upload.wikimedia.org/wikipedia/en/thumb/b/b2/Meteora_Live_Around.jpg/220px-Meteora_Live_Around.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracks`
--

CREATE TABLE `tbl_tracks` (
  `track_id` int(5) NOT NULL,
  `track_number` int(2) DEFAULT NULL,
  `track_name` varchar(50) NOT NULL,
  `album_id` int(5) DEFAULT NULL,
  `track_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tracks`
--

INSERT INTO `tbl_tracks` (`track_id`, `track_number`, `track_name`, `album_id`, `track_url`) VALUES
(1, 1, 'Oniket Prantor', 1, 'http://download.music.com.bd/Music/A/Artcell/Oniket%20Prantor/Artcell%20-%20Oniket%20Prantor%20(music.com.bd).mp3'),
(2, 2, 'Dhushor Shomoy', 1, 'http://download.music.com.bd/Music/A/Artcell/Oniket%20Prantor/Artcell%20-%20Dhushor%20Shomoy%20(music.com.bd).mp3'),
(3, 3, 'Poth Chola', 1, 'http://download.music.com.bd/Music/A/Artcell/Onno%20Shomoy/03%20-%20Artcell%20-%20Poth%20Chola%20(music.com.bd).mp3'),
(4, 1, 'In The End', 2, 'https://cloudup.com/files/iJ5uYz436-T/download'),
(5, 1, 'Numb', 3, 'https://cloudup.com/files/i3JmNcQPMpI/download');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Priya', 'priya@gmail.com', '1234', '123456789'),
(2, 'Asma', 'asma@gmail.com', '1234', '789456123'),
(3, 'abcd', 'd@g.ac', '1234', '123456'),
(4, 'priya', 'asmaulhussnapriyaa@gmail.com', '1234', '12345');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
