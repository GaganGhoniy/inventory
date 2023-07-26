/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `barangs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `kategoris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `keluars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_transaksi_keluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_akhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `masuks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_supliyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stok_awal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `merks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `merk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `supliyers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `barangs` (`id`, `id_kategori`, `id_merk`, `kode_barang`, `nama_barang`, `stok`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'BR01', 'Buku SIDU', '9', '2023-06-05 11:35:31', '2023-06-08 09:11:04');
INSERT INTO `barangs` (`id`, `id_kategori`, `id_merk`, `kode_barang`, `nama_barang`, `stok`, `created_at`, `updated_at`) VALUES
(2, '2', '2', 'BR02', 'Majalah Anak-Anak', '8', '2023-06-08 12:04:24', '2023-06-08 12:05:28');




INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Buku', '2023-06-04 17:08:04', '2023-06-04 17:08:04');
INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(2, 'Majalah', '2023-06-04 17:22:29', '2023-06-04 17:22:29');


INSERT INTO `keluars` (`id`, `id_transaksi_keluar`, `id_masuk`, `id_customer`, `total_item`, `id_barang`, `harga`, `total_harga`, `stok_akhir`, `pj`, `created_at`, `updated_at`, `status`) VALUES
(1, 'KLR00001', '1', 'Aji Bramasta', '5', '1', '1000', '5000', '15', 'jeffridianasmoro@gmail.com', '2023-06-08 09:10:56', '2023-06-16 07:17:06', 1);
INSERT INTO `keluars` (`id`, `id_transaksi_keluar`, `id_masuk`, `id_customer`, `total_item`, `id_barang`, `harga`, `total_harga`, `stok_akhir`, `pj`, `created_at`, `updated_at`, `status`) VALUES
(2, 'KLR00002', '1', 'Aji Bramasta', '15', '1', '1000', '15000', '0', 'jeffridianasmoro@gmail.com', '2023-06-08 09:11:04', '2023-06-16 07:17:10', 1);
INSERT INTO `keluars` (`id`, `id_transaksi_keluar`, `id_masuk`, `id_customer`, `total_item`, `id_barang`, `harga`, `total_harga`, `stok_akhir`, `pj`, `created_at`, `updated_at`, `status`) VALUES
(3, 'KLR00003', '2', 'Aji Bramasta', '1', '1', '1200', '1200', '4', 'jeffridianasmoro@gmail.com', '2023-06-08 09:11:04', '2023-06-16 07:17:14', 1);
INSERT INTO `keluars` (`id`, `id_transaksi_keluar`, `id_masuk`, `id_customer`, `total_item`, `id_barang`, `harga`, `total_harga`, `stok_akhir`, `pj`, `created_at`, `updated_at`, `status`) VALUES
(4, 'KLR00004', '4', 'Aji Bramasta', '7', '2', '2200', '15400', '3', 'jeffridianasmoro@gmail.com', '2023-06-08 12:05:28', '2023-06-16 07:17:19', 1);

INSERT INTO `masuks` (`id`, `id_transaksi`, `id_supliyer`, `total_item`, `id_barang`, `harga`, `total_harga`, `pj`, `created_at`, `updated_at`, `stok_awal`) VALUES
(1, 'TR00001', '1', '20', '1', '1000', '20000', 'Jeffri Dian Asmoro', '2023-06-05 12:22:44', '2023-06-05 12:22:44', '0');
INSERT INTO `masuks` (`id`, `id_transaksi`, `id_supliyer`, `total_item`, `id_barang`, `harga`, `total_harga`, `pj`, `created_at`, `updated_at`, `stok_awal`) VALUES
(2, 'TR00002', '1', '5', '1', '1200', '6000', 'Jeffri Dian Asmoro', '2023-06-05 12:38:33', '2023-06-05 12:38:33', '20');
INSERT INTO `masuks` (`id`, `id_transaksi`, `id_supliyer`, `total_item`, `id_barang`, `harga`, `total_harga`, `pj`, `created_at`, `updated_at`, `stok_awal`) VALUES
(3, 'TR00003', '1', '5', '1', '1500', '7500', 'Jeffri Dian Asmoro', '2023-06-07 19:09:29', '2023-06-07 19:09:29', '25');
INSERT INTO `masuks` (`id`, `id_transaksi`, `id_supliyer`, `total_item`, `id_barang`, `harga`, `total_harga`, `pj`, `created_at`, `updated_at`, `stok_awal`) VALUES
(4, 'TR00004', '1', '10', '2', '2200', '22000', 'Jeffri Dian Asmoro', '2023-06-08 12:04:58', '2023-06-08 12:04:58', '0'),
(5, 'TR00005', '1', '5', '2', '3000', '15000', 'Jeffri Dian Asmoro', '2023-06-08 12:05:13', '2023-06-08 12:05:13', '10');

INSERT INTO `merks` (`id`, `merk`, `created_at`, `updated_at`) VALUES
(1, 'SIDU', '2023-06-04 17:54:37', '2023-06-04 17:54:37');
INSERT INTO `merks` (`id`, `merk`, `created_at`, `updated_at`) VALUES
(2, 'Erlangga', '2023-06-04 17:54:48', '2023-06-04 17:55:24');


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2023_06_04_151913_create_permission_tables', 1),
(5, '2023_06_04_164654_create_kategoris_table', 2),
(6, '2023_06_04_174855_create_merks_table', 3),
(7, '2023_06_04_180235_create_supliyers_table', 4),
(9, '2023_06_05_093944_create_barangs_table', 5),
(10, '2023_06_05_114543_create_masuks_table', 6),
(11, '2023_06_05_123631_create_keluars_table', 7);



INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(8, 'App\\User', 2);
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\User', 4);







INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'root admin', 'web', '2023-06-04 15:33:46', '2023-06-04 15:33:46');
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'super admin', 'web', '2023-06-04 15:33:46', '2023-06-04 15:33:46');
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'Divisi Administrasi', 'web', '2023-06-16 02:07:59', '2023-06-16 02:07:59');
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'Kepala Divisi Gudang', 'web', '2023-06-16 02:08:18', '2023-06-16 02:08:18'),
(6, 'Divisi Marketing', 'web', '2023-06-16 02:08:31', '2023-06-16 02:08:31'),
(7, 'Divisi Logistik', 'web', '2023-06-16 02:08:39', '2023-06-16 02:08:39'),
(8, 'Karyawan Divisi Gudang', 'web', '2023-06-16 02:08:47', '2023-06-16 02:08:47');

INSERT INTO `supliyers` (`id`, `nama`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Nurya Prawesti', 'Tanggul Kidul No.45', '087760406640', '2023-06-04 18:14:20', '2023-06-04 18:14:30');


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jeffri Dian Asmoro', 'jeffridianasmoro@gmail.com', NULL, '$2y$10$qPuiy1zp4urDRJGNdlaPG.67vLGK031.T9jt5jdoC9nxeMP91aG.2', NULL, '2023-06-04 15:33:46', '2023-06-04 15:33:46');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Aji Brahmasta', 'aji@gmail.com', NULL, '$2y$10$EqeDBeNPgenq8i9T3/ZdbOvaxU2ccuKuz7p/MM8qdV2d8lbDilHRK', NULL, '2023-06-11 15:54:17', '2023-06-11 15:54:17');
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'MUCHAMMAD FARIQ MAULANA', 'fariqmaulana@gmail.com', NULL, '$2y$10$eryz4JSFJm.CDRrGLNFsouWqT5G9uStNQn8F/995.5RpMXuYnP0iu', NULL, '2023-06-15 18:38:59', '2023-06-15 18:38:59');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;