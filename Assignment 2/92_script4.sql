CREATE VIEW details AS SELECT passenger.firstname, passenger.lastname, bustrip.tripname, bustrip.country, books.priceoftrip
FROM books
INNER JOIN passenger ON passenger.passportnum=books.passportnum 
INNER JOIN bustrip ON bustrip.tripid=books.tripid;

SELECT * FROM details;

SELECT * FROM details WHERE tripname="Castles of Germany" OR tripname="Bran Castle" ORDER BY priceoftrip ASC;

SELECT * FROM bus;
DELETE FROM bus WHERE licenseplate LIKE "%UWO%";
SELECT * FROM bus;

SELECT * FROM passport;
SELECT * FROM passenger;
DELETE FROM passport WHERE countrycitizenship LIKE "Canada";
SELECT * FROM passport;
SELECT * FROM passenger;
-- Cannot delete Canada from passport table, because there are other tables who are using Canada as a foreign key

SELECT * FROM bustrip;
DELETE FROM bustrip WHERE tripname = "California Wines";
SELECT * FROM bustrip;
DELETE FROM bustrip WHERE tripname = "Arrivaderci Roma trip";
SELECT * FROM bustrip;
-- Cannot delete Arrivaderci Roma trip from bustrip table, because there are passengers who have booked the Arrivaderci Roma trip

SELECT * FROM passenger;
DELETE FROM passenger WHERE firstname = "Pam";
SELECT * FROM passenger;

SELECT firstname, lastname FROM details;
DELETE FROM passenger WHERE passenger.lastname = "Simpson";
SELECT * FROM details;