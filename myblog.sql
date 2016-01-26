-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-01-26 08:14:44
-- 服务器版本： 5.5.20
-- PHP Version: 5.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog_category`
--

CREATE TABLE IF NOT EXISTS `blog_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(20) NOT NULL DEFAULT '',
  `intro` varchar(100) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blog_category`
--

INSERT INTO `blog_category` (`cat_id`, `cat_name`, `intro`, `parent_id`) VALUES
(19, '互联网资讯', 'this is Internet news', 0),
(21, 'PHP技术', 'PHPa\r\n', 0),
(22, 'Linux', 'Linux', 0),
(23, 'Github', 'github', 0),
(24, '随笔情怀', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `blog_content`
--

CREATE TABLE IF NOT EXISTS `blog_content` (
  `ID` bigint(20) unsigned NOT NULL,
  `post_title` text NOT NULL,
  `post_img` varchar(50) NOT NULL DEFAULT '',
  `post_thub_img` varchar(50) NOT NULL DEFAULT '',
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_content` longtext NOT NULL,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_comment` longtext NOT NULL,
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blog_content`
--

INSERT INTO `blog_content` (`ID`, `post_title`, `post_img`, `post_thub_img`, `post_parent`, `post_content`, `post_date`, `post_date_gmt`, `post_status`, `post_modified`, `post_type`, `post_comment`, `comment_count`, `comment_status`) VALUES
(1, 'afdsfas', '', '', 0, '<p>sdfsafds<br/></p>', 0x303030302d30302d30302030303a30303a3030, 0x303030302d30302d30302030303a30303a3030, 'publish', 0x303030302d30302d30302030303a30303a3030, 'post', '', 0, 'open'),
(2, 'adsfasdfafas', '', '', 0, '<p><strong>sfsafasfasdfasdf</strong></p><pre class="brush:php;toolbar:false">&nbsp;&nbsp;&nbsp;if($_POST[&#39;addnew&#39;]&nbsp;==&nbsp;&#39;addnew&#39;){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$data[&#39;post_title&#39;]&nbsp;=&nbsp;$_POST[&#39;post_title&#39;];\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$data[&#39;post_parent&#39;]&nbsp;=&nbsp;$_POST[&#39;post_parent&#39;];\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$data[&#39;post_content&#39;]&nbsp;=&nbsp;$_POST[&#39;editorValue&#39;];\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$newId&nbsp;=&nbsp;$m-&gt;add($data);\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if($newId){\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this-&gt;success(&#39;发布成功&#39;);</pre><p><br/></p>', 0x303030302d30302d30302030303a30303a3030, 0x303030302d30302d30302030303a30303a3030, 'publish', 0x303030302d30302d30302030303a30303a3030, 'post', '', 0, 'open'),
(3, '啊多发发', '', '', 23, '<p>是对方是否<br/></p>', 0x303030302d30302d30302030303a30303a3030, 0x303030302d30302d30302030303a30303a3030, 'publish', 0x303030302d30302d30302030303a30303a3030, 'post', '', 0, 'open');

-- --------------------------------------------------------

--
-- 表的结构 `blog_user`
--

CREATE TABLE IF NOT EXISTS `blog_user` (
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `passwd` varchar(30) NOT NULL DEFAULT '',
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastlogin` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blog_user`
--

INSERT INTO `blog_user` (`user_id`, `username`, `passwd`, `regtime`, `lastlogin`) VALUES
(1, 'yuqing', '11111', 11111, 6232),
(2, 'qqqq', '112342111', 12121111, 621232),
(3, 'user', '8353', 1121, 232),
(4, 'llltsy', '8353', 1121, 232),
(5, '00sy', '88353', 113221, 2932),
(6, '00py', '86853', 7588, 90057),
(7, 'rytyeet', '893', 19821, 1322932);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `blog_content`
--
ALTER TABLE `blog_content`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `blog_content`
--
ALTER TABLE `blog_content`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
