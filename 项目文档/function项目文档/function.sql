-- phpMyAdmin SQL Dump
-- version 2.10.0.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost:6033
-- 生成日期: 2008 年 11 月 20 日 14:26
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `function`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `func_ftype`
-- 

CREATE TABLE `func_ftype` (
  `ftype_id` int(11) NOT NULL auto_increment,
  `ftype_name` varchar(255) default NULL,
  PRIMARY KEY  (`ftype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 表的结构 `func_function`
-- 

CREATE TABLE `func_function` (
  `func_id` int(11) NOT NULL auto_increment,
  `ftype_id` int(11) default NULL,
  `func_name` varchar(255) default NULL,
  `func_breif` text,
  `func_origin` text,
  `func_return` varchar(255) default NULL,
  `func_ver` tinyint(4) default NULL,
  `func_level` tinyint(4) default NULL,
  `func_detail` text,
  `func_other` text,
  PRIMARY KEY  (`func_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 表的结构 `func_parameter`
-- 

CREATE TABLE `func_parameter` (
  `type_id` int(11) NOT NULL,
  `type_parameter_name` text,
  `type_code_name` text NOT NULL,
  PRIMARY KEY  (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- 
-- 表的结构 `func_user`
-- 

CREATE TABLE `func_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `utype_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_passwod` char(20) NOT NULL,
  `u_email` varchar(45) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

-- 
-- 表的结构 `func_utype`
-- 

CREATE TABLE `func_utype` (
  `utype_id` int(11) NOT NULL auto_increment,
  `utype_name` varchar(20) NOT NULL,
  `utype_auth` tinyint(4) NOT NULL,
  `utype_type` tinyint(4) NOT NULL,
  PRIMARY KEY  (`utype_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
