-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-08-2020 a las 11:48:21
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
-- Base de datos: `paginacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(10) NOT NULL,
  `articulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `articulo`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque'),
(2, 'vitae ante quis nunc placerat tincidunt quis'),
(3, 'tellus, congue nec vulputate non, pulvinar quis massa'),
(4, 'Cras placerat mauris sit amet leo mattis'),
(5, 'eget ullamcorper dolor sodales. Quisque'),
(6, 'Morbi varius lobortis pretium. Etiam volutpat'),
(7, 'ullamcorper dictum eu non nulla. Mauris ornare orci in ipsum'),
(8, 'Proin dapibus nibh luctus odio euismod, ut lobortis urna laoreet.'),
(9, 'maximus sem risus, quis elementum massa'),
(10, 'felis urna, vestibulum eget auctor facilisis,'),
(11, 'uam sed, luctus augue. Fusce vitae justo hendrerit,'),
(12, 'nteger sit amet pharetra nunc. Proin at sagittis nisi'),
(13, 'nunc, quis posuere dui varius vitae.'),
(14, 'Suspendisse vel cursus nisi, ut ultricies orci. Suspendisse'),
(15, ' pulvinar felis sed tristique mollis. Fusce a'),
(16, 'Vivamus egestas odio eget libero posuere lacinia'),
(17, 'neque in tincidunt ullamcorper, mi odio luctus neque'),
(18, 'Sed non eros in nulla sollicitudin aliquet'),
(19, 'cursus urna. Duis orci elit, tincidunt ac sapien a, imperdiet'),
(20, 'posuere cubilia curae; Aliquam venenatis quam');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
