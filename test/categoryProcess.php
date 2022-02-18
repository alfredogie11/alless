<?php
session_start();
$_SESSION['first_login'] = false;
$category = $_POST["category"];
if($category=="Top Clothes"){//top clothes
    $_SESSION['que'] = "SELECT * FROM stocks WHERE category = 'Top Clothes' ORDER BY category";
}
else if($category=="Bottom Clothes"){
    $_SESSION['que'] = "SELECT * FROM stocks WHERE category = 'Bottom Clothes' ORDER BY category";
}

header("location:store.php");
exit();