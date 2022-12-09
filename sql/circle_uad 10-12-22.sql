-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2022 at 05:09 AM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `id_timeline` int NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `message`, `created_at`, `id_user`) VALUES
(1, 'setelah swafoto dengan pegang pipi, wanita juga menyukai swafoto dengan pegang pelipis', '2022-12-07 18:33:32', 2),
(2, 'Jika bersamanya adalah konsekuensi, pilihannya hanya ada dua, bertahan atau melepaskan', '2022-12-09 12:34:52', 3),
(3, 'Hidup itu seperti musik, yang harus di komposisi oleh telinga, perasaan dan instink, bukan oleh peraturan', '2022-12-04 18:51:25', 4),
(4, 'Tak perlu Menjadi Orang Kaya untuk bisa memberi', '2022-11-09 18:51:25', 5),
(5, 'Udah berusaha jadi payung, dia malah beli jas hujan', '2022-12-09 18:51:25', 2),
(6, 'Learn from yesterday, life for today, hope for tomorrow', '2022-10-09 18:51:25', 3),
(7, 'Hidup manusia penuh dengan bahaya, tetapi justru di situlah letak daya tariknya', '2022-09-09 18:51:25', 4),
(8, 'Apa yang didapat dengan mudah perlu usaha yang susah untuk menjaganya, apa yang didapat dengan usaha yang susah perlu usaha yang mudah untuk menjaganya', '2022-12-09 18:51:25', 5),
(9, 'Setelah swafoto dengan pegang pipi, wanita juga menyukai swafoto dengan pegang pelipis', '2022-07-09 18:51:25', 2),
(10, 'Jika mencintaimu adalah pekerjaan, maka akulah yang paling semangat lembur tanpa ingin libur', '2022-12-09 18:51:25', 3),
(11, 'Hal terindah yang dapat kita alami adalah misteri. Misteri adalah sumber semua seni sejati dan semua ilmu pengetahuan', '2022-12-09 18:51:25', 4),
(12, 'i dont need the light to see you shie', '2022-12-09 18:51:25', 5),
(13, 'Aku tak ingin tersungkur di kebahagiaan bulan Mei. Jatuh kedalam jurang, berdarah-darah hingga jiwaku lebam dan remuk redam', '2022-12-09 18:51:25', 2),
(14, 'Aku untukmu seutuhnya, sedangkan kamu untukku sebutuhnya', '2022-12-10 18:51:25', 3),
(15, 'Tiga sifat manusia yang merusak adalah, kikir yang dituruti, hawa nafsu yang diikuti, serta sifat mengagumi diri sendiri yang berlebihan', '2022-04-09 18:51:25', 4),
(16, 'Wake up to reality! Nothing ever goes as planned in this world. The longer you live, the more you realize that in this reality only pain, suffering and futility exist', '2022-01-09 18:51:25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client') NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Admin', '-', 'superadmin@dev.com', '$2y$10$0siYMH.0VIsEzUyczg7hy.Dqv9dLGIb3emovCht3QcvBNhkhiLMEu', 'admin'),
(2, 'Imam', 'Ramadhan', 'imam@gmail.com', '$2y$10$E4vm26T6tISNeZ0zQHJKoOR9816Qjx55bQiNiZczC/QFQtohAStnu', 'client'),
(3, 'Nur', 'Fauzi', 'uzi@gmail.com', '$2y$10$MOYOyP0CYpZh1kZa9bfdrOM65oMT50qpeFdRepTDB9tIQ3W.H.myy', 'client'),
(4, 'Riyan Adi', 'Saputra', 'riyan@gmail.com', '$2y$10$MwmO8NGPGRULIcRY7aIkeOoUsx2vV11BvTYGsM/Hm5rmCmlrQ3qNi', 'client'),
(5, 'Bintang Muhammad', 'Madani', 'bintang@gmail.com', '$2y$10$ZlsMfR0G8WYqDPT4NDa8XuA2VTOsuBhBt77VkN900TbmjlrGraoj6', 'client');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id_timeline` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
