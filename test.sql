-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-11-08 08:58:12
-- 服务器版本： 5.7.26
-- PHP 版本： 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `liuyan`
--

DROP TABLE IF EXISTS `liuyan`;
CREATE TABLE IF NOT EXISTS `liuyan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `count` varchar(40) CHARACTER SET utf8 NOT NULL,
  `name` varchar(10) CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `liuyan`
--

INSERT INTO `liuyan` (`id`, `count`, `name`, `time`) VALUES
(1, '我是第一个留言的', '4', '2019-10-18 14:13:21'),
(2, '我是第二个', '4', '2019-10-18 14:13:32'),
(3, '我是第三个', '4', '2019-10-18 14:13:41'),
(6, '我是6', '5', '2019-10-18 14:54:42'),
(7, '3.10的5', '5', '2019-10-18 15:10:33'),
(8, '3.10的5', '5', '2019-10-18 15:17:51'),
(27, '                        今天非常的开心', '9', '2019-11-01 17:29:49'),
(29, 'test111111', '4', '2019-11-05 15:37:24'),
(30, '123456', '4', '2019-11-05 15:37:28'),
(31, 'woshixujiali', '4', '2019-11-05 16:10:38'),
(33, '213123', '4', '2019-11-06 19:21:25'),
(34, '1231312', '4', '2019-11-06 19:21:28'),
(35, '11213145056', '4', '2019-11-08 08:18:14');

-- --------------------------------------------------------

--
-- 表的结构 `touxiang`
--

DROP TABLE IF EXISTS `touxiang`;
CREATE TABLE IF NOT EXISTS `touxiang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `sex`, `password`) VALUES
(2, 'su', 'girl', '123456'),
(3, 'xiao', 'girl', '123456'),
(4, '4', '4', '4'),
(5, '5', '5', '5'),
(7, '7', '7', '7'),
(8, '8', '8', '8'),
(9, '9', '9', '9'),
(10, '2', '2', '2'),
(11, 'xixi', 'nan', '111'),
(12, 'haha', 'nan', '123'),
(13, 'aaa', 'nan', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
