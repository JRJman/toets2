-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 12 apr 2019 om 09:10
-- Serverversie: 10.1.38-MariaDB
-- PHP-versie: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrlong`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `sushi`
--

CREATE TABLE `sushi` (
  `id` int(4) NOT NULL,
  `sushi` varchar(100) NOT NULL,
  `aantal` int(4) NOT NULL,
  `prijs` int(4) NOT NULL,
  `omschrijving` varchar(300) NOT NULL,
  `afbeelding` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `sushi`
--

INSERT INTO `sushi` (`id`, `sushi`, `aantal`, `prijs`, `omschrijving`, `afbeelding`) VALUES
(1, 'Nigiri sushi ika', 2, 5, 'Sushirijst, met de hand gevormd en belegd met een topping van inktvis', ''),
(2, 'Nigiri sushi saba', 3, 6, 'Sushirijst, met de hand gevormd en belegd met een topping van makreel', ''),
(3, 'Maki sushi avocado', 3, 4, 'Sushirijst met de hand gevormd met zeewier erom met binnenin avocado.', ''),
(4, 'Maki sushi salmon', 3, 5, 'Sushirijst met de hand gevormd met zeewier erom met binnenin zalm.', ''),
(5, 'Ebi tempura maki', 4, 9, 'Sushi met zeewier aan de binnenkant en sesam aan de buitenkant met daarin tempura garnaal, avocado, komkommer en tobiko (viseitjes).', ''),
(6, 'Foto Maki', 4, 10, 'Dikke sushirol van sushirijst, met de hand gevormd. Met ei, oshinko (radijs in zuur), komkommer, avocado, kampyo (Japanse kalebas).', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `sushi`
--
ALTER TABLE `sushi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
