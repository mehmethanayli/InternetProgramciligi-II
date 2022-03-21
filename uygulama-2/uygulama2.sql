-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Mar 2022, 17:33:47
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uygulama2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service` varchar(50) NOT NULL,
  `budget` double NOT NULL,
  `message` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `service`, `budget`, `message`, `createdAt`) VALUES
(1, 'Mehmet', 'asd@asd.com', 'Yazılım Geliştirme', 6000, 'ttt', '2022-03-21 16:27:26'),
(2, 'Mehmet', 'asd@asd.com', 'Yazılım Geliştirme', 6000, 'ttt', '2022-03-21 16:31:52'),
(3, 'Mehmet', 'asd@asd.com', 'Yazılım Geliştirme', 6000, 'ttt', '2022-03-21 16:32:02'),
(4, 'Mehmet', 'asd@asd.com', 'Yazılım Geliştirme', 6000, 'ttt', '2022-03-21 16:32:10'),
(5, 'Mehmet', 'asd@asd.com', 'Yazılım Geliştirme', 6000, 'ttt', '2022-03-21 16:32:54');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
