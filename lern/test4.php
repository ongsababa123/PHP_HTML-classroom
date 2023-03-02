<pre>
<?php
    //$arr = array();
    $arr['Name'] = "Nopphagaw T";
    $arr['age'] = "45";
    $arr['Job'] = "Lecturer";

    print_r($arr);
    echo count($arr)."<br>";
    $a = 1.2;

    check_type($a);
    check_type(1);
    check_type(null);
    check_type($arr);

function check_type($value) {
        if (is_array($value)) {
            echo "this is an arry";
        }
        else{
            echo "this is an ".gettype($value)."<br>";
        }
    }
?>
</pre>
<?php
    print_r($arr);
    $a = sort($arr);
    echo $a."<br>";
    print_r($arr);
    ksort($arr);
    print_r($arr);
?>

<?php
  $sourcel = $arr;
  $source2 = $arr;
  $source3 = $arr;
  print_r($sourcel);

  //$a = sort($source1);
  echo $a."<br>";
  print_r($sourcel);

  ksort($source2);
  print_r($source2);

  asort($source3);
  print_r($source3);

  shuffle($arr);
  print_r($arr);

  echo in_array(48,$arr);
  ?> 
