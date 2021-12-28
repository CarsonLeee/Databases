<!--Used for question 6, gets the new booking trip the user wants to add-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Create Bookings</title>
</head>

<body>
    <div class="Title">
        <h1><span>Booking data</span></h1>
    </div>

	<div class="boxed">
	<h2>These are the current bookings you have:</h2>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Trip ID</th>
		<th>License Plate</th>
		<th>Start Date</th>
        <th>End Date</th>
        <th>Country</th>
        <th>Trip Name</th>
        <th>Passport Number</th>
        <th>Price of Trip</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>

		<?php
			$query = 'SELECT * FROM bustrip INNER JOIN books ON bustrip.tripid = books.tripid';
			

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are inputting the correct commands");
			}
			//Prints the information
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['tripid'] ."</td>";
				echo "<td>" . $row['licenseplate'] ."</td>";
				echo "<td>" . $row['startdate'] ."</td>";
                echo "<td>" . $row['enddate'] ."</td>";
                echo "<td>" . $row['country'] ."</td>";
                echo "<td>" . $row['tripname'] ."</td>";
                echo "<td>" . $row['passportnum'] ."</td>";
                echo "<td>" . $row['priceoftrip'] ."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>

    <div>
        <form action="printbookingtrip.php" method="post">
            <!--Creates textbox to let user input new booking-->
            <p>Enter an existing passport number you want to create a new booking for:</p> <input type="text" name="passportnum"/>
            <p>Enter an existing trip id you want to create a new booking for:</p> <input type="text" name="tripid"/>
            <p>Enter a new price for the new booking:</p> <input type="text" name="priceoftrip"/>
            <p> </p> 
            <input type="submit" name="sortingfieldsubmit" value="Submit">
        </form>
	</div>

    <div>
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to return back to the homepage</h3>
        <input type="submit" name="returnhome" value="Return Home">
    </div>
</body>