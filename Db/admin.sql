-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2024, 16:29:58
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `admin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'abdullah', '$2y$10$.FHzap5X1sqdTRRYxH8nJuT8rfobgrkOTJHcbioHG9d6QzqvpK2iC'),
(2, 'asas', '$2y$10$v.GKcCYAQS8ON2/kQ5NGCe4FfYWu8gHO60YwaWrltWdDlhQzWKyYy'),
(3, 'burak', '$2y$10$b6YugfTkF8faH0aVHdhcZuFZnB6CRfgzK7lvjapFiDpMam21g368S'),
(4, 'yunus', '$2y$10$L3xf2LSv1/uiVF1gi1W6mOlBi1lkX1olXfrlqymghAOtus6m3RjtG'),
(5, 'deneme', '$2y$10$9MWLQZ0TV3crCLAt74ph7uFLkFcOO9PmaXQbqO3hsTcIA3nCDSdFm'),
(6, 'baska', '$2y$10$FEwlMYlJV8ALsEQ3KTDi8OpfYQJIX9LHpvu8Y.MXDpf3ac6N9dUCy'),
(7, 'deneme1', '$2y$10$q5KxL8ndqXOzB1I1E7kaeemE/uY39diEf3hVYy4mTvw4mdn9xO0ya'),
(8, 'denem2', '$2y$10$29TCxYnLyWbuP.LCnta.l.r7050Kzl42nZUraE5OTVCN3yQH1lbuq'),
(9, 'deneme3', '$2y$10$sA9YcBOSM14iV2C13znljOc7OgMgcVtSxYWr0odkUoTC/0pLgjZDu'),
(10, 'deneme4', '$2y$10$tzz7C5nB9ulQ2z8BHpaUm.MgQ4MpC.NQIH8uITZJIgqlaivchZ/ZC'),
(11, 'deneme5', '$2y$10$hT.j/PIzdJ4d1SM3QRF3p.K4LeL8HokDLSDjI/taUQPMfS2/L16jq'),
(12, 'deneme6', '$2y$10$6lPKeaFY.C6NSanA2VyHLeY27m7P9V1xrHcmW3ieke/bcJ8zs31F6');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`id`, `title`, `content`) VALUES
(1, 'yenilendi', '1'),
(2, 'asdf', 'asdf'),
(3, 'asdf', 'asdfasdf'),
(4, 'asdfasd', 'f'),
(5, 'asdfasdf', 'asdfasdf'),
(6, 'asdfasdf', 'asdfasdf'),
(7, 'asdfasdf', 'asdfasdf'),
(8, 'asdfasdf', 'asdfasfd'),
(9, 'asdf', 'asdf'),
(12, 'asd', 'asdasd'),
(13, 'asd', 'asdasd');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
