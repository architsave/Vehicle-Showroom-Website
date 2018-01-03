-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2014 at 06:55 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bmw`
--

-- --------------------------------------------------------

--
-- Table structure for table `regiter`
--

CREATE TABLE IF NOT EXISTS `regiter` (
  `name` text NOT NULL,
  `address` text NOT NULL,
  `zipcode` text NOT NULL,
  `city` text NOT NULL,
  `gender` text NOT NULL,
  `color` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` text NOT NULL,
  `car` text NOT NULL,
  `bike` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiter`
--

