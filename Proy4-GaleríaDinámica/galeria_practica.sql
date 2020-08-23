-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 11:50:16
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
-- Base de datos: `galeria_practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
(5, 'imagen1', '1.jpg', 'Lorem '),
(6, '', '2.jpg', ''),
(7, '', '3.jpg', ''),
(8, '', '4.jpg', ''),
(9, '', '5.jpg', ''),
(10, '', '6.jpg', ''),
(11, '', '7.jpg', ''),
(12, '', '8.jpg', ''),
(13, '', '9.jpg', ''),
(14, '', '10.jpg', ''),
(15, '', '11.jpg', ''),
(16, '', '12.jpg', ''),
(17, '', '13.jpg', ''),
(18, '', '14.jpg', ''),
(19, '', '15.jpg', ''),
(20, '', '16.jpg', ''),
(21, 'Html5', 'html5.jpg', 'Imagen de html5'),
(22, 'Java Script', 'js.jpg', 'Lenguaje de programaciÃ³n JS para sitios web!!'),
(23, 'Manzana', 'apple-blur-bright-close-up-588587.jpg', 'Fruta alta en vitaminas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
