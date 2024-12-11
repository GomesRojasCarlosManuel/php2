-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 00:58:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_de_abarrotes`
--
CREATE DATABASE IF NOT EXISTS `tienda_de_abarrotes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tienda_de_abarrotes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--
-- Creación: 10-12-2024 a las 23:48:57
-- Última actualización: 10-12-2024 a las 23:50:34
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `fecha_de_compra` date NOT NULL,
  `precio_de_compra` decimal(6,2) NOT NULL,
  `caracteristicas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre_producto`, `fecha_de_compra`, `precio_de_compra`, `caracteristicas`) VALUES
(1, 'Aceite Vegetal 1L\r\n', '2024-01-01', 9.50, 'aceite vegetal de marca \"PRIMOR\"\r\n-Hecho de maíz 100% natural.\r\n-Apto para freír, hornear y aderezar'),
(2, 'Azúcar Blanca 1kg', '2024-12-11', 3.80, 'Ideal para endulzar bebidas, postres y recetas.\r\nSe disuelve fácilmente en líquidos fríos y caliente'),
(3, 'Jabón de lavandería multiusos', '2024-12-16', 2.50, 'Aroma fresco y duradero.\r\nEficaz contra manchas difíciles.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
