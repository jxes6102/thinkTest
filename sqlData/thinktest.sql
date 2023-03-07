-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-03-07 09:40:03
-- 伺服器版本： 10.4.20-MariaDB
-- PHP 版本： 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `thinktest`
--

-- --------------------------------------------------------

--
-- 資料表結構 `think_account`
--

CREATE TABLE `think_account` (
  `id` int(10) NOT NULL,
  `email` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(10) NOT NULL DEFAULT '0',
  `gender` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `think_db`
--

CREATE TABLE `think_db` (
  `id` int(10) NOT NULL,
  `name` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `think_db`
--

INSERT INTO `think_db` (`id`, `name`) VALUES
(2, '王大明75'),
(3, '王大明91'),
(4, '王大明68'),
(5, '王大明58'),
(6, '王大明93'),
(7, '王大明88'),
(8, '王大明70'),
(9, '王大明70'),
(10, '王大明48'),
(11, '大明728'),
(12, '大明832'),
(13, '大明651'),
(14, '大明603'),
(15, '貓8253'),
(16, '貓1915'),
(17, '貓9666'),
(18, '貓632'),
(19, '貓2786'),
(20, '貓4850'),
(21, '正常狗'),
(22, '貓5203'),
(23, '奇怪狗74');

-- --------------------------------------------------------

--
-- 資料表結構 `think_user`
--

CREATE TABLE `think_user` (
  `id` int(10) NOT NULL,
  `name` varchar(5) NOT NULL DEFAULT '',
  `weight` int(5) NOT NULL DEFAULT 0,
  `height` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `think_user`
--

INSERT INTO `think_user` (`id`, `name`, `weight`, `height`) VALUES
(1, '可樂', 15, 100),
(2, 'dog', 10, 50),
(3, 'cat', 8, 40),
(4, 'lion', 100, 200),
(5, 'eleph', 2000, 500),
(6, 'whale', 12000, 4000),
(8, 'hippo', 400, 200),
(10, 'pengu', 35, 150),
(11, 'bear', 500, 300),
(12, 'bird', 2, 20),
(13, 'tiger', 250, 250),
(14, 'deer', 400, 300),
(15, 'horse', 300, 200);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `think_account`
--
ALTER TABLE `think_account`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `think_db`
--
ALTER TABLE `think_db`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `think_user`
--
ALTER TABLE `think_user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `think_account`
--
ALTER TABLE `think_account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `think_db`
--
ALTER TABLE `think_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `think_user`
--
ALTER TABLE `think_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
