<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <Center>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

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
            // Taking all values from the form data(input)
            $equipment = $_REQUEST['Equipment'];
            $year_made = $_REQUEST['Year'];
            $make = $_REQUEST['Make'];
            $model = $_REQUEST['Model'];
            $hyd_oil_type = $_REQUEST['hydOil'];
            $hyd_oil_cap = $_REQUEST['hydCap'];
            $vin = $_REQUEST['vin'];
            $belt1 = $_REQUEST['belt1'];
            $belt2 = $_REQUEST['belt2'];
            $eng_make = $_REQUEST['emake'];
            $eng_model = $_REQUEST['emodel'];
            $eng_serial = $_REQUEST['serial'];
            $eng_arrangement = $_REQUEST['arrange'];
            $eng_oil_cap = $_REQUEST['oilCap'];
            $eng_oil_type = $_REQUEST['oilType'];
            $eng_misc1 = $_REQUEST['emisc1'];
            $eng_misc2 = $_REQUEST['emisc2'];
            $eng_oil_filter1 = $_REQUEST['oilF1'];
            $eng_oil_filter2 = $_REQUEST['oilF2'];
            $coolant_filter = $_REQUEST['coolant'];
            $trans_filter = $_REQUEST['transFilter'];
            $hyd_filter1 = $_REQUEST['hydFil1'];
            $hyd_filter2 = $_REQUEST['hydFil2'];
            $power_steering_filter = $_REQUEST['powSteer'];
            $fuel_filter1 = $_REQUEST['fuel1'];
            $fuel_filter2 = $_REQUEST['fuel2'];
            $cab_filter1 = $_REQUEST['cabAir1'];
            $cab_filter2 = $_REQUEST['cabAir2'];
            $air_filter1 = $_REQUEST['Air1'];
            $air_filter2 = $_REQUEST['Air2'];
            $trans_make = $_REQUEST['transmake'];
            $trans_model = $_REQUEST['transmodel'];
            $trans_serial = $_REQUEST['transSer'];
            $trans_oil_cap = $_REQUEST['transCap'];
            $trans_oil_type = $_REQUEST['transType'];
            $steer_make = $_REQUEST['steermake'];
            $steer_model = $_REQUEST['steermodel'];
            $steer_ratio = $_REQUEST['steerRatio'];
            $steer_oil_type1 = $_REQUEST['steerOil'];
            $steer_oil_cap1 = $_REQUEST['steerOilCap'];
            $steer_oil_type2 = $_REQUEST['steerOil2'];
            $steer_oil_cap2 = $_REQUEST['steerOilCap2'];
            $drive_make = $_REQUEST['drivemake'];
            $drive_model = $_REQUEST['drivemodel'];
            $drive_ratio = $_REQUEST['driveRatio'];
            $drive_oil1 = $_REQUEST['driveOil'];
            $drive_oil_cap1 = $_REQUEST['driveOilCap'];
            $drive_oil2 = $_REQUEST['driveOil2'];
            $drive_oil_cap2 = $_REQUEST['driveOilCap2'];
            $steer_size = $_REQUEST['steerSize'];
            $pusher1_size = $_REQUEST['pusher1'];
            $pusher2_size = $_REQUEST['pusher2'];
            $drive_size = $_REQUEST['driveTire'];
            $tag1_size = $_REQUEST['tag1'];
            $tag2_size = $_REQUEST['tag2'];
            $pusher1_up = $_REQUEST['push1Up'];
            $pusher1_down = $_REQUEST['push1Down'];
            $pusher2_up = $_REQUEST['push2Up'];
            $pusher2_down = $_REQUEST['push2Down'];
            $tag1_up = $_REQUEST['tagUp1'];
            $tag1_down = $_REQUEST['tagDown1'];
            $tag2_up = $_REQUEST['tagUp2'];
            $tag2_down = $_REQUEST['tagDown2'];
            $drive_axle = $_REQUEST['drive'];











            // Performing insert query execution
            // here our table name is fleet_info
            $sql = $conn->prepare("INSERT INTO fleet_info (equipment, year_made, make, model, hyd_oil_type, hyd_oil_cap, vin, belt1,
    belt2, eng_make, eng_model, eng_serial, eng_arrangement, eng_oil_cap, eng_oil_type, eng_misc1, eng_misc2,
    eng_oil_filter1, eng_oil_filter2, coolant_filter, trans_filter, hyd_filter1, hyd_filter2, power_steering_filter,
    fuel_filter1, fuel_filter2,  cab_filter1, cab_filter2, air_filter1, air_filter2, trans_make, trans_model,
    trans_serial, trans_oil_cap, trans_oil_type, steer_make, steer_model,  steer_ratio, steer_oil_type1, steer_oil_cap1,
    steer_oil_type2, steer_oil_cap2, drive_make, drive_model, drive_ratio, drive_oil1, drive_oil_cap1, drive_oil2, drive_oil_cap2, steer_size,
    pusher1_size, pusher2_size, drive_size, tag1_size, tag2_size, pusher1_up, pusher1_down, pusher2_up, pusher2_down, tag1_up, tag1_down,
    tag2_up, tag2_down, drive_axle) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

            $sql->bind_param(
                "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
                $equipment,
                $year_made,
                $make,
                $model,
                $hyd_oil_type,
                $hyd_oil_cap,
                $vin,
                $belt1,
                $belt2,
                $eng_make,
                $eng_model,
                $eng_serial,
                $eng_arrangement,
                $eng_oil_cap,
                $eng_oil_type,
                $eng_misc1,
                $eng_misc2,
                $eng_oil_filter1,
                $eng_oil_filter2,
                $coolant_filter,
                $trans_filter,
                $hyd_filter1,
                $hyd_filter2,
                $power_steering_filter,
                $fuel_filter1,
                $fuel_filter2,
                $cab_filter1,
                $cab_filter2,
                $air_filter1,
                $air_filter2,
                $trans_make,
                $trans_model,
                $trans_serial,
                $trans_oil_cap,
                $trans_oil_type,
                $steer_make,
                $steer_model,
                $steer_ratio,
                $steer_oil_type1,
                $steer_oil_cap1,
                $steer_oil_type2,
                $steer_oil_cap2,
                $drive_make,
                $drive_model,
                $drive_ratio,
                $drive_oil1,
                $drive_oil_cap1,
                $drive_oil2,
                $drive_oil_cap2,
                $steer_size,
                $pusher1_size,
                $pusher2_size,
                $drive_size,
                $tag1_size,
                $tag2_size,
                $pusher1_up,
                $pusher1_down,
                $pusher2_up,
                $pusher2_down,
                $tag1_up,
                $tag1_down,
                $tag2_up,
                $tag2_down,
                $drive_axle
            );

            $sql->execute();

            if (
                $sql->execute()
            ) {
                echo "<h1>Data Successfully Saved</h1>";
                header('location: index.php');
                exit();
            } else {
                echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
            }

            }

           
            

        // Close connection
        $sql->close();
        $conn->close();
        ?>

    </Center>







</body>

</html>




















<!-- CREATE TABLE fleet_info (
    equipment varchar(50),
    year_made year(4),
    make varchar(25),
    model varchar(25),
    hyd_oil_type varchar(20),
    hyd_oil_cap varchar(20),
    vin varchar(30),
    belt1 varchar(30),
    belt2 varchar(30),
    eng_make varchar(30),
    eng_model varchar(30),
    eng_serial varchar(25),
    eng_arrangement varchar(25),
    eng_oil_cap varchar(20),
    eng_oil_type varchar(20),
    eng_misc1 text(300),
    eng_misc2 text(300),
    eng_oil_filter1 varchar(30),
    eng_oil_filter2 varchar(30),
    coolant_filter varchar(30),
    trans_filter varchar(30),
    hyd_filter1 varchar(30),
    hyd_filter2 varchar(30),
    power_steering_filter varchar(30),
    fuel_filter1 varchar(30),
    fuel_filter2 varchar(30),
    cab_filter1 varchar(30),
    cab_filter2 varchar(30),
    air_filter1 varchar(30),
    air_filter2 varchar(30),
    trans_make varchar(30),
    trans_model varchar(30),
    trans_serial varchar(30),
    trans_oil_cap varchar(20),
    trans_oil_type varchar(20),
    steer_make varchar(30),
    steer_model varchar(30),
    steer_ratio varchar(30),
    steer_oil_type1 varchar(30),
    steer_oil_cap1 varchar(20),
    steer_oil_type2 varchar(30),
    steer_oil_cap2 varchar(20),
    steer_size varchar(30),
    pusher1_size varchar(30),
    pusher2_size varchar(30),
    drive_size varchar(30),
    tag1_size varchar(30),
    tag2_size varchar(30),
    pusher1_up varchar(30),
    pusher1_down varchar(30),
    pusher2_up varchar(30),
    pusher2_down varchar(30),
    tag1_up varchar(30),
    tag1_down varchar(30),
    tag2_up varchar(30),
    tag2_down varchar(30),
    drive_axle varchar(30)
); -->