-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 13 2022 г., 20:35
-- Версия сервера: 5.7.33
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books_kg`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `basket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`book_id`, `book_name`, `book_price`, `basket_id`) VALUES
(90, 'Mathematics', 240, 2),
(91, 'Russian language', 220, 3),
(92, 'Kyrgyz grammar', 300, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `bestsellers`
--

CREATE TABLE `bestsellers` (
  `best_id` int(11) NOT NULL,
  `best_name` text NOT NULL,
  `best_image` varchar(100) NOT NULL,
  `best_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bestsellers`
--

INSERT INTO `bestsellers` (`best_id`, `best_name`, `best_image`, `best_price`, `book_price_discount`) VALUES
(1, 'Russian grammar', 'image\\books\\bestsellers\\bestseller-1.jpg', 300, NULL),
(2, 'Russian language 1pt.', 'image\\books\\bestsellers\\bestseller-2.png', 320, NULL),
(3, 'Kyrgyz grammar', 'image\\books\\bestsellers\\bestseller-4.jpg', 300, 150),
(4, 'Russian language 2pt.', 'image\\books\\bestsellers\\bestseller-3.png', 320, NULL),
(5, 'Mathematics', 'image\\books\\bestsellers\\bestseller-5.jpg', 300, NULL),
(6, 'Russian language 3pt.', 'image/books/bestsellers/bestseller-6.png', 320, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_5`
--

CREATE TABLE `books_5` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_5`
--

INSERT INTO `books_5` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Russian language', 'image\\books\\books-5\\book-1.jpg', 230, 172),
(2, 'Mathematics', 'image\\books\\books-5\\book-2.jpg', 240, NULL),
(3, 'English', 'image\\books\\books-5\\book-3.jpg', 230, NULL),
(4, 'Russian literature', 'image\\books\\books-5\\book-4.jpg', 230, NULL),
(5, 'Kyrgyz language', 'image\\books\\books-5\\book-5.jpg', 230, NULL),
(6, 'History', 'image\\books\\books-5\\book-6.jpg', 240, NULL),
(7, 'Kyrgyz literature', 'image\\books\\books-5\\book-7.jpg', 240, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_6`
--

CREATE TABLE `books_6` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_6`
--

INSERT INTO `books_6` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Mathematics', 'image\\books\\books-6\\book-1.jpg', 240, 180),
(2, 'English', 'image\\books\\books-6\\book-2.jpg', 230, NULL),
(3, 'Russian language', 'image\\books\\books-6\\book-3.jpg', 220, NULL),
(4, 'History', 'image\\books\\books-6\\book-4.jpg', 230, NULL),
(5, 'Kyrgyz literature', 'image\\books\\books-6\\book-5.jpg', 240, NULL),
(6, 'Russian literature', 'image\\books\\books-6\\book-6.jpg', 220, NULL),
(7, 'Kyrgyz literature', 'image\\books\\books-6\\book-7.png', 230, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_7`
--

CREATE TABLE `books_7` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_7`
--

INSERT INTO `books_7` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Russian language', 'image\\books\\books-7\\book-1.jpeg', 230, NULL),
(2, 'English', 'image\\books\\books-7\\book-2.jpg', 230, 172),
(3, 'Kyrgyz literature', 'image\\books\\books-7\\book-3.png', 240, NULL),
(4, 'Kyrgyz language', 'image\\books\\books-7\\book-4.jpg', 230, NULL),
(5, 'History', 'image\\books\\books-7\\book-5.jpg', 240, NULL),
(6, 'Algebra', 'image\\books\\books-7\\book-6.png', 230, NULL),
(7, 'Russian literature', 'image\\books\\books-7\\book-7.jpg', 240, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_8`
--

CREATE TABLE `books_8` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_8`
--

INSERT INTO `books_8` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Physics', 'image\\books\\books-8\\book-1.png', 230, 172),
(2, 'Biology', 'image\\books\\books-8\\book-2.jpg', 230, NULL),
(3, 'Chemistry', 'image\\books\\books-8\\book-3.jpg', 230, NULL),
(4, 'Geometry', 'image\\books\\books-8\\book-4.jpg', 240, NULL),
(5, 'English', 'image\\books\\books-8\\book-5.jpg', 230, NULL),
(6, 'Geography', 'image\\books\\books-8\\book-6.jpg', 230, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_9`
--

CREATE TABLE `books_9` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_9`
--

INSERT INTO `books_9` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Biology', 'image\\books\\books-9\\book-1.jpg', 230, 172),
(2, 'Geography', 'image\\books\\books-9\\book-2.jpg', 230, NULL),
(3, 'Chemistry', 'image\\books\\books-9\\book-3.jpg', 230, NULL),
(4, 'Physics', 'image\\books\\books-9\\book-4.jpg', 230, NULL),
(5, 'Algebra', 'image\\books\\books-9\\book-5.jpg', 230, NULL),
(6, 'English', 'image\\books\\books-9\\book-6.jpg', 230, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_10`
--

CREATE TABLE `books_10` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_10`
--

INSERT INTO `books_10` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Economy', 'image\\books\\books-10\\book-1.jpg', 240, 180),
(2, 'Physics', 'image\\books\\books-10\\book-2.jpg', 240, NULL),
(3, 'Kyrgyz literature', 'image\\books\\books-10\\book-3.jpg', 240, NULL),
(4, 'Chemistry', 'image\\books\\books-10\\book-4.jpg', 240, NULL),
(5, 'English', 'image\\books\\books-10\\book-5.jpg', 240, NULL),
(6, 'Geometry', 'image\\books\\books-10\\book-6.jpg', 240, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_11`
--

CREATE TABLE `books_11` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(11) NOT NULL,
  `book_price_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_11`
--

INSERT INTO `books_11` (`book_id`, `book_name`, `book_image`, `book_price`, `book_price_discount`) VALUES
(1, 'Chemistry', 'image\\books\\books-11\\book-1.jpg', 240, 180),
(2, 'Russian language', 'image\\books\\books-11\\book-2.jpg', 240, NULL),
(3, 'Geometry', 'image\\books\\books-11\\book-3.jpg', 240, NULL),
(4, 'English', 'image\\books\\books-11\\book-4.jpg', 240, NULL),
(5, 'Kyrgyz language', 'image\\books\\books-11\\book-5.jpg', 240, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `books_lists`
--

CREATE TABLE `books_lists` (
  `book_id` int(11) NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_lists`
--

INSERT INTO `books_lists` (`book_id`, `book_image`) VALUES
(1, 'image\\books\\books-5\\book-1.jpg'),
(2, 'image\\books\\books-6\\book-1.jpg'),
(3, 'image\\books\\books-7\\book-2.jpg'),
(4, 'image\\books\\books-8\\book-1.png'),
(5, 'image\\books\\books-9\\book-1.jpg'),
(6, 'image\\books\\books-10\\book-1.jpg'),
(7, 'image\\books\\books-11\\book-1.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `bestsellers`
--
ALTER TABLE `bestsellers`
  ADD PRIMARY KEY (`best_id`);

--
-- Индексы таблицы `books_5`
--
ALTER TABLE `books_5`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_6`
--
ALTER TABLE `books_6`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_7`
--
ALTER TABLE `books_7`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_8`
--
ALTER TABLE `books_8`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_9`
--
ALTER TABLE `books_9`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_10`
--
ALTER TABLE `books_10`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_11`
--
ALTER TABLE `books_11`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `books_lists`
--
ALTER TABLE `books_lists`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `bestsellers`
--
ALTER TABLE `bestsellers`
  MODIFY `best_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `books_5`
--
ALTER TABLE `books_5`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `books_6`
--
ALTER TABLE `books_6`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `books_7`
--
ALTER TABLE `books_7`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `books_8`
--
ALTER TABLE `books_8`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `books_9`
--
ALTER TABLE `books_9`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `books_10`
--
ALTER TABLE `books_10`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `books_11`
--
ALTER TABLE `books_11`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `books_lists`
--
ALTER TABLE `books_lists`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
