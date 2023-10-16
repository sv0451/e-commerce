<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .card
            {
                width:fit-content;
                height:fit-content;
                background-color:bisque;
                margin:10px;
                display:inline-block;
                padding:10px;
            }
            .name
            {
                font-weight:bold;
                font-size:20px;
            }
            .flex
            {
                display:flex;
                justify-content:space-between;
            }
            .gender-m
            {
                font-weight:bold;
                color:blue;

            }
            .gender-f
            {
                font-weight:bold;
                color:darkviolet;
            }
</style>
        </head>
        <body>
        </body>
        </html>


<?php

$conn=new mysqli("localhost","root","","acme23_apr");
if($conn->connect_error)
{
    echo "error in connection";
    die;
}

$sql_result=mysqli_query($conn,"select * from student");



//print_r($rows);
//print_r($rows[0][0]);

//$row=mysqli_fetch_assoc($sql_result);
//print_r($row); 

//echo "<br>";

//$row=mysqli_fetch_assoc($sql_result);
//print_r($row); 
//print_r($row['name']);
//print_r($row['age']);


$row_count=mysqli_num_rows($sql_result);

echo $row_count;

//for($i=0;$i<$row_count;$i++)
//{
  //  echo "$i.";
   // $row=mysqli_fetch_assoc($sql_result);
  //  print_r($row);
  //  echo "<br>";
//}

while($row=mysqli_fetch_assoc($sql_result))
{
   // print_r($row);
    //echo "<br>";

    $name=$ow['name'];
    $age=$row['age'];
    $gender=$row['gender'];
    $total=$row['total'];


    if($gender=='M')
    {
        $gender_class='gender-m';
    }
    else
    {
        $gender_class='gender-f';
    }


    echo "<div class='card'>
    <div class='name'>$name</div>
    <div class='gender_class'>$gender</div>
    <div class='flex'>
    <div class='age'>$age</div>
    <div class='total'>$total</div>
    </div>
    </div>";
}

?>
