<?php

$conn=new mysqli("localhost","root","","acme23_apr");
if($conn->connect_error)
{
    echo "error in connection";
    die;
}

$sql_result=mysqli_query($conn,"select * from student");

echo "<table border='1' cellpadding='10'>
<thead>
<tr>
 <th>name</th>
 <th>age</th>
 <th>gender</th>
 <th>total</th>
 <th>action</th>
 </tr>
 </thead>
 <tbody>";



while($row=mysqli_fetch_assoc($sql_result))
{
   // print_r($row);
    //echo "<br>";

    $name=$ow['name'];
    $age=$row['age'];
    $gender=$row['gender'];
    $total=$row['total'];



echo "<tr>
<td>$name</td>
<td>$age</td>
<td>$gender</td>
<td>$total</td>
<td>
  <button>delete</button>
  </td>
</tr>";
}
echo '</tbody>
</table>'

?>
