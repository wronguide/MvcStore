-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 09 2024 г., 04:30
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `MyMvcStore`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Banner`
--

CREATE TABLE `Banner` (
  `id` int NOT NULL,
  `id_product` int NOT NULL,
  `img_banner` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Banner`
--

INSERT INTO `Banner` (`id`, `id_product`, `img_banner`) VALUES
(1, 64, 'pirate.png'),
(2, 60, 'mafia.png'),
(3, 70, 'GamePrestol.png');

-- --------------------------------------------------------

--
-- Структура таблицы `Cart`
--

CREATE TABLE `Cart` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Cart`
--

INSERT INTO `Cart` (`id`, `id_user`, `id_product`, `count`) VALUES
(6, 20, 56, 1),
(7, 20, 57, 1),
(8, 20, 54, 2),
(19, 18, 57, 1),
(20, 18, 62, 1),
(21, 18, 55, 6),
(22, 18, 56, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `Categories`
--

CREATE TABLE `Categories` (
  `id_category` int NOT NULL,
  `name_category` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Categories`
--

INSERT INTO `Categories` (`id_category`, `name_category`) VALUES
(10, 'Вечериночные игры'),
(11, 'Викторины'),
(12, 'Детские игры'),
(13, 'Детективные игры'),
(14, 'Для одного'),
(15, 'Дуэльные игры'),
(16, 'Живые карточные игры (LCG)'),
(17, 'Карточные игры'),
(18, 'Квесты'),
(19, 'Командные игры'),
(20, 'Классические игры'),
(21, 'Книги-игры'),
(22, 'Кооперативные игры'),
(23, 'Логические игры'),
(24, 'Наборы игр'),
(25, 'Полукооперативные игры'),
(26, 'Приключенческие игры'),
(27, 'Семейные игры'),
(28, 'Стратегические игры'),
(29, 'Хардкорные игры'),
(30, 'Экономические игры');

-- --------------------------------------------------------

--
-- Структура таблицы `Customers`
--

CREATE TABLE `Customers` (
  `ID` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Customers`
--

INSERT INTO `Customers` (`ID`, `name`, `surname`, `email`, `phonenumber`, `password`, `photo`) VALUES
(2, 'Мария', 'Петрова', 'maria@example.com', '987-654-3210', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(3, 'Алексей', 'Сидоров', 'alex@example.com', '555-555-5555', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(4, 'Елена', 'Козлова', 'elena@example.com', '777-888-9999', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(5, 'Павел', 'Федоров', 'pavel@example.com', '333-222-1111', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(6, 'Ольга', 'Лебедева', 'olga@example.com', '111-222-3333', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(7, 'Андрей', 'Кузнецов', 'andrey@example.com', '999-777-5555', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(8, 'Наталья', 'Морозова', 'natalia@example.com', '444-888-2222', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(9, 'Владимир', 'Павлов', 'vladimir@example.com', '666-999-7777', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(18, 'Надежда', 'Тихонова', 'wronguide@gmail.com', '89236654275', '$2y$10$uTmO/hseV3VwU/6CnnTaPOIv/tm139.Lzj.PadUJu3EbohoykRsoq', ''),
(19, 'Иван', 'Иванов', 'user@gmail.com', '11111', '$2y$10$ZZQQuDPYkMufJMB2fip9rOE9XqLT1I6LuPxXwMpwgzd1NyRWI07iG', ''),
(20, 'Admin', 'Admin', 'Admin@gmail.com', '23423423152', '$2y$10$4RD99hxg5JiStyV52ReY3e7RE.2li6TKYccI8kt7DA6JOlg4rHfrC', '');

-- --------------------------------------------------------

--
-- Структура таблицы `OrderItems`
--

CREATE TABLE `OrderItems` (
  `ID` int NOT NULL,
  `IDorder` int NOT NULL,
  `IDproduct` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `ID` int NOT NULL,
  `IDclient` int NOT NULL,
  `data` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `ID` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL,
  `id_category` int NOT NULL,
  `image` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `age` int NOT NULL,
  `countPlayers` varchar(10) NOT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0',
  `slogan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`ID`, `name`, `price`, `description`, `id_category`, `image`, `age`, `countPlayers`, `hot`, `slogan`) VALUES
(53, 'Кодовое имя: Легион', 2500, 'Карточная игра, в которой игроки выступают в роли секретных агентов, пытающихся передать секретные коды своим союзникам.', 17, 'legion.jpg,second.jpg,third.jpg', 12, '4-5', 1, 'Шпионская миссия начинается!'),
(54, 'Властелин колец: Кольцо арены', 2200, 'Стратегическая настольная игра, основанная на мире \"Властелина колец\", где игроки сражаются за контроль над территорией.', 28, 'lotr_arena.jpg,second.jpg,third.jpg', 16, '2', 0, 'Завоюйте Средиземье!'),
(55, 'Шерлок Холмс: Консультант детектива', 1800, 'Логическая игра, где игроки играют в роли помощников Шерлока Холмса, расследуя сложные преступления.', 13, 'sherlock_detective.jpg,second.jpg,third.jpg', 12, '3-6', 0, 'Раскройте тайны Лондона!'),
(56, 'Диковинные дела: Менеджер магазина монстров', 1500, 'Детская игра, где игроки управляют магазином, продающим различных монстров и общаются с клиентами.', 12, 'monster_shop.jpg,second.jpg,third.jpg', 6, '2-7', 1, 'Монстры для каждого вкуса!'),
(57, 'За гранью реальности: Погоня за иллюзиями', 2800, 'Приключенческая игра, где игроки исследуют загадочные миры и сражаются с темными силами.', 26, 'beyond_reality.jpg,second.jpg,third.jpg', 16, '4-6', 0, 'Откройте новую реальность!'),
(58, 'Легенды Андора: Семь звуков', 2100, 'Кооперативная настольная игра, где игроки сражаются с монстрами и исследуют мир фэнтезийных приключений.', 22, 'legends_of_andor.jpg,second.jpg,third.jpg', 12, '4-10', 1, 'Спасите Андор от зла!'),
(59, 'Каркассон: Город', 1900, 'Стратегическая настольная игра, где игроки строят город, используя плитки и развивая свои территории.', 20, 'carcassonne_city.jpg,second.jpg,third.jpg', 12, '4', 0, 'Стройте свой город мечты!'),
(60, 'Мафия: Город мафии', 1600, 'Вечеринка в стиле Мафии, где игроки играют роли городских жителей, пытающихся найти и вытеснить мафиозных боссов.', 10, 'mafia_city.jpg,second.jpg,third.jpg', 16, '8-10', 0, 'Кто мафия, а кто не мафия?'),
(61, 'Космический шутер: За гранью галактики', 3000, 'Кооперативная настольная игра, где игроки пилотируют космические корабли, сражаясь с инопланетными угрозами.', 22, 'space_shooter.jpg,second.jpg,third.jpg', 12, '4-14', 0, 'Спасите галактику от вторжения!'),
(62, 'Имаджинариум: Магия мечты', 2400, 'Логическая игра, где игроки строят воображаемые миры, используя карточные изображения и создавая свои фантазии.', 23, 'imaginarium_magic.jpg,second.jpg,third.jpg', 6, '3', 0, 'Воплотите свои мечты в реальность!'),
(63, 'Дворецкий Кафки: Загадка лабиринта', 1700, 'Приключенческая игра, где игроки исследуют таинственный лабиринт, основанный на произведениях Франца Кафки.', 26, 'kafka_butler.jpg,second.jpg,third.jpg', 16, '2-4', 0, 'Раскройте секреты лабиринта!'),
(64, 'Пираты Карибского моря: Поиск сокровищ', 2000, 'Приключенческая настольная игра, где игроки отправляются в путешествие по Карибскому морю, ища потерянные сокровища.', 26, 'pirates_of_caribbean.jpg,second.jpg,third.jpg', 12, '4-5', 0, 'Удачи в поисках сокровищ!'),
(65, 'Пандемия: Вакцинация', 2900, 'Кооперативная настольная игра, где игроки борются с глобальной пандемией, разрабатывая и распространяя вакцины по всему миру.', 22, 'pandemic_vaccination.jpg,second.jpg,third.jpg', 16, '4-6', 0, 'Спасите мир от вируса!'),
(66, 'Школа магии: Уроки заклинаний', 1800, 'Детская настольная игра, где молодые волшебники учатся заклинаниям и сражаются за звание лучшего студента школы магии.', 12, 'magic_school.jpg,second.jpg,third.jpg', 6, '4', 0, 'Станьте настоящим волшебником!'),
(67, 'Люди Икс: Мутанты в борьбе', 2300, 'Стратегическая настольная игра, основанная на комиксах \"Люди Икс\", где игроки контролируют команду мутантов, сражаясь за свое место в мире.', 19, 'xmen_mutants.jpg,second.jpg,third.jpg', 16, '3', 0, 'Защитите мир от угрозы мутантов!'),
(68, 'Загадки древности: Тайны пирамиды', 2000, 'Квестовая настольная игра, где игроки исследуют древние пирамиды, раскрывая их тайны и решая головоломки.', 18, 'ancient_mysteries.jpg,second.jpg,third.jpg', 12, '2', 0, 'Разгадайте тайны пирамиды!'),
(69, 'Дом-2: Сценарий любви', 1500, 'Вечеринка с элементами романтики, где игроки играют роли участников реалити-шоу \"Дом-2\", строя свои отношения и решая конфликты.', 10, 'dom2_love.jpg,second.jpg,third.jpg', 18, '6', 0, 'Найдите свою любовь на \"Дом-2\"!'),
(70, 'Игра престолов: Игра королей', 2600, 'Стратегическая настольная игра, основанная на вселенной \"Игры престолов\", где игроки борются за власть и контроль над Железным Троном.', 28, 'game_of_thrones_kings.jpg,second.jpg,third.jpg', 16, '4', 0, 'Выиграйте игру королей!'),
(71, 'Машина времени: Путешествие в прошлое', 2100, 'Приключенческая настольная игра, где игроки путешествуют через временные линии, исследуя исторические события и влияя на будущее.', 26, 'time_machine.jpg,second.jpg,third.jpg', 12, '3-6', 0, 'Измените ход истории!'),
(72, 'Магическая иллюзия: Побег из театра', 1900, 'Квестовая настольная игра, где игроки пытаются разгадать загадки и вырваться из заколдованного театра в стиле мистики и магии.', 18, 'magic_illusion.jpg,second.jpg,third.jpg', 12, '4', 1, 'Сбегите из театра иллюзий!');

-- --------------------------------------------------------

--
-- Структура таблицы `Reviews`
--

CREATE TABLE `Reviews` (
  `ID` int NOT NULL,
  `IDproduct` int NOT NULL,
  `IDclient` int NOT NULL,
  `score` int NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Reviews`
--

INSERT INTO `Reviews` (`ID`, `IDproduct`, `IDclient`, `score`, `text`) VALUES
(2, 68, 2, 4, 'Хорошее качество, но есть небольшие недостатки.'),
(3, 63, 3, 5, 'Прекрасный товар, всем рекомендую.'),
(4, 55, 4, 3, 'Эта настольная игра – настоящий вызов для ума и логики. Отличный способ проверить свои способности к анализу и стратегическому мышлению. Глубокий геймплей и множество вариантов развития событий делают каждую партию уникальной и захватывающей. Рекомендую всем, кто любит развивать свой интеллект и проводить время с пользой!'),
(5, 70, 5, 5, 'Лучший продукт, который я когда-либо покупал.'),
(6, 63, 6, 4, 'Удовлетворительно, но можно улучшить.'),
(7, 67, 7, 2, 'Не понравился товар, ожидал большего.'),
(8, 53, 8, 5, 'Супер! Всем советую.'),
(9, 58, 9, 3, 'Отличное времяпрепровождение среди друзей и семьи! Эта настольная игра предоставляет множество возможностей для веселых и захватывающих моментов. Правила просты и понятны даже для новичков, а геймплей наполнен разнообразием и интересными поворотами сюжета. Рекомендую всем, кто ценит активный отдых и хочет провести время с пользой!'),
(10, 60, 2, 4, 'Хорошее соотношение цена/качество.'),
(11, 64, 2, 5, 'Соберите друзей вокруг стола и отправьтесь в увлекательное путешествие по миру фантазии! Эта игра подходит для всех возрастов и предлагает множество возможностей для веселого времяпрепровождения. Развивайте свои навыки командной работы и логического мышления в игре, которая захватит вас с первых минут. Рекомендую всем, кто ценит дружескую атмосферу и интересные задания!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Banner`
--
ALTER TABLE `Banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Индексы таблицы `Cart`
--
ALTER TABLE `Cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `OrderItems`
--
ALTER TABLE `OrderItems`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDorder` (`IDorder`),
  ADD KEY `IDproduct` (`IDproduct`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDclient` (`IDclient`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dd` (`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDproduct` (`IDproduct`),
  ADD KEY `IDclient` (`IDclient`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Banner`
--
ALTER TABLE `Banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `Cart`
--
ALTER TABLE `Cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `Categories`
--
ALTER TABLE `Categories`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `Customers`
--
ALTER TABLE `Customers`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `OrderItems`
--
ALTER TABLE `OrderItems`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `Reviews`
--
ALTER TABLE `Reviews`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Banner`
--
ALTER TABLE `Banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `Products` (`ID`);

--
-- Ограничения внешнего ключа таблицы `OrderItems`
--
ALTER TABLE `OrderItems`
  ADD CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`IDorder`) REFERENCES `Orders` (`ID`),
  ADD CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`IDproduct`) REFERENCES `Products` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`IDclient`) REFERENCES `Customers` (`ID`);

--
-- Ограничения внешнего ключа таблицы `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `Categories` (`id_category`);

--
-- Ограничения внешнего ключа таблицы `Reviews`
--
ALTER TABLE `Reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`IDproduct`) REFERENCES `Products` (`ID`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`IDclient`) REFERENCES `Customers` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
