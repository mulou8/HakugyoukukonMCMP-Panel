/*
Navicat MySQL Data Transfer

Source Server         : 本地服务器
Source Server Version : 50560
Source Host           : localhost:3306
Source Database       : ymcp

Target Server Type    : MYSQL
Target Server Version : 50560
File Encoding         : 65001

Date: 2018-10-14 13:12:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for failure_token_data
-- ----------------------------
DROP TABLE IF EXISTS `failure_token_data`;
CREATE TABLE `failure_token_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `failure_date` text,
  `failure_ip` text,
  `token_context` text,
  PRIMARY KEY (`id`,`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of failure_token_data
-- ----------------------------
INSERT INTO `failure_token_data` VALUES ('1', '1', '2018/10/14 13:11:59', '192.168.31.128', 'eyJ0aW1lIjoxNTM5NDkzNzAzLCJleHBpcmUiOjE1Mzk0OTczMDMsImtleSI6Ik1UVXpPVFE1TXpjd00zeFRZV2xuZVc5MWFtbFpkWGwxYTI4dFNHRnJkV2Q1YjJ0MVUyOTFiRTFXUXlaSVRVTlFPam95TURFNE1UQTNNVEF3TXpNM2ZGTmhhV2Q1YjNWcWFWbDFlWFZyYjN3eE1qTXhNak5oIiwic2lnbmF0dXJlIjoiU2FpZ3lvdWppWXV5dWtvIiwibG9jYXRpb24iOiJMb2dpbiJ9');

-- ----------------------------
-- Table structure for login_data
-- ----------------------------
DROP TABLE IF EXISTS `login_data`;
CREATE TABLE `login_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(255) NOT NULL,
  `last_login_ip` text,
  `last_login_date` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_data
-- ----------------------------
INSERT INTO `login_data` VALUES ('1', '0', '1', '192.168.31.128', '2018/10/13 22:04:11');
INSERT INTO `login_data` VALUES ('2', '0', '1', '192.168.31.128', '2018/10/13 22:08:06');
INSERT INTO `login_data` VALUES ('3', '0', '1', '192.168.31.128', '2018/10/13 22:34:52');
INSERT INTO `login_data` VALUES ('4', '0', '1', '192.168.31.128', '2018/10/13 22:38:07');
INSERT INTO `login_data` VALUES ('5', '0', '1', '192.168.31.128', '2018/10/13 22:38:09');
INSERT INTO `login_data` VALUES ('6', '0', '1', '192.168.31.233', '2018/10/13 22:43:03');
INSERT INTO `login_data` VALUES ('7', '0', '1', '192.168.31.233', '2018/10/13 22:44:52');
INSERT INTO `login_data` VALUES ('8', '0', '1', '192.168.31.128', '2018/10/13 22:58:08');
INSERT INTO `login_data` VALUES ('9', '0', '1', '192.168.31.128', '2018/10/13 23:03:31');
INSERT INTO `login_data` VALUES ('10', '0', '1', '192.168.31.128', '2018/10/13 23:04:41');
INSERT INTO `login_data` VALUES ('11', '0', '1', '192.168.31.128', '2018/10/13 23:07:02');
INSERT INTO `login_data` VALUES ('12', '0', '1', '192.168.31.128', '2018/10/13 23:11:03');
INSERT INTO `login_data` VALUES ('13', '0', '1', '192.168.31.128', '2018/10/14 11:18:59');
INSERT INTO `login_data` VALUES ('14', '0', '1', '192.168.31.152', '2018/10/14 11:31:17');
INSERT INTO `login_data` VALUES ('15', '-1', '1', '192.168.31.128', '2018/10/14 12:58:38');
INSERT INTO `login_data` VALUES ('16', '0', '1', '192.168.31.128', '2018/10/14 12:58:48');
INSERT INTO `login_data` VALUES ('17', '-1', '1', '192.168.31.128', '2018/10/14 13:00:29');
INSERT INTO `login_data` VALUES ('18', '0', '1', '192.168.31.128', '2018/10/14 13:00:30');
INSERT INTO `login_data` VALUES ('19', '0', '1', '192.168.31.128', '2018/10/14 13:00:57');
INSERT INTO `login_data` VALUES ('20', '0', '1', '192.168.31.128', '2018/10/14 13:01:50');
INSERT INTO `login_data` VALUES ('21', '0', '1', '192.168.31.128', '2018/10/14 13:03:51');
INSERT INTO `login_data` VALUES ('22', '0', '1', '192.168.31.128', '2018/10/14 13:04:09');
INSERT INTO `login_data` VALUES ('23', '0', '1', '192.168.31.128', '2018/10/14 13:08:29');
INSERT INTO `login_data` VALUES ('24', '0', '1', '192.168.31.128', '2018/10/14 13:11:46');
INSERT INTO `login_data` VALUES ('25', '0', '1', '192.168.31.128', '2018/10/14 13:12:11');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'SaigyoujiYuyuko', '$2y$10$UDHKKg5zpvPYBCd4/ZCq7OgxvxTNEX2kSt0B5R.zd8HUBfXTs2W.u');
