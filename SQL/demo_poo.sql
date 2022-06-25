-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 04:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_poo`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `actif` tinyint(1) NOT NULL DEFAULT 0,
  `users_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`id`, `titre`, `description`, `price`, `created_at`, `actif`, `users_id`, `category_id`) VALUES
(143, 'dsqdqs', 'qdsdsq', '1015.00', '2022-06-16 22:05:55', 0, 1, 1),
(144, 'dsqdqs', 'qdsdsq', '1015.00', '2022-06-16 22:09:49', 0, 1, 1),
(145, 'dsqdqs', 'qdsdsq', '1015.00', '2022-06-16 22:13:00', 0, 1, 1),
(146, 'sdqsdsq', 'dqsdsq', '15.00', '2022-06-16 22:15:19', 0, 1, 1),
(147, 'sdqsdsq', 'dqsdsq', '15.00', '2022-06-16 22:15:47', 0, 1, 1),
(148, 'sdqsdsq', 'dqsdsq', '15.00', '2022-06-16 22:16:07', 0, 1, 1),
(149, 'sdqsdsq', 'dqsdsq', '15.00', '2022-06-16 22:16:24', 0, 1, 1),
(150, 'sdqsdsq', 'dqsdsq', '15.00', '2022-06-16 23:35:16', 0, 1, 1),
(151, 'sdqd', 'dqdqs', '111.00', '2022-06-17 11:07:54', 0, 1, 1),
(152, 'sfsfsd', 'fsfsdfds', '15.00', '2022-06-17 11:44:30', 0, 1, 1),
(153, 'qsddqs', 'qsddqs', '15.00', '2022-06-17 11:45:03', 0, 1, 1),
(154, 'qsddqs', 'qsddqs', '15.00', '2022-06-17 11:45:20', 0, 1, 1),
(155, 'qsddqs', 'qsddqs', '15.00', '2022-06-17 11:45:33', 0, 1, 1),
(156, 'qsddqs', 'qsddqs', '15.00', '2022-06-17 11:46:36', 0, 1, 1),
(157, 'RUDY', 'qsddqs', '15.00', '2022-06-17 11:47:06', 0, 1, 1),
(158, 'RUDY', 'qsddqs', '15.00', '2022-06-17 11:47:52', 0, 1, 1),
(159, 'uyuuy', 'qsddqs', '15.00', '2022-06-17 11:48:03', 0, 1, 1),
(160, 'uyuuy', 'qsddqs', '15.00', '2022-06-17 11:48:12', 0, 1, 1),
(161, 'uyuuy', 'qsddqs', '15.00', '2022-06-17 11:48:26', 0, 1, 1),
(162, 'uyuuy', 'qsddqs', '15.00', '2022-06-17 11:48:34', 0, 1, 1),
(163, 'uyuuy', 'qsddqs', '9999.99', '2022-06-17 11:48:52', 0, 1, 1),
(164, 'uyuuy', 'qsddqs', '9999.99', '2022-06-17 11:49:06', 0, 1, 1),
(165, 'uyuuy', 'qsddqs', '9999.99', '2022-06-17 11:51:18', 0, 1, 1),
(166, 'uyuuy', 'qsddqs', '9999.99', '2022-06-17 11:52:02', 0, 1, 1),
(167, 'uyuuy', 'qsddqs', '9999.99', '2022-06-17 11:53:44', 0, 1, 1),
(168, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:46:06', 0, 1, 1),
(169, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:46:44', 0, 1, 1),
(170, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:46:50', 0, 1, 1),
(171, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:47:00', 0, 1, 1),
(172, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:47:08', 0, 1, 1),
(173, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:47:17', 0, 1, 1),
(174, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:47:24', 0, 1, 1),
(175, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 15:48:27', 0, 1, 1),
(176, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:20:23', 0, 1, 1),
(177, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:20:26', 0, 1, 1),
(178, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:20:37', 0, 1, 1),
(179, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:20:48', 0, 1, 1),
(180, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:21:00', 0, 1, 1),
(181, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:21:10', 0, 1, 1),
(182, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:21:21', 0, 1, 1),
(183, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:21:31', 0, 1, 1),
(184, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:21:41', 0, 1, 1),
(185, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:21:47', 0, 1, 1),
(186, 'sdffsd', 'fsdfds', '150.00', '2022-06-17 16:25:17', 0, 1, 1),
(187, 'test', 'fdfsd', '1200.00', '2022-06-17 16:25:32', 0, 1, 1),
(188, 'test', 'fddfs', '15.00', '2022-06-17 16:26:00', 0, 1, 1),
(189, 'yjuè', 'ttjttj', '555.00', '2022-06-17 16:30:05', 0, 1, 1),
(190, 'yiiyi', 'iyiyiy', '5555.00', '2022-06-17 16:31:16', 0, 1, 1),
(191, 'mlkl', 'mklmkl', '25.00', '2022-06-17 16:31:48', 0, 1, 1),
(192, 'lklkkj', 'lkjlkjljk', '15.00', '2022-06-17 16:32:06', 0, 1, 1),
(193, 'test', 'piopio', '565.00', '2022-06-17 16:32:39', 0, 1, 1),
(194, 'vcxs', 'svdsvds', '145.00', '2022-06-17 16:34:04', 0, 1, 1),
(195, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:40:30', 0, 1, 1),
(196, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:44:20', 0, 1, 1),
(197, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:46:28', 0, 1, 1),
(198, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:49:36', 0, 1, 1),
(199, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:50:30', 0, 1, 1),
(200, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:51:00', 0, 1, 1),
(201, 'sdqsdsq', 'dzqqdqs', '150.00', '2022-06-17 16:51:26', 0, 1, 1),
(202, 'test', 'dssdq', '121.00', '2022-06-17 16:51:50', 0, 1, 1),
(203, 'gffg', 'gdgddg', '150.00', '2022-06-17 16:52:08', 0, 1, 1),
(204, 'dqssdq', 'qdssdq', '1500.00', '2022-06-17 16:52:27', 0, 1, 1),
(205, 'sqds', 'dsqdqs', '1512.00', '2022-06-17 16:56:34', 0, 1, 1),
(206, 'sdsdq', 'dqsdsq', '15.00', '2022-06-17 16:57:30', 0, 1, 1),
(207, 'sdsdq', 'dqsdsq', '15.00', '2022-06-17 16:59:04', 0, 1, 1),
(208, 'fdwsfd', 'dfsfds', '4541.00', '2022-06-17 16:59:59', 0, 1, 1),
(209, 'fdwsfd', 'dfsfds', '4541.00', '2022-06-17 17:00:17', 0, 1, 1),
(210, 'fdwsfd', 'dfsfds', '4541.00', '2022-06-17 17:00:27', 0, 1, 1),
(211, 'fdwsfd', 'dfsfds', '4541.00', '2022-06-17 17:00:35', 0, 1, 1),
(212, 'fdwsfd', 'dfsfds', '4541.00', '2022-06-17 17:00:46', 0, 1, 1),
(213, 'fdwsfd', 'dfsfds', '4541.00', '2022-06-17 17:01:18', 0, 1, 1),
(214, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:25:20', 0, 1, 1),
(215, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:25:47', 0, 1, 1),
(216, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:28:09', 0, 1, 1),
(217, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:28:43', 0, 1, 1),
(218, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:28:53', 0, 1, 1),
(219, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:29:03', 0, 1, 1),
(220, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:29:12', 0, 1, 1),
(221, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:30:07', 0, 1, 1),
(222, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:30:23', 0, 1, 1),
(223, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:30:49', 0, 1, 1),
(224, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:31:22', 0, 1, 1),
(225, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:34:35', 0, 1, 1),
(226, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:35:16', 0, 1, 1),
(227, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:35:27', 0, 1, 1),
(228, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:35:45', 0, 1, 1),
(229, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:35:58', 0, 1, 1),
(230, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:40:37', 0, 1, 1),
(231, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:41:06', 0, 1, 1),
(232, 'dqsdqs', 'dqsdqsdqs', '15.00', '2022-06-23 14:41:17', 0, 1, 1),
(233, 'ddsqdsq', 'sqdsdq', '15.00', '2022-06-23 14:42:47', 0, 1, 1),
(234, 'dqsdq', 'dqsdqs', '15.00', '2022-06-23 14:43:42', 0, 1, 1),
(235, 'qdsdsq', 'qdssdq', '15.00', '2022-06-23 14:44:55', 0, 1, 1),
(236, 'qddqdqs', 'qdsqsdq', '1250.00', '2022-06-23 14:50:02', 0, 1, 1),
(237, 'sdsqds', 'sqddsq', '15.00', '2022-06-23 16:23:34', 0, 1, 1),
(238, 'sdsqds', 'sqddsq', '15.00', '2022-06-23 16:24:17', 0, 1, 1),
(239, 'sdsqds', 'sqddsq', '15.00', '2022-06-23 16:24:21', 0, 1, 1),
(240, 'sdsqds', 'sqddsq', '15.00', '2022-06-23 16:28:56', 0, 1, 1),
(241, 'sdsqds', 'sqddsq', '15.00', '2022-06-23 16:28:59', 0, 1, 1),
(242, 'ddwdfw', 'dfwqdf', '15.00', '2022-06-23 16:33:09', 0, 2, 1),
(243, 'ddwdfw', 'dfwqdf', '15.00', '2022-06-23 16:57:39', 0, 2, 1),
(244, 'ddwdfw', 'dfwqdf', '15.00', '2022-06-23 16:59:19', 0, 2, 1),
(245, 'ddwdfw', 'dfwqdf', '15.00', '2022-06-23 17:00:29', 0, 2, 1),
(246, 'ddwdfw', 'dfwqdf', '15.00', '2022-06-23 17:02:30', 0, 2, 1),
(247, 'fsdfds', 'dfsfds', '150.00', '2022-06-23 17:04:52', 0, 2, 1),
(248, 'qdsdsq', 'dqsdsq', '150.00', '2022-06-23 17:10:53', 0, 2, 1),
(249, 'dqdsq', 'qdsdsq', '150.00', '2022-06-23 17:12:07', 0, 2, 1),
(250, 'uyuuy', 'sd', '15.00', '2022-06-23 17:13:51', 0, 2, 1),
(251, 'uyuuy', 'yiiyiy', '1200.00', '2022-06-23 17:17:12', 0, 2, 1),
(252, 'lklkj', 'klk', '25.00', '2022-06-23 17:17:58', 0, 2, 1),
(253, 'fdsdfs', 'dfsdfs', '15.00', '2022-06-23 17:18:27', 0, 1, 1),
(254, 'mkomk', 'mknmkn', '15.00', '2022-06-23 17:19:18', 0, 1, 1),
(255, 'mkomk', 'mknmkn', '15.00', '2022-06-23 17:20:57', 0, 1, 1),
(256, 'dqsdqs', 'qsddsq', '150.00', '2022-06-23 17:22:07', 0, 1, 1),
(257, 'sddsqds', 'qsddsq', '5.00', '2022-06-23 17:22:38', 0, 1, 1),
(258, 'sqdqsd', 'sdqdsq', '150.00', '2022-06-23 17:24:53', 0, 1, 1),
(259, 'dsqdsq', 'sqddsq', '150.00', '2022-06-23 17:28:33', 0, 1, 1),
(260, 'dqsdsq', 'dsqdsq', '150.00', '2022-06-23 17:29:15', 0, 1, 1),
(261, 'dqsdsq', 'dsqdsq', '150.00', '2022-06-23 17:30:23', 0, 1, 1),
(262, 'dqsdsq', 'dsqdsq', '150.00', '2022-06-23 17:31:06', 0, 1, 1),
(263, 'dqsdqs', 'qsdsd', '150.00', '2022-06-23 17:32:06', 0, 1, 1),
(264, 'dqsdqs', 'qsdsd', '150.00', '2022-06-23 19:57:10', 0, 1, 1),
(265, 'vxvx', 'vxcvcx', '15.00', '2022-06-23 19:57:35', 0, 1, 1),
(266, 'vxvx', 'vxcvcx', '15.00', '2022-06-23 19:58:12', 0, 1, 1),
(267, 'vxvx', 'vxcvcx', '15.00', '2022-06-23 19:58:45', 0, 1, 1),
(268, 'vxvx', 'vxcvcx', '15.00', '2022-06-23 19:59:26', 0, 1, 1),
(269, 'vxvx', 'vxcvcx', '15.00', '2022-06-23 20:00:11', 0, 1, 1),
(270, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:01:36', 0, 1, 1),
(271, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:02:09', 0, 1, 1),
(272, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:02:40', 0, 1, 1),
(273, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:03:09', 0, 1, 1),
(274, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:03:29', 0, 1, 1),
(275, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:11:02', 0, 1, 1),
(276, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:11:13', 0, 1, 1),
(277, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:11:24', 0, 1, 1),
(278, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:12:49', 0, 1, 1),
(279, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:13:03', 0, 1, 1),
(280, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:13:27', 0, 1, 1),
(281, 'bcbv', 'bcbc', '150.00', '2022-06-23 20:13:40', 0, 1, 1),
(282, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 20:27:41', 0, 1, 1),
(283, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 20:29:33', 0, 1, 1),
(284, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:20:23', 0, 1, 1),
(285, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:23:38', 0, 1, 1),
(286, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:26:56', 0, 1, 1),
(287, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:26:59', 0, 1, 1),
(288, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:29:04', 0, 1, 1),
(289, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:29:12', 0, 1, 1),
(290, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:31:52', 0, 1, 1),
(291, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:34:02', 0, 1, 1),
(292, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:35:27', 0, 1, 1),
(293, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:36:26', 0, 1, 1),
(294, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:38:52', 0, 1, 1),
(295, 'sdqsdsq', 'xwxwxw', '15.00', '2022-06-23 21:39:04', 0, 1, 1),
(296, 'dfsfd', 'dfdsffsd', '55.00', '2022-06-23 21:39:34', 0, 1, 1),
(297, 'sfdsffds', 'fsddsf', '15.00', '2022-06-23 21:39:54', 0, 1, 1),
(298, 'test', 'test', '15.00', '2022-06-23 21:44:31', 0, 1, 1),
(299, 'test', 'test', '15.00', '2022-06-23 21:45:25', 0, 1, 1),
(300, 'test', 'test', '15.00', '2022-06-23 21:48:41', 0, 1, 1),
(301, 'test', 'test', '15.00', '2022-06-23 21:50:03', 0, 1, 1),
(302, 'test', 'test', '15.00', '2022-06-23 21:52:25', 0, 1, 1),
(303, 'test', 'test', '15.00', '2022-06-23 21:52:28', 0, 1, 1),
(304, 'test', 'test', '15.00', '2022-06-23 21:52:51', 0, 1, 1),
(305, 'test', 'test', '15.00', '2022-06-23 21:53:03', 0, 1, 1),
(306, 'test', 'test', '15.00', '2022-06-23 21:56:39', 0, 1, 1),
(307, 'test', 'test', '15.00', '2022-06-23 21:56:43', 0, 1, 1),
(308, 'test', 'test', '15.00', '2022-06-23 21:57:09', 0, 1, 1),
(309, 'test', 'test', '15.00', '2022-06-23 21:57:42', 0, 1, 1),
(310, 'test', 'test', '15.00', '2022-06-23 21:57:57', 0, 1, 1),
(311, 'test', 'test', '15.00', '2022-06-23 22:05:26', 0, 1, 1),
(312, 'test', 'test', '15.00', '2022-06-23 22:06:47', 0, 1, 1),
(313, 'qsddsq', 'dqsdqs', '15.00', '2022-06-23 22:08:42', 0, 1, 1),
(314, 'qsdsdq', 'dsqdsq', '15.00', '2022-06-23 22:10:14', 0, 1, 1),
(315, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:13:19', 0, 1, 1),
(316, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:14:41', 0, 1, 1),
(317, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:15:36', 0, 1, 1),
(318, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:16:15', 0, 1, 1),
(319, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:17:48', 0, 1, 1),
(320, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:18:04', 0, 1, 1),
(321, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:22:07', 0, 1, 1),
(322, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:23:00', 0, 1, 1),
(323, 'qsdsqd', 'qsdsdq', '15.00', '2022-06-23 22:23:57', 0, 1, 1),
(324, 'test', 'ghvg', '1200.00', '2022-06-23 22:24:52', 0, 1, 1),
(325, 'wccwxcxw', 'cxwcxw', '1544.00', '2022-06-23 22:26:23', 0, 1, 1),
(326, 'sqddsqdqs', 'dsqdsq', '445.00', '2022-06-23 22:28:15', 0, 1, 1),
(327, 'sqddsqdqs', 'dsqdsq', '445.00', '2022-06-23 22:28:30', 0, 1, 1),
(328, 'sqddsqdqs', 'dsqdsq', '445.00', '2022-06-23 22:29:28', 0, 1, 1),
(329, 'sqddsqdqs', 'dsqdsq', '445.00', '2022-06-23 22:30:47', 0, 1, 1),
(330, 'wcxxwc', 'wxccxw', '254.00', '2022-06-23 22:31:08', 0, 1, 1),
(331, 'cwxw', 'wcxcxw', '154.00', '2022-06-23 22:32:03', 0, 1, 1),
(332, 'QSDDSQDSQ', 'qdssdq', '9999.99', '2022-06-23 22:33:38', 0, 1, 1),
(333, 'wccxww', 'wxccwx', '150.00', '2022-06-23 22:41:34', 0, 1, 1),
(334, 'uyuuy', 'dfssdf', '0.00', '2022-06-23 22:48:41', 0, 1, 1),
(335, 'sqdsdqsdq', 'dqsdsq', '150.00', '2022-06-23 22:58:34', 0, 1, 1),
(336, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:04:03', 0, 1, 1),
(337, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:04:28', 0, 1, 1),
(338, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:09:47', 0, 1, 1),
(339, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:09:50', 0, 1, 1),
(340, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:12:52', 0, 1, 1),
(341, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:14:19', 0, 1, 1),
(342, 'dsqdsq', 'qsdqsd', '150.00', '2022-06-23 23:17:00', 0, 1, 1),
(343, 'sdqdsq', 'qdssdq', '1555.00', '2022-06-23 23:17:25', 0, 1, 1),
(344, 'sdqsdsq', 'df', '150.00', '2022-06-24 11:44:59', 0, 1, 1),
(345, 'edqfez', 'zerzer', '150.00', '2022-06-24 11:52:12', 0, 1, 1),
(346, 'test', 'dsqsdq', '150.00', '2022-06-24 11:53:52', 0, 1, 1),
(347, 'test', 'dsqsdq', '150.00', '2022-06-24 11:57:43', 0, 1, 1),
(348, 'test', 'sdqsd', '150.00', '2022-06-24 11:58:50', 0, 1, 1),
(349, 'test', 'sdqsd', '150.00', '2022-06-24 11:59:00', 0, 1, 1),
(350, 'qsddsq', 'dqssdq', '150.00', '2022-06-24 12:01:07', 0, 1, 1),
(351, 'qdds', 'sqddsq', '1564.00', '2022-06-24 12:03:18', 0, 1, 1),
(352, 'uyuuy', 'fdqdf', '150.00', '2022-06-24 12:10:34', 0, 1, 1),
(353, 'sfdfds', 'dfs', '150.00', '2022-06-24 15:10:04', 0, 1, 1),
(354, 'sfdfds', 'dfs', '150.00', '2022-06-24 15:11:57', 0, 1, 1),
(355, 'sfdfds', 'dfs', '150.00', '2022-06-24 15:12:23', 0, 1, 1),
(356, 'sfdfds', 'dfs', '150.00', '2022-06-24 15:12:41', 0, 1, 1),
(357, 'ipoop', 'popo', '11.00', '2022-06-24 15:14:39', 0, 1, 1),
(358, 'ipoop', 'popo', '11.00', '2022-06-24 15:15:09', 0, 1, 1),
(359, 'ipoop', 'popo', '11.00', '2022-06-24 15:15:53', 0, 1, 1),
(360, 'ipoop', 'popo', '11.00', '2022-06-24 15:16:25', 0, 1, 1),
(361, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:22:47', 0, 1, 1),
(362, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:24:49', 0, 1, 1),
(363, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:25:58', 0, 1, 1),
(364, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:35:05', 0, 1, 1),
(365, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:37:55', 0, 1, 1),
(366, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:38:09', 0, 1, 1),
(367, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 15:43:19', 0, 1, 1),
(368, 'test', 'dqdsqdsq', '150.00', '2022-06-24 18:08:50', 0, 1, 1),
(369, 'test', 'dqdsqdsq', '150.00', '2022-06-24 18:12:39', 0, 1, 1),
(370, 'test', 'dqdsqdsq', '150.00', '2022-06-24 18:13:18', 0, 1, 1),
(371, 'test', 'dqdsqdsq', '150.00', '2022-06-24 18:14:10', 0, 1, 1),
(372, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 18:21:10', 0, 1, 1),
(373, 'dqsdq', 'dqsdsq', '150.00', '2022-06-24 18:21:20', 0, 1, 1),
(374, 'test', 'gfgb', '150.00', '2022-06-24 18:29:14', 0, 1, 1),
(375, 'test', 'gfgb', '150.00', '2022-06-24 18:30:25', 0, 1, 1),
(376, 'test', 'gfgb', '150.00', '2022-06-24 18:30:32', 0, 1, 1),
(377, 'test', 'gfgb', '150.00', '2022-06-24 18:32:14', 0, 1, 1),
(378, 'qsdsqdsq', 'sqddsq', '150.00', '2022-06-24 18:33:05', 0, 1, 1),
(379, 'qsdsqdsq', 'sqddsq', '150.00', '2022-06-24 18:34:00', 0, 1, 1),
(380, 'qsdsqdsq', 'sqddsq', '150.00', '2022-06-24 18:34:54', 0, 1, 1),
(381, 'qsdsqdsq', 'sqddsq', '150.00', '2022-06-24 18:35:27', 0, 1, 1),
(382, 'qsdsqdsq', 'sqddsq', '150.00', '2022-06-24 18:35:55', 0, 1, 1),
(383, 'test', 'dsds', '1200.00', '2022-06-25 13:26:42', 0, 1, 1),
(384, 'dqsdq', 'erfr', '15.00', '2022-06-25 13:27:58', 0, 1, 1),
(385, 'dqsdq', 'erfr', '15.00', '2022-06-25 13:33:42', 0, 1, 1),
(386, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:21:00', 0, 1, 1),
(387, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:22:42', 0, 1, 1),
(388, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:32:56', 0, 1, 1),
(389, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:33:44', 0, 1, 1),
(390, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:33:59', 0, 1, 1),
(391, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:34:13', 0, 1, 1),
(392, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:36:13', 0, 1, 1),
(393, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:37:48', 0, 1, 1),
(394, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:40:32', 0, 1, 1),
(395, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:41:11', 0, 1, 1),
(396, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:41:21', 0, 1, 1),
(397, 'dqsdq', 'erfr', '15.00', '2022-06-25 16:41:48', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Écrans'),
(2, 'Ordinateurs'),
(3, 'Ordinateurs portables'),
(4, 'Informatiques'),
(5, 'Audio'),
(6, 'Téléviseurs'),
(7, 'Consoles'),
(8, 'Jeux');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_location` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `annonces_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_location`, `created_at`, `annonces_id`) VALUES
(146, 'Array', '2022-06-24 12:10:34', 352),
(147, 'Array', '2022-06-24 15:12:41', 356),
(148, 'Array', '2022-06-24 15:14:39', 357),
(149, 'Array', '2022-06-24 15:15:09', 358),
(150, 'Array', '2022-06-24 15:15:53', 359),
(151, 'Array', '2022-06-24 15:16:25', 360),
(152, 'Array', '2022-06-24 15:25:58', 363),
(153, 'Array', '2022-06-24 15:43:19', 367),
(154, 'Array', '2022-06-24 18:08:50', 368),
(155, 'Array', '2022-06-24 18:12:39', 369),
(156, 'Array', '2022-06-24 18:29:14', 374),
(157, 'Array', '2022-06-24 18:33:05', 378),
(158, 'Array', '2022-06-24 18:35:55', 382),
(159, 'Array', '2022-06-25 13:26:42', 383),
(160, 'Array', '2022-06-25 13:27:58', 384),
(161, 'Array', '2022-06-25 16:21:00', 386),
(162, 'Array', '2022-06-25 16:22:42', 387),
(163, 'Array', '2022-06-25 16:32:56', 388),
(164, 'Array', '2022-06-25 16:33:44', 389),
(165, 'Array', '2022-06-25 16:40:32', 394),
(166, 'Array', '2022-06-25 16:41:11', 395),
(167, 'Array', '2022-06-25 16:41:48', 397);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`roles`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `roles`) VALUES
(1, 'admin@admin.com', '$argon2i$v=19$m=65536,t=4,p=1$YmNvcUM1U3NVLkZmVTFLRg$wDJUCl5YXbGeXuc+ZGAcYdDOWtyCQpUhSivCmrC7HWQ', '[\"ROLE_ADMIN\"]'),
(2, 'contact@demo.fr', '$argon2i$v=19$m=65536,t=4,p=1$YmNvcUM1U3NVLkZmVTFLRg$wDJUCl5YXbGeXuc+ZGAcYdDOWtyCQpUhSivCmrC7HWQ', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `annonces_id` (`annonces_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonces`
--
ALTER TABLE `annonces`
  ADD CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `annonces_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`annonces_id`) REFERENCES `annonces` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
