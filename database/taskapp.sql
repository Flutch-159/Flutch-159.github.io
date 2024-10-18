-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2024 a las 10:07:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taskapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2024-10-05-153234', 'App\\Database\\Migrations\\CreateTask', 'default', 'App', 1728143903, 1),
(3, '2024-10-05-114500', 'App\\Database\\Migrations\\AddTimestampsToTask', 'default', 'App', 1728161443, 2),
(4, '2024-10-11-011000', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1728617309, 3),
(5, '2024-10-12-204013', 'App\\Database\\Migrations\\AddUserIdToTask', 'default', 'App', 1728765831, 4),
(6, '2024-10-14-231923', 'App\\Database\\Migrations\\AddIndexToTaskCreatedAt', 'default', 'App', 1728948583, 5),
(7, '2024-10-15-213648', 'App\\Database\\Migrations\\AddIsAdminToUser', 'default', 'App', 1729028759, 6),
(8, '2024-10-16-165406', 'App\\Database\\Migrations\\AddAccountActivationToUser', 'default', 'App', 1729097959, 7),
(9, '2024-10-16-224700', 'App\\Database\\Migrations\\AddPasswordResetToUser', 'default', 'App', 1729119062, 8),
(10, '2024-10-17-064439', 'App\\Database\\Migrations\\AddProfileImageToUser', 'default', 'App', 1729147659, 9),
(11, '2024-10-17-084139', 'App\\Database\\Migrations\\CreateRememberedLogin', 'default', 'App', 1729155035, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remembered_login`
--

CREATE TABLE `remembered_login` (
  `token_hash` varchar(64) NOT NULL,
  `user_id` int(5) UNSIGNED NOT NULL,
  `expires_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `remembered_login`
--

INSERT INTO `remembered_login` (`token_hash`, `user_id`, `expires_at`) VALUES
('cbcd77a1316fcd60642c88aa9e9dac0f7d8cf79fabe968f90da37abb578057c8', 13, '2024-10-28 00:48:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE `task` (
  `id` int(5) UNSIGNED NOT NULL,
  `descripcion` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `descripcion`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Tarea uno', NULL, NULL, 3),
(2, 'Esta tarea', NULL, NULL, 2),
(3, 'Otra tarea', NULL, NULL, 2),
(4, 'Una importante tarea', NULL, NULL, 2),
(6, 'Una interesante tarea', NULL, NULL, 2),
(7, '<em>XSS?</em>', NULL, NULL, 2),
(8, 'Tarea de hoy', NULL, NULL, 2),
(10, 'Una tarea con timestamps editada', '2024-10-10 22:30:00', '2024-10-10 22:30:50', 2),
(11, 'Una tarea mas', '2024-10-12 20:03:25', '2024-10-12 20:03:25', 2),
(12, 'Otra tareas', '2024-10-12 21:09:11', '2024-10-12 21:09:11', 2),
(13, 'Una nueva tarea', '2024-10-12 21:53:33', '2024-10-12 21:53:33', NULL),
(14, 'Una feliz tarea editada', '2024-10-12 21:55:25', '2024-10-12 22:06:42', 2),
(15, 'Tarea urgente', '2024-10-14 23:05:15', '2024-10-14 23:05:15', 2),
(16, 'Hola tarea', '2024-10-14 23:47:13', '2024-10-14 23:47:13', 2),
(17, 'ultima tarea ahora', '2024-10-14 23:47:29', '2024-10-18 04:21:22', 13),
(18, 'made', '2024-10-14 23:48:24', '2024-10-14 23:48:24', 13),
(19, 'Otra tarea mas causa', '2024-10-14 23:48:40', '2024-10-14 23:48:40', 13),
(20, 'tilin', '2024-10-14 23:48:51', '2024-10-14 23:48:51', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `activation_hash` varchar(64) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `reset_hash` varchar(64) DEFAULT NULL,
  `reset_expires_at` datetime DEFAULT NULL,
  `profile_image` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `created_at`, `updated_at`, `is_admin`, `activation_hash`, `is_active`, `reset_hash`, `reset_expires_at`, `profile_image`) VALUES
(2, 'Marlhon', 'marlhon@ejemplo.com', '$2y$10$bvIDkGNoS7XuE3R6/muPZOAZbcddupqPSaH6brZKm2FZkbEf9XpBy', NULL, '2024-10-16 22:24:10', 0, NULL, 0, NULL, NULL, NULL),
(3, 'Marlhon1', 'mar@ejemplo.com', '$2y$10$Q3dEI7Rn0jq9hb5xi6vecekibhpnwR4x65Hj1IjM0uvt.rOOGCqDG', '2024-10-11 21:55:47', '2024-10-11 21:55:47', 0, NULL, 0, NULL, NULL, NULL),
(4, 'Sofia', 'sofia@ejemplo.com', '$2y$10$P1UTunur5vjwzChRObnZTO6fFgPmngvBzq4/jAZBLsQzp.dBvmQtK', '2024-10-12 13:58:02', '2024-10-12 13:58:02', 0, NULL, 0, NULL, NULL, NULL),
(5, 'Marlhon159', 'marlhonserech@ejemplo.com', '$2y$10$qlscKnRj9/C1M.w05d3nCe1LKqjq6d/Lo2SnU4mooS1UmWSbzdjWy', '2024-10-15 18:22:42', '2024-10-15 18:54:02', 0, NULL, 0, NULL, NULL, NULL),
(7, 'Admin', 'admin@ejemplo.com', '$2y$10$WuZgCxt1p1bLfA0F0FJqWexFx87t3fcW0Pd3NXOboHk9cawXx84Sm', '2024-10-15 22:12:42', '2024-10-15 22:12:42', 1, NULL, 1, NULL, NULL, NULL),
(8, 'Otro Admin', 'admin2@ejemplo.com', '$2y$10$xJBSO4AFI9Y59IkkdLSszOOM5TyY2e4J.hGmTIHbSmU86kXQr7U7W', '2024-10-15 23:16:43', '2024-10-15 23:16:43', 0, NULL, 0, NULL, NULL, NULL),
(9, 'Nuevo admin', 'admin3@ejemplo.com', '$2y$10$og2d1PVfsk4Ta/ig5/EHXu/bC6YwHN5XRvCT5UMtg3HlfoZDSpJlK', '2024-10-15 23:19:50', '2024-10-15 23:19:50', 1, NULL, 0, NULL, NULL, NULL),
(10, 'tilin', 'tilin@ejemplo.com', '$2y$10$P7rX1zveMfVKkH8fUWjWNOG447iw6z07VoNhWFNSpbT0NgQmAMODK', '2024-10-16 17:22:44', '2024-10-16 17:22:44', 0, 'ca6ebef7675a436fc68fc925c0d910258b938a776db72215ffdddc66551d8c8b', 1, NULL, NULL, NULL),
(11, 'bot', 'bot@ejemplo.com', '$2y$10$rjS5iGy0v4sTGLetTUqYRO.rY7sCzJn6kt526yDMtY75d0Ln5PGQC', '2024-10-16 18:08:17', '2024-10-16 18:08:17', 0, '6c10970cc82be69be03463dd448ba6d5480e3564606362cc88ab1bb0e81a0f09', 1, NULL, NULL, NULL),
(13, 'Marlhon1995', 'marlhonalexisserechmiranda@gmail.com', '$2y$10$GJ0A57vw7zT9UMjXOG/acOPDXoWOWhj8C8Awrrr1Bt1sWyJWELXdW', '2024-10-16 21:35:04', '2024-10-18 03:35:26', 1, NULL, 1, NULL, NULL, '1729222526_992956691941f0c7b60f.jpg'),
(14, 'Madelyn', 'lourdesbarrios2005@gmail.com', '$2y$10$0F75MYEyldHrBSVKm8aWg.peNcfoyPebn7601fILHPX4DXVO2u1Ea', '2024-10-16 21:54:06', '2024-10-16 21:54:06', 0, 'ab3490793d2c46e801181173733b5556f7fc8f549a60a3773e50188781e4907b', 0, NULL, NULL, NULL),
(15, 'marlhon', 'marlhonserech@gmail.com', '$2y$10$F6ZBDFjsEr9Nhyu2l5v3du.TePqBfu6RdYoTq62XwvFKgiJ6ZFIrm', '2024-10-18 05:20:19', '2024-10-18 05:20:19', 0, 'f1a9c3da5d16758bb1182ca72bce39cd8b778f3938ac030bb6132f6691170251', 0, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `remembered_login`
--
ALTER TABLE `remembered_login`
  ADD PRIMARY KEY (`token_hash`),
  ADD KEY `remembered_login_user_id_foreign` (`user_id`),
  ADD KEY `expires_at` (`expires_at`);

--
-- Indices de la tabla `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_user_id_fk` (`user_id`),
  ADD KEY `created_at` (`created_at`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `activation_hash` (`activation_hash`),
  ADD UNIQUE KEY `reset_hash` (`reset_hash`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `task`
--
ALTER TABLE `task`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `remembered_login`
--
ALTER TABLE `remembered_login`
  ADD CONSTRAINT `remembered_login_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
