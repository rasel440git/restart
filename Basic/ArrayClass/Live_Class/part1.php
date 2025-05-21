<?php
/*

//Indexed Arrays
$fruits1=array("apple", "banana", "cherry");
$fruits2=["apple", "banana", "cherry"];
print_r($fruits1[1]);






//How to loop over Indexed Arrays
$app=['Android','IOS','Windows','Linux'];
foreach($app as $item){
    echo $item."<br/>";
}







// Associative arrays
$bilGates=[
    "firstName"=>"Bill",
    "lastName"=>"Gates",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates@gmail.com",
    "phone"=>"0123456789",
];
print_r($bilGates['phone']);






// How to loop over Associative arrays
$bilGates=[
    "firstName"=>"Bill",
    "lastName"=>"Gates",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates@gmail.com",
    "phone"=>"0123456789",
];
foreach ($bilGates as $key=>$value){
    echo $key.":".$value."<br>";
}









// Multidimensional indexed arrays

$fruits1=["apple1", "banana1", "cherry1"];
$fruits2=["apple2", "banana2", "cherry2"];
$fruits3=["apple3", "banana3", "cherry3"];
$fruits4=["apple4", "banana4", "cherry4"];
$All_fruits=[$fruits1, $fruits2, $fruits3, $fruits4];
print_r($All_fruits[1][2]);











//How to loop over Multidimensional indexed arrays
$fruits1=["apple1", "banana1", "cherry1"];
$fruits2=["apple2", "banana2", "cherry2"];
$fruits3=["apple3", "banana3", "cherry3"];
$fruits4=["apple4", "banana4", "cherry4"];
$All_fruits=[$fruits1, $fruits2, $fruits3, $fruits4];

foreach ($All_fruits as $ParentItem){
    foreach ($ParentItem as $ChildItem){
        echo $ChildItem."<br/>";
    }
}











// Multidimensional Associative arrays
$person1=[
    "firstName"=>"person1",
    "lastName"=>"Gates1",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$person2=[
    "firstName"=>"person2",
    "lastName"=>"Gates2",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$person3=[
    "firstName"=>"person3",
    "lastName"=>"Gates3",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];


$All_Person=[$person1,$person2,$person3];
print_r($All_Person[2]['lastName']);













// How to loop over Multidimensional Associative arrays
$person1=[
    "firstName"=>"person1",
    "lastName"=>"Gates1",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$person2=[
    "firstName"=>"person2",
    "lastName"=>"Gates2",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$person3=[
    "firstName"=>"person3",
    "lastName"=>"Gates3",
    "age"=>"65",
    "gender"=>"male",
    "email"=>"gates1@gmail.com",
    "phone"=>"0123456789",
];

$All_Person=[
    'one'=>$person1,
    'two'=>$person2,
    'three'=>$person3
];


foreach ($All_Person as $ParentKey=>$ParentValue) {

    foreach ($ParentValue as $ChildKey=>$ChildValue) {
            echo $ChildKey.": ".$ChildValue."<br>";
    }
}

*/