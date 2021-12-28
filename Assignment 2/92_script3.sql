-- Query 1
SELECT tripname FROM bustrip WHERE country="Italy";

-- Query 2
SELECT DISTINCT lastname FROM passenger;

-- Query 3
SELECT * FROM bustrip 
ORDER BY tripname;

-- Query 4
SELECT tripname, country, startdate 
FROM bustrip 
WHERE startdate > "2022-4-22";

-- Query 5
SELECT passenger.firstname, passenger.lastname, passport.birthdate
FROM passenger 
INNER JOIN passport 
ON passenger.passportnum = passport.passportnum 
WHERE countrycitizenship = "USA";

-- Query 6
SELECT bustrip.tripname, bus.capacity 
FROM bustrip
INNER JOIN bus 
ON bus.licenseplate=bustrip.licenseplate
WHERE bustrip.startdate BETWEEN "2022-4-1" AND "2022-9-1";

-- Query 7
SELECT passenger.passengerid, passenger.firstname, passenger.lastname, passenger.passportnum, passport.expirydate, passport.countrycitizenship, passport.birthdate
FROM passenger 
INNER JOIN passport
ON passenger.passportnum = passport.passportnum 
WHERE passport.expirydate <= (SELECT(DATE_SUB(CURDATE(), INTERVAL 1 YEAR)));


-- Query 8
SELECT passenger.firstname, passenger.lastname, bustrip.tripname
FROM passenger
INNER JOIN books ON passenger.passportnum = books.passportnum
INNER JOIN bustrip ON bustrip.tripid = books.tripid
WHERE passenger.lastname LIKE "S%";

-- Query 9
SELECT COUNT(*) AS "Number of Passengers", bustrip.tripname, bustrip.tripid 
FROM bustrip
INNER JOIN books ON books.tripid=bustrip.tripid
WHERE bustrip.tripname = "Castles of Germany";

-- Query 10
SELECT bustrip.country, SUM(books.priceoftrip)
FROM bustrip, books
WHERE bustrip.tripid=books.tripid
GROUP BY bustrip.country;

-- Query 11
SELECT passenger.firstname, passenger.lastname, passport.countrycitizenship, bustrip.tripname, bustrip.country
FROM passenger 
INNER JOIN passport ON passenger.passportnum=passport.passportnum
INNER JOIN books ON passport.passportnum=books.passportnum 
INNER JOIN bustrip ON books.tripid=bustrip.tripid
WHERE passport.countrycitizenship != bustrip.country;

-- Query 12
SELECT bustrip.tripid, bustrip.tripname 
FROM bustrip
WHERE bustrip.tripid NOT IN(SELECT books.tripid FROM books);

-- Query 13
SELECT DISTINCT passenger.firstname, passenger.lastname, passport.countrycitizenship, SUM(books.priceoftrip)
FROM passenger
INNER JOIN passport ON passport.passportnum=passenger.passportnum
INNER JOIN books ON passport.passportnum=books.passportnum
GROUP BY passenger.passportnum HAVING MAX(books.priceoftrip);

-- Query 14
SELECT bustrip.tripname FROM bustrip
INNER JOIN books ON books.tripid=bustrip.tripid GROUP BY bustrip.tripname HAVING COUNT(bustrip.tripname) < 4;

-- Query 15
SELECT bustrip.tripname AS "Bus Trip Name", COUNT(books.passportnum) AS "Current Number of Passengers", bus.licenseplate AS "Current Bus Assigned License Plate", bus.capacity AS "Capacity of Assigned Bus"
FROM bustrip
INNER JOIN bus ON bustrip.licenseplate=bus.licenseplate
INNER JOIN books ON bustrip.tripid=books.tripid
GROUP BY books.tripid HAVING COUNT(bustrip.tripid) > bus.capacity;
