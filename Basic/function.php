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
 //CountryList("bd ","ind","nEP");


 // anonoymus function 
 
// ( function() {
//     echo "Hello world";
//  })();

// global $to ;
// global $subject;
// global $message;
function sentMail($to='hi', $subject='test', $message= 'body'){
   echo "mail sent to ".$to."subject is:".$subject."and message is:".$message;
}
sentMail();

function ECount() {   
   static $count= 0;
   $count ++;
   echo".$count.";
   
}
ECount() ;
ECount() ;
ECount() ;