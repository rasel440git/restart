<?php


$bilGates=[
    "firstName"=>"Bill",
    "lastName"=>"Gates",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates@gmail.com",
    "phone"=>"0123456789",
];

$values=array_values($bilGates);
$keys=array_keys($bilGates);
$isExits=array_key_exists("firstName",$bilGates);
$searchValue=array_search('Gates',$bilGates);
$flippedArray=array_flip($bilGates);

$assortArray=asort($bilGates);


print_r($assortArray);



