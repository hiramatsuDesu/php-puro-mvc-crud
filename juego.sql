-- phpMyAdmin 
-- version 
-- https://www.phpmyadmin.net/
--
-- Servidor: 
-- Tiempo de generación: 
-- Versión del servidor: 
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nombre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `nombre` (
  `ID` int(3) NOT NULL,
  `FECHA` date NOT NULL,
  `ID_CAT` varchar(30) NOT NULL,
  `ID_DATOS` text NOT NULL,
  `ID_NOMBRE_DATOS` int(10) NOT NULL,
  `ID_IMG` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nombre`
--

INSERT INTO `nombre` (`ID`, `FECHA`, `ID-CAT`, `ID_DATOS`, `ID_NOMBRE_DATOS`, `ID_IMG`) VALUES
();

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nombre`
--
ALTER TABLE `nombe`
  ADD PRIMARY KEY (`ID_DATOS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nombre`
--
ALTER TABLE `nombre`
  MODIFY `ID_DATOS` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
