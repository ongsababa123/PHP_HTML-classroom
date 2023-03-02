<?php
    echo "PHP Directory manipulation <br>";
    echo "getcwd : ".
    "input type='text' name='cname' value='".getcwd()."'
    style='background:lightgreen; width:80%'><br>";
    chdir("..\..");
    $fullpath = "test\upload_ex"
?>