<?php
session_start();
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];

$conn = require "DB_Connect.php";
$result = mysqli_query($conn,"SELECT * FROM log WHERE username = '$uname'AND password = '$pwd'  ");

if(mysqli_num_rows($result)>0){

    if($row=mysqli_fetch_assoc($result)){
        $_SESSION['type'] = $row['usertype'];
        $_SESSION['uname'] = $row['username'];
        $_SESSION['first_login'] = true;

        if($row['usertype']=="admin"){
            header("location:admin.php");
        }
        else{
            $_SESSION['que'] = "SELECT * FROM stocks ORDER BY category";
            header("location:store.php");
        }
    }

}
else{
    header("location:index.php");
}
