<?php

$fp = fopen("myfile.txt", "w");//open file in write mode

fwrite($fp, "hello");

fwrite($fp, "php file");

fclose($fp);

echo "File written successfully";

?>