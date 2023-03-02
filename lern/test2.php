<?php
  $va = array();
  $va[] = "Hello";
  $va[] = "world";
  $va['test'] = "good job";
  $va[] = "new";
?>
<pre>
<?php
  print_r($va);
?>
</pre>
<?php
  for ($i=0; $i < sizeof ($va) ; $i++) {
     // code...
     echo "index = $i value $va[$i]<br>";
  }
  
  foreach ($va as $index => $value) {
    echo "index = $index value = $va[$index] : $value <br>";
  }
?>

<?php

$course = array(
    "ITI"=>array("Nopphagaw T."=>"Python", "Noppadon B."=>"Java", "Nopphagaw T. "=>"PHP"),
    "INE"=>array("bank"),
    "IT"=>"Computer Programming");

?>
<pre>
<?php
print_r($course);
?>