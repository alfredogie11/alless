<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="adminDesign.css">
</head>
<body>

<div class="header">
    <div class="header-left">
        <img src="logo.jpg" width="180" height="200" style="border: 5px double #b4aeaa">
    </div>
    <div class="header-right">
        <div class="lower-right-header">
            <p class="header-txt">Welcome to EVERYBODY Apparel Admin!</p>
        </div>
    </div>
</div>

<form action="adminAction.php" method="post" style="all: unset">
<div class="admin-cont">
    <div class="left-admin">
        <button type="button" onclick="addItem()">Add</button>
        <button type="submit" name="action" value="update">Update</button>
        <button type="submit" name="action" value="delete">Delete</button>
        <button type="button" onclick="logout()">Back</button>
        <script>
            function logout() {
                window.location.href = "index.php"
            }
            function addItem() {
                window.location.href = "upload.php"
            }
        </script>
    </div>
    <div class="right-admin">
        <table>
            <tr>
               <th>Action</th>  <th>ID</th>  <th>Category</th> <th>Stock</th> <th>Item</th>   <th>Price</th>
            </tr>
            <?php
            $conn= require "DB_Connect.php";
            $result = mysqli_query($conn,"SELECT * FROM stocks ORDER BY item");
            while ($row = mysqli_fetch_assoc($result)){
                echo "
                
                <tr> 
                    <td><input type='checkbox' name='ch[]' value='".$row['id']."' style='width: 1rem;height: 1rem'></td>
                    <td>".$row['id']."</td>
                     <td>".$row['item']."</td>
                     <td>".$row['quantity']."</td>
                     <td>".$row['category']."</td>
                     <td>".$row['price']."</td>
                </tr>
                
                ";
            }
            ?>
        </table>
    </div>
</div>
</form>

</body>
</html>
