/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 100410
 Source Host           : localhost:3306
 Source Schema         : acdief_db

 Target Server Type    : MySQL
 Target Server Version : 100410
 File Encoding         : 65001

 Date: 02/04/2020 02:03:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for adherant
-- ----------------------------
DROP TABLE IF EXISTS `adherant`;
CREATE TABLE `adherant`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `prenoms` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_naissance` datetime(0) NULL DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `telephone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `role` enum('USER','PROJECT_HOLDER','ADMIN','') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER',
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of adherant
-- ----------------------------
INSERT INTO `adherant` VALUES (1, 'M.', 'TSIVANYO', 'Marc', 'marctsivanyo@gmail.com', '0000-00-00 00:00:00', '55 SQUARE PEDRO FLORES', '0605698949', 'RENNES', 'd33c80bc45d65303e33ca83108a9952b745af9ef', 'Lomé', 'ADMIN', NULL, NULL);

-- ----------------------------
-- Table structure for donateurs
-- ----------------------------
DROP TABLE IF EXISTS `donateurs`;
CREATE TABLE `donateurs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adherant_id` int(11) NULL DEFAULT NULL,
  `montant` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `projet_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of donateurs
-- ----------------------------
INSERT INTO `donateurs` VALUES (1, 1, '1000', 1, '2020-01-11 16:46:53', '2020-01-11 16:46:55');

-- ----------------------------
-- Table structure for projets
-- ----------------------------
DROP TABLE IF EXISTS `projets`;
CREATE TABLE `projets`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `montant` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ville` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `fichier` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nom_organisation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email_organisation` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `user_id` int(11) NULL DEFAULT NULL,
  `visible` int(1) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `updated_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of projets
-- ----------------------------
INSERT INTO `projets` VALUES (1, 'Education Numérique ', 'Education Numérique', '12000', 'Lomé', '1578754274.pdf', 'MasterSolut', 'marctsivanyo@gmail.com', 1, 1, '2020-03-19 14:27:10', '2020-03-19 14:27:10', 'EducationNumrique1584624430.JPG');
INSERT INTO `projets` VALUES (2, 'School Form', 'Formation scolaire', '12000', 'Lomé', 'ProjetdeMasse1578838510.pdf', 'MasterSolut', 'marctsivanyo@gmail.com', 1, 1, '2020-03-19 14:27:23', '2020-03-19 14:27:23', 'SchoolForm1584624443.jpg');
INSERT INTO `projets` VALUES (3, 'Tous ensembles', 'Tous ensembles', '20000', 'RENNES', 'SZRFEZR1578838645.pdf', 'MasterSolut', 'marctsivanyo@gmail.com', 1, 1, '2020-03-19 14:27:33', '2020-03-19 14:27:33', 'Tousensembles1584624453.jpg');
INSERT INTO `projets` VALUES (4, 'Un étudiant, un ordianateur', 'Un étudiant, un ordianateur', '5000000', 'RENNES', 'Untudiantunordianateur1578839576.pdf', 'MasterSolut', 'marctsivanyo@gmail.com', 1, 1, '2020-03-19 14:27:44', '2020-03-19 14:27:44', 'Untudiantunordianateur1584624464.JPG');

-- ----------------------------
-- Table structure for sponsors
-- ----------------------------
DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE `sponsors`  (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LOGO` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sponsors
-- ----------------------------
INSERT INTO `sponsors` VALUES (1, 'UE', 'UE.jpg', '2020-03-30');
INSERT INTO `sponsors` VALUES (2, 'ONU-TOGO', 'ONU-TOGO.jpg', '2020-03-30');
INSERT INTO `sponsors` VALUES (3, 'PROCEMA', 'PROCEMA.jpg', '2020-03-30');
INSERT INTO `sponsors` VALUES (4, 'FAIEJ', 'FAIEJ.jpg', '2020-03-30');
INSERT INTO `sponsors` VALUES (5, 'MADEINTOGO', 'MADEINTOGO.jpg', '2020-03-30');

SET FOREIGN_KEY_CHECKS = 1;
