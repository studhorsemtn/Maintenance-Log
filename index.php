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
    <title>Maintenance Form</title>
</head>

<body>

    <!-- Begin Navbar -->

    <nav class="navbar navbar-expand-xxl navbar-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand rounded-circle" href="index.php"> <img src="\maintenance_log\Images\logo.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vehicleInfo.php">Vehicle Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reports.php">Reports</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Begin Header -->

    <header class="row" id="top">
        <h1 id="company"><img src="\maintenance_log\Images\logo.png" alt="Logo"></h1>
        <hr class="blue">
        <h3 class="title">Truck Maintenance Log</h3>
        <br>
        <br>
        <h4 class="title">All Fields with an Asterisk&nbsp;<span class="asterisk">&nbsp;&#42</span> are Required</h4>
    </header>

    <!-- End of Header -->

    <!-- Begin Form -->

    <form action="connect.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="datetime" class="form-label"><i class="fa-solid fa-calendar-days"></i>Date&nbsp;&#38&nbsp;Time:&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="datetime-local" class="form-control" name="datetime" id="datetime" required>
                </div>
                <div class="col">
                    <label for="equipment" class="form-label"><i class="fa-solid fa-truck-monster"></i>Equipment&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <select name="Equipment" class="form-control" id="equipment" required>
                        <optgroup label="Trucks">
                            <option value="75">75</option>
                            <option value="21">21</option>
                        </optgroup>
                        <optgroup label="Mixers">
                            <option value="26">26</option>
                            <option value="95">95</option>
                        </optgroup>
                        <optgroup label="Pickups">
                            <option value="Ford2wd">Ford 2WD</option>
                            <option value="Ford4wd">Ford 4WD</option>
                        </optgroup>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="milage" class="form-label"><i class="fa-solid fa-gauge"></i>Milage:&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="number" class="form-control" name="milage" id="milage" required>
                </div>
                <div class="col">
                    <label for="hours" class="form-label"><i class="fa-regular fa-clock"></i>Hours:&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="number" class="form-control" name="hours" id="hours" required>
                </div>

            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label for="mechanic" class="form-label"><i class="fa-solid fa-wrench"></i>Mechanic&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="text" class="form-control" name="mechanic" id="mechanic" required>
                </div>
                <div class="col-4"></div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="parts" class="form-label"><i class="fa-solid fa-gear"></i>Parts&nbsp;Used:&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <textarea name="Parts" class="form-control" id="parts" cols="30" rows="5" wrap="hard" required></textarea>
                </div>
                <div class="col">
                    <label for="description" class="form-label"><i class="fa-solid fa-fan"></i>Work&nbsp;Performed&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="5" wrap="hard" required></textarea>
                </div>

            </div>
            <div class="row" id="sub">
                <div class="col-4"></div>
                <div class="col-4" id="subButton">
                    <button type="submit"  name="Submit" class="btn btn-primary rounded-circle">Submit</button>
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