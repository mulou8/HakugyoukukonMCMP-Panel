/*
Navicat MySQL Data Transfer

Source Server         : 本地服务器
Source Server Version : 50560
Source Host           : localhost:3306
Source Database       : ymcp

Target Server Type    : MYSQL
Target Server Version : 50560
File Encoding         : 65001

Date: 2018-11-03 19:40:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for daemon
-- ----------------------------
DROP TABLE IF EXISTS `daemon`;
CREATE TABLE `daemon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `key` text NOT NULL,
  `fqdn` text,
  `ajax_host` text,
  `OS_type` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for failure_token_data
-- ----------------------------
DROP TABLE IF EXISTS `failure_token_data`;
CREATE TABLE `failure_token_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `username` text,
  `reson` text,
  `failure_date` text,
  `failure_ip` text,
  `token_context` text,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for login_data
-- ----------------------------
DROP TABLE IF EXISTS `login_data`;
CREATE TABLE `login_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(255) NOT NULL,
  `login_username` text,
  `login_password` text,
  `last_login_ip` text,
  `last_login_date` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for servers
-- ----------------------------
DROP TABLE IF EXISTS `servers`;
CREATE TABLE `servers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `uuid` text NOT NULL,
  `uuid_short` text NOT NULL,
  `name` text NOT NULL,
  `daemon_id` int(255) NOT NULL,
  `port` int(11) NOT NULL,
  `max_memory` int(11) NOT NULL,
  `run_cmd` text NOT NULL,
  `stop_cmd` text,
  `jar_name` text,
  `ftp_pass` text NOT NULL,
  `daemon_ip` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
