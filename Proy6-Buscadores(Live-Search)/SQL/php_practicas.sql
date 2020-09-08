-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2020 a las 15:20:18
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Cod_producto` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Cod_producto`, `Nombre`, `Marca`, `Modelo`) VALUES
(1, 'Galaxy S6', 'Samsung', 'S6'),
(2, 'G2', 'LG', 'G2 D800'),
(3, 'Smart TV', 'Samsung', 'TV-L560'),
(4, 'Armario', 'Marca X', 'DG-568'),
(5, 'Computadora', 'Dell', 'XPS 503'),
(6, 'Impresora', 'Canon', 'XD-152'),
(7, 'Teclado', 'HP', 'TC-540'),
(8, 'Monitor', 'HP', 'HD-520'),
(9, 'Computadora', 'Alienware', 'AL-5300'),
(10, 'Micro', 'Yeti', 'White-520'),
(11, 'Monitor', 'DELL', 'DHD-560'),
(12, 'Escritorio', 'Marca X', 'Esc-5860'),
(13, 'PC', 'LG', 'PC-200'),
(14, 'Laptop', 'PC', 'PC-400');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Cod_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Cod_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
