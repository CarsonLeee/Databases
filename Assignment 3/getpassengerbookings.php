<!--Used to get the passenger passport number for question 8-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Passengers who have a Booked Trip</title>
</head>

<body>
    <div class="Title">
        <h1><span>Passenger Booking Data</span></h1>
    </div>

	<div class="boxed">
	<h2>Available Passengers to Select from</h2>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Passenger ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Passport Num</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>
	
		<?php
			$query = "SELECT * FROM passenger";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are inputting the correct commands");
			}
			//Prints the information
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['passengerid'] ."</td>";
				echo "<td>" . $row['firstname'] ."</td>";
				echo "<td>" . $row['lastname'] ."</td>";
				echo "<td>" . $row['passportnum'] ."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>

    <div class="Subtitle">
        <form action="printpassengerbookings.php" method="post">
            <!--Creates textbox to let user input which passenger they want to see the information on-->
            <p>Enter the passenger passport number you wish to get the booking information on:</p> <input type="text" name="passportnum"/>
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