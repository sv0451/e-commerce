<?php


session_start();
$_SESSION['login_status']=false;
$uname=$_POST['username'];
$upass=$_POST['pass1'];

$login_cipher_text=md5($upass);

//$conn=new mysqli("localhost","root","","acme23_apr");

include_once "../shared/connection.php";

$query="select * from user where username='$uname' and password='$login_cipher_text'";
//echo $query;
$result=mysqli_query($conn,$query);

$row_count=mysqli_num_rows($result);
if($row_count==0)
{
    echo "invalid credentials";
}
else
{
    //echo "login success";
    
    $row=mysqli_fetch_assoc($result);
    print_r($row);
    $_SESSION['login_status']=true;

    $_SESSION['userid']=$row['userid'];
    $_SESSION['usertype']=$row['usertype'];
    $_SESSION['username']=$row['username'];



    if($row['usertype']=="vendor")
    {
    header("location:../vendor/view.php");
    }
    else if($row['usertype']=="customer")
    {
        header("location:../customer/home.php");
    }
}


?>