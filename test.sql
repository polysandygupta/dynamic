/*
Navicat MySQL Data Transfer

Source Server         : t4r4
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2012-11-26 23:27:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` char(25) NOT NULL,
  `Age` int(11) NOT NULL,
  `Country` char(25) NOT NULL,
  `Rank` int(11) NOT NULL,
  `Color` char(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', 'Alan', '1', 'America', '99', 'Red');
INSERT INTO `test` VALUES ('2', 'Brady', '2', 'Bosnia', '98', 'Green');
INSERT INTO `test` VALUES ('3', 'Clifford', '3', 'China', '97', 'Blue');
INSERT INTO `test` VALUES ('4', 'David', '4', 'Denmark', '96', 'Red');
INSERT INTO `test` VALUES ('5', 'Eric', '5', 'England', '95', 'Green');
INSERT INTO `test` VALUES ('6', 'Frank', '6', 'France', '94', 'Blue');
INSERT INTO `test` VALUES ('7', 'George', '7', 'Germany', '93', 'Red');
INSERT INTO `test` VALUES ('8', 'Henry', '8', 'Holland', '92', 'Green');
INSERT INTO `test` VALUES ('9', 'Ian', '9', 'Ireland', '91', 'Blue');
INSERT INTO `test` VALUES ('10', 'Jack', '10', 'Jamaica', '90', 'Red');
INSERT INTO `test` VALUES ('11', 'Kevin', '11', 'Kenya', '89', 'Green');
INSERT INTO `test` VALUES ('12', 'Leo', '12', 'Libya', '88', 'Blue');
INSERT INTO `test` VALUES ('13', 'Mike', '13', 'Mexico', '87', 'Red');
