<?php
function generatePassword($length, $lowerCase, $upperCase, $numbers, $symbols){
    
    //lowercase
    $lowerCaseChar= "abcdefghijklmnopqrstuvwxyz";

    //uppercase
    $upperCaseChar="ABCDEFGHIJKLMNOPQRSTUVWXYZ";

    //number
    $allNumbers="1234567890";

    //symbols
    $allSymbols="~!@#$%^&*()_+=-";

    //$length=10;

    $characters= "";

    if($lowerCase){
        $characters .=$lowerCaseChar;
    }

     if($upperCase){
        $characters .=$upperCaseChar;
    }

     if($numbers){
        $characters .=$allNumbers;
    }

     if($symbols){
        $characters .=$allSymbols;
    }

    $shuffled= str_shuffle($characters);
    //echo $characters;
    echo $password= substr($shuffled,0,$length);

}

$generatedPassword= generatePassword( 14,true,true,true,true);