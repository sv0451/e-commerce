<?php 
echo "<h1>i am a php server response</h1>";

$age=16;
$c='red';
$res="minor";
if($age>=18)
{
    $res="major";
    $c='green';
}
echo "<div>
    
         <h2 style='color:$c'>$res</h2>
         <p>
         lorem
         
         </p>
         <button>submit</nutton
         </div>";

?>