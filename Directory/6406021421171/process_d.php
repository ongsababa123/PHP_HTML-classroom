<?php 
    $fname = $_POST["fileN"];
    unlink($fname);
    echo "Delete successfull";
?>