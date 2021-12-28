<!--Used for question 3, Gets the booking the user wants to delete-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Delete Trip</title>
</head>

<body>
    <div class="Title">
        <h1><span>Booking data</span></h1>
    </div>

	<div class="boxed">
	<h2>Available trips to delete with no bookings:</h2>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Trip ID</th>
		<th>Start Date</th>
        <th>End Date</th>
        <th>Country</th>
        <th>Trip Name</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>
	
		<?php
			$query = "SELECT * FROM bustrip WHERE bustrip.tripid NOT IN(SELECT books.tripid FROM books);";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are inputting the correct commands");
			}
			//Prints the information
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['tripid'] ."</td>";
				echo "<td>" . $row['startdate'] ."</td>";
				echo "<td>" . $row['enddate'] ."</td>";
                echo "<td>" . $row['country'] ."</td>";
                echo "<td>" . $row['tripname'] ."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>

    <div>
        <form action="printdeletetrip.php" method="post">
            <!--Creates textbox to let user input which passenger they want to see the information on-->
            <p>Enter the trip id for the trip you wish to delete:</p> <input type="text" name="tripid"/>
            <p> </p> 
            <input type="submit" name="sortingfieldsubmit" value="Submit">
        </form>
	</div>

    <div>
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to return back to the homepage, this is your only chance to leave unless you choose to delete a trip</h3>
        <input type="submit" name="sortingfieldsubmit" value="Return Home">
    </div>
</body>