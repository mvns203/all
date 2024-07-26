<?php

require "cont.php";

if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $cont = $_POST['contact'];
    $pass = $_POST['password'];
    $status ='student';
    print_r($status);
    if(empty($name) || empty($email) || empty($cont) || empty($pass)){
        echo" input empty";
    }
    else{
        $mvn = "INSERT INTO marvin(Name ,Email ,Contact ,Password,Status) VALUES('$name' ,'$email' ,'$cont' ,'$pass' ,'$status')";
        $my = mysqli_query($mvns, $mvn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <p>Name:</p>
            <input type="text" name="name">
            <p>Email:</p>
            <input type="Email" name="email">
            <p>contact:</p>
            <input type="text" name="contact">
            <p>Password:</p>
            <input type="text" name="password">
            <br>
            <br>
            <button type="submit" name="signup" class="buttonu">
                Sign up
            </button>
            <br>
            <br>
            <a href="login.html">
                --have an account!--
            </a>
        </form>
    </div>
</body>
</html>