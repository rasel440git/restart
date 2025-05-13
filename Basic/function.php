<?php

function sum($x=1,$y=2){
    $x ;
    $y ;
   return $sum = $x + $y;
}
echo sum(5,3).'</br>';

// Varidaic function

function CountryList(...$x){
    
   print_r($x)  ;
}
 CountryList("bd ","ind","nEP");


 // anonoymus function 
 
( function() {
    echo "Hello world";
 })();