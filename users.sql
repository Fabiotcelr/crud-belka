-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 00:22:53
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `belka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `users_name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `users_last_name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `users_phone` bigint(11) NOT NULL,
  `users_address` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `users_country` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `users_date_birth` date NOT NULL,
  `users_profile_picture` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `users_pokemon_url` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `users_position` enum('GERENTE','CONTADOR','VENDEDOR') COLLATE utf8_spanish_ci NOT NULL,
  `idroles` int(11) NOT NULL,
  `users_status` enum('ACTIVO','INACTIVO') COLLATE utf8_spanish_ci NOT NULL,
  `users_quantity` int(11) NOT NULL,
  `users_email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `users_password` blob NOT NULL,
  `users_code` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`idusers`, `users_name`, `users_last_name`, `users_phone`, `users_address`, `users_country`, `users_date_birth`, `users_profile_picture`, `users_pokemon_url`, `users_position`, `idroles`, `users_status`, `users_quantity`, `users_email`, `users_password`, `users_code`) VALUES
(1, 'Fabio', 'Torres', 3006018171, 'mi direccion fabio torres', 'Colombia', '1997-07-16', 'http://127.0.0.1:8000/assets/img/6324f6ef894a2/IMG-1dea03b1de485bd9384a36a3228f72cc.jpg', 'https://pokeapi.co/api/v2/pokemon/1/', 'GERENTE', 1, 'ACTIVO', 0, 'fabio@gmail.com', 0x6130313631303232386665393938663531356137326464373330323934643837, '6324f6ef894a2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `users_email_UNIQUE` (`users_email`),
  ADD KEY `users_idroles_FK_idx` (`idroles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_idroles_FK` FOREIGN KEY (`idroles`) REFERENCES `roles` (`idroles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
