-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2025 at 10:07 AM
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
-- Database: `web_based_programming`
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `body`, `created_at`, `updated_at`) VALUES
(3, 2, 1, 'Officia soluta sapiente nam voluptatem.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(4, 2, 1, 'Et quod et praesentium tempore quaerat ea.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(5, 3, 1, 'Excepturi laboriosam mollitia sed iusto.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(7, 4, 1, 'Ea velit sapiente quos dolor.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(8, 4, 1, 'Sit quaerat vel esse incidunt distinctio corporis.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(9, 5, 2, 'Aliquam sint cum blanditiis necessitatibus illo exercitationem.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(10, 5, 2, 'Odio at dolorum et ut impedit eaque sapiente.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(11, 6, 2, 'Ut voluptas quo dolorem asperiores soluta unde aspernatur.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(12, 6, 1, 'Voluptatibus ullam molestias sit autem et.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(13, 7, 1, 'Quam sit qui quos optio.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(14, 7, 1, 'Qui adipisci aut rerum culpa sed.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(15, 8, 1, 'Accusamus velit voluptas sit qui provident mollitia totam.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(16, 8, 1, 'Earum culpa accusamus ut et occaecati.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(17, 9, 1, 'Explicabo deserunt reiciendis porro nam non et.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(18, 9, 2, 'Dolore ex impedit libero.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(19, 10, 1, 'Provident dolores nam ad occaecati officia facilis beatae provident.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(20, 10, 4, 'Ut ratione et esse odit aliquid.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(21, 11, 4, 'Alias consectetur dolorem corporis voluptatibus consequatur nam occaecati.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(22, 11, 2, 'Quaerat veniam aut voluptatem qui exercitationem.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(23, 12, 4, 'Fugiat consequuntur voluptatibus vel qui.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(24, 12, 2, 'Ratione rerum optio deserunt.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(25, 13, 1, 'Corrupti rem et deleniti vitae.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(26, 13, 3, 'At at omnis modi molestiae dolore et atque.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(27, 14, 3, 'Ratione cupiditate accusantium non ut porro tenetur sequi.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(28, 14, 1, 'In autem accusamus atque animi ea aut aut quo.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(29, 15, 4, 'Explicabo odio soluta ut explicabo.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(30, 15, 3, 'Ab et repudiandae voluptas rerum voluptatem.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(31, 3, 2, 'سشی', '2025-10-30 05:25:45', '2025-10-30 05:25:45'),
(32, 16, 5, 'آقا عالیه', '2025-10-30 05:34:39', '2025-10-30 05:34:47');

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
(4, '2025_10_30_072441_create_posts_table', 1),
(5, '2025_10_30_072744_create_comments_table', 1);

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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(2, 1, 'Dolorem hic molestiae nisi commodi.', 'Soluta quisquam odit ex illum provident. Ab sapiente eum illum. Cumque quos cumque iure et magnam eos. Neque sit ut aliquam dolores perferendis. Commodi iure quia accusamus et dolorum voluptas iure. Dolores quo iure vero dolorum.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(3, 1, 'Qui qui velit omnis eos at iste nesciunt impedit.', 'Minus recusandae autem debitis neque tempore. Omnis atque fuga aliquid expedita ex ipsa. Ullam occaecati mollitia vero eveniet necessitatibus aut molestiae maiores. Voluptates velit ducimus eveniet aspernatur dolores rerum. Ut a voluptatibus quis officia illum aut sunt.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(4, 2, 'Quas et qui magnam optio voluptatum in.', 'Sunt soluta officiis voluptas quibusdam quibusdam facilis delectus. Ullam libero impedit ipsam sint provident voluptatem perferendis. Adipisci molestiae quo modi cupiditate voluptate. Beatae quae sit ullam a alias voluptatem quo.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(5, 2, 'Quae voluptate accusamus quia et.', 'Cumque provident alias veniam eaque debitis. Rerum beatae velit est odit consequatur. Blanditiis quia et voluptate at laboriosam aut quas deleniti. Commodi dolores enim eos sit commodi ad molestias. Quod autem quidem fuga. Adipisci tempore velit voluptates voluptatum dolores beatae.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(6, 2, 'Quo enim tempore illo.', 'Voluptatibus maxime laudantium aut. Cupiditate consequatur odit quo minima voluptates sed. Deleniti deserunt deleniti et qui porro et. Temporibus et est dolor eum. Quis voluptate adipisci sequi iusto.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(7, 3, 'Numquam esse quia consequatur est.', 'Saepe dignissimos voluptas incidunt fugit odio. Perspiciatis error odio optio itaque et. Expedita iste quod itaque commodi rerum impedit. Ratione odio iure debitis repellat.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(8, 3, 'Omnis quisquam ut itaque ducimus reprehenderit dolor.', 'Vel ut ratione porro quidem temporibus et. Similique accusantium atque occaecati et voluptatem quasi. Molestiae sunt odio vel nisi. Consequatur labore molestiae quia. Officia consequuntur et quia laudantium cupiditate natus iure.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(9, 3, 'Dolore at tempore et reiciendis ab modi tempore.', 'Autem culpa rerum deserunt quo exercitationem. Dignissimos ratione exercitationem ut voluptatem perferendis adipisci sequi. Maiores vitae quia totam exercitationem reiciendis voluptas laudantium. Quod dicta qui sequi repellendus molestiae quam doloremque quo. Qui culpa et dolorum distinctio.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(10, 4, 'Fuga nesciunt eum eaque eos nesciunt aspernatur.', 'Eius et accusantium maiores voluptas beatae in. Consequatur in repudiandae optio et asperiores. Magnam et tempora dicta nesciunt sit assumenda fuga. Facilis maxime sint et incidunt esse. Ea aut adipisci quam tempore eum.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(11, 4, 'Quis quisquam et aut soluta quia.', 'Vel quia eaque neque repellat ut qui. Autem quae nemo id tempore quis earum doloremque rerum. Laudantium et voluptatem consequatur.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(12, 4, 'Praesentium voluptatem inventore quisquam dolore commodi ad dolorum voluptas.', 'Natus harum quia modi maiores vitae voluptatem labore. Amet aut blanditiis sunt soluta rerum laborum et. Placeat voluptates mollitia sit aperiam. Nobis sunt facilis odio tempora. Placeat eos omnis aperiam et voluptates suscipit tempore. Amet velit cupiditate autem pariatur.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(13, 5, 'Et repellendus ut et nihil officiis commodi.', 'Vero et illo cupiditate inventore. Sed ut quos reiciendis velit distinctio et quo molestiae. Tenetur est aperiam sed omnis.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(14, 5, 'Reiciendis in aut dicta nihil.', 'Eius sed error eos molestiae sed ducimus nesciunt. Tenetur velit asperiores similique perferendis quam voluptatem. Natus earum aliquam sequi ut. Consequatur dolores architecto natus nulla sit doloribus.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(15, 5, 'Repellendus repudiandae fugit consequatur sed odit animi ratione.', 'Veniam labore saepe cum ea soluta. Voluptatem et rem pariatur optio excepturi. Sint sit ea illo vel fugit. Qui ipsa impedit quia nam eos nihil. Esse adipisci corporis delectus quisquam possimus sed.', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(16, 3, 'سلام تست 25', 'سلام تستی ستیانشتسا سیبیسبسیب', '2025-10-30 05:25:03', '2025-10-30 05:34:22');

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
('fm4YRpy0eklwDRYB3Bt2NzBKr7sbJh9pT0iC0IPt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:144.0) Gecko/20100101 Firefox/144.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieU5yblM3a3VWWVlzU3h1WXVhTE8yVEhwQnl4OXJGbXNTbDYyUGpLaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3N0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1761815195);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'امیر اکبری', 'krunolfsson@example.net', '2025-10-30 05:23:12', '$2y$12$23qhDbVB1JePadaNVh3V4eH87xwDLXpU07IdVSs9/rbVRdxat7Tbm', 'kyBuNq7Ppx', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(2, 'حسین رضایی', 'jchamplin@example.com', '2025-10-30 05:23:13', '$2y$12$23qhDbVB1JePadaNVh3V4eH87xwDLXpU07IdVSs9/rbVRdxat7Tbm', 'zAy5TAqqky', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(3, 'مارال شریفی', 'jmccullough@example.com', '2025-10-30 05:23:13', '$2y$12$23qhDbVB1JePadaNVh3V4eH87xwDLXpU07IdVSs9/rbVRdxat7Tbm', 'AMo8TJuFan', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(4, 'پانیسا احمدی', 'nya92@example.com', '2025-10-30 05:23:13', '$2y$12$23qhDbVB1JePadaNVh3V4eH87xwDLXpU07IdVSs9/rbVRdxat7Tbm', 'VRz5qU8vk3', '2025-10-30 05:23:13', '2025-10-30 05:23:13'),
(5, 'رضا اقاخانی', 'kautzer.steve@example.org', '2025-10-30 05:23:13', '$2y$12$23qhDbVB1JePadaNVh3V4eH87xwDLXpU07IdVSs9/rbVRdxat7Tbm', 'WbqBT5m5Wj', '2025-10-30 05:23:13', '2025-10-30 05:23:13');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
