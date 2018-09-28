-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-11-2014 a las 22:25:55
-- Versión del servidor: 5.1.53
-- Versión de PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `redhistal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_noticias`
--

CREATE TABLE IF NOT EXISTS `det_noticias` (
  `id_detnot` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_img` varchar(100) DEFAULT NULL,
  `ruta_txt` varchar(100) DEFAULT NULL,
  `fecha` varchar(20) NOT NULL,
  `id_not` int(11) NOT NULL,
  PRIMARY KEY (`id_detnot`),
  KEY `FK_noticias` (`id_not`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `det_noticias`
--

INSERT INTO `det_noticias` (`id_detnot`, `ruta_img`, `ruta_txt`, `fecha`, `id_not`) VALUES
(1, 'C:\\image\\img1', 'C:\\txt', '12/10/2014', 1),
(2, 'C:\\image\\img1', 'C:\\txt', '12/10/2014', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `id_files` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_files`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_files`, `nombre`, `descripcion`, `tipo`, `status`) VALUES
(1, '1413762482-Casos de uso REDHISTAL.docx', 'Casos de uso', 'docx', '1'),
(2, 'Documentación del proyecto RedHisTAL.docx', 'Documentacion de proyecto', 'docx', '1'),
(3, 'dbalumnos.txt', 'dbalumnos', 'txt', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigador`
--

CREATE TABLE IF NOT EXISTS `investigador` (
  `id_inv` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `ape_pat` varchar(30) NOT NULL,
  `ape_mat` varchar(30) NOT NULL,
  `inst` varchar(50) DEFAULT NULL,
  `pag_per` varchar(30) DEFAULT NULL,
  `ruta_img` varchar(100) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_inv`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `investigador`
--

INSERT INTO `investigador` (`id_inv`, `nombre`, `ape_pat`, `ape_mat`, `inst`, `pag_per`, `ruta_img`, `id_usuario`, `direccion`) VALUES
(1, 'Miguel', 'Santiago', 'Perez', 'INAOE', 'www.facebook.com', NULL, 1, 'pinotepa nacional, colonia el porvenir'),
(2, 'Luis', 'villasenor', 'Pineda', 'INAOE', 'http://ccc.inaoep.mx/~villasen', NULL, 2, 'zapote'),
(3, 'Juana', 'Contreras', 'Pelaez', 'ITP', 'www.facebook.com', NULL, 1, '13 oriente zapote blanco'),
(4, 'Carla', 'Rojas', 'Pealez', 'BUAP', 'www.facebook.com', NULL, 1, 'erdvthb'),
(5, 'Pablo', 'Cruz', 'Olivera', 'UNCO', 'www.facebook.com', NULL, 1, 'xx'),
(7, 'Juana', 'Peralta', 'Luna', 'ITP', 'www.facebook.com', NULL, 2, 'colonia centro, zapote blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_not` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_not`),
  KEY `FK_usuarioN` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_not`, `titulo`, `id_usuario`) VALUES
(1, 'Novel de fisica para los creadores del LED', 1),
(2, 'El segundo eclipse total del año', 2),
(3, 'Android 5.0 Lollipop', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sitios`
--

CREATE TABLE IF NOT EXISTS `sitios` (
  `id_sitio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descrip` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_sitio`),
  KEY `FK_usuarioSitios` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `sitios`
--

INSERT INTO `sitios` (`id_sitio`, `nombre`, `descrip`, `id_usuario`) VALUES
(1, 'google', 'https://www.google.com.mx/?gfe_rd=cr&ei=toVDU9H3M8', 1),
(2, 'Moto G', 'https://www.youtube.com/watch?v=1NGso46X0fk', 1),
(3, ' Android 5.0 Lollipop', 'http://codigoespagueti.com/noticias/android-5-loll', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiponoticia`
--

CREATE TABLE IF NOT EXISTS `tiponoticia` (
  `id_tiponot` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descrip` varchar(30) NOT NULL,
  `id_not` int(11) NOT NULL,
  PRIMARY KEY (`id_tiponot`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tiponoticia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `ape_pat` varchar(30) NOT NULL,
  `ape_mat` varchar(30) NOT NULL,
  `ruta_img` varchar(100) DEFAULT NULL,
  `pass` varchar(250) NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `ape_pat`, `ape_mat`, `ruta_img`, `pass`, `correo`) VALUES
(1, 'Sunn', 'Vargas', 'Garcia', 'C:\\image\\img1', 'camero', 'shirs_sun@live.com.mx'),
(2, 'Isabel', 'Camero', 'lopez', 'C:\\image\\img1', 'camero1', 'camero.sole@gmail.com');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `det_noticias`
--
ALTER TABLE `det_noticias`
  ADD CONSTRAINT `FK_noticias` FOREIGN KEY (`id_not`) REFERENCES `noticias` (`id_not`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `FK_usuarioN` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sitios`
--
ALTER TABLE `sitios`
  ADD CONSTRAINT `FK_usuarioSitios` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
