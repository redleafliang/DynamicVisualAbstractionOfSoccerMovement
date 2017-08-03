-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2017-08-03 07:08:06
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SoccerVis`
--

-- --------------------------------------------------------

--
-- 表的结构 `div1`
--

CREATE TABLE `div1` (
  `animation` double NOT NULL,
  `duration` double NOT NULL,
  `nodecircle` int(255) NOT NULL,
  `nodejersey` int(255) NOT NULL,
  `Node-link` int(255) NOT NULL,
  `Node-link-all` int(255) NOT NULL,
  `HivePlot` int(255) NOT NULL,
  `Matrix` int(255) NOT NULL,
  `TagCloud` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `div1`
--

INSERT INTO `div1` (`animation`, `duration`, `nodecircle`, `nodejersey`, `Node-link`, `Node-link-all`, `HivePlot`, `Matrix`, `TagCloud`) VALUES
(100, 100, 100, 0, 100, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `div2`
--

CREATE TABLE `div2` (
  `context` double NOT NULL,
  `duration` double NOT NULL,
  `Node-link` int(255) NOT NULL,
  `Node-link-all` int(255) NOT NULL,
  `HivePlot` int(255) NOT NULL,
  `Matrix` int(255) NOT NULL,
  `TagCloud` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `div2`
--

INSERT INTO `div2` (`context`, `duration`, `Node-link`, `Node-link-all`, `HivePlot`, `Matrix`, `TagCloud`) VALUES
(1, 800, 0, 0, 100, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `div3`
--

CREATE TABLE `div3` (
  `field` double NOT NULL,
  `globalflow` double NOT NULL,
  `mylinear` int(255) NOT NULL,
  `step-before` int(255) NOT NULL,
  `step-after` int(255) NOT NULL,
  `basis` int(255) NOT NULL,
  `basis-closed` int(255) NOT NULL,
  `cardinal` int(255) NOT NULL,
  `cardinal-closed` int(255) NOT NULL,
  `mysize` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `div3`
--

INSERT INTO `div3` (`field`, `globalflow`, `mylinear`, `step-before`, `step-after`, `basis`, `basis-closed`, `cardinal`, `cardinal-closed`, `mysize`) VALUES
(1, 1, 0, 0, 0, 0, 0, 100, 0, 30);

-- --------------------------------------------------------

--
-- 表的结构 `div4`
--

CREATE TABLE `div4` (
  `2D` int(255) NOT NULL,
  `horizontal` int(255) NOT NULL,
  `avgDuration` double NOT NULL,
  `avgDelay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `div4`
--

INSERT INTO `div4` (`2D`, `horizontal`, `avgDuration`, `avgDelay`) VALUES
(0, 100, 300, 300);

-- --------------------------------------------------------

--
-- 表的结构 `div5`
--

CREATE TABLE `div5` (
  `Scaled` int(255) NOT NULL,
  `ScaledLinks` int(255) NOT NULL,
  `Signature` int(255) NOT NULL,
  `Worm` int(255) NOT NULL,
  `XProj` int(255) NOT NULL,
  `YProj` int(255) NOT NULL,
  `TimeAlign` int(255) NOT NULL,
  `DistanceAlign` int(255) NOT NULL,
  `Donut` int(255) NOT NULL,
  `avgDuration` double NOT NULL,
  `avgDelay` double NOT NULL,
  `avgDrawField` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `div5`
--

INSERT INTO `div5` (`Scaled`, `ScaledLinks`, `Signature`, `Worm`, `XProj`, `YProj`, `TimeAlign`, `DistanceAlign`, `Donut`, `avgDuration`, `avgDelay`, `avgDrawField`) VALUES
(0, 0, 0, 100, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `div6`
--

CREATE TABLE `div6` (
  `normal` int(255) NOT NULL,
  `CatmullRomChain` int(255) NOT NULL,
  `SIA1` int(255) NOT NULL,
  `SIA2` int(255) NOT NULL,
  `SIA3` int(255) NOT NULL,
  `SIA4` int(255) NOT NULL,
  `ComputeBezier1` int(255) NOT NULL,
  `ComputeBezier2` int(255) NOT NULL,
  `ComputeBezier3` int(255) NOT NULL,
  `ComputeBezier4` int(255) NOT NULL,
  `ComputeBezier5` int(255) NOT NULL,
  `ComputeBezier6` int(255) NOT NULL,
  `kMeansOrkMedoids1` int(255) NOT NULL,
  `kMeansOrkMedoids2` int(255) NOT NULL,
  `kMeansOrkMedoids3` int(255) NOT NULL,
  `kMeansOrkMedoids4` int(255) NOT NULL,
  `kMeansOrkMedoids5` int(255) NOT NULL,
  `kMeansOrkMedoids6` int(255) NOT NULL,
  `kMeansOrkMedoids7` int(255) NOT NULL,
  `kMeansOrkMedoids8` int(255) NOT NULL,
  `kMeansOrkMedoids9` int(255) NOT NULL,
  `kMeansOrkMedoids10` int(255) NOT NULL,
  `k-means` int(255) NOT NULL,
  `k-medoids` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `div6`
--

INSERT INTO `div6` (`normal`, `CatmullRomChain`, `SIA1`, `SIA2`, `SIA3`, `SIA4`, `ComputeBezier1`, `ComputeBezier2`, `ComputeBezier3`, `ComputeBezier4`, `ComputeBezier5`, `ComputeBezier6`, `kMeansOrkMedoids1`, `kMeansOrkMedoids2`, `kMeansOrkMedoids3`, `kMeansOrkMedoids4`, `kMeansOrkMedoids5`, `kMeansOrkMedoids6`, `kMeansOrkMedoids7`, `kMeansOrkMedoids8`, `kMeansOrkMedoids9`, `kMeansOrkMedoids10`, `k-means`, `k-medoids`) VALUES
(100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
