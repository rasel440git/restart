<?php

//Find the largest number using PHP 

$num1 = 16;
 $num2 = 15;
  $num3 = 113;
  if ($num1>$num2 && $num1>$num3 ){
  echo "Number one is the big";
  }
  else if ($num2>$num1 && $num2>$num3){
  echo "Number Two is the big";
  }
  else{
    echo "Number three is big";
  }

  //Celsius to Fahrenheit Conversion (0°C × 9/5) + 32 = 32°F

  $inputTemp= 1;
  $fahrenheit= ($inputTemp * 9/5)+32;
  echo "Temperature". $inputTemp."in Fahrenheit sceal is".$fahrenheit;