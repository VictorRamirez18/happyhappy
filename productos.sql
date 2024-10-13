-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 13, 2024 at 11:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happyhappy`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `producto`, `imagen`, `precio`) VALUES
(1, 'Bomba jet inoxidable aqua/pet 1.3 hp', 'Images/SubmittedProducts/BombaJet.png', 2900),
(2, 'Bomba aqua pak serie pet 0.8 hp 127v', 'Images/SubmittedProducts/BombaAquaPak.png', 2750),
(3, 'Kit p/pres cons.altamira pres 10 115v', 'Images/SubmittedProducts/KitPress.png', 800),
(4, '9x48 aqua trol 2.5t (1 pie)', 'Images/SubmittedProducts/AquaTrol.png', 1200),
(5, 'Aqua trol aqt 56 válvula electrónica filtro time', 'Images/SubmittedProducts/ValvulaElectronica.png', 4000),
(6, '10x54 poli glass 2.5t', 'Images/SubmittedProducts/PoliGlass.png', 1300),
(7, 'Tanque salmuera 18x33 1600', 'Images/SubmittedProducts/TanqueSalmuera.png', 3200),
(8, 'Aqua trol aqt válvula suav metter', 'Images/SubmittedProducts/ValvulaSuav.png', 5500),
(9, 'Seolita cristalum saco de 1 pie 3 21 kgs', 'Images/SubmittedProducts/SeolitaCristalum.png', 450),
(10, 'Carbón activado vegetal 12x40 aqua trol', 'Images/SubmittedProducts/CarbonActivado.png', 1400),
(11, 'Resina catiónica aquatrol', 'Images/SubmittedProducts/ResinaCationica.png', 1900),
(12, 'Filtro polipropileno 5 micas', 'Images/SubmittedProducts/FiltroProlipropileno.png', 180),
(13, 'Porta filtreo num 10 Slim blue de 1/2 wpr', 'Images/SubmittedProducts/PortaFiltro.png', 450),
(14, 'Filtro de carbón epm 10 pentek', 'Images/SubmittedProducts/FiltroCarbonPentek.png', 200),
(15, 'Porta membrana 4x40 al 1/2 perm 3/4', 'Images/SubmittedProducts/PortaMembrana.png', 5500),
(16, 'Membrana hydro 4x40 baja presión', 'Images/SubmittedProducts/MembranaHydro.png', 5500),
(17, 'Filtro de carbón block epm 10pentek', 'Images/SubmittedProducts/FiltroCarbonBlock.png', 220),
(18, 'Switch nivel altamira 3m 10pentek', 'Images/SubmittedProducts/SwitchNivelAltamira.png', 280),
(19, 'Ultra violeta polaris 4 gpm', 'Images/SubmittedProducts/UltraVioleta.png', 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
