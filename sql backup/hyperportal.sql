/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100128
Source Host           : localhost:3306
Source Database       : hyperportal

Target Server Type    : MYSQL
Target Server Version : 100128
File Encoding         : 65001

Date: 2018-01-01 23:13:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for visitas
-- ----------------------------
DROP TABLE IF EXISTS `visitas`;
CREATE TABLE `visitas` (
  `fecha` varchar(0) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `hora` varchar(0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of visitas
-- ----------------------------
INSERT INTO `visitas` VALUES ('', '127.0.0.1', '');
INSERT INTO `visitas` VALUES ('', '127.0.0.1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
INSERT INTO `visitas` VALUES ('', '::1', '');
