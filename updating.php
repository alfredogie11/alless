<?php
$conn = mysqli_connect("localhost", "root","", "everybody");


$itemname=$_POST['item'];
$quantity=$_POST['quantity'];
$price=$_POST['price']; 
$category=$_POST['category'];  
$sql = "UPDATE stocks SET quantity='$quantity', price='$price',category='$category' WHERE item='$itemname'";
if (mysqli_query($conn,$sql)){
    echo header("Location: admin.php");
    }
    
?>