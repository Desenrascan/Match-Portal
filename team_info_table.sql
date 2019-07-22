 Server: localhost  -   Database: team_match  -   Table: team_player_info
 
-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 07, 2019 at 01:13 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `team_match`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `team_player_info`
-- 

CREATE TABLE `team_player_info` (
  `id` int(100) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `team_player_info`
-- 


