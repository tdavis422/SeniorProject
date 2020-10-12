--This makes the database.
CREATE DATABASE GameroomTrackerSystem;

--This makes the Checkouts table.
CREATE TABLE Checkouts (
    LogNumber int(3) NOT NULL AUTO_INCREMENT,--This is the value that keeps track of when an item was used. It cannot be NULL and it will automatically increment by 1.
    item varchar(255),--This is the value that stores the names of all the equipment.
    studentID int(6),--This is the value that stores students' IDs.
    workerID int(6),--This is the value that stores workers' IDs.
    timeOut DATETIME,--This is the value that stores when an item was checked out.
    timeIn DATETIME,--This is the value that stores when an item was checked in.
	PRIMARY KEY (LogNumber),
	FOREIGN KEY (workerID) REFERENCES Workers(workerID),
	FOREIGN KEY (studentID) REFERENCES Students(studentID),
	UNIQUE (LogNumber),
	UNIQUE (studentID),
	UNIQUE (workerID)
);
--This makes the Equipment table.
CREATE TABLE Equipment (
    serialCode int(255) NOT NULL,--This is the serial code from the label.
    itemType int(255),--This is the value that is unique to each type of equipment.
    condition varchar(255),--This is where it will say whether the equipment is damaged or sanitized.
    dateAdded DATE,--This is where you would say what day a new peice of equipment was put into the database. 
    Notes varchar(255),--This is where you can put additional comments about equipment if needed.
	PRIMARY KEY (serialCode),
	UNIQUE (serialCode),
	UNIQUE (itemType)
);
--This makes the Workers table.
CREATE TABLE Workers(
    workerID int(6) NOT NULL,--This is the value that stores workers' IDs.
    firstName varchar(255),--This is the value that stores workers' first names.
    lastName varchar(255),--This is the value that stores workers' last names.
	PRIMARY KEY (workerID),
	UNIQUE (workerID)
);
--This makes the Students table.
CREATE TABLE Students(
    studentID int(6) NOT NULL,--This is the value that stores students' IDs.
    firstName varchar(255),--This is the value that stores students' first names.
    lastName varchar(255),--This is the value that stores students' last names.
	PRIMARY KEY (studentID),
	UNIQUE (studentID)
);