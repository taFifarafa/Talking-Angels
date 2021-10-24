-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Paź 2021, 14:08
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `talkingangels`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ta_chats`
--

CREATE TABLE `ta_chats` (
  `id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `chat_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ta_chats`
--

INSERT INTO `ta_chats` (`id`, `session_id`, `chat_id`) VALUES
(7, '6172a984d36e7', 'chat6172a984d3c6e');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ta_helpers`
--

CREATE TABLE `ta_helpers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ta_helpers`
--

INSERT INTO `ta_helpers` (`id`, `name`, `surname`, `job_location`, `email`, `job_type`, `pass`) VALUES
(2, 'Mateusz', 'Kowalski', 'Szkoła', 'a@a.com', 'Psycholog', '$2y$10$SoCYkjUO.iGddcCzvXcv2OV72FcI9quM7N2SCNmChwZQ3ZGEKW.Ou');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ta_messages`
--

CREATE TABLE `ta_messages` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `chat_id` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `acc_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ta_messages`
--

INSERT INTO `ta_messages` (`id`, `user_id`, `chat_id`, `message`, `acc_type`) VALUES
(10, '6172a70fe176d', 'chat6172a71184728', 'CZESC', 0),
(11, '6172a70fe176d', 'chat6172a71184728', 'asdasd', 0),
(12, '6172a890da1d7', 'chat6172a890e045e', 'aa', 0),
(13, '6172a890da1d7', 'chat6172a890e045e', 'aaa', 0),
(14, '6172a890da1d7', 'chat6172a890e045e', 'asdasd', 0),
(15, '6172a890da1d7', 'chat6172a890e045e', 'sdasdasd', 0),
(16, '6172a890da1d7', 'chat6172a890e045e', 'aa', 0),
(17, '6172a984d36e7', 'chat6172a984d3c6e', 'aaaa', 0),
(18, 'Mateusz Kowalski', 'chat6172a984d3c6e', 'Witam', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ta_chats`
--
ALTER TABLE `ta_chats`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ta_helpers`
--
ALTER TABLE `ta_helpers`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `ta_messages`
--
ALTER TABLE `ta_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `ta_chats`
--
ALTER TABLE `ta_chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `ta_helpers`
--
ALTER TABLE `ta_helpers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `ta_messages`
--
ALTER TABLE `ta_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
