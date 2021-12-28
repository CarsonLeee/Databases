SHOW DATABASES;
DROP DATABASE 92_assign2db;
CREATE DATABASE 92_assign2db;
USE 92_assign2db;

SHOW TABLES;

CREATE TABLE bus (
    licenseplate CHAR(7), 
    capacity int NOT NULL, 
    PRIMARY KEY (licenseplate)
);

CREATE TABLE passport (
    passportnum CHAR(4), 
    expirydate date NOT NULL,
    countrycitizenship VARCHAR(30) NOT NULL,
    birthdate date NOT NULL, 
    PRIMARY KEY (passportnum)
);

CREATE TABLE passenger (
    passengerid int, 
    firstname VARCHAR(20) NOT NULL, 
    lastname VARCHAR(20) NOT NULL, 
    passportnum CHAR(4) NOT NULL,
    PRIMARY KEY (passengerid),
    FOREIGN KEY(passportnum) REFERENCES passport(passportnum)
);


CREATE TABLE bustrip (
    tripid int, 
    licenseplate CHAR(7) NOT NULL,
    startdate date NOT NULL, 
    enddate date NOT NULL, 
    country CHAR(30) NOT NULL,  
    tripname CHAR(50) NOT NULL, 
    PRIMARY KEY (tripid), 
    FOREIGN KEY(licenseplate) REFERENCES bus(licenseplate)
);


CREATE TABLE books (
    passportnum char(4) NOT NULL, 
    tripid int NOT NULL,
    priceoftrip decimal(10,2) NOT NULL,
    FOREIGN KEY(tripid) REFERENCES bustrip(tripid) ON DELETE CASCADE,
    FOREIGN KEY(passportnum) REFERENCES passport(passportnum) ON DELETE CASCADE
);

SHOW TABLES;