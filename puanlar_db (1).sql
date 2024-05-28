-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 May 2024, 18:07:20
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
-- Veritabanı: `puanlar_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `puanlar`
--

CREATE TABLE `puanlar` (
  `id` int(11) NOT NULL,
  `puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `puanlar`
--

INSERT INTO `puanlar` (`id`, `puan`) VALUES
(1, 1),
(2, 5),
(3, 4),
(4, 1),
(5, 1),
(6, 1),
(7, 5),
(8, 5),
(9, 5),
(10, 5),
(11, 1),
(12, 5),
(13, 5),
(14, 1),
(15, 3),
(16, 5),
(17, 5),
(18, 5),
(19, 1),
(20, 1),
(21, 2),
(22, 3),
(23, 5),
(24, 3),
(25, 4),
(26, 4),
(27, 5),
(28, 4),
(29, 3),
(30, 2),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `puanlar2`
--

CREATE TABLE `puanlar2` (
  `id` int(11) NOT NULL,
  `puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `puanlar2`
--

INSERT INTO `puanlar2` (`id`, `puan`) VALUES
(1, 3),
(2, 5),
(3, 2),
(4, 3),
(5, 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `puanlar3`
--

CREATE TABLE `puanlar3` (
  `id` int(11) NOT NULL,
  `puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `puanlar3`
--

INSERT INTO `puanlar3` (`id`, `puan`) VALUES
(1, 2);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `puanlar`
--
ALTER TABLE `puanlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `puanlar2`
--
ALTER TABLE `puanlar2`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `puanlar3`
--
ALTER TABLE `puanlar3`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `puanlar`
--
ALTER TABLE `puanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Tablo için AUTO_INCREMENT değeri `puanlar2`
--
ALTER TABLE `puanlar2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `puanlar3`
--
ALTER TABLE `puanlar3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
