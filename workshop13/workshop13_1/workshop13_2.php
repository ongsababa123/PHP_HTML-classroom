<?php 
$number2 = -10;
for($i = -10;$i <= 10;$i++){
    $check[$i] = 0;
}
do {
    $number1 = rand(-10,10);
    
    if ($number1 == $number2) {
        echo $number1." | ".$number2."<br>";
        $number2++;
    }
    else {
        echo $number1." | ".$number2."<br>";
    }

    for($i = -10;$i <= 10;$i++){
        if ($i == $number1) {
            $check[$i]++;
            break;
        }
    }
    
} while ($number2 <= 10);

echo "max ".$key=array_search(max($check),$check)." = ".$max = max($check)."<br>";
echo "min ".$key=array_search(min($check),$check)." = ".$min = min($check)."<br>";

print_r($check);

?>