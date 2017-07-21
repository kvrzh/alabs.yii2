-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 21 2017 г., 12:01
-- Версия сервера: 5.5.53
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aerolabs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(55) NOT NULL,
  `hex` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `hex`) VALUES
(1, 'black', '#2c3e50'),
(2, 'brown', '#D35400'),
(3, 'grey', '#bdc3c7');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`) VALUES
(1, 'Argentum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur ex sed felis scelerisque, vel euismod lacus tempor. Proin maximus tortor quam, luctus ultrices est cursus in. Sed accumsan turpis id est suscipit dignissim. Pellentesque nec eleifend orci. Curabitur egestas, tortor non commodo faucibus, nibh tellus venenatis odio, a ornare enim purus eu orci. Pellentesque et rhoncus leo. Etiam elementum sapien odio.'),
(2, 'Velen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur ex sed felis scelerisque, vel euismod lacus tempor. Proin maximus tortor quam, luctus ultrices est cursus in. Sed accumsan turpis id est suscipit dignissim. Pellentesque nec eleifend orci. Curabitur egestas, tortor non commodo faucibus, nibh tellus venenatis odio, a ornare enim purus eu orci. Pellentesque et rhoncus leo. Etiam elementum sapien odio.'),
(3, 'Krypton Side', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur ex sed felis scelerisque, vel euismod lacus tempor. Proin maximus tortor quam, luctus ultrices est cursus in. Sed accumsan turpis id est suscipit dignissim. Pellentesque nec eleifend orci. Curabitur egestas, tortor non commodo faucibus, nibh tellus venenatis odio, a ornare enim purus eu orci. Pellentesque et rhoncus leo. Etiam elementum sapien odio.'),
(4, 'Argon Li', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum efficitur ex sed felis scelerisque, vel euismod lacus tempor. Proin maximus tortor quam, luctus ultrices est cursus in. Sed accumsan turpis id est suscipit dignissim. Pellentesque nec eleifend orci. Curabitur egestas, tortor non commodo faucibus, nibh tellus venenatis odio, a ornare enim purus eu orci. Pellentesque et rhoncus leo. Etiam elementum sapien odio.');

-- --------------------------------------------------------

--
-- Структура таблицы `products_colors`
--

CREATE TABLE `products_colors` (
  `products_id` int(10) NOT NULL,
  `colors_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products_colors`
--

INSERT INTO `products_colors` (`products_id`, `colors_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(4, 2),
(4, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products_colors`
--
ALTER TABLE `products_colors`
  ADD PRIMARY KEY (`products_id`,`colors_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
