-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 12:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `circle_uad`
--

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id_timeline` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `message`, `created_at`, `id_user`) VALUES
(6, 'setelah swafoto dengan pegang pipi, wanita juga menyukai swafoto dengan pegang pelipis', '2022-12-07 18:33:32', 7),
(7, 'Jika bersamanya adalah konsekuensi, pilihannya hanya ada dua, bertahan atau melepaskan', '2022-12-09 12:34:52', 8),
(8, 'Hidup itu seperti musik, yang harus di komposisi oleh telinga, perasaan dan instink, bukan oleh peraturan', '2022-12-04 18:51:25', 9),
(9, 'Tak perlu Menjadi Orang Kaya untuk bisa memberi', '2022-11-09 18:51:25', 10),
(10, 'Udah berusaha jadi payung, dia malah beli jas hujan', '2022-12-09 18:51:25', 7),
(11, 'Learn from yesterday, life for today, hope for tomorrow', '2022-10-09 18:51:25', 8),
(12, 'Hidup manusia penuh dengan bahaya, tetapi justru di situlah letak daya tariknya', '2022-09-09 18:51:25', 9),
(13, 'Apa yang didapat dengan mudah perlu usaha yang susah untuk menjaganya, apa yang didapat dengan usaha yang susah perlu usaha yang mudah untuk menjaganya', '2022-12-09 18:51:25', 10),
(14, 'Setelah swafoto dengan pegang pipi, wanita juga menyukai swafoto dengan pegang pelipis', '2022-07-09 18:51:25', 7),
(15, 'Jika mencintaimu adalah pekerjaan, maka akulah yang paling semangat lembur tanpa ingin libur', '2022-12-09 18:51:25', 8),
(16, 'Hal terindah yang dapat kita alami adalah misteri. Misteri adalah sumber semua seni sejati dan semua ilmu pengetahuan', '2022-12-09 18:51:25', 9),
(17, 'i dont need the light to see you shie', '2022-12-09 18:51:25', 10),
(18, 'Aku tak ingin tersungkur di kebahagiaan bulan Mei. Jatuh kedalam jurang, berdarah-darah hingga jiwaku lebam dan remuk redam', '2022-12-09 18:51:25', 7),
(19, 'Aku untukmu seutuhnya, sedangkan kamu untukku sebutuhnya', '2022-12-10 18:51:25', 8),
(20, 'Tiga sifat manusia yang merusak adalah, kikir yang dituruti, hawa nafsu yang diikuti, serta sifat mengagumi diri sendiri yang berlebihan (SI PALING FILSAFAT)', '2022-04-09 18:51:25', 9),
(21, 'Wake up to reality! Nothing ever goes as planned in this world. The longer you live, the more you realize that in this reality only pain, suffering and futility exist', '2022-01-09 18:51:25', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id_timeline`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `timeline`
--
ALTER TABLE `timeline`
  ADD CONSTRAINT `timeline_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
