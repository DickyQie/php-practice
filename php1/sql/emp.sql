/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : happy

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2017-11-07 21:18:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `emp`
-- ----------------------------
DROP TABLE IF EXISTS `emp`;
CREATE TABLE `emp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '雇员ID',
  `name` varchar(64) NOT NULL COMMENT '雇员名称',
  `gade` tinyint(4) NOT NULL COMMENT '级别(1:高级工)',
  `email` varchar(64) NOT NULL COMMENT '邮件',
  `salary` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of emp
-- ----------------------------
INSERT INTO `emp` VALUES ('1', '令狐冲', '1', 'lhc@zq.com', '2500');
INSERT INTO `emp` VALUES ('2', '东方不败', '1', 'df@zq.com', '5500');
INSERT INTO `emp` VALUES ('3', '任我行', '2', 'rwx@zq.com', '5500');
INSERT INTO `emp` VALUES ('4', '林平之', '2', 'lpz@zq.com', '3500');
INSERT INTO `emp` VALUES ('5', '岳不群', '2', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('6', '左冷禅', '1', 'zlc@zq.com', '2500');
INSERT INTO `emp` VALUES ('7', '田伯光', '1', 'tbg@zq.com', '2500');
INSERT INTO `emp` VALUES ('8', '向问天', '3', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('9', '任盈盈', '2', 'zlc@zq.com', '2500');
INSERT INTO `emp` VALUES ('10', '灵中泽', '3', 'tbg@zq.com', '2500');
INSERT INTO `emp` VALUES ('11', '向问天1', '3', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('12', '任盈盈1', '2', 'zlc@zq.com', '2500');
INSERT INTO `emp` VALUES ('23', '向问天1', '3', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('24', '任盈盈1', '2', 'zlc@zq.com', '2500');
INSERT INTO `emp` VALUES ('25', '灵中泽1', '3', 'tbg@zq.com', '2500');
INSERT INTO `emp` VALUES ('26', '向问天2', '3', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('27', '任盈盈2', '2', 'zlc@zq.com', '2500');
INSERT INTO `emp` VALUES ('28', '灵中泽2', '3', 'tbg@zq.com', '2500');
INSERT INTO `emp` VALUES ('29', '向问天3', '3', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('30', '任盈盈3', '2', 'zlc@zq.com', '2500');
INSERT INTO `emp` VALUES ('31', '灵中泽3', '3', 'tbg@zq.com', '2500');
INSERT INTO `emp` VALUES ('32', '向问天4', '3', 'ybq@zq.com', '3500');
INSERT INTO `emp` VALUES ('34', '风清扬', '2', 'zm@qq.com', '5123');
