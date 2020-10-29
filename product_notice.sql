-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 08 月 12 日 17:35
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `waveland`
--

-- --------------------------------------------------------

--
-- 資料表結構 `product_notice`
--

CREATE TABLE `product_notice` (
  `sid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `how_car` varchar(255) NOT NULL,
  `how_pub` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product_notice`
--

INSERT INTO `product_notice` (`sid`, `product_id`, `location`, `address`, `how_car`, `how_pub`, `area`) VALUES
(1, 1, '貢寮德心宮', '新北市貢寮區德心街 10 號', '從台北出發，沿著 2 丙公路行駛，車程約 1 到 1.5 小時', '台鐵貢寮站下車， 沿著朝陽街與學苑街行走，見到德心街右轉，步行約 1.5 公里', '雙溪河'),
(2, 2, '貢寮德心宮', '新北市貢寮區德心街 10 號', '從台北出發，沿著 2 丙公路行駛，車程約 1 到 1.5 小時', '台鐵貢寮站下車， 沿著朝陽街與學苑街行走，見到德心街右轉，步行約 1.5 公里', '雙溪河'),
(3, 3, '貢寮德心宮', '新北市貢寮區德心街 10 號', '從台北出發，沿著 2 丙公路行駛，車程約 1 到 1.5 小時', '台鐵貢寮站下車， 沿著朝陽街與學苑街行走，見到德心街右轉，步行約 1.5 公里', '雙溪河');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product_notice`
--
ALTER TABLE `product_notice`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_notice`
--
ALTER TABLE `product_notice`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
