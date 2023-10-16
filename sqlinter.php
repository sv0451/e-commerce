<?php


//print_r($_GET);
//die;

$name=$_GET['name'];
$age=$_GET['age'];
$gender=$_GET['gender'];
$total=$_GET['total'];


$host="localhost";
$username="root";
$password="";
$dbname="acme23_apr";

$conn=new mysqli($host,$username,$password,$dbname);

if($conn->connect_error)
{
    echo "error in connection";
}
else
{
    echo "connection success";
}

$status=mysqli_query($conn,"insert into student(name,age,gender,total) values('$name',$age,'$gender',$total)");

if($status)
{
    echo "record created successfully";
}
else
{
    echo mysqli_error($conn);
}


?>