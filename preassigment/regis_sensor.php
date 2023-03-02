<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Sensor</title>
</head>
<body>
    <center>
    <form method="post" action="regis_sensor.php" >
        <h2>Register Sensor </h2><br>
        name sensor <input type="text" name="name_ss" id="name_ss"> <br><br>
        <input type="submit" name="ok" id ="_ok" value ="Register"> <br><br>
    </form>
    <button onclick="document.location='menu.php'">BACK TO MENU</button>
</body>
</html>

<pre>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "preass";
    ?>

<?php
$conn = new mysqli($servername, $username, $password, $db);

$requestMethod = $_SERVER['REQUEST_METHOD'];
// if($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
if ($requestMethod == 'POST'){
    

    $name = $_POST['name_ss'];
    $sql = "INSERT INTO sensor (`name`) VALUES ('$name');";
    $myquery = $conn->query($sql);

    echo "<script>alert('Register success')</script>";

}
        
?>
</pre>
