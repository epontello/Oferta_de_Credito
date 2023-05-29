-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Maio-2023 às 02:59
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cpfs`
--

CREATE TABLE `cpfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `nome_inst` varchar(255) NOT NULL,
  `nome_modal` varchar(255) NOT NULL,
  `qtdmin_parc` varchar(255) NOT NULL,
  `qtdmax_parc` varchar(255) NOT NULL,
  `vlrmin` varchar(255) NOT NULL,
  `vlrmax` varchar(255) NOT NULL,
  `jurmes` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cpfs`
--

INSERT INTO `cpfs` (`id`, `cpf`, `nome_inst`, `nome_modal`, `qtdmin_parc`, `qtdmax_parc`, `vlrmin`, `vlrmax`, `jurmes`, `created_at`, `updated_at`) VALUES
(7, '11111111111', 'Banco PingApp', 'crédito consignado', '24', '72', '10000', '19250', '0.0118', '2023-05-29 03:52:55', '2023-05-29 03:52:55'),
(8, '11111111111', 'Financeira Assert', 'crédito pessoal', '12', '48', '3000', '7000', '0.0365', '2023-05-29 03:52:55', '2023-05-29 03:52:55'),
(9, '11111111111', 'Banco PingApp', 'crédito pessoal', '12', '48', '5000', '8000', '0.0495', '2023-05-29 03:52:55', '2023-05-29 03:52:55'),
(10, '12312312312', 'Banco ATR SA', 'crédito consignado', '12', '120', '12236', '58130', '0.0105', '2023-05-29 03:53:16', '2023-05-29 03:53:16'),
(11, '12312312312', 'Banco PingApp', 'crédito pessoal', '18', '60', '12000', '21250', '0.0118', '2023-05-29 03:53:16', '2023-05-29 03:53:16'),
(12, '12312312312', 'Banco PingApp', 'Saque FGTS', '12', '48', '15000', '25250', '0.0385', '2023-05-29 03:53:16', '2023-05-29 03:53:16'),
(13, '22222222222', 'Banco ATR SA', 'crédito pessoal', '12', '48', '5140', '18250', '0.0395', '2023-05-29 03:53:31', '2023-05-29 03:53:31'),
(14, '22222222222', 'Financeira Assert', 'Saque FGTS', '18', '60', '500', '6250', '0.0409', '2023-05-29 03:53:31', '2023-05-29 03:53:31'),
(15, '22222222222', 'Financeira Assert', 'crédito pessoal', '18', '60', '8000', '21250', '0.0501', '2023-05-29 03:53:31', '2023-05-29 03:53:31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
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
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_29_000919_create_cpfs_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
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
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cpfs`
--
ALTER TABLE `cpfs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cpfs`
--
ALTER TABLE `cpfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
