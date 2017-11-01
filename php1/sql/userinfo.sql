/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : happy

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2017-10-31 18:28:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `userinfo`
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID编号',
  `username` varchar(25) NOT NULL COMMENT '用户名',
  `age` int(3) NOT NULL COMMENT '年龄',
  `sex` int(1) unsigned zerofill NOT NULL COMMENT '性别',
  `tel` varchar(11) NOT NULL COMMENT '电话',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  `content` text COMMENT '个人介绍',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('1', '张切', '12', '1', '18523978916', '2635481328@qq.com', '我的PHP');
INSERT INTO `userinfo` VALUES ('3', '张小', '22', '0', '18523978917', 'zzz@qq.com', '我的PHP哦');
INSERT INTO `userinfo` VALUES ('4', 'zhang', '22', '0', '18523978917', '213@qq.mmm', '我的SQL');
INSERT INTO `userinfo` VALUES ('5', '胡歌', '39', '1', '18523978966', 'hugem@qq.com', '大家好，我是胡歌。');
INSERT INTO `userinfo` VALUES ('6', '张小切', '23', '0', '18523978999', 'huge@qq.com', 'PHP是世界最好的语言。');
