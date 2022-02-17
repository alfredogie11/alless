
<link rel="stylesheet" type="text/css" href="supload.css">

<div class="upload">
  
<h2> Uploading the Items</h2></br></br> </br>

       Category:
          <select style="position: relative; left: 200px;width: 200px; 
          text-align:center; font-size: 20px;"name="category">

          <option value="Top Clothes" selected="selected">Top Clothes</option>
          <option value="Bottom Clothes">Bottom Clothes</option>
        </select>
</br> </br> </br>


Item Name:
 <input class="box1" type="text" name="item"  > 
</br> </br> </br>

 Quantity:
<input class="box2" type="text" name="quantity" >
</br> </br> </br>

 Price/Unit:
 <input class="box3" type="text" name="price" >
</br> </br> </br>


    <?php if (isset($_GET['error'])):?>
        <p> <?php echo $_GET['error'];?> </p>
        <?php endif ?>


    <form action="uploading.php" method="POST" enctype="multipart/form-data">
     <label>Select File: </label>
     <input class="upload_images" type="file" name="upload_img" style="position:relative; left: 200px; top: 0px;">   
</br> </br> </br>
<input class="uploadbtn" name="submit" type="submit" value="Upload">
	
</form></div>



