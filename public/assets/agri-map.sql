-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 08:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri-map`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_24_120818_create_soil_params_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soil_params`
--

CREATE TABLE `soil_params` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `polygon` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`polygon`)),
  `location` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soil_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soil_temperature` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soil_moisture` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soil_ph` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soil_params`
--

INSERT INTO `soil_params` (`id`, `polygon`, `location`, `land_type`, `soil_type`, `soil_temperature`, `soil_moisture`, `soil_ph`, `created_at`, `updated_at`) VALUES
(3, '\"{\\\"type\\\":\\\"Feature\\\",\\\"properties\\\":{},\\\"geometry\\\":{\\\"type\\\":\\\"Polygon\\\",\\\"coordinates\\\":[[[123.861106,12.694608],[123.861675,12.694802],[123.862308,12.693844],[123.862538,12.693745],[123.862758,12.693158],[123.863037,12.693274],[123.863117,12.693734],[123.863262,12.693807],[123.863643,12.693572],[123.863798,12.693169],[123.863144,12.692651],[123.862769,12.69253],[123.862769,12.692682],[123.862082,12.692666],[123.861814,12.692567],[123.861675,12.692792],[123.861541,12.692912],[123.861332,12.693614],[123.861396,12.693677],[123.861106,12.694608]]]}}\"', 'Inararan', 'Coastal', 'Ubay Clay Loam', '36.15', '>30% = Very Wet', '5.82', '2023-04-27 18:10:03', '2023-04-27 18:10:03'),
(5, '\"{\\\"type\\\":\\\"Feature\\\",\\\"properties\\\":{},\\\"geometry\\\":{\\\"type\\\":\\\"Polygon\\\",\\\"coordinates\\\":[[[123.900798,12.669817],[123.901431,12.669409],[123.901174,12.668822],[123.901474,12.668665],[123.901409,12.6681],[123.901313,12.667755],[123.901163,12.66766],[123.901023,12.667388],[123.901056,12.667137],[123.900938,12.66675],[123.900745,12.666739],[123.900283,12.665902],[123.900058,12.665954],[123.900123,12.665347],[123.899983,12.665378],[123.899887,12.665546],[123.899608,12.665337],[123.899372,12.665274],[123.8992,12.665358],[123.899039,12.665316],[123.898879,12.665483],[123.898117,12.666038],[123.897742,12.665755],[123.897334,12.666059],[123.897152,12.66586],[123.896669,12.66608],[123.896552,12.665986],[123.896155,12.666195],[123.89609,12.666394],[123.896251,12.666645],[123.896219,12.666949],[123.896144,12.6672],[123.896005,12.667346],[123.896015,12.667524],[123.896069,12.667744],[123.896412,12.667954],[123.896573,12.667901],[123.897281,12.668069],[123.897871,12.66833],[123.898385,12.66854],[123.898407,12.668697],[123.898771,12.668603],[123.899232,12.668236],[123.899404,12.668404],[123.89964,12.668979],[123.900262,12.669566],[123.900552,12.669471],[123.900798,12.669817]]]}}\"', 'Fabrica', 'Lowland', 'Bascaran Sandy Loam', '32.7', '>30% = Very Wet', '5.99', '2023-04-27 18:25:02', '2023-04-27 18:25:02'),
(7, '\"{\\\"type\\\":\\\"Feature\\\",\\\"properties\\\":{},\\\"geometry\\\":{\\\"type\\\":\\\"Polygon\\\",\\\"coordinates\\\":[[[123.878946,12.708094],[123.879997,12.708785],[123.880222,12.708638],[123.880822,12.708858],[123.880973,12.708795],[123.881054,12.708955],[123.882344,12.708115],[123.882102,12.707824],[123.882411,12.707516],[123.882035,12.706984],[123.881837,12.706773],[123.881714,12.706895],[123.881322,12.7061],[123.880912,12.705804],[123.879652,12.706482],[123.879966,12.706757],[123.879312,12.707411],[123.878946,12.708094]]]}}\"', 'Calomagon', 'Highland', 'Silay Fine Sandy Loam', '32.2', '>30% = Very Wet', '6.16', '2023-04-27 18:30:33', '2023-04-27 18:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$MyrJzuSjD.gaBPc3fVQGiecQGzC.SOBdi2Hn.hi4fnusXYAPp1BWK', NULL, '2023-04-26 03:59:16', '2023-04-26 03:59:16'),
(2, 'DeptAgri', 'agridept', '$2y$10$D.f9ykukC3MIIsWevxZ8d.TU3r1m.3F1JxWBUjKuBxFvNWa.kGEHy', NULL, '2023-04-26 03:59:16', '2023-04-26 03:59:16');

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `soil_params`
--
ALTER TABLE `soil_params`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soil_params`
--
ALTER TABLE `soil_params`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
