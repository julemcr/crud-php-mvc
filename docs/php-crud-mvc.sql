-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 23-03-2022 a las 19:34:18
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php-crud-mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

DROP TABLE IF EXISTS `tm_producto`;
CREATE TABLE IF NOT EXISTS `tm_producto` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nom` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_crea` datetime NOT NULL,
  `fecha_modi` datetime DEFAULT NULL,
  `fecha_elim` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`prod_id`, `prod_nom`, `fecha_crea`, `fecha_modi`, `fecha_elim`, `estado`) VALUES
(1, 'Monitor 29\"', '2022-03-23 16:46:26', NULL, NULL, 1),
(2, 'Teclado', '2022-03-23 16:47:11', NULL, NULL, 1),
(3, 'Auriculares', '2022-03-23 16:47:11', '2022-03-23 19:31:41', '2022-03-23 19:33:01', 1),
(4, 'laptop', '2022-03-23 19:30:56', NULL, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
