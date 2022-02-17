<?php
$conn = mysqli_connect("localhost", "root","", "everybody");

if(isset($_POST['category'],$_POST['item'],$_POST['quantity'],$_POST['price']))
{
    $category=$_POST['category'];
    $item=$_POST['item'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];   
}

$query1=mysqli_query($conn, "SELECT * FROM stocks WHERE item='$item'");

if(mysqli_num_rows($query1)==0)
{
$query2=mysqli_query($conn, "INSERT INTO stocks (category, item, quantity, price) VALUES ('$category','$item','$quantity', '$price')");   
}


//echo header("location:admin.php");
echo "<script>window.location.href='admin.php'</script>"
?>

<?php 

if (isset($_POST['submit']) && isset($_FILES['upload_img'])) {
	include "shopconnect.php";

	echo "<pre>";
	print_r($_FILES['upload_img']);
	echo "</pre>";

	$img_name = $_FILES['upload_img']['name'];
	$img_size = $_FILES['upload_img']['size'];
	$tmp_name = $_FILES['upload_img']['tmp_name'];
	$error = $_FILES['upload_img']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_name;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}
?>