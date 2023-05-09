-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2023 a las 02:42:34
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_mecca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `USU_ID` int(11) NOT NULL,
  `USU_DOCUMENTO` int(28) DEFAULT NULL,
  `USU_NOMBRE` varchar(92) DEFAULT NULL,
  `USU_CIUDAD` varchar(28) DEFAULT NULL,
  `USU_PUNTOS` int(92) DEFAULT NULL,
  `USU_FECHA_REGISTRO` datetime NOT NULL DEFAULT current_timestamp(),
  `USU_ESTADO` varchar(11) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`USU_ID`, `USU_DOCUMENTO`, `USU_NOMBRE`, `USU_CIUDAD`, `USU_PUNTOS`, `USU_FECHA_REGISTRO`, `USU_ESTADO`) VALUES
(1, 4321567, 'Camila Franco', 'Barranquilla', 10, '2023-05-07 17:58:22', 'Activo'),
(2, 1456987, 'Mario Lopez', 'Medellin', 59, '2023-05-07 17:58:22', 'Activo'),
(3, 1547856, 'German Gomez', 'Bogota ', 70, '2023-05-07 17:58:22', 'Activo'),
(4, 1254896, 'Diana Beltran', 'Santa Marta ', 48, '2023-05-07 17:58:22', 'Activo'),
(5, 3524158, 'Carlos Cortez', 'Santa Marta ', 85, '2023-05-07 17:58:22', 'Activo'),
(6, 4785145, 'Maria PeÃ±uela ', 'Barranquilla', 47, '2023-05-07 17:58:22', 'Activo'),
(7, 1235894, 'Oscar Peralta ', 'Bogota ', 90, '2023-05-07 17:58:22', 'Activo'),
(8, 7456813, 'Guillermo Sepulveda', 'Medellin', 35, '2023-05-07 17:58:22', 'Activo'),
(9, 8759412, 'Carolina EstupiÃ±an', 'Santa Marta ', 16, '2023-05-07 17:58:22', 'Activo'),
(10, 1352158, 'Martha Prieto', 'Bogota ', 25, '2023-05-07 17:58:22', 'Activo'),
(11, 1645952, 'Lorena Rodriguez', 'Medellin', 97, '2023-05-07 17:58:22', 'Activo'),
(12, 1564235, 'Oswaldo Albarracin ', 'Barranquilla', 66, '2023-05-07 17:58:22', 'Activo'),
(13, 1645896, 'Andres Guido ', 'Santa Marta ', 100, '2023-05-07 17:58:22', 'Activo'),
(14, 1324567, 'Sandra Sanchez', 'Barranquilla', 53, '2023-05-07 17:58:22', 'Activo'),
(15, 1234581, 'Martin Diaz', 'Medellin', 20, '2023-05-07 17:58:22', 'Activo'),
(16, 8945782, 'Juan Bueno ', 'Bogota ', 26, '2023-05-07 17:58:22', 'Activo'),
(17, 9542516, 'Steban Pinzon', 'Santa Marta ', 54, '2023-05-07 17:58:22', 'Activo'),
(18, 2348712, 'Alfredo Mogollon', 'Barranquilla', 12, '2023-05-07 17:58:22', 'Activo'),
(19, 9264875, 'Carmen Bohorquez', 'Bogota ', 33, '2023-05-07 17:58:22', 'Activo'),
(20, 3524856, 'Stefania Holguin ', 'Medellin', 50, '2023-05-07 17:58:22', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`USU_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `USU_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
