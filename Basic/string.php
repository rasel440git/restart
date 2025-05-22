<?php
$string="hello world";
//$value= str_repeat($string,30);
$value= str_shuffle($string);
$value2= ucfirst($string    );
$value3= ucwords($string    );

//echo $value3;


// fixed artical

$artical= "Hay whatss app? what are yoU doIng. is everything okeY";
//$result= strrev($artical  ) ;    
// $result= strlen($artical);
// echo $result;
echo $result= str_repeat( $artical, 2 );


echo str_shuffle($string);
$reverse = '';
for ($i = strlen($artical) - 1; $i >= 0; $i--) {
    $reverse = $reverse . $artical[$i];
}

//echo $reverse;