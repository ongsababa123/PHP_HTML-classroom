<?php
    print_r($GLOBALS);
?>
<?php
    $subj = $_GET["subject"];
    foreach($subj as $key => $value){
        print("$value<br>");
    }
?>
