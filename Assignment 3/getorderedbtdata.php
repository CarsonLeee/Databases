<!--Used for question 1, lists all the Bus Trip Data and allows the user to order the data by Trip Name OR by Country -->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Bus Trips with no Bookings</title>
</head>

<body>
    <div class="Title">
        <h1><span>Ordered Bus Trip Data</span></h1>
    </div>

    <div class="Subtitle">
        <form action="printbtdata.php" method="post">
            <h2>Ordered Bus Trip Data</h2>
            <h3>Click the button below to list the Bus Trip Data where you can order by Trip Name OR by Country:</h3>
            <!--Creates radio buttons to allow user to select the sorting category and order they want-->
            <h3>What would you like to order the list by?</h3>
            <input type="radio" name="sortingcategory" value="tripname">Trip Name<br>
            <input type="radio" name="sortingcategory" value="country">Country<br>
            <h3>How would you like to sort the above choice?</h3>
            <input type="radio" name="sortingorder" value="asc">Ascending<br>
            <input type="radio" name="sortingorder" value="desc">Descending<br>
            <input type="submit" name="sortingfieldsubmit" value="Submit">
        </form>
	</div>

    <div>
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to return back to the homepage</h3>
        <input type="submit" name="sortingfieldsubmit" value="Return Home">
    </div>
</body>