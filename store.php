<link rel="stylesheet" type="text/css" href="store.css">

<?php
session_start();

    
if (!isset($_SESSION["username"]))
{
    header("location:index.php"); 
}


echo  "<h3 class='greet'>Welcome to Every BODY Apparel ,".$_SESSION["username"]."</h3>";
?>




<?php ?>


<div class="lower">
 
<a href="store.php"><button class="option1"> C1 </button></a>
<a href="store.php"><button class="option2"> C2</button></a>
<a  id="ai" href="index.php"> &#8592;</a><button>
</div>



<img class="user" src="test/logo.jpg">




<?php
$conn = mysqli_connect("localhost", "root","", "everybody");

$result = mysqli_query($conn, "SELECT * FROM stocks");
while($data = mysqli_fetch_array($result))
{
  ?>
<img class="img" src="<?php echo $data['img']; ?>
  
<?php
}
$conn = mysqli_connect("localhost", "root","", "everybody");
$sql = "SELECT * FROM stocks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($rows = $result->fetch_array(MYSQLI_ASSOC)) 
  {?>   <br>
        <p><?php echo $rows['item']; ?> </p>
        <p><?php echo $rows['price']; ?> </p>

        


<?php  }
} else {
    echo "#";
}?>