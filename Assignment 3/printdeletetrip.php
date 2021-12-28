<!--Used for question 3, Deletes the trip -->

<!DOCTYPE html>
<htm
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Delete Trip</title>
</head>

<body>
    <div class = "boxed">
        <?php
			include "connectdb.php";
		?>

        <!--Creates button to confirm deletion-->
        <?php
            $tripid = $_POST["tripid"];
            $query = "DELETE FROM bustrip WHERE bustrip.tripid=" . "'" . $tripid . "'";

            $result=mysqli_query($connection,$query);
            if (!$result) {
                die("Query was not obtained, make sure you have completed all the requirements");
            }
            echo "Trip deleted";
		?>
	</div>

	<div>
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to exit and stop the deletion</h3>
        <input type="submit" name="sortingfieldsubmit" value="Return Home">
    </div>

</body>