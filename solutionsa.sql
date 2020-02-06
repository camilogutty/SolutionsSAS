-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-02-2020 a las 08:13:25
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `solutionsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiudad` int(5) NOT NULL,
  `ciudad` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idCiudad`, `ciudad`) VALUES
(1, 'Bogotá'),
(2, 'Medellin'),
(3, 'Cali'),
(4, 'Barranquilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(5) NOT NULL,
  `estado` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `estado`) VALUES
(1, 'Finalizado'),
(2, 'Iniciado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idPersona` int(5) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellidos` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `tipoDocumento` int(5) NOT NULL,
  `Identificacion` int(50) NOT NULL,
  `Licencia` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPersona`, `Nombre`, `Apellidos`, `tipoDocumento`, `Identificacion`, `Licencia`) VALUES
(1, 'Camilo', 'Gutiérrez', 1, 79985214, 79985214),
(5, 'Raul', 'Gonzalez', 1, 987665, 323244),
(8, 'Carlos', 'Guzman', 1, 3456, 6543);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `idRuta` int(5) NOT NULL,
  `idTrayecto` int(5) DEFAULT NULL,
  `idEstado` int(5) DEFAULT NULL,
  `idVehiculo` int(5) DEFAULT NULL,
  `VigasAcero` int(100) DEFAULT NULL,
  `Arena` int(100) DEFAULT NULL,
  `Cemento` int(100) DEFAULT NULL,
  `Ladrillo` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`idRuta`, `idTrayecto`, `idEstado`, `idVehiculo`, `VigasAcero`, `Arena`, `Cemento`, `Ladrillo`) VALUES
(1, 1, 2, 1, 200, 300, 100, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposdocumento`
--

CREATE TABLE `tiposdocumento` (
  `idTipoDocumento` int(5) NOT NULL,
  `tipoDocumento` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposdocumento`
--

INSERT INTO `tiposdocumento` (`idTipoDocumento`, `tipoDocumento`) VALUES
(1, 'Cedula'),
(2, 'Pasaporte'),
(3, 'Extranjeria'),
(4, 'Tarjeta Identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayectos`
--

CREATE TABLE `trayectos` (
  `idTrayecto` int(5) NOT NULL,
  `ciudadOrigen` int(5) NOT NULL,
  `ciudadDestino` int(5) NOT NULL,
  `distancia` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trayectos`
--

INSERT INTO `trayectos` (`idTrayecto`, `ciudadOrigen`, `ciudadDestino`, `distancia`) VALUES
(1, 1, 2, 417),
(2, 2, 1, 417),
(3, 1, 3, 462),
(4, 3, 1, 462),
(5, 1, 4, 1003),
(6, 4, 1, 1003),
(7, 2, 3, 418),
(8, 3, 2, 418),
(9, 2, 4, 714),
(10, 4, 2, 714),
(11, 3, 4, 1256),
(12, 4, 3, 1256);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `idVehiculo` int(5) NOT NULL,
  `idPersonaCargo` int(5) NOT NULL,
  `capacidad` int(100) DEFAULT NULL,
  `fechaVenSoat` date DEFAULT NULL,
  `fechaVenTecno` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`idVehiculo`, `idPersonaCargo`, `capacidad`, `fechaVenSoat`, `fechaVenTecno`) VALUES
(1, 5, 900, '2020-03-05', '2020-10-09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiudad`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersona`),
  ADD KEY `tipoDocumento` (`tipoDocumento`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`idRuta`),
  ADD KEY `trayecto` (`idTrayecto`),
  ADD KEY `estado` (`idEstado`),
  ADD KEY `vehiculo` (`idVehiculo`);

--
-- Indices de la tabla `tiposdocumento`
--
ALTER TABLE `tiposdocumento`
  ADD PRIMARY KEY (`idTipoDocumento`);

--
-- Indices de la tabla `trayectos`
--
ALTER TABLE `trayectos`
  ADD PRIMARY KEY (`idTrayecto`),
  ADD KEY `origen` (`ciudadOrigen`),
  ADD KEY `destino` (`ciudadDestino`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD KEY `personaCargo` (`idPersonaCargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idCiudad` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersona` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `idRuta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tiposdocumento`
--
ALTER TABLE `tiposdocumento`
  MODIFY `idTipoDocumento` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `trayectos`
--
ALTER TABLE `trayectos`
  MODIFY `idTrayecto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `idVehiculo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `tipoDocumento` FOREIGN KEY (`tipoDocumento`) REFERENCES `tiposdocumento` (`idTipoDocumento`);

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `estado` FOREIGN KEY (`idEstado`) REFERENCES `estados` (`idEstado`),
  ADD CONSTRAINT `trayecto` FOREIGN KEY (`idTrayecto`) REFERENCES `trayectos` (`idTrayecto`),
  ADD CONSTRAINT `vehiculo` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculos` (`idVehiculo`);

--
-- Filtros para la tabla `trayectos`
--
ALTER TABLE `trayectos`
  ADD CONSTRAINT `destino` FOREIGN KEY (`ciudadDestino`) REFERENCES `ciudades` (`idCiudad`),
  ADD CONSTRAINT `origen` FOREIGN KEY (`ciudadOrigen`) REFERENCES `ciudades` (`idCiudad`);

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `personaCargo` FOREIGN KEY (`idPersonaCargo`) REFERENCES `personas` (`idPersona`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
