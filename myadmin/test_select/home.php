<a href="insert.html">Insert</a>


<pre>
    <?php
    define('servername', 'localhost');
    define('username', 'U_6406021421171');
    define('password', 'n5Sp!Dr()h1qoclL');
    define('db','db_6406021421171')
    ?>
<?php

$conn = new mysqli(servername, username, password, db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
}

$sql = "SELECT * FROM harley";
$myquery = $conn->query($sql);
print_r($myquery);
$data = $myquery->fetch_all(MYSQLI_ASSOC);
echo "<br>";
echo '<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 8px;

}
</style>';

echo '<table style="width:50%; text-align: left; border = "1";" >';
echo "<tr>".
"<td>"."ไอดี"."</td>".
"<td>"."ชื่อรุ่น"."</td>".
"<td>"."สี"."</td>".
"<td>"."ราคา"."</td>".
"<td>"."วันที่"."</td>".
"<td>"."แก้ไข"."</td>".
"<td>"."ลบ"."</td>".
"</tr>";

foreach ($data as $value){
    echo "<tr>".
    "<td>".$value['_id']. "</td>".
    "<td>".$value['name_bike']. "</td>".
    "<td>". $value['color_bike']. "</td>".
    "<td>".$value['Price']. "</td>".
    "<td>".$value['time_create']. "</td>".
    "<td> <a href='update.php?_id={$value['_id']}'>edit {$value['_id']}</a></td>".
    "<td> <a href='del_ex.php?_id={$value['_id']}'>del {$value['_id']}</a></td>";

}
echo "</table>";
?>
</pre>