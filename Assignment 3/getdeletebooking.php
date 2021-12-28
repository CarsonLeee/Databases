<!--Used for question 9, Gets the booking the user wants to delete-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Delete Bookings</title>
</head>

<body>
    <div class="Title">
        <h1><span>Booking data</span></h1>
    </div>

	<div class="boxed">
	<h2>Available bookings to delete:</h2>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Passport Num</th>
		<th>Trip ID</th>
		<th>Price of Trip</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>
	
		<?php
			$query = "SELECT * FROM books";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are inputting the correct commands");
			}
			//Prints the information
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['passportnum'] ."</td>";
				echo "<td>" . $row['tripid'] ."</td>";
				echo "<td>" . $row['priceoftrip'] ."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>

    <div>
        <form action="printdeletebooking.php" method="post">
            <!--Creates textbox to let user input which passenger they want to see the information on-->
            <p>Enter the passport number for the trip you wish to delete:</p> <input type="text" name="passportnum"/>
            <p>Enter the trip id for the same trip you wish to delete:</p> <input type="text" name="tripid"/>
            <p> </p> 
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