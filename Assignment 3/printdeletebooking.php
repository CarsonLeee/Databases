<!--Used for question 9, deletes the booking the user wants to delete-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Delete Bookings</title>
</head>

<body>
	<div class = "boxed">

		<?php	
			include "connectdb.php";
		?>

		<?php
			$passportnum = $_POST["passportnum"];
            $tripid = $_POST["tripid"];
            $query = "DELETE FROM books WHERE books.passportnum=" . "'" . $passportnum . "' AND books.tripid=" . $tripid;

			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Query was not obtained, make sure you have completed all the requirements");
			}
            
            echo "Booking deleted";
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