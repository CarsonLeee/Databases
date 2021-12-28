<!--Used for question 4, gets the options that the user wants to use to be added to a new trip -->

<!DOCTYPE html>
<html>
	
<head>
<link rel="stylesheet" type="text/css" href="index2.css">
<meta charset="utf-8">
<title>Adding a New Trip into the Database</title>
</head>

<body>
    <div class="Title">
        <h1><span>Adding a New Trip into the Database</span></h1>
    </div>

    <div>
        <h2>These are the current bookings you have:</h2>
        <!-- creates table -->
        <table border ="4">
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
            include "connectdb.php";
        ?>

        <!--Shows users the current database-->
        <?php
            $query = "SELECT * FROM bustrip";

            $result=mysqli_query($connection,$query);
            if (!$result) {
                die("Query was not obtained, make sure you have completed all the requirements");
            }
            //Prints the information in the table
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["tripid"] ."</td>";
                echo "<td>" . $row["licenseplate"] ."</td>";
                echo "<td>" . $row["startdate"] ."</td>";
                echo "<td>" . $row["enddate"] ."</td>";
                echo "<td>" . $row["country"] ."</td>";
                echo "<td>" . $row["tripname"] ."</td>";
                echo "<td>" . '<img src="' . $row["urlmage"] . '" height="60" width="60">' . "</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </div>

    <div>
        <form action="printnewtrip.php" method="post">
            <h3>Click the button at the end of the page after you input the new information for the trip you wish to add:</h3>
            <!--Creates radio buttons and text boxes to allow the user to input new data-->
            <p>Enter a new trip ID:</p> <input type="text" name="tripid"/>
            <p>Select one of tthe license plates:</p>
            <input type="radio" name="licenseplate" value="CAND123">CAND123<br>
            <input type="radio" name="licenseplate" value="UWO1122">UWO1122<br>
            <input type="radio" name="licenseplate" value="VAN1111">VAN1111<br>
            <input type="radio" name="licenseplate" value="VAN2222">VAN2222<br>
            <input type="radio" name="licenseplate" value="UWO3311">UWO3311<br>
            <input type="radio" name="licenseplate" value="TAXI111">TAXI111<br>
            <input type="radio" name="licenseplate" value="TAXI222">TAXI222<br>
            <input type="radio" name="licenseplate" value="TAXI333">TAXI333<br>
            <p>Enter a new start date with the format (year-month-date):</p> <input type="text" name="startdate"/>
            <p>Enter a new end date with the format (year-month-date):</p> <input type="text" name="enddate"/>
            <p>Enter a new country:</p> <input type="text" name="country"/>
            <p>Enter a new trip name:</p> <input type="text" name="tripname"/>
            <p>Enter a new URL image:</p> <input type="text" name="urlmage" id="urlmage">
            <p></p>
            <input type="submit" name="addnewtrip" value="Insert the data">
            
        </form>
	</div>

    <div>
        <form action="index2.html" method="post">
        <!--Creates button to allow user to return back to the homepage-->
        <h3>Click the button to return back to the homepage</h3>
        <input type="submit" name="returnhome" value="Return Home">
    </div>
</body>