-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2024 at 04:34 AM
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
-- Database: `kmfmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_position` varchar(255) NOT NULL,
  `about_name` varchar(255) NOT NULL,
  `about_desc` longtext NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_position`, `about_name`, `about_desc`, `about_img`, `is_active`) VALUES
(2, 'Co-Founder', 'Naman Kaushal', '<p>â€œGuiding our ship through the digital seas, our co-founder is the visionary captain, steering us towards innovation and success. Chart the course!â€<br>#LeadershipUnleashed</p>', 'about_img73_co-founder.jpg', '1'),
(3, 'Social media manager', 'Ananya Khushi', '<p>â€œBehind the scenes and beyond the posts, our social media manager weaves the narrative that connects us all. Engage with the story! ðŸŒâœ¨ #SocialMediaMaestroâ€</p>', 'about_img943_ananya.jpg', '1'),
(4, 'Manager, Graphic Designer', 'Aman Nayak', '<p>â€œIn a world of pixels and passion, our graphic designer crafts stories that speak louder than words. Explore the artistry! ðŸ–Œï¸âœ¨ #DesignAlchemyâ€</p>', 'about_img605_aman.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
