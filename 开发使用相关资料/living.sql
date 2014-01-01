-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 20 日 13:36
-- 服务器版本: 5.5.29
-- PHP 版本: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `living`
--

-- --------------------------------------------------------

--
-- 表的结构 `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE `note` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text,
  `addtime` int(8) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  `utime` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- 转存表中的数据 `note`
--

INSERT INTO `note` (`id`, `uid`, `title`, `content`, `addtime`, `state`, `utime`) VALUES
(25, 18, 'living项目简介 -2', ' 简介: living，是一个基于web应用(工具软件,app)，不同于blog、CMS、微博、商城等，不是内容发布浏览类型。\n\n而是GTD工具：\n－这是一个记录工作中、生活中的零碎任务（提醒事项）\n－记录一些笔记，较多文本内容（备忘录）\n－安排记录工作、生活事件 （日历 #开发中 ）\n\ntag\nTeam: orange小组 living项目  more crazy more beautiful\nTechnique: lamp / ThinkPHP / jQuery / bootstrap(tw 现代美观) html5>App\n\n期待加入living开发，代码托管在 github  ', 1387347328, 1, 1387421770),
(26, 18, '项目演示流程  -1', '  1､ 项目简介 （小组介绍 / 项目用途 / 项目技术介绍）\n2､ 功能模块演示（login－提醒事项－备忘录－日历）\n3､ 未完成功能（提醒、通知、日历、移动app 简单易用）\n4､ Read me \n\n注意：\n1、建议分辨率1280*800,宽频显示效果更佳\n2、不支援IE浏览器，请使用先进的chrome firefox等浏览器\n\nEND!  ', 1387349169, 1, 1387422649),
(27, 20, '进行Living项目演示', '演示步骤：\n1、HOME/NOTE  A/D/U 演示完成\n2、HOME/TASK  A/D/U', 1387355750, 1, 0),
(28, 20, '这是用于删除测试的NOTE', 'NULL', 1387355803, 3, 0),
(29, 21, '项目演示流程  -1', '1､ 项目简介 （小组介绍 / 项目用途 / 项目技术介绍）\n2､ 功能模块演示（login－提醒事项－备忘录－日历）\n3､ 未完成功能（提醒、通知、日历、移动app 简单易用）\n4､ Read me \n\n注意：\n1、建议分辨率1280*800,宽频显示效果更佳\n2、不支援IE浏览器，请使用先进的chrome firefox等浏览器\n\nEND!', 1387357038, 3, 0),
(30, 21, 'living团队/项目简介 ', ' 团队：Orange/ -more crazy,more beautiful\n- 张鸿柔\n\n项目简介: living，是一个web应用(工具软件,app)，不同于blog、CMS、微博、商城等，不是内容发布浏览类型。\n\n而是GTD工具：\n－这是一个记录工作中、生活中的零碎任务（提醒事项）\n－记录一些笔记，较多文本内容（备忘录）\n－安排记录工作、生活事件 （日历 #开发中 ）\n\ntag\nTeam: orange小组 living项目  more crazy more beautiful\nTechnique: lamp / ThinkPHP / jQuery / bootstrap(tw 现代美观) html5>App\n\n期待加入living开发，代码托管在 github   ', 1387357051, 1, 1387528422),
(31, 21, 'living项目演示流程', '介绍Living\n\n\n1、演示 HOME/NOTE \n2、演示 HOME/TASK\n3、演示 个人中心模块 \n4、演示 用户设置模块（修改昵称 / 密码） ', 1387357181, 1, 1387438274),
(37, 18, 'new biji', 'note', 1387423402, 3, 1387423402),
(38, 21, 'Living技术总结', ' 时间花费：\n1、代码优化（JS重写了3遍）\n2、界面设计调试，使用体验\n\n技术：ThinkPHP / AJAX(数据库增册改查) / bootstarp / icon / 响应式布局 / html5\n\n遗憾：\n- 1人 很多功能未善  \n- 代码优化不够(科学/高效/易读)\nGithub托管 \n# 日历（google）\n# 手机APP\n ', 1387436677, 1, 1387524057),
(39, 25, 'add note2', ' add note 2', 1387468858, 1, 1387468868),
(40, 21, 'new', 'new note', 1387523356, 3, 1387523356),
(41, 27, '真好', '真好真好', 1387529306, 1, 1387529306),
(42, 27, '真好', '', 1387529310, 1, 1387529310);

-- --------------------------------------------------------

--
-- 表的结构 `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(8) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` varchar(160) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `utime` int(10) NOT NULL,
  `state` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=185 ;

--
-- 转存表中的数据 `task`
--

INSERT INTO `task` (`id`, `uid`, `title`, `content`, `date`, `utime`, `state`) VALUES
(118, 18, '在火狐中进行测试', '这是备注', '2013-12-17', 1387333985, 3),
(119, 18, '再添加一个', '', '', 1387333975, 3),
(120, 18, '添加一个新的事项', '', '', 1387335034, 1),
(121, 18, '再添加一个', '', '', 1387335047, 1),
(122, 18, '明天星期四', '', '', 1387335056, 1),
(123, 18, '明天开始审项目了', '', '', 1387345348, 1),
(124, 18, '就是今天了', '准备好', '2013-12-21', 1387421731, 3),
(125, 18, '又快放假了', '', '', 1387345340, 1),
(126, 18, '简历技巧', '', '', 1387345320, 3),
(127, 18, '好多作业呀', '', '2013-12-18', 1387337497, 3),
(128, 18, 'living very lose', 'It''s time 2013-12-17', '2013-12-18', 1387337349, 1),
(138, 18, 'new', '', '', 1387352755, 1),
(139, 18, 'new', '', '', 1387352758, 1),
(140, 18, 'udpate', 'update2', '2013-12-19', 1387421448, 1),
(141, 20, '全面的Living前台测试', '', '', 1387355441, 1),
(142, 20, '全面Task测试 修改', '添加备注', '2013-12-11', 1387355473, 3),
(143, 20, '这是一个演示的Task12', '这是为演示Task添加的备注', '2013-12-18', 1387356035, 1),
(144, 20, '这是一个演示的Task', '这是演示Task的备注信息', '2013-12-19', 1387355606, 3),
(145, 20, '这是一个演示的Task1', '修改演示Task的备注信息', '2013-12-18', 1387355947, 3),
(146, 20, 'test1', '', '', 1387356056, 1),
(147, 20, 'test2', '', '', 1387356060, 1),
(148, 21, '今天进行项目演示', 'OK\n', '2013-12-19', 1387357629, 1),
(149, 21, '好好准备项目演示', 'yes', '2013-12-20', 1387356708, 3),
(150, 21, '完成Living的调试', '全面调试,task', '2013-12-19', 1387357619, 1),
(151, 21, '注册一个用于测试的帐户', 'TEST帐户ok', '2013-12-18', 1387357618, 1),
(152, 21, '准备测试数据', 'OK', '2013-12-18', 1387357616, 1),
(154, 21, '分页数据2', '', '', 1387357592, 1),
(156, 21, '分页数据4', '', '', 1387357593, 1),
(157, 21, '分页数据5', '', '', 1387357594, 1),
(158, 21, '分页数据6', '', '', 1387356462, 1),
(159, 21, '分页数据7', '', '', 1387356465, 1),
(160, 21, '分页数据8', '', '', 1387356472, 1),
(161, 21, '分页数据9', '', '', 1387356476, 1),
(162, 21, '分页数据10', '', '', 1387356480, 1),
(163, 21, '介绍介绍团队', '', '', 1387526558, 3),
(164, 21, '星期六睡个懒觉', '睡个懒觉', '2013-12-21', 1387357630, 1),
(165, 21, '这是一个演示Task1', '演示living/task的使用修改', '2013-12-20', 1387357775, 1),
(166, 21, '完成这个task', '已完成 ', '2013-12-19', 1387357596, 1),
(169, 18, 'new add', 'connect', '2013-12-22', 1387421484, 1),
(170, 18, 'new add', 'connect', '2013-12-22', 1387421486, 1),
(173, 21, '介绍living是干什么的', '', '', 1387526546, 3),
(174, 21, '说说Living技术总结', '技术总结', '2013-12-20', 1387526555, 3),
(175, 25, '新增一个TASK2', '备注2', '2013-12-20', 1387468833, 3),
(176, 25, 'new a task', 'info', '2013-12-20', 1387468816, 1),
(178, 21, '发布Living V0.1版本代码', 'github托管 living项目名', '2013-12-21', 1387526573, 3),
(179, 21, '程序模块', '', '', 1387526535, 1),
(180, 21, 'new task2', '', '', 1387528513, 3),
(181, 21, 'new task', 'beizhu', '2013-12-20', 1387528495, 1),
(182, 27, '真好', '真好', '', 1387529522, 3),
(183, 27, '的大', '分数', '', 1387529465, 3),
(184, 26, 'hello', '', '', 1387539552, 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `regtime` int(8) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `regtime`, `state`) VALUES
(18, 'Sup.rod', 'zhanghooyo@gmail.com', '008bd5ad93b754d500338c253d9c1770', 1387244248, NULL),
(21, 'testuser', 'test@living.com', '098f6bcd4621d373cade4e832627b4f6', 1387244248, NULL),
(25, 'admin', 'admin@living.com', '21232f297a57a5a743894a0e4a801fc3', 1387468005, 1),
(26, 'hh', 'haoliang@gmail.com', '5e36941b3d856737e81516acd45edc50', 1387528833, 1),
(27, 'admin', 'admin@163.com', '21232f297a57a5a743894a0e4a801fc3', 1387529246, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
