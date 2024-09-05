-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2024 at 05:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasty_treasures_cookbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructions`
--

CREATE TABLE `instructions` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `instruction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructions`
--

INSERT INTO `instructions` (`id`, `recipe_id`, `instruction`) VALUES
(1, 1, '<ol><li>Soak the rice and lentils for 6 hours.</li><li>Grind into a smooth batter and ferment overnight.</li><li>Pour the batter onto a hot pan to make dosas.</li><li>Serve hot with chutney or sambar.</li></ol><img src=\"./assets/images/dosa.jpg\" alt=\"Dosa preparation\" />'),
(2, 2, '<ol><li>Soak rice and urad dal for 8 hours.</li><li>Grind into a smooth batter and let it ferment overnight.</li><li>Steam the batter in small molds to make idlis.</li><li>Serve hot with chutney or sambar.</li></ol><img src=\"./assets/images/idli.jpg\" alt=\"Idli preparation\" />'),
(3, 3, '<ol><li>Heat oil and sauté onions until golden brown.</li><li>Add spices and tomato puree, cook for 10 minutes.</li><li>Simmer until the gravy thickens.</li><li>Serve with rice or bread.</li></ol><img src=\"./assets/images/gravies.jpeg\" alt=\"Gravies preparation\" />'),
(4, 4, '<ol><li>Rinse rice thoroughly and soak for 30 minutes.</li><li>Cook the rice with water and a pinch of salt.</li><li>Let the rice steam for 10 minutes before serving.</li><li>Serve with a side dish of your choice.</li></ol><img src=\"./assets/images/rice.jpg\" alt=\"Rice preparation\" />'),
(5, 5, '<ol><li>Grind coconut, green chilies, and ginger to a paste.</li><li>Heat oil, add mustard seeds and curry leaves.</li><li>Mix the coconut paste and stir well.</li><li>Serve chutney with dosas or idlis.</li></ol><img src=\"./assets/images/chutney.jpg\" alt=\"Chutney preparation\" />'),
(6, 6, '<ol><li>Prepare the batter by mixing flour, water, and sugar.</li><li>Deep fry the batter to make sweets.</li><li>Let them cool before serving.</li></ol><img src=\"./assets/images/sweets.jpg\" alt=\"Sweets preparation\" />'),
(7, 7, '<ol><li>Mix chickpea flour with spices and water.</li><li>Fry the mixture in hot oil to make snacks.</li><li>Serve with chutney or sauce.</li></ol><img src=\"./assets/images/snack.jpeg\" alt=\"Snacks preparation\" />'),
(8, 8, '<ol><li>Boil the noodles in salted water for 10 minutes.</li><li>Stir-fry vegetables and meat of your choice.</li><li>Mix the noodles with the stir-fry and serve.</li></ol><img src=\"./assets/images/noodles.jpg\" alt=\"Noodles preparation\" />'),
(9, 9, '<ol><li>Marinate the chicken with spices and yogurt for 1 hour.</li><li>Grill or fry the chicken until fully cooked.</li><li>Serve with rice or bread.</li></ol><img src=\"./assets/images/chicken.jpg\" alt=\"Chicken preparation\" />'),
(10, 10, '<ol><li>Clean and marinate the fish with spices.</li><li>Grill or fry the fish until golden brown.</li><li>Serve with rice or salad.</li></ol><img src=\"./assets/images/fish.jpg\" alt=\"Fish preparation\" />');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `isRecommend` int(11) NOT NULL DEFAULT 0,
  `number_visitors` int(11) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `image`, `description`, `isRecommend`, `number_visitors`, `created_by`, `created_at`) VALUES
(1, 'Dosa', 'img/dosa.jpg', 'A traditional South Indian dish', 1, 0, 1, '2024-09-05 02:50:59'),
(2, 'Idli', 'img/idli.jpg', 'A popular South Indian breakfast item', 1, 0, 1, '2024-09-05 02:50:59'),
(3, 'Gravies', 'img/gravies.jpeg', 'A variety of flavorful gravies', 1, 0, 1, '2024-09-05 02:50:59'),
(4, 'Rices', 'img/rice.jpg', 'Different types of rice dishes', 1, 0, 1, '2024-09-05 02:50:59'),
(5, 'Chutney', 'img/chutney.jpg', 'A tangy and spicy condiment', 1, 0, 1, '2024-09-05 02:50:59'),
(6, 'Sweets', 'img/sweets.jpg', 'Delicious traditional sweets', 1, 0, 1, '2024-09-05 02:50:59'),
(7, 'Snacks', 'img/snack.jpeg', 'Various quick and tasty snacks', 0, 0, 1, '2024-09-05 02:50:59'),
(8, 'Noodles', 'img/noodles.jpg', 'Stir-fried noodles with vegetables or meat', 0, 0, 1, '2024-09-05 02:50:59'),
(9, 'Chicken', 'img/chicken.jpg', 'Delicious chicken dishes', 0, 0, 1, '2024-09-05 02:50:59'),
(10, 'Fish', 'img/fish.jpg', 'Fresh fish cooked with spices', 0, 0, 1, '2024-09-05 02:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'johndoe', '123123', 'user', '2024-09-05 02:50:59'),
(2, 'janesmith', '123123', 'user', '2024-09-05 02:50:59'),
(3, 'adminuser', '123123', 'admin', '2024-09-05 02:50:59'),
(4, 'alicewonder', '123123', 'user', '2024-09-05 02:50:59'),
(5, 'bobbuilder', '123123', 'user', '2024-09-05 02:50:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `instructions`
--
ALTER TABLE `instructions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructions`
--
ALTER TABLE `instructions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `instructions`
--
ALTER TABLE `instructions`
  ADD CONSTRAINT `instructions_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
