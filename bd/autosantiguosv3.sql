-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 06:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autosantiguosv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `areaconstructiva`
--

CREATE TABLE `areaconstructiva` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `maximo` float NOT NULL,
  `original` float NOT NULL,
  `funcionalidad` float NOT NULL,
  `sitActual` varchar(1000) NOT NULL,
  `sugerencias` varchar(1000) NOT NULL,
  `idEvaluacion` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areaconstructiva`
--

INSERT INTO `areaconstructiva` (`id`, `nombre`, `maximo`, `original`, `funcionalidad`, `sitActual`, `sugerencias`, `idEvaluacion`, `updated_at`, `created_at`) VALUES
(1, 'Sistemas Alternos de Motor', 20, 10.3, 5, 'Suciedad de polvo y aceite.-Bateria en mal estado.-Cables y conexiones en mal estado.-Soportes y sujecciones no compatible con el año del vehiculo. ', 'Limpieza general de sistema de motor.-Cambiar bateria.-Restaurar o cambiar cables y conexiones.-Restaurar o cambiar soportes y sujecciones por los del vehiculo.', 2, '2022-08-02 19:27:10', '2022-08-02 19:27:10'),
(2, 'Generales de Motor', 10, 6.1, 4, 'Fuga de aceite en el deposito de aceite.-Desgaste de tapon de deposito de aceite.-Desgaste en sellos.', 'Limpieza general de motor.-Generar un plan de mantenimiento con su mecanico de confianza.-Corregir fugas de aceite.-Cambiar tapon de deposito de aceite.Cambiar sellos.', 2, '2022-08-02 19:39:58', '2022-08-02 19:39:58'),
(3, 'Sistemas Automotrices', 30, 30, 10.4, 'Mantenimiento nulo.-Se puede observar suciedad en los componentes.-Fuga de aceite en la transmisión.-Mangueras quemadas, fisuradas y/o en mal estado.-Presenta oxido en sujecciones.', 'Realizar limpieza general en los sistemas del vehículo (cepillado y engrasado).-Verificar frecuentemente los niveles de los fluidos (líquido de frenos y aceite).-Crear un sistema de mantenimiento periódico con su mecánico de confianza.', 2, '2022-08-02 20:54:24', '2022-08-02 20:54:24'),
(4, 'Carroceria', 20, 16.6, 9.3, 'Ausencia de mantenimiento a pintura y hojalateria.-Estribos en mal estado.-Ausencia de mantenimiento en bisagras.', 'Conservar interiores y pintura en buen estado, dar mantenimiento periódico y conservar la originalidad del mismo, cambiar piezas originales procurando que sean del mismo modelo y año del vehículo.-Dar periódicamente mantenimiento y cuidado a la pintura, procurar no exponer o dejar a la interperie por demasiado tiempo.-Dar cuidado y mantenimiento a interiores, procurando remplazar piezas originales, conservar asientos, calaveras, tablero, faros, etc todo original. ', 2, '2022-08-02 20:59:49', '2022-08-02 20:59:49'),
(5, 'Interiores', 20, 13.7, 7.9, 'Falta de mantenimiento en vestiduras (limpieza).-Tapicería desgastada (cielo y piso).-Falta de tapicería, limpieza, hojalatería en maletero.-Tablero con desgaste y rayaduras.-Falta de organización en cableado de tablero y componentes eléctricos.-Desgaste y rayaduras en molduras y manijas de interiores.', 'Lavado de vestiduras y corrección de rasgaduras y desgaste del tapizado en asientos.Mantenimiento correctivo y adecuado al cielo y piso.-Restauración completa de maletero.-Reemplazo de componentes en mal estado y mantenimiento correctivo.-Organizar adecuadamente cad línea de cableado, agregar componentes de sujeción.-Reemplazar componentes en mal estado y dar mantenimiento correctivo a cada moldura y manijas en mal estado.', 2, '2022-08-02 21:07:35', '2022-08-02 21:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `areaconstructivaespecifica`
--

CREATE TABLE `areaconstructivaespecifica` (
  `id` int(9) NOT NULL,
  `nombreArea` varchar(45) NOT NULL,
  `totalOriginalidad` float NOT NULL,
  `totalFuncionalidad` float NOT NULL,
  `idArea` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `areaconstructivaespecifica`
--

INSERT INTO `areaconstructivaespecifica` (`id`, `nombreArea`, `totalOriginalidad`, `totalFuncionalidad`, `idArea`, `updated_at`, `created_at`) VALUES
(1, 'Sistema de Carga y Arranque', 0, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `criteriosespecificos`
--

CREATE TABLE `criteriosespecificos` (
  `id` int(9) NOT NULL,
  `nombreCriterio` varchar(100) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `originalidad` varchar(5) NOT NULL,
  `evaluacion` int(9) NOT NULL,
  `idAreaEspecifica` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteriosespecificos`
--

INSERT INTO `criteriosespecificos` (`id`, `nombreCriterio`, `observacion`, `originalidad`, `evaluacion`, `idAreaEspecifica`, `updated_at`, `created_at`) VALUES
(1, 'Bateria', 'Se encuentra en buen estado', 'AU', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Alternador', 'Buen estado', 'OR', 3, 1, '2022-08-02 19:18:56', '2022-08-02 19:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `evaluacionvehiculo`
--

CREATE TABLE `evaluacionvehiculo` (
  `id` int(9) NOT NULL,
  `folio` varchar(45) NOT NULL,
  `version` int(5) NOT NULL,
  `idVehiculo` int(9) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluacionvehiculo`
--

INSERT INTO `evaluacionvehiculo` (`id`, `folio`, `version`, `idVehiculo`, `updated_at`, `created_at`) VALUES
(1, '1F17AB', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1C22CD', 1, 2, '2022-08-02 20:52:46', '2022-08-02 20:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
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
-- Table structure for table `propietario`
--

CREATE TABLE `propietario` (
  `id` int(9) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propietario`
--

INSERT INTO `propietario` (`id`, `nombre`, `updated_at`, `created_at`) VALUES
(1, 'Carlos Antonio', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `segmento`
--

CREATE TABLE `segmento` (
  `id` int(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `segmento`
--

INSERT INTO `segmento` (`id`, `nombre`, `updated_at`, `created_at`) VALUES
(1, 'prueba', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Sedan', '2022-08-02 20:00:28', '2022-08-02 20:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(9) NOT NULL,
  `user` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `updated_at`, `created_at`) VALUES
(1, 'cris@gmail', '123456', '2022-08-05 18:18:48', '2022-08-05 18:18:48'),
(2, 'adminl', '123456', '2022-08-05 23:23:39', '2022-08-05 23:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `vehiculo`
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
-- Dumping data for table `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `marca`, `submarca`, `modelo`, `tipo`, `numSerie`, `holograma`, `idPropietario`, `idSegmento`, `updated_at`, `created_at`) VALUES
(1, 'Nissan', 'March', 2018, 'Hashback', '123456789', '2', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Chevrolet', 'Malibu', 1969, '2 puertas', '13537JLDS02727', 'AA-001-2022', 1, 2, '2022-08-02 20:00:58', '2022-08-02 20:00:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areaconstructiva`
--
ALTER TABLE `areaconstructiva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEvaluacion` (`idEvaluacion`);

--
-- Indexes for table `areaconstructivaespecifica`
--
ALTER TABLE `areaconstructivaespecifica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArea` (`idArea`);

--
-- Indexes for table `criteriosespecificos`
--
ALTER TABLE `criteriosespecificos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAreaEspecifica` (`idAreaEspecifica`);

--
-- Indexes for table `evaluacionvehiculo`
--
ALTER TABLE `evaluacionvehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVehiculo` (`idVehiculo`);

--
-- Indexes for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idArea` (`idArea`);

--
-- Indexes for table `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `segmento`
--
ALTER TABLE `segmento`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPropietario` (`idPropietario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areaconstructiva`
--
ALTER TABLE `areaconstructiva`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `areaconstructivaespecifica`
--
ALTER TABLE `areaconstructivaespecifica`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criteriosespecificos`
--
ALTER TABLE `criteriosespecificos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `evaluacionvehiculo`
--
ALTER TABLE `evaluacionvehiculo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `segmento`
--
ALTER TABLE `segmento`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `areaconstructiva`
--
ALTER TABLE `areaconstructiva`
  ADD CONSTRAINT `areaconstructiva_ibfk_1` FOREIGN KEY (`idEvaluacion`) REFERENCES `evaluacionvehiculo` (`id`);

--
-- Constraints for table `areaconstructivaespecifica`
--
ALTER TABLE `areaconstructivaespecifica`
  ADD CONSTRAINT `areaconstructivaespecifica_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `areaconstructiva` (`id`);

--
-- Constraints for table `criteriosespecificos`
--
ALTER TABLE `criteriosespecificos`
  ADD CONSTRAINT `criteriosespecificos_ibfk_3` FOREIGN KEY (`idAreaEspecifica`) REFERENCES `areaconstructivaespecifica` (`id`);

--
-- Constraints for table `evaluacionvehiculo`
--
ALTER TABLE `evaluacionvehiculo`
  ADD CONSTRAINT `evaluacionvehiculo_ibfk_1` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculo` (`id`);

--
-- Constraints for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`idArea`) REFERENCES `areaconstructiva` (`id`);

--
-- Constraints for table `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`idPropietario`) REFERENCES `propietario` (`id`),
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`idSegmento`) REFERENCES `segmento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
