<?php

$getFile= fopen("myFile.txt", "r");

while (!feof($getFile)) {

$line_of_text = fgets($getFile);

print $line_of_text . "<BR>";

}

fclose($getFile);


?>