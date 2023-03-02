<?php
    $Midterm = $_POST['midterm'];
    $Final = $_POST['final'];
    $Assign = $_POST['Assignment'];

    $sum = $Midterm + $Final + $Assign;

    if($sum >= 80 && $sum <= 100){
        echo "Grade : 4";
    } 
    if($sum >= 70 && $sum <= 79){
        echo "Grade : 3";
    } 
    if($sum >= 60 && $sum <= 69){
        echo "Grade : 2";
    } 
    if($sum >= 50 && $sum <= 59){
        echo "Grade : 1";
    } 
    if($sum >= 0 && $sum <= 49){
        echo "Grade : 0";
    } 

?>