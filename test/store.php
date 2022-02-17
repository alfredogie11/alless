<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
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

<div class="store">
    <div class="item">
        <div class="img-holder">
            <img src="picture/skirtlong.jpg">
        </div>

    </div>

    <div class="item">
        <div class="img-holder">
            <img src="picture/skirtlong.jpg">
        </div>

    </div>

    <div class="item">
        <div class="img-holder">
            <img src="picture/skirtlong.jpg">
        </div>

    </div>

</div>

</body>
</html>
