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

$sql = "INSERT INTO harley (name_bike, color_bike, price)

VALUES ('$name_bike', '$color_bike', '$price_bike')";

$myquery = $conn->query($sql);

?>
</pre>
<a href="home.php">BACK</a>
