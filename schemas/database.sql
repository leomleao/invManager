SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `invManager` ;
CREATE SCHEMA IF NOT EXISTS `invManager` DEFAULT CHARACTER SET utf8 ;
USE `invManager` ;

-- -----------------------------------------------------
-- Table `invManager`.`departments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`departments` ;

CREATE  TABLE IF NOT EXISTS `invManager`.`departments` (
  `departmentID` INT NOT NULL AUTO_INCREMENT ,
  `departmentName` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`departmentID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invManager`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`roles` ;

CREATE  TABLE IF NOT EXISTS `invManager`.`roles` (
  `roleID` INT NOT NULL AUTO_INCREMENT ,
  `roleDesc` VARCHAR(45) NULL ,
  PRIMARY KEY (`roleID`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invManager`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`users` ;

CREATE  TABLE IF NOT EXISTS `invManager`.`users` (
  `userID` INT NOT NULL AUTO_INCREMENT ,
  `userUser` VARCHAR(45) NOT NULL ,
  `userName` VARCHAR(45) NOT NULL ,
  `userDepartmentID` INT NOT NULL ,
  `userPassword` CHAR(128) NULL ,
  `userLastKnownPassword` CHAR(128) NULL COMMENT 'Last password retrieved from the user',
  `userLastKnownPhonePassword` CHAR(6) NULL COMMENT 'Phone unlock password',
  `userEmail` VARCHAR(45) NULL ,
  `userPicturePath` VARCHAR(45) NULL ,
  `userCreationDate` TIMESTAMP NULL DEFAULT NOW() ,
  `userLastMod` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP ,
  `userRoleID` INT NOT NULL ,
  `userStatus` INT(1) NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`userID`) ,
  INDEX `userDepartmentID_idx` (`userDepartmentID` ASC) ,
  INDEX `userRoleID_idx` (`userRoleID` ASC) ,
  CONSTRAINT `userDepartmentID`
    FOREIGN KEY (`userDepartmentID` )
    REFERENCES `invManager`.`departments` (`departmentID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `userRoleID`
    FOREIGN KEY (`userRoleID` )
    REFERENCES `invManager`.`roles` (`roleID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `invManager`.`password_recoveries`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`password_recoveries` ;

CREATE  TABLE IF NOT EXISTS `invManager`.`password_recoveries` (
  `passwordID` INT NOT NULL AUTO_INCREMENT ,
  `userID` INT NOT NULL ,
  `token` VARCHAR(255) NOT NULL ,
  `status` INT NOT NULL DEFAULT 0 ,
  PRIMARY KEY (`passwordID`) ,
  INDEX `userID_idx` (`userID` ASC) ,
  CONSTRAINT `userID`
    FOREIGN KEY (`userID` )
    REFERENCES `invManager`.`users` (`userID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invManager`.`login_attempts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`login_attempts` ;

CREATE  TABLE IF NOT EXISTS `invManager`.`login_attempts` (
  `loginAttemptID` INT NOT NULL AUTO_INCREMENT ,
  `loginAttemptUserID` INT NOT NULL ,
  `tried_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`loginAttemptID`, `loginAttemptUserID`) ,
  INDEX `loginAttemptUserID_idx` (`loginAttemptUserID` ASC) ,
  CONSTRAINT `loginAttemptUserID`
    FOREIGN KEY (`loginAttemptUserID` )
    REFERENCES `invManager`.`users` (`userID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invManager`.`itemTypes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`itemTypes` ;

CREATE TABLE `invManager`.`itemTypes` (
 `itemTypeID` INT NOT NULL AUTO_INCREMENT , 
 `itemTypeDescription` VARCHAR(45) NOT NULL , 
  PRIMARY KEY (`itemTypeID`)) 
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invManager`.`items`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`items` ;

CREATE TABLE `invManager`.`items` (
 `itemID` INT NOT NULL AUTO_INCREMENT ,
 `itemTypeID` INT NOT NULL ,  
 `itemDescription` INT NOT NULL , 
 `itemSpec` INT NULL COMMENT 'processor RAM etc', 
 `itemName` INT NULL COMMENT 'PC name for instance', 
 `itemInvoiceNumber` INT NOT NULL  COMMENT 'NF number', 
 `itemInventoryCode` INT NULL  COMMENT 'NIF if existent',
 `itemPrice` DOUBLE NOT NULL , 
 `itemPicturePath` VARCHAR(90) NULL , 
 `itemPurchaseDate` DATE NOT NULL , 
 `itemMAC` VARCHAR(12) NULL ,
 `itemBitLockerKey` VARCHAR(48) NULL ,
 `itemSerialNumber` VARCHAR(45) NULL ,
 `itemPartNumber` VARCHAR(45) NULL ,
 `itemIMEI` VARCHAR(45) NULL ,
 `itemInsertionDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
 `itemLastMod` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP , 
  PRIMARY KEY (`itemID`) ,
 INDEX `itemTypeID_idx` (`itemTypeID` ASC) ,
 CONSTRAINT `itemTypeID`
  FOREIGN KEY (`itemTypeID` )
  REFERENCES `invManager`.`itemTypes` (`itemTypeID` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `invManager`.`allocations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `invManager`.`allocations` ;

CREATE TABLE `invManager`.`allocations` (
 `allocationID` INT NOT NULL AUTO_INCREMENT , 
 `allocationItemID` INT NOT NULL , 
 `allocationUserID` INT NOT NULL ,  
 `allocationDate` DATE NOT NULL ,
 `allocationEndDate` DATE NULL DEFAULT NULL ,
 `allocationReturned` INT(1) NULL DEFAULT 0 ,
 `allocationHasTerm` INT(1) NULL DEFAULT NULL ,
 `allocationTermPath` VARCHAR(45) NULL DEFAULT NULL , 
 `allocationInsertionDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
 `allocationLastMod` TIMESTAMP NULL ON UPDATE CURRENT_TIMESTAMP ,
 PRIMARY KEY (`allocationID`) ,
 INDEX `allocationItemID_idx` (`allocationItemID` ASC) ,
 INDEX `allocationUserID_idx` (`allocationUserID` ASC) ,
 CONSTRAINT `allocationItemID`
  FOREIGN KEY (`allocationItemID` )
  REFERENCES `invManager`.`items` (`itemID` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
 CONSTRAINT `allocationUserID`
  FOREIGN KEY (`allocationUserID` )
  REFERENCES `invManager`.`users` (`userID` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


