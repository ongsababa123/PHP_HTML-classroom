<?php
    function double($value) {
        $value = (is_numeric($value) ?
            $value*2 : str_repeat("$value",2)
            );
        return $value;
    }

    function triple(&$val){
        return $val * 3;
    }
        $score = rand(0,100);
        $num = 2;
        $val = 50; 
      $result = ($num==2? double($val):triple($val));
      $grade = ($score < 49? "F" : "D");
      echo "score = $score : $grade <br>";
    
    // $val = 10;
    // $dval = double($val);
    // echo "value = $val Double = $dval<br>";
    // $val = "10";
    // echo "Value = $val Double = ".double($val)."<br>";
    // $val = "10d";
    // echo "Value = $val Double = ".double($val)."<br>";

    // function triple(&$val){
    //     $val = $val* 3;
    // }
    // $value = 15;
    // echo  $val;
    // triple($value);
    // echo "$value<br>";

    ?>