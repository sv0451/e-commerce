<?php
session_start();

if(!isset($_SESSION['login_status']))
{
    echo "login first";
    die;
}

if($_SESSION['login_status']!=true)

{
    echo "credentials are not authenticated";
    die;
    
}


<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>

        <h1>welcome home</h1>
    </body>
</html>