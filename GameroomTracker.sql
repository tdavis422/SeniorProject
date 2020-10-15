--
-- File generated with SQLiteStudio v3.2.1 on Thu Oct 15 09:00:56 2020
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: Check-outs
CREATE TABLE "Check-outs" (
	 logNumber INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
	 item STRING REFERENCES Equipment (itemType) MATCH SIMPLE NOT DEFERRABLE INITIALLY IMMEDIATE,
	 studentID INTEGER NOT NULL,
	 workerID INTEGER NOT NULL,
	 timeOut DATETIME NOT NULL,
	 timeIn DATETIME
	);

-- Table: Equipment
CREATE TABLE Equipment (
	serialCode INTEGER PRIMARY KEY NOT NULL,
	itemType STRING NOT NULL, 
	condition STRING DEFAULT usable NOT NULL,
	dateAdded DATE NOT NULL, notes STRING, 
	lastCleanedBy REFERENCES Workers (workerID) MATCH SIMPLE NOT NULL
	);

-- Table: Workers
CREATE TABLE Workers (
	workerID INTEGER PRIMARY KEY NOT NULL, 
	firstName STRING NOT NULL, 
	lastName STRING NOT NULL
	);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
