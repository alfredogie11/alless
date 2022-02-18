<?php
session_start();
$name = $_POST['name'];
$category= $_POST['category'];
$quantity = $_POST['qty'];
$price = $_POST['price'];
$img_name = $_FILES['img']['name'];
$img_file = $_FILES['img']['tmp_name'];

$img_path = "picture/$img_name";
move_uploaded_file($img_file,$img_path);

$conn = require "DB_Connect.php";
mysqli_query($conn,"INSERT INTO stocks(item,quantity,price,category,path) 
VALUES ('$name',$quantity,$price,'$category','$img_path')
");

header("location:admin.php");