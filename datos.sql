-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2022 a las 01:59:08
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `Nombre` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `Apellido` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `Contraseña` varchar(30) COLLATE utf8_latvian_ci NOT NULL,
  `Nacionalidad` text COLLATE utf8_latvian_ci NOT NULL,
  `Sexo` text COLLATE utf8_latvian_ci NOT NULL,
  `Fecha de nacimiento` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`Nombre`, `Apellido`, `Contraseña`, `Nacionalidad`, `Sexo`, `Fecha de nacimiento`, `id`) VALUES
('jere', 'aguilar', 'hola', 'Argentina', 'hombre', '2004-01-31', 10),
('Bautista', 'Elcapo', '123', 'Argentina', 'hombre', '2000-02-03', 72),
('Bautista', 'Elcapo', '123', 'Argentina', 'hombre', '2000-02-03', 78),
('jere', 'aguilar', '1234', 'Argentina', 'hombre', '2022-05-27', 83);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
