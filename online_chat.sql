-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2017 at 01:56 PM
-- Server version: 5.5.54-0+deb8u1-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vladdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL DEFAULT 'anon',
  `message` text NOT NULL,
  `post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `nick`, `message`, `post_time`) VALUES
(1, 'Adolf', 'Jew is cool', '2017-02-18 10:37:54'),
(2, 'John Cena', 'JOOOHN CEEENA!!!', '2017-02-18 10:38:28'),
(3, 'anon', 'Привіт))', '2017-02-18 10:39:55'),
(4, 'Dick Valentine', 'Доречі, чомусь таймер не працює.', '2017-02-18 10:43:10'),
(5, 'Dick Valentine', 'Все, тепер таймер працює P--=)', '2017-02-18 10:55:22'),
(6, 'anon', 'Щось... ', '2017-02-18 11:00:09'),
(7, 'Гена', 'Хай ду ду', '2017-02-18 11:00:48'),
(8, 'anon', 'Оу шєт, айм сорі', '2017-02-18 11:01:06'),
(9, 'Лисий чувак', 'Сорі фор вуд', '2017-02-18 11:01:40'),
(10, 'anon', 'Самтаймс.. ', '2017-02-18 11:02:01'),
(11, 'anon', 'i pull on so hard', '2017-02-18 11:03:59'),
(12, 'anon', 'Доречі, тут модерації немає. Так що...', '2017-02-18 11:04:23'),
(13, 'anon', 'Так, перевірка enter', '2017-02-18 11:05:15'),
(14, 'Dick Valentine', 'enter працює', '2017-02-18 11:05:36'),
(15, 'Кусь!', 'Кусь!', '2017-02-18 11:52:32'),
(16, 'Coolman', 'Awesome', '2017-02-18 17:21:25'),
(17, 'anon', 'ж', '2017-02-18 21:44:08'),
(18, 'anon', 'ж', '2017-02-18 21:44:08'),
(19, 'ыы', 'ыыыыыыыЫЫыы', '2017-02-19 18:50:06'),
(20, 'Mero', 'Багатьом подобаються маленькі цицьки', '2017-02-19 22:27:19'),
(21, 'Dick Valentine', 'Є таке', '2017-02-20 15:11:50'),
(22, 'anon', 'Лож и провокация', '2017-02-20 18:52:25'),
(23, 'Mero', 'А ще маленькі цицьки подобаються тим,  в кого маленький  х@й ', '2017-02-21 16:48:26'),
(24, 'Dick Valentine', 'Лож и провокация', '2017-02-21 17:32:01'),
(25, 'anon', 'апв', '2017-02-25 10:55:29'),
(26, 'Dick Valentine', 'хайдуду', '2017-02-25 18:52:01'),
(27, 'БОДЯ!!', 'БОдЯ!!!!', '2017-03-01 08:05:49'),
(28, 'Elvis', 'Love me, tender', '2017-03-08 08:21:15'),
(29, 'Donald', 'Build the wall', '2017-03-08 08:23:13'),
(30, 'Tesak', 'Do you like lemon juice?', '2017-03-08 08:24:15'),
(31, 'Gandhi', 'F*ck you, Britain', '2017-03-08 09:18:12'),
(32, 'anon', 'влад', '2017-03-11 10:25:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
