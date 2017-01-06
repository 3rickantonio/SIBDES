-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2016 a las 19:02:57
-- Versión del servidor: 5.1.73
-- Versión de PHP: 5.3.2-1ubuntu4.25

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bsangre`
--
CREATE DATABASE `bsangre` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bsangre`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliacion`
--

CREATE TABLE IF NOT EXISTS `afiliacion` (
  `nombre` varchar(45) NOT NULL DEFAULT '',
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `afiliacion`
--

INSERT INTO `afiliacion` (`nombre`, `id`) VALUES
('AFILIADO', 2),
('MILITAR', 1),
('NO AFILIADO', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `nombre` varchar(45) NOT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `area`
--

INSERT INTO `area` (`nombre`, `id`) VALUES
('Banco de Sangre', 1),
('Emergencia Adulto ', 2),
('Emergencia Obstetrica', 4),
('Emergencia Pediatrica', 3),
('Hospitalización Adulto ', 7),
('Hospitalización Obstetrica', 5),
('Hospitalización Pediatrica', 6),
('Quirofano', 10),
('Sala de yeso', 8),
('Soporte Avanzado', 9),
('Telemática', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bioanalista`
--

CREATE TABLE IF NOT EXISTS `bioanalista` (
  `nombre1` varchar(15) DEFAULT NULL,
  `nombre2` varchar(15) DEFAULT NULL,
  `apellido1` varchar(15) DEFAULT NULL,
  `apellido2` varchar(15) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` varchar(19) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `valido` varchar(45) DEFAULT 'ACTIVO',
  `area_nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `fk_bioanalista_area1_idx` (`area_nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `bioanalista`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsa`
--

CREATE TABLE IF NOT EXISTS `bolsa` (
  `id` varchar(45) NOT NULL,
  `anno` varchar(45) NOT NULL,
  `serial` varchar(45) NOT NULL,
  `segmento` varchar(45) NOT NULL,
  `fecha_extraccion` date DEFAULT NULL,
  `tipo_hemocomponente` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `grupo` varchar(45) DEFAULT NULL,
  `factor_rh` varchar(45) DEFAULT NULL,
  `aceptacion` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `donante_cedula` int(11) NOT NULL,
  PRIMARY KEY (`id`,`anno`,`serial`,`segmento`),
  UNIQUE KEY `segmento_UNIQUE` (`segmento`),
  KEY `fk_bolsa_donante1_idx` (`donante_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `bolsa`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cont_tranf_prep`
--

CREATE TABLE IF NOT EXISTS `cont_tranf_prep` (
  `tipo_hemocomponente` varchar(30) DEFAULT NULL,
  `cantidad` varchar(6) DEFAULT NULL,
  `p_cruzada` varchar(8) DEFAULT NULL,
  `fecha_extraccion` date DEFAULT NULL,
  `entrega` varchar(2) DEFAULT NULL,
  `paciente_cedula` int(10) unsigned NOT NULL,
  `donante_cedula` int(11) NOT NULL,
  `grupo_sanguineo` varchar(45) DEFAULT NULL,
  `factor_rh` varchar(45) DEFAULT NULL,
  `segmento` varchar(45) NOT NULL,
  KEY `fk_cont_tranf_prep_paciente1_idx` (`paciente_cedula`),
  KEY `fk_cont_tranf_prep_donante1_idx` (`donante_cedula`),
  KEY `fk_cont_tranf_prep_bolsa1_idx` (`segmento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `cont_tranf_prep`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_donante`
--

CREATE TABLE IF NOT EXISTS `control_donante` (
  `serial` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `afavorde` varchar(45) DEFAULT NULL,
  `area_nombre` varchar(45) NOT NULL,
  `donante_cedula` int(11) NOT NULL,
  PRIMARY KEY (`serial`),
  KEY `fk_control_donante_area1_idx` (`area_nombre`),
  KEY `fk_control_donante_donante1_idx` (`donante_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `control_donante`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_tipeaje`
--

CREATE TABLE IF NOT EXISTS `control_tipeaje` (
  `cedula` int(11) NOT NULL,
  `nombre1` varchar(45) DEFAULT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `telefono` varchar(19) DEFAULT NULL,
  `grupo_sanguineo` varchar(45) DEFAULT NULL,
  `factor_rh` varchar(45) DEFAULT NULL,
  `du` varchar(45) DEFAULT NULL,
  `cd` varchar(45) DEFAULT NULL,
  `pantalla1` varchar(45) DEFAULT NULL,
  `pantalla2` varchar(45) DEFAULT NULL,
  `pantalla3` varchar(45) DEFAULT NULL,
  `pantalla4` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `recibe` varchar(45) DEFAULT NULL,
  `area_nombre` varchar(45) NOT NULL,
  `afiliacion_nombre` varchar(45) NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `fk_control_tipeaje_area1_idx` (`area_nombre`),
  KEY `fk_control_tipeaje_afiliacion1_idx` (`afiliacion_nombre`),
  KEY `fk_control_tipeaje_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `control_tipeaje`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donante`
--

CREATE TABLE IF NOT EXISTS `donante` (
  `nombre1` varchar(15) DEFAULT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(15) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` varchar(19) DEFAULT NULL,
  `telefono_hab` varchar(19) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `validacion` varchar(45) DEFAULT 'ACTIVO',
  `afiliacion_nombre` varchar(45) NOT NULL,
  `comentarios` varchar(45) DEFAULT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cedula`),
  KEY `fk_donante_afiliacion1_idx` (`afiliacion_nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `donante`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hemoterapista`
--

CREATE TABLE IF NOT EXISTS `hemoterapista` (
  `nombre1` varchar(15) DEFAULT NULL,
  `nombre2` varchar(15) DEFAULT NULL,
  `apellido1` varchar(15) DEFAULT NULL,
  `apellido2` varchar(15) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `cedula` int(11) NOT NULL,
  `telefono` varchar(19) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `valido` varchar(45) DEFAULT 'ACTIVO',
  `area_nombre` varchar(45) NOT NULL,
  PRIMARY KEY (`cedula`),
  KEY `fk_bioanalista_area1_idx` (`area_nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `hemoterapista`
--

INSERT INTO `hemoterapista` (`nombre1`, `nombre2`, `apellido1`, `apellido2`, `sexo`, `fecha_nacimiento`, `cedula`, `telefono`, `direccion`, `valido`, `area_nombre`) VALUES
('LEIBA', 'ROSSEMARY', 'SEQUERA', 'MOSQUERA', 'FEMENINO', '1978-09-28', 14335117, '(', 'BARQUISIMETO EDO.LARA', 'ACTIVO', 'BANCO DE SANGRE'),
('ROSA', 'CAROLINA', 'PEDROZA', 'AULAR', 'FEMENINO', '1979-10-12', 14444167, '(', 'CARACAS DTTO CAPITAL', NULL, 'BANCO DE SANGRE'),
('FRANCY', 'DECIRE', 'LOBO', 'RAMIREZ', 'FEMENINO', '1984-11-28', 16822674, '(', 'BARQUISIMETO EDO.LARA', NULL, 'BANCO DE SANGRE'),
('ELISMARY', 'YOSELYN', 'PONCE', 'NIETO', 'FEMENINO', '1985-03-10', 18136230, '(', 'BARQUISIMETO EDO LARA', NULL, 'BANCO DE SANGRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `nombre1` varchar(15) DEFAULT NULL,
  `nombre2` varchar(15) DEFAULT NULL,
  `apellido1` varchar(15) DEFAULT NULL,
  `apellido2` varchar(15) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `cedula` int(11) unsigned NOT NULL,
  `telefono` varchar(19) DEFAULT NULL,
  `telefono_hab` varchar(19) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `afiliacion_nombre` varchar(45) NOT NULL,
  `comentarios` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cedula`),
  KEY `fk_paciente_afiliacion1_idx` (`afiliacion_nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `paciente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas_donante`
--

CREATE TABLE IF NOT EXISTS `pantallas_donante` (
  `fecha` date DEFAULT NULL,
  `pantalla1` varchar(19) DEFAULT NULL,
  `pantalla2` varchar(19) DEFAULT NULL,
  `pantalla3` varchar(19) DEFAULT NULL,
  `pantalla4` varchar(19) DEFAULT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  `donante_cedula` int(11) NOT NULL,
  UNIQUE KEY `donante_cedula` (`donante_cedula`),
  KEY `fk_pantallas_paciente_hemoterapista1_idx` (`hemoterapista_cedula`),
  KEY `fk_pantallas_donante_donante1_idx` (`donante_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pantallas_donante`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas_donante_historia`
--

CREATE TABLE IF NOT EXISTS `pantallas_donante_historia` (
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `pantalla1` varchar(19) DEFAULT NULL,
  `pantalla2` varchar(19) DEFAULT NULL,
  `pantalla3` varchar(19) DEFAULT NULL,
  `pantalla4` varchar(19) DEFAULT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  `donante_cedula` int(11) NOT NULL,
  PRIMARY KEY (`fecha`),
  KEY `fk_pantallas_paciente_hemoterapista1_idx` (`hemoterapista_cedula`),
  KEY `fk_pantallas_donante_donante1_idx` (`donante_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pantallas_donante_historia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas_paciente`
--

CREATE TABLE IF NOT EXISTS `pantallas_paciente` (
  `fecha` date DEFAULT NULL,
  `pantalla1` varchar(19) DEFAULT NULL,
  `pantalla2` varchar(19) DEFAULT NULL,
  `pantalla3` varchar(19) DEFAULT NULL,
  `pantalla4` varchar(19) DEFAULT NULL,
  `paciente_cedula` int(10) unsigned NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  UNIQUE KEY `paciente_cedula` (`paciente_cedula`),
  KEY `fk_pantallas_paciente_paciente1_idx` (`paciente_cedula`),
  KEY `fk_pantallas_paciente_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pantallas_paciente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantallas_paciente_historia`
--

CREATE TABLE IF NOT EXISTS `pantallas_paciente_historia` (
  `fecha` date NOT NULL,
  `pantalla1` varchar(19) DEFAULT NULL,
  `pantalla2` varchar(19) DEFAULT NULL,
  `pantalla3` varchar(19) DEFAULT NULL,
  `pantalla4` varchar(19) DEFAULT NULL,
  `paciente_cedula` int(10) unsigned NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  PRIMARY KEY (`fecha`),
  KEY `fk_pantallas_paciente_paciente1_idx` (`paciente_cedula`),
  KEY `fk_pantallas_paciente_historia_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pantallas_paciente_historia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_donante`
--

CREATE TABLE IF NOT EXISTS `pc_donante` (
  `fecha` date DEFAULT NULL,
  `du` varchar(19) DEFAULT NULL,
  `cd` varchar(19) DEFAULT NULL,
  `factor_rh` varchar(19) DEFAULT NULL,
  `grupo_sanguineo` varchar(19) DEFAULT NULL,
  `t_prueba` varchar(19) DEFAULT 'INMUNOHEMATOLOGICOS',
  `donante_cedula` int(11) NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  UNIQUE KEY `donante_cedula_UNIQUE` (`donante_cedula`),
  KEY `fk_pc_donante_donante1_idx` (`donante_cedula`),
  KEY `fk_pc_donante_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pc_donante`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_donante_historia`
--

CREATE TABLE IF NOT EXISTS `pc_donante_historia` (
  `fecha` date NOT NULL,
  `du` varchar(19) DEFAULT NULL,
  `cd` varchar(19) DEFAULT NULL,
  `factor_rh` varchar(19) DEFAULT NULL,
  `grupo_sanguineo` varchar(19) DEFAULT NULL,
  `t_prueba` varchar(19) DEFAULT 'INMUNOHEMATOLOGICOS',
  `donante_cedula` int(11) NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  PRIMARY KEY (`fecha`),
  KEY `fk_pc_donante_donante1_idx` (`donante_cedula`),
  KEY `fk_pc_donante_historia_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pc_donante_historia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_paciente`
--

CREATE TABLE IF NOT EXISTS `pc_paciente` (
  `fecha` date DEFAULT NULL,
  `grupo_sanguineo` varchar(19) DEFAULT NULL,
  `factor_rh` varchar(19) DEFAULT NULL,
  `du` varchar(19) DEFAULT NULL,
  `cd` varchar(19) DEFAULT NULL,
  `t_prueba` varchar(19) DEFAULT 'INMUNOHEMATOLOGICOS',
  `paciente_cedula` int(10) unsigned NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  UNIQUE KEY `paciente_cedula` (`paciente_cedula`),
  KEY `fk_pc_paciente_paciente1_idx` (`paciente_cedula`),
  KEY `fk_pc_paciente_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pc_paciente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pc_paciente_historia`
--

CREATE TABLE IF NOT EXISTS `pc_paciente_historia` (
  `fecha` date NOT NULL,
  `grupo_sanguineo` varchar(19) DEFAULT NULL,
  `factor_rh` varchar(19) DEFAULT NULL,
  `du` varchar(19) DEFAULT NULL,
  `cd` varchar(19) DEFAULT NULL,
  `t_prueba` varchar(19) DEFAULT 'INMUNOHEMATOLOGICOS',
  `paciente_cedula` int(10) unsigned NOT NULL,
  `hemoterapista_cedula` int(11) NOT NULL,
  PRIMARY KEY (`fecha`),
  KEY `fk_pc_paciente_paciente1_idx` (`paciente_cedula`),
  KEY `fk_pc_paciente_hemoterapista1_idx` (`hemoterapista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `pc_paciente_historia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_donante`
--

CREATE TABLE IF NOT EXISTS `ps_donante` (
  `fecha` date DEFAULT NULL,
  `hcv` varchar(19) DEFAULT NULL COMMENT 'hepatitis c',
  `hiv` varchar(19) DEFAULT NULL COMMENT 'sida',
  `sifilis` varchar(19) DEFAULT NULL COMMENT 'sifilis',
  `ahbc` varchar(19) DEFAULT NULL COMMENT 'epatitis',
  `htlv` varchar(19) DEFAULT NULL,
  `chagas` varchar(19) DEFAULT NULL,
  `hbsag` varchar(19) DEFAULT NULL,
  `t_prueba` varchar(19) DEFAULT 'INMUNOHEMATOLOGICOS',
  `donante_cedula` int(11) NOT NULL,
  `bioanalista_cedula` int(11) NOT NULL,
  UNIQUE KEY `donante_cedula_UNIQUE` (`donante_cedula`),
  KEY `fk_ps_donante_donante1_idx` (`donante_cedula`),
  KEY `fk_ps_donante_bioanalista1_idx` (`bioanalista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `ps_donante`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ps_donante_historia`
--

CREATE TABLE IF NOT EXISTS `ps_donante_historia` (
  `fecha` date NOT NULL,
  `hcv` varchar(19) DEFAULT NULL COMMENT 'hepatitis c',
  `hiv` varchar(19) DEFAULT NULL COMMENT 'sida',
  `sifilis` varchar(19) DEFAULT NULL COMMENT 'sifilis',
  `ahbc` varchar(19) DEFAULT NULL COMMENT 'epatitis',
  `htlv` varchar(19) DEFAULT NULL,
  `chagas` varchar(19) DEFAULT NULL,
  `hbsag` varchar(19) DEFAULT NULL,
  `t_prueba` varchar(19) DEFAULT 'INMUNOHEMATOLOGICOS',
  `donante_cedula` int(11) NOT NULL,
  `bioanalista_cedula` int(11) NOT NULL,
  PRIMARY KEY (`fecha`),
  KEY `fk_ps_donante_donante1_idx` (`donante_cedula`),
  KEY `fk_ps_donante_bioanalista1_idx` (`bioanalista_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `ps_donante_historia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombresyapellidos` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` char(128) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `valido` varchar(12) DEFAULT 'INACTIVO',
  `departamento` varchar(40) DEFAULT 'NO DEFINIDO',
  `sexo` char(28) DEFAULT 'NO DEFINIDO',
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombresyapellidos`, `username`, `password`, `fecha`, `valido`, `departamento`, `sexo`, `telefono`) VALUES
(1, 'Marni Perozo', 'mperozo', '-***/1c3t1m2l2t@l13cn2ts3s1/***-', '2016-05-10', 'ACTIVO', 'NO DEFINIDO', 'FEMENINO', '04120578902'),
(2, 'PTTE JESSIKA DUN ', 'jdun', '123', '2016-05-10', 'ACTIVO', 'JEFE DEL AREA DE BANCO DE SANGRE', 'FEMENINO', ''),
(3, 'PTTE WALLY  CASTAÃ‘EDA', 'wcastaÃ±eda', '123', '2016-05-10', 'ACTIVO', 'COORDINADORA DE BANCO DE SANGRE', 'NO DEFINIDO', ''),
(4, 'LCDA ELISMARY PONCE ', 'eponce', '123', '2016-05-10', 'ACTIVO', 'HEMOTERAPISTA', 'NO DEFINIDO', ''),
(5, 'LCDA ROSA PEDROZA', 'rpedroza', '123', '2016-05-10', 'ACTIVO', 'HEMOTERAPISTA', 'NO DEFINIDO', ''),
(6, 'LCDA FRANCY LOBO', 'flobo', '123', '2016-05-10', 'ACTIVO', 'HEMOTERAPISTA', 'NO DEFINIDO', ''),
(7, 'LCDA LEIBA SEQUERA', 'lsequera', '123', '2016-05-10', 'ACTIVO', 'HEMOTERAPISTA', 'NO DEFINIDO', ''),
(8, 'LCDA NOVELY FRANCO', 'nfranco', '123', '2016-05-10', 'ACTIVO', 'HEMOTERAPISTA', 'NO DEFINIDO', ''),
(9, 'LCDA MARIA MORENO', 'mmoreno', '123', '2016-05-10', 'ACTIVO', 'HEMOTERAPISTA', 'NO DEFINIDO', ''),
(10, 'TTE ANGELVIS ARAUJO', 'avisaraujo', '123', '2016-05-10', 'ACTIVO', 'BIOANALISTA', 'NO DEFINIDO', ''),
(11, 'LCDA INES ACEVEDO', 'iacevedo', '123', '2016-05-10', 'ACTIVO', 'BIOANALISTA', 'NO DEFINIDO', ''),
(12, 'LCDA MARIA SOTILLO', 'msotillo', '123', '2016-05-10', 'ACTIVO', 'BIOANALISTA', 'NO DEFINIDO', ''),
(13, 'Usuario Pasante', 'pasante', '5511595', '2016-05-09', 'ACTIVO', 'SOPORTE', 'MASCULINO', '04264095872');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `bioanalista`
--
ALTER TABLE `bioanalista`
  ADD CONSTRAINT `fk_bioanalista_area1` FOREIGN KEY (`area_nombre`) REFERENCES `area` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `bolsa`
--
ALTER TABLE `bolsa`
  ADD CONSTRAINT `fk_bolsa_donante1` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cont_tranf_prep`
--
ALTER TABLE `cont_tranf_prep`
  ADD CONSTRAINT `fk_cont_tranf_prep_bolsa1` FOREIGN KEY (`segmento`) REFERENCES `bolsa` (`segmento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cont_tranf_prep_donante1` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cont_tranf_prep_paciente1` FOREIGN KEY (`paciente_cedula`) REFERENCES `paciente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `control_donante`
--
ALTER TABLE `control_donante`
  ADD CONSTRAINT `fk_control_donante_area1` FOREIGN KEY (`area_nombre`) REFERENCES `area` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_control_donante_donante1` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `control_tipeaje`
--
ALTER TABLE `control_tipeaje`
  ADD CONSTRAINT `fk_control_tipeaje_afiliacion1` FOREIGN KEY (`afiliacion_nombre`) REFERENCES `afiliacion` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_control_tipeaje_area1` FOREIGN KEY (`area_nombre`) REFERENCES `area` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_control_tipeaje_hemoterapista1` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donante`
--
ALTER TABLE `donante`
  ADD CONSTRAINT `fk_donante_afiliacion1` FOREIGN KEY (`afiliacion_nombre`) REFERENCES `afiliacion` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `hemoterapista`
--
ALTER TABLE `hemoterapista`
  ADD CONSTRAINT `fk_bioanalista_area10` FOREIGN KEY (`area_nombre`) REFERENCES `area` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_paciente_afiliacion1` FOREIGN KEY (`afiliacion_nombre`) REFERENCES `afiliacion` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pantallas_donante`
--
ALTER TABLE `pantallas_donante`
  ADD CONSTRAINT `fk_pantallas_donante_donante1` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pantallas_paciente_hemoterapista10` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pantallas_donante_historia`
--
ALTER TABLE `pantallas_donante_historia`
  ADD CONSTRAINT `fk_pantallas_donante_donante10` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pantallas_paciente_hemoterapista100` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pantallas_paciente`
--
ALTER TABLE `pantallas_paciente`
  ADD CONSTRAINT `fk_pantallas_paciente_hemoterapista1` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pantallas_paciente_paciente1` FOREIGN KEY (`paciente_cedula`) REFERENCES `paciente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pantallas_paciente_historia`
--
ALTER TABLE `pantallas_paciente_historia`
  ADD CONSTRAINT `fk_pantallas_paciente_historia_hemoterapista1` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pantallas_paciente_paciente10` FOREIGN KEY (`paciente_cedula`) REFERENCES `paciente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pc_donante`
--
ALTER TABLE `pc_donante`
  ADD CONSTRAINT `fk_pc_donante_donante1` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pc_donante_hemoterapista1` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pc_donante_historia`
--
ALTER TABLE `pc_donante_historia`
  ADD CONSTRAINT `fk_pc_donante_donante10` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pc_donante_historia_hemoterapista1` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pc_paciente`
--
ALTER TABLE `pc_paciente`
  ADD CONSTRAINT `fk_pc_paciente_hemoterapista1` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pc_paciente_paciente1` FOREIGN KEY (`paciente_cedula`) REFERENCES `paciente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pc_paciente_historia`
--
ALTER TABLE `pc_paciente_historia`
  ADD CONSTRAINT `fk_pc_paciente_hemoterapista10` FOREIGN KEY (`hemoterapista_cedula`) REFERENCES `hemoterapista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pc_paciente_paciente10` FOREIGN KEY (`paciente_cedula`) REFERENCES `paciente` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ps_donante`
--
ALTER TABLE `ps_donante`
  ADD CONSTRAINT `fk_ps_donante_bioanalista1` FOREIGN KEY (`bioanalista_cedula`) REFERENCES `bioanalista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ps_donante_donante1` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ps_donante_historia`
--
ALTER TABLE `ps_donante_historia`
  ADD CONSTRAINT `fk_ps_donante_bioanalista10` FOREIGN KEY (`bioanalista_cedula`) REFERENCES `bioanalista` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ps_donante_donante10` FOREIGN KEY (`donante_cedula`) REFERENCES `donante` (`cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;
