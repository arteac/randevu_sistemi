-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2024, 16:30:12
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
-- Veritabanı: `contact_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `message` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `date`, `message`) VALUES
(6, 'sdf', '65465@gmail.com', '6', '2000-05-22 00:00:00', 'asd'),
(7, 'asdf', '1654@gmail.com', '55', '2000-05-22 00:00:00', 'asd'),
(8, 'sadf', 'abdullaholuc37@gmail.com', '96', '2000-05-22 00:00:00', 'asd'),
(9, 'asdf', 'abdullaholuc37@gmail.com', '56', '2000-05-22 00:00:00', 'asdf'),
(10, 'asdf', 'abdullaholuc37@gmail.com', '56', '2000-05-22 00:00:00', 'asdf'),
(11, 'asdfasd', 'abdullaholuc37@gmail.com', '56', '2000-05-22 00:00:00', 'asdfasdf'),
(12, 'asdf', 'abdullaholuc37@gmail.com', '456', '2000-05-22 00:00:00', 'asdfasdf'),
(13, 'asdf', 'abdullaholuc37@gmail.com', '645', '2000-08-22 00:00:00', 'asdfasdf'),
(20, '12', '12@gmail.com', '12', '2000-02-12 00:00:00', '12 den geldim'),
(21, '12', '12@gmail.com', '12', '2000-02-12 00:00:00', '12 den geldim'),
(22, '12', '12@gmail.com', '12', '2000-02-12 00:00:00', '12 den geldim');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
