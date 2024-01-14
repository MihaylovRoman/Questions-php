-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 14 2024 г., 13:54
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Questionnaire`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Review`
--

CREATE TABLE `Review` (
  `id` int(11) NOT NULL,
  `name` char(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Review`
--

INSERT INTO `Review` (`id`, `name`, `email`, `description`, `rating`, `date`) VALUES
(3, 'Иван', 'qwe@mail.ru', 'Сообщение', 4, '2024-01-14 00:00:00'),
(4, 'Артем', 'qwe@mail.ru', 'Сломалось и не работает. Я очень раздосадован, не знаю, что делать(', 1, '2024-01-14 00:00:00'),
(5, 'Никита', 'qwe@mail.ru', 'Товар бомба, буду брать еще!', 5, '2024-01-14 01:24:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Review`
--
ALTER TABLE `Review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
