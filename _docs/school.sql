-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.8-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4160
-- Date/time:                    2012-08-03 14:29:24
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for school
CREATE DATABASE IF NOT EXISTS `school` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `school`;


-- Dumping structure for table school.competences
CREATE TABLE IF NOT EXISTS `competences` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(9) DEFAULT '0',
  `name` varchar(99) NOT NULL DEFAULT '0',
  `lft` tinyint(4) NOT NULL DEFAULT '0',
  `rght` tinyint(4) NOT NULL DEFAULT '0',
  `discipline_id` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table school.disciplines
CREATE TABLE IF NOT EXISTS `disciplines` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table school.evaluations
CREATE TABLE IF NOT EXISTS `evaluations` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table school.learning_axes
CREATE TABLE IF NOT EXISTS `learning_axes` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table school.materials
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table school.sheets
CREATE TABLE IF NOT EXISTS `sheets` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `progress` text,
  `development` text NOT NULL,
  `teacher_task` text NOT NULL,
  `target` text NOT NULL,
  `learningAxis_id` smallint(4) NOT NULL,
  `evaluation_id` tinyint(1) unsigned zerofill DEFAULT NULL,
  `target_competence` smallint(4) unsigned zerofill NOT NULL,
  `discipline_id` tinyint(4) NOT NULL,
  `used_competence_list_id` text COMMENT 'List of competence used (in serialized array)',
  `material_list_id` text COMMENT 'List of material used (in serialized array)',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_last_modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_preparation_learningAxis1` (`learningAxis_id`),
  KEY `fk_preparation_evaluation1` (`evaluation_id`),
  KEY `fk_preparation_competence2` (`target_competence`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
