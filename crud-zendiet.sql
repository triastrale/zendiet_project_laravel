-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 06:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-zendiet`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `serving` varchar(255) DEFAULT NULL,
  `calories` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `categories`, `serving`, `calories`, `created_at`, `updated_at`) VALUES
(4, 'Almond Milk, original', 'Milk and Dairy Products', '100 ml', '22 cal', '2024-06-09 00:00:37', '2024-06-09 00:14:32'),
(5, 'Apple', 'Fruit and Vegetables', '100 g', '64 cal', '2024-06-09 00:02:49', '2024-06-09 00:02:49'),
(6, 'Beef', 'Meat', '100 g', '156 cal', '2024-06-09 00:03:24', '2024-06-09 00:03:24'),
(7, 'Bean Sprouts', 'Fruit and Vegetables', '100 g', '47 cal', '2024-06-12 20:22:18', '2024-06-12 20:22:18'),
(8, 'Aloe Vera', 'Fruit and Vegetables', '100 g', '2 cal', '2024-06-12 20:22:50', '2024-06-12 20:22:50'),
(9, 'Cheese Bread', 'Milk and Dairy Products', '100 g', '237 cal', '2024-06-12 20:31:29', '2024-06-12 20:31:29'),
(10, 'Buttermilk', 'Milk and Dairy Products', '100 ml', '37 cal', '2024-06-12 20:31:57', '2024-06-12 20:31:57'),
(11, 'Chicken Breast fillet', 'Meat', '100 g', '118 cal', '2024-06-13 01:08:38', '2024-06-13 01:08:38'),
(12, 'Chicken Strips', 'Meat', '100 g', '271 cal', '2024-06-13 01:09:31', '2024-06-13 01:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_01_162421_add_two_factor_columns_to_users_table', 2),
(5, '2024_05_16_034511_create_posts_table', 2),
(6, '2024_06_09_023321_create_food_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `post_status` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`, `name`, `user_id`, `post_status`, `usertype`, `created_at`, `updated_at`) VALUES
(4, 'Mengenal Diet Telur Rebus, Bisa Turunkan BB 11 Kg dalam 2 Minggu!', 'Diet telur rebus pertama kali diperkenalkan melalui buku Arielle Chandler tahun 2018. Diet ini tidak hanya melibatkan konsumsi telur saja, tetapi penulis mengklaim bahwa dengan mengonsumsi dua atau tiga telur rebus per hari, seseorang bisa menurunkan berat badan hingga 11 kg dalam dua minggu.\r\n\r\nDalam rencana diet ini, sarapan biasanya terdiri dari dua butir telur dengan buah. Untuk makan siang dan malam, diet ini menyarankan konsumsi telur atau protein tanpa lemak lainnya, serta sayuran non-tepung.\r\n\r\nDiet telur rebus mengandung makanan sehat, meskipun sangat ketat dan rendah kalori. Telur merupakan sumber protein lengkap dengan kandungan nutrisi seperti vitamin D dan kolin. Satu butir telur rebus besar mengandung 78 kalori, 6,3 gram protein, 5,3 gram lemak, 0,6 gram karbohidrat, dan 0 gram serat.\r\n\r\nDiet ini sangat rendah serat, yang bisa menyebabkan sembelit. Pria di bawah 50 tahun harus mengonsumsi setidaknya 38 gram serat per hari, sementara wanita harus mengonsumsi 25 gram. Jika serat terlalu rendah, risiko sembelit meningkat, terutama karena telur mengandung 0 gram serat.\r\n\r\nDiet ketat seperti diet telur rebus tidak cocok untuk orang dengan riwayat gangguan makan atau kondisi kesehatan kronis. Namun, diet ini bisa aman untuk jangka pendek bagi orang sehat tanpa riwayat gangguan makan. Mereka yang berisiko penyakit jantung harus berkonsultasi dengan tim kesehatan sebelum memulai diet ini.\r\n\r\nContoh menu diet selama seminggu meliputi kombinasi telur rebus, protein tanpa lemak, dan sayuran kukus seperti asparagus, brokoli, kale, dan bayam. Misalnya, pada hari pertama, sarapan bisa terdiri dari telur rebus, jeruk, dan asparagus kukus, sementara makan siang bisa berupa ikan bakar dan brokoli kukus.\r\n\r\nJadi, Diet telur rebus bisa menjadi strategi penurunan berat badan jangka pendek. Namun, penting untuk mengkombinasikan telur dengan protein tanpa lemak lainnya, sayuran, dan buah-buahan tertentu. Selain itu, selalu mendapatkan nasihat medis sebelum menjalani diet ini adalah langkah bijak.', '1717032680.webp', 'zendietadmin', '1', 'active', 'admin', '2024-05-16 05:10:41', '2024-05-29 19:36:57'),
(6, 'Harus Minum Berapa Cangkir Teh Hijau untuk Pangkas BB? Ini Saran Pakar Nutrisi', 'Menjaga pola makan dan rutin berolahraga adalah dua hal penting dalam menurunkan berat badan. Selain itu, mengonsumsi minuman seperti teh hijau dapat membantu mempercepat pembakaran lemak. Beberapa penelitian menunjukkan teh hijau dapat membantu menurunkan berat badan dan mengecilkan lingkar pinggang karena kandungan antioksidan dan kafeinnya.\r\n\r\nSebuah penelitian pada 2021 menyebutkan teh hijau mengandung antioksidan katekin yang dapat meningkatkan metabolisme dan pembakaran lemak. Teh hijau juga mengandung kafein, stimulan alami yang dikenal untuk meningkatkan metabolisme sementara, yang dapat membantu membakar lebih banyak kalori.\r\n\r\nMenurut Trista Best RD dari Balance One Supplements, mengonsumsi sekitar tiga hingga lima cangkir teh hijau setiap hari dapat memberikan manfaat penurunan berat badan. Namun, jumlah optimal dapat bervariasi berdasarkan faktor individu dan toleransi terhadap kafein. Best mengingatkan untuk tidak mengonsumsi teh hijau secara berlebihan karena dapat menyebabkan efek samping seperti insomnia, gelisah, peningkatan detak jantung, dan masalah pencernaan.', '1717032949.jpeg', 'zendietadmin', '1', 'active', 'admin', '2024-05-16 05:23:00', '2024-05-29 18:35:49'),
(7, '7 Manfaat Beras Porang dan Kandungannya, Bener Bisa Bikin Kurus?', 'Beras porang adalah pengganti nasi yang terbuat dari umbi-umbian, khususnya umbi porang atau Amorphophallus muelleri. Beras ini dikenal lebih menyehatkan daripada beras biasa. Umbi porang, juga dikenal sebagai iles-iles, konjac, atau coblok, telah lama dimanfaatkan di Jepang untuk membuat mie shirataki atau konyaku. Kandungan dalam umbi porang bisa membuat kenyang dan menjaga kesehatan tubuh.\r\n\r\nBeras porang mengandung berbagai gizi, termasuk karbohidrat, protein, dan serat. Dalam 40 gram beras porang, terdapat 28% kalori, 86% karbohidrat, 0% lemak dan gula, serta 14% protein. Kandungan gula dan lemak yang minimal menjadikan beras porang pilihan tepat untuk diet. Manfaat konsumsi beras porang antara lain menurunkan berat badan, kadar gula darah, dan kolesterol jahat (LDL).\r\n\r\nBeras porang juga dikenal mampu mengatasi masalah sembelit berkat kandungan seratnya yang tinggi. Selain itu, penelitian menunjukkan bahwa tepung porang atau konyaku dapat menghambat pertumbuhan kanker dan menyehatkan kulit, serta mempercepat penyembuhan luka meskipun penelitian lebih lanjut masih diperlukan.\r\n\r\nProses pembuatan beras porang dimulai dari umbi porang yang dibersihkan dan diiris tipis-tipis untuk dipanaskan menjadi keripik. Keripik tersebut kemudian dihaluskan menjadi tepung yang dicampur dengan tepung beras dan air. Semakin banyak porang yang ditambahkan, semakin tinggi volume, kadar air, dan kekerasannya, sehingga beras porang mirip dengan beras biasa meskipun warnanya cenderung coklat dan proses masaknya lebih cepat.\r\n\r\nBeras porang dan olahannya seperti mie shirataki, konyaku steak, pancake, dan jajanan tradisional lainnya dapat dimanfaatkan sebagai jenis makanan yang lebih sehat.', '1717033207.jpg', 'zendietadmin', '1', 'active', 'admin', '2024-05-16 05:26:18', '2024-05-29 18:40:07'),
(13, 'Tips Sehat Saat Idul Adha dalam konsumsi Daging Qurban', '1. Makan dalam porsi kecil\r\nUsahakan jangan mengkonsumsi makanan tersebut dalam porsi yang besar karena hal ini aka mengakibatkan perut anda menjadi nyeri karena esophageal sphincter akan terasa penuh sehingga akan membuat makanan kembali ke perut bagian atas.\r\n\r\n2. Hindari konsumsi makanan daging sebelum tidur\r\nMengkonsumsi makanan yang terbuat daging sebelum tidur akan berdampak buruk bagi kesehatan anda karena bisa mengakibatkan makanan ini akan tedorong lagi ke esophageal sphincter. Selain itu kualitas tidur anda pun akan terganggu, usahakan tidak mengkonsumsi makanan ini 2-3 jam sebelum anda tidur.\r\n\r\n3. Diet kaya serat\r\nSerat berfungsi untuk melancarkan saluran pencernaan anda dan dapat mencegah terjadinya sembelit. Biasanya seseorang yang terlalu banyak makan daging akan menyebabkan susah BAB karena pencernaanya tidak lancar. Untuk mengatasinya anda bisa mengkonsumsi makanan yang mempunyai kandungan serat seperti beras merah, gandum, buah, sayur dan kedelai.\r\n\r\n4. Perbanyak minum air putih\r\nAir putih ini juga berfungsi untuk mendorong sisa makanan menuju sistem pembuangan sehingga tidak terjadi sembelit dan melancarkn buang air besar. Selain itu masih banyak manfaat lainya jika tubuh cukup cairan.\r\n\r\n5. Pilih minuman hangat dan sehat saat mengkonsumsi daging kambing\r\nMisalnya minum air putih hangat atau air jeruk hangat dengan sedikit gula yang dapat membantu membersihkan tenggorokan. Hindari minuman manis seperti kopi, teh dan sirup.\r\n\r\n6. Kombinasikan masakan daging kambing dengan sayur agar seimbang\r\nUsahakan membuat variasi menu makanan saat idul adha misalnya buatlah menu makanan yang seimbang seperti menyisipkan beberapa sayuran seperti tomat, bawang merah atau bawang bombai pada masakan yang berlemak karena hal ini dapat berfungsi untuk mengurangi lemak pada makanan tersebut.\r\n\r\n7. Pisahkah bagian lemak dari daging kambing sebelum memasaknya\r\nKetika hendak mengkonsumsi daging hewan qurban pisahkanlah bagian yang berlemak dari daging tersebut saat membersihkanya. Selain itu ketika mengkonsumsi daging usahakan mengurangi makanan manis seperti sirup dan kue.\r\n\r\n8. Daging kambing yang dipanggang lebih menyehatkan daripada digoreng\r\nDaging kambing yang di bakar lebih baik dari pada yang di goreng, karena lemak pada daging akan berkurang saat proses pembakaran terjadi, akan lebih baik jika menambahkan bumbu rempah-rempah sebelum dibakar.\r\n\r\n9. Kurangi Mengkonsumsi Makanan Pedas\r\nMakanan pedas memang memiliki manfaat bagi kesehatan tubuh, namun jika di konsumsi secara berlebihan akan membuat perut anda menjadi mulas dan mengganggu sistem pencernaan di dalam tubuh.\r\n\r\nItulah tips agar tetap sehat saat idul adha dan bijak dalam mengkonsumsi daging hewan qurban, semoga bermanfaat.', '1718277977.jpeg', 'zendietadmin', '1', 'active', 'admin', '2024-06-13 04:26:17', '2024-06-13 04:26:17'),
(14, '6 Tips Sehat Selama Idul Adha', 'Idul Adha merupakan momen spesial bagi umat islam di seluruh dunia. Selain dikarenakan Idul Adha merupakan salah satu momen lebaran bagi umat islam, pada momen idul adha juga banyak tradisi dan kebiasaan yang dilakukan, termasuk penyembelihan hewan kurban dan berbagi daging kepada yang membutuhkan.\r\n\r\n \r\n\r\nNamun demikian, terdapat hal-hal yang perlu diketahui dan dilakukan oleh masyarkat sebelum mengolah dan mengkonsumsi daging qurban. Hal ini dilakukan agar masyarakat dapat menikmati hidangan daging dengan tetap sehat dan bebas dari kolesterol.\r\n\r\nBerikut ini adalah beberapa hal yang perlu untuk dilakukan agar ibadah dan perayaan di idul adha dapat lebih maksimal dan tetap sehat, diantaranya:\r\n\r\n \r\n\r\n1. Masak daging hingga matang sempurna;\r\n\r\n2. Pilih area daging yang rendah lemak;\r\n\r\n3. Menerapkan pola makan yang sehat dan seimbang dengan banyak mengkonsumsi buah dan sayur, serta membatasi konsumsi makanan yang tinggi kolesterol;\r\n\r\n4. Tetap berolahraga atau melakukan aktivitas fisik ringan minimal 30 menit disela kesibukan di hari raya;\r\n\r\n5. Berhenti dari kebiasaan merokok;\r\n\r\n6. Tidak mengkonsumsi makanan secara berlebihan.\r\n\r\n \r\n\r\nHari raya idul adha merupakan momen yang bahagia. Untuk itu, mari maksimalkan kebahagiaan dengan tetap menjaga kesehatan serta menerapkan perilaku hidup bersih dan sehat.\r\n\r\n \r\n\r\nTidak lupa untuk cukupi kebutuhan air harian dalam tubuh dan segera lakukan pemeriksaan ke fasilitas kesehatan terdekat apabila mengalami gejala penyakit saat beraktivitas selama lebaran idul adha ataupun setelah makan makanan yang tinggi kolesterol secara berlebihan.', '1718279284.jpeg', 'zendietadmin', '1', 'active', 'admin', '2024-06-13 04:48:04', '2024-06-13 04:48:04'),
(15, 'Tetap Sehat Setelah Idul Adha, Konsumsi 4 Asupan Ini', 'Makanan yang didominasi daging menjadi santapan khas saat Idul Adha. Rasanya memang sangat nikmat, tetapi pastikan konsumsinya tidak berlebihan. Daging memiliki kandungan lemak dan kolesterol yang begitu tinggi sehingga mengonsumsinya secara berlebihan justru akan berdampak negatif pada tubuh. \r\n\r\nInilah mengapa kamu juga perlu mengimbangi konsumsi daging dengan asupan makanan sehat lainnya. Jadi, tubuh tetap terjaga kesehatannya, terutama berat badan dan tekanan darah dan terhindar dari masalah kesehatan yang membahayakan nyawa.\r\n\r\nLalu, apa saja sih asupan sehat yang bisa kamu konsumsi? Berikut ini di antaranya:\r\n\r\n1. Sayuran\r\nMengonsumsi sayuran pastinya mampu mencukupi kebutuhan nutrisi penting di dalam tubuh. Namun, pastikan sayuran yang kamu konsumsi tidak diolah dengan menggunakan santan. Pasalnya, hal tersebut justru akan membuat tekanan darah dan kolesterol semakin meningkat.\r\n\r\nSayur mengandung serat yang penting bagi kesehatan tubuh. Kandungan tersebut membantu menurunkan kadar kolesterol dalam darah sehingga dapat menekan risiko terjadinya penyakit jantung.\r\n\r\nTak hanya itu, serat penting untuk mendukung fungsi usus yang lebih sehat dengan mengurangi divertikulosis dan sembelit. Terakhir, mengonsumsi sayur dengan kandungan serat tinggi juga membantu memberikan rasa kenyang lebih lama tetapi kalori yang masuk ke tubuh justru lebih sedikit. \r\n\r\n2. Buah-buahan\r\nSelain sayur, jangan lupa juga mengonsumsi buah-buahan. Berdasarkan sebuah studi dalam jurnal Advances in Nutrition, mengonsumsi sayur dan buah akan membantu mencukupi kebutuhan vitamin dan mineral tubuh, terutama kebutuhan akan vitamin C, vitamin A, antioksidan, dan mineral lainnya. \r\n\r\nSelain itu, buah juga menyediakan berbagai nutrisi penting untuk menunjang kesehatan tubuh, seperti kalium, serat, dan asam folat. Pilihan buah yang sebaiknya kamu konsumsi setelah memakan sajian daging dan bersantan adalah jeruk, semangka, pisang, dan stroberi.\r\n\r\n3. Rempah-Rempah\r\nTak hanya menjadi bumbu masakan dan penguat rasa, rempah ternyata juga memberikan nutrisi yang bermanfaat untuk tubuh.\r\n\r\nBerikut beberapa jenis rempah dengan manfaatnya:\r\n\r\nKayu manis. Baik dikonsumsi orang yang memiliki gula darah tinggi. Rempah ini mampu membantu menurunkan kadar gula dalam darah.\r\nKunyit. Jenis rempah satu ini juga kaya manfaat. Salah satunya adalah membantu mengurangi peradangan pada tubuh.\r\nJahe. Rempah ini bermanfaat dalam membantu meringankan mual, diare, dan sakit perut.\r\nBawang putih. Konsumsi bawang putih mampu membantu melindungi organ jantung dari ancaman masalah kesehatan yang membahayakan.\r\nCabai rawit. Kandungan zat capsaicin dalam cabai tak hanya memberikan rasa pedas, tetapi juga bisa membantu mengurangi rasa sakit.\r\n\r\n4. Teh Herbal\r\nMengonsumsi teh herbal setelah menyantap daging dan makanan bersantan saat Idul Adha juga tak ada salahnya. Studi dalam Journal of Pharmaceutical Sciences and Research menjelaskan, beberapa jenis teh herbal memiliki manfaat untuk membantu menambah energi, meringankan masalah kesehatan pada perut atau pencernaan, dan membantu menguatkan sistem imunitas.\r\n\r\nJenis teh herbal yang populer dan bisa kamu konsumsi, seperti teh hijau, teh hitam, teh chamomile, teh dengan ginseng, teh jahe, teh dengan tambahan peppermint, dan teh kayu manis.\r\n\r\nItu tadi beberapa asupan yang bisa kamu konsumsi setelah lebaran Idul Adha untuk mencegah peningkatan kadar kolesterol dan tekanan darah. Namun, jika kamu merasakan gejala yang tidak biasa, segera tanyakan pada dokter bagaimana cara menanganinya, ya!', '1718279435.jpg', 'zendietadmin', '1', 'active', 'admin', '2024-06-13 04:50:35', '2024-06-13 04:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9EaTIQr2sEbUWA4XJ2vnkgEoNPKMY0ROpFOLVPGU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicTNJS3RPTHVTOTBLM0Rpb0h6V0l1bU50aFlCa05yd1ZkTXpxQjRiSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3N0X2RldGFpbHMvMTUiO319', 1718331675),
('jVn7N9YGAsh1u0Q4IyHPoUVXWKINMxSZgJ2KBiX1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTExIVGN1TjNPMzNsQUp1aEtPZGY0Yk9wZm11Q1JzOVdsUTRRa2c2eiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1718278015),
('S7EWTPFJbCjcjI2MrWW6kvNFjLPuPSZ4ZimBGYEE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakFhT1lZV1J1Qk1uTVZOdjNBMzA5YnNtV3RTYmpicTFyTGFCdE5lZSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1718279831);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zendietadmin', 'zendiet3095@gmail.com', NULL, '$2y$12$5u0VjUUINajHWW9PVEluvukmiSG9qq3MU1drhSaOariaSJm.2JBu.', NULL, NULL, NULL, 'admin', NULL, '2024-05-01 08:10:27', '2024-05-01 08:10:27'),
(2, 'user', 'user@gmail.com', NULL, '$2y$12$IPXYj29rUHrWOIMpkFpcDe.bd8QxXBvuMdGzvc8GFBJgbdzpmiqJC', NULL, NULL, NULL, 'user', NULL, '2024-05-01 09:16:14', '2024-05-01 09:16:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
