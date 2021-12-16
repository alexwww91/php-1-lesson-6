-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 16 2021 г., 16:01
-- Версия сервера: 5.6.51-log
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Description` text CHARACTER SET utf8mb4 NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `Description`, `price`, `img`) VALUES
(1, 'Смартфон Honor 50 6/128GB (изумрудно-зеленый)', 'Диагональ (дюйм): 6.57\r\nРазрешение (пикс): 2340x1080\r\nВстроенная память (Гб): 128\r\nФотокамера (Мп): 108 + 8 + 2 + 2 (четыре основные камеры)\r\nПроцессор: Qualcomm Snapdragon 778G', 31490, 'Honor-50.jpg'),
(2, 'Смартфон Apple iPhone 12 256GB (фиолетовый)', 'Диагональ (дюйм): 6.1\r\nРазрешение (пикс): 2532x1170\r\nВстроенная память (Гб): 256\r\nФотокамера (Мп): 12 + 12 (двойная)\r\nОптический зум: x2', 79990, 'iPhone-12.jpg'),
(3, 'Смартфон Samsung Galaxy Z Flip3 5G 8/128GB (бежевый)', 'Диагональ (дюйм): 6.7\r\nРазрешение (пикс): 2640x1080\r\nВстроенная память (Гб): 128\r\nФотокамера (Мп): 12 + 12 (двойная)\r\nПроцессор: Qualcomm Snapdragon 888', 89990, 'Samsung-Galaxy-Z-Flip3.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
