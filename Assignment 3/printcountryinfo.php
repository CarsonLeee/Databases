<!--Used to print the bus trip information for question 5-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Bus Trips with no Bookings</title>
</head>

<body>
	<div class="boxed">
		<h1>List of bus trips</h1>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Trip ID</th>
        <th>Bus License Plate</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Country</th>
        <th>Trip Name</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>

		<?php
			$countryname = $_POST["countryname"];
			$query = "SELECT * FROM bustrip WHERE country=" . "'" . $countryname . "'";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are entering a proper input");
			}
			//Prints the results of the country that the user inputted
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['tripid'] ."</td>";
				echo "<td>" . $row['licenseplate'] ."</td>";
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
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to return back to the homepage</h3>
        <input type="submit" name="sortingfieldsubmit" value="Return Home">
    </div>
</body>