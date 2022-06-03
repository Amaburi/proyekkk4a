-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekkk`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `johncomment`
--

CREATE TABLE `johncomment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `johncomment`
--

INSERT INTO `johncomment` (`id`, `user`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'JWick', 'Lesssggggoooo', '2022-05-31 10:06:19', '2022-05-31 10:06:19'),
(2, 'Johnnnnnnn', 'Hey Hey not bad', '2022-05-31 10:11:39', '2022-05-31 10:11:39'),
(3, 'Jimmy Buttler', 'John Wickkkkk', '2022-05-31 10:18:07', '2022-05-31 10:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE `latest` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest`
--

INSERT INTO `latest` (`id`, `image`, `page`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'strangem.jpg', 'strangepage', 'Dr.Strange Multiverse Madness', 'After the events of Avengers: Endgame strange continues his research on the Time Stone.”  It continues, “But an old friend turned enemy seeks to destroy every sorcerer on Earth,', '2022-05-23 05:59:00', '2022-05-23 05:59:00'),
(2, 'kkn.jpg', 'kknpage', 'KKN di desa Penari', 'KKN in The Village of Dancers tells the story of the tragedy of six students and students while conducting a Real Work Lecture (KKN) program in a remote village in the forest.', '2022-05-23 06:52:04', '2022-05-23 06:52:04'),
(4, 'allonce.jpg', 'oncepage', 'Everything Everywhere All At Once', 'An aging Chinese immigrant is swept up on a crazy adventure, where he alone can save what\'s important to him by connecting with the life he can live in another universe.', '2022-05-23 07:57:17', '2022-05-23 07:57:17'),
(5, 'pachinko.jpg', 'pachinkopage', 'Pachinko', 'Korean immigrants who begin with forbidden love and crescendos become a sweeping saga that travels between Korea, Japan and America to tell an unforgettable story of war and peace, love and loss, victory and reckoning.', '2022-05-24 07:33:58', '2022-05-24 07:33:58'),
(6, 'junville.jpg', 'junvilepage', 'Junvile Justice', 'A tough judge balances his aversion to petty offenders with a strong belief in justice and punishment as he tackles complex cases within children\'s courts.', '2022-05-24 07:35:39', '2022-05-24 07:35:39'),
(7, 'obi.jpg', 'obipage', 'Obi-Wan Kenobi', 'During the reign of the Galactic Empire, the former Jedi Master, Obi-Wan Kenobi, embarked on an important mission to confront allies who turned into enemies and face the wrath of the Empire.', '2022-05-29 06:55:53', '2022-05-29 06:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_27_062549_create_recommend_table', 1),
(6, '2022_04_14_140031_create_movie_table', 1),
(7, '2022_04_26_141720_create_moviee_table', 1),
(8, '2022_04_27_083249_create_johncomment_table', 1),
(9, '2022_05_23_123304_create_latest_table', 2),
(10, '2022_05_23_140014_create_rank_table', 3),
(11, '2022_05_23_141601_create_rank_table', 4),
(12, '2022_05_23_141755_create_rank_table', 5),
(13, '2022_05_23_151657_create_movieee_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moviee`
--

CREATE TABLE `moviee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moviee`
--

INSERT INTO `moviee` (`id`, `image`, `page`, `name`, `created_at`, `updated_at`) VALUES
(1, 'spyfamily.jpg', 'Spyxpage', 'Spy X Family', '2022-05-18 06:11:06', '2022-05-18 06:11:06'),
(2, 'kny.jpg', 'Kimetsupage', 'Kimetsu No Yaiba', '2022-05-18 06:13:10', '2022-05-18 06:13:10'),
(3, 'peaky.png', 'blinderpage', 'Peaky Blinders', '2022-05-23 07:41:48', '2022-05-23 07:41:48'),
(4, 'stampede.jpg', 'Stampedepage', 'Stampede', '2022-05-23 07:42:32', '2022-05-23 07:42:32'),
(5, 'johnwick.jpg', 'johnwick3page', 'John Wick 3', '2022-05-23 07:42:50', '2022-05-23 07:42:50'),
(6, 'johnwickpara.jpg', 'parabellum', 'John Wick Parabellum', '2022-05-23 08:12:53', '2022-05-23 08:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `movieee`
--

CREATE TABLE `movieee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movieee`
--

INSERT INTO `movieee` (`id`, `image`, `page`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'spyfamily.jpg', 'Spyxpage', 'Spy X Family', 'Spy x Family is about a spy named Loid Forger who builds a fake family to successfully achieve a mission that requires him to take down his target Donovan Desmond, a man who desires to start a deadly war between the East and West.', '2022-05-23 08:22:33', '2022-05-23 08:22:33'),
(2, 'hillhouse.jpg', 'hillpage', 'The Haunting Of Hill House', 'The Crains, a fractured family, face haunting memories of their old home and the horrific events that prompted them to leave it.', '2022-05-23 08:24:11', '2022-05-23 08:24:11'),
(3, 'johnwick.jpg', 'johnwick3page', 'John Wick 2', 'John Wick is forced out of retirement by a former colleague who wants to take control of the international hitman\'s union. Bound by a blood oath to help him, Wick goes to Rome and battles some of the world\'s most dangerous assassins.', '2022-05-23 08:25:23', '2022-05-23 08:25:23'),
(4, 'johnwickpara.jpg', 'parabellum', 'John Wick Parabellum', 'Super-killer John Wick returns with a $14 million price tag on his head and an army of bounty hunter killers follows suit. After killing members of the international hitman\'s union, the High Table.', '2022-05-23 08:26:41', '2022-05-23 08:26:41'),
(5, 'uncharted.jpg', 'unchartedpage', 'Uncharted', 'Nathan Drake is recruited by experienced treasure hunter Victor Sullivan (Sully) to restore the fortune amassed by Ferdinand Magellan and lost 500 years ago by the House of Moncada.', '2022-05-23 08:28:55', '2022-05-23 08:28:55'),
(6, 'stampede.jpg', 'Stampedepage', 'Stampede', 'The Straw Hat Pirates come to Delta Island for the Pirate Fest, a large pirate gathering organized by Buena Festa. Festa sends the pirates to a floating island to hunt for a treasure that belonged to the Pirate King, Gol D. Roger.', '2022-05-23 08:30:08', '2022-05-23 08:30:08'),
(7, 'thematrix.jpg', 'matrixpage', 'The Matrix', 'Set in the 22nd century, The Matrix tells the story of a computer hacker who joins a group of underground rebels fighting the enormous and powerful computers that now rule the earth.', '2022-05-23 08:31:15', '2022-05-23 08:31:15'),
(8, 'strange.jpg', 'doctorpage', 'Doctor Strange', 'After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under her wing and trains him to defend the world against evil.', '2022-05-23 08:33:32', '2022-05-23 08:33:32'),
(9, 'hero.jpg', 'heropage', 'Boku No Hero Academia World Heroes', 'When a cult of terrorists ruins a city by releasing a toxin that causes people\'s abilities to spiral out of control, Japan\'s greatest heroes spread around the world in an attempt to track down the mastermind and put him to justice.', '2022-05-23 23:38:27', '2022-05-23 23:38:27'),
(10, 'yakuza.jpg', 'yakuzapage', 'Yakuza Apocalypse', 'Yakuza Apocalypse tells the story of a power struggle after the death of Yakuza boss Kamiura. Yakuza leaders in a suburban area have reliable killing abilities and are not easy to hunt. Many did not know Kamiura was a vampire.', '2022-05-24 06:19:10', '2022-05-24 06:19:10'),
(11, 'robot.jpg', 'robotpage', 'Mr.Robot', 'The series tells the story of Elliot Alderson, a young man who lives in New York City and works as a cybersecurity expert at Allsafe. ... Elliot is recruited by a mysterious insurrectionary anarchist commonly called Mr. Robot.', '2022-05-24 06:21:32', '2022-05-24 06:21:32'),
(12, 'got.jpg', 'gotpage', 'Game Of Thrones', 'Seven noble families fight for control of the mythical land of Westeros. Friction between the houses leads to full-scale war. All while a very ancient evil awakens in the farthest north. Amidst the war, a neglected military order of misfits.', '2022-05-24 06:23:13', '2022-05-24 06:23:13'),
(13, 'felix.jpg', 'felixauspage', 'Felix Austria', 'The plot revolves around the controversial relationship between aide Stefania Chornenko and blue blood Adelia Anger against the backdrop of the Austro-Hungarian province in 1900.', '2022-05-24 07:25:46', '2022-05-24 07:25:46'),
(14, 'elite.jpg', 'elitepage', 'Elite', 'When three working-class children enroll in Spain\'s most exclusive school, clashes between rich students and poor students lead to tragedy.', '2022-05-24 07:28:11', '2022-05-24 07:28:11'),
(15, 'megan.jpg', 'meganpage', 'Megan Is Missing', 'Megan is Missing tells the story of the disappearance of a teenager named Megan Stewart, a middle schoolgirl who is quite popular in her area.  One day he decided to meet someone he knew through social media or online.', '2022-05-24 07:31:22', '2022-05-24 07:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `image`, `page`, `name`, `desc`, `rank`, `created_at`, `updated_at`) VALUES
(1, 'strangem.jpg', 'strangepage', 'Dr.Strange Multiverse Madness', 'After the events of Avengers: Endgame strange continues his research on the Time Stone.”  It continues, “But an old friend turned enemy seeks to destroy every sorcerer on Earth,', 1, '2022-05-23 07:19:25', '2022-05-23 07:19:25'),
(2, 'spyfamily.jpg', 'Spyxpage', 'Spy X Family', 'Spy x Family is about a spy named Loid Forger who builds a fake family to successfully achieve a mission that requires him to take down his target Donovan Desmond, a man who desires to start a deadly war between the East and West.', 2, '2022-05-23 07:30:35', '2022-05-23 07:30:35'),
(3, 'batman.png', 'batmanpage', 'The Batman', 'On Halloween, Gotham City mayor Don Mitchell Jr. is murdered by a serial killer calling himself the Riddler. Billionaire Bruce Wayne, who has operated for two years as the vigilante Batman, investigates alongside the Gotham City Police Department (GCPD).', 3, '2022-05-23 07:40:41', '2022-05-23 07:40:41'),
(4, 'allonce.jpg', 'oncepage', 'Everything Everywhere All At Once', 'An aging Chinese immigrant is swept up on a crazy adventure, where he alone can save what\'s important to him by connecting with the life he can live in another universe.', 4, '2022-05-23 07:47:36', '2022-05-23 07:47:36'),
(5, 'obi.jpg', 'obipage', 'Obi-Wan Kenobi', 'During the reign of the Galactic Empire, the former Jedi Master, Obi-Wan Kenobi, embarked on an important mission to confront allies who turned into enemies and face the wrath of the Empire.', 5, '2022-05-29 06:41:11', '2022-05-29 06:41:11');

-- --------------------------------------------------------

--
-- Table structure for table `recommend`
--

CREATE TABLE `recommend` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `johncomment`
--
ALTER TABLE `johncomment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest`
--
ALTER TABLE `latest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moviee`
--
ALTER TABLE `moviee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movieee`
--
ALTER TABLE `movieee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommend`
--
ALTER TABLE `recommend`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `johncomment`
--
ALTER TABLE `johncomment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `latest`
--
ALTER TABLE `latest`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moviee`
--
ALTER TABLE `moviee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movieee`
--
ALTER TABLE `movieee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `recommend`
--
ALTER TABLE `recommend`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
