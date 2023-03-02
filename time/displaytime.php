<?php

$nextWeek = time() + (7*24*60*60);
echo 'Next week: ';
echo date('d-m-Y',$nextWeek).'<br />';
echo "-----------------------------";
echo "<br>";echo "<br>";
?>

<?php 
$current = time();
echo "Unix Time: $current<br>";
$show_date = date("l jS F Y h:i:s A", $current)."<br />";
echo "Today is $show_date";
echo "<br>";

$show_date = date("D d/m/y h:i A", $current)."<br />";
echo "Today is $show_date";
echo "<br>";

$result = strtotime("now")."<br />";
$show_date = date("d/m/y h:i A", $current)."<br/>";
echo "Unix Time:".$result."<br />";
echo "Result: ".$show_date."<br />";
?>