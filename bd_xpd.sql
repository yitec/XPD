-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 08-04-2013 a las 16:09:06
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `bd_xpd`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_agenda`
-- 

CREATE TABLE `tbl_agenda` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_usuario` bigint(20) NOT NULL,
  `evento` text collate utf8_spanish_ci NOT NULL,
  `estado` smallint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el control de agendas' AUTO_INCREMENT=20 ;

-- 
-- Volcar la base de datos para la tabla `tbl_agenda`
-- 

INSERT INTO `tbl_agenda` VALUES (1, 1, 'Mon Nov 26 2012 15:45:00 GMT-0600 (Central America Standard Time)/Mon Nov 26 2012 16:45:00 GMT-0600 (Central America Standard Time)/Cita numero 1', 1);
INSERT INTO `tbl_agenda` VALUES (9, 1, 'Tue Nov 27 2012 14:00:00 GMT-0600 (Central America Standard Time)/Tue Nov 27 2012 15:30:00 GMT-0600 (Central America Standard Time)/Test/Alimentación', 1);
INSERT INTO `tbl_agenda` VALUES (11, 1, 'Wed Nov 28 2012 16:30:00 GMT-0600 (Central America Standard Time)/Wed Nov 28 2012 17:00:00 GMT-0600 (Central America Standard Time)/testing 4:30/A 5:30', 1);
INSERT INTO `tbl_agenda` VALUES (12, 1, 'Tue Nov 27 2012 16:00:00 GMT-0600 (Central America Standard Time)/Tue Nov 27 2012 16:30:00 GMT-0600 (Central America Standard Time)/Tildes/Tildes áéíóú', 1);
INSERT INTO `tbl_agenda` VALUES (13, 1, 'Wed Nov 28 2012 15:45:00 GMT-0600 (Central America Standard Time)/Wed Nov 28 2012 16:15:00 GMT-0600 (Central America Standard Time)/áéíóí/á´séíó', 1);
INSERT INTO `tbl_agenda` VALUES (14, 1, 'Mon Dec 17 2012 13:45:00 GMT-0600 (Central America Standard Time)/Mon Dec 17 2012 14:15:00 GMT-0600 (Central America Standard Time)//', 1);
INSERT INTO `tbl_agenda` VALUES (15, 1, 'Sat Jan 26 2013 08:45:00 GMT-0600 (Hora estándar, América Central)/Sat Jan 26 2013 09:15:00 GMT-0600 (Hora estándar, América Central)/test/Test', 1);
INSERT INTO `tbl_agenda` VALUES (16, 1, 'Sat Jan 26 2013 10:00:00 GMT-0600/Sat Jan 26 2013 13:00:00 GMT-0600/sdfsdf/dfsdf', 1);
INSERT INTO `tbl_agenda` VALUES (17, 1, 'Sat Mar 09 2013 11:00:00 GMT-0600 (Central America Standard Time)/Sat Mar 09 2013 11:30:00 GMT-0600 (Central America Standard Time)/dfsddf/FGDXFFG', 1);
INSERT INTO `tbl_agenda` VALUES (18, 1, 'Mon Mar 11 2013 10:00:00 GMT-0600 (Central America Standard Time)/Mon Mar 11 2013 12:00:00 GMT-0600 (Central America Standard Time)/Audiencia/Marlen Fuentes', 1);
INSERT INTO `tbl_agenda` VALUES (19, 1, 'Tue Apr 02 2013 08:30:00 GMT-0600 (Central America Standard Time)/Tue Apr 02 2013 12:00:00 GMT-0600 (Central America Standard Time)/Audiencia Preliminar/Caso Amnet', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_archivos`
-- 

CREATE TABLE `tbl_archivos` (
  `id` int(11) NOT NULL auto_increment,
  `id_expediente` bigint(20) NOT NULL,
  `nombre_archivo` varchar(150) collate utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) collate utf8_spanish_ci NOT NULL,
  `fecha_creacion` datetime default NULL,
  `fecha_modificacion` datetime default NULL,
  `id_tipo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Datos de los archivos de expediente' AUTO_INCREMENT=35 ;

-- 
-- Volcar la base de datos para la tabla `tbl_archivos`
-- 

INSERT INTO `tbl_archivos` VALUES (3, 0, '1358205356_Database_1.png', '', '2013-03-01 12:14:39', '2013-03-01 12:14:39', 2, 1, 0);
INSERT INTO `tbl_archivos` VALUES (4, 0, '1358205356_Database_1.png', '', '2013-03-01 12:16:55', '2013-03-01 12:16:55', 1, 1, 0);
INSERT INTO `tbl_archivos` VALUES (5, 0, '1358205356_Database_1.png', '', '2013-03-01 12:22:28', '2013-03-01 12:22:28', 1, 1, 0);
INSERT INTO `tbl_archivos` VALUES (6, 24, '1358205356_Database_1.png', '', '2013-03-01 12:25:10', '2013-03-01 12:25:10', 1, 1, 0);
INSERT INTO `tbl_archivos` VALUES (7, 24, '1358205356_Database_1.png', '', '2013-03-01 16:44:05', '2013-03-01 16:44:05', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (8, 24, '1358205356_Database_1.png', '', '2013-03-01 16:55:14', '2013-03-01 16:55:14', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (9, 24, '1358205356_Database_1.png', '', '2013-03-01 16:56:18', '2013-03-01 16:56:18', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (10, 24, '1358205356_Database_1.png', '', '2013-03-01 16:58:08', '2013-03-01 16:58:08', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (11, 24, '1358205356_Database_1.png', '', '2013-03-01 17:02:36', '2013-03-01 17:02:36', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (12, 24, '1358205356_Database_1.png', '', '2013-03-01 17:03:42', '2013-03-01 17:03:42', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (18, 0, '63224-burning-gundam.jpg', 'Acta Judicial', '2013-03-09 10:16:16', '2013-03-09 10:16:16', 4, 1, 1);
INSERT INTO `tbl_archivos` VALUES (20, 0, '63224-burning-gundam.jpg', 'werwer', '2013-03-09 11:43:21', '2013-03-09 11:43:21', 4, 1, 1);
INSERT INTO `tbl_archivos` VALUES (21, 0, '1280-800-9134.jpg', 'asasd', '2013-03-09 11:44:17', '2013-03-09 11:44:17', 4, 1, 1);
INSERT INTO `tbl_archivos` VALUES (22, 29, '1280-800-9134.jpg', 'asasd', '2013-03-09 11:45:15', '2013-03-09 11:45:15', 4, 1, 1);
INSERT INTO `tbl_archivos` VALUES (23, 29, 'samsho4faqv4.0.pdf', 'asdasd', '2013-03-09 11:47:56', '2013-03-09 11:47:56', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (24, 29, 'listado de tipos analisis.xlsx', 'addasdsa', '2013-03-09 11:59:34', '2013-03-09 11:59:34', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (25, 29, '0031-0007-205243492-0153-F (3).PDF', 'Resolucion de traslado de cargos', '2013-03-09 12:01:48', '2013-03-09 12:01:48', 2, 1, 1);
INSERT INTO `tbl_archivos` VALUES (26, 29, 'Poder Especial Judicial.doc', 'Poder Especial Judicial', '2013-03-09 12:02:25', '2013-03-09 12:02:25', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (27, 30, 'RECURSO DE AMPARO.docx', 'Recurso de amparo', '2013-03-09 12:03:48', '2013-03-09 12:03:48', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (28, 22, 'Poder Especial Judicial.doc', 'Poder Especial', '2013-03-09 17:04:57', '2013-03-09 17:04:57', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (29, 22, 'RECURSO DE AMPARO.docx', 'Recurso de amparo', '2013-03-09 17:10:15', '2013-03-09 17:10:15', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (32, 24, 'Poder Especial Judicial.doc', 'sadsadasdasdsadasdasdsada', '2013-03-09 17:46:08', '2013-03-09 17:46:08', 1, 1, 1);
INSERT INTO `tbl_archivos` VALUES (33, 32, 'Poder Especial Judicial.doc', 'dassdfdfgfgfdg', '2013-03-09 18:07:38', '2013-03-09 18:07:38', 1, 1, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_catexpedientes`
-- 

CREATE TABLE `tbl_catexpedientes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla categorias de expedientes' AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `tbl_catexpedientes`
-- 

INSERT INTO `tbl_catexpedientes` VALUES (1, 'Administrativo', 1);
INSERT INTO `tbl_catexpedientes` VALUES (2, 'Judicial', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_clientes`
-- 

CREATE TABLE `tbl_clientes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(200) collate utf8_spanish_ci NOT NULL,
  `cedula` varchar(25) collate utf8_spanish_ci NOT NULL,
  `email` varchar(150) collate utf8_spanish_ci NOT NULL,
  `id_tipoCliente` int(11) NOT NULL,
  `tel_cel` varchar(25) collate utf8_spanish_ci NOT NULL,
  `tel_fijo` varchar(25) collate utf8_spanish_ci NOT NULL,
  `fax` varchar(25) collate utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) collate utf8_spanish_ci NOT NULL,
  `credito` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de clientes' AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `tbl_clientes`
-- 

INSERT INTO `tbl_clientes` VALUES (1, 'Sergio Barrantes Mizard Zeta.', '4-0175-0575', 'sergio.barrantes@hotmail.com', 0, '84300417', '22395206', '3345435435', 'BelÃƒÂ©n', 1, 1);
INSERT INTO `tbl_clientes` VALUES (2, 'Carlos Ramirez Jimenez', '46576244', 'carlos@carlos.com', 1, '87695403', '22458698', '22314567', 'Tibas', 0, 1);
INSERT INTO `tbl_clientes` VALUES (3, 'Erick Sandi', '2354455455', 'undefined', 0, '88774949', '2235456', '23242342', 'Heredia', 0, 1);
INSERT INTO `tbl_clientes` VALUES (4, 'Rodrigo Chavez', '123123', 'dsfsdf@dsfsd.com', 0, '22322312', '2342342', '32423423', 'Heredia', 0, 1);
INSERT INTO `tbl_clientes` VALUES (5, 'Francisco Gonzales Chaves', '312321321', 'info@sdfsdfds.com', 0, '88734541', '22376789', '225656565', 'San Jose', 0, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_cobros`
-- 

CREATE TABLE `tbl_cobros` (
  `id` bigint(20) NOT NULL auto_increment,
  `id_expediente` bigint(20) NOT NULL,
  `concepto` varchar(150) collate utf8_spanish_ci NOT NULL,
  `monto` bigint(20) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_pago` datetime default NULL,
  `id_tipoPago` int(11) default NULL,
  `id_usuario` int(11) default NULL,
  `estado` tinyint(4) NOT NULL COMMENT '0 pendiente 1 pagado',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el control de cobros' AUTO_INCREMENT=18 ;

-- 
-- Volcar la base de datos para la tabla `tbl_cobros`
-- 

INSERT INTO `tbl_cobros` VALUES (1, 24, '', 50000, '2013-03-08 11:34:27', '0000-00-00 00:00:00', 1, NULL, 0);
INSERT INTO `tbl_cobros` VALUES (2, 24, '', 33000, '2013-03-08 11:34:46', '0000-00-00 00:00:00', 2, NULL, 0);
INSERT INTO `tbl_cobros` VALUES (3, 24, 'Honorarios', 0, '2013-03-08 15:37:21', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (4, 24, 'Honorarios', 0, '2013-03-08 15:41:02', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (5, 24, 'Honorarios', 0, '2013-03-08 15:42:27', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (6, 27, 'Honorarios', 0, '2013-03-08 15:42:54', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (7, 22, 'Honorarios', 0, '2013-03-08 15:43:37', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (8, 22, 'Honorarios', 0, '2013-03-08 15:46:40', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (9, 27, 'Honorarios', 0, '2013-03-08 15:48:23', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (10, 22, 'Honorarios', 0, '2013-03-08 15:50:33', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (11, 27, 'Honorarios Semanales', 0, '2013-03-08 15:54:03', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (12, 27, 'Honorarios casa', 12312321, '2013-03-08 15:54:53', NULL, NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (13, 24, 'Adelanto', 356777, '2013-03-08 16:38:30', NULL, NULL, 1, 0);
INSERT INTO `tbl_cobros` VALUES (14, 22, 'Honorarios', 454566, '2013-03-09 10:18:02', '2013-04-05 00:54:59', NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (15, 30, 'Honarios de Enero', 80000, '2013-03-09 12:06:57', NULL, NULL, 1, 0);
INSERT INTO `tbl_cobros` VALUES (16, 32, 'Honorarios Marzo', 50000, '2013-04-05 22:25:41', '2013-04-05 22:25:52', NULL, 1, 1);
INSERT INTO `tbl_cobros` VALUES (17, 32, 'Honorarios Abril', 78000, '2013-04-05 22:26:16', '2013-04-05 22:26:25', NULL, 1, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_expedientes`
-- 

CREATE TABLE `tbl_expedientes` (
  `id` int(11) NOT NULL auto_increment,
  `numero` varchar(100) collate utf8_spanish_ci NOT NULL,
  `titulo` varchar(150) collate utf8_spanish_ci NOT NULL,
  `id_tipoExpediente` int(11) default NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `numero` (`numero`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=33 ;

-- 
-- Volcar la base de datos para la tabla `tbl_expedientes`
-- 

INSERT INTO `tbl_expedientes` VALUES (1, 'SER-23345', '', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (2, 'asdaf', '', 2, '2013-01-31 13:30:27', '2013-01-31 13:30:27', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (4, 'SER-456565', '', 2, '2013-01-31 13:49:03', '2013-01-31 13:49:03', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (5, 'SER-5456', '', 1, '2013-01-31 13:50:43', '2013-01-31 13:50:43', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (6, '123456', '', 1, '2013-01-31 14:58:19', '2013-01-31 14:58:19', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (7, '1234567', '', 1, '2013-01-31 15:24:24', '2013-01-31 15:24:24', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (8, '12345678', '', 1, '2013-01-31 15:40:07', '2013-01-31 15:40:07', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (9, 'SER12345678', '', 1, '2013-02-01 11:52:44', '2013-02-01 11:52:44', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (10, 'SER-6767867', '', 1, '2013-02-01 11:54:37', '2013-02-01 11:54:37', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (11, 'Ser-12312321', '', 1, '2013-02-01 11:56:12', '2013-02-01 11:56:12', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (12, 'Seert-2155435', '', 1, '2013-02-01 11:58:24', '2013-02-01 11:58:24', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (13, 'sdfsdfsdf', '', 1, '2013-02-01 11:59:06', '2013-02-01 11:59:06', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (14, 'asd12321', '', 1, '2013-02-01 12:03:37', '2013-02-01 12:03:37', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (15, '5456456', '', 1, '2013-02-01 12:21:04', '2013-02-01 12:21:04', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (16, 'gfhf65765', '', 1, '2013-02-01 12:34:16', '2013-02-01 12:34:16', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (17, 'sdgfg435', '', 1, '2013-02-01 15:35:12', '2013-02-01 15:35:12', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (18, 'sdgdf21213', '', 1, '2013-02-01 15:38:59', '2013-02-01 15:38:59', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (19, 'ewrewrwerwer', '', 1, '2013-02-01 17:43:59', '2013-02-01 17:43:59', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (20, 'ssfsdfdf6', '', 1, '2013-02-01 17:45:40', '2013-02-01 17:45:40', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (21, 'sdfsdfsdf676', '', 1, '2013-02-01 17:47:03', '2013-02-01 17:47:03', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (22, '23343423', 'Caso Divorcio', 1, '2013-02-05 16:31:20', '2013-02-05 16:31:20', 1, 1, 1);
INSERT INTO `tbl_expedientes` VALUES (23, 'dsffdgfdg', '', 1, '2013-02-05 16:33:59', '2013-02-05 16:33:59', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (24, '23554354', 'Caso Demanda Laboral', 1, '2013-02-05 16:35:54', '2013-02-05 16:35:54', 1, 1, 1);
INSERT INTO `tbl_expedientes` VALUES (25, '12345670', '', 2, '2013-03-07 17:09:25', '2013-03-07 17:09:25', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (26, '123123', 'Caso Fincas', 2, '2013-03-07 17:13:31', '2013-03-07 17:13:31', 1, 0, 1);
INSERT INTO `tbl_expedientes` VALUES (27, '3456756', 'Caso casa', 2, '2013-03-08 09:30:21', '2013-03-08 09:30:21', 1, 1, 1);
INSERT INTO `tbl_expedientes` VALUES (28, '12312312', 'Caso Infedilidad', 1, '2013-03-09 10:15:51', '2013-03-09 10:15:51', 1, 4, 1);
INSERT INTO `tbl_expedientes` VALUES (29, '123213', 'sarsdf', 1, '2013-03-09 11:44:05', '2013-03-09 11:44:05', 1, 4, 1);
INSERT INTO `tbl_expedientes` VALUES (30, '13-002180-0007-CO', 'Recurso de Amparo-Petición', 2, '2013-03-09 11:58:54', '2013-03-09 11:58:54', 1, 5, 1);
INSERT INTO `tbl_expedientes` VALUES (31, '13213123', 'Recurso de amparo', 2, '2013-03-09 17:17:00', '2013-03-09 17:17:00', 1, 5, 1);
INSERT INTO `tbl_expedientes` VALUES (32, '435435345', 'Testing', 1, '2013-03-09 18:07:03', '2013-03-09 18:07:03', 1, 3, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_reportes`
-- 

CREATE TABLE `tbl_reportes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `link` varchar(100) collate utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el control de los reportes' AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `tbl_reportes`
-- 

INSERT INTO `tbl_reportes` VALUES (1, 'Cobros pendientes', 'listado_cobros.php', 1);
INSERT INTO `tbl_reportes` VALUES (2, 'Total expedientes', 'total_expedientes.php', 1);
INSERT INTO `tbl_reportes` VALUES (3, 'Pagos entre fechas', 'mpagos_fechas', 1);
INSERT INTO `tbl_reportes` VALUES (4, 'Listado de clientes', 'listado_clientes.php', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_tipoarchivo`
-- 

CREATE TABLE `tbl_tipoarchivo` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla tipos de archivos que se puede subir' AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `tbl_tipoarchivo`
-- 

INSERT INTO `tbl_tipoarchivo` VALUES (1, 'Excel', 1);
INSERT INTO `tbl_tipoarchivo` VALUES (2, 'Word', 1);
INSERT INTO `tbl_tipoarchivo` VALUES (3, 'Texto', 1);
INSERT INTO `tbl_tipoarchivo` VALUES (4, 'Video', 1);
INSERT INTO `tbl_tipoarchivo` VALUES (5, 'Audio', 1);
INSERT INTO `tbl_tipoarchivo` VALUES (6, 'Pdf', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_tipocliente`
-- 

CREATE TABLE `tbl_tipocliente` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla con los tipos de clientes' AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tbl_tipocliente`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_tipoexpedientes`
-- 

CREATE TABLE `tbl_tipoexpedientes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla tipos de expedientes' AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `tbl_tipoexpedientes`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_tipopago`
-- 

CREATE TABLE `tbl_tipopago` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(100) collate utf8_spanish_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `tbl_tipopago`
-- 

INSERT INTO `tbl_tipopago` VALUES (1, 'Contado', 1);
INSERT INTO `tbl_tipopago` VALUES (2, 'Tarjeta', 1);
INSERT INTO `tbl_tipopago` VALUES (3, 'Tarjeta', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_usuarios`
-- 

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `ids_accesos` varchar(100) collate utf8_spanish_ci default NULL,
  `ids_reportes` varchar(100) collate utf8_spanish_ci default NULL,
  `cedula` varchar(50) collate utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) collate utf8_spanish_ci NOT NULL,
  `apellidos` varchar(150) collate utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) collate utf8_spanish_ci NOT NULL,
  `clave` varchar(20) collate utf8_spanish_ci NOT NULL,
  `correo` varchar(150) collate utf8_spanish_ci default NULL,
  `telefono` varchar(25) collate utf8_spanish_ci NOT NULL,
  `fecha_vencimiento` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla para el control de usuario' AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `tbl_usuarios`
-- 

INSERT INTO `tbl_usuarios` VALUES (1, '0/1/3/5/6', '0/1/2/3/4', '4-175-575', 'Sergio', 'Barrantes Mizard Zeta', 'sid', 'mizard777', 'sbarrantes@yitec.net', '88300417', '2020-01-22 15:38:21', 1);
INSERT INTO `tbl_usuarios` VALUES (2, '', '', '234234', 'Carlo ', 'Magno', 'carlo', 'carlo123', '', '', '0000-00-00 00:00:00', 1);
INSERT INTO `tbl_usuarios` VALUES (3, NULL, NULL, '123123', 'Mario', 'Jimenez', 'mario', 'mario1233', NULL, '', '0000-00-00 00:00:00', 1);
INSERT INTO `tbl_usuarios` VALUES (4, NULL, NULL, '21321', 'asdsad', 'asd', 'safdsdf', 'sdfsdf', NULL, '', '0000-00-00 00:00:00', 1);
