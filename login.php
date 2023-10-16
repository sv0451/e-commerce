<?php

session_start();

$_SESSION['login_status']=false;
if(!isset($_POST['uname']) || !isset($_POST['upass']))
{
    echo "bad request exception";
    die;
}

$uname=$_POST['uname'];
$upass=$_POST['upass'];

//echo $uname;
//echo '<br';
//echo $upass;

if($uname=='acme' && $upass=='intern')
{
   // echo "<h2>login success</h2>";
    header("location:home.php");
    $_SESSION['login_status']=true;
}
else{
    echo "invalid credentials</h2>";
}

?>