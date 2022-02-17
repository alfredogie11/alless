<?php
$conn=mysqli_connect("localhost","root","","everybody");
session_start();
if($conn->connect_error){
    echo"Connection failed!";
    exit();
}?>