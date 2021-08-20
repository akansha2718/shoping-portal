-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2019 at 09:22 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `shopping portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `date`, `des`) VALUES
(1, '', '', ''),
(2, 'HIMANI PANT', '2019-09-04', 'THIS IS BEST WEBSITE EVER.'),
(3, 'garima ', '2019-10-25', 'dsdffdfgdfvsxfvcdxgvfcbvcbvn '),
(4, 'akansha', '2019-10-19', 'dfdvgfdvdbgbv dgvbdgbbbbbbbbbbbbbbbb'),
(5, 'akansha', '2019-10-19', 'dfdvgfdvdbgbv dgvbdgbbbbbbbbbbbbbbbb');
