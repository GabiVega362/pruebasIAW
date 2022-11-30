-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 11:18:17
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumnado`
--
CREATE DATABASE IF NOT EXISTS `alumnado` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `alumnado`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DNI` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Edad` tinyint(4) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `DNI` (`DNI`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Truncar tablas antes de insertar `alumnos`
--

TRUNCATE TABLE `alumnos`;
--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `DNI`, `Edad`) VALUES
(1, 'Pepe Juan de las Ramas dos Santós Sagrados', '00000002A', 76),
(4, 'JorseLuis', '45326245U', 12),
(5, 'Clarinete Gonzalez', '4578963P', 45),
(6, 'Julio Jose', '784512O', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursan`
--

CREATE TABLE IF NOT EXISTS `cursan` (
  `alumno` smallint(6) NOT NULL,
  `modulo` tinyint(4) NOT NULL,
  PRIMARY KEY (`alumno`,`modulo`),
  KEY `fk_modulos` (`modulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Truncar tablas antes de insertar `cursan`
--

TRUNCATE TABLE `cursan`;
--
-- Volcado de datos para la tabla `cursan`
--

INSERT INTO `cursan` (`alumno`, `modulo`) VALUES
(4, 1),
(4, 2),
(5, 1),
(5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `CodModu` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Horas` smallint(4) NOT NULL,
  `Docente` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  PRIMARY KEY (`CodModu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Truncar tablas antes de insertar `modulos`
--

TRUNCATE TABLE `modulos`;
--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`CodModu`, `Nombre`, `Horas`, `Docente`) VALUES
(1, 'IAW', 140, 'Laura Nocelo'),
(2, 'ASXBD', 60, 'Laura Nocelo');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursan`
--
ALTER TABLE `cursan`
  ADD CONSTRAINT `fk_alumnos` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_modulos` FOREIGN KEY (`modulo`) REFERENCES `modulos` (`CodModu`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
