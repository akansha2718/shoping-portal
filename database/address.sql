 Server: localhost -  Database: shopping portal -  Table: address_detail
-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2019 at 10:22 AM
-- Server version: 5.1.32
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `shopping portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_detail`
--

CREATE TABLE IF NOT EXISTS `address_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `society` varchar(40) NOT NULL,
  `pin_code` int(15) NOT NULL,
  `state` varchar(10) NOT NULL,
  `add` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `address_detail`
--

INSERT INTO `address_detail` (`id`, `name`, `gender`, `house`, `society`, `pin_code`, `state`, `add`) VALUES
(12, 'HIMANI PANT', 'on', 'hdsjdhsjjdksj', 'hejhfrjehfkjek', 354543, 'uttrakhand', 'on');

