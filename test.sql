/*
 Navicat Premium Data Transfer

 Source Server         : LINODE MYSQL
 Source Server Type    : MySQL
 Source Server Version : 50723
 Source Host           : 45.33.4.239:3306
 Source Schema         : test

 Target Server Type    : MySQL
 Target Server Version : 50723
 File Encoding         : 65001

 Date: 06/04/2019 09:59:26
*/

CREATE database test;

USE test; 

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for atividades
-- ----------------------------
DROP TABLE IF EXISTS `atividades`;
CREATE TABLE `atividades`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_modulo` int(11) NULL DEFAULT NULL,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `dt_cadastro` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_alteracao` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `fk_id_modulo`(`id_modulo`) USING BTREE,
  CONSTRAINT `fk_id_modulo` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for modulos
-- ----------------------------
DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descricao` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `dt_cadastro` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dt_alteracao` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of modulos
-- ----------------------------
INSERT INTO `modulos` VALUES (1, 'teste 11', 'teste 11', '2019-04-06 06:13:44', '2019-04-06 07:52:49', 'ativo');
INSERT INTO `modulos` VALUES (4, 'teste 3', 'fazendo teste 3', '2019-04-06 06:38:55', NULL, 'ativo');

SET FOREIGN_KEY_CHECKS = 1;
