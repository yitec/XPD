-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 31, 2012 at 08:28 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `bd_xpd`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_agenda`
-- 

CREATE TABLE `tbl_agenda` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_usuario` bigint(20) NOT NULL,
  `evento` text collate utf8_spanish_ci NOT NULL,
  `estado` smallint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el control de agendas' AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `tbl_agenda`
-- 

INSERT INTO `tbl_agenda` VALUES (1, 1, 'Mon Nov 26 2012 15:45:00 GMT-0600 (Central America Standard Time)/Mon Nov 26 2012 16:45:00 GMT-0600 (Central America Standard Time)/Cita numero 1', 1);
INSERT INTO `tbl_agenda` VALUES (9, 1, 'Tue Nov 27 2012 14:00:00 GMT-0600 (Central America Standard Time)/Tue Nov 27 2012 15:30:00 GMT-0600 (Central America Standard Time)/Test/Alimentación', 1);
INSERT INTO `tbl_agenda` VALUES (11, 1, 'Wed Nov 28 2012 16:30:00 GMT-0600 (Central America Standard Time)/Wed Nov 28 2012 17:00:00 GMT-0600 (Central America Standard Time)/testing 4:30/A 5:30', 1);
INSERT INTO `tbl_agenda` VALUES (12, 1, 'Tue Nov 27 2012 16:00:00 GMT-0600 (Central America Standard Time)/Tue Nov 27 2012 16:30:00 GMT-0600 (Central America Standard Time)/Tildes/Tildes áéíóú', 1);
INSERT INTO `tbl_agenda` VALUES (13, 1, 'Wed Nov 28 2012 15:45:00 GMT-0600 (Central America Standard Time)/Wed Nov 28 2012 16:15:00 GMT-0600 (Central America Standard Time)/áéíóí/á´séíó', 1);
INSERT INTO `tbl_agenda` VALUES (14, 1, 'Mon Dec 17 2012 13:45:00 GMT-0600 (Central America Standard Time)/Mon Dec 17 2012 14:15:00 GMT-0600 (Central America Standard Time)//', 1);
