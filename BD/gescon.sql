-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-04-2022 a las 19:43:14
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gescon`
--
CREATE DATABASE IF NOT EXISTS `gescon` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `gescon`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `Id_Administrador` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Administrador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `Id_Articulo` int NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fichero` varchar(50) COLLATE utf8_bin NOT NULL,
  `Resumen` varchar(50) COLLATE utf8_bin NOT NULL,
  `Topicos` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo_autor`
--

DROP TABLE IF EXISTS `articulo_autor`;
CREATE TABLE IF NOT EXISTS `articulo_autor` (
  `Id_ArticuloAutor` int NOT NULL AUTO_INCREMENT,
  `Id_Autor` int NOT NULL,
  `Id_Articulo` int NOT NULL,
  `Id_AutorDesignado` int NOT NULL,
  `Id_Congreso` int NOT NULL,
  `Id_Programa` int NOT NULL,
  PRIMARY KEY (`Id_ArticuloAutor`),
  KEY `Id_Autor` (`Id_Autor`),
  KEY `Id_Articulo` (`Id_Articulo`),
  KEY `Id_AutorDesignado` (`Id_AutorDesignado`),
  KEY `Id_Congreso` (`Id_Congreso`),
  KEY `Id_Programa` (`Id_Programa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art_asignados`
--

DROP TABLE IF EXISTS `art_asignados`;
CREATE TABLE IF NOT EXISTS `art_asignados` (
  `Id_ArtAsignado` int NOT NULL AUTO_INCREMENT,
  `Id_Revisor` int NOT NULL,
  `Id_Articulo` int NOT NULL,
  `Id_Revisiones` int NOT NULL,
  PRIMARY KEY (`Id_ArtAsignado`),
  KEY `Id_Revisor` (`Id_Revisor`),
  KEY `Id_Articulo` (`Id_Articulo`),
  KEY `Id_Revisiones` (`Id_Revisiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistente`
--

DROP TABLE IF EXISTS `asistente`;
CREATE TABLE IF NOT EXISTS `asistente` (
  `Id_Asistente` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Asistente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `Id_Autor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite_organizador`
--

DROP TABLE IF EXISTS `comite_organizador`;
CREATE TABLE IF NOT EXISTS `comite_organizador` (
  `Id_ComiteOrganizador` int NOT NULL AUTO_INCREMENT,
  `Id_Organizador` int NOT NULL,
  `Id_Congreso` int NOT NULL,
  PRIMARY KEY (`Id_ComiteOrganizador`),
  KEY `Id_Organizador` (`Id_Organizador`),
  KEY `Id_Congreso` (`Id_Congreso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite_programa`
--

DROP TABLE IF EXISTS `comite_programa`;
CREATE TABLE IF NOT EXISTS `comite_programa` (
  `Id_ComitePrograma` int NOT NULL AUTO_INCREMENT,
  `Id_JefeComite` int NOT NULL,
  `Id_Revisor` int NOT NULL,
  `Id_Congreso` int NOT NULL,
  PRIMARY KEY (`Id_ComitePrograma`),
  KEY `Id_JefeComite` (`Id_JefeComite`),
  KEY `Id_Revisor` (`Id_Revisor`),
  KEY `Id_Congreso` (`Id_Congreso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicacion_revisores`
--

DROP TABLE IF EXISTS `comunicacion_revisores`;
CREATE TABLE IF NOT EXISTS `comunicacion_revisores` (
  `Id_ComunicacionRev` int NOT NULL AUTO_INCREMENT,
  `Id_RevisorOrigen` int NOT NULL,
  `Id_RevisorDestino` int NOT NULL,
  `Id_Revisiones` int NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Asunto` varchar(50) COLLATE utf8_bin NOT NULL,
  `Comentario` text COLLATE utf8_bin NOT NULL,
  `Fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_ComunicacionRev`),
  KEY `Id_RevisorOrigen` (`Id_RevisorOrigen`),
  KEY `Id_RevisorDestino` (`Id_RevisorDestino`),
  KEY `Id_Revisiones` (`Id_Revisiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicacion_revjefe`
--

DROP TABLE IF EXISTS `comunicacion_revjefe`;
CREATE TABLE IF NOT EXISTS `comunicacion_revjefe` (
  `Id_ComRevJef` int NOT NULL AUTO_INCREMENT,
  `Id_Revisor` int NOT NULL,
  `Id_JefeComite` int NOT NULL,
  `Id_Revisiones` int NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Asunto` varchar(50) COLLATE utf8_bin NOT NULL,
  `Comentario` text COLLATE utf8_bin NOT NULL,
  `Fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_ComRevJef`),
  KEY `Id_Revisor` (`Id_Revisor`),
  KEY `Id_JefeComite` (`Id_JefeComite`),
  KEY `Id_Revisiones` (`Id_Revisiones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `congreso`
--

DROP TABLE IF EXISTS `congreso`;
CREATE TABLE IF NOT EXISTS `congreso` (
  `Id_Congreso` int NOT NULL AUTO_INCREMENT,
  `NombreCongreso` varchar(50) COLLATE utf8_bin NOT NULL,
  `DescripcionCongreso` text COLLATE utf8_bin NOT NULL,
  `TopicosCogreso` varchar(50) COLLATE utf8_bin NOT NULL,
  `FechaInicio` datetime NOT NULL,
  `FechaTermino` datetime NOT NULL,
  PRIMARY KEY (`Id_Congreso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios`
--

DROP TABLE IF EXISTS `espacios`;
CREATE TABLE IF NOT EXISTS `espacios` (
  `Id_Espacios` int NOT NULL AUTO_INCREMENT,
  `Espacio` varchar(50) COLLATE utf8_bin NOT NULL,
  `DescripcionEspacio` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Espacios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios_designados`
--

DROP TABLE IF EXISTS `espacios_designados`;
CREATE TABLE IF NOT EXISTS `espacios_designados` (
  `Id_EspaciosDesignados` int NOT NULL AUTO_INCREMENT,
  `Id_Espacios` int NOT NULL,
  `Id_Congreso` int NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_Termino` datetime NOT NULL,
  PRIMARY KEY (`Id_EspaciosDesignados`),
  KEY `Id_Espacios` (`Id_Espacios`),
  KEY `Id_Congreso` (`Id_Congreso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `Id_Especialidad` int NOT NULL AUTO_INCREMENT,
  `Especialidad` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades_organizador`
--

DROP TABLE IF EXISTS `especialidades_organizador`;
CREATE TABLE IF NOT EXISTS `especialidades_organizador` (
  `Id_Especialidad` int NOT NULL AUTO_INCREMENT,
  `Especialidad` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `Id_Eventos` int NOT NULL AUTO_INCREMENT,
  `TituloEvento` varchar(50) COLLATE utf8_bin NOT NULL,
  `DescripcionEvento` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefe_comite`
--

DROP TABLE IF EXISTS `jefe_comite`;
CREATE TABLE IF NOT EXISTS `jefe_comite` (
  `Id_JefeComite` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  `Id_Especialidad` int NOT NULL,
  PRIMARY KEY (`Id_JefeComite`),
  KEY `Id_Especialidad` (`Id_Especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_asistentes`
--

DROP TABLE IF EXISTS `lista_asistentes`;
CREATE TABLE IF NOT EXISTS `lista_asistentes` (
  `Id_ListaAsistentes` int NOT NULL AUTO_INCREMENT,
  `Id_Asistente` int NOT NULL,
  `Id_Congreso` int NOT NULL,
  `Id_Programa` int NOT NULL,
  PRIMARY KEY (`Id_ListaAsistentes`),
  KEY `Id_Asistente` (`Id_Asistente`),
  KEY `Id_Congreso` (`Id_Congreso`),
  KEY `Id_Programa` (`Id_Programa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moderador`
--

DROP TABLE IF EXISTS `moderador`;
CREATE TABLE IF NOT EXISTS `moderador` (
  `Id_Moderador` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Id_Moderador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizador`
--

DROP TABLE IF EXISTS `organizador`;
CREATE TABLE IF NOT EXISTS `organizador` (
  `Id_Organizador` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  `Id_Especialidad` int NOT NULL,
  PRIMARY KEY (`Id_Organizador`),
  KEY `Id_Especialidad` (`Id_Especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponencias`
--

DROP TABLE IF EXISTS `ponencias`;
CREATE TABLE IF NOT EXISTS `ponencias` (
  `Id_Ponencia` int NOT NULL AUTO_INCREMENT,
  `Id_ArticuloAutor` int NOT NULL,
  `Id_Moderador` int NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_Final` datetime NOT NULL,
  PRIMARY KEY (`Id_Ponencia`),
  KEY `Id_ArticuloAutor` (`Id_ArticuloAutor`),
  KEY `Id_Moderador` (`Id_Moderador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

DROP TABLE IF EXISTS `programa`;
CREATE TABLE IF NOT EXISTS `programa` (
  `Id_Programa` int NOT NULL AUTO_INCREMENT,
  `Id_Eventos` int NOT NULL,
  `Id_Congreso` int NOT NULL,
  `Id_Espacios` int NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_Termino` datetime NOT NULL,
  PRIMARY KEY (`Id_Programa`),
  KEY `Id_Eventos` (`Id_Eventos`),
  KEY `Id_Congreso` (`Id_Congreso`),
  KEY `Id_Espacios` (`Id_Espacios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

DROP TABLE IF EXISTS `revisiones`;
CREATE TABLE IF NOT EXISTS `revisiones` (
  `Id_Revision` int NOT NULL AUTO_INCREMENT,
  `Id_Articulo` int NOT NULL,
  `Id_Revisor` int NOT NULL,
  `Revision` text COLLATE utf8_bin NOT NULL,
  `Evaluacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Fecha_Revision` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Revision`),
  KEY `Id_Articulo` (`Id_Articulo`),
  KEY `Id_Revisor` (`Id_Revisor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisor`
--

DROP TABLE IF EXISTS `revisor`;
CREATE TABLE IF NOT EXISTS `revisor` (
  `Id_Revisor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `APaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `AMaterno` varchar(50) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_bin NOT NULL,
  `Id_Especialidad` int NOT NULL,
  PRIMARY KEY (`Id_Revisor`),
  KEY `Id_Especialidad` (`Id_Especialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo_autor`
--
ALTER TABLE `articulo_autor`
  ADD CONSTRAINT `articulo_autor_ibfk_1` FOREIGN KEY (`Id_Autor`) REFERENCES `autor` (`Id_Autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_autor_ibfk_2` FOREIGN KEY (`Id_Articulo`) REFERENCES `articulo` (`Id_Articulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_autor_ibfk_3` FOREIGN KEY (`Id_AutorDesignado`) REFERENCES `autor` (`Id_Autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_autor_ibfk_4` FOREIGN KEY (`Id_Congreso`) REFERENCES `congreso` (`Id_Congreso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_autor_ibfk_5` FOREIGN KEY (`Id_Programa`) REFERENCES `programa` (`Id_Programa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `art_asignados`
--
ALTER TABLE `art_asignados`
  ADD CONSTRAINT `art_asignados_ibfk_1` FOREIGN KEY (`Id_Revisor`) REFERENCES `revisor` (`Id_Revisor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `art_asignados_ibfk_2` FOREIGN KEY (`Id_Articulo`) REFERENCES `articulo` (`Id_Articulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `art_asignados_ibfk_3` FOREIGN KEY (`Id_Revisiones`) REFERENCES `revisiones` (`Id_Revision`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comite_organizador`
--
ALTER TABLE `comite_organizador`
  ADD CONSTRAINT `comite_organizador_ibfk_1` FOREIGN KEY (`Id_Organizador`) REFERENCES `organizador` (`Id_Organizador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comite_organizador_ibfk_2` FOREIGN KEY (`Id_Congreso`) REFERENCES `congreso` (`Id_Congreso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comite_programa`
--
ALTER TABLE `comite_programa`
  ADD CONSTRAINT `comite_programa_ibfk_1` FOREIGN KEY (`Id_JefeComite`) REFERENCES `jefe_comite` (`Id_JefeComite`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comite_programa_ibfk_2` FOREIGN KEY (`Id_Revisor`) REFERENCES `revisor` (`Id_Revisor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comite_programa_ibfk_3` FOREIGN KEY (`Id_Congreso`) REFERENCES `congreso` (`Id_Congreso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comunicacion_revisores`
--
ALTER TABLE `comunicacion_revisores`
  ADD CONSTRAINT `comunicacion_revisores_ibfk_1` FOREIGN KEY (`Id_RevisorOrigen`) REFERENCES `revisor` (`Id_Revisor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comunicacion_revisores_ibfk_2` FOREIGN KEY (`Id_RevisorDestino`) REFERENCES `revisor` (`Id_Revisor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comunicacion_revisores_ibfk_3` FOREIGN KEY (`Id_Revisiones`) REFERENCES `revisiones` (`Id_Revision`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comunicacion_revjefe`
--
ALTER TABLE `comunicacion_revjefe`
  ADD CONSTRAINT `comunicacion_revjefe_ibfk_1` FOREIGN KEY (`Id_Revisor`) REFERENCES `revisor` (`Id_Revisor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comunicacion_revjefe_ibfk_2` FOREIGN KEY (`Id_JefeComite`) REFERENCES `jefe_comite` (`Id_JefeComite`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comunicacion_revjefe_ibfk_3` FOREIGN KEY (`Id_Revisiones`) REFERENCES `revisiones` (`Id_Revision`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `espacios_designados`
--
ALTER TABLE `espacios_designados`
  ADD CONSTRAINT `espacios_designados_ibfk_1` FOREIGN KEY (`Id_Espacios`) REFERENCES `espacios` (`Id_Espacios`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `espacios_designados_ibfk_2` FOREIGN KEY (`Id_Congreso`) REFERENCES `congreso` (`Id_Congreso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jefe_comite`
--
ALTER TABLE `jefe_comite`
  ADD CONSTRAINT `jefe_comite_ibfk_1` FOREIGN KEY (`Id_Especialidad`) REFERENCES `especialidades` (`Id_Especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lista_asistentes`
--
ALTER TABLE `lista_asistentes`
  ADD CONSTRAINT `lista_asistentes_ibfk_1` FOREIGN KEY (`Id_Asistente`) REFERENCES `asistente` (`Id_Asistente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_asistentes_ibfk_2` FOREIGN KEY (`Id_Congreso`) REFERENCES `congreso` (`Id_Congreso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lista_asistentes_ibfk_3` FOREIGN KEY (`Id_Programa`) REFERENCES `programa` (`Id_Programa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `organizador`
--
ALTER TABLE `organizador`
  ADD CONSTRAINT `organizador_ibfk_1` FOREIGN KEY (`Id_Especialidad`) REFERENCES `especialidades_organizador` (`Id_Especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ponencias`
--
ALTER TABLE `ponencias`
  ADD CONSTRAINT `ponencias_ibfk_1` FOREIGN KEY (`Id_ArticuloAutor`) REFERENCES `articulo_autor` (`Id_ArticuloAutor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ponencias_ibfk_2` FOREIGN KEY (`Id_Moderador`) REFERENCES `moderador` (`Id_Moderador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `programa_ibfk_1` FOREIGN KEY (`Id_Eventos`) REFERENCES `eventos` (`Id_Eventos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programa_ibfk_2` FOREIGN KEY (`Id_Congreso`) REFERENCES `congreso` (`Id_Congreso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programa_ibfk_3` FOREIGN KEY (`Id_Espacios`) REFERENCES `espacios` (`Id_Espacios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD CONSTRAINT `revisiones_ibfk_1` FOREIGN KEY (`Id_Articulo`) REFERENCES `articulo` (`Id_Articulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `revisiones_ibfk_2` FOREIGN KEY (`Id_Revisor`) REFERENCES `revisor` (`Id_Revisor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `revisor`
--
ALTER TABLE `revisor`
  ADD CONSTRAINT `revisor_ibfk_1` FOREIGN KEY (`Id_Especialidad`) REFERENCES `especialidades` (`Id_Especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
