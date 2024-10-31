-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 05:08 AM
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `frontend_technologies` varchar(255) DEFAULT NULL,
  `interests` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `title`, `description`, `frontend_technologies`, `interests`, `created_at`) VALUES
(1, 'Dava Pangestu Putera', 'Informatics Student at Universitas Pembangunan Jaya', 'Halo, saya Dava Pangestu Putera, seorang mahasiswa informatika dengan semangat yang mendalam untuk pengembangan web dan desain grafis. Saya fokus mengasah keterampilan dalam menciptakan situs web modern yang responsif dan mengembangkan pengalaman pengguna yang memikat.', 'HTML, CSS, JavaScript, Bootstrap', 'Menjelajahi tren desain, mengerjakan proyek kreatif yang menggabungkan seni dan teknologi.', '2024-10-23 19:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `img`, `title`, `text`, `button_text`, `button_link`) VALUES
(1, 'pixelcut-export.png', 'Welcome to My Portfolio website', '', 'Learn More', 'about.php'),
(2, 'pixelcut-export.gaota.jpeg', 'Creative & Innovative Designs', 'Web development and Background Illustrator.', 'My Skills', 'myskill.php'),
(3, 'Screenshot 2024-10-23 200533.png', 'Responsive Web Development', 'Building modern, responsive, and user-friendly websites.', 'My Work', 'portofolio.php');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'john doe', 'johndoe@example.com', 'Hello! I would like to know more about your work. ', '2024-10-23 19:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `myskill`
--

CREATE TABLE `myskill` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `myskill`
--

INSERT INTO `myskill` (`id`, `skill_name`, `description`, `image_url`, `created_at`) VALUES
(1, 'Web Developer', 'Saya memiliki pengalaman dalam mengembangkan aplikasi web yang responsif dan interaktif, menggunakan berbagai teknologi seperti HTML, CSS, JavaScript, dan PHP. Saya juga familiar dengan framework seperti Bootstrap dan jQuery, serta memiliki pemahaman yang baik tentang prinsip-prinsip desain UI/UX untuk menciptakan antarmuka pengguna yang intuitif. Selain itu, saya telah bekerja dengan berbagai alat pengembangan dan manajemen proyek, termasuk Git dan Agile, untuk memastikan pengiriman proyek tepat waktu dan sesuai standar kualitas.', 'Screenshot 2024-10-23 200533.png', '2024-10-23 19:36:36'),
(2, 'Background Illustrator', 'Sebagai Background Illustrator, saya memiliki keahlian dalam menciptakan latar belakang yang mendukung narasi visual dalam berbagai proyek, termasuk animasi, game, dan ilustrasi buku. Saya fokus pada penciptaan suasana yang sesuai dengan tema dan karakter yang ada, menggunakan teknik pewarnaan dan tekstur untuk menambah kedalaman dan dimensi. Dengan pemahaman yang baik tentang komposisi dan perspektif, saya dapat menghasilkan latar belakang yang menarik dan harmonis dengan elemen lainnya.', 'gambar ngasal.jpeg', '2024-10-23 19:36:36'),
(3, 'Make a Coffee', 'Saya memiliki keahlian dalam pengembangan kopi, termasuk proses pemilihan biji kopi berkualitas tinggi, pengolahan, dan teknik penyeduhan yang tepat. Saya memahami berbagai metode penyeduhan, seperti French press, pour-over, dan espresso, serta cara memadukan rasa untuk menciptakan secangkir kopi yang sempurna.', 'gaota.jpg', '2024-10-23 19:36:36');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `project_name`, `description`, `image_url`, `created_at`) VALUES
(1, 'Financial Office', 'Bertanggung jawab untuk mengelola keuangan, termasuk pengelolaan anggaran, pembukuan, pelaporan keuangan, pengelolaan kas, dan kepatuhan pajak.', 'neraca gaota.png', '2024-10-23 19:38:24'),
(2, 'Website And DataBase Project', 'Merancang dan mengembangkan situs web responsif untuk sebuah bisnis lokal menggunakan HTML, CSS, JavaScript, dan MySQL.', 'Screenshot 2024-10-23 200533.png', '2024-10-23 19:38:24'),
(3, 'Background Illustrator', 'Saya memiliki keahlian dalam menciptakan latar belakang yang mendukung narasi visual dalam berbagai proyek, termasuk animasi, game, dan saya memakai aplikasi Clip Studio Paint.', 'gambar ngasal.jpeg', '2024-10-23 19:38:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myskill`
--
ALTER TABLE `myskill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myskill`
--
ALTER TABLE `myskill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
