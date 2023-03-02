<?php 
    $oldName = $_POST["oldName"];
    $newName = $_POST["newName"];
    rename($oldName,$newName);
    echo "Rename successfull";
?>