<?php
print_r($_GET);
$username = $_POST["Username"];
$password = $_POST["Password"];
$radio = $_POST["fav_language"];
$checkbox = $_POST["vehicle"];
$label = $_POST["cars"];
$textarea = $_POST["text"];
echo "$username $password $radio $checkbox $label $textarea";
?>