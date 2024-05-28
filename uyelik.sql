-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 May 2024, 18:07:10
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
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `filmler`
--

CREATE TABLE `filmler` (
  `film_id` int(11) NOT NULL,
  `film_adi` varchar(255) NOT NULL,
  `yapim_yili` int(11) NOT NULL,
  `ortalama_puan` double(10,0) NOT NULL,
  `toplam_puan_sayisi` int(11) NOT NULL,
  `resim_dosya_yolu` varchar(255) DEFAULT NULL,
  `film_yolu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `filmler`
--

INSERT INTO `filmler` (`film_id`, `film_adi`, `yapim_yili`, `ortalama_puan`, `toplam_puan_sayisi`, `resim_dosya_yolu`, `film_yolu`) VALUES
(1, 'dark knight', 2008, 1, 0, 'batmanafis.jpeg', 'dark_knight.php'),
(2, 'The Godfather', 1972, 0, 0, 'godfatherafis.jpg', 'godfather.php'),
(3, 'The Matrix', 1999, 0, 0, 'matrixafis.jpeg', 'matrix.php'),
(4, 'The Scarface', 1983, 0, 0, 'scarfaceafis.jpg', NULL),
(5, 'Yüzüklerin Efendisi', 2001, 0, 0, 'yüzükafis.jpg', NULL),
(6, 'John Wick', 2014, 0, 0, 'johnwickafis.jpg', NULL),
(7, 'Kurtlar Vadisi Irak', 2009, 0, 0, 'kurtlarvadisi.jpeg', NULL),
(8, 'Kader', 2009, 7, 0, 'kader.jpeg', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `mail`, `sifre`) VALUES
(1, 'tugay', 'tugay@mete', 'erzincan'),
(2, 'mehmet', 'mehmet@123', 'bozkurt'),
(3, 'selahattin', 'bahtiyar@123', 'bahtiyar'),
(4, 'ömer', 'ömer@123', 'demir'),
(5, 'safsa', 'safsa@1', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `puanlar`
--

CREATE TABLE `puanlar` (
  `id` int(11) NOT NULL,
  `puan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `filmler`
--
ALTER TABLE `filmler`
  ADD PRIMARY KEY (`film_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `puanlar`
--
ALTER TABLE `puanlar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `filmler`
--
ALTER TABLE `filmler`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `puanlar`
--
ALTER TABLE `puanlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
