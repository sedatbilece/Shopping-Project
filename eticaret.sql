-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 18 Tem 2021, 10:28:16
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_desc`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_il`, `ayar_ilce`, `ayar_adres`, `ayar_mesai`, `ayar_maps`, `ayar_analystic`, `ayar_zopim`, `ayar_facebook`, `ayar_twitter`, `ayar_insta`, `ayar_youtube`, `ayar_smtphost`, `ayar_smtppass`, `ayar_smtpport`, `ayar_bakim`) VALUES
(1, '', 'E-ticaret Sitesi', 'e ticaret site projesi php ile', 'php,site,e-ticaret,yazılım', 'Sedat Bilece', '0000 123 45 67', '0000 123 45 68', '0000 123 45 69', 'info@deneme.com', 'istanbul', 'hadımöy', 'hastane deneme', '10-11 arası açıktır', 'maps', 'analitik', 'zoppimasd', 'www.facebook.com', 'www.twitter.com', 'www.Instagram.com', 'www.youtube.com', 'hsot.deneme.com', '12345678', '590', '1');

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_video`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
('0', 'eticaret hakkımızda baslik', '', 'https://www.youtube.com/watch?v=JfyTccKO6F8', 'vizyon --Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi minus, sed similique laudantium modi ut consectetur consequatur aspernatur ad doloremque eveniet illo distinctio  iure voluptates. Ab quidem dolorem quos.', 'misyon  --  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi minus, sed similique laudantium modi ut consectetur consequatur aspernatur ad doloremque eveniet illo distinctio  iure voluptates. Ab quidem dolorem quos.'),
('0', 'eticaret hakkımızda baslik', '', 'https://www.youtube.com/watch?v=JfyTccKO6F8', 'vizyon --Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi minus, sed similique laudantium modi ut consectetur consequatur aspernatur ad doloremque eveniet illo distinctio  iure voluptates. Ab quidem dolorem quos.', 'misyon  --  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sequi minus, sed similique laudantium modi ut consectetur consequatur aspernatur ad doloremque eveniet illo distinctio  iure voluptates. Ab quidem dolorem quos.');

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_zaman`, `kullanici_resim`, `kullanici_tc`, `kullanici_ad`, `kullanici_mail`, `kullanici_password`, `kullanici_yetki`, `kullanici_durum`) VALUES
(1, '2021-07-14 11:42:27', '', '', 'Sedat Bilece xd', 'sedat@gmail.com', '202cb962ac59075b964b07152d234b70', '5', 1),
(4, '2021-07-14 11:42:27', '', '', 'Sedat Bilece xd2', 'sedat@gmail.com', '202cb962ac59075b964b07152d234b70', '5', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
