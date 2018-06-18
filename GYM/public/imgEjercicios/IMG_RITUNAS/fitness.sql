-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2018 a las 15:45:09
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fitness`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id_ejercicio` int(40) NOT NULL,
  `grupo_muscular` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ejercicios` blob NOT NULL,
  `explicacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `material` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalitats`
--

CREATE TABLE `modalitats` (
  `id_modalidad` int(40) NOT NULL,
  `modalitat` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `repeticiones` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `serie` int(40) NOT NULL,
  `nivel` int(40) NOT NULL,
  `peso` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modalitats`
--

INSERT INTO `modalitats` (`id_modalidad`, `modalitat`, `repeticiones`, `serie`, `nivel`, `peso`) VALUES
(1, 'definir', '12-20', 4, 1, '12-100'),
(2, 'definir', '12-20', 3, 2, '6-12 '),
(3, 'definir', '12-20', 2, 3, '3-6'),
(4, 'mantener', '10-12', 4, 1, '12-100'),
(5, 'mantener', '10-12', 3, 2, '6-12 '),
(6, 'mantener', '10-12', 2, 3, '3-6'),
(7, 'muscular', '8-10', 4, 1, '12-100'),
(8, 'muscular', '8-10', 3, 2, '6-12 '),
(9, 'muscular', '8-10', 2, 3, '3-6'),
(10, 'resistencia', '13-15', 4, 1, '12-100'),
(11, 'resistencia', '13-15', 3, 2, '6-12 '),
(12, 'resistencia', '13-15', 2, 3, '3-6'),
(13, 'estiramientos', '3 aguantando', 1, 1, '0'),
(14, 'estiramientos', '3 aguantando', 1, 2, '0'),
(15, 'estiramientos', '3 aguantando', 1, 3, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `id_rutina` int(40) NOT NULL,
  `id_usuario` int(40) NOT NULL,
  `id_modalidad` int(40) NOT NULL,
  `id_ejercicio0` int(40) NOT NULL,
  `id_ejercicio1` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio2` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio3` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio4` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio5` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio6` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio7` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio8` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio9` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `id_ejercicio10` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(40) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(10) NOT NULL,
  `numdies` int(10) NOT NULL,
  `nivel` int(40) NOT NULL,
  `modalidad` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `pwd` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `genero`, `edad`, `numdies`, `nivel`, `modalidad`, `usuario`, `pwd`) VALUES
(1, 'Paco', 'Geno', 'v', 25, 1, 1, 'definir', 'PG', 'PG00'),
(2, 'sara', 'serca', 'm', 16, 4, 3, 'mantener', 'ss', 'ss000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id_ejercicio`);

--
-- Indices de la tabla `modalitats`
--
ALTER TABLE `modalitats`
  ADD PRIMARY KEY (`id_modalidad`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`id_rutina`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id_ejercicio` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalitats`
--
ALTER TABLE `modalitats`
  MODIFY `id_modalidad` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `rutina`
--
ALTER TABLE `rutina`
  MODIFY `id_rutina` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
