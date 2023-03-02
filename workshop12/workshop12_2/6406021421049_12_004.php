<?php 
    $interest = $_POST["interest"];
    $year = $_POST["year"];
    $total;
    $total1;
    for($i = 1;$i <= $year;$i++){
        $total += ($interest * (1.5/100));
        $total1 = $total+$interest;
        echo "ปีที่ ".$i." ".$total1." บาท"."<br>";
    }
?>