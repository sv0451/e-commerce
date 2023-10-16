<?php


$conn=new mysqli("localhost","root","","acme23_apr");

if($conn->connect_error)
{
    echo "connection failed, aborting execution";
    die;
}


?>