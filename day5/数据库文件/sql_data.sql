-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: 2017-12-08 18:29:55
-- 服务器版本： 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dan`
--

-- --------------------------------------------------------

--
-- 表的结构 `test_user`
--

CREATE TABLE `test_user` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'user id',
  `email` varchar(64) NOT NULL COMMENT 'email',
  `password` varchar(128) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='user';

--
-- 转存表中的数据 `test_user`
--

INSERT INTO `test_user` (`id`, `email`, `password`) VALUES
(1, 'qq@qq.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(2, 'dd@qq.com', 'f0898af949a373e72a4f6a34b4de9090');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_user`
--
ALTER TABLE `test_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `test_user`
--
ALTER TABLE `test_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'user id', AUTO_INCREMENT=3;