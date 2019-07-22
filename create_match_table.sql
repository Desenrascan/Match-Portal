-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 07, 2019 at 01:12 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `team_match`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `create_match`
-- 

CREATE TABLE `create_match` (
  `id` int(200) NOT NULL auto_increment,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `message` blob NOT NULL,
  `number` int(5) NOT NULL,
  `number_store` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `create_match`
-- 

