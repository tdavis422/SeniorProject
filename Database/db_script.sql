

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "-06:00";

-- Table: checkouts
CREATE TABLE checkouts (
	checkoutsID INT AUTO_INCREMENT NOT NULL, 
	equipmentID INT NOT NULL, 
	studentID INT NOT NULL, 
	workerID INT NOT NULL, 
	timeOut DATETIME NOT NULL, 
	timeIn DATETIME, 
	notes VARCHAR (255),
	PRIMARY KEY(checkoutsID),
	FOREIGN KEY(equipmentID) REFERENCES equipment(equipmentID),
	FOREIGN KEY(workerID) REFERENCES workers(workerID)
);

-- Table: equipment
CREATE TABLE equipment (
	equipmentID INT NOT NULL, 
	equipmentType INT NOT NULL, 
	condition VARCHAR NOT NULL, 
	lastCleanedBy INT NOT NULL, 
	dateAdded DATE NOT NULL, 
	dateRemoved DATE NOT NULL, 
	notes VARCHAR (255),
	PRIMARY KEY(equipmentID),
	FOREIGN KEY(equipmentType) REFERENCES equipmentTypes(equipmentTypeID),
	FOREIGN KEY(lastCleanedBy) REFERENCES workers(workerID)
	
);

-- Table: equipmentTypes
CREATE TABLE equipmentTypes (
	equipmentTypeID INT AUTO_INCREMENT NOT NULL, 
	equipmentType VARCHAR (255) NOT NULL,
	PRIMARY KEY(equipmentTypeID)
);

-- Table: workers
CREATE TABLE workers (
	workerID INT NOT NULL, 
	firstName VARCHAR (255) NOT NULL, 
	lastName VARCHAR (255) NOT NULL, 
	type VARCHAR (255) NOT NULL, 
	password VARCHAR NOT NULL,
	PRIMARY KEY(workerID)
);
/*This could be temp*/
CREATE TABLE comments (
  comment_id int(3) NOT NULL,
  comment_post_id int(3) NOT NULL,
  comment_author varchar(255) NOT NULL,
  comment_email varchar(255) NOT NULL,
  comment_content text NOT NULL,
  comment_status varchar(255) NOT NULL,
  comment_date date NOT NULL,
  PRIMARY KEY(comment_id)
);



/*This could be temp*/
CREATE TABLE posts (
  post_id int(3) NOT NULL,
  post_category_id int(11) NOT NULL,
  post_title varchar(255) NOT NULL,
  post_author varchar(255) NOT NULL,
  post_date date NOT NULL,
  post_image text NOT NULL,
  post_content text NOT NULL,
  post_tags varchar(255) NOT NULL,
  post_comment_count int(11) NOT NULL,
  post_status varchar(255) NOT NULL DEFAULT 'draft',
  PRIMARY KEY(post_id)
);



-- Trigger: statusChangeNeedsSanitized
CREATE TRIGGER statusChangeNeedsSanitized AFTER UPDATE OF timeIn ON checkouts FOR EACH ROW BEGIN SELECT * FROM equipment;
UPDATE condition SET condition = 'needsSanitized' WHERE checkouts.equipmentID = equipment.equipmentID; END;

COMMIT;-- TRANSACTION;
