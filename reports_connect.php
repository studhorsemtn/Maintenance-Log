<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="Images/logo.png" type="image/gif" sizes="16x16">
    <title>Reports</title>
</head>

<body>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "equipment_info");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $sql = "SELECT * FROM maintenancelog where DateTime  BETWEEN '2023-1-1' AND '2023-1-05'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='report'><tr><th>Date</th><th>Equipment</th><th>Milage</th><th>Hours</th><th>Mechanic</th><th>Work Performed</th>
        <th>Parts Used</tr>";       
        
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["DateTime"] . "</td><td>" . $row["Equipment"] . "</td><td>" . $row["Milage"] . "</td><td>" . $row["Hours"]
                . "</td><td>" . $row["Mechanic"] . "</td><td>" . $row["WorkPerformed"] . "</td><td>" . $row["PartsUsed"] . "</td></tr> ";
        }        
        echo "</table>";
       
    } else {
        echo "0 Results";
    }    

    $conn->close();


    ?>



</body>

</html>