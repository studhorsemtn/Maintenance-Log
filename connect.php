<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => equipment_info
        $conn = mysqli_connect("localhost", "root", "", "equipment_info");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }


        // Taking all 7 values from the form data(input)
        $DateTime =  $_REQUEST['datetime'];
        $Equipment = $_REQUEST['Equipment'];
        $Milage =  $_REQUEST['milage'];
        $Hours = $_REQUEST['hours'];
        $Mechanic = $_REQUEST['mechanic'];
        $WorkPerformed = $_REQUEST['description'];
        $PartsUsed = $_REQUEST['Parts'];

        // Performing insert query execution
        // here our table name is maintenancelog
        $sql = "INSERT INTO maintenancelog VALUES ('$Id', '$DateTime', '$Equipment', '$Milage', '$Hours', '$Mechanic', '$WorkPerformed', '$PartsUsed')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$DateTime\n $Equipment\n "
                . "$Milage\n $Hours\n $Mechanic\n $WorkPerformed\n $PartsUsed");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>