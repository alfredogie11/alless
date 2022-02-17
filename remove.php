
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "everybody");
if ($conn->connect_error){
    die ("Connection Failed");
}


if(isset($_POST['remove_btn'])){
    $selectid = $_POST['checklist'];
    $get_id = implode(',',$selectid);
    
    $sql = "DELETE FROM stocks WHERE id IN($get_id)";
    $sql_run = mysqli_query($conn, $sql);

    header("Location: admin.php");

}


?>