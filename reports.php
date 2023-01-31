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
    <title>Document</title>
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vehicleInfo.php">Vehicle Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reports</a>
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

    <form action="reports_connect.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col">
                    <label for="equipment" class="form-label">&nbsp;<i class="fa-solid fa-truck-monster">&nbsp;</i>&nbsp;Equipment&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="text" class="form-control" name="equipment" id="equipment" required>
                </div>
                <div class="col">
                    <label for="startdate" class="form-label"><i class="fa-solid fa-calendar-days"></i>Start&nbsp;Date&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="datetime-local" class="form-control" name="startdate" id="startdate" required>
                </div>
                <div class="col">
                    <label for="endDate" class="form-label"><i class="fa-solid fa-calendar-days"></i>Endt&nbsp;Date&nbsp;<span class="asterisk">&nbsp;&#42</span></label>
                    <input type="datetime-local" class="form-control" name="endDate" id="endDate" required>
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








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>