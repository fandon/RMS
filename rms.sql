/*
Navicat MySQL Data Transfer

Source Server         : forfree
Source Server Version : 50552
Source Host           : 121.42.183.217:3306
Source Database       : rms

Target Server Type    : MYSQL
Target Server Version : 50552
File Encoding         : 65001

Date: 2017-02-14 13:07:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for f_menu
-- ----------------------------
DROP TABLE IF EXISTS `f_menu`;
CREATE TABLE `f_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_menu
-- ----------------------------

-- ----------------------------
-- Table structure for f_resource
-- ----------------------------
DROP TABLE IF EXISTS `f_resource`;
CREATE TABLE `f_resource` (
  `id` int(11) NOT NULL,
  `code` varchar(64) DEFAULT NULL COMMENT '资源编号',
  `type` int(11) DEFAULT NULL COMMENT '资源类别',
  `name` varchar(255) DEFAULT NULL COMMENT '资源名称',
  `picture` varchar(255) DEFAULT NULL COMMENT '资源图片',
  `status` smallint(6) DEFAULT NULL COMMENT '资源状态',
  `begin_time` datetime DEFAULT NULL COMMENT '开始时间',
  `end_time` datetime DEFAULT NULL COMMENT '结束时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_resource
-- ----------------------------

-- ----------------------------
-- Table structure for f_resource_emp
-- ----------------------------
DROP TABLE IF EXISTS `f_resource_emp`;
CREATE TABLE `f_resource_emp` (
  `id` int(11) NOT NULL,
  `recource_id` int(11) DEFAULT NULL COMMENT '资源id',
  `employee_id` int(11) DEFAULT NULL,
  `remark` text COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_resource_emp
-- ----------------------------

-- ----------------------------
-- Table structure for f_role
-- ----------------------------
DROP TABLE IF EXISTS `f_role`;
CREATE TABLE `f_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '角色id',
  `name` varchar(255) DEFAULT NULL COMMENT '角色名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_role
-- ----------------------------

-- ----------------------------
-- Table structure for f_role_menu
-- ----------------------------
DROP TABLE IF EXISTS `f_role_menu`;
CREATE TABLE `f_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_role_menu
-- ----------------------------

-- ----------------------------
-- Table structure for f_user
-- ----------------------------
DROP TABLE IF EXISTS `f_user`;
CREATE TABLE `f_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `account` varchar(255) DEFAULT '' COMMENT '账号',
  `pwd` varchar(255) DEFAULT '' COMMENT '密码',
  `name` varchar(255) DEFAULT '' COMMENT '昵称',
  `phone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `email` varchar(255) DEFAULT '',
  `icon` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_user
-- ----------------------------
INSERT INTO `f_user` VALUES ('1', '1329307957@qq.com', '123', '', '', '', '');
INSERT INTO `f_user` VALUES ('2', '123@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('3', '124@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('4', '125@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('5', '126@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('6', '127@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('7', '128@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('8', '129@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('9', '130@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('10', '131@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('11', '132@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('12', '133@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('13', '134@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('14', '135@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('15', '136@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('16', '137@qq.com', '123', null, null, null, null);
INSERT INTO `f_user` VALUES ('17', '123', '123', '', null, '', '');
INSERT INTO `f_user` VALUES ('18', 'dd', '123', '', null, '', '');
INSERT INTO `f_user` VALUES ('19', '12', '123', '', null, '', '');
INSERT INTO `f_user` VALUES ('20', '1234', '123', '', null, '', '');
INSERT INTO `f_user` VALUES ('21', '1233245', '123', '', null, '', '');

-- ----------------------------
-- Table structure for f_user_role
-- ----------------------------
DROP TABLE IF EXISTS `f_user_role`;
CREATE TABLE `f_user_role` (
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of f_user_role
-- ----------------------------
