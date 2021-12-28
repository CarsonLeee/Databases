<!--Used for question 6, inserts the new booking trip the user wants to add-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Create Bookings</title>
</head>

<body>
	<div class = "boxed">
		<?php	
			include "connectdb.php";
		?>
		<!--Inserts value inside the books table-->
		<?php
			$passportnum = $_POST["passportnum"];
            $tripid = $_POST["tripid"];
            $priceoftrip = $_POST["priceoftrip"];
            $query = "INSERT INTO books VALUES(" . "'" . $passportnum . "','" . $tripid . "','" . $priceoftrip . "')";

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Query was not completed");
			}
            
            echo "The new booking was created";
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