<!--Used for question 2, Prints the table that the user wants to change the data of and the user needs to input the new data and choose which data to replace with-->

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

		<?php
			$tripid = $_POST["tripid"];
			$tripname = $_POST["tripname"];
			$startdate = $_POST["startdate"];
			$enddate = $_POST["enddate"];
            $urlmage = $_POST["urlmage"];

			$query = "UPDATE bustrip SET tripname='$tripname', startdate='$startdate', enddate='$enddate', urlmage='$urlmage' WHERE tripid='$tripid'";
			
			$result=mysqli_query($connection,$query);
			if (!$result) {
				die("Query was not obtained, make sure you are completing all the fields required");
			}

			echo("Updated successfully");
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