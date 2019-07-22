-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2019 a las 05:37:49
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datossuscripcion`
--

CREATE TABLE `datossuscripcion` (
  `RequestId` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Token` text COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Documento` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `TipoDocumento` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datossuscripcion`
--

INSERT INTO `datossuscripcion` (`RequestId`, `Valor`, `Token`, `Estado`, `Documento`, `TipoDocumento`, `Nombre`, `Apellido`, `Email`) VALUES
(223840, 1000, 'd4c83cde29666cbdd75a5a0664a5474cc230cfb006f7a0ce3157562cf08a23d6', 'APPROVED', '1037390240', 'CC', 'Juan', 'Chavarria', 'juanchavarria0510@hotmail.com'),
(223852, 30000, '2536770ac786b6395c65b95d878f712fcc75a522ba87de2b6a9352df0625051b', 'APPROVED', '1037390240', 'CC', 'Juan', 'Chavarria', 'juanchavarria0510@hotmail.com'),
(223877, 30000, '65ef1b9d05557c2e440d52969db76bdee059a5b59030ccfd7b7eb4f0bd1bd2bc', 'APPROVED', '1037390240', 'CC', 'Juan', 'Chavarria', 'juanchavarria0510@hotmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
