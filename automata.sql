-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 06, 2013 at 06:54 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `automata`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `customerinfo`
-- 

CREATE TABLE `customerinfo` (
  `id` int(11) NOT NULL auto_increment,
  `cusId` varchar(20) NOT NULL,
  `cusName` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cusType` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `customerinfo`
-- 

INSERT INTO `customerinfo` (`id`, `cusId`, `cusName`, `state`, `cusType`) VALUES 
(1, '1234', 'Dan Ruyonga', 'kla', 'ratailer'),
(2, '123-45-6789', 'dan', 'MBR', 'retailer'),
(3, '90000', 'Dan', 'kla', 'ratailer'),
(4, '45678', 'j', 'kla', 'ratailer'),
(5, '12221', 'fghj', 'kla', 'ratailer'),
(6, '35678', 'ekhj', 'kla', 'ratailer'),
(7, '6543', 'kjhkjhkj', 'kla', 'ratailer'),
(8, '234567', 'dfgh', 'KLA', 'ratailer');
