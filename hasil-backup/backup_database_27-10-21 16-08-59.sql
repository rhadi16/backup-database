CREATE DATABASE `test-backup`;
USE `test-backup`;

DROP TABLE tb_data_diri;

CREATE TABLE `tb_data_diri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jkl` varchar(50) DEFAULT NULL,
  `goldar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_data_diri VALUES("1","rhadi indrawan","laki-laki","AB");
INSERT INTO tb_data_diri VALUES("2","hulk","laki-laki","B");
INSERT INTO tb_data_diri VALUES("3","Tony Stark","laki-laki","C");



