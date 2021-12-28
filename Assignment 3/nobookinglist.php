<!--Used for question 10, prints bus trips with no bookings-->

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
		<th>Trip Name</th>
		</tr>

		<?php	
			include "connectdb.php";
		?>

		<?php
			$query = "SELECT bustrip.tripname FROM bustrip WHERE bustrip.tripid NOT IN(SELECT books.tripid FROM books)";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Query was not obtained");
			}
			// get the resulting table and print all results
			$result = mysqli_query($connection, $query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo "<tr>";
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
        <input type="submit" name="returnhome" value="Return Home">
    </div>
</body>