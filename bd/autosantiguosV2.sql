-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2022 a las 18:00:05
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
-- Base de datos: `autosantiguos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areaconstructiva`
--

CREATE TABLE `areaconstructiva` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `maximo` float NOT NULL,
  `original` float NOT NULL,
  `funcionalidad` float NOT NULL,
  `sitActual` varchar(45) NOT NULL,
  `sugerencias` varchar(500) NOT NULL,
  `idEvaluacion` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areaconstructivaespecifica`
--

CREATE TABLE `areaconstructivaespecifica` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `totalOriginalidad` float NOT NULL,
  `totalFuncionalidad` float NOT NULL,
  `idArea` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(9) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `idPropietario` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterio`
--

CREATE TABLE `criterio` (
  `id` int(9) NOT NULL,
  `criterio` varchar(100) NOT NULL,
  `idAreaEspecifica` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criteriosespecificos`
--

CREATE TABLE `criteriosespecificos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `idOriginalidad` int(9) NOT NULL,
  `idEvFuncion` int(9) NOT NULL,
  `idAreaEspecifica` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacionvehiculo`
--

CREATE TABLE `evaluacionvehiculo` (
  `id` int(9) NOT NULL,
  `folio` varchar(45) NOT NULL,
  `version` int(5) NOT NULL,
  `idVehiculo` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidad`
--

CREATE TABLE `funcionalidad` (
  `id` int(9) NOT NULL,
  `criterio` tinyint(4) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `holograma`
--

CREATE TABLE `holograma` (
  `id` int(9) NOT NULL,
  `holograma` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(9) NOT NULL,
  `imagen` longblob NOT NULL,
  `idArea` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `originalidad`
--

CREATE TABLE `originalidad` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `siglas` varchar(10) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` int(9) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segmento`
--

CREATE TABLE `segmento` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(9) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` int(9) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `submarca` varchar(45) NOT NULL,
  `modelo` int(4) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `numSerie` varchar(45) NOT NULL,
  `holograma` varchar(45) NOT NULL,
  `idPropietario` int(9) NOT NULL,
  `idSegmento` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areaconstructiva`
--
ALTER TABLE `areaconstructiva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEvaluacion` (`idEvaluacion`);

--
-- Indices de la tabla `areaconstructivaespecifica`
--
ALTER TABLE `areaconstructivaespecifica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArea` (`idArea`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPropietario` (`idPropietario`);

--
-- Indices de la tabla `criterio`
--
ALTER TABLE `criterio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAreaEspecifica` (`idAreaEspecifica`);

--
-- Indices de la tabla `criteriosespecificos`
--
ALTER TABLE `criteriosespecificos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idOriginalidad` (`idOriginalidad`),
  ADD KEY `idEvFuncion` (`idEvFuncion`),
  ADD KEY `idAreaEspecifica` (`idAreaEspecifica`);

--
-- Indices de la tabla `evaluacionvehiculo`
--
ALTER TABLE `evaluacionvehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVehiculo` (`idVehiculo`);

--
-- Indices de la tabla `funcionalidad`
--
ALTER TABLE `funcionalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `holograma`
--
ALTER TABLE `holograma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArea` (`idArea`);

--
-- Indices de la tabla `originalidad`
--
ALTER TABLE `originalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `segmento`
--
ALTER TABLE `segmento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPropietario` (`idPropietario`),
  ADD KEY `idSegmento` (`idSegmento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areaconstructiva`
--
ALTER TABLE `areaconstructiva`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `areaconstructivaespecifica`
--
ALTER TABLE `areaconstructivaespecifica`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `criterio`
--
ALTER TABLE `criterio`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `criteriosespecificos`
--
ALTER TABLE `criteriosespecificos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacionvehiculo`
--
ALTER TABLE `evaluacionvehiculo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `funcionalidad`
--
ALTER TABLE `funcionalidad`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `holograma`
--
ALTER TABLE `holograma`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `originalidad`
--
ALTER TABLE `originalidad`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `segmento`
--
ALTER TABLE `segmento`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `areaconstructiva`
--
ALTER TABLE `areaconstructiva`
  ADD CONSTRAINT `areaconstructiva_ibfk_1` FOREIGN KEY (`idEvaluacion`) REFERENCES `evaluacionvehiculo` (`id`);

--
-- Filtros para la tabla `areaconstructivaespecifica`
--
ALTER TABLE `areaconstructivaespecifica`
  ADD CONSTRAINT `areaconstructivaespecifica_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `areaconstructiva` (`id`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`);

--
-- Filtros para la tabla `criterio`
--
ALTER TABLE `criterio`
  ADD CONSTRAINT `criterio_ibfk_1` FOREIGN KEY (`idAreaEspecifica`) REFERENCES `areaconstructivaespecifica` (`id`);

--
-- Filtros para la tabla `criteriosespecificos`
--
ALTER TABLE `criteriosespecificos`
  ADD CONSTRAINT `criteriosespecificos_ibfk_1` FOREIGN KEY (`idOriginalidad`) REFERENCES `originalidad` (`id`),
  ADD CONSTRAINT `criteriosespecificos_ibfk_2` FOREIGN KEY (`idEvFuncion`) REFERENCES `funcionalidad` (`id`),
  ADD CONSTRAINT `criteriosespecificos_ibfk_3` FOREIGN KEY (`idAreaEspecifica`) REFERENCES `areaconstructivaespecifica` (`id`);

--
-- Filtros para la tabla `evaluacionvehiculo`
--
ALTER TABLE `evaluacionvehiculo`
  ADD CONSTRAINT `evaluacionvehiculo_ibfk_1` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculo` (`id`);

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `areaconstructiva` (`id`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`idSegmento`) REFERENCES `segmento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
