<!--Used to get the country for question 5-->

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

	<div class="boxed">
		<h2>Available Countries to Select From</h2>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Country</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>
	
		<?php
			$query = "SELECT DISTINCT country FROM bustrip";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("We couldn't get your query for some reason! Make sure you chose something for both options!");
			}
			//Prints the information
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['country'] ."</td>";
				echo "</tr>";
			}
		?>
		</table>
	</div>

    <div class="Subtitle">
        <form action="printcountryinfo.php" method="post">
            <!--Creates textbox to let user input which country they want to see the data of-->
            <p>Enter the country you wish to see the bus trip data:</p> <input type="text" name="countryname"/>
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