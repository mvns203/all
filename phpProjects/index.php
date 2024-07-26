<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php require "index.css";   ?>
    </style>
</head>
<body>
    <div class="main">
        <div class="head">
            <h2>CHILD</h2>
        </div>
        <div class="content">
            <div class="side">
            <nav>
                <ul>
                    <?php
                    $USER = $_SESSION['userstatus'];
                    if($USER == "lecture"){
                        ?>
                        <li><a href="">proef</a></li>
                        <li><a href="">rrfre</a></li>
                        <li><a href="">eet</a></li>
                        <li><a href="">er4t</a></li>
                    
                    <?php 
                }else{
                    ?>
                        <li><a href="">we4y</a></li>
                        <li><a href="">ergthhe</a></li>
                        <li><a href="">erger</a></li>
                        <li><a href="">erer</a></li>
                        <li><a href="">eret5r</a></li>
                    <?php } ?>
                    
                </ul>
            </nav>
            <div class="bb"></div>
            </div>
        </div>
    </div>
</body>
</html>