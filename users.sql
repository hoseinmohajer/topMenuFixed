-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2014 at 11:04 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `lastname` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  `phonenumber` char(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `cellphone` char(11) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`firstname`(255))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `phonenumber`, `cellphone`, `email`) VALUES
(27, 'test', 'test', 'test', '123', '021', '0919', 'sample@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
