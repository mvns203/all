<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname="mvns";

if(!$mvns = mysqli_connect($host,$user,$password,$dbname)){
    echo "not connected";
}