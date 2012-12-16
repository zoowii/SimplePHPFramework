/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : zblog

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2012-12-16 16:21:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `z_blog`
-- ----------------------------
DROP TABLE IF EXISTS `z_blog`;
CREATE TABLE `z_blog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content_type` enum('html','plain','markdown') NOT NULL DEFAULT 'markdown',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_blog
-- ----------------------------

-- ----------------------------
-- Table structure for `z_blog_label`
-- ----------------------------
DROP TABLE IF EXISTS `z_blog_label`;
CREATE TABLE `z_blog_label` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) unsigned NOT NULL,
  `label_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_blog_label
-- ----------------------------

-- ----------------------------
-- Table structure for `z_label`
-- ----------------------------
DROP TABLE IF EXISTS `z_label`;
CREATE TABLE `z_label` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `count` int(10) unsigned NOT NULL DEFAULT '0',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_label
-- ----------------------------

-- ----------------------------
-- Table structure for `z_user`
-- ----------------------------
DROP TABLE IF EXISTS `z_user`;
CREATE TABLE `z_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `salt` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('owner','author','visitor','admin') NOT NULL DEFAULT 'visitor',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of z_user
-- ----------------------------
INSERT INTO `z_user` VALUES ('1', 'zoowii', '1992zhouwei@gmail.com', '0e68226d6908d7949ead597d2cc80229b7d6eec966420bf3d3', '1353658c828b265f6514b610332ec219af945fb9', '2012-12-15 00:09:52', 'owner');
INSERT INTO `z_user` VALUES ('2', 'test2', '1fjifej@jfie.com', 'cbaac5d9ee5a79930139259ca44f6ed2779cfb35640ed8ea7b', 'a89f2f12a6d0ccbfe827c8bb818b56de8bc8ba90', '2012-12-15 01:18:11', 'visitor');
