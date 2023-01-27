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
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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
            $stmt = $conn->prepare("INSERT INTO maintenancelog (DateTime, Equipment, Milage, Hours, Mechanic, WorkPerformed, PartsUsed) 
            VALUES (?,?,?,?,?,?,?)");

            $stmt->bind_param('sssssss', $DateTime, $Equipment, $Milage, $Hours, $Mechanic, $WorkPerformed, $PartsUsed);

            $stmt->execute();

            $sql = "Select * from maintenancelog where Equipment=?";
            $stmt2 = $conn->prepare($sql);
            $stmt2->bind_param("s", $Equipment);
            $stmt2->execute();

            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()); {
                echo $row['Equipment'];
            }


            echo "<h1>Data Successfully Saved</h1>";
            header("refresh:10; url=index.php");
            exit();
        }

        // Close connection
        $stmt->close();
        $conn->close();
        ?>
    </center>
</body>

</html>