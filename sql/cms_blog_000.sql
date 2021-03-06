-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Lip 2021, 12:25
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cms_blog`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `term` date NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `author` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`id`, `title`, `term`, `body`, `published`, `author`, `create_at`) VALUES
(1, '\\sadv\\s tets', '2021-07-14', '&lt;p&gt;awdADad&lt;/p&gt;', 1, 'awdADa', '2021-07-30 11:12:42'),
(2, 'sdfbvadfb', '2021-06-30', '&lt;p&gt;zdfvsdf&lt;/p&gt;', 1, 'seba', '2021-07-14 18:28:30'),
(3, 'aktual3-uuuuuuuuuuuuu', '2021-07-25', '&lt;p&gt;aaaaaaaaaaaa2-uuuuuuuuuu&lt;/p&gt;', 1, 'seba', '2021-07-24 16:54:43'),
(4, 'Walne zgromadzenie', '2021-08-07', '&lt;h2&gt;What is Lorem Ipsum?&lt;/h2&gt;&lt;p&gt;&lt;strong&gt;Lorem Ipsum&lt;/strong&gt; is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;zaktualizował: seba 07/30/2021 12:23:46 pm', 1, 'seba', '2021-07-30 12:23:46'),
(5, 'adsasdasssssssssssssss', '2021-07-07', '&lt;p&gt;asdasdasdassssssssssssssssssssssss&lt;/p&gt;', 1, 'seba', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `term` date DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `user_name`, `topic_id`, `term`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(22, 23, 'seba', 3, '2021-07-11', 'test121212', '1626808762_mapa.png', '&lt;p&gt;test222&lt;/p&gt;', 1, '2021-07-11 15:39:49'),
(23, 23, 'seba', 5, '2021-09-24', 'test2', '1626807317_kufel.png', '&lt;p&gt;assasas po zmianach&lt;/p&gt;', 1, '2021-07-11 15:40:16'),
(24, 23, 'seba', 5, '2021-07-24', 'test terminu', '1627134883_klasy.png', '&lt;p&gt;test poprawności wprowadzania danyctf&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Poza tym t o i jeszcze wiecej&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;', 1, '2021-07-24 15:54:43');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Szkolenie', '<p>test change</p>'),
(3, 'Walne zgromadzenie', '<p>Walne zgromadzenie</p>'),
(5, 'szkolenie AD-HOC', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(21, 1, 'Melvine', 'melvineawa@gmail.com', '$2y$10$.KTfxbvgxwtQF8pKXsJ9UeiyL7BiuJpEYRzhWuJo1aDlaBPm4pe6G', '2019-11-23 14:23:30'),
(22, 1, 'Awa Melvine', 'melvine@d.com', '$2y$10$oiKQ31vuUWlPSghDQJliceQJidPBnLt3X/ggEkaoR.lGAHkYBZ7Qu', '2019-11-27 07:08:45'),
(23, 1, 'seba', 'admin@d.pl', '$2y$10$bRn9ESz4M1pPBiEGinJpMe4GUjmAchvWjtfmuqie.y8E8/1uebylu', '2021-07-06 13:30:34'),
(27, 0, 'smyhail', 'smyhail@02.pl', '$2y$10$ush9zmzi6IiqoutalDPz0.BVdJdj1qCQyD2k.HFlsZfpl42XgfXsq', '2021-07-07 13:34:01'),
(28, 0, 'user', 'smyhail@02222.pl', '$2y$10$a.yUuffu6aqcnuQQOGTDS.y3Cm/tprYU0tf3Gts717XWJxxiLux06', '2021-07-20 19:30:44'),
(31, 0, 'myhail', 'myhail@ggg.lp', '$2y$10$SWB05c/AtX55Hx5.j71cH.QtUONaa9frYu/AKYolaxW.oj660iBT2', '2021-07-20 19:53:28');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indeksy dla tabeli `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
