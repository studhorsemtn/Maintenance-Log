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

        $DateTime = $Equipment = $Milage = $Hours = $Mechanic = $WorkPerformed = $PartsUsed = "";

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


        if (isset($_POST['Submit'])) {
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
            $sql = "INSERT INTO maintenancelog (DateTime, Equipment, Milage, Hours, Mechanic, WorkPerformed, PartsUsed) VALUES ('$DateTime', '$Equipment', '$Milage', '$Hours', '$Mechanic', '$WorkPerformed', '$PartsUsed')";
            if (mysqli_query($conn, $sql)) {
                header('url=index.php');
                exit;
                
                
            } else {
                echo "ERROR: Hush! Sorry $sql. "
                    . mysqli_error($conn);
            }

           
        }










        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>