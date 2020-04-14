-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema posweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema posweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `posweb` DEFAULT CHARACTER SET latin1 ;
USE `posweb` ;

-- -----------------------------------------------------
-- Table `posweb`.`siteviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `posweb`.`siteviews` (
  `siteviews_id` INT(11) NOT NULL AUTO_INCREMENT,
  `siteviews_date` TIMESTAMP NULL DEFAULT NULL,
  `siteviews_users` INT(11) NULL DEFAULT NULL,
  `siteviews_views` INT(11) NULL DEFAULT NULL,
  `siteviews_pages` INT(11) NULL DEFAULT NULL,
  `siteviews_online` INT(11) NULL DEFAULT NULL,
  `siteviews_agent` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`siteviews_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `posweb`.`siteviews_agent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `posweb`.`siteviews_agent` (
  `siteviews_agent_id` INT(11) NOT NULL AUTO_INCREMENT,
  `agent_name` VARCHAR(255) NULL DEFAULT NULL,
  `agent_views` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`siteviews_agent_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `posweb`.`siteviews_online`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `posweb`.`siteviews_online` (
  `siteviews_online_id` INT(11) NOT NULL AUTO_INCREMENT,
  `online_session` VARCHAR(255) NULL DEFAULT NULL,
  `online_startview` TIMESTAMP NULL DEFAULT NULL,
  `online_endview` TIMESTAMP NULL DEFAULT NULL,
  `online_ip` VARCHAR(255) NULL DEFAULT NULL,
  `online_url` VARCHAR(255) NULL DEFAULT NULL,
  `online_agent` VARCHAR(255) NULL DEFAULT NULL,
  `agent_name` VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (`siteviews_online_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `posweb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `posweb`.`usuario` (
  `usuario_id` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario_email` VARCHAR(255) NULL DEFAULT NULL,
  `usuario_senha` VARCHAR(255) NULL DEFAULT NULL,
  `usuario_nivel` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`usuario_id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
