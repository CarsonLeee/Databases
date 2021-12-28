<!--Used for question 1, prints out the data for question 1-->

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Bus Trip Data</title>
</head>

<body>

	<div class="boxed">
		<?php	
			include "connectdb.php";
		?>
		<h1>Details of the available bus trips</h1>
		
		<table border ="1"> 
		<tr>
		<th>Trip ID</th>
		<th>License Plate</th>
		<th>Start Date</th>
		<th>End Date</th>
		<th>Country</th>
		<th>Trip Name</th>
		<th>URL Image</th>
		</tr>

		<?php
			//Sets the variables that we need to use 
			$sortingcategory = $_POST["sortingcategory"];
			$sortingorder = $_POST["sortingorder"];
			$query = "SELECT * FROM bustrip ORDER BY" . " " . $sortingcategory . " " . $sortingorder;
			
			//If statement to check if the query worked and data was accessed
			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Query was not obtained, make sure you are completing all the fields required");
			}

			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row["tripid"] ."</td>";
				echo "<td>" . $row["licenseplate"] . "</td>";
				echo "<td>" . $row["startdate"] . "</td>";
				echo "<td>" . $row["enddate"] . "</td>";
				echo "<td>" . $row["country"] . "</td>";
				echo "<td>" . $row["tripname"] . "</td>";
				echo "<td>" . '<img src="' . $row["urlmage"] . '" height="60" width="60">' . "</td>";
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