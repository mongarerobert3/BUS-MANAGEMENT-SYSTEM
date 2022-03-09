
<?php

session_start();
$_SESSION;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>General Login</title>

    <!--start of bootstrap 4 cdn-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!--End of bootstrap 4 cdn-->



    <!--start of bootstrap 5 cdn-->

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--End of bootstrap 5 cdn-->

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<!--     local css file-->
    <link href="NiceAdmin/assets/css/style.css" rel="stylesheet">


    </head>
<body>

<header id="header">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="index.html"><span>COUNTRY BUS</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html"><img src="assets/img/coach-3206326.png" alt="" class="img-fluid"></a>
        </div>

    </div>
</header><!-- End #header -->
<br><br><br>

<center> <a href="staff_login.php" class="btn btn-info" role="button">Staff </a></button><br><br><br></center>
<center> <a href="Customer_login.php" class="btn btn-info" role="button">Customer</a></button><br><br><br></center>
</body>
</html>
