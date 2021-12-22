-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-12-22 14:54:38
-- サーバのバージョン： 10.4.18-MariaDB
-- PHP のバージョン: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `manual_prototype_1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `manual`
--

CREATE TABLE `manual` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `detail` text COLLATE utf8mb4_bin NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `manual`
--

INSERT INTO `manual` (`id`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(9, '麻雀ルール', '・局の最初に４人全員に１３枚の牌が配られます。（親だけ１４枚）<br>\r\n・親がいらない牌を１枚捨てるところからはじまり、次に南家が牌を１枚もってきていらない牌を１枚捨てます。次に西家　→　北家　→　東家　という順番でまわります。<br>\r\n・一人一人があがり役を目指し、一番最初にできた人に、得点が加算されます。→　麻雀の役一覧<br>\r\n・子があがったり誰もあがらないとその局は終了しますが、親があがるか聴牌てんぱいだとその局をもう一回やります。<br>\r\n・南４局までやって一番得点の多い順番で順位がきまります。（トップ　２位　３位　ラス）<br>', '2021-12-22', '2021-12-22');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `manual`
--
ALTER TABLE `manual`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `manual`
--
ALTER TABLE `manual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
