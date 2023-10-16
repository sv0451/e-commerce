<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card-text
        {
            height:40px;      
            overflow:hidden;      
        }
        .pdt-img
        {
            width:19rem;
            height:16rem;
        }
    </style>
</head>
<body>    
       
</body>
</html>
<?php
include_once "../shared/customer-authguard.php";
include "menu.html";

$userid=$_SESSION['userid'];
include_once "../shared/connection.php";

$result=mysqli_query($conn,"select * from product");
echo "<div class='d-flex flex-wrap'>";
while($row=mysqli_fetch_assoc($result))
{
    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $imgpath=$row['imgpath'];

    echo "<div class='card' style='width: 19rem;'>
            <img class='pdt-img' src='$imgpath' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$name</h5>
                <h5 class='card-title text-danger'>$price Rs</h5>
                <p class='card-text'>$detail</p>
                <a href='addcart.php?pid=$pid&price=$price' class='btn btn-warning'>Add to Cart</a>
            </div>
</div>";


}
echo "</div>";



?>