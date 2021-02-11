-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lut 2021, 18:30
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
-- Baza danych: `chat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(7, 1, 5, 'cos tam cos tam', '2021-01-03 16:41:55', 1),
(8, 4, 5, 'z1 haslo ma qaz', '2021-01-03 16:42:53', 0),
(10, 5, 4, 'okej', '2021-01-03 21:41:55', 0),
(11, 5, 4, 'dzieki', '2021-01-03 21:42:03', 0),
(12, 0, 5, 'tu chyba nue dziala dymek ile jest wiadomosci', '2021-01-03 21:43:17', 0),
(29, 0, 5, '<p><img src=\"upload/panda.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2021-01-14 17:22:20', 1),
(30, 0, 5, 'upload/lab4.pdf', '2021-01-14 18:13:38', 1),
(31, 0, 5, 'Praca domowa.pdf', '2021-01-14 18:17:23', 1),
(32, 0, 5, 'prir_3dd.png', '2021-01-14 18:18:30', 1),
(33, 4, 5, 'ssss', '2021-01-14 18:36:57', 0),
(34, 1, 5, 'hh', '2021-01-15 14:42:54', 1),
(35, 1, 5, '😃', '2021-01-16 11:09:37', 1),
(36, 1, 5, '😄', '2021-01-16 11:12:49', 1),
(37, 1, 5, '😄', '2021-01-16 11:12:50', 1),
(38, 1, 5, '🙂', '2021-01-16 11:13:07', 1),
(39, 1, 5, '🙂', '2021-01-16 11:13:09', 1),
(40, 5, 4, 'r', '2021-01-16 21:57:35', 0),
(41, 0, 4, 'lab4.pdf', '2021-01-19 21:18:30', 1),
(42, 4, 5, 'bbnbnbn', '2021-01-21 23:14:43', 1),
(43, 4, 6, 'hej adam', '2021-01-26 20:18:25', 1),
(44, 1, 3, 'hej adam', '2021-01-27 08:40:38', 0),
(45, 3, 1, 'hej krzys co słychac', '2021-01-27 08:41:13', 0),
(46, 3, 1, 'ssss', '2021-01-27 08:41:24', 0),
(47, 3, 1, 'cos', '2021-01-27 08:41:32', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `id_uzt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Zrzut danych tabeli `files`
--

INSERT INTO `files` (`id`, `name`, `id_uzt`) VALUES
(0, 'lab4.pdf', 1),
(1, 'adapter.png', 1),
(2, 'bioooooo.png', 1),
(3, 'lab4.pdf', 2),
(4, 'lab4.pdf', 2),
(5, 'lab4.pdf', 3),
(6, 'Sprawozdanie_lab 12-13.pdf', 3),
(7, 'Sprawozdanie_lab8.pdf', 3),
(8, 'Sprawozdanie_lab_14.pdf', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rodzaj_uzyt` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `rodzaj_uzyt`) VALUES
(1, 'adam', '$2y$10$LmKeWiNXL2d50g8.wQylYuEw/yl/HVh.QJQ.OWyucIrsIuZez9xfG', 'user'),
(2, 'z1', '$2y$10$TGg39qpPj7F5iXGbw/S8k.38XVc5nWeuiqYhpuZ3CM7wxd/97Cmgi', 'user'),
(3, 'krzys', '$2y$10$aq4yxNq8jVmlO5TGGTBjoOdsEp8ZUJti55t7vjTPz3esTmIyeBUVa', 'admin'),
(7, 'kasia', '$2y$10$IWStsg0fiaanG1UY/zJLK.CVshMLWeoV0GYZOD0OwjYd.XNMrIXpG', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2020-12-29 12:16:25', 'no'),
(2, 4, '2020-12-29 22:01:33', 'no'),
(3, 5, '2021-01-03 21:41:29', 'no'),
(4, 4, '2021-01-03 21:42:19', 'no'),
(5, 5, '2021-01-03 21:43:23', 'no'),
(6, 4, '2021-01-03 21:51:10', 'no'),
(7, 5, '2021-01-08 21:06:33', 'no'),
(8, 4, '2021-01-03 21:57:40', 'no'),
(9, 4, '2021-01-14 10:51:21', 'no'),
(10, 5, '2021-01-16 19:56:22', 'no'),
(11, 4, '2021-01-21 14:48:45', 'no'),
(12, 5, '2021-01-24 17:18:39', 'no'),
(13, 5, '2021-01-24 17:25:56', 'no'),
(14, 6, '2021-01-26 20:44:33', 'no'),
(15, 3, '2021-01-27 08:40:41', 'no'),
(16, 1, '2021-01-27 08:41:37', 'no'),
(17, 3, '2021-01-27 11:22:42', 'no'),
(18, 3, '2021-01-27 13:30:02', 'no'),
(19, 3, '2021-01-27 15:01:50', 'no');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indeksy dla tabeli `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeksy dla tabeli `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT dla tabeli `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
