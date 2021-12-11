-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 10. pro 2021, 11:27
-- Verze serveru: 10.4.22-MariaDB
-- Verze PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `knihovna`
--
CREATE DATABASE IF NOT EXISTS `knihovna` DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci;
USE `knihovna`;

-- --------------------------------------------------------

--
-- Struktura tabulky `knihy`
--

CREATE TABLE `knihy` (
  `ISBN` varchar(25) COLLATE utf8_czech_ci NOT NULL,
  `jmeno_autor` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni_autor` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `nazev_knihy` varchar(150) COLLATE utf8_czech_ci NOT NULL,
  `popis` varchar(500) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `knihy`
--

INSERT INTO `knihy` (`ISBN`, `jmeno_autor`, `prijmeni_autor`, `nazev_knihy`, `popis`) VALUES
('12', 'ds', 'ds', 'ss', 'vyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdfvyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdfvyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdfvyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdfvyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdfvyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdfvyvydhasuhdoahfiasdhfidsahjfiadjfpiajfpido  \r\ndsafdfsdfdfdv\r\ndgdfdf'),
('a', 's', 's', 's', 's'),
('fd', 'fdfd', 'fdaf', 'fdsdfsdfdf', 'fdsfsdfsd fsdf sd fdsfsdfsd fsdf sd fdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sdfdsfsdfsd fsdf sd'),
('gfd', 'fd', 'fd', 'fd', 'fd'),
('s', 's', 's', 's', 's');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `knihy`
--
ALTER TABLE `knihy`
  ADD PRIMARY KEY (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
