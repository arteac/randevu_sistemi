-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Haz 2024, 16:30:28
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
-- Veritabanı: `user_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'arteac', 'deneme@gmail.com', '$2y$10$/Lzos2K.bbUv65BeoYAHT.MZL/3oZfuN2YgRgxKtUS859npAO8DDO'),
(2, '12', 'deneme@gmail.com', '$2y$10$afJQHuJy//bigr1ZtxCve.4mlqXQwOVFnCePrsm.36HZ5bb/c130W'),
(3, 'veli özcan budak', 'vbudak@gmail.com', '$2y$10$dBfkLCe8QfYEiQYU8v3KqeOF0gEOribHGQMZLtzyUU/Okarwgyn/O'),
(4, 'dene', 'deneme@gmail.com', '$2y$10$wDeRzfIfN6nelpGv5yv90.d8aa4HkpH1fJpcRxgTrCPX9I7ZC1Wpu'),
(5, '12', '12@gmail.com', '$2y$10$SwnmRBo/S2U2P1p3jwtgyeZCrSGg4xuIYyquJPx2hPuSh0oNMyWAG'),
(6, 'deniyorum', 'deniyorum@gmail.com', '$2y$10$L81rZxJVTB3LciyghzyaU.WfrreVFwG6cx.n4VfKcLCWv6kk4bjM2');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
