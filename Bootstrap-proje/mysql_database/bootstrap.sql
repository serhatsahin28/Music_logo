-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Eki 2023, 21:11:48
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bootstrap`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `muzik_set`
--

CREATE TABLE `muzik_set` (
  `id` int(11) NOT NULL,
  `baslik1` varchar(250) NOT NULL,
  `resim_ad` varchar(255) NOT NULL,
  `yazi` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Tablo döküm verisi `muzik_set`
--

INSERT INTO `muzik_set` (`id`, `baslik1`, `resim_ad`, `yazi`) VALUES
(1, 'ULTRA ACTİON', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'Feel the advanture and action in your cell'),
(2, 'MUSIC FOR GAMES', 'odurlanikM_computer_game_music_playing_34cde762-8ee5-431d-a972-41080e4c34f8.png', 'The game is not just for the eyes'),
(3, 'KIDS THEMES', 'odurlanikM_very_funny_music_playing_b526224f-8f86-47d3-aead-d9f9c61b7699.png', 'Kids energy with cheerful childs tracks');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `muzik_set_list`
--

CREATE TABLE `muzik_set_list` (
  `Id` int(11) NOT NULL,
  `set_Id` int(11) NOT NULL,
  `sarki_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Tablo döküm verisi `muzik_set_list`
--

INSERT INTO `muzik_set_list` (`Id`, `set_Id`, `sarki_Id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 1),
(5, 3, 2),
(6, 1, 2),
(7, 1, 3),
(10, 2, 3),
(11, 3, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `muzisyen`
--

CREATE TABLE `muzisyen` (
  `Id` int(11) NOT NULL,
  `adi` varchar(250) NOT NULL,
  `avatar_url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Tablo döküm verisi `muzisyen`
--

INSERT INTO `muzisyen` (`Id`, `adi`, `avatar_url`) VALUES
(1, 'ozguitars', 'aa.png'),
(2, 'onderon', 'bb.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ort_kisim`
--

CREATE TABLE `ort_kisim` (
  `Id` int(11) NOT NULL,
  `resim1` varchar(250) NOT NULL,
  `baslik` varchar(250) NOT NULL,
  `yazi` varchar(250) NOT NULL,
  `yazi2` varchar(250) NOT NULL,
  `yazi3` varchar(250) NOT NULL,
  `yazi4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Tablo döküm verisi `ort_kisim`
--

INSERT INTO `ort_kisim` (`Id`, `resim1`, `baslik`, `yazi`, `yazi2`, `yazi3`, `yazi4`) VALUES
(1, 'odurlanikH_eletro_guitar_and_sound_speaker_and_guitar_cable_9520a289-4e44-41ed-8266-7d43185a15f5.png', 'MOST RECENTS', 'Spring Winds (listen till the end)', 'Relax in the hot', 'Piano of Morning Birds', 'More...'),
(2, 'odurlanikM_very_sad_music_playing_2285a45a-4936-4500-b959-3004fa942c2b.png', 'DRAMATIC', 'Spring Winds (listen till the end)', 'Relax in the hot', 'Piano of Morning Birds', 'More...'),
(3, 'odurlanikH_a_jazz_trumpet_and_a_powerful_sound_speaker._soundwa_69c5e956-f869-4e2c-bdbd-475f7ca1e068.png', 'BEST OF EVER', 'Spring Winds (listen till the end)', 'Relax in the hot', 'Piano of Morning Birds', 'More...'),
(4, 'odurlanikM_very_funny_music_playing_b526224f-8f86-47d3-aead-d9f9c61b7699.png', 'HAPPY', 'Spring Winds (listen till the end)', 'Relax in the hot', 'Piano of Morning Birds', 'More...');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sarkilar`
--

CREATE TABLE `sarkilar` (
  `id` int(11) NOT NULL,
  `baslik2` varchar(250) NOT NULL,
  `img` varchar(250) NOT NULL,
  `duration` double NOT NULL,
  `muzisyen_Id` int(11) NOT NULL,
  `müzik_set_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Tablo döküm verisi `sarkilar`
--

INSERT INTO `sarkilar` (`id`, `baslik2`, `img`, `duration`, `muzisyen_Id`, `müzik_set_Id`) VALUES
(1, 'Spring Winds (listen till the end)', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 3.24, 1, 1),
(2, 'Relax in the hot', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 2.55, 2, 1),
(3, 'Piano of Morning Birds', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 1.47, 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ust_kisim`
--

CREATE TABLE `ust_kisim` (
  `Id` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `baslik1` varchar(250) NOT NULL,
  `altbaslik` varchar(250) NOT NULL,
  `kbaslik` varchar(250) NOT NULL,
  `iyazi` varchar(250) NOT NULL,
  `kbaslik2` varchar(250) NOT NULL,
  `iyazi2` varchar(250) NOT NULL,
  `kbaslik3` varchar(250) NOT NULL,
  `showmore` varchar(250) NOT NULL,
  `small_img1` varchar(250) DEFAULT NULL,
  `small_img2` varchar(250) DEFAULT NULL,
  `small_img3` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Tablo döküm verisi `ust_kisim`
--

INSERT INTO `ust_kisim` (`Id`, `Image`, `baslik1`, `altbaslik`, `kbaslik`, `iyazi`, `kbaslik2`, `iyazi2`, `kbaslik3`, `showmore`, `small_img1`, `small_img2`, `small_img3`) VALUES
(1, 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'ULTRA ACTİON', 'Feel the advanture and action in your cell', 'Spring Winds (listen till the end)', 'ozguitars', 'Relax in the hot', 'onderon', 'Piano of Morning Birds', 'SHOW MORE', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png'),
(2, 'odurlanikM_computer_game_music_playing_34cde762-8ee5-431d-a972-41080e4c34f8.png', 'MUSIC FOR GAMES', 'The game is not just for the eyes', 'Spring Winds (listen till the end)', 'ozguitars', 'Relax in the hot', 'onderon', 'Piano of Morning Birds', 'SHOW MORE', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png'),
(3, 'odurlanikM_very_funny_music_playing_b526224f-8f86-47d3-aead-d9f9c61b7699.png', 'KIDS THEMES', 'Kids energy with cheerful childs tracks', 'Spring Winds (listen till the end)', 'ozguitars', 'Relax in the hot', 'onderon', 'Piano of Morning Birds', 'SHOW MORE', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png', 'odurlanik_action_movie_sound_speaker_1c580459-875c-49fe-8e7e-eef3c89f5566.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `muzik_set`
--
ALTER TABLE `muzik_set`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `muzik_set_list`
--
ALTER TABLE `muzik_set_list`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `muzisyen`
--
ALTER TABLE `muzisyen`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `ort_kisim`
--
ALTER TABLE `ort_kisim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sarkilar`
--
ALTER TABLE `sarkilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ust_kisim`
--
ALTER TABLE `ust_kisim`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `muzik_set`
--
ALTER TABLE `muzik_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `muzik_set_list`
--
ALTER TABLE `muzik_set_list`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `muzisyen`
--
ALTER TABLE `muzisyen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `ort_kisim`
--
ALTER TABLE `ort_kisim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `sarkilar`
--
ALTER TABLE `sarkilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `ust_kisim`
--
ALTER TABLE `ust_kisim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
