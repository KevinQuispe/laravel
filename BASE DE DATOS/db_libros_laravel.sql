/*
Navicat MySQL Data Transfer

Source Server         : myconeccion
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_libros_laravel

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-09 21:33:00
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `paginate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('11', 'kevin', 'java', '120', 'kevin', '100', '2017-03-08 03:25:22', '2017-03-09 22:30:24');
INSERT INTO `books` VALUES ('12', 'php', 'web dev', '210', 'pedro', '2013', '2017-03-08 03:25:27', '2017-03-10 02:32:00');
INSERT INTO `books` VALUES ('14', 'java', 'java 2017', '200', 'kevin', '2017', '2017-03-09 16:18:16', '2017-03-10 02:32:20');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2017_02_28_194827_create_books_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_09_152606_create_agenda', '2');
INSERT INTO `migrations` VALUES ('2017_03_10_020755_create_contacto', '3');
INSERT INTO `migrations` VALUES ('2017_03_10_021125_create_contactos', '4');
