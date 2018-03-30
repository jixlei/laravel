-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        10.1.26-MariaDB - mariadb.org binary distribution
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 laravel.abouts 结构
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `abouts_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.abouts 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `title`, `image`, `summary`, `content`, `type`, `created_at`, `updated_at`) VALUES
	(1, '关于我们', 'images/20180328/1522226684989090.jpeg', '110个字的描述 关于我们字字字字字字字字字字的摘要信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们', '<p>110个字的描述 关于我们字字字字字字字字字字的摘要信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们</p><p><br/></p>', 0, '2018-03-28 08:44:44', '2018-03-28 08:45:04'),
	(2, '位置', 'images/20180330/152242629433.jpeg', '信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们', '<p>&nbsp;<iframe width="400" height="200" src="http://local.laravel.app/vendor/ueditor/dialogs/map/show.html#center=116.53037,40.011106&zoom=11&width=530&height=340&markers=116.420561,40.063871&markerStyles=l,A" frameborder="0"></iframe></p>', 1, '2018-03-30 16:10:11', '2018-03-30 16:14:06'),
	(3, '为什么选择我们', 'images/20180330/152242627232.jpeg', '信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们', '<p>&nbsp;信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们</p>', 2, '2018-03-30 16:11:12', '2018-03-30 16:11:12'),
	(4, '我们的团队', 'images/20180330/152242633023.jpeg', '信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们', '<p>&nbsp;信息关于我们的摘要关于我们的摘要信息关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于我们的摘要信息。。关于于我们的摘要信息。。。关于我们</p>', 3, '2018-03-30 16:12:10', '2018-03-30 16:12:10');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- 导出  表 laravel.admin_config 结构
CREATE TABLE IF NOT EXISTS `admin_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_config_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_config 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_config` DISABLE KEYS */;
INSERT INTO `admin_config` (`id`, `name`, `value`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'test', 'test', 'test', '2018-03-05 06:13:00', '2018-03-05 06:13:00');
/*!40000 ALTER TABLE `admin_config` ENABLE KEYS */;

-- 导出  表 laravel.admin_menu 结构
CREATE TABLE IF NOT EXISTS `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_menu 的数据：~16 rows (大约)
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `created_at`, `updated_at`) VALUES
	(1, 0, 1, '仪表盘', 'fa-dashboard', '/', NULL, '2018-03-30 15:17:49'),
	(2, 0, 11, '管理员', 'fa-tasks', NULL, NULL, '2018-03-30 15:33:35'),
	(3, 2, 12, '用户', 'fa-users', 'auth/users', NULL, '2018-03-30 15:33:50'),
	(4, 2, 13, '角色', 'fa-user', 'auth/roles', NULL, '2018-03-30 15:34:04'),
	(5, 2, 14, '权限', 'fa-ban', 'auth/permissions', NULL, '2018-03-30 15:34:18'),
	(6, 2, 15, '菜单', 'fa-bars', 'auth/menu', NULL, '2018-03-30 15:34:42'),
	(7, 2, 16, '操作记录', 'fa-history', 'auth/logs', NULL, '2018-03-30 15:35:16'),
	(8, 0, 9, '文件管理', 'fa-file', 'media', '2018-03-05 05:37:28', '2018-03-30 15:32:19'),
	(9, 0, 8, '配置', 'fa-toggle-on', 'config', '2018-03-05 06:11:25', '2018-03-30 15:31:51'),
	(10, 0, 10, '定时任务', 'fa-clock-o', 'scheduling', '2018-03-05 06:13:59', '2018-03-30 15:32:47'),
	(11, 0, 2, '产品', 'fa-product-hunt', 'product', '2018-03-12 08:45:03', '2018-03-30 15:18:50'),
	(12, 0, 3, '关于我们', 'fa-info-circle', 'about', '2018-03-12 08:50:34', '2018-03-30 15:25:30'),
	(13, 0, 4, '联系我们', 'fa-mobile-phone', 'contact', '2018-03-12 08:51:21', '2018-03-30 15:35:59'),
	(14, 0, 5, '消息', 'fa-commenting-o', 'message', '2018-03-12 08:51:58', '2018-03-30 15:26:36'),
	(15, 0, 6, '我们的服务', 'fa-balance-scale', 'service', '2018-03-12 08:53:16', '2018-03-30 15:26:55'),
	(16, 0, 7, '我们的工作', 'fa-desktop', 'work', '2018-03-28 07:08:19', '2018-03-30 15:27:45');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;

-- 导出  表 laravel.admin_operation_log 结构
CREATE TABLE IF NOT EXISTS `admin_operation_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_operation_log_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_operation_log 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_operation_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_operation_log` ENABLE KEYS */;

-- 导出  表 laravel.admin_permissions 结构
CREATE TABLE IF NOT EXISTS `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_permissions 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
	(1, 'All permission', '*', '', '*', NULL, NULL),
	(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
	(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
	(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
	(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL),
	(6, 'Media manager', 'ext.media-manager', NULL, '/media*', '2018-03-05 05:37:28', '2018-03-05 05:37:28'),
	(7, 'Admin Config', 'ext.config', NULL, '/config*', '2018-03-05 06:11:25', '2018-03-05 06:11:25'),
	(8, 'Scheduling', 'ext.scheduling', NULL, '/scheduling*', '2018-03-05 06:13:59', '2018-03-05 06:13:59');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;

-- 导出  表 laravel.admin_roles 结构
CREATE TABLE IF NOT EXISTS `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_roles 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'administrator', '2018-03-05 05:16:51', '2018-03-05 05:16:51');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;

-- 导出  表 laravel.admin_role_menu 结构
CREATE TABLE IF NOT EXISTS `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_role_menu 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
	(1, 2, NULL, NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;

-- 导出  表 laravel.admin_role_permissions 结构
CREATE TABLE IF NOT EXISTS `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_role_permissions 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;

-- 导出  表 laravel.admin_role_users 结构
CREATE TABLE IF NOT EXISTS `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_role_users 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 1, NULL, NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;

-- 导出  表 laravel.admin_users 结构
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_users 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '$2y$10$TSDwyn8Tit1ceWGjXWQO0.znFqZmEUEcIS5LP1cKbXi7FPWtatj.y', 'Administrator', NULL, NULL, '2018-03-05 05:16:51', '2018-03-05 05:16:51');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;

-- 导出  表 laravel.admin_user_permissions 结构
CREATE TABLE IF NOT EXISTS `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.admin_user_permissions 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;

-- 导出  表 laravel.contacts 结构
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qq` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `isbottom` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacts_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.contacts 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `title`, `address`, `email`, `qq`, `phone`, `content`, `isbottom`, `created_at`, `updated_at`) VALUES
	(1, '联系我们', '阿斯到发送到法撒旦法撒旦法大街的哪个地方', 'a11111111@163.com', '55252525254', '18545255555', '<p>啊所发生的发</p>', 1, '2018-03-28 08:53:36', '2018-03-28 09:06:49'),
	(2, '位置', NULL, NULL, NULL, NULL, '<p>&nbsp;<iframe width="300" height="175" src="http://local.laravel.app/vendor/ueditor/dialogs/map/show.html#center=116.44787,40.018023&zoom=13&width=530&height=340&markers=116.410212,40.036256&markerStyles=l,A" frameborder="0"></iframe></p>', 0, '2018-03-29 13:50:03', '2018-03-29 14:21:20');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- 导出  表 laravel.messages 结构
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `messages_mobile_unique` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.messages 的数据：~4 rows (大约)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` (`id`, `name`, `email`, `mobile`, `content`, `created_at`, `updated_at`) VALUES
	(1, '111', '333', '2222', '444', '2018-03-29 15:17:07', '2018-03-29 15:17:07'),
	(3, '2333', '333', '33', '333', '2018-03-29 15:19:26', '2018-03-29 15:19:26'),
	(4, 'asdfas', 'saf', 'safdas', 'asfda', '2018-03-29 15:20:46', '2018-03-29 15:20:46'),
	(5, 'asdf', 'sdfs', 'asd', 'dd', '2018-03-29 15:22:05', '2018-03-29 15:22:05'),
	(6, '1111', '22', '112', '222', '2018-03-29 15:23:19', '2018-03-29 15:23:19');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- 导出  表 laravel.migrations 结构
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.migrations 的数据：~10 rows (大约)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2016_01_04_173148_create_admin_tables', 1),
	(4, '2017_07_17_040159_create_config_table', 2),
	(6, '2018_03_12_082334_create_abouts_table', 4),
	(7, '2018_03_12_082650_create_services_table', 4),
	(8, '2018_03_12_082738_create_contacts_table', 4),
	(9, '2018_03_12_082937_create_messages_table', 4),
	(11, '2018_03_07_135401_create_products_table', 5),
	(12, '2018_03_28_070026_create_works_table', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- 导出  表 laravel.password_resets 结构
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.password_resets 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- 导出  表 laravel.products 结构
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `focusimg` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `isfocus` tinyint(4) NOT NULL DEFAULT '0',
  `ishot` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.products 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `image`, `focusimg`, `summary`, `content`, `isfocus`, `ishot`, `created_at`, `updated_at`) VALUES
	(1, '主动刹车安全防御系统功能强大 试驾体验2017款天籁', 'images/20180328/1522223977733211.jpeg', 'images/20180328/1522214955223696.jpeg', '撒大声地发撒的发生', '<p>阿斯顿发送到发送到</p>', 1, 1, '2018-03-27 11:16:51', '2018-03-28 07:59:37'),
	(2, '或将年内上市  众泰T300 EV内饰曝光', 'images/20180328/1522224011264646.jpeg', 'images/20180328/1522224011561567.jpeg', 'sdfsfdasdfasdfs是的发生的发送', '<p>阿斯顿发顺丰撒大大</p>', 1, 1, '2018-03-28 05:29:41', '2018-03-28 08:00:11'),
	(3, '北汽威旺M60车内空气质量评分为84分', 'images/20180328/1522224024200004.jpeg', 'images/20180328/1522215014447404.jpeg', '阿萨德发的发是', '<p>阿斯顿发送到<br/></p>', 1, 1, '2018-03-28 05:30:14', '2018-03-28 08:00:24'),
	(4, '宝骏560底盘减震器异响', 'images/20180328/1522224035841236.jpeg', 'images/20180328/1522224053458526.jpeg', '看了设计发生的发生', '<p>连接上大法师打</p>', 1, 1, '2018-03-28 05:32:43', '2018-03-28 08:00:58'),
	(5, '或将年内上市  众泰T300 EV内饰曝光1', 'images/20180328/1522224180824698.jpeg', 'images/20180328/1522224180992590.jpeg', 'sdasdasdasdadfa', '<p>asdfasdasd</p>', 0, 1, '2018-03-28 08:03:00', '2018-03-28 08:03:00'),
	(6, '英国名校更看重申请者哪些信息？', 'images/20180328/1522224286933603.jpeg', 'images/20180328/1522224286892522.jpeg', 'sdasfsdasdfas', '<p>sdfsdfsdf</p>', 0, 1, '2018-03-28 08:04:46', '2018-03-28 08:04:46'),
	(7, '按时发斯蒂芬', 'images/20180328/1522225555620283.jpeg', 'images/20180328/1522225555579580.jpeg', '司法所诞生', '<p>阿斯顿发斯蒂芬</p>', 0, 1, '2018-03-28 08:25:55', '2018-03-28 08:25:55'),
	(8, '主动刹车安全防御系统功能强大', 'images/20180328/1522225588240902.jpeg', 'images/20180328/1522225588299875.jpeg', '大发生的发生', '<p>阿斯顿发送到发送到</p>', 0, 1, '2018-03-28 08:26:28', '2018-03-28 08:26:28');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- 导出  表 laravel.services 结构
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.services 的数据：~6 rows (大约)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `image`, `summary`, `content`, `created_at`, `updated_at`) VALUES
	(1, 'aaa', 'images/20180329/152233029713.jpeg', 'sfasdfasd暗示法撒旦法师发大水发生', '<p>&nbsp;sfasdfasd暗示法撒旦法师发大水发生</p>', '2018-03-29 13:31:37', '2018-03-29 13:31:37'),
	(2, '巴巴爸爸', 'images/20180329/152233033532.jpeg', '的点点滴滴', '<p>&nbsp;的点点滴滴</p>', '2018-03-29 13:32:15', '2018-03-29 13:32:15'),
	(3, '大大大丰富', 'images/20180329/152233035721.jpeg', '爱仕达大多撒', '<p>&nbsp;奥术大师大所多</p>', '2018-03-29 13:32:37', '2018-03-29 13:32:37'),
	(4, '大声道', 'images/20180329/152233037523.jpeg', '阿是大师大师的', '<p>&nbsp;阿斯达四大</p>', '2018-03-29 13:32:55', '2018-03-29 13:32:55'),
	(5, '沙发打发', 'images/20180329/152233042523.jpeg', '沙发斯蒂芬', '<p>&nbsp;啊沙发沙发的斯蒂芬</p>', '2018-03-29 13:33:45', '2018-03-29 13:33:45'),
	(6, '法发顺丰的速度', 'images/20180329/152233044731.jpeg', '是的发送到发送到', '<p>&nbsp;阿萨德法师法师打发</p>', '2018-03-29 13:34:07', '2018-03-29 13:34:07');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- 导出  表 laravel.users 结构
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.users 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, '姬晓雷', 'jixiaolei_a@163.com', '$2y$10$DL3wbpFTOPN7XVK6aUkL6.ruhXvmc7B5Ob5Og6Lf1qqssfbIacxG.', 'lv7OvYEKbbXv0tm1B9i6fBFnHxkM6cgMUrssEZ8PVBxbOyoDt8cfEz6eFM9I', '2018-03-05 09:09:53', '2018-03-05 09:09:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- 导出  表 laravel.works 结构
CREATE TABLE IF NOT EXISTS `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `works_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 正在导出表  laravel.works 的数据：~8 rows (大约)
/*!40000 ALTER TABLE `works` DISABLE KEYS */;
INSERT INTO `works` (`id`, `title`, `icon`, `image`, `summary`, `content`, `type`, `created_at`, `updated_at`) VALUES
	(1, '做吃饭', 'images/20180328/1522221568810472.png', 'images/20180328/1522221568707041.png', '做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。', '<p>做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。</p>', 0, '2018-03-28 07:19:28', '2018-03-28 07:30:04'),
	(2, '去睡觉', 'images/20180328/1522222250406125.png', 'images/20180328/1522222250387807.png', '做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。', '<p>做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。</p><p><br/></p>', 0, '2018-03-28 07:30:50', '2018-03-28 07:30:50'),
	(3, '约跑步', 'images/20180328/1522222279731920.png', 'images/20180328/1522222279625982.png', '做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。', '<p>做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。</p><p><br/></p>', 0, '2018-03-28 07:31:19', '2018-03-28 07:31:19'),
	(4, '打豆豆', 'images/20180328/1522222309719855.png', 'images/20180328/1522222309398112.png', '做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。', '<p>做什么的描述啊，好长的文字啊，还需要写，这尼玛啊，写什么呢，还没有完啊，完了吧，差不多了。</p><p><br/></p>', 0, '2018-03-28 07:31:49', '2018-03-28 07:31:49'),
	(5, '打麻将', 'images/20180328/1522222409422920.jpeg', 'images/20180328/1522222409768808.jpeg', '打麻将真的很爽啊，可惜没赢钱！可惜啊。', '<p>打麻将真的很爽啊，可惜没赢钱！可惜啊。</p><p><br/></p>', 1, '2018-03-28 07:33:29', '2018-03-28 07:33:29'),
	(6, '跑步啊', 'images/20180328/1522222442990822.jpeg', 'images/20180328/1522222442824648.jpeg', '一身肌肉有啥用啊，还不耐饿啊。', '<p>一身肌肉有啥用啊，还不耐饿啊。</p><p><br/></p>', 1, '2018-03-28 07:34:02', '2018-03-28 07:34:02'),
	(7, '游泳啊', 'images/20180328/1522222497538494.jpeg', 'images/20180328/1522222497560405.jpeg', '游泳健将游泳健将游泳健将游泳健将游泳健将游泳健将游泳健将', '<p>游泳健将游泳健将游泳健将游泳健将游泳健将游泳健将游泳健将</p>', 1, '2018-03-28 07:34:57', '2018-03-28 07:34:57'),
	(8, '登上去', 'images/20180328/1522222553376887.jpeg', 'images/20180328/1522222553652605.jpeg', '山高则灵，水深有龙', '<p>山高则灵，水深有龙山高则灵，水深有龙山高则灵，水深有龙山高则灵，水深有龙山高则灵，水深有龙山高则灵，水深有龙山高则灵，水深有龙</p>', 1, '2018-03-28 07:35:53', '2018-03-28 07:35:53');
/*!40000 ALTER TABLE `works` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
