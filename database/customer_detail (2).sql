-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2019 at 09:20 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `shopping portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE IF NOT EXISTS `customer_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `price` int(50) NOT NULL,
  `total` int(10) NOT NULL,
  `shipping` int(50) NOT NULL,
  `grand_total` int(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`id`, `price`, `total`, `shipping`, `grand_total`) VALUES
(11, 40, 160, 149, 309);
