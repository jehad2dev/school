-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-08-15 15:16:11
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

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


-- Dumping structure for table school.competences_sheets
CREATE TABLE IF NOT EXISTS `competences_sheets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sheet_id` smallint(6) NOT NULL DEFAULT '0',
  `competence_id` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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


-- Dumping structure for table school.materials_sheets
CREATE TABLE IF NOT EXISTS `materials_sheets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sheet_id` smallint(6) NOT NULL DEFAULT '0',
  `material_id` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table school.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- Data exporting was unselected.


-- Dumping structure for table school.sheets
CREATE TABLE IF NOT EXISTS `sheets` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `progress` text,
  `comment` text NOT NULL,
  `challenge` text NOT NULL,
  `target` text NOT NULL,
  `learning_axis_id` smallint(4) NOT NULL,
  `evaluation_id` tinyint(4) NOT NULL,
  `competence_id` smallint(4) NOT NULL COMMENT 'Id for the target competence',
  `discipline_id` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_last_modified` timestamp NULL DEFAULT NULL,
  `project_id` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_preparation_learningAxis1` (`learning_axis_id`),
  KEY `fk_preparation_evaluation1` (`evaluation_id`),
  KEY `fk_preparation_competence2` (`competence_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
