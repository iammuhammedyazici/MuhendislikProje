-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 25 Oca 2018, 11:53:27
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyeler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arackaydı`
--

DROP TABLE IF EXISTS `arackaydı`;
CREATE TABLE IF NOT EXISTS `arackaydı` (
  `arac_id` int(11) NOT NULL AUTO_INCREMENT,
  `tc` bigint(20) NOT NULL,
  `ad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soyad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_ad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_yil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_plaka` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_tel` bigint(20) NOT NULL,
  `a_posta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`arac_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `arackaydı`
--

INSERT INTO `arackaydı` (`arac_id`, `tc`, `ad`, `soyad`, `a_ad`, `a_model`, `a_yil`, `a_plaka`, `a_tel`, `a_posta`) VALUES
(4, 32090111500, 'Muhammed', 'Yazıcı', 'Ford', 'Masteng', '1997', '58BJK1903', 5522254408, '@gmail.com'),
(3, 30205055178, 'fatih', 'duygu', 'bmw', '116i', '2018', '06FB66', 5439687456, '@hotmail.com'),
(5, 42058547802, 'Muhammed Fatih', 'Çolak', 'Doğan', 'Slx', '1993', '58KEK58', 5546589685, '@outlook.com'),
(6, 32158065455, 'Cihat', 'Yazıcı', 'Volswagen', 'Golf', '20118', '34SVS58', 5388185454, '@yahoo.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
