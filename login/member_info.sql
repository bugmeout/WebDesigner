-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 03 月 27 日 21:45
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `member_info`
--
CREATE DATABASE IF NOT EXISTS `member_info` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `member_info`;

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`id`, `uname`, `pass`, `email`) VALUES
(1, 'wang', 'wang', 'wang@wang.com'),
(5, '1212', '12', '12'),
(6, 'wansui', '123', 'hicde123.com'),
(7, '12', '12', '12312@3.com'),
(8, '12212', '11', '1231231231'),
(9, 'nice', '123', '123@123.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
