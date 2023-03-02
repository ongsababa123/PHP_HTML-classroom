<pre>
    <?php
    define('servername', 'localhost');
    define('username', 'U_6406021421171');
    define('password', 'n5Sp!Dr()h1qoclL');
    define('db','db_6406021421171')
    ?>
<?php

$conn = new mysqli(servername, username, password, db);

$name_bike = $_POST['name_bike'];
$color_bike = $_POST['color_bike'];
$price_bike = $_POST['price'];

$sql = "UPDATE harley SET name_bike = '$name_bike', color_bike = '$color_bike' WHERE _id = {$_POST['_id']}";

$myquery = $conn->query($sql);

?>
<a href="home.php">BACK</a>