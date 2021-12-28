<!--Question 7, List all the info about the passengers including passport information in order by last name-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Passenger Information</title>
</head>

<body>
	<div class="boxed">
	<h1>Every passenger in the database:</h1>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Passenger ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Passport Number</th>
		<th>expirydate</th>
		<th>countrycitizenship</th>
		<th>birthdate</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>

		<?php
			$query = "SELECT * FROM passenger INNER JOIN passport ON passenger.passportnum = passport.passportnum ORDER BY passenger.lastname;";
			
			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Query was not obtained");
			}
			// get the resulting table and print all results
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['passengerid'] ."</td>";
				echo "<td>" . $row['firstname'] . "</td>";
				echo "<td>" . $row['lastname'] . "</td>";
				echo "<td>" . $row['passportnum'] . "</td>";
				echo "<td>" . $row['expirydate'] . "</td>";
				echo "<td>" . $row['countrycitizenship'] . "</td>";
				echo "<td>" . $row['birthdate'] . "</td>";
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