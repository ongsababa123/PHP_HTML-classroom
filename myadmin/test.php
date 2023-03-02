<pre>
    <?php
    define('servername', 'localhost');
    define('username', 'my1234');
    define('password', '12345678');
    define('db','iti_test')
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

$sql = "SELECT * FROM harlay";
$myquery = $conn->query($sql);
print_r($myquery);
$data = $myquery->fetch_all(MYSQLI_ASSOC);
echo "<table border = 1>";
foreach ($data as $value){
    echo "<tr>".
    "<td>".$value['_id']. "</td>".
    "<td>".$value['name']. "</td>".
    "<td>". $value['address']. "</td>".
    "<td>".$value['tel_no']. "</td>".
    "<td>".$value['time_create']. "</td>".
    "<tr>";
}
echo "</table>"
?>
</pre>