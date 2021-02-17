--
-- File generated with SQLiteStudio v3.2.1 on Sat Feb 6 13:59:32 2021
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: checkouts
CREATE TABLE checkouts (
	checkoutsID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
	equipmentID INTEGER REFERENCES equipment (equipmentID) MATCH SIMPLE NOT NULL, 
	studentID INTEGER NOT NULL, 
	workerID INTEGER REFERENCES workers (workerID) MATCH SIMPLE NOT NULL, 
	timeOut DATETIME NOT NULL, 
	timeIn DATETIME, 
	notes STRING (255)
);

-- Table: equipment
CREATE TABLE equipment (
	equipmentID INTEGER PRIMARY KEY ASC, 
	equipmentType INTEGER NOT NULL REFERENCES equipmentTypes (equipmentSerialCode), 
	condition STRING NOT NULL, 
	lastCleanedBy INTEGER NOT NULL REFERENCES workers (workerID) MATCH SIMPLE, 
	dateAdded DATE NOT NULL, 
	dateRemoved DATE NOT NULL, 
	notes STRING (255)
);

-- Table: equipmentTypes
CREATE TABLE equipmentTypes (
	equipmentTypeID INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 
	equipmentType STRING (255) NOT NULL
);

-- Table: workers
CREATE TABLE workers (
	workerID PRIMARY KEY ASC NOT NULL, 
	firstName STRING (255) NOT NULL, 
	lastName STRING (255) NOT NULL, 
	type STRING (255) NOT NULL, 
	password STRING NOT NULL
);

-- Trigger: statusChangeNeedsSanitized
CREATE TRIGGER statusChangeNeedsSanitized AFTER UPDATE OF timeIn ON checkouts FOR EACH ROW BEGIN SELECT * FROM equipment;
UPDATE condition SET condition = 'needsSanitized' WHERE checkouts.equipmentID = equipment.equipmentID; END;

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
