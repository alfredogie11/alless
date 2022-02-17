<?php
session_start();
if (!isset($_SESSION["username"]))
{
    header("location:index.php"); 
}
echo "<h3 id='greeting'> Welcome to EVERYBODY Apparel ".$_SESSION["username"]."!</h3>";
?>
<?php
$conn = mysqli_connect("localhost","root","","everybody");
?>
<div>


<div >
<link rel="stylesheet" type="text/css" href="sadmin.css">                       
<form action="remove.php" method="POST">
 <div class="box">   
<table>

<tr>

<th></th>
<th>ID #</th>   
<th>Item Name</th>
<th>Product Quantity</th>
<th>Product Price</th>
<th>Category</th>
</tr>

<?php


$selectquery = "SELECT * FROM stocks";
$select_run  = mysqli_query($conn, $selectquery);

if(mysqli_num_rows($select_run) > 0)
{
foreach($select_run as $rows)
{
?>

<tr>
<td>
<input type="checkbox" name="checklist[]" 
value="<?= $rows['id']; ?>">
</td>


<td><?=$rows['id']; ?></td>
<td><?= $rows['item']; ?></td>
<td><?= $rows['quantity']; ?></td>
<td><?= $rows['price']; ?></td>
<td><?= $rows['category']; ?></td>
</tr>
<?php
}
}
else
{
?>
<tr>

</tr>
<?php
}
?>
                           
</table>
</div>
<a><button type="submit" name="remove_btn">Remove</button></a>
</form>
<a href="update.php"><button> Update </button></a>
<a href="upload.php"><button> Upload </button></a>
<a href="index.php"><button action="index.php"> Back </button></a>
</div>
</div>          
</div>
</div>



