<pre>
<?php
 session_start();
 $key = $_POST["key"];
 echo $key;
 if($key=="ins"){
  // insert new element to array
  $a = $_POST["data"];
  $_SESSION["mydata"][] = $a;
  $data = $_SESSION["mydata"];
  print_r($data);
 }
 else if($key=="del"){

    // del element in array
    
    unset($_SESSION["mydata"][$_POST["remove"]]);
    
    $data = $_SESSION["mydata"];
    
    print_r($data);
    
    }
    else if($key=="replace"){
        // edit information
          $base = $_SESSION["mydata"];
          $replacements = array($_POST["replace"] => $_POST["value"]);
          $_SESSION["mydata"] = array_replace($base, $replacements);
          $data = $_SESSION["mydata"];
          print_r($data);
    }
    else if($key=="clear"){
        //clear Session
       session_destroy();
      }
?>
</pre>
<a href="form.php">insert new data</a>