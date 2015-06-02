-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-06-2015 a las 03:33:34
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `diversquim_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `securityuser`
--

CREATE TABLE IF NOT EXISTS `securityuser` (
`id` int(11) NOT NULL,
  `usuario` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `password_anterior` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `correo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT NULL,
  `fecha_modificacion` timestamp NULL DEFAULT NULL,
  `estado` varchar(1) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `securityuser`
--

INSERT INTO `securityuser` (`id`, `usuario`, `password`, `password_anterior`, `nombre`, `correo`, `fecha_creacion`, `fecha_modificacion`, `estado`) VALUES
(1, 'admin', 'admin', NULL, 'Administrador', 'admin@admin.com', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `securityuser`
--
ALTER TABLE `securityuser`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `securityuser`
--
ALTER TABLE `securityuser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
