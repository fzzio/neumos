-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2015 a las 08:29:53
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `neumos_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE IF NOT EXISTS `contenido` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL COMMENT '1 = activo, 0 = inactivo'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `nombre`, `descripcion`, `fecha`, `estado`) VALUES
(1, 'Laboratorio del Sueño & Fisiología Pulmonar', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent feugiat quam in lobortis auctor. Pellentesque sodales molestie tortor, a porta nunc iaculis in. Donec id vestibulum justo. Proin eu ante commodo, scelerisque est vel, ullamcorper nunc. Sed euismod cursus porttitor. Donec quis risus fringilla, vehicula felis id, facilisis neque. Nam fringilla at erat vitae pellentesque. Donec malesuada orci sed justo placerat hendrerit. Ut porttitor ipsum nunc, et tempor augue maximus quis. Quisque ultricies dictum semper.</p>\r\n', '2015-06-14 23:52:54', 1),
(2, 'Información Para Pacientes', '<p>\r\n	Ut ipsum tortor, sodales ut ultricies ac, hendrerit et mauris. Proin consequat vehicula mauris. Praesent et egestas tortor, at ornare massa. Suspendisse convallis elit a congue scelerisque.</p>\r\n<p>\r\n	Aenean a porttitor mi. Phasellus eleifend purus ornare, lacinia quam sed, ullamcorper ligula.</p>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum sollicitudin tincidunt.</p>\r\n<div>\r\n	&nbsp;</div>\r\n', '2015-06-14 23:59:07', 1),
(3, 'Información para médicos', '<p>\r\n	Vestibulum eu velit lectus. Mauris eu interdum est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vehicula arcu mauris, vestibulum consequat justo aliquet a.</p>\r\n<p>\r\n	Duis a dignissim justo. Nunc accumsan bibendum diam, egestas commodo mi efficitur nec. Integer euismod sapien sed ornare consectetur. Fusce ut eleifend purus. Quisque aliquet malesuada odio.</p>\r\n<p>\r\n	Curabitur commodo dapibus massa at rutrum. Nulla sit amet diam quis magna eleifend consequat. Aenean porttitor metus eget eros blandit, a porttitor ex condimentum.</p>\r\n', '2015-06-14 23:59:53', 1),
(4, 'Contáctenos', '<p>\r\n	Praesent feugiat quam in lobortis auctor. Pellentesque sodales molestie tortor, a porta nunc iaculis in. Donec id vestibulum justo. Proin eu ante commodo, scelerisque est vel, ullamcorper nunc. Sed euismod cursus porttitor. Donec quis risus fringilla, vehicula felis id, facilisis neque. Nam fringilla at erat vitae pellentesque. Donec malesuada orci sed justo placerat hendrerit. Ut porttitor ipsum nunc, et tempor augue maximus quis. Quisque ultricies dictum semper.</p>\r\n', '2015-06-15 00:40:25', 1),
(5, 'Servicios', NULL, '2015-06-15 00:43:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidodetalle`
--

CREATE TABLE IF NOT EXISTS `contenidodetalle` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text,
  `idcontenido` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL COMMENT '1 = activo, 0 = inactivo'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidodetalle`
--

INSERT INTO `contenidodetalle` (`id`, `nombre`, `descripcion`, `idcontenido`, `fecha`, `estado`) VALUES
(1, 'Convenios', '<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, '2015-06-15 00:55:49', 1),
(2, '¿Cómo hacer citas?', '<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, '2015-06-15 00:57:12', 1),
(3, 'Preparación para los exámenes', '<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n</div>\r\n<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, '2015-06-15 00:57:48', 1),
(4, '¿Cómo prevenir Enfermedades?', '<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, '2015-06-15 00:58:36', 1),
(5, 'Deberes y Derechos del Paciente', '<div>\r\n	<div>\r\n		<p>\r\n			Deberes:</p>\r\n		<p>\r\n			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n		<br />\r\n		<ul>\r\n			<li>\r\n				LoremIpsum LoremIpsum LoremIpsum</li>\r\n			<li>\r\n				LoremIpsum</li>\r\n		</ul>\r\n	</div>\r\n	<div>\r\n		<p>\r\n			Derechos:</p>\r\n		<p>\r\n			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n		<p>\r\n			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n		<br />\r\n		<ul>\r\n			<li>\r\n				LoremIpsum LoremIpsum LoremIpsum</li>\r\n			<li>\r\n				LoremIpsum LoremIpsum LoremIpsum</li>\r\n		</ul>\r\n	</div>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 2, '2015-06-15 00:59:29', 1),
(6, 'Convenios Vigentes', '<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 3, '2015-06-15 01:00:11', 1),
(7, 'Guías de Atención', '<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n</div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 3, '2015-06-15 01:00:45', 1),
(8, 'Casos de Estudio', '<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n</div>\r\n<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 3, '2015-06-15 01:01:45', 1),
(9, 'Programas Especiales', '<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 3, '2015-06-15 01:02:16', 1),
(10, 'Líneas de Investigación', '<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo consequat.</p>\r\n	<br />\r\n	<ul>\r\n		<li>\r\n			LoremIpsum LoremIpsum LoremIpsum</li>\r\n		<li>\r\n			LoremIpsum</li>\r\n	</ul>\r\n</div>\r\n<div>\r\n	<p>\r\n		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,aliquip ex ea commodo&nbsp;</p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', 3, '2015-06-15 01:03:02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidoslider`
--

CREATE TABLE IF NOT EXISTS `contenidoslider` (
`id` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `imagen` varchar(200) NOT NULL,
  `idcontenido` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL COMMENT '1 = activo, 0 = inactivo'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenidoslider`
--

INSERT INTO `contenidoslider` (`id`, `descripcion`, `imagen`, `idcontenido`, `fecha`, `estado`) VALUES
(1, NULL, 'd6af8-900.png', 1, '2015-06-15 00:15:18', 1),
(2, NULL, '1210e-900.png', 1, '2015-06-15 00:16:38', 1),
(3, NULL, '257ce-somos.jpg', 2, '2015-06-15 00:27:26', 1),
(4, NULL, 'd1cc1-somos.jpg', 3, '2015-06-15 00:27:42', 1),
(5, NULL, '8049f-somos.jpg', 4, '2015-06-15 00:40:45', 1),
(6, NULL, '192fe-somos.jpg', 5, '2015-06-15 00:43:41', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienessomos`
--

CREATE TABLE IF NOT EXISTS `quienessomos` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL COMMENT '1 = activo, 0 = inactivo'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quienessomos`
--

INSERT INTO `quienessomos` (`id`, `nombre`, `descripcion`, `imagen`, `fecha`, `estado`) VALUES
(1, 'La Institución', 'Praesent et egestas tortor, at ornare massa. Suspendisse convallis elit a congue scelerisque. Aenean a porttitor mi. Phasellus eleifend purus ornare, lacinia quam sed, ullamcorper ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum sollicitudin tincidunt.', 'f2083-servicios3.png', '2015-06-14 23:22:43', 1),
(2, 'Misión', 'Fusce ut eleifend purus. Quisque aliquet malesuada odio. Curabitur commodo dapibus massa at rutrum. Nulla sit amet diam quis magna eleifend consequat. Aenean porttitor metus eget eros blandit, a porttitor ex condimentum.', NULL, '2015-06-14 23:23:17', 1),
(3, 'Visión', 'Maecenas volutpat turpis ac purus ullamcorper interdum. Duis id elit in purus sollicitudin lacinia. Proin pretium ultrices nunc. Etiam odio nunc, aliquet ac ultrices quis, ultrices non ligula. Nullam condimentum auctor purus vitae tincidunt. Vestibulum pharetra vehicula accumsan. ', NULL, '2015-06-14 23:23:40', 1),
(4, 'Valores', 'Mauris sollicitudin mi et eros rhoncus, sed accumsan nisi elementum. Sed scelerisque nisi ac cursus ullamcorper. Suspendisse potenti. Etiam urna lacus, volutpat eget ultricies eget, blandit porttitor metus. Aliquam lacinia tempus ligula, sodales posuere ipsum vulputate a.', NULL, '2015-06-14 23:24:05', 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `detalle` text NOT NULL,
  `foto1` varchar(200) NOT NULL,
  `foto2` varchar(200) NOT NULL,
  `lista` text NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` int(1) NOT NULL COMMENT '1 = Activo, 0 = Inactivo'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre`, `descripcion`, `imagen`, `detalle`, `foto1`, `foto2`, `lista`, `fecha`, `estado`) VALUES
(1, 'Consultas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat volutpat dui, quis hendrerit elit suscipit sed. In lacinia arcu ac justo tempor feugiat. Suspendisse vestibulum magna sapien, ullamcorper dapibus magna eleifend in. Vivamus pellentesque risus vel pellentesque ultricies. ', '07767-servicios2.png', '<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat volutpat dui, quis hendrerit elit suscipit sed. In lacinia arcu ac justo tempor feugiat. Suspendisse vestibulum magna sapien, ullamcorper dapibus magna eleifend in. Vivamus pellentesque risus vel pellentesque ultricies. Nunc malesuada feugiat porta. Ut a faucibus nunc, a porttitor nisi. Sed vulputate, tellus quis commodo faucibus, tortor nisi sodales nisi, sed pulvinar velit enim eu massa. Nulla pharetra, orci eu ornare tristique, nisl orci pretium felis, quis molestie arcu neque in lacus. Donec in orci mollis, malesuada tellus eget, scelerisque magna. Aenean nec sapien justo. Nunc pulvinar elit euismod nunc aliquet condimentum. Integer venenatis luctus placerat.</p>\r\n<p>\r\n	Ut ipsum tortor, sodales ut ultricies ac, hendrerit et mauris. Proin consequat vehicula mauris. Praesent et egestas tortor, at ornare massa. Suspendisse convallis elit a congue scelerisque. Aenean a porttitor mi. Phasellus eleifend purus ornare, lacinia quam sed, ullamcorper ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum sollicitudin tincidunt.</p>\r\n<p>\r\n	Vestibulum eu velit lectus. Mauris eu interdum est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vehicula arcu mauris, vestibulum consequat justo aliquet a. Duis a dignissim justo. Nunc accumsan bibendum diam, egestas commodo mi efficitur nec. Integer euismod sapien sed ornare consectetur. Fusce ut eleifend purus. Quisque aliquet malesuada odio. Curabitur commodo dapibus massa at rutrum. Nulla sit amet diam quis magna eleifend consequat. Aenean porttitor metus eget eros blandit, a porttitor ex condimentum.</p>\r\n', 'e6d9d-servicios2.png', 'cef00-servicios2.png', '<ul>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n</ul>\r\n', '2015-06-14 21:08:38', 1),
(2, 'Pruebas de Función Pulmonar', 'Ut ipsum tortor, sodales ut ultricies ac, hendrerit et mauris. Proin consequat vehicula mauris. Praesent et egestas tortor, at ornare massa. Suspendisse convallis elit a congue scelerisque. Aenean a porttitor mi. Phasellus eleifend purus ornare, lacinia quam sed, ullamcorper ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum sollicitudin tincidunt.', '44bb6-pru_funcionpulmonar1.png', '<p>\r\n	Ut ipsum tortor, sodales ut ultricies ac, hendrerit et mauris. Proin consequat vehicula mauris. Praesent et egestas tortor, at ornare massa. Suspendisse convallis elit a congue scelerisque. Aenean a porttitor mi. Phasellus eleifend purus ornare, lacinia quam sed, ullamcorper ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum sollicitudin tincidunt.</p>\r\n<p>\r\n	Vestibulum eu velit lectus. Mauris eu interdum est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vehicula arcu mauris, vestibulum consequat justo aliquet a. Duis a dignissim justo. Nunc accumsan bibendum diam, egestas commodo mi efficitur nec. Integer euismod sapien sed ornare consectetur. Fusce ut eleifend purus. Quisque aliquet malesuada odio. Curabitur commodo dapibus massa at rutrum. Nulla sit amet diam quis magna eleifend consequat. Aenean porttitor metus eget eros blandit, a porttitor ex condimentum.</p>\r\n', '102d9-pru_funcionpulmonar2.png', 'e6b56-pru_funcionpulmonar3.png', '<ul>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n</ul>\r\n', '2015-06-14 21:14:25', 1),
(3, 'Estudio del Sueño', 'Vestibulum eu velit lectus. Mauris eu interdum est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vehicula arcu mauris, vestibulum consequat justo aliquet a. Duis a dignissim justo. Nunc accumsan bibendum diam, egestas commodo mi efficitur nec. Integer euismod sapien sed ornare consectetur.', '79c18-estudiodelsueno1.png', '<p>\r\n	Vestibulum eu velit lectus. Mauris eu interdum est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vehicula arcu mauris, vestibulum consequat justo aliquet a. Duis a dignissim justo. Nunc accumsan bibendum diam, egestas commodo mi efficitur nec. Integer euismod sapien sed ornare consectetur. Fusce ut eleifend purus. Quisque aliquet malesuada odio. Curabitur commodo dapibus massa at rutrum. Nulla sit amet diam quis magna eleifend consequat. Aenean porttitor metus eget eros blandit, a porttitor ex condimentum.</p>\r\n<p>\r\n	Maecenas volutpat turpis ac purus ullamcorper interdum. Duis id elit in purus sollicitudin lacinia. Proin pretium ultrices nunc. Etiam odio nunc, aliquet ac ultrices quis, ultrices non ligula. Nullam condimentum auctor purus vitae tincidunt. Vestibulum pharetra vehicula accumsan. Mauris sollicitudin mi et eros rhoncus, sed accumsan nisi elementum.</p>\r\n', '1de91-estudiodelsueno2.png', 'e7227-estudiodelsueno3.png', '<ul>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n</ul>\r\n', '2015-06-14 21:26:39', 1),
(4, 'Terapia y Cuidado Respiratorio', 'Sed scelerisque nisi ac cursus ullamcorper. Suspendisse potenti. Etiam urna lacus, volutpat eget ultricies eget, blandit porttitor metus. Aliquam lacinia tempus ligula, sodales posuere ipsum vulputate a. Cras ullamcorper, purus non scelerisque eleifend, sapien magna pellentesque quam, vitae maximus augue ipsum ac nulla. Donec imperdiet tristique ornare.', 'e019f-terapiaycuidado1.png', '<p>\r\n	Sed scelerisque nisi ac cursus ullamcorper. Suspendisse potenti. Etiam urna lacus, volutpat eget ultricies eget, blandit porttitor metus. Aliquam lacinia tempus ligula, sodales posuere ipsum vulputate a. Cras ullamcorper, purus non scelerisque eleifend, sapien magna pellentesque quam, vitae maximus augue ipsum ac nulla. Donec imperdiet tristique ornare.</p>\r\n<p>\r\n	Pellentesque lacus ex, eleifend vestibulum cursus vitae, porta sed elit. Donec nec finibus erat. Aliquam facilisis consectetur orci nec sollicitudin. Nullam cursus nulla non felis luctus viverra vehicula eget nisl. Donec id ex ante. Sed efficitur libero vel libero mollis, non tempor massa ullamcorper. Nam tempor at dolor quis semper. Maecenas vitae viverra sapien, in tempor libero. Aenean vel maximus massa, et ullamcorper lorem. Nulla elementum at enim et consectetur. Aenean in neque dictum dolor hendrerit faucibus in et justo. Proin tortor ligula, viverra sit amet ultrices in, ultrices in metus. Nam eu sem id metus pharetra ultrices. Praesent a imperdiet libero, nec gravida massa.</p>\r\n<p>\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat volutpat dui, quis hendrerit elit suscipit sed. In lacinia arcu ac justo tempor feugiat. Suspendisse vestibulum magna sapien, ullamcorper dapibus magna eleifend in. Vivamus pellentesque risus vel pellentesque ultricies.</p>\r\n', 'ef485-terapiaycuidado2.png', '36a43-servicios5.png', '<ul>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n</ul>\r\n', '2015-06-14 21:28:58', 1),
(5, 'Programas Especiales', 'Nunc malesuada feugiat porta. Ut a faucibus nunc, a porttitor nisi. Sed vulputate, tellus quis commodo faucibus, tortor nisi sodales nisi, sed pulvinar velit enim eu massa. Nulla pharetra, orci eu ornare tristique, nisl orci pretium felis, quis molestie arcu neque in lacus. Donec in orci mollis, malesuada tellus eget, scelerisque magna. Aenean nec sapien justo.', '98864-prg_especiales1.png', '<p>\r\n	Donec in orci mollis, malesuada tellus eget, scelerisque magna. Aenean nec sapien justo. Nunc pulvinar elit euismod nunc aliquet condimentum. Integer venenatis luctus placerat.</p>\r\n<p>\r\n	Ut ipsum tortor, sodales ut ultricies ac, hendrerit et mauris. Proin consequat vehicula mauris. Praesent et egestas tortor, at ornare massa. Suspendisse convallis elit a congue scelerisque. Aenean a porttitor mi. Phasellus eleifend purus ornare, lacinia quam sed, ullamcorper ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam dictum sollicitudin tincidunt.</p>\r\n<p>\r\n	Vestibulum eu velit lectus. Mauris eu interdum est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla vehicula arcu mauris, vestibulum consequat justo aliquet a. Duis a dignissim justo. Nunc accumsan bibendum diam, egestas commodo mi efficitur nec. Integer euismod sapien sed ornare consectetur. Fusce ut eleifend purus. Quisque aliquet malesuada odio. Curabitur commodo dapibus massa at rutrum. Nulla sit amet diam quis magna eleifend consequat. Aenean porttitor metus eget eros blandit, a porttitor ex condimentum.</p>\r\n', '511fc-prg_especiales2.png', 'eeb16-prg_especiales3.png', '<ul>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n	<li>\r\n		Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>\r\n</ul>\r\n', '2015-06-14 21:30:20', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidodetalle`
--
ALTER TABLE `contenidodetalle`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contenidoslider`
--
ALTER TABLE `contenidoslider`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `securityuser`
--
ALTER TABLE `securityuser`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `contenidodetalle`
--
ALTER TABLE `contenidodetalle`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `contenidoslider`
--
ALTER TABLE `contenidoslider`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `quienessomos`
--
ALTER TABLE `quienessomos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `securityuser`
--
ALTER TABLE `securityuser`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
