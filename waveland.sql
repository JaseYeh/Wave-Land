-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-06 12:06:23
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.3.19

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
-- 資料表結構 `extra_product`
--

CREATE TABLE `extra_product` (
  `sid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `extra_product`
--

INSERT INTO `extra_product` (`sid`, `product_id`, `name`, `price`) VALUES
(1, 1, '防水背包\r\n', 350),
(2, 1, '福隆火車站-龍門接駁', 50),
(3, 1, '福隆便當\r\n', 80),
(4, 1, '防水運動相機租借\r\n', 350),
(5, 2, '防水背包\r\n', 350),
(6, 2, '福隆火車站-龍門接駁', 50),
(7, 2, '福隆便當\r\n', 80),
(8, 2, '防水運動相機租借\r\n', 350);

-- --------------------------------------------------------

--
-- 資料表結構 `product-test`
--

CREATE TABLE `product-test` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `kv_img` varchar(30) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type_id` int(11) NOT NULL,
  `locate` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `score` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  `price_child` int(11) NOT NULL,
  `intro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product-test`
--

INSERT INTO `product-test` (`sid`, `name`, `kv_img`, `type`, `type_id`, `locate`, `time`, `score`, `price`, `price_child`, `intro`) VALUES
(1, 'SUP體驗-福隆古道團', '1-kv', 'SUP', 1, '新北，福隆', '3.5Hrs', '4.2', 1700, 800, '前情提要，我是唬爛產生器出來的，這裡限200字。如果仔細思考SUP立槳 新北福隆水上活動，會發現其中蘊含的深遠意義。我想，把SUP立槳 新北福隆水上活動的意義想清楚，對各位來說並不是一件壞事。生活中，若SUP立槳 新北福隆水上活動出現了，我們就不得不考慮它出現了的事實。透過逆向歸納，得以用最佳的策略去分析SUP立槳 新北福隆水上活動。若能夠欣賞到SUP立槳 新北福隆水上活動的美，相信我們一定會對SUP立槳 新北福隆水上活動改觀。'),
(2, 'SUP體驗-徜徉龜山島牛奶海', '2-kv', 'SUP', 1, '宜蘭，龜山島', '3.5Hrs', '4.8', 2000, 1000, '前情提要，我是唬爛產生器出來的，這裡限200字。如果仔細思考宜蘭，龜山島宜蘭，龜山島宜蘭，龜山島宜蘭，龜山島宜蘭，龜山島宜蘭，龜山島，會發現其中蘊含的深遠意義。我想，把SUP立槳 新北福隆水上活動的意義想清楚，對各位來說並不是一件壞事。生活中，若SUP立槳 新北福隆水上活動出現了，我們就不得不考慮它出現了的事實。透過逆向歸納，得以用最佳的策略去分析SUP立槳 新北福隆水上活動。'),
(3, '獨木舟體驗-東澳團', '3-kv', 'SUP', 2, '東澳', '3.5Hrs', '3.9', 1800, 900, '這是東澳的內容'),
(4, '瑚復育區生態浮潛', '4-kv', '浮潛', 4, '澎湖', '3.5Hrs', '4.8', 2000, 0, '這是澎湖的內容'),
(5, '南寮&柴口浮淺體驗', '5-kv', '浮潛', 4, '綠島', '3.5Hrs', '5', 2000, 0, ''),
(6, '龍洞SUP浮潛體驗', '6-kv', '浮潛', 4, '東北角', '3.5Hrs', '4.7', 1500, 0, ''),
(7, '蘭嶼浮潛體驗', '7-kv', '浮潛', 4, '蘭嶼', '3.5Hrs', '4.8', 2000, 0, ''),
(8, '日月潭SUP立式划槳體驗', '8-kv', 'SUP', 1, '日月潭', '3.5Hrs', '4.8', 2000, 0, ''),
(9, '划 SUP 去！徜徉療癒藍色啤酒海', '9-kv', 'SUP', 1, '宜蘭', '3.5Hrs', '4.8', 2000, 0, '');

-- --------------------------------------------------------

--
-- 資料表結構 `product_notice`
--

CREATE TABLE `product_notice` (
  `sid` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `how_car` varchar(255) NOT NULL,
  `how_pub` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product_notice`
--

INSERT INTO `product_notice` (`sid`, `product_id`, `time`, `location`, `address`, `how_car`, `how_pub`, `area`) VALUES
(1, 1, '15:30', '貢寮德心宮', '新北市貢寮區德心街 10 號', '從台北出發，沿著 2 丙公路行駛，車程約 1 到 1.5 小時', '台鐵貢寮站下車， 沿著朝陽街與學苑街行走，見到德心街右轉，步行約 1.5 公里', '雙溪河'),
(2, 2, '15:30', '貢寮德心宮', '新北市貢寮區德心街 10 號', '從台北出發，沿著 2 丙公路行駛，車程約 1 到 1.5 小時', '台鐵貢寮站下車， 沿著朝陽街與學苑街行走，見到德心街右轉，步行約 1.5 公里', '雙溪河'),
(3, 3, '15:30', '貢寮德心宮', '新北市貢寮區德心街 10 號', '從台北出發，沿著 2 丙公路行駛，車程約 1 到 1.5 小時', '台鐵貢寮站下車， 沿著朝陽街與學苑街行走，見到德心街右轉，步行約 1.5 公里', '雙溪河');

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
-- 資料表索引 `extra_product`
--
ALTER TABLE `extra_product`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product-test`
--
ALTER TABLE `product-test`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_notice`
--
ALTER TABLE `product_notice`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_schedule`
--
ALTER TABLE `product_schedule`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `extra_product`
--
ALTER TABLE `extra_product`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product-test`
--
ALTER TABLE `product-test`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_notice`
--
ALTER TABLE `product_notice`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_schedule`
--
ALTER TABLE `product_schedule`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
