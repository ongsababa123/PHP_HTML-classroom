<?php
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $operator = $_GET["operator"];
    echo "<p>";
    echo "<b>ข้อมูลที่ใส่มา</b><br>";
    echo "Number 1 : <i> $number1 </i><br>";
    echo "Number 2 : <i> $number2 </i><br>";
    echo "Operator : <i> $operator </i><br>";
?>

<?php 
    echo "Result : <i> ";
    echo "ผลบวกเลขสองจำนวนคือ ".$number1+$number2."<br>";
    echo "ผลลบเลขสองจำนวนคือ ".$number1-$number2."<br>";
    echo "ผลคูณเลขสองจำนวนคือ ".$number1*$number2."<br>";
    echo "ผลหารเลขสองจำนวนคือ ".$number1/$number2."<br>";
    echo "ผลการหารเอาเศษเลขสองจำนวนคือ ".$number1%$number2;
?>