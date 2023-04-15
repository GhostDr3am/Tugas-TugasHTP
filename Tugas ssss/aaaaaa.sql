-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tugas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tugas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tugas` DEFAULT CHARACTER SET utf8 ;
USE `tugas` ;

-- -----------------------------------------------------
-- Table `tugas`.`tbl_persensi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tugas`.`tbl_persensi` (
  `id_persensi` INT NOT NULL,
  `Tanggal` DATE NULL,
  `waktu_masuk` TIME NULL,
  `Status` VARCHAR(45) NULL,
  PRIMARY KEY (`id_persensi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tugas`.`tbl_narasumber`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tugas`.`tbl_narasumber` (
  `id_narasumber` INT NOT NULL,
  `kontak` VARCHAR(45) NULL,
  PRIMARY KEY (`id_narasumber`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tugas`.`tbl_pelatihan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tugas`.`tbl_pelatihan` (
  `id_pelatihan` INT NOT NULL,
  `Nama_pelatihan` VARCHAR(45) NULL,
  `Biaya` VARCHAR(45) NULL,
  `Durasi` VARCHAR(45) NULL,
  `tbl_narasumber_id_narasumber` INT NOT NULL,
  PRIMARY KEY (`id_pelatihan`),
  INDEX `fk_tbl_pelatihan_tbl_narasumber1_idx` (`tbl_narasumber_id_narasumber` ASC),
  CONSTRAINT `fk_tbl_pelatihan_tbl_narasumber1`
    FOREIGN KEY (`tbl_narasumber_id_narasumber`)
    REFERENCES `tugas`.`tbl_narasumber` (`id_narasumber`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tugas`.`tbl_pegawai`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tugas`.`tbl_pegawai` (
  `id_pegawai` INT NOT NULL AUTO_INCREMENT,
  `Nama_Pegawai` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `Phone` INT NULL,
  `Password` VARCHAR(45) NULL,
  `tbl_persensi_id_persensi` INT NOT NULL,
  `tbl_pelatihan_id_pelatihan` INT NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  INDEX `fk_tbl_pegawai_tbl_persensi1_idx` (`tbl_persensi_id_persensi` ASC) ,
  INDEX `fk_tbl_pegawai_tbl_pelatihan1_idx` (`tbl_pelatihan_id_pelatihan` ASC) ,
  CONSTRAINT `fk_tbl_pegawai_tbl_persensi1`
    FOREIGN KEY (`tbl_persensi_id_persensi`)
    REFERENCES `tugas`.`tbl_persensi` (`id_persensi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_pegawai_tbl_pelatihan1`
    FOREIGN KEY (`tbl_pelatihan_id_pelatihan`)
    REFERENCES `tugas`.`tbl_pelatihan` (`id_pelatihan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
