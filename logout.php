<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
      rel="stylesheet"
    />
</head>
<body class="bg-dark">

<div class="container mt-4 ">
    <div class="row">
        <div class="col-md-12 col-lg-3">
            <div class="">
                <a href="login.php">
                    <button class="btn btn-primary text-white mb-3" style="width:200px">Login</button>
                </a>
            </div>
            <div class="">
                <a href="register.php">
                    <button class="btn btn-success text-white mb-3" style="width:200px">Register</button>
                </a>
            </div>
            <div class="">
                <a href="logout.php">
                    <button class="btn btn-danger text-white mb-3" style="width:200px">Logout</button>
                </a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="bg-success text-white text-center">
                <b class="fs-1">Logout Success...</b>
            </div>
        </div>
    </div>
</div>

<?php

session_start();

session_destroy();

?>

</body>
</html>
