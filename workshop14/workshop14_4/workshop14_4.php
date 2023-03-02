<?php
    $products = array( "D0001" => "CDROM" , "D0002" =>"HARDDISK", "D0003" =>
    "FLOOPYDISK",
    "F0001" => "FLASHDRIVE",
    "S0001" => "SOLIDSTATEDRIVE" );
    echo "<table align='center'><tr><td>";
    echo "<table align='center' width='400' border='1'>";
    echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th></tr>";
        foreach( $products as $key => $value ) {
        echo "<tr><td align='center'> $key </td><td> $value </td></tr>";
        }
    echo "</table>";
    echo "</td><td>";
    echo "<table align='center' width='400' border='1'>";
    echo "<tr><th>ลําดับที่</th><th>ชื่อสินค้า</th></tr>";

$n = 1;
    foreach( $products as $value ) {
    echo "<tr><td align='center'> $n </td><td> $value </td></tr>";
$n++;
}
echo "</table>";
echo "</td></tr></table>";
