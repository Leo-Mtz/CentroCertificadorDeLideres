-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 07:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejemplo`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificaciones`
--

CREATE TABLE `certificaciones` (
  `IDCerti` int(35) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `Plazas_totales` int(11) NOT NULL,
  `Plazas_disponibles` int(100) NOT NULL,
  `Tipo` text NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='tabla para certificaciones';

--
-- Dumping data for table `certificaciones`
--

INSERT INTO `certificaciones` (`IDCerti`, `Nombre`, `Descripcion`, `Fecha_inicio`, `Fecha_fin`, `Plazas_totales`, `Plazas_disponibles`, `Tipo`, `estado`) VALUES
(1, 'PHP', 'Todo sobre PHP', '2024-05-20', '2024-05-31', 20, 20, 'Tecnología', 3),
(2, 'HTML', 'Una certificación de HTML básica es un programa de formación que enseña los fundamentos del Lenguaje de Marcado de Hipertexto (HTML), el cual es esencial para crear y estructurar contenido en la web. Los participantes aprenden a utilizar etiquetas y atributos HTML para construir páginas web, incluyendo la creación de encabezados, párrafos, listas, enlaces, imágenes y formularios. Esta certificación es ideal para principiantes que buscan adquirir habilidades esenciales para el desarrollo web y establecer una base sólida en la creación de sitios web y aplicaciones web.', '2024-05-21', '2024-05-31', 20, 17, 'Tecnología', 1),
(5, 'Coaching en el Liderazgo', 'Coaching en Liderazgo', '2024-05-15', '2024-05-19', 20, 20, 'Coaching', 2),
(6, 'Coaching en finanzas', 'Una certificación de coaching en finanzas es un programa de formación diseñado para capacitar a individuos en la guía y asesoramiento de personas o empresas en temas financieros. Los participantes adquieren habilidades para ayudar a sus clientes a gestionar sus finanzas personales o empresariales, establecer objetivos financieros, crear presupuestos, ahorrar, invertir y reducir deudas. Este tipo de certificación combina conocimientos de finanzas con técnicas de coaching, permitiendo a los profesionales apoyar a sus clientes de manera integral y personalizada en la mejora de su salud financiera.', '2024-05-28', '2024-06-08', 40, 40, 'Coaching', 1),
(7, 'PHP', 'Basico de PHP', '2024-05-28', '2024-06-11', 20, 20, 'Tecnología', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(35) NOT NULL COMMENT 'llave primaria',
  `correo` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Telefono` varchar(12) NOT NULL,
  `Ciudad` text NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `correo`, `pass`, `nombre`, `Apellido`, `Telefono`, `Ciudad`, `tipo`, `estado`) VALUES
(1, '179290@upslp.edu.mx', 'A1234567', 'Angel', 'Salcedo Hurtado', '44-4417-3656', 'San Luis Potosi', 2, 2),
(4, '179298@upslp.edu.mx', 'A1234567', 'Angel', 'Perez', '44-4856-2564', 'San Luis Potosi', 2, 1),
(5, 'elisa@ccl.com', 'E1234567', 'Elisa', 'Arellano Wratny', '44-8569-8425', 'Queretaro de Arteaga', 1, 1),
(6, 'leo@gmail.com', '12345678', 'leo', 'martinez', '44-4489-8977', 'Zacatecas', 2, 1),
(7, 'ejemplo@gmail.com', 'Contrasena123', 'Pedro', 'López Dávila', '44-4485-6475', 'San Luis Potosi', 2, 1),
(11, 'angel@gmail.com', 'a1234567', 'Angel', 'Salcedo Hurtado', '44-4417-3656', 'San Luis Potosi', 2, 1),
(12, 'pedro@ccl.com', 'P1234567', 'Pedro', 'Salcedo Amaya', '44-4485-6475', 'Veracruz de Ignacio de la Llave', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_certificaciones`
--

CREATE TABLE `usuario_certificaciones` (
  `IDOrden` int(11) NOT NULL,
  `IDCerti` int(11) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuario_certificaciones`
--

INSERT INTO `usuario_certificaciones` (`IDOrden`, `IDCerti`, `ID`) VALUES
(4, 2, 7),
(5, 2, 4),
(8, 2, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificaciones`
--
ALTER TABLE `certificaciones`
  ADD PRIMARY KEY (`IDCerti`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuario_certificaciones`
--
ALTER TABLE `usuario_certificaciones`
  ADD PRIMARY KEY (`IDOrden`),
  ADD KEY `IDCerti` (`IDCerti`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificaciones`
--
ALTER TABLE `certificaciones`
  MODIFY `IDCerti` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(35) NOT NULL AUTO_INCREMENT COMMENT 'llave primaria', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuario_certificaciones`
--
ALTER TABLE `usuario_certificaciones`
  MODIFY `IDOrden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario_certificaciones`
--
ALTER TABLE `usuario_certificaciones`
  ADD CONSTRAINT `usuario_certificaciones_ibfk_1` FOREIGN KEY (`IDCerti`) REFERENCES `certificaciones` (`IDCerti`),
  ADD CONSTRAINT `usuario_certificaciones_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
