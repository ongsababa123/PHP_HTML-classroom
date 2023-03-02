<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <?php 
        define('servername', 'localhost');
        define('username', 'U_6406021421171');
        define('password', 'n5Sp!Dr()h1qoclL');
        define('db','db_6406021421171');
        $conn = new mysqli(servername, username, password, db);
        $sql = "SELECT * FROM harley  WHERE _id = {$_GET['_id']}";
        $myquery = $conn->query($sql);
        echo "<br>";
        echo $sql;
        $data = $myquery->fetch_array(MYSQLI_ASSOC);
        print_r($data);
    ?>
    <form action="update_ex.php" method="post">
            <h2> Update </h2>
            <input type="hidden" name="_id" value="<?= $_GET['_id']; ?>"><br>
            Namebike <br> <input type="text" name="name_bike" value="<?=$data['name_bike'] ?>"><br>
            colorbike <br> <input type="text" name="color_bike" value="<?=$data['color_bike'] ?>"><br>
            price <br> <input type="text" name="price" value="<?=$data['Price'] ?>"><br>

            <input type="submit" value="ok"name="ok">
    </form>
</body>
</html>