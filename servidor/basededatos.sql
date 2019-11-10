-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2019 at 02:45 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `escuela`
--

-- --------------------------------------------------------

--
-- Table structure for table `calificacion`
--

CREATE TABLE `calificacion` (
  `nrc` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `totalExaPasados` int(11) DEFAULT NULL,
  `porcentajeActualPrac` int(11) DEFAULT NULL,
  `porcentajeActualExa` int(11) DEFAULT NULL,
  `porcentajeProy` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calificacion`
--

INSERT INTO `calificacion` (`nrc`, `matricula`, `totalExaPasados`, `porcentajeActualPrac`, `porcentajeActualExa`, `porcentajeProy`, `fecha`) VALUES
(4687, 201424123, 3, 20, 40, 20, '2018-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `nrc` int(11) NOT NULL,
  `idMateria` int(11) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `anio` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`nrc`, `idMateria`, `periodo`, `anio`, `idProfesor`) VALUES
(56756, 1, 'Otoño 2019', 2019, 1),
(55756, 2, 'Otoño 2019', 2019, 2),
(36766, 3, 'Otoño 2019', 2019, 3);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `matricula` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellidoPaterno` varchar(64) NOT NULL,
  `apellidoMaterno` varchar(64) NOT NULL,
  `carrera` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`matricula`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `carrera`, `password`) VALUES
(201424123, 'Rodrigo', 'Chaljub', 'Ruiz', 'ITI', '201424123');

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(11) NOT NULL,
  `nombreMateria` varchar(64) NOT NULL,
  `nivelMateria` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`idMateria`, `nombreMateria`, `nivelMateria`) VALUES
(1, 'Programacion 1', 'Básico'),
(2, 'Programacion 2', 'Básico'),
(3, 'Matematicas discretas', 'Básico'),
(4, '', ''),
(5, 'puto', 'puto');

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `idProfesor` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `apellidoPaterno` varchar(64) NOT NULL,
  `apellidoMaterno` varchar(64) NOT NULL,
  `area` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `area`, `password`) VALUES
(1, 'Meliza', 'Contreras', 'Gonzalez', 'Software', 'contrasenia'),
(2, 'Ivo Humberto', 'Pineda', 'Torres', 'Software', 'gatitos'),
(3, 'Miguel Angel', 'Vargas', 'Lomeli', 'Software', 'holamundo');

-- --------------------------------------------------------

--
-- Table structure for table `rubrica`
--

CREATE TABLE `rubrica` (
  `idRubrica` int(11) NOT NULL,
  `nrc` int(11) NOT NULL,
  `totalExa` int(11) NOT NULL,
  `porcentajeExa` int(11) NOT NULL,
  `porcentajePrac` int(11) NOT NULL,
  `porcentajeProy` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rubrica`
--

INSERT INTO `rubrica` (`idRubrica`, `nrc`, `totalExa`, `porcentajeExa`, `porcentajePrac`, `porcentajeProy`) VALUES
(1, 4687, 3, 50, 25, 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calificacion`
--
ALTER TABLE `calificacion`
  ADD KEY `nrc` (`nrc`),
  ADD KEY `matricula` (`matricula`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`nrc`),
  ADD KEY `idMateria` (`idMateria`),
  ADD KEY `idProfesor` (`idProfesor`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`matricula`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idProfesor`);

--
-- Indexes for table `rubrica`
--
ALTER TABLE `rubrica`
  ADD PRIMARY KEY (`idRubrica`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rubrica`
--
ALTER TABLE `rubrica`
  MODIFY `idRubrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
