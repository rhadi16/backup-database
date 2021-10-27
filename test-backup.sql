-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for test-backup
CREATE DATABASE IF NOT EXISTS `test-backup` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `test-backup`;

-- Dumping structure for table test-backup.tb_data_diri
CREATE TABLE IF NOT EXISTS `tb_data_diri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jkl` varchar(50) DEFAULT NULL,
  `goldar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table test-backup.tb_data_diri: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_data_diri` DISABLE KEYS */;
INSERT INTO `tb_data_diri` (`id`, `nama`, `jkl`, `goldar`) VALUES
	(1, 'rhadi indrawan', 'laki-laki', 'AB'),
	(2, 'hulk', 'laki-laki', 'B');
/*!40000 ALTER TABLE `tb_data_diri` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
