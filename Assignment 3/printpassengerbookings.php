<!--Used to print the passenger bookings information for question 8-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Bus Trips with no Bookings</title>
</head>

<body>
	<div class="boxed">
		<h1>Passenger Bookings</h1>
		<!-- creates table -->
		<table border ="4"> 
		<tr>
		<th>Passport Number</th>
        <th>Trip ID</th>
        <th>Price of Trip</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>

		<?php
			$passportnum = $_POST["passportnum"];
            $query = "SELECT * FROM books WHERE passportnum=" . "'" . $passportnum . "'";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Error, please make sure you are entering a proper input");
			}
			//Prints the results of the country that the user inputted
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
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to return back to the homepage</h3>
        <input type="submit" name="sortingfieldsubmit" value="Return Home">
    </div>
</body>