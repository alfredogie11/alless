<?php
session_start();
if(isset($_POST['ch'])&&$_POST['action']=="delete"){
    $ids = $_POST['ch'];
    $conn = require "DB_Connect.php";

    foreach ($ids as $id){
        mysqli_query($conn,"DELETE FROM stocks WHERE id = $id ");
    }
    header("location:admin.php");
    exit();
}
elseif(isset($_POST['ch'])&&$_POST['action']=="update"){
    $_SESSION['item_id']=$_POST['ch'][0];
    header("location:update.php");
    exit();
}

header("location:admin.php");