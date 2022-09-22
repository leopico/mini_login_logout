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
<body>

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
            <div class="card">
                <div class="card-body">
                    Register
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="emial" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Confirm Password</label>
                            <input type="password" name="confirmPassword" class="form-control">
                        </div>
                        <button type="submit" name="register" class="btn btn-dark text-white float-end">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

function checkStrongPassword($password)
{ //this is make the function for strong password

    $upperStatus = false;
    $lowerStatus = false;
    $numberStatus = false;
    $spectialStatus = false;

    if (preg_match('/[A-Z]/', $password)) {
        $upperStatus = true;
    }
    if (preg_match('/[‌a-z]/', $password)) {
        $lowerStatus = true;
    }
    if (preg_match('/[0-9]/', $password)) {
        $numberStatus = true;
    }
    if (preg_match('/[!@#$%^&*]/', $password)) {
        $spectialStatus = true;
    }

    if ($upperStatus && $lowerStatus && $numberStatus && $spectialStatus) { // this all status is true?
        return true; //want to import to inside the session
    } else {
        return false; //want to import to inside the session
    }

}

// checkStrongPassword("Password2022#");  This is for testing and want to import to inside of $password == $confirmPassword

session_start(); //want to storage in SESSION

if (isset($_POST["register"])) {
    $name = $_POST["name"]; //take form html
    $email = $_POST["email"]; //take form html
    $password = $_POST["password"]; //take form html
    $confirmPassword = $_POST["confirmPassword"]; //take form html

    if ($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
        if (strlen($password) >= 6 && strlen($confirmPassword) >= 6) {
            if ($password == $confirmPassword) {
                $status = checkStrongPassword($password);
                // var_dump($status); this is for testin

                if ($status) {
                    $_SESSION["email"] = $email; //session storage
                    $_SESSION["password"] = password_hash($password, PASSWORD_BCRYPT); //session storage
                    echo "register success...";
                } else {
                    echo "Your password is not strong password!(eg . contain A-Z a-z 0-9 !@#$%^&*";
                }
            } else {
                echo "Password not same. Type again!";
            }
        } else {
            echo "password must be enter greater than 6";
        }

    } else {
        echo "need to fill..";
    }
}

?>


</body>
</html>
