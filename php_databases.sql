CREATE DATABASE `daftar-siswa`;

CREATE TABLE `daftar-siswa`.`calon_siswa` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `nama` VARCHAR(64) NOT NULL ,  
    `alamat` VARCHAR(255) NOT NULL ,  
    `jenis_kelamin` VARCHAR(16) NOT NULL ,  
    `sekolah_asal` VARCHAR(64) NOT NULL ,  
    `email` VARCHAR(255) NOT NULL ,    
    PRIMARY KEY  (`id`)
) ENGINE = InnoDB;
