-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2024 at 04:35 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_img` varchar(255) NOT NULL,
  `blog_content` varchar(400) NOT NULL,
  `main_page_desc` varchar(30000) NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_img`, `blog_content`, `main_page_desc`, `is_active`) VALUES
(9, 'Mastering Social Media for Musicians: Tips and Tricks', 'blog_img154_news02.jpg', 'Explore the power of social media for musicians and learn valuable tips and tricks to enhance your online presence. ', '<p>Explore the power of social media for musicians and learn valuable tips and tricks to enhance your online presence. Whether youre a seasoned artist or just starting, this guide will help you navigate the world of social media and connect with your audience.</p>', '1'),
(10, 'Behind the Beats: Artist Spotlights and Interviews', 'blog_img535_news03.jpg', 'Discover the stories behind the beats as we shine a spotlight on talented artists in the music industry. ', '<p>Discover the stories behind the beats as we shine a spotlight on talented artists in the music industry. Join us for exclusive interviews, insights into the creative process, and a closer look at the individuals shaping the musical landscape.</p>', '1'),
(11, 'Music Industry Trends: Navigating the Digital Era', 'blog_img525_news04.jpg', 'Stay ahead in the dynamic music industry by exploring the latest trends and navigating the digital era.', '<p>Stay ahead in the dynamic music industry by exploring the latest trends and navigating the digital era. Learn about the evolving landscape of streaming, technologys impact on music creation and distribution, and strategies to thrive in this digital age.</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_img` varchar(255) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_img`, `portfolio_title`, `is_active`) VALUES
(1, 'img_317_T-series-logo.png', 'T-Series', '1'),
(7, 'portfolio_img512_apeed_records.jpg', 'Speed Records', '1'),
(8, 'portfolio_img770_saregama.webp', 'Saregama', '1'),
(9, 'portfolio_img930_meetbros.webp', 'Meet Bros', '1'),
(10, 'portfolio_img516_sony-music.jpg', 'Sony Music', '1'),
(11, 'portfolio_img432_universal_music.png', 'Universal Music', '1'),
(12, 'portfolio_img839_tips_music.png', 'Tips Music', '1'),
(13, 'portfolio_img64_White_Hill_Studios_Logo.svg', 'White Hill Music', '1');

-- --------------------------------------------------------

--
-- Table structure for table `reels_package`
--

CREATE TABLE `reels_package` (
  `rpackage_id` int(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `package_desc` longtext NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reels_package`
--

INSERT INTO `reels_package` (`rpackage_id`, `package_name`, `package_price`, `package_desc`, `is_active`) VALUES
(3, 'TESTERS BAG', '10,000', '<p>10 Big pages ✅&nbsp;</p><p>&nbsp;</p><p>30 Micro Pages ✅&nbsp;</p><p>&nbsp;</p><p>High Reach ✅&nbsp;</p><p>&nbsp;</p><p>Possibilities of trending ✅&nbsp;</p><p>&nbsp;</p><p>Reels + story promotion&nbsp;</p><p>from all the pages ✅</p>', '1'),
(4, 'VIRAL VISION', '35,000', '<p>50 Big Pages ✅&nbsp;</p><p>&nbsp;</p><p>50 Micro Pages ✅&nbsp;</p><p>&nbsp;</p><p>High Reach ✅&nbsp;</p><p>&nbsp;</p><p>Possibilities of trending ✅&nbsp;</p><p>&nbsp;</p><p>Reels + story promotion&nbsp;</p><p>from all the pages ✅</p>', '1'),
(5, 'TRENDING ASSURED', '120,000', '<p>200 Big Pages ✅&nbsp;</p><p>&nbsp;</p><p>200 Micro Pages ✅&nbsp;</p><p>&nbsp;</p><p>High Reach ✅&nbsp;</p><p>&nbsp;</p><p>Possibilities of trending ✅&nbsp;</p><p>&nbsp;</p><p>Reels + story promotion&nbsp;</p><p>from all the pages ✅</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `spotify_package`
--

CREATE TABLE `spotify_package` (
  `spackage_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `package_desc` longtext NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spotify_package`
--

INSERT INTO `spotify_package` (`spackage_id`, `package_name`, `package_price`, `package_desc`, `is_active`) VALUES
(1, 'Algorithm Boost', '4,000', '<p><strong>10k+</strong> Streams ?&nbsp;</p><p>&nbsp;</p><p><strong>Indian</strong> Audience ?&nbsp;</p><p>&nbsp;</p><p><strong>Organic</strong> ?&nbsp;</p><p>&nbsp;</p><p>Your song will be pushed&nbsp;</p><p>on Algorithmic playlists&nbsp;</p><p>like Radio,Release Radar,&nbsp;</p><p>Your Daily mix,etc.&nbsp;</p><p>created by Spotify.</p>', '1'),
(5, 'BRAND BUILDER', '13,000', '<p>(GLOBAL)&nbsp;</p><p>&nbsp;</p><p>100,000+ Streams ✅&nbsp;</p><p>&nbsp;</p><p>10k+ Monthly listeners ✅&nbsp;</p><p>&nbsp;</p><p>(INDIAN)&nbsp;</p><p>&nbsp;</p><h3><strong>₹20,000&nbsp;</strong></h3><p>&nbsp;</p><p>100,000+ Streams ✅&nbsp;</p><p>&nbsp;</p><p>15k+ Monthly listeners ✅</p>', '1'),
(6, 'PLAYLIST MAGIC', '5,000', '<p>Get your songs listed in&nbsp;</p><p>genre/category&nbsp;</p><p>specific curated playlists.&nbsp;</p><p>&nbsp;</p><p>We have playlists for&nbsp;</p><p>every Genre of Music.</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonials_id` int(255) NOT NULL,
  `testimonials_name` varchar(255) NOT NULL,
  `testimonials_quote` longtext NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonials_id`, `testimonials_name`, `testimonials_quote`, `is_active`) VALUES
(1, ' Atul Garg', 'As an indie artist, this platform gave my music the exposure it deserved. The support and feedback from the community were invaluable\r\n', '1'),
(2, 'Pritam Arora', 'Working with this team was a game-changer for my band. They not only promoted our music but also provided expert guidance on branding.\r\n', '1'),
(3, 'Sakshi Garg', 'I was struggling to find my audience until I joined this promotion service. The targeted campaigns increased my social media following and boosted my Spotify streams.\r\n', '1'),
(4, 'Suraj Arora', 'The marketing strategies employed by this platform are unmatched. They understood my unique sound and crafted a tailored campaign that resonated with my target audience.\r\n', '1'),
(10, 'Drishti Jain', 'What sets this promotion service apart is their unwavering support. They not only promote your music but also provide valuable advice and resources for independent artists', '1'),
(11, 'Rahul Gandhi', 'Joining this community was the turning point of my music career. Their expertise and connections opened doors to collaborations and gigs I never thought possible.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_type` varchar(200) NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `username`, `password`, `login_type`, `is_active`) VALUES
(1, 'example@email.com', 'KMF Media', '229c7501fb77f2b570cb3d402f35b84f', 'superHost', '1');

-- --------------------------------------------------------

--
-- Table structure for table `youtube_package`
--

CREATE TABLE `youtube_package` (
  `ypackage_id` int(255) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `package_desc` longtext NOT NULL,
  `is_active` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `youtube_package`
--

INSERT INTO `youtube_package` (`ypackage_id`, `package_name`, `package_price`, `package_desc`, `is_active`) VALUES
(3, 'TESTERS BAG', '5,000', '<p>20,000+ Views&nbsp;</p><p>&nbsp;</p><p>1,000+ Likes&nbsp;</p><p>&nbsp;</p><p>Location Targeting✅&nbsp;</p><p>&nbsp;</p><p>Interest Targeting✅&nbsp;</p><p>&nbsp;</p><p>Language Targeting✅&nbsp;</p><p>&nbsp;</p><p>Targeted Audience ✅</p>', '1'),
(4, 'FAN FINDER<br>(GOLD)', ' 25,000', '<p>100,000+ Views&nbsp;</p><p>&nbsp;</p><p>5000+ Likes&nbsp;</p><p>&nbsp;</p><p>Location Targeting✅&nbsp;</p><p>&nbsp;</p><p>Interest Targeting✅&nbsp;</p><p>&nbsp;</p><p>Language Targeting✅&nbsp;</p><p>&nbsp;</p><p>Targeted Audience ✅</p>', '1'),
(5, 'BRAND BUILDER', '50,000', '<p>1 Million+ Views&nbsp;</p><p>&nbsp;</p><p>30k+ Likes&nbsp;</p><p>&nbsp;</p><p>2000+ Comments&nbsp;</p><p>&nbsp;</p><p>2000+ Subscribers&nbsp;</p><p>&nbsp;</p><p>Language Targeting✅&nbsp;</p><p>&nbsp;</p><p>Targeted Audience ✅</p>', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `reels_package`
--
ALTER TABLE `reels_package`
  ADD PRIMARY KEY (`rpackage_id`);

--
-- Indexes for table `spotify_package`
--
ALTER TABLE `spotify_package`
  ADD PRIMARY KEY (`spackage_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_package`
--
ALTER TABLE `youtube_package`
  ADD PRIMARY KEY (`ypackage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reels_package`
--
ALTER TABLE `reels_package`
  MODIFY `rpackage_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spotify_package`
--
ALTER TABLE `spotify_package`
  MODIFY `spackage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonials_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `youtube_package`
--
ALTER TABLE `youtube_package`
  MODIFY `ypackage_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
