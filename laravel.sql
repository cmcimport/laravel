-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2021 a las 11:10:18
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `padre` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesta`
--

CREATE TABLE `cesta` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_pago`
--

CREATE TABLE `config_pago` (
  `id` int(10) UNSIGNED NOT NULL,
  `transferencia_bancaria` tinyint(1) NOT NULL,
  `contrareembolso` tinyint(1) NOT NULL,
  `tarjeta_de_credito` tinyint(1) NOT NULL,
  `recogida_en_tienda` tinyint(1) NOT NULL,
  `paypal` tinyint(1) NOT NULL,
  `tienda_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_pago_contrareembolso`
--

CREATE TABLE `config_pago_contrareembolso` (
  `id` int(10) UNSIGNED NOT NULL,
  `instrucciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `config_pago_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_pago_recogida_en_tienda`
--

CREATE TABLE `config_pago_recogida_en_tienda` (
  `id` int(10) UNSIGNED NOT NULL,
  `instrucciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `config_pago_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_pago_transferencia`
--

CREATE TABLE `config_pago_transferencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `titular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_cuenta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrucciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `config_pago_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_product`
--

CREATE TABLE `config_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `requiere_envio` tinyint(1) DEFAULT NULL,
  `recogida` tinyint(1) DEFAULT NULL,
  `mostrar_precio` tinyint(1) DEFAULT NULL,
  `precio_negociable` tinyint(1) DEFAULT NULL,
  `venta_al_por_mayor` tinyint(1) DEFAULT NULL,
  `requiere_instalacion` tinyint(1) DEFAULT NULL,
  `requiere_cita_previa` tinyint(1) DEFAULT NULL,
  `precio` double NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `config_product`
--

INSERT INTO `config_product` (`id`, `requiere_envio`, `recogida`, `mostrar_precio`, `precio_negociable`, `venta_al_por_mayor`, `requiere_instalacion`, `requiere_cita_previa`, `precio`, `producto_id`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 0, 0, 0, 0, 1, 45, 3, '2021-02-16 13:54:55', '2021-02-16 13:54:55'),
(4, 0, 1, 0, 0, 0, 0, 0, 1, 4, '2021-02-17 21:21:01', '2021-02-17 21:21:01'),
(5, 0, 1, 0, 0, 0, 0, 0, 1, 5, '2021-02-17 21:32:44', '2021-02-17 21:32:44'),
(16, 1, 0, 0, 1, 1, 0, 1, 1, 19, '2021-02-18 22:25:55', '2021-02-19 02:50:03'),
(17, 0, 1, 1, 0, 0, 1, 0, 12, 20, '2021-02-18 22:27:24', '2021-02-19 02:50:10'),
(18, 1, 0, 0, 1, 0, 0, 0, 5, 21, '2021-02-18 22:31:48', '2021-02-19 01:58:47'),
(19, 1, 1, 1, 1, 1, 1, 0, 23, 23, '2021-02-19 13:04:48', '2021-02-19 13:04:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conf_privacidad`
--

CREATE TABLE `conf_privacidad` (
  `id` int(10) UNSIGNED NOT NULL,
  `notificar_mensaje_like_productos` tinyint(1) NOT NULL,
  `notificar_mensaje_like_perfil` tinyint(1) NOT NULL,
  `notificar_mensaje_pedidos` tinyint(1) NOT NULL,
  `notificar_mensaje_muro` tinyint(1) NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE `favorito` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `favorito`
--

INSERT INTO `favorito` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(10, 20, 3, '2021-02-19 03:02:10', '2021-02-19 03:02:10'),
(11, 3, 3, '2021-02-19 03:04:31', '2021-02-19 03:04:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_product`
--

CREATE TABLE `imagen_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagen_product`
--

INSERT INTO `imagen_product` (`id`, `image_url`, `producto_id`, `created_at`, `updated_at`) VALUES
(14, 'images/products/1613690755119.jpg', 19, '2021-02-18 22:25:55', '2021-02-18 22:25:55'),
(15, 'images/products/1613690844193.jpg', 20, '2021-02-18 22:27:24', '2021-02-18 22:27:24'),
(16, 'images/products/1613690844131.jpg', 20, '2021-02-18 22:27:24', '2021-02-18 22:27:24'),
(17, 'images/products/1613691108178.jpg', 21, '2021-02-18 22:31:48', '2021-02-18 22:31:48'),
(18, 'images/products/1613743488105.jpg', 23, '2021-02-19 13:04:48', '2021-02-19 13:04:48'),
(19, 'images/products/1613743488155.jpg', 23, '2021-02-19 13:04:48', '2021-02-19 13:04:48'),
(20, 'images/products/1613743488166.png', 23, '2021-02-19 13:04:48', '2021-02-19 13:04:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ladrillo`
--

CREATE TABLE `ladrillo` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `tipo` int(10) UNSIGNED NOT NULL,
  `ladrillo_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje_reserva`
--

CREATE TABLE `mensaje_reserva` (
  `id` int(10) UNSIGNED NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `reserva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_01_18_000000_create_user_type_table', 1),
(4, '2021_01_18_000001_create_users_table', 1),
(5, '2021_01_18_000002_create_publicacion_table', 1),
(6, '2021_01_18_000003_create_tienda_table', 1),
(7, '2021_01_18_000004_create_product_table', 1),
(8, '2021_01_18_000005_create_favorito_table', 1),
(9, '2021_01_19_000006_create_configuracion_privacidad_table', 1),
(10, '2021_01_19_000007_create_seguido_table', 1),
(11, '2021_01_19_000008_create_config_product_table', 1),
(12, '2021_01_19_000009_create_valora_product_table', 1),
(13, '2021_01_19_000010_create_imagen_product_table', 1),
(14, '2021_01_19_000011_create_user_direccion_table', 1),
(15, '2021_01_19_000012_create_notifica_tipo_table', 1),
(16, '2021_01_19_000013_create_notifica_user_table', 1),
(17, '2021_01_19_000014_create_valora_user_table', 1),
(18, '2021_01_19_000015_create_categoria_table', 1),
(19, '2021_01_19_000016_create_tienda_a_categoria_table', 1),
(20, '2021_01_19_000017_create_producto_a_categoria_table', 1),
(21, '2021_01_19_000018_create_usuario_a_categoria_table', 1),
(22, '2021_01_19_000019_create_cesta_compra_table', 1),
(23, '2021_01_19_000020_create_reserva_table', 1),
(24, '2021_01_19_000021_create_producto_reserva_table', 1),
(25, '2021_01_19_000022_create_valora_reserva_table', 1),
(26, '2021_01_19_000023_create_mensaje_reserva_table', 1),
(27, '2021_01_19_000024_create_config_pago_table', 1),
(28, '2021_01_19_000025_create_config_pago_transferencia_table', 1),
(29, '2021_02_01_000026_create_usuario_a_tienda_table', 1),
(30, '2021_02_05_000027_create_tipo_ladrillo_table', 1),
(31, '2021_02_05_000028_create_ladrillo_table', 1),
(32, '2021_02_05_000029_create_config_pago_contrareembolso_table', 1),
(33, '2021_02_05_000030_create_config_pago_recogida_en_tienda_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifica_tipo`
--

CREATE TABLE `notifica_tipo` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifica_user`
--

CREATE TABLE `notifica_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_envia_id` int(11) NOT NULL,
  `usuario_recibe_id` int(11) NOT NULL,
  `notificado_por_email` tinyint(1) NOT NULL,
  `fecha_hora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notificacion_vista` tinyint(1) NOT NULL,
  `enlace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_notificacion` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double NOT NULL,
  `aprobado` tinyint(1) NOT NULL,
  `tienda_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `titulo`, `descripcion`, `precio`, `aprobado`, `tienda_id`, `created_at`, `updated_at`) VALUES
(3, 'Producto de otro vendedor', 'Vendedor otro<br>', 45, 0, 2, '2021-02-16 13:54:55', '2021-02-16 13:54:55'),
(4, 'Barras de pan', '<p>Escribe <em>aquí</em> tu <u>texto</u> <strong>personalizado</strong></p>\r\n                                          <p>Puedes añadir estilos de letra, imágenes y otras opciones fácilmente</p>', 1, 0, 2, '2021-02-17 21:21:01', '2021-02-17 21:21:01'),
(5, 'Bollería', 'Productos de bollería<br>', 1, 0, 2, '2021-02-17 21:32:44', '2021-02-17 21:32:44'),
(19, 'Boligrafos pack de 10', 'Pack de 10 boligrafos de colores<br>', 1, 0, 1, '2021-02-18 22:25:55', '2021-02-18 22:25:55'),
(20, 'Agendas Marvel', 'Agendas Marvel 2021 diferentes diseños<br>', 12, 0, 1, '2021-02-18 22:27:24', '2021-02-18 22:27:24'),
(21, 'Libros de inglés', 'Libros de texto y para instituto, colegio y universidad.<br>', 5, 0, 1, '2021-02-18 22:31:48', '2021-02-18 22:31:48'),
(22, 'asdfasdf', '<p>Escribe <em>aquí</em> tu <u>texto</u> <strong>personalizado</strong></p>\r\n                                          <p>Puedes añadir estilos de letra, imágenes y otras opciones fácilmente</p>', 23, 0, 1, '2021-02-19 13:04:30', '2021-02-19 13:04:30'),
(23, 'asdfasdf', '<p>Escribe <em>aquí</em> tu <u>texto</u> <strong>personalizado</strong></p>\r\n                                          <p>Puedes añadir estilos de letra, imágenes y otras opciones fácilmente</p>', 23, 0, 1, '2021-02-19 13:04:48', '2021-02-19 13:04:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_a_categoria`
--

CREATE TABLE `producto_a_categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_reserva`
--

CREATE TABLE `producto_reserva` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unidad` double NOT NULL,
  `reserva_id` int(10) UNSIGNED NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_reserva`
--

INSERT INTO `producto_reserva` (`id`, `cantidad`, `precio_unidad`, `reserva_id`, `producto_id`, `created_at`, `updated_at`) VALUES
(4, 1, 45, 3, 3, '2021-02-16 13:56:05', '2021-02-16 13:56:05'),
(9, 1, 45, 6, 3, '2021-02-16 15:51:26', '2021-02-16 15:51:26'),
(10, 1, 5, 7, 21, '2021-02-19 03:07:00', '2021-02-19 03:07:00'),
(11, 1, 45, 8, 3, '2021-02-19 03:07:00', '2021-02-19 03:07:00'),
(12, 1, 5, 9, 21, '2021-02-19 05:02:57', '2021-02-19 05:02:57'),
(13, 1, 12, 10, 20, '2021-02-19 05:17:07', '2021-02-19 05:17:07'),
(14, 1, 5, 10, 21, '2021-02-19 05:17:07', '2021-02-19 05:17:07'),
(15, 1, 1, 11, 5, '2021-02-19 05:17:07', '2021-02-19 05:17:07'),
(16, 1, 1, 12, 19, '2021-02-19 13:03:02', '2021-02-19 13:03:02'),
(17, 1, 12, 12, 20, '2021-02-19 13:03:02', '2021-02-19 13:03:02'),
(18, 1, 1, 13, 5, '2021-02-19 13:03:02', '2021-02-19 13:03:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(10) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acepta_user` tinyint(1) NOT NULL,
  `acepta_seller` tinyint(1) NOT NULL,
  `fecha_confirmacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `tienda_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `estado`, `acepta_user`, `acepta_seller`, `fecha_confirmacion`, `usuario_id`, `tienda_id`, `created_at`, `updated_at`) VALUES
(1, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-16 09:45:55', '2021-02-16 09:45:55'),
(2, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-16 13:56:05', '2021-02-16 13:56:05'),
(3, 'PENDIENTE', 0, 0, NULL, 2, 2, '2021-02-16 13:56:05', '2021-02-16 13:56:05'),
(4, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-16 14:08:34', '2021-02-16 14:08:34'),
(5, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-16 15:51:26', '2021-02-16 15:51:26'),
(6, 'PENDIENTE', 0, 0, NULL, 2, 2, '2021-02-16 15:51:26', '2021-02-16 15:51:26'),
(7, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-19 03:07:00', '2021-02-19 03:07:00'),
(8, 'PENDIENTE', 0, 0, NULL, 2, 2, '2021-02-19 03:07:00', '2021-02-19 03:07:00'),
(9, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-19 05:02:57', '2021-02-19 05:02:57'),
(10, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-19 05:17:07', '2021-02-19 05:17:07'),
(11, 'PENDIENTE', 0, 0, NULL, 2, 2, '2021-02-19 05:17:07', '2021-02-19 05:17:07'),
(12, 'PENDIENTE', 0, 0, NULL, 2, 1, '2021-02-19 13:03:02', '2021-02-19 13:03:02'),
(13, 'PENDIENTE', 0, 0, NULL, 2, 2, '2021-02-19 13:03:02', '2021-02-19 13:03:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguido`
--

CREATE TABLE `seguido` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_sigue` int(10) UNSIGNED NOT NULL,
  `user_seguido` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `seguido`
--

INSERT INTO `seguido` (`id`, `user_sigue`, `user_seguido`, `created_at`, `updated_at`) VALUES
(11, 6, 2, '2021-02-17 21:19:10', '2021-02-17 21:19:10'),
(12, 6, 3, '2021-02-17 21:19:27', '2021-02-17 21:19:27'),
(18, 3, 6, '2021-02-17 23:21:56', '2021-02-17 23:21:56'),
(20, 2, 3, '2021-02-18 08:02:41', '2021-02-18 08:02:41'),
(21, 2, 4, '2021-02-18 08:02:48', '2021-02-18 08:02:48'),
(22, 2, 6, '2021-02-19 04:43:55', '2021-02-19 04:43:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `nombre_comercial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razon_social` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mayorista` tinyint(1) NOT NULL,
  `codigo_postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aprobado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `usuario_id`, `nombre_comercial`, `razon_social`, `direccion`, `localidad`, `ciudad`, `mayorista`, `codigo_postal`, `telefono`, `aprobado`, `created_at`, `updated_at`) VALUES
(1, 3, 'Papelería Iris', 'Vendedor', 'Mi direccion de empresa', 'Elche', 'alicante', 0, '03453', '654897654', 0, '2021-02-16 09:24:53', '2021-02-17 14:08:56'),
(2, 4, 'Horno Sanz', 'Empresa 1', 'Jose más esteve 76', 'Elche', 'alicante', 0, '03204', '659878451', 0, '2021-02-16 13:54:07', '2021-02-17 14:12:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda_a_categoria`
--

CREATE TABLE `tienda_a_categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tienda` int(10) UNSIGNED NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ladrillo`
--

CREATE TABLE `tipo_ladrillo` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobre_mi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ultimo_acceso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `alias`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `ciudad`, `pais`, `sobre_mi`, `ultimo_acceso`, `type_id`, `created_at`, `updated_at`) VALUES
(2, 'comprador', 'comprador@localhost.com', NULL, '$2y$10$//UKcHlwUeUz6Ub0GKYaBOPrPn8fJ3QtfwNrNqLxCxlMWiV3jZauu', '', '1613576380132.jpg', 'Alicante', 'España', 'Me gusta comprar cosas, muchas cosas', '', 1, '2021-02-16 09:23:44', '2021-02-17 14:39:40'),
(3, 'Papelería Librería Iris', 'vendedor@localhost.com', NULL, '$2y$10$j4xQ10QC79ejg3YmVgERJ.hNLpeihk9tScK4UH1PH0CjOma4p0Y/S', '', '1613570347166.jpg', 'Alicante', 'España', 'Libros de texto, novelas, materíal de oficina y papelería', '', 2, '2021-02-16 09:24:30', '2021-02-17 12:59:07'),
(4, 'Panadería Sanz', 'otrovendedor@localhost.com', NULL, '$2y$10$7VeoNdWQzMTf6.j31QoAje8V2dsxv69Tj8uehQJeaYgeJs1AZPw1m', '', '1613574732193.jpg', 'Alicante', 'España', 'Horno artesanal', '', 2, '2021-02-16 13:53:29', '2021-02-17 14:12:12'),
(5, 'ramon', 'ramonlopez24@gmail.com', NULL, '$2y$10$3ufdfvWGt6F2N/AMmOJ2Ueoc8x4d4TSafkMqzG4pg7tgo8eV201WC', '', '', '', '', '', '', 3, '2021-02-17 04:43:27', '2021-02-17 04:43:27'),
(6, 'mauricio', 'mauricio@localhost.com', NULL, '$2y$10$5QK3ImOL6R2xrNzEpyItH.fLGsSSwwtAjPUtnUsLR/pqCRfXlewkm', '', '1613579231135.jpg', 'Sin definir', 'Sin definir', 'Algo sobre mi', '', 1, '2021-02-17 15:01:49', '2021-02-17 15:27:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_direccion`
--

CREATE TABLE `user_direccion` (
  `id` int(10) UNSIGNED NOT NULL,
  `por_defecto` tinyint(1) NOT NULL,
  `amigable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_recibe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_recibe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calle_avenida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni_cif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_direccion`
--

INSERT INTO `user_direccion` (`id`, `por_defecto`, `amigable`, `nombre_recibe`, `apellido_recibe`, `calle_avenida`, `numero`, `telefono`, `localidad`, `codigo_postal`, `dni_cif`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'Mi casa', 'ramon', 'lopez muñoz', 'jose mas esteve', 'número 76, 2º derecha', '68451235465', 'Elche', '03453', '74237790T', 2, '2021-02-16 09:24:10', '2021-02-16 09:24:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_type`
--

CREATE TABLE `user_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Comprador', NULL, NULL),
(2, 'Vendedor', NULL, NULL),
(3, 'Administrador', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_a_categoria`
--

CREATE TABLE `usuario_a_categoria` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_a_tienda`
--

CREATE TABLE `usuario_a_tienda` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `tienda_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion_user`
--

CREATE TABLE `valoracion_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_recibe_id` int(10) UNSIGNED NOT NULL,
  `usuario_envia_id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valora_product`
--

CREATE TABLE `valora_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `producto_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valora_reserva`
--

CREATE TABLE `valora_reserva` (
  `id` int(10) UNSIGNED NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `reserva_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_padre_foreign` (`padre`);

--
-- Indices de la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cesta_usuario_id_foreign` (`usuario_id`),
  ADD KEY `cesta_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `config_pago`
--
ALTER TABLE `config_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `config_pago_tienda_id_foreign` (`tienda_id`);

--
-- Indices de la tabla `config_pago_contrareembolso`
--
ALTER TABLE `config_pago_contrareembolso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `config_pago_contrareembolso_config_pago_id_foreign` (`config_pago_id`);

--
-- Indices de la tabla `config_pago_recogida_en_tienda`
--
ALTER TABLE `config_pago_recogida_en_tienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `config_pago_recogida_en_tienda_config_pago_id_foreign` (`config_pago_id`);

--
-- Indices de la tabla `config_pago_transferencia`
--
ALTER TABLE `config_pago_transferencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `config_pago_transferencia_config_pago_id_foreign` (`config_pago_id`);

--
-- Indices de la tabla `config_product`
--
ALTER TABLE `config_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `config_product_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `conf_privacidad`
--
ALTER TABLE `conf_privacidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conf_privacidad_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorito_product_id_foreign` (`product_id`),
  ADD KEY `favorito_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `imagen_product`
--
ALTER TABLE `imagen_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagen_product_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `ladrillo`
--
ALTER TABLE `ladrillo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ladrillo_usuario_id_foreign` (`usuario_id`),
  ADD KEY `ladrillo_tipo_foreign` (`tipo`);

--
-- Indices de la tabla `mensaje_reserva`
--
ALTER TABLE `mensaje_reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensaje_reserva_usuario_id_foreign` (`usuario_id`),
  ADD KEY `mensaje_reserva_reserva_id_foreign` (`reserva_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notifica_tipo`
--
ALTER TABLE `notifica_tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notifica_user`
--
ALTER TABLE `notifica_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifica_user_tipo_notificacion_foreign` (`tipo_notificacion`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_tienda_id_foreign` (`tienda_id`);

--
-- Indices de la tabla `producto_a_categoria`
--
ALTER TABLE `producto_a_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_a_categoria_producto_id_foreign` (`producto_id`),
  ADD KEY `producto_a_categoria_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `producto_reserva`
--
ALTER TABLE `producto_reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_reserva_reserva_id_foreign` (`reserva_id`),
  ADD KEY `producto_reserva_producto_id_foreign` (`producto_id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publicacion_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserva_usuario_id_foreign` (`usuario_id`),
  ADD KEY `reserva_tienda_id_foreign` (`tienda_id`);

--
-- Indices de la tabla `seguido`
--
ALTER TABLE `seguido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seguido_user_sigue_foreign` (`user_sigue`),
  ADD KEY `seguido_user_seguido_foreign` (`user_seguido`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tienda_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `tienda_a_categoria`
--
ALTER TABLE `tienda_a_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tienda_a_categoria_id_tienda_foreign` (`id_tienda`),
  ADD KEY `tienda_a_categoria_id_categoria_foreign` (`id_categoria`);

--
-- Indices de la tabla `tipo_ladrillo`
--
ALTER TABLE `tipo_ladrillo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_type_id_foreign` (`type_id`);

--
-- Indices de la tabla `user_direccion`
--
ALTER TABLE `user_direccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_direccion_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_a_categoria`
--
ALTER TABLE `usuario_a_categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_a_categoria_usuario_id_foreign` (`usuario_id`),
  ADD KEY `usuario_a_categoria_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `usuario_a_tienda`
--
ALTER TABLE `usuario_a_tienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_a_tienda_usuario_id_foreign` (`usuario_id`),
  ADD KEY `usuario_a_tienda_tienda_id_foreign` (`tienda_id`);

--
-- Indices de la tabla `valoracion_user`
--
ALTER TABLE `valoracion_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valoracion_user_usuario_recibe_id_foreign` (`usuario_recibe_id`),
  ADD KEY `valoracion_user_usuario_envia_id_foreign` (`usuario_envia_id`);

--
-- Indices de la tabla `valora_product`
--
ALTER TABLE `valora_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valora_product_producto_id_foreign` (`producto_id`),
  ADD KEY `valora_product_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `valora_reserva`
--
ALTER TABLE `valora_reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valora_reserva_usuario_id_foreign` (`usuario_id`),
  ADD KEY `valora_reserva_reserva_id_foreign` (`reserva_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cesta`
--
ALTER TABLE `cesta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `config_pago`
--
ALTER TABLE `config_pago`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `config_pago_contrareembolso`
--
ALTER TABLE `config_pago_contrareembolso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `config_pago_recogida_en_tienda`
--
ALTER TABLE `config_pago_recogida_en_tienda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `config_pago_transferencia`
--
ALTER TABLE `config_pago_transferencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `config_product`
--
ALTER TABLE `config_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `conf_privacidad`
--
ALTER TABLE `conf_privacidad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favorito`
--
ALTER TABLE `favorito`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `imagen_product`
--
ALTER TABLE `imagen_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ladrillo`
--
ALTER TABLE `ladrillo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje_reserva`
--
ALTER TABLE `mensaje_reserva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `notifica_tipo`
--
ALTER TABLE `notifica_tipo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notifica_user`
--
ALTER TABLE `notifica_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `producto_a_categoria`
--
ALTER TABLE `producto_a_categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto_reserva`
--
ALTER TABLE `producto_reserva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `seguido`
--
ALTER TABLE `seguido`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tienda_a_categoria`
--
ALTER TABLE `tienda_a_categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_ladrillo`
--
ALTER TABLE `tipo_ladrillo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user_direccion`
--
ALTER TABLE `user_direccion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario_a_categoria`
--
ALTER TABLE `usuario_a_categoria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_a_tienda`
--
ALTER TABLE `usuario_a_tienda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valoracion_user`
--
ALTER TABLE `valoracion_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valora_product`
--
ALTER TABLE `valora_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `valora_reserva`
--
ALTER TABLE `valora_reserva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_padre_foreign` FOREIGN KEY (`padre`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cesta`
--
ALTER TABLE `cesta`
  ADD CONSTRAINT `cesta_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cesta_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_pago`
--
ALTER TABLE `config_pago`
  ADD CONSTRAINT `config_pago_tienda_id_foreign` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_pago_contrareembolso`
--
ALTER TABLE `config_pago_contrareembolso`
  ADD CONSTRAINT `config_pago_contrareembolso_config_pago_id_foreign` FOREIGN KEY (`config_pago_id`) REFERENCES `config_pago` (`tienda_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_pago_recogida_en_tienda`
--
ALTER TABLE `config_pago_recogida_en_tienda`
  ADD CONSTRAINT `config_pago_recogida_en_tienda_config_pago_id_foreign` FOREIGN KEY (`config_pago_id`) REFERENCES `config_pago` (`tienda_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_pago_transferencia`
--
ALTER TABLE `config_pago_transferencia`
  ADD CONSTRAINT `config_pago_transferencia_config_pago_id_foreign` FOREIGN KEY (`config_pago_id`) REFERENCES `config_pago` (`tienda_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `config_product`
--
ALTER TABLE `config_product`
  ADD CONSTRAINT `config_product_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `conf_privacidad`
--
ALTER TABLE `conf_privacidad`
  ADD CONSTRAINT `conf_privacidad_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `favorito_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorito_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagen_product`
--
ALTER TABLE `imagen_product`
  ADD CONSTRAINT `imagen_product_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ladrillo`
--
ALTER TABLE `ladrillo`
  ADD CONSTRAINT `ladrillo_tipo_foreign` FOREIGN KEY (`tipo`) REFERENCES `tipo_ladrillo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ladrillo_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensaje_reserva`
--
ALTER TABLE `mensaje_reserva`
  ADD CONSTRAINT `mensaje_reserva_reserva_id_foreign` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mensaje_reserva_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notifica_user`
--
ALTER TABLE `notifica_user`
  ADD CONSTRAINT `notifica_user_tipo_notificacion_foreign` FOREIGN KEY (`tipo_notificacion`) REFERENCES `notifica_tipo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_tienda_id_foreign` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_a_categoria`
--
ALTER TABLE `producto_a_categoria`
  ADD CONSTRAINT `producto_a_categoria_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_a_categoria_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto_reserva`
--
ALTER TABLE `producto_reserva`
  ADD CONSTRAINT `producto_reserva_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_reserva_reserva_id_foreign` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_tienda_id_foreign` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seguido`
--
ALTER TABLE `seguido`
  ADD CONSTRAINT `seguido_user_seguido_foreign` FOREIGN KEY (`user_seguido`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seguido_user_sigue_foreign` FOREIGN KEY (`user_sigue`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `tienda_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tienda_a_categoria`
--
ALTER TABLE `tienda_a_categoria`
  ADD CONSTRAINT `tienda_a_categoria_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tienda_a_categoria_id_tienda_foreign` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `user_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `user_direccion`
--
ALTER TABLE `user_direccion`
  ADD CONSTRAINT `user_direccion_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_a_categoria`
--
ALTER TABLE `usuario_a_categoria`
  ADD CONSTRAINT `usuario_a_categoria_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_a_categoria_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_a_tienda`
--
ALTER TABLE `usuario_a_tienda`
  ADD CONSTRAINT `usuario_a_tienda_tienda_id_foreign` FOREIGN KEY (`tienda_id`) REFERENCES `tienda` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_a_tienda_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valoracion_user`
--
ALTER TABLE `valoracion_user`
  ADD CONSTRAINT `valoracion_user_usuario_envia_id_foreign` FOREIGN KEY (`usuario_envia_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valoracion_user_usuario_recibe_id_foreign` FOREIGN KEY (`usuario_recibe_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valora_product`
--
ALTER TABLE `valora_product`
  ADD CONSTRAINT `valora_product_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valora_product_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `valora_reserva`
--
ALTER TABLE `valora_reserva`
  ADD CONSTRAINT `valora_reserva_reserva_id_foreign` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `valora_reserva_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
