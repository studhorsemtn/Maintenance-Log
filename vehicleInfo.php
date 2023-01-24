<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/4dc34d9f3c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="index.css">
  <link rel="icon" href="Images/logo.png" type="image/gif" sizes="16x16">
  <title>Vehicle Information</title>
</head>

<!-- javascript for populating the year form element -->

<script type="text/javascript">
  window.onload = function() {
    //Reference the DropDownList.
    var ddlYears = document.getElementById("year");

    //Determine the Current Year.
    var currentYear = (new Date()).getFullYear();

    //Loop and add the Year values to DropDownList.
    for (var i = 1980; i <= currentYear; i++) {
      var option = document.createElement("OPTION");
      option.innerHTML = i;
      option.value = i;
      ddlYears.appendChild(option);
    }
  };
</script>

<!-- End Javascript -->








<body>

  <!-- Begin Navbar -->
  <nav class="navbar navbar-expand-xxl  navbar-light" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand rounded-pill" href="index.php"> <img src="\maintenance_log\Images\logo.png" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vehicle Information</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <!-- Begin Header -->

  <header class="row" id="top">
    <H1 id="company"><img src="\maintenance_log\Images\logo.png" alt="Logo"></H1>
    <hr class="blue">
    <h2 class="title"> Equipment Information</h2>
    <br>
    <br>
    <h4 class="title">All Fields with an Asterisk&nbsp;<span class="asterisk">&nbsp;&#42</span> are Required</h4>
  </header>

  <!-- End Header -->


  <!-- Begin Form -->
  <form action="fleetInfo.php" method="post">
    <div class="container">



      <!-- Equipment Info -->



      <div class="row">
        <div class="col">
          <label for="equipment" class="form-label">Equipment&nbsp;&#35<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="Equipment" id="equipment" required>
        </div>
        <div class="col">
          <label for="year" class="form-label">Year<span class="asterisk">&nbsp;&#42</span></label>
          <select name="Year" class="form-control" id="year"></select>
        </div>
        <div class="col">
          <label for="Make" class="form-label">Make <span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="Make" id="make" required>
        </div>
        <div class="col">
          <label for="Model" class="form-label">Model <span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="Model" id="model" required>
        </div>
      </div>


      <div class="row">
        <div class="col">
          <label for="hydOil" class="form-label">Hydrolic&nbsp;Oil&nbsp;Type&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="hydOil" id="hydOil" class="form-control" required>
        </div>
        <div class="col">
          <label for="hydCap" class="form-label">Hydrolic&nbsp;Oil&nbsp;Capacity&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="hydCap" id="hydCap" class="form-control" required>
        </div>
        <div class="col">
          <label for="Vin" class="form-label">Vin&nbsp;&#35 <span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="vin" id="vin" required>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <label for="belt1" class="form-label">Belt&nbsp;&#35&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="belt1" id="belt1" class="form-control" required>
        </div>
        <div class="col">
          <label for="belt2" class="form-label">Belt&nbsp;&#35&nbsp;2&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="belt2" id="belt2" class="form-control" required>
        </div>
      </div>

      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Engine Information</h2>


      <!-- Engine Info -->



      <div class="row">
        <div class="col">
          <label for="EngineMake" class="form-label">Make&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="emake" id="emake" required>
        </div>
        <div class="col">
          <label for="EngineModel" class="form-label">Model&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="emodel" id="emodel" required>
        </div>
        <div class="col">
          <label for="serial" class="form-label">Serial&nbsp;&#35&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="serial" id="serial" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="eArrangement" class="form-label">Engine&nbsp;Arrangement&nbsp;&#35&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="arrange" id="arrange" required>
        </div>
        <div class="col">
          <label for="oilCap" class="form-label">Oil&nbsp;Capacity&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="oilCap" id="oilCap" required>
        </div>
        <div class="col">
          <label for="oilType" class="form-label">Oil&nbsp;Type&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="oilType" id="oilType" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="emisc1" class="form-label">Engine&nbsp;Misc&nbsp;&#35&nbsp;1</label>
          <textarea name="emisc1" class="form-control" id="emisc1" cols="60" rows="5" wrap="hard" required></textarea>
        </div>
        <div class="col">
          <label for="emisc2" class="form-label">Engine&nbsp;Misc&nbsp;&#35&nbsp;2</label>
          <textarea name="emisc2" class="form-control" id="emisc2" cols="60" rows="5" wrap="hard" required></textarea>
        </div>
      </div>



      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Filters</h2>



      <!-- Filters Info -->



      <div class="row">
        <div class="col">
          <label for="oilF1" class="form-label">Engine&nbsp;Oil&nbsp;Filter&nbsp;&#35&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="oilF1" id="oilF1" required>
        </div>
        <div class="col">
          <label for="oilF2" class="form-label">Engine&nbsp;Oil&nbsp;Filter&nbsp;&#35&nbsp;2</label>
          <input type="text" class="form-control" name="oilF2" id="oilF2">
        </div>
        <div class="col">
          <label for="coolant" class="form-label">Coolant&nbsp;Filter</label>
          <input type="text" class="form-control" name="coolant" id="coolant">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="transFilter" class="form-label">Transmisson&nbsp;Filter&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="transFilter" id="transFilter" required>
        </div>
        <div class="col">
          <label for="hydFil1" class="form-label">Hydraulic&nbsp;Filter&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="hdyFil1" id="hydFil1" class="form-control" required>
        </div>
        <div class="col">
          <label for="hydFil2" class="form-label">Hydraulic&nbsp;Filter&nbsp;2</label>
          <input type="text" name="hydFil2" id="hydFil2" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="powSteer" class="form-label">Power&nbsp;Steering&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="powSteer" id="powSteer" class="form-control" required>
        </div>
        <div class="col">
          <label for="fuel1" class="form-label">Fuel&nbsp;Filter&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="fule1" id="fuel1" class="form-control" required>
        </div>
        <div class="col">
          <label for="fuel2" class="form-label">Fuel&nbsp;Filter&nbsp;2</label>
          <input type="text" name="fuel2" id="fuel2" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="cabAir1" class="form-label">Cabin&nbsp;Air&nbsp;1</label>
          <input type="text" name="cabAir1" id="cabAir1" class="form-control">
        </div>
        <div class="col">
          <label for="cabAir2" class="form-label">Cabin&nbsp;Air&nbsp;2</label>
          <input type="text" name="cabAir2" id="cabAir2" class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="Air1" class="form-label">Air&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="Air1" id="Air1" class="form-control" required>
        </div>
        <div class="col">
          <label for="Air2" class="form-label">Air&nbsp;2</label>
          <input type="text" name="Air2" id="Air2" class="form-control">
        </div>
      </div>



      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Transmission Information</h2>

      <!-- Transmission Info -->


      <div class="row">
        <div class="col">
          <label for="transmake" class="form-label">Make&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="transmake" id="transmake" required>
        </div>
        <div class="col">
          <label for="transmodel" class="form-label">Model&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="transmodel" id="transmodel" required>
        </div>
        <div class="col">
          <label for="transSer" class="form-label">Serial&nbsp;&#35&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="transSer" id="transSer" required>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="transCap" class="form-label">Transmission&nbsp;Oil&nbsp;Capacity&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="transCap" id="transCap" class="form-control" required>
        </div>
        <div class="col">
          <label for="transType" class="form-label">Transmission&nbsp;Oil&nbsp;Type&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="transType" id="transType" class="form-control" required>
        </div>
      </div>



      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Axle&nbsp;Information</h2>



      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Steer&nbsp;Axle</h2>


      <!-- Steer Axle Info -->


      <div class="row">
        <div class="col">
          <label for="steermake" class="form-label">Make&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="steermake" id="steermake" required>
        </div>
        <div class="col">
          <label for="steermodel" class="form-label">Model&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="steermodel" id="steermodel" required>
        </div>
        <div class="col">
          <label for="steerRatio" class="form-label">Ratio&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="steerRatio" id="steerRatio" required>
        </div>
      </div>


      <div class="row">
        <div class="col-6">
          <label for="steerOil" class="form-label">Oil&nbsp;Type&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="steerOil" id="steerOil" class="form-control" required>
        </div>
        <div class="col-6">
          <label for="steerOilCap" class="form-label">Oil&nbsp;Capacity&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="steerOilCap" id="steerOilCap" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label for="steerOil2" class="form-label">Oil&nbsp;Type&nbsp;2</label>
          <input type="text" name="steerOil2" id="steerOil2" class="form-control">
        </div>
        <div class="col-6">
          <label for="steerOilCap2" class="form-label">Oil&nbsp;Capacity&nbsp;2</label>
          <input type="text" name="steerOilCap2" id="steerOilCap2" class="form-control">
        </div>
      </div>


      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Drive&nbsp;Axle</h2>


      <!-- Drive Axle Info -->



      <div class="row">
        <div class="col">
          <label for="drivemake" class="form-label">Make&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="drivemake" id="drivemake" required>
        </div>
        <div class="col">
          <label for="drivemodel" class="form-label">Model&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="drivemodel" id="drivemodel" required>
        </div>
        <div class="col">
          <label for="driveRatio" class="form-label">Ratio&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="driveRatio" id="driveRatio" required>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label for="driveOil" class="form-label">Oil&nbsp;Type&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="driveOil" id="driveOil" class="form-control" required>
        </div>
        <div class="col-6">
          <label for="driveOilCap" class="form-label">Oil&nbsp;Capacity&nbsp;1&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" name="driveOilCap" id="driveOilCap" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <label for="driveOil2" class="form-label">Oil&nbsp;Type&nbsp;2</label>
          <input type="text" name="driveOil2" id="driveOil2" class="form-control">
        </div>
        <div class="col-6">
          <label for="driveOilCap2" class="form-label">Oil&nbsp;Capacity&nbsp;2</label>
          <input type="text" name="driveOilCap2" id="driveOilCap2" class="form-control">
        </div>
      </div>


      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Tire Information</h2>


      <!-- Tire Info -->



      <div class="row">
        <div class="col">
          <label for="steerSize" class="form-label">Steer&nbsp;Size</label>
          <input type="text" class="form-control" name="steerSize" id="steerSize" required>
        </div>
        <div class="col">
          <label for="pusher1" class="form-label">Pusher&nbsp;&#35&nbsp;1&nbsp;Size&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="pusher1" id="pusher1" required>
        </div>
        <div class="col">
          <label for="pusher2" class="form-label">Pusher&nbsp;&#35&nbsp;2&nbsp;Size</label>
          <input type="text" class="form-control" name="pusher2" id="pusher2">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="driveTire" class="form-label">Drive&nbsp;Size&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="driveTire" id="driveTire" required>
        </div>
        <div class="col">
          <label for="tag1" class="form-label">Tag&nbsp;&#35&nbsp;1&nbsp;Size&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
          <input type="text" class="form-control" name="tag1" id="tag1" required>
        </div>
        <div class="col">
          <label for="tag2" class="form-label">Tag&nbsp;&#35&nbsp;2&nbsp;Size</label>
          <input type="text" class="form-control" name="tag2" id="tag2">
        </div>
      </div>



      <br>
      <br>
      <hr class="blue">
      <h2 class="title">Air Bags</h2>



      <!-- Air Bag Info -->



      <div class="row">
        <div class="col">
          <label for="push1Up" class="form-label">Pusher&nbsp;1&nbsp;Up&nbsp;&#35</label>
          <input type="text" class="form-control" name="push1Up" id="push1Up">
        </div>
        <div class="col"><label for="push1Down" class="form-label">Pusher&nbsp;1&nbsp;Down&nbsp;&#35</label>
          <input type="text" class="form-control" name="push1Down" id="push1Down">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="push2Up" class="form-label">Pusher&nbsp;2&nbsp;Up&nbsp;&#35</label>
          <input type="text" class="form-control" name="push2Up" id="push2Up">
        </div>
        <div class="col">
          <label for="push2Down" class="form-label">Pusher&nbsp;2&nbsp;Down&nbsp;&#35</label>
          <input type="text" class="form-control" name="push2Down" id="push2Down">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="tagUp1" class="form-label">Tag&nbsp;1&nbsp;Up&nbsp;&#35</label>
          <input type="text" class="form-control" name="tagUp1" id="tagUp1">
        </div>
        <div class="col">
          <label for="tagDown1" class="form-label">Tag&nbsp;1&nbsp;Down&nbsp;&#35</label>
          <input type="text" class="form-control" name="tagDown1" id="tagDown1">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="tagUp2" class="form-label">Tag&nbsp;2&nbsp;Up&nbsp;&#35</label>
          <input type="text" class="form-control" name="tagUp2" id="tagUp2">
        </div>
        <div class="col">
          <label for="tagDown2" class="form-label">Tag&nbsp;2&nbsp;Down&nbsp;&#35</label>
          <input type="text" class="form-control" name="tagDown2" id="tagDown2">
        </div>
      </div>
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
          <label for="drive" class="form-label">Drive&nbsp;Axel&nbsp;&#35</label>
          <input type="text" class="form-control" name="drive" id="drive">
        </div>
        <div class="col-4"></div>
      </div>
      <div class="row" id="sub">
        <div class="col-4"></div>
        <div class="col-4" id="subButton">
          <button type="submit" name="Submit" class="btn btn-primary rounded-circle">Submit</button>
        </div>
        <div class="col-4"></div>
      </div>
    </div>
  </form>


  <!-- End Form -->














  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>