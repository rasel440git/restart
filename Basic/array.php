<?php

$fruits= ["mango","Banana","Jackfruits", "Lichy"];

foreach ($fruits as $fruit) {  
    echo "$fruit".'</br>'; 
}

$person1=[
    'Name'=>'Kamal',
    'Address'=>'Dhaka',
    'Mail'=>'kamal@gmail.com',
    'Phone'=>'0294484894',
    'Gender'=>'male'] ;

    // foreach ($person as $key => $value) { 
    //   echo  $key .'=>'. $value .'</br>';
    // }

    $person2=[
    'Name'=>'Jamal',
    'Address'=>'Dhaka',
    'Mail'=>'kamal2@gmail.com',
    'Phone'=>'0294484894',
    'Gender'=>'male'] ; 

    $person3=[
    'Name'=>'Bahar',
    'Address'=>'Dhaka',
    'Mail'=>'kamal3@gmail.com',
    'Phone'=>'0294484894',
    'Gender'=>'male'] ;

    $AllPerson=['Number One'=>$person1,
                'Number Two'=>$person2,
                'Number Three'=>$person3];

   foreach ($AllPerson as $personkey=>$personValue) {  
    foreach ($personValue as $key => $value) {
      echo '<pre>';
      echo  $key .'  ==> '. $value .'</br>';
       
    }}

    $arrayValue= array_keys($AllPerson) ;
    print_r($arrayValue);
