<html>
    <head>
        <style>
            .card
            {
                width:100px;
                height:100px;
                background-color:bisque;
                display:inline-block;
                margin:20px;
                padding:10px;
            }
            .price
            {
                color:blue;

            }

            </style>
            </head>
            <body>
        </body>
        </html>

<?php

//$fruits=["apple","orange","pineapple","guava","jackfruit"];
$fruits=["apple"=>130,"orange"=>90,"pineapple"=>80,"guava"=>70,"jackfruit"=>100];

foreach($fruits as $key=>$value)
{
    //echo $key;
    //echo $value;

    echo "<div class='card'>
          <h1>$key</h1>
          <h3 class='price'>rs. $value</h3>
          </div>";
}
//print_r($fruits);
//print_r($fruits["apple"]);

?>