<?php
$number1 = rand(0,100);
$number2 = rand(0,100);
$out;

function multiply($number1, $number2){
     $out = $number1 * $number2;
     return $out;
}

function subtract($number1, $number2){
    $out = $number1 - $number2;
    return $out;
}


echo $number1." * ".$number2." = ".multiply($number1, $number2)."<br>";
echo $number1." - ".$number2." = ".subtract($number1, $number2);

?>