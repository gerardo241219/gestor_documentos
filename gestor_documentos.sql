-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2023 a las 16:22:12
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestor_documentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `numOficio` varchar(100) NOT NULL,
  `dependencia` varchar(100) NOT NULL,
  `remitente` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `estatus` varchar(20) NOT NULL,
  `turnado` varchar(50) NOT NULL,
  `prioridad` varchar(50) NOT NULL,
  `asunto` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL,
  `respuesta` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id`, `numOficio`, `dependencia`, `remitente`, `cargo`, `telefono`, `tipo`, `estatus`, `turnado`, `prioridad`, `asunto`, `observaciones`, `respuesta`, `id_user`, `created_at`, `updated_at`) VALUES
(1, '123', 'SEED', 'Gerardo', 'Desarrollador', '6183289308', 'Gestion', 'Recibido', 'Operador', 'Media', '', '', '', 0, '2023-09-13 07:23:25', NULL),
(2, '123', 'SEED', 'Gerardo', 'Desarrollador', '6183289308', 'Audiencia', 'Recibido', 'Operador', 'Alta', 'Inforamtivo', 'Viene sucio', 'Rapida', 0, '2023-09-13 07:25:47', NULL),
(3, '234', 'SEED', 'Gerardo', 'Desarrollador', '', '', '', '', '', '', '', '', 0, '2023-09-13 07:29:56', NULL),
(4, '234', 'SEED', 'Gerardo', 'Desarrollador', '6183289308', 'Archivo', 'En proceso', '', '', '', '', '', 0, '2023-09-13 07:30:57', NULL),
(5, '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-09-13 07:32:04', NULL),
(6, '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-09-13 07:32:29', NULL),
(7, '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-09-13 07:32:56', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Gerardo Amel Castañeda Pérez', 'leesin20avenged@gmail.com', '98e3ffe25aa5e6c17aba6b7638b59f7f', 'Administrador', '2023-09-13 03:25:30', '2023-09-13 03:25:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
