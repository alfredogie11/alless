<?php
$conn=mysqli_connect("localhost","root","","everybody");
session_start();
if($conn->connect_error){
    die("Connection Failed!");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST["username"];
    $pass=$_POST["password"];

    $sql="select*from log WHERE username='".$name."' AND password='".$pass."'" ;

    $rslt=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rslt);

    if($row["usertype"]=="member"){

        $_SESSION["username"]=$name;

        header("location:store.php");

    }

    if($row["usertype"]=="admin"){

        $_SESSION["username"]=$name;

        header("location:admin.php");
        
    }
    else echo "Incorrect username or password!";
}
?>
<title> Every BODY Apparel </title>
<head><link rel="stylesheet" type="text/css" href="sindex.css"/></head>
<form action="" method="POST">
  
<div class="bg">
    <div class="index" >
        <img class="logo" src="test/logo.jpg">
</br>  
    Username: 
    <input type="text" style="position:absolute; width: 200px; height: 30px;" name="username"> </br>
</br></br>
    Password: 
    <input type="password"style="position:absolute; width: 200px;height: 30px;" name="password"> </br>
</br></br>

    <input type="submit" style="position:absolute; left: 120px; background-color: black; width: 80px; color:white;height: 30px;" value="Submit">

</div>
</div>
</form>

