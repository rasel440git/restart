<?php
$fruits=array("apple", "banana", "cherry");
$count=count($fruits);
$size=sizeof($fruits);


$numbers = array(1, 2, 3, 4, 5);
$arraySum = array_sum($numbers);
$arrayProduct= array_product($numbers);



$numbers1 = array(1, 2, 3, 4, 5);
$numbers2 = array(6, 7, 8, 9, 10);
$merged=array_merge($numbers1,$numbers2);



$city=["Dhaka","Khulna","Rajshahi","Barisal"];
$replacement=[0=>"Cox-Bazar",2=>"Sahara Desert"];
$replaced =array_replace($city,$replacement);


$input = ["a", "b", "a", "c", "d", "b"];
$result = array_unique($input);
$result = array_reverse($result);
print_r($result);


