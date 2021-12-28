SHOW DATABASES;
USE 92_assign2db;

SHOW TABLES;
/*Inserting for bus table*/
SELECT * FROM bus;
LOAD DATA LOCAL INFILE "loaddatafall2021.txt" INTO TABLE bus
FIELDS TERMINATED BY ","
LINES TERMINATED BY "\n";
SELECT * FROM bus;


/*Inserting for passport table*/
SELECT * FROM passport;
INSERT INTO passport VALUES("US10", "2025-1-1", "USA", "1970-2-19");
INSERT INTO passport VALUES("US12", "2025-1-1", "USA", "1972-8-12");
INSERT INTO passport VALUES("US13", "2025-1-1", "USA", "2001-5-12");
INSERT INTO passport VALUES("US14", "2025-1-1", "USA", "2004-3-19");
INSERT INTO passport VALUES("US15", "2025-1-1", "USA", "2012-9-17");
INSERT INTO passport VALUES("US22", "2030-4-4", "USA", "1950-6-11");
INSERT INTO passport VALUES("US23", "2018-3-3", "USA", "1940-6-24");
INSERT INTO passport VALUES("GE11", "2027-1-1", "Germany", "1970-7-12");
INSERT INTO passport VALUES("US88", "2030-2-13", "Canada", "1979-4-25");
INSERT INTO passport VALUES("US89", "2022-2-2", "Canada", "1976-4-8");
INSERT INTO passport VALUES("US90", "2020-2-28", "Italy", "1980-4-4");
INSERT INTO passport VALUES("US91", "2030-1-1", "Germany", "1959-2-2");
INSERT INTO passport VALUES("US20", "2030-1-1", "USA", "1958-9-7");
SELECT * FROM passport;

/*Inserting for passengers table*/
SELECT * FROM passenger;
INSERT INTO passenger VALUES(11, "Homer", "Simpson", "US10");
INSERT INTO passenger VALUES(22, "Marge", "Simpson", "US12");
INSERT INTO passenger VALUES(33, "Bart", "Simpson", "US13");
INSERT INTO passenger VALUES(34, "Lisa", "Simpson", "US14");
INSERT INTO passenger VALUES(35, "Maggie", "Simpson", "US15");
INSERT INTO passenger VALUES(44, "Ned", "Flanders", "US22");
INSERT INTO passenger VALUES(45, "Todd", "Flanders", "US23");
INSERT INTO passenger VALUES(66, "Heidi", "Klum", "GE11");
INSERT INTO passenger VALUES(77, "Michael", "Scott", "US88");
INSERT INTO passenger VALUES(78, "Dwight", "Schrute", "US89");
INSERT INTO passenger VALUES(79, "Pam", "Beesly", "US90");
INSERT INTO passenger VALUES(80, "Creed", "Bratton", "US91");
INSERT INTO passenger VALUES(81, "Walter", "White", "US20");
SELECT * FROM passenger;

/*Inserting for bustrip table*/
SELECT * FROM bustrip;
INSERT INTO bustrip VALUES(1, "VAN1111", "2022-1-1", "2022-1-17", "Germany", "Castles of Germany");
INSERT INTO bustrip VALUES(2, "TAXI222", "2022-3-3", "2022-3-14", "Italy", "Tuscany Sunsets");
INSERT INTO bustrip VALUES(3, "VAN2222", "2022-5-5", "2022-5-10", "USA", "California Wines");
INSERT INTO bustrip VALUES(4, "TAXI222", "2022-4-4", "2022-4-14", "Bermuda", "Beaches Galore");
INSERT INTO bustrip VALUES(5, "CAND123", "2022-6-1", "2022-6-22", "Canada", "Cottage Country");
INSERT INTO bustrip VALUES(6, "TAXI111", "2022-7-5", "2022-7-15", "Italy", "Arrivaderci Roma");
INSERT INTO bustrip VALUES(7, "TAXI111", "2022-9-9", "2022-9-29", "UK",  "Shetland and Orkney");
INSERT INTO bustrip VALUES(8, "VAN2222", "2022-6-10", "2022-6-20", "USA", "Disney World and Sea World");
INSERT INTO bustrip VALUES(9, "HOG2222", "2022-5-5", "2022-9-5", "UK", "Hogwarts");
INSERT INTO bustrip VALUES(10, "BAT2321", "2022-4-19", "2022-3-5", "Romania", "Bran Castle");
SELECT * FROM bustrip;

/*Inserting for books table*/
SELECT * FROM books;
INSERT INTO books VALUES("US10", 1, 500);
INSERT INTO books VALUES("US12", 1, 500);
INSERT INTO books VALUES("US13", 1, 300);
INSERT INTO books VALUES("US14", 1, 300);
INSERT INTO books VALUES("US15", 1, 300);
INSERT INTO books VALUES("GE11", 1, 600.99);
INSERT INTO books VALUES("US22", 8, 400);
INSERT INTO books VALUES("US23", 8, 200);
INSERT INTO books VALUES("US89", 4, 600);
INSERT INTO books VALUES("US91", 4, 600);
INSERT INTO books VALUES("US89", 1, 550);
INSERT INTO books VALUES("US13", 8, 300);
INSERT INTO books VALUES("US14", 8, 300);
INSERT INTO books VALUES("US10", 6, 600);
INSERT INTO books VALUES("US12", 6, 600);
INSERT INTO books VALUES("US13", 6, 100);
INSERT INTO books VALUES("US14", 6, 100);
INSERT INTO books VALUES("US15", 6, 100);
INSERT INTO books VALUES("US10", 7, 300);
INSERT INTO books VALUES("US22", 7, 400);
INSERT INTO books VALUES("US88", 7, 500);
INSERT INTO books VALUES("US20", 10, 200);
SELECT * FROM books;

/*Updates*/
SELECT * FROM passport;
UPDATE passport INNER JOIN passenger ON passport.passportnum = passenger.passportnum SET passport.countrycitizenship = "Germany" WHERE passenger.firstname = "Dwight" AND passenger.lastname = "Schrute";
SELECT * FROM passport;

SELECT * FROM bustrip;
UPDATE bustrip SET licenseplate="VAN1111" WHERE country="USA";
SELECT * FROM bustrip;