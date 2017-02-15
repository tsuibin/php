-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2008 年 11 月 28 日 09:06
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `user`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `func_user1`
-- 

CREATE TABLE `func_user1` (
  `u_id` int(20) NOT NULL auto_increment,
  `utype_uid` tinyint(4) NOT NULL default '1',
  `u_name` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `u_password` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `six` tinytext character set utf8 collate utf8_bin NOT NULL,
  `email` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `tel` varchar(12) character set utf8 collate utf8_bin NOT NULL,
  `qq` varchar(20) character set utf8 collate utf8_bin default NULL,
  PRIMARY KEY  (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 COLLATE=gb2312_bin AUTO_INCREMENT=44 ;

-- 
-- 导出表中的数据 `func_user1`
-- 

INSERT INTO `func_user1` VALUES (42, 1, 0xe69d8ee4bc9fe6958f, 0x6d696e313233, 0x31, 0x7777772e6c697765696d696e323330403136332e, 0x3133373136303933333437, 0x333533303034363836);
INSERT INTO `func_user1` VALUES (37, 1, 0x313131, 0x313131313131, 0x30, 0x31313131313131403333333333, 0x3131313131313131, 0x313131313131);
INSERT INTO `func_user1` VALUES (43, 1, 0x6d696e, 0x6d696e313233, 0x30, 0x7777772e6c697765696d696e323330403136332e, 0x3133373136303933333437, 0x333533303034363836);
