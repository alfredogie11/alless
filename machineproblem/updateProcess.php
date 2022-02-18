<?php
session_start();
$item_id =   $_SESSION['item_id'];
$name = $_POST['name'];
$category= $_POST['category'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$img_name = $_FILES['img']['name'];
$img_file = $_FILES['img']['tmp_name'];

$img_path = "picture/$img_name";
move_uploaded_file($img_file,$img_path);

$conn = require "DB_Connect.php";
mysqli_query($conn,"UPDATE stocks SET item='$name',quantity=$qty,price=$price,category='$category',path='$img_path' WHERE id= $item_id");

header("location:admin.php");