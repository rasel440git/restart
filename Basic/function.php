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

//Recursive function
function recursiveCall($number) {
   echo "Current Number: " . $number . "\n";
   $number = $number - 1;
   if ($number > 0) {
      recursiveCall($number);
   }
}
//recursiveCall(10);


function factorialWithLoop($getNumber){
   $factorial=1;
   for( $i= 0; $i<= $factorial; $i++ ) {
     echo $factorial= $factorial*$i;
}
}
factorialWithLoop(5);


//array filter

$number= [12,32,12,3,34,24,55,54,55,45,55,45];

// $filterValue= array_filter($number, function($number) {   
//     if($number%2==0){
//       return true;
//    }
// });

function arryMod($number) {   
    if($number>30){
      return true;
   }}

$filterValue= array_filter($number, $arryMod
);

print_r($filterValue);