-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 08 月 12 日 17:14
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
-- 資料表結構 `product_schedule`
--

CREATE TABLE `product_schedule` (
  `sid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product_schedule`
--

INSERT INTO `product_schedule` (`sid`, `product_id`, `time`, `title`, `content`) VALUES
(1, 1, '0-60mins', '集合暖身', '於貢寮德心宮集合，由領隊帶隊換裝、暖身，講解基本漿語。<br>\r\n                  Ps.請準時抵達集合地點，全體學員下水後，不再另外安排下水。'),
(2, 1, '60mins-120mins', '雙溪美景盡覽無遺', '行程沿著雙溪河順流而下，雙溪河曾經是凱達格蘭族三貂四社文明的重要發源地，水量豐沛、水質優良，有豐富的水中生態，還有獨具特色的彩虹橋與雙溪吊橋等。'),
(3, 1, '120mins-150mins', '龍門吊橋享受愜意片刻', '龍門距離福隆海域很近，卻因為有段距離而保有它的沉靜。抵達龍門吊橋後，會讓學員附近稍作休息。想要玩水、浮潛的人，也可以在這裡下水。專業教練隨時確保學員的安全，隨行領隊也將為活動留下美麗生動的照片影像，讓大家盡興而歸。'),
(4, 1, '150mins-180mins', '抵達福隆海水浴場，活動結束', '休息片刻後繼續啟航，終點為福隆海水浴場，因此學員不必在逆行而上，滑回出發地。用最少力氣，享受最多美景。'),
(5, 2, '0-60mins', '集合暖身', '於貢寮德心宮集合，由領隊帶隊換裝、暖身，講解基本漿語。<br>\r\n                  Ps.請準時抵達集合地點，全體學員下水後，不再另外安排下水。'),
(6, 2, '60mins-120mins', '雙溪美景盡覽無遺', '行程沿著雙溪河順流而下，雙溪河曾經是凱達格蘭族三貂四社文明的重要發源地，水量豐沛、水質優良，有豐富的水中生態，還有獨具特色的彩虹橋與雙溪吊橋等。'),
(7, 2, '120mins-150mins', '龍門吊橋享受愜意片刻', '龍門距離福隆海域很近，卻因為有段距離而保有它的沉靜。抵達龍門吊橋後，會讓學員附近稍作休息。想要玩水、浮潛的人，也可以在這裡下水。專業教練隨時確保學員的安全，隨行領隊也將為活動留下美麗生動的照片影像，讓大家盡興而歸。'),
(8, 2, '150mins-180mins', '抵達福隆海水浴場，活動結束', '休息片刻後繼續啟航，終點為福隆海水浴場，因此學員不必在逆行而上，滑回出發地。用最少力氣，享受最多美景。');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `product_schedule`
--
ALTER TABLE `product_schedule`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_schedule`
--
ALTER TABLE `product_schedule`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
