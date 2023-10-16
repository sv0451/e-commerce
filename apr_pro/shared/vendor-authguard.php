<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .auth-parent
        {
            display:flex;
            justify-content:space-around;
        }
    </style>
</head>
<body>
    
</body>
</html>


<?php

session_start();
if(!isset($_SESSION['login_status']))
{
    echo "illegal attempt";
    die;

}
if($_SESSION['login_status']==false)
{
    echo "login failed; unauthorized attempt";
    die;
}

if($_SESSION['usertype']!='vendor')
{
    echo "unauthorized user type";
    die;
}

$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usertype=$_SESSION['usertype'];
echo "<div class='auth-parent'>
          <div>$userid</div>
          <div>$username</div>
          <div>$usertype</div>
    </div>";


?>