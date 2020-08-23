-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 11:51:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `edad`, `pais`, `correo`) VALUES
(1, 'José', 22, 'Perú', 'joseantoniovalen1@gmail.com'),
(2, 'Claudia', 25, 'Argentina', 'claudia1312@gmail.com'),
(3, 'Erika', 23, 'Bolivia', 'erikali19@hotmail.com'),
(4, 'Jorge', 27, 'Chile', 'jorge15663@hotmail.com'),
(5, 'Roxana', 31, 'Venezuela', 'roxana2314@gmail.com'),
(6, 'Angie', 33, 'Costa Rica', 'angiealr98@hotmail.com'),
(7, 'Jaime', 24, 'Perú', 'jaimebaily14@gmail.com'),
(8, 'Pablo', 31, 'Argentina', 'pabloMarmol6@gmail.com'),
(10, 'Manuel', 14, 'Venezuela', 'manuel15@gmail.com'),
(11, 'Nataly', 23, 'Rusia', 'natly154@gmail.com'),
(12, 'Angel', 31, 'Uruguay', 'angel1543@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
