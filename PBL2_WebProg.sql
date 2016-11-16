-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 07:25 PM
-- Server version: 5.7.14
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PBL2_WebProg`
--

-- --------------------------------------------------------

--
-- Table structure for table `About_Us`
--

CREATE TABLE `About_Us` (
  `id` int(11) NOT NULL,
  `text_value` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `About_Us`
--

INSERT INTO `About_Us` (`id`, `text_value`, `updated_at`) VALUES
(1, '<p>System of a Down, sometimes shortened to SOAD or System, is a four-piece Armenian-American rock band formed in 1994 in Glendale, California, in the United States. The band currently consists of Serj Tankian (lead vocals, keyboards), Daron Malakian (vocals, guitar), Shavo Odadjian (bass, backing vocals) and John Dolmayan (drums).\r\n<br />\r\n<br />\r\nThe band achieved commercial success with the release of five studio albums, three of which debuted at number one on the Billboard 200. System of a Down has been nominated for four Grammy Awards, and their song "B.Y.O.B." won the Best Hard Rock Performance of 2006. The group briefly disbanded in August 2006 and reunited in November 2010, embarking on a tour for the following three years. System of a Down has sold over 40 million records worldwide.</p>', '2016-11-13 15:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `ContactUs`
--

CREATE TABLE `ContactUs` (
  `id` int(11) NOT NULL,
  `name` text,
  `email` text,
  `messages` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Members`
--

CREATE TABLE `Members` (
  `id` int(11) NOT NULL,
  `text_value` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Members`
--

INSERT INTO `Members` (`id`, `text_value`, `updated_at`) VALUES
(1, '<tr>\r\n<td width="35%">\r\n<img src="resources/images/Serj Tankian.jpg" height="200px" width="200px">\r\n</td>\r\n					\r\n<td>\r\n<p>\r\nSerj Tankian is a Lebanese-born Armenian-American singer-songwriter, composer, multi-instrumentalist, record producer, poet, and political activist.\r\n</p>\r\n</td>\r\n</tr>\r\n\r\n<tr>\r\n<td width="35%">\r\n<img src="resources/images/Daron Malakian.jpg" height="300px" width="200px">\r\n</td>\r\n<td>\r\n<p>Daron Vartan Malakian is an Armenian-American singer-songwriter, multi-instrumentalist, and record producer.\r\n</p>\r\n</td>\r\n</tr>\r\n\r\n<tr>\r\n<td width="35%">\r\n<img src="resources/images/Shavo Odadjian.png" height="200px" width="200px">\r\n</td>\r\n<td>\r\n<p>Shavarsh "Shavo" Odadjian is an Armenian American songwriter, multi-instrumentalist, music video director/editor, music producer, and artist/painter.\r\n</p>\r\n</td>\r\n</tr>\r\n\r\n<tr>\r\n<td width="35%">\r\n<img src="resources/images/John Dolmayan.jpg" height="200px" width="200px">\r\n</td>\r\n<td>\r\n<p>John Hovig Dolmayan is a Lebanese-born Armenian-American songwriter and drummer. He is best known as the drummer of System of a Down. Dolmayan is also the drummer for the band Indicator and former drummer for Scars on Broadway.\r\n</p>\r\n</td>\r\n</tr>', '2016-11-13 07:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About_Us`
--
ALTER TABLE `About_Us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ContactUs`
--
ALTER TABLE `ContactUs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Members`
--
ALTER TABLE `Members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `About_Us`
--
ALTER TABLE `About_Us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ContactUs`
--
ALTER TABLE `ContactUs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `Members`
--
ALTER TABLE `Members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
