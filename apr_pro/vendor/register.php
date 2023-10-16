<?php

//echo "data in POST= ";
//print_r($_POST);

$uname=$_POST['username'];
$upass=$_POST['pass1'];

$cipher_text=md5($upass);

include once "../shared/connection.php";

$status=mysqli_query($conn, "insert into user(username,password,usertype) values('$uname', '$cipher_text' , 'vendor')");

if($status)
{
    echo "registration success";
}
else
{
    echo "registration failed<br>";
    echo mysqli_error($conn);
}

?>