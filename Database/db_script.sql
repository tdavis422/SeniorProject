
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-06:00";

-- Table: checkouts
CREATE TABLE `checkouts` (
	`checkoutsID` INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	`equipmentID` INT REFERENCES equipment (equipmentID) MATCH SIMPLE NOT NULL, 
	`studentID` INT NOT NULL, 
	`workerID` INT REFERENCES workers (workerID) MATCH SIMPLE NOT NULL, 
	`timeOut` DATETIME NOT NULL, 
	`timeIn` DATETIME, 
	`notes` VARCHAR (255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: equipment
CREATE TABLE `equipment` (
	`equipmentID` INT PRIMARY KEY ASC, 
	`equipmentType` INT NOT NULL REFERENCES equipmentTypes (equipmentSerialCode), 
	`condition VARCHAR` NOT NULL, 
	`lastCleanedBy` INT NOT NULL REFERENCES workers (workerID) MATCH SIMPLE, 
	`dateAdded` DATE NOT NULL, 
	`dateRemoved` DATE NOT NULL, 
	`notes` VARCHAR (255)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: equipmentTypes
CREATE TABLE `equipmentTypes` (
	`equipmentTypeID` INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	`equipmentType` VARCHAR (255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table: workers
CREATE TABLE `workers` (
	`workerID` PRIMARY KEY ASC NOT NULL, 
	`firstName` VARCHAR (255) NOT NULL, 
	`lastName` VARCHAR (255) NOT NULL, 
	`type` VARCHAR (255) NOT NULL, 
	`password` VARCHAR NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Trigger: statusChangeNeedsSanitized
CREATE TRIGGER statusChangeNeedsSanitized AFTER UPDATE OF timeIn ON checkouts FOR EACH ROW BEGIN SELECT * FROM equipment;
UPDATE condition SET condition = 'needsSanitized' WHERE checkouts.equipmentID = equipment.equipmentID; END;

COMMIT;-- TRANSACTION;
