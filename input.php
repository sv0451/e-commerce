h<?php

$a=$_GET["age"];
$name=$_GET["name"];

if($a>=18)
{
    echo "<h1 style='color:green'> $name is major</h1>";

}
else{
    echo "<h1 style='color:red>$name is minor</h1>";
}

?>