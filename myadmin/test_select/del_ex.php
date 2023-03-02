<pre>
    <?php
    define('servername', 'localhost');
    define('username', 'U_6406021421171');
    define('password', 'n5Sp!Dr()h1qoclL');
    define('db','db_6406021421171')
    ?>
<?php

$conn = new mysqli(servername, username, password, db);

$id = $_GET['_id'];

$sql = "DELETE FROM harley

WHERE _id = '$id'";

$myquery = $conn->query($sql);
?>

<a href="home.php">BACK</a>