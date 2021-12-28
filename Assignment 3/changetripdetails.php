<!--Used for question 2, gets the details to change the trip name, start date or end date and the image URL-->

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
		<th>Trip Name</th>
		<th>Start Date</th>
        <th>End Date</th>
        <th>Image URL</th>
		</tr>

		<?php
			include "connectdb.php";
		?>

		<?php
			$query = "SELECT * FROM bustrip";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are inputting the correct commands");
			}
			//Prints the information
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['tripid'] ."</td>";
				echo "<td>" . $row['tripname'] ."</td>";
				echo "<td>" . $row['startdate'] ."</td>";
                echo "<td>" . $row['enddate'] ."</td>";
				echo "<td>" . '<img src="' . $row["urlmage"] . '" height="60" width="60">' . "</td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>

    <div>
        <form action="printtripdetails.php" method="post">
            <!--Creates textbox to let user input new booking-->
			<p>Enter the trip ID you want to changed:</p> <input type="text" name="tripid"/>
			<p>Enter the new trip name for the trip ID selected:</p> <input type="text" name="tripname"/>
			<p>Enter the new start date for the trip ID selected (Year-Month-Day):</p> <input type="text" name="startdate"/>
			<p>Enter the new end date for the trip ID selected (Year-Month-Day):</p> <input type="text" name="enddate"/>
			<p>Upload an image for the new trip:</p><input type="text" name="urlmage" id="file"><br>
			<p></p>
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