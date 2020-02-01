-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 31 2020 г., 09:42
-- Версия сервера: 5.7.23-log
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `stage1` int(11) DEFAULT '0',
  `stage2` int(11) DEFAULT '0',
  `stage3` int(11) DEFAULT '0',
  `stage4` int(11) DEFAULT '0',
  `stage5` int(11) DEFAULT '0',
  `stage6` int(11) DEFAULT '0',
  `stage7` int(11) DEFAULT '0',
  `stage8` int(11) DEFAULT '0',
  `stage9` int(11) DEFAULT '0',
  `active` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `player`
--

INSERT INTO `player` (`id_player`, `id_user`, `stage1`, `stage2`, `stage3`, `stage4`, `stage5`, `stage6`, `stage7`, `stage8`, `stage9`, `active`) VALUES
(1, 43, 0, 32, 54, 0, 56, 0, 0, 0, 0, 1),
(2, 44, 30, 0, 0, 5, 0, 0, 15, 0, 0, 1),
(3, 45, 15, 0, 0, 0, 0, 34, 0, 0, 0, 1),
(4, 46, 0, 0, 23, 0, 0, 7, 0, 0, 0, 1),
(5, 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(6, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(7, 49, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `season`
--

CREATE TABLE `season` (
  `id_season` int(11) NOT NULL,
  `name_season` varchar(30) DEFAULT NULL,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `season`
--

INSERT INTO `season` (`id_season`, `name_season`, `date_start`, `date_end`) VALUES
(1, 'Осенний', '2019-09-05', '2019-10-06'),
(2, 'Зимний', '2020-01-01', '2020-02-07'),
(3, 'Весенний', '2020-03-03', '2020-04-05');

-- --------------------------------------------------------

--
-- Структура таблицы `seasons`
--

CREATE TABLE `seasons` (
  `id_note` int(11) NOT NULL,
  `id_season` int(11) NOT NULL,
  `id_player` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `seasons`
--

INSERT INTO `seasons` (`id_note`, `id_season`, `id_player`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 2, 3),
(5, 3, 4),
(6, 2, 5),
(7, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `family` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `skills` text,
  `self` text,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `family`, `age`, `skills`, `self`, `email`) VALUES
(43, 'Иван', 'Иванов', 20, '', '', 'example@com'),
(44, 'Мария ', 'Ивановна', 19, '', 'self of maria', 'mar.example2@com'),
(45, 'Анастасия', 'Редмартовна', 21, '', 'self of nastya', 'nas.example@com.ye'),
(46, 'Александер', 'Первый', 35, '', 'self of allex', 'alex.ee@com.ru'),
(47, 'Алеша', 'Второй', 21, '', 'self of alesha', 'alesha.ky@com.ru'),
(48, 'Катя', 'Третья', 19, 'skills of katya', 'self of katya', 'katya.oe@com.ru'),
(49, 'Иван', 'Первый', 23, 'Скилзы', 'Селф', 'example@com');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id_season`);

--
-- Индексы таблицы `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `id_season` (`id_season`),
  ADD KEY `id_player` (`id_player`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `season`
--
ALTER TABLE `season`
  MODIFY `id_season` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `seasons`
--
ALTER TABLE `seasons`
  ADD CONSTRAINT `seasons_ibfk_1` FOREIGN KEY (`id_season`) REFERENCES `season` (`id_season`),
  ADD CONSTRAINT `seasons_ibfk_2` FOREIGN KEY (`id_player`) REFERENCES `player` (`id_player`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
