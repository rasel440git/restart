<?php


// for($i=0;$i<10; $i++){
//     echo "*"; 
//     echo '</br>';
// }

// $i=0;
// while($i<10){
//     echo "*"; 
//     echo '</br>';
//     $i++;
// }

// $i=0;
// do{ echo "-*-"; 
//     echo '</br>';
//     $i++;}
// while($i<10);



// $name="Goodwell";
// function greeting(&$name){
//     $name="JenWell";
//     echo "My Name is ".$name;
// }

// greeting($name);
// echo $name;




$Numbers= [12,32,12,34,22,12,11,41,31,23,44,23];
// $eventNumber= array_filter($Numbers, function($Number){
//     if($Number % 2 !==0){
//         return true;
//     }else{
//         return false;
//     }
// });

function filterNumber($Number){
    if($Number % 2 !==0){
                return true;
            }
                return false;
            
}
$eventNumber= array_filter($Numbers, 'filterNumber');
print_r($eventNumber);