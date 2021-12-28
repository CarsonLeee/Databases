<!--Used for question 4, inserts the new trip into the database-->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Insert Trip</title>
</head>

<body>
    <div class = "boxed">
        <?php
            include "connectdb.php";
        ?>
        <!--Inserts the new values inside the trip-->
        <?php
            $tripid = $_POST["tripid"];
            $licenseplate = $_POST["licenseplate"];
            $startdate = $_POST["startdate"];
            $enddate = $_POST["enddate"];
            $country = $_POST["country"];
            $tripname = $_POST["tripname"];
            $urlmage = $_POST["urlmage"];
            echo($tripid);
            echo($licenseplate);
            echo($startdate);
            echo($enddate);
            echo($country);
            echo($tripname);
            echo($urlmage);

            $query = 'INSERT INTO bustrip VALUES("' . $tripid . '","' . $licenseplate . '","'  . $startdate . '","' . $enddate . '","' . $country . '","' . $tripname . '","' . $urlmage . '")';
            $result = mysqli_query($connection, $query);
            if (!mysqli_query($connection, $query)) {
                die("Error: insert failed" . mysqli_error($connection));
            }
            echo("Inserted");
		?>
	</div>

	<div>
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to exit and return home</h3>
        <input type="submit" name="returnhome" value="Return Home">
    </div>

</body>