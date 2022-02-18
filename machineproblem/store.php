<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="adminDesign.css">
    <link rel="stylesheet" href="storeStyle.css">
</head>
<body>

<div class="header">
    <div class="header-left">
        <img src="logo.jpg" width="180" height="200" style="border: 5px double #b4aeaa">
    </div>
    <div class="header-right">
        <div class="lower-right-header">
            <p class="header-txt">Hello <?php echo  $_SESSION['uname']?>, Welcome to EVERYBODY Apparel :)</p>
        </div>
    </div>
</div>

<form method="post" action="categoryProcess.php" style="position: static;display: block;width: 100%">
    <input class="major-button" type="submit" name="category" value="Top Clothes" style="width: 20%">
    <input class="major-button" type="submit" name="category" value="Bottom Clothes" style="width: 20%">
    <button onclick="out()" type="button" class="major-button" style="width: 10%;margin-left: 120px">Back</button>
    <script>
        function out() {
            window.location.href="index.php"
        }
    </script>
</form>

<div class="store">
    <?php

       if($_SESSION['first_login']){
           require "storeItems.php";
       }
       else{
           require "specifiedCat.php";
       }


    ?>

   </div>
</body>
</html>
