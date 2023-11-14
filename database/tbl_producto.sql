-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2023 a las 00:18:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

create database bd_comex;


use bd_comex;

--
-- Base de datos: `bd_comex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

CREATE TABLE `tbl_producto` (
  `id` int(11) NOT NULL,
  `id_producto` int(3) NOT NULL,
  `nombre_producto` varchar(500) DEFAULT NULL,
  `precio` int(3) NOT NULL,
  `descuento` int(3) NOT NULL,
  `categoria` varchar(500) NOT NULL,
  `numero_existencias` int(3) NOT NULL,
  `proveedor` varchar(500) NOT NULL,
  `fecha_llegada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_producto`
--
ALTER TABLE `tbl_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
