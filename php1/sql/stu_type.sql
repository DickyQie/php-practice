/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : happy

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2017-10-31 15:39:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `stu_type`
-- ----------------------------
DROP TABLE IF EXISTS `stu_type`;
CREATE TABLE `stu_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(5) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stu_type` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stu_type
-- ----------------------------
INSERT INTO `stu_type` VALUES ('1', '1', '武侠');
INSERT INTO `stu_type` VALUES ('2', '2', '文学');
INSERT INTO `stu_type` VALUES ('3', '3', '漫画');
INSERT INTO `stu_type` VALUES ('4', '4', '史记');
