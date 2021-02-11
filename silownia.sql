-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2021, 18:28
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `silownia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `karnet`
--

CREATE TABLE `karnet` (
  `id_karnetu` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `cena` varchar(20) CHARACTER SET utf8 NOT NULL,
  `czas` varchar(30) NOT NULL,
  `uwaga` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `karnet`
--

INSERT INTO `karnet` (`id_karnetu`, `nazwa`, `cena`, `czas`, `uwaga`) VALUES
(1, 'Fit Pack', '69,00 zł', '1', 'Karnet miesięczny, dzięki któremu przekonasz się czy jest to dla Ciebie :)'),
(2, 'Fit Plus', '120,00 zł', '2', 'Karnet dwumiesięczny, obejmujący wszystkie dodatkowe zajęcia. '),
(3, 'Fit Comfort', '159,00 zł', '3', 'Fit Comfort to karnet dla wytrwałych, spróbuj swoich sił :)'),
(4, 'Fit Open', '300,00 zł', '12', 'Kupisz raz - masz na cały czas, a przynajmniej na rok przyjemności :) '),
(5, 'Fit Student', '80,00 zł', '4', 'Jesteś studentem? To coś specjalnego dla Ciebie :)'),
(6, 'Fit Emeryt', '90,00 zł', '4', 'Zadbaj o swoje zdrowie, szczególnie na emeryturze :)');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id_produktu` int(6) NOT NULL,
  `nazwa_produktu` varchar(100) NOT NULL,
  `producent` varchar(30) NOT NULL,
  `cena` varchar(20) NOT NULL,
  `zdjecie` varchar(50) NOT NULL,
  `opis_produktu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id_produktu`, `nazwa_produktu`, `producent`, `cena`, `zdjecie`, `opis_produktu`) VALUES
(1, '100% NATURAL WHEY PROTEIN CONCENTRATE', 'Olimp Sport', '55,00 zl', 'produkt1.jpg', '100% Natural Whey Protein Concentrate. Dietetyczny środek spożywczy. Koncentrat białek serwatkowych w proszku instant (77% białka). \r\n\r\nWysokiej jakości, czysty koncentrat białek serwatkowych WPC. Białko przyczynia się do wzrostu i utrzymania masy mięśniowej.'),
(2, 'HANTLE PILATES 2X5 KG', 'Domyos', '89,99 zl', 'produkt2.jpg', 'Te hantle przeznaczone są do wzmacniania mięśni całego ciała. Dostępne są w 6 wersjach wagowych - dobierz je do Twoich potrzeb!\r\nĆwicz całe ciało z tą parą hantli: przysiady, wykroki, wyciskanie leżąc... Zwiększ intensywność treningów i szybciej osiągaj swoje cele!'),
(3, 'Zestaw taśm Mini Power Band 4szt.', '4FIZJO', '29,00 zł', 'produkt3.jpg', 'Znakomite gumy treningowe stworzone dla najbardziej wymagających sportowców! Produkowane są przez polską firmę z wykorzystaniem najwyższej jakości lateksu o zwiększonej wytrzymałości na rozciąganie. Zapewniają progresywny opór, tj. zwieszający się wraz ze stopniem naciągnięcia gumy.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `trening`
--

CREATE TABLE `trening` (
  `id_treningu` int(6) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `cena` varchar(10) NOT NULL,
  `czas` varchar(30) CHARACTER SET latin1 NOT NULL,
  `opis` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `trening`
--

INSERT INTO `trening` (`id_treningu`, `nazwa`, `cena`, `czas`, `opis`) VALUES
(1, 'Siłowy', '100,00 zł', '1', 'Miesięczny dostęp do treningów siłowych z trenerem, spotkania 2 razy w tygodniu - Ty wybierasz dni :) '),
(2, 'Wytrzymałosciowy', '159,00 zł', '2', 'Dwumiesięczny dostęp do treningów wytrzymałościowych z trenerem. Dzięki nim zbudujesz swoją kondycję :) Spotkania 2 razy w tygodniu.'),
(3, 'Cardio', '129,00 zł', '2', 'Spotkania 3 razy w tygodniu. ');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzyt` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `rodzaj_uzyt` enum('user','admin') NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_uzyt`, `user`, `rodzaj_uzyt`, `pass`, `email`) VALUES
(1, 'adam', 'admin', 'qwerty', 'adam@gmail.com'),
(2, 'marek', 'user', 'qaz123', 'marek@gmail.com'),
(3, 'anna', 'user', 'wsx456', 'anna@gmail.com'),
(4, 'kasia', 'user', '123', 'kasia@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id_zamowienia` int(11) NOT NULL,
  `id_uzyt` int(11) NOT NULL,
  `id_karnetu` int(11) NOT NULL,
  `data_zakupu` date NOT NULL,
  `data_waznosci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zamowienie`
--

INSERT INTO `zamowienie` (`id_zamowienia`, `id_uzyt`, `id_karnetu`, `data_zakupu`, `data_waznosci`) VALUES
(11, 1, 1, '2020-01-20', '2020-02-20'),
(18, 1, 5, '2020-01-20', '2021-01-20'),
(28, 1, 6, '2020-01-26', '2020-05-26'),
(30, 4, 5, '2020-01-26', '2020-05-26'),
(31, 4, 6, '2020-01-26', '2020-05-26');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienietreningu`
--

CREATE TABLE `zamowienietreningu` (
  `id_zamowienia_treningu` int(6) NOT NULL,
  `id_uzyt` int(6) DEFAULT NULL,
  `id_treningu` int(6) DEFAULT NULL,
  `data_zakupu` date DEFAULT NULL,
  `data_waznosci` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienietreningu`
--

INSERT INTO `zamowienietreningu` (`id_zamowienia_treningu`, `id_uzyt`, `id_treningu`, `data_zakupu`, `data_waznosci`) VALUES
(1, 1, 1, '2018-03-04', '2018-04-04'),
(2, 1, 1, '2018-10-12', '2018-11-12'),
(3, 1, 2, '2019-06-12', '2019-08-12'),
(4, 1, 1, '2020-01-20', '2020-02-20'),
(5, 1, 2, '2020-01-20', '2020-03-20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie_produktu`
--

CREATE TABLE `zamowienie_produktu` (
  `id_zam_produktu` int(6) NOT NULL,
  `id_uzyt` int(6) NOT NULL,
  `id_produktu` int(6) NOT NULL,
  `data_zakupu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `zamowienie_produktu`
--

INSERT INTO `zamowienie_produktu` (`id_zam_produktu`, `id_uzyt`, `id_produktu`, `data_zakupu`) VALUES
(1, 1, 1, '2020-01-21'),
(2, 1, 1, '2020-01-23'),
(3, 1, 2, '2020-01-23'),
(4, 1, 1, '2021-01-24');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `karnet`
--
ALTER TABLE `karnet`
  ADD PRIMARY KEY (`id_karnetu`);

--
-- Indeksy dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id_produktu`);

--
-- Indeksy dla tabeli `trening`
--
ALTER TABLE `trening`
  ADD PRIMARY KEY (`id_treningu`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzyt`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `zam_id_fk` (`id_karnetu`),
  ADD KEY `zam_id_uzt_fk` (`id_uzyt`);

--
-- Indeksy dla tabeli `zamowienietreningu`
--
ALTER TABLE `zamowienietreningu`
  ADD PRIMARY KEY (`id_zamowienia_treningu`),
  ADD KEY `id_uzyt` (`id_uzyt`),
  ADD KEY `id_treningu` (`id_treningu`);

--
-- Indeksy dla tabeli `zamowienie_produktu`
--
ALTER TABLE `zamowienie_produktu`
  ADD PRIMARY KEY (`id_zam_produktu`),
  ADD KEY `zam_produktu_fk` (`id_uzyt`),
  ADD KEY `zam_produktu_fk2` (`id_produktu`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zam_id_fk` FOREIGN KEY (`id_karnetu`) REFERENCES `karnet` (`id_karnetu`),
  ADD CONSTRAINT `zam_id_uzt_fk` FOREIGN KEY (`id_uzyt`) REFERENCES `uzytkownicy` (`id_uzyt`);

--
-- Ograniczenia dla tabeli `zamowienietreningu`
--
ALTER TABLE `zamowienietreningu`
  ADD CONSTRAINT `zamowienietreningu_ibfk_1` FOREIGN KEY (`id_uzyt`) REFERENCES `uzytkownicy` (`id_uzyt`),
  ADD CONSTRAINT `zamowienietreningu_ibfk_2` FOREIGN KEY (`id_treningu`) REFERENCES `trening` (`id_treningu`);

--
-- Ograniczenia dla tabeli `zamowienie_produktu`
--
ALTER TABLE `zamowienie_produktu`
  ADD CONSTRAINT `zam_produktu_fk` FOREIGN KEY (`id_uzyt`) REFERENCES `uzytkownicy` (`id_uzyt`),
  ADD CONSTRAINT `zam_produktu_fk2` FOREIGN KEY (`id_produktu`) REFERENCES `produkt` (`id_produktu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
