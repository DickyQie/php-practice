/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : happy

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2017-11-07 21:17:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `smarty_msg`
-- ----------------------------
DROP TABLE IF EXISTS `smarty_msg`;
CREATE TABLE `smarty_msg` (
  `smamsg_id` int(5) NOT NULL AUTO_INCREMENT,
  `sender` varchar(64) NOT NULL,
  `qetter` varchar(64) NOT NULL,
  `sendtime` datetime NOT NULL COMMENT '发送时间',
  `content` varchar(200) NOT NULL COMMENT '内容',
  PRIMARY KEY (`smamsg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of smarty_msg
-- ----------------------------
INSERT INTO `smarty_msg` VALUES ('1', '张三丰', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('2', '林青霞', '张国荣', '2017-11-06 15:47:52', '你好呀');
INSERT INTO `smarty_msg` VALUES ('3', '刘德华', '周星驰', '2017-11-08 16:52:17', '拍戏了');
INSERT INTO `smarty_msg` VALUES ('4', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('5', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('6', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('7', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('8', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('9', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('10', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('11', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('12', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('13', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('14', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('15', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
INSERT INTO `smarty_msg` VALUES ('16', '向问天', '周星驰', '2017-11-07 17:46:18', '吃了吗');
