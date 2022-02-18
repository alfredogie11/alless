<?php
$conn = require "DB_Connect.php";
$res = mysqli_query($conn,$_SESSION['que']);
while ($item = mysqli_fetch_array($res,MYSQLI_ASSOC)){
    echo '
           <div class="item">
                <div class="img-holder">
                    <img src="'.$item['path'].'">
                </div>
                <h3 style="font-weight: 500">'.$item['item'].'</h3>
                <table class="item-table"
                    <tr>
                        <td>Category </td>
                        <td>'.$item['category'].'</td>
                    </tr>
                <tr>
                    <td>Price </td>
                    <td>$'.$item['price'].'</td>
                </tr>
                </table>
            </div>
           
           
           ';
}