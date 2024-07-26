<?php
session_start();
require "cont.php";
if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $_SESSION['useremail']=$email;
    $_SESSION['userstatus']=$try['Status'];
    // echo $_SESSION['userstatus'];
    
    if(empty($email) || empty($pass)){
        ?>
        <script>
            alert("empty input");
            </script>
        <?php
    }
    else{
        $mvn = "SELECT * FROM marvin WHERE Email='$email'";
        $output = mysqli_query($mvns,$mvn);
        if(!$output){
            ?>
            <script>
                alert("user donot exist");
            </script>
            
            <?php
        }else{
            ?>
            <script>
                alert("welcome");
            </script>
            <?php
        }
        if(mysqli_num_rows($output)>0){
            $try = mysqli_fetch_assoc($output);
            // print_r($try);
            // echo $try['Status'];
            if($_SESSION["useremail"] == $try['Email']){
                // echo "yess";
                ?>
                <script>
                    window.location.href="index.php";
                </script>
                <?php
            }
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        <?php require "all.css";?>
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="for">
        <form action="" method="post">
            <p>Email:</p>
            <input type="Email" name="email">
            <p>Password:</p>
            <input type="text" name="password">
            <br>
            <br>
            <button type="submit" name="signup" class="buttonu" >
                Login
            </button>
            <br>
            <br>
            <a href="sign.html">
                Do have an account!
            </a>
        </form>
    </div>
</body>
</html>